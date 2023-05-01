-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 01-05-2023 a las 03:31:32
-- Versión del servidor: 10.5.16-MariaDB
-- Versión de PHP: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `id18927348_sistema_inventario`
--
CREATE DATABASE IF NOT EXISTS `sistema_inventario` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `sistema_inventario`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `email` text COLLATE utf8_spanish_ci NOT NULL,
  `telefono` text COLLATE utf8_spanish_ci NOT NULL,
  `direccion` text COLLATE utf8_spanish_ci NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `compras` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `nombre`, `email`, `telefono`, `direccion`, `fecha_nacimiento`, `compras`, `fecha`) VALUES
(5, 'Axel Hernandez', 'axel@gmail.com', '(228) 114-5454', 'av lazaro cardenas', '2000-10-26', 16, '2022-05-16 19:35:14'),
(6, 'Arath Eloy Galan Acosta', 'arath@123.coma', '(228) 487-8778', 'av miradores', '2001-01-11', 20, '2022-05-23 15:56:15'),
(11, 'asdas', 'asd1@gmailaa.coma', '(534) 543-5345', 'fdsfsdfsdfds', '2043-04-05', 5, '2022-05-21 20:22:48'),
(12, 'kevin Baez Gonzales', 'kevin@gmail.com', '(535) 345-3453', 'av rgfererg', '2045-06-04', 0, '2022-05-16 17:23:55'),
(13, 'Benito Garcia Lopez', 'beni@outlook.es', '(534) 543-5353', 'dfdsfsdfsd', '2035-03-04', 0, '2022-05-16 17:24:21'),
(14, 'Pedro Garcia Fernandez', 'pedri@gmail.com', '(535) 345-3534', 'efdgfgdf', '2065-04-06', 0, '2022-05-16 17:25:00'),
(15, 'omar Garcia Lopz', 'omar@hotmail.com', '(534) 534-5353', 'dfgfdgfd', '2056-05-04', 0, '2022-05-16 17:25:55'),
(16, 'gdfgdfg', 'sfsdfsdfsd@gmail.com', '(543) 535-3654', '6bdfhfdghdf', '2045-06-04', 0, '2022-05-16 17:26:12'),
(17, 'sdfdsf', 'axel@gmail.com', '(345) 345-3535', 'fgdgdfgdf', '2035-04-06', 0, '2022-05-16 17:27:10'),
(18, 'zzzzzzzzz', 'rodrigo@asdfdsa.com', '(000) 000-0000', 'fdgdfgdfg', '2056-05-06', 0, '2022-05-16 19:20:40');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `devolucion`
--

