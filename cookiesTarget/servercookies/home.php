<?php
/**
 * Cookie sebagai counter berapa banyak seorang random user melihat halaman.
 *
 * Ini adalah sekumpulan halaman web yang terdiri dari home.php page1.php
 * page2.php page3.php dan destroy.php
 *
 * Cookie dimulai pada halaman home.php
 * Cookie dihapus pada halaman destroy.php
 */

 /**
  * Initialize all User's Cookie
  * Initialize all Cookie's Counter
  *
  * Jika sudah ada Cookie tersimpan, pakai yang tersimpan
  */
if ( !isset($_COOKIE['user']) )
{

  // Membuat random user
  $random_id = rand(1, 25);
  $generate_user_id = "user_{$random_id}";

  // Memulai Counter dari 0
  $view_count = 0;
  $page1_view = $view_count;
  $page2_view = $view_count;
  $page3_view = $view_count;

  // Memulai Cookie
  setcookie('user', $generate_user_id,0,'/; httpOnly; samesite=strict');
  setcookie('count1', $view_count);
  setcookie('count2', $view_count);
  setcookie('count3', $view_count);

}
else
{
  // Menggunakan Cookie yang sudah tersimpan
  $generate_user_id = $_COOKIE['user'];
  $page1_view = $_COOKIE['count1'];
  $page2_view = $_COOKIE['count2'];
  $page3_view = $_COOKIE['count3'];
}

/**
 * Tampilan HTML dimulai dibawah
 */
?>

<html>
<head>
  <title><?php echo $generate_user_id; ?></title>
</head>
<body>
  <h1><?php echo $generate_user_id?></h1><br />
  <ul>
    <li>Page 1 view total = <?php echo $page1_view ?></li>
    <li>Page 2 view total = <?php echo $page2_view ?></li>
    <li>Page 3 view total = <?php echo $page3_view ?></li>
  </ul>
  <a href="page1.php">page 1</a><br />
  <a href="page2.php">page 2</a><br />
  <a href="page3.php">page 3</a><br />
  <a href="destroy.php">destroy cookie</a><br />
</body>
</html>
