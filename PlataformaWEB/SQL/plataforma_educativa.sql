
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `actividades` (
  `id` int(10) NOT NULL,
  `nombre_actividad` varchar(50) NOT NULL,
  `pregunta` varchar(50) NOT NULL,
  `respuesta` varchar(50) NOT NULL,
  `opcion_1` varchar(50) NOT NULL,
  `opcion_2` varchar(50) NOT NULL,
  `opcion_3` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `admin` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `admin` (`id`) VALUES
(9),
(16);


CREATE TABLE `alumno` (
  `id` int(10) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `grupo` varchar(1) NOT NULL,
  `observaciones` varchar(30) NOT NULL,
  `boleta` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `ayuda` (
  `id` int(10) NOT NULL,
  `tema` varchar(30) NOT NULL,
  `subtema` varchar(30) NOT NULL,
  `estatus` varchar(30) NOT NULL,
  `atendida` varchar(30) NOT NULL,
  `observacion` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `contacto` (
  `id` int(10) NOT NULL,
  `nombre_completo` varchar(50) NOT NULL,
  `correo_principal` varchar(50) NOT NULL,
  `asunto` varchar(50) NOT NULL,
  `descripcion` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


CREATE TABLE `evaluacion` (
  `id` int(10) NOT NULL,
  `nombre_evaluacion` varchar(30) NOT NULL,
  `pregunta_1` varchar(50) NOT NULL,
  `respuesta_1` varchar(50) NOT NULL,
  `pregunta_2` varchar(50) NOT NULL,
  `respuesta_2` varchar(50) NOT NULL,
  `pregunta_3` varchar(50) NOT NULL,
  `respuesta_3` varchar(50) NOT NULL,
  `pregunta_4` varchar(50) NOT NULL,
  `respuesta_4` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `material` (
  `id` int(10) NOT NULL,
  `nombre_material` varchar(30) NOT NULL,
  `tipo` varchar(10) NOT NULL,
  `estatus` varchar(20) NOT NULL,
  `observaciones` varchar(30) NOT NULL,
  `archivo` mediumblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `preguntas_frecuentes` (
  `id` int(10) NOT NULL,
  `tema` varchar(50) NOT NULL,
  `correo_principal` varchar(50) NOT NULL,
  `detalle` varchar(120) NOT NULL,
  `atendida` varchar(2) NOT NULL,
  `observacion` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


CREATE TABLE `profesor` (
  `id` int(10) NOT NULL,
  `num_empleado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


CREATE TABLE `usuario` (
  `id` int(10) NOT NULL,
  `nombre_completo` varchar(50) NOT NULL,
  `correo_principal` varchar(50) NOT NULL,
  `correo_alterno` varchar(50) DEFAULT NULL,
  `usuario` varchar(20) NOT NULL,
  `contra` varchar(20) NOT NULL,
  `tipo_usuario` varchar(20) NOT NULL,
  `telefono` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


ALTER TABLE `actividades`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `alumno`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `ayuda`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `contacto`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `evaluacion`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `material`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `preguntas_frecuentes`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `profesor`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `actividades`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;


ALTER TABLE `ayuda`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;


ALTER TABLE `contacto`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

ALTER TABLE `evaluacion`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

ALTER TABLE `material`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;


ALTER TABLE `preguntas_frecuentes`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

ALTER TABLE `usuario`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;


ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`id`) REFERENCES `usuario` (`id`);


ALTER TABLE `alumno`
  ADD CONSTRAINT `alumno_ibfk_1` FOREIGN KEY (`id`) REFERENCES `usuario` (`id`);


ALTER TABLE `profesor`
  ADD CONSTRAINT `profesor_ibfk_1` FOREIGN KEY (`id`) REFERENCES `usuario` (`id`);
COMMIT;

