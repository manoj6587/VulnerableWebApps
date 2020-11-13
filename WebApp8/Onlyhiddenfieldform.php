<html>
<head>
<title>My Page</title>
</head>
<body>
<form name="myform" action="welcome.php" method="POST">
<div align="center">
<input type="text" size="25" value="Enter your name here!">
<input type="hidden" name="Language" value="English">
<input type="hidden" name="Language_1" value="Hindi">
<input type="hidden" name="Language_2" value="Marathi">
<input type="hidden" name="Language_3" value="Science">
<input type="hidden" name="Language_4" value="Maths">
<br><br>
</div>
</form>
<br>
<form name="myform" action="welcome.php" method="POST">
<div align="center">
This is outside the area<br><br>
<textarea cols="40" rows="5" name="myname">
Now we are inside the area - which is nice.
</textarea>
<br><br>
And now we are outside the area again.
</div>
</form>



</body>
</html>
