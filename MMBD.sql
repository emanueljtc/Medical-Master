-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 10-12-2016 a las 18:02:08
-- Versión del servidor: 5.7.16-0ubuntu0.16.04.1
-- Versión de PHP: 5.6.28-2+deb.sury.org~xenial+1

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
(1, NULL, NULL, NULL, 'controllers', 1, 226),
(2, 1, NULL, NULL, 'Antecedents', 2, 13),
(3, 2, NULL, NULL, 'index', 3, 4),
(4, 2, NULL, NULL, 'view', 5, 6),
(5, 2, NULL, NULL, 'add', 7, 8),
(6, 2, NULL, NULL, 'edit', 9, 10),
(7, 2, NULL, NULL, 'delete', 11, 12),
(8, 1, NULL, NULL, 'Back', 14, 31),
(9, 8, NULL, NULL, 'startup', 15, 16),
(10, 8, NULL, NULL, 'out', 17, 18),
(11, 8, NULL, NULL, 'err', 19, 20),
(12, 8, NULL, NULL, 'aco_sync', 21, 22),
(13, 8, NULL, NULL, 'aco_update', 23, 24),
(14, 8, NULL, NULL, 'getControllerList', 25, 26),
(15, 8, NULL, NULL, 'verify', 27, 28),
(16, 8, NULL, NULL, 'recover', 29, 30),
(17, 1, NULL, NULL, 'Charges', 32, 43),
(18, 17, NULL, NULL, 'index', 33, 34),
(19, 17, NULL, NULL, 'view', 35, 36),
(20, 17, NULL, NULL, 'add', 37, 38),
(21, 17, NULL, NULL, 'edit', 39, 40),
(22, 17, NULL, NULL, 'delete', 41, 42),
(23, 1, NULL, NULL, 'Citations', 44, 55),
(24, 23, NULL, NULL, 'index', 45, 46),
(25, 23, NULL, NULL, 'view', 47, 48),
(26, 23, NULL, NULL, 'add', 49, 50),
(27, 23, NULL, NULL, 'edit', 51, 52),
(28, 23, NULL, NULL, 'delete', 53, 54),
(29, 1, NULL, NULL, 'Datecitations', 56, 67),
(30, 29, NULL, NULL, 'index', 57, 58),
(31, 29, NULL, NULL, 'view', 59, 60),
(32, 29, NULL, NULL, 'add', 61, 62),
(33, 29, NULL, NULL, 'edit', 63, 64),
(34, 29, NULL, NULL, 'delete', 65, 66),
(35, 1, NULL, NULL, 'Diagnostics', 68, 79),
(36, 35, NULL, NULL, 'index', 69, 70),
(37, 35, NULL, NULL, 'view', 71, 72),
(38, 35, NULL, NULL, 'add', 73, 74),
(39, 35, NULL, NULL, 'edit', 75, 76),
(40, 35, NULL, NULL, 'delete', 77, 78),
(41, 1, NULL, NULL, 'Groups', 80, 93),
(42, 41, NULL, NULL, 'index', 81, 82),
(43, 41, NULL, NULL, 'view', 83, 84),
(44, 41, NULL, NULL, 'add', 85, 86),
(45, 41, NULL, NULL, 'edit', 87, 88),
(46, 41, NULL, NULL, 'delete', 89, 90),
(47, 41, NULL, NULL, 'parentNode', 91, 92),
(48, 1, NULL, NULL, 'Histories', 94, 105),
(49, 48, NULL, NULL, 'index', 95, 96),
(50, 48, NULL, NULL, 'view', 97, 98),
(51, 48, NULL, NULL, 'add', 99, 100),
(52, 48, NULL, NULL, 'edit', 101, 102),
(53, 48, NULL, NULL, 'delete', 103, 104),
(54, 1, NULL, NULL, 'Indications', 106, 117),
(55, 54, NULL, NULL, 'index', 107, 108),
(56, 54, NULL, NULL, 'view', 109, 110),
(57, 54, NULL, NULL, 'add', 111, 112),
(58, 54, NULL, NULL, 'edit', 113, 114),
(59, 54, NULL, NULL, 'delete', 115, 116),
(60, 1, NULL, NULL, 'Nationalities', 118, 129),
(61, 60, NULL, NULL, 'index', 119, 120),
(62, 60, NULL, NULL, 'view', 121, 122),
(63, 60, NULL, NULL, 'add', 123, 124),
(64, 60, NULL, NULL, 'edit', 125, 126),
(65, 60, NULL, NULL, 'delete', 127, 128),
(66, 1, NULL, NULL, 'Pages', 130, 133),
(67, 66, NULL, NULL, 'display', 131, 132),
(68, 1, NULL, NULL, 'People', 134, 147),
(69, 68, NULL, NULL, 'index', 135, 136),
(70, 68, NULL, NULL, 'view', 137, 138),
(71, 68, NULL, NULL, 'api', 139, 140),
(72, 68, NULL, NULL, 'add', 141, 142),
(73, 68, NULL, NULL, 'edit', 143, 144),
(74, 68, NULL, NULL, 'delete', 145, 146),
(75, 1, NULL, NULL, 'Specialties', 148, 159),
(76, 75, NULL, NULL, 'index', 149, 150),
(77, 75, NULL, NULL, 'view', 151, 152),
(78, 75, NULL, NULL, 'add', 153, 154),
(79, 75, NULL, NULL, 'edit', 155, 156),
(80, 75, NULL, NULL, 'delete', 157, 158),
(81, 1, NULL, NULL, 'Studies', 160, 171),
(82, 81, NULL, NULL, 'index', 161, 162),
(83, 81, NULL, NULL, 'view', 163, 164),
(84, 81, NULL, NULL, 'add', 165, 166),
(85, 81, NULL, NULL, 'edit', 167, 168),
(86, 81, NULL, NULL, 'delete', 169, 170),
(87, 1, NULL, NULL, 'Treatments', 172, 183),
(88, 87, NULL, NULL, 'index', 173, 174),
(89, 87, NULL, NULL, 'view', 175, 176),
(90, 87, NULL, NULL, 'add', 177, 178),
(91, 87, NULL, NULL, 'edit', 179, 180),
(92, 87, NULL, NULL, 'delete', 181, 182),
(93, 1, NULL, NULL, 'Typepayments', 184, 195),
(94, 93, NULL, NULL, 'index', 185, 186),
(95, 93, NULL, NULL, 'view', 187, 188),
(96, 93, NULL, NULL, 'add', 189, 190),
(97, 93, NULL, NULL, 'edit', 191, 192),
(98, 93, NULL, NULL, 'delete', 193, 194),
(99, 1, NULL, NULL, 'Users', 196, 213),
(100, 99, NULL, NULL, 'login', 197, 198),
(101, 99, NULL, NULL, 'logout', 199, 200),
(102, 99, NULL, NULL, 'index', 201, 202),
(103, 99, NULL, NULL, 'view', 203, 204),
(104, 99, NULL, NULL, 'add', 205, 206),
(105, 99, NULL, NULL, 'edit', 207, 208),
(106, 99, NULL, NULL, 'delete', 209, 210),
(107, 99, NULL, NULL, 'peligro', 211, 212),
(108, 1, NULL, NULL, 'AclExtras', 214, 215),
(109, 1, NULL, NULL, 'CakePdf', 216, 217),
(110, 1, NULL, NULL, 'DebugKit', 218, 225),
(111, 110, NULL, NULL, 'ToolbarAccess', 219, 224),
(112, 111, NULL, NULL, 'history_state', 220, 221),
(113, 111, NULL, NULL, 'sql_explain', 222, 223);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `antecedents`
--

