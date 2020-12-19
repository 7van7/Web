<?php

    $connect = mysqli_connect('localhost', 'root', 'root', 'project' );

    if (!$connect) {
        die('Error connect to DataBase');
    }