CREATE TABLE `devolucion` (
  `id` int(11) NOT NULL,
  `producto` text COLLATE utf8_spanish_ci NOT NULL,
  `proveedor` text COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` text COLLATE utf8_spanish_ci NOT NULL,
  `estado` text COLLATE utf8_spanish_ci NOT NULL,
  `reembolso` decimal(10,0) NOT NULL,
  `foto` text COLLATE utf8_spanish_ci NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `devolucion`
--

INSERT INTO `devolucion` (`id`, `producto`, `proveedor`, `descripcion`, `estado`, `reembolso`, `foto`, `fecha`) VALUES
(1, '8', '8', 'fallo', 'Defectuoso', 484, 'vistas/img/devolucion/8/274.jpg', '2022-04-29 15:54:35'),
(2, '7', '7', 'rendimiento nulo ', 'Defectuoso', 4884, 'vistas/img/devolucion/7/109.jpg', '2022-04-29 15:56:55'),
(3, '6', '6', 'xd', 'Defectuoso', 1, 'vistas/img/devolucion/6/154.jpg', '2022-05-02 01:19:44');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `devoluciones`
--

CREATE TABLE `devoluciones` (
  `id` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `id_vendedor` int(11) NOT NULL,
  `productos` text COLLATE utf8_spanish_ci NOT NULL,
  `total` float NOT NULL,
  `motivos` text COLLATE utf8_spanish_ci DEFAULT NULL,
  `estado` text COLLATE utf8_spanish_ci DEFAULT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `devoluciones`
--

INSERT INTO `devoluciones` (`id`, `id_cliente`, `id_vendedor`, `productos`, `total`, `motivos`, `estado`, `fecha`) VALUES
(42, 5, 1, '[{\"id\":\"7\",\"descripcion\":\"procesador Razer 5\",\"cantidad\":\"1\",\"stock\":\"56\",\"precio\":\"4050\",\"total\":\"4050\"},{\"id\":\"6\",\"descripcion\":\"tarjeta grafica\",\"cantidad\":\"1\",\"stock\":\"69\",\"precio\":\"3050\",\"total\":\"3050\"},{\"id\":\"5\",\"descripcion\":\"fuente de poder\",\"cantidad\":\"1\",\"stock\":\"79\",\"precio\":\"1000\",\"total\":\"1000\"}]', 8100, 'dcrfc', 'No enciende', '2022-05-13 01:25:08'),
(43, 5, 1, '[{\"id\":\"7\",\"descripcion\":\"procesador Razer 5\",\"cantidad\":\"1\",\"stock\":\"56\",\"precio\":\"4050\",\"total\":\"4050\"},{\"id\":\"6\",\"descripcion\":\"tarjeta grafica\",\"cantidad\":\"1\",\"stock\":\"69\",\"precio\":\"3050\",\"total\":\"3050\"}]', 7100, 'zxc', 'Dañado', '2022-05-13 17:29:43'),
(44, 5, 1, '[{\"id\":\"4\",\"descripcion\":\"ram\",\"cantidad\":\"1\",\"stock\":\"31\",\"precio\":\"2108\",\"total\":\"2108\"}]', 2108, 'mal estado', 'Defectuoso', '2022-05-15 04:52:59'),
(45, 5, 1, '[{\"id\":\"24\",\"descripcion\":\"disipador de calor\",\"cantidad\":\"1\",\"stock\":\"37\",\"precio\":\"23\",\"total\":\"23\"},{\"id\":\"23\",\"descripcion\":\"disipador\",\"cantidad\":\"1\",\"stock\":\"15\",\"precio\":\"56\",\"total\":\"56\"}]', 79, 'No cumple con su función ', 'No sirve', '2022-05-16 19:36:55'),
(46, 6, 1, '[{\"id\":\"24\",\"descripcion\":\"disipador de calor\",\"cantidad\":\"1\",\"stock\":\"36\",\"precio\":\"1000\",\"total\":\"1000\"},{\"id\":\"22\",\"descripcion\":\"Mouse\",\"cantidad\":\"1\",\"stock\":\"41\",\"precio\":\"340\",\"total\":\"340\"}]', 1340, NULL, NULL, '2022-05-21 18:25:07'),
(47, 6, 1, '[{\"id\":\"24\",\"descripcion\":\"disipador de calor\",\"cantidad\":\"1\",\"stock\":\"36\",\"precio\":\"1000\",\"total\":\"1000\"}]', 0, 'mal estado', 'Faltan piezas', '2022-05-22 05:23:49'),
(48, 5, 1, '[{\"id\":\"24\",\"descripcion\":\"disipador de calor\",\"cantidad\":\"1\",\"stock\":\"36\",\"precio\":\"1000\",\"total\":\"1000\"}]', 1000, NULL, NULL, '2022-05-22 18:24:03'),
(49, 5, 1, '[{\"id\":\"24\",\"descripcion\":\"disipador de calor\",\"cantidad\":\"1\",\"stock\":\"35\",\"precio\":\"1000\",\"total\":\"1000\"},{\"id\":\"22\",\"descripcion\":\"Mouse\",\"cantidad\":\"1\",\"stock\":\"40\",\"precio\":\"340\",\"total\":\"340\"}]', 1340, NULL, NULL, '2022-05-23 16:09:15'),
(50, 5, 1, '[{\"id\":\"24\",\"descripcion\":\"disipador de calor\",\"cantidad\":\"1\",\"stock\":\"35\",\"precio\":\"1000\",\"total\":\"1000\"}]', 1000, NULL, NULL, '2022-05-23 16:10:30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `id` int(11) NOT NULL,
  `nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `email` text COLLATE utf8_spanish_ci NOT NULL,
  `telefono` text COLLATE utf8_spanish_ci NOT NULL,
  `direccion` text COLLATE utf8_spanish_ci NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `cargo` text COLLATE utf8_spanish_ci NOT NULL,
  `sueldo` float NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`id`, `nombre`, `email`, `telefono`, `direccion`, `fecha_nacimiento`, `cargo`, `sueldo`, `fecha`) VALUES
