<?php

    require "../classes/User.php";
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $username = $_POST["username"];
    $user_id = $_POST["user_id"];

    $user = new User;
    $user->editUser($first_name, $last_name, $username, $user_id);

?>