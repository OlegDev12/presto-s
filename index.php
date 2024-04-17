


<?php
//*********************** Главная страница *************************
session_start();
$period_cookie = 2592000; // 30 дней (2592000 секунд)
 
if($_GET){
    setcookie("utm_source",$_GET['utm_source'],time()+$period_cookie);
    setcookie("utm_medium",$_GET['utm_medium'],time()+$period_cookie);
    setcookie("utm_term",$_GET['utm_term'],time()+$period_cookie);
    setcookie("utm_content",$_GET['utm_content'],time()+$period_cookie);
    setcookie("utm_campaign",$_GET['utm_campaign'],time()+$period_cookie);
}
 
if(!isset($_SESSION['utms'])) {
    $_SESSION['utms'] = array();
    $_SESSION['utms']['utm_source'] = '';
    $_SESSION['utms']['utm_medium'] = '';
    $_SESSION['utms']['utm_term'] = '';
    $_SESSION['utms']['utm_content'] = '';
    $_SESSION['utms']['utm_campaign'] = '';
}
$_SESSION['utms']['utm_source'] = $_GET['utm_source'] ? $_GET['utm_source'] : $_COOKIE['utm_source'];
$_SESSION['utms']['utm_medium'] = $_GET['utm_medium'] ? $_GET['utm_medium'] : $_COOKIE['utm_medium'];
$_SESSION['utms']['utm_term'] = $_GET['utm_term'] ? $_GET['utm_term'] : $_COOKIE['utm_term'];
$_SESSION['utms']['utm_content'] = $_GET['utm_content'] ? $_GET['utm_content'] : $_COOKIE['utm_content'];
$_SESSION['utms']['utm_campaign'] = $_GET['utm_campaign'] ? $_GET['utm_campaign'] : $_COOKIE['utm_campaign'];
?>
<!DOCTYPE html><html lang="ru-RU"><head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="images/w6AUNLLhlXKR.png">
    <title>Мікрострумовий ліфтинг масажер </title>
    <meta name="description" content="Мікрострумовий ліфтинг масажер">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="css/css2.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/Mmc63HNeFmWp.css" type="text/css">
    <link rel="stylesheet" href="css/KUVd71PC4dim.css" type="text/css">
    <link rel="stylesheet" href="css/omoPHE85VX4n.css" type="text/css">
    <link rel="stylesheet" href="css/nQn05J527RMj.css" crossorigin="anonymous" referrerpolicy="no-referrer" type="text/css">
    <link rel="stylesheet" href="css/MuOxkDzosuVd.css" crossorigin="anonymous" referrerpolicy="no-referrer" type="text/css">
    <link rel="stylesheet" href="css/itVmyj8F4rmI.css" type="text/css">
    <link rel="stylesheet" href="css/un49B0JD55oQ.css" type="text/css">
    <link rel="stylesheet" href="css/5tNbgT4a5chk.css" type="text/css">
<!-- Meta Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '400057042352306');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=400057042352306&ev=PageView&noscript=1"
/></noscript>
<!-- End Meta Pixel Code -->

</head>


