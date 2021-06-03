-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-03-2021 a las 08:05:17
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
  `db_fecha` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tbl_producto`
--

INSERT INTO `tbl_producto` (`db_id`, `db_nombre`, `db_precio`, `db_imagen`, `db_fecha`) VALUES
(3, 'Cinta Adhesiva', '5.00', '591737.jpg', '2021-02-27 07:05:09'),
(4, 'Tubo T', '3.50', '187555.webp', '2021-02-27 07:05:58'),
(5, 'Clavo', '3.00', '987289.jpg', '2021-03-02 05:50:59'),
(6, 'Pegamento', '14.60', '352172.webp', '2021-03-02 05:51:14'),
(7, 'Tubos de Luz', '7.00', '645322.jpg', '2021-03-02 05:51:31'),
(8, 'Tubo Paco', '13.00', '733599.jpg', '2021-03-06 23:04:30'),
(9, 'Conectores', '8.00', '249742.jpg', '2021-03-06 23:04:48'),
(10, 'Tubo T', '4.00', '279418.webp', '2021-03-06 23:37:20'),
(11, 'Amoladora', '86.00', '740458.jpg', '2021-03-07 08:38:41'),
(12, 'Taladro Portatil', '98.00', '853883.webp', '2021-03-07 08:39:02'),
(13, 'Taladro', '95.00', '940653.jpg', '2021-03-07 08:39:52'),
(14, 'Martillo', '15.00', '968823.webp', '2021-03-09 08:03:12'),
(15, ' Fragua Celima', '5.00', '357985.jpg', '2021-03-10 01:30:32'),
(16, ' Fragua Chema', '7.00', '192903.jpg', '2021-03-10 01:32:20'),
(17, ' Fragua Trebol', '4.00', '578935.jpg', '2021-03-10 01:33:32'),
(18, 'Pegamento Celima', '10.00', '383656.jpg', '2021-03-10 01:35:16'),
(19, 'Pegamento Chema', '12.00', '310719.jpg', '2021-03-10 01:36:28'),
(20, 'Pegamento Trebol', '28.00', '575093.jpg', '2021-03-10 01:37:56'),
(21, 'Perfil de Aluminio Mate', '7.00', '253617.jpg', '2021-03-10 01:40:11'),
(22, 'Perfil de Aluminio Brillante', '7.00', '192810.jpg', '2021-03-10 01:41:03'),
(23, 'Perfil de Aluminio Mate L', '12.00', '265503.jpg', '2021-03-10 01:56:50'),
(24, 'Perfil de Plastico', '2.50', '985876.jpg', '2021-03-10 01:59:00'),
(25, 'Perfil de Plastico', '2.50', '685345.jpg', '2021-03-10 01:59:33'),
(26, 'Perfil de Plastico', '2.50', '963695.jpg', '2021-03-10 01:59:53'),
(27, 'Perfil de Plastico', '2.50', '663842.jpg', '2021-03-10 02:00:12'),
(28, 'Perfil de Plastico', '2.50', '190818.jpg', '2021-03-10 02:01:10'),
(29, 'Perfil de Plastico', '2.50', '734798.jpg', '2021-03-10 02:01:34'),
(30, 'Cantonera ', '12.00', '121674.jpg', '2021-03-10 02:04:34'),
(31, 'Cantoneras', '12.00', '687350.jpg', '2021-03-10 02:05:10'),
(32, 'Cantoneras', '12.00', '429629.jpg', '2021-03-10 02:05:34'),
(33, 'Nivelador', '25.00', '878948.jpg', '2021-03-10 02:08:02'),
(34, 'Niveladore', '15.00', '334349.jpg', '2021-03-10 02:08:33'),
(35, 'Tubo de Agua (Nicol)', '17.00', '973462.jpg', '2021-03-10 02:11:06'),
(36, 'Tubo de Agua (Nicol)	', '11.00', '610191.jpg', '2021-03-10 02:11:59'),
(37, 'Tubo de Agua (Nicol)	', '6.00', '358536.jpg', '2021-03-10 02:13:04'),
(38, 'Tubo de Agua (Nicol)	', '9.00', '710004.jpg', '2021-03-10 02:13:54'),
(39, 'Tubo de Agua (Nicol)	', '2.00', '462759.jpg', '2021-03-10 02:15:37'),
(40, 'Tubo de Agua (Nicol)	', '2.00', '924563.jpg', '2021-03-10 02:16:29'),
(41, 'Tubo de Desague (Nicol)	', '13.00', '281393.jpg', '2021-03-10 02:17:59'),
(42, 'Tubo de Desague (Nicol)	', '180.00', '824045.jpg', '2021-03-10 02:18:47'),
(43, 'Tubo de Desague (Nicol)	', '26.00', '371213.jpg', '2021-03-10 02:19:15'),
(44, 'Tubo de Desague (Nico)', '21.00', '340356.jpg', '2021-03-10 02:20:17'),
(45, 'Tubo de Desague (Nicol) pesado', '54.00', '197447.jpg', '2021-03-10 02:21:12'),
(46, 'Tubo de Desague (Nicoll) Codo', '17.50', '789375.jpg', '2021-03-10 02:22:18'),
(47, 'Tubo de Desague (Nicoll) Codo	', '8.00', '357498.jpg', '2021-03-10 02:22:55'),
(48, 'Tubo de Agua (Nicol)	', '8.00', '108541.jpg', '2021-03-10 02:24:48'),
(49, 'Tubo de Agua (Nicol)', '8.00', '91969.jpg', '2021-03-10 02:25:03'),
(50, 'Tubo de Desague (Nicoll)', '10.00', '205950.jpg', '2021-03-10 02:25:47'),
(51, 'Tubo de Luz', '35.00', '940490.jpg', '2021-03-10 02:28:40'),
(52, 'Tubo de Luz', '5.00', '774775.jpg', '2021-03-10 02:29:07'),
(53, 'Tubo de Luz', '54.00', '345551.jpg', '2021-03-10 02:30:04'),
(54, 'Tubo de Luz', '3.50', '406257.jpg', '2021-03-10 02:30:45'),
(55, 'Caño Lavatorio', '150.00', '747183.jpg', '2021-03-10 02:34:08'),
(56, 'Caño Lavatorio', '130.00', '958587.jpg', '2021-03-10 02:34:44'),
(57, 'Caño Lavatorio', '200.00', '394931.jpg', '2021-03-10 02:35:27'),
(58, 'Caño Lavatorio', '110.00', '650358.jpg', '2021-03-10 02:36:19'),
(59, 'Caño Lavatorio', '118.00', '712572.jpg', '2021-03-10 02:36:52'),
(60, 'Caño de Jardin', '15.00', '848761.jpg', '2021-03-10 02:39:37'),
(61, 'Caño de Jardin', '43.00', '323584.jpg', '2021-03-10 02:40:05'),
(62, 'Ocre Bayer', '7.00', '885032.jpg', '2021-03-10 02:42:15'),
(63, 'Ocre Bayer', '7.00', '530828.jpg', '2021-03-10 02:42:26'),
(64, 'Ocre Bayer', '5.00', '536233.jpg', '2021-03-10 02:42:54'),
(65, 'Tapas de Desague Fierro', '72.00', '472145.jpg', '2021-03-10 02:45:29'),
(66, 'Tapas de Desague Fierro', '32.00', '824519.jpg', '2021-03-10 02:46:09'),
(67, 'Tapas de Desague Fierro', '62.00', '966327.jpg', '2021-03-10 02:46:49'),
(68, 'Tapas de Desague ', '55.00', '939233.jpg', '2021-03-10 02:47:22'),
(69, 'Tapas de Desague Aluminio', '20.00', '21320.jpg', '2021-03-10 02:48:14'),
(70, 'Tapas de Desague', '34.00', '862118.jpg', '2021-03-10 02:48:50'),
(71, 'Medidor de Agua', '54.00', '401490.jpg', '2021-03-10 02:51:53'),
(72, 'One Piece', '90.00', '393963.jpg', '2021-03-10 02:56:32'),
(73, 'One Piece', '98.00', '439874.jpg', '2021-03-10 02:56:54'),
(74, 'One Piece', '99.00', '646183.jpg', '2021-03-10 02:57:40'),
(75, 'One Piece', '20.00', '91480.jpg', '2021-03-10 02:58:23'),
(76, 'One Piece', '18,00', '58634.jpg', '2021-03-10 02:58:43'),
(77, 'One Piece', '16.00', '626714.jpg', '2021-03-10 02:59:28'),
(78, 'One Piece', '100.00', '746368.jpg', '2021-03-10 03:00:40'),
(79, 'One Piece', '96.00', '520510.jpg', '2021-03-10 03:01:10'),
(80, 'One Piece', '26.00', '985221.jpg', '2021-03-10 03:02:04'),
(81, 'One Piece Tapa', '16.00', '602059.jpg', '2021-03-10 03:02:50'),
(82, 'One Piece Tapa', '19.00', '258283.jpg', '2021-03-10 03:03:15'),
(83, 'One Piece Caja', '44.00', '286794.jpg', '2021-03-10 03:04:38'),
(84, 'Caja de Luz', '26.00', '829072.jpg', '2021-03-10 03:05:25'),
(85, 'Caja de Luz	', '24.00', '997571.jpg', '2021-03-10 03:05:53'),
(86, 'Caja de Luz	', '28.00', '780177.jpg', '2021-03-10 03:06:23'),
(87, 'Clavo ', '2.60', '536309.jpg', '2021-03-10 03:16:38'),
(88, 'Clavo', '4.50', '289702.jpg', '2021-03-10 03:17:19'),
(89, 'Clavo', '0.80', '771067.jpg', '2021-03-10 03:17:48'),
(90, 'Clavo', '6.50', '38684.jpg', '2021-03-10 03:18:35'),
(91, 'Clavo', '4.50', '357112.jpg', '2021-03-10 03:18:51'),
(92, 'Clavo', '3.50', '77142.jpg', '2021-03-10 03:19:49'),
(93, 'Clavo', '0.90', '411287.jpg', '2021-03-10 03:20:13'),
(94, 'Clavo', '4.70', '496028.jpg', '2021-03-10 03:20:45'),
(95, 'Clavo Tarugo', '8.30', '112077.jpg', '2021-03-10 03:21:47'),
(96, 'Clavo Calaminero', '6.30', '386813.jpg', '2021-03-10 03:22:18'),
(97, 'Clavo Calaminero	', '5.70', '615924.jpg', '2021-03-10 03:23:01'),
(98, 'Clavo Plastico', '3.40', '635506.jpg', '2021-03-10 03:23:42'),
(99, 'Clavo', '8.00', '123101.jpg', '2021-03-10 03:24:06'),
(100, 'Clavo Acanalado ', '1.98', '980084.jpg', '2021-03-10 03:25:26'),
(101, 'Clavo', '130.00', '482377.jpg', '2021-03-10 03:25:59'),
(102, 'Clavo Calaminero', '9.00', '753999.jpg', '2021-03-10 03:26:59'),
(103, 'Tornillo de Madera', '5.60', '184450.jpg', '2021-03-10 03:28:15'),
(104, 'Tornillo de Madera	', '3.20', '919743.jpg', '2021-03-10 03:28:49'),
(105, 'Tornillo de Madera	', '2.00', '259301.jpg', '2021-03-10 03:29:34'),
(106, 'Tornillo de Madera	', '6.70', '615475.jpg', '2021-03-10 03:30:14'),
(107, 'Tornillo de Madera	', '4.10', '29803.jpg', '2021-03-10 03:31:03'),
(108, 'Tornillo de Madera	', '1.30', '321885.jpg', '2021-03-10 03:31:47'),
(109, 'Tornillo', '3.90', '509311.jpg', '2021-03-10 03:32:26'),
(110, 'Tornillo de Madera	', '32.00', '250559.jpg', '2021-03-10 03:33:11'),
(111, 'Tornillo', '39.00', '475338.jpg', '2021-03-10 03:33:56'),
(112, 'Tornillo Anclaje', '3.50', '351122.jpg', '2021-03-10 03:34:28'),
(113, 'Tornillo', '4.30', '842306.jpg', '2021-03-10 03:35:13'),
(114, 'Tarugo', '0.90', '966845.jpg', '2021-03-10 03:36:02'),
(115, 'Tarugo Madera', '0.90', '558400.jpg', '2021-03-10 03:36:37'),
(116, 'Tarugo Luz', '0.60', '476083.jpg', '2021-03-10 03:37:22'),
(117, 'Tarugo Luz	', '9.00', '803614.jpg', '2021-03-10 03:37:56'),
(118, 'Tarugo Luz', '2.50', '821304.jpg', '2021-03-10 03:40:37'),
(119, 'Tornillo de Madera	', '6.70', '283740.jpg', '2021-03-10 03:41:45'),
(120, 'Kick Para Baño', '60-00', '715331.jpg', '2021-03-10 03:42:29'),
(121, 'Tarugo Luz	', '2.30', '231791.jpg', '2021-03-10 03:43:20'),
(122, 'Tarugo Luz	', '2.50', '446008.jpg', '2021-03-10 03:43:46'),
(123, 'Tarugo Luz', '2.30', '470114.jpg', '2021-03-10 03:44:51'),
(124, 'Tarugo Madera	', '0.80', '895837.jpg', '2021-03-10 03:45:51'),
(125, 'Tarugo Madera', '1.00', '266459.jpg', '2021-03-10 03:46:36'),
(126, 'Tuerca Mariposa', '4.30', '359826.jpg', '2021-03-10 03:47:24'),
(127, 'Tuerca Mariposa	', '3.50', '716249.jpg', '2021-03-10 03:48:01'),
(128, 'Tuerca', '0.40', '363888.jpg', '2021-03-10 03:48:35'),
(129, 'Tuerca	', '2.00', '695580.jpg', '2021-03-10 03:49:20'),
(130, 'Tuerca	', '2.20', '71520.jpg', '2021-03-10 03:49:42'),
(131, 'Tuerca Hexagonal Caja', '75.30', '109130.jpg', '2021-03-10 03:50:30'),
(132, 'Tuerca', '0.10', '951348.jpg', '2021-03-10 03:51:05'),
(133, 'Tuerca ', '0.20', '467946.jpg', '2021-03-10 03:52:19'),
(134, 'Cinta', '7.30', '55469.jpg', '2021-03-10 03:55:35'),
(135, 'Cinta Adhesiva', '22.00', '346772.jpg', '2021-03-10 03:56:07'),
(136, 'Cinta Adhesiva	', '3.30', '674800.jpg', '2021-03-10 03:57:19'),
(137, 'Cinta Adhesiva', '2.50', '433739.jpg', '2021-03-10 03:58:13'),
(138, 'Cinta Adhesiva Doble', '16.00', '891460.jpg', '2021-03-10 03:58:58'),
(139, 'Cinta Adhesiva	', '3.20', '382870.jpg', '2021-03-10 03:59:38'),
(140, 'Cinta ', '6.00', '680857.jpg', '2021-03-10 04:01:21'),
(141, 'Tubo de Agua (Nicol) Union', '2.00', '522771.webp', '2021-03-10 17:04:29'),
(142, 'Tubo de Agua (Nicol)Codo PVC 1/2\"x 90°', '1.00', '745357.jpg', '2021-03-10 17:05:13'),
(143, 'Tubo de Agua (Paco)	', '3.50', '258856.jpg', '2021-03-10 17:05:42'),
(144, 'UNION UNIVERSAL PVC 3/4\"', '8.00', '214797.jpg', '2021-03-10 17:06:08'),
(145, 'Perfil Aluminio 2mt', '7.00', '691302.jpg', '2021-03-10 17:06:43');

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
  MODIFY `db_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=146;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
