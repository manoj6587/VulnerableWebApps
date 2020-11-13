<? php
$login = $_POST ['login'];
$pass = $_POST ['pass'];
$xml = simplexml_load_file ('users.xml');
// Create an XPath query
// $query = "//users/user[login/text() = '$login' and password / text() = '$pass']";
$ query = “// users / user [login / text () = '$ user' and password / text () = ”or '1' = '1 ′]”; 
// execute it
$result = $xml-> xpath ($query);
if (! $result)
{
die ("User credentials are not correct");
}
$user_data = $result [0];
$id = $user_data-> id;
$firstname = $user_data-> firstname;
/ ** /
?>
