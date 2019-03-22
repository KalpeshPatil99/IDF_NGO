<?php  

$host ="localhost";
$user ="root";
$pass="";
$db ="indian_dev_foundation";

$conn = mysqli_connect($host,$user,$pass,$db);
mysqli_set_charset($conn,"utf8");
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>