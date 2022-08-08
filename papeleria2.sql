-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-03-2021 a las 21:47:11
-- Versión del servidor: 10.4.6-MariaDB
-- Versión de PHP: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `papeleria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id_cliente` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `celular` varchar(10) NOT NULL,
  `telefono` varchar(10) NOT NULL,
  `direccion` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `documento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id_cliente`, `nombre`, `apellidos`, `celular`, `telefono`, `direccion`, `email`, `documento`) VALUES
(1, 'Sin Cliente', 'Sin Cliente', '0000', '0000', '0000', 'xxxx@gmail.com', 1),
(2, 'Juan Camilo', 'Cardona Quintero', '3002789417', '9870247', 'Kr 17 # 44 - 90', 'juancacq@gmail.com', 10213790),
(3, 'Leidy Viviana', 'Naranjo', '3216870254', '9741872', 'Cl 54 # 17 - 80', 'leidyvnarango@gmail.com', 1053813166),
(4, 'Alexandra', 'Villalobos', '3587410257', '8795241', 'Kr 74 # 18 - 20', 'alexav44@gmail.com', 24297849),
(5, 'Stephanie Julieth', 'Tellez Hernandez', '3547895214', '', 'Kr 21 # 14 - 18', 'stephjj@gmail.com', 1078954458),
(6, 'Ciliana', 'Florez Montes', '3458795247', '', 'Cl 92 # 14 - 15', 'CLFlomon@gmail.com', 1054879238);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compras`
--

CREATE TABLE `compras` (
  `id_compra` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `cantidad` int(11) NOT NULL,
  `fo_proveedor` int(11) NOT NULL,
  `fo_producto` int(11) NOT NULL,
  `fo_inventario` int(11) NOT NULL,
  `fo_usuarios` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventario`
--

CREATE TABLE `inventario` (
  `id_inventario` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `fo_producto` int(11) NOT NULL,
  `fo_proveedor` int(11) NOT NULL,
  `fo_ventas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id_producto` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `marca` varchar(50) NOT NULL,
  `precio_compra` double NOT NULL,
  `precio_venta` double NOT NULL,
  `stock_act` int(11) NOT NULL,
  `stock_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id_producto`, `nombre`, `marca`, `precio_compra`, `precio_venta`, `stock_act`, `stock_id`) VALUES
(1, 'Resma', 'Reprograf', 10000, 16000, 67, 200),
(2, 'Caja Cuadernos', 'Norma', 16000, 24000, 47, 80),
(3, 'Calculadora', 'CASIO', 8000, 12000, 20, 80),
(4, 'Archivadores', 'Zeppelin', 4000, 10000, 80, 100),
(5, 'Carpetas x100', 'Norma', 11000, 18000, 200, 200),
(8, 'Grapas', 'Triton', 5000, 7000, 22, 100),
(10, 'Cartucho Tinta Color', 'Epson', 28000, 40000, 0, 200),
(11, 'Toner Tinta', 'Epson', 40000, 50000, 0, 100),
(12, 'Papel Fotografico', 'Epson', 15000, 20000, 0, 100),
(13, 'Cartucho Tinta Negra', 'Epson', 20000, 32000, 0, 100),
(14, 'Archivador', 'Zeppelin', 4000, 8000, 100, 100);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `id_proveedor` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `celular` varchar(10) NOT NULL,
  `telefono` varchar(10) NOT NULL,
  `direccion` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`id_proveedor`, `nombre`, `celular`, `telefono`, `direccion`, `email`) VALUES
