-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 28, 2019 at 11:32 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(100) NOT NULL,
  `contrasena` varchar(50) NOT NULL,
  `nombre_c` varchar(50) NOT NULL,
  `e_mail` varchar(50) NOT NULL,
  `tipo` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`id`, `usuario`, `contrasena`, `nombre_c`, `e_mail`, `tipo`) VALUES
(1, 'giselleg', '1234', 'Giselle Guadalupe Espino Montes', 'giselleesmo@hotmail.com', 1),
(2, 'manzana', 'manzanita', 'Luis Angel', 'Luismendoza@gmail.com', 2),
(3, 'manuel', 'bby', 'Manuel Ramiro Vaquera Mireles', 'Curvis@gmail.com', 2),
(4, '15010021', 'gay', 'Juanes Hinojosa', 'juana@hotmail.com', 2),
(5, '15010057', 'wero', 'Jose Andres Chavez Garcia', 'Werejo@hotmail.com', 2),
(6, 'Juan', 'juan', 'Juan Angel Rosales ', 'Juanito@gmail.com', 3),
(7, 'nacho', 'nacho', 'Manuel Ignacio Salas Guzman', 'Ignacio@gmail.com', 4),
(8, 'Daniel', '1234', 'Daniel Arredondo Salcedo', 'Daniels@gmail.com', 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
