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
			<h2>Competition. It makes everything better.</h2>
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
				<p>Veridian Dynamics is one of the largest companies in America. We're everywhere. In everything. We specialize in products ranging from space exploration, industrial foods, weapons systems, technology and consumer goods. We even make formal wear and a meat-based space tuxedo -- something we haven't yet found a use for. With offices around the world, even in the silly countries, Veridian is working hard to make the world a better place for humans and other sentient beings (for additional information please refer to our detailed cyborg babies section, "All the Love, None of the Diapers").</p>

				<p>Founded by Phinnaeus Veridian in 1842, Veridian Dynamics began as a neighborhood general store specializing in tobacco, killing machines and party favors. During this country's early wars, Veridian equipped America's fighting men. And in later years, Veridian grew exponentially by equipping America's fighting men and their enemies.</p>

				<p>Veridian Dynamics is a company that prides itself on two basic fundamentals: pioneering products that make lives better and leading the world in weapons technology. Our diversified corporation is building a brighter future through our patented system of science and innovation, known as "sciencevation."</p>
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