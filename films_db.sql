-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-09-2020 a las 13:46:41
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `films_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `films`
--

CREATE TABLE `films` (
  `id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `year` int(4) NOT NULL,
  `cover` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `films`
--

INSERT INTO `films` (`id`, `title`, `year`, `cover`) VALUES
(1, 'Piratas del Caribe: En el fin del mundo', 2007, 'piratas_caribe_fin_del_mundo.jpg'),
(2, 'Crank: Alto voltaje', 2009, 'crank_alto_voltaje.jpg'),
(3, 'Joker', 2019, 'joker.jpg'),
(4, 'Fast & Furious 8', 2017, 'fast_and_furious_8.jpg'),
(5, 'Deep Blue Sea', 1999, 'deep_blue_sea.jpg'),
(6, 'Iron Man 3', 2013, 'ironman_3.jpg'),
(7, '8 Millas', 2002, '8_mile.jpg'),
(8, 'Jurassic World Dominion', 2023, 'jurassic_world_dominion.jpg'),
(9, 'Generation Iron 4: Natty 4 Life', 2020, 'generation_iron_4_natty.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `films`
--
ALTER TABLE `films`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `films`
--
ALTER TABLE `films`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
