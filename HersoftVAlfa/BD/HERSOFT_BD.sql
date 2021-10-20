-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-10-2021 a las 06:29:14
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `hersoft`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE `admin` (
  `ID_Admin` int(11) NOT NULL,
  `Name` varchar(100) DEFAULT NULL,
  `Last_Name` varchar(100) DEFAULT NULL,
  `User_password` varchar(15) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `Address` varchar(100) DEFAULT NULL,
  `Age` int(11) DEFAULT NULL,
  `Phone_number` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `category`
--

CREATE TABLE `category` (
  `ID_Category` int(11) NOT NULL,
  `Name_category` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `market`
--

CREATE TABLE `market` (
  `ID_Market` int(11) NOT NULL,
  `Quanty_products_boughy` int(11) DEFAULT NULL,
  `Total_to_pay` int(11) DEFAULT NULL,
  `Payment_method` varchar(100) DEFAULT NULL,
  `ID_User` int(11) DEFAULT NULL,
  `ID_Publication` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publications`
--

CREATE TABLE `publications` (
  `ID_Publication` int(11) NOT NULL,
  `Name_product` varchar(100) DEFAULT NULL,
  `Publication_date` date DEFAULT NULL,
  `Description` varchar(2000) DEFAULT NULL,
  `Price` int(11) DEFAULT NULL,
  `ID_Category` int(11) DEFAULT NULL,
  `ID_Admin` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sending`
--

CREATE TABLE `sending` (
  `ID_Sending` int(11) NOT NULL,
  `shippinh_company` varchar(100) DEFAULT NULL,
  `shipping_date` date DEFAULT NULL,
  `ID_User` int(11) DEFAULT NULL,
  `ID_Publication` int(11) DEFAULT NULL,
  `ID_Market` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `suggestion`
--

CREATE TABLE `suggestion` (
  `Nombre` varchar(100) DEFAULT NULL,
  `Last_Name` varchar(100) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `Phone_number` bigint(20) DEFAULT NULL,
  `coment` varchar(500) DEFAULT NULL,
  `ID_User` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `ID_User` int(11) NOT NULL,
  `Name` varchar(100) DEFAULT NULL,
  `Last_Name` varchar(100) DEFAULT NULL,
  `User_password` varchar(15) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `Address` varchar(100) DEFAULT NULL,
  `Age` int(11) DEFAULT NULL,
  `Phone_number` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID_Admin`);

--
-- Indices de la tabla `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`ID_Category`);

--
-- Indices de la tabla `market`
--
ALTER TABLE `market`
  ADD PRIMARY KEY (`ID_Market`),
  ADD KEY `ID_User` (`ID_User`),
  ADD KEY `ID_Publication` (`ID_Publication`);

--
-- Indices de la tabla `publications`
--
ALTER TABLE `publications`
  ADD PRIMARY KEY (`ID_Publication`),
  ADD KEY `ID_Category` (`ID_Category`),
  ADD KEY `ID_Admin` (`ID_Admin`);

--
-- Indices de la tabla `sending`
--
ALTER TABLE `sending`
  ADD PRIMARY KEY (`ID_Sending`),
  ADD KEY `ID_User` (`ID_User`),
  ADD KEY `ID_Publication` (`ID_Publication`),
  ADD KEY `ID_Market` (`ID_Market`);

--
-- Indices de la tabla `suggestion`
--
ALTER TABLE `suggestion`
  ADD KEY `ID_User` (`ID_User`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID_User`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `category`
--
ALTER TABLE `category`
  MODIFY `ID_Category` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `market`
--
ALTER TABLE `market`
  MODIFY `ID_Market` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `publications`
--
ALTER TABLE `publications`
  MODIFY `ID_Publication` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `sending`
--
ALTER TABLE `sending`
  MODIFY `ID_Sending` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `market`
--
ALTER TABLE `market`
  ADD CONSTRAINT `market_ibfk_1` FOREIGN KEY (`ID_User`) REFERENCES `users` (`ID_User`),
  ADD CONSTRAINT `market_ibfk_2` FOREIGN KEY (`ID_Publication`) REFERENCES `publications` (`ID_Publication`);

--
-- Filtros para la tabla `publications`
--
ALTER TABLE `publications`
  ADD CONSTRAINT `publications_ibfk_1` FOREIGN KEY (`ID_Category`) REFERENCES `category` (`ID_Category`),
  ADD CONSTRAINT `publications_ibfk_2` FOREIGN KEY (`ID_Admin`) REFERENCES `admin` (`ID_Admin`);

--
-- Filtros para la tabla `sending`
--
ALTER TABLE `sending`
  ADD CONSTRAINT `sending_ibfk_1` FOREIGN KEY (`ID_User`) REFERENCES `users` (`ID_User`),
  ADD CONSTRAINT `sending_ibfk_2` FOREIGN KEY (`ID_Publication`) REFERENCES `publications` (`ID_Publication`),
  ADD CONSTRAINT `sending_ibfk_3` FOREIGN KEY (`ID_Market`) REFERENCES `market` (`ID_Market`);

--
-- Filtros para la tabla `suggestion`
--
ALTER TABLE `suggestion`
  ADD CONSTRAINT `suggestion_ibfk_1` FOREIGN KEY (`ID_User`) REFERENCES `users` (`ID_User`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
