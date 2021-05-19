<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" sizes="32x32" href="../images/minidp.ico">
    <link rel="icon" sizes="16x16" href="../images/minidp.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css">
    <script src="galary.js" defer></script>
    <link rel="stylesheet" href="galary.css">
    <link rel="stylesheet" type="text/css" href="../font/stylesheet.css">
    <title>DPcoin bot</title>
</head>

<body>
    <div class="topnav" id="Myhead">
        <a href="../face/face.php" class="active NotPersArea">Главная</a>
        <a class="NotPersArea" id="hello">Поддержка</a>
        <a href="#" class="NotPersArea">Галерея</a>
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



    <section class="gallery">
        <h2 class="title">Галерея DPcoin</h2>
        <div class="gallery-list">
        <a href="img/beetle.jpg" class="gallery-item">
                <div class="gallery-item-hover">Посмотреть</div>
                <img src="img/beetle.jpg" alt="alt">
            </a>
            <a href="img/liberty.jpg" class="gallery-item">
                <div class="gallery-item-hover">Посмотреть</div>
                <img src="img/liberty.jpg" alt="alt">
            </a>
            <a href="img/lighthouse.jpg" class="gallery-item">
                <div class="gallery-item-hover">Посмотреть</div>
                <img src="img/lighthouse.jpg" alt="alt">
            </a>
            <a href="img/minimalismo.jpg" class="gallery-item">
                <div class="gallery-item-hover">Посмотреть</div>
                <img src="img/minimalismo.jpg" alt="alt">
            </a>
            <a href="img/salad.jpg" class="gallery-item">
                <div class="gallery-item-hover">Посмотреть</div>
                <img src="img/salad.jpg" alt="alt">
            </a>
            <a href="img/shutterbug.jpg" class="gallery-item">
                <div class="gallery-item-hover">Посмотреть</div>
                <img src="img/shutterbug.jpg" alt="alt">
            </a>
            <a href="img/skaterboy.jpg" class="gallery-item">
                <div class="gallery-item-hover">Посмотреть</div>
                <img src="img/skaterboy.jpg" alt="alt">
            </a>
            <a href="img/woodcraft.jpg" class="gallery-item">
                <div class="gallery-item-hover">Посмотреть</div>
                <img src="img/woodcraft.jpg" alt="alt">
            </a>
        </div>
    </section>


    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.js"></script>
    <script>
        $(".gallery-list").magnificPopup({
            delegate: "a",
            type: "image",
            gallery: {
                enabled: true
            }
        });
    </script>
</body>

</html>