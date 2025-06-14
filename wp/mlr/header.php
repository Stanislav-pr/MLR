<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset');?>">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title><?php echo wp_get_document_title(); ?></title>


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Playfair:ital,opsz,wght@0,5..1200,300..900;1,5..1200,300..900&display=swap" rel="stylesheet">

	<?php wp_head();?>
</head>


<body <?php body_class() ?>>
    <header class="header">
        <div class="container">
            <div class="header-wrapper">
                <div class="logo">
                    <a href="#">
                        <img src="img/logo.svg" alt="MIR Logo">
                    </a>
                </div>
                <div class="header-navigation">
                    <div class="header-info">
                        <div class="header-phones">Цілодобово: <a href="#">+38 067 574 12 93</a> <a href="#">+48 883 513 035</a></div>
                        <a href="#" class="cta-button">звʼязатись</a>
                        <div class="languages">
                            <a href="#">UA</a>
                        </div>
                    </div>
                    <ul class="nav">
                        <li class="menu-item-has-children">
                            <a href="#">Кремація</a>
                            <ul class="sub-menu">
                                <li><a href="#"><img src="img/flag/ukraine.png" alt="">Україна</a></li>
                                <li><a href=""><img src="img/flag/germany.png" alt="">Німеччина</a></li>
                                <li><a href="#"><img src="img/flag/poland.png" alt="">Польща</a></li>
                                <li><a href=""><img src="img/flag/czech.png" alt="">Чехія</a></li>
                                <li><a href=""><img src="img/flag/moldova.png" alt="">Молдова</a></li>
                                <li><a href=""><img src="img/flag/latvia.png" alt="">Латвія</a></li>
                                <li><a href=""><img src="img/flag/lithuania.png" alt="">Литва</a></li>
                                <li><a href=""><img src="img/flag/estonia.png" alt="">Естонія</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="#">перевезення померлих</a>
                            <ul class="sub-menu">
                                <li><a href="#"><img src="img/flag/poland.png" alt="">Польща</a></li>
                                <li><a href=""><img src="img/flag/germany.png" alt="">Німеччина</a></li>
                                <li><a href=""><img src="img/flag/czech.png" alt="">Чехія</a></li>
                                <li><a href=""><img src="img/flag/estonia.png" alt="">Естонія</a></li>
                                <li><a href=""><img src="img/flag/latvia.png" alt="">Латвія</a></li>
                                <li><a href=""><img src="img/flag/lithuania.png" alt="">Литва</a></li>
                                <li><a href="#"><img src="img/flag/france.png" alt="">Франція</a></li>
                                <li><a href=""><img src="img/flag/moldova.png" alt="">Молдова</a></li>
                                <li><a href=""><img src="img/flag/romania.png" alt="">Румунія</a></li>
                                <li><a href=""><img src="img/flag/austria.png" alt="">Австрія</a></li>
                                <li><a href=""><img src="img/flag/belarus.png" alt="">Білорусь</a></li>
                                <li><a href=""><img src="img/flag/belgium.png" alt="">Бельгія</a></li>
                                <li><a href="#"><img src="img/flag/uk.png" alt="">Велика Британія</a></li>
                                <li><a href=""><img src="img/flag/bulgaria.png" alt="">Болгарія</a></li>
                                <li><a href=""><img src="img/flag/hungary.png" alt="">Угорщина</a></li>
                                <li><a href=""><img src="img/flag/denmark.png" alt="">Данія</a></li>
                                <li><a href=""><img src="img/flag/spain.png" alt="">Іспанія</a></li>
                                <li><a href=""><img src="img/flag/italy.png" alt="">Італія</a></li>
                                <li><a href="#"><img src="img/flag/netherlands.png" alt="">Нідерланди</a></li>
                                <li><a href=""><img src="img/flag/norway.png" alt="">Норвегія</a></li>
                                <li><a href=""><img src="img/flag/portugal.png" alt="">Португалія</a></li>
                                <li><a href=""><img src="img/flag/russia.png" alt="">Росія</a></li>
                                <li><a href=""><img src="img/flag/slovakia.png" alt="">Словаччина</a></li>
                                <li><a href=""><img src="img/flag/finland.png" alt="">Фінляндія</a></li>
                                <li><a href=""><img src="img/flag/sweden.png" alt="">Швеція</a></li>
                                <li><a href=""><img src="img/flag/earth.png" alt="">Інші країни</a></li>
                            </ul>
                        </li>
                        <li><a href="#">перевезення урн</a></li>
                        <li><a href="#">Контакти</a></li>
                        <li class="menu-item-has-children non-flag">
                            <a href="#">Партнерам</a>
                            <ul class="sub-menu">
                                <li><a href="#">Перевезення померлих</a></li>
                                <li><a href="">Викуп катафалків</a></li>
                                <li><a href="#">Ритуальні товари</a></li>
                            </ul>
                        </li>
                    </ul>

                </div>
                <div class="nav-mob">
                    <div class="languages">
                        <a href="#">ua</a>
                    </div>
                    <div class="burger">
                        <span class="line-1"></span>
                        <span class="line-2"></span>
                        <span class="line-3"></span>
                    </div>

                </div>
            </div>

        </div>
    </header>
    <div class="mobile-menu">
        <ul>
            <li><a href="">кремація</a></li>
            <li><a href="">перевезення померлих</a></li>
            <li><a href="">перевезення урн</a></li>
            <li><a href="">контакти</a></li>
            <li><a href="">партнерам</a></li>
        </ul>
        <div class="mobile-phones">
            Цілодобово:
            <a href="#">+38 067 574 12 93</a>
            <a href="#">+48 883 513 035</a>
        </div>
        <a href="#" class="btn-default">звʼязатись</a>
        <div class="mobile-contacts">
            <a href="tel:48883513035">+48 883 513 035 - ua / ru</a>
            <a href="tel:48572272697">+48 572 272 697 - pl / en / ua / ru</a>
            <div class="mobile-contacts-item">
                <div class="socials">
                    <a href="#" target="_blank"><img src="img/whatsapp.svg" alt=""></a>
                    <a href="#" target="_blank"><img src="img/viber.svg" alt=""></a>
                    <a href="#" target="_blank"><img src="img/telegram.svg" alt=""></a>
                </div>
                <a href="tel:380675741293 ">+38 067 574 12 93 </a>
            </div>
            <a href="mailto:biuro@mlrepatriation.com">biuro@mlrepatriation.com</a>
            <a href="#" target="_blank"><img src="img/facebook.svg" alt=""></a>
        </div>
        <p class="mobile-copyright">Mykhailo Lymar Repatriation © 2025</p>
    </div>
    <main class="main">
