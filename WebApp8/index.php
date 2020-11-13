<!DOCTYPE html>
<?php
  if( $_GET["first_name"] || $_GET["last_name"] || $_GET["description"] || $_GET["maths"] || $_GET["physics"] || $_GET["subject"] || $_GET["subject1"] || $_GET["fileupload"] || $_GET["pagename"])
  {
       echo "Welcome: ". $_GET['first_name']. "<br />";
       echo "Last Name is: ". $_GET["last_name"]. "<br />";
       echo "Description: ". $_GET['description']. "<br />";
       echo "Selected subject: ". $_GET["maths"]. "<br />";
       echo "Selected subject: ". $_GET['physics']. "<br />";
       echo "Optional subject: ". $_GET["subject"]. "<br />";
       echo "Optional subject: ". $_GET['subject1']. "<br />";
       echo "Uploaded file name: ". $_GET["fileupload"]. "<br />";
       echo "page name. is: ". $_GET["pagename"];
  }
  if( $POST["first_name"] || $POST["last_name"] || $POST["description"] || $POST["maths"] || $POST["physics"] || $POST["subject"] || $POST["subject1"] || $POST["fileupload"] || $POST["pagename"])
  {
       echo "Welcome: ". $POST['first_name']. "<br />";
	echo "Middle Name: ". $POST['Middle_name']. "<br />";
       echo "Last Name is: ". $POST["last_name"]. "<br />";
       echo "Description: ". $POST['description']. "<br />";
       echo "Selected subject: ". $POST["maths"]. "<br />";
       echo "Selected subject: ". $POST['physics']. "<br />";
       echo "Optional subject: ". $POST["subject"]. "<br />";
       echo "Optional subject: ". $POST['subject1']. "<br />";
       echo "Uploaded file name: ". $POST["fileupload"]. "<br />";
       echo "page name. is: ". $POST["pagename"];
  }
?>
<html>
<head>
<title>Different form types:</title>
</head>
<body>
<h2>Form with GET method.. Action URI--> SELF Submit </h2>
<form action="<?php $_PHP_SELF ?>" method="GET">
First name:  <input type="text" name="first_name" value="FName" size=10  maxlength=20 /><br>
Last name:  <input type="text" name="last_name" value="LName" size=10  maxlength=20 /><br>
Enter description here: <textarea rows="5" cols="50" name="description"></textarea><br>
Maths : <input type="checkbox" name="maths" value="on"><br>
Physics: <input type="checkbox" name="physics" value="on"> <br>
Arts: <input type="radio" name="subject" value="maths"> <br>
Commerce: <input type="radio" name="subject1" value="physics"> <br>
<option value="Physics">Science</option> <br>
Upload your file: <input type="file" name="fileupload" accept="image/*" /> <br>
Hidden content : <input type="hidden" name="pagename" value="10" /><br>
<input type="submit" name="submit" value="Submit" />
<input type="reset" name="reset"  value="Reset" />
<input type="button" name="ok" value="OK"  />
<input type="image" name="imagebutton" src="/html/images/logo.png" />
</form><br>
<p>#############################################################</p>
<h2>Form with POST method...Action URI--> SELF Submit  </h2>
<form action="<?php $_PHP_SELF ?>" method="POST">
First name:  <input type="text" name="first_name" value="FName" size=10  maxlength=20 /><br>
Middle name:  <input type="text" name="Middle_name" value="MName" size=10  maxlength=20         /><br>
Last name:  <input type="text" name="last_name" value="LName" size=10  maxlength=20 /><br>
Enter description here: <textarea rows="5" cols="50" name="description"></textarea><br>
Maths : <input type="checkbox" name="maths" value="on"><br>
Physics: <input type="checkbox" name="physics" value="on"> <br>
Arts: <input type="radio" name="subject" value="maths"> <br>
Commerce: <input type="radio" name="subject1" value="physics"> <br>
<option value="Physics">Science</option> <br>
Upload your file: <input type="file" name="fileupload" accept="image/*" /> <br>
Hidden content : <input type="hidden" name="pagename" value="10" /><br>
<input type="submit" name="submit" value="Submit" />
<input type="reset" name="reset"  value="Reset" />
<input type="button" name="ok" value="OK"  />
<input type="image" name="imagebutton" src="/html/images/logo.png" />
</form><br>
<p>#############################################################</p>
<h4>Login Form@@@</h4>
<form >
User ID :  <input type="text" name="user_id" />
<br>
Password:  <input type="password" name="password" />
<input type="submit" name="submit" value="Submit" />
</form>
<p>#############################################################</p>

<a href="first.php"> Link to another form which has different action URl</a><br>
<a href="Onlyhiddenfieldform.php"> Hidden field form</a><br>
<a href="Loginandregistrationform.php"> Login and Registration form</a><br>
<a href="Emptyformactionuri.php"> Form action URI with different mode</a><br>
<a href="Actionurijavascriptfunction.php">Form action URI Javascript Function</a><br>
<a href="Dynamicfieldwithsamename.php"> Dynamic form field with same name</a><br>
<a href="Dynamicfieldwithdiffname.php"> Dynamic form field with different name</a><br>
</body>
</html>
