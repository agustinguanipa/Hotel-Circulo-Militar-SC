-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-07-2021 a las 23:12:39
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `hotel`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulos`
--

CREATE TABLE `articulos` (
  `cod_art` char(8) NOT NULL,
  `nom_art` char(30) NOT NULL,
  `pre_art` int(11) DEFAULT NULL,
  `sta_art` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `articulos`
--

INSERT INTO `articulos` (`cod_art`, `nom_art`, `pre_art`, `sta_art`) VALUES
('m56', 'tv', NULL, 'A'),
('m57', 'cama', 100, 'A'),
('m58', 'mesita', 20, 'A'),
('m59', 'litera', 200, 'A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carro`
--

CREATE TABLE `carro` (
  `pla_car` char(10) NOT NULL,
  `fky_cli` char(8) NOT NULL,
  `mar_car` char(40) NOT NULL,
  `mol_car` char(30) DEFAULT NULL,
  `ano_car` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `chucuta`
--

CREATE TABLE `chucuta` (
  `ocupacion` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `chucuta`
--

INSERT INTO `chucuta` (`ocupacion`, `total`) VALUES
(23, 1000),
(29, 1010),
(30, 33),
(32, 1000),
(33, 1000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL,
  `fky_per` char(8) NOT NULL,
  `fky_tcli` char(8) NOT NULL,
  `ciu_cli` char(80) NOT NULL,
  `pro_cli` char(80) NOT NULL,
  `aco_cli` char(80) DEFAULT NULL,
  `sta_cli` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id`, `fky_per`, `fky_tcli`, `ciu_cli`, `pro_cli`, `aco_cli`, `sta_cli`) VALUES
(2, '21321312', 'tcl02', 'venezuela', 'iingeniero', '21', 'A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_est`
--

CREATE TABLE `detalle_est` (
  `id` int(11) NOT NULL,
  `fky_ser` char(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_habi`
--

CREATE TABLE `detalle_habi` (
  `id` int(11) NOT NULL,
  `fky_hab` int(11) NOT NULL,
  `fky_art` char(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `detalle_habi`
--

INSERT INTO `detalle_habi` (`id`, `fky_hab`, `fky_art`) VALUES
(1, 0, 'm56'),
(6, 2, 'm58'),
(7, 2, 'm59');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_ocup`
--

CREATE TABLE `detalle_ocup` (
  `cod` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `fky_ser` char(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `detalle_ocup`
--

INSERT INTO `detalle_ocup` (`cod`, `id`, `fky_ser`) VALUES
(7, 23, '01'),
(8, 23, 'mc'),
(9, 23, 'mc'),
(10, 23, '5'),
(11, 23, '5'),
(12, 23, '5'),
(13, 23, '01'),
(14, 23, '01'),
(15, 23, '5'),
(16, 23, '01'),
(17, 23, '01'),
(18, 23, '5'),
(19, 23, '5'),
(20, 23, '5'),
(21, 23, '5'),
(22, 23, '5'),
(23, 23, '5'),
(24, 23, 'mc'),
(25, 24, '01'),
(26, 24, '5'),
(27, 25, '01'),
(28, 25, '5'),
(29, 26, '01'),
(30, 26, '5'),
(31, 27, '01'),
(32, 27, '5'),
(33, 28, '5'),
(34, 28, '01'),
(35, 29, '5'),
(36, 30, '01');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estancia`
--

CREATE TABLE `estancia` (
  `id` int(11) NOT NULL,
  `fky_hab` int(11) DEFAULT NULL,
  `fky_cli` char(8) NOT NULL,
  `fec_ini` date DEFAULT NULL,
  `fec_fin` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `estancia`
--

INSERT INTO `estancia` (`id`, `fky_hab`, `fky_cli`, `fec_ini`, `fec_fin`) VALUES
(1, 1, '25218561', '2021-07-11', '2021-07-30'),
(2, 0, '25218561', '2021-07-01', '2021-07-07'),
(3, 1, '25218561', '2021-07-19', '2021-07-19'),
(4, 5, '25218561', '2021-07-12', '2021-07-29'),
(5, 8, '26039016', '2021-07-07', '2021-07-21');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `habitacion`
--

CREATE TABLE `habitacion` (
  `id` int(11) NOT NULL,
  `fky_tih` char(8) NOT NULL,
  `pre_hab` int(11) NOT NULL,
  `des_hab` char(50) NOT NULL,
  `sta_hab` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `habitacion`
--

INSERT INTO `habitacion` (`id`, `fky_tih`, `pre_hab`, `des_hab`, `sta_hab`) VALUES
(0, 'h01', 1000, '', 'A'),
(1, 'h01', 1000, '', 'R'),
(2, 'h01', 1000, '', 'I'),
(5, 'h01', 1000, '', 'R'),
(6, 'h01', 30, 'bonita', 'A'),
(7, 'h01', 50, 'normal', 'M'),
(8, 'h01', 100, '', 'R'),
(10, 'h01', 1000, '', 'A'),
(11, 'h01', 1000, 'bien', 'A'),
(12, 'h01', 2000, 'mal', 'A'),
(13, 'h01', 2000, 'chibo', 'A'),
(14, 'h01', 1000, 'mmal', 'A'),
(15, 'h01', 2500, 'bien', 'A'),
(16, 'h01', 1200, 'bien', 'A'),
(42, 'h01', 2000, 'klnjkn', 'A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ocupada`
--

CREATE TABLE `ocupada` (
  `id` int(11) NOT NULL,
  `fky_cli` char(8) NOT NULL,
  `fky_hab` int(11) NOT NULL,
  `sta_ocu` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ocupada`
--

INSERT INTO `ocupada` (`id`, `fky_cli`, `fky_hab`, `sta_ocu`) VALUES
(21, '25218561', 0, 'D'),
(22, '25218561', 0, 'D'),
(23, '25218561', 0, 'D'),
(24, '25218561', 0, 'D'),
(25, '25218561', 6, 'D'),
(26, '25218561', 0, 'D'),
(27, '25218561', 6, 'D'),
(28, '25218561', 5, 'D'),
(29, '25218561', 5, 'D'),
(30, '27459243', 6, 'D');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas`
--

CREATE TABLE `personas` (
  `ced_per` char(8) NOT NULL,
  `nom1_per` char(30) NOT NULL,
  `nom2_per` char(30) DEFAULT NULL,
  `ape1_per` char(30) NOT NULL,
  `ape2_per` char(30) DEFAULT NULL,
  `tel1_per` char(11) NOT NULL,
  `tel2_per` char(11) DEFAULT NULL,
  `cor_per` char(50) NOT NULL,
  `sta_per` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `personas`
--

INSERT INTO `personas` (`ced_per`, `nom1_per`, `nom2_per`, `ape1_per`, `ape2_per`, `tel1_per`, `tel2_per`, `cor_per`, `sta_per`) VALUES
('124578', 'julian', 'alberto', 'Mariño', 'josefina', '141', '14141', 'julian@gmail.com', 'A'),
('14502387', 'esthela', 'tibisay', 'suarez', 'salcedo', '04247796348', '02763944293', 'tibi28@gmail.com', 'A'),
('14627276', 'Neidy', 'Maria', 'Contreras', 'Villasmil', '1414', '1414', 'neidy@gmail.com', 'A'),
('21321312', 'Alexis', 'Jesus', 'Arias Fuentes', 'Arisa', '123232131', '213123123', 'jaaf998@gmail.com', 'A'),
('25218561', 'jefferson', 'daniel', 'martine', 'ortiz', '7672372', NULL, 'jeffersonmartinez.3061@gmail.com', 'A'),
('26039016', 'Eduardo', 'Jesus', 'Arias', 'Fuentes', '04243512701', '0243512701', 'eanox998@gmail.com', 'A'),
('26404237', 'henry', 'alberto', 'romero', 'maldonado', '04126837777', NULL, 'maldonadohenry57@gmail.com', 'A'),
('26543901', 'Glizabeth', 'Yanulsy', 'Padron', 'bez', '47474', '4747', 'gliza@gmal.com', 'A'),
('27459243', 'yeison', 'alejandro', 'suarez', 'salcedo', '12121212', '', 'armando@gmail.com', 'A'),
('45151514', 'Maria', 'Laura', 'nava', 'rivera', '787878', '878787', 'mari@gmail.com', 'A'),
('9145710', 'maria', 'laura', 'alvaray', 'rovallo', '12121212', '', 'armando@gmail.com', 'A'),
('asdasda', 'jose', '', 'marquez', '', '04241598763', '', '', 'A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicio`
--

CREATE TABLE `servicio` (
  `id` char(8) NOT NULL,
  `nom_se` char(30) NOT NULL,
  `fky_tse` char(8) NOT NULL,
  `pre_ser` int(11) NOT NULL,
  `can_ser` int(11) NOT NULL,
  `sta_ser` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `servicio`
--

INSERT INTO `servicio` (`id`, `nom_se`, `fky_tse`, `pre_ser`, `can_ser`, `sta_ser`) VALUES
('01', 'coctel margarita', '01', 3, -6, 'A'),
('5', 'papita', '02', 10, -5, 'A'),
('mc', 'mesa', '03', 121, 9, 'A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_cliente`
--

CREATE TABLE `tipo_cliente` (
  `id_tcli` char(8) NOT NULL,
  `nom_tcli` char(30) NOT NULL,
  `des_tcli` char(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipo_cliente`
--

INSERT INTO `tipo_cliente` (`id_tcli`, `nom_tcli`, `des_tcli`) VALUES
('tcl01', 'militar', NULL),
('tcl02', 'Civil', 'ciente ivil'),
('tcl03', 'Retirado', 'Militar Retirado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_hab`
--

CREATE TABLE `tipo_hab` (
  `cod_tih` char(8) NOT NULL,
  `nom_tih` char(20) NOT NULL,
  `des_tih` char(60) NOT NULL,
  `sta_tih` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipo_hab`
--

INSERT INTO `tipo_hab` (`cod_tih`, `nom_tih`, `des_tih`, `sta_tih`) VALUES
('h01', 'matrimonial', '', 'A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_servicio`
--

CREATE TABLE `tipo_servicio` (
  `id` char(8) NOT NULL,
  `nom_tse` char(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipo_servicio`
--

INSERT INTO `tipo_servicio` (`id`, `nom_tse`) VALUES
('01', 'Bebida'),
('02', 'Botanas'),
('03', 'Comida');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_usuario`
--

CREATE TABLE `tipo_usuario` (
  `cod_tiu` char(8) NOT NULL,
  `nom_tiu` char(30) NOT NULL,
  `des_tiu` char(50) DEFAULT NULL,
  `sta_tiu` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipo_usuario`
--

INSERT INTO `tipo_usuario` (`cod_tiu`, `nom_tiu`, `des_tiu`, `sta_tiu`) VALUES
('u01', 'administrador', NULL, 'A'),
('u02', 'recepcionista', NULL, 'A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `nom_usu` char(30) NOT NULL,
  `pass_usu` char(30) NOT NULL,
  `fky_per` char(8) NOT NULL,
  `fky_tiu` char(8) NOT NULL,
  `sta_usu` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`nom_usu`, `pass_usu`, `fky_per`, `fky_tiu`, `sta_usu`) VALUES
('esthela28', '12345678', '14502387', 'u02', 'A'),
('henry57', '5711', '26404237', 'u01', 'A'),
('gliza55', '12345', '26543901', 'u02', 'A'),
('hola', '123', '9145710', 'u02', 'A');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulos`
--
ALTER TABLE `articulos`
  ADD PRIMARY KEY (`cod_art`);

--
-- Indices de la tabla `carro`
--
ALTER TABLE `carro`
  ADD PRIMARY KEY (`pla_car`),
  ADD KEY `fky_cli` (`fky_cli`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `detalle_est`
--
ALTER TABLE `detalle_est`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fky_ser` (`fky_ser`);

--
-- Indices de la tabla `detalle_habi`
--
ALTER TABLE `detalle_habi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fky_hab` (`fky_hab`),
  ADD KEY `fky_art` (`fky_art`);

--
-- Indices de la tabla `detalle_ocup`
--
ALTER TABLE `detalle_ocup`
  ADD PRIMARY KEY (`cod`),
  ADD KEY `fky_ser` (`fky_ser`),
  ADD KEY `id` (`id`);

--
-- Indices de la tabla `estancia`
--
ALTER TABLE `estancia`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fky_hab` (`fky_hab`);

--
-- Indices de la tabla `habitacion`
--
ALTER TABLE `habitacion`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fky_tih` (`fky_tih`);

--
-- Indices de la tabla `ocupada`
--
ALTER TABLE `ocupada`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fky_hab` (`fky_hab`),
  ADD KEY `fky_cli` (`fky_cli`);

--
-- Indices de la tabla `personas`
--
ALTER TABLE `personas`
  ADD PRIMARY KEY (`ced_per`);

--
-- Indices de la tabla `servicio`
--
ALTER TABLE `servicio`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fky_tse` (`fky_tse`);

--
-- Indices de la tabla `tipo_cliente`
--
ALTER TABLE `tipo_cliente`
  ADD PRIMARY KEY (`id_tcli`);

--
-- Indices de la tabla `tipo_hab`
--
ALTER TABLE `tipo_hab`
  ADD PRIMARY KEY (`cod_tih`);

--
-- Indices de la tabla `tipo_servicio`
--
ALTER TABLE `tipo_servicio`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  ADD PRIMARY KEY (`cod_tiu`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`fky_per`),
  ADD KEY `fky_tiu` (`fky_tiu`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `detalle_habi`
--
ALTER TABLE `detalle_habi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `detalle_ocup`
--
ALTER TABLE `detalle_ocup`
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT de la tabla `estancia`
--
ALTER TABLE `estancia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `ocupada`
--
ALTER TABLE `ocupada`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `detalle_est`
--
ALTER TABLE `detalle_est`
  ADD CONSTRAINT `detalle_est_ibfk_1` FOREIGN KEY (`id`) REFERENCES `estancia` (`id`),
  ADD CONSTRAINT `detalle_est_ibfk_2` FOREIGN KEY (`fky_ser`) REFERENCES `servicio` (`id`);

--
-- Filtros para la tabla `detalle_habi`
--
ALTER TABLE `detalle_habi`
  ADD CONSTRAINT `detalle_habi_ibfk_1` FOREIGN KEY (`fky_hab`) REFERENCES `habitacion` (`id`),
  ADD CONSTRAINT `detalle_habi_ibfk_2` FOREIGN KEY (`fky_art`) REFERENCES `articulos` (`cod_art`);

--
-- Filtros para la tabla `detalle_ocup`
--
ALTER TABLE `detalle_ocup`
  ADD CONSTRAINT `detalle_ocup_ibfk_1` FOREIGN KEY (`fky_ser`) REFERENCES `servicio` (`id`),
  ADD CONSTRAINT `detalle_ocup_ibfk_2` FOREIGN KEY (`id`) REFERENCES `ocupada` (`id`);

--
-- Filtros para la tabla `estancia`
--
ALTER TABLE `estancia`
  ADD CONSTRAINT `estancia_ibfk_1` FOREIGN KEY (`fky_hab`) REFERENCES `habitacion` (`id`),
  ADD CONSTRAINT `estancia_ibfk_2` FOREIGN KEY (`fky_cli`) REFERENCES `cliente` (`fky_per`);

--
-- Filtros para la tabla `habitacion`
--
ALTER TABLE `habitacion`
  ADD CONSTRAINT `habitacion_ibfk_1` FOREIGN KEY (`fky_tih`) REFERENCES `tipo_hab` (`cod_tih`);

--
-- Filtros para la tabla `ocupada`
--
ALTER TABLE `ocupada`
  ADD CONSTRAINT `ocupada_ibfk_1` FOREIGN KEY (`fky_hab`) REFERENCES `habitacion` (`id`),
  ADD CONSTRAINT `ocupada_ibfk_2` FOREIGN KEY (`fky_cli`) REFERENCES `cliente` (`fky_per`);

--
-- Filtros para la tabla `servicio`
--
ALTER TABLE `servicio`
  ADD CONSTRAINT `servicio_ibfk_1` FOREIGN KEY (`fky_tse`) REFERENCES `tipo_servicio` (`id`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`fky_per`) REFERENCES `personas` (`ced_per`),
  ADD CONSTRAINT `usuario_ibfk_2` FOREIGN KEY (`fky_tiu`) REFERENCES `tipo_usuario` (`cod_tiu`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
