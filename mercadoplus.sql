-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-04-2019 a las 16:50:51
-- Versión del servidor: 10.1.16-MariaDB
-- Versión de PHP: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mercadoplus`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datosoficiales`
--

CREATE TABLE `datosoficiales` (
  `id` int(11) NOT NULL,
  `fecha` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `hora` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `dolardicom` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `pctvdolardicom` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `eurodicom` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `pctveurodicom` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `eurodolar` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `pctveurodolar` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `bitcoinbuy` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `pctvbitcoinbuy` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `bitcoinsell` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `pctvbitcoinsell` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `bitcoinpromedio` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `pctvbitcoinpromedio` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `petro` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `pctvpetro` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `petro1` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `pctvpetro1` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `petro2` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `pctvpetro2` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `wti` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `pctvwti` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `brent` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `pctvbrent` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `petroleo` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `pctvpetroleo` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `orobuy` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `pctvorobuy` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `orosell` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `pctvorosell` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `oropromedio` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `pctvoropromedio` varchar(255) CHARACTER SET latin1 DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci ROW_FORMAT=DYNAMIC;

--
-- Volcado de datos para la tabla `datosoficiales`
--

INSERT INTO `datosoficiales` (`id`, `fecha`, `hora`, `dolardicom`, `pctvdolardicom`, `eurodicom`, `pctveurodicom`, `eurodolar`, `pctveurodolar`, `bitcoinbuy`, `pctvbitcoinbuy`, `bitcoinsell`, `pctvbitcoinsell`, `bitcoinpromedio`, `pctvbitcoinpromedio`, `petro`, `pctvpetro`, `petro1`, `pctvpetro1`, `petro2`, `pctvpetro2`, `wti`, `pctvwti`, `brent`, `pctvbrent`, `petroleo`, `pctvpetroleo`, `orobuy`, `pctvorobuy`, `orosell`, `pctvorosell`, `oropromedio`, `pctvoropromedio`) VALUES
(1, '2019-04-17', '10:39 AM', '1,000.00', '0', '1,000.00', '0', '1,00', '0', '1,000.00', '0', '1,000.00', '0', '1,000.00', '0', '60.00', '0', '1,000.00', '0', '600,000.0', '0', '1,000.00', '0', '1,000.00', '0', '10,000.0', '0', '1,000.00', '0', '1,000.00', '0', '1,000.00', '0'),
(2, '2019-04-17', '10:46 AM', '5,500.00', '0.82', '6,200.00', '0.84', '1,13', '0.12', '5,000.00', '0.80', '5,000.00', '0.80', '5,000.00', '0.80', '60.00', '0.00', '5,000.00', '0.80', '330,000.00', '-0.82', '5,000.00', '0.80', '5,000.00', '0.80', '50,000.0', '0.80', '5,000.00', '0.80', '5,000.00', '0.80', '5,000.00', '0.80');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datosotc`
--

CREATE TABLE `datosotc` (
  `id` int(11) NOT NULL,
  `fecha` varchar(255) DEFAULT NULL,
  `hora` varchar(255) DEFAULT NULL,
  `dolartodaybuy` varchar(255) DEFAULT NULL,
  `pctvdolartodaybuy` varchar(255) DEFAULT NULL,
  `dolartodaysell` varchar(255) DEFAULT NULL,
  `pctvdolartodaysell` varchar(255) DEFAULT NULL,
  `dolartodaypromedio` varchar(255) DEFAULT NULL,
  `pctvdolartodaypromedio` varchar(255) DEFAULT NULL,
  `dolartodaybtcbuy` varchar(255) DEFAULT NULL,
  `pctvdolartodaybtcbuy` varchar(255) DEFAULT NULL,
  `dolartodaybtcsell` varchar(255) DEFAULT NULL,
  `pctvdolartodaybtcsell` varchar(255) DEFAULT NULL,
  `dolartodaybtcpromedio` varchar(255) DEFAULT NULL,
  `pctvdolartodaybtcpromedio` varchar(255) DEFAULT NULL,
  `airtmbuy` varchar(255) DEFAULT NULL,
  `pctvairtmbuy` varchar(255) DEFAULT NULL,
  `airtmsell` varchar(255) DEFAULT NULL,
  `pctvairtmsell` varchar(255) DEFAULT NULL,
  `airtmpromedio` varchar(255) DEFAULT NULL,
  `pctvairtmpromedio` varchar(255) DEFAULT NULL,
  `dolartruebuy` varchar(255) DEFAULT NULL,
  `pctvdolartruebuy` varchar(255) DEFAULT NULL,
  `dolartruesell` varchar(255) DEFAULT NULL,
  `pctvdolartruesell` varchar(255) DEFAULT NULL,
  `dolartruepromedio` varchar(255) DEFAULT NULL,
  `pctvdolartruepromedio` varchar(255) DEFAULT NULL,
  `monitordolarvzlabuy` varchar(255) DEFAULT NULL,
  `pctvmonitordolarvzlabuy` varchar(255) DEFAULT NULL,
  `monitordolarvzlasell` varchar(255) DEFAULT NULL,
  `pctvmonitordolarvzlasell` varchar(255) DEFAULT NULL,
  `monitordolarvzlapromedio` varchar(255) DEFAULT NULL,
  `pctvmonitordolarvzlapromedio` varchar(255) DEFAULT NULL,
  `mkambiobuy` varchar(255) DEFAULT NULL,
  `pctvmkambiobuy` varchar(255) DEFAULT NULL,
  `mkambiosell` varchar(255) DEFAULT NULL,
  `pctvmkambiosell` varchar(255) DEFAULT NULL,
  `mkambiopromedio` varchar(255) DEFAULT NULL,
  `pctvmkambiopromedio` varchar(255) DEFAULT NULL,
  `dolargoldbuy` varchar(255) DEFAULT NULL,
  `pctvdolargoldbuy` varchar(255) DEFAULT NULL,
  `dolargoldsell` varchar(255) DEFAULT NULL,
  `pctvdolargoldsell` varchar(255) DEFAULT NULL,
  `dolargoldpromedio` varchar(255) DEFAULT NULL,
  `pctvdolargoldpromedio` varchar(255) DEFAULT NULL,
  `dolarftbuy` varchar(255) DEFAULT NULL,
  `pctvdolarftbuy` varchar(255) DEFAULT NULL,
  `dolarftsell` varchar(255) DEFAULT NULL,
  `pctvdolarftsell` varchar(255) DEFAULT NULL,
  `dolarftpromedio` varchar(255) DEFAULT NULL,
  `pctvdolarftpromedio` varchar(255) DEFAULT NULL,
  `dolarc` varchar(255) NOT NULL,
  `pctvdolarc` varchar(255) NOT NULL,
  `dolarv` varchar(255) NOT NULL,
  `pctvdolarv` varchar(255) NOT NULL,
  `euro` varchar(255) NOT NULL,
  `pctveuro` varchar(255) NOT NULL,
  `euroc` varchar(255) NOT NULL,
  `pctveuroc` varchar(255) NOT NULL,
  `eurov` varchar(255) NOT NULL,
  `pctveurov` varchar(255) NOT NULL,
  `promediototal` varchar(255) NOT NULL,
  `pctvpromediototal` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Volcado de datos para la tabla `datosotc`
--

INSERT INTO `datosotc` (`id`, `fecha`, `hora`, `dolartodaybuy`, `pctvdolartodaybuy`, `dolartodaysell`, `pctvdolartodaysell`, `dolartodaypromedio`, `pctvdolartodaypromedio`, `dolartodaybtcbuy`, `pctvdolartodaybtcbuy`, `dolartodaybtcsell`, `pctvdolartodaybtcsell`, `dolartodaybtcpromedio`, `pctvdolartodaybtcpromedio`, `airtmbuy`, `pctvairtmbuy`, `airtmsell`, `pctvairtmsell`, `airtmpromedio`, `pctvairtmpromedio`, `dolartruebuy`, `pctvdolartruebuy`, `dolartruesell`, `pctvdolartruesell`, `dolartruepromedio`, `pctvdolartruepromedio`, `monitordolarvzlabuy`, `pctvmonitordolarvzlabuy`, `monitordolarvzlasell`, `pctvmonitordolarvzlasell`, `monitordolarvzlapromedio`, `pctvmonitordolarvzlapromedio`, `mkambiobuy`, `pctvmkambiobuy`, `mkambiosell`, `pctvmkambiosell`, `mkambiopromedio`, `pctvmkambiopromedio`, `dolargoldbuy`, `pctvdolargoldbuy`, `dolargoldsell`, `pctvdolargoldsell`, `dolargoldpromedio`, `pctvdolargoldpromedio`, `dolarftbuy`, `pctvdolarftbuy`, `dolarftsell`, `pctvdolarftsell`, `dolarftpromedio`, `pctvdolarftpromedio`, `dolarc`, `pctvdolarc`, `dolarv`, `pctvdolarv`, `euro`, `pctveuro`, `euroc`, `pctveuroc`, `eurov`, `pctveurov`, `promediototal`, `pctvpromediototal`) VALUES
(1, '2019-04-17', '10:39 AM', '1,000.00', '0', '1,000.00', '0', '1,000.00', '0', '1,000.00', '0', '1,000.00', '0', '1,000.00', '0', '1,000.00', '0', '1,000.00', '0', '1,000.00', '0', '1,000.00', '0', '1,000.00', '0', '1,000.00', '0', '1,000.00', '0', '1,000.00', '0', '1,000.00', '0', '1,000.00', '0', '1,000.00', '0', '1,000.00', '0', '1,000.00', '0', '1,000.00', '0', '1,000.00', '0', '1,000.00', '0', '1,000.00', '0', '1,000.00', '0', '9,500.0', '0', '1,047.50', '0', '9,500.0', '0', '1,000.00', '0', '1,047.50', '0', '1,000.00', '0'),
(2, '2019-04-17', '10:46 AM', '5,000.00', '0.80', '5,000.00', '0.80', '5,000.00', '0.80', '5,000.00', '0.80', '5,000.00', '0.80', '5,000.00', '0.80', '5,000.00', '0.80', '5,000.00', '0.80', '5,000.00', '0.80', '5,000.00', '0.80', '5,000.00', '0.80', '5,000.00', '0.80', '5,000.00', '0.80', '5,000.00', '0.80', '5,000.00', '0.80', '5,000.00', '0.80', '5,000.00', '0.80', '5,000.00', '0.80', '5,000.00', '0.80', '5,000.00', '0.80', '5,000.00', '0.80', '5,000.00', '0.80', '5,000.00', '0.80', '5,000.00', '0.80', '4,750.00', '-1.00', '5,237.50', '0.80', '5,650.00', '-0.68', '5,367.50', '0.81', '5,918.37', '0.82', '5,000.00', '0.80');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `nombre` text COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci ROW_FORMAT=COMPACT;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `nombre`) VALUES
(1, 'user'),
(2, 'admin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` text COLLATE utf8_spanish2_ci NOT NULL,
  `apellido` text COLLATE utf8_spanish2_ci NOT NULL,
  `email` text COLLATE utf8_spanish2_ci NOT NULL,
  `password` text COLLATE utf8_spanish2_ci NOT NULL,
  `role` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci ROW_FORMAT=COMPACT;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `email`, `password`, `role`) VALUES
(1, 'Jesus', 'Velasquez', 'jesusvelasquezoficial@gmail.com', 'b643eb0d9479f6f6a21ff65c13fa57d6', 2),
(2, 'Fernando', 'Agreda', 'fagredameza@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 2),
(3, 'Jairo', 'Moncada', 'moncada319@hotmail.com', '21232f297a57a5a743894a0e4a801fc3', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `datosoficiales`
--
ALTER TABLE `datosoficiales`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indices de la tabla `datosotc`
--
ALTER TABLE `datosotc`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `datosoficiales`
--
ALTER TABLE `datosoficiales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `datosotc`
--
ALTER TABLE `datosotc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
