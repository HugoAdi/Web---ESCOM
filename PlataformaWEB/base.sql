-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-06-2022 a las 23:49:26
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Base de datos: `base`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividad`
--

CREATE TABLE `actividad` (
  `Id` int(11) NOT NULL,
  `Nombre` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `Id` int(10) NOT NULL,
  `No.empleado` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `agenda`
--

CREATE TABLE `agenda` (
  `Id` int(11) NOT NULL,
  `hora` time NOT NULL,
  `fecha` date NOT NULL,
  `alumno` int(11) NOT NULL,
  `profesor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `agenda`
--

INSERT INTO `agenda` (`Id`, `hora`, `fecha`, `alumno`, `profesor`) VALUES
(1, '18:00:00', '2022-06-15', 2, 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE `alumno` (
  `Id` int(10) NOT NULL,
  `Progreso` decimal(10,0) NOT NULL,
  `Tutor` varchar(11) NOT NULL,
  `Boleta` int(11) NOT NULL,
  `Id_Grupo` int(11) NOT NULL,
  `Id_Bloque` int(11) NOT NULL,
  `Id_Actividad` int(11) NOT NULL,
  `Id_Material` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`Id`, `Progreso`, `Tutor`, `Boleta`, `Id_Grupo`, `Id_Bloque`, `Id_Actividad`, `Id_Material`) VALUES
(2, '0', 'Prueba', 2020938475, 2, 0, 0, 0),
(7, '0', '0', 201853251, 3, 0, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bloque`
--

CREATE TABLE `bloque` (
  `Id` int(11) NOT NULL,
  `Tema` text NOT NULL,
  `Nombre` text NOT NULL,
  `Id_Actividad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupo`
--

CREATE TABLE `grupo` (
  `Id` int(11) NOT NULL,
  `Profesor` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `grupo`
--

INSERT INTO `grupo` (`Id`, `Profesor`) VALUES
(1, 5),
(2, 6),
(3, 5),
(4, 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `material`
--

CREATE TABLE `material` (
  `Id` int(11) NOT NULL,
  `Nombre` text NOT NULL,
  `Tema` text NOT NULL,
  `Tipo` text NOT NULL,
  `Estatus` text NOT NULL,
  `Atendida` text DEFAULT NULL,
  `Observacion` text DEFAULT NULL,
  `Archivo` mediumblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `material`
--

INSERT INTO `material` (`Id`, `Nombre`, `Tema`, `Tipo`, `Estatus`, `Atendida`, `Observacion`, `Archivo`) VALUES
(1, 'Prueba', '1', 'Actividad', 'Publicado', NULL, NULL, 0x54656d6120312e68746d6c);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesor`
--

CREATE TABLE `profesor` (
  `Id` int(10) NOT NULL,
  `No_empleado` int(10) NOT NULL,
  `Id_grupo` int(11) NOT NULL,
  `Id_agenda` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `profesor`
--

INSERT INTO `profesor` (`Id`, `No_empleado`, `Id_grupo`, `Id_agenda`) VALUES
(6, 1234, 1, 12);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `Id` int(10) NOT NULL,
  `Nombre` text NOT NULL,
  `Nombre_usuario` text NOT NULL,
  `tipo_usuario` varchar(20) NOT NULL,
  `Contraseña` varchar(8) NOT NULL,
  `Telefono` int(10) NOT NULL,
  `CURP` varchar(18) NOT NULL,
  `Correo_electronico` text NOT NULL,
  `Correo_electronico_alterno` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`Id`, `Nombre`, `Nombre_usuario`, `tipo_usuario`, `Contraseña`, `Telefono`, `CURP`, `Correo_electronico`, `Correo_electronico_alterno`) VALUES
(1, 'Maria Fe', 'Raven', 'alumno', 'raven123', 717295135, '453252352', 'hola@prueba.com', 'hola2@prueba2.com'),
(2, 'prueba', 'Raven', 'alumno', 'raven123', 556182930, '453252352', 'prueba@gmail.com', 'hola2@prueba2.com'),
(3, 'AJAJAJ', 'JAJAJAJ', 'Administrador', 'JAJAJAJA', 54252, 'JAJAJAJA', 'JAJAJAJ', 'JAJAJA'),
(4, 'AJAJAJ', 'JAJAJAJ', 'Administrador', 'JAJAJAJA', 54252, 'JAJAJAJA', 'JAJAJAJ', 'JAJAJA'),
(5, 'Hugo Adi Jimenez Martinez', '83838', 'profesor', '123', 381581835, 'ufsdjsfdj', 'hgug', 'gjsgjsj'),
(6, 'Prueba', 'hola', 'profesor', '123', 551845289, 'iaiai', 'prueba@gmail.com', 'gsgsg'),
(7, 'alumno', 'aja', 'alumno', '123', 54525, 'abduzcan', 'alumno', 'algsfdg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `actividad`
--
ALTER TABLE `actividad`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `bloque`
--
ALTER TABLE `bloque`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `grupo`
--
ALTER TABLE `grupo`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `material`
--
ALTER TABLE `material`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `profesor`
--
ALTER TABLE `profesor`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `agenda`
--
ALTER TABLE `agenda`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `grupo`
--
ALTER TABLE `grupo`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `material`
--
ALTER TABLE `material`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD CONSTRAINT `administrador_ibfk_1` FOREIGN KEY (`Id`) REFERENCES `usuario` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD CONSTRAINT `alumno_ibfk_1` FOREIGN KEY (`Id`) REFERENCES `usuario` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `profesor`
--
ALTER TABLE `profesor`
  ADD CONSTRAINT `profesor_ibfk_1` FOREIGN KEY (`Id`) REFERENCES `usuario` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;
