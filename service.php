<?php
session_start();
if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] === true) {
    $showLogin = false;
} else {
    $showLogin = true;
}
?>

<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Фотоцентр — «VisualDream»</title>
    
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
   
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Cardo:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
   
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/css/main.css" rel="stylesheet"> 
  </head>
  <body>
    <header id="header" class="header d-flex align-items-center fixed-top">
      <div class="container-fluid d-flex align-items-center justify-content-between"> <a href="index.php" class="logo d-flex align-items-center  me-auto me-lg-0">
          <img src="assets/img/logo.png" class="logo-img"></img>
          <h1>VisualDream</h1>
        </a>
        <nav id="navbar" class="navbar">
          <ul>
            <li><a href="index.php">Главная</a></li>
            <li><a href="about.php">О нас</a></li>
            <li><a href="service.php" class="active">Услуги</a></li>
            <li><a href="contact.php">Наши контакты</a></li>
            <?php if($showLogin): ?>
						<li>
							<a href="auth.php" >Войти</a>
						</li>
						<?php endif; ?>
						<?php if(!$showLogin): ?>
						<li>
							<a href="profile.php">Личный кабинет</a>
						</li>
            <li>
							<a href="assets/vendor/logout.php">Выйти</a>
            </li>
						<?php endif; ?>
          </ul>
        </nav>
        <div class="header-social-links"> 
          <a href="#" class="twitter">
            <i class="bi bi-twitter"></i>
          </a> 
          <a href="#" class="facebook">
            <i class="bi bi-facebook"></i>
          </a> 
          <a href="#" class="instagram">
            <i class="bi bi-instagram"></i>
          </a> 
          </div> 
            <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i> 
            <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i> 
        </div>
    </header>
    <section id="hero" class="hero d-flex flex-column justify-content-center align-items-center" data-aos="fade" data-aos-delay="1500">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6 text-center">
            <h2>Наши услуги</h2>
            <p>Наш фотоцентр предлагает качественные услуги по фотопечати, реставрации старых фотографий, созданию фотокниг и календарей. Мы также проводим фотосессии для любых мероприятий. Опытный персонал всегда готов помочь вам и предложить лучшие решения для сохранения ваших воспоминаний. Выбирая нас, вы выбираете надежность и качество!</p> 
        </div>
      </div>
    </section>
    <section>
        <div class="section bg-black">
            <div class="container">
                <div class="row">
                    <div class="col-6 col-lg-3 service-box" data-aos="fade-up" data-aos-delay="300">
                        <div class="box-feature">
                            <h3 class="service-header">Фотосессии на открытом воздухе</h3>
                            <p class="service-box-text">Уникальные фотосессии на природе для ярких и запоминающихся снимков.</p>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 service-box" data-aos="fade-up" data-aos-delay="400">
                        <div class="box-feature">
                            <h3 class="service-header">Студийные фотосессии</h3>
                            <p class="service-box-text">Студийные съемки для вашей семьи, детей или фотопортретов.</p>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 service-box" data-aos="fade-up" data-aos-delay="500">
                        <div class="box-feature">
                            <h3 class="service-header">Фотосъемка мероприятий</h3>
                            <p class="service-box-text">Фотосъемки для корпоративных мероприятий и других специальных случаев.</p>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 service-box" data-aos="fade-up" data-aos-delay="600">
                        <div class="box-feature">
                            <h3 class="service-header">Фотографирование продуктов</h3>
                            <p class="service-box-text">Качественные снимки ваших товаров для интернет-магазинов или рекламных материалов.</p>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 service-box" data-aos="fade-up" data-aos-delay="300">
                        <div class="box-feature">
                            <h3 class="service-header">Свадебная фотосессия</h3>
                            <p class="service-box-text">Изысканные фотосессии на вашем свадебном торжестве.</p>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 service-box" data-aos="fade-up" data-aos-delay="400">
                    <div class="box-feature">
                        <h3 class="service-header">Фотосессии с детьми</h3>
                        <p class="service-box-text">Яркие и веселые фотосессии для вашего ребенка, чтобы запомнить эти моменты на всю жизнь.</p>
                    </div>
                    </div>
                    <div class="col-6 col-lg-3 service-box" data-aos="fade-up" data-aos-delay="500">
                        <div class="box-feature">
                            <h3 class="service-header">Обработка фотографий</h3>
                            <p class="service-box-text">Детальная обработка фотографии, где ретушер уделяет внимание каждой мелочи.</p>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 service-box" data-aos="fade-up" data-aos-delay="600">
                        <div class="box-feature">
                            <h3 class="service-header">Фотокниги и фоторамки</h3>
                            <p class="service-box-text">Создайте уникальные фотокниги и фоторамки, чтобы сохранить ваши воспоминания.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer id="footer" class="footer">
      <div class="container">
        <div class="copyright"> &copy; Copyright 2023. <strong><span>Фотоцентр «VisualDream»</span></strong>. Все права защищены </div>
      </div>
    </footer> <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    <div id="preloader">
      <div class="line"></div>
    </div>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/js/main.js"></script>
  </body>
</html>