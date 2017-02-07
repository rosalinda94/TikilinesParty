-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 06-02-2017 a las 01:49:30
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `sistema`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auditoria`
--

CREATE TABLE IF NOT EXISTS `auditoria` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(20) NOT NULL,
  `usuario_CodigoUsuario` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `operacion` varchar(20) NOT NULL,
  PRIMARY KEY (`id`,`usuario_CodigoUsuario`),
  KEY `fk_auditoria_usuario_idx` (`usuario_CodigoUsuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auditory`
--

CREATE TABLE IF NOT EXISTS `auditory` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(30) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `operacion` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=332 ;

--
-- Volcado de datos para la tabla `auditory`
--

INSERT INTO `auditory` (`id`, `usuario`, `fecha`, `hora`, `operacion`) VALUES
(1, 'rosalinda', '2017-02-02', '03:48:28', 'IngresoAlSistema'),
(2, 'Rosalinda', '2017-02-02', '03:49:19', 'registroProducto'),
(3, 'Rosalinda', '2017-02-02', '03:49:19', 'registroProducto'),
(4, 'Rosalinda', '2017-02-02', '03:50:39', 'registroProducto'),
(5, 'Rosalinda', '2017-02-02', '03:50:40', 'registroProducto'),
(6, 'Rosalinda', '2017-02-02', '03:51:24', 'registroCliente'),
(7, 'administrador', '2017-02-02', '03:53:31', 'CerroSesion'),
(8, 'administrador', '2017-02-02', '03:54:41', 'CerroSesion'),
(9, 'administrador', '2017-02-02', '03:54:44', 'CerroSesion'),
(10, 'Admin', '2017-02-02', '03:54:55', 'IngresoAlSistema'),
(11, 'Cliente', '2017-02-02', '01:31:29', 'CerroSesion'),
(12, 'Admin', '2017-02-02', '01:35:42', 'IngresoAlSistema'),
(13, '21143356', '2017-02-02', '01:39:20', 'registroContratoTransferencia'),
(14, 'administrador', '2017-02-02', '01:40:39', 'CerroSesion'),
(15, 'rosalinda', '2017-02-02', '01:40:48', 'IngresoAlSistema'),
(16, 'rosalinda', '2017-02-02', '01:40:55', 'IngresoAlSistema'),
(17, 'Cliente', '2017-02-02', '01:41:28', 'CerroSesion'),
(18, 'Admin', '2017-02-02', '01:41:43', 'IngresoAlSistema'),
(19, 'administrador', '2017-02-02', '01:42:31', 'CerroSesion'),
(20, 'rosalinda', '2017-02-02', '02:36:05', 'IngresoAlSistema'),
(21, 'administrador', '2017-02-02', '02:37:11', 'CerroSesion'),
(22, 'Admin', '2017-02-02', '02:37:19', 'IngresoAlSistema'),
(23, 'administrador', '2017-02-02', '02:38:00', 'CerroSesion'),
(24, 'Admin', '2017-02-02', '02:38:14', 'IngresoAlSistema'),
(25, 'Cliente', '2017-02-02', '02:44:27', 'CerroSesion'),
(26, 'Cliente', '2017-02-02', '02:48:29', 'CerroSesion'),
(27, '', '2017-02-02', '03:02:48', 'registroContratoDeposito'),
(28, 'usuario', '2017-02-02', '03:05:44', 'registroCliente'),
(29, 'Cliente', '2017-02-02', '03:08:46', 'CerroSesion'),
(30, 'rosalinda', '2017-02-02', '03:10:22', 'IngresoAlSistema'),
(31, 'Rosalinda', '2017-02-02', '03:17:36', 'ModificoProducto'),
(32, 'Rosalinda', '2017-02-02', '03:18:34', 'ModificoProducto'),
(33, 'Rosalinda', '2017-02-02', '03:19:20', 'ModificoProducto'),
(34, 'Rosalinda', '2017-02-02', '03:19:20', 'ModificoProducto'),
(35, 'Rosalinda', '2017-02-02', '03:19:47', 'ModificoProducto'),
(36, 'Rosalinda', '2017-02-02', '03:19:47', 'ModificoProducto'),
(37, 'administrador', '2017-02-02', '03:23:29', 'CerroSesion'),
(38, 'Admin', '2017-02-02', '03:23:48', 'IngresoAlSistema'),
(39, 'Cliente', '2017-02-04', '03:10:59', 'CerroSesion'),
(40, 'rosalinda', '2017-02-04', '03:21:15', 'IngresoAlSistema'),
(41, 'Cliente', '2017-02-04', '03:36:04', 'CerroSesion'),
(42, 'rosalinda', '2017-02-04', '03:45:30', 'IngresoAlSistema'),
(43, '12345', '2017-02-04', '03:45:33', 'IngresoAlSistema'),
(44, 'Admin', '2017-02-04', '03:45:39', 'IngresoAlSistema'),
(45, 'Admin', '2017-02-04', '03:45:45', 'IngresoAlSistema'),
(46, 'Admin', '2017-02-04', '03:45:51', 'IngresoAlSistema'),
(47, 'Cliente', '2017-02-04', '03:48:35', 'CerroSesion'),
(48, 'Cliente', '2017-02-04', '03:48:39', 'CerroSesion'),
(49, 'usuario', '2017-02-04', '06:41:31', 'registroCliente'),
(50, 'usuario', '2017-02-04', '06:46:07', 'registroCliente'),
(51, 'usuario', '2017-02-04', '06:49:59', 'registroCliente'),
(52, '21143356', '2017-02-04', '07:08:45', 'registroContratoTransferencia'),
(53, '21143356', '2017-02-04', '07:13:08', 'registroContratoTransferencia'),
(54, '21143356', '2017-02-04', '07:13:32', 'registroContratoTransferencia'),
(55, '21143356', '2017-02-04', '07:13:40', 'registroContratoTransferencia'),
(56, '', '2017-02-04', '07:14:34', 'registroContratoDeposito'),
(57, '', '2017-02-04', '07:16:51', 'registroContratoDeposito'),
(58, '', '2017-02-04', '07:17:07', 'registroContratoDeposito'),
(59, '', '2017-02-04', '07:33:59', 'IngresoAlSistema'),
(60, '', '2017-02-04', '07:34:06', 'IngresoAlSistema'),
(61, 'usuario', '2017-02-04', '07:59:12', 'registroCliente'),
(62, 'usuario', '2017-02-04', '07:59:26', 'registroCliente'),
(63, '26006360', '2017-02-04', '08:00:00', 'IngresoAlSistema'),
(64, '26006360', '2017-02-04', '08:00:08', 'IngresoAlSistema'),
(65, '26006360', '2017-02-04', '08:00:27', 'IngresoAlSistema'),
(66, '26006360', '2017-02-04', '08:00:49', 'IngresoAlSistema'),
(67, '26006360', '2017-02-04', '08:01:11', 'IngresoAlSistema'),
(68, '12345678', '2017-02-04', '08:01:26', 'IngresoAlSistema'),
(69, '26006360', '2017-02-04', '08:02:55', 'IngresoAlSistema'),
(70, '26006360', '2017-02-04', '08:03:34', 'IngresoAlSistema'),
(71, 'Cliente', '2017-02-04', '08:04:21', 'CerroSesion'),
(72, '26006360', '2017-02-04', '08:04:28', 'IngresoAlSistema'),
(73, 'Cliente', '2017-02-04', '08:04:43', 'CerroSesion'),
(74, '26006360', '2017-02-04', '08:11:59', 'IngresoAlSistema'),
(75, 'administrador', '2017-02-04', '08:46:18', 'CerroSesion'),
(76, '19282', '2017-02-04', '08:46:32', 'IngresoAlSistema'),
(77, '', '2017-02-04', '08:46:32', 'IngresoAlSistema'),
(78, '2600636', '2017-02-04', '08:47:10', 'IngresoAlSistema'),
(79, 'q', '2017-02-04', '08:47:14', 'IngresoAlSistema'),
(80, 'Admin', '2017-02-04', '08:47:44', 'IngresoAlSistema'),
(81, '', '2017-02-04', '08:47:44', 'IngresoAlSistema'),
(82, '26006360', '2017-02-04', '08:48:00', 'IngresoAlSistema'),
(83, 'administrador', '2017-02-04', '09:23:03', 'CerroSesion'),
(84, 'rosalinda', '2017-02-04', '09:23:09', 'IngresoAlSistema'),
(85, 'rosalinda', '2017-02-04', '09:23:15', 'IngresoAlSistema'),
(86, 'Rosalinda', '2017-02-04', '09:23:56', 'ModificoProducto'),
(87, 'Rosalinda', '2017-02-04', '09:24:35', 'ModificoProducto'),
(88, 'Rosalinda', '2017-02-04', '09:24:35', 'ModificoProducto'),
(89, 'Rosalinda', '2017-02-04', '09:24:39', 'ModificoProducto'),
(90, 'Rosalinda', '2017-02-04', '09:24:39', 'ModificoProducto'),
(91, 'Rosalinda', '2017-02-04', '09:24:50', 'ModificoProducto'),
(92, 'Rosalinda', '2017-02-04', '09:24:50', 'ModificoProducto'),
(93, 'administrador', '2017-02-04', '09:28:43', 'CerroSesion'),
(94, 'Admin', '2017-02-04', '09:28:49', 'IngresoAlSistema'),
(95, 'Admin', '2017-02-04', '09:28:56', 'ModificoProducto'),
(96, 'Admin', '2017-02-04', '09:28:57', 'ModificoProducto'),
(97, 'administrador', '2017-02-04', '09:29:21', 'CerroSesion'),
(98, 'rosalinda', '2017-02-04', '09:29:25', 'IngresoAlSistema'),
(99, 'rosalinda', '2017-02-04', '09:29:30', 'IngresoAlSistema'),
(100, 'Rosalinda', '2017-02-04', '09:29:36', 'ModificoProducto'),
(101, 'Rosalinda', '2017-02-04', '09:29:36', 'ModificoProducto'),
(102, 'Rosalinda', '2017-02-04', '09:29:51', 'ModificoProducto'),
(103, 'Rosalinda', '2017-02-04', '09:29:52', 'ModificoProducto'),
(104, 'Rosalinda', '2017-02-04', '09:29:59', 'ModificoProducto'),
(105, 'Rosalinda', '2017-02-04', '09:29:59', 'ModificoProducto'),
(106, 'Rosalinda', '2017-02-04', '09:30:12', 'ModificoProducto'),
(107, 'Rosalinda', '2017-02-04', '09:30:12', 'ModificoProducto'),
(108, 'Rosalinda', '2017-02-04', '09:30:25', 'ModificoProducto'),
(109, 'Rosalinda', '2017-02-04', '09:30:25', 'ModificoProducto'),
(110, 'Rosalinda', '2017-02-04', '09:30:34', 'ModificoProducto'),
(111, 'Rosalinda', '2017-02-04', '09:30:34', 'ModificoProducto'),
(112, 'Rosalinda', '2017-02-04', '09:30:47', 'ModificoProducto'),
(113, 'Rosalinda', '2017-02-04', '09:30:47', 'ModificoProducto'),
(114, 'Rosalinda', '2017-02-04', '09:31:08', 'ModificoProducto'),
(115, 'Rosalinda', '2017-02-04', '09:31:08', 'ModificoProducto'),
(116, 'Rosalinda', '2017-02-04', '09:31:12', 'ModificoProducto'),
(117, 'Rosalinda', '2017-02-04', '09:31:12', 'ModificoProducto'),
(118, 'Rosalinda', '2017-02-04', '09:31:36', 'ModificoProducto'),
(119, 'Rosalinda', '2017-02-04', '09:31:36', 'ModificoProducto'),
(120, 'Admin', '2017-02-04', '09:37:54', 'registroProducto'),
(121, 'Rosalinda', '2017-02-04', '09:38:30', 'registroProducto'),
(122, 'Rosalinda', '2017-02-04', '09:38:31', 'registroProducto'),
(123, 'Rosalinda', '2017-02-04', '09:39:37', 'registroProducto'),
(124, 'Rosalinda', '2017-02-04', '09:39:38', 'registroProducto'),
(125, 'Rosalinda', '2017-02-04', '09:40:23', 'registroProducto'),
(126, 'Rosalinda', '2017-02-04', '09:40:24', 'registroProducto'),
(127, 'Rosalinda', '2017-02-04', '09:40:33', 'registroProducto'),
(128, 'Rosalinda', '2017-02-04', '09:40:33', 'registroProducto'),
(129, 'Admin', '2017-02-04', '09:44:15', 'IngresoAlSistema'),
(130, 'Admin', '2017-02-04', '09:44:28', 'registroProducto'),
(131, 'Admin', '2017-02-04', '09:44:28', 'registroProducto'),
(132, 'Admin', '2017-02-04', '09:45:02', 'registroProducto'),
(133, 'Admin', '2017-02-04', '09:45:02', 'registroProducto'),
(134, 'Admin', '2017-02-04', '09:45:21', 'registroProducto'),
(135, 'Admin', '2017-02-04', '09:45:21', 'registroProducto'),
(136, 'Admin', '2017-02-04', '09:46:31', 'registroProducto'),
(137, 'Admin', '2017-02-04', '09:46:31', 'registroProducto'),
(138, 'Rosalinda', '2017-02-04', '09:46:57', 'registroProducto'),
(139, 'Rosalinda', '2017-02-04', '09:46:57', 'registroProducto'),
(140, 'Rosalinda', '2017-02-04', '09:47:39', 'registroProducto'),
(141, 'Rosalinda', '2017-02-04', '09:47:39', 'registroProducto'),
(142, 'Rosalinda', '2017-02-04', '09:49:46', 'registroCliente'),
(143, 'Rosalinda', '2017-02-04', '09:50:04', 'registroCliente'),
(144, 'Rosalinda', '2017-02-04', '09:50:30', 'registroCliente'),
(145, 'Rosalinda', '2017-02-04', '09:51:14', 'registroCliente'),
(146, 'Rosalinda', '2017-02-04', '09:54:50', 'registroProducto'),
(147, 'Rosalinda', '2017-02-04', '09:54:50', 'registroProducto'),
(148, 'Rosalinda', '2017-02-04', '09:57:29', 'registroProducto'),
(149, 'Rosalinda', '2017-02-04', '09:57:29', 'registroProducto'),
(150, 'Rosalinda', '2017-02-04', '09:57:41', 'registroProducto'),
(151, 'Rosalinda', '2017-02-04', '09:57:42', 'registroProducto'),
(152, 'Rosalinda', '2017-02-04', '09:57:54', 'registroProducto'),
(153, 'Rosalinda', '2017-02-04', '09:57:54', 'registroProducto'),
(154, 'Rosalinda', '2017-02-04', '09:58:25', 'registroProducto'),
(155, 'Rosalinda', '2017-02-04', '09:58:25', 'registroProducto'),
(156, 'Rosalinda', '2017-02-04', '09:58:35', 'registroProducto'),
(157, 'Rosalinda', '2017-02-04', '09:58:36', 'registroProducto'),
(158, 'Rosalinda', '2017-02-04', '09:59:39', 'registroProducto'),
(159, 'Rosalinda', '2017-02-04', '09:59:40', 'registroProducto'),
(160, 'Rosalinda', '2017-02-04', '10:01:00', 'registroProducto'),
(161, 'Rosalinda', '2017-02-04', '10:01:00', 'registroProducto'),
(162, 'Rosalinda', '2017-02-04', '10:01:19', 'registroProducto'),
(163, 'Rosalinda', '2017-02-04', '10:01:19', 'registroProducto'),
(164, 'Rosalinda', '2017-02-04', '10:02:24', 'registroProducto'),
(165, 'Rosalinda', '2017-02-04', '10:02:24', 'registroProducto'),
(166, 'Rosalinda', '2017-02-04', '10:02:42', 'registroProducto'),
(167, 'Rosalinda', '2017-02-04', '10:02:42', 'registroProducto'),
(168, 'Rosalinda', '2017-02-04', '10:03:45', 'registroProducto'),
(169, 'Rosalinda', '2017-02-04', '10:03:45', 'registroProducto'),
(170, 'Rosalinda', '2017-02-04', '10:04:38', 'registroProducto'),
(171, 'Rosalinda', '2017-02-04', '10:04:38', 'registroProducto'),
(172, 'Rosalinda', '2017-02-04', '10:08:44', 'ModificoProducto'),
(173, 'Rosalinda', '2017-02-04', '10:09:14', 'ModificoProducto'),
(174, 'Rosalinda', '2017-02-04', '10:09:30', 'ModificoProducto'),
(175, 'Rosalinda', '2017-02-04', '10:09:31', 'ModificoProducto'),
(176, 'Rosalinda', '2017-02-04', '10:09:33', 'ModificoProducto'),
(177, 'Rosalinda', '2017-02-04', '10:10:10', 'ModificoProducto'),
(178, 'Rosalinda', '2017-02-04', '10:10:10', 'ModificoProducto'),
(179, 'Rosalinda', '2017-02-04', '10:10:15', 'ModificoProducto'),
(180, 'Rosalinda', '2017-02-04', '10:10:15', 'ModificoProducto'),
(181, 'Admin', '2017-02-04', '10:17:40', 'registroAdministrador'),
(182, 'usuario', '2017-02-04', '10:24:10', 'registroCliente'),
(183, 'usuario', '2017-02-04', '10:28:05', 'registroCliente'),
(184, 'Admin', '2017-02-04', '10:28:18', 'registroAdministrador'),
(185, 'Admin', '2017-02-04', '10:30:08', 'registroAdministrador'),
(186, 'administrador', '2017-02-04', '10:37:53', 'CerroSesion'),
(187, 'Admin', '2017-02-04', '11:00:43', 'IngresoAlSistema'),
(188, 'Admin', '2017-02-04', '11:15:50', 'ModificoProducto'),
(189, 'Admin', '2017-02-04', '11:15:50', 'ModificoProducto'),
(190, 'Admin', '2017-02-04', '11:15:59', 'ModificoProducto'),
(191, 'Admin', '2017-02-04', '11:15:59', 'ModificoProducto'),
(192, 'Admin', '2017-02-04', '11:16:01', 'ModificoProducto'),
(193, 'Admin', '2017-02-04', '11:16:02', 'ModificoProducto'),
(194, 'Admin', '2017-02-04', '11:16:02', 'ModificoProducto'),
(195, 'Admin', '2017-02-04', '11:16:02', 'ModificoProducto'),
(196, 'Admin', '2017-02-04', '11:16:03', 'ModificoProducto'),
(197, 'Admin', '2017-02-04', '11:16:03', 'ModificoProducto'),
(198, 'Admin', '2017-02-04', '11:16:24', 'ModificoProducto'),
(199, 'Admin', '2017-02-04', '11:16:24', 'ModificoProducto'),
(200, 'Admin', '2017-02-04', '11:16:25', 'ModificoProducto'),
(201, 'Admin', '2017-02-04', '11:16:25', 'ModificoProducto'),
(202, 'Admin', '2017-02-04', '11:16:26', 'ModificoProducto'),
(203, 'Admin', '2017-02-04', '11:16:26', 'ModificoProducto'),
(204, 'administrador', '2017-02-04', '11:26:38', 'CerroSesion'),
(205, 'administrador', '2017-02-04', '11:26:49', 'CerroSesion'),
(206, 'administrador', '2017-02-04', '11:26:51', 'CerroSesion'),
(207, 'rosalinda', '2017-02-04', '11:29:10', 'IngresoAlSistema'),
(208, 'Admin', '2017-02-04', '11:29:35', 'IngresoAlSistema'),
(209, 'Admin', '2017-02-04', '11:29:48', 'IngresoAlSistema'),
(210, 'administrador', '2017-02-04', '11:29:49', 'CerroSesion'),
(211, 'rosalinda', '2017-02-04', '11:30:09', 'IngresoAlSistema'),
(212, 'Admin', '2017-02-04', '11:31:23', 'IngresoAlSistema'),
(213, 'administrador', '2017-02-04', '11:31:25', 'CerroSesion'),
(214, 'rosalinda', '2017-02-04', '11:31:30', 'IngresoAlSistema'),
(215, 'rosalinda', '2017-02-04', '11:31:43', 'IngresoAlSistema'),
(216, 'Rosalinda', '2017-02-04', '11:38:57', 'registroProducto'),
(217, 'Rosalinda', '2017-02-04', '11:38:57', 'registroProducto'),
(218, 'Rosalinda', '2017-02-04', '11:40:11', 'ModificoProducto'),
(219, 'Rosalinda', '2017-02-04', '11:40:11', 'ModificoProducto'),
(220, 'Rosalinda', '2017-02-04', '11:40:30', 'ModificoProducto'),
(221, 'Rosalinda', '2017-02-04', '11:40:30', 'ModificoProducto'),
(222, 'Rosalinda', '2017-02-04', '11:40:31', 'ModificoProducto'),
(223, 'Rosalinda', '2017-02-04', '11:40:31', 'ModificoProducto'),
(224, 'Rosalinda', '2017-02-04', '11:41:04', 'ModificoProducto'),
(225, 'Rosalinda', '2017-02-04', '11:41:04', 'ModificoProducto'),
(226, 'Rosalinda', '2017-02-04', '11:41:05', 'ModificoProducto'),
(227, 'Rosalinda', '2017-02-04', '11:41:06', 'ModificoProducto'),
(228, 'Rosalinda', '2017-02-04', '11:41:06', 'ModificoProducto'),
(229, 'Rosalinda', '2017-02-04', '11:41:06', 'ModificoProducto'),
(230, 'Rosalinda', '2017-02-04', '11:41:13', 'ModificoProducto'),
(231, 'Rosalinda', '2017-02-04', '11:41:14', 'ModificoProducto'),
(232, 'Rosalinda', '2017-02-04', '11:41:16', 'ModificoProducto'),
(233, 'Rosalinda', '2017-02-04', '11:41:17', 'ModificoProducto'),
(234, 'Admin', '2017-02-04', '11:41:39', 'IngresoAlSistema'),
(235, 'administrador', '2017-02-04', '11:54:42', 'CerroSesion'),
(236, 'Admin', '2017-02-04', '11:56:08', 'IngresoAlSistema'),
(237, 'Admin', '2017-02-04', '11:56:15', 'ModificoProducto'),
(238, 'Admin', '2017-02-04', '11:56:15', 'ModificoProducto'),
(239, 'administrador', '2017-02-04', '11:56:22', 'CerroSesion'),
(240, '21143356', '2017-02-05', '12:53:21', 'registroContratoTransferencia'),
(241, 'Cliente', '2017-02-05', '01:15:41', 'CerroSesion'),
(242, '21143356', '2017-02-05', '01:25:31', 'registroContratoTransferencia'),
(243, '21143356', '2017-02-05', '01:27:52', 'registroContratoTransferencia'),
(244, '26006360', '2017-02-05', '01:28:31', 'registroContratoTransferencia'),
(245, '26006362', '2017-02-05', '01:28:45', 'registroContratoTransferencia'),
(246, '21143356', '2017-02-05', '01:31:31', 'registroContratoTransferencia'),
(247, '21143356', '2017-02-05', '01:33:59', 'registroContratoTransferencia'),
(248, '21143356', '2017-02-05', '01:39:58', 'registroContratoTransferencia'),
(249, '', '2017-02-05', '01:47:15', 'registroContratoTransferencia'),
(250, '26006360', '2017-02-05', '01:51:10', 'registroContratoDeposito'),
(251, '13842779', '2017-02-05', '01:52:32', 'registroContratoDeposito'),
(252, 'Admin', '2017-02-05', '01:59:23', 'IngresoAlSistema'),
(253, '', '2017-02-05', '02:14:25', 'registroContratoTransferencia'),
(254, 'administrador', '2017-02-05', '03:07:43', 'CerroSesion'),
(255, 'a', '2017-02-05', '06:00:26', 'IngresoAlSistema'),
(256, '', '2017-02-05', '06:00:26', 'IngresoAlSistema'),
(257, 'Cliente', '2017-02-05', '06:08:10', 'CerroSesion'),
(258, '26006360', '2017-02-05', '06:09:38', 'IngresoAlSistema'),
(259, '', '2017-02-05', '06:09:38', 'IngresoAlSistema'),
(260, '26006360', '2017-02-05', '06:09:46', 'IngresoAlSistema'),
(261, '26006360', '2017-02-05', '06:10:23', 'IngresoAlSistema'),
(262, 'Cliente', '2017-02-05', '06:10:57', 'CerroSesion'),
(263, 'Cliente', '2017-02-05', '06:14:26', 'CerroSesion'),
(264, '26006360', '2017-02-05', '06:14:43', 'IngresoAlSistema'),
(265, 'Admin', '2017-02-05', '06:28:56', 'IngresoAlSistema'),
(266, 'Admin', '2017-02-05', '06:32:21', 'ModificoProducto'),
(267, 'Admin', '2017-02-05', '06:32:21', 'ModificoProducto'),
(268, 'Admin', '2017-02-05', '06:32:33', 'ModificoProducto'),
(269, 'Admin', '2017-02-05', '06:32:34', 'ModificoProducto'),
(270, 'Admin', '2017-02-05', '06:33:13', 'registroCliente'),
(271, 'administrador', '2017-02-05', '07:32:44', 'CerroSesion'),
(272, '26006360', '2017-02-05', '08:36:01', 'IngresoAlSistema'),
(273, '26006360', '2017-02-05', '08:36:37', 'IngresoAlSistema'),
(274, '26006360', '2017-02-05', '08:38:30', 'IngresoAlSistema'),
(275, '26006360', '2017-02-05', '08:38:55', 'IngresoAlSistema'),
(276, '26006360', '2017-02-05', '08:39:31', 'IngresoAlSistema'),
(277, 'Cliente', '2017-02-05', '08:41:28', 'CerroSesion'),
(278, 'Cliente', '2017-02-05', '08:41:37', 'CerroSesion'),
(279, '26006360', '2017-02-05', '08:43:10', 'IngresoAlSistema'),
(280, '26006360', '2017-02-05', '08:43:28', 'IngresoAlSistema'),
(281, 'Admin', '2017-02-05', '08:43:40', 'IngresoAlSistema'),
(282, 'rosalinda', '2017-02-05', '08:44:24', 'IngresoAlSistema'),
(283, '', '2017-02-05', '08:44:31', 'IngresoAlSistema'),
(284, '26006360', '2017-02-05', '08:44:37', 'IngresoAlSistema'),
(285, 'rosalinda', '2017-02-05', '08:44:41', 'IngresoAlSistema'),
(286, 'rosalinda', '2017-02-05', '08:44:56', 'IngresoAlSistema'),
(287, 'Admin', '2017-02-05', '08:45:01', 'IngresoAlSistema'),
(288, 'rosalinda', '2017-02-05', '08:45:11', 'IngresoAlSistema'),
(289, 'Admin', '2017-02-05', '08:45:41', 'IngresoAlSistema'),
(290, 'administrador', '2017-02-05', '08:45:43', 'CerroSesion'),
(291, 'rosalinda', '2017-02-05', '08:45:48', 'IngresoAlSistema'),
(292, 'rosalinda', '2017-02-05', '08:45:53', 'IngresoAlSistema'),
(293, 'administrador', '2017-02-05', '08:45:59', 'CerroSesion'),
(294, '26006360', '2017-02-05', '08:50:58', 'IngresoAlSistema'),
(295, 'administrador', '2017-02-05', '08:52:17', 'CerroSesion'),
(296, '26006360', '2017-02-05', '08:52:33', 'IngresoAlSistema'),
(297, 'administrador', '2017-02-05', '08:59:11', 'CerroSesion'),
(298, '26006360', '2017-02-05', '09:00:44', 'IngresoAlSistema'),
(299, 'Cliente', '2017-02-05', '09:00:56', 'CerroSesion'),
(300, '26006360', '2017-02-05', '09:03:05', 'IngresoAlSistema'),
(301, 'Cliente', '2017-02-05', '09:26:15', 'CerroSesion'),
(302, 'Admin', '2017-02-05', '09:26:40', 'IngresoAlSistema'),
(303, 'Admin', '2017-02-05', '09:29:12', 'registroCliente'),
(304, 'administrador', '2017-02-05', '09:56:32', 'CerroSesion'),
(305, 'Admin', '2017-02-05', '09:57:43', 'IngresoAlSistema'),
(306, 'Admin', '2017-02-05', '09:58:03', 'registroProducto'),
(307, 'Admin', '2017-02-05', '09:58:03', 'registroProducto'),
(308, 'Cliente', '2017-02-05', '10:30:53', 'CerroSesion'),
(309, 'rosalinda', '2017-02-05', '10:31:00', 'IngresoAlSistema'),
(310, '26006360', '2017-02-05', '10:31:04', 'IngresoAlSistema'),
(311, '', '2017-02-06', '01:31:58', 'registroContratoTransferencia'),
(312, 'rosalinda', '2017-02-06', '01:33:42', 'IngresoAlSistema'),
(313, 'rosalinda', '2017-02-06', '01:33:47', 'IngresoAlSistema'),
(314, 'rosalinda', '2017-02-06', '01:34:11', 'IngresoAlSistema'),
(315, 'Rosalinda', '2017-02-06', '01:35:20', 'ModificoProducto'),
(316, 'Rosalinda', '2017-02-06', '01:35:20', 'ModificoProducto'),
(317, 'Rosalinda', '2017-02-06', '01:35:37', 'ModificoProducto'),
(318, 'Rosalinda', '2017-02-06', '01:35:37', 'ModificoProducto'),
(319, 'Rosalinda', '2017-02-06', '01:36:10', 'ModificoProducto'),
(320, 'Rosalinda', '2017-02-06', '01:36:10', 'ModificoProducto'),
(321, 'Rosalinda', '2017-02-06', '01:36:36', 'ModificoProducto'),
(322, 'Rosalinda', '2017-02-06', '01:36:36', 'ModificoProducto'),
(323, 'Rosalinda', '2017-02-06', '01:37:34', 'ModificoProducto'),
(324, 'Rosalinda', '2017-02-06', '01:37:34', 'ModificoProducto'),
(325, 'Rosalinda', '2017-02-06', '01:37:38', 'ModificoProducto'),
(326, 'Rosalinda', '2017-02-06', '01:37:39', 'ModificoProducto'),
(327, 'Rosalinda', '2017-02-06', '01:37:46', 'ModificoProducto'),
(328, 'Rosalinda', '2017-02-06', '01:37:46', 'ModificoProducto'),
(329, 'Rosalinda', '2017-02-06', '01:37:57', 'ModificoProducto'),
(330, 'Rosalinda', '2017-02-06', '01:37:57', 'ModificoProducto'),
(331, 'Admin', '2017-02-06', '01:46:52', 'IngresoAlSistema');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE IF NOT EXISTS `cliente` (
  `cedula` int(8) NOT NULL,
  `usuario` varchar(25) NOT NULL COMMENT 'nombre del cliente campo Obligatorio en el sistem',
  `password` varchar(20) NOT NULL,
  `apellidoCliente` varchar(25) NOT NULL COMMENT 'Apellidos del cliente campo Obligatorio en el sistem',
  `direccion` text NOT NULL COMMENT 'Direccion recidencia cliente campo Obligatorio en el sistem',
  `telefonoUno` varchar(12) NOT NULL COMMENT 'primer telefono de contacto  campo Obligatorio en el sistema',
  `telefonoDos` varchar(12) DEFAULT NULL COMMENT 'segundo telefono de contacto',
  `correo` varchar(50) NOT NULL COMMENT 'correo del cliente que podra ser usado como usuario para acceder a la pagina campo Obligatorio en el sistem',
  `registro` date NOT NULL,
  PRIMARY KEY (`cedula`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`cedula`, `usuario`, `password`, `apellidoCliente`, `direccion`, `telefonoUno`, `telefonoDos`, `correo`, `registro`) VALUES
(1232123, 'Rosalinda', '12', 'Veliz', 'q', '04245815434', '', 'rosmi@hotmail.com', '2017-02-04'),
(11784580, 'Rosa ', '987654321', 'Gonzalez', 'Ubr la concordia vereda 6 casa', '02514172021', '', 'rosa@gmail.com', '2017-02-05'),
(12345678, 'Rosalinda', '121', 'Veliz', 'urb la concordia ', '04245815434', '', 'wil@hotmail.com', '2017-02-02'),
(13842779, 'Osman', '250380', 'Alvarez', 'Carrera 33 ', '04245306569', '02512735472', 'osmanalvarez55@hotmail.com', '2017-02-02'),
(19126128, 'Rosalinda', 'q', 'Veliz', 'q', '04245815434', '98766543121', 'wil@hotmail.com', '2017-02-04'),
(20016234, 'Rosmar', '123', 'Rivera', 'lara', '04245753065', '', 'rosalinda94_6@hotmail.com', '2017-02-04'),
(21143351, 'Rosa', 'rq1', '', '', '', '', '', '2017-02-04'),
(21143356, 'Wil', '0987654321', 'Veliz', 'urb la concordia ', '04245815434', '98766543121', 'wil@hotmail.com', '2017-02-02'),
(24667923, 'Rosmar', '1234', 'Rivera', 'Patarata', '04245815434', '', 'rosmi@hotmail.com', '2017-02-02'),
(26006360, 'Rosalinda', '123456', 'Rivera', 'urb la concordia ', '04245815434', '', 'rosalinda94_6@hotmail.com', '2017-02-02');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contrato`
--

