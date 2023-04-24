-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: mariadb
-- Tiempo de generación: 24-04-2023 a las 09:17:26
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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Assignacions`
--

CREATE TABLE `Assignacions` (
  `id` int(11) NOT NULL,
  `idMaterial` int(11) NOT NULL,
  `idAlumne` int(11) NOT NULL,
  `dataInici` date NOT NULL,
  `dataFinal` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Estats`
--

CREATE TABLE `Estats` (
  `id` int(11) NOT NULL,
  `estat` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Incidencies`
--

CREATE TABLE `Incidencies` (
  `id` int(11) NOT NULL,
  `informacio` varchar(5000) DEFAULT NULL,
  `dataOberta` date DEFAULT NULL,
  `dataTancada` date DEFAULT NULL,
  `idAlumne` int(11) DEFAULT NULL,
  `idDispositiu` int(11) DEFAULT NULL,
  `idEstat` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Material`
--

CREATE TABLE `Material` (
  `id` int(11) NOT NULL,
  `idTipus` int(11) NOT NULL,
  `idInventari` varchar(10) DEFAULT NULL,
  `etiquetaDepInf` varchar(50) DEFAULT NULL,
  `numSerie` varchar(50) DEFAULT NULL,
  `macEthernet` varchar(50) DEFAULT NULL,
  `macWifi` varchar(50) DEFAULT NULL,
  `SACE` varchar(50) DEFAULT NULL,
  `dataAdquisicio` date DEFAULT NULL,
  `idUbicacio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `TipusMaterial`
--

CREATE TABLE `TipusMaterial` (
  `id` int(11) NOT NULL,
  `tipus` varchar(50) DEFAULT NULL,
  `model` varchar(50) DEFAULT NULL,
  `origen` enum('GENE','DEP') DEFAULT 'DEP'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Ubicacions`
--

CREATE TABLE `Ubicacions` (
  `id` int(11) NOT NULL,
  `nom` varchar(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Alumnes`
--
ALTER TABLE `Alumnes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `correu` (`correu`);

--
-- Indices de la tabla `Assignacions`
--
ALTER TABLE `Assignacions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idMaterial` (`idMaterial`),
  ADD KEY `idAlumne` (`idAlumne`);

--
-- Indices de la tabla `Estats`
--
ALTER TABLE `Estats`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `Incidencies`
--
ALTER TABLE `Incidencies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idAlumne` (`idAlumne`),
  ADD KEY `idDispositiu` (`idDispositiu`),
  ADD KEY `idEstat` (`idEstat`);

--
-- Indices de la tabla `Material`
--
ALTER TABLE `Material`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `idInventari` (`idInventari`),
  ADD UNIQUE KEY `etiquetaDepInf` (`etiquetaDepInf`),
  ADD UNIQUE KEY `numSerie` (`numSerie`),
  ADD UNIQUE KEY `macEthernet` (`macEthernet`),
  ADD UNIQUE KEY `macWifi` (`macWifi`),
  ADD UNIQUE KEY `SACE` (`SACE`),
  ADD KEY `idTipus` (`idTipus`),
  ADD KEY `idUbicacio` (`idUbicacio`);

--
-- Indices de la tabla `TipusMaterial`
--
ALTER TABLE `TipusMaterial`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `Ubicacions`
--
ALTER TABLE `Ubicacions`
  ADD PRIMARY KEY (`id`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `Assignacions`
--
ALTER TABLE `Assignacions`
  ADD CONSTRAINT `Assignacions_ibfk_1` FOREIGN KEY (`idMaterial`) REFERENCES `Material` (`id`),
  ADD CONSTRAINT `Assignacions_ibfk_2` FOREIGN KEY (`idAlumne`) REFERENCES `Alumnes` (`id`);

--
-- Filtros para la tabla `Incidencies`
--
ALTER TABLE `Incidencies`
  ADD CONSTRAINT `Incidencies_ibfk_1` FOREIGN KEY (`idAlumne`) REFERENCES `Alumnes` (`id`),
  ADD CONSTRAINT `Incidencies_ibfk_2` FOREIGN KEY (`idDispositiu`) REFERENCES `Material` (`id`),
  ADD CONSTRAINT `Incidencies_ibfk_3` FOREIGN KEY (`idEstat`) REFERENCES `Estats` (`id`);

--
-- Filtros para la tabla `Material`
--
ALTER TABLE `Material`
  ADD CONSTRAINT `Material_ibfk_1` FOREIGN KEY (`idTipus`) REFERENCES `TipusMaterial` (`id`),
  ADD CONSTRAINT `Material_ibfk_2` FOREIGN KEY (`idUbicacio`) REFERENCES `Ubicacions` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
