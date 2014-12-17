<?php
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
</div>
</body>
</html>