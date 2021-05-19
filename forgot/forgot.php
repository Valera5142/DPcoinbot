<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" sizes="32x32" href="../../images/vrk.ico">
    <link rel="icon" sizes="16x16" href="../../images/vrk.ico">
    <link rel="stylesheet" href="forgot.css">
    <link rel="stylesheet" type="text/css" href="../font/stylesheet.css">
    <script src="forgot.js" defer></script>
    <title>Forgot password</title>
</head>

<body>
    <div class="registr">
        <form class="reg-box" action="../forgotend/forgotpas.php" method="POST">
            <div class="login-box">
                <div class="img">
                    <img src="../images/avatar.png" alt="" class="dp_img">
                </div>
                <div class="texted">
                    <h2>Смена пароля</h2>
                </div>
                <div class="textbox">
                    <input type="text" placeholder="Логин" name="login" autocomplete="off" class="icon-user">
                </div>

                <div class="textbox">
                    <input type="email" placeholder="Email" name="email" autocomplete="off" class="icon-email">
                </div>

                <div class="textbox">
                    <input type="password" placeholder="Новый пароль" name="password" autocomplete="off" class="icon-lock">
                </div>

                <div class="textbox">
                    <input type="password" placeholder="Подтверждение пароля" name="password_confirm" autocomplete="off" class="icon-lock">
                </div>
                <button type="submit" class="btn">Отправить код</button>
                <a href="../index.php" class="login">Вернуться к входу</a>
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