<style>
    .btn-buy {
        font-size: 24px !important;
    }

    .logo a span {
        color: white;
        font-weight: 900;
        text-transform: uppercase;
        font-size: 20px;
        margin-left: 20px;
        -webkit-transition: all .4s;
        transition: all .4s;
    }
    .reviews_slider .slick-prev, .reviews_slider .slick-next{
        background-color: #b06868;
    }
    .how-container .how-item__icon svg {
        width: 100%;
        height: 100%;
        -o-object-fit: contain;
        object-fit: contain;
        fill: #5fc951;
    }
    header, .cta-headline {
        background-color: #d19797;
    }

    @media (max-width: 575px) {
        .mobile-content .mobile-content__header, .col-12.cta-headline {
            background-color: #d19797;
        }
        .mobile-content p {
            font-size: 18px;
            line-height: 1.6;
            margin-bottom: 30px;
            text-align: center;
            margin: 1em;
        }

        .mobile-content .mobile-content__header h3,
        .cta-headline h3 {
            font-size: 30px;
            margin-bottom: 5px;
        }

        .mobile-content .mobile-content__header h5,
        .cta-headline h5 {
            font-size: 20px;
            margin: 0;
            margin-bottom: 5px;
        }

        .bullet-item {
            padding: 16px;
            height: auto;
        }

        .bullet-item .bullet-img {
            min-height: unset;
        }


        .reviews_slider img {
            margin: 0 auto;
            -webkit-border-radius: 10px;
            -moz-border-radius: 10px;
            border-radius: 10px;
            max-height: 300px;
            object-fit: cover;
            width: 100%;
            margin-bottom: 1em;
        }

        .cta-img {
            width: 107%;
            height: 100%;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            padding: 0;
            margin-left: -12px;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: "TTNorms Medium", sans-serif;
            font-size: 24px;
        }
    }
</style>
</head>

<body class="loader-active">
<div class="loader">
    <div class="spinner-border" role="status">
        <span class="visually-hidden">Loading...</span>
    </div>
</div>
<header id="header" class="header">
    <!--header-fixed -->
    <div class="container">
        <div class="header-content">
            <div class="logo">
                <a href="#">
                    <img src="images/iH4CluO4kpOJ.png" alt="">
                    <span>Мікрострумовий ліфтинг масажер </span>
                </a>
            </div>
            <nav>
                <li>
                    <a href="#bullets">
                        Характеристики
                    </a>
                </li>
                <li>
                    <a href="#video">
                        Відеоогляд
                    </a>
                </li>
                <li>
                    <a href="#why">
                        Для чого
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-buy-item" data-bs-toggle="modal" data-bs-target="#orderModal">
                        Купити
                    </a>
                </li>
            </nav>
        </div>
    </div>
</header>

<section class="first" id="first">
    <div class="container main-content">
        <div class="row">
            <div class="col-lg-6 col-12">
                <div class="first-text">
                    <h1>Мікрострумовий ліфтинг масажер </h1>
                    <!--<h5 class="text-center fw-semibold">Працює коли немає вдома електроенергії</h5>-->
                    <span class="subtitle">зі знижкою 50%</span>

                    <p>
                    Ліфтинг масажер це зручний і компактний апарат для мікрострумової терапії. Апарат забезпечує домашній ліфтинг шиї та обличчя, ефективно впливає на структуру шкіри, сприяє її омолодженню.
                    <br>Унікальний комплексний вплив мікрострумової терапії, гарячого масажу, фото- (LED) і іонотерапії - гарантує вам чудовий візуальний ефект загального стану шкіри обличчя всього за 10 хвилин в день.

                    </p>

                    <div class="price_block">
                        <div class="price_item old">
                            <div class="text">Звичайна ціна:</div>
                            <div class="value"><del>1199грн</del></div>
                        </div>
                        <div class="price_item new">
                            <div class="text">Ціна сьогодні:</div>
                            <div class="value"> 599грн </div>
                        </div>
                    </div>

                    <div class="first-btns">
                        <button type="button" class="btn-buy" data-bs-toggle="modal" data-bs-target="#orderModal">
                            Зробити замовлення
                        </button>

                        <a href="#bullets" class="btn-buy btn-buy--details">Детальніше</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="first-img">
                    <img src="images/main.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="mobile-content">
        <div class="mobile-content__header">
            <h3 class="text-center fw-bolder">Мікрострумовий ліфтинг масажер </h3>
            <!--<h5 class="text-center fw-semibold">Працює коли немає вдома електроенергії</h5>-->
            <span class="bg-danger rounded-2text-center fw-semibold">Зі знижкою 50%</span>
        </div>
        <img src="images/main.jpg" alt="">
        <div class="price_block">
            <div class="price_item old">
                <div class="text">Звичайна ціна:</div>
                <div class="value"><del>1199грн</del></div>
            </div>
            <div class="price_item new">
                <div class="text">Ціна сьогодні:</div>
                <div class="value"> 599грн </div>
            </div>
        </div>
        <br>
        <b>Акція діє з 14.04.2024 по 21.04.2024</b>
        <button type="button" class="btn-buy" data-bs-toggle="modal" data-bs-target="#orderModal">
            Зробити замовлення
        </button>
        <!--<img src="images/second.jpg" alt="">-->
        <p>
        Ліфтинг масажер це зручний і компактний апарат для мікрострумової терапії. Апарат забезпечує домашній ліфтинг шиї та обличчя, ефективно впливає на структуру шкіри, сприяє її омолодженню.
                    <br>Унікальний комплексний вплив мікрострумової терапії, гарячого масажу, фото- (LED) і іонотерапії - гарантує вам чудовий візуальний ефект загального стану шкіри обличчя всього за 10 хвилин в день.

        </p>
    </div>

