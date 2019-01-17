<?php
function connect_DB($serverName = "localhost", $userName = "root", $password = "", $dbname = "aptech_php_16_ss1")
{
  $conn = mysqli_connect($serverName, $userName, $password, $dbname);
  if (!$conn) {
    die("Connection failed : " . $mysqli_connect_error());
  }
  return $conn;
}