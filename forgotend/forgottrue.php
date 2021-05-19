<?php
session_start();
require_once "../database/connect.php";
$login = $_SESSION['login'];
$email = $_SESSION['email'];
$user_code = $_POST['lastcode'];
$newpass = $_SESSION['newpass'];
if ($_SESSION['code'] == $user_code) {
    $sql = "UPDATE `users` SET `password` = '$newpass' WHERE `email` = '$email' AND `login` = '$login'";
    mysqli_query($connect, $sql);
    $sql = "SELECT * FROM `users` WHERE `login` = '$login' AND `email` = '$email'";
    $result = mysqli_query($connect, $sql);
    $user = mysqli_fetch_assoc($result);
    $_SESSION['login'] = $user['login'];
    $_SESSION['email'] = $user['email'];
    $_SESSION['password'] = $user['password'];
    $_SESSION['img'] = $user['img'];
    $_SESSION['truemessage'] = "Пароль успешно изменен";
    header("Location: ../login/login.php");
} else {
    $_SESSION['message'] = "Код неверный";
    header("Location: ../forgotend/forgotend.php");
}
