CREATE TABLE `empleados` (
  `idempleado` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `nombres` varchar(32) NOT NULL,
  `departamento` varchar(40) NOT NULL,
  `sueldo` double DEFAULT NULL,
  `estimado` decimal(15,6) NOT NULL
) ENGINE=INNODB

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`idempleado`, `nombres`, `departamento`, `sueldo`, `estimado`) VALUES
(1, 'Juan Perez', 'Contabilidad', 600, '2000.000000'),
(2, 'Laura Morales', 'Contabilidad', 550, '3000.000000'),
(3, 'Luis Gutierrez', 'Logistica', 1000, '4000.000000'),
(4, 'Pedro Solar', 'Informatica', 500, '5000.000000'),
(5, 'David Vilchez', 'Contabilidad', 550, '6000.000000');