-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-07-2021 a las 16:24:14
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `escobar_justo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` int(10) NOT NULL,
  `descripcion` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `descripcion`) VALUES
(1, 'dieteticos'),
(2, 'planes');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consultas`
--

CREATE TABLE `consultas` (
  `id` int(10) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telefono` varchar(11) NOT NULL,
  `mensaje` varchar(300) NOT NULL,
  `contestado` varchar(2) NOT NULL DEFAULT 'NO'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `consultas`
--

INSERT INTO `consultas` (`id`, `nombre`, `email`, `telefono`, `mensaje`, `contestado`) VALUES
(1, 'Melissa', 'meliescobar@gmail.com', '2147483647', 'Buenas noches! Quisiera saber cuando se va a poder realizar envios a domicilio? Saludos!!!', 'SI'),
(2, 'Juan', 'juangomez@gmail.com', '12345', 'Hola, aceptan tarjetas?', 'SI'),
(3, 'Daniela', 'daniela@gmail.com', '2147483647', 'Hola, probando', 'NO'),
(4, 'Leornardo', 'leo@gmail.com', '2147483647', 'Buenas tardes, realizan envios al exterior? Saluos!!!', 'NO'),
(5, 'Gaston', 'gaston1998@gmail.com', '2147483647', 'Buenos dias, trabajan en conjunto con nutricionistas? Necesito un turno para consultar un plan nutricional', 'NO'),
(6, 'Yanina', 'yanina@gmail.com', '3794689096', 'Prueba numero de telefono', 'NO'),
(7, 'Mateo', 'mateo@gmail.com', '3794565432', 'Cuando recibiran mas productos dieteticos? Necesito comprar mas y no hay stock', 'NO'),
(8, 'Felipe', 'felipe@gmail.com', '3777542634', 'Buenas tardes, ya casi termino todo el proyectooo', 'NO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfiles`
--

CREATE TABLE `perfiles` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `perfiles`
--

INSERT INTO `perfiles` (`id`, `descripcion`) VALUES
(1, 'admin'),
(2, 'cliente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(10) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `categoria_id` int(10) NOT NULL,
  `imagen` varchar(50) NOT NULL,
  `precio_costo` double(7,2) NOT NULL,
  `precio_venta` double(7,2) NOT NULL,
  `stock` int(11) NOT NULL,
  `stock_min` int(11) NOT NULL,
  `eliminado` varchar(2) NOT NULL DEFAULT 'NO'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `descripcion`, `categoria_id`, `imagen`, `precio_costo`, `precio_venta`, `stock`, `stock_min`, `eliminado`) VALUES
(1, 'Azucar Integral', 1, 'assets/img/productos/pro2.jpg', 500.00, 1100.00, 18, 5, 'NO'),
(2, 'Sal Rosada', 1, 'assets/img/productos/pro3.jpg', 500.00, 1400.00, 20, 5, 'NO'),
(3, 'Avena Arrollada', 1, 'assets/img/productos/pro4.jpg', 700.00, 1700.00, 15, 5, 'NO'),
(4, 'Harina de Algarroba', 1, 'assets/img/productos/pro5.jpg', 600.00, 1200.00, 13, 5, 'NO'),
(5, 'Curcuma Pura', 1, 'assets/img/productos/pro6.jpg', 800.00, 1600.00, 20, 5, 'NO'),
(6, 'Harina de Arroz', 1, 'assets/img/productos/pro11.jpg', 900.00, 1900.00, 19, 5, 'NO'),
(7, 'Porotos negros', 1, 'assets/img/productos/pro14.jpg', 1000.00, 2100.00, 19, 5, 'NO'),
(8, 'Porotos Colorados', 1, 'assets/img/productos/pro15.jpg', 600.00, 1500.00, 18, 5, 'NO'),
(9, 'Lentejas Premium', 1, 'assets/img/productos/pro16.jpg', 500.00, 1100.00, 10, 5, 'NO'),
(10, 'Maiz Pisingallo', 1, 'assets/img/productos/pro17.jpg', 600.00, 1700.00, 20, 5, 'NO'),
(11, 'Trigo Sarraceno', 1, 'assets/img/productos/pro18.jpg', 1000.00, 2000.00, 20, 5, 'NO'),
(12, 'Cacao Amargo', 1, 'assets/img/productos/pro19.jpg', 500.00, 1000.00, 20, 5, 'NO'),
(13, 'Plan Alimentario Normal', 2, 'assets/img/productos/p1.jpg', 1500.00, 1500.00, 20, 5, 'NO'),
(14, 'Control Nutricional', 2, 'assets/img/productos/p2.jpg', 600.00, 600.00, 20, 5, 'NO'),
(15, 'Tratamiento Patológico', 2, 'assets/img/productos/p3.jpg', 3800.00, 3800.00, 20, 5, 'NO'),
(16, 'Educación Alimentaria', 2, 'assets/img/productos/p4.jpg', 2000.00, 2000.00, 20, 5, 'NO'),
(17, 'Alimentación Vegetariana', 2, 'assets/img/productos/p6.jpg', 2000.00, 2000.00, 20, 5, 'NO'),
(18, 'Combos Nutricionales', 2, 'assets/img/productos/p5.jpg', 3500.00, 3500.00, 20, 5, 'NO'),
(19, 'Consulta Nutricional', 2, 'assets/img/productos/p7.jpg', 1000.00, 1000.00, 20, 5, 'NO'),
(20, 'Promociones', 2, 'assets/img/productos/p8.jpg', 500.00, 500.00, 20, 3, 'NO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `perfil_id` int(11) NOT NULL,
  `baja` varchar(2) NOT NULL DEFAULT 'NO'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `email`, `usuario`, `pass`, `perfil_id`, `baja`) VALUES
(2, 'Melissa', 'Escobar', 'meliescobar@gmail.com', 'meli', '1234', 2, 'NO'),
(3, 'Juan', 'Gomez', 'juangomez@gmail.com', 'Juan', '4321', 2, 'NO'),
(4, 'Jose', 'Ramirez', 'joseramirez@gmail.com', 'Jose', '567', 2, 'NO'),
(6, 'Justo', 'Escobar', 'justoescobar3@gmail.com', 'Justo', '123', 1, 'NO'),
(7, 'Maria', 'Ferreira', 'mariafer@gmail.com', 'Maria', '123', 2, 'NO'),
(8, 'Rocio', 'Pozzer', 'rociopozzer@gmail.com', 'Rocio', '123', 2, 'NO'),
(9, 'Ivan', 'Nuñez', 'ivan1995@gmail.com', 'Ivan', '123', 2, 'NO'),
(10, 'Daniela', 'Busellato', 'daniela@gmail.com', 'Daniela', '1234', 2, 'NO'),
(11, 'Oscar', 'Caceres', 'oscar@gmail.com', 'Oscar', '123', 2, 'NO'),
(12, 'Leonardo', 'Vallejos', 'leo@gmail.com', 'Leo', '1234', 2, 'NO'),
(13, 'Mateo', 'Fernandez', 'mateo@gmail.com', 'Mateo', '1234', 2, 'NO'),
(14, 'Felipe', 'Escobar', 'felipe@gmail.com', 'Felipe', '1234', 2, 'NO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas_cabecera`
--

CREATE TABLE `ventas_cabecera` (
  `id` int(10) NOT NULL,
  `fecha` date NOT NULL,
  `usuario_id` int(10) NOT NULL,
  `total_venta` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ventas_cabecera`
--

INSERT INTO `ventas_cabecera` (`id`, `fecha`, `usuario_id`, `total_venta`) VALUES
(1, '2021-06-07', 2, 1200.00),
(2, '2021-06-07', 2, 3400.00),
(3, '2021-06-07', 2, 1200.00),
(4, '2021-06-07', 2, 2000.00),
(5, '2021-06-07', 2, 1400.00),
(6, '2021-06-07', 2, 1400.00),
(7, '2021-06-07', 2, 0.00),
(8, '2021-06-07', 2, 1200.00),
(9, '2021-06-07', 2, 0.00),
(10, '2021-06-07', 2, 1700.00),
(11, '2021-06-07', 2, 3000.00),
(12, '2021-06-07', 2, 9200.00),
(13, '2021-06-08', 2, 1100.00),
(14, '2021-06-08', 2, 0.00),
(15, '2021-06-08', 2, 3500.00),
(16, '2021-06-08', 2, 5000.00),
(17, '2021-06-09', 2, 6800.00),
(18, '2021-06-10', 2, 6300.00),
(19, '2021-06-11', 2, 5400.00),
(20, '2021-06-11', 2, 7600.00),
(21, '2021-06-11', 2, 5100.00),
(22, '2021-06-12', 3, 3300.00),
(23, '2021-06-13', 3, 3300.00),
(24, '2021-06-16', 3, 4800.00),
(25, '2021-06-16', 3, 4700.00),
(26, '2021-06-16', 3, 0.00),
(27, '2021-06-16', 3, 0.00),
(28, '2021-06-16', 3, 0.00),
(29, '2021-06-16', 3, 1500.00),
(30, '2021-06-16', 3, 0.00),
(31, '2021-06-16', 3, 600.00),
(32, '2021-06-19', 3, 3800.00),
(33, '2021-06-19', 3, 1400.00),
(34, '2021-06-19', 3, 3800.00),
(35, '2021-06-20', 2, 9200.00),
(36, '2021-06-21', 10, 3600.00),
(37, '2021-06-21', 3, 12700.00),
(38, '2021-06-21', 3, 10000.00),
(39, '2021-06-21', 3, 3000.00),
(40, '2021-06-21', 3, 7600.00),
(41, '2021-06-21', 3, 20400.00),
(42, '2021-06-21', 3, 1700.00),
(43, '2021-06-21', 3, 25500.00),
(44, '2021-06-21', 3, 64600.00),
(45, '2021-06-21', 3, 24000.00),
(46, '2021-06-21', 3, 18200.00),
(47, '2021-06-21', 3, 19800.00),
(48, '2021-06-21', 3, 33600.00),
(49, '2021-06-21', 3, 38000.00),
(50, '2021-06-21', 10, 12000.00),
(51, '2021-06-21', 10, 10000.00),
(52, '2021-06-21', 10, 3600.00),
(53, '2021-06-21', 10, 4800.00),
(54, '2021-06-21', 10, 2100.00),
(55, '2021-06-23', 10, 42000.00),
(56, '2021-07-02', 3, 3600.00),
(57, '2021-07-02', 3, 1700.00),
(58, '2021-07-02', 3, 1100.00),
(59, '2021-07-02', 3, 0.00),
(60, '2021-07-02', 3, 1100.00),
(61, '2021-07-02', 3, 0.00),
(62, '2021-07-04', 2, 5100.00);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas_detalle`
--

CREATE TABLE `ventas_detalle` (
  `id` int(10) NOT NULL,
  `venta_id` int(10) NOT NULL,
  `producto_id` int(10) NOT NULL,
  `cantidad` int(10) NOT NULL,
  `precio` double(10,2) NOT NULL,
  `total` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ventas_detalle`
--

INSERT INTO `ventas_detalle` (`id`, `venta_id`, `producto_id`, `cantidad`, `precio`, `total`) VALUES
(1, 1, 4, 1, 1200.00, 1200.00),
(2, 2, 3, 2, 1700.00, 3400.00),
(3, 3, 4, 1, 1200.00, 1200.00),
(4, 4, 16, 1, 2000.00, 2000.00),
(5, 5, 2, 1, 1400.00, 1400.00),
(6, 6, 2, 1, 1400.00, 1400.00),
(7, 8, 4, 1, 1200.00, 1200.00),
(8, 10, 3, 1, 1700.00, 1700.00),
(9, 11, 8, 2, 1500.00, 3000.00),
(10, 12, 3, 1, 1700.00, 1700.00),
(11, 12, 4, 1, 1200.00, 1200.00),
(12, 12, 7, 3, 2100.00, 6300.00),
(13, 13, 1, 1, 1100.00, 1100.00),
(14, 15, 7, 1, 2100.00, 2100.00),
(15, 15, 2, 1, 1400.00, 1400.00),
(16, 16, 12, 1, 1000.00, 1000.00),
(17, 16, 11, 2, 2000.00, 4000.00),
(18, 17, 10, 1, 1700.00, 1700.00),
(19, 17, 3, 3, 1700.00, 5100.00),
(20, 18, 7, 3, 2100.00, 6300.00),
(21, 19, 2, 3, 1400.00, 4200.00),
(22, 19, 4, 1, 1200.00, 1200.00),
(23, 20, 15, 2, 3800.00, 7600.00),
(24, 21, 3, 3, 1700.00, 5100.00),
(25, 22, 1, 3, 1100.00, 3300.00),
(26, 23, 1, 3, 1100.00, 3300.00),
(27, 24, 3, 1, 1700.00, 1700.00),
(28, 24, 6, 1, 1900.00, 1900.00),
(29, 24, 4, 1, 1200.00, 1200.00),
(30, 25, 2, 1, 1400.00, 1400.00),
(31, 25, 1, 3, 1100.00, 3300.00),
(32, 29, 8, 1, 1500.00, 1500.00),
(33, 31, 14, 1, 600.00, 600.00),
(34, 32, 15, 1, 3800.00, 3800.00),
(35, 33, 2, 1, 1400.00, 1400.00),
(36, 34, 15, 1, 3800.00, 3800.00),
(37, 35, 3, 1, 1700.00, 1700.00),
(38, 35, 8, 1, 1500.00, 1500.00),
(39, 35, 16, 3, 2000.00, 6000.00),
(40, 36, 3, 1, 1700.00, 1700.00),
(41, 36, 6, 1, 1900.00, 1900.00),
(42, 37, 3, 1, 1700.00, 1700.00),
(43, 37, 2, 5, 1400.00, 7000.00),
(44, 37, 20, 8, 500.00, 4000.00),
(45, 38, 19, 10, 1000.00, 10000.00),
(46, 39, 20, 6, 500.00, 3000.00),
(47, 40, 15, 2, 3800.00, 7600.00),
(48, 41, 3, 12, 1700.00, 20400.00),
(49, 42, 3, 1, 1700.00, 1700.00),
(50, 43, 3, 15, 1700.00, 25500.00),
(51, 44, 15, 17, 3800.00, 64600.00),
(52, 45, 4, 20, 1200.00, 24000.00),
(53, 46, 2, 13, 1400.00, 18200.00),
(54, 47, 1, 18, 1100.00, 19800.00),
(55, 48, 5, 21, 1600.00, 33600.00),
(56, 49, 6, 20, 1900.00, 38000.00),
(57, 50, 16, 6, 2000.00, 12000.00),
(58, 51, 16, 5, 2000.00, 10000.00),
(59, 52, 4, 3, 1200.00, 3600.00),
(60, 53, 4, 4, 1200.00, 4800.00),
(61, 54, 7, 1, 2100.00, 2100.00),
(62, 55, 16, 15, 2000.00, 30000.00),
(63, 55, 14, 20, 600.00, 12000.00),
(64, 56, 3, 1, 1700.00, 1700.00),
(65, 56, 6, 1, 1900.00, 1900.00),
(66, 57, 3, 1, 1700.00, 1700.00),
(67, 58, 1, 1, 1100.00, 1100.00),
(68, 60, 1, 1, 1100.00, 1100.00),
(69, 62, 3, 3, 1700.00, 5100.00);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `consultas`
--
ALTER TABLE `consultas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `perfiles`
--
ALTER TABLE `perfiles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categoria_id` (`categoria_id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `perfil_id` (`perfil_id`);

--
-- Indices de la tabla `ventas_cabecera`
--
ALTER TABLE `ventas_cabecera`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usuario_id` (`usuario_id`);

--
-- Indices de la tabla `ventas_detalle`
--
ALTER TABLE `ventas_detalle`
  ADD PRIMARY KEY (`id`),
  ADD KEY `venta_id` (`venta_id`),
  ADD KEY `producto_id` (`producto_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `consultas`
--
ALTER TABLE `consultas`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `perfiles`
--
ALTER TABLE `perfiles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `ventas_cabecera`
--
ALTER TABLE `ventas_cabecera`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT de la tabla `ventas_detalle`
--
ALTER TABLE `ventas_detalle`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`categoria_id`) REFERENCES `categorias` (`id`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`perfil_id`) REFERENCES `perfiles` (`id`);

--
-- Filtros para la tabla `ventas_cabecera`
--
ALTER TABLE `ventas_cabecera`
  ADD CONSTRAINT `ventas_cabecera_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`);

--
-- Filtros para la tabla `ventas_detalle`
--
ALTER TABLE `ventas_detalle`
  ADD CONSTRAINT `ventas_detalle_ibfk_1` FOREIGN KEY (`venta_id`) REFERENCES `ventas_cabecera` (`id`),
  ADD CONSTRAINT `ventas_detalle_ibfk_2` FOREIGN KEY (`producto_id`) REFERENCES `productos` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