</section>

<!-- <section class="advantages" id="advantages">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <img src="images/bullets_main.gif" alt="">
            </div>
        </div>
    </div>
</section>-->



<section class="section-bullets" id="bullets">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="text-center">Характеристики</h2>
            </div>
        </div>
        <div class="bullets-container">
            <div class="row">
                <div class="col col-xl-4 col-md-6 col-12">
                    <div class="bullet-item">
                        <div class="bullet-img">
                            <img src="images/feature1.jpg" alt="">
                        </div>
                        <div class="bullet-descr">
                            <h5 class="mt-6">Зелене світло </h5>
                            <ul class="char-list">
                                <li>
                                Очистить шкіру від бруду, звузить пори, усуне акне і вирішить проблеми тьмяної шкіри. Підвищить мікроциркуляцію поверхні тіла.


                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col col-xl-4 col-md-6 col-12">
                    <div class="bullet-item">
                        <div class="bullet-img">
                            <img src="images/feature2.jpg" alt="">
                        </div>

                        <div class="bullet-descr">
                            <h5 class="mt-6">Червоне світло</h5>
                            <ul class="char-list">
                                <li>
                                Ефективно стимулює і розслабляє шкіру, оздоровлює колаген, покращує стан темної шкіри та зменшує дрібні зморшки.

                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col col-xl-4 col-md-6 col-12">
                    <div class="bullet-item">
                        <div class="bullet-img">
                            <img src="images/feature3.jpg" alt="">
                        </div>

                        <div class="bullet-descr">
                            <h5 class="mt-6">Синє світло</h5>
                            <ul class="char-list">
                                <li>
                                М'яко пробуджує і розслабляє шкіру, допомагаючи шкірі відновити її життєвий тонус. Ефективно поліпшить проблеми зі шкірою, зменшить акне і прищі.

                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                
            </div>
        </div>
    </div>
</section>