CREATE TABLE IF NOT EXISTS `contrato` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cliente_cedula` int(8) NOT NULL,
  `pago` varchar(20) NOT NULL,
  `fecha` date DEFAULT NULL,
  `fechaReserva` date DEFAULT NULL,
  `fechaEnvio` date DEFAULT NULL,
  `cantidaddia` int(2) NOT NULL,
  `direccionEnvio` varchar(45) DEFAULT NULL,
  `products` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `contrato`
--

INSERT INTO `contrato` (`id`, `cliente_cedula`, `pago`, `fecha`, `fechaReserva`, `fechaEnvio`, `cantidaddia`, `direccionEnvio`, `products`) VALUES
(1, 21143356, 'transferencia', '2017-02-05', '2017-02-02', '2017-12-31', 1, 'efsfsfsdf\r\n', '3 unidades de Caracol . 1 unidad de Cepillados .'),
(2, 26006360, 'deposito', '2017-02-05', '2017-02-02', '2017-01-31', 0, 'hpoña', '3 unidades de Caracol . 1 unidad de Cepillados .'),
(3, 13842779, 'deposito', '2017-02-05', '2017-01-01', '2017-12-02', 0, 'df\r\n', '3 unidades de Caracol . 1 unidad de Cepillados .'),
(4, 26006360, 'transferencia', '2017-02-05', '2017-02-02', '2017-01-31', 7, 'Hola caracola', '3 unidades de Caracol . 2 unidades de Cepillados .'),
(5, 26006360, 'transferencia', '2017-02-06', '2017-01-02', '2017-02-02', 2, 'owojs\r\n', '1 unidad de Cepillados .');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `deposito`
--

CREATE TABLE IF NOT EXISTS `deposito` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) NOT NULL,
  `cliente_cedula` varchar(30) NOT NULL,
  `tarjeta` int(12) NOT NULL,
  `mes` int(2) NOT NULL,
  `ano` int(2) NOT NULL,
  `codigo` int(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `deposito`
--

INSERT INTO `deposito` (`id`, `nombre`, `cliente_cedula`, `tarjeta`, `mes`, `ano`, `codigo`) VALUES
(1, 'Rosalinda V Rivera G', '13842779', 2147483647, 22, 42, 34);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE IF NOT EXISTS `producto` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Codigo del producto campo Obligatorio en el sistema',
  `nombreProducto` varchar(45) NOT NULL COMMENT 'nombre del producto ',
  `descripcionProducto` varchar(40) NOT NULL COMMENT 'descripcion del producto',
  `cantidadProducto` int(5) NOT NULL,
  `precioProducto` double NOT NULL COMMENT 'precio unitario del producto',
  `imagen` blob,
  `tipoimagen` varchar(30) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `codigoProducto` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id`, `nombreProducto`, `descripcionProducto`, `cantidadProducto`, `precioProducto`, `imagen`, `tipoimagen`) VALUES
