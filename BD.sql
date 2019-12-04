-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:8889
-- Tiempo de generación: 04-12-2019 a las 03:29:28
-- Versión del servidor: 5.7.23
-- Versión de PHP: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de datos: `BDSGPT`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `adeudo`
--

CREATE TABLE `adeudo` (
  `id` int(8) NOT NULL,
  `estado` int(1) NOT NULL,
  `comentario` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `informegeneral`
--

CREATE TABLE `informegeneral` (
  `id` int(8) NOT NULL,
  `estado` int(1) NOT NULL,
  `comentario` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ingles`
--

CREATE TABLE `ingles` (
  `id` int(8) NOT NULL,
  `comentario` text NOT NULL,
  `estado` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Proyecto`
--

CREATE TABLE `Proyecto` (
  `id` int(11) NOT NULL,
  `nombrep` varchar(200) NOT NULL,
  `usuario` varchar(15) NOT NULL,
  `estadop` int(1) NOT NULL,
  `fecharevision` date NOT NULL,
  `comentarios` text NOT NULL,
  `asesor` varchar(50) NOT NULL,
  `revisor` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(8) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `NC` varchar(50) NOT NULL,
  `Password` varchar(128) NOT NULL,
  `Tipo` int(1) NOT NULL,
  `Semestre` int(1) NOT NULL,
  `Carrera` varchar(5) NOT NULL,
  `Email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `Name`, `NC`, `Password`, `Tipo`, `Semestre`, `Carrera`, `Email`) VALUES
(8, 'Luis Angel Mendoza', '15010457', '$2y$10$kRi66qFulTkOEdRGslStnend4.u0Wlxe/RW4Ibb3mPPIqg1O06CkK', 1, 9, 'ISC', 'manzanaalive@gmail.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `adeudo`
--
ALTER TABLE `adeudo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `informegeneral`
--
ALTER TABLE `informegeneral`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ingles`
--
ALTER TABLE `ingles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `Proyecto`
--
ALTER TABLE `Proyecto`
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
-- AUTO_INCREMENT de la tabla `adeudo`
--
ALTER TABLE `adeudo`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `informegeneral`
--
ALTER TABLE `informegeneral`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ingles`
--
ALTER TABLE `ingles`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `Proyecto`
--
ALTER TABLE `Proyecto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;