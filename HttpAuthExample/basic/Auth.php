<?php

$username = null;
$password = null;

$string1 = "basic";
$string2 = "basic";

// mod_php
if (isset($_SERVER['PHP_AUTH_USER'])) {
    $username = $_SERVER['PHP_AUTH_USER'];
    $password = $_SERVER['PHP_AUTH_PW'];

// most other servers
} elseif (isset($_SERVER['HTTP_AUTHORIZATION'])) {

        if (strpos(strtolower($_SERVER['HTTP_AUTHORIZATION']),'basic')===0)
          list($username,$password) = explode(':',base64_decode(substr($_SERVER['HTTP_AUTHORIZATION'], 6)));

}

//if (is_null($username)) {

//if (($username==$string1) && ($password==$string2)) {

if (!($username==$string1) && ($password==$string2)) {
    header('WWW-Authenticate: Basic realm="My Realm"');
    header('HTTP/1.0 401 Unauthorized');
    echo 'Text to send if user hits Cancel button';

    die();

} else {
    echo "<p>Hello {$username}.</p>";
    echo "<p>You entered {$password} as your password.</p>";
//echo "<a href="1.txt">1</a>";
//echo "<a href="2.txt">2</a>";
//echo "<a href="3.txt">3</a>";
}

?>
