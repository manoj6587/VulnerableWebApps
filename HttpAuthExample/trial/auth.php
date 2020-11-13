<?php
session_start();
// NTLM sets REMOTE_USER to the current Windows username automatically
$_SESSION['username'] = $_SERVER['REMOTE_USER'];
header("Location: index.php");
?>
