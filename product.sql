-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 13-11-2020 a las 17:18:02
-- Versión del servidor: 8.0.17
-- Versión de PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ine20jmd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `product`
--

CREATE TABLE `product` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imgurl` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `discountPercent` double(8,2) NOT NULL,
  `discountStart_at` datetime NOT NULL,
  `discountEnd_at` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `product`
--

INSERT INTO `product` (`id`, `name`, `description`, `imgurl`, `price`, `discountPercent`, `discountStart_at`, `discountEnd_at`, `created_at`, `updated_at`) VALUES
(1, 'Game Cube', 'Descripcion1', '/img/gamecube.png', 12.00, 10.00, '2020-11-09 19:30:00', '2020-12-09 19:30:00', '2020-11-05 19:30:06', '2020-11-05 19:30:06'),
(2, 'Mando Pro', 'Descripcion2', '/img/mandopro.png', 23.00, 10.00, '2020-11-10 00:00:00', '2020-11-13 00:00:00', '2020-11-08 23:00:00', '2020-11-09 23:00:00'),
(3, 'Mario Kart Live', 'Descripcion3', '/img/mariokart live.jpg', 100.00, 0.00, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2020-11-03 23:00:00', '2020-11-03 23:00:00'),
(4, 'Ring Fit Adventure', 'Descripcion4', '/img/ringfit.jpg', 200.00, 20.00, '2020-11-09 00:00:00', '2020-11-13 00:00:00', '2020-11-02 23:00:00', '2020-11-10 23:00:00'),
(5, 'MicroSD Nintendo Switch', 'Descripcion5', '/img/sdswitch.jpg', 300.00, 15.00, '2020-11-08 00:00:00', '2020-11-10 00:00:00', '2020-11-01 23:00:00', '2020-11-10 23:00:00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_name_unique` (`name`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `product`
--
ALTER TABLE `product`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
