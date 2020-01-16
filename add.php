<?php
    require_once("config.php");

    $name = $_GET['inputName'];
    $age = $_GET['inputAge'];
    $email = $_GET['inputEmail'];
    $password = $_GET['inputPassword'];
    $confirmPass = $_GET['inputPasswordConfirm'];

    if($password != $confirmPass)
        echo "Passwords are not the same";
    else {
        $result = mysqli_query($connection, "INSERT INTO user VALUES (0, '".$name."', '".$age."', '".$email."', '".$password."')");
    }
    //Comment sample




?>
