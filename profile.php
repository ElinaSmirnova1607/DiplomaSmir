<?php
session_start();
if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] === true) {
    $showLoginIcon = false;
    $clientName = $_SESSION['clientName'];
    $clientLastName = $_SESSION['clientLastName'];
    $clientSurName = $_SESSION['clientSurName'];
    $clientEmail = $_SESSION['clientEmail'];
    $clientPhone = $_SESSION['clientPhone'];
} else {
    $showLoginIcon = true;
}

// Пример данных заказов
$orders = [
    ['order_id' => 1, 'service' => 'Фотосессия', 'date' => '2024-05-01', 'status' => 'Выполнен', 'total' => '1000 руб.'],
    ['order_id' => 2, 'service' => 'Фотограф на свадьбу', 'date' => '2024-05-15', 'status' => 'В процессе', 'total' => '2000 руб.'],
    ['order_id' => 3, 'service' => 'Фотосессия', 'date' => '2024-05-01', 'status' => 'Отменен', 'total' => '1500 руб.']
];
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
    <link href="assets/css/stylesProfile.css" rel="stylesheet">
  </head>

  <body>
    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid d-flex align-items-center justify-content-between">
            <a href="index.php" class="logo d-flex align-items-center me-auto me-lg-0">
                <i class="bi bi-camera"></i>
                <h1>VisualDream</h1>
            </a>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="index.php">Главная</a></li>
                    <li><a href="about.php">О нас</a></li>
                    <li><a href="service.php">Услуги</a></li>
                    <li><a href="contact.php">Наши контакты</a></li>
                    <?php if($showLogin): ?>
                    <li><a href="auth.php">Войти</a></li>
                    <?php endif; ?>
                    <?php if(!$showLogin): ?>
                    <li><a href="profile.php" class="active">Личный кабинет</a></li>
                    <li><a href="assets/vendor/logout.php">Выйти</a></li>
                    <?php endif; ?>
                </ul>
            </nav>
            <div class="header-social-links">
                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
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
                        <h2>Личный кабинет</h2>
                    </div>
                </div>
            </div>
        </div>

        <section id="about" class="about">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-3">
                        <div class="image-container image-container-profile">
                            <img src="assets/img/user.png"  class="img-fluid" alt="">
                        </div>
                        <div class="content mt-4">
                            <h2 class="list-header">Ваши данные:</h2>
                            <div class="row">
                                <div class="col-lg-6">
                                    <ul>
                                        <li><i class="bi bi-chevron-right"></i><strong>Имя:</strong> <?php echo htmlspecialchars($clientName); ?></li>
                                        <li><i class="bi bi-chevron-right"></i> <strong>Фамилия:</strong> <?php echo htmlspecialchars($clientLastName); ?></li>
                                        <li><i class="bi bi-chevron-right"></i> <strong>Отчество:</strong> <?php echo htmlspecialchars($clientSurName); ?></li>
                                    </ul>
                                </div>
                                <div class="col-lg-6">
                                    <ul>
                                        <li><i class="bi bi-chevron-right"></i> <strong>Телефон:</strong> <?php echo htmlspecialchars($clientPhone); ?></li>
                                        <li><i class="bi bi-chevron-right"></i> <strong>Почта:</strong> <?php echo htmlspecialchars($clientEmail); ?></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 content" style="width: 70%; margin-left:5%">
                        <h2 style="text-align: center;">Список заказов</h2>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Номер заказа</th>
                                    <th>Услуга</th>
                                    <th>Дата заказа</th>
                                    <th>Статус</th>
                                    <th>Стомость</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($orders as $order): ?>
                                <tr>
                                    <td><?php echo htmlspecialchars($order['order_id']); ?></td>
                                    <td><?php echo htmlspecialchars($order['service']); ?></td>
                                    <td><?php echo htmlspecialchars($order['date']); ?></td>
                                    <td><?php echo htmlspecialchars($order['status']); ?></td>
                                    <td><?php echo htmlspecialchars($order['total']); ?></td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                     <div class="text-center">
                        <button class="btnss" type="submit">Добавить заказ</button>
                    </div>
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
    </body>
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