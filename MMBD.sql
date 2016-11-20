-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 20-11-2016 a las 02:41:23
-- Versión del servidor: 5.7.16-0ubuntu0.16.04.1
-- Versión de PHP: 5.6.27-1+deb.sury.org~xenial+1

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
(1, 2, 'no pone musica', 'aburrido', 'siempre', 'muchos', 'quien sabe', 'varias', '2016-11-19', '2016-11-19'),
(3, 3, 'SueÃ±o', 'cansancio', '12', 'si', 'hugo', 'sssas', '2016-11-20', '2016-11-20');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `charges`
--

CREATE TABLE `charges` (
  `id` int(10) NOT NULL,
  `total_cost` int(10) NOT NULL,
  `person_id` int(10) NOT NULL,
  `quote_id` int(10) NOT NULL,
  `state_charge` varchar(50) NOT NULL,
  `type_payment` int(10) NOT NULL,
  `observations` text NOT NULL,
  `created` date NOT NULL,
  `modified` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `citations`
--

CREATE TABLE `citations` (
  `id` int(10) NOT NULL,
  `person_id` int(10) NOT NULL,
  `hour` time NOT NULL,
  `date` date NOT NULL,
  `created` date NOT NULL,
  `modified` date NOT NULL,
  `datecitation_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `citations`
--

INSERT INTO `citations` (`id`, `person_id`, `hour`, `date`, `created`, `modified`, `datecitation_id`) VALUES
(1, 2, '17:00:00', '2016-12-20', '2016-11-20', '2016-11-20', 1);

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
  `diagnostic` varchar(255) NOT NULL,
  `treatment_id` int(11) NOT NULL,
  `created` date NOT NULL,
  `modified` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `diagnostics`
--

INSERT INTO `diagnostics` (`id`, `diagnostic`, `treatment_id`, `created`, `modified`) VALUES
(1, 'calculo renal', 1, '2016-11-20', '2016-11-20');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dignostics_specialties`
--

CREATE TABLE `dignostics_specialties` (
  `id` int(10) NOT NULL,
  `dignostic_id` int(10) NOT NULL,
  `treament_id` int(10) NOT NULL,
  `history_id` int(10) NOT NULL,
  `specialitie_id` int(10) NOT NULL,
  `oncological_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `doctor_ specialties`
--

CREATE TABLE `doctor_ specialties` (
  `id` int(10) NOT NULL,
  `rol_id` int(11) NOT NULL,
  `specialtie_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `age` int(3) NOT NULL,
  `weight` int(10) NOT NULL,
  `height` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `historys`
--

INSERT INTO `historys` (`id`, `person_id`, `antecedent_id`, `age`, `weight`, `height`) VALUES
(1, 2, 1, 23, 234, 344),
(2, 3, 3, 26, 175, 2321);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `indications`
--

CREATE TABLE `indications` (
  `id` int(10) NOT NULL,
  `diagnostic_id` int(10) NOT NULL,
  `person_id` int(10) NOT NULL,
  `indication` varchar(255) NOT NULL,
  `created` date NOT NULL,
  `modified` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `indications`
--

INSERT INTO `indications` (`id`, `diagnostic_id`, `person_id`, `indication`, `created`, `modified`) VALUES
(1, 1, 2, 'Cada 8 horas', '2016-11-20', '2016-11-20');

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
-- Estructura de tabla para la tabla `oncologicals`
--

CREATE TABLE `oncologicals` (
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
  `age_birth_one` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `phone` int(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `rol_id` int(10) NOT NULL,
  `nationality_id` int(11) NOT NULL,
  `pass_app` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `people`
--

INSERT INTO `people` (`id`, `name`, `last_name`, `dni`, `gender`, `address`, `phone`, `email`, `rol_id`, `nationality_id`, `pass_app`) VALUES
(2, 'guillermo', 'ochoa', 21099, 'masculino', 'mcy', 12245, 'g@gf.com', 1, 1, NULL),
(3, 'Emanuel', 'Torres', 18971787, 'masculino', 'San juan ', 46231, 'emane@ds.com', 1, 1, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rols`
--

CREATE TABLE `rols` (
  `id` int(10) NOT NULL,
  `rol` varchar(20) NOT NULL,
  `created` date NOT NULL,
  `modified` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `rols`
--

INSERT INTO `rols` (`id`, `rol`, `created`, `modified`) VALUES
(1, 'doctor', '2016-11-19', '2016-11-19');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `specialties`
--

CREATE TABLE `specialties` (
  `id` int(10) NOT NULL,
  ` specialty` varchar(100) NOT NULL,
  `created` date NOT NULL,
  `modified` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `status_treament` int(10) NOT NULL,
  `treatment` varchar(100) NOT NULL,
  `observations_treaments` text NOT NULL,
  `created` date NOT NULL,
  `modified` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `treatments`
--

INSERT INTO `treatments` (`id`, `person_id`, `status_treament`, `treatment`, `observations_treaments`, `created`, `modified`) VALUES
(1, 2, 1, 'Rifoxina', 'cada 8 horas', '2016-11-20', '2016-11-20');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `types_payments`
--

CREATE TABLE `types_payments` (
  `id` int(10) NOT NULL,
  `type_payment` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Indices de la tabla `dignostics_specialties`
--
ALTER TABLE `dignostics_specialties`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `doctor_ specialties`
--
ALTER TABLE `doctor_ specialties`
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
-- Indices de la tabla `oncologicals`
--
ALTER TABLE `oncologicals`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `people`
--
ALTER TABLE `people`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `rols`
--
ALTER TABLE `rols`
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
-- Indices de la tabla `types_payments`
--
ALTER TABLE `types_payments`
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
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `charges`
--
ALTER TABLE `charges`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
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
-- AUTO_INCREMENT de la tabla `dignostics_specialties`
--
ALTER TABLE `dignostics_specialties`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `doctor_ specialties`
--
ALTER TABLE `doctor_ specialties`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
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
-- AUTO_INCREMENT de la tabla `oncologicals`
--
ALTER TABLE `oncologicals`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `people`
--
ALTER TABLE `people`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `rols`
--
ALTER TABLE `rols`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `specialties`
--
ALTER TABLE `specialties`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `studies`
--
ALTER TABLE `studies`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `treatments`
--
ALTER TABLE `treatments`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `types_payments`
--
ALTER TABLE `types_payments`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
