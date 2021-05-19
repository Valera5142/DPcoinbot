<?session_start();?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" sizes="32x32" href="../images/minidp.ico">
    <link rel="icon" sizes="16x16" href="../images/minidp.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css">
    <script src="bot.js" defer></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="bot.css">
    <link rel="stylesheet" type="text/css" href="../font/stylesheet.css">
    <title>DPcoin bot</title>
</head>

<body>
    <div class="topnav" id="Myhead">
        <a href="../face/face.php" class="active NotPersArea">Главная</a>
        <a class="NotPersArea" id="hello">Поддержка</a>
        <a href="../galary/galary.php" class="NotPersArea">Галерея</a>
        <a href="#" class="NotPersArea">О боте</a>
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
                    <form action="../email/emailface.php" method="POST">
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

    <div class="titletxt">

        <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center" style="margin: 1px">
            <img src="../images/discord.png" width="50px" height="50px">
            <h1 class=" container mb-5" style="width: 100%; border-spacing: 7px 5px; text-align: center; color:#00aee9;"><i style="color: #00dfa6;">DPcoin</i> - bot для поднятия активности на серверах Discord!</h1>


            <h4 class="my-1  container" style="width: 100%; border-spacing: 7px 5px; text-align: left; color: #00dfa6;">Бот для администраторов
            </h4>
            <p class=" container " style="width: 100%; border-spacing: 7px 5px; text-align: left; font-family: Gill Sans, sans-serif">
                DPcoin BOT был создан для поднятия активности на серверах. Основной и единственной валютой бота являются DP коины. Получить их можно при общении в чате и голосовых каналах, ну а количество коинов, которые Вы получите, зависит от вашего
                <a href="#levels" class="lvl">левела</a>. С помощью данного бота администраторы сервера смогут добавлять магазины ролей (и не только) на их сервера, а участники смогут покупать их за внутреннию валюту. Чтобы настроить бота необходимо
                прописать команду setup (ссылка на команду)
            </p>

            <p class=" container " style="width: 100%; border-spacing: 7px 5px; text-align: left; font-family: Gill Sans, sans-serif"></p>


            <h3 class=" container" style="width: 100%; border-spacing: 7px 5px; text-align: left; color: #00dfa6;">Внутренняя валюта</h3>
            <p class=" container mb-5" style="width: 100%; border-spacing: 7px 5px; text-align: left; font-family: Gill Sans, sans-serif">Валютой бота являются DP коины. За них, как я уже говорил ранее, можно покупать различные роли, прокачивать <a href="#levels" class="lvl">левела</a>
            </p>
            <h5 class="container" style="width: 100%; border-spacing: 7px 5px; text-align: left; color: #00dfa6;">За что начисляют коины?</h5>
            <ul class="list-unstyled container" style="width: 100%; border-spacing: 7px 5px; text-align: left; font-family: Gill Sans, sans-serif" [>
                <li>
                    <p class="mb-1">1) Бот начисляет 1 коин за 1 минуту нахождения в голосовом канале (коины начисляются после выхода из канала)</p>
                </li>
                <li>
                    <p class="mb-1">2) С шансом 1 к 3 бот начисляет 1 коин за одно НЕ ПОВТОРЯЮЩЕЕ ПРОШЛОЕ сообщение в чате, не менее 7 символов</p>
                </li>
                <li>
                    <p class="mb-1">3) Администрация может выдавать коины</p>
                </li>
            </ul>

            <h3 class="container" style="width: 100%; border-spacing: 7px 5px; text-align: left; color: #00dfa6;">Казино</h3>
            <p class=" container " style="width: 100%; border-spacing: 7px 5px; text-align: left; font-family: Gill Sans, sans-serif">
                В боте есть четыре вида казино: rust, coinflip, fail и 777
            </p>
            <h6 class="container mb-0" style="width: 100%; border-spacing: 7px 5px; text-align: left; color:#00aee9;">Rust casino</h6>
            <p class=" container mb-1" style="width: 100%; border-spacing: 7px 5px; text-align: left; font-family: Gill Sans, sans-serif">
                Как работает rust casino? Если простым языком, то Вы ставите какую-либо сумму (эта сумма с Вас снимается) на число (либо один, либо три, либо пять, либо десять, либо двадцать), если выпадает число один, то ставка умножается в два раза, если три, то в три
                раза, если пять, то в пять раз и тд, чем меньше число - тем больше шанс на выигрыш.
            </p>
            <h6 class="container mb-0" style="width: 100%; border-spacing: 7px 5px; text-align: left; color:#00aee9;">Coinflip</h6>
            <p class=" container mb-1" style="width: 100%; border-spacing: 7px 5px; text-align: left; font-family: Gill Sans, sans-serif">
                Тут есть два варианта развития событий: игра с ботом, игра с другим человеком. Как работает соіnflip с ботом? Ну тут всё проще. Вы прописываете //coinflip &#60;сумма&#62;, дальше программа выбирает число (1 или 2), если выпадает 1 - побеждаете Вы, и сумма,
                которую Вы поставили, умножается в 2 раза, если выпадает 2 - вы проигрываете. Как работает соіnflip с другим человеком? Тут всё уже немного сложнее. Вы прописываете //coinflip &#60; сумма&#62; &#60; упоминание второго игрока&#62; , а второй
                игрок прописывает //accept &#60; упоминание первого игрока (Вас)&#62; . После этого программа также выбирает 2 числа, если выпадает 1 , то побеждаете Вы, если 2, то Ваш противник
            </p>
            <h6 class="container mb-0" style="width: 100%; border-spacing: 7px 5px; text-align: left; color:#00aee9;">777</h6>
            <p class=" container mb-1" style="width: 100%; border-spacing: 7px 5px; text-align: left; font-family: Gill Sans, sans-serif">
                Вы ставите ставку, программа генерирует 3 ряда чисел. Случай выигрыша: Строка c плючом, три одинаковых числа в ряд Три одинаковых числа по диагонали Во сколько раз умножается выигрыш? Три восьмёрки - в 2 раза Три нуля - в 3 раза Три семёрки - в 5 раз
            </p>
            <h6 class="container mb-0" style="width: 100%; border-spacing: 7px 5px; text-align: left; color:#00aee9;">Fail</h6>
            <p class=" container mb-5" style="width: 100%; border-spacing: 7px 5px; text-align: left; font-family: Gill Sans, sans-serif">
                Вы ставите на определённый коэффицент, если программа выдаёт коэффицент выше Вашего - Вы выиграли, и Ваша ставка умножается на Ваш коэффицент.
            </p>


            <h3 class="mb-1 container" style="width: 100%; border-spacing: 7px 5px; text-align: left; color: #00dfa6;">Левела</h3>
            <p>
                <a name="levels"></a>
            </p>
            <ul class="list-unstyled container" style="width: 100%; border-spacing: 7px 5px; text-align: left; font-family: Gill Sans, sans-serif">
                <li>
                    <h5 class="mb-1" style="color:#00aee9;">Level 1</h5>
                </li>
                <li>
                    <p class="mb-1">Стандарт для всех участников. За одну минуту в голосовом канале даётся 1 коин, за одно сообщение, соответствующее условиям, дается 1 коин</p>
                </li>
                <li>
                    <p style="font-family: DejaVu Sans Mono, monospace; font-weight: 600">Бесплатно</p>
                </li>
                <li>
                    <h5 class="mb-1" style="color:#00aee9;">Level 2</h5>
                </li>
                <li>
                    <p class="mb-1">За одну минуту в голосовом канале даётся 4 коина, за одно сообщение, соответствующее условиям, дается 4 коина</p>
                </li>
                <li>
                    <p style="font-family: DejaVu Sans Mono, monospace; font-weight: 600">Цена: 50000 DP коинов</p>
                </li>
                <li>
                    <h5 class="mb-1" style="color:#00aee9;">Level 3</h5>
                </li>
                <li>
                    <p class="mb-1">За одну минуту в голосовом канале даётся 6 коинов, за одно сообщение, соответствующее условиям, дается 6 коинов</p>
                </li>
                <li>
                    <p style="font-family: DejaVu Sans Mono, monospace; font-weight: 600">Цена: 100000 DP коинов</p>
                </li>
                <li>
                    <h5 class="mb-1" style="color:#00aee9;">Level 4</h5>
                </li>
                <li>
                    <p class="mb-1">За одну минуту в голосовом канале даётся 8 коинов, за одно сообщение, соответствующее условиям, дается 8 коинов</p>
                </li>
                <li>
                    <p style="font-family: DejaVu Sans Mono, monospace; font-weight: 600">Цена: 200000 DP коинов</p>
                </li>
                <li>
                    <h5 class="mb-1" style="color:#00aee9;">Level 5</h5>
                </li>
                <li>
                    <p class="mb-1">Максимальный левел! За одну минуту в голосовом канале даётся 20 коинов, за одно сообщение, соответствующее условиям, дается 20 коинов</p>
                </li>
                <li>
                    <p style="font-family: DejaVu Sans Mono, monospace; font-weight: 600" class="mb-5">Цена: 400000 DP коинов</p>
                </li>

            </ul>
            <h3 class="container main" style="text-align: left; font-family: Gill Sans, sans-serif; color: #00dfa6;">Статистика</h3>
            <p class="container main" style="text-align: left; font-family: Gill Sans, sans-serif"">
                Одной из функций бота является сбор статистики. Количество сообщений в чате, время в голосовых каналах, количество побед и поражений в казино, левел - всё это вам покажет бот.</p>
            <p class=" container main" style="text-align: left; font-family: Gill Sans, sans-serif"">
                В боте также существуют списки лидеров: по коинам, минут в голосовых каналах, сообщений в чате.
            </p>
            <h3 class=" container main" style="text-align: left; font-family: Gill Sans, sans-serif; color: #00dfa6;">Промокоды</h3>
            <p class="container main" style="text-align: left; font-family: Gill Sans, sans-serif">
                Вы можете создать промокод на определённое количество коинов, а другие участники этого сервера могут активировать его, получив эти коины.</p>


            <h3 class="container main" style="text-align: left; font-family: Gill Sans, sans-serif; color: #00dfa6;">История создания</h3>
            <p class=" container main" style="text-align: left; font-family: Gill Sans, sans-serif">
                Бот полностью написан одним человеком, но к разработке идей была привлечена целая команда. Кто-то помогал тестировать, кто-то искал баги, кто-то разрабатывал идеи, а кто-то просто помогал морально.</p>
            <p class="container main" style="text-align: left; font-family: Gill Sans, sans-serif">
                Бот написан на языке Python на библиотеке discord.py, с этой библиотекой разработчик работал впервые, но видео с ютуба решили большинство проблем, в разработку была вложена уйма сил, но оно того стоило. В процессе создания даже был написан целый модуль, который значительно
                помог. Благодаря ему рандом, реализованный в боте, настроен на каждого человека отдельно и создаёт комбинации, основанные на уникальный номер пользователя.
            </p>
            <p class="container main" style="text-align: left; font-family: Gill Sans, sans-serif">
                Началось всё с решения написать простенького бота для администрирования одного сервера в дискорде, ну и поскольку фантазии у создателя особо не было, он попросил помощи у участников. Так как уже некая чать бота есть, мы исправляем различные баги и добавляем новые функции. Вы тоже можете нам помочь! В отделе "Поддержка" напишите нам и расскажите что бы вы хотели видеть в боте.
            </p>
            <p class="container main" style="text-align: left; font-family: Gill Sans, sans-serif">
                Изначально сайт для бота не был задуман, потом создатель все же решился сделать его и сделал его через фреймворк, но потом я предложил ему сделать этот сайт, именно поэтому вы все это сейчас читаете. А теперь повторим фразу с которой все начиналось, "Спасибо за то, что вы с нами!".
            </p>
        </div>
    </div>
</body>

</html>