-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-05-2025 a las 16:56:45
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `articdin`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros`
--

CREATE TABLE `libros` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `autor` varchar(255) NOT NULL,
  `descripcion` text DEFAULT NULL,
  `precio` decimal(10,2) DEFAULT NULL,
  `portada` varchar(255) DEFAULT NULL,
  `archivo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `libros`
--

INSERT INTO `libros` (`id`, `titulo`, `autor`, `descripcion`, `precio`, `portada`, `archivo`) VALUES
(1, 'Lo que el viento se llevó', 'Margaret Mitchell', 'Descripción del libro...', 9.99, 'portada1.jpg', '1.jpg'),
(2, 'El libro de los 5 anillos', 'Miyamoto Musashi', 'Descripción del libro...', 5.99, 'portada2.jpg', '2.jpg'),
(3, 'Platón: La República', 'Platón', 'Descripción del libro...', 7.99, 'portada3.jpg', '3.jpg'),
(4, 'El arte de la guerra', 'Sun Tzu', 'Descripción del libro...', 8.99, 'portada4.jpg', '4.jpg'),
(5, 'La vuelta al mundo en 80 días', 'Jules Verne', 'Descripción del libro...', 6.99, 'portada5.jpg', '5.jpg'),
(6, 'Cada historia cuenta', 'Autor Desconocido', 'Descripción del libro...', 4.99, 'portada6.jpg', '5b5588929b6f46d55f62e775c3e8d101.jpg'),
(7, 'Mein Kampf', 'Adolf Hitler', 'Descripción del libro...', 10.99, 'portada7.jpg', '6.jpg'),
(8, 'Dr. Jekyll & Mr. Hyde', 'Robert Louis Stevenson', 'Descripción del libro...', 5.49, 'portada8.jpg', '7.jpg'),
(9, 'El retrato de una dama', 'Henry James', 'Descripción del libro...', 6.49, 'portada9.jpg', '8.jpg'),
(10, 'Drácula', 'Bram Stoker', 'Descripción del libro...', 8.49, 'portada10.jpg', '9.jpg'),
(11, 'Cien años de soledad', 'Gabriel García Márquez', 'Descripción del libro...', 11.99, 'portada11.jpg', '10.jpg'),
(12, 'Diseño de portada de libro', 'Autor Desconocido', 'Descripción del libro...', 3.99, 'portada12.jpg', '81iU2inbgLL._UF1000,1000_QL80_.jpg'),
(13, 'Nuestra señora de París', 'Victor Hugo', 'Descripción del libro...', 7.49, 'portada13.jpg', '370_señora_paris.jpg'),
(14, 'Hasta que el verano acabe', 'Autor Desconocido', 'Descripción del libro...', 4.49, 'portada14.jpg', '501w-yAQxlnYJMnY.webp'),
(15, 'El bosque mágico', 'Autor Desconocido', 'Descripción del libro...', 6.19, 'portada15.jpg', '1003w-_pp1hAU8znQ.webp'),
(16, 'La vida dentro de tu cabeza', 'Autor Desconocido', 'Descripción del libro...', 7.99, 'portada16.jpg', '1003w-D45iCPGnKec.webp'),
(17, 'Cruce de caminos', 'Autor Desconocido', 'Descripción del libro...', 5.49, 'portada17.jpg', '1003w-wxuYB_sJtMw.webp'),
(18, 'La naranja mecánica', 'Anthony Burgess', 'Descripción del libro...', 9.49, 'portada18.jpg', '1623078210-la-naranja-mecanica-anthony-burgess-201505261226.jpg'),
(19, 'Mamá nos dijo adiós', 'Autor Desconocido', 'Descripción del libro...', 4.99, 'portada19.jpg', 'portada-baja.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `libros`
--
ALTER TABLE `libros`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `libros`
--
ALTER TABLE `libros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
