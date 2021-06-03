-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 14-03-2021 a las 21:36:45
-- Versión del servidor: 5.6.49-cll-lve
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
-- Base de datos: `dba_ferreteria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_producto`
--

CREATE TABLE `tbl_producto` (
  `db_id` int(11) NOT NULL,
  `db_nombre` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `db_precio` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `db_imagen` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `db_fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tbl_producto`
--

INSERT INTO `tbl_producto` (`db_id`, `db_nombre`, `db_precio`, `db_imagen`, `db_fecha`) VALUES
(1, 'Perfil Aluminio 2mt', '7.00', '601048.jpg', '2021-02-25 21:39:50'),
(2, 'Tubo Agua Paco', '3.50', '432223.jpg', '2021-02-25 21:43:44'),
(3, 'Codo PVC 1/2\"x 90°', '1.00 ', '605268.jpg', '2021-02-25 21:46:54'),
(4, 'UNION UNIVERSAL PVC 3/4\"', '8.00', '759895.jpg', '2021-02-25 21:50:58'),
(5, 'Union PVC', '2.00', '21243.webp', '2021-02-25 21:53:22'),
(6, 'Niveladores', '', '607693.jpg', '2021-02-26 23:55:55'),
(7, 'Perfil mate 9.5..... 2mt.', 'S/. 7.00', '623843.jpg', '2021-02-26 23:59:09'),
(8, 'Perfil brillo 9.5..... 2mt.', 'S/. 7.50', '308585.jpg', '2021-02-27 00:00:27'),
(9, 'Perfil mate 9.5.....2.40mt.', 'S/. 9.00', '313662.jpg', '2021-02-27 00:03:49');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_producto`
--
ALTER TABLE `tbl_producto`
  ADD PRIMARY KEY (`db_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_producto`
--
ALTER TABLE `tbl_producto`
  MODIFY `db_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
