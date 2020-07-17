-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-07-2020 a las 06:14:04
-- Versión del servidor: 10.4.13-MariaDB
-- Versión de PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tienda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `almacen`
--

CREATE TABLE `almacen` (
  `Codigo` char(4) COLLATE utf8_spanish_ci NOT NULL,
  `Nombre` tinytext COLLATE utf8_spanish_ci NOT NULL,
  `Tipo` tinytext COLLATE utf8_spanish_ci NOT NULL,
  `Cantidad` int(11) NOT NULL,
  `Precio` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `almacen`
--

INSERT INTO `almacen` (`Codigo`, `Nombre`, `Tipo`, `Cantidad`, `Precio`) VALUES
('A001', 'Intel® Core™ i5-9600', 'Procesador', 10, 1000),
('A002', 'AMD Ryzen 7 2700', 'Procesador', 21, 900),
('A003', 'Intel® Core™ i5-7640X serie X', 'Procesador', 12, 1100),
('A004', 'AMD Ryzen 5 3600', 'Procesador', 4, 858),
('B001', 'MB ASUS ROG STRIX X570-F GAMING', 'Placas Madre AM4(Amd)', 3, 1200),
('B002', 'MB MSI MAG B550 TOMAHAWK', 'Placas Madre AM4(Amd)', 7, 786),
('B003', 'MB MSI B450M PRO-VDH PLUS ', 'Placas Madre AM4(Amd)', 10, 314),
('B004', 'MB GIGABYTE B360 M AORUS PRO ', 'Placas Madre B360 (Intel)', 6, 360),
('B005', 'MB ASROCK Z390 PHANTOM GAMING SLI/AC ', 'Placas Madre Z390 (Intel)', 10, 735),
('B006', 'MB ASUS ROG STRIX Z390-E GAMING', 'Placas Madre Z390 (Intel)', 4, 1000),
('B007', 'MB GIGABYTE Z390 AORUS ULTRA', 'Placas Madre Z390 (Intel)', 2, 1000),
('D001', 'HDD SEAGATE 2TB ', 'Disco Duro', 20, 254),
('D002', 'HDD TOSHIBA 2TB', 'Disco Duro', 10, 233),
('D003', 'HDD WESTER DIGITAL 1TB', 'Disco Duro', 5, 183),
('D004', 'SSD M.2 SOLIDO WESTER DIGITAL 2280 500GB', 'Disco Solido M2', 5, 308),
('D005', 'SSD M.2 SOLIDO INTEL 1TB', 'Disco Solido M2', 3, 500),
('D006', 'SSD M.2 SOLIDO HP EX900 120GB', 'Disco Solido M2', 2, 122),
('F001', 'FUENTE COOLER MASTER MWE 650 ( MPY-6501-ACAAG-U2 ) 650W | GOLD', 'Fuente de alimentación', 4, 341),
('F002', 'FUENTE THERMALTAKE SMART M ( SP-850M ) 850W | BRONZE | MODULAR', 'Fuente de alimentación', 5, 416),
('F003', 'FUENTE ASUS ROG STRIX 750W ( 90YE00A0-B0AA00 ) 750W | GOLD | MODULAR', 'Fuente de alimentación', 2, 635),
('F004', 'FUENTE CORSAIR CX550 ( CP-9020121-NA ) 550W | BRONZE', 'Fuente de alimentación', 6, 254),
('F005', 'FUENTE EVGA 500 BR ( 100-BR-0500-K1 ) 500W | BRONZE', 'Fuente de alimentación', 5, 200),
('F006', 'FUENTE SEASONIC S12 II ( S12III-550 ) 550W | BRONZE', 'Fuente de alimentación', 7, 247);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `almacen`
--
ALTER TABLE `almacen`
  ADD PRIMARY KEY (`Codigo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
