<?php session_start() ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 3.0 License

Name       : Big Business
Description: A two-column, fixed-width design with a bright color scheme.
Version    : 1.0
Released   : 20120210
-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="description" content="" />
<meta name="keywords" content="" />
<title>Veridian Dynamics</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<div id="wrapper">
	<div id="header">
		<div id="logo">
                        <img id="toplogo" src="images/Veridian.png" alt="" />
		</div>
		<div id="slogan">
			<h2>Bosses. Necessary.</h2>
		</div>
	</div>
	<div id="menu">
		<ul>
			<li class="first current_page_item"><a href="index.php">Home</a></li>
			<li><a href="products.php">Products</a></li>
			<li><a href="employee_list.php">Employees</a></li>
			<li><a href="support.php">Support</a></li>
			<li><a href="about.php">About</a></li>
			<li class="last"><a href="contact.php">Contact</a></li>
		</ul>
		<br class="clearfix" />
	</div>
	<div id="page">
		<div id="content">
			<div class="box" id="content-box1">
				<?php
				//session_start();
				include "dbConfig.php";
				
				if (!$_SESSION["valid_user"])
				{
					// User not logged in, redirect to login page
					Header("Location: login.php");
				}
				
				if ($_GET["op"] == "update")
				{
					$bInputFlag = true;
					
					if ($_POST["firstname"] == "" || $_POST["lastname"] == "" || $_POST["email"] == "" || $_POST["position"] == "")
					{
						$bInputFlag == false;
					}
					
					// If we had problems with the input, exit with error
					if ($bInputFlag == false)
					{
						echo "Problem with your updated info. Please try again.";
					}
					
					else
					{
						// Fields are clear, update user information
						// Setup query
						$query = "UPDATE `users` "
							."SET firstname='".mysql_real_escape_string(htmlentities($_POST["firstname"]))."', "
							."lastname='".mysql_real_escape_string(htmlentities($_POST["lastname"]))."', "
							."email='".mysql_real_escape_string(htmlentities($_POST["email"]))."', "
							."position='".mysql_real_escape_string(htmlentities($_POST["position"]))."', "
							."biography='".mysql_real_escape_string(htmlentities($_POST["biography"]))."' "
							."WHERE id='" . (int)$_SESSION["valid_id"] . "'";
							
						//  Run query
						$result = mysql_query($query);
					}
				}
				
				// Create query
				$query = "SELECT * FROM `users` "
						."WHERE `id`='" . (int)$_SESSION["valid_id"] . "' "
						."LIMIT 1";
								
				// Run query
				$result = mysql_query($query);

				if ( $obj = @mysql_fetch_object($result) )
				{
					$_SESSION["valid_user"] = $obj->firstname . " " . $obj->lastname;
				
					echo "<h3>Welcome, " . $_SESSION["valid_user"] . "</h3>";
				
					echo "<form action=\"?op=update\" method=\"POST\">";
					echo "<table border=\"0\">";
					echo "<tr><td>First name:</td><td><input name=\"firstname\" type=\"text\" size=\"30\" value=\"" . $obj->firstname . "\" /></td></tr>";
					echo "<tr><td>Last name:</td><td><input name=\"lastname\" type=\"text\" size=\"30\" value=\"" . $obj->lastname . "\" /></td></tr>";
					echo "<tr><td>Email:</td><td><input name=\"email\" type=\"text\" size=\"30\" value=\"" . $obj->email . "\" /></td></tr>";
					echo "<tr><td>Position:</td><td><input name=\"position\" type=\"text\" size=\"30\" value=\"" . $obj->position . "\" /></td></tr>";
					echo "</table>";
					echo "Biography:<br /><textarea name=\"biography\" rows=\"10\" cols=\"50\">" . $obj->biography . "</textarea><br /><br />";
					echo "<input type=\"submit\" value=\"Update\">";
					echo "</form><br /><br />";
				}
				
				echo "<p>Last logged in: " . date("r", $_SESSION["valid_time"]);
				?>
			</div>
			<!--<div class="box" id="content-box2">
				content 2
			</div>-->
			<br class="clearfix" />
		</div>
		<div id="sidebar">
			<div class="box">
				<h3>Employees</h3>
				<ol>
				<?php
				session_start();
				
				if (isset($_SESSION["valid_admin"]) && $_SESSION["valid_admin"] == 1)
				{
					echo "<li><a href=\"add_products.php\">Add Products</a></li>";
					echo "<li><a href=\"edit_products.php\">Edit Products</a></li>";
				}
				
				if (isset($_SESSION["valid_id"]))
				{
					echo "<li><a href=\"employees.php\">Profile</a></li>";
					echo "<li><a href=\"logout.php\">Logout</a></li>";
				}
				else
				{
					echo "<li><a href=\"login.php\">Login</a></li>";
					//echo "<li><a href=\"register.php\">Register</a></li>";
				}
				?>
				</ol>
			</div>
			<!--<div class="box">
				side box 2
			</div>-->
		</div>
		<br class="clearfix" />
	</div>
</div>
<div id="footer">
	Copyright (c) 2012 Veridian Dynamics. All rights reserved.
</div>
</body>
</html>	