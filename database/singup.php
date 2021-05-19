<?php
session_start();
require_once "connect.php";
$login = $_POST['login'];
$email = $_POST['email'];
$password = $_POST['password'];
$password_confirm = $_POST['password_confirm'];


$path = 'uploads/' . time() . $_FILES['img']['name'];

$sub = "Регистрация на DPcoin";
$mes = "Вы успешно зарегистрировались на DPcoin. Спасибо что вы с нами)";

$sql = "SELECT * FROM `users` WHERE `login` = '$login'";
$result = mysqli_query($connect, $sql);


$emailsql = "SELECT * FROM `users` WHERE `email` = '$email'";
$emailresult = mysqli_query($connect, $emailsql);



if ($password == $password_confirm) {
    if (mysqli_num_rows($result) > 0) {
        $_SESSION['message'] = "Такой логин уже существует";
        header("Location: ../registr/apply.php");
    } elseif (mysqli_num_rows($emailresult) > 0) {
        $_SESSION['message'] = "Такой такая почта уже существует";
        header("Location: ../registr/apply.php");
    } elseif (!$path = 'uploads/' . time() . $_FILES['img']['name']) {
        $_SESSION['message'] = "Ошибка при загрузки картинки";
        header("Location: ../registr/apply.php");
    } elseif (empty($login)) {
        $_SESSION['message'] = "Введите логин";
        header("Location: ../registr/apply.php");
    } elseif (empty($email)) {
        $_SESSION['message'] = "Введите Email";
        header("Location: ../registr/apply.php");
    } elseif (empty($password)) {
        $_SESSION['message'] = "Введите Пароль";
        header("Location: ../registr/apply.php");
    } elseif (strlen($password) < 5) {
        $_SESSION['message'] = "Ваш пароль короче пяти символов";
        header("Location: ../registr/apply.php");
    } else {
        $path = 'uploads/' . time() . $_FILES['img']['name'];
        move_uploaded_file($_FILES['img']['tmp_name'], '../' . $path);
        $password = md5($password);
        $sql = "INSERT INTO `users` (`id`, `login`, `password`, `email`, `img`) VALUES (NULL, '$login', '$password', '$email', '$path')";
        mysqli_query($connect, $sql);
        mail($email, $sub, $mes, "F");
        $_SESSION['truemessage'] = "Регистрация прошла успешно!";
        header("Location: ../login/login.php");
    }
} else {
    $_SESSION['message'] = "Пароли не совпадают";
    header("Location: ../registr/apply.php");
}
