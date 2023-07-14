-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-07-2023 a las 02:00:27
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `idClientes` int(11) NOT NULL,
  `cedula_clientes` varchar(11) NOT NULL,
  `nombres_clientes` varchar(45) NOT NULL,
  `apellidos_clientes` varchar(45) NOT NULL,
  `edad_clientes` int(11) NOT NULL,
  `veces_compra_clientes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`idClientes`, `cedula_clientes`, `nombres_clientes`, `apellidos_clientes`, `edad_clientes`, `veces_compra_clientes`) VALUES
(1, '1723669923', 'David', 'Bravo', 23, 12),
(3, '1303455575', 'Emiro', 'Bravo', 60, 15),
(4, '1739213921', 'Emilia', 'Marx', 25, 17),
(5, '1732342343', 'Rebeca', 'Mena', 23, 19),
(6, '1905738213', 'Daniel', 'Mejia', 19, 15);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `idproductos` int(11) NOT NULL,
  `codigo_producto` varchar(45) NOT NULL,
  `nombre_producto` varchar(45) NOT NULL,
  `precio_producto` float NOT NULL,
  `cantidad_producto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`idproductos`, `codigo_producto`, `nombre_producto`, `precio_producto`, `cantidad_producto`) VALUES
(1, 'BKMP', 'Atun Real', 1.5, 90),
(3, 'NPKQ', 'Fideos Sumesa', 1, 90),
(5, 'NMPQ', 'Cerveza Pilsener', 1.6, 90),
(6, 'CMKQ', 'Coca cola', 0.5, 100),
(7, 'BOPQ', 'Galletas Amor', 0.7, 50),
(9, 'DFPA', 'Arroz Rico', 15.5, 250),
(10, 'VOPA', 'Doritos Rojos', 0.5, 100),
(12, 'MPAS', 'Cola Pepsi', 0.5, 45);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`idClientes`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`idproductos`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `idClientes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `idproductos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
