<?php
session_start()
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" sizes="32x32" href="../images/minidp.ico">
    <link rel="icon" sizes="16x16" href="../images/minidp.ico">
    <link rel="stylesheet" href="apply.css">
    <link rel="stylesheet" type="text/css" href="../font/stylesheet.css">
    <script src="apply.js" defer></script>
    <title>DPcoin bot</title>
</head>

<body>

    <form class="reg-box" method="POST" action="../database/singup.php" enctype="multipart/form-data">
        <div class="login-box">
            <div class="img">
                <img src="../images/avatar.png" class="dp_img">
            </div>
            <div class="texted">
                <h1>Регистрация</h1>
            </div>
            <div class="textbox">
                <input type="text" placeholder="Логин" name="login" autocomplete="off" class="icon-user">
            </div>

            <div class="textbox">
                <input type="email" placeholder="Email" name="email" autocomplete="off" class="icon-email">
            </div>
            <div class="textboxed">
                <div class="input__wrapper">
                    <input type="file" name="img" id="input__file" class="input input__file" multiple>
                    <label for="input__file" class="input__file-button" name="img">
                        <span class="input__file-icon-wrapper" name="img"><img class="input__file-icon" src="../images/imagers.png" alt="Выбрать файл" width="25"></span>
                        <span class="input__file-button-text" name='img'>Выберите файл</span>
                    </label>
                </div>
            </div>

            <div class="textbox">
                <input type="password" placeholder="Пароль" name="password" autocomplete="off" class="icon-lock">
            </div>

            <div class="textbox">
                <input type="password" placeholder="Подтверждение пароля" name="password_confirm" autocomplete="off" class="icon-lock">
            </div>

            <button type="submit" class="btn">Зарегистрироваться</button>
            <a href="../login/login.php" class="login">Войти</a>
            <a href="../index.php" class="login">Главная</a>
            <?php

            if (isset($_SESSION['message']) || isset($_SESSION['truemessage'])) {
                if ($_SESSION['message']) {
                    echo "<p class='nicereg'>" . $_SESSION['message'] . "</p>";
                } else {
                    echo "<p class='greennicereg'>" . $_SESSION['truemessage'] . "</p>";
                }
                unset($_SESSION['message']);
                unset($_SESSION['truemessage']);
            }
            ?>
        </div>
    </form>

</body>

</html>