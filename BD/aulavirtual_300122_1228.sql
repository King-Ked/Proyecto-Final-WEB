CREATE DATABASE IF NOT EXISTS `EQ4_BD`;
USE `EQ4_BD`;
-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-01-2022 a las 19:28:24
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 7.3.33
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";
/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */
;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */
;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */
;
/*!40101 SET NAMES utf8mb4 */
;
CREATE TABLE `imprimir` (
  `id_mat` int(5) NOT NULL,
  `nombre` varchar(25) NOT NULL,
  `subtema` varchar(15) NOT NULL,
  `URL` text NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;
--
-- Volcado de datos para la tabla `videos`
--
INSERT INTO `imprimir` (
    `id_mat`,
    `nombre`,
    `subtema`,
    `URL`
  )
VALUES (
    1,
    'Diseño WEB',
    'ejemplo de tesis',
    'https://drive.google.com/file/d/1ssPrth88nKmWwpecJUF3ol4R0ZQcTmXw/view'
  ),
  (
    2,
    'HTML5, CSS3 y Javascript',
    'Especifico',
    'https://drive.google.com/file/d/1lZOhF5GGsP6Jc8GhQlECRzmqoEebVH8P/view'
  ),
  (
    3,
    'Web statico',
    'Web',
    'https://drive.google.com/file/d/1ny6VpDU8savWh-tz-HP41nWt0ZuQkzVb/view'
  );
--
-- Índices para tablas volcadas
--
--
-- Indices de la tabla `videos`
--
ALTER TABLE `imprimir`
ADD PRIMARY KEY (`id_mat`);
--
-- AUTO_INCREMENT de las tablas volcadas
--
--
-- AUTO_INCREMENT de la tabla `videos`
--
ALTER TABLE `imprimir`
MODIFY `id_mat` int(5) NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 4;
COMMIT;
--
--
--
-- Base de datos: `aulavirtual`
CREATE TABLE `temario` (
  `bloque` int(5) NOT NULL,
  `id_tema` int(5) NOT NULL,
  `tema` text NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;
--
-- Volcado de datos para la tabla `temario`
--
INSERT INTO `temario` (`bloque`, `id_tema`, `tema`)
VALUES (1, 1, 'La decena'),
  (1, 2, 'Configuraciones Geometricas'),
  (1, 3, 'Hasta 15'),
  (1, 4, 'Recoleccion y regitro de datos'),
  (1, 5, 'Secuencia de sucesis en el tiempo'),
  (
    1,
    6,
    'Composicion y descomposicion de configuraciones geometricas'
  ),
  (1, 7, 'Explorar longitudes'),
  (1, 8, 'Hasta 30'),
  (2, 9, 'Continuemos con longitudes'),
  (2, 10, 'Mas sucesos en el tiempo'),
  (2, 11, 'Hasta 50'),
  (2, 12, 'Mas de figuras geometricas'),
  (2, 13, 'Experimentar con la capacidad'),
  (2, 14, 'Otra vez 50'),
  (2, 15, 'Construcciones geometricas'),
  (2, 16, 'Organizacion de datos'),
  (2, 17, 'Hasta 100'),
  (2, 18, 'Experimentar con el peso'),
  (3, 19, 'Otra vez 100'),
  (3, 20, 'Mas sobre el peso'),
  (
    3,
    21,
    'Secuencia de sucesos en el tiempo: dia, semana y mes'
  ),
  (3, 22, 'Estrategia de suma y resta'),
  (3, 23, 'Mosaicos y configuraciones geometricas'),
  (3, 24, 'Mas sobre las longitudes'),
  (3, 25, 'Figuras en cuerpos geometricos'),
  (3, 26, 'Mas de capacidades'),
  (3, 27, 'Cooperativa de manteles');
-- Índices para tablas volcadas
--
--
-- Indices de la tabla `temario`
--
ALTER TABLE `temario`
ADD PRIMARY KEY (`id_tema`);
--
-- AUTO_INCREMENT de las tablas volcadas
--
--
-- AUTO_INCREMENT de la tabla `temario`
--
ALTER TABLE `temario`
MODIFY `id_tema` int(5) NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 28;
COMMIT;
--
CREATE TABLE `videos` (
  `id_video` int(5) NOT NULL,
  `nombre` varchar(25) NOT NULL,
  `subtema` varchar(15) NOT NULL,
  `URL` text NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;
--
-- Volcado de datos para la tabla `videos`
--
INSERT INTO `videos` (
    `id_video`,
    `nombre`,
    `subtema`,
    `URL`
  )
VALUES (
    1,
    'Ruta Desarrollo WEB',
    'introduccion',
    'https://www.youtube.com/watch?v=ExsGyZDBlJQ'
  ),
  (
    2,
    'Blockchain',
    'Especifico',
    'https://www.youtube.com/watch?v=bN3seZiVJmk'
  ),
  (
    3,
    'Vlog',
    'ayuda',
    'https://www.youtube.com/watch?v=5NidaCK7uXI'
  ),
  (
    4,
    'Curso de Desarrollo WEB',
    'General',
    'https://www.youtube.com/watch?v=bYOjmW-740M'
  );
--
-- Índices para tablas volcadas
--
--
-- Indices de la tabla `videos`
--
ALTER TABLE `videos`
ADD PRIMARY KEY (`id_video`);
--
-- AUTO_INCREMENT de las tablas volcadas
--
--
-- AUTO_INCREMENT de la tabla `videos`
--
ALTER TABLE `videos`
MODIFY `id_video` int(5) NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 5;
COMMIT;
--
--
CREATE TABLE `soporte` (
  `id_duda` int(5) NOT NULL,
  `asunto` text NOT NULL,
  `correo` varchar(30) NOT NULL,
  `mensaje` text NOT NULL,
  `nombre` varchar(25) NOT NULL,
  `telefono` text NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;
--
-- Volcado de datos para la tabla `soporte`
--
INSERT INTO `soporte` (
    `id_duda`,
    `asunto`,
    `correo`,
    `mensaje`,
    `nombre`,
    `telefono`
  )
VALUES (
    1,
    'Palabra secreta',
    'alu1@ipn.mx',
    '¿A que se refiere con palabra secreta?',
    'Mario',
    'XXXXXXXXXX'
  ),
  (
    2,
    'Actualizar perfil',
    'alu7@ipn.mx',
    'No me realiza los cambios',
    'Mariana',
    '5556541848'
  ),
  (
    3,
    'Actividad',
    'alu8@ipn.mx',
    'No me guardo la actividad y ya lo voy haciendo varias veces',
    'Jaime',
    '6549812255'
  ),
  (
    4,
    'Actividad',
    'Alu8@ipn.mx',
    '',
    'Jaime',
    ''
  );
--
-- Índices para tablas volcadas
--
--
-- Indices de la tabla `soporte`
--
ALTER TABLE `soporte`
ADD PRIMARY KEY (`id_duda`);
--
-- AUTO_INCREMENT de las tablas volcadas
--
--
-- AUTO_INCREMENT de la tabla `soporte`
--
ALTER TABLE `soporte`
MODIFY `id_duda` int(5) NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 5;
COMMIT;
--
-- --------------------------------------------------------
--
-- Estructura de tabla para la tabla `usuarios`
--
CREATE TABLE `usuarios` (
  `id` int(5) NOT NULL,
  `nombre` text NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `correo` varchar(30) NOT NULL,
  `clave` varchar(10) NOT NULL,
  `tipo` text NOT NULL,
  `grupo` varchar(8) DEFAULT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;
--
-- Volcado de datos para la tabla `usuarios`
--
INSERT INTO `usuarios` (
    `id`,
    `nombre`,
    `usuario`,
    `correo`,
    `clave`,
    `tipo`,
    `grupo`
  )
VALUES (
    1,
    'Josué Serrano',
    'Josue23',
    'josue@gmail.com',
    'josue23',
    'Administrador',
    NULL
  ),
  (
    2,
    'Laura Vazquez',
    'LauVaz',
    'Laura@gmail.com',
    'lau123',
    'Profesor',
    NULL
  ),
  (
    3,
    'Jaime González',
    'Jaime56',
    'jaime@gmail.com',
    'jaime5',
    'Profesor',
    NULL
  ),
  (
    4,
    'Sarah Luebert',
    'Sara22',
    'sarah@gmail.com',
    'sara22',
    'Alumno',
    '2CV15'
  ),
  (
    8,
    'Jimena Sanchez',
    'jimesa8',
    'jimena@gmail.com',
    'jime8',
    'Profesor',
    NULL
  ),
  (
    9,
    'Fernanda Muñoz',
    'FerMu78',
    'fermu@gmail.com',
    'fer78',
    'Alumno',
    '2CV16'
  ),
  (
    11,
    'Lalo España',
    'lalo1',
    'lalo@gmail.com',
    'lalo1',
    'Alumno',
    '2CV15'
  ),
  (
    12,
    'Mario Casas',
    'mario81',
    'mario@gmail.com',
    'mario81',
    'Alumno',
    '2CV16'
  );
--
-- Índices para tablas volcadas
--
--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
ADD PRIMARY KEY (`id`);
--
-- AUTO_INCREMENT de las tablas volcadas
--
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 13;
COMMIT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */
;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */
;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */
;