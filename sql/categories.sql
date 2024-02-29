-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Фев 29 2024 г., 12:52
-- Версия сервера: 10.4.32-MariaDB
-- Версия PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `categories`
--

-- --------------------------------------------------------

--
-- Структура таблицы `product_categories`
--

CREATE TABLE `product_categories` (
  `id` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT 0,
  `name` varchar(100) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1' COMMENT '1:Active, 0:Inactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `product_categories`
--

INSERT INTO `product_categories` (`id`, `parent_id`, `name`, `created`, `modified`, `status`) VALUES
(1, 0, 'Родительская категория', '2024-02-14 14:01:16', '2024-02-14 14:01:16', '1'),
(2, 0, 'Смартфоны', '2024-02-14 14:02:41', '2024-02-14 14:02:41', '1'),
(3, 0, 'Фотоаппараты', '2024-02-14 14:02:57', '2024-02-14 14:02:57', '1'),
(4, 0, 'Сезонная одежда', '2024-02-14 14:03:06', '2024-02-14 14:03:06', '1'),
(5, 0, 'Комплектующие ПК', '2024-02-14 14:03:13', '2024-02-14 14:03:13', '1'),
(6, 1, 'Подкатегория ', '2024-02-14 14:03:28', '2024-02-14 14:03:28', '1'),
(7, 2, 'Apple', '2024-02-14 14:03:47', '2024-02-14 14:03:47', '1'),
(8, 2, 'Samsung', '2024-02-14 14:04:14', '2024-02-14 14:04:14', '1'),
(9, 3, 'Nikon', '2024-02-14 14:04:42', '2024-02-14 14:04:42', '1'),
(10, 3, 'Canon', '2024-02-14 14:04:51', '2024-02-14 14:04:51', '1'),
(11, 9, 'Nikon somemark', '2024-02-14 14:05:00', '2024-02-14 14:05:00', '1'),
(12, 8, 'Samsung A20', '2024-02-14 14:05:19', '2024-02-14 14:05:19', '1'),
(13, 8, 'Samsung Galaxy Fold', '2024-02-14 14:05:47', '2024-02-14 14:05:47', '1');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
