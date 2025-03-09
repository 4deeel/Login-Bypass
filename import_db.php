<?php
$host = "dpg-cv6kvm2j1k6c73e5si90-a";
$user = "adeel";
$pass = "X90ODjJsPX1mc8G7NwsQJDhqaxNxt6QP"; // Change this!
$db = "respawn_ctf";

// Connect to MySQL
$conn = new mysqli($host, $user, $pass, $db);

// Check for connection errors
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Read the SQL file
$sql = file_get_contents("database.sql");

// Execute the SQL queries
if ($conn->multi_query($sql)) {
    echo "Database imported successfully!";
} else {
    echo "Error importing database: " . $conn->error;
}

// Close connection
$conn->close();
?>
