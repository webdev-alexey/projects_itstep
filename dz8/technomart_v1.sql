-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 24 2018 г., 16:08
-- Версия сервера: 5.6.41
-- Версия PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `technomart_v1`
--

-- --------------------------------------------------------

--
-- Структура таблицы `cost`
--

CREATE TABLE `cost` (
  `id` int(11) NOT NULL,
  `technics_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `discount, %` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `cost`
--

INSERT INTO `cost` (`id`, `technics_id`, `quantity`, `discount, %`) VALUES
(1, 1, 1, 12);

-- --------------------------------------------------------

--
-- Структура таблицы `manufacturer`
--

CREATE TABLE `manufacturer` (
  `id` int(11) NOT NULL,
  `manufacturer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `manufacturer`
--

INSERT INTO `manufacturer` (`id`, `manufacturer`) VALUES
(1, 'BOSCH'),
(2, 'Makita');

-- --------------------------------------------------------

--
-- Структура таблицы `method of obtaining`
--

CREATE TABLE `method of obtaining` (
  `id` int(11) NOT NULL,
  `obtaining` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `method of obtaining`
--

INSERT INTO `method of obtaining` (`id`, `obtaining`) VALUES
(1, 'почта'),
(2, 'курьер (Гом'),
(3, 'курьер (Бел'),
(4, 'Самовывоз');

-- --------------------------------------------------------

--
-- Структура таблицы `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `contact person` varchar(255) NOT NULL,
  `contact phone` bigint(12) NOT NULL,
  `city` varchar(255) NOT NULL,
  `method of obtaining_id` int(11) NOT NULL,
  `payment method_id` int(11) NOT NULL,
  `cost_id` int(11) NOT NULL,
  `comment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `payment method`
--

CREATE TABLE `payment method` (
  `id` int(11) NOT NULL,
  `payment method` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `payment method`
--

INSERT INTO `payment method` (`id`, `payment method`) VALUES
(1, 'Наличными'),
(2, 'Банковская карта');

-- --------------------------------------------------------

--
-- Структура таблицы `technics`
--

CREATE TABLE `technics` (
  `id` int(11) NOT NULL,
  `manufacturer_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `date of issue` varchar(255) NOT NULL,
  `warranty` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `quantity in stock` int(11) NOT NULL,
  `picture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `technics`
--

INSERT INTO `technics` (`id`, `manufacturer_id`, `name`, `date of issue`, `warranty`, `price`, `quantity in stock`, `picture`) VALUES
(1, 1, 'BFG 3000', '24.10.2018', 12, 22500, 2, '1.png');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` varchar(10) NOT NULL,
  `e-mail` varchar(255) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `phone` bigint(12) NOT NULL,
  `password` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `e-mail`, `full_name`, `phone`, `password`) VALUES
(1, 'test', 'test@test.ru', 'Фиксик', 375291196037, 123456789);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `method of obtaining`
--
ALTER TABLE `method of obtaining`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `payment method`
--
ALTER TABLE `payment method`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `technics`
--
ALTER TABLE `technics`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `method of obtaining`
--
ALTER TABLE `method of obtaining`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `payment method`
--
ALTER TABLE `payment method`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `technics`
--
ALTER TABLE `technics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