(3, 'Cepillados', 'Combos de Cepillados', 100, 4000, '', 'image/png'),
(4, 'Toldos', 'Toldos Blancos', 100, 350, '', 'image/png'),
(5, 'Casa', 'Rosalinda', 23, 134, 0xc3bfc398c3bfc3a000104a46494600010200000100010000c3bfc3ad00e2809e50686f746f73686f7020332e30003842494d04040000000000671c0228006246424d443031303030613764306430303030643332353030303031363335303030303536333530303030653833353030303063353362303030306235356130303030386436353030303064653638303030303165366430303030653866613030303000c3bfc3a20bc3b84943435f50524f46494c4500010100000bc3a800000000020000006d6e74725247422058595a2007c3990003, 'image/jpeg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `transferencia`
--

CREATE TABLE IF NOT EXISTS `transferencia` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cedulaCliente` int(11) NOT NULL,
  `monto` double NOT NULL,
  `banco` varchar(30) NOT NULL,
  `referencia` int(11) NOT NULL,
  `fecha` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `transferencia`
--

INSERT INTO `transferencia` (`id`, `cedulaCliente`, `monto`, `banco`, `referencia`, `fecha`) VALUES
(1, 26006360, 25001, 'Banesco', 20016, '2017-02-05'),
(2, 26006360, 1200, 'Banesco', 21, '2017-02-06');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `codigoUsuario` int(11) NOT NULL AUTO_INCREMENT COMMENT 'codigo del usuario',
  `cedula` int(8) NOT NULL,
  `usuario` varchar(30) DEFAULT NULL COMMENT 'nick del usuario en el sistema',
  `password` varchar(14) DEFAULT NULL COMMENT 'Clave del usuario al sistema ',
  `fecha` date NOT NULL,
  PRIMARY KEY (`codigoUsuario`),
  UNIQUE KEY `cedula` (`cedula`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`codigoUsuario`, `cedula`, `usuario`, `password`, `fecha`) VALUES
(1, 21143356, 'Admin', 'admin', '2017-02-04'),
(2, 26006360, 'rosalinda', '123456', '2017-02-04');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `auditoria`
--
ALTER TABLE `auditoria`
  ADD CONSTRAINT `fk_auditoria_usuario` FOREIGN KEY (`usuario_CodigoUsuario`) REFERENCES `usuario` (`codigoUsuario`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
