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
            <li><a href="index.php" class="active">Главная</a></li>
            <li><a href="about.php">О нас</a></li>
            <li><a href="service.php">Услуги</a></li>
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
            <h2>Где каждый кадр – искусство. Добро пожаловать в мир, где снимки оживают!</h2>
            <p>VisualDream — представляет собой современное пространство, где каждый кадр превращается в визуальную сказку. У нас вы найдете студии с самым современным оборудованием, позволяющим создавать профессиональные портреты, арт-фотографии и многие другие креативные проекты.</p> <a href="contact.html" class="btn-get-started">Свяжитесь с нами</a> </div>
        </div>
      </div>
    </section>
    <main id="main" data-aos="fade" data-aos-delay="1500">
      <section id="gallery" class="gallery">
        <div class="container-fluid">
          <div class="row gy-4 justify-content-center">
          <?php
          // Подключаемся к базе данных
          require_once('assets/vendor/connect.php');
          // Запрос к базе данных для получения изображений и информации о сотрудниках
          $sql = "SELECT s.*, e.firstName, e.lastName FROM `snapshots` s
                  INNER JOIN `employees` e ON s.employeeId = e.employeeId";
          $result = mysqli_query($connect, $sql);
          // Проверяем, есть ли изображения
          if (mysqli_num_rows($result) > 0) {
              // Начинаем цикл для обхода каждой строки результата запроса
              while ($row = mysqli_fetch_assoc($result)) {
                  // Выводим HTML-разметку для каждого изображения
                  echo '<div class="col-xl-3 col-lg-4 col-md-6">';
                  echo '  <div class="gallery-item h-100">'; 
                  echo '    <img src="' . $row['image'] . '" class="img-fluid" alt="">';
                  // Добавляем title с информацией о сотруднике
                  echo '    <div class="gallery-links d-flex align-items-center justify-content-center">';
                  echo '      <a href="' . $row['image'] . '" title="Автор: ' . $row['firstName'] . ' ' . $row['lastName'] . '" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>';
                  echo '    </div>';
                  echo '  </div>';
                  echo '</div>';
              }
          } else {
              echo "Нет изображений для отображения";
          }
          // Закрываем соединение
          mysqli_close($connect);
          ?>
          </div>
        </div>
      </section>
    </main>
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