<section class="how cmr-bck-dark" id="how">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="text-center">
                Які проблеми вирішує
                </h2>
            </div>
        </div>
        <div class="row">
            <div class="how-container">
                <div class="how-item">
                    <div class="how-item__icon">
                        <svg class="svgicon" id="svg54" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60">
                            <rect x="0" y="0" width="60" height="60" style="fill: transparent;" rx="50%" ry="50%">
                            </rect>
                            <g transform="scale(0.6) translate(20, 20)">
                                <path class="st0" d="M58.624,12.583c-1.225-3.155-3.718-2.657-6.42-2.122c-1.613,0.337-8.791,2.437-20.147,14.413 c-4.714,4.97-7.822,8.932-9.869,11.954c-1.25-1.535-2.684-3.178-4.188-4.683c-4.627-4.625-9.786-7.802-10.002-7.936 c-2.167-1.324-4.993-0.643-6.32,1.521c-1.325,2.164-0.646,4.994,1.516,6.323c0.045,0.028,4.475,2.768,8.302,6.596 c3.904,3.904,7.439,9.183,7.475,9.234c0.862,1.294,2.308,2.05,3.829,2.05c0.261,0,0.522-0.022,0.786-0.067 c1.795-0.312,3.238-1.654,3.677-3.423c0.01-0.042,1.835-5.083,11.47-15.24c7.759-8.183,12.934-10.784,14.727-11.505 c0.017-0.003,2.947-1.268,2.98-1.282C58.777,17.457,59.538,14.94,58.624,12.583z">
                                </path>
                            </g>
                        </svg>
                    </div>
                    <div class="how-item__text">
                    Зменшує зморшки


                    </div>
                </div>

                <div class="how-item">
                    <div class="how-item__icon">
                        <svg class="svgicon" id="svg54" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60">
                            <rect x="0" y="0" width="60" height="60" style="fill: transparent;" rx="50%" ry="50%">
                            </rect>
                            <g transform="scale(0.6) translate(20, 20)">
                                <path class="st0" d="M58.624,12.583c-1.225-3.155-3.718-2.657-6.42-2.122c-1.613,0.337-8.791,2.437-20.147,14.413 c-4.714,4.97-7.822,8.932-9.869,11.954c-1.25-1.535-2.684-3.178-4.188-4.683c-4.627-4.625-9.786-7.802-10.002-7.936 c-2.167-1.324-4.993-0.643-6.32,1.521c-1.325,2.164-0.646,4.994,1.516,6.323c0.045,0.028,4.475,2.768,8.302,6.596 c3.904,3.904,7.439,9.183,7.475,9.234c0.862,1.294,2.308,2.05,3.829,2.05c0.261,0,0.522-0.022,0.786-0.067 c1.795-0.312,3.238-1.654,3.677-3.423c0.01-0.042,1.835-5.083,11.47-15.24c7.759-8.183,12.934-10.784,14.727-11.505 c0.017-0.003,2.947-1.268,2.98-1.282C58.777,17.457,59.538,14.94,58.624,12.583z">
                                </path>
                            </g>
                        </svg>
                    </div>
                    <div class="how-item__text">
                    Підтягує шкіру

                    </div>
                </div>

                <div class="how-item">
                    <div class="how-item__icon">
                        <svg class="svgicon" id="svg54" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60">
                            <rect x="0" y="0" width="60" height="60" style="fill: transparent;" rx="50%" ry="50%">
                            </rect>
                            <g transform="scale(0.6) translate(20, 20)">
                                <path class="st0" d="M58.624,12.583c-1.225-3.155-3.718-2.657-6.42-2.122c-1.613,0.337-8.791,2.437-20.147,14.413 c-4.714,4.97-7.822,8.932-9.869,11.954c-1.25-1.535-2.684-3.178-4.188-4.683c-4.627-4.625-9.786-7.802-10.002-7.936 c-2.167-1.324-4.993-0.643-6.32,1.521c-1.325,2.164-0.646,4.994,1.516,6.323c0.045,0.028,4.475,2.768,8.302,6.596 c3.904,3.904,7.439,9.183,7.475,9.234c0.862,1.294,2.308,2.05,3.829,2.05c0.261,0,0.522-0.022,0.786-0.067 c1.795-0.312,3.238-1.654,3.677-3.423c0.01-0.042,1.835-5.083,11.47-15.24c7.759-8.183,12.934-10.784,14.727-11.505 c0.017-0.003,2.947-1.268,2.98-1.282C58.777,17.457,59.538,14.94,58.624,12.583z">
                                </path>
                            </g>
                        </svg>
                    </div>
                    <div class="how-item__text">
                    Покращує кровообіг і обмін речовин

                    </div>
                </div>
                <div class="how-item">
                    <div class="how-item__icon">
                        <svg class="svgicon" id="svg54" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60">
                            <rect x="0" y="0" width="60" height="60" style="fill: transparent;" rx="50%" ry="50%">
                            </rect>
                            <g transform="scale(0.6) translate(20, 20)">
                                <path class="st0" d="M58.624,12.583c-1.225-3.155-3.718-2.657-6.42-2.122c-1.613,0.337-8.791,2.437-20.147,14.413 c-4.714,4.97-7.822,8.932-9.869,11.954c-1.25-1.535-2.684-3.178-4.188-4.683c-4.627-4.625-9.786-7.802-10.002-7.936 c-2.167-1.324-4.993-0.643-6.32,1.521c-1.325,2.164-0.646,4.994,1.516,6.323c0.045,0.028,4.475,2.768,8.302,6.596 c3.904,3.904,7.439,9.183,7.475,9.234c0.862,1.294,2.308,2.05,3.829,2.05c0.261,0,0.522-0.022,0.786-0.067 c1.795-0.312,3.238-1.654,3.677-3.423c0.01-0.042,1.835-5.083,11.47-15.24c7.759-8.183,12.934-10.784,14.727-11.505 c0.017-0.003,2.947-1.268,2.98-1.282C58.777,17.457,59.538,14.94,58.624,12.583z">
                                </path>
                            </g>
                        </svg>
                    </div>
                    <div class="how-item__text">
                    Знімає набряки

                    </div>
                </div>


                <div class="how-item">
                    <div class="how-item__icon">
                        <svg class="svgicon" id="svg54" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60">
                            <rect x="0" y="0" width="60" height="60" style="fill: transparent;" rx="50%" ry="50%">
                            </rect>
                            <g transform="scale(0.6) translate(20, 20)">
                                <path class="st0" d="M58.624,12.583c-1.225-3.155-3.718-2.657-6.42-2.122c-1.613,0.337-8.791,2.437-20.147,14.413 c-4.714,4.97-7.822,8.932-9.869,11.954c-1.25-1.535-2.684-3.178-4.188-4.683c-4.627-4.625-9.786-7.802-10.002-7.936 c-2.167-1.324-4.993-0.643-6.32,1.521c-1.325,2.164-0.646,4.994,1.516,6.323c0.045,0.028,4.475,2.768,8.302,6.596 c3.904,3.904,7.439,9.183,7.475,9.234c0.862,1.294,2.308,2.05,3.829,2.05c0.261,0,0.522-0.022,0.786-0.067 c1.795-0.312,3.238-1.654,3.677-3.423c0.01-0.042,1.835-5.083,11.47-15.24c7.759-8.183,12.934-10.784,14.727-11.505 c0.017-0.003,2.947-1.268,2.98-1.282C58.777,17.457,59.538,14.94,58.624,12.583z">
                                </path>
                            </g>
                        </svg>
                    </div>
                    <div class="how-item__text">
                    Звужує пори


                    </div>
                </div>

                <div class="how-item">
                    <div class="how-item__icon">
                        <svg class="svgicon" id="svg54" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60">
                            <rect x="0" y="0" width="60" height="60" style="fill: transparent;" rx="50%" ry="50%">
                            </rect>
                            <g transform="scale(0.6) translate(20, 20)">
                                <path class="st0" d="M58.624,12.583c-1.225-3.155-3.718-2.657-6.42-2.122c-1.613,0.337-8.791,2.437-20.147,14.413 c-4.714,4.97-7.822,8.932-9.869,11.954c-1.25-1.535-2.684-3.178-4.188-4.683c-4.627-4.625-9.786-7.802-10.002-7.936 c-2.167-1.324-4.993-0.643-6.32,1.521c-1.325,2.164-0.646,4.994,1.516,6.323c0.045,0.028,4.475,2.768,8.302,6.596 c3.904,3.904,7.439,9.183,7.475,9.234c0.862,1.294,2.308,2.05,3.829,2.05c0.261,0,0.522-0.022,0.786-0.067 c1.795-0.312,3.238-1.654,3.677-3.423c0.01-0.042,1.835-5.083,11.47-15.24c7.759-8.183,12.934-10.784,14.727-11.505 c0.017-0.003,2.947-1.268,2.98-1.282C58.777,17.457,59.538,14.94,58.624,12.583z">
                                </path>
                            </g>
                        </svg>
                    </div>
                    <div class="how-item__text">
                    Вирівнює тон

                    </div>
                </div>
                <div class="how-item">
                    <div class="how-item__icon">
                        <svg class="svgicon" id="svg54" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60">
                            <rect x="0" y="0" width="60" height="60" style="fill: transparent;" rx="50%" ry="50%">
                            </rect>
                            <g transform="scale(0.6) translate(20, 20)">
                                <path class="st0" d="M58.624,12.583c-1.225-3.155-3.718-2.657-6.42-2.122c-1.613,0.337-8.791,2.437-20.147,14.413 c-4.714,4.97-7.822,8.932-9.869,11.954c-1.25-1.535-2.684-3.178-4.188-4.683c-4.627-4.625-9.786-7.802-10.002-7.936 c-2.167-1.324-4.993-0.643-6.32,1.521c-1.325,2.164-0.646,4.994,1.516,6.323c0.045,0.028,4.475,2.768,8.302,6.596 c3.904,3.904,7.439,9.183,7.475,9.234c0.862,1.294,2.308,2.05,3.829,2.05c0.261,0,0.522-0.022,0.786-0.067 c1.795-0.312,3.238-1.654,3.677-3.423c0.01-0.042,1.835-5.083,11.47-15.24c7.759-8.183,12.934-10.784,14.727-11.505 c0.017-0.003,2.947-1.268,2.98-1.282C58.777,17.457,59.538,14.94,58.624,12.583z">
                                </path>
                            </g>
                        </svg>
                    </div>
                    <div class="how-item__text">
                    Зміцнює контури обличчя

                    </div>
                </div>
                <div class="how-item">
                    <div class="how-item__icon">
                        <svg class="svgicon" id="svg54" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60">
                            <rect x="0" y="0" width="60" height="60" style="fill: transparent;" rx="50%" ry="50%">
                            </rect>
                            <g transform="scale(0.6) translate(20, 20)">
                                <path class="st0" d="M58.624,12.583c-1.225-3.155-3.718-2.657-6.42-2.122c-1.613,0.337-8.791,2.437-20.147,14.413 c-4.714,4.97-7.822,8.932-9.869,11.954c-1.25-1.535-2.684-3.178-4.188-4.683c-4.627-4.625-9.786-7.802-10.002-7.936 c-2.167-1.324-4.993-0.643-6.32,1.521c-1.325,2.164-0.646,4.994,1.516,6.323c0.045,0.028,4.475,2.768,8.302,6.596 c3.904,3.904,7.439,9.183,7.475,9.234c0.862,1.294,2.308,2.05,3.829,2.05c0.261,0,0.522-0.022,0.786-0.067 c1.795-0.312,3.238-1.654,3.677-3.423c0.01-0.042,1.835-5.083,11.47-15.24c7.759-8.183,12.934-10.784,14.727-11.505 c0.017-0.003,2.947-1.268,2.98-1.282C58.777,17.457,59.538,14.94,58.624,12.583z">
                                </path>
                            </g>
                        </svg>
                    </div>
                    <div class="how-item__text">
                    Знімає напругу і втому

                    </div>
                </div>

            </div>
        </div>
    </div>
