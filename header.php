<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ukreinian Food Expo</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/slick.css" rel="stylesheet" type="text/css" >
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <!--<![endif]&ndash;&gt;-->
</head>
<body>
<header>
    <div class="top-header-border">
    </div>
    <div id="header-top">
        <div class="container">
            <div class="row">
                <div class="lang">
                    <button class="uk off"></button>
                    <button class="ru"></button>
                    <button class="en"></button>
                </div>
                <form class="search" action="page-search.php">
                    <button class="btn-search"></button>
                    <input class="field-seach" type="search" name="search" placeholder="пошук">
                </form>
            </div>
        </div>
    </div>
    <div id="header-baner">
        <div class="container">
            <div class="row">
                <div id="slider">
                    <div style="background-image: url(img/slide5.jpg)"></div>
                    <div style="background-image: url(img/slide4.jpg)"></div>
                    <div style="background-image: url(img/slide3.jpg)"></div>
                    <div style="background-image: url(img/slide2.jpg)"></div>
                </div>
            </div>
        </div>


        <div class="slider-text">
            <div class="container">
                <div class="row">
                    <div class="timer col-sm-4 col-sm-offset-4">
                        <div id="timer">
                            <div class="second-my timerhello timerhello_202">
                                <div class="second-my-content">
                                    <p class="result">
                                        <img src="img/clock.png" alt="clock">
                                        <span class="result-day items">219</span>
                                        <span class="dot">:</span>
                                        <span class="result-hour items">19</span>
                                        <span class="dot">:</span>
                                        <span class="result-minute items">54</span>
                                        <span class="dot">:</span>
                                        <span class="result-second items">02</span>
                                    </p>
                                    <div class="clearf"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text col-sm-4">
                        <p class="date ">23-24<br>листопада</p>
                        <p class="place ">м. Київ, ВЦ «КиївЕкспоПлаза»</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="navigation default">
        <div class="container">
            <div class="row">
                <nav class=" navbar-default">
                    <div class="logo">
                        <a href="index.php"><img class="lg-logo" src="img/logo.png" alt="logo"></a>
                        <a href="index.php"><img class="sm-logo" src="img/logo-m.png" alt="logo"></a>
                    </div>
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed no-fix" data-toggle="collapse" data-target="#main-menu" aria-expanded="false">
<!--                            <span class="sr-only">Toggle navigation</span>-->
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse" id="main-menu" >
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="#">Про виставку</a>
                                <ul class="dropdown-menu">
<!--                                    <div class="triangular"></div>-->
                                    <li><a href="#">Тематика</a></li>
                                    <li><a href="#">Переваги участі</a></li>
                                    <li><a href="#">Бізнес-зона</a></li>
                                </ul>
                            </li>
                            <li><a href="page-news.php">Новини</a></li>
                            <li><a href="#">Учасникам</a>
                                <ul class="dropdown-menu">
                                    <div class="triangular"></div>
                                    <li><a href="#">Умови участі</a></li>
                                    <li><a href="#">Заявка на участь зі стендом</a></li>
                                    <li><a href="#">Бізнес-зона для переговорів</a></li>
                                    <li><a href="#">Приклади обладнаних стендів</a></li>
                                    <li><a href="#">Додаткові послуги</a></li>
                                    <li><a href="#">Режим роботи</a></li>
                                    <li><a href="#">Готелі</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Відвідувачам</a>
                                <ul class="dropdown-menu">
                                    <div class="triangular"></div>
                                    <li><a href="#">Режим роботи</a></li>
                                    <li><a href="#">Замовити запрошення</a></li>
                                    <li><a href="#">Схема проїзду</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Програма</a></li>
                            <li><a href="#">Партнери</a></li>
                            <li><a href="#">Про нас</a>
                                <ul class="dropdown-menu">
                                    <div class="triangular"></div>
                                    <li><a href="#">Організатор</a></li>
                                    <li><a href="#">Прес-центр</a></li>
                                    <li><a href="map.php">Контакти</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>

</header>
