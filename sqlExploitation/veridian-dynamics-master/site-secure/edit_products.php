<?php
	session_start();
	
	// dBase file
	include "dbConfig.php";
	
	if (!$_SESSION["valid_user"] || $_SESSION["valid_admin"] != 1)
	{
		// User not logged in, redirect to login page
		Header("Location: index.php");
	}
	
	if ($_GET["op"] == "delete")
	{
		// Setup query
		$query = "DELETE FROM `products` "
				."WHERE id='" . (int)$_POST["id"] . "'";
			
		//  Run query
		$result = mysql_query($query);
		
		Header("Location: edit_products.php");
	}
?>

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
			<h2>We're sorry. You're welcome.</h2>
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
				
				if ($_GET["op"] == "update")
				{
					$bInputFlag = true;
					
					foreach ( $_POST as $field )
					{
						if ($field == "")
						{
							$bInputFlag = false;
						}
					}
					
					if ($bInputFlag == true)
					{
						// Fields are clear, update user information
						// Setup query
						$query = "UPDATE `products` "
							."SET name='".mysql_real_escape_string(htmlentities($_POST["name"]))."', "
							."cost='".mysql_real_escape_string(htmlentities($_POST["cost"]))."', "
							."description='".mysql_real_escape_string(htmlentities($_POST["description"]))."' "
							."WHERE id='" . (int)$_POST["id"] . "'";
						
						//  Run query
						$result = mysql_query($query);
					}
					else
					{
						echo "Problem with your updated info. Please try again.";
					}
					
					echo "<form action=\"?op=update\" method=\"POST\">";
					echo "<table border=\"0\">";
					echo "<tr><td><input name=\"id\" type=\"hidden\" size=\"10\" value=\"" . mysql_real_escape_string(htmlentities($_POST["id"])) . "\" /></td></tr>";
					echo "<tr><td>Name:</td><td><input name=\"name\" type=\"text\" size=\"30\" value=\"" . mysql_real_escape_string(htmlentities($_POST["name"])) . "\" /></td></tr>";
					echo "<tr><td>Cost:</td><td><input name=\"cost\" type=\"text\" size=\"30\" value=\"" . mysql_real_escape_string(htmlentities($_POST["cost"])) . "\" /></td></tr>";
					echo "</table>";
					echo "Description:<br /><textarea name=\"description\" rows=\"10\" cols=\"50\">" . mysql_real_escape_string(htmlentities($_POST["description"])) . "</textarea><br /><br />";
					echo "<table border=\"0\"><tr><td><input type=\"submit\" value=\"Update\"></form></td>";
					echo "<td><form action=\"?op=delete\" method=\"POST\"><input name=\"id\" type=\"hidden\" size=\"10\" value=\"" . (int)$_POST["id"] . "\" />";
					echo "<input type=\"submit\" value=\"Delete\"></form></td></tr></table>";
					echo "<br /><br />";
				}
				
				elseif ($_GET["op"] == "delete")
				{
					// Setup query
					$query = "DELETE FROM `products` "
							."WHERE id='" . (int)$_POST["id"] . "'";
						
					//  Run query
					$result = mysql_query($query);
					
					Header("Location: edit_products.php");
				}
				
				elseif (isset($_GET["id"]) && $_GET["id"] > 0)
				{
					// Create query
					$query = "SELECT * FROM `products` WHERE id='" . (int)$_GET["id"] . "'";

					// Run query
					$result = mysql_query($query);
					
					if ( $obj = @mysql_fetch_object($result) )
					{
						echo "<form action=\"?op=update\" method=\"POST\">";
						echo "<table border=\"0\">";
						echo "<tr><td><input name=\"id\" type=\"hidden\" size=\"10\" value=\"" . $obj->id . "\" /></td></tr>";
						echo "<tr><td>Name:</td><td><input name=\"name\" type=\"text\" size=\"30\" value=\"" . $obj->name . "\" /></td></tr>";
						echo "<tr><td>Cost:</td><td><input name=\"cost\" type=\"text\" size=\"30\" value=\"" . $obj->cost . "\" /></td></tr>";
						echo "</table>";
						echo "Description:<br /><textarea name=\"description\" rows=\"10\" cols=\"50\">" . $obj->description . "</textarea><br /><br />";
						echo "<table border=\"0\"><tr><td><input type=\"submit\" value=\"Update\"></form></td>";
						echo "<td><form action=\"?op=delete\" method=\"POST\"><input name=\"id\" type=\"hidden\" size=\"10\" value=\"" . $obj->id . "\" />";
						echo "<input type=\"submit\" value=\"Delete\"></form></td></tr></table>";
						echo "<br /><br />";
					}
				}

				else
				{
					// Create query
					$query = "SELECT * FROM `products` ORDER BY name";

					// Run query
					$result = mysql_query($query);
					
					$num = mysql_numrows($result);
					
					for ($i = 0; $i < $num; $i++)
					{
						echo "<a href=\"?id=" . mysql_result($result, $i, "id") . "\"><strong>" . mysql_result($result, $i, "name") . "</strong></a><br />";
						echo mysql_result($result, $i, "description") . "<br />";
						echo money_format('$%i', mysql_result($result, $i, "cost")) . "<br /><br />";
					}
				}
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
				//session_start();
				
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