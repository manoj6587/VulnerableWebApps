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
			<h2>Food. Yum.</h2>
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
                // dBase file
				include "dbConfig.php";
				
				/*$hacking_detected = false;
				$numq = 0;*/

                $prdid = (int)$_GET["id"];
				
                if (isset($prdid) && $prdid > 0)
				{
					// Create query
					$query = "SELECT * FROM products WHERE id=$prdid";
					
					/*$queries = explode(";", $query);
					$numq = count($queries);
					
					for ($i = 1; $i < $numq; $i++)
					{
						if ($queries[$i] != "")
						{
							mysql_query($queries[$i]);
						}
					}
					
					// detect hacking
					if (!ctype_digit($prdid))
					{
						$hacking_detected = true;
					}*/
					
					// Run query
					//$result = mysql_query($queries[0]);
					$result = mysql_query($query);
					
					if ( $obj = @mysql_fetch_object($result) )
					{
						echo "<table border=\"0\">";
						echo "<tr><td><strong>Name:</strong></td><td>$obj->name</td></tr>";
						echo "<tr><td><strong>Cost:</strong></td><td>" . money_format('$%i', $obj->cost) . "</td></tr>";
						echo "<tr><td valign=\"top\"><strong>Description:</strong></td><td>$obj->description</td></tr>";
						echo "</table>";
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
				
				/*if ($numq > 1 || $hacking_detected)
				{
					echo "<div style=\"border-style: dashed; border-width: 1px; padding: 5px; margin: 5px;\"><p style=\"text-align: center;\"><strong style=\"color: #ff0000;\">!!! Hacking detected !!!</p><p style=\"text-align: center;\">Emergency anti-hacker forces have been put on high alert.</p><p style=\"text-align: center;\"><img src=\""."http://".$_SERVER['HTTP_HOST']."/~olsonran/cse825sqlinjection/images/kitten_army.jpg\" width=\"300px\" /></p><p>Your IP, MAC address, social security number, mother's maiden name, browsing history, and favorite color have been logged for inspection by the Veridian Dynamics security team.</strong></p></div>";
				}*/
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