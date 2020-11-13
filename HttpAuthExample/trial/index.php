<?php
session_start();
$username = "";
$user_is_logged_in = false;

// when the user visits the site for the first time
// he has not yet been authenticated and his session is empty
if (!isset($_SESSION['username']))
{
    // initialize the username so the user does not get
    // redirected over and over again
    $_SESSION['username'] = "";
    header("Location: auth.php");
}
else
{
    $username = trim($_SESSION['username']);
    // if the user got authenticated, auth.php stored the 
    // username in the session
    if ($username != "")
    {
        $user_is_logged_in = true;
    }
}

if (!$user_is_logged_in)
{
    echo 'not logged in<br/>';
    echo '<a href="auth.php">login</a><br/>';
}
else
{
    echo 'logged in as: ' . $username . '<br/>';
    echo 'content only visible for logged in users<br/>';
}

echo 'content visible for all users<br/>';
?>
