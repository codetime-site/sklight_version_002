<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="SKlight - профессиональное осветительное оборудование для концертных площадок, театров и event-агентств">
    <meta name="keywords" content="осветительное оборудование, профессиональный свет, концертное освещение, театральное освещение">
    <title>SKlight - Профессиональное осветительное оборудование</title>
    
    <!-- Preconnect for performance -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    
    <!-- Leaflet CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet.markercluster@1.5.3/dist/MarkerCluster.css" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet.markercluster@1.5.3/dist/MarkerCluster.Default.css" />
    
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    
    <!-- Main CSS -->
    <link rel="stylesheet" href="css/styles.css">
    
    <!-- Favicon -->
    <link rel="icon" type="image/svg+xml" href="assets/logo.svg">
</head>
<body>
    <!-- Skip to main content for accessibility -->
    <a href="#main-content" class="skip-link">Перейти к основному содержанию</a>

    <!-- HEADER -->
    <header class="header" id="header">
        <div class="header__container">
            <a href="/" class="header__logo" aria-label="На главную">
                <svg class="logo" width="180" height="50" viewBox="0 0 180 50" xmlns="http://www.w3.org/2000/svg">
                    <text x="10" y="35" font-family="Montserrat, sans-serif" font-size="32" font-weight="700" fill="#ffffff">SKlight</text>
                    <circle cx="160" cy="25" r="8" fill="#0a95c2" opacity="0.8"/>
                </svg>
            </a>

            <nav class="header__nav" aria-label="Основная навигация">
                <ul class="nav__list">
                    <li class="nav__item nav__item--dropdown">
                        <a href="#catalog" class="nav__link">Вся продукция</a>
                        <ul class="nav__dropdown">
                            <li><a href="#catalog?filter=profile">PROFILE</a></li>
                            <li><a href="#catalog?filter=bsw">BSW</a></li>
                            <li><a href="#catalog?filter=wash">WASH</a></li>
                            <li><a href="#catalog?filter=beam">BEAM</a></li>
                            <li><a href="#catalog?filter=led-par">LED PAR</a></li>
                            <li><a href="#catalog?filter=led-bar">LED BAR</a></li>
                        </ul>
                    </li>
                    <li class="nav__item"><a href="#about" class="nav__link">О нас</a></li>
                    <li class="nav__item"><a href="#news" class="nav__link">Новости</a></li>
                    <li class="nav__item"><a href="#warranty" class="nav__link">Гарантия</a></li>
                    <li class="nav__item"><a href="#contacts" class="nav__link">Контакты</a></li>
                </ul>
            </nav>

            <a href="tel:+79991234567" class="header__phone" aria-label="Позвонить нам">
                <svg class="phone-icon" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z" fill="#0a95c2"/>
                </svg>
                <span class="phone-number">+7 (999) 123-45-67</span>
            </a>

            <button class="header__burger" aria-label="Открыть меню" aria-expanded="false">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </header>

      <!-- Mobile Menu Overlay -->
    <div class="mobile-menu" id="mobile-menu">
        <button class="mobile-menu__close" aria-label="Закрыть меню">✕</button>
        <nav class="mobile-menu__nav">
            <ul class="mobile-nav__list">
                <li class="mobile-nav__item">
                    <a href="#catalog" class="mobile-nav__link">Вся продукция</a>
                    <ul class="mobile-nav__submenu">
                        <li><a href="#catalog?filter=profile">PROFILE</a></li>
                        <li><a href="#catalog?filter=bsw">BSW</a></li>
                        <li><a href="#catalog?filter=wash">WASH</a></li>
                        <li><a href="#catalog?filter=beam">BEAM</a></li>
                        <li><a href="#catalog?filter=led-par">LED PAR</a></li>
                        <li><a href="#catalog?filter=led-bar">LED BAR</a></li>
                    </ul>
                </li>
                <li class="mobile-nav__item"><a href="#about" class="mobile-nav__link">О нас</a></li>
                <li class="mobile-nav__item"><a href="#news" class="mobile-nav__link">Новости</a></li>
                <li class="mobile-nav__item"><a href="#warranty" class="mobile-nav__link">Гарантия</a></li>
                <li class="mobile-nav__item"><a href="#contacts" class="mobile-nav__link">Контакты</a></li>
            </ul>
        </nav>
    </div>