(1, 'Reprograf', '3168754125', '8825477', 'Cl 21 # 45 - 70', 'contacto@reprograf.com'),
(2, 'Norma', '3175857416', '8957814', 'Kr 21 # 17 - 28', 'compras@norma.com'),
(3, 'Pelikan', '3165874160', '9874124', 'Cl 27 # 57 - 60', 'pelikancol@gmail.com'),
(4, 'Triton', '878787', '88888', 'cl kjkj cr 55', 'dddddd@gmail.com'),
(5, 'Wingo', '4444440000', '8745621', 'cl kjkj cr 55', 'hhytr44@gmail.com'),
(6, 'Faber Castell', '3547892017', '8504177', 'Cl 21 # 50 - 87', 'fbcompras@fabercastell.com'),
(7, 'Paper Mate', '3148754712', '8847124', 'sdsdsdsd', 'ssss4@xxxxx.com'),
(8, 'Maped', '3714852064', '8912647', 'Kr 12 # 47 -18', 'comprascol@maped.com'),
(9, 'Tesa', '4587552', '87878', 'sdsdd', 'sssss@gmail.com'),
(11, 'Scotch', '3121', 'f', 'f', 'fbcompras@fabercastell.com'),
(12, '3M', '', '', '', ''),
(13, 'Stabilo', '', '', '', ''),
(14, 'Rezh', '', '', '', ''),
(15, 'Bristol', '', '', '', ''),
(16, 'Kimberly', '', '', '', ''),
(17, 'Papyer', '', '', '', ''),
(18, 'Artesco', '', '', '', ''),
(19, 'Bic', '', '', '', ''),
(20, 'Azor', '', '', '', ''),
(21, 'Casio', '', '', '', ''),
(22, 'Expo', '', '', '', ''),
(23, 'Gema', '', '', '', ''),
(24, 'Jean Book', '', '', '', ''),
(25, 'Sharpie', '', '', '', ''),
(26, 'Onix', '', '', '', ''),
(27, 'Merletto', '', '', '', ''),
(28, 'Prismacolor', '', '', '', ''),
(29, 'TDK', '', '', '', ''),
(30, 'Kingston', '', '', '', ''),
(31, 'Sandisk', '', '', '', ''),
(32, 'Verbatim', '', '', '', ''),
(33, 'Trodant', '', '', '', ''),
(34, 'Studmark', '', '', '', ''),
(35, 'Heweltt Packard', '', '', '', ''),
(36, 'Okidata', '', '', '', ''),
(37, 'Epson', '', '', '', ''),
(38, 'Lexmark', '', '', '', ''),
(39, 'Samsung', '', '', '', ''),
(40, 'Canon', '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(150) NOT NULL,
  `apellido` varchar(200) NOT NULL,
  `cargo` varchar(50) NOT NULL,
  `celular` varchar(10) NOT NULL,
  `email` varchar(200) NOT NULL,
  `clave` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombre`, `apellido`, `cargo`, `celular`, `email`, `clave`) VALUES
(1, 'Marlon', 'Martinez Castilla', 'Admin', '3013405499', 'mmartinez@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b'),
(2, 'Jonathan', 'Arias', 'Admin', '3105068159', 'jarias@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `id_venta` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `cantidad` int(11) NOT NULL,
  `fo_producto` int(11) NOT NULL,
  `fo_cliente` int(11) NOT NULL,
  `fo_usuarios` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `compras`
--
ALTER TABLE `compras`
  ADD PRIMARY KEY (`id_compra`),
  ADD KEY `fo_proveedor` (`fo_proveedor`),
  ADD KEY `fo_producto` (`fo_producto`),
  ADD KEY `fo_inventario` (`fo_inventario`),
  ADD KEY `fo_Usuario` (`fo_usuarios`);

--
-- Indices de la tabla `inventario`
--
ALTER TABLE `inventario`
  ADD PRIMARY KEY (`id_inventario`),
  ADD KEY `fo_producto` (`fo_producto`),
  ADD KEY `fo_proveedor` (`fo_proveedor`),
  ADD KEY `fo_ventas` (`fo_ventas`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id_producto`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`id_proveedor`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`id_venta`),
  ADD KEY `fo_producto` (`fo_producto`),
  ADD KEY `fo_cliente` (`fo_cliente`),
  ADD KEY `fo_Usuario` (`fo_usuarios`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `compras`
--
ALTER TABLE `compras`
  MODIFY `id_compra` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `inventario`
--
ALTER TABLE `inventario`
  MODIFY `id_inventario` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  MODIFY `id_proveedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `id_venta` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