(10, 'sdfsdf', 'axel@gmail.com', '(543) 453-5354', 'fgdfgdfgdfg', '2045-06-04', 'Empleado', 2000, '2022-05-16 19:15:58'),
(11, 'Kevin Baez Hernandez ', 'deamvvs@gmail.com', '(123) 123-1231', '123123', '2012-03-12', 'Empleado', 123123, '2022-05-21 18:21:48'),
(12, '34534534', 'axel@gmail.com', '(435) 345-3453', 'dfsggfdgfd', '2034-05-05', 'Contador', 345, '2022-05-21 21:56:20'),
(13, 'Pao', 'paolahg@gmail.com', '(284) 939-4849', 'Coatepec', '2001-12-27', 'Empleado', 150000, '2022-08-31 16:45:05');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `id` int(11) NOT NULL,
  `empleado` text COLLATE utf8_spanish_ci NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`id`, `empleado`, `fecha`) VALUES
(9, 'Arath Galan A', '2022-04-16 17:36:18'),
(10, 'Kevin Baez', '2022-04-16 17:36:26'),
(11, 'Omar Suarez', '2022-04-16 17:36:36'),
(12, 'Axel', '2022-04-16 17:36:41'),
(13, 'Roby', '2022-04-16 17:36:46'),
(14, 'Ray', '2022-04-16 17:36:52');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pago_empleados`
--

CREATE TABLE `pago_empleados` (
  `id` int(11) NOT NULL,
  `nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` text COLLATE utf8_spanish_ci NOT NULL,
  `cargo` text COLLATE utf8_spanish_ci NOT NULL,
  `pago` decimal(10,0) NOT NULL,
  `fecha_vencimiento` date NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pago_proveedores`
--

CREATE TABLE `pago_proveedores` (
  `id` int(11) NOT NULL,
  `proveedor` text COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` text COLLATE utf8_spanish_ci NOT NULL,
  `pago` decimal(10,0) NOT NULL,
  `fecha_vencimiento` date NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `imagen` text COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` text COLLATE utf8_spanish_ci NOT NULL,
  `caracteristicas` text COLLATE utf8_spanish_ci NOT NULL,
  `estado` text COLLATE utf8_spanish_ci NOT NULL,
  `tipo_producto` text COLLATE utf8_spanish_ci NOT NULL,
  `marca` text COLLATE utf8_spanish_ci NOT NULL,
  `proveedor` text COLLATE utf8_spanish_ci NOT NULL,
  `estado_proveedor` text COLLATE utf8_spanish_ci DEFAULT NULL,
  `stock` int(11) NOT NULL,
  `precio_venta` float NOT NULL,
  `ventas` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `imagen`, `descripcion`, `caracteristicas`, `estado`, `tipo_producto`, `marca`, `proveedor`, `estado_proveedor`, `stock`, `precio_venta`, `ventas`, `fecha`) VALUES
