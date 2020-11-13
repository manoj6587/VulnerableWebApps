
<?php
if( $_GET["name"] || $_GET["email"] || $_GET["contact"])
{
echo "Welcome: ". $_GET['name']. "<br />";
echo "Your Email is: ". $_GET["email"]. "<br />";
echo "Your Mobile No. is: ". $_GET["contact"];
}

if( $_POST["name"] || $_POST["email"] || $_POST["contact"])
{
echo "Welcome: ". $_POST['name']. "<br />";
echo "Your Email is: ". $_POST["email"]. "<br />";
echo "Your Mobile No. is: ". $_POST["contact"];
}

?>

<html>
   <body>
   <form action="<?php $_PHP_SELF ?>" method="GET">
<input type="text" name="name" placeholder="Your Name"></input><br/>
<input type="text" name="email" placeholder="Your Email"></input><br/>
<input type="text" name="contact" placeholder="Your Mobile"></input><br/>
<input type="submit" name="submit" value="Submit"></input>
</form>      
      <br>
	  <br>
<form action="<?php $_PHP_SELF ?>" method="POST">
<input type="text" name="name" placeholder="Your Name"></input><br/>
<input type="text" name="email" placeholder="Your Email"></input><br/>
<input type="text" name="contact" placeholder="Your Mobile"></input><br/>
<input type="submit" name="submit" value="Submit"></input>
</form>
<br>
<br>

<a href="getmethod.php">Form submission with GET method!</a><br>
<a href="postmethod.php">Form submission with POST method!</a>

</body>
</html>
