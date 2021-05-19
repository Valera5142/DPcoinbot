<?php
session_start();
require_once "connect.php";

$login = $_POST['login'];
$password = md5($_POST['password']);


$sql = "SELECT * FROM `users`WHERE `login` = '$login' AND `password` = '$password'";
$result = mysqli_query($connect, $sql);


$sqltwo = "SELECT * FROM `users`WHERE `email` = '$login' AND `password` = '$password'";
$results = mysqli_query($connect, $sqltwo);


if (mysqli_num_rows($result) > 0){
    $user = mysqli_fetch_assoc($result);
    $_SESSION['login'] = $user['login'];
    $_SESSION['email'] = $user['email'];
    $_SESSION['password'] = $user['password'];
    $_SESSION['img'] = $user['img'];
    header("Location: ../face/face.php");
}else if(mysqli_num_rows($results) > 0){
    $user = mysqli_fetch_assoc($results);
    $_SESSION['login'] = $user['login'];
    $_SESSION['email'] = $user['email'];
    $_SESSION['password'] = $user['password'];
    $_SESSION['img'] = $user['img'];
    header("Location: ../face/face.php");
}

else{
    $_SESSION["message"] = "Неверный логин или пароль";
    header("Location: ../login/login.php");
}

