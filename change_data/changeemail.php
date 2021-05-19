<?php
session_start();
require_once "../database/connect.php";
$oldemail = $_SESSION['email'];
$newemail = $_POST['email'];
$sql = "SELECT * FROM `users` WHERE `email` = '$newemail'";
$result = mysqli_query($connect, $sql);
if (mysqli_num_rows($result) > 0) {
    $_SESSION['message'] = "Такая почта уже существует";
    header("Location: ../confirm/email.php");
} else {
    $sql = "UPDATE `users` SET `email` = '$newemail' WHERE `email` = '$oldemail'";
    mysqli_query($connect, $sql);
    $_SESSION['email'] = $newemail;
    $_SESSION['truemessage'] = "Замена почты прошла успешно";
    header("Location: ../personArea/area.php");
}
