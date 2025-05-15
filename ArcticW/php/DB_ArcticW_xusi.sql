-- Estructura de la tabla `libros_digitales`
CREATE TABLE `libros_digitales` (
  `ID` int(11) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `autor` varchar(50) NOT NULL,
  `precio` decimal(10,0) NOT NULL,
  `imagen` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Estructura de la tabla `usuarios`
CREATE TABLE `usuarios` (
  `idusuario` int(11) NOT NULL,
  `usuario` varchar(60) NOT NULL,
  `correo` varchar(60) NOT NULL,
  `contrasena` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Estructura de la tabla `biblioteca`
CREATE TABLE `biblioteca` (
  `idbiblioteca` int(11) NOT NULL,
  `idusuario` int(11) NOT NULL,
  `idlibro` int(11) NOT NULL,
  `fecha_compra` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Crear índices
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idusuario`);
ALTER TABLE `libros_digitales`
  ADD PRIMARY KEY (`ID`);
ALTER TABLE `biblioteca`
  ADD PRIMARY KEY (`idbiblioteca`),
  ADD KEY `idusuario` (`idusuario`),
  ADD KEY `idlibro` (`idlibro`);

-- AUTO_INCREMENT
ALTER TABLE `usuarios`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
ALTER TABLE `libros_digitales`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
ALTER TABLE `biblioteca`
  MODIFY `idbiblioteca` int(11) NOT NULL AUTO_INCREMENT;

-- Datos de ejemplo para `usuarios`
INSERT INTO `usuarios` (`idusuario`, `usuario`, `correo`, `contrasena`) VALUES
(1, '', '', ''),
(11, 'johan2113', 'johanaricapa@gmail.com', '2113'),
(17, 'johanv', 'johanaricapa@gmail.com', '88b72695cae52bf188fafd93b8a20cb5fc6354f1'),
(21, 'Josep', 'josep.codinar@educem.net', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220'),
(22, 'johan', 'johanaricapa@gmail.com', '88b72695cae52bf188fafd93b8a20cb5fc6354f1');

-- Datos de ejemplo para `libros_digitales`
INSERT INTO `libros_digitales` (`ID`, `titulo`, `autor`, `precio`, `imagen`) VALUES
(1, 'Libro 1', 'Autor 1', 10, 'libro1.jpg'),
(2, 'Libro 2', 'Autor 2', 15, 'libro2.jpg'),
(3, 'Libro 3', 'Autor 3', 12, 'libro3.jpg');
