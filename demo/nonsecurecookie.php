<?php

setcookie("LamCookie", "123", time()+3600, "/", "example.com", 0, 1); 
?>
<html>
<head>
    The web server does not set cookie with "secure" attribute.
</head>
</html>
