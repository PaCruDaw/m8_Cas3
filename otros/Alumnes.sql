-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: mariadb
-- Tiempo de generación: 24-04-2023 a las 09:16:59
-- Versión del servidor: 10.7.8-MariaDB-1:10.7.8+maria~ubu2004
-- Versión de PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `miapp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Alumnes`
--

CREATE TABLE `Alumnes` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `cognom1` varchar(50) NOT NULL,
  `cognom2` varchar(50) DEFAULT NULL,
  `correu` varchar(50) NOT NULL,
  `grupClasse` varchar(10) NOT NULL,
  `contrasenya` varchar(50) DEFAULT NULL,
  `teacher` bit(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `Alumnes`
--

INSERT INTO `Alumnes` (`id`, `nom`, `cognom1`, `cognom2`, `correu`, `grupClasse`, `contrasenya`, `teacher`) VALUES
(1, 'Paula', 'Cruz', 'Escura', 'hola@hh.es', '1', '81dc9bdb52d04dc20036dbd8313ed055', b'0'),
(2, 'Javier', 'Carpio', NULL, 'carpio@gg.es', '1', '4d186321c1a7f0f354b297e8914ab240', b'1');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Alumnes`
--
ALTER TABLE `Alumnes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `correu` (`correu`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
