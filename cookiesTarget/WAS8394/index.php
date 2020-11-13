<!DOCTYPE html>
<?php
$cookie_name = "user";
$cookie_value = "JohnDoe";
echo "<div id='demo'></div>";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30 * 365), "/");

setcookie("SetByServerHttpOnly", "12", time() + (86400 * 30 * 365), "/", "", "0", "1");

setcookie("SetByServerNonHttp", "12", time() + (86400 * 20 * 365), "/", "", "0", "0");
?>

<html>
<body>

//<?php
//if(!isset($_COOKIE[$cookie_name])) {
//    echo "Cookie named '" . $cookie_name . "' is not set!";
//} else {
//    echo "Cookie '" . $cookie_name . "' is set!<br>";
//    echo "Value is: " . $_COOKIE[$cookie_name];
//echo '<button type="button" class="button" OnClick=myFunction()>'.Click_Me.'</button>';
//}
//?>

<button onclick="myFunction()">Set same cookie by JavaScript</button>

<script>
function myFunction() {

  document.getElementById("demo").innerHTML = "Both Cookies Set";
  document.cookie = "SetByServerHttpOnly=13; expires=Thu, 18 Dec 2025 12:00:00 UTC; path=/";
  document.cookie = "SetByServerNonHttp=13; expires=Thu, 18 Dec 2025 12:00:00 UTC; path=/";
document.cookie = 'cookie1=test; expires=Fri, 19 Jun 2020 20:47:11 UTC; path=/';
}

</script>
</body>
</html>
