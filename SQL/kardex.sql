-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-06-2021 a las 03:56:53
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `kardex`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle`
--

CREATE TABLE `detalle` (
  `id_detalle` int(10) NOT NULL,
  `nombre_detalle` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `codigo` int(10) DEFAULT NULL,
  `fecha_detalle` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entradas`
--

CREATE TABLE `entradas` (
  `id_entradas` int(10) NOT NULL,
  `cantidad_entradas` int(10) DEFAULT NULL,
  `valor_unitario_entradas` int(10) DEFAULT NULL,
  `valor_total_entradas` int(10) DEFAULT NULL,
  `fecha_entradas` date DEFAULT NULL,
  `fk_id_detalle_entradas` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `saldo`
--

CREATE TABLE `saldo` (
  `id_saldo` int(10) NOT NULL,
  `cantidad_salidas` int(10) DEFAULT NULL,
  `valor_unitario_saldo` int(10) DEFAULT NULL,
  `valor_total_saldo` int(10) DEFAULT NULL,
  `fecha_saldo` date DEFAULT NULL,
  `fk_id_detalle_saldo` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `salidas`
--

CREATE TABLE `salidas` (
  `id_salidas` int(10) NOT NULL,
  `valor_unitario_salidas` int(10) DEFAULT NULL,
  `valor_total_salidas` int(10) DEFAULT NULL,
  `fecha_salidas` date DEFAULT NULL,
  `fk_id_detalle_salidas` int(10) NOT NULL,
  `detallenombre_detalle` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `detalleid_detalle` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `detalle`
--
ALTER TABLE `detalle`
  ADD PRIMARY KEY (`id_detalle`);

--
-- Indices de la tabla `entradas`
--
ALTER TABLE `entradas`
  ADD PRIMARY KEY (`id_entradas`),
  ADD KEY `FKentradas868303` (`fk_id_detalle_entradas`);

--
-- Indices de la tabla `saldo`
--
ALTER TABLE `saldo`
  ADD PRIMARY KEY (`id_saldo`),
  ADD KEY `FKsaldo433301` (`fk_id_detalle_saldo`);

--
-- Indices de la tabla `salidas`
--
ALTER TABLE `salidas`
  ADD PRIMARY KEY (`id_salidas`),
  ADD KEY `FKsalidas850646` (`detalleid_detalle`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `detalle`
--
ALTER TABLE `detalle`
  MODIFY `id_detalle` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `entradas`
--
ALTER TABLE `entradas`
  MODIFY `id_entradas` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `saldo`
--
ALTER TABLE `saldo`
  MODIFY `id_saldo` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `salidas`
--
ALTER TABLE `salidas`
  MODIFY `id_salidas` int(10) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `entradas`
--
ALTER TABLE `entradas`
  ADD CONSTRAINT `FKentradas868303` FOREIGN KEY (`fk_id_detalle_entradas`) REFERENCES `detalle` (`id_detalle`);

--
-- Filtros para la tabla `saldo`
--
ALTER TABLE `saldo`
  ADD CONSTRAINT `FKsaldo433301` FOREIGN KEY (`fk_id_detalle_saldo`) REFERENCES `detalle` (`id_detalle`);

--
-- Filtros para la tabla `salidas`
--
ALTER TABLE `salidas`
  ADD CONSTRAINT `FKsalidas850646` FOREIGN KEY (`detalleid_detalle`) REFERENCES `detalle` (`id_detalle`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
