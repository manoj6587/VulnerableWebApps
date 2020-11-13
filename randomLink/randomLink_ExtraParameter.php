<?php

function microtime_float()
{
   list($usec, $sec) = explode(" ", microtime());
   return ((float)$usec + (float)$sec);
   #return rand(1, 40);
}

function Shuffle_Alphabate ()
{
    $str = 'abcdefghijklmnopqrstuvwxyz';
    return str_shuffle($str);
}

function Secure ()
{
    return .01 * rand(0, 100) >= .5;
}

function HttpOnly ()
{
   return .01 * rand(0, 100) >= .5;
}

//function RandomDomain()
//{
//        $characters = ’0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ’;
//            $randstring = '';
//            for ($i = 0; $i < 10; $i++) {
//                        $randstring = $characters[rand(0, strlen($characters))];
//                            }
//               return $randstring;
//}

//function TempDir ()
//{
//    return tempnam("/tmp", "FOO");
//    unlink($tmpfname);
//}

$Name = Shuffle_Alphabate ();
$myTime = microtime_float();
$secure_parameter = Secure();
$httponly_parameter = HttpOnly();
//$DomainName = RandomDomain();
$DomainName = "10.113.195.231";
//$pathSet = TempDir ();
$pathSet = "/";

setcookie ($Name, $myTime, $myTime + (86400 * 30), $pathSet, $DomainName , $secure_parameter, $httponly_parameter );
setcookie ($Name, $myTime, $myTime + (86400 * 30), $pathSet, $DomainName , $secure_parameter, $httponly_parameter );
setcookie ($Name, $myTime, $myTime + (86400 * 30), $pathSet, $DomainName , $secure_parameter, $httponly_parameter );
setcookie ($Name, $myTime, $myTime + (86400 * 30), $pathSet, $DomainName , $secure_parameter, $httponly_parameter );
setcookie ($Name, $myTime, $myTime + (86400 * 30), $pathSet, $DomainName , $secure_parameter, $httponly_parameter );

?>

<html>

<head>
<title>Random Links <?=$myTime?></title>
</head>
<body>

