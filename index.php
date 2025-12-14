<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/swiper-bundle.min.css">
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/style.css">
  <title>Aliance Production</title>
</head>
<body class="front-page">

  <div class="mobile-menu">

    <ul class="mobile-menu-nav">
      <li class="mobile-menu-nav-item">
        <a class="mobile-menu-nav-link" href="#">О компании</a>
      </li>

      <li class="mobile-menu-nav-item">
        <a class="mobile-menu-nav-link" href="#">Контрактное производство</a>

        <ul class="mobile-submenu">
          <li class="mobile-submenu-item">
            <a class="mobile-submenu-link" href="#">Автомобильная химия</a>
          </li>
          <li class="mobile-submenu-item">
            <a class="mobile-submenu-link" href="#">Бытовая химия</a>
          </li>
          <li class="mobile-submenu-item">
            <a class="mobile-submenu-link" href="#">Дезинфицирующие средства</a>
          </li>
          <li class="mobile-submenu-item">
            <a class="mobile-submenu-link" href="#">Пищевые аэрозоли</a>
          </li>
          <li class="mobile-submenu-item">
            <a class="mobile-submenu-link" href="#">Косметическая продукция</a>
          </li>
          <li class="mobile-submenu-item">
            <a class="mobile-submenu-link" href="#">Краски аэрозольные</a>
          </li>
        </ul>
        <!-- /.mobile-submenu -->

      </li>

      <li class="mobile-menu-nav-item">
        <a class="mobile-menu-nav-link" href="#">Собственные марки</a>
        <ul class="mobile-submenu">
          <li class="mobile-submenu-item">
            <a class="mobile-submenu-link" href="#">Автохимия AG-Tech</a>
          </li>
          <li class="mobile-submenu-item">
            <a class="mobile-submenu-link" href="#">Автохимия AP</a>
          </li>
        </ul>
        <!-- /.mobile-submenu -->
      </li>

      <li class="mobile-menu-nav-item">
        <a class="mobile-menu-nav-link" href="#">Новости</a>
      </li>
      <li class="mobile-menu-nav-item">
        <a class="mobile-menu-nav-link" href="#">Контакты</a>
      </li>
    </ul>
    <!-- /.mobile-menu-nav -->

    <a class="mobile-phone" href="tel:+74996861014">+7 (499) 686-10-14</a>

    <div class="mobile-info">
        <div class="mobile-info-address">
          <svg class="mobile-socials-icon-vk" width="24" height="24">
            <use href="img/sprite.svg#mark"></use>
          </svg>
          <address>г. Москва, Холодильный пер. 4к1с8</address>
        </div>
        <div class="mobile-info-email">
          <svg class="mobile-socials-icon-vk" width="24" height="24">
            <use href="img/sprite.svg#mail"></use>
          </svg>
          <a href="mailto:a.dragunov@tdaliance.ru">a.dragunov@tdaliance.ru</a>
        </div>
    </div>
    <!-- /.mobile-info -->

     <div class="mobile-socials">
      <a class="mobile-socials-icon" href="#">
        <svg class="mobile-socials-icon-vk" width="24" height="24">
          <use href="img/sprite.svg#vk"></use>
        </svg>
      </a>
      <a class="mobile-socials-icon" href="#">
        <svg class="mobile-socials-icon-inst" width="24" height="24">
          <use href="img/sprite.svg#inst"></use>
        </svg>
      </a>
     </div>
     <!-- /.mobile-socials -->

  </div>
  <!-- /.mobile-menu -->



  <nav class="navbar">

    <a class="mobile-menu-toggle" href="#">
      <div class="mobile-menu-line"></div>
      <div class="mobile-menu-line"></div>
      <div class="mobile-menu-line"></div>
    </a>
    <!-- /.mobile-menu-toggle -->
  
    <a class="header-logo" href="./">
      <svg class="logo-svg logo-light">
        <use href="img/sprite.svg#logo-light"></use>
      </svg>
      <svg class="logo-svg logo-dark">
        <use href="img/sprite.svg#logo"></use>
      </svg>
    </a>
    <!-- /.logo-link -->
  
    <ul class="header-nav">
      <li class="header-nav-item">
        <a class="header-nav-link" href="about.php">О компании</a>
      </li>
      <li class="header-nav-item">
        <a class="header-nav-link" href="#">Контрактное производство</a>
      </li>
      <li class="header-nav-item">
        <a class="header-nav-link" href="#">Собственные торговые марки</a>
      </li>
      <li class="header-nav-item">
        <a class="header-nav-link" href="#">Новости</a>
      </li>
      <li class="header-nav-item">
        <a class="header-nav-link" href="#">Контакты</a>
      </li>
    </ul>
    <!-- /.header-nav -->
  
    <div class="header-phone">
      <svg class="phone-icon" width="24" height="24">
        <use href="img/sprite.svg#phone"></use>
      </svg>
      <a class="header-phone-link" href="tel:+74996861014">+7 (499) 686-10-14</a>
    </div>
    <!-- /.header-phone -->
  
    <button class="navbar-button button" data-toggle="modal">
      <svg class="button-icon" width="24" height="24">
        <use href="img/sprite.svg#phone"></use>
      </svg>
      <span class="button-text">Получить консультацию</span>
    </button>
    <!-- /.header-button /.button -->
  
  </nav>
  <!-- /.navbar -->
  
  <header class="header header-image">

    <div class="container header-container">
      <div class="header-content">
        <div class="seporator"></div>
        <h1 class="header-title">
          <?php echo "Главная страница"; ?>
          <!-- Комплексное обеспечение товарами и расходными материалами бизнеса -->
        </h1>
        <p class="header-text">
          Высокий уровень вовлечения представителей целевой аудитории является четким доказательством простого факта:
          высококачественный прототип будущего проекта напрямую зависит от анализа существующих паттернов поведения.
        </p>
        <div class="button header-button" data-toggle="modal">Подробнее о компании</div>
      </div>
      <!-- /.header-content -->



      <!-- Slider main container -->
      <div class="swiper features-slider">
        <!-- Additional required wrapper -->
        <ul class="swiper-wrapper header-features">
          <!-- Slides -->
          <li class="swiper-slide header-features-item">
            <svg width="36" height="36">
              <use href="img/sprite.svg#time"></use>
            </svg>
            <p class="header-features-text">
              Непрерывная работа c 2017 года
            </p>
          </li>
          <li class="swiper-slide header-features-item">
            <svg width="36" height="36">
              <use href="img/sprite.svg#sertificate"></use>
            </svg>
            <p class="header-features-text">
              Вся продукция сертифицирована
            </p>
          </li>
          <li class="swiper-slide header-features-item">
            <svg width="36" height="36">
              <use href="img/sprite.svg#control"></use>
            </svg>
            <p class="header-features-text">
              Контроль качества на всех этапах
            </p>
          </li>
          <li class="swiper-slide header-features-item">
            <svg width="36" height="36">
              <use href="img/sprite.svg#delivery"></use>
            </svg>
            <p class="header-features-text">
              Возможны поставки по всей России
            </p>
          </li>
          <li class="swiper-slide header-features-item">
            <svg width="36" height="36">
              <use href="img/sprite.svg#speed"></use>
            </svg>
            <p class="header-features-text">
              Оперативное производство
            </p>
          </li>

        </ul>
        <!-- /.Additional required wrapper -->
      
        <!-- If we need navigation buttons -->
        <div class="slider-buttons">
          <div class="slider-button-prev">
            <svg width="36" height="24">
              <use href="img/sprite.svg#arrow-prev"></use>
            </svg>
          </div>
          <div class="slider-button-next">
            <svg width="36" height="24">
              <use href="img/sprite.svg#arrow-next"></use>
            </svg>
          </div>
        </div>
      
      </div>
      <!-- /.Slider main container -->

    </div>
    <!-- /.container -->
  </header>


  <section class="section section-steps section-light">
    <div class="container section-container">
      <div class="seporator"></div>
      <h2 class="section-title steps-section-title">Схема работы</h2>

      <!-- Slider main container -->
      <div class="swiper steps-slider">
        <!-- Additional required wrapper -->
        <ol class="swiper-wrapper steps-slider-wrapper">
          <!-- Slides -->
          <li class="swiper-slide steps-item">
            <span class="steps-num">01</span>
            <h3 class="steps-title">Знакомство</h3>
            <p class="steps-text">
              Безусловно, сплочённость команды профессионалов позволяет оценить значение форм воздействия.
            </p>
            <a class="button-link" href="#">Оставить заявку</a>
          </li>
          <li class="swiper-slide steps-item">
            <span class="steps-num">02</span>
            <h3 class="steps-title">Заключение договора</h3>
            <p class="steps-text">
              Лишь интерактивные прототипы призваны к ответу.
            </p>
          </li>
          <li class="swiper-slide steps-item">
            <span class="steps-num">03</span>
            <h3 class="steps-title">Производство</h3>
            <p class="steps-text">
              А также стремящиеся вытеснить традиционное производство, нанотехнологии функционально разнесены на независимые
              элементы.
            </p>
          </li>
          <li class="swiper-slide steps-item">
            <span class="steps-num">04</span>
            <h3 class="steps-title">Доставка</h3>
            <p class="steps-text">
              В частности, экономическая повестка сегодняшнего дня говорит о возможностях приоритизации разума над эмоциями.
            </p>
          </li>
        </ol>
        <!-- /.Additional required wrapper -->
      
        <!-- If we need navigation buttons -->
        <div class="steps-buttons primary-buttons-wrapper">
          <div class="steps-button-prev primary-button-prev">
            <svg width="30" height="20">
              <use href="img/sprite.svg#arrow-prev"></use>
            </svg>
          </div>
          <div class="steps-button-next primary-button-next">
            <svg width="30" height="20">
              <use href="img/sprite.svg#arrow-next"></use>
            </svg>
          </div>
        </div>
      
      </div>
      <!-- /.Slider main container -->

    </div>
  </section>
  <!-- /.section section-light -->



  <section class="section production">
    <div class="container production-container">
      <div class="seporator"></div>
      <h2 class="section-title production-title">Контрактное производство</h2>
  
      <div class="cards">
  
        <a href="#" class="card">
          <div class="card-content">
            <h3 class="card-title">Автомобильная химия</h3>
            <p class="card-text">
              Безусловно, сплочённость команды профессионалов позволяет оценить значение форм воздействия.
            </p>
          </div>
          <img class="card-image" src="img/production/1.png" alt="Автомобильная химия">
        </a>
  
        <a href="#" class="card">
          <div class="card-content">
            <h3 class="card-title">Бытовая химия</h3>
            <p class="card-text">
              А также стремящиеся вытеснить традиционное производство, нанотехнологии функционально разнесены на
              независимые
              элементы.
            </p>
          </div>
          <img class="card-image" src="img/production/2.png" alt="Бытовая химия">
        </a>
  
        <a href="#" class="card">
          <div class="card-content">
            <h3 class="card-title">Дезинфицирующие средства</h3>
            <p class="card-text">
              Лишь интерактивные прототипы призваны к ответу.
            </p>
          </div>
          <img class="card-image" src="img/production/3.png" alt="Дезинфицирующие средства">
        </a>
  
        <a href="#" class="card">
          <div class="card-content">
            <h3 class="card-title">Пищевые аэрозоли</h3>
            <p class="card-text">
              Безусловно, сплочённость команды профессионалов позволяет оценить значение форм воздействия.
            </p>
          </div>
          <img class="card-image" src="img/production/3.png" alt="Пищевые аэрозоли">
        </a>
  
        <a href="#" class="card">
          <div class="card-content">
            <h3 class="card-title">Косметическая продукция</h3>
            <p class="card-text">
              Лишь интерактивные прототипы призваны к ответу.
            </p>
          </div>
          <img class="card-image" src="img/production/1.png" alt="Косметическая продукция">
        </a>
  
        <a href="#" class="card">
          <div class="card-content">
            <h3 class="card-title">Краски аэрозольные</h3>
            <p class="card-text">
              А также стремящиеся вытеснить традиционное производство, нанотехнологии функционально разнесены на
              независимые
              элементы.
            </p>
          </div>
          <img class="card-image" src="img/production/2.png" alt="Краски аэрозольные">
        </a>
  
      </div>
      <!-- /.cards -->
  
    </div>
    <!-- /.container -->
  </section>
  <!-- /.section production -->



  <section class="section trademarks">
    <div class="container trademarks-container">
      <div class="seporator"></div>
      <h2 class="section-title trademarks-section-title">Собственные <span>торговые</span> марки</h2>


      <div class="trademarks-cards">
      
        <div href="#" class="trademarks-card">
          <svg class="trademarks-card-logo trademarks-card-logo-ag">
            <use href="img/sprite.svg#agtech"></use>
          </svg>
          <h3 class="trademarks-card-title">Автохимия AG-Tech</h3>
          <p class="trademarks-card-text">
            Для современного мира разбавленное изрядной долей эмпатии, рациональное мышление создаёт предпосылки для поставленных
            обществом задач.
          </p>
        </div>
      
        <div href="#" class="trademarks-card">
          <svg class="trademarks-card-logo trademarks-card-logo-ap">
            <use href="img/sprite.svg#ap"></use>
          </svg>
          <h3 class="trademarks-card-title">Автохимия AP</h3>
          <p class="trademarks-card-text">
            Для современного мира разбавленное изрядной долей эмпатии, рациональное мышление создаёт предпосылки для поставленных
            обществом задач.
          </p>
        </div>
      
      </div>
      <!-- /.cards -->

    </div>
    <!-- /.container -->
  </section>
  <!-- /.section trademarks -->


  <section class="section founder">
    <img class="founder-photo" src="img/founder.jpg" alt="founder photo">
    <div class="container founder-container">
      <div class="founder-content-wrapper">
        <div class="founder-content">
          <div class="seporator"></div>
          <h2 class="section-title founder-section-title">Отношение к делу и к клиентам</h2>
          <p class="founder-text founder-text-top">
            Кстати, интерактивные прототипы описаны максимально подробно. Повседневная практика показывает, что укрепление и
            развитие внутренней структуры говорит о возможностях соответствующих условий активизации. Внезапно, независимые
            государства, которые представляют собой яркий пример континентально-европейского типа политической культуры, будут
            подвергнуты целой серии независимых исследований. С учётом сложившейся международной обстановки, синтетическое
            тестирование выявляет срочную потребность системы массового участия.
          </p>
          <p class="founder-text founder-text-bottom">
            А ещё действия представителей оппозиции, превозмогая сложившуюся непростую экономическую ситуацию, в равной степени
            предоставлены сами себе. Не следует, однако, забывать, что выбранный нами инновационный путь в значительной степени
            обусловливает важность дальнейших направлений развития.
          </p>
          <a class="button-link" href="#"><span class="founder-span-1">Подробнее о компании</span><span class="founder-span-2">О нашей компании</span></a>
        </div>
        <!-- /.founder-content -->
      </div>
      <!-- /.founder-content-wrapper -->
    </div>
  </section>
  <!-- /.section founder -->


  <section class="section clients">
    <div class="container clients-container">
      <div class="clients-wrapper">
        <div class="clients-content">
          <div class="seporator"></div>
          <h2 class="section-title clients-section-title">Производим аэрозольную продукцию для разных сфер</h2>
          <ul class="clients-list">
            <li class="clients-list-item">
              <svg class="client-list-icon" width="30" height="30">
                <use href="img/sprite.svg#him"></use>
              </svg>
              Химические производства
            </li>
            <li class="clients-list-item">
              <svg class="client-list-icon" width="30" height="30">
                <use href="img/sprite.svg#car"></use>
              </svg>
              Автомойки
            </li>
            <li class="clients-list-item">
              <svg class="client-list-icon" width="30" height="30">
                <use href="img/sprite.svg#eat"></use>
              </svg>
              Пищевая продукция
            </li>
            <li class="clients-list-item">
              <svg class="client-list-icon" width="30" height="30">
                <use href="img/sprite.svg#brush"></use>
              </svg>
              Лаки и краски
            </li>
            <li class="clients-list-item">
              <svg class="client-list-icon" width="30" height="30">
                <use href="img/sprite.svg#cosmetic"></use>
              </svg>
              Косметические средства
            </li>
            <li class="clients-list-item">
              <svg class="client-list-icon" width="30" height="30">
                <use href="img/sprite.svg#car-cosm"></use>
              </svg>
              Автомобильная косметика
            </li>
            <li class="clients-list-item">
              <svg class="client-list-icon" width="30" height="30">
                <use href="img/sprite.svg#shirt"></use>
              </svg>
              Косметика по уходу за одеждой
            </li>
            <li class="clients-list-item">
              <svg class="client-list-icon" width="30" height="30">
                <use href="img/sprite.svg#boots"></use>
              </svg>
              Косметика по уходу за обувью
            </li>
            <li class="clients-list-item">
              <svg class="client-list-icon" width="30" height="30">
                <use href="img/sprite.svg#bricks"></use>
              </svg>
              Строительные материалы
            </li>
            <li class="clients-list-item">
              <svg class="client-list-icon" width="30" height="30">
                <use href="img/sprite.svg#more"></use>
              </svg>
              И многих других
            </li>
          </ul>
        </div>
        <!-- /.clients-content -->

         <div class="clients-logo-list">
          <a class="clients-logo-item" href="#">
            <img class="clients-logo" src="img/client-logo-rgb.png" alt="clients logo">
            <!-- <img class="clients-logo-rgb" src="img/client-logo-rgb.png" alt="clients logo"> -->
          </a>
          <a class="clients-logo-item" href="#">
            <img class="clients-logo" src="img/client-logo-rgb.png" alt="clients logo">
          </a>
          <a class="clients-logo-item" href="#">
            <img class="clients-logo" src="img/client-logo-rgb.png" alt="clients logo">
          </a>
          <a class="clients-logo-item" href="#">
            <img class="clients-logo" src="img/client-logo-rgb.png" alt="clients logo">
          </a>
          <a class="clients-logo-item" href="#">
            <img class="clients-logo" src="img/client-logo-rgb.png" alt="clients logo">
          </a>
          <a class="clients-logo-item" href="#">
            <img class="clients-logo" src="img/client-logo-rgb.png" alt="clients logo">
          </a>
          <a class="clients-logo-item" href="#">
            <img class="clients-logo" src="img/client-logo-rgb.png" alt="clients logo">
          </a>
          <a class="clients-logo-item" href="#">
            <img class="clients-logo" src="img/client-logo-rgb.png" alt="clients logo">
          </a>
          <a class="clients-logo-item" href="#">
            <img class="clients-logo" src="img/client-logo-rgb.png" alt="clients logo">
          </a>
         </div>
         <!-- /.clients-logo -->
      </div>
      <!-- /.clients-wrapper -->
    </div>
  </section>
  <!-- /.section clients -->


  <section class="section blog">
    <div class="container blog-container">
      <div class="seporator"></div>
      <h2 class="section-title blog-section-title">Блог экспертов в области производства</h2>

      <!-- Slider main container -->
      <div class="swiper blog-slider">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper blog-slider-wrapper">
          <!-- Slides -->
          <a class="swiper-slide blog-card" href="#">
            <img class="blog-card-image" src="img/blog/blog-photo-1.png" alt="">
            <h3 class="blog-card-title">Современная методология разработки одухотворила всех причастных</h3>
            <p class="blog-card-text">
              Действия представителей оппозиции, превозмогая сложившуюся непростую экономическую ситуацию, в равной степени предоставлены...
            </p>
          </a>
          <a class="swiper-slide blog-card" href="#">
            <img class="blog-card-image" src="img/blog/blog-photo-2.png" alt="">
            <h3 class="blog-card-title">Сложно сказать, почему жизнь прекрасна</h3>
            <p class="blog-card-text">
              Сложно сказать, почему элементы политического процесса функционально разнесены на независимые элементы. Безусловно,
              высокотехнологичная...
            </p>
          </a>
          <a class="swiper-slide blog-card" href="#">
            <img class="blog-card-image" src="img/blog/blog-photo-2.png" alt="">
            <h3 class="blog-card-title">Сложно сказать, почему жизнь прекрасна</h3>
            <p class="blog-card-text">
              Сложно сказать, почему элементы политического процесса функционально разнесены на независимые элементы. Безусловно,
              высокотехнологичная...
            </p>
          </a>
          <a class="swiper-slide blog-card" href="#">
            <img class="blog-card-image" src="img/blog/blog-photo-2.png" alt="">
            <h3 class="blog-card-title">Сложно сказать, почему жизнь прекрасна</h3>
            <p class="blog-card-text">
              Сложно сказать, почему элементы политического процесса функционально разнесены на независимые элементы. Безусловно,
              высокотехнологичная...
            </p>
          </a>
        </div>
      
        <div class="blog-slider-footer">
          <a class="button-link" href="#">Весь блог</a>
          <!-- If we need navigation buttons -->
          <div class="blog-buttons primary-buttons-wrapper">
            <div class="blog-button-prev primary-button-prev">
              <svg width="30" height="20">
                <use href="img/sprite.svg#arrow-prev"></use>
              </svg>
            </div>
            <div class="blog-button-next primary-button-next">
              <svg width="30" height="20">
                <use href="img/sprite.svg#arrow-next"></use>
              </svg>
            </div>
          </div>
        </div>
        <!-- /.blog-slider-footer -->

      </div>
      <!-- /.Slider main container -->

    </div>
  </section>
  <!-- /.section blog -->



  <?php include_once('footer.php')?>


  
</body>
</html>