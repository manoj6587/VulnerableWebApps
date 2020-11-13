<?php
#if (preg_match("/qss|onEvent/", $_SERVER["HTTP_USER_AGENT"], $_COOKIE["cookie1"])){
if (preg_match("/qss|onEvent|random/", $_COOKIE["cookie1"])){
header('HTTP/1.1 404 Not Found');
//echo "Apache</br>JBoss</br>nginx</br>Tomcat";

?>
<html>
<head>
<title>This is page 1</title>
</head>
<body>
<p>Apache</p>
<p>JBoss</p>
<p>nginx</p>
<p>Tomcat</p>
<p>cookie1 fuzzing with qss onevent or random</p>
</body>
</html>

<?php



exit();
}

elseif (preg_match("/qss|onEvent|random/", $_COOKIE["access_Level"])){
header('HTTP/1.1 403 Forbidden');
//echo 'Apache/2.4.6</br>Apache</br>jboss</br>nginx';
?>
<html>
<head>
<title>This is page 1</title>
</head>
<body>

<p>Apache/2.4.6</p>
<p>Apache</p>
<p>jboss</p>
<p>nginx</p>
<p>cookie access_level fuzzing with qss onevent or random</p>
</body>
</html>
<?php


exit();
}

elseif (preg_match("/qss|onEvent|onmouse|alert|random/", $_SERVER['REQUEST_URI'])){
header('HTTP/1.1 500 Internal Server Error');
//echo 'JBoss Web/7.0.16.Final<br/>Tomcat/6.0.37';
?>
<html>
<head>
<title>This is page 1</title>
</head>
<body>
<p>JBoss Web/7.0.16.Final<p/>
<p>Tomcat/6.0.37</p>
<p>URI fuzzing with qss onevent onmouse or random</p>
</body>
</html>

<?php


exit();
}

elseif (preg_match("/qss|onEvent|random/", $_POST['email'])){

header("HTTP/1.1 200 OK");
//echo 'JBoss Web/7.0.16.Final<br/>Tomcat/6.0.37</br>';

?>
<html>
<head>
<title>This is page 1</title>
</head>
<body>
<p>JBoss Web/7.0.16.Final</p>
<p>Tomcat/6.0.37</p>
<p>post parameter fuzzing with with qss onevent or random</p>
</body>
</html>

<?php
exit();

}
elseif (preg_match("/qss|onEvent|random/", $_POST['zipcode'])){

header("HTTP/1.1 200 OK");
//echo 'JBoss Web/7.0.16.Final<br/>Tomcat/6.0.37</br>';
?>

<html>
<head>
<title>This is page 1</title>
</head>
<body>
<p>JBoss Web/7.0.16.Final<p/>
<p>Tomcat/6.0.37</p>
<p>post parameter zip code fuzzing with qss onevent or random</p>
</body>
</html>


<?php

}

exit();

?>

<html>
<body>
