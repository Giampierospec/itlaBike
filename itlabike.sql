-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 15, 2017 at 04:11 AM
-- Server version: 5.7.17-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `itlabike`
--

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nombre` varchar(20) DEFAULT NULL,
  `correo` varchar(30) DEFAULT NULL,
  `clave` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `correo`, `clave`) VALUES
(1, 'hommy', 'hdejesus@gmail.com', '202cb962ac59075b964b07152d234b70'),
(2, 'maria', 'msosa@gmail.com', '202cb962ac59075b964b07152d234b70'),
(3, 'Jorge Perez', 'jperez@gmai.com', '123'),
(4, 'Jorge Perez', 'jperez@gmai.com', '123abc'),
(5, 'miguel ortiz', 'mortiz@gmail.com', '12345'),
(6, 'miguel ortiz', 'mortiz@gmail.com', '12345'),
(7, 'Juan Martinez', 'jmartinez@gmail.com', 'hola123'),
(8, 'Juan Martinez', 'jmartinez@gmail.com', '9450476b384b32d8ad8b758e76c98a69'),
(9, 'Gregorio Luperon', 'gluperon@gmail.com', '4297f44b13955235245b2497399d7a93'),
(10, 'yoel almonte', 'yalmonte@gmail.com', 'fbc71ce36cc20790f2eeed2197898e71'),
(11, 'misal mora', 'mmora@gmail.com', '202cb962ac59075b964b07152d234b70'),
(12, 'carlos diaz', 'cdiaz@gmail.com', '202cb962ac59075b964b07152d234b70'),
(13, 'federico mesa', 'fmesa@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(14, 'federico mesa', 'fmesa@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(17, 'Néstor De La Cruz', 'nestoredelacruz@gmail.com', NULL),
(18, 'hola', 'hdejesus@gmail.com', '202cb962ac59075b964b07152d234b70'),
(19, 'Hommy De Jesus', 'hdejesus@gmail.com', '202cb962ac59075b964b07152d234b70'),
(20, 'Hommy De Jesus', 'hdejesus@gmail.com', '123'),
(21, 'Hommy De Jesus', 'hdejesus@gmail.com', '123'),
(22, 'Hommy De Jesus', 'hdejesus@gmail.com', '123'),
(23, 'Hommy De Jesus', 'hdejesus@gmail.com', '123'),
(24, 'Hommy De Jesus', 'hdejesus@gmail.com', '123'),
(25, 'Hommy De Jesus', 'hdejesus@gmail.com', '123'),
(26, 'Hommy De Jesus', 'hdejesus@gmail.com', '123'),
(27, 'Hommy De Jesus', 'hdejesus@gmail.com', '123'),
(28, 'Hommy De Jesus', 'hdejesus@gmail.com', '123'),
(29, 'Hommy De Jesus', 'hdejesus@gmail.com', '123'),
(30, 'Hommy De Jesus', 'hdejesus@gmail.com', '123'),
(31, 'Hommy De Jesus', 'hdejesus@gmail.com', '123'),
(32, 'Hommy De Jesus', 'hdejesus@gmail.com', '123'),
(33, 'Hommy De Jesus', 'hdejesus@gmail.com', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
