-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 05 2024 г., 16:28
-- Версия сервера: 8.0.30
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `visitors`
--
CREATE DATABASE IF NOT EXISTS `visitors` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `visitors`;

-- --------------------------------------------------------

--
-- Структура таблицы `cart`
--

CREATE TABLE `cart` (
  `id` int NOT NULL,
  `product_id` int NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` decimal(10,2) NOT NULL,
  `product_description` text,
  `product_image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `cart`
--

INSERT INTO `cart` (`id`, `product_id`, `product_name`, `product_price`, `product_description`, `product_image`) VALUES
(1, 1, 'Морковь молодая с ботвой', '170.00', 'Хрустящая морковка, для сочного салата, или мощного морковного коктейля', 'https://apeti.ru/upload/resize_cache/iblock/941/llxdo63p88249f84nqqsw5qsgvt6kri0/218_218_0/morkov_molodaya_s_botvoy.jpg'),
(2, 2, 'Манго (Египет)', '260.00', 'Сочнейщий манго из горячего Египта', 'https://apeti.ru/upload/resize_cache/iblock/15b/yfxq04vp6b9g2ihp5kydpw0b3ck3satt/218_218_0/mango_egipet.png'),
(3, 3, 'Перец сладкий', '200.00', 'Сладкий перец, для готовки качественных блюд', 'https://apeti.ru/upload/resize_cache/iblock/a26/30dxj60iopi3ybu3mb2qpsea46ugcclf/218_218_0/perets_sladkiy.jpg'),
(4, 4, 'Помидоры сливка', '216.00', 'Медовый вкус, незабываемые ощущения от вкуса помидора', 'https://apeti.ru/upload/resize_cache/iblock/bd4/6uaueqky9mfk3x8r4t10t70ydvz0tlre/218_218_0/tomaty_slivka.jpg'),
(5, 5, 'Луховицкие огурцы', '116.00', 'Просто огурцы', 'https://apeti.ru/upload/resize_cache/iblock/67e/qyrk4ht0rxq2ivq88egh7jsjfcfbzijq/218_218_0/ogurtsy_lukhovitskie.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `FirstName` varchar(255) DEFAULT NULL,
  `LastName` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`FirstName`, `LastName`, `email`, `password`) VALUES
('Арина', 'Курманаева', 'kurm@mail.ru', '1');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
