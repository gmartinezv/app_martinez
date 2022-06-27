-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3307
-- Tiempo de generación: 27-06-2022 a las 01:23:05
-- Versión del servidor: 10.4.13-MariaDB
-- Versión de PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `app_cake`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `phinxlog`
--

DROP TABLE IF EXISTS `phinxlog`;
CREATE TABLE IF NOT EXISTS `phinxlog` (
  `version` bigint(20) NOT NULL,
  `migration_name` varchar(100) DEFAULT NULL,
  `start_time` timestamp NULL DEFAULT NULL,
  `end_time` timestamp NULL DEFAULT NULL,
  `breakpoint` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `phinxlog`
--

INSERT INTO `phinxlog` (`version`, `migration_name`, `start_time`, `end_time`, `breakpoint`) VALUES
(20220624162644, 'CreateUsersTable', '2022-06-24 20:34:26', '2022-06-24 20:34:26', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `clave` varchar(255) NOT NULL,
  `role` enum('admin','user') NOT NULL,
  `activo` tinyint(1) NOT NULL,
  `creado` datetime DEFAULT NULL,
  `modificado` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `nombre`, `apellido`, `correo`, `clave`, `role`, `activo`, `creado`, `modificado`) VALUES
(5, 'German', 'Martinez', 'gmartinezv@gmail.com', '123', 'admin', 1, '2022-06-24 13:36:20', '2022-06-24 13:36:20'),
(6, 'Luisaa', 'Velasquez ', 'luisa52ve@gmail.com', '$2y$10$URtI6wKedbKmPLYtyJZkd.Dkoh9rmfgpjl5YRK5qnbD6y1o.qEt4y', 'admin', 1, '2022-06-24 13:36:00', '2022-06-24 13:36:00'),
(7, 'Jose Daniel', 'Lopez', 'llopez2@mail.com', '$2y$10$d361GcelCYovPIBjNpXSveAJOqIFcvPupVN9nAXD85Z3bTmljWpae', 'user', 1, '2018-11-18 16:16:00', '2020-11-18 19:17:00'),
(9, 'Luis Alberto', 'Lopez', 'llopez23@gmail.com', '$2y$10$v8wqJAv8ALvWZbnYT0SEe.2Fk/ydYHVTfFGopGamvp30U3dsoal3S', 'user', 1, '2022-06-24 23:38:00', '2022-06-24 23:38:00'),
(10, 'miguel', 'Barrera', 'mbarrera@gmail.com', '$2y$10$MRb6t7TWL6EFdl3l7KZzyOfhonockp.jfRgwg.0jNLU0JSlJle7Ym', 'admin', 1, '2022-06-24 23:38:00', '2022-06-24 23:38:00'),
(12, 'Maria', 'Martinez', 'mmartinez@gmail.com', '$2y$10$oB4SKIxEnCL2ToJEarg69eLbjc35RZOVI7wNLQgwShUO7aRBHuuzm', 'admin', 1, '2022-06-25 17:08:00', '2022-06-25 17:08:00');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
