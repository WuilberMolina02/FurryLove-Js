-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-08-2025 a las 21:13:06
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
-- Base de datos: `furrylove_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `furryshop`
--

CREATE TABLE `furryshop` (
  `Productos_id` int(11) NOT NULL,
  `nombreProducto` varchar(150) NOT NULL,
  `descripcionProducto` varchar(300) DEFAULT NULL,
  `precio` decimal(10,2) DEFAULT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT current_timestamp(),
  `imagen` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `furryshop`
--

INSERT INTO `furryshop` (`Productos_id`, `nombreProducto`, `descripcionProducto`, `precio`, `fecha_creacion`, `imagen`) VALUES
(1, 'Cama para gato', 'Ideal para una larga siesta', 10.00, '2025-07-21 04:28:36', 'cama g.png'),
(2, 'Pelotas para perro', 'Diversión sin limites.', 5.00, '2025-07-21 04:48:41', 'pelotas p.png'),
(3, 'Collar para gato', 'Accesorio lindo para tu gato.', 6.00, '2025-07-21 04:48:41', 'COLLAR G.png'),
(4, 'Collar para perro', 'Accesorio lindo para tu perro.', 5.50, '2025-07-21 04:48:41', 'COLLAR.png'),
(5, 'Traje de dinosaurio', 'Lindo y de buena calidad.', 9.99, '2025-07-21 04:48:41', 'comida p (1).png'),
(6, 'Peluches para gato', 'Diversión 100% asegurada.', 7.50, '2025-07-21 04:48:41', 'peluches g.png'),
(7, 'Plato para perro', 'Perfecto para la comida.', 8.99, '2025-07-21 04:48:41', 'PLATO .png'),
(8, 'Comida de perro', 'Sabor que le encantara a tu perro.', 4.55, '2025-07-21 04:48:41', 'comida p.png'),
(9, 'Traje de banana', 'Calidad excelente y buen precio.', 6.00, '2025-07-21 04:48:41', 'camisa p.png'),
(10, 'Sueters para perro', 'Perfecto para regalar o usar.', 7.00, '2025-07-21 04:48:41', 'sueter p.png'),
(11, 'Camisas para perro', 'Ropa perfecta para tu perro.', 5.00, '2025-07-21 04:48:41', 'camisas p.png'),
(12, 'Comida para gato', 'Sabor que le encantara a tu gato.', 8.00, '2025-07-21 04:48:41', 'comida g.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gatos`
--

