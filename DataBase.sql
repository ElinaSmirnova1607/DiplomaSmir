CREATE DATABASE visualdream;
USE visualdream;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;


CREATE TABLE `appealsOfClients` (
  `appealId` int NOT NULL,
  `clientName` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `clientEmail` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `subject` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `message` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `employeeId` int DEFAULT NULL,
  `appealStatus` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `appealsOfClients` (`appealId`, `clientName`, `clientEmail`, `subject`, `message`, `employeeId`, `appealStatus`) VALUES
(1, 'ddd', 'ddd@ddd', 'ввв', 'ввв', NULL, 'Новый');

CREATE TABLE `clients` (
  `clientId` int NOT NULL,
  `firstName` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `lastName` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `surName` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `phoneNumber` varchar(18) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `clients` (`clientId`, `firstName`, `lastName`, `surName`, `email`, `phoneNumber`, `password`) VALUES
(1, 'Алексей', 'Иванов', 'Петрович', 'alexey@mail.ru', '+7 (111) 222-33-44', '098f6bcd4621d373cade4e832627b4f6'),
(2, 'Елена', 'Смирнова', 'Дмитриевна', 'elena@yandex.ru', '+7 (555) 666-77-88', ''),
(3, 'Михаил', 'Петров', 'Алексеевич', 'mikhail@gmail.com', '+7 (999) 888-77-66', ''),
(4, 'Ольга', 'Сидорова', 'Игоревна', 'olga@mail.ru', '+7 (777) 666-55-44', ''),
(5, 'Ирина', 'Козлова', 'Сергеевна', 'irina@gmail.com', '+7 (333) 444-55-66', ''),
(6, 'Виктор', 'Николаев', 'Александрович', 'victor@yandex.ru', '+7 (222) 333-44-55', ''),
(7, 'Наталья', 'Морозова', 'Владимировна', 'natalia@mail.ru', '+7 (888) 777-66-55', ''),
(8, 'Александр', 'Васильев', 'Дмитриевич', 'alexander@gmail.com', '+7 (777) 888-99-00', ''),
(9, 'Елена', 'Попова', 'Ивановна', 'elena@mail.ru', '+7 (999) 888-77-66', ''),
(10, 'Дмитрий', 'Соколов', 'Сергеевич', 'dmitry@gmail.com', '+7 (111) 222-33-44', ''),
(13, 'ddd', 'ddd', 'ddd', 'ddd@ddd', 'ddd', '77963b7a931377ad4ab5ad6a9cd718aa');

CREATE TABLE `employees` (
  `employeeId` int NOT NULL,
  `firstName` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `lastName` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `surName` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `phoneNumber` varchar(18) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `roleId` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `employees` (`employeeId`, `firstName`, `lastName`, `surName`, `email`, `phoneNumber`, `roleId`) VALUES
(1, 'Иван', 'Петров', 'Сергеевич', 'ivan@yandex.ru', '+7 (123) 456-78-90', 1),
(2, 'Мария', 'Иванова', 'Алексеевна', 'maria@mail.ru', '+7 (987) 654-32-10', 2),
(3, 'Елена', 'Смирнова', 'Дмитриевна', 'elena@gmail.com', '+7 (111) 222-33-33', 3),
(4, 'Андрей', 'Козлов', 'Александрович', 'andrey@mail.ru', '+7 (444) 555-66-66', 4),
(5, 'Ольга', 'Николаева', 'Петровна', 'olga@yandex.ru', '+7 (777) 888-99-99', 5),
(6, 'Дмитрий', 'Сидоров', 'Игоревич', 'dmitry@gmail.com', '+7 (222) 333-44-44', 6),
(7, 'Александра', 'Васильева', 'Андреевна', 'alexandra@gmail.com', '+7 (555) 666-77-77', 7),
(8, 'Павел', 'Морозов', 'Владимирович', 'pavel@yandex.ru', '+7 (999) 888-77-77', 8);

CREATE TABLE `feedbacks` (
  `feedbackId` int NOT NULL,
  `text` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `dateTime` datetime NOT NULL,
  `clientId` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `feedbacks` (`feedbackId`, `text`, `dateTime`, `clientId`) VALUES
(1, 'Отличный фотоцентр! Профессиональные фотографы, теплая атмосфера и креативный подход. Очень доволен результатом!', '2024-02-20 10:30:00', 1),
(2, 'Великолепный сервис и внимательный персонал! Большое спасибо за отличные фотосессии.', '2024-02-21 12:15:00', 2),
(3, 'Очень понравилась работа визажиста - профессионал своего дела! Рекомендую!', '2024-02-22 14:45:00', 3),
(4, 'Быстро и качественно отредактировали фотографии. Очень приятно сотрудничать!', '2024-02-23 16:20:00', 4),
(5, 'Приветливый персонал и уютная атмосфера. Все сделано на высшем уровне!', '2024-02-24 09:00:00', 5),
(6, 'Отличный координатор мероприятий! Все прошло безупречно, спасибо!', '2024-02-25 11:30:00', 6),
(7, 'Стилист подобрал идеальный образ для фотосессии. Очень довольна!', '2024-02-26 13:45:00', 7),
(8, 'Удивительные дизайнерские решения! Фотокнига выглядит просто потрясающе!', '2024-02-27 15:10:00', 8),
(9, 'Быстро оформили фотокнигу, все просто замечательно! Спасибо!', '2024-02-28 08:30:00', 9),
(10, 'Профессиональный видеомонтаж и креативные идеи. Рекомендую!', '2024-02-29 10:50:00', 10);

CREATE TABLE `roles` (
  `roleId` int NOT NULL,
  `name` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `description` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `salary` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `roles` (`roleId`, `name`, `description`, `salary`) VALUES
(1, 'Главный фотограф', 'Ответственный за основные фотосессии и творческое руководство', '50000'),
(2, 'Ассистент фотографа', 'Помощь главному фотографу в подготовке и съемках', '30000'),
(3, 'Визажист', 'Создание стильного и соответствующего образа для клиентов', '40000'),
(4, 'Редактор фотографий', 'Обработка и ретушь фотографий для их идеального вида', '45000'),
(5, 'Администратор', 'Управление административными задачами и клиентским сервисом', '35000'),
(6, 'Координатор', 'Организация мероприятий и координация работы команды', '45000'),
(7, 'Стилист', 'Подбор стильных и модных образов для фотосессий', '40000'),
(8, 'Артдизайнер', 'Создание уникальных и креативных дизайнов и концепций', '50000');

CREATE TABLE `serviceRequests` (
  `serviceRequestId` int NOT NULL,
  `clientId` int NOT NULL,
  `serviceId` int NOT NULL,
  `employeId` int DEFAULT NULL,
  `datetimeCreate` datetime NOT NULL,
  `datetimeOfService` datetime NOT NULL,
  `notes` varchar(300) COLLATE utf8mb4_general_ci NOT NULL,
  `status` varchar(20) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `services` (
  `serviceId` int NOT NULL,
  `serviceName` varchar(40) COLLATE utf8mb4_general_ci NOT NULL,
  `description` varchar(150) COLLATE utf8mb4_general_ci NOT NULL,
  `cost` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `snapshots` (
  `snapshotId` int NOT NULL,
  `image` varchar(70) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `employeeId` int NOT NULL,
  `dateTime` datetime NOT NULL,
  `description` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `snapshots` (`snapshotId`, `image`, `employeeId`, `dateTime`, `description`) VALUES
(1, 'assets/img/gallery/gallery-1.jpg', 1, '2024-02-20 10:30:00', NULL),
(2, 'assets/img/gallery/gallery-2.jpg', 2, '2024-02-21 12:15:00', NULL),
(3, 'assets/img/gallery/gallery-3.jpg', 1, '2024-02-22 14:45:00', NULL),
(4, 'assets/img/gallery/gallery-4.jpg', 2, '2024-02-23 16:20:00', NULL),
(5, 'assets/img/gallery/gallery-5.jpg', 1, '2024-02-24 09:00:00', NULL),
(6, 'assets/img/gallery/gallery-6.jpg', 2, '2024-02-25 11:30:00', NULL),
(7, 'assets/img/gallery/gallery-7.jpg', 1, '2024-02-26 13:45:00', NULL),
(8, 'assets/img/gallery/gallery-8.jpg', 2, '2024-02-27 15:10:00', NULL),
(9, 'assets/img/gallery/gallery-9.jpg', 1, '2024-02-28 08:30:00', NULL),
(10, 'assets/img/gallery/gallery-10.jpg', 2, '2024-02-29 10:50:00', NULL),
(11, 'assets/img/gallery/gallery-11.jpg', 1, '2024-03-01 11:00:00', NULL),
(12, 'assets/img/gallery/gallery-12.jpg', 2, '2024-03-02 12:30:00', NULL),
(13, 'assets/img/gallery/gallery-13.jpg', 1, '2024-03-03 14:00:00', NULL),
(14, 'assets/img/gallery/gallery-14.jpg', 2, '2024-03-04 16:45:00', NULL),
(15, 'assets/img/gallery/gallery-15.jpg', 1, '2024-03-05 09:30:00', NULL),
(16, 'assets/img/gallery/gallery-16.jpg', 2, '2024-03-06 10:20:00', NULL);


ALTER TABLE `appealsOfClients`
  ADD PRIMARY KEY (`appealId`),
  ADD KEY `employeeId` (`employeeId`);

ALTER TABLE `clients`
  ADD PRIMARY KEY (`clientId`);

ALTER TABLE `employees`
  ADD PRIMARY KEY (`employeeId`),
  ADD KEY `roleId` (`roleId`);

ALTER TABLE `feedbacks`
  ADD PRIMARY KEY (`feedbackId`),
  ADD KEY `clientId` (`clientId`);

ALTER TABLE `roles`
  ADD PRIMARY KEY (`roleId`);

ALTER TABLE `serviceRequests`
  ADD PRIMARY KEY (`serviceRequestId`),
  ADD KEY `serviceId` (`serviceId`),
  ADD KEY `clientId` (`clientId`),
  ADD KEY `employeId` (`employeId`);

ALTER TABLE `services`
  ADD PRIMARY KEY (`serviceId`);

ALTER TABLE `snapshots`
  ADD PRIMARY KEY (`snapshotId`),
  ADD KEY `employeeId` (`employeeId`);


ALTER TABLE `appealsOfClients`
  MODIFY `appealId` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

ALTER TABLE `clients`
  MODIFY `clientId` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

ALTER TABLE `employees`
  MODIFY `employeeId` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

ALTER TABLE `feedbacks`
  MODIFY `feedbackId` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

ALTER TABLE `roles`
  MODIFY `roleId` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

ALTER TABLE `serviceRequests`
  MODIFY `serviceRequestId` int NOT NULL AUTO_INCREMENT;

ALTER TABLE `services`
  MODIFY `serviceId` int NOT NULL AUTO_INCREMENT;

ALTER TABLE `snapshots`
  MODIFY `snapshotId` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;


ALTER TABLE `appealsOfClients`
  ADD CONSTRAINT `appealsOfClients_ibfk_1` FOREIGN KEY (`employeeId`) REFERENCES `employees` (`employeeId`) ON DELETE RESTRICT ON UPDATE RESTRICT;

ALTER TABLE `employees`
  ADD CONSTRAINT `employees_ibfk_1` FOREIGN KEY (`roleId`) REFERENCES `roles` (`roleId`) ON DELETE RESTRICT ON UPDATE RESTRICT;

ALTER TABLE `feedbacks`
  ADD CONSTRAINT `feedbacks_ibfk_1` FOREIGN KEY (`clientId`) REFERENCES `clients` (`clientId`) ON DELETE RESTRICT ON UPDATE RESTRICT;

ALTER TABLE `serviceRequests`
  ADD CONSTRAINT `servicerequests_ibfk_1` FOREIGN KEY (`serviceId`) REFERENCES `services` (`serviceId`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `servicerequests_ibfk_2` FOREIGN KEY (`clientId`) REFERENCES `clients` (`clientId`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `servicerequests_ibfk_3` FOREIGN KEY (`employeId`) REFERENCES `employees` (`employeeId`) ON DELETE RESTRICT ON UPDATE RESTRICT;

ALTER TABLE `snapshots`
  ADD CONSTRAINT `snapshots_ibfk_1` FOREIGN KEY (`employeeId`) REFERENCES `employees` (`employeeId`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
