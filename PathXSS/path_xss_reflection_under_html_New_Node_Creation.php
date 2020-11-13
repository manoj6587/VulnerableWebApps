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

/*function RandomDomain()
{
        $characters = ’0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ’;
            $randstring = '';
            for ($i = 0; $i < 10; $i++) {
                        $randstring = $characters[rand(0, strlen($characters))];
                            }
                return $randstring;
}

function TempDir ()
{
    return tempnam("/tmp", "FOO");
    unlink($tmpfname);
}
*/
function cookienumber_shuffle()
{
  return rand(1, 10);
}

$Name = Shuffle_Alphabate ();
$myTime = microtime_float();
$secure_parameter = Secure();
$httponly_parameter = HttpOnly();
//$DomainName = RandomDomain();
$DomainName = "10.113.195.231";
//$pathSet = TempDir ();
$pathSet = "/";
$y = cookienumber_shuffle();

for ($x = 0; $x <= $y; $x++) {
setcookie ($Name, $myTime, $myTime + (86400 * 30), $pathSet, $DomainName , $secure_parameter, $httponly_parameter );
} 

//header('Refresh:10; url=http://www.google.com');
header('Content-Type: text/html');
header('Cache-Control: no-cache, must-revalidate');
header('Expires: Sat, 26 Jul 1997 05:00:00 GMT');
header('Connection: Keep-Alive');
header('Keep-Alive: 300');
header('Accept:*/*');
header('Host: host');
header('Accept-Language: en-us');
header('Accept-Encoding: gzip, deflate');
header('User-Agent: Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US;rv:1.9.2.16) Gecko/20110319 Firefox/3.6.16 ( .NET CLR 3.5.30729; .NET4.0E');
header('Cookie: guest_id=v1%3A1328019064; pid=v1%3A1328839311134');
print_r($_SERVER);
//print_r($_COOKIE);

?>

<html>

<head>
<title>Random Links <?=$myTime?></title>
</head>
<body>

<h1>Welcome to page <?=$myTime?></h1>

Click <a href='/PathXSS/random_path_without_sanitize.php/<?=$myTime?>/'>here for random Link</a>
<br>
</body>
</html>