(3, 'vistas/img/productos/disco duro/174.jpg', 'disco duro', '1000 GB', 'Activo', 'Componete', '547#&%', 'Intel México', 'Activo', 500, 500, -25, '2022-05-19 00:35:46'),
(6, 'vistas/img/productos/tarjeta grafica/630.jpg', 'tarjeta grafica', '16GB , GTX 3080', 'Activo', 'Componete', 'GIGABYTE ', 'Kingston México', 'Activo', 69, 3050, -36, '2022-05-16 19:18:02'),
(7, 'vistas/img/productos/procesador Razer 5/355.jpg', 'procesador Razer 5', '6 núcleos, Hasta 3.4GHz, Reloj base. 3.2GHz, Caché L1 total. 384KB,', 'Activo', 'Componete', 'Razer ', 'Razer México', 'Activo', 56, 4050, -40, '2022-05-16 19:18:02'),
(19, 'vistas/img/productos/default/anonymous.png', 'ventilador', 'potencia de 80hz, rgb', 'Activo', 'Accesorio', 'samsung', 'Adata', 'Activo', 3, 12, 0, '2022-05-16 17:11:22'),
(20, 'vistas/img/productos/teclado/546.jpg', 'teclado', 'rgb, antipolvo', 'Activo', 'Accesorio', 'razer', 'Razer México', 'Activo', 5, 43, 0, '2022-05-16 17:18:37'),
(21, 'vistas/img/productos/default/anonymous.png', 'ram', '3GB, DDR4', 'Activo', 'Accesorio', 'adata', 'Adata', '', 34, 12, 2, '2022-05-16 19:18:54'),
(22, 'vistas/img/productos/Mouse/437.jpg', 'Mouse', 'alta precisión, gamer', 'Activo', 'Pieza', 'apple', 'Apple México', 'Activo', 41, 340, 4, '2022-05-23 15:56:15'),
(24, 'vistas/img/productos/disipador de calor/421.jpg', 'disipador de calor', 'extrae calor de un fluido y lo cede a otro', 'Activo', 'Componete', 'AMD', 'Razer México', 'Activo', 36, 1000, 12, '2022-05-23 15:56:15');

--
-- Disparadores `productos`
--
DELIMITER $$
CREATE TRIGGER `producto_delete` AFTER DELETE ON `productos` FOR EACH ROW BEGIN
  INSERT INTO producto_eliminado(descripcion, caracteristicas, tipo_producto,marca,proveedor,precio_venta,fecha ) 
  VALUES (OLD.descripcion, OLD.caracteristicas, OLD.tipo_producto, OLD.marca, OLD.proveedor,OLD.precio_venta, OLD.fecha);
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto_eliminado`
--

CREATE TABLE `producto_eliminado` (
  `id` int(11) NOT NULL,
  `descripcion` text COLLATE utf8_spanish_ci NOT NULL,
  `caracteristicas` text COLLATE utf8_spanish_ci NOT NULL,
  `tipo_producto` text COLLATE utf8_spanish_ci DEFAULT NULL,
  `marca` text COLLATE utf8_spanish_ci NOT NULL,
  `proveedor` text COLLATE utf8_spanish_ci DEFAULT NULL,
  `precio_venta` float NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp(),
  `fecha_eliminacion` timestamp NOT NULL DEFAULT current_timestamp(),
  `informacion` text COLLATE utf8_spanish_ci DEFAULT NULL,
  `motivo` text COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `producto_eliminado`
--

INSERT INTO `producto_eliminado` (`id`, `descripcion`, `caracteristicas`, `tipo_producto`, `marca`, `proveedor`, `precio_venta`, `fecha`, `fecha_eliminacion`, `informacion`, `motivo`) VALUES
(1, 'usb', '8gb', 'Accesorio', 'adata', 'Apple México', 1000, '2022-05-04 02:06:48', '2022-05-04 02:44:45', 'sfsdfsdf', 'Precio del producto'),
(3, 'sadas', 'asd', 'Pieza', 'asdsa', 'Dell', 434, '2022-05-15 04:34:46', '2022-05-15 04:58:18', NULL, NULL),
(4, 'ram', '16GB, DDR4', 'Componete', 'samsung', 'Samsung Electronics', 2108, '2022-05-12 07:08:31', '2022-05-16 19:35:54', NULL, NULL),
(5, 'disipador', 'malas condiciones ', '', 'Hp', '', 500, '2022-05-17 13:49:01', '2022-05-17 14:13:35', NULL, NULL),
(6, 'fuente de poder', '12 Volts, Conector ATX versión 1', 'Componete', 'ATX', 'Dell', 1000, '2022-05-16 19:18:02', '2022-05-24 00:15:49', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `id` int(11) NOT NULL,
  `servicio` text COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` text COLLATE utf8_spanish_ci NOT NULL,
  `monto` decimal(10,0) NOT NULL,
  `fecha_vencimiento` date NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`id`, `servicio`, `descripcion`, `monto`, `fecha_vencimiento`, `fecha`) VALUES
