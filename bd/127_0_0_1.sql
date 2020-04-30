-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-04-2020 a las 08:00:17
-- Versión del servidor: 10.3.15-MariaDB
-- Versión de PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `viaje_humanitario`
--
CREATE DATABASE IF NOT EXISTS `viaje_humanitario` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci;
USE `viaje_humanitario`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_acompañante`
--

CREATE TABLE `t_acompañante` (
  `id` int(11) NOT NULL,
  `dni` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `apenom` varchar(200) COLLATE utf8mb4_spanish_ci NOT NULL,
  `fecha_nacimiento` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `sexo` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `edad` varchar(20) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `parentesco` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `codigo_solicitud` varchar(20) COLLATE utf8mb4_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `t_acompañante`
--

INSERT INTO `t_acompañante` (`id`, `dni`, `apenom`, `fecha_nacimiento`, `sexo`, `edad`, `parentesco`, `codigo_solicitud`) VALUES
(144, '23424', 'aaaaaa', '1985-04-06', 'femenino', '35', 'dfgdg', 'VH89408778-2'),
(147, '234234', 'aaaaaa', '2020-04-07', 'masculino', '0', 'dfgdg', 'VH02836228-2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_solicitante`
--

CREATE TABLE `t_solicitante` (
  `id` int(11) NOT NULL,
  `dni` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `apenom` varchar(200) COLLATE utf8mb4_spanish_ci NOT NULL,
  `fecha_nacimiento` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `edad` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `sexo` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `celular` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `correo` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `direccion_origen` varchar(200) COLLATE utf8mb4_spanish_ci NOT NULL,
  `departamento_origen` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `provincia_origen` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `distrito_origen` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `contacto_covid` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `sintomas` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `dias_sintomas` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `no_vulnerable` varchar(1) COLLATE utf8mb4_spanish_ci NOT NULL,
  `enfermedad_cronica` varchar(1) COLLATE utf8mb4_spanish_ci NOT NULL,
  `nombre_enfermedad` varchar(200) COLLATE utf8mb4_spanish_ci NOT NULL,
  `gestante` varchar(1) COLLATE utf8mb4_spanish_ci NOT NULL,
  `padre_hijos` varchar(1) COLLATE utf8mb4_spanish_ci NOT NULL,
  `menor_edad` varchar(1) COLLATE utf8mb4_spanish_ci NOT NULL,
  `financia_viaje` varchar(1) COLLATE utf8mb4_spanish_ci NOT NULL,
  `direccion_destino` varchar(200) COLLATE utf8mb4_spanish_ci NOT NULL,
  `distrito_destino` varchar(200) COLLATE utf8mb4_spanish_ci NOT NULL,
  `acepta_dj` varchar(1) COLLATE utf8mb4_spanish_ci NOT NULL,
  `acepta_tdatos` varchar(1) COLLATE utf8mb4_spanish_ci NOT NULL,
  `codigo_solicitud` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `t_acompañante`
--
ALTER TABLE `t_acompañante`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `t_solicitante`
--
ALTER TABLE `t_solicitante`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `t_acompañante`
--
ALTER TABLE `t_acompañante`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=151;

--
-- AUTO_INCREMENT de la tabla `t_solicitante`
--
ALTER TABLE `t_solicitante`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
