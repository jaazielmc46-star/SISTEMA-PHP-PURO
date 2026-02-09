-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 09, 2026 at 01:54 AM
-- Server version: 8.4.3
-- PHP Version: 8.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tienda`
--

-- --------------------------------------------------------

--
-- Table structure for table `clientes`
--

CREATE TABLE `clientes` (
  `id` int NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `clientes`
--

INSERT INTO `clientes` (`id`, `nombre`, `email`, `created_at`) VALUES
(1, 'Juan Pérez', 'juan@correo.com', '2026-02-07 12:52:07'),
(2, 'Ana López', 'ana@correo.com', '2026-02-07 12:52:07'),
(3, 'Carlos Gómez', 'carlos@correo.com', '2026-02-07 12:52:07'),
(4, 'María Torres', 'maria@correo.com', '2026-02-07 12:52:07'),
(5, 'Luis Hernández', 'luis@correo.com', '2026-02-07 12:52:07'),
(6, 'Sofía Martínez', 'sofia@correo.com', '2026-02-07 12:52:07'),
(7, 'Pedro Ramírez', 'pedro@correo.com', '2026-02-07 12:52:07'),
(8, 'Lucía Flores', 'lucia@correo.com', '2026-02-07 12:52:07'),
(9, 'Miguel Castillo', 'miguel@correo.com', '2026-02-07 12:52:07'),
(10, 'Elena Reyes', 'elena@correo.com', '2026-02-07 12:52:07');

-- --------------------------------------------------------

--
-- Table structure for table `productos`
--

CREATE TABLE `productos` (
  `id` int NOT NULL,
  `cliente_id` int NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `productos`
--

INSERT INTO `productos` (`id`, `cliente_id`, `nombre`, `precio`, `created_at`) VALUES
(1, 1, 'Producto 1', 10.50, '2026-02-07 12:55:54'),
(2, 1, 'Producto 2', 11.00, '2026-02-07 12:55:54'),
(3, 1, 'Producto 3', 11.50, '2026-02-07 12:55:54'),
(4, 1, 'Producto 4', 12.00, '2026-02-07 12:55:54'),
(5, 1, 'Producto 5', 12.50, '2026-02-07 12:55:54'),
(6, 1, 'Producto 6', 13.00, '2026-02-07 12:55:54'),
(7, 1, 'Producto 7', 13.50, '2026-02-07 12:55:54'),
(8, 1, 'Producto 8', 14.00, '2026-02-07 12:55:54'),
(9, 1, 'Producto 9', 14.50, '2026-02-07 12:55:54'),
(10, 1, 'Producto 10', 15.00, '2026-02-07 12:55:54'),
(11, 1, 'Producto 11', 15.50, '2026-02-07 12:55:54'),
(12, 1, 'Producto 12', 16.00, '2026-02-07 12:55:54'),
(13, 1, 'Producto 13', 16.50, '2026-02-07 12:55:54'),
(14, 1, 'Producto 14', 17.00, '2026-02-07 12:55:54'),
(15, 1, 'Producto 15', 17.50, '2026-02-07 12:55:54'),
(16, 1, 'Producto 16', 18.00, '2026-02-07 12:55:54'),
(17, 1, 'Producto 17', 18.50, '2026-02-07 12:55:54'),
(18, 1, 'Producto 18', 19.00, '2026-02-07 12:55:54'),
(19, 1, 'Producto 19', 19.50, '2026-02-07 12:55:54'),
(20, 1, 'Producto 20', 20.00, '2026-02-07 12:55:54'),
(21, 1, 'Producto 21', 20.50, '2026-02-07 12:55:54'),
(22, 1, 'Producto 22', 21.00, '2026-02-07 12:55:54'),
(23, 1, 'Producto 23', 21.50, '2026-02-07 12:55:54'),
(24, 1, 'Producto 24', 22.00, '2026-02-07 12:55:54'),
(25, 1, 'Producto 25', 22.50, '2026-02-07 12:55:54'),
(26, 1, 'Producto 26', 23.00, '2026-02-07 12:55:54'),
(27, 1, 'Producto 27', 23.50, '2026-02-07 12:55:54'),
(28, 1, 'Producto 28', 24.00, '2026-02-07 12:55:54'),
(29, 1, 'Producto 29', 24.50, '2026-02-07 12:55:54'),
(30, 1, 'Producto 30', 25.00, '2026-02-07 12:55:54'),
(31, 1, 'Producto 31', 25.50, '2026-02-07 12:55:54'),
(32, 1, 'Producto 32', 26.00, '2026-02-07 12:55:54'),
(33, 1, 'Producto 33', 26.50, '2026-02-07 12:55:54'),
(34, 1, 'Producto 34', 27.00, '2026-02-07 12:55:54'),
(35, 1, 'Producto 35', 27.50, '2026-02-07 12:55:54'),
(36, 1, 'Producto 36', 28.00, '2026-02-07 12:55:54'),
(37, 1, 'Producto 37', 28.50, '2026-02-07 12:55:54'),
(38, 1, 'Producto 38', 29.00, '2026-02-07 12:55:54'),
(39, 1, 'Producto 39', 29.50, '2026-02-07 12:55:54'),
(40, 1, 'Producto 40', 30.00, '2026-02-07 12:55:54'),
(41, 1, 'Producto 41', 30.50, '2026-02-07 12:55:54'),
(42, 1, 'Producto 42', 31.00, '2026-02-07 12:55:54'),
(43, 1, 'Producto 43', 31.50, '2026-02-07 12:55:54'),
(44, 1, 'Producto 44', 32.00, '2026-02-07 12:55:54'),
(45, 1, 'Producto 45', 32.50, '2026-02-07 12:55:54'),
(46, 1, 'Producto 46', 33.00, '2026-02-07 12:55:54'),
(47, 1, 'Producto 47', 33.50, '2026-02-07 12:55:54'),
(48, 1, 'Producto 48', 34.00, '2026-02-07 12:55:54'),
(49, 1, 'Producto 49', 34.50, '2026-02-07 12:55:54'),
(50, 1, 'Producto 50', 35.00, '2026-02-07 12:55:54'),
(51, 1, 'Producto 51', 35.50, '2026-02-07 12:55:54'),
(52, 1, 'Producto 52', 36.00, '2026-02-07 12:55:54'),
(53, 1, 'Producto 53', 36.50, '2026-02-07 12:55:54'),
(54, 1, 'Producto 54', 37.00, '2026-02-07 12:55:54'),
(55, 1, 'Producto 55', 37.50, '2026-02-07 12:55:54'),
(56, 1, 'Producto 56', 38.00, '2026-02-07 12:55:54'),
(57, 1, 'Producto 57', 38.50, '2026-02-07 12:55:54'),
(58, 1, 'Producto 58', 39.00, '2026-02-07 12:55:54'),
(59, 1, 'Producto 59', 39.50, '2026-02-07 12:55:54'),
(60, 1, 'Producto 60', 40.00, '2026-02-07 12:55:54'),
(61, 1, 'Producto 61', 40.50, '2026-02-07 12:55:54'),
(62, 1, 'Producto 62', 41.00, '2026-02-07 12:55:54'),
(63, 1, 'Producto 63', 41.50, '2026-02-07 12:55:54'),
(64, 1, 'Producto 64', 42.00, '2026-02-07 12:55:54'),
(65, 1, 'Producto 65', 42.50, '2026-02-07 12:55:54'),
(66, 1, 'Producto 66', 43.00, '2026-02-07 12:55:54'),
(67, 1, 'Producto 67', 43.50, '2026-02-07 12:55:54'),
(68, 1, 'Producto 68', 44.00, '2026-02-07 12:55:54'),
(69, 1, 'Producto 69', 44.50, '2026-02-07 12:55:54'),
(70, 1, 'Producto 70', 45.00, '2026-02-07 12:55:54'),
(71, 1, 'Producto 71', 45.50, '2026-02-07 12:55:54'),
(72, 1, 'Producto 72', 46.00, '2026-02-07 12:55:54'),
(73, 1, 'Producto 73', 46.50, '2026-02-07 12:55:54'),
(74, 1, 'Producto 74', 47.00, '2026-02-07 12:55:54'),
(75, 1, 'Producto 75', 47.50, '2026-02-07 12:55:54'),
(76, 1, 'Producto 76', 48.00, '2026-02-07 12:55:54'),
(77, 1, 'Producto 77', 48.50, '2026-02-07 12:55:54'),
(78, 1, 'Producto 78', 49.00, '2026-02-07 12:55:54'),
(79, 1, 'Producto 79', 49.50, '2026-02-07 12:55:54'),
(80, 1, 'Producto 80', 50.00, '2026-02-07 12:55:54'),
(81, 1, 'Producto 81', 50.50, '2026-02-07 12:55:54'),
(82, 1, 'Producto 82', 51.00, '2026-02-07 12:55:54'),
(83, 1, 'Producto 83', 51.50, '2026-02-07 12:55:54'),
(84, 1, 'Producto 84', 52.00, '2026-02-07 12:55:54'),
(85, 1, 'Producto 85', 52.50, '2026-02-07 12:55:54'),
(86, 1, 'Producto 86', 53.00, '2026-02-07 12:55:54'),
(87, 1, 'Producto 87', 53.50, '2026-02-07 12:55:54'),
(88, 1, 'Producto 88', 54.00, '2026-02-07 12:55:54'),
(89, 1, 'Producto 89', 54.50, '2026-02-07 12:55:54'),
(90, 1, 'Producto 90', 55.00, '2026-02-07 12:55:54'),
(91, 1, 'Producto 91', 55.50, '2026-02-07 12:55:54'),
(92, 1, 'Producto 92', 56.00, '2026-02-07 12:55:54'),
(93, 1, 'Producto 93', 56.50, '2026-02-07 12:55:54'),
(94, 1, 'Producto 94', 57.00, '2026-02-07 12:55:54'),
(95, 1, 'Producto 95', 57.50, '2026-02-07 12:55:54'),
(96, 1, 'Producto 96', 58.00, '2026-02-07 12:55:54'),
(97, 1, 'Producto 97', 58.50, '2026-02-07 12:55:54'),
(98, 1, 'Producto 98', 59.00, '2026-02-07 12:55:54'),
(99, 1, 'Producto 99', 59.50, '2026-02-07 12:55:54'),
(100, 1, 'Producto 100', 60.00, '2026-02-07 12:55:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cliente_id` (`cliente_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`cliente_id`) REFERENCES `clientes` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
