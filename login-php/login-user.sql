-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-04-2020 a las 03:44:43
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `php-login-database`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id`, `email`, `password`) VALUES
(1, 'kjch802@yahoo.es', '$2y$10$iWZuv2LSMIcGmUoCax/k6OF9jFW5eNO1BRkmwYglLf5lUcIYY4abS'),
(2, 'kjch802@yahoo.es', '$2y$10$QBGFhDC872K3.XpSBmHC6O5KHM1WeGHPTU930QhGnXmHxn6rpeVLm'),
(3, 'kjch802@yahoo.es', '$2y$10$IetHHhNIwbvBW9sF/Pt9juSlM2aMRpjHtxzsM/PnyAcTWSEL8gDzO'),
(4, 'kjch802@yahoo.es', '$2y$10$J7zWC6uSGLmtzR7RZueOz.kF6q2nT0HKvRzzxRMicKGnXrTddSt8i'),
(5, 'kjch802@yahoo.es', '$2y$10$boSXQwFp0L6ReNt0Kv.56e.OPnv45ulcAZS5mgAfNTHu8ncOvPO2i'),
(6, 'kjch802@yahoo.es', '$2y$10$mUL4O3RkVUv0fsxbE.bxsOYOOImCpLDYDUvZKET1U9j7iiPsdZVaa'),
(7, 'kjch802@yahoo.es', '$2y$10$ZF9qbWfUoiL2RkSR7caVO.WWMtkUOKBvrSn1.OzMElPXrKn1jSr1y'),
(8, 'arimpresos323@hahoo.es', '$2y$10$qJGoieg4Yarg4FcOtfaQbOmz2PxX.tuYmULz3pKM44D0UYpMpHZ.u'),
(9, 'andres@gmail.com', '$2y$10$54yTLdUHaP5P7LYS9JhjjO.tcK9UYVa4G7eu6JIqn4wHKGkod5ZKi');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
