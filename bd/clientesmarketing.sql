-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-10-2022 a las 21:20:34
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `clientesmarketing`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clients`
--

CREATE TABLE `clients` (
  `id` int(5) NOT NULL,
  `cliente` varchar(150) DEFAULT NULL,
  `correo` varchar(100) DEFAULT NULL,
  `id_evento` int(5) NOT NULL,
  `id_tipousuario` int(5) NOT NULL,
  `id_mail` int(5) NOT NULL,
  `notificacion` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `clients`
--

INSERT INTO `clients` (`id`, `cliente`, `correo`, `id_evento`, `id_tipousuario`, `id_mail`, `notificacion`) VALUES
(33, 'Ph.D. Dulio Oseda Gago', 'dosedag@gmail.com', 1, 1, 1, 0),
(34, 'Dr. Roger Hernando Peña Huamán', 'rpena@undc.edu.pe', 1, 2, 1, 0),
(35, 'Dr. Filiberto Fernando Ochoa Paredes', 'fochoa@undc.edu.pe', 1, 3, 1, 0),
(36, 'Sheyla Ibeth Arias Luyo', 'sarias@undc.edu.pe', 2, 1, 2, 0),
(37, 'Adler Stalin Rivera Centeno', 'sthalin.11@gmail.com', 2, 2, 2, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evento`
--