(21, 'CFE', 'se realizó el pago  ', 1120, '2022-05-10', '2022-04-29 15:30:08'),
(22, 'cable izi', 'pagado ', 1512, '2022-05-05', '2022-04-29 15:32:21'),
(23, 'Renta', 'pagado', 2000, '2022-05-02', '2022-04-29 15:31:08'),
(24, 'dfasds', 'asdsad', 343, '2034-05-04', '2022-05-15 04:41:44');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `usuario` text COLLATE utf8_spanish_ci NOT NULL,
  `telefono` text COLLATE utf8_spanish_ci NOT NULL,
  `cargo` text COLLATE utf8_spanish_ci NOT NULL,
  `password` text COLLATE utf8_spanish_ci NOT NULL,
  `foto` text COLLATE utf8_spanish_ci NOT NULL,
  `estado` int(11) NOT NULL,
  `ultimo_login` datetime NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `usuario`, `telefono`, `cargo`, `password`, `foto`, `estado`, `ultimo_login`, `fecha`) VALUES
(1, 'Omar Suárez Casas', 'admin', '(228) 114-4037', 'Administrador', '$2a$07$asxx54ahjppf45sd87a5auXBm1Vr2M1NV5t/zNQtGHGpS5fFirrbG', 'vistas/img/usuarios/omar/204.jpg', 1, '2023-04-25 19:14:10', '2022-05-01 15:24:18'),
(22, 'byh', 'ybyhbby', '(424) 454-5455', 'Administrador', '$2a$07$asxx54ahjppf45sd87a5au7veDJCERXScmkUSWc6t0SyztR2Wq2Oe', '', 1, '0000-00-00 00:00:00', '2022-05-13 17:37:24'),
(28, 'Luis Garcia Marquez', 'luis', '(111) 111-1111', 'Empleado', '$2a$07$asxx54ahjppf45sd87a5auuHn7V.6ElsnJiC/rn4hPTVA48f0.5UO', '', 1, '0000-00-00 00:00:00', '2022-05-16 17:06:29'),
(29, 'Emmanuel Ramirez Hernández', 'Emma', '(454) 353-4535', 'Contador', '$2a$07$asxx54ahjppf45sd87a5auxzody7xQb7Kc3MZdRxGVUGx8g1FR1V2', 'vistas/img/usuarios/Emma/588.jpg', 1, '0000-00-00 00:00:00', '2022-05-16 17:07:17'),
(30, 'Guadalupe Garcia Lopez', 'lupe', '(654) 654-6456', 'Empleado', '$2a$07$asxx54ahjppf45sd87a5aurX4rmGQjHmpkR06ymuXo1e8MjTYcX8u', 'vistas/img/usuarios/lupe/804.png', 0, '0000-00-00 00:00:00', '2022-05-16 17:08:29'),
(31, 'Elizabeth Flores ', 'Lopez', '(456) 546-5464', 'Administrador', '$2a$07$asxx54ahjppf45sd87a5auk9dDfrSw//GN1OjwmQ2FWNFVlXqUap6', 'vistas/img/usuarios/Lopez/147.jpg', 0, '0000-00-00 00:00:00', '2022-05-16 17:08:59'),
(32, 'Gabriel Garcia ', 'ga', '(645) 645-7567', 'Contador', '$2a$07$asxx54ahjppf45sd87a5aurjWVH.cW5Gg3EmJ3m/y/JTx8CQifDLi', 'vistas/img/usuarios/ga/506.jpg', 0, '0000-00-00 00:00:00', '2022-05-16 17:09:52');

