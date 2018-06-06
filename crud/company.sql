-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 07 jun 2018 om 01:01
-- Serverversie: 10.1.26-MariaDB
-- PHP-versie: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `company`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `customers`
--

CREATE TABLE `customers` (
  `ID` int(11) NOT NULL,
  `NAME` varchar(20) NOT NULL,
  `AGE` int(11) NOT NULL,
  `ADDRESS` char(25) DEFAULT NULL,
  `SALARY` decimal(18,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `people`
--

CREATE TABLE `people` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `voorraad` int(11) NOT NULL,
  `password` varchar(45) NOT NULL,
  `role` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `people`
--

INSERT INTO `people` (`id`, `name`, `email`, `voorraad`, `password`, `role`) VALUES
(6, 'lolzzz', 'appie@example.com', 22, 'admin', 'admin'),
(7, 'horse', 'appie@example.com', 332, 'medewerker', 'medewerker'),
(10, 'pistol', 'salman@example.com', 12, '', '0'),
(11, 'pistolssss', 'salman@example.com', 1, '', '0'),
(12, 'pistol', 'appie@lol.comaaaaaa', 0, '', '0'),
(13, 'bowssss', 'ahsan@example.com', 0, '', '0'),
(14, 'book', 'gekgekke@gmail.com', 0, '', '0');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`ID`);

--
-- Indexen voor tabel `people`
--
ALTER TABLE `people`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `people`
--
ALTER TABLE `people`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
