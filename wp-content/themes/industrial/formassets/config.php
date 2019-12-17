<?php
$host = "localhost";
$user = "estaappdb";
$pass = "estaappdb@123";
$dbname = "estaappdb";

$conn = mysqli_connect($host,$user,$pass,$dbname);

if($conn){

}else{
    echo "Error!";
}

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

?>