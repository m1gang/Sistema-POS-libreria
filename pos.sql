-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-07-2024 a las 20:27:04
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
-- Base de datos: `pos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `categoria` text NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `categoria`, `fecha`) VALUES
(1, 'Escrituras', '2023-10-02 19:36:27'),
(2, 'Papelería', '2023-09-22 01:10:30'),
(3, 'Oficina', '2023-09-22 01:10:30'),
(4, 'Mochilas', '2023-10-02 19:22:22'),
(5, 'Accesorios', '2023-09-22 01:10:30'),
(6, 'Servicios', '2023-10-02 19:29:21'),
(9, 'Arte', '2024-05-07 15:51:26');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `documento` int(11) NOT NULL,
  `email` text NOT NULL,
  `telefono` text NOT NULL,
  `direccion` text NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `compras` int(11) NOT NULL,
  `ultima_compra` datetime NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `nombre`, `documento`, `email`, `telefono`, `direccion`, `fecha_nacimiento`, `compras`, `ultima_compra`, `fecha`) VALUES
(1, 'Juan Villegas Olivera', 75611234, 'juanvillegasol@gmail.com', '(987) 754-111', 'Av. La cantuta #302', '2004-07-02', 82, '2024-07-14 18:53:19', '2024-07-14 23:53:19'),
(2, 'Sofia Ramirez Alvarez', 76854512, 'sofi12@gmail.com', '(987) 544-123', 'Manzana lt 6 Rimac', '2001-04-13', 99, '2024-05-07 11:04:41', '2024-05-07 16:35:55'),
(4, 'Pedro Perez', 4657890, 'pedro@gmail.com', '(954) 965-754', 'Av. Los rubiales', '1970-05-14', 91, '2024-05-07 11:26:55', '2024-05-07 16:26:55'),
(5, 'Andrea Morales Miles', 85459612, 'moralesandrea01@gmail.com', '(998) 721-454', 'Av. Huancavelica', '1987-05-12', 101, '2024-07-14 19:03:10', '2024-07-15 00:03:10'),
(6, 'Roberto Martinez', 89451212, 'robertmy@gmail.com', '(954) 951-441', 'Av. Mariscal Castilla 253 ', '1987-05-05', 3, '2023-10-02 14:05:53', '2023-10-02 19:05:53');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `codigo` text NOT NULL,
  `descripcion` text NOT NULL,
  `imagen` text NOT NULL,
  `stock` int(11) NOT NULL,
  `precio_compra` float NOT NULL,
  `precio_venta` float NOT NULL,
  `ventas` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `id_categoria`, `codigo`, `descripcion`, `imagen`, `stock`, `precio_compra`, `precio_venta`, `ventas`, `fecha`) VALUES
(1, 1, '101', 'Lapicero Bic negro', 'vistas/img/productos/101/690.jpg', 14, 0.5, 1, 3, '2023-10-02 19:36:51'),
(2, 1, '102', 'Boligrafo Papermate azul', 'vistas/img/productos/102/435.jpg', 8, 0.8, 1.5, 4, '2023-10-02 19:36:51'),
(3, 1, '103', 'Pluma fuente Pilot negra', 'vistas/img/productos/103/825.jpg', 14, 1.5, 3, 6, '2023-10-02 19:36:51'),
(4, 1, '104', 'Marcador Sharpie amarillo', 'vistas/img/productos/104/449.jpg', 13, 1, 2, 2, '2023-10-02 19:36:51'),
(5, 1, '105', 'Resaltador Stabilo verde', 'vistas/img/productos/105/939.jpg', 84, 0.8, 1.5, 6, '2023-10-02 02:34:19'),
(6, 1, '106', 'Portaminas 0.7 mm', 'vistas/img/productos/106/503.jpg', 13, 1, 1.5, 1, '2023-10-02 02:34:19'),
(7, 1, '107', 'Lapicero gel Pentel 0.7 mm', 'vistas/img/productos/107/327.jpg', 104, 0.9, 2, 21, '2023-09-28 18:02:01'),
(8, 1, '108', 'Marca texto Faber amarillo', 'vistas/img/productos/108/966.jpg', 122, 0.7, 1.5, 23, '2024-07-15 00:03:10'),
(9, 1, '109', 'Bolígrafo roller Pilot V7 negro', 'vistas/img/productos/109/420.jpg', 118, 1.2, 2, 2, '2024-07-15 00:03:10'),
(10, 1, '110', 'Plumón para pizarrón Expo negro', 'vistas/img/productos/110/818.jpg', 100, 0.8, 1.5, 1, '2024-07-15 00:03:10'),
(11, 2, '201', 'Cuaderno profesional rayado 100h', 'vistas/img/productos/default/producto-default.png', 250, 2, 3.5, 0, '2023-09-23 22:55:39'),
(12, 2, '202', 'Block notas adhesivo 3x3', 'vistas/img/productos/default/producto-default.png', 300, 1, 1.5, 0, '2023-09-23 22:55:39'),
(13, 2, '203', 'Papel bond A4 90gr 500 hojas', 'vistas/img/productos/default/producto-default.png', 188, 4, 6, 12, '2023-10-02 02:54:16'),
(14, 2, '204', 'Carpeta pl?stica con vincha', 'vistas/img/productos/default/producto-default.png', 170, 0.5, 1, 10, '2023-10-01 23:50:14'),
(15, 2, '205', 'Post it cuadrado 3x3 amarillo', 'vistas/img/productos/default/producto-default.png', 245, 1, 1.5, 5, '2023-10-01 23:50:14'),
(16, 2, '206', 'Cuaderno universitario cuadriculado', 'vistas/img/productos/default/producto-default.png', 210, 1.2, 2, 0, '2023-09-23 22:55:39'),
(17, 2, '207', 'Block carta rayado', 'vistas/img/productos/default/producto-default.png', 190, 0.8, 1.5, 0, '2023-09-23 22:55:39'),
(18, 2, '208', 'Libreta pautada peque?a', 'vistas/img/productos/default/producto-default.png', 220, 0.5, 1, 0, '2023-09-23 22:55:39'),
(19, 2, '209', 'Folder pl?stico A4', 'vistas/img/productos/default/producto-default.png', 229, 0.2, 0.5, 1, '2023-10-02 19:40:06'),
(20, 2, '210', 'Separadores 10 pesta?as', 'vistas/img/productos/default/producto-default.png', 260, 0.3, 0.8, 0, '2023-09-23 22:55:39'),
(21, 3, '301', 'Grapas est?ndar', 'vistas/img/productos/default/producto-default.png', 345, 1, 1.5, 5, '2023-10-01 23:50:14'),
(22, 3, '302', 'Clips mariposa caja 50 u', 'vistas/img/productos/default/producto-default.png', 300, 1.2, 2, 20, '2023-09-30 19:11:55'),
(23, 3, '303', 'Cinta scotch transparente', 'vistas/img/productos/default/producto-default.png', 230, 1.5, 2.5, 20, '2023-09-30 19:11:55'),
(24, 3, '304', 'Tijeras de oficina grandes', 'vistas/img/productos/default/producto-default.png', 205, 1.8, 3, 15, '2023-09-30 19:11:55'),
(25, 3, '305', 'Corrector l?quido 20ml', 'vistas/img/productos/default/producto-default.png', 290, 1, 2, 10, '2023-09-30 19:11:55'),
(26, 3, '306', 'Sacapuntas de metal', 'vistas/img/productos/default/producto-default.png', 260, 0.5, 1, 20, '2023-10-01 23:50:14'),
(27, 3, '307', 'Pegamento en barra 20gr', 'vistas/img/productos/default/producto-default.png', 260, 0.8, 1.5, 0, '2023-09-23 22:55:39'),
(28, 3, '308', 'Chinchetas caja 50 u', 'vistas/img/productos/default/producto-default.png', 289, 0.6, 1, 1, '2023-10-02 07:29:13'),
(29, 3, '309', 'Libro de contabilidad 200 p', 'vistas/img/productos/default/producto-default.png', 269, 1.5, 2.5, 1, '2023-10-02 07:29:13'),
(30, 3, '310', 'Regla acr?lica 30cm', 'vistas/img/productos/default/producto-default.png', 306, 0.8, 1.5, 4, '2023-10-02 07:29:13'),
(31, 4, '401', 'Mochila escolar grande', 'vistas/img/productos/default/producto-default.png', 120, 5, 10, 0, '2023-09-23 22:55:39'),
(32, 4, '402', 'Morral deportivo', 'vistas/img/productos/default/producto-default.png', 109, 3.5, 7, 1, '2023-10-02 02:54:16'),
(33, 4, '403', 'Bolso ecol?gico algod?n', 'vistas/img/productos/default/producto-default.png', 129, 2, 4, 1, '2023-10-02 02:54:16'),
(34, 4, '404', 'Portafolios de cuero', 'vistas/img/productos/default/producto-default.png', 95, 8, 15, 5, '2023-10-02 07:29:13'),
(35, 4, '405', 'Cartuchera 3 bolsillos', 'vistas/img/productos/default/producto-default.png', 139, 1, 2, 1, '2023-10-02 02:49:33'),
(36, 4, '406', 'Bolsa t?rmica grande', 'vistas/img/productos/default/producto-default.png', 88, 4, 7, 2, '2023-10-02 02:54:16'),
(37, 4, '407', 'Mochila para laptop 15?', 'vistas/img/productos/default/producto-default.png', 78, 10, 18, 2, '2023-10-02 02:49:33'),
(38, 4, '408', 'Ri?onera deportiva', 'vistas/img/productos/default/producto-default.png', 116, 2, 4, 4, '2024-07-15 00:03:10'),
(39, 4, '409', 'Neceser de viaje', 'vistas/img/productos/default/producto-default.png', 98, 5, 9, 2, '2023-10-02 02:49:33'),
(40, 4, '410', 'Lonchera t?rmica infantil', 'vistas/img/productos/default/producto-default.png', 107, 3, 6, 3, '2024-07-15 00:03:10'),
(41, 5, '501', 'Borrador nata', 'vistas/img/productos/default/producto-default.png', 450, 0.2, 0.5, 0, '2023-09-23 22:55:39'),
(42, 5, '502', 'Sacapuntas doble entrada', 'vistas/img/productos/default/producto-default.png', 429, 0.5, 1, 1, '2024-07-15 00:03:10'),
(43, 5, '503', 'Portal?pices acr?lico', 'vistas/img/productos/default/producto-default.png', 409, 0.3, 0.8, 1, '2024-07-15 00:03:10'),
(44, 5, '504', 'Tijeras punta roma', 'vistas/img/productos/default/producto-default.png', 378, 0.8, 1.5, 2, '2024-07-15 00:03:10'),
(45, 5, '505', 'Goma en barra', 'vistas/img/productos/default/producto-default.png', 459, 0.5, 1, 1, '2024-07-15 00:03:10'),
(46, 5, '506', 'Estuche l?pices aluminio', 'vistas/img/productos/default/producto-default.png', 433, 1, 2, 7, '2024-07-15 00:03:10'),
(47, 5, '507', 'L?piz bicolor rojo/azul', 'vistas/img/productos/default/producto-default.png', 465, 0.2, 0.5, 5, '2023-09-28 18:10:32'),
(48, 5, '508', 'Regla pl?stica 15cm', 'vistas/img/productos/default/producto-default.png', 485, 0.3, 0.8, 5, '2023-10-01 21:33:22'),
(49, 5, '509', 'Corrector cinta', 'vistas/img/productos/default/producto-default.png', 410, 0.6, 1.2, 10, '2023-10-01 21:33:22'),
(50, 5, '510', 'Marca p?ginas metal', 'vistas/img/productos/default/producto-default.png', 395, 0.4, 0.8, 5, '2023-10-01 21:33:22'),
(51, 6, '601', 'Fotocopiado B/N', 'vistas/img/productos/default/producto-default.png', 1500, 0.1, 0.1, 0, '2023-09-23 22:55:39'),
(52, 6, '602', 'Fotocopiado color', 'vistas/img/productos/default/producto-default.png', 1400, 0.5, 0.5, 0, '2023-09-23 22:55:39'),
(53, 6, '603', 'Impresi?n B/N', 'vistas/img/productos/default/producto-default.png', 1290, 0.15, 0.15, 10, '2023-10-02 02:05:16'),
(54, 6, '604', 'Impresi?n color', 'vistas/img/productos/default/producto-default.png', 1200, 0.3, 0.3, 0, '2023-09-23 22:55:39'),
(55, 6, '605', 'Escaneo', 'vistas/img/productos/default/producto-default.png', 1595, 0.1, 0.1, 5, '2023-10-02 02:05:16'),
(56, 6, '606', 'Encuadernado espiral', 'vistas/img/productos/default/producto-default.png', 1493, 1, 1, 7, '2023-10-02 02:28:23'),
(57, 6, '607', 'Empastado', 'vistas/img/productos/default/producto-default.png', 1392, 3, 3, 8, '2023-10-02 19:40:06'),
(58, 6, '608', 'Ploteo A3', 'vistas/img/productos/default/producto-default.png', 1287, 1, 1, 13, '2024-07-14 23:55:45'),
(59, 6, '609', 'Ploteo A4', 'vistas/img/productos/default/producto-default.png', 1192, 0.5, 0.5, 8, '2024-07-14 23:55:45'),
(60, 6, '610', 'Diseño grafico', 'vistas/img/productos/default/producto-default.png', 1565, 5, 5, 35, '2024-05-07 16:35:55'),
(71, 5, '511', 'Laptop GigaByte G5 ', 'vistas/img/productos/511/790.jpg', 8, 3500, 4900, 2, '2024-07-14 23:55:45'),
(72, 5, '512', 'Audifonos Baseus Bowie M2s', 'vistas/img/productos/512/172.jpg', 16, 135, 162, 4, '2024-07-14 23:55:45'),
(73, 5, '513', 'Audifonos Baseus H1 Bowie', 'vistas/img/productos/513/261.jpg', 5, 200, 260, 5, '2024-07-14 23:55:45'),
(74, 5, '514', 'Mouse Gamer Recargable Inalambrico WiFi', 'vistas/img/productos/514/136.jpg', 12, 130, 182, 8, '2024-07-14 23:53:19'),
(75, 5, '515', 'MOUSE RAZER DEATHADDER V2', 'vistas/img/productos/515/905.jpg', 18, 90, 126, 7, '2024-07-14 23:53:19'),
(76, 5, '516', 'Baseus auriculares GH02', 'vistas/img/productos/516/228.jpg', 4, 200, 240, 5, '2024-07-14 23:56:02');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `usuario` text NOT NULL,
  `password` text NOT NULL,
  `perfil` text NOT NULL,
  `foto` text NOT NULL,
  `estado` int(11) NOT NULL,
  `ultimo_login` datetime NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `usuario`, `password`, `perfil`, `foto`, `estado`, `ultimo_login`, `fecha`) VALUES
(60, 'Miguel Yapias', 'migang', '$2a$07$vY6x3F45HQSAiOs6N5wMuOGI1uoEJeogXlVrcFxNHdZ5WVnDzDARC', 'Administrador', 'vistas/img/usuarios/migang/255.png', 1, '2024-07-16 12:59:00', '2024-07-16 17:59:00'),
(61, 'Ana Maria Perez', 'ana', '$2a$07$vY6x3F45HQSAiOs6N5wMuOffvy.EsKj72J/AmTM26vZOUh0FGtllW', 'Vendedor', 'vistas/img/usuarios/ana/813.jpg', 1, '2024-07-14 18:41:50', '2024-07-14 23:41:50'),
(63, 'Tiziana Milagros', 'tiziana', '$2a$07$vY6x3F45HQSAiOs6N5wMuOytj9TBs9Xfah.06w2zUacN4y81j8UrG', 'Especial', 'vistas/img/usuarios/tiziana/659.jpg', 1, '2023-10-02 11:07:23', '2023-10-02 16:07:23'),
(67, 'admin', 'admin', '$2a$07$asxx54ahjppf45sd87a5auXBm1Vr2M1NV5t/zNQtGHGpS5fFirrbG', 'Administrador', 'vistas/img/usuarios/admin/811.jpg', 1, '0000-00-00 00:00:00', '2024-07-16 17:59:37');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `id` int(11) NOT NULL,
  `codigo` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `id_vendedor` int(11) NOT NULL,
  `productos` text NOT NULL,
  `impuesto` float NOT NULL,
  `neto` float NOT NULL,
  `total` float NOT NULL,
  `metodo_pago` text NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`id`, `codigo`, `id_cliente`, `id_vendedor`, `productos`, `impuesto`, `neto`, `total`, `metodo_pago`, `fecha`) VALUES
(1, 10001, 1, 60, '[{\"id\":\"76\",\"descripcion\":\"Baseus auriculares GH02\",\"cantidad\":\"1\",\"stock\":\"0\",\"precio\":\"240\",\"total\":\"240\"},{\"id\":\"75\",\"descripcion\":\"MOUSE RAZER DEATHADDER V2\",\"cantidad\":\"1\",\"stock\":\"18\",\"precio\":\"126\",\"total\":\"126\"},{\"id\":\"74\",\"descripcion\":\"Mouse Gamer Recargable Inalambrico WiFi\",\"cantidad\":\"1\",\"stock\":\"12\",\"precio\":\"182\",\"total\":\"182\"},{\"id\":\"73\",\"descripcion\":\"Audifonos Baseus H1 Bowie\",\"cantidad\":\"1\",\"stock\":\"6\",\"precio\":\"260\",\"total\":\"260\"}]', 0, 808, 808, 'Efectivo', '2024-07-14 23:53:19'),
(2, 10002, 5, 60, '[{\"id\":\"73\",\"descripcion\":\"Audifonos Baseus H1 Bowie\",\"cantidad\":\"1\",\"stock\":\"5\",\"precio\":\"260\",\"total\":\"260\"},{\"id\":\"71\",\"descripcion\":\"Laptop GigaByte G5 \",\"cantidad\":\"2\",\"stock\":\"8\",\"precio\":\"4900\",\"total\":\"9800\"},{\"id\":\"58\",\"descripcion\":\"Ploteo A3\",\"cantidad\":\"1\",\"stock\":\"1287\",\"precio\":\"1\",\"total\":\"1\"},{\"id\":\"59\",\"descripcion\":\"Ploteo A4\",\"cantidad\":\"1\",\"stock\":\"1192\",\"precio\":\"0.5\",\"total\":\"0.5\"},{\"id\":\"72\",\"descripcion\":\"Audifonos Baseus Bowie M2s\",\"cantidad\":\"1\",\"stock\":\"16\",\"precio\":\"162\",\"total\":\"162\"}]', 0, 10223.5, 10223.5, 'TC-55757676', '2024-07-14 23:55:45'),
(3, 10003, 5, 60, '[{\"id\":\"8\",\"descripcion\":\"Marca texto Faber amarillo\",\"cantidad\":\"1\",\"stock\":\"122\",\"precio\":\"1.5\",\"total\":\"1.5\"},{\"id\":\"9\",\"descripcion\":\"Bolígrafo roller Pilot V7 negro\",\"cantidad\":\"1\",\"stock\":\"118\",\"precio\":\"2\",\"total\":\"2\"},{\"id\":\"10\",\"descripcion\":\"Plumón para pizarrón Expo negro\",\"cantidad\":\"1\",\"stock\":\"100\",\"precio\":\"1.5\",\"total\":\"1.5\"},{\"id\":\"43\",\"descripcion\":\"Portal?pices acr?lico\",\"cantidad\":\"1\",\"stock\":\"409\",\"precio\":\"0.8\",\"total\":\"0.8\"},{\"id\":\"42\",\"descripcion\":\"Sacapuntas doble entrada\",\"cantidad\":\"1\",\"stock\":\"429\",\"precio\":\"1\",\"total\":\"1\"},{\"id\":\"44\",\"descripcion\":\"Tijeras punta roma\",\"cantidad\":\"1\",\"stock\":\"378\",\"precio\":\"1.5\",\"total\":\"1.5\"},{\"id\":\"45\",\"descripcion\":\"Goma en barra\",\"cantidad\":\"1\",\"stock\":\"459\",\"precio\":\"1\",\"total\":\"1\"},{\"id\":\"46\",\"descripcion\":\"Estuche l?pices aluminio\",\"cantidad\":\"1\",\"stock\":\"433\",\"precio\":\"2\",\"total\":\"2\"},{\"id\":\"38\",\"descripcion\":\"Ri?onera deportiva\",\"cantidad\":\"1\",\"stock\":\"116\",\"precio\":\"4\",\"total\":\"4\"},{\"id\":\"40\",\"descripcion\":\"Lonchera t?rmica infantil\",\"cantidad\":\"1\",\"stock\":\"107\",\"precio\":\"6\",\"total\":\"6\"}]', 0, 21.3, 21.3, 'TD-789494', '2024-07-15 00:03:10');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