<h1>Welcome to page <?=$myTime?></h1>
<!--Click <a href='/cassium/AutoExpress/Index.html'>here for Index.html</a>
<br>-->
Click <a href='/randomLink/randomLink_ExtraParameter.php?<?=$myTime?>=<?=$myTime?>&<?=$myTime?>=<?=$myTime?><?=$myTime?>=<?=$myTime?>&<?=$myTime?>=<?=$myTime?>&<?=$myTime?>=<?=$myTime?><?=$myTime?>=<?=$myTime?>&<?=$myTime?>=<?=$myTime?>&<?=$myTime?>=<?=$myTime?>&d=<?=$myTime?>&e=<?=$myTime?>&f=<?=$myTime?>&g=<?=$myTime?>'>here for link a</a>
<br>
Click <a href='/randomLink/randomLink_ExtraParameter.php?<?=$myTime?>=<?=$myTime?>&<?=$myTime?>=<?=$myTime?><?=$myTime?>=<?=$myTime?>&<?=$myTime?>=<?=$myTime?>&<?=$myTime?>=<?=$myTime?><?=$myTime?>=<?=$myTime?>&<?=$myTime?>=<?=$myTime?>&<?=$myTime?>=<?=$myTime?>&d=<?=$myTime?>&e=<?=$myTime?>&f=<?=$myTime?>&g=<?=$myTime?>'>here for link b</a>
<br>
Click <a href='/randomLink/randomLink_ExtraParameter.php?<?=$myTime?>=<?=$myTime?>&<?=$myTime?>=<?=$myTime?><?=$myTime?>=<?=$myTime?>&<?=$myTime?>=<?=$myTime?>&<?=$myTime?>=<?=$myTime?><?=$myTime?>=<?=$myTime?>&<?=$myTime?>=<?=$myTime?>&<?=$myTime?>=<?=$myTime?>&d=<?=$myTime?>&e=<?=$myTime?>&f=<?=$myTime?>&g=<?=$myTime?>'>here for link c</a>
<br>
Click <a href='/randomLink/randomLink_ExtraParameter.php?<?=$myTime?>=<?=$myTime?>&<?=$myTime?>=<?=$myTime?><?=$myTime?>=<?=$myTime?>&<?=$myTime?>=<?=$myTime?>&<?=$myTime?>=<?=$myTime?><?=$myTime?>=<?=$myTime?>&<?=$myTime?>=<?=$myTime?>&<?=$myTime?>=<?=$myTime?>&d=<?=$myTime?>&e=<?=$myTime?>&f=<?=$myTime?>&g=<?=$myTime?>'>here for link d</a>
<br>
Click <a href='/randomLink/randomLink_ExtraParameter.php?<?=$myTime?>=<?=$myTime?>&<?=$myTime?>=<?=$myTime?><?=$myTime?>=<?=$myTime?>&<?=$myTime?>=<?=$myTime?>&<?=$myTime?>=<?=$myTime?><?=$myTime?>=<?=$myTime?>&<?=$myTime?>=<?=$myTime?>&<?=$myTime?>=<?=$myTime?>&d=<?=$myTime?>&e=<?=$myTime?>&f=<?=$myTime?>&g=<?=$myTime?>'>here for link e</a>
<br>
Click <a href='/randomLink/randomLink_ExtraParameter.php?<?=$myTime?>=<?=$myTime?>&<?=$myTime?>=<?=$myTime?><?=$myTime?>=<?=$myTime?>&<?=$myTime?>=<?=$myTime?>&<?=$myTime?>=<?=$myTime?><?=$myTime?>=<?=$myTime?>&<?=$myTime?>=<?=$myTime?>&<?=$myTime?>=<?=$myTime?>&d=<?=$myTime?>&e=<?=$myTime?>&f=<?=$myTime?>&g=<?=$myTime?>'>here for link f</a>
<br>
Click <a href='/randomLink/randomLink_ExtraParameter.php?<?=$myTime?>=<?=$myTime?>&<?=$myTime?>=<?=$myTime?><?=$myTime?>=<?=$myTime?>&<?=$myTime?>=<?=$myTime?>&<?=$myTime?>=<?=$myTime?><?=$myTime?>=<?=$myTime?>&<?=$myTime?>=<?=$myTime?>&<?=$myTime?>=<?=$myTime?>&d=<?=$myTime?>&e=<?=$myTime?>&f=<?=$myTime?>&g=<?=$myTime?>'>here for link g</a>
<br>
Click <a href='/randomLink/randomLink_ExtraParameter.php?<?=$myTime?>=<?=$myTime?>&<?=$myTime?>=<?=$myTime?><?=$myTime?>=<?=$myTime?>&<?=$myTime?>=<?=$myTime?>&<?=$myTime?>=<?=$myTime?><?=$myTime?>=<?=$myTime?>&<?=$myTime?>=<?=$myTime?>&<?=$myTime?>=<?=$myTime?>&d=<?=$myTime?>&e=<?=$myTime?>&f=<?=$myTime?>&g=<?=$myTime?>'>here for link h</a>
<br>
Click <a href='/randomLink/randomLink_ExtraParameter.php?<?=$myTime?>=<?=$myTime?>&<?=$myTime?>=<?=$myTime?><?=$myTime?>=<?=$myTime?>&<?=$myTime?>=<?=$myTime?>&<?=$myTime?>=<?=$myTime?><?=$myTime?>=<?=$myTime?>&<?=$myTime?>=<?=$myTime?>&<?=$myTime?>=<?=$myTime?>&d=<?=$myTime?>&e=<?=$myTime?>&f=<?=$myTime?>&g=<?=$myTime?>'>here for link i</a>
<br>
Click <a href='/randomLink/randomLink_ExtraParameter.php?<?=$myTime?>=<?=$myTime?>&<?=$myTime?>=<?=$myTime?><?=$myTime?>=<?=$myTime?>&<?=$myTime?>=<?=$myTime?>&<?=$myTime?>=<?=$myTime?><?=$myTime?>=<?=$myTime?>&<?=$myTime?>=<?=$myTime?>&<?=$myTime?>=<?=$myTime?>&d=<?=$myTime?>&e=<?=$myTime?>&f=<?=$myTime?>&g=<?=$myTime?>'>here for link j</a>
<br>
Click <a href='/randomLink/randomLink_ExtraParameter.php?<?=$myTime?>=<?=$myTime?>&<?=$myTime?>=<?=$myTime?><?=$myTime?>=<?=$myTime?>&<?=$myTime?>=<?=$myTime?>&<?=$myTime?>=<?=$myTime?><?=$myTime?>=<?=$myTime?>&<?=$myTime?>=<?=$myTime?>&<?=$myTime?>=<?=$myTime?>&d=<?=$myTime?>&e=<?=$myTime?>&f=<?=$myTime?>&g=<?=$myTime?>'>here for link k</a>
<br>
Click <a href='/randomLink/randomLink_ExtraParameter.php?<?=$myTime?>=<?=$myTime?>&<?=$myTime?>=<?=$myTime?><?=$myTime?>=<?=$myTime?>&<?=$myTime?>=<?=$myTime?>&<?=$myTime?>=<?=$myTime?><?=$myTime?>=<?=$myTime?>&<?=$myTime?>=<?=$myTime?>&<?=$myTime?>=<?=$myTime?>&d=<?=$myTime?>&e=<?=$myTime?>&f=<?=$myTime?>&g=<?=$myTime?>'>here for link l</a>
<br>
Click <a href='/randomLink/randomLink_ExtraParameter.php?<?=$myTime?>=<?=$myTime?>&<?=$myTime?>=<?=$myTime?><?=$myTime?>=<?=$myTime?>&<?=$myTime?>=<?=$myTime?>&<?=$myTime?>=<?=$myTime?><?=$myTime?>=<?=$myTime?>&<?=$myTime?>=<?=$myTime?>&<?=$myTime?>=<?=$myTime?>&d=<?=$myTime?>&e=<?=$myTime?>&f=<?=$myTime?>&g=<?=$myTime?>'>here for link m</a>
<br>
Click <a href='/randomLink/randomLink_ExtraParameter.php?<?=$myTime?>=<?=$myTime?>&<?=$myTime?>=<?=$myTime?><?=$myTime?>=<?=$myTime?>&<?=$myTime?>=<?=$myTime?>&<?=$myTime?>=<?=$myTime?><?=$myTime?>=<?=$myTime?>&<?=$myTime?>=<?=$myTime?>&<?=$myTime?>=<?=$myTime?>&d=<?=$myTime?>&e=<?=$myTime?>&f=<?=$myTime?>&g=<?=$myTime?>'>here for link n</a>
<br>
Click <a href='/randomLink/randomLink_ExtraParameter.php?<?=$myTime?>=<?=$myTime?>&<?=$myTime?>=<?=$myTime?><?=$myTime?>=<?=$myTime?>&<?=$myTime?>=<?=$myTime?>&<?=$myTime?>=<?=$myTime?><?=$myTime?>=<?=$myTime?>&<?=$myTime?>=<?=$myTime?>&<?=$myTime?>=<?=$myTime?>&d=<?=$myTime?>&e=<?=$myTime?>&f=<?=$myTime?>&g=<?=$myTime?>'>here for link o</a>
<br>
Click <a href='/randomLink/randomLink_ExtraParameter.php?<?=$myTime?>=<?=$myTime?>&<?=$myTime?>=<?=$myTime?><?=$myTime?>=<?=$myTime?>&<?=$myTime?>=<?=$myTime?>&<?=$myTime?>=<?=$myTime?><?=$myTime?>=<?=$myTime?>&<?=$myTime?>=<?=$myTime?>&<?=$myTime?>=<?=$myTime?>&d=<?=$myTime?>&e=<?=$myTime?>&f=<?=$myTime?>&g=<?=$myTime?>'>here for link p</a>
<br>
Click <a href='/randomLink/randomLink_ExtraParameter.php?<?=$myTime?>=<?=$myTime?>&<?=$myTime?>=<?=$myTime?><?=$myTime?>=<?=$myTime?>&<?=$myTime?>=<?=$myTime?>&<?=$myTime?>=<?=$myTime?><?=$myTime?>=<?=$myTime?>&<?=$myTime?>=<?=$myTime?>&<?=$myTime?>=<?=$myTime?>&d=<?=$myTime?>&e=<?=$myTime?>&f=<?=$myTime?>&g=<?=$myTime?>'>here for link q</a>
<br>
Click <a href='/randomLink/randomLink_ExtraParameter.php?<?=$myTime?>=<?=$myTime?>&<?=$myTime?>=<?=$myTime?><?=$myTime?>=<?=$myTime?>&<?=$myTime?>=<?=$myTime?>&<?=$myTime?>=<?=$myTime?><?=$myTime?>=<?=$myTime?>&<?=$myTime?>=<?=$myTime?>&<?=$myTime?>=<?=$myTime?>&d=<?=$myTime?>&e=<?=$myTime?>&f=<?=$myTime?>&g=<?=$myTime?>'>here for link r</a>
<br>
Click <a href='/randomLink/randomLink_ExtraParameter.php?<?=$myTime?>=<?=$myTime?>&<?=$myTime?>=<?=$myTime?><?=$myTime?>=<?=$myTime?>&<?=$myTime?>=<?=$myTime?>&<?=$myTime?>=<?=$myTime?><?=$myTime?>=<?=$myTime?>&<?=$myTime?>=<?=$myTime?>&<?=$myTime?>=<?=$myTime?>&d=<?=$myTime?>&e=<?=$myTime?>&f=<?=$myTime?>&g=<?=$myTime?>'>here for link s</a>
<br>
Click <a href='/randomLink/randomLink_ExtraParameter.php?<?=$myTime?>=<?=$myTime?>&<?=$myTime?>=<?=$myTime?><?=$myTime?>=<?=$myTime?>&<?=$myTime?>=<?=$myTime?>&<?=$myTime?>=<?=$myTime?><?=$myTime?>=<?=$myTime?>&<?=$myTime?>=<?=$myTime?>&<?=$myTime?>=<?=$myTime?>&d=<?=$myTime?>&e=<?=$myTime?>&f=<?=$myTime?>&g=<?=$myTime?>'>here for link t</a>
<br>
Click <a href='/randomLink/randomLink_ExtraParameter.php?<?=$myTime?>=<?=$myTime?>&<?=$myTime?>=<?=$myTime?><?=$myTime?>=<?=$myTime?>&<?=$myTime?>=<?=$myTime?>&<?=$myTime?>=<?=$myTime?><?=$myTime?>=<?=$myTime?>&<?=$myTime?>=<?=$myTime?>&<?=$myTime?>=<?=$myTime?>&d=<?=$myTime?>&e=<?=$myTime?>&f=<?=$myTime?>&g=<?=$myTime?>'>here for link u</a>
<br>
Click <a href='/randomLink/randomLink_ExtraParameter.php?<?=$myTime?>=<?=$myTime?>&<?=$myTime?>=<?=$myTime?><?=$myTime?>=<?=$myTime?>&<?=$myTime?>=<?=$myTime?>&<?=$myTime?>=<?=$myTime?><?=$myTime?>=<?=$myTime?>&<?=$myTime?>=<?=$myTime?>&<?=$myTime?>=<?=$myTime?>&d=<?=$myTime?>&e=<?=$myTime?>&f=<?=$myTime?>&g=<?=$myTime?>'>here for link v</a>
<br>
Click <a href='/randomLink/randomLink_ExtraParameter.php?<?=$myTime?>=<?=$myTime?>&<?=$myTime?>=<?=$myTime?><?=$myTime?>=<?=$myTime?>&<?=$myTime?>=<?=$myTime?>&<?=$myTime?>=<?=$myTime?><?=$myTime?>=<?=$myTime?>&<?=$myTime?>=<?=$myTime?>&<?=$myTime?>=<?=$myTime?>&d=<?=$myTime?>&e=<?=$myTime?>&f=<?=$myTime?>&g=<?=$myTime?>'>here for link w</a>
<br>
Click <a href='/randomLink/randomLink_ExtraParameter.php?<?=$myTime?>=<?=$myTime?>&<?=$myTime?>=<?=$myTime?><?=$myTime?>=<?=$myTime?>&<?=$myTime?>=<?=$myTime?>&<?=$myTime?>=<?=$myTime?><?=$myTime?>=<?=$myTime?>&<?=$myTime?>=<?=$myTime?>&<?=$myTime?>=<?=$myTime?>&d=<?=$myTime?>&e=<?=$myTime?>&f=<?=$myTime?>&g=<?=$myTime?>'>here for link x</a>
<br>
Click <a href='/randomLink/randomLink_ExtraParameter.php?<?=$myTime?>=<?=$myTime?>&<?=$myTime?>=<?=$myTime?><?=$myTime?>=<?=$myTime?>&<?=$myTime?>=<?=$myTime?>&<?=$myTime?>=<?=$myTime?><?=$myTime?>=<?=$myTime?>&<?=$myTime?>=<?=$myTime?>&<?=$myTime?>=<?=$myTime?>&d=<?=$myTime?>&e=<?=$myTime?>&f=<?=$myTime?>&g=<?=$myTime?>'>here for link y</a>
<br>
Click <a href='/randomLink/randomLink_ExtraParameter.php?<?=$myTime?>=<?=$myTime?>&<?=$myTime?>=<?=$myTime?><?=$myTime?>=<?=$myTime?>&<?=$myTime?>=<?=$myTime?>&<?=$myTime?>=<?=$myTime?><?=$myTime?>=<?=$myTime?>&<?=$myTime?>=<?=$myTime?>&<?=$myTime?>=<?=$myTime?>&d=<?=$myTime?>&e=<?=$myTime?>&f=<?=$myTime?>&g=<?=$myTime?>'>here for link z</a>
<br>

</body>
</html>