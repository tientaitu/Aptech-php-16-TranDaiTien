<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aptech_php_15_css4";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";