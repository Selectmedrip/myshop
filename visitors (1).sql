-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 15 2024 г., 14:55
-- Версия сервера: 8.0.24
-- Версия PHP: 8.0.8

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
(1, 1, 'Lego Ninjago', '17500.00', '\"Тренировочный центр ниндзя\"', 'https://img.detmir.st/mSujoIjvh3-B0ub5Uu8Im3lHgGPl3fpPHb6NhpHEkFs/rs:fit:2100:2100/g:sm/aHR0cHM6Ly9jYXRhbG9nLmRldG1pci5zdC9tZWRpYS85MGtXdHp4OXRQcGk1aklINmxIY1dYTm56X0dsMGJDbmdEcjZja3NZSGQ4PQ.webp'),
(2, 2, 'Lego Ninjago', '17500.00', '\"Золотой ультрадракон Ллойда\"', 'https://ir-2.ozone.ru/s3/multimedia-z/wc1000/6850037087.jpg'),
(3, 3, 'Lego City', '12500.00', '\"Побег из полицейского участка\"', 'https://img.detmir.st/32p9o0gpAK9B0w5xfh0jP4aXy2hqZKvGRWFV6z3FwKE/rs:fit:700:700/g:sm/aHR0cHM6Ly9jYXRhbG9nLmRldG1pci5zdC9tZWRpYS8zOGRGTTVFWnA5X3B4ZnhPN1lia0ktTTU2Mldtd2ZCNzlUb2lrcFkxYVprPQ.webp'),
(4, 4, 'Lego City', '37600.00', '\"Железная дорога\"', 'https://ir-2.ozone.ru/s3/multimedia-a/wc1000/6056182978.jpg'),
(5, 5, 'Lego Ninjago', '14500.00', '\"Каменный робот огня\"', 'https://ir-2.ozone.ru/s3/multimedia-s/wc1000/6280049464.jpg');

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
('Анна', 'Оствальд', 'anna@shop.ru', 'annashop05'),
('as', 'as', 'asa@gm.com', '12'),
('1323', '213123', '1@gmail.com', '12');

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
