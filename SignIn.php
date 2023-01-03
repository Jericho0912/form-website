<?php

    include 'start.php';

    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT *FROM users WHERE email = '$email' 
    AND password = '$password'";
    $result = $link->query($sql);
    if (!$row = $result-> fetch_assoc()){
        echo"Your account is accepted!";
    }else{
        echo "Your account is not correct";
    }
?>