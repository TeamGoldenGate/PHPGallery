<?php

function getAuthor($picture_id) {
    global $conn;
    $picturesQuery = "SELECT `picture_id`, `name`, `album_id`, `user_id` FROM `pictures` WHERE `picture_id` = '$picture_id'";
    $result = $conn->query($picturesQuery);
    if ($result) {
        $row=mysqli_fetch_assoc($result);
        $user_id = $row['user_id'];
        $userQuery = "SELECT `user_name` FROM `users` WHERE `user_id` = '$user_id'";
        $userResult = $conn->query($userQuery);
        if ($userResult) {
            $userRow = mysqli_fetch_assoc($userResult);
            $user_name = $userRow['user_name'];
        }
    }
    return $user_name;
}

function getAlbumName($picture_id) {
    global $conn;
    $picturesQuery = "SELECT `picture_id`, `name`, `album_id`, `user_id` FROM `pictures` WHERE `picture_id` = '$picture_id'";
    $result = $conn->query($picturesQuery);
    if ($result) {
        $row=mysqli_fetch_assoc($result);
        $album_id = $row['album_id'];
        $albumQuery = "SELECT `album_name` FROM `albums` WHERE `album_id` = '$album_id'";
        $albumResult = $conn->query($albumQuery);
        if ($albumResult) {
            $albumRow = mysqli_fetch_assoc($albumResult);
            $album_name = $albumRow['album_name'];
        }
    }
    return $album_name;
}