</section>


<section class="video" id="video">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="fs-2 text-center">
                    Відеоогляд
                </h2>
            </div>
        </div>
        <div class="row mt-1">
            <div class="col-12">
                <div class="video-block">
                    <iframe width="100%" height="315" src="https://www.youtube.com/embed/1MUPlkw6oC4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="why" id="why">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h4 class="fs-2 text-center">Переваги ліфтинг масажера</h4>
            </div>
        </div>
        <div class="why-container">
            <div class="row">
                <div class="col-lg-4 col-12">
                    <div class="why-item">
                        <h5>�&nbsp;ежим EMS</h5>
                        <img src="images/why1.jpg" alt="">
                        <span class="fs-4 mt-3">
                        Підсилює активність шкіри, розгладжує зморшки, покращує клітинний метаболізм і підвищує еластичність і пружність за допомогою пульсової вібрації

                        </span>
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="why-item">
                        <h5>Інтелектуальний пристрій </h5>
                        <img src="images/why2.jpg" alt="">
                        <span class="fs-4 mt-3">
                        Автоматично запускається, коли голівка пристрою стикається зі шкірою, і переходить в режим очікування через 4 хвилини, автоматично відключається після додаткової хвилини бездіяльності

                        </span>
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="why-item">
                        <h5>Важливо</h5>
                        <img src="images/why3.jpg" alt="">
                        <span class="fs-4 mt-3">
                        Необхідно очистити зону обробки. Якщо у вас є макіяж, видаліть його за допомогою спеціального засобу для зняття макіяжу. Нанесіть на шкіру вашу улюблену сироватку або будь-який гель для апаратних процедур

                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="galery reviews-block">
    <div class="container">
        <div class="row mt-3">
            <div class="col-12">
                <h2 class="text-center">Відгуки</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="reviews_slider">
                    

                    <div>
                        <div class="review_item">
                            <div class="author_block clearfix">
                                <img class="avatar" src="images/rew1.jpg" alt="Міні-камера спостереження">
                                <div class="author_info">
                                    <div class="name">Приходько Юлія</div>
                                    <div class="info"> м.�&nbsp;івне, 35р.</div>
                                </div>
                            </div>
                            <p>
                            Замовила пристрій прочитавши відгуки.Спробувала пристрій перший раз. Поки про результат рано говорити, але відчуття на шкірі дуже приємні. 


                            </p>
                        </div>
                    </div>


                    <div>
                        <div class="review_item">
                            <div class="author_block clearfix">
                                <img class="avatar" src="images/rew2.jpg" alt="Міні-камера спостереження">
                                <div class="author_info">
                                    <div class="name">Боднар Олеся </div>
                                    <div class="info">м.Броди 39р. </div>
                                </div>
                            </div>
                            <p>
                            Зробила собі такий подаруночок і не пожалкувала. В воєнний час,коли бігати по спеціалістах немає змоги, саме те. �&nbsp;екомендую!

                            </p>
                        </div>
                    </div>

                    <div>
                        <div class="review_item">
                            <div class="author_block clearfix">
                                <img class="avatar" src="images/rew3.jpg" alt="Міні-камера спостереження">
                                <div class="author_info">
                                    <div class="name">Миколайчук Ірина </div>
                                    <div class="info">м.Костопіль 41р.</div>
                                </div>
                            </div>
                            <p>
                            В цілому масажером задоволена, поки в режимі тестування.

                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

