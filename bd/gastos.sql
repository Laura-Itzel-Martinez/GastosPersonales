-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2021 at 12:58 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gastos`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_gastos`
--

CREATE TABLE `t_gastos` (
  `id_gasto` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `gasto` int(30) NOT NULL,
  `fecha` date NOT NULL DEFAULT current_timestamp(),
  `estado` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_gastos`
--

INSERT INTO `t_gastos` (`id_gasto`, `nombre`, `gasto`, `fecha`, `estado`) VALUES
(1, 'Sopas\r\nAroz', 130, '2021-07-22', 1),
(7, 'Ropa,dulces', 1200, '2021-07-23', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_gastos`
--
ALTER TABLE `t_gastos`
  ADD PRIMARY KEY (`id_gasto`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_gastos`
--
ALTER TABLE `t_gastos`
  MODIFY `id_gasto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
