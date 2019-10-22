-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 22 2019 г., 16:30
-- Версия сервера: 5.7.25
-- Версия PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `newcrm`
--

-- --------------------------------------------------------

--
-- Структура таблицы `auth_assignment`
--

CREATE TABLE `auth_assignment` (
  `item_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `auth_assignment`
--

INSERT INTO `auth_assignment` (`item_name`, `user_id`, `created_at`) VALUES
('Admin', '1', 1571749533),
('Managers', '2', 1571749718),
('Users', '3', 1571749838);

-- --------------------------------------------------------

--
-- Структура таблицы `auth_item`
--

CREATE TABLE `auth_item` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `type` smallint(6) NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `rule_name` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data` blob,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `auth_item`
--

INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`) VALUES
('/*', 2, NULL, NULL, NULL, 1571749487, 1571749487),
('/admin/*', 2, NULL, NULL, NULL, 1571749449, 1571749449),
('/admin/assignment/*', 2, NULL, NULL, NULL, 1571749487, 1571749487),
('/admin/default/*', 2, NULL, NULL, NULL, 1571749487, 1571749487),
('/admin/menu/*', 2, NULL, NULL, NULL, 1571749487, 1571749487),
('/admin/permission/*', 2, NULL, NULL, NULL, 1571749487, 1571749487),
('/admin/role/*', 2, NULL, NULL, NULL, 1571749487, 1571749487),
('/admin/route/*', 2, NULL, NULL, NULL, 1571749487, 1571749487),
('/admin/rule/*', 2, NULL, NULL, NULL, 1571749487, 1571749487),
('/admin/user/*', 2, NULL, NULL, NULL, 1571749487, 1571749487),
('/app/*', 2, NULL, NULL, NULL, 1571749487, 1571749487),
('/category/*', 2, NULL, NULL, NULL, 1571749487, 1571749487),
('/category/index', 2, NULL, NULL, NULL, 1571749797, 1571749797),
('/clients/*', 2, NULL, NULL, NULL, 1571749487, 1571749487),
('/clients/index', 2, NULL, NULL, NULL, 1571749797, 1571749797),
('/debug/*', 2, NULL, NULL, NULL, 1571749462, 1571749462),
('/debug/default/*', 2, NULL, NULL, NULL, 1571749487, 1571749487),
('/debug/user/*', 2, NULL, NULL, NULL, 1571749487, 1571749487),
('/elfinder/*', 2, NULL, NULL, NULL, 1571749487, 1571749487),
('/fines/*', 2, NULL, NULL, NULL, 1571749487, 1571749487),
('/fines/index', 2, NULL, NULL, NULL, 1571749797, 1571749797),
('/gii/*', 2, NULL, NULL, NULL, 1571749487, 1571749487),
('/gii/default/*', 2, NULL, NULL, NULL, 1571749487, 1571749487),
('/inventory/*', 2, NULL, NULL, NULL, 1571749487, 1571749487),
('/inventory/index', 2, NULL, NULL, NULL, 1571749797, 1571749797),
('/off/*', 2, NULL, NULL, NULL, 1571749487, 1571749487),
('/off/index', 2, NULL, NULL, NULL, 1571749797, 1571749797),
('/order/*', 2, NULL, NULL, NULL, 1571749487, 1571749487),
('/order/index', 2, NULL, NULL, NULL, 1571749797, 1571749797),
('/other/*', 2, NULL, NULL, NULL, 1571749487, 1571749487),
('/other/index', 2, NULL, NULL, NULL, 1571749797, 1571749797),
('/prize/*', 2, NULL, NULL, NULL, 1571749487, 1571749487),
('/prize/index', 2, NULL, NULL, NULL, 1571749797, 1571749797),
('/products/*', 2, NULL, NULL, NULL, 1571749487, 1571749487),
('/products/index', 2, NULL, NULL, NULL, 1571749797, 1571749797),
('/salary/*', 2, NULL, NULL, NULL, 1571749487, 1571749487),
('/salary/index', 2, NULL, NULL, NULL, 1571749797, 1571749797),
('/site/*', 2, NULL, NULL, NULL, 1571749474, 1571749474),
('/site/index', 2, NULL, NULL, NULL, 1571749797, 1571749797),
('/sources/*', 2, NULL, NULL, NULL, 1571749487, 1571749487),
('/sources/index', 2, NULL, NULL, NULL, 1571749797, 1571749797),
('/waybill/*', 2, NULL, NULL, NULL, 1571749487, 1571749487),
('/waybill/index', 2, NULL, NULL, NULL, 1571749797, 1571749797),
('/workers/*', 2, NULL, NULL, NULL, 1571749487, 1571749487),
('/workers/index', 2, NULL, NULL, NULL, 1571749797, 1571749797),
('Admin', 1, 'admin users', NULL, NULL, 1571749522, 1571749522),
('adminAccess', 2, 'admin', NULL, NULL, 1571749507, 1571749507),
('managerAccess', 2, 'manager users\r\n', NULL, NULL, 1571749672, 1571749672),
('Managers', 1, 'manager users', NULL, NULL, 1571749709, 1571749709),
('userAccess', 2, NULL, NULL, NULL, 1571749754, 1571749927),
('Users', 1, 'Roule for users', NULL, NULL, 1571749830, 1571749830);

-- --------------------------------------------------------

--
-- Структура таблицы `auth_item_child`
--

CREATE TABLE `auth_item_child` (
  `parent` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `child` varchar(64) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `auth_item_child`
--

INSERT INTO `auth_item_child` (`parent`, `child`) VALUES
('adminAccess', '/*'),
('adminAccess', '/admin/*'),
('adminAccess', '/admin/assignment/*'),
('adminAccess', '/admin/default/*'),
('adminAccess', '/admin/menu/*'),
('adminAccess', '/admin/permission/*'),
('adminAccess', '/admin/role/*'),
('adminAccess', '/admin/route/*'),
('adminAccess', '/admin/rule/*'),
('adminAccess', '/admin/user/*'),
('adminAccess', '/app/*'),
('adminAccess', '/category/*'),
('managerAccess', '/category/*'),
('userAccess', '/category/index'),
('adminAccess', '/clients/*'),
('managerAccess', '/clients/*'),
('userAccess', '/clients/index'),
('adminAccess', '/debug/*'),
('adminAccess', '/debug/default/*'),
('adminAccess', '/debug/user/*'),
('adminAccess', '/elfinder/*'),
('adminAccess', '/fines/*'),
('managerAccess', '/fines/*'),
('userAccess', '/fines/index'),
('adminAccess', '/gii/*'),
('adminAccess', '/gii/default/*'),
('adminAccess', '/inventory/*'),
('managerAccess', '/inventory/*'),
('userAccess', '/inventory/index'),
('adminAccess', '/off/*'),
('managerAccess', '/off/*'),
('userAccess', '/off/index'),
('adminAccess', '/order/*'),
('managerAccess', '/order/*'),
('userAccess', '/order/index'),
('adminAccess', '/other/*'),
('managerAccess', '/other/*'),
('userAccess', '/other/index'),
('adminAccess', '/prize/*'),
('managerAccess', '/prize/*'),
('userAccess', '/prize/index'),
('adminAccess', '/products/*'),
('managerAccess', '/products/*'),
('userAccess', '/products/index'),
('adminAccess', '/salary/*'),
('managerAccess', '/salary/*'),
('userAccess', '/salary/index'),
('adminAccess', '/site/*'),
('managerAccess', '/site/*'),
('userAccess', '/site/*'),
('userAccess', '/site/index'),
('adminAccess', '/sources/*'),
('managerAccess', '/sources/*'),
('userAccess', '/sources/index'),
('adminAccess', '/waybill/*'),
('managerAccess', '/waybill/*'),
('userAccess', '/waybill/index'),
('adminAccess', '/workers/*'),
('managerAccess', '/workers/*'),
('userAccess', '/workers/index'),
('Admin', 'adminAccess'),
('Managers', 'managerAccess'),
('Users', 'userAccess');

-- --------------------------------------------------------

--
-- Структура таблицы `auth_rule`
--

CREATE TABLE `auth_rule` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `data` blob,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE `category` (
  `id` int(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id`, `title`, `description`) VALUES
