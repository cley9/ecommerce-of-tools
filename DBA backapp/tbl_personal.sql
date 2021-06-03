-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-03-2021 a las 23:43:24
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `itic`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_personal`
--

CREATE TABLE `tbl_personal` (
  `id` int(11) NOT NULL,
  `nombres` varchar(50) NOT NULL,
  `genero` varchar(10) NOT NULL,
  `area` varchar(100) NOT NULL,
  `edad` int(11) NOT NULL,
  `direccion` text NOT NULL,
  `estado` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_personal`
--

INSERT INTO `tbl_personal` (`id`, `nombres`, `genero`, `area`, `edad`, `direccion`, `estado`) VALUES
(1, 'Juan Carrillo', 'Femenino', 'Arquitecto', 34, 'Av. Molina - Santiago', 'Chile'),
(2, 'Luis Fontis', 'Masculino', 'Sistemas', 26, 'Av. Copiapo - Buenos Aires', 'Argentina'),
(3, 'Maria Cotrina', 'Femenino', 'Secretaria', 23, 'Av. Jhonson - Quito', 'Ecuador'),
(4, 'Jenifer Carrillo', 'Femenino', 'Economia', 27, 'av. La Molina - Lima', 'Peru'),
(5, 'Milagros Ferrer', 'Femenino', 'Contable', 29, 'Los Manzanos - Bogota', 'Colombia');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_personal`
--
ALTER TABLE `tbl_personal`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_personal`
--
ALTER TABLE `tbl_personal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
