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
$email=$_POST['email'];
$password=$_POST['password'];

$sql = "SELECT * FROM users
WHERE email='$email'
AND password='$password'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "Dăng Nhap Thanh Cong";
} else {
    echo "Dăng Nhap Khong Thanh Cong";
}










// while($row = mysqli_fetch_assoc($result)) {
//     if ($_POST['email']===$row["email"] & $_POST['password']===$row["password"]){
//         echo "Đăng Nhập Thành Công <br>";}
//         else{
//              echo "Đăng Nhập sai <br>";
//             // header("Location: http://localhost/Aptech-PHP-15-Tien/php/2018-10-29/5-Form-DN.php");
//           exit;
//       } 
// }



// if (mysqli_num_rows($result) > 0) {
//     // output data of each row
//     while($row = mysqli_fetch_assoc($result)) {
//         echo "id: " . $row["id"]. "Name: " . $row["name"]. " EMAIL " . $row["email"]."password ".$row["password"]. "<br>";
//     }
// } else {
//     echo "0 results";
// }

mysqli_close($conn);
