<?php

$host = 'localhost';

$user = 'root';
$pass = '';
$name = 'myubestore2';

$connect = mysqli_connect($host, $user, $pass, $name);


if (!$connect) {
    die("<script>alert('failed')</script>" . mysqli_connect_error());
    
    
}