(1, 'Овощи,фрукты', 'Овощи,фрукты'),
(2, 'Морепродукты', 'Морепродукты'),
(3, 'Мясо', 'Мясо'),
(4, 'Вода,соки,напитки', 'Вода,соки,напитки'),
(5, 'Чай,кофе', 'Чай,кофе'),
(6, 'Хлеб', 'Хлеб'),
(7, 'Соусы', 'Соусы'),
(8, 'Крупы', 'Крупы'),
(9, 'Алкоголь', 'Алкоголь'),
(10, 'Замороженные продукты', 'Замороженные продукты'),
(11, 'Сладости', 'Конфеты, шоколад');

-- --------------------------------------------------------

--
-- Структура таблицы `clients`
--

CREATE TABLE `clients` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `company` enum('0','1') DEFAULT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `clients`
--

INSERT INTO `clients` (`id`, `name`, `phone`, `address`, `company`, `comment`) VALUES
(1, 'Владимир', '+380986002030', 'пр.Наличных д.4 ', '1', 'ТОВ \"Альянс\"'),
(2, 'Николай Семенович', '+380986002030', 'пр.Наличных д.4 ', '0', 'Доставка в день заказа'),
(3, 'Василий Филиппыч', '+380986002030', 'пр.Наличных д.4 ', '1', 'ООО \"Застрахуй\"'),
(4, 'Константин', '+380986002030', 'пр.Наличных д.4 ', '1', 'ТОВ \"Город-мечта\"');

