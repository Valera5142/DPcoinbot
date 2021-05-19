<?php
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'dp_base';
$connect = mysqli_connect($host, $user, $password, $database);
if (!$connect){
    die("Connection Error");
}

