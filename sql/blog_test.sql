-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-08-2017 a las 00:35:54
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `blog`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categories`
--

CREATE TABLE `categories` (
  `id` int(255) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`) VALUES
(1, 'web', NULL),
(2, 'android', NULL),
(3, 'java', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entries`
--

CREATE TABLE `entries` (
  `id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `category_id` int(255) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` text,
  `status` varchar(20) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `entries`
--

INSERT INTO `entries` (`id`, `user_id`, `category_id`, `title`, `content`, `status`, `image`) VALUES
(1, 1, 1, 'entrada de php', 'contenidocontenidocontenidocontenidocontenidocontenidocontenidocontenidocontenidocontenidocontenidocontenidocontenidocontenidocontenidocontenidocontenidocontenidocontenidocontenidocontenidocontenidocontenidocontenidocontenidocontenidocontenido', 'public', NULL),
(2, 2, 2, 'entrada de android', 'entrada de androidentrada de androidentrada de androidentrada de androidentrada de androidentrada de androidentrada de android', 'public', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entry_tag`
--

CREATE TABLE `entry_tag` (
  `id` int(255) NOT NULL,
  `entry_id` int(255) NOT NULL,
  `tag_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `entry_tag`
--

INSERT INTO `entry_tag` (`id`, `entry_id`, `tag_id`) VALUES
(1, 1, 2),
(2, 1, 1),
(3, 2, 3),
(4, 2, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tags`
--

CREATE TABLE `tags` (
  `id` int(255) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tags`
--

INSERT INTO `tags` (`id`, `name`, `description`) VALUES
(1, 'php', NULL),
(2, 'js', NULL),
(3, 'symfony', NULL),
(4, 'laravel', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `surname` varchar(255) DEFAULT NULL,
  `role` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `role`, `email`, `password`, `image`) VALUES
(1, 'alejandro', 'maroto', 'admin', 'nirk.maroto@gmail.com', '123456', NULL),
(2, 'pablo', 'perez', 'user', 'pablo.perez@gmail.com', '123456', NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `entries`
--
ALTER TABLE `entries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_entries_users` (`user_id`),
  ADD KEY `fk_entries_categories` (`category_id`);

--
-- Indices de la tabla `entry_tag`
--
ALTER TABLE `entry_tag`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_entry_tag_entries` (`entry_id`),
  ADD KEY `fk_entry_tag_tags` (`tag_id`);

--
-- Indices de la tabla `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `entries`
--
ALTER TABLE `entries`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `entry_tag`
--
ALTER TABLE `entry_tag`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `entries`
--
ALTER TABLE `entries`
  ADD CONSTRAINT `fk_entries_categories` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `fk_entries_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `entry_tag`
--
ALTER TABLE `entry_tag`
  ADD CONSTRAINT `fk_entry_tag_entries` FOREIGN KEY (`entry_id`) REFERENCES `entries` (`id`),
  ADD CONSTRAINT `fk_entry_tag_tags` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
