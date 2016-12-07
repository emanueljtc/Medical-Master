-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 07-12-2016 a las 18:49:38
-- Versión del servidor: 5.7.16-0ubuntu0.16.04.1
-- Versión de PHP: 5.6.28-1+deb.sury.org~xenial+1

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
-- Estructura de tabla para la tabla `antecedents`
--

CREATE TABLE `antecedents` (
  `id` int(10) NOT NULL,
  `person_id` int(10) NOT NULL,
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

INSERT INTO `antecedents` (`id`, `person_id`, `name_antecendent`, `origin`, `time_ suffering`, `family`, `personals_doctors`, `surgicals`, `created`, `modified`) VALUES
(1, 2, 'Diesvio', 'hereditario', '18', 'muchos', 'quien ', 'Si', '2016-11-19', '2016-12-07'),
(5, 3, 'Antimatismo', 'Heridario', '10', 'si', 'Palo Verltran', 'No', '2016-12-07', '2016-12-07');

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
  `date_hour` datetime NOT NULL,
  `datecitation_id` int(11) NOT NULL,
  `created` date NOT NULL,
  `modified` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(1, 'activo'),
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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historys`
--

CREATE TABLE `historys` (
  `id` int(10) NOT NULL,
  `person_id` int(10) NOT NULL,
  `antecedent_id` int(10) NOT NULL,
  `born_date` varchar(255) NOT NULL,
  `age` int(3) NOT NULL,
  `weight` int(10) NOT NULL,
  `height` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `historys`
--

INSERT INTO `historys` (`id`, `person_id`, `antecedent_id`, `born_date`, `age`, `weight`, `height`) VALUES
(1, 2, 1, '04-07-1990', 26, 234, 344);

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
(1, 1, 1, 2, 'Cada 8 horas', '2016-11-20', '2016-11-29');

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
(2, 'Guillermo', 'Ochoa', 21099, 'Masculino', 'Maracay', '12245', 'g@gf.com', 1, '123', 'spE149EgmtsdbDuVMAXxiacjr'),
(3, 'Emanuel', 'Torres', 18971787, 'masculino', 'San Juan de los Morros', '46231', 'emane@ds.com', 1, '111', 'JCr3SB7D9z4m0bUX50kFIvrpR');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `specialties`
--

CREATE TABLE `specialties` (
  `id` int(10) NOT NULL,
  `specialty` varchar(100) NOT NULL,
  `created` date NOT NULL,
  `modified` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `specialties`
--

INSERT INTO `specialties` (`id`, `specialty`, `created`, `modified`) VALUES
(2, 'N/A', '2016-11-30', '2016-11-30'),
(3, 'Oncologo', '2016-11-30', '2016-11-30');

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

--
-- Volcado de datos para la tabla `studies`
--

INSERT INTO `studies` (`id`, `diagnostic_id`, `person_id`, `name_studie`, `observations`, `created`, `modified`) VALUES
(1, 1, 2, 'Rayo X', 'zona abdominal', '2016-12-06', '2016-12-06');

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
(3, 2, 1, '1', 'Rifoxina', '12 horas', '2016-12-07', '2016-12-07');

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
  `specialty_id` int(10) NOT NULL,
  `group_id` int(10) NOT NULL,
  `created` date NOT NULL,
  `modified` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `antecedents`
--
ALTER TABLE `antecedents`
  ADD PRIMARY KEY (`id`);

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
-- Indices de la tabla `specialties`
--
ALTER TABLE `specialties`
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
-- AUTO_INCREMENT de la tabla `antecedents`
--
ALTER TABLE `antecedents`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `charges`
--
ALTER TABLE `charges`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `citations`
--
ALTER TABLE `citations`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `historys`
--
ALTER TABLE `historys`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `indications`
--
ALTER TABLE `indications`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `nationalities`
--
ALTER TABLE `nationalities`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `people`
--
ALTER TABLE `people`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `specialties`
--
ALTER TABLE `specialties`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `studies`
--
ALTER TABLE `studies`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `treatments`
--
ALTER TABLE `treatments`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `typepayments`
--
ALTER TABLE `typepayments`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
