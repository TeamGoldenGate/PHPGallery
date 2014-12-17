<?php
if(!empty($_COOKIE["loggedUser"]))
{
	echo "You are already logged in. <br>";
	echo "You will be redirected after 3 seconds.";
	header("Refresh: 3; URL=./newIndex.php");
	die();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Register</title>
</head>
<body>
	<div>
        <form name="register" method="post" action="includes/register.php">
            Do you want to register ?
            <input type="text" name="username" placeholder="username" />
            <input type="password" name="password" placeholder="password" />
            <input type="text" name="email" placeholeder="Email" />
            <input type="text" name="fname" placeholder="First name" />
            <input type="text" name="lname" placeholder="Last name" />
            <input type="submit" name="register-submit" />
        </form>
    </div>
</body>
</html>