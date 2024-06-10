<?php
session_start();
if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] === true) {
    $showLoginIcon = false;
    $clientName = $_SESSION['clientName']; // Для проверки устанавливаем 'Test'
    $clientEmail = $_SESSION['clientEmail'];
} else {
    $showLoginIcon = true;
    $clientName = '';
    $clientEmail = '';
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
          <i class="bi bi-camera"></i>
          <h1>VisualDream</h1>
        </a>
        <nav id="navbar" class="navbar">
          <ul>
            <li><a href="index.php">Главная</a></li>
            <li><a href="about.php">О нас</a></li>
            <li><a href="service.php">Услуги</a></li>
            <li><a href="contact.php" class="active">Наши контакты</a></li>
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
    <main id="main" data-aos="fade" data-aos-delay="1500">
      <div class="page-header d-flex align-items-center">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
              <h2>Свяжитесь с нами</h2>
              <p>Мы готовы ответить на все ваши вопросы, обсудить детали предстоящей фотосессии или помочь выбрать подходящий пакет услуг. В «VisualDream» мы ценим каждого клиента и стремимся сделать ваше фотоопыт незабываемым.</p>
              <p></p>
              <p></p>
            </div>
          </div>
        </div>
      </div>
      <section id="contact" class="contact">
        <div class="container">
          <div class="row gy-4 justify-content-center">
            <div class="col-lg-3">
              <div class="info-item d-flex">
                <i class="bi bi-geo-alt flex-shrink-0"></i>
                <div>
                  <h4>Местоположение:</h4>
                  <p>682640, Хабаровский край,<br />г. Амурск, пр-кт Строителей 47</p>
                </div>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="info-item d-flex">
                <i class="bi bi-envelope flex-shrink-0"></i>
                <div>
                  <h4>Email:</h4>
                  <p>visualdream@mail.ru</p>
                </div>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="info-item d-flex">
                <i class="bi bi-phone flex-shrink-0"></i>
                <div>
                  <h4>Телефон:</h4>
                  <p>+7 999 123-45-67</p>
                </div>
              </div>
            </div>
          </div>
          <div class="row justify-content-center mt-4">
            <div class="col-lg-9">
              <form id="appealsForm" method="post" role="form" class="php-email-form">
                <div class="row">
                  <div class="col-md-6 form-group">
                    <input type="text" name="clientName" class="form-control" placeholder="Как к вам обращаться" required value="<?php echo htmlspecialchars($clientName); ?>">
                  </div>
                  <div class="col-md-6 form-group mt-3 mt-md-0">
                    <input type="email" class="form-control" name="clientEmail" placeholder="Ваш Email" required value="<?php echo htmlspecialchars($clientEmail); ?>">
                  </div>
                </div>
                <div class="form-group mt-3">
                  <input type="text" class="form-control" name="subject" placeholder="Тема сообщения" required>
                </div>
                <div class="form-group mt-3">
                  <textarea class="form-control" name="message" rows="5" placeholder="Сообщение..." required></textarea>
                </div>
                <div class="text-center"><button type="submit">Отправить сообщение</button></div>
              </form>
				      <div id="messageDiv" style="display: none;"></div> 
            </div>
          </div>
        </div>
      </section>
    </main>
    <footer id="footer" class="footer">
      <div class="container">
        <div class="copyright">
          &copy; Copyright 2023. <strong><span>Фотоцентр «VisualDream»</span></strong>. Все права защищены
        </div>
      </div>
    </footer>
    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    <div id="preloader">
      <div class="line"></div>
    </div>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/js/main.js"></script>
	  <script src="assets/js/app.js"></script>

  </body>
</html>