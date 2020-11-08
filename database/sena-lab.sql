-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 08-11-2020 a las 19:44:10
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sena-lab`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `incapacidades`
--

CREATE TABLE `incapacidades` (
  `id_incapacidades` int(11) NOT NULL,
  `nombre` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `telefono` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `correo` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mensaje` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `pdf` varchar(125) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `incapacidades`
--

INSERT INTO `incapacidades` (`id_incapacidades`, `nombre`, `telefono`, `correo`, `mensaje`, `pdf`) VALUES
(1, 'juan', '3057119159', 'jsdbhj@hejef.com', 'fsjhsukhjsk', 'assets/archivos/'),
(2, 'juan', '3057119159', 'jsdbhj@hejef.com', 'fsjhsukhjsk', 'assets/archivos/'),
(3, '', '', '', '', 'assets/archivos/'),
(4, 'juan', '3057119159', 'jsdbhj@hejef.com', 'sfsdf', 'assets/archivos/'),
(5, '', '', '', '', 'assets/archivos/'),
(6, 'diego', '3144237880', 'diegorojas.0510@gmail.com', 'hola', 'assets/archivos/'),
(7, '', '', 'diegorojas.0510@gmail.com', '', 'assets/archivos/'),
(8, '', '', 'diegorojas.0510@gmail.com', '', 'assets/archivos/'),
(9, '', '', 'd@gmail.com', '', 'assets/archivos/'),
(10, '', '', 'fla****rma***oj****otmail.com', '', 'assets/archivos/'),
(11, '', '', 'diegorojas.0510@gmail.com', '', 'assets/archivos/');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `id_rol` int(11) NOT NULL,
  `rol` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`id_rol`, `rol`) VALUES
(1, 'usuario'),
(2, 'administrador'),
(3, 'supervisor');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_contrato`
--

CREATE TABLE `tipo_contrato` (
  `id_tipo_contrato` int(11) NOT NULL,
  `tipo_contrato` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tipo_contrato`
--

INSERT INTO `tipo_contrato` (`id_tipo_contrato`, `tipo_contrato`) VALUES
(1, 'obra labor'),
(2, 'indefinido'),
(3, 'fijo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_documento`
--

CREATE TABLE `tipo_documento` (
  `id_tipo_documento` int(11) NOT NULL,
  `tipo_documento` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tipo_documento`
--

INSERT INTO `tipo_documento` (`id_tipo_documento`, `tipo_documento`) VALUES
(1, 'cedula de ciudadania'),
(2, 'cedula extranjera ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `fk_tipo_documento` int(11) NOT NULL,
  `fk_tipo_contrato` int(11) NOT NULL,
  `fk_rol` int(11) NOT NULL,
  `fk_incapacidades` int(11) NOT NULL,
  `nombre` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `apellido` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `correo` text COLLATE utf8_unicode_ci NOT NULL,
  `documento` int(25) NOT NULL,
  `password_user` varchar(35) COLLATE utf8_unicode_ci NOT NULL,
  `estado` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `foto` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `fk_tipo_documento`, `fk_tipo_contrato`, `fk_rol`, `fk_incapacidades`, `nombre`, `apellido`, `correo`, `documento`, `password_user`, `estado`, `foto`) VALUES
(5, 1, 2, 2, 0, 'diego', 'rojas', 'd@gmail.com', 1032369406, '12345', 'activo', ''),
(13, 1, 1, 1, 0, 'juan', 'rojas', 'j@gmail.com', 123456, '123', 'activo', ''),
(14, 1, 2, 3, 0, 'kevin', 'rojas', 'k@gmail.com', 1234565678, '123', 'activo', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `incapacidades`
--
ALTER TABLE `incapacidades`
  ADD PRIMARY KEY (`id_incapacidades`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `tipo_contrato`
--
ALTER TABLE `tipo_contrato`
  ADD PRIMARY KEY (`id_tipo_contrato`);

--
-- Indices de la tabla `tipo_documento`
--
ALTER TABLE `tipo_documento`
  ADD PRIMARY KEY (`id_tipo_documento`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `fk_tipo_documento` (`fk_tipo_documento`),
  ADD KEY `fk_tipo_contrato` (`fk_tipo_contrato`),
  ADD KEY `fk_rol` (`fk_rol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `incapacidades`
--
ALTER TABLE `incapacidades`
  MODIFY `id_incapacidades` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `id_rol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tipo_contrato`
--
ALTER TABLE `tipo_contrato`
  MODIFY `id_tipo_contrato` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tipo_documento`
--
ALTER TABLE `tipo_documento`
  MODIFY `id_tipo_documento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`fk_rol`) REFERENCES `rol` (`id_rol`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `usuario_ibfk_2` FOREIGN KEY (`fk_tipo_contrato`) REFERENCES `tipo_contrato` (`id_tipo_contrato`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `usuario_ibfk_3` FOREIGN KEY (`fk_tipo_documento`) REFERENCES `tipo_documento` (`id_tipo_documento`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