CREATE TABLE `evento` (
  `id_evento` int(5) NOT NULL,
  `nombre` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `evento`
--

INSERT INTO `evento` (`id_evento`, `nombre`) VALUES
(1, 'Responsabilidad Social'),
(2, 'Neuromarketing'),
(3, 'II ECNUENTRO'),
(4, 'CONGRESO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mail`
--

CREATE TABLE `mail` (
  `id_mail` int(5) NOT NULL,
  `destinatario` varchar(45) NOT NULL,
  `cc_destinatario` varchar(50) DEFAULT NULL,
  `descripcion` varchar(255) NOT NULL,
  `adjunto` varchar(145) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `mail`
--

INSERT INTO `mail` (`id_mail`, `destinatario`, `cc_destinatario`, `descripcion`, `adjunto`, `fecha`) VALUES
(1, 'TODOS', NULL, 'Charla – Taller   ❤️‍🔥🥴“El disfrute de una relación de pareja”  😍😭\r\nCuáles son las preguntas más comunes en nuestras relaciones\r\n¿Qué perspectiva tenemos de nuestras parejas? Es toxic@ ¿por qué? 💔❤️‍🩹\r\n¿Por qué se terminan tan rápido la relación?\r\n¿Será b', 'https://meet.google.com/rne-zsud-rpk', '2022-10-29 18:19:48'),
(2, 'TODOS', NULL, 'Buenas jóvenes y señoritas, por favor el exámen comenzará a las 9.00 am ( hora exacta) hasta las 10.\r\n', 'Enlace a la videollamada: https://meet.google.com/rne-zsud-rpk', '2022-10-29 18:19:53');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipousuario`
--

CREATE TABLE `tipousuario` (
  `id_tipousuario` int(5) NOT NULL,
  `nombre` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipousuario`
--

INSERT INTO `tipousuario` (`id_tipousuario`, `nombre`) VALUES
(1, 'PONENTE'),
(2, 'ORGANIZADOR'),
(3, 'APOYO ADMINISTRATIVO'),
(4, 'ASISTENTE');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `dni` int(11) DEFAULT NULL,
  `nombres` varchar(255) DEFAULT NULL,
  `apellidos` varchar(255) DEFAULT NULL,
  `procedencia` varchar(255) DEFAULT NULL,
  `ciudad` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `celular` varchar(255) DEFAULT NULL,
  `codigo` varchar(255) DEFAULT NULL,
  `ciclo` varchar(255) DEFAULT NULL,
  `perfil` varchar(255) DEFAULT NULL,
  `precio` varchar(255) DEFAULT NULL,
  `voucher` varchar(255) DEFAULT NULL,
  `emision_certificado` varchar(255) DEFAULT NULL,
  `id_evento` int(11) DEFAULT NULL,
  `correlativo` varchar(255) DEFAULT NULL,
  `codigo_web` varchar(255) DEFAULT NULL,
  `id_tipousuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`dni`, `nombres`, `apellidos`, `procedencia`, `ciudad`, `email`, `celular`, `codigo`, `ciclo`, `perfil`, `precio`, `voucher`, `emision_certificado`, `id_evento`, `correlativo`, `codigo_web`, `id_tipousuario`) VALUES
(25680934, 'Cesar', 'Rivadeneyra Fernandez', NULL, NULL, 'cesarcpc.rivadeneyra@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '1', 34, NULL, '3107213158', 2),
(9598689, 'Gisella', 'Altamiza Carrillo', NULL, NULL, 'galtamizac@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '1', 35, NULL, '3107213165', 2),
(25689655, 'Roger Hernando', 'Peña Huamán', NULL, NULL, 'rpena@undc.edu.pe', NULL, NULL, NULL, NULL, NULL, NULL, '1', 35, NULL, '3107213172', 3),
(7356267, 'Dr. Filiberto Fernando', 'Ochoa Paredes', NULL, NULL, 'fochoa@undc.edu.pe', NULL, NULL, NULL, NULL, NULL, NULL, '1', 35, NULL, '3107213179', 3),
(73958922, 'Sheyla Ibeth', 'Arias Luyo', NULL, NULL, 'sarias@undc.edu.pe', NULL, NULL, NULL, NULL, NULL, NULL, '1', 35, NULL, '3107213186', 5),
(73625197, 'Adler Stalin', 'Rivera Centeno', NULL, NULL, 'sthalin.11@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '1', 35, NULL, '3107213193', 5),
(21068410, 'Virginia Patricia', 'Díaz Condor', NULL, NULL, 'pdiaz@undc.edu.pe', NULL, NULL, NULL, NULL, NULL, NULL, '1', 35, NULL, '3107213200', 5),
(42051915, 'Lizbeth Diana', 'Lévano Sánchez', NULL, NULL, '1842051915@undc.edu.pe', NULL, NULL, NULL, NULL, NULL, NULL, '1', 35, NULL, '3107213207', 1),
(21413122, 'Yrene Cecilia', 'Uribe Hernández', NULL, NULL, 'yuribe@undc.edu.pe', NULL, NULL, NULL, NULL, NULL, NULL, '1', 35, NULL, '3107213214', 1),
(42522235, 'Yajaira Lizeth', 'Carrasco Vega', NULL, NULL, 'ycarrasco@undc.edu.pe', NULL, NULL, NULL, NULL, NULL, NULL, '1', 35, NULL, '3107213221', 1),
(1288588, 'Víctor Carmelino', 'Vargas Godoy', NULL, NULL, 'vvargas@undc.edu.pe', NULL, NULL, NULL, NULL, NULL, NULL, '1', 35, NULL, '3107213228', 1),
(73070300, 'Rosa Fernanda', 'Peña Lock', NULL, NULL, '2201010252@undc.edu.pe', NULL, NULL, NULL, NULL, NULL, NULL, '1', 35, NULL, '3107213235', 1),
(20028058, 'Ramón Osorio', 'Alberto Bueno', NULL, NULL, 'ralberto@undc.edu.pe', NULL, NULL, NULL, NULL, NULL, NULL, '1', 35, NULL, '3107213242', 1),
(44804612, 'Pedro Andrés', 'García Morán', NULL, NULL, '2101030144@undc.edu.pe', NULL, NULL, NULL, NULL, NULL, NULL, '1', 35, NULL, '3107213249', 1),
(40147386, 'Nelsi Rosario', 'Tacsa Torres', NULL, NULL, '1940147386@undc.edu.pe', NULL, NULL, NULL, NULL, NULL, NULL, '1', 35, NULL, '3107213256', 1),
(76296993, 'Katherine Xiomara', 'Hernández Gómez', NULL, NULL, '2101010169@undc.edu.pe', NULL, NULL, NULL, NULL, NULL, NULL, '1', 35, NULL, '3107213263', 1),
(6767672, 'Julio', 'Wu Matta', NULL, NULL, 'JWU@UNDC.EDU.PE', NULL, NULL, NULL, NULL, NULL, NULL, '1', 35, NULL, '3107213270', 1),
(8674804, 'Juan Fernando', 'Perez Perez', NULL, NULL, 'jperezp@undc.edu.pe', NULL, NULL, NULL, NULL, NULL, NULL, '1', 35, NULL, '3107213277', 1),
(7356267, 'Filiberto Fernando', 'Ochoa Paredes', NULL, NULL, 'fochoa@undc.edu.pe', NULL, NULL, NULL, NULL, NULL, NULL, '1', 35, NULL, '3107213284', 1),
(75253717, 'Angela Lucia', 'Pachas Sanchez', NULL, NULL, '2101080260@undc.edu.pe', NULL, NULL, NULL, NULL, NULL, NULL, '1', 35, NULL, '3107213291', 1),
(71521460, 'Javier Adrián', 'Calagua Guerrero', NULL, NULL, '2201010040@undc.edu.pe', NULL, NULL, NULL, NULL, NULL, NULL, '1', 35, NULL, '3107213298', 1),
(42458188, 'Yolanda', 'Aroquipa Durán', NULL, NULL, 'yaroquipa@undc.edu.pe', NULL, NULL, NULL, NULL, NULL, NULL, '1', 35, NULL, '3107213305', 1),
(73930140, 'Yashira Yulia', 'Rivadeneyra Huaman', NULL, NULL, '2201080293@undc.edu.pe', NULL, NULL, NULL, NULL, NULL, NULL, '1', 35, NULL, '3107213312', 1),
(76564989, 'Rosalina', 'Secce Cceñua', NULL, NULL, '2001080091@undc.edu.pe', NULL, NULL, NULL, NULL, NULL, NULL, '1', 35, NULL, '3107213319', 1),
(76586718, 'Nelida', 'Secce Cceñua', NULL, NULL, '1876586718@undc.edu.pe', NULL, NULL, NULL, NULL, NULL, NULL, '1', 35, NULL, '3107213326', 1),
(70263105, 'Maria Del Rosario', 'Delgado Revatta', NULL, NULL, '2101010111@undc.edu.pe', NULL, NULL, NULL, NULL, NULL, NULL, '1', 35, NULL, '3107213333', 1),
(15599656, 'Manuel Nicolás', 'Morales Alberto', NULL, NULL, 'mmorales@undc.edu.pe', NULL, NULL, NULL, NULL, NULL, NULL, '1', 35, NULL, '3107213340', 1),
(49003497, 'Luis Fernando', 'Reynoso Erique', NULL, NULL, '2201010291@undc.edu.pe', NULL, NULL, NULL, NULL, NULL, NULL, '1', 35, NULL, '3107213347', 1),
(32903556, 'Jacqueline', 'Carbonell Infante', NULL, NULL, 'jcarbonell@undc.edu.pe', NULL, NULL, NULL, NULL, NULL, NULL, '1', 35, NULL, '3107213354', 1),
(74882772, 'Daysi Rubi', 'Caquiamarca Cupe', NULL, NULL, '1874882772@undc.edu.pe', NULL, NULL, NULL, NULL, NULL, NULL, '1', 35, NULL, '3107213361', 1),
(75416480, 'Daniela Helibeth', 'Laura Mallasca', NULL, NULL, '2201020182@undc.edu.pe', NULL, NULL, NULL, NULL, NULL, NULL, '1', 35, NULL, '3107213368', 1),
(70834578, 'Anyely Alejandra', 'Asin Manco', NULL, NULL, '2201010021@undc.edu.pe', NULL, NULL, NULL, NULL, NULL, NULL, '1', 35, NULL, '3107213375', 1),
(72767099, 'Andrea Michelle', 'Huapaya Castillo', NULL, NULL, '2101010180@undc.edu.pe', NULL, NULL, NULL, NULL, NULL, NULL, '1', 35, NULL, '3107213382', 1),
(76309821, 'Alonso Andres', 'Hualparuca Huarcaya', NULL, NULL, '2101010173@undc.edu.pe', NULL, NULL, NULL, NULL, NULL, NULL, '1', 35, NULL, '3107213389', 1),
(45430010, 'Oscar Arcángel José', 'De La Cruz Guevara', NULL, NULL, 'oskar.delacruz.guevara@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '1', 36, NULL, '3107213396', 2),
(25689655, 'Roger Hernando', 'Peña Huamán', NULL, NULL, 'rpena@undc.edu.pe', NULL, NULL, NULL, NULL, NULL, NULL, '1', 36, NULL, '3107213403', 3),
(7356267, 'Dr. Filiberto Fernando', 'Ochoa Paredes', NULL, NULL, 'fochoa@undc.edu.pe', NULL, NULL, NULL, NULL, NULL, NULL, '1', 36, NULL, '3107213410', 3),
(73958922, 'Sheyla Ibeth', 'Arias Luyo', NULL, NULL, 'sarias@undc.edu.pe', NULL, NULL, NULL, NULL, NULL, NULL, '1', 36, NULL, '3107213417', 5),
(73625197, 'Adler Stalin', 'Rivera Centeno', NULL, NULL, 'sthalin.11@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '1', 36, NULL, '3107213424', 5),
(76296993, 'Katherine Xiomara', 'Hernández Gómez', NULL, NULL, '2101010169@undc.edu.pe', NULL, NULL, NULL, NULL, NULL, NULL, '1', 36, NULL, '3107213431', 1),
(71521460, 'Javier Adrian', 'Calagua Guerrero', NULL, NULL, '2201010040@undc.edu.pe', NULL, NULL, NULL, NULL, NULL, NULL, '1', 36, NULL, '3107213438', 1),
(7356267, 'Filiberto Fernando', 'Ochoa Paredes', NULL, NULL, 'fochoa@undc.edu.pe', NULL, NULL, NULL, NULL, NULL, NULL, '1', 36, NULL, '3107213445', 1),
(42522235, 'Yajaira Lizeth', 'Carrasco Vega', NULL, NULL, 'ycarrasco@undc.edu.pe', NULL, NULL, NULL, NULL, NULL, NULL, '1', 36, NULL, '3107213452', 1),
(20028058, 'Ramón Osorio', 'Alberto Bueno', NULL, NULL, 'ralberto@undc.edu.pe', NULL, NULL, NULL, NULL, NULL, NULL, '1', 36, NULL, '3107213459', 1),
(1288588, 'Victor Carmelino', 'Vargas Godoy', NULL, NULL, 'vvargas@undc.edu.pe', NULL, NULL, NULL, NULL, NULL, NULL, '1', 36, NULL, '3107213466', 1),
(72840389, 'Alex Eduardo', 'Tadeo Yarihuaman', NULL, NULL, '1972840389@undc.edu.pe', NULL, NULL, NULL, NULL, NULL, NULL, '1', 36, NULL, '3107213473', 1),
(74388603, 'Anderson Marwin', 'Gaytan Villaorduña', NULL, NULL, '2020011871@unfv.edu.pe', NULL, NULL, NULL, NULL, NULL, NULL, '1', 36, NULL, '3107213480', 1),
(76871674, 'Greysy Leydy', 'Villcas Leyva', NULL, NULL, '2020011906@UNFV-EDU.PE', NULL, NULL, NULL, NULL, NULL, NULL, '1', 36, NULL, '3107213487', 1),
(72901413, 'Virginia Leticia', 'Zapata Chapoñan', NULL, NULL, '2020011942@unfv.edu.pe', NULL, NULL, NULL, NULL, NULL, NULL, '1', 36, NULL, '3107213494', 1),
(75152335, 'Yamile Brenda', 'Abarca Paucarcaja', NULL, NULL, '2020011978@unfv.edu.pe', NULL, NULL, NULL, NULL, NULL, NULL, '1', 36, NULL, '3107213501', 1),
(73191540, 'Lizbeth Tatiana', 'Huaman Cristobal', NULL, NULL, '2020012048@unfv.edu.pe', NULL, NULL, NULL, NULL, NULL, NULL, '1', 36, NULL, '3107213508', 1),
(76979196, 'Yadira Yasmira', 'Anticona Granados', NULL, NULL, '2020012075@unfv.edu.pe', NULL, NULL, NULL, NULL, NULL, NULL, '1', 36, NULL, '3107213515', 1),
(73127665, 'Dayra Danitsa', 'Vera Camasca', NULL, NULL, '2020012788@unfv.edu.pe', NULL, NULL, NULL, NULL, NULL, NULL, '1', 36, NULL, '3107213522', 1),
(75379019, 'Joselyn Mirella', 'Crisolo Tamara', NULL, NULL, '2020012805@unfv.edu.pe', NULL, NULL, NULL, NULL, NULL, NULL, '1', 36, NULL, '3107213529', 1),
(75418267, 'Sofia Lizeth Julia', 'Alza Sanchez', NULL, NULL, '2020012859@unfv.edu.pe', NULL, NULL, NULL, NULL, NULL, NULL, '1', 36, NULL, '3107213536', 1),
(71554914, 'Estefany Maribel', 'Garay Fernandez', NULL, NULL, '2020012877@unfv.edu.pe', NULL, NULL, NULL, NULL, NULL, NULL, '1', 36, NULL, '3107213543', 1),
(73826210, 'Emerson Ignacio', 'La Torre Rodriguez', NULL, NULL, '2020012895@unfv.edu.pe', NULL, NULL, NULL, NULL, NULL, NULL, '1', 36, NULL, '3107213550', 1),
(72911351, 'Ruth Fiorella', 'Llaja Ayala', NULL, NULL, '2020012984@unfv.edu.pe', NULL, NULL, NULL, NULL, NULL, NULL, '1', 36, NULL, '3107213557', 1),
(71894192, 'Susan Darlene', 'Fernandez Lengua', NULL, NULL, '2020012993@unfv.edu.pe', NULL, NULL, NULL, NULL, NULL, NULL, '1', 36, NULL, '3107213564', 1),
(75555526, 'Jimena', 'De La Cruz Gomez', NULL, NULL, '2020103053@unfv.edu.pe', NULL, NULL, NULL, NULL, NULL, NULL, '1', 36, NULL, '3107213571', 1),
(71814211, 'Eleane Samari', 'Dominguez Carranza', NULL, NULL, '2020103062@unfv.edu.pe', NULL, NULL, NULL, NULL, NULL, NULL, '1', 36, NULL, '3107213578', 1),
(70261012, 'Diana Oiane', 'Román Rodriguez', NULL, NULL, '2101080323@undc.edu.pe', NULL, NULL, NULL, NULL, NULL, NULL, '1', 36, NULL, '3107213585', 1),
(70834578, 'Anyely Alejandra', 'Asin Manco', NULL, NULL, '2201010021@undc.edu.pe', NULL, NULL, NULL, NULL, NULL, NULL, '1', 36, NULL, '3107213592', 1),
(75911864, 'Angelica', 'Arce Sarmiento', NULL, NULL, 'angelica.arce.s10@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '1', 36, NULL, '3107213599', 1),
(31040535, 'Constantino', 'Pariona Villaverde', NULL, NULL, 'cpariona@undc.edu.pe', NULL, NULL, NULL, NULL, NULL, NULL, '1', 36, NULL, '3107213606', 1),
(8725208, 'Fernando Enrique', 'Zambrano Gutierrez', NULL, NULL, 'fzambrano@undc.edu pe', NULL, NULL, NULL, NULL, NULL, NULL, '1', 36, NULL, '3107213613', 1),
(6104551, 'Jorge Lázaro', 'Franco Medina', NULL, NULL, 'jfranco37@hotmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '1', 36, NULL, '3107213620', 1),
(6767672, 'Jullio', 'Wu Matta', NULL, NULL, 'JWU@UNDC.EDU.PE', NULL, NULL, NULL, NULL, NULL, NULL, '1', 36, NULL, '3107213627', 1),
(76324237, 'Kevin Omar', 'Jimenez Cornejo', NULL, NULL, 'kevi060102@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '1', 36, NULL, '3107213634', 1),
(15599656, 'Manuel Nicolas', 'Morales Alberto', NULL, NULL, 'mmorales@undc.edu.pe', NULL, NULL, NULL, NULL, NULL, NULL, '1', 36, NULL, '3107213641', 1),
(20044737, 'Dulio', 'Oseda Gago', NULL, NULL, 'dosedag@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '1', 37, NULL, '3107213648', 2),
(25689655, 'Roger Hernando', 'Peña Huamán', NULL, NULL, 'rpena@undc.edu.pe', NULL, NULL, NULL, NULL, NULL, NULL, '1', 37, NULL, '3107213655', 3),
(7356267, 'Dr. Filiberto Fernando', 'Ochoa Paredes', NULL, NULL, 'fochoa@undc.edu.pe', NULL, NULL, NULL, NULL, NULL, NULL, '1', 37, NULL, '3107213662', 3),
(73958922, 'Sheyla Ibeth', 'Arias Luyo', NULL, NULL, 'sarias@undc.edu.pe', NULL, NULL, NULL, NULL, NULL, NULL, '1', 37, NULL, '3107213669', 5),
(73625197, 'Adler Stalin', 'Rivera Centeno', NULL, NULL, 'sthalin.11@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '1', 37, NULL, '3107213676', 5),
(21068410, 'Virginia Patricia', 'Díaz Condor', NULL, NULL, 'pdiaz@undc.edu.pe', NULL, NULL, NULL, NULL, NULL, NULL, '1', 37, NULL, '3107213683', 5),
(15599656, 'Manuel Nicolás', 'Morales Alberto', NULL, NULL, 'mmorales@undc.edu.pe', NULL, NULL, NULL, NULL, NULL, NULL, '1', 37, NULL, '3107213690', 1),
(20028058, 'Ramón Osorio', 'Alberto Bueno', NULL, NULL, 'ralberto@undc.edu.pe', NULL, NULL, NULL, NULL, NULL, NULL, '1', 37, NULL, '3107213697', 1),
(21413122, 'Yrene Cecilia', 'Uribe Hernández', NULL, NULL, 'yuribe@undc.edu.pe', NULL, NULL, NULL, NULL, NULL, NULL, '1', 37, NULL, '3107213704', 1),
(40147386, 'Nelsi Rosario', 'Tacsa Torres', NULL, NULL, '1940147386@undc.edu.pe', NULL, NULL, NULL, NULL, NULL, NULL, '1', 37, NULL, '3107213711', 1),
(40245858, 'Roberto', 'Mañuico Mendoza', NULL, NULL, 'rmanuico@undc.edu.pe', NULL, NULL, NULL, NULL, NULL, NULL, '1', 37, NULL, '3107213718', 1),
(40518967, 'Oscar Adrian', 'Zapillado Huanco', NULL, NULL, 'ozapillado@undc.edu.pe', NULL, NULL, NULL, NULL, NULL, NULL, '1', 37, NULL, '3107213725', 1),
(42522235, 'Yajaira Lizeth', 'Carrasco Vega', NULL, NULL, 'ycarrasco@undc.edu.pe', NULL, NULL, NULL, NULL, NULL, NULL, '1', 37, NULL, '3107213732', 1),
(44804612, 'Pedro Andrés', 'García Morán', NULL, NULL, '2101030144@undc.edu.pe', NULL, NULL, NULL, NULL, NULL, NULL, '1', 37, NULL, '3107213739', 1),
(75416480, 'Daniela Helibeth', 'Laura Mallasca', NULL, NULL, '2201020182@undc.edu.pe', NULL, NULL, NULL, NULL, NULL, NULL, '1', 37, NULL, '3107213746', 1),
(76296993, 'Katherine Xiomara', 'Hernández Gómez', NULL, NULL, '2101010169@undc.edu.pe', NULL, NULL, NULL, NULL, NULL, NULL, '1', 37, NULL, '3107213753', 1),
(1288588, 'Víctor Carmelino', 'Vargas Godoy', NULL, NULL, 'vvargas@undc.edu.pe', NULL, NULL, NULL, NULL, NULL, NULL, '1', 37, NULL, '3107213760', 1),
(6767672, 'Julio', 'Wu Matta', NULL, NULL, 'jwu@undc.edu.pe', NULL, NULL, NULL, NULL, NULL, NULL, '1', 37, NULL, '3107213767', 1),
(7356267, 'Filiberto Fernando', 'Ochoa Paredes', NULL, NULL, 'fochoa@undc.edu.pe', NULL, NULL, NULL, NULL, NULL, NULL, '1', 37, NULL, '3107213774', 1),
(40762504, 'Ingrid Rocio', 'Poma Bautista', NULL, NULL, 'ipoma@undc.edu.pe', NULL, NULL, NULL, NULL, NULL, NULL, '1', 37, NULL, '3107213781', 1),
(73070300, 'Rosa Fernanda', 'Peña Lock', NULL, NULL, '2201010252@undc.edu.pe', NULL, NULL, NULL, NULL, NULL, NULL, '1', 37, NULL, '3107213788', 1),
(42051915, 'Lizbeth Diana', 'Lévano Sánchez', NULL, NULL, '1842051915@undc.edu.pe', NULL, NULL, NULL, NULL, NULL, NULL, '1', 37, NULL, '3107213795', 1),
(15398895, 'Miriam Viviana', 'Ñañez Silva', NULL, NULL, 'mnanez@undc.edu.pe', NULL, NULL, NULL, NULL, NULL, NULL, '1', 37, NULL, '3107213802', 1),
(42458188, 'Yolanda', 'Aroquipa Durán', NULL, NULL, 'yaroquipa@undc.edu.pe', NULL, NULL, NULL, NULL, NULL, NULL, '1', 37, NULL, '3107213809', 1),
(45010512, 'Gladys', 'Montalico Ruiz', NULL, NULL, '45010512@undc.edu.pe', NULL, NULL, NULL, NULL, NULL, NULL, '1', 37, NULL, '3107213816', 1),
(9177049, 'Roberto', 'Coaquira Incacari', NULL, NULL, 'rcoaquira@undc.edu.pe', NULL, NULL, NULL, NULL, NULL, NULL, '1', 37, NULL, '3107213823', 1),
(15433529, 'Juan', 'Saldivar Villarroel', NULL, NULL, 'jsaldivar@undc.edu.pe', NULL, NULL, NULL, NULL, NULL, NULL, '1', 37, NULL, '3107213830', 1),
(17404650, 'Marcos Benito', 'Parraguez Carraco', NULL, NULL, 'mparraguez@undc.edu.pe', NULL, NULL, NULL, NULL, NULL, NULL, '1', 37, NULL, '3107213837', 1),
(71018307, 'Aliske', 'Godoy Vilca', NULL, NULL, '1971018307@undc.edu.pe', NULL, NULL, NULL, NULL, NULL, NULL, '1', 37, NULL, '3107213844', 1),
(71641249, 'Rosaly Eveling', 'Salazar Paucar', NULL, NULL, '2002010210@undc.edu.pe', NULL, NULL, NULL, NULL, NULL, NULL, '1', 37, NULL, '3107213851', 1),
(72501000, 'Juan Pablo', 'Cordova Laura', NULL, NULL, '2201010089@undc.esu.pe', NULL, NULL, NULL, NULL, NULL, NULL, '1', 37, NULL, '3107213858', 1),
(76814601, 'Yudith Margoth', 'Aburto Zapata', NULL, NULL, '2101010003@undc.edu.pe', NULL, NULL, NULL, NULL, NULL, NULL, '1', 37, NULL, '3107213865', 1),
(73623097, 'Hussein Anthony', 'Palomino Quispe', NULL, NULL, 'hpalomino@undc.edu.pe', NULL, NULL, NULL, NULL, NULL, NULL, '1', 37, NULL, '3107213872', 1),
(73958922, 'Sheyla Ibeth', 'Arias Luyo', NULL, NULL, 'sarias@undc.edu.pe', NULL, NULL, NULL, NULL, NULL, NULL, '1', 37, NULL, '3107213879', 1),
(73963097, 'Erika Lizeth', 'Arias Luyo', NULL, NULL, '1773963097@undc.edu.pe', NULL, NULL, NULL, NULL, NULL, NULL, '1', 37, NULL, '3107213886', 1),
(46361415, 'Lesly Janet', 'Chacaltana Izquierdo', NULL, NULL, '1205175@esan.edu.pe', NULL, NULL, NULL, NULL, NULL, NULL, '1', 38, NULL, '3107213893', 2),
(25689655, 'Roger Hernando', 'Peña Huamán', NULL, NULL, 'rpena@undc.edu.pe', NULL, NULL, NULL, NULL, NULL, NULL, '1', 38, NULL, '3107213900', 3),
(7356267, 'Dr. Filiberto Fernando', 'Ochoa Paredes', NULL, NULL, 'fochoa@undc.edu.pe', NULL, NULL, NULL, NULL, NULL, NULL, '1', 38, NULL, '3107213907', 3),
(73958922, 'Sheyla Ibeth', 'Arias Luyo', NULL, NULL, 'sarias@undc.edu.pe', NULL, NULL, NULL, NULL, NULL, NULL, '1', 38, NULL, '3107213914', 5),
(73625197, 'Adler Stalin', 'Rivera Centeno', NULL, NULL, 'sthalin.11@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '1', 38, NULL, '3107213921', 5),
(21068410, 'Virginia Patricia', 'Díaz Condor', NULL, NULL, 'pdiaz@undc.edu.pe', NULL, NULL, NULL, NULL, NULL, NULL, '1', 38, NULL, '3107213928', 5),
(40745064, 'María Del Rosario', 'Cuzcano Chumpitaz', NULL, NULL, '1440745064@undc.edu.pe', NULL, NULL, NULL, NULL, NULL, NULL, '1', 38, NULL, '3107213935', 1),
(15599656, 'Manuel Nicolas', 'Morales Alberto', NULL, NULL, 'mmorales@undc.edu.pe', NULL, NULL, NULL, NULL, NULL, NULL, '1', 38, NULL, '3107213942', 1),
(42522235, 'Yajaira Lizeth', 'Carrasco Vega', NULL, NULL, 'ycarrasco@undc.edu.pe', NULL, NULL, NULL, NULL, NULL, NULL, '1', 38, NULL, '3107213949', 1),
(73070300, 'Rosa Fernanda', 'Peña Lock', NULL, NULL, '2201010252@undc.edu.pe', NULL, NULL, NULL, NULL, NULL, NULL, '1', 38, NULL, '3107213956', 1),
(75253717, 'Angela Lucia', 'Pachas Sánchez', NULL, NULL, '2101080260@undc.edu.pe', NULL, NULL, NULL, NULL, NULL, NULL, '1', 38, NULL, '3107213963', 1),
(76296993, 'Katherine Xiomara', 'Hernández Gómez', NULL, NULL, '2101010169@undc.edu.pe', NULL, NULL, NULL, NULL, NULL, NULL, '1', 38, NULL, '3107213970', 1),
(8725208, 'Fernando Enrique', 'Zambrano Gutierrez', NULL, NULL, 'fzambrano@undc.', NULL, NULL, NULL, NULL, NULL, NULL, '1', 38, NULL, '3107213977', 1),
(31040535, 'Constantino', 'Pariona Villaverde', NULL, NULL, 'cpariona@undc.edu.pe', NULL, NULL, NULL, NULL, NULL, NULL, '1', 38, NULL, '3107213984', 1),
(72501000, 'Juan Pablo', 'Cordova Laura', NULL, NULL, '2201010089@undc.edu.pe', NULL, NULL, NULL, NULL, NULL, NULL, '1', 38, NULL, '3107213991', 1),
(75770982, 'Rosa Yulisha', 'Castro Quispe', NULL, NULL, '1975770982@undc.edu.pe', NULL, NULL, NULL, NULL, NULL, NULL, '1', 38, NULL, '3107213998', 1),
(1288588, 'Victor Carmelino', 'Vargas Godoy', NULL, NULL, 'vvargas@undc.edu.pe', NULL, NULL, NULL, NULL, NULL, NULL, '1', 38, NULL, '3107214005', 1),
(6767672, 'Julio', 'Wu Matta', NULL, NULL, 'jwu@undc.edu.pe', NULL, NULL, NULL, NULL, NULL, NULL, '1', 38, NULL, '3107214012', 1),
(20028058, 'Ramón Osorio', 'Alberto Bueno', NULL, NULL, 'ralberto@undc.edu.pe', NULL, NULL, NULL, NULL, NULL, NULL, '1', 38, NULL, '3107214019', 1),
(40518967, 'Oscar Adrian', 'Zapillado Huanco', NULL, NULL, 'ozapillado@undc.edu.pe', NULL, NULL, NULL, NULL, NULL, NULL, '1', 38, NULL, '3107214026', 1),
(71521460, 'Javier Adrián', 'Calagua Guerrero', NULL, NULL, '2201010040@undc.edu.pe', NULL, NULL, NULL, NULL, NULL, NULL, '1', 38, NULL, '3107214033', 1),
(7356267, 'Filiberto Fernando', 'Ochoa Paredes', NULL, NULL, 'fochoa@undc.edu.pe', NULL, NULL, NULL, NULL, NULL, NULL, '1', 38, NULL, '3107214040', 1),
(7356267, 'Yrene Cecilia', 'Uribe Hernández', NULL, NULL, 'yuribe@undc.edu.pe', NULL, NULL, NULL, NULL, NULL, NULL, '1', 38, NULL, '3107214047', 1),
(7356267, 'Filiberto Fernando', 'Ochoa Paredes', NULL, NULL, 'fochoa@undc.edu.pe', NULL, NULL, NULL, NULL, NULL, NULL, '1', 38, NULL, '3107214054', 1),
(25689655, 'Roger Hernando', 'Peña Huamán', NULL, NULL, 'rpena@undc.edu.pe', NULL, NULL, NULL, NULL, NULL, NULL, '1', 39, NULL, '3107214061', 3),
(7356267, 'Filiberto Fernando', 'Ochoa Paredes', NULL, NULL, 'fochoa@undc.edu.pe', NULL, NULL, NULL, NULL, NULL, NULL, '1', 39, NULL, '3107214068', 3),
(42522235, 'Yajaira Lizeth', 'Carrasco Vega', NULL, NULL, 'ycarrasco@undc.edu.pe', NULL, NULL, NULL, NULL, NULL, NULL, '1', 39, NULL, '3107214075', 3),
(73958922, 'Sheyla Ibeth', 'Arias Luyo', NULL, NULL, 'sarias@undc.edu.pe', NULL, NULL, NULL, NULL, NULL, NULL, '1', 39, NULL, '3107214082', 5),
(73625197, 'Adler Stalin', 'Rivera Centeno', NULL, NULL, 'sthalin.11@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '1', 39, NULL, '3107214089', 5),
(21068410, 'Virginia Patricia', 'Díaz Condor', NULL, NULL, 'pdiaz@undc.edu.pe', NULL, NULL, NULL, NULL, NULL, NULL, '1', 39, NULL, '3107214096', 5),
(42522235, 'Yajaira Lizeth', 'Carrasco Vega', NULL, NULL, 'ycarrasco@undc.edu.pe', NULL, NULL, NULL, NULL, NULL, NULL, '1', 39, NULL, '3107214103', 1),
(7356267, 'Filiberto Fernando', 'Ochoa Paredes', NULL, NULL, 'fochoa@undc.edu.pe', NULL, NULL, NULL, NULL, NULL, NULL, '1', 39, NULL, '3107214110', 1),
(72712708, 'José Luis', 'Rivas Cabrera', NULL, NULL, '1972712708@undc.edu.pe', NULL, NULL, NULL, NULL, NULL, NULL, '1', 39, NULL, '3107214117', 1),
(73753688, 'Laddy Angelica', 'Huamani Clemente', NULL, NULL, '1973753688@undc.edu.pe', NULL, NULL, NULL, NULL, NULL, NULL, '1', 39, NULL, '3107214124', 1),
(75882855, 'Guino Jhoel', 'Llanos Salvatierra', NULL, NULL, '2101010199@undc.edu.pe', NULL, NULL, NULL, NULL, NULL, NULL, '1', 39, NULL, '3107214131', 1),
(71521460, 'Javier Adrian', 'Calagua Guerrero', NULL, NULL, '2201010040@undc.edu.pe', NULL, NULL, NULL, NULL, NULL, NULL, '1', 39, NULL, '3107214138', 1),
(75227824, 'Oliver Ronal', 'Vicente Ñañez', NULL, NULL, '1775227824@undc.edu.pe', NULL, NULL, NULL, NULL, NULL, NULL, '1', 39, NULL, '3107214145', 1),
(20028058, 'Ramón Osorio', 'Alberto Bueno', NULL, NULL, 'ralberto@undc.edu.pe', NULL, NULL, NULL, NULL, NULL, NULL, '1', 39, NULL, '3107214152', 1),
(1288588, 'Victor Carmelino', 'Vargas Godoy', NULL, NULL, 'vvargas@undc.edu.pe', NULL, NULL, NULL, NULL, NULL, NULL, '1', 39, NULL, '3107214159', 1),
(43814138, 'Dasmy Charlene', 'Alegría Avellaneda', NULL, NULL, 'dasmyta21@hotmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '1', 39, NULL, '3107214166', 1),
(73221518, 'Elida Gabriela', 'Castromonte Solano', NULL, NULL, '1873221518@undc.edu.pe', NULL, NULL, NULL, NULL, NULL, NULL, '1', 39, NULL, '3107214173', 1),
(72711096, 'Génesis Sarai', 'Huallanca Serapio', NULL, NULL, '2201010158@undc.edu.pe', NULL, NULL, NULL, NULL, NULL, NULL, '1', 39, NULL, '3107214180', 1),
(74882712, 'Gilberto Pedro', 'Chumpitaz Avalos', NULL, NULL, '2002010058@undc.edu.pe', NULL, NULL, NULL, NULL, NULL, NULL, '1', 39, NULL, '3107214187', 1),
(72690308, 'Janelly Briggithe', 'Ramirez Huaraca', NULL, NULL, '2201080282@undc.edu.pe', NULL, NULL, NULL, NULL, NULL, NULL, '1', 39, NULL, '3107214194', 1),
(61085817, 'Jennifer Juana', 'Reyna Saravia', NULL, NULL, '1961085817@undc.edu.pe', NULL, NULL, NULL, NULL, NULL, NULL, '1', 39, NULL, '3107214201', 1),
(74431024, 'Jhon Alisson', 'Saman Quispe', NULL, NULL, '2002010213@undc.edu.pe', NULL, NULL, NULL, NULL, NULL, NULL, '1', 39, NULL, '3107214208', 1),
(76586718, 'Nelida', 'Secce Cceñua', NULL, NULL, '1876586718@undc.edu.pe', NULL, NULL, NULL, NULL, NULL, NULL, '1', 39, NULL, '3107214215', 1),
(76163921, 'Piero Alexander', 'Sotelo Espinoza', NULL, NULL, '2101010354@undc.edu.pe', NULL, NULL, NULL, NULL, NULL, NULL, '1', 39, NULL, '3107214222', 1),
(74294470, 'Yeniffer Milagros', 'Guisado Alegria', NULL, NULL, '2017012887@unfv.edu.pe', NULL, NULL, NULL, NULL, NULL, NULL, '1', 39, NULL, '3107214229', 1),
(42051915, 'Lizbeth Diana', 'Levano Sanchez', NULL, NULL, '1842051915@undc.edu.pe', NULL, NULL, NULL, NULL, NULL, NULL, '1', 39, NULL, '3107214236', 1),
(70834578, 'Anyely Alejandra', 'Asin Manco', NULL, NULL, '2201010021@undc.edu.pe', NULL, NULL, NULL, NULL, NULL, NULL, '1', 39, NULL, '3107214243', 1),
(71994707, 'Jaffer Steven', 'Florian Arenas', NULL, NULL, '2101010133@undc.edu.pe', NULL, NULL, NULL, NULL, NULL, NULL, '1', 39, NULL, '3107214250', 1),
(73828774, 'Kimberly Jahaira', 'Rosas Luyo', NULL, NULL, '1573828774@undc.edu.pe', NULL, NULL, NULL, NULL, NULL, NULL, '1', 39, NULL, '3107214257', 1),
(74095081, 'Leonela Fernanda', 'Laura Vilca', NULL, NULL, '2201080183@undc.edu.pe', NULL, NULL, NULL, NULL, NULL, NULL, '1', 39, NULL, '3107214264', 1),
(40147386, 'Nelsi Rosario', 'Tacsa Torres', NULL, NULL, '1940147386@undc.edu.pe', NULL, NULL, NULL, NULL, NULL, NULL, '1', 39, NULL, '3107214271', 1),
(73070300, 'Rosa Fernanda', 'Peña Lock', NULL, NULL, '2201010252@undc.edu.pe', NULL, NULL, NULL, NULL, NULL, NULL, '1', 39, NULL, '3107214278', 1),
(75203932, 'Diana Estephany', 'Ccoyllo Garriazo', NULL, NULL, '2001080023@undc.edu.pe', NULL, NULL, NULL, NULL, NULL, NULL, '1', 39, NULL, '3107214285', 1),
(7356267, 'Filiberto Fernando', 'Ochoa Paredes', NULL, NULL, 'fochoa@undc.edu.pe', NULL, NULL, NULL, NULL, NULL, NULL, '1', 40, NULL, '3107214292', 3),
(6104551, 'Jorge Lazaro', 'Franco Medina', NULL, NULL, 'jfranco@undc.edu.pe', NULL, NULL, NULL, NULL, NULL, NULL, '1', 40, NULL, '3107214299', 1),
(7356267, 'Filiberto Fernando', 'Ochoa Paredes', NULL, NULL, 'fochoa@undc.edu.pe', NULL, NULL, NULL, NULL, NULL, NULL, '1', 40, NULL, '3107214306', 1),
(80604138, 'Edgar Augusto', 'Salinas Loarte', NULL, NULL, 'esalinas@undc.edu.pe', NULL, NULL, NULL, NULL, NULL, NULL, '1', 40, NULL, '3107214313', 1),
(1288588, 'Victor Carmelino', 'Vargas Godoy', NULL, NULL, 'vvargas@undc.edu.pe', NULL, NULL, NULL, NULL, NULL, NULL, '1', 40, NULL, '3107214320', 1),
(1221425, 'Julio Cesar', 'Lujan Minaya', NULL, NULL, 'jlujan@undc.edu.pe', NULL, NULL, NULL, NULL, NULL, NULL, '1', 40, NULL, '3107214327', 1),
(20028058, 'Ramon Osorio', 'Alberto Bueno', NULL, NULL, 'ralberto@undc.edu.pe', NULL, NULL, NULL, NULL, NULL, NULL, '1', 40, NULL, '3107214334', 1),
(6799562, 'Segundo Waldemar', 'Rios Rios', NULL, NULL, 'srios@undc.edu.pe', NULL, NULL, NULL, NULL, NULL, NULL, '1', 40, NULL, '3107214341', 1),
(42522235, 'Yajaira Lizeth', 'Carrasco Vega', NULL, NULL, 'ycarrasco@undc.edu.pe', NULL, NULL, NULL, NULL, NULL, NULL, '1', 40, NULL, '3107214348', 1),
(6767672, 'Julio', 'Wu Matta', NULL, NULL, 'jwu@undc.edu.pe', NULL, NULL, NULL, NULL, NULL, NULL, '1', 40, NULL, '3107214355', 1),
(42458188, 'Yolanda', 'Aroquipa Durán', NULL, NULL, 'yaroquipa@undc.edu.pe', NULL, NULL, NULL, NULL, NULL, NULL, '1', 40, NULL, '3107214362', 1),
(32903556, 'Jacqueline', 'Carbonell Infante', NULL, NULL, 'jcarbonell@undc.edu.pe', NULL, NULL, NULL, NULL, NULL, NULL, '1', 40, NULL, '3107214369', 1),
(10300251, 'Miguel Angel', 'Melgarejo Quijandria', NULL, NULL, 'mmelgarejo@undc.edu.pe', NULL, NULL, NULL, NULL, NULL, NULL, '1', 40, NULL, '3107214376', 1),
(17404650, 'Marcos Benito', 'Parraguez Carrasco', NULL, NULL, 'mparraguez@undc.edu.pe', NULL, NULL, NULL, NULL, NULL, NULL, '1', 40, NULL, '3107214383', 1),
(8674804, 'Juan Fernando', 'Perez Perez', NULL, NULL, 'jperezp@undc.edu.pe', NULL, NULL, NULL, NULL, NULL, NULL, '1', 40, NULL, '3107214390', 1),
(21563866, 'Roberto José María', 'Casas Miranda', NULL, NULL, 'rcasas@undc.edu.pe', NULL, NULL, NULL, NULL, NULL, NULL, '1', 40, NULL, '3107214397', 1),
(10611322, 'Juan Francisco', 'Vento Rojas', NULL, NULL, 'jvento@undc.edu.pe', NULL, NULL, NULL, NULL, NULL, NULL, '1', 40, NULL, '3107214404', 1),
(8725208, 'Fernando Enrique', 'Zambrano Gutierrez', NULL, NULL, 'fzambrano@undc.edu.pe', NULL, NULL, NULL, NULL, NULL, NULL, '1', 40, NULL, '3107214411', 1),
(40518967, 'Oscar Adrian', 'Zapillado Huanco', NULL, NULL, 'ozapillado@undc.edu.pe', NULL, NULL, NULL, NULL, NULL, NULL, '1', 40, NULL, '3107214418', 1),
(73625197, 'ad', 'asdsa', 'sad', 'dasd', 'sthalin.11@gmail.com', 'dsa', 'sd', 'ds', 'ds', 'sd', 'asd', 'asd', 1, 'sdas', 'sd', 1),
(73625197, 'ad', 'asdsa', 'sad', 'dasd', 'sthalin.11@gmail.com', 'dsa', 'sd', 'ds', 'ds', 'sd', 'asd', 'asd', 1, 'sdas', 'sd', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_mail` (`id_mail`),
  ADD KEY `id_evento` (`id_evento`),
  ADD KEY `id_tipousuario` (`id_tipousuario`);

--
-- Indices de la tabla `evento`
--
ALTER TABLE `evento`
  ADD PRIMARY KEY (`id_evento`);

--
-- Indices de la tabla `mail`
--
ALTER TABLE `mail`
  ADD PRIMARY KEY (`id_mail`);

--
-- Indices de la tabla `tipousuario`
--
ALTER TABLE `tipousuario`
  ADD PRIMARY KEY (`id_tipousuario`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD KEY `id_evento` (`id_evento`),
  ADD KEY `id_tipousuario` (`id_tipousuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=182;

--
-- AUTO_INCREMENT de la tabla `evento`
--
ALTER TABLE `evento`
  MODIFY `id_evento` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `mail`
--
ALTER TABLE `mail`
  MODIFY `id_mail` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tipousuario`
--
ALTER TABLE `tipousuario`
  MODIFY `id_tipousuario` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
