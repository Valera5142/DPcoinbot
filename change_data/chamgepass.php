<?php
session_start();
require_once "../database/connect.php";
$newpass = md5($_POST['password']);
$oldpass = $_SESSION['password'];
if ($oldpass == $newpass) {
    $_SESSION['message'] = "Нельзя использовать нынешний пароль";
    header("Location: ../confirm/password.php");
} else {
    $sql = "UPDATE `users` SET `password` = '$newpass' WHERE `password` = '$oldpass'";
    mysqli_query($connect, $sql);
    $_SESSION['password'] = $newpass;
    $_SESSION['truemessage'] = "Замена пароля прошла успешно";
    header("Location: ../personArea/area.php");
}
