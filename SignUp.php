<?php
    include 'start.php';

    $username = $_POST['username'];
    $password = $_POST['password'];
    $name = $_POST['name']; 
    $birthday = $_POST['birthday'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];

    $sql = "INSERT INTO users ( username, password, name, birthday,  phone, email)
        VALUES ( '$username', '$password', '$name', '$birthday', '$phone', '$email')";

    $result = $link->query($sql);
        echo "1 record added";
    ?>
