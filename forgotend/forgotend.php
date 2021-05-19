<?php
session_start();
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" sizes="32x32" href="../../images/vrk.ico">
    <link rel="icon" sizes="16x16" href="../../images/vrk.ico">
    <link rel="stylesheet" href="forgotend.css">
    <link rel="stylesheet" href="../font/stylesheet.css">
    <title>Forgot password</title>
</head>

<body>
    <div class="registr">
        <form class="reg-box" method="POST" action="../forgotend/forgottrue.php">
            <div class="login-box">
                <div class="img">
                    <img src="../images/avatar.png" alt="" class="dp_img">
                </div>
                <h1>Введите код с почты</h1>
                <div class="textbox">
                    <input type="text" placeholder="Код подтверждения" name="lastcode" autocomplete="off" class="icon-conf" maxlength="6">
                </div>

                <button type="submit" class="btn">Отправить код</button>
                <a href="../forgot/forgot.php" class="login">Вернуться назад</a>
                <a href="../forgotend/forgotrepeat.php" class="login">Отправить код еще раз</a>
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