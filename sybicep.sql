-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-02-2019 a las 18:31:24
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
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `id_alumno` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Telefono` int(30) NOT NULL,
  `Carrera` varchar(40) NOT NULL,
  `usuario` varchar(25) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `libro` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`id_alumno`, `Nombre`, `Telefono`, `Carrera`, `usuario`, `password`, `libro`) VALUES
(8, 'Francisco', 2147483647, 'Licenciatura en Derecho', 'Gunvolt', '123456789', ''),
(9, 'Jessica', 0, '54644646', 'Cj', '123', ''),
(10, 'Jessica', 0, '54644646', 'Cj', '', ''),
(11, 'Francisco', 0, '3121340885', 'Gunvolt', '666', ''),
(12, 'Francisco', 0, '3121340885', 'Gunvolt', '123', ''),
(13, '', 0, '', '', '5554', ''),
(14, 'Jessica', 0, '54644646', 'Cj', '5555555', ''),
(15, 'Francisco', 0, '3121340885', 'Gunvolt', 'sddad', ''),
(16, 'Carlos', 0, '54644646', 'Cj', 'asasa', ''),
(17, 'Carlos', 0, '54644646', 'Cj', 'asasa', ''),
(18, 'Carlos', 0, '54644646', 'Cj', 'asasa', ''),
(19, 'Gabriel', 2147483647, 'Ingenieria en Sistemas', 'Gunvolt', '123456', ''),
(20, 'Impact Man', 0, '666666666', '', '', ''),
(21, 'Blast Man', 0, '555555', '', '', ''),
(22, 'Torch Man', 0, '44444', 'Torchman', '123', ''),
(23, '', 0, '', '', '', ''),
(24, '', 0, '', '', '', ''),
(25, '', 0, '', '', '', ''),
(26, '', 0, '', '', '', ''),
(27, '', 0, '', '', '', ''),
(28, 'Francisco', 0, '44444444444', 'cisco', '123', ''),
(29, 'Francisco', 0, '44444444444', 'cisco', '', ''),
(30, 'Grayson', 0, '0016199710401', 'Gray', '123', ''),
(31, '', 0, '', '', '', ''),
(32, '', 0, '', '', '', ''),
(33, 'Acid Man', 0, '123456', 'AcidMan', '89', ''),
(34, 'Acid Man', 0, '123456', 'AcidMan', '89', ''),
(35, 'Bounce Man', 555555, 'Derecho', 'RubberMan', '456', ''),
(36, 'Tundra Man', 555555, 'Ingenieria en Gestion Empresarial', 'Tundaraman', '666', ''),
(37, 'Tundra Man', 555555, 'Ingenieria en Gestion Empresarial', 'Tundaraman', 'd41d8cd98f00b204e980', ''),
(38, 'Fuse Man', 99999, 'Ingenieria en Gestion Empresarial', 'Fusiuman', '250cf8b51c773f3f8dc8', ''),
(39, 'Fuse Man', 99999, 'Ingenieria en Gestion Empresarial', 'Fusiuman', '890cfb91826d315a5623b8a3881275', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno_libros`
--

CREATE TABLE `alumno_libros` (
  `id_registro` int(11) NOT NULL,
  `id_alumno` int(9) DEFAULT NULL,
  `id_libro` int(9) DEFAULT NULL,
  `status` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `alumno_libros`
--

INSERT INTO `alumno_libros` (`id_registro`, `id_alumno`, `id_libro`, `status`) VALUES
(1, 8, 2, 0),
(2, 19, 3, 1);

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
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `libros`
--

INSERT INTO `libros` (`id_libro`, `tipo`, `nombre_libro`, `dias_pedido`, `alumno_libro`, `status`) VALUES
(1, 'Ingenieria en Sistemas', 'Fundamentos de Software', '2', 'Francisco', 0),
(2, 'Licenciatura en Derecho', 'Legislacion Informatica en Mexico', '2', 'Elizabeth', 0),
(3, 'Omae Wa', 'Mou', 'Shindeiru', 'Nani', 1);

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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `usuario` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `privilegio` int(2) NOT NULL,
  `fecha_registro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `usuario`, `password`, `privilegio`, `fecha_registro`) VALUES
(1, 'Gabriel', 'gunvolt', '123456', 2, '0000-00-00 00:00:00'),
(2, 'Francisco', 'Rockman', '37cbd7b9a37e8edd1a4ae1f2854bf3e4', 1, '0000-00-00 00:00:00'),
(3, 'Cris', 'Rockman', 'zhayra', 1, '2019-02-18 16:01:54');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`id_alumno`);

--
-- Indices de la tabla `alumno_libros`
--
ALTER TABLE `alumno_libros`
  ADD PRIMARY KEY (`id_registro`);

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
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `id_alumno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT de la tabla `alumno_libros`
--
ALTER TABLE `alumno_libros`
  MODIFY `id_registro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `libros`
--
ALTER TABLE `libros`
  MODIFY `id_libro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
