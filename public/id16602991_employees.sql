-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 20-04-2021 a las 17:35:18
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `employees`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `employees`
--
INSERT INTO `employees` (`id`, `name`, `surname`, `birth`, `age`, `dni`, `sex`, `wsp`) VALUES
(15, 'Maitena', 'Aguirre', '2009-06-19', 12, 0, 'F', 3516289084),
(16, 'Agostina Mía ', 'Álvarez', '2009-08-06', 11, 49716596, 'F', 3516971557),
(17, 'Yamila', 'Argüello', '2021-01-01', 0, 0, 'F', 3547624610),
(18, 'Bruno', 'Ariza', '2005-05-15', 15, 46222763, 'M', 3512743583),
(19, 'Luna Agustina', 'Ariza', '2006-07-01', 15, 46844568, 'F', 3512733628),
(20, 'Giuliana Abigail', 'Ariza', '2007-09-16', 13, 47983237, 'F', 3513651384),
(21, 'Máximo ', 'Astrada', '2008-12-14', 12, 48669686, 'M', 3515740120),
(22, 'Ignacio Angel Benjamín ', 'Avila', '2009-11-21', 11, 49864748, 'F', 3516840652),
(23, 'Maia', 'Bazan', '2010-03-05', 11, 50107914, 'F', 3513425686),
(24, 'Manuel Alejandro', 'Calderón Díaz', '2010-03-11', 11, 50107617, 'M', 3513208916),
(25, 'Thiago Ramiro', 'Chávez ', '2009-04-05', 12, 49497663, 'M', 3515057908),
(26, 'Daiana Abigail ', 'Cobo Juáres', '2003-08-31', 17, 44897284, 'F', 3513666513),
(27, 'Fiorella Magali', 'Córdoba ', '2008-07-18', 12, 48598820, 'F', 3512499871),
(28, 'Federico Josue', 'Gaitan', '2009-12-15', 11, 50107958, 'M', 3513930789),
(29, 'Alex Yoel', 'González', '2005-04-04', 16, 46222634, 'M', 3517419775),
(30, 'Luis Fernando', 'Gutiérrez Mendoza ', '2007-09-30', 13, 47983248, 'M', 3516628668),
(31, 'Martín Facundo ', 'Iturra', '2007-07-17', 13, 47710102, 'M', 3512853652),
(32, 'Máximo Javier', 'Iturra', '2006-03-29', 14, 46588598, 'M', 3512853652),
(33, 'Macarena Tatiana', 'Mamondez', '2007-11-10', 13, 48452977, 'F', 3516522462),
(34, 'Alexis Sebastián ', 'Palacio', '2004-07-24', 16, 45834481, 'M', 3512754383),
(35, 'Ignacio Benjamín ', 'Palacio', '2010-12-10', 11, 50626594, 'M', 3512148171),
(36, 'Melodi Brisa', 'Palacio', '2021-09-03', 13, 47983100, 'F', 3517367739),
(37, 'Ana Celeste', 'Pedernera', '2005-06-22', 15, 46766431, 'F', 0),
(38, 'Wanda Lara', 'Pedernera', '2006-12-26', 14, 46766040, 'F', 0),
(39, 'Guadalupe', 'Vilche', '2021-01-01', 0, 0, 'F', 0),
(40, 'Máximo ', 'Álvarez', '2021-01-01', 11, 0, 'M', 3515426413),
(41, 'Tomás ', 'Noriega', '2021-01-01', 0, 0, 'M', 0),
(42, 'Julián', 'Álvarez ', '2007-10-16', 13, 0, 'M', 3512578954),
(43, 'Mía ', 'Mamondez', '2021-01-01', 11, 0, 'F', 3516522462),
(44, 'Martina', 'Chávez ', '2021-01-01', 0, 0, 'F', 0),
(45, 'Victoria Anahí', 'Vassia', '2005-04-11', 16, 46126122, 'F', 3517078839),
(46, 'Celina Sofía ', 'Acosta ', '2008-04-07', 13, 40125294, 'F', 3512382973),
(47, 'Alejo', 'Bazan', '2010-04-19', 11, 0, 'M', 3518044428),
(48, 'Aixa', 'Ortiz', '2004-06-11', 16, 48487096, 'F', 3516569461),
(49, 'David ', 'Bermudez', '2003-12-23', 17, 45241804, 'M', 3513032132);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `employees`
--
ALTER TABLE `employees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
