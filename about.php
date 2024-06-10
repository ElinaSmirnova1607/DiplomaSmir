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
    <title>Фотоцентр - «VisualDream»</title>
    
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
            <li><a href="about.php" class="active">О нас</a></li>
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
    <main id="main" data-aos="fade" data-aos-delay="1500">
      <div class="page-header d-flex align-items-center">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
              <h2>О нас</h2>
              <p>«VisualDream» — это место, где рождаются ваши фотоидеи. Мы предлагаем качественные фотосессии с профессиональным подходом и индивидуальным вниманием к каждому клиенту. В нашем центре вы найдете вдохновение, творчество и яркие моменты, которые останутся с вами на всю жизнь.</p> <a class="cta-btn" href="contact.html">Свяжитесь с нами</a> </div>
          </div>
        </div>
      </div>
      <section id="about" class="about">
        <div class="container">
          <div class="row gy-4 justify-content-center">
            <div class="col-lg-33"> <img src="assets/img/profile-img.jpg" class="img-fluiid" alt=""> </div>
            <div class="col-lg-5 content">
              <h2>Команда профессиональных фотографов</h2>
              <p class="fst-italic py-3">Наши фотографы – это виртуозы объектива, создающие ваши визуальные мечты. В "VisualDream" каждый специалист – не просто фотограф, а создатель историй, погружая вас в мир красок, эмоций и неповторимых моментов. Доверьтесь профессионалам "VisualDream" и ощутите магию искусства фотографии в каждом кадре!</p>
              <div class="row">
                <h2 class="list-header">В нашей команде:</h2>
                <div class="col-lg-6">
                  <ul>
                    <li><i class="bi bi-chevron-right"></i> <strong>Главный фотограф</strong> </span>
                    </li>
                    <li><i class="bi bi-chevron-right"></i> <strong>Ассистент фотографа</strong> </span>
                    </li>
                    <li><i class="bi bi-chevron-right"></i> <strong>Визажист</strong> </span>
                    </li>
                    <li><i class="bi bi-chevron-right"></i> <strong>Редактор фотографий</strong> </span>
                    </li>
                  </ul>
                </div>
                <div class="col-lg-6">
                  <ul>
                    <li><i class="bi bi-chevron-right"></i> <strong>Администратор</strong> </span>
                    </li>
                    <li><i class="bi bi-chevron-right"></i> <strong>Координатор</strong> </span>
                    </li>
                    <li><i class="bi bi-chevron-right"></i> <strong>Стилист</strong> </span>
                    </li>
                    <li><i class="bi bi-chevron-right"></i> <strong>Артдизайнер</strong> </span>
                    </li>
                  </ul>
                </div>
              </div>
              <p class="py-3">В "VisualDream" каждый наш фотограф – это не просто профессионал с камерой, это творческий маг, превращающий мгновения в вечность и эмоции в визуальные шедевры. Наши фотографы не просто снимают – они создают истории, в которых вы становитесь главным героем. Каждый щелчок, каждый кадр в их руках – это волшебство, превращающее моменты в незабываемые воспоминания.</p>
              <p class="m-0">Мы - команда любителей света и тени, мастеров взглядов и моментов. Мы захватываем энергию момента и превращаем ее в картину, в которой каждая деталь искрится уникальностью вашей истории. Доверьтесь нам, и мы превратим вашу фотосессию в яркое путешествие в мир красоты и эмоций!</p>
            </div>
          </div>
        </div>
      </section>
      <section id="testimonials" class="testimonials">
        <div class="container">
          <div class="section-header">
            <h2>Отзывы</h2>
            <p>Что говорят о нас</p>
          </div>
          <div class="slides-3 swiper">
            <div class="swiper-wrapper">
            <?php
                // Подключение к базе данных
                include('assets/vendor/connect.php');
                // Запрос на получение отзывов
                $sql = "SELECT text, dateTime, clientId FROM feedbacks";
                $result = mysqli_query($connect, $sql);

                if (mysqli_num_rows($result) > 0) {
                    // Выводим каждый отзыв
                    while($row = mysqli_fetch_assoc($result)) {
                        $text = $row["text"];
                        $dateTime = $row["dateTime"];
                        $clientId = $row["clientId"];
                        // Получаем информацию о клиенте (если требуется)
                        $clientSql = "SELECT firstName, lastName FROM clients WHERE clientId = $clientId";
                        $clientResult = mysqli_query($connect, $clientSql);
                        $clientRow = mysqli_fetch_assoc($clientResult);
                        $firstName = $clientRow["firstName"];
                        $lastName = $clientRow["lastName"];
                        // Выводим отзыв в формате HTML
                        echo '<div class="swiper-slide">';
                        echo '<div class="testimonial-item">';
                        echo '<div class="stars"> <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i> </div>';
                        echo '<p>' . $text . '</p>';
                        echo '<div class="profile mt-auto"> <img src="assets/img/testimonials/null.png" class="testimonial-img" alt="">';
                        echo '<h3>' . $firstName . ' ' . $lastName . '</h3>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                    }
                } else {
                    echo "Отзывов пока нет";
                }
                // Закрытие соединения с базой данных
                mysqli_close($connect);
            ?>
            </div>
            </div>
            <div class="swiper-pagination"></div>
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