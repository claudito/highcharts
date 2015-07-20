-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 20-07-2015 a las 09:38:26
-- Versión del servidor: 5.1.41
-- Versión de PHP: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `prueba`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE IF NOT EXISTS `empleados` (
  `idempleado` int(11) NOT NULL AUTO_INCREMENT,
  `nombres` varchar(32) NOT NULL,
  `departamento` varchar(40) NOT NULL,
  `sueldo` double DEFAULT NULL,
  `estimado` decimal(15,6) NOT NULL,
  KEY `id` (`idempleado`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcar la base de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`idempleado`, `nombres`, `departamento`, `sueldo`, `estimado`) VALUES
(1, 'Juan Perez', 'Contabilidad', 600, '2000.000000'),
(2, 'Laura Morales', 'Contabilidad', 550, '3000.000000'),
(3, 'Luis Gutierrez', 'Logistica', 1000, '4000.000000'),
(4, 'Pedro Solar', 'Informatica', 500, '5000.000000'),
(5, 'David Vilchez', 'Contabilidad', 550, '6000.000000');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
