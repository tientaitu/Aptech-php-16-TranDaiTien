<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aptech_php_16";

// $conn = mysqli_connect($servername, $username, $password);

// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// } 
// có thể dùng include tranh việc lặp đi lặp lại connect 
include '1-connect.php';

$sql = "CREATE DATABASE aptech_php_16";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}

$conn->close();