-- --------------------------------------------------------

--
-- Структура таблицы `fines`
--

CREATE TABLE `fines` (
  `id` int(10) NOT NULL,
  `worker_id` int(10) NOT NULL,
  `money` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `fines`
--

INSERT INTO `fines` (`id`, `worker_id`, `money`, `description`, `date`) VALUES
(1, 2, '-200 грн', 'Опаздал на работу', '2019-10-15'),
(2, 4, '-100 грн', 'Жалоба посетителя', '2019-10-08');

-- --------------------------------------------------------

--
-- Структура таблицы `inventory`
--

CREATE TABLE `inventory` (
  `id` int(10) NOT NULL,
  `date` date NOT NULL,
  `cat_id` int(10) NOT NULL,
  `worker_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `inventory`
--

INSERT INTO `inventory` (`id`, `date`, `cat_id`, `worker_id`) VALUES
(1, '2019-10-18', 1, 5),
(2, '2019-10-09', 3, 5),
(3, '2019-10-04', 2, 5);

-- --------------------------------------------------------

--
-- Структура таблицы `inven_products`
--

CREATE TABLE `inven_products` (
  `id` int(10) NOT NULL,
  `inven_id` int(10) NOT NULL,
  `product_id` int(10) NOT NULL,
  `cost` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `inven_products`
--

INSERT INTO `inven_products` (`id`, `inven_id`, `product_id`, `cost`) VALUES
(1, 1, 1, '200'),
(2, 1, 2, '35'),
(3, 2, 5, '30'),
(4, 2, 6, '20'),
(5, 3, 3, '12'),
(6, 3, 4, '5');

-- --------------------------------------------------------

--
-- Структура таблицы `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `parent` int(11) DEFAULT NULL,
  `route` varchar(255) DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  `data` blob
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1571746495),
('m140506_102106_rbac_init', 1571748120),
('m140602_111327_create_menu_table', 1571748112),
('m160312_050000_create_user', 1571748112),
('m170907_052038_rbac_add_index_on_auth_assignment_user_id', 1571748120),
('m180523_151638_rbac_updates_indexes_without_prefix', 1571748120);

-- --------------------------------------------------------

--
-- Структура таблицы `off_products`
--

CREATE TABLE `off_products` (
  `id` int(10) NOT NULL,
  `off_id` int(10) NOT NULL,
  `product_id` int(10) NOT NULL,
  `price` varchar(255) NOT NULL,
  `cost` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `off_products`
--

INSERT INTO `off_products` (`id`, `off_id`, `product_id`, `price`, `cost`) VALUES
(1, 1, 1, '30,30 грн', '3'),
(2, 2, 9, '120,10 грн', '1'),
(3, 3, 2, '10,10 грн', '1'),
(4, 4, 7, '50,45 грн', '1'),
(5, 4, 8, '6,45 грн', '10');

-- --------------------------------------------------------

--
-- Структура таблицы `order`
--

CREATE TABLE `order` (
  `id` int(10) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `worker_id` int(10) DEFAULT NULL,
  `client_id` int(10) NOT NULL,
  `payment` enum('0','1','2','3') DEFAULT NULL,
  `price` varchar(255) NOT NULL,
  `comment` varchar(255) DEFAULT NULL,
  `status` enum('0','1','2') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `order`
--

INSERT INTO `order` (`id`, `date`, `worker_id`, `client_id`, `payment`, `price`, `comment`, `status`) VALUES
(1, '2019-10-17 14:19:04', 3, 1, '1', '300 грн', '<p>Доставка в понедельник</p>\r\n', '1'),
(2, '2019-10-17 13:19:47', 4, 2, '3', '4000 грн', 'Упаковка', '1'),
(3, '2019-06-19 13:20:14', 1, 3, '2', '5000 грн', '', '2'),
(4, '2019-10-18 13:20:38', 4, 1, '1', '400 грн', '', '0'),
(5, '2019-10-18 13:21:03', 3, 3, '1', '500 грн', NULL, '0'),
(6, '2019-10-18 13:21:20', 3, 4, '1', '350,40 грн', '<p>Доставка</p>\r\n', '0'),
(7, '2019-10-17 14:19:04', 3, 1, '1', '300 грн', 'Доставка в понедельник', '0'),
(8, '2019-10-17 13:19:47', 4, 2, '3', '4000 грн', 'Упаковка', '1'),
(9, '2019-06-19 13:20:14', 1, 3, '2', '5000 грн', '', '2'),
(10, '2019-10-18 13:20:38', 4, 1, '1', '400 грн', '', '0'),
(11, '2019-10-18 13:21:03', 3, 3, '1', '500 грн', NULL, '0'),
(12, '2019-10-18 13:21:20', 3, 4, '1', '350,40 грн', 'Доставка', '0'),
(13, '2019-10-17 14:19:04', 3, 1, '1', '300 грн', 'Доставка в понедельник', '0'),
(14, '2019-10-17 13:19:47', 4, 2, '3', '4000 грн', 'Упаковка', '1'),
(15, '2019-06-19 13:20:14', 1, 3, '2', '5000 грн', '', '2'),
(16, '2019-10-18 13:20:38', 4, 1, '1', '400 грн', '', '0'),
(17, '2019-10-18 13:21:03', 3, 3, '1', '500 грн', NULL, '0'),
(18, '2019-10-18 13:21:20', 3, 4, '1', '350,40 грн', 'Доставка', '0'),
(19, '2019-10-17 14:19:04', 3, 1, '1', '300 грн', 'Доставка в понедельник', '0'),
(20, '2019-10-17 13:19:47', 4, 2, '3', '4000 грн', 'Упаковка', '1'),
(21, '2019-06-19 13:20:14', 1, 3, '2', '5000 грн', '', '2'),
(22, '2019-10-18 13:20:38', 4, 1, '1', '400 грн', '', '0'),
(23, '2019-10-18 13:21:03', 3, 3, '1', '500 грн', NULL, '0'),
(24, '2019-10-18 13:21:20', 3, 4, '1', '350,40 грн', 'Доставка', '0'),
(25, '2019-10-17 14:19:04', 3, 1, '1', '300 грн', 'Доставка в понедельник', '0'),
(26, '2019-10-17 13:19:47', 4, 2, '3', '4000 грн', 'Упаковка', '1'),
(27, '2019-06-19 13:20:14', 1, 3, '2', '5000 грн', '', '2'),
(28, '2019-10-18 13:20:38', 4, 1, '1', '400 грн', '', '0'),
(29, '2019-10-18 13:21:03', 3, 3, '1', '500 грн', NULL, '0'),
(30, '2019-10-18 13:21:20', 3, 4, '1', '350,40 грн', 'Доставка', '0'),
(31, '2019-10-17 14:19:04', 3, 1, '1', '300 грн', 'Доставка в понедельник', '0');

-- --------------------------------------------------------

--
-- Структура таблицы `order_items`
--

CREATE TABLE `order_items` (
  `id` int(10) NOT NULL,
  `order_id` int(10) NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `cost` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `product_id`, `cost`) VALUES
(1, 1, 1, 8),
(2, 2, 3, 64),
(3, 2, 4, 24),
(4, 3, 9, 21),
(5, 3, 10, 54),
(6, 4, 5, 9),
(7, 5, 7, 9),
(8, 6, 11, 20),
(9, 7, 1, 8),
(10, 8, 3, 64),
(11, 8, 4, 24),
(12, 9, 9, 21),
(13, 9, 10, 54),
(14, 10, 5, 9),
(15, 11, 7, 9),
(16, 12, 11, 20),
(17, 13, 1, 8),
(18, 14, 3, 64),
(19, 15, 4, 24),
(20, 15, 9, 21),
(21, 16, 10, 54),
(22, 17, 5, 9),
(23, 18, 7, 9),
(24, 19, 11, 20),
(25, 20, 1, 8),
(26, 21, 3, 64),
(27, 21, 4, 24),
(28, 22, 9, 21),
(29, 22, 10, 54),
(30, 23, 5, 9),
(31, 24, 7, 9),
(32, 25, 11, 20),
(33, 26, 1, 8),
(34, 27, 3, 64),
(35, 27, 4, 24),
(36, 28, 9, 21),
(37, 29, 10, 54),
(38, 30, 5, 9),
(39, 31, 7, 9);

-- --------------------------------------------------------

--
-- Структура таблицы `other_costs`
--

CREATE TABLE `other_costs` (
  `id` int(10) NOT NULL,
  `data` date NOT NULL,
  `description` text NOT NULL,
  `money` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `other_costs`
--

INSERT INTO `other_costs` (`id`, `data`, `description`, `money`) VALUES
(1, '2019-10-16', 'Списание id#1', '-30,30 грн'),
(2, '2019-10-03', 'Списание id#2', '-120,10 грн'),
(3, '2019-10-02', 'Списание id#3', '-10,10 грн'),
(4, '2019-10-09', 'Списание id#4', '-110,90 грн'),
(5, '2019-10-15', 'Покупка моющих средств', '-200,45 грн');

-- --------------------------------------------------------

--
-- Структура таблицы `prize`
--

CREATE TABLE `prize` (
  `id` int(10) NOT NULL,
  `worker_id` int(10) NOT NULL,
  `money` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `prize`
--

INSERT INTO `prize` (`id`, `worker_id`, `money`, `description`, `date`) VALUES
(1, 1, '+4000 грн', 'Плодотворный труд', '2019-10-08'),
(2, 5, '+1000 грн', 'Инвентаризация', '2019-10-10');

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int(10) NOT NULL,
  `cat_id` int(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text,
  `cost` int(10) NOT NULL,
  `unit` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `cat_id`, `title`, `description`, `cost`, `unit`, `price`) VALUES
(1, 1, 'Петрушка', '100г упаковка', 200, '100 g', '41,90 грн'),
(2, 1, 'Картошка', '1 кг ', 35, '1 kg', '10,10 грн'),
(3, 2, 'Скумбрия', 'тушка', 12, '1 шт', '30,45 грн'),
(4, 2, 'Съомга', 'тушка', 5, '1 шт', '80,80 грн'),
(5, 3, 'Курица филе', 'вес', 30, '1 кг', '40,50 грн'),
(6, 3, 'Говядина вырезка', 'вес', 20, '1 кг', '75,42 грн'),
(7, 4, 'Вода минеральная \"Миргородская\"', '6 бутылок в упаков.', 10, '1 упаков.', '50,45 грн'),
(8, 4, 'Вода минеральная \"Изумруд\"', 'бут', 50, '1 бут', '6,45 грн'),
(9, 9, 'Коньяк \"Шустав\" 5 звезд', 'бут', 12, '1 бут', '120,10 грн'),
(10, 11, 'Конфеты АВК', 'кг', 10, '1 кг', '45,50 грн'),
(11, 8, 'Гречка', 'Гречка', 100, '1 кг', '25 грн');

-- --------------------------------------------------------

--
-- Структура таблицы `salary`
--

CREATE TABLE `salary` (
  `id` int(10) NOT NULL,
  `worker_id` int(10) NOT NULL,
  `rate_id` int(10) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `prize_id` int(10) DEFAULT NULL,
  `fine_id` int(10) DEFAULT NULL,
  `money` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `salary`
--

INSERT INTO `salary` (`id`, `worker_id`, `rate_id`, `start_date`, `end_date`, `prize_id`, `fine_id`, `money`, `name`) VALUES
(1, 1, 300, '2019-10-01', '2019-10-15', 1, 0, '8500 грн', 'Аванс'),
(2, 5, 120, '2019-10-01', '2019-10-15', 2, 0, '2800 грн', 'Аванс'),
(3, 6, 80, '2019-10-01', '2019-10-15', NULL, 0, '1500 грн', 'Аванс'),
(4, 2, 120, '2019-10-01', '2019-10-15', NULL, 1, '8000 грн', 'Оплата за работу');

-- --------------------------------------------------------

--
-- Структура таблицы `sources`
--

CREATE TABLE `sources` (
  `id` int(10) NOT NULL,
  `cat_id` int(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `sources`
--

INSERT INTO `sources` (`id`, `cat_id`, `title`, `description`) VALUES
(1, 3, 'Мясная лавка', 'ООО \"Мясная лавка\"'),
(2, 1, 'Василий Филипыч', 'ТОВ \"Василий Филипыч\"'),
(3, 2, 'Aquafish', 'ОАО \"Aquafish\"'),
(4, 8, 'Алексис', 'ООО \"Алексис\"'),
(5, 10, 'Суворов', 'Суворов'),
(6, 11, 'АВК', 'Конфеты АВК');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Superadmin', 'O_5Q6_KINzPjIxVLl8P0eoavdqA3RTq2', '$2y$13$dJtcV9L5xj.CgffQKf7IIulNnZUQKOhlB/QPV.5mWArmgQfWpG8PG', NULL, 'admin@myprojects.info', 10, 1571748348, 1571748348),
(2, 'Manager', '3h9RZG_Dcgo-WONRBtueAhlD3vHjUxGN', '$2y$13$McR/mvAtAIUUhp6QbSW5V.EdIayjfVs/1xg7ZRpxkDyqWB1nSVe5m', NULL, 'manager@mail.ua', 10, 1571748483, 1571748483),
(3, 'User', '-u0NWqXUkrcuRRLbTv-n3Kao4BP_B81v', '$2y$13$/p4Vtp3bl.uyNw8tw/iF4u0QH7KE8Uz9GZ5m1Vy5DN6yCp2NsKwYO', NULL, 'user@mail.ua', 10, 1571748502, 1571748502);

-- --------------------------------------------------------

--
-- Структура таблицы `waybill`
--

CREATE TABLE `waybill` (
  `id` int(10) NOT NULL,
  `source_id` int(10) NOT NULL,
  `date` date NOT NULL,
  `description` text,
  `price` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `waybill`
--

INSERT INTO `waybill` (`id`, `source_id`, `date`, `description`, `price`) VALUES
(1, 1, '2019-10-17', 'Мясная лавка', '2719 грн'),
(2, 2, '2019-10-02', 'Алексис', '5000 грн'),
(3, 6, '2019-10-11', 'Суворов - конфеты', '450 грн'),
(4, 2, '2019-10-19', 'Овощи', '8380 грн'),
(5, 3, '2019-10-17', 'Скумбрия', '365,40 грн'),
(6, 3, '2019-10-10', 'Съомга', '404 грн');

-- --------------------------------------------------------

--
-- Структура таблицы `waybill_products`
--

CREATE TABLE `waybill_products` (
  `id` int(10) NOT NULL,
  `waybill_id` int(10) NOT NULL,
  `product_id` int(10) NOT NULL,
  `cost` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `waybill_products`
--

INSERT INTO `waybill_products` (`id`, `waybill_id`, `product_id`, `cost`, `price`) VALUES
(1, 1, 5, '30', '1215 грн'),
(2, 1, 6, '20', '1504 грн'),
(3, 2, 11, '100', '2500 грн'),
(4, 2, 11, '100', '2500 грн'),
(5, 3, 10, '10', '450 грн'),
(6, 4, 1, '200', '8380 грн'),
(7, 5, 3, '12', '365,40 грн'),
(8, 6, 4, '5', '404 грн');

-- --------------------------------------------------------

--
-- Структура таблицы `workers`
--

CREATE TABLE `workers` (
  `id` int(10) NOT NULL,
  `fio` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `rate` varchar(255) NOT NULL,
  `work_day` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `workers`
--

INSERT INTO `workers` (`id`, `fio`, `position`, `rate`, `work_day`) VALUES
(1, 'Олег Владимирович', 'Директор', '300 грн/день', 'Пн-Пт'),
(2, 'Игорь Владимирович', 'Программист', '120 грн/час', 'Пн-Вс'),
(3, 'Виктория Олеговна', 'Бариста', '150 грн/день', 'Пн-Чт'),
(4, 'Анастасия Викторовна', 'Бариста', '140 грн/день', 'Чт-Пн'),
(5, 'Виктория Карловна', 'Кладовщик', '120 грн/день', 'Пн-Пт'),
(6, 'Александра Валентиновна', 'Уборщица', '80 грн/час', 'Пн-Вс');

-- --------------------------------------------------------

--
-- Структура таблицы `write_off`
--

CREATE TABLE `write_off` (
  `id` int(10) NOT NULL,
  `date` date NOT NULL,
  `reason` text NOT NULL,
  `price` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `write_off`
--

INSERT INTO `write_off` (`id`, `date`, `reason`, `price`) VALUES
(1, '2019-10-16', 'Срок годности', '30,30 грн'),
(2, '2019-10-03', 'Уронили', '120,10 грн'),
(3, '2019-10-02', 'Срок годности', '10,10 грн'),
(4, '2019-10-09', 'Уронили', '110,90 грн');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD PRIMARY KEY (`item_name`,`user_id`),
  ADD KEY `idx-auth_assignment-user_id` (`user_id`);

--
-- Индексы таблицы `auth_item`
--
ALTER TABLE `auth_item`
  ADD PRIMARY KEY (`name`),
  ADD KEY `rule_name` (`rule_name`),
  ADD KEY `idx-auth_item-type` (`type`);

--
-- Индексы таблицы `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD PRIMARY KEY (`parent`,`child`),
  ADD KEY `child` (`child`);

--
-- Индексы таблицы `auth_rule`
--
ALTER TABLE `auth_rule`
  ADD PRIMARY KEY (`name`);

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `fines`
--
ALTER TABLE `fines`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `inven_products`
--
ALTER TABLE `inven_products`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `parent` (`parent`);

--
-- Индексы таблицы `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Индексы таблицы `off_products`
--
ALTER TABLE `off_products`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `other_costs`
--
ALTER TABLE `other_costs`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `prize`
--
ALTER TABLE `prize`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `salary`
--
ALTER TABLE `salary`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `sources`
--
ALTER TABLE `sources`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `waybill`
--
ALTER TABLE `waybill`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `waybill_products`
--
ALTER TABLE `waybill_products`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `workers`
--
ALTER TABLE `workers`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `write_off`
--
ALTER TABLE `write_off`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT для таблицы `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `fines`
--
ALTER TABLE `fines`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `inventory`
--
ALTER TABLE `inventory`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `inven_products`
--
ALTER TABLE `inven_products`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `off_products`
--
ALTER TABLE `off_products`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `order`
--
ALTER TABLE `order`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT для таблицы `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT для таблицы `other_costs`
--
ALTER TABLE `other_costs`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `prize`
--
ALTER TABLE `prize`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT для таблицы `salary`
--
ALTER TABLE `salary`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `sources`
--
ALTER TABLE `sources`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `waybill`
--
ALTER TABLE `waybill`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `waybill_products`
--
ALTER TABLE `waybill_products`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `workers`
--
ALTER TABLE `workers`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `write_off`
--
ALTER TABLE `write_off`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD CONSTRAINT `auth_assignment_ibfk_1` FOREIGN KEY (`item_name`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `auth_item`
--
ALTER TABLE `auth_item`
  ADD CONSTRAINT `auth_item_ibfk_1` FOREIGN KEY (`rule_name`) REFERENCES `auth_rule` (`name`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD CONSTRAINT `auth_item_child_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `auth_item_child_ibfk_2` FOREIGN KEY (`child`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `menu`
--
ALTER TABLE `menu`
  ADD CONSTRAINT `menu_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `menu` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
