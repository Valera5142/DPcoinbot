<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" sizes="32x32" href="../images/minidp.ico">
    <link rel="icon" sizes="16x16" href="../images/minidp.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css">
    <link rel="stylesheet" href="face.css">
    <link rel="stylesheet" type="text/css" href="../font/stylesheet.css">
    <script src="face.js" defer></script>
    <title>DPcoin BOT</title>
</head>

<body>
    <div class="topnav" id="Myhead">
        <a href="../face/face.php" class="active NotPersArea">Главная</a>
        <a class="NotPersArea" id="hello">Поддержка</a>
        <a href="../galary/galary.php" class="NotPersArea">Галерея</a>
        <a href="../tellbot/bot.php" class="NotPersArea">О боте</a>
        <a href="../personArea/area.php" class="PersArea">Личный кабинет</a>
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
                    <form action="../email/emailgalary.php" method="POST">
                        <input type="text" class="inpm" placeholder="Email" name="email" autocomplete="off">
                        <textarea class="problem" placeholder="Опишите свою проблему" name="text" maxlength="70"></textarea>
                        <div class="but">
                            <button class="btn">Отправить</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="present">
        <div class="presenttext">
            <img src="../images/Discordlogo.svg" class="discordlogo">
            <h1 class="titletext">Добро пожаловать на DPcoin</h1>
            <h2 class="titletext2">DPcoin BOT - это бот, который поможет вам поднять актив на сервере</h2>
        </div>
        <div class="discordimg">
            <img src="../images/discordimg.png" class="discimg">
        </div>
    </div>
</body>

</html>