<?php
   include('config.php');
   session_start();
   
   $user_check = $_SESSION['lu'];
   
   $ses_sql = mysqli_query($conn,"select user from users where user = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['user'];
   
   if(!isset($_SESSION['lu'])){
      header("location:login.php");
   }
?>