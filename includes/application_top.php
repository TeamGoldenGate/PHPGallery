<?php
//Database connection
$dbhost = "localhost:3306";
$dbuser = "root";
$dbpass = "";
$dbname = "ourdatabase";
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