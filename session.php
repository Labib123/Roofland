<?php
   include('connectDB.php');
   session_start();

   $applicant_check = $_SESSION['login_applicant'];

   $session_sql = mysqli_query($connection,"select username from applicant where username = '$user_check_query' ");

   $row = mysqli_fetch_array($session_sql,MYSQLI_ASSOC);

   $login_session = $row['username'];

   if(!isset($applicant_check)){
      header("location:login.php");
      die();
   }
?>
