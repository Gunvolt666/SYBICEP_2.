-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-02-2019 a las 00:45:30
-- Versión del servidor: 10.1.33-MariaDB
-- Versión de PHP: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sybicep`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `id_admin` int(11) NOT NULL,
  `usuario` varchar(30) DEFAULT NULL,
  `contra_admin` varchar(20) DEFAULT NULL,
  `nombre` varchar(35) NOT NULL,
  `tipo` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`id_admin`, `usuario`, `contra_admin`, `nombre`, `tipo`) VALUES
(1, 'gunvolt', 'azure', '', ''),
(2, 'copen', 'blast', 'Akira', 'Admin'),
(3, 'GV', 'Gabriel Verduzco ', '123456', ''),
(4, 'Omae Wa', 'Mou Shindeiru', 'nani?!', ''),
(5, 'CJ', 'Carlos', '9999', ''),
(6, 'Kalari', 'Payattu', 'nene', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `id_alumno` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Telefono` varchar(30) NOT NULL,
  `Carrera` varchar(40) NOT NULL,
  `usuario_alumno` varchar(25) DEFAULT NULL,
  `pass_alumno` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`id_alumno`, `Nombre`, `Telefono`, `Carrera`, `usuario_alumno`, `pass_alumno`) VALUES
(8, 'Francisco', '3121340885', 'Licenciatura en Derecho', 'Gunvolt', '123456789');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros`
--

CREATE TABLE `libros` (
  `id_libro` int(11) NOT NULL,
  `tipo` varchar(35) DEFAULT NULL,
  `nombre_libro` varchar(40) DEFAULT NULL,
  `dias_pedido` varchar(20) DEFAULT NULL,
  `alumno_libro` varchar(30) DEFAULT NULL,
  `situacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `maestros`
--

CREATE TABLE `maestros` (
  `id_maestro` int(11) NOT NULL,
  `nombre` varchar(70) DEFAULT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `carrera` varchar(30) DEFAULT NULL,
  `usuario` varchar(35) DEFAULT NULL,
  `contra` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `maestros`
--

INSERT INTO `maestros` (`id_maestro`, `nombre`, `telefono`, `carrera`, `usuario`, `contra`) VALUES
(1, 'Gabriel Verduzco', '3121340885', 'Licenciatura en Derecho', 'GV', 'gunvolt'),
(2, 'Maria Acevedo Fierros', '3121340885', 'Criminologia', 'La Maria', '123456');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `qr`
--

CREATE TABLE `qr` (
  `id` int(11) NOT NULL,
  `qr` varchar(23) DEFAULT NULL,
  `libro` varchar(40) DEFAULT NULL,
  `tipo` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`id_alumno`);

--
-- Indices de la tabla `libros`
--
ALTER TABLE `libros`
  ADD PRIMARY KEY (`id_libro`);

--
-- Indices de la tabla `maestros`
--
ALTER TABLE `maestros`
  ADD PRIMARY KEY (`id_maestro`);

--
-- Indices de la tabla `qr`
--
ALTER TABLE `qr`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administrador`
--
ALTER TABLE `administrador`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `id_alumno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `libros`
--
ALTER TABLE `libros`
  MODIFY `id_libro` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `maestros`
--
ALTER TABLE `maestros`
  MODIFY `id_maestro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `qr`
--
ALTER TABLE `qr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
