<?php
$secure_parameter = true;
$httponly_parameter = true;

setcookie("TestCookie", "DummyValue", time() + 3600, "/", "example.com" ,$secure_parameter, $httponly_parameter);
?>
<html>
<head>
    The web server set cookie with "secure" attribute.
</head>
</html>
