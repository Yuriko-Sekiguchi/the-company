<?php

    require "../classes/User.php";

    session_start();

    $file_name = $_FILES["photo"]["name"];
    $tmp_name = $_FILES["photo"]["tmp_name"];
    $user_id = $_SESSION["user_id"];

    $user = new User;
    $user->updatePhoto($user_id, $file_name, $tmp_name);
?>