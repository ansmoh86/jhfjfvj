<?php
$host = "localhost";
$user = "estaappdb";
$pass = "estaappdb@123";
$dbname = "estaappdb";
$conn = mysqli_connect($host,$user,$pass,$dbname);
if($conn){
}else{
	echo "Error : ".mysql_error($conn);
}
?>