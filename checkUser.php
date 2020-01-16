<?php
    require_once("config.php");

    $email = $_POST['email'];
    $password = $_POST['password'];

    $queryString = "SELECT * FROM user WHERE email = '".$email."' && password = '".$password."'";
    $query = mysqli_query($connection, $queryString);

    if(mysqli_num_rows($query) > 0){
        echo "Logging in...";
    }
    else echo "Invalid user";



?>