--
-- Disparadores `usuarios`
--
DELIMITER $$
CREATE TRIGGER `usuarios_eliminados` AFTER DELETE ON `usuarios` FOR EACH ROW BEGIN
  INSERT INTO usuario_eliminado(nombre, usuario, telefono, cargo, fecha) 
  VALUES (OLD.nombre, OLD.usuario, OLD.telefono, OLD.cargo,  OLD.fecha);
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_eliminado`
--

CREATE TABLE `usuario_eliminado` (
  `id` int(11) NOT NULL,
  `nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `usuario` text COLLATE utf8_spanish_ci NOT NULL,
  `telefono` text COLLATE utf8_spanish_ci NOT NULL,
  `cargo` text COLLATE utf8_spanish_ci NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp(),
  `fecha_eliminacion` timestamp NOT NULL DEFAULT current_timestamp(),
  `descripcion` text COLLATE utf8_spanish_ci DEFAULT NULL,
  `motivo` text COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuario_eliminado`
--

INSERT INTO `usuario_eliminado` (`id`, `nombre`, `usuario`, `telefono`, `cargo`, `fecha`, `fecha_eliminacion`, `descripcion`, `motivo`) VALUES
(18, 'Kevin Baez', 'kevin', '(323) 242-4234', 'Empleado', '2022-05-03 00:40:32', '2022-05-11 22:08:20', 'fdsafdsfds', 'No cumplió con el contrato'),
(19, 'asdsads', 'asdasd', '(323) 243-2432', 'Administrador', '2022-05-12 19:25:56', '2022-05-12 22:32:07', 'sdfsdf', 'Daño a los productos'),
(20, 'adasd', 'adasd', '(534) 534-5345', 'Empleado', '2022-05-15 04:33:12', '2022-05-15 04:54:51', NULL, NULL),
(21, 'asdsad', 'asdasd', '(232) 423-5425', 'Empleado', '2022-05-14 01:09:54', '2022-05-15 04:55:00', NULL, NULL),
(22, 'fs', 'fsdfsf', '(556) 665-5464', 'Empleado', '2022-05-16 04:48:17', '2022-05-16 16:05:49', NULL, NULL),
(23, 'sdfsf', 'sdfsdf', '(543) 543-5435', 'Empleado', '2022-05-16 04:18:18', '2022-05-16 16:05:55', NULL, NULL),
(24, '123', 'deftgert', '(1__) ___-____', 'Contador', '2022-05-16 17:22:59', '2022-05-16 22:24:22', NULL, NULL),
(25, 'afdfsd', 'sfsgg', '(345) 435-3535', 'Empleado', '2022-05-15 23:09:07', '2022-11-09 17:38:52', NULL, NULL),
(26, 'fdsf', 'sdsdfdsf', '(456) 546-4564', 'Administrador', '2022-05-16 17:22:42', '2022-11-09 17:39:00', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `id` int(11) NOT NULL,
  `codigo` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `id_vendedor` int(11) NOT NULL,
  `productos` text COLLATE utf8_spanish_ci NOT NULL,
  `dproductos` text COLLATE utf8_spanish_ci DEFAULT NULL,
  `reembolso` float DEFAULT NULL,
  `impuesto` float NOT NULL,
  `total` float NOT NULL,
  `metodo_pago` text COLLATE utf8_spanish_ci NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`id`, `codigo`, `id_cliente`, `id_vendedor`, `productos`, `dproductos`, `reembolso`, `impuesto`, `total`, `metodo_pago`, `fecha`) VALUES
(42, 10002, 5, 1, '[{\"id\":\"7\",\"descripcion\":\"procesador Razer 5\",\"cantidad\":\"1\",\"stock\":\"14\",\"precio\":\"4050\",\"total\":\"4050\"}]', '[{\"id\":\"24\",\"descripcion\":\"disipador de calor\",\"cantidad\":\"1\",\"stock\":\"35\",\"precio\":\"1000\",\"total\":\"1000\"}]', 1000, 0, 0, 'Efectivo', '2022-05-23 16:10:30'),
(43, 10003, 6, 1, '[{\"id\":\"5\",\"descripcion\":\"fuente de poder\",\"cantidad\":\"1\",\"stock\":\"49\",\"precio\":\"1000\",\"total\":\"1000\"}]', '[{\"id\":\"3\",\"descripcion\":\"disco duro\",\"cantidad\":\"1\",\"stock\":\"44\",\"precio\":\"2000\",\"total\":\"2000\"},{\"id\":\"4\",\"descripcion\":\"ram\",\"cantidad\":\"1\",\"stock\":\"31\",\"precio\":\"2108\",\"total\":\"2108\"}]', 4108, 0, 1000, 'Efectivo', '2022-05-12 23:31:04'),
(48, 10004, 5, 1, '[{\"id\":\"7\",\"descripcion\":\"procesador Razer 5\",\"cantidad\":\"1\",\"stock\":\"58\",\"precio\":\"4050\",\"total\":\"4050\"},{\"id\":\"6\",\"descripcion\":\"tarjeta grafica\",\"cantidad\":\"1\",\"stock\":\"70\",\"precio\":\"3050\",\"total\":\"3050\"}]', NULL, NULL, 0, 7100, 'Efectivo', '2022-05-12 07:08:58'),
(49, 10005, 6, 1, '[{\"id\":\"7\",\"descripcion\":\"procesador Razer 5\",\"cantidad\":\"1\",\"stock\":\"57\",\"precio\":\"4050\",\"total\":\"4050\"},{\"id\":\"6\",\"descripcion\":\"tarjeta grafica\",\"cantidad\":\"1\",\"stock\":\"69\",\"precio\":\"3050\",\"total\":\"3050\"},{\"id\":\"5\",\"descripcion\":\"fuente de poder\",\"cantidad\":\"1\",\"stock\":\"77\",\"precio\":\"1000\",\"total\":\"1000\"}]', '[{\"id\":\"24\",\"descripcion\":\"disipador de calor\",\"cantidad\":\"1\",\"stock\":\"36\",\"precio\":\"1000\",\"total\":\"1000\"}]', 0, 0, 8100, 'TC-0', '2022-05-22 05:23:49'),
(50, 10006, 5, 1, '[{\"id\":\"7\",\"descripcion\":\"procesador Razer 5\",\"cantidad\":\"1\",\"stock\":\"57\",\"precio\":\"4050\",\"total\":\"4050\"}]', '[{\"id\":\"24\",\"descripcion\":\"disipador de calor\",\"cantidad\":\"1\",\"stock\":\"36\",\"precio\":\"1000\",\"total\":\"1000\"}]', 1000, 0, 4050, 'Efectivo', '2022-05-22 18:24:03');

--
-- Disparadores `ventas`
--
DELIMITER $$
CREATE TRIGGER `devoluciones_update` AFTER UPDATE ON `ventas` FOR EACH ROW BEGIN
  INSERT INTO devoluciones(id_cliente, id_vendedor, productos, total, fecha) 
  VALUES (NEW.id_cliente, NEW.id_vendedor, NEW.dproductos, NEW.reembolso, NEW.fecha);
END
$$
DELIMITER ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `devolucion`
--
ALTER TABLE `devolucion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `devoluciones`
--
ALTER TABLE `devoluciones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pago_empleados`
--
ALTER TABLE `pago_empleados`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pago_proveedores`
--
ALTER TABLE `pago_proveedores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `producto_eliminado`
--
ALTER TABLE `producto_eliminado`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario_eliminado`
--
ALTER TABLE `usuario_eliminado`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `devolucion`
--
ALTER TABLE `devolucion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `devoluciones`
--
ALTER TABLE `devoluciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT de la tabla `empleado`
--
ALTER TABLE `empleado`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `pago_empleados`
--
ALTER TABLE `pago_empleados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pago_proveedores`
--
ALTER TABLE `pago_proveedores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `producto_eliminado`
--
ALTER TABLE `producto_eliminado`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `servicios`
--
ALTER TABLE `servicios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT de la tabla `usuario_eliminado`
--
ALTER TABLE `usuario_eliminado`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
