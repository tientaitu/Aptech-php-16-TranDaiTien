
<!-- Chỉ cần thay GET <=> POST -->

<?php
// echo "Đăng Nhập Thành Công <br>";
// echo $_POST['email'];
// echo"<br>";
// echo $_POST['pass'];
if ($_POST['email']==="trandaitien1516@gmail.com" & $_POST['password']==="tien"){
  echo "Đăng Nhập Thành Công <br>";}
  else{
     header("Location: http://localhost/Aptech-PHP-15-Tien/php/2018-10-24/form.php");
    exit;
} 
?> 
