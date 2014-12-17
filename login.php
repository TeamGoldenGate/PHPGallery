<?php
if(!empty($_COOKIE["loggedUser"]))
{
	echo "You are already logged in. <br>";
	echo "You will be redirected after 3 seconds.";
	header("Refresh: 3; URL=./index.php");
	die();
}
?>

<html>
<head>
    <title>Login</title>
</head>
<body>
<div>
    <div>
        <form name="login" method="post" action="includes/login.php">
            Please login:
            <input type="text" name="username" placeholder="username" />
            <input type="password" name="password" placeholder="password" />
            <input type="submit" name="login-submit" />
        </form>
    </div>
</div>
</body>
</html>