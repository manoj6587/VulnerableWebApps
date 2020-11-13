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

//Header Area
//header('Refresh:10; url=http://www.google.com');
header('HTTP/1.1 500 Internal Server Error', true, 500);
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
<!--Click <a href='/cassium/AutoExpress/Index.html'>here for Index.html</a>
<br>-->
Click <a href='/randomLink/randomLink.php?a=<?=$myTime?>&b=<?=$myTime?>&c=<?=$myTime?>'>here for link a</a>
<br>
Click <a href='/randomLink/randomLink.php?b=<?=$myTime?>&h=<?=$myTime?>&f=<?=$myTime?>'>here for link b</a>
<br>
Click <a href='/randomLink/randomLink.php?c=<?=$myTime?>&l=<?=$myTime?>&i=<?=$myTime?>'>here for link c</a>
<br>
Click <a href='/randomLink/randomLink.php?d=<?=$myTime?>&a=<?=$myTime?>&v=<?=$myTime?>'>here for link d</a>
<br>
Click <a href='/randomLink/randomLink.php?e=<?=$myTime?>&v=<?=$myTime?>&m=<?=$myTime?>'>here for link e</a>
<br>
Click <a href='/randomLink/randomLink.php?f=<?=$myTime?>&dsfds=<?=$myTime?>&kl=<?=$myTime?>'>here for link f</a>
<br>
Click <a href='/randomLink/randomLink.php?g=<?=$myTime?>&twytrw=<?=$myTime?>&gdfg=<?=$myTime?>'>here for link g</a>
<br>
Click <a href='/randomLink/randomLink.php?h=<?=$myTime?>&iokt=<?=$myTime?>&FD=<?=$myTime?>'>here for link h</a>
<br>
Click <a href='/randomLink/randomLink.php?i=<?=$myTime?>&wqe=<?=$myTime?>&asd=<?=$myTime?>'>here for link i</a>
<br>
Click <a href='/randomLink/randomLink.php?j=<?=$myTime?>&qsa=<?=$myTime?>&uknm=<?=$myTime?>'>here for link j</a>
<br>
Click <a href='/randomLink/randomLink.php?k=<?=$myTime?>&cxv=<?=$myTime?>&ilk=<?=$myTime?>'>here for link k</a>
<br>
Click <a href='/randomLink/randomLink.php?l=<?=$myTime?>&il=<?=$myTime?>&gjh=<?=$myTime?>'>here for link l</a>
<br>
Click <a href='/randomLink/randomLink.php?m=<?=$myTime?>&efrre=<?=$myTime?>&omcx=<?=$myTime?>'>here for link m</a>
<br>
Click <a href='/randomLink/randomLink.php?n=<?=$myTime?>&zxc=<?=$myTime?>&oilk=<?=$myTime?>'>here for link n</a>
<br>
Click <a href='/randomLink/randomLink.php?o=<?=$myTime?>&klk=<?=$myTime?>&nmh=<?=$myTime?>'>here for link o</a>
<br>
Click <a href='/randomLink/randomLink.php?p=<?=$myTime?>&zxc=<?=$myTime?>&oyl=<?=$myTime?>'>here for link p</a>
<br>
Click <a href='/randomLink/randomLink.php?q=<?=$myTime?>&efa=<?=$myTime?>&iol=<?=$myTime?>'>here for link q</a>
<br>
Click <a href='/randomLink/randomLink.php?r=<?=$myTime?>&efds=<?=$myTime?>&efc=<?=$myTime?>'>here for link r</a>
<br>
Click <a href='/randomLink/randomLink.php?s=<?=$myTime?>&wds=<?=$myTime?>&jmmn=<?=$myTime?>'>here for link s</a>
<br>
Click <a href='/randomLink/randomLink.php?t=<?=$myTime?>&ssx=<?=$myTime?>&oil=<?=$myTime?>'>here for link t</a>
<br>
Click <a href='/randomLink/randomLink.php?u=<?=$myTime?>&ewdf=<?=$myTime?>&ikuik=<?=$myTime?>'>here for link u</a>
<br>
Click <a href='/randomLink/randomLink.php?v=<?=$myTime?>&sdvdf=<?=$myTime?>&ikk=<?=$myTime?>'>here for link v</a>
<br>
Click <a href='/randomLink/randomLink.php?w=<?=$myTime?>&sa=<?=$myTime?>&ujh=<?=$myTime?>'>here for link w</a>
<br>
Click <a href='/randomLink/randomLink.php?x=<?=$myTime?>&tyu=<?=$myTime?>&vb=<?=$myTime?>'>here for link x</a>
<br>
Click <a href='/randomLink/randomLink.php?y=<?=$myTime?>&wedf=<?=$myTime?>&nhn=<?=$myTime?>'>here for link y</a>
<br>
Click <a href='/randomLink/randomLink.php?z=<?=$myTime?>&dsc=<?=$myTime?>&uyj=<?=$myTime?>'>here for link z</a>
<br>

             <!--Links with different file extensions-->

Click <a href='/randomLink/randomLink.mp4'>MP4 link z</a>
<br>
Click <a href='/randomLink/randomLink.mp3'>MP3 link z</a>
<br>
Click <a href='/randomLink/randomLink.wma'>WMA link z</a>
<br>
Click <a href='/randomLink/randomLink.m4v'>M4V link z</a>
<br>
Click <a href='/randomLink/randomLink.docx'>DOCX link z</a>
<br>
Click <a href='/randomLink/randomLink.pdf'>PDF link z</a>
<br>
Click <a href='/randomLink/randomLink.pptx'>PPTX link z</a>
<br>
<p>

 <form action="<?php $_PHP_SELF ?>" method="POST">
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
<input type="hidden" name="__VIEWSTATE" value="<?php echo($_SERVER[HTTP_COOKIE]); ?>" />
</form> 
</body>
</html>

