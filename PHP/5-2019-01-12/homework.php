<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aptech_php_16_css1";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";
$sql = " SELECT users.name,users.email,users.password, roles.name as  role_name
FROM users, roles
WHERE users.role = roles.id;";
$result = mysqli_query($conn, $sql);
// var_dump($result);
if (mysqli_num_rows($result) > 0) {
    // var_dump(mysqli_num_rows($result));}
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        // var_dump($row);
        echo  "Name: " . $row["name"]. " " ." - Email: ".$row["email"]." - Pasword: ".$row["password"]." - role_name: " .$row["role_name"].  "<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);


