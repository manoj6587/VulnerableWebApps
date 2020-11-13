<?php
$former_user = $_COOKIE['user'];
setcookie('user', '') ? $user_msg = "Destroyed!" : $user_msg = "I Dont know what hapen";
setcookie('count1', '') ? $page1_msg = "Page 1 counter resetted!" : $page1_msg = "I Dont know what hapen";
setcookie('count2', '') ? $page2_msg = "Page 2 counter resetted!" : $page2_msg = "I Dont know what hapen";
setcookie('count3', '') ? $page3_msg = "Page 3 counter resetted!" : $page3_msg = "I Dont know what hapen";;
?>
<html>
<head>
  <title>Hapus Cookie</title>
</head>
<body>
<ul>
  <li><?php echo "{$former_user} {$user_msg}" ?></li>
  <li><?php echo $page1_msg ?></li>
  <li><?php echo $page2_msg ?></li>
  <li><?php echo $page3_msg ?></li>
</ul>
<a href="home.php">home</a><br />
<body>
</html>
