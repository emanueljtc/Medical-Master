-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 12-01-2017 a las 11:02:53
-- Versión del servidor: 5.7.16-0ubuntu0.16.04.1
-- Versión de PHP: 5.6.29-1+deb.sury.org~xenial+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `MMBD`
--
CREATE DATABASE IF NOT EXISTS `MMBD` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `MMBD`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acos`
--

CREATE TABLE `acos` (
  `id` int(10) NOT NULL,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `foreign_key` int(10) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `acos`
--

INSERT INTO `acos` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES
(1, NULL, NULL, NULL, 'controllers', 1, 260),
(2, 1, NULL, NULL, 'Antecedents', 2, 15),
(3, 2, NULL, NULL, 'index', 3, 4),
(4, 2, NULL, NULL, 'view', 5, 6),
(5, 2, NULL, NULL, 'add', 7, 8),
(6, 2, NULL, NULL, 'edit', 9, 10),
(7, 2, NULL, NULL, 'delete', 11, 12),
(8, 1, NULL, NULL, 'Back', 16, 33),
(9, 8, NULL, NULL, 'startup', 17, 18),
(10, 8, NULL, NULL, 'out', 19, 20),
(11, 8, NULL, NULL, 'err', 21, 22),
(12, 8, NULL, NULL, 'aco_sync', 23, 24),
(13, 8, NULL, NULL, 'aco_update', 25, 26),
(14, 8, NULL, NULL, 'getControllerList', 27, 28),
(15, 8, NULL, NULL, 'verify', 29, 30),
(16, 8, NULL, NULL, 'recover', 31, 32),
(17, 1, NULL, NULL, 'Charges', 34, 47),
(18, 17, NULL, NULL, 'index', 35, 36),
(19, 17, NULL, NULL, 'view', 37, 38),
(20, 17, NULL, NULL, 'add', 39, 40),
(21, 17, NULL, NULL, 'edit', 41, 42),
(22, 17, NULL, NULL, 'delete', 43, 44),
(23, 1, NULL, NULL, 'Citations', 48, 61),
(24, 23, NULL, NULL, 'index', 49, 50),
(25, 23, NULL, NULL, 'view', 51, 52),
(26, 23, NULL, NULL, 'add', 53, 54),
(27, 23, NULL, NULL, 'edit', 55, 56),
(28, 23, NULL, NULL, 'delete', 57, 58),
(29, 1, NULL, NULL, 'Datecitations', 62, 75),
(30, 29, NULL, NULL, 'index', 63, 64),
(31, 29, NULL, NULL, 'view', 65, 66),
(32, 29, NULL, NULL, 'add', 67, 68),
(33, 29, NULL, NULL, 'edit', 69, 70),
(34, 29, NULL, NULL, 'delete', 71, 72),
(35, 1, NULL, NULL, 'Diagnostics', 76, 89),
(36, 35, NULL, NULL, 'index', 77, 78),
(37, 35, NULL, NULL, 'view', 79, 80),
(38, 35, NULL, NULL, 'add', 81, 82),
(39, 35, NULL, NULL, 'edit', 83, 84),
(40, 35, NULL, NULL, 'delete', 85, 86),
(41, 1, NULL, NULL, 'Groups', 90, 103),
(42, 41, NULL, NULL, 'index', 91, 92),
(43, 41, NULL, NULL, 'view', 93, 94),
(44, 41, NULL, NULL, 'add', 95, 96),
(45, 41, NULL, NULL, 'edit', 97, 98),
(46, 41, NULL, NULL, 'delete', 99, 100),
(48, 1, NULL, NULL, 'Histories', 104, 117),
(49, 48, NULL, NULL, 'index', 105, 106),
(50, 48, NULL, NULL, 'view', 107, 108),
(51, 48, NULL, NULL, 'add', 109, 110),
(52, 48, NULL, NULL, 'edit', 111, 112),
(53, 48, NULL, NULL, 'delete', 113, 114),
(54, 1, NULL, NULL, 'Indications', 118, 131),
(55, 54, NULL, NULL, 'index', 119, 120),
(56, 54, NULL, NULL, 'view', 121, 122),
(57, 54, NULL, NULL, 'add', 123, 124),
(58, 54, NULL, NULL, 'edit', 125, 126),
(59, 54, NULL, NULL, 'delete', 127, 128),
(60, 1, NULL, NULL, 'Nationalities', 132, 145),
(61, 60, NULL, NULL, 'index', 133, 134),
(62, 60, NULL, NULL, 'view', 135, 136),
(63, 60, NULL, NULL, 'add', 137, 138),
(64, 60, NULL, NULL, 'edit', 139, 140),
(65, 60, NULL, NULL, 'delete', 141, 142),
(66, 1, NULL, NULL, 'Pages', 146, 151),
(67, 66, NULL, NULL, 'display', 147, 148),
(68, 1, NULL, NULL, 'People', 152, 167),
(69, 68, NULL, NULL, 'index', 153, 154),
(70, 68, NULL, NULL, 'view', 155, 156),
(71, 68, NULL, NULL, 'api', 157, 158),
(72, 68, NULL, NULL, 'add', 159, 160),
(73, 68, NULL, NULL, 'edit', 161, 162),
(74, 68, NULL, NULL, 'delete', 163, 164),
(75, 1, NULL, NULL, 'Specialties', 168, 181),
(76, 75, NULL, NULL, 'index', 169, 170),
(77, 75, NULL, NULL, 'view', 171, 172),
(78, 75, NULL, NULL, 'add', 173, 174),
(79, 75, NULL, NULL, 'edit', 175, 176),
(80, 75, NULL, NULL, 'delete', 177, 178),
(81, 1, NULL, NULL, 'Studies', 182, 195),
(82, 81, NULL, NULL, 'index', 183, 184),
(83, 81, NULL, NULL, 'view', 185, 186),
(84, 81, NULL, NULL, 'add', 187, 188),
(85, 81, NULL, NULL, 'edit', 189, 190),
(86, 81, NULL, NULL, 'delete', 191, 192),
(87, 1, NULL, NULL, 'Treatments', 196, 209),
(88, 87, NULL, NULL, 'index', 197, 198),
(89, 87, NULL, NULL, 'view', 199, 200),
(90, 87, NULL, NULL, 'add', 201, 202),
(91, 87, NULL, NULL, 'edit', 203, 204),
(92, 87, NULL, NULL, 'delete', 205, 206),
(93, 1, NULL, NULL, 'Typepayments', 210, 223),
(94, 93, NULL, NULL, 'index', 211, 212),
(95, 93, NULL, NULL, 'view', 213, 214),
(96, 93, NULL, NULL, 'add', 215, 216),
(97, 93, NULL, NULL, 'edit', 217, 218),
(98, 93, NULL, NULL, 'delete', 219, 220),
(99, 1, NULL, NULL, 'Users', 224, 243),
(100, 99, NULL, NULL, 'login', 225, 226),
(101, 99, NULL, NULL, 'logout', 227, 228),
(102, 99, NULL, NULL, 'index', 229, 230),
(103, 99, NULL, NULL, 'view', 231, 232),
(104, 99, NULL, NULL, 'add', 233, 234),
(105, 99, NULL, NULL, 'edit', 235, 236),
(106, 99, NULL, NULL, 'delete', 237, 238),
(108, 1, NULL, NULL, 'AclExtras', 244, 245),
(109, 1, NULL, NULL, 'CakePdf', 246, 247),
(110, 1, NULL, NULL, 'DebugKit', 248, 257),
(111, 110, NULL, NULL, 'ToolbarAccess', 249, 256),
(112, 111, NULL, NULL, 'history_state', 250, 251),
(113, 111, NULL, NULL, 'sql_explain', 252, 253),
(114, 99, NULL, NULL, 'initDB', 239, 240),
(115, 1, NULL, NULL, 'Upload', 258, 259),
(150, 2, NULL, NULL, 'backup', 13, 14),
(151, 17, NULL, NULL, 'backup', 45, 46),
(152, 23, NULL, NULL, 'backup', 59, 60),
(153, 29, NULL, NULL, 'backup', 73, 74),
(154, 35, NULL, NULL, 'backup', 87, 88),
(155, 41, NULL, NULL, 'backup', 101, 102),
(156, 48, NULL, NULL, 'backup', 115, 116),
(157, 54, NULL, NULL, 'backup', 129, 130),
(158, 60, NULL, NULL, 'backup', 143, 144),
(159, 66, NULL, NULL, 'backup', 149, 150),
(160, 68, NULL, NULL, 'backup', 165, 166),
(161, 75, NULL, NULL, 'backup', 179, 180),
(162, 81, NULL, NULL, 'backup', 193, 194),
(163, 87, NULL, NULL, 'backup', 207, 208),
(164, 93, NULL, NULL, 'backup', 221, 222),
(165, 99, NULL, NULL, 'backup', 241, 242),
(166, 111, NULL, NULL, 'backup', 254, 255);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `antecedents`
--

CREATE TABLE `antecedents` (
  `id` int(4) UNSIGNED ZEROFILL NOT NULL,
  `person_id` int(10) NOT NULL,
  `history_id` int(10) NOT NULL,
  `name_antecendent` varchar(50) NOT NULL,
  `origin` varchar(15) NOT NULL,
  `time_ suffering` varchar(15) NOT NULL,
  `family` varchar(100) NOT NULL,
  `personals_doctors` varchar(100) NOT NULL,
  `surgicals` varchar(255) NOT NULL,
  `created` date NOT NULL,
  `modified` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `antecedents`
--

INSERT INTO `antecedents` (`id`, `person_id`, `history_id`, `name_antecendent`, `origin`, `time_ suffering`, `family`, `personals_doctors`, `surgicals`, `created`, `modified`) VALUES
(0003, 1, 1, 'Cardiopatia', 'hereditario', '20', 'Abuelo Parterno pacedia de problemas cardiacos', '', 'No', '2017-01-11', '2017-01-11'),
(0004, 1, 1, 'kkkksda', 'hereditario', '12', 'Abuelo Parterno pacedia de problemas cardiacos', 'quien ', 'No', '2017-01-11', '2017-01-11'),
(0005, 1, 1, 'Diesvio', 'hereditario', '10', 'Abuelo Parterno pacedia de problemas cardiacos', 'Palo Verltran', 'No', '2017-01-11', '2017-01-11');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aros`
--

