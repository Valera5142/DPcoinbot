<?php
session_start();
require_once "../database/connect.php";
$login = $_SESSION['login'];
$new_img = 'uploads/' . time() . $_FILES['img']['name'];


move_uploaded_file($_FILES['img']['tmp_name'], "../" . $new_img);
$sql = "UPDATE `users` SET `img` = '$new_img' WHERE `login` = '$login'";
mysqli_query($connect, $sql);
$_SESSION['img'] = $new_img;
$_SESSION['truemessage'] = "Замена аватарки прошла успешно";
header("Location: ../personArea/area.php");
