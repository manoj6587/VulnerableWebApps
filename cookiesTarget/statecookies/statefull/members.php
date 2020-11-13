<?php
//Connects to your Database 
mysql_connect("localhost", "root", "Password123") or die(mysql_error()); 
mysql_select_db("forks") or die(mysql_error()); 

 //checks cookies to make sure they are logged in 
 if(isset($_COOKIE['ID_your_site'])){ 

 	$username = $_COOKIE['ID_your_site']; 
 	$pass = $_COOKIE['Key_your_site']; 
 	$check = mysql_query("SELECT * FROM users WHERE username = '$username'")or die(mysql_error()); 

 	while($info = mysql_fetch_array( $check )){ 

		//if the cookie has the wrong password, they are taken to the login page 
 		if ($pass != $info['password']){
			header("Location: login.php");
			echo "Member page login area"; 
 		}
		//otherwise they are shown the admin area
		else{
$hour = time() + 3600;
setcookie(RFC6265NoHTTPNOSECURE, "abdefghijklmnqrstuvxyzABDEFGHIJKLMNQRSTUVXYZ0123456789\!\#\$\%\&\'\(\)\*\+\-\.\/\:\<\>\?\@\[\]\^\_\`\{\|\}\~", $hour);
setrawcookie(SESSIONCOOKIE_HTTPANDSECURE, "abdefghijklmnqrstuvxyzABDEFGHIJKLMNQRSTUVXYZ0123456789!#$%&'()*+-./:<>?@[]^_`{|}~\"", $hour, "/", "10.113.195.231", "httponly", "secure");
setrawcookie(SESSIONCOOKIE_OnlyHTTP, "abdefghijklmnqrstuvxyzABDEFGHIJKLMNQRSTUVXYZ0123456789!#$%&'()*+-./:<>?@[]^_`{|}~\"", $hour, "/", "10.113.195.231", "httponly", "");
setrawcookie(SESSIONCOOKIE_OnlySECURE, "abdefghijklmnqrstuvxyzABDEFGHIJKLMNQRSTUVXYZ0123456789!#$%&'()*+-./:<>?@[]^_`{|}~\"", $hour, "/", "10.113.195.231", "", "secure");
		
 			 echo "Admin Area<p>"; 
     echo "Your Content<p>"; 
     echo "<a href=logout.php>Logout</a>"; 
 		}
	}
}

 else{ //if the cookie does not exist, they are taken to the login screen 
	header("Location: login"); 
 }
 ?>
