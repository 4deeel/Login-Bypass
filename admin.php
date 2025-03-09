<?php
session_start();

if (!isset($_COOKIE["admin"]) || $_COOKIE["admin"] != "1") {
    die("Access denied. You are not an admin!");
}

echo "Congratulations! Here is your flag: CTF{SQLi_and_Cookie_Hacking}";
?>
