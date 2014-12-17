<?php
require_once "database.php";

if(!empty($_POST["login-submit"]) &&
  !empty($_POST["username"]) &&
  !empty($_POST["password"]))
{
	$username = $_POST["username"];
	$password = $_POST["password"];
	
	$querry = "SELECT `user_id`, `user_name`, `password` FROM `users` WHERE `user_name`='$username' AND `password`='$password'";
	$result = $conn->query($querry);
	
	if ($result) {
		$row = $result->fetch_assoc();
		$username = $row["user_name"];
		setcookie("currentUser", $username, time() + (86400 * 30), "/"); // 1 day
		setcookie("loggedUser", true, time() + (86400 * 30), "/"); // 1 day
		echo "You will be redirected after 3 seconds.";
		header("Refresh: 3; URL=./../newIndex.php");
		die();
	} else {
		echo "Login failed <br>";
		echo "You will be redirected after 3 seconds.";
		header("Refresh: 3; URL=./../login.php");
	}	
}
else
{
	unset($_COOKIE["currentUser"]);
	setcookie("currentUser", null, -1, '/');
	unset($_COOKIE["loggedUser"]);
	setcookie("loggedUser", null, -1, '/');
	echo "You will be redirected after 3 seconds.";
	header("Refresh: 3; URL=./../newIndex.php");
	die();
}
?>