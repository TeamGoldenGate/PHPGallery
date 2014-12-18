<?php
require_once("includes/database.php");
require_once("includes/functions.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Golden Gate Gallery</title>
	<link rel="stylesheet" href="styles/style.css">
	<link rel="stylesheet" href="styles/newStyle.css">
</head>

<body>
	<div id="logo">
		<h1>Golden Gate Gallery</h1>
		</div>
	</div>
	<nav id="menu">
		<ul>
			<li><a class="selected" href="index.php">Gallery</a></li>
			<li><a href="#">Upload Picture</a></li>
			<li><a href="addgallery.php">Add Gallery</a></li>
		</ul>
<!--Add some style here for the next part-->
<?php if(!empty($_COOKIE["loggedUser"])) { ?>
		<span>Welcome <?= htmlspecialchars($_COOKIE["currentUser"]) ?>. <a href="includes/login.php">Logout</a></span>
<?php } else { ?>
		<span><a href="login.php">Login</a> or <a href="register.php">Register</a></span>
<?php } ?>
<!--And close that style here-->
	</nav>
