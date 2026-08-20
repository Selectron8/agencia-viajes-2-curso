-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Temps de generació: 20-08-2026 a les 12:23:28
-- Versió del servidor: 10.4.28-MariaDB
-- Versió de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de dades: `exercici_viatjes`
--

-- --------------------------------------------------------

--
-- Estructura de la taula `reservas`
--

CREATE TABLE `reservas` (
  `id_reserva` int(11) NOT NULL,
  `dni` varchar(9) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `destino` varchar(20) NOT NULL,
  `numpersonas` int(11) NOT NULL,
  `numdias` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Bolcament de dades per a la taula `reservas`
--

INSERT INTO `reservas` (`id_reserva`, `dni`, `nombre`, `destino`, `numpersonas`, `numdias`) VALUES
(2, '39942293J', 'Juana Hasuki', 'Roma', 9, 100),
(4, '93388429K', 'Pedro Sánchez', 'Londres', 9, 3),
(5, '93388429K', 'Pedro Sánchez', 'Nueva York', 9, 4),
(8, '19939949L', 'Josep Estivill', 'Nueva York', 4, 9),
(9, '93399492D', 'Ana Garriga', 'Roma', 2, 2),
(10, '39294828U', 'Erik', 'Roma', 2, 10);

--
-- Índexs per a les taules bolcades
--

--
-- Índexs per a la taula `reservas`
--
ALTER TABLE `reservas`
  ADD PRIMARY KEY (`id_reserva`);

--
-- AUTO_INCREMENT per les taules bolcades
--

--
-- AUTO_INCREMENT per la taula `reservas`
--
ALTER TABLE `reservas`
  MODIFY `id_reserva` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
