<?php
$servername ="localhost";
$username ="root";
$password="";
$dbname="aptech_php_15_css4";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "INSERT INTO users (name, email, password)
VALUES 
('tran dai tien','trandaitien@gmail.com',1),
('chi tin','tin@gmail.com',12),
('nam coi','namcoi@gmail.com',123),
('le duy','duy@gmail.com',1234),
('nguyen phuoc','phuoc@gmail.com',12345)";


if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
