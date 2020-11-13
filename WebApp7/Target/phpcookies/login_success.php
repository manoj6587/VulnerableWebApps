<?php
session_start();
if(!session_is_registered(myusername)){
header("location:main_login.php");
}
?>

<html>
<body>
Login Successful

<form action="http://10.113.196.62/WAS/WAS-4746/Target/phpcookies/welcome.php" method="post">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
Zipcode: <input type="text" name="zipcode"><br>
Phone number: <input type="text" name="phonenumber"><br>
Country: <input type="text" name="country"><br>
Timezone: <input type="text" name="timezone"><br>
<input type="submit">
</form>

</body>
</html>
