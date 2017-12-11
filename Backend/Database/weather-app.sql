-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Värd: localhost
-- Tid vid skapande: 11 dec 2017 kl 20:43
-- Serverversion: 10.1.25-MariaDB
-- PHP-version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databas: `weather-app`
--

-- --------------------------------------------------------

--
-- Tabellstruktur `users`
--

CREATE TABLE `users` (
  `u_id` int(9) NOT NULL,
  `u_given` varchar(256) NOT NULL,
  `u_sur` varchar(256) NOT NULL,
  `u_email` varchar(256) NOT NULL,
  `u_nick` varchar(256) NOT NULL,
  `u_pass` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumpning av Data i tabell `users`
--

INSERT INTO `users` (`u_id`, `u_given`, `u_sur`, `u_email`, `u_nick`, `u_pass`) VALUES
(1, 'Jan', 'Banan', 'jan@banan.se', 'janne', '$2y$10$ZA9YmzPPsoZZIyleXlOE7OAdKaixcRRTruHrZ8vZgBe8o9pL3iXn.'),
(10, 'Johan', 'Levin', 'johan.levin@hotmail.se', 'levve', '$2y$10$gTLIUFrgcHZjqBCzKTIsp.lTVE35DFUCc6HU14SCV24WGW9JKquKq'),
(11, 'Lars', 'Svensson', 'lars.svensson@gmail.com', 'lasse', '$2y$10$81jLGpRMiRQYT6QtYBK6eO2AtHY75RYcTEzKQGIxn51gSW.VaTBqO');

--
-- Index för dumpade tabeller
--

--
-- Index för tabell `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT för dumpade tabeller
--

--
-- AUTO_INCREMENT för tabell `users`
--
ALTER TABLE `users`
  MODIFY `u_id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
