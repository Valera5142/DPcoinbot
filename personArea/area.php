<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" sizes="32x32" href="../images/minidp.ico">
    <link rel="icon" sizes="16x16" href="../images/minidp.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="area.js" defer></script>
    <link rel="stylesheet" href="area.css">
    <link rel="stylesheet" type="text/css" href="../font/stylesheet.css">
    <title>DPcoin bot</title>
</head>

<body>
    <div class="topnav" id="Myhead">
        <a href="../face/face.php" class="active NotPersArea">Главная</a>
        <a class="NotPersArea" id="hello">Поддержка</a>
        <a href="../galary/galary.php" class="NotPersArea">Галерея</a>
        <a href="../tellbot/bot.php" class="NotPersArea">О боте</a>
        <a href="#" class="PersArea">Личный кабинет</a>
        <a href="javascript:void(0);" class="icon" onclick="headerdown()">
            <img src="../images/headicon.jpg" width="15px" height="15px">
        </a>
    </div>




    <div class="modal" id='myModal'>
        <div class="center">
            <div id="myModal" class="modal-content">
                <div class="modal-text">
                    <span class="close"><img src="../images/closed.png" width="20px" height="20px"></span>
                    <div class="titlext">
                        <h2>Напишите о своей проблеме и мы ответим вaм.</h2>
                    </div>
                    <form action="../email/emailarea.php" method="POST">
                        <input type="text" class="inpm" placeholder="Email" name="email" autocomplete="off">
                        <textarea class="problem" id="" placeholder="Опишите свою проблему" name="text" maxlength="70"></textarea>
                        <div class="but">
                            <button class="btn" type="submit">Отправить</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="avatar">
        <div class="inavatar">
            <?php if (strlen($_SESSION['img']) < 19) {
                echo "<img src='../images/user.png' class='avatars'>";
            } else {
            ?><img src="<?php echo "../" . $_SESSION['img'] ?>" class="avatars">
            <?php
            }
            ?>
            <h2><?= $_SESSION['login']; ?></h2>
        </div>
    </div>
    <div class="all">
        <div class="login">
            <div class="fst">
                <div class="otdel">
                    <div class="normal"><img src="../images/icons/login.png" class="img_icon"></div>
                    <a href="../confirm/login.php" class="txt">Сменить логин</a>
                </div>
                <div class="otdel">
                    <div class="normal"><img src="../images/icons/email.png" class="img_icon"></div>
                    <a href="../confirm/email.php" class="txt">Сменить почту</a>
                </div>
                <div class="otdel">
                    <div class="normal"><img src="../images/icons/password.png" class="img_icon"></div>
                    <a href="../confirm/password.php" class="txt">Сменить пароль</a>
                </div>
            </div>
            <div class="scd">
                <div class="otdel">
                    <div class="normal"><img src="../images/icons/download.png" class="img_icon"></div>
                    <a href="DPcoinBOT.doc" download="DPcoinBOT.doc" class="txt">Скачать команды</a>
                </div>
                <div class="otdel">
                    <div class="normal"><img src="../images/icons/robot.png" class="img_icon"></div>
                    <a href="https://discord.com/api/oauth2/authorize?client_id=765825973601697815&permissions=8&scope=bot" class="txt">Добавить бота</a>
                </div>
                <div class="otdel">
                    <div class="normal"><img src="../images/icons/image.png" class="img_icon"></div>
                    <a href="../confirm/img.php" class="txt">Сменить картинку</a>
                </div>
            </div>
            <div class="thd">
                <div class="otdel">
                    <div class="normal"><img src="../images/icons/logout.png" class="img_icon"></div>
                    <a href="../database/logout.php" f class="txt">Выйти</a>
                </div>
            </div>
            <div class="mes">
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
        </div>
    </div>
</body>

</html>