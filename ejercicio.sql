-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 28-07-2016 a las 14:04:33
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `ejercicio`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE IF NOT EXISTS `clientes` (
  `numclie` int(20) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `repclie` int(20) NOT NULL,
  `limitecredito` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`numclie`, `nombre`, `repclie`, `limitecredito`) VALUES
(2101, 'Luis Garcia Anton', 106, 65000),
(2102, 'Alvaro Rodriguez', 101, 65000),
(2103, 'Jaime Lorens', 105, 50000),
(2104, 'Antonio Canales', 101, 45000),
(2105, 'Juan Suarez', 102, 65000),
(2106, 'Julia Arquetera', 109, 55000),
(2107, 'Alberto Juanes', 103, 25000),
(2108, 'Cristobal Garcial', 103, 50000),
(2109, 'Maria Silva', 108, 50000),
(2110, 'Luisa Maron', 104, 20000),
(2111, 'Cristina Bulini', 102, 20000),
(2112, 'Vivente Martinez', 101, 20000),
(2112, 'Carlos Tena', 106, 35000),
(2113, 'Junipero Alvarez', 108, 60000),
(2114, 'Salomon Bueno', 109, 25000),
(2115, 'Juan Malo', 102, 50000),
(2116, 'Vivente Rios', 103, 45000),
(2117, 'Jose Marchante', 105, 30000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE IF NOT EXISTS `empleados` (
  `numemp` int(10) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `edad` int(10) NOT NULL,
  `oficina` int(10) DEFAULT NULL,
  `titulo` varchar(20) NOT NULL,
  `contrato` date NOT NULL,
  `jefe` int(10) NOT NULL,
  `cuota` int(10) NOT NULL,
  `ventas` int(10) NOT NULL,
  PRIMARY KEY (`numemp`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`numemp`, `nombre`, `edad`, `oficina`, `titulo`, `contrato`, `jefe`, `cuota`, `ventas`) VALUES
(101, 'Antonio Viguer', 45, 12, 'Representante', '1986-10-20', 104, 300000, 305000),
(102, 'Alvaro Jaimes', 48, 21, 'Representante', '1986-12-10', 108, 350000, 474000),
(103, 'Juan Rovira', 29, 12, 'Representante', '1987-03-01', 104, 275000, 286000),
(104, 'Jose Gonzales', 33, 12, 'Dir Ventas', '1987-05-19', 106, 200000, 143000),
(105, 'Julia Pantalla', 37, 13, 'Representante', '1988-08-12', 104, 350000, 368000),
(106, 'Luis Gavilan', 52, 11, 'Dir General', '1988-06-14', 0, 275000, 299000),
(107, 'Jorge Gutierrez', 49, 22, 'Representante', '1988-11-14', 108, 300000, 186000),
(108, 'Ana Bustamante', 62, 21, 'Dir Ventas', '1989-10-12', 106, 350000, 361000),
(109, 'Maria Sunta', 31, 11, 'Representante', '1999-10-12', 106, 300000, 392000),
(110, 'Juan Victor', 41, NULL, 'Representante', '1990-01-13', 104, 0, 76000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `oficinas`
--

CREATE TABLE IF NOT EXISTS `oficinas` (
  `oficina` int(20) NOT NULL,
  `ciudad` varchar(20) NOT NULL,
  `region` varchar(20) NOT NULL,
  `dir` int(20) DEFAULT NULL,
  `objetivo` int(20) NOT NULL,
  `ventas` int(20) NOT NULL,
  PRIMARY KEY (`oficina`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `oficinas`
--

INSERT INTO `oficinas` (`oficina`, `ciudad`, `region`, `dir`, `objetivo`, `ventas`) VALUES
(11, 'Valencia', 'Este', 106, 575000, 693000),
(12, 'Alicante', 'Este', 104, 800000, 735000),
(13, 'Castellon', 'Este', 105, 350000, 368000),
(21, 'Babajoz', 'Oeste', 108, 725000, 836000),
(22, 'Coruña', 'Oeste', 108, 300000, 186000),
(23, 'Madrid', 'Centro', NULL, 0, 0),
(24, 'Madrid', 'Centro', 108, 250000, 150000),
(26, 'Pamplona', 'Norte', NULL, 0, 0),
(28, 'Vaalencia', 'Este', 0, 900000, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE IF NOT EXISTS `pedidos` (
  `cod` int(20) NOT NULL,
  `numpedido` int(20) NOT NULL,
  `fechapedido` date NOT NULL,
  `clie` int(20) NOT NULL,
  `rep` int(20) NOT NULL,
  `fab` int(20) NOT NULL,
  `producto` varchar(20) NOT NULL,
  `cant` int(20) NOT NULL,
  `importe` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pedidos`
--

INSERT INTO `pedidos` (`cod`, `numpedido`, `fechapedido`, `clie`, `rep`, `fab`, `producto`, `cant`, `importe`) VALUES
(1, 110036, '1997-01-02', 2107, 110, 1, '4100z', 9, 22500),
(2, 110036, '1997-01-02', 2117, 106, 8, '2a44i', 7, 31500),
(3, 112963, '1997-05-10', 2103, 105, 1, '41004', 28, 3276),
(4, 112968, '1990-01-11', 2102, 101, 1, '41004', 34, 3978),
(5, 112975, '1997-02-11', 2111, 103, 8, '2a44g', 6, 2100),
(6, 112979, '1989-10-12', 2114, 108, 1, '4100z', 6, 15000),
(7, 112983, '1997-05-10', 2103, 105, 1, '41004', 6, 702),
(8, 112987, '1997-01-01', 2103, 105, 1, '4100y', 11, 27500),
(9, 112989, '1997-12-10', 2101, 106, 3, '114', 6, 1458),
(10, 112992, '1990-04-15', 2118, 108, 1, '41002', 10, 760);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE IF NOT EXISTS `productos` (
  `idfab` int(11) NOT NULL,
  `idproducto` varchar(11) NOT NULL,
  `descripcion` varchar(11) NOT NULL,
  `precio` int(11) NOT NULL,
  `existencias` int(11) NOT NULL,
  PRIMARY KEY (`idproducto`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`idfab`, `idproducto`, `descripcion`, `precio`, `existencias`) VALUES
(3, '112', 'cubo x', 148, 115),
(3, '114', 'cubo y', 243, 15),
(8, '2a44c', 'junta', 79, 210),
(8, '2a44g', 'pass', 350, 14),
(8, '2a44i', 'bomba r', 4500, 12),
(8, '2a44r', 'bamba i', 4500, 12),
(1, '41001', 'arandela', 58, 277),
(1, '41002', 'bisagra', 80, 167),
(1, '41003', 'art 13', 112, 207),
(1, '41004', 'art 14', 123, 139),
(2, '41006', 'manivela', 652, 3),
(1, '4100x', 'junta', 26, 37),
(1, '4100y', 'extractor', 2888, 25),
(1, '4100z', 'mont', 2625, 28),
(2, '41089', 'rodamiento', 225, 78),
(2, '41672', 'plato', 180, 0),
(4, '773c', 'reostato', 975, 28),
(4, '775c', 'reostato 2', 1425, 5),
(4, '779c', 'reostrato 3', 1875, 0),
(4, '887h', 'caja clavos', 54, 223),
(4, '887p', 'perno', 25, 24),
(4, '887x', 'manivela', 475, 32),
(7, 'xk47', 'red', 355, 38),
(7, 'xk48', 'red 1', 134, 203),
(7, 'xk48a', 'red 2', 117, 37);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
