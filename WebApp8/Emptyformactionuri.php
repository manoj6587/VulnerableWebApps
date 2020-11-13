<html>
<head>
<title>Forms with empty action uri</title>
	</head>
	<body>
	<p> Form#1 without any content
		<form action="" method="post">
		First name:<br>
  <input type="text" name="firstname"><br>
  Last name:<br>
  <input type="text" name="lastname">
		</form>
		<p> Form#2 without action uri
	<form action="" method="post">
			<input type="submit"/>
	</form>
	<p> Form#3 action with javascript function
	<FORM action="<cfoutput>#cgi.script_name#?#cgi.query_string#</cfoutput>" method="post">
	<LABEL for="firstname">First name: </LABEL>
	<INPUT type="text" id="firstname">
	<BR>
	<LABEL for="lastname">Last name: </LABEL>
	<INPUT type="text" id="lastname">
	<BR>
<LABEL for="email">email: </LABEL>
	<INPUT type="text" id="email">
	<BR>
	<INPUT type="radio" name="sex" value="Male"> Male<BR>
	<INPUT type="radio" name="sex" value="Female"> Female<BR>
	<INPUT type="submit" value="Send">
	<INPUT type="reset">
</FORM>
<p> Form#4 action with PHP function
	<form method="post" action="<?php echo htmlspecialchars($_SERVER['REQUEST_URI']); ?>"> 
<input type="radio" name="gender" value="male" checked> Male<br>
  <input type="radio" name="gender" value="female"> Female<br>
  <input type="radio" name="gender" value="other"> Other
</form>

</body>
</html>
