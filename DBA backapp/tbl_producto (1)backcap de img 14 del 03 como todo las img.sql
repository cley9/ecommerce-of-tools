-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-03-2021 a las 05:40:00
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
  `db_fecha` timestamp NOT NULL DEFAULT current_timestamp(),
  `db_cancelado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tbl_producto`
--

INSERT INTO `tbl_producto` (`db_id`, `db_nombre`, `db_precio`, `db_imagen`, `db_fecha`, `db_cancelado`) VALUES
(3, 'Cinta Adhesiva', '5.00', '591737.jpg', '2021-02-27 07:05:09', 0),
(4, 'Tubo T', '3.50', '187555.webp', '2021-02-27 07:05:58', 0),
(5, 'Clavo', '3.00', '987289.jpg', '2021-03-02 05:50:59', 0),
(6, 'Pegamento', '14.60', '352172.webp', '2021-03-02 05:51:14', 0),
(7, 'Tubos de Luz', '7.00', '645322.jpg', '2021-03-02 05:51:31', 0),
(8, 'Tubo Paco', '13.00', '733599.jpg', '2021-03-06 23:04:30', 0),
(9, 'Conectores', '8.00', '249742.jpg', '2021-03-06 23:04:48', 0),
(10, 'Tubo T', '4.00', '279418.webp', '2021-03-06 23:37:20', 0),
(11, 'Amoladora', '86.00', '740458.jpg', '2021-03-07 08:38:41', 0),
(12, 'Taladro Portatil', '98.00', '853883.webp', '2021-03-07 08:39:02', 0),
(13, 'Taladro', '95.00', '940653.jpg', '2021-03-07 08:39:52', 0),
(14, 'Martillo', '15.00', '968823.webp', '2021-03-09 08:03:12', 0),
(15, ' Fragua Celima', '5.00', '357985.jpg', '2021-03-10 01:30:32', 0),
(16, ' Fragua Chema', '7.00', '192903.jpg', '2021-03-10 01:32:20', 0),
(17, ' Fragua Trebol', '4.00', '578935.jpg', '2021-03-10 01:33:32', 0),
(18, 'Pegamento Celima', '10.00', '383656.jpg', '2021-03-10 01:35:16', 0),
(19, 'Pegamento Chema', '12.00', '310719.jpg', '2021-03-10 01:36:28', 0),
(20, 'Pegamento Trebol', '28.00', '575093.jpg', '2021-03-10 01:37:56', 0),
(21, 'Perfil de Aluminio Mate', '7.00', '253617.jpg', '2021-03-10 01:40:11', 0),
(22, 'Perfil de Aluminio Brillante', '7.00', '192810.jpg', '2021-03-10 01:41:03', 0),
(23, 'Perfil de Aluminio Mate L', '12.00', '265503.jpg', '2021-03-10 01:56:50', 0),
(24, 'Perfil de Plastico', '2.50', '985876.jpg', '2021-03-10 01:59:00', 0),
(25, 'Perfil de Plastico', '2.50', '685345.jpg', '2021-03-10 01:59:33', 0),
(26, 'Perfil de Plastico', '2.50', '963695.jpg', '2021-03-10 01:59:53', 0),
(27, 'Perfil de Plastico', '2.50', '663842.jpg', '2021-03-10 02:00:12', 0),
(28, 'Perfil de Plastico', '2.50', '190818.jpg', '2021-03-10 02:01:10', 0),
(29, 'Perfil de Plastico', '2.50', '734798.jpg', '2021-03-10 02:01:34', 0),
(30, 'Cantonera ', '12.00', '121674.jpg', '2021-03-10 02:04:34', 0),
(31, 'Cantoneras', '12.00', '687350.jpg', '2021-03-10 02:05:10', 0),
(32, 'Cantoneras', '12.00', '429629.jpg', '2021-03-10 02:05:34', 0),
(33, 'Nivelador', '25.00', '878948.jpg', '2021-03-10 02:08:02', 0),
(34, 'Niveladore', '15.00', '334349.jpg', '2021-03-10 02:08:33', 0),
(35, 'Tubo de Agua (Nicol)', '17.00', '973462.jpg', '2021-03-10 02:11:06', 0),
(36, 'Tubo de Agua (Nicol)	', '11.00', '610191.jpg', '2021-03-10 02:11:59', 0),
(37, 'Tubo de Agua (Nicol)	', '6.00', '358536.jpg', '2021-03-10 02:13:04', 0),
(38, 'Tubo de Agua (Nicol)	', '9.00', '710004.jpg', '2021-03-10 02:13:54', 0),
(39, 'Tubo de Agua (Nicol)	', '2.00', '462759.jpg', '2021-03-10 02:15:37', 0),
(40, 'Tubo de Agua (Nicol)	', '2.00', '924563.jpg', '2021-03-10 02:16:29', 0),
(41, 'Tubo de Desague (Nicol)	', '13.00', '281393.jpg', '2021-03-10 02:17:59', 0),
(42, 'Tubo de Desague (Nicol)	', '180.00', '824045.jpg', '2021-03-10 02:18:47', 0),
(43, 'Tubo de Desague (Nicol)	', '26.00', '371213.jpg', '2021-03-10 02:19:15', 0),
(44, 'Tubo de Desague (Nico)', '21.00', '340356.jpg', '2021-03-10 02:20:17', 0),
(45, 'Tubo de Desague (Nicol) pesado', '54.00', '197447.jpg', '2021-03-10 02:21:12', 0),
(46, 'Tubo de Desague (Nicoll) Codo', '17.50', '789375.jpg', '2021-03-10 02:22:18', 0),
(47, 'Tubo de Desague (Nicoll) Codo	', '8.00', '357498.jpg', '2021-03-10 02:22:55', 0),
(48, 'Tubo de Agua (Nicol)	', '8.00', '108541.jpg', '2021-03-10 02:24:48', 0),
(49, 'Tubo de Agua (Nicol)', '8.00', '91969.jpg', '2021-03-10 02:25:03', 0),
(50, 'Tubo de Desague (Nicoll)', '10.00', '205950.jpg', '2021-03-10 02:25:47', 0),
(51, 'Tubo de Luz', '35.00', '940490.jpg', '2021-03-10 02:28:40', 0),
(52, 'Tubo de Luz', '5.00', '774775.jpg', '2021-03-10 02:29:07', 0),
(53, 'Tubo de Luz', '54.00', '345551.jpg', '2021-03-10 02:30:04', 0),
(54, 'Tubo de Luz', '3.50', '406257.jpg', '2021-03-10 02:30:45', 0),
(55, 'Caño Lavatorio', '150.00', '747183.jpg', '2021-03-10 02:34:08', 0),
(56, 'Caño Lavatorio', '130.00', '958587.jpg', '2021-03-10 02:34:44', 0),
(57, 'Caño Lavatorio', '200.00', '394931.jpg', '2021-03-10 02:35:27', 0),
(58, 'Caño Lavatorio', '110.00', '650358.jpg', '2021-03-10 02:36:19', 0),
(59, 'Caño Lavatorio', '118.00', '712572.jpg', '2021-03-10 02:36:52', 0),
(60, 'Caño de Jardin', '15.00', '848761.jpg', '2021-03-10 02:39:37', 0),
(61, 'Caño de Jardin', '43.00', '323584.jpg', '2021-03-10 02:40:05', 0),
(62, 'Ocre Bayer', '7.00', '885032.jpg', '2021-03-10 02:42:15', 0),
(63, 'Ocre Bayer', '7.00', '530828.jpg', '2021-03-10 02:42:26', 0),
(64, 'Ocre Bayer', '5.00', '536233.jpg', '2021-03-10 02:42:54', 0),
(65, 'Tapas de Desague Fierro', '72.00', '472145.jpg', '2021-03-10 02:45:29', 0),
(66, 'Tapas de Desague Fierro', '32.00', '824519.jpg', '2021-03-10 02:46:09', 0),
(67, 'Tapas de Desague Fierro', '62.00', '966327.jpg', '2021-03-10 02:46:49', 0),
(68, 'Tapas de Desague ', '55.00', '939233.jpg', '2021-03-10 02:47:22', 0),
(69, 'Tapas de Desague Aluminio', '20.00', '21320.jpg', '2021-03-10 02:48:14', 0),
(70, 'Tapas de Desague', '34.00', '862118.jpg', '2021-03-10 02:48:50', 0),
(71, 'Medidor de Agua', '54.00', '401490.jpg', '2021-03-10 02:51:53', 0),
(72, 'One Piece', '90.00', '393963.jpg', '2021-03-10 02:56:32', 0),
(73, 'One Piece', '98.00', '439874.jpg', '2021-03-10 02:56:54', 0),
(74, 'One Piece', '99.00', '646183.jpg', '2021-03-10 02:57:40', 0),
(75, 'One Piece', '20.00', '91480.jpg', '2021-03-10 02:58:23', 0),
(76, 'One Piece', '18,00', '58634.jpg', '2021-03-10 02:58:43', 0),
(77, 'One Piece', '16.00', '626714.jpg', '2021-03-10 02:59:28', 0),
(78, 'One Piece', '100.00', '746368.jpg', '2021-03-10 03:00:40', 0),
(79, 'One Piece', '96.00', '520510.jpg', '2021-03-10 03:01:10', 0),
(80, 'One Piece', '26.00', '985221.jpg', '2021-03-10 03:02:04', 0),
(81, 'One Piece Tapa', '16.00', '602059.jpg', '2021-03-10 03:02:50', 0),
(82, 'One Piece Tapa', '19.00', '258283.jpg', '2021-03-10 03:03:15', 0),
(83, 'One Piece Caja', '44.00', '286794.jpg', '2021-03-10 03:04:38', 0),
(84, 'Caja de Luz', '26.00', '829072.jpg', '2021-03-10 03:05:25', 0),
(85, 'Caja de Luz	', '24.00', '997571.jpg', '2021-03-10 03:05:53', 0),
(86, 'Caja de Luz	', '28.00', '780177.jpg', '2021-03-10 03:06:23', 0),
(87, 'Clavo ', '2.60', '536309.jpg', '2021-03-10 03:16:38', 0),
(88, 'Clavo', '4.50', '289702.jpg', '2021-03-10 03:17:19', 0),
(89, 'Clavo', '0.80', '771067.jpg', '2021-03-10 03:17:48', 0),
(90, 'Clavo', '6.50', '38684.jpg', '2021-03-10 03:18:35', 0),
(91, 'Clavo', '4.50', '357112.jpg', '2021-03-10 03:18:51', 0),
(92, 'Clavo', '3.50', '77142.jpg', '2021-03-10 03:19:49', 0),
(93, 'Clavo', '0.90', '411287.jpg', '2021-03-10 03:20:13', 0),
(94, 'Clavo', '4.70', '496028.jpg', '2021-03-10 03:20:45', 0),
(95, 'Clavo Tarugo', '8.30', '112077.jpg', '2021-03-10 03:21:47', 0),
(96, 'Clavo Calaminero', '6.30', '386813.jpg', '2021-03-10 03:22:18', 0),
(97, 'Clavo Calaminero	', '5.70', '615924.jpg', '2021-03-10 03:23:01', 0),
(98, 'Clavo Plastico', '3.40', '635506.jpg', '2021-03-10 03:23:42', 0),
(99, 'Clavo', '8.00', '123101.jpg', '2021-03-10 03:24:06', 0),
(100, 'Clavo Acanalado ', '1.98', '980084.jpg', '2021-03-10 03:25:26', 0),
(101, 'Clavo', '130.00', '482377.jpg', '2021-03-10 03:25:59', 0),
(102, 'Clavo Calaminero', '9.00', '753999.jpg', '2021-03-10 03:26:59', 0),
(103, 'Tornillo de Madera', '5.60', '184450.jpg', '2021-03-10 03:28:15', 0),
(104, 'Tornillo de Madera	', '3.20', '919743.jpg', '2021-03-10 03:28:49', 0),
(105, 'Tornillo de Madera	', '2.00', '259301.jpg', '2021-03-10 03:29:34', 0),
(106, 'Tornillo de Madera	', '6.70', '615475.jpg', '2021-03-10 03:30:14', 0),
(107, 'Tornillo de Madera	', '4.10', '29803.jpg', '2021-03-10 03:31:03', 0),
(108, 'Tornillo de Madera	', '1.30', '321885.jpg', '2021-03-10 03:31:47', 0),
(109, 'Tornillo', '3.90', '509311.jpg', '2021-03-10 03:32:26', 0),
(110, 'Tornillo de Madera	', '32.00', '250559.jpg', '2021-03-10 03:33:11', 0),
(111, 'Tornillo', '39.00', '475338.jpg', '2021-03-10 03:33:56', 0),
(112, 'Tornillo Anclaje', '3.50', '351122.jpg', '2021-03-10 03:34:28', 0),
(113, 'Tornillo', '4.30', '842306.jpg', '2021-03-10 03:35:13', 0),
(114, 'Tarugo', '0.90', '966845.jpg', '2021-03-10 03:36:02', 0),
(115, 'Tarugo Madera', '0.90', '558400.jpg', '2021-03-10 03:36:37', 0),
(116, 'Tarugo Luz', '0.60', '476083.jpg', '2021-03-10 03:37:22', 0),
(117, 'Tarugo Luz	', '9.00', '803614.jpg', '2021-03-10 03:37:56', 0),
(118, 'Tarugo Luz', '2.50', '821304.jpg', '2021-03-10 03:40:37', 0),
(119, 'Tornillo de Madera	', '6.70', '283740.jpg', '2021-03-10 03:41:45', 0),
(120, 'Kick Para Baño', '60-00', '715331.jpg', '2021-03-10 03:42:29', 0),
(121, 'Tarugo Luz	', '2.30', '231791.jpg', '2021-03-10 03:43:20', 0),
(122, 'Tarugo Luz	', '2.50', '446008.jpg', '2021-03-10 03:43:46', 0),
(123, 'Tarugo Luz', '2.30', '470114.jpg', '2021-03-10 03:44:51', 0),
(124, 'Tarugo Madera	', '0.80', '895837.jpg', '2021-03-10 03:45:51', 0),
(125, 'Tarugo Madera', '1.00', '266459.jpg', '2021-03-10 03:46:36', 0),
(126, 'Tuerca Mariposa', '4.30', '359826.jpg', '2021-03-10 03:47:24', 0),
(127, 'Tuerca Mariposa	', '3.50', '716249.jpg', '2021-03-10 03:48:01', 0),
(128, 'Tuerca', '0.40', '363888.jpg', '2021-03-10 03:48:35', 0),
(129, 'Tuerca	', '2.00', '695580.jpg', '2021-03-10 03:49:20', 0),
(130, 'Tuerca	', '2.20', '71520.jpg', '2021-03-10 03:49:42', 0),
(131, 'Tuerca Hexagonal Caja', '75.30', '109130.jpg', '2021-03-10 03:50:30', 0),
(132, 'Tuerca', '0.10', '951348.jpg', '2021-03-10 03:51:05', 0),
(133, 'Tuerca ', '0.20', '467946.jpg', '2021-03-10 03:52:19', 0),
(134, 'Cinta', '7.30', '55469.jpg', '2021-03-10 03:55:35', 0),
(135, 'Cinta Adhesiva', '22.00', '346772.jpg', '2021-03-10 03:56:07', 0),
(136, 'Cinta Adhesiva	', '3.30', '674800.jpg', '2021-03-10 03:57:19', 0),
(137, 'Cinta Adhesiva', '2.50', '433739.jpg', '2021-03-10 03:58:13', 0),
(138, 'Cinta Adhesiva Doble', '16.00', '891460.jpg', '2021-03-10 03:58:58', 0),
(139, 'Cinta Adhesiva	', '3.20', '382870.jpg', '2021-03-10 03:59:38', 0),
(140, 'Cinta ', '6.00', '680857.jpg', '2021-03-10 04:01:21', 0),
(141, 'Tubo de Agua (Nicol) Union', '2.00', '522771.webp', '2021-03-10 17:04:29', 0),
(142, 'Tubo de Agua (Nicol)Codo PVC 1/2\"x 90°', '1.00', '745357.jpg', '2021-03-10 17:05:13', 0),
(143, 'Tubo de Agua (Paco)	', '3.50', '258856.jpg', '2021-03-10 17:05:42', 0),
(144, 'UNION UNIVERSAL PVC 3/4\"', '8.00', '214797.jpg', '2021-03-10 17:06:08', 0),
(145, 'Perfil Aluminio 2mt', '7.00', '691302.jpg', '2021-03-10 17:06:43', 0);

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
