<?php

function microtime_float()
{
   #list($usec, $sec) = explode(" ", microtime());
    #return ((float)$usec + (float)$sec);
   return rand(1, 20);
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

function RandomDomain()
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

$Name = Shuffle_Alphabate ();
$myTime = microtime_float();
$secure_parameter = Secure();
$httponly_parameter = HttpOnly();
$DomainName = RandomDomain();
$pathSet = TempDir ();

setcookie ($Name, $myTime, $myTime + (86400 * 30), $pathSet, $DomainName , $secure_parameter, $httponly_parameter );
setcookie ($Name, $myTime, $myTime + (86400 * 30), $pathSet, $DomainName , $secure_parameter, $httponly_parameter );
setcookie ($Name, $myTime, $myTime + (86400 * 30), $pathSet, $DomainName , $secure_parameter, $httponly_parameter );
setcookie ($Name, $myTime, $myTime + (86400 * 30), $pathSet, $DomainName , $secure_parameter, $httponly_parameter );
setcookie ($Name, $myTime, $myTime + (86400 * 30), $pathSet, $DomainName , $secure_parameter, $httponly_parameter );

//Header Area
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
print_r($_COOKIE);

?>

<html>

<head>
<title>Random Links <?=$myTime?></title>
</head>
<body>

<h1>Welcome to page <?=$myTime?></h1>
Click <a href='/cassium/AutoExpress/Index.html'>here for Index.html</a>
<br>
Click <a href='/cassium/AutoExpress/randomLink/?a=<?=$myTime?>&b=<?=$myTime?>&c=<?=$myTime?>'>here for link a</a>
<br>
Click <a href='/cassium/AutoExpress/randomLink/?b=<?=$myTime?>&h=<?=$myTime?>&f=<?=$myTime?>'>here for link b</a>
<br>
Click <a href='/cassium/AutoExpress/randomLink/?c=<?=$myTime?>&l=<?=$myTime?>&i=<?=$myTime?>'>here for link c</a>
<br>
Click <a href='/cassium/AutoExpress/randomLink/?d=<?=$myTime?>&a=<?=$myTime?>&v=<?=$myTime?>'>here for link d</a>
<br>
Click <a href='/cassium/AutoExpress/randomLink/?e=<?=$myTime?>&v=<?=$myTime?>&m=<?=$myTime?>'>here for link e</a>
<br>
Click <a href='/cassium/AutoExpress/randomLink/?f=<?=$myTime?>&dsfds=<?=$myTime?>&kl=<?=$myTime?>'>here for link f</a>
<br>
Click <a href='/cassium/AutoExpress/randomLink/?g=<?=$myTime?>&twytrw=<?=$myTime?>&gdfg=<?=$myTime?>'>here for link g</a>
<br>
Click <a href='/cassium/AutoExpress/randomLink/?h=<?=$myTime?>&iokt=<?=$myTime?>&FD=<?=$myTime?>'>here for link h</a>
<br>
Click <a href='/cassium/AutoExpress/randomLink/?i=<?=$myTime?>&wqe=<?=$myTime?>&asd=<?=$myTime?>'>here for link i</a>
<br>
Click <a href='/cassium/AutoExpress/randomLink/?j=<?=$myTime?>&qsa=<?=$myTime?>&uknm=<?=$myTime?>'>here for link j</a>
<br>
Click <a href='/cassium/AutoExpress/randomLink/?k=<?=$myTime?>&cxv=<?=$myTime?>&ilk=<?=$myTime?>'>here for link k</a>
<br>
Click <a href='/cassium/AutoExpress/randomLink/?l=<?=$myTime?>&il=<?=$myTime?>&gjh=<?=$myTime?>'>here for link l</a>
<br>
Click <a href='/cassium/AutoExpress/randomLink/?m=<?=$myTime?>&efrre=<?=$myTime?>&omcx=<?=$myTime?>'>here for link m</a>
<br>
Click <a href='/cassium/AutoExpress/randomLink/?n=<?=$myTime?>&zxc=<?=$myTime?>&oilk=<?=$myTime?>'>here for link n</a>
<br>
Click <a href='/cassium/AutoExpress/randomLink/?o=<?=$myTime?>&klk=<?=$myTime?>&nmh=<?=$myTime?>'>here for link o</a>
<br>
Click <a href='/cassium/AutoExpress/randomLink/?p=<?=$myTime?>&zxc=<?=$myTime?>&oyl=<?=$myTime?>'>here for link p</a>
<br>
Click <a href='/cassium/AutoExpress/randomLink/?q=<?=$myTime?>&efa=<?=$myTime?>&iol=<?=$myTime?>'>here for link q</a>
<br>
Click <a href='/cassium/AutoExpress/randomLink/?r=<?=$myTime?>&efds=<?=$myTime?>&efc=<?=$myTime?>'>here for link r</a>
<br>
Click <a href='/cassium/AutoExpress/randomLink/?s=<?=$myTime?>&wds=<?=$myTime?>&jmmn=<?=$myTime?>'>here for link s</a>
<br>
Click <a href='/cassium/AutoExpress/randomLink/?t=<?=$myTime?>&ssx=<?=$myTime?>&oil=<?=$myTime?>'>here for link t</a>
<br>
Click <a href='/cassium/AutoExpress/randomLink/?u=<?=$myTime?>&ewdf=<?=$myTime?>&ikuik=<?=$myTime?>'>here for link u</a>
<br>
Click <a href='/cassium/AutoExpress/randomLink/?v=<?=$myTime?>&sdvdf=<?=$myTime?>&ikk=<?=$myTime?>'>here for link v</a>
<br>
Click <a href='/cassium/AutoExpress/randomLink/?w=<?=$myTime?>&sa=<?=$myTime?>&ujh=<?=$myTime?>'>here for link w</a>
<br>
Click <a href='/cassium/AutoExpress/randomLink/?x=<?=$myTime?>&tyu=<?=$myTime?>&vb=<?=$myTime?>'>here for link x</a>
<br>
Click <a href='/cassium/AutoExpress/randomLink/?y=<?=$myTime?>&wedf=<?=$myTime?>&nhn=<?=$myTime?>'>here for link y</a>
<br>
Click <a href='/cassium/AutoExpress/randomLink/?z=<?=$myTime?>&dsc=<?=$myTime?>&uyj=<?=$myTime?>'>here for link z</a>
<br>
<p>
</body>
</html>

