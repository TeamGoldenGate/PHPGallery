<?php
include("database.php");

if (!empty($_POST['register-submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];

	$querry = "SELECT `user_name`, `password` FROM `users` WHERE `user_name`='$username' AND `password`='$password'";
	$result = $conn->query($querry);
    var_dump($result);

    if ($result->num_rows == 0) {
        $sql = "INSERT INTO `users`(`user_name`, `password`, `user_email`, `user_fname`, `user_lname`) VALUES ('$username', '$password', '$email', '$fname', '$lname')";

        if ($conn->query($sql)) {
            echo "New record created successfully";
            echo "You will be redirected after 3 seconds.";
            header("Refresh: 3; URL=./../login.php");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->errorInfo;
        }
    }
    else {
        echo "That username already exists. <br>";
        echo "You will be redirected after 3 seconds.";
        header("Refresh: 3; URL=./../register.php");
    }
}

?>