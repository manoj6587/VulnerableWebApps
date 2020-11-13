<?php
if ($_SERVER['REQUEST_METHOD'] == 'GET') {

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
$DomainName = "10.11.72.37";
//$pathSet = TempDir ();
$pathSet = "/";
$y = cookienumber_shuffle();

for ($x = 0; $x <= $y; $x++) {
//setcookie ($Name, $myTime, $myTime + (86400 * 30), $pathSet, $DomainName , $secure_parameter);
}

//Header Area
//header('Refresh:10; url=http://www.google.com');
header('Referer: https://10.113.195.231');
//header('Content-Type: text/html');
//header('Cache-Control: no-cache, must-revalidate');
//header('Expires: Sat, 26 Jul 1997 05:00:00 GMT');
//header('Connection: Keep-Alive');
//header('Keep-Alive: 300');
//header('Accept:*/*');
//header('Host: host');
//header('Accept-Language: en-us');
//header('Accept-Encoding: gzip, deflate');
//header('User-Agent: Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US;rv:1.9.2.16) Gecko/20110319 Firefox/3.6.16 ( .NET CLR 3.5.30729; .NET4.0E');
//header('Cookie: guest_id=v1%3A1328019064; pid=v1%3A1328839311134');
//print_r($_SERVER);
//print_r($_COOKIE);
}
else {
//echo "<html><head><title></title></head><body></body></html>";
die;
}

$referrer = $_SERVER['HTTP_REFERER'];
if (strpos($referrer, 'dom_xss') !== false){

} else {
	http_response_code(503);
}
?>

<html>

<head>
<title>Random Links <?=$myTime?></title>
</head>
<body>

<h1>Welcome to page <?=$myTime?></h1>

<script>document.write(location.hash);</script>

<!-- <script>document.write(location.href);</script> -->

<p id="demo"> Welcome to Qualys's Bank </p><br>
<hr><br>

<script>
  var x = document.referrer;
  document.getElementById("demo").innerHTML = x;
</script>

<!--Click <a href='/cassium/AutoExpress/Index.html'>here for Index.html</a>
<br>-->
Click <a href='/randomLink/random_path.php/a<?=$myTime?>/'>here for link a</a>
<br>
Click <a href='/randomLink/random_path.php/b<?=$myTime?>/'>here for link b</a>
<br>
Click <a href='/randomLink/random_path.php/c<?=$myTime?>/'>here for link c</a>
<br>
Click <a href='/randomLink/random_path.php/d<?=$myTime?>/'>here for link d</a>
<br>
Click <a href='/randomLink/random_path.php/e<?=$myTime?>/'>here for link e</a>
<br>
Click <a href='/randomLink/random_path.php/f<?=$myTime?>/'>here for link f</a>
<br>
Click <a href='/randomLink/random_path.php/g<?=$myTime?>/'>here for link g</a>
<br>
Click <a href='/randomLink/random_path.php/h<?=$myTime?>/'>here for link h</a>
<br>
Click <a href='/randomLink/random_path.php/i<?=$myTime?>/'>here for link i</a>
<br>
Click <a href='/randomLink/random_path.php/j<?=$myTime?>/'>here for link j</a>
<br>
Click <a href='/randomLink/random_path.php/k<?=$myTime?>/'>here for link k</a>
<br>
Click <a href='/randomLink/random_path.php/l<?=$myTime?>/'>here for link l</a>
<br>
Click <a href='/randomLink/random_path.php/m<?=$myTime?>/'>here for link m</a>
<br>
Click <a href='/randomLink/random_path.php/n<?=$myTime?>/'>here for link n</a>
<br>
Click <a href='/randomLink/random_path.php/o<?=$myTime?>/'>here for link o</a>
<br>
Click <a href='/randomLink/random_path.php/p<?=$myTime?>/'>here for link p</a>
<br>
Click <a href='/randomLink/random_path.php/q<?=$myTime?>/'>here for link q</a>
<br>
Click <a href='/randomLink/random_path.php/r<?=$myTime?>/'>here for link r</a>
<br>
Click <a href='/randomLink/random_path.php/s<?=$myTime?>/'>here for link s</a>
<br>
Click <a href='/randomLink/random_path.php/t<?=$myTime?>/'>here for link t</a>
<br>
Click <a href='/randomLink/random_path.php/u<?=$myTime?>/'>here for link u</a>
<br>
Click <a href='/randomLink/random_path.php/v<?=$myTime?>/'>here for link v</a>
<br>
Click <a href='/randomLink/random_path.php/w<?=$myTime?>/'>here for link w</a>
<br>
Click <a href='/randomLink/random_path.php/x<?=$myTime?>/'>here for link x</a>
<br>
Click <a href='/randomLink/random_path.php/y<?=$myTime?>/'>here for link y</a>
<br>
Click <a href='/randomLink/random_path.php/z<?=$myTime?>/'>here for link z</a>
<br>
<p>
</body>
</html>
