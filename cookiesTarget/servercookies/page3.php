<?php

/**
 * page3
 * Jika user terdaftar di Cookie, tampung ke variabel $user
 * Jika belum, arahkan ke halaman home.php
 */
if ( isset($_COOKIE['user']) )
{
  $user = $_COOKIE['user'];
}
else
{
  header('Location: home.php');
}

// Cookie Counter-nya bertambah
$_COOKIE['count3'] += 1;

// Reset Cookie dengan nilai baru yang telah bertambah
$view_count = $_COOKIE['count3'];
setcookie('count3', $view_count);

?>
<html>
<head>
  <title><?php echo $user; ?></title>
</head>
<body>
  <h1>user <?php echo $user; ?> is viewing page 3, <?php echo $view_count ?></h1>
  <a href="home.php">home</a><br />
  <a href="page1.php">page 1</a><br />
  <a href="page2.php">page 2</a><br />
  <a href="page3.php">page 3</a><br />
  <a href="destroy.php">destroy cookie</a><br />
</body>
</html>
