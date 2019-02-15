-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-08-2018 a las 17:50:14
-- Versión del servidor: 10.1.34-MariaDB
-- Versión de PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdpersona`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbcontactos`
--

CREATE TABLE `tbcontactos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `correo` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `tarjeta` int(15) NOT NULL,
  `Franquisia` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `Titular` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `tarjeta_numero` int(15) NOT NULL,
  `anoc` int(4) NOT NULL,
  `mesc` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `cvv2` varchar(5) COLLATE utf8_spanish_ci NOT NULL,
  `Nombre_1` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `tel` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `Localidad` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `city` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `state` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `zipcode` int(8) NOT NULL,
  `Pais` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `textarea` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tbcontactos`
--

INSERT INTO `tbcontactos` (`id`, `nombre`, `apellido`, `correo`, `tarjeta`, `Franquisia`, `Titular`, `tarjeta_numero`, `anoc`, `mesc`, `cvv2`, `Nombre_1`, `tel`, `direccion`, `Localidad`, `city`, `state`, `zipcode`, `Pais`, `textarea`) VALUES
(1, 'qq', 'perez', 'm@colombia.com', 0, 'Dinners Club', 'Michael Daniel Murillo LÃ³pez', 1111111, 2031, '11', '732', 'Michael Daniel Murillo LÃ³pez', '16813635', 'cr 23 # 32 - 28', '', 'bogota', 'Dc', 111131, 'Australia', '1111'),
(2, 'Administrator', 'System', 'administrador@colombia.com', 0, 'Visa', 'Administrator System', 111, 2030, '12', '123', 'Administrator System', '16813635', 'cr 23 # 32 - 28', '', 'bogota', 'Dc', 111131, 'Bahrein', '1'),
(3, 'qq', 'rr', 'm@colombia.com', 1, 'Visa', 'Administrator System', 3334, 2029, '7', '772', 'Michael Daniel Murillo LÃ³pez', '16813635', 'cr 23 # 32 - 28', '', 'bogota', 'Dc', 111131, 'Australia', '1'),
(4, 'luca', 'Luna', '1@colombia.com', 2, 'American Express', 'Administrator System', 30, 2030, '6', '123', 'Michael Daniel Murillo LÃ³pez', '16813635', 'cl 123 c 93-2', '', 'bogota', 'cd', 111131, 'Colombia', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbusuario`
--

CREATE TABLE `tbusuario` (
  `id` int(11) NOT NULL,
  `login` varchar(35) COLLATE utf8_spanish_ci NOT NULL,
  `pass` varchar(35) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(35) COLLATE utf8_spanish_ci NOT NULL,
  `perfil` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `activo` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tbusuario`
--

INSERT INTO `tbusuario` (`id`, `login`, `pass`, `nombre`, `perfil`, `activo`) VALUES
(1, 'admin', 'admin', 'Michael Daniel Murillo ', 'administrador', 1),
(2, 'max', 'max', 'max', 'digitador', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbcontactos`
--
ALTER TABLE `tbcontactos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tbusuario`
--
ALTER TABLE `tbusuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbcontactos`
--
ALTER TABLE `tbcontactos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tbusuario`
--
ALTER TABLE `tbusuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
