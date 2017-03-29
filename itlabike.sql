-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2017 at 05:05 PM
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
  `descripcion` text,
  `precio` double DEFAULT NULL,
  `idUser` int(11) NOT NULL,
  `idCate` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `anuncio`
--

INSERT INTO `anuncio` (`id`, `titulo`, `descripcion`, `precio`, `idUser`, `idCate`) VALUES
(1, 'Mountain Bike aro 20', 'Esta bicicleta es una mountain bike con aro 20', 444.5, 1, 2),
(2, 'BMX con aro 17', 'Excelentes condiciones como si fuese nueva', 700.85, 2, 1),
(3, 'Bicicleta Estatica para hacer ejercicio', 'Esta bicicleta te permitira hacer ejercicio desde la comodidad de tu casa', 400.85, 3, 3),
(4, 'Bicicleta con motor electrico', 'Esta bicicleta te dará el poder de un motor eléctrico', 1000.85, 2, 4),
(5, 'Bicicleta Cruiser', 'Te permitira andar en los mas cotizados lugares', 500.85, 3, 5);

-- --------------------------------------------------------

--
-- Table structure for table `categoria`
--

CREATE TABLE `categoria` (
  `id` int(11) NOT NULL,
  `categoria` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categoria`
--

INSERT INTO `categoria` (`id`, `categoria`) VALUES
(1, 'BMX'),
(2, 'Mountain Bike'),
(3, 'Estatica'),
(4, 'Electrica'),
(5, 'Cruiser');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `imgContent` text,
  `idAd` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `imgContent`, `idAd`) VALUES
(1, 'mountain_bike-1.jpg', 1),
(2, 'mountain_bike-2.png', 1),
(3, 'mountain_bike-2.png', 1),
(4, 'bmx-1.jpg', 2),
(5, 'bmx-2.png', 2),
(6, 'bmx-3.png', 2),
(7, 'estatica-1.png', 3),
(8, 'estatica-2.png', 3),
(9, 'estatica-3.png', 3),
(10, 'electrica-1.png', 4),
(11, 'electrica-2.png', 4),
(12, 'electrica-3.png', 4),
(13, 'cruiser-1.png', 5),
(14, 'cruiser-2.png', 5),
(15, 'cruiser-3.png', 5);

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `correo` varchar(50) DEFAULT NULL,
  `clave` varchar(50) DEFAULT NULL,
  `bloqueado` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `correo`, `clave`, `bloqueado`) VALUES
(1, 'Giampiero Specogna', 'giampi_12@hotmail.com', '202cb962ac59075b964b07152d234b70', NULL),
(2, 'Nestor De La Cruz', 'nestordelacruz@gmail.com', '202cb962ac59075b964b07152d234b70', NULL),
(3, 'Misael Maximiliam Mora Valerio', 'misael@gmail.com', '202cb962ac59075b964b07152d234b70', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anuncio`
--
ALTER TABLE `anuncio`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_id_user_idx` (`idUser`),
  ADD KEY `fk_cate_idx` (`idCate`);

--
-- Indexes for table `categoria`
--
ALTER TABLE `categoria`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `anuncio`
--
ALTER TABLE `anuncio`
  ADD CONSTRAINT `fk_cate` FOREIGN KEY (`idCate`) REFERENCES `categoria` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_user` FOREIGN KEY (`idUser`) REFERENCES `usuario` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `fk_ad` FOREIGN KEY (`idAd`) REFERENCES `anuncio` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
