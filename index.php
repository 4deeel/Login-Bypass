<?php
session_start();
$host = "localhost";
$user = "root";
$pass = "yourpassword"; // Change this!
$db = "ctf_challenge";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // 🚨 Intentional SQL Injection vulnerability! 🚨
    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        
        setcookie("admin", $row["is_admin"], time() + 3600, "/");
        
        echo "Welcome, " . htmlspecialchars($username) . "!<br>";
        echo "Check your cookies for admin access.";
    } else {
        echo "Invalid credentials!";
    }
}
?>

<form method="POST">
    Username: <input type="text" name="username"><br>
    Password: <input type="password" name="password"><br>
    <input type="submit" value="Login">
</form>