CREATE TABLE `antecedents` (
  `id` int(10) NOT NULL,
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
(1, 2, 1, 'Diesvio', 'hereditario', '18', 'si', 'Luis MuÃ±os', 'Si', '2016-11-19', '2016-12-08'),
(5, 3, 3, 'Antimatismo', 'Heridario', '10', 'si', 'Palo Verltran', 'No', '2016-12-07', '2016-12-08');

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
(32, 3, 101, '1', '1', '1', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `charges`
--

CREATE TABLE `charges` (
  `id` int(10) NOT NULL,
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
(1, 5000, 2, 1, 'Pago', 3, 'optimo', '2016-12-06', '2016-12-06');

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
  `id` int(10) NOT NULL,
  `size_boobs` varchar(100) NOT NULL,
  `form_boobs` varchar(100) NOT NULL,
  `symmetry_boobs` varchar(100) NOT NULL,
  `skin_boobs` varchar(100) NOT NULL,
  `cap_boobs` varchar(100) NOT NULL,
  `pussy` varchar(100) NOT NULL,
  `neck_pussy` varchar(100) NOT NULL,
  `coloscopia` varchar(100) NOT NULL,
  `ano_ straight` varchar(100) NOT NULL,
  `head_neck` varchar(100) NOT NULL,
  `touch_tumor` varchar(100) NOT NULL,
  `form_tumor` varchar(100) NOT NULL,
  `surface_tumor` varchar(100) NOT NULL,
  `contour_tumor` varchar(100) NOT NULL,
  `axis_tumor` varchar(100) NOT NULL,
  `consistency_tumor` varchar(100) NOT NULL,
  `laringoscopia` varchar(100) NOT NULL,
  `menarguia` varchar(100) NOT NULL,
  `reglas` varchar(100) NOT NULL,
  `prs` varchar(100) NOT NULL,
  `companion_sexual` varchar(100) NOT NULL,
  `distance_cap` varchar(100) NOT NULL,
  `gestas` varchar(100) NOT NULL,
  `rsi` varchar(100) NOT NULL,
  `paras` varchar(100) NOT NULL,
  `abdomen` varchar(100) NOT NULL,
  `misbirth` varchar(100) NOT NULL,
  `gynecological_vulva` varchar(100) NOT NULL,
  `cesareans` varchar(100) NOT NULL,
  `age_birth_one` int(3) NOT NULL,
  `diagnostico` text NOT NULL,
  `person_id` int(11) NOT NULL,
  `history_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `diagnostics`
--

INSERT INTO `diagnostics` (`id`, `size_boobs`, `form_boobs`, `symmetry_boobs`, `skin_boobs`, `cap_boobs`, `pussy`, `neck_pussy`, `coloscopia`, `ano_ straight`, `head_neck`, `touch_tumor`, `form_tumor`, `surface_tumor`, `contour_tumor`, `axis_tumor`, `consistency_tumor`, `laringoscopia`, `menarguia`, `reglas`, `prs`, `companion_sexual`, `distance_cap`, `gestas`, `rsi`, `paras`, `abdomen`, `misbirth`, `gynecological_vulva`, `cesareans`, `age_birth_one`, `diagnostico`, `person_id`, `history_id`) VALUES
(1, '38', 'Redondas', 'perfectas', 'suave', 'si', 'ufff', 'si', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'si', 'no', 'si', '8', '10', 'no', 'no', 'no', 'si', 'no', 'no', 12, 'Perfecto estado', 2, 1);

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
  `id` int(10) NOT NULL,
  `person_id` int(10) NOT NULL,
  `born_date` varchar(255) NOT NULL,
  `age` int(3) NOT NULL,
  `weight` int(10) NOT NULL,
  `height` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `historys`
--

INSERT INTO `historys` (`id`, `person_id`, `born_date`, `age`, `weight`, `height`) VALUES
(1, 2, '04-07-1990', 26, 234, 344),
(3, 3, '04-07-1990', 26, 55, 175);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `indications`
--

CREATE TABLE `indications` (
  `id` int(10) NOT NULL,
  `diagnostic_id` int(10) NOT NULL,
  `treatment_id` int(10) NOT NULL,
  `person_id` int(10) NOT NULL,
  `indication` varchar(255) NOT NULL,
  `created` date NOT NULL,
  `modified` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `indications`
--

INSERT INTO `indications` (`id`, `diagnostic_id`, `treatment_id`, `person_id`, `indication`, `created`, `modified`) VALUES
(4, 1, 3, 2, 'Cada 8 horas', '2016-12-08', '2016-12-08');

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
  `phone` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nationality_id` int(11) NOT NULL,
  `pass_app` varchar(15) DEFAULT NULL,
  `token` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `people`
--

INSERT INTO `people` (`id`, `name`, `last_name`, `dni`, `gender`, `address`, `phone`, `email`, `nationality_id`, `pass_app`, `token`) VALUES
(2, 'Guillermo', 'Ochoa', 21099, 'Masculino', 'Maracay', '12245', 'g@gf.com', 1, '123', '5lYxFE2MLGANQUIkpqliavPBk'),
(3, 'Emanuel', 'Torres', 18971787, 'masculino', 'San Juan de los Morros', '46231', 'emane@ds.com', 1, '111', 'JCr3SB7D9z4m0bUX50kFIvrpR'),
(4, 'jhkj', 'jhjkh', 133235445, 'Femenino', 'jhgjhyujyjhg', '4343543453', 'ghg@g.com', 1, '123', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `studies`
--

CREATE TABLE `studies` (
  `id` int(10) NOT NULL,
  `diagnostic_id` int(10) NOT NULL,
  `person_id` int(10) NOT NULL,
  `name_studie` varchar(50) NOT NULL,
  `observations` text NOT NULL,
  `created` date NOT NULL,
  `modified` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `treatments`
--

CREATE TABLE `treatments` (
  `id` int(10) NOT NULL,
  `person_id` int(10) NOT NULL,
  `diagnostic_id` int(10) NOT NULL,
  `status_treament` varchar(10) NOT NULL,
  `prescription` varchar(100) NOT NULL,
  `observations_prescription` text,
  `created` date NOT NULL,
  `modified` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `treatments`
--

INSERT INTO `treatments` (`id`, `person_id`, `diagnostic_id`, `status_treament`, `prescription`, `observations_prescription`, `created`, `modified`) VALUES
(3, 2, 1, 'Suspendido', 'Rifoxina', '', '2016-12-07', '2016-12-08'),
(5, 3, 1, 'Activo', 'Broxol', 'Cada 6 Horas', '2016-12-08', '2016-12-08');

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
  `foto` varchar(255) NOT NULL,
  `foto_dir` varchar(255) NOT NULL,
  `group_id` int(10) NOT NULL,
  `created` date NOT NULL,
  `modified` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `full_name`, `username`, `password`, `foto`, `foto_dir`, `group_id`, `created`, `modified`) VALUES
(2, 'Emanuel Torres', 'emanueljtc', '0f010f79f9916e9165b62acc6637ec4434421239', 'yoperfil2.jpg', '2', 1, '2016-12-10', '2016-12-10'),
(9, 'Gustavo Torres', 'gust', '54e5fb1ff5b4037be9de16b285defaba1d497af2', 'jetter.jpg', '9', 3, '2016-12-10', '2016-12-10'),
(11, 'Guillermo Ochoa', 'guille', '54e5fb1ff5b4037be9de16b285defaba1d497af2', 'Graduado-Birrete-83978.gif', '11', 2, '2016-12-10', '2016-12-10');

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
-- Indices de la tabla `indications`
--
ALTER TABLE `indications`
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
-- Indices de la tabla `studies`
--
ALTER TABLE `studies`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `treatments`
--
ALTER TABLE `treatments`
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
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;
--
-- AUTO_INCREMENT de la tabla `antecedents`
--
ALTER TABLE `antecedents`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `aros`
--
ALTER TABLE `aros`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT de la tabla `aros_acos`
--
ALTER TABLE `aros_acos`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT de la tabla `charges`
--
ALTER TABLE `charges`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
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
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `historys`
--
ALTER TABLE `historys`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `indications`
--
ALTER TABLE `indications`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `nationalities`
--
ALTER TABLE `nationalities`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `people`
--
ALTER TABLE `people`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `studies`
--
ALTER TABLE `studies`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `treatments`
--
ALTER TABLE `treatments`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
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
