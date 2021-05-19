<?php
session_start();
require_once "../database/connect.php";
$newlogin = $_POST['login'];
$oldlogin = $_SESSION['login'];
if ($newlogin == $oldlogin) {
    $_SESSION['message'] = "Нельзя использовать нынешний логин";
    header("Location: ../confirm/login.php");
} else {
    $sql = "UPDATE `users` SET `login` = '$newlogin' WHERE `login` = '$oldlogin'";
    mysqli_query($connect, $sql);
    $_SESSION['login'] = $newlogin;
    $_SESSION['truemessage'] = "Замена логина прошла успешно";
    header("Location: ../personArea/area.php");
}
