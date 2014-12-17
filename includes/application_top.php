<?php
//Database connection
$dbhost = "db4free.net";
$dbuser = "adminteamwork";
$dbpass = "password";
$dbname = "phpteamwork";
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if (!$conn) {
    die('Could not connect: ' . mysqli_error() );
}
echo 'Connected successfully';

//Check if $_SESSION contains username
if (!isset($_SESSION['username'])) {
    $user_logged = false;
} else {
    $user_logged = true;
}
?>