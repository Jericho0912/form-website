<?php

$link = mysqli_connect("localhost", "root", "", "privatedb");

    //check connection
    if($link === false){
        die("ERROR: Could not connect." .mysqli_connect_error());
    }
?>