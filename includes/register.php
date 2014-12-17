<?php
include("application_top.php");

if (!empty($_POST['register-submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];

    $sql = "INSERT INTO `users`(`user_name`, `password`, `user_email`, `user_fname`, `user_lname`)
VALUES ($username, $password, $email, $fname, $lname)";

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

include("application_bottom.php");