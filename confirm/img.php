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
    <link rel="stylesheet" href="img.css">
    <link rel="stylesheet" type="text/css" href="../font/stylesheet.css">
    <script src="img.js" defer></script>
    <title>DPcoin bot</title>
</head>

<body>
    <div class="registr">
        <form class="reg-box" method="POST" action="../change_data/changeimg.php" enctype="multipart/form-data">
            <div class="login-box">
                <div class="img">
                    <img src="../images/avatar.png" alt="" class="dp_img">
                </div>
                <h1>Вставьте новую картинку</h1>
                <div class="textbox">
                    <div class="input__wrapper">
                        <input name="img" type="file" name="file" id="input__file" class="input input__file" multiple>
                        <label for="input__file" class="input__file-button" name="img">
                            <span class="input__file-icon-wrapper" name="img"><img class="input__file-icon" src="../images/imagers.png" alt="Выбрать файл" width="25"></span>
                            <span class="input__file-button-text" name="img">Выберите файл</span>
                        </label>
                    </div>
                </div>

                <button type="submit" class="btn">Сменить</button>
                <a href="../personArea/area.php" class="login">Вернуться назад</a>
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