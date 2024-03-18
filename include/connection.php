<?php
    $con = mysqli_connect('127.0.0.1:3308', 'root', '', 'crud');

    if(!$con){
        die("Connection Error").mysqli_error();
    }
    
?>