CREATE TABLE `aros` (
  `id` int(10) NOT NULL,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `foreign_key` int(10) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `aros`
--

INSERT INTO `aros` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES
(1, NULL, 'Group', 1, NULL, 1, 4),
(2, NULL, 'Group', 2, NULL, 5, 8),
(3, NULL, 'Group', 3, NULL, 9, 12),
(5, 1, 'User', 2, NULL, 2, 3),
(12, 3, 'User', 9, NULL, 10, 11),
(14, 2, 'User', 11, NULL, 6, 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aros_acos`
--

CREATE TABLE `aros_acos` (
  `id` int(10) NOT NULL,
  `aro_id` int(10) NOT NULL,
  `aco_id` int(10) NOT NULL,
  `_create` varchar(2) NOT NULL DEFAULT '0',
  `_read` varchar(2) NOT NULL DEFAULT '0',
  `_update` varchar(2) NOT NULL DEFAULT '0',
  `_delete` varchar(2) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `aros_acos`
--

INSERT INTO `aros_acos` (`id`, `aro_id`, `aco_id`, `_create`, `_read`, `_update`, `_delete`) VALUES
(1, 1, 1, '1', '1', '1', '1'),
(2, 2, 1, '-1', '-1', '-1', '-1'),
(3, 2, 74, '-1', '-1', '-1', '-1'),
(4, 2, 53, '-1', '-1', '-1', '-1'),
(5, 2, 69, '1', '1', '1', '1'),
(6, 2, 72, '1', '1', '1', '1'),
(7, 2, 70, '1', '1', '1', '1'),
(8, 2, 73, '1', '1', '1', '1'),
(9, 2, 49, '1', '1', '1', '1'),
(10, 2, 51, '1', '1', '1', '1'),
(11, 2, 50, '1', '1', '1', '1'),
(12, 2, 52, '1', '1', '1', '1'),
(13, 3, 1, '-1', '-1', '-1', '-1'),
(14, 3, 74, '-1', '-1', '-1', '-1'),
(15, 3, 53, '-1', '-1', '-1', '-1'),
(16, 3, 7, '-1', '-1', '-1', '-1'),
(17, 3, 69, '1', '1', '1', '1'),
(18, 3, 72, '1', '1', '1', '1'),
(19, 3, 70, '1', '1', '1', '1'),
(20, 3, 73, '1', '1', '1', '1'),
(21, 3, 49, '1', '1', '1', '1'),
(22, 3, 51, '1', '1', '1', '1'),
(23, 3, 50, '1', '1', '1', '1'),
(24, 3, 52, '1', '1', '1', '1'),
(25, 3, 3, '1', '1', '1', '1'),
(26, 3, 5, '1', '1', '1', '1'),
(27, 3, 6, '1', '1', '1', '1'),
(28, 3, 4, '1', '1', '1', '1'),
(29, 3, 35, '1', '1', '1', '1'),
(30, 3, 18, '1', '1', '1', '1'),
(31, 3, 19, '1', '1', '1', '1'),
(32, 3, 101, '1', '1', '1', '1'),
(33, 2, 24, '1', '1', '1', '1'),
(34, 2, 18, '1', '1', '1', '1'),
(35, 2, 26, '1', '1', '1', '1'),
(36, 2, 27, '1', '1', '1', '1'),
(37, 2, 25, '1', '1', '1', '1'),
(38, 2, 20, '1', '1', '1', '1'),
(39, 2, 21, '1', '1', '1', '1'),
(40, 2, 19, '1', '1', '1', '1'),
(41, 2, 7, '-1', '-1', '-1', '-1'),
(42, 2, 3, '1', '1', '1', '1'),
(43, 2, 5, '1', '1', '1', '1'),
(44, 2, 6, '1', '1', '1', '1'),
(45, 2, 4, '1', '1', '1', '1'),
(46, 2, 35, '1', '1', '1', '1'),
(47, 2, 87, '1', '1', '1', '1'),
(48, 2, 54, '1', '1', '1', '1'),
(49, 2, 101, '1', '1', '1', '1'),
(50, 3, 87, '1', '1', '1', '1'),
(51, 3, 54, '1', '1', '1', '1'),
(52, 3, 82, '1', '1', '1', '1'),
(53, 3, 84, '1', '1', '1', '1'),
(54, 3, 85, '1', '1', '1', '1'),
(55, 3, 83, '1', '1', '1', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `charges`
--

CREATE TABLE `charges` (
  `id` int(4) UNSIGNED ZEROFILL NOT NULL,
  `total_cost` int(10) NOT NULL,
  `person_id` int(10) NOT NULL,
  `citation_id` int(10) NOT NULL,
  `state_charge` varchar(50) NOT NULL,
  `typepayment_id` int(10) NOT NULL,
  `observations` text NOT NULL,
  `created` date NOT NULL,
  `modified` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `charges`
--

INSERT INTO `charges` (`id`, `total_cost`, `person_id`, `citation_id`, `state_charge`, `typepayment_id`, `observations`, `created`, `modified`) VALUES
(0001, 5000, 2, 1, 'Cancelado', 3, 'Pagado', '2016-12-06', '2016-12-14'),
(0002, 40000, 3, 1, 'No Cancelado', 1, 'Ninguna', '2016-12-12', '2016-12-14');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `citations`
--

CREATE TABLE `citations` (
  `id` int(10) NOT NULL,
  `person_id` int(10) NOT NULL,
  `date_hour` varchar(255) NOT NULL,
  `datecitation_id` int(11) NOT NULL,
  `created` date NOT NULL,
  `modified` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `citations`
--

INSERT INTO `citations` (`id`, `person_id`, `date_hour`, `datecitation_id`, `created`, `modified`) VALUES
(1, 2, '09-12-2016', 1, '2016-12-07', '2016-12-07');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datecitations`
--

CREATE TABLE `datecitations` (
  `id` int(10) NOT NULL,
  `state` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `datecitations`
--

INSERT INTO `datecitations` (`id`, `state`) VALUES
(1, 'Activo'),
(2, 'inactivo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `diagnostics`
--

CREATE TABLE `diagnostics` (
  `id` int(4) UNSIGNED ZEROFILL NOT NULL,
  `reason` text NOT NULL,
  `size_boobs` varchar(100) DEFAULT NULL,
  `form_boobs` varchar(100) DEFAULT NULL,
  `symmetry_boobs` varchar(100) DEFAULT NULL,
  `skin_boobs` varchar(100) DEFAULT NULL,
  `cap_boobs` varchar(100) DEFAULT NULL,
  `pussy` varchar(100) DEFAULT NULL,
  `neck_pussy` varchar(100) DEFAULT NULL,
  `coloscopia` varchar(100) DEFAULT NULL,
  `ano_ straight` varchar(100) DEFAULT NULL,
  `head_neck` varchar(100) DEFAULT NULL,
  `touch_tumor` varchar(100) DEFAULT NULL,
  `form_tumor` varchar(100) DEFAULT NULL,
  `surface_tumor` varchar(100) DEFAULT NULL,
  `contour_tumor` varchar(100) DEFAULT NULL,
  `axis_tumor` varchar(100) DEFAULT NULL,
  `consistency_tumor` varchar(100) DEFAULT NULL,
  `laringoscopia` varchar(100) DEFAULT NULL,
  `menarguia` varchar(100) DEFAULT NULL,
  `reglas` varchar(100) DEFAULT NULL,
  `prs` varchar(100) DEFAULT NULL,
  `companion_sexual` varchar(100) DEFAULT NULL,
  `distance_cap` varchar(100) DEFAULT NULL,
  `gestas` varchar(100) DEFAULT NULL,
  `rsi` varchar(100) DEFAULT NULL,
  `paras` varchar(100) DEFAULT NULL,
  `abdomen` varchar(100) DEFAULT NULL,
  `misbirth` varchar(100) DEFAULT NULL,
  `gynecological_vulva` varchar(100) DEFAULT NULL,
  `cesareans` varchar(100) DEFAULT NULL,
  `age_birth_one` int(3) DEFAULT NULL,
  `diagnostico` text NOT NULL,
  `person_id` int(11) NOT NULL,
  `history_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `diagnostics`
--

INSERT INTO `diagnostics` (`id`, `reason`, `size_boobs`, `form_boobs`, `symmetry_boobs`, `skin_boobs`, `cap_boobs`, `pussy`, `neck_pussy`, `coloscopia`, `ano_ straight`, `head_neck`, `touch_tumor`, `form_tumor`, `surface_tumor`, `contour_tumor`, `axis_tumor`, `consistency_tumor`, `laringoscopia`, `menarguia`, `reglas`, `prs`, `companion_sexual`, `distance_cap`, `gestas`, `rsi`, `paras`, `abdomen`, `misbirth`, `gynecological_vulva`, `cesareans`, `age_birth_one`, `diagnostico`, `person_id`, `history_id`) VALUES
(0001, 'Inflamacion', '38', 'Redondas', 'perfectas', 'suave', 'si', 'ufff', 'si', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'si', 'no', 'si', '8', '10', 'no', 'no', 'no', 'si', 'no', 'no', 12, 'Perfecto estado', 1, 1),
(0002, 'Dolores en Articulaciones ', '22', '333', '222', '22', '22', '222', '22', '22', '22', '22', '22', '22', 'Desconocido', 'Desconocido', 'Desconocido', 'Desconocido', 'Desconocido', 'Desconocido', 'Desconocido', 'Desconocido', 'Desconocido', 'Desconocido', 'Desconocido', 'Desconocido', 'Desconocido', 'Desconocido', 'Desconocido', 'Desconocido', 'Desconocido', 12, 'Desconocido', 2, 2),
(0003, 'dolor de Columna', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'si', '', '', '', '', '', '', '', '', NULL, 'Inflamacion de Vertebras', 3, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `groups`
--

CREATE TABLE `groups` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `created` date NOT NULL,
  `modified` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `groups`
--

INSERT INTO `groups` (`id`, `name`, `created`, `modified`) VALUES
(1, 'Administrador', '2016-12-10', '2016-12-10'),
(2, 'Secretaria', '2016-12-10', '2016-12-10'),
(3, 'Doctor', '2016-12-10', '2016-12-10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historys`
--

CREATE TABLE `historys` (
  `id` int(4) UNSIGNED ZEROFILL NOT NULL,
  `person_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `historys`
--

INSERT INTO `historys` (`id`, `person_id`) VALUES
(0001, 1),
(0002, 2),
(0003, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nationalities`
--

CREATE TABLE `nationalities` (
  `id` int(10) NOT NULL,
  `nacionalidad` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `nationalities`
--

INSERT INTO `nationalities` (`id`, `nacionalidad`) VALUES
(1, 'Venezolano');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `people`
--

CREATE TABLE `people` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `dni` int(15) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `address` text NOT NULL,
  `born_date` varchar(20) NOT NULL,
  `age` int(3) NOT NULL,
  `weight` int(10) NOT NULL,
  `height` int(10) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `phone_dos` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nationality_id` int(11) NOT NULL,
  `pass_app` varchar(15) DEFAULT NULL,
  `token` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `people`
--

INSERT INTO `people` (`id`, `name`, `last_name`, `dni`, `gender`, `address`, `born_date`, `age`, `weight`, `height`, `phone`, `phone_dos`, `email`, `nationality_id`, `pass_app`, `token`) VALUES
(1, 'Ana ', 'Cordova', 20355749, 'Femenino', 'Funda Villa 2 - Villa de Cura ', '16-03-1992', 24, 65, 165, '04262442085', '024428976', 'anakcordova@gmail.com', 1, '123', NULL),
(2, 'Luis', 'Clemente', 2218718, 'Masculino', 'las palmas', '08-01-1930', 87, 80, 160, '02464315404', '02464315404', 'luis@gmail.com', 1, '123', NULL),
(3, 'Emanuel', 'Torres', 18971787, 'Masculino', 'Las Palmas Calle Vargas', '04-07-1990', 26, 70, 175, '04165615973', '02464315404', 'emanueljtc@gmail.com', 1, '123', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prescriptions`
--

CREATE TABLE `prescriptions` (
  `id` int(4) UNSIGNED ZEROFILL NOT NULL,
  `person_id` int(10) NOT NULL,
  `diagnostic_id` int(10) NOT NULL,
  `status_treament` varchar(10) NOT NULL,
  `prescription` text NOT NULL,
  `indications` text,
  `created` date NOT NULL,
  `modified` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `prescriptions`
--

INSERT INTO `prescriptions` (`id`, `person_id`, `diagnostic_id`, `status_treament`, `prescription`, `indications`, `created`, `modified`) VALUES
(0003, 2, 1, 'Suspendido', 'Rifoxina', '', '2016-12-07', '2016-12-08'),
(0006, 2, 1, 'Activo', 'amoxicilina tabl 500mg', '', '2016-12-17', '2016-12-17'),
(0007, 3, 3, 'Activo', 'Relajante Muscular', '', '2017-01-12', '2017-01-12'),
(0008, 1, 1, 'Activo', 'Jarabe', '', '2017-01-12', '2017-01-12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `studies`
--

CREATE TABLE `studies` (
  `id` int(4) UNSIGNED ZEROFILL NOT NULL,
  `diagnostic_id` int(10) NOT NULL,
  `person_id` int(10) NOT NULL,
  `name_studie` varchar(50) NOT NULL,
  `functional_exam` text NOT NULL,
  `physical_exam` text NOT NULL,
  `observations` text NOT NULL,
  `created` date NOT NULL,
  `modified` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `studies`
--

INSERT INTO `studies` (`id`, `diagnostic_id`, `person_id`, `name_studie`, `functional_exam`, `physical_exam`, `observations`, `created`, `modified`) VALUES
(0001, 1, 1, 'Electrocardiograma', 'dsdad a sda as', 'dsadasdawdadwasasd ', 'sdasdwdsdwdadwd', '2017-01-10', '2017-01-10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `typepayments`
--

CREATE TABLE `typepayments` (
  `id` int(10) NOT NULL,
  `type_payment` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `typepayments`
--

INSERT INTO `typepayments` (`id`, `type_payment`) VALUES
(1, 'Cheque'),
(2, 'efectivo'),
(3, 'debito'),
(5, 'credito');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `group_id` int(10) NOT NULL,
  `created` date NOT NULL,
  `modified` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `full_name`, `username`, `password`, `group_id`, `created`, `modified`) VALUES
(2, 'Emanuel Torres', 'emanueljtc', '0f010f79f9916e9165b62acc6637ec4434421239', 1, '2016-12-10', '2016-12-10'),
(9, 'Gustavo Torres', 'gust', '54e5fb1ff5b4037be9de16b285defaba1d497af2', 3, '2016-12-10', '2016-12-10'),
(11, 'Guillermo Ochoa', 'guille', '54e5fb1ff5b4037be9de16b285defaba1d497af2', 2, '2016-12-10', '2016-12-10');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `acos`
--
ALTER TABLE `acos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_acos_lft_rght` (`lft`,`rght`),
  ADD KEY `idx_acos_alias` (`alias`);

--
-- Indices de la tabla `antecedents`
--
ALTER TABLE `antecedents`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `aros`
--
ALTER TABLE `aros`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_aros_lft_rght` (`lft`,`rght`),
  ADD KEY `idx_aros_alias` (`alias`);

--
-- Indices de la tabla `aros_acos`
--
ALTER TABLE `aros_acos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ARO_ACO_KEY` (`aro_id`,`aco_id`),
  ADD KEY `idx_aco_id` (`aco_id`);

--
-- Indices de la tabla `charges`
--
ALTER TABLE `charges`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `citations`
--
ALTER TABLE `citations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `datecitations`
--
ALTER TABLE `datecitations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `diagnostics`
--
ALTER TABLE `diagnostics`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `historys`
--
ALTER TABLE `historys`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `nationalities`
--
ALTER TABLE `nationalities`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `people`
--
ALTER TABLE `people`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `prescriptions`
--
ALTER TABLE `prescriptions`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `studies`
--
ALTER TABLE `studies`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `typepayments`
--
ALTER TABLE `typepayments`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `acos`
--
ALTER TABLE `acos`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=167;
--
-- AUTO_INCREMENT de la tabla `antecedents`
--
ALTER TABLE `antecedents`
  MODIFY `id` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `aros`
--
ALTER TABLE `aros`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT de la tabla `aros_acos`
--
ALTER TABLE `aros_acos`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
--
-- AUTO_INCREMENT de la tabla `charges`
--
ALTER TABLE `charges`
  MODIFY `id` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `citations`
--
ALTER TABLE `citations`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `datecitations`
--
ALTER TABLE `datecitations`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `diagnostics`
--
ALTER TABLE `diagnostics`
  MODIFY `id` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `historys`
--
ALTER TABLE `historys`
  MODIFY `id` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `nationalities`
--
ALTER TABLE `nationalities`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `people`
--
ALTER TABLE `people`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `prescriptions`
--
ALTER TABLE `prescriptions`
  MODIFY `id` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `studies`
--
ALTER TABLE `studies`
  MODIFY `id` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `typepayments`
--
ALTER TABLE `typepayments`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
