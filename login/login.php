<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" sizes="32x32" href="../images/minidp.ico">
    <link rel="icon" sizes="16x16" href="../images/minidp.ico">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" type="text/css" href="../font/stylesheet.css">
    <script src="style.js" defer></script>
    <title>DPcoin bot</title>
</head>

<body>
    <div class="registr">
        <form class="reg-box" method="POST" action="../database/singin.php">
            <div class="login-box">
                <div class="img">
                    <img src="../images/avatar.png" alt="" class="dp_img">
                </div>
                <div class="texted">
                    <h1>Авторизация</h1>
                </div>
                <div class="textbox">
                    <input type="text" placeholder="Логин" name="login" autocomplete="off" class="icon-user">
                </div>

                <div class="textbox">
                    <input type="password" placeholder="Пароль" name="password" autocomplete="off" class="icon-lock">
                </div>

                <button type="submit" class="btn">Войти</button>
                <a href="../registr/apply.php" class="login">Зарегистрироваться</a>
                <a href="../forgot/forgot.php" class="forgot__link">Забыли пароль?</a>
                <a href="../index.php" class="forgot__link">Главная</a>
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
    </div>
</body>

</html>