CREATE TABLE `gatos` (
  `id_mascota` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `genero` enum('Macho','Hembra') DEFAULT NULL,
  `edad` varchar(20) DEFAULT NULL,
  `peso` varchar(10) DEFAULT NULL,
  `raza` varchar(50) DEFAULT NULL,
  `tamaño` enum('Pequeño','Mediano','Grande') DEFAULT NULL,
  `descripcion` text DEFAULT NULL,
  `refugio` varchar(100) DEFAULT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `imagen_url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `gatos`
--

INSERT INTO `gatos` (`id_mascota`, `nombre`, `genero`, `edad`, `peso`, `raza`, `tamaño`, `descripcion`, `refugio`, `telefono`, `imagen_url`) VALUES
(1, 'Michi', 'Macho', '5 meses', '2.3 kg', 'Criollo', 'Pequeño', 'Michi es curioso y le encanta trepar y jugar.', 'Échame una pata', '7929-1589', 'imagenes/Michi.jpg'),
(2, 'Luna', 'Hembra', '1 año', '3.1 kg', 'Angora', 'Pequeño', 'Luna es muy tierna y tranquila, ideal para interiores.', 'Asociación milagros de amor', '7709-9760', 'imagenes/Luna.jpg'),
(3, 'Tito', 'Macho', '2 años', '4.5 kg', 'Criollo', 'Mediano', 'Tito es independiente, pero le gusta que lo acaricien.', 'FHMD CatDog El Salvador', '2242-290', 'imagenes/Tito.jpg'),
(4, 'Simba', 'Macho', '6 meses', '2.8 kg', 'Criollo', 'Mediano', 'Simba es muy activo, ideal para hogares con otros gatos.', 'Échame una pata', '7929-1589', 'imagenes/Simba.jpg'),
(5, 'Mía', 'Hembra', '8 meses', '3.0 kg', 'Criollo', 'Mediano', 'Mía es elegante y le encanta dormir en lugares cómodos.', 'Asociación milagros de amor', '7709-9760', 'imagenes/Mía.jpg'),
(6, 'Tom', 'Macho', '4 años', '5.2 kg', 'Criollo', 'Grande', 'Tom es tranquilo y le encanta observar por la ventana.', 'FHMD CatDog El Salvador', '2242-290', 'imagenes/Tom.jpg'),
(7, 'Salem', 'Macho', '1 año', '3.7 kg', 'Criollo', 'Mediano', 'Salem es curioso, inteligente y muy ágil.', 'Échame una pata', '7929-1589', 'imagenes/Salem.jpg'),
(8, 'Tigra', 'Hembra', '1 año', '3.7 kg', 'Criollo', 'Mediano', 'Tigra es muy observadora y le encanta trepar.', 'FHMD CatDog El Salvador', '2242-290', 'imagenes/Tigra.jpg'),
(9, 'Leo', 'Macho', '3 meses', '2.0 kg', 'Criollo', 'Pequeño', 'Leo es curioso, activo y se lleva bien con niños.', 'Échame una pata', '7929-1589', 'imagenes/Leo.jpg'),
(10, 'Nube', 'Hembra', '5 años', '4.6 kg', 'Criollo', 'Mediano', 'Nube es calmada y muy cariñosa, ideal para un hogar tranquilo.', 'Asociación milagros de amor', '7709-9760', 'imagenes/Nube.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perros`
--

CREATE TABLE `perros` (
  `id_mascota` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `genero` enum('Macho','Hembra') DEFAULT NULL,
  `edad` varchar(20) DEFAULT NULL,
  `peso` varchar(10) DEFAULT NULL,
  `raza` varchar(50) DEFAULT NULL,
  `tamaño` enum('Pequeño','Mediano','Grande') DEFAULT NULL,
  `descripcion` text DEFAULT NULL,
  `refugio` varchar(100) DEFAULT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `imagen_url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `perros`
--

INSERT INTO `perros` (`id_mascota`, `nombre`, `genero`, `edad`, `peso`, `raza`, `tamaño`, `descripcion`, `refugio`, `telefono`, `imagen_url`) VALUES
(1, 'Max', 'Macho', '4 meses', '6.8 kg', 'Aguacatero', 'Mediano', 'Max es muy activo, ideal para hogares con niños.', 'Échame una pata', '7929-1589', 'Max.jpeg'),
(2, 'Luna', 'Hembra', '2 años', '12.3 kg', 'Aguacatero', 'Grande', 'Luna es muy dócil y le encanta jugar con otros perros.', 'Échame una pata', '7929-1589', 'Luna.jpeg'),
(3, 'Rocky', 'Macho', '6 meses', '9.1 kg', 'Aguacatero', 'Grande', 'Rocky es fuerte pero muy amigable y sociable.', 'Asociación milagros de amor', '7709-9760', 'Rocky.jpeg'),
(4, 'Nina', 'Hembra', '1 año', '7.5 kg', 'Aguacatero', 'Mediano', 'Nina es obediente y le gusta salir a caminar.', 'FHMD CatDog El Salvador', '2242-290', 'Nina.jpeg'),
(5, 'Toby', 'Macho', '3 años', '14.2 kg', 'Aguacatero', 'Grande', 'Toby es muy noble y le encanta estar con personas.', 'Dame tu pata sv', '7883-1753', 'Toby.jpeg'),
(6, 'Canela', 'Hembra', '8 meses', '5.6 kg', 'Aguacatero', 'Pequeño', 'Canela es muy tierna y tranquila, ideal para casa pequeña.', 'Échame una pata', '7929-1589', 'Canela.jpeg'),
(7, 'Bruno', 'Macho', '5 años', '16.7 kg', 'Aguacatero', 'Grande', 'Bruno es protector y leal, ideal para cuidar hogar.', 'Asociación milagros de amor', '7709-9760', 'Bruno.jpeg'),
(8, 'Lola', 'Hembra', '3 meses', '3.2 kg', 'Aguacatero', 'Pequeño', 'Lola es juguetona y muy cariñosa, perfecta para interiores.', 'FHMD CatDog El Salvador', '2242-290', 'Lola.jpeg'),
(9, 'Rex', 'Macho', '10 meses', '10.0 kg', 'Aguacatero', 'Mediano', 'Rex es muy inteligente y necesita ejercicio diario.', 'Dame tu pata sv', '7883-1753', 'Rex.jpeg'),
(10, 'Café', 'Macho', '2 años', '11.4 kg', 'Aguacatero', 'Mediano', 'Café es un perro noble y alegre, ideal para compañía. Tiene mucha energía y se lleva bien con otros perros.', 'Échame una pata', '7929-1589', 'Cafe.jpeg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `refugios`
--

CREATE TABLE `refugios` (
  `id_refugio` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `descripcion` text DEFAULT NULL,
  `ubicacion` varchar(150) DEFAULT NULL,
  `contactos` varchar(100) DEFAULT NULL,
  `redes_sociales` varchar(255) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `refugios`
--

INSERT INTO `refugios` (`id_refugio`, `nombre`, `descripcion`, `ubicacion`, `contactos`, `redes_sociales`, `image`) VALUES
(1, 'Échame una pata', 'Es un proyecto de rescate animal, basado en el voluntariado y apadrinamiento responsable de personas \"animalistas\", para recaudar fondos y recursos', 'San Miguel, El Salvador', 'Teléfono: 7029-1589, Correo: echameunapatasv@gmail.com, WhatsApp 7929-1589', 'Facebook: Échame una pata SV, Instagram: @echameunapatasv', 'echameunapata.jpeg'),
(2, 'Asociación Milagros de Amor El Salvador', 'Organización dedicada a la protección, bienestar, esterilización animal y dar en adopción a estos', 'San Salvador, El Salvador', 'Teléfono: 7709-9760,\r\n Correo: adoptame.ma@gmail.com', 'Facebook: Asociación Milagros de Amor El Salvador, Instagram: @milanguitos', 'milagros.png'),
(3, 'Fundación Hogar De Mascotas Desamparadas', 'Cat&Dog es una fundación familiar que rescata, rehabilita y da en adopción a perros y gatos abandonados. Opera sin apoyo externo, financiándose con donaciones y realiza esterilizaciones para reducir la sobrepoblación animal', 'Melara, El Salvador', 'Teléfono: 2242-2090, \r\nCorreo: catdogorganization@hotmail.com,\r\n WhatsApp 2242-2090', 'Facebook: FHMD CatDog El Salvador, Instagram: @FHMDCatDogsv', 'images.png'),
(4, 'Dame tu Pata', 'Fomentamos la adopción de perros y gatos callejeros de El Salvador, la educación y cuido de todo animal, apoyamos y concientizamos sobre las esterilizaciones y castraciones', 'Nuevo Cuscatlán, El Salvador', 'Teléfono: 7873‑4472', 'Instagram: @dametupatasv', 'dame una pata.jpeg'),
(5, 'Refugio Felino / Cat Shelter El Salvador', 'Refugio sin sede fija gestionado por rescatistas voluntarios. Se dedica al rescate, rehabilitación y adopción de gatos. Opera desde hogares temporales. Promueven adopciones responsables, seguimiento post-adopción y campañas para tratamientos de enfermedades como PIF.', 'Santa Tecla / San Salvador, El Salvador', 'Teléfono: 6934‑0378\r\nCorreo: rescatesfelinos@gmail.com  \r\nWhatsApp: 6934‑0378', 'Facebook: Refugio Felino / Cat Shelter El Salvador', 'Refugio Felino.jpg'),
(6, 'Adoptame.sv', 'Refugio y plataforma de adopción responsable en El Salvador. Promueven la adopción de perros y gatos rescatados, campañas de concientización y colaboran con hogares temporales. Su lema es “¡Adopta, no compres!”.', 'San Salvador y zonas centrales, El Salvador', 'Teléfono: 7140‑3830', 'Instagram: @adoptame.sv | Facebook: adoptame.sv', 'adoptame.jpeg'),
(7, 'Patitas SOS', 'Patitas SOS es un hogar en San Salvador que rescata, rehabilita y da en adopción perritos rescatados de situaciones de maltrato, abandono o con enfermedades graves. Promueven la adopción responsable, organizan eventos solidarios y difunden casos urgentes para recibir apoyo comunitario.', 'San Salvador, El Salvador', 'Teléfono: +503 7180‑1364', 'Facebook: Patitas SOS Instagram: @patitassssv', 'patitas SOS.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `registro` (
  `id_usario` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL DEFAULT 'NOT NULL',
  `correo` varchar(50) NOT NULL DEFAULT 'NOT NULL',
  `contraseña` varchar(10) NOT NULL DEFAULT 'NOT NULL'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`id_usario`, `nombre`, `correo`, `contraseña`) VALUES
(5, 'Roberto ', 'rrivas14@gmail.com', '1411'),
(6, 'Rocío', 'rociorivas@gmail.com', '1221'),
(7, 'Pamela Rivas', 'pamelarivas890@gmail.com', 'maylito27'),
(8, 'Alicia', 'aliciagonz23@gmail.com', '12510'),
(9, 'Karla', 'krivas14@gmail.com', '2124'),
(10, 'María', 'maria@gmail.com', '9030'),
(11, 'Arianna', 'arisosa245@gmail.com', '1234'),
(12, 'Pola', 'polarvs89@gmail.com', '6789'),
(13, 'Jorge', 'jorge@gmail.com', '8934'),
(14, 'Xiomara', 'xiomara23@gmail.com', 'opas'),
(15, 'pamela', 'pame@gmail.xcom', '5643'),
(16, 'Karla', 'karla@gmail.com', '1422'),
(17, 'alisson', 'alisson.23@gmail.com', '2324'),
(18, 'Alisson Rivas', 'alissonrivas20@gmail.com', '2810'),
(19, 'Daniela Martinez', 'danielamar.23@gmail.com', '2406'),
(20, '', '', ''),
(21, 'Ashley', 'ashley@gmail.com', 'AMTR.2008');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `furryshop`
--
ALTER TABLE `furryshop`
  ADD PRIMARY KEY (`Productos_id`);

--
-- Indices de la tabla `gatos`
--
ALTER TABLE `gatos`
  ADD PRIMARY KEY (`id_mascota`);

--
-- Indices de la tabla `perros`
--
ALTER TABLE `perros`
  ADD PRIMARY KEY (`id_mascota`);

--
-- Indices de la tabla `refugios`
--
ALTER TABLE `refugios`
  ADD PRIMARY KEY (`id_refugio`);

--
-- Indices de la tabla `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`id_usario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `furryshop`
--
ALTER TABLE `furryshop`
  MODIFY `Productos_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `gatos`
--
ALTER TABLE `gatos`
  MODIFY `id_mascota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `perros`
--
ALTER TABLE `perros`
  MODIFY `id_mascota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `refugios`
--
ALTER TABLE `refugios`
  MODIFY `id_refugio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `registro`
--
ALTER TABLE `registro`
  MODIFY `id_usario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
