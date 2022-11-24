-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-11-2022 a las 23:18:51
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `datosestudiantes`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `test_courses`
--

CREATE TABLE `test_courses` (
  `c_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL COMMENT 'Course name',
  `credits` smallint(6) DEFAULT 1 COMMENT 'Academic credits'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `test_courses`
--

INSERT INTO `test_courses` (`c_id`, `name`, `credits`) VALUES
(1, 'Open sea survival', 10),
(2, 'Genetic manipulation', 100),
(3, 'Crocodile training', 2),
(4, 'Advanced mapalé dancing', 4),
(5, 'Metaverse extreme sports', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `test_courses_x_student`
--

CREATE TABLE `test_courses_x_student` (
  `cxs_id` int(10) UNSIGNED NOT NULL,
  `c_id` int(10) UNSIGNED NOT NULL,
  `s_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `test_courses_x_student`
--

INSERT INTO `test_courses_x_student` (`cxs_id`, `c_id`, `s_id`) VALUES
(2, 1, 3),
(5, 4, 7),
(6, 5, 7),
(7, 1, 4),
(8, 1, 8),
(9, 2, 5),
(11, 5, 3),
(17, 3, 6),
(18, 5, 6),
(26, 2, 6),
(29, 4, 6),
(40, 2, 1),
(44, 5, 1),
(45, 1, 1),
(46, 3, 1),
(54, 1, 1),
(55, 2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `test_students`
--

CREATE TABLE `test_students` (
  `s_id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `lv_id` smallint(6) DEFAULT NULL COMMENT 'Level or grade',
  `group` varchar(5) DEFAULT NULL COMMENT 'Student group or classroom',
  `email` varchar(100) DEFAULT NULL,
  `phone_number` varchar(50) DEFAULT NULL,
  `geolocation` varchar(200) DEFAULT NULL COMMENT 'String containing latitude and longitude',
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '0=Inactive, 1=Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `test_students`
--

INSERT INTO `test_students` (`s_id`, `first_name`, `last_name`, `lv_id`, `group`, `email`, `phone_number`, `geolocation`, `status`) VALUES
(1, 'Aitor', 'Menta', 1, 'A', 'aitor@google.com', '3007076311', '10.253652685182912,-75.34695290787532', 1),
(2, 'Soila', 'Puerta del Corral', 1, 'B', 'sp@nasa.gov', '6244566', '10.249488499691639,-75.3477954475428', 1),
(3, 'Pere', 'Gil', 1, 'A', 'PERE@SAMSUNG.COM', '73563456', '10.249799123271258,-75.34925152563993', 0),
(4, 'Aquiles', 'Pinto Cuadros', 2, 'A', 'aquiles@amazon.com', '456345634', '-11.329163673002578,-101.05707217964823', 1),
(5, 'Aitor', 'Tilla', 2, 'A', 'aitor@fbi.gov', '5345355', '6.173310260137041,-75.33102681081111', 1),
(6, 'Elba', 'Surero', 2, 'B', 'elba@area51.org', '456654 ext 2', '10.250401717562466,-75.35398133602904', 1),
(7, 'Lola', 'Mento', 3, 'C', 'lola@facebook.com', '555555', '10.249548377811047,-75.34752227877071', 0),
(8, 'Helen', 'Chufe', 3, 'C', 'HELEN@APPLE.COM', '666666', '6.171133491565565,-75.33362885177205', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `test_courses`
--
ALTER TABLE `test_courses`
  ADD PRIMARY KEY (`c_id`);

--
-- Indices de la tabla `test_courses_x_student`
--
ALTER TABLE `test_courses_x_student`
  ADD PRIMARY KEY (`cxs_id`),
  ADD KEY `FK_test_1_idx` (`s_id`),
  ADD KEY `FK_test_2_idx` (`c_id`);

--
-- Indices de la tabla `test_students`
--
ALTER TABLE `test_students`
  ADD PRIMARY KEY (`s_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `test_courses`
--
ALTER TABLE `test_courses`
  MODIFY `c_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `test_courses_x_student`
--
ALTER TABLE `test_courses_x_student`
  MODIFY `cxs_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT de la tabla `test_students`
--
ALTER TABLE `test_students`
  MODIFY `s_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `test_courses_x_student`
--
ALTER TABLE `test_courses_x_student`
  ADD CONSTRAINT `FK_test_1` FOREIGN KEY (`s_id`) REFERENCES `test_students` (`s_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_test_2` FOREIGN KEY (`c_id`) REFERENCES `test_courses` (`c_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
