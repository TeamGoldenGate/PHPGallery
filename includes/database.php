<?php
//Database connection
$dbhost = "localhost:3306";
$dbuser = "root";
$dbpass = "";
$dbname = "phpteamwork";


$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
if (!$conn) {
    die('Could not connect: ' . mysqli_error() );
}

// Comment out if needed
//echo 'Connected successfully';
?>