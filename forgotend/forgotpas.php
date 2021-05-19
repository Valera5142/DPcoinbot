<?php
session_start();
require_once "../database/connect.php";
$login = $_POST['login'];
$email = $_POST['email'];
$newpass = md5($_POST['password']);
$password_confirm = md5($_POST['password_сonfirm']);
$_SESSION['login'] = $login;
$_SESSION['email'] = $email;

$sql = "SELECT * FROM `users` WHERE `login` = '$login' AND `email` = '$email'";
$result = mysqli_query($connect, $sql);


if (mysqli_num_rows($result) > 0) {
    if ($newpass == $password_confirm) {
        $arr = array(
            'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R',
            'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', '1', '2', '3', '4', '5', '6', '7', '8', '9', '0'
        );
        $code = "";
        for ($i = 0; $i <= 5; $i++) {
            $rd = rand(0, 35);
            $code .= $arr[$rd];
        }
        mail($email, "Код подтвержения", "Ваш код подтверждения: " . $code);
        $_SESSION['newpass'] = $newpass;
        $_SESSION['code'] = $code;
        $_SESSION['truemessage'] = "Код подтвержения отправлен, проверьте спам";
        header("Location: ../forgotend/forgotend.php");
    } else {
        $_SESSION['message'] = "Пароли не совпадают";
        header("Location: ../forgot/forgot.php");
    }
} else {
    if (empty($login)) {
        $_SESSION['message'] = "Введите логин";
        header("Location: ../forgot/forgot.php");
    } elseif (empty($email)) {
        $_SESSION['message'] = "Введите email";
        header("Location: ../forgot/forgot.php");
    } else {
        $_SESSION['message'] = "Неверный логин или email";
        header("Location: ../forgot/forgot.php");
    }
}
