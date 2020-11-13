<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>SQL Injection - Login bypass</title>
	</head>
	
	<body>

<?php
/*
session_start();
// dBase file
include "dbConfig.php";


if ($_GET["op"] == "login")
 {

 $user = stripslashes ($_POST['username']);
 $pass = stripslashes ($_POST['password']);

 if (!$user || !$pass)
 	{
 	echo "You need to provide a username and password.";
 	}
 	
 // Create query
 $q = "SELECT * FROM `users` WHERE `username` = '{$user}' AND `password` ='{$pass}'";

 // Run query
 $r = mysql_query($q);

 if ( $obj = @mysql_fetch_object($r) )
 	{
 	// Login good, create session variables
 	$_SESSION["valid_id"] = $obj->id;
 	$_SESSION["valid_user"] = $user;
 	$_SESSION["valid_time"] = time();

 	// Redirect to member page
 	Header("Location: members.php");
 	}
 else
 	{
 	// Login not successful
 	echo "Sorry, could not log you in. Wrong login information.";
 	}
 }
//else
 //{
//If all went right the Web form appears and users can log in
 echo "<form action=\"?op=login\" method=\"POST\">";
 echo "Username: <input name=\"username\" size=\"15\"><br />";
 echo "Password: <input type=\"password\" name=\"password\" size=\"8\"><br />";
 echo "<input type=\"submit\" value=\"Login\">";
 echo "</form>";
 echo "<br /><a href=\"register.php\">register</a>";
 //}*/
?>
	</body>
</html>		