</div>

<section class="cta" id="cta">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 cta-headline">
                <h3 class="text-center fw-bolder">Мікрострумовий ліфтинг масажер </h3>
                <!--<h5 class="text-center fw-semibold">Працює коли немає вдома електроенергії</h5>-->
                <span class="bg-danger rounded-2text-center fw-semibold">Зі знижкою
                    50%</span>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="cta-img">
                    <img src="images/main.jpg" alt="">
                </div>
            </div>
            <div class="col-12">
                <div class="cta-form">
                    <div class="price_block">
                        <div class="price_item old">
                            <div class="text">Звичайна ціна:</div>
                            <div class="value"><del>1199грн</del></div>
                        </div>
                        <div class="price_item new">
                            <div class="text">Ціна сьогодні:</div>
                            <div class="value"> 599грн </div>
                        </div>
                    </div>
                    <br>
                    <b>Акція діє з 14.04.2024 по 21.04.2024</b>
                    <button type="button" class="btn-buy" data-bs-toggle="modal" data-bs-target="#orderModal">
                        Зробити замовлення
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<footer>
    <div class="container">
        <div class="row">
            <div class="company-details">
                <!-- <span style="margin-bottom: 20px">ТОВ «БЕСТ БАЙ»</span>
                <span>Одеса,вул. Композитора Ніщинського 28</span>
                <span>
                    <a href="tel:+380960462171">+380 96 046 21 71</a>
                </span> -->

            </div>

            <style>
                .company-details {
                    box-sizing: border-box;
                    width: 100%;
                    margin: 0 auto;
                    text-align: center;
                    font-weight: 700;
                    color: white;
                    margin-bottom: 30px;
                    display: flex;
                    flex-direction: column;
                    align-items: center;
                }
            </style>
        </div>

        <div class="row">
            <div class="col-md-4">
                <span class="footer__policy">Одеса. Всі права захищені 2018-2023</span>
            </div>
            <div class="col-md-4">
                <h3 class="footer__title">Мікрострумовий ліфтинг масажер </h3>
            </div>
            <div class="col-md-4">
                <a class="footer__link" href="politics.html" target="_blank">Політика конфіденційності</a>
            </div>
        </div>
    </div>
</footer>


<div class="modal fade" id="orderModal" tabindex="-1" aria-labelledby="orderModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="upsell/index.php" method="post">
                    <h3 class="mb-3">Заповніть, будь ласка, форму нижче</h3>
                    <input class="form-control form-control-lg" type="text" placeholder="Ваше ім'я" name="name" required="">
                    <input class="form-control form-control-lg mt-3" type="text" placeholder="Ваш номер телефону" name="phone" required="">

                    <input type="hidden" name="product" id="hiddenProduct" value="Мікрострумовий ліфтинг масажер" hidden="hidden">
                    <input type="hidden" name="product_id" id="product_id" value="5" hidden="hidden">
                    <input type="hidden" name="fbp" id="fbp" value="920908922226906" hidden="hidden">
                    
                    <input type="hidden" name="product_price" id="product_price" value="599" hidden="hidden">
                    <input type="hidden" name="count" value="1">
                    <input type="hidden" name="type" value="offer">

                    <button type="submit" class="btn-buy mt-5">
                        Зробити замовлення
                    </button>

                    <span class="mt-4 text-center" style="font-size: 12px">
                        Відправляючи дані ви погоджуєтесь з <a href="politics.html" target="_blank">політикою
                            конфіденційності</a>
                    </span>
                </form>
                <form id="order_form" class="main-order-form main_form" action="order.php" method="post">
				<input type="text" name="name" placeholder="Введіть ваше ім'я" required="">
				<input type="tel" name="phone" placeholder="Введіть ваш телефон" required="">
				<button class="button-m">Замовити зі знижкою</button>
			</form>
            </div>
        </div>
    </div>
</div>

<script src="js/hZCvCzKTuLwP.js"></script>
<script src="js/FhQaVeiVuzyf.js"></script>
<script src="js/xUdRJd456jUG.js"></script>
<script src="js/fTJyKMz8THd4.js"></script>
<script src="js/MuZNzYEKhfNY.js" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="js/HvBjuACFvAOp.js"></script>





</body></html>

	<link type="text/css" rel="stylesheet" href="css/roboto.css">
	<link href="css/popup-m1-style.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="css/enhancer_all_style.css">
	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.maskedinput.min.js"></script>
	<script>
		$('input[name=phone]').mask("+38 (999) 999 99 99");

		$(document).on('submit', 'form', function () {
			let btn = $(this).find('button');

			$(btn).text('Відправка...');
			$(btn).attr('disabled');
			$(btn).css('background-color', 'gray');
			$(btn).css('color', 'white');
		})
	</script>
	<script src="js/main.js"></script>



</body></html>
