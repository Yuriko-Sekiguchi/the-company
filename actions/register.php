<?php

    require "../classes/User.php";
    //get data from form
    $l_name = $_POST["last_name"];
    $f_name = $_POST["first_name"];
    $username = $_POST["username"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

    $user = new User;
    
    $user->addUser($f_name, $l_name, $username, $password);
?>