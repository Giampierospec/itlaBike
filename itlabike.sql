-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2017 at 07:56 PM
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
-- Table structure for table `anuncio`
--

CREATE TABLE `anuncio` (
  `id` int(11) NOT NULL,
  `titulo` text,
  `categoria` varchar(45) DEFAULT NULL,
  `descripcion` text,
  `precio` double DEFAULT NULL,
  `idUser` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `anuncio`
--

INSERT INTO `anuncio` (`id`, `titulo`, `categoria`, `descripcion`, `precio`, `idUser`) VALUES
(2, 'Hi everyone!', 'mountain_bike', 'Ok', 4444, 40),
(3, 'Just checking!', 'mountain_bike', 'Ok', 4444, 40),
(4, 'Hola', 'estatica', 'Ok', 444, 42),
(5, 'Mountain Bike', 'mountain_bike', 'Son mountain Bikes', 444.45, 43),
(6, 'Caminadora', 'estatica', 'es una caminadora', 444, 43);

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `imgPath` text,
  `imgContent` text,
  `idAd` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `imgPath`, `imgContent`, `idAd`) VALUES
(1, 'C:/xampp/htdocs/itlaBike/adImages/', 'estadoCuenta.png', 3),
(2, 'C:/xampp/htdocs/itlaBike/adImages/', 'Laptop.png', 3),
(3, 'C:/xampp/htdocs/itlaBike/adImages/', 'Persona.png', 3),
(4, 'C:/xampp/htdocs/itlaBike/adImages/', 'PolizadeSeguros.png', 3),
(5, 'C:/xampp/htdocs/itlaBike/adImages/', 'gitHub_profile.jpg', 4),
(6, 'C:/xampp/htdocs/itlaBike/adImages/', 'Laptop.png', 5),
(7, 'C:/xampp/htdocs/itlaBike/adImages/', 'Persona.png', 5),
(8, 'C:/xampp/htdocs/itlaBike/adImages/', 'PolizadeSeguros.png', 5),
(9, 'C:/xampp/htdocs/itlaBike/adImages/', 'PolizadeSeguros_2.png', 5),
(10, 'C:/xampp/htdocs/itlaBike/adImages/', 'PolizadeSeguros.png', 6),
(11, 'C:/xampp/htdocs/itlaBike/adImages/', 'Persona - Copy.png', 6),
(12, 'C:/xampp/htdocs/itlaBike/adImages/', 'PolizadeSeguros - Copy.png', 6);

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nombre` varchar(20) DEFAULT NULL,
  `correo` varchar(30) DEFAULT NULL,
  `clave` varchar(50) DEFAULT NULL,
  `bloqueado` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `correo`, `clave`, `bloqueado`) VALUES
(42, 'giampiero', 'giampierospec@gmail.com', '202cb962ac59075b964b07152d234b70', NULL),
(43, 'Giampiero Specogna', 'giampi_12@hotmail.com', '202cb962ac59075b964b07152d234b70', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anuncio`
--
ALTER TABLE `anuncio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_anuncio_idx` (`idAd`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anuncio`
--
ALTER TABLE `anuncio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `fk_ad` FOREIGN KEY (`idAd`) REFERENCES `anuncio` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
