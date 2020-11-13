<?php
   include('config.php');
session_id("abdefghijklmnqrstuvxyzABDEFGHIJKLMNQRSTUVXYZ0123456789-");
   session_start();

$hour = time() + 3600;	
setrawcookie( 'RFC6265_HTTPONLY', "abdefghijklmnqrstuvxyzABDEFGHIJKLMNQRSTUVXYZ0123456789!#$%&'()*+-./:<>?@[]^_`{|}~\"", $hour, '/', '10.113.195.231', 0, 1);
setrawcookie( 'RFC6265_SECUREONLY', "abdefghijklmnqrstuvxyzABDEFGHIJKLMNQRSTUVXYZ0123456789!#$%&'()*+-./:<>?@[]^_`{|}~\"", $hour, '/', '10.113.195.231', 1, 0);
setrawcookie( 'RFC6265_SECUREHTTP', "abdefghijklmnqrstuvxyzABDEFGHIJKLMNQRSTUVXYZ0123456789!#$%&'()*+-./:<>?@[]^_`{|}~\"", $hour, '/', '10.113.195.231', 1, 1);
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($db,"select username from admin where username = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['username'];

   
   if(!isset($_SESSION['login_user'])){
      header("location:login.php");
      die();
   }
?>
