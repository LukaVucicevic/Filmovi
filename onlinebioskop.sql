-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2022 at 09:08 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlinebioskop`
--

-- --------------------------------------------------------

--
-- Table structure for table `filmovi`
--

CREATE TABLE `filmovi` (
  `id` int(6) UNSIGNED NOT NULL,
  `Ime_filma` varchar(30) NOT NULL,
  `vrsta` int(30) NOT NULL,
  `naziv` varchar(30) NOT NULL,
  `Opis` text NOT NULL,
  `putanja` varchar(100) NOT NULL,
  `Datum` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `filmovi`
--

INSERT INTO `filmovi` (`id`, `Ime_filma`, `vrsta`, `naziv`, `Opis`, `putanja`, `Datum`) VALUES
(9, 'dsadas', 1, 'prvi.mp4', 'DADADADA', './videozapisi/prvi.mp4', '22.12.2022');

-- --------------------------------------------------------

--
-- Table structure for table `komentari`
--

CREATE TABLE `komentari` (
  `id` int(6) UNSIGNED NOT NULL,
  `email` varchar(50) NOT NULL,
  `ime` varchar(30) NOT NULL,
  `prezime` varchar(30) DEFAULT NULL,
  `datum` date DEFAULT current_timestamp(),
  `id_filma` int(6) DEFAULT NULL,
  `Opis` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `komentari`
--

INSERT INTO `komentari` (`id`, `email`, `ime`, `prezime`, `datum`, `id_filma`, `Opis`) VALUES
(35, 'pera@gmail.com', 'Petar', 'Petrovic', '2022-12-23', 9, 'dadada'),
(37, 'pera@gmail.com', 'Petar', 'Petrovic', '2022-12-23', 9, ''),
(38, 'pera@gmail.com', 'Petar', 'Petrovic', '2022-12-23', 9, ''),
(39, 'pera@gmail.com', 'Petar', 'Petrovic', '2022-12-23', 9, ''),
(40, 'pera@gmail.com', 'Petar', 'Petrovic', '2022-12-23', 9, ''),
(41, 'pera@gmail.com', 'Petar', 'Petrovic', '2022-12-23', 9, ''),
(42, 'pera@gmail.com', 'Petar', 'Petrovic', '2022-12-23', 9, ''),
(43, 'pera@gmail.com', 'Petar', 'Petrovic', '2022-12-23', 9, ''),
(44, 'pera@gmail.com', 'Petar', 'Petrovic', '2022-12-23', 9, ''),
(45, 'pera@gmail.com', 'Petar', 'Petrovic', '2022-12-23', 9, ''),
(46, 'pera@gmail.com', 'Petar', 'Petrovic', '2022-12-23', 9, ''),
(47, 'pera@gmail.com', 'Petar', 'Petrovic', '2022-12-23', 9, ''),
(48, 'pera@gmail.com', 'Petar', 'Petrovic', '2022-12-23', 9, ''),
(49, 'pera@gmail.com', 'Petar', 'Petrovic', '2022-12-23', 9, ''),
(50, 'pera@gmail.com', 'Petar', 'Petrovic', '2022-12-23', 9, ''),
(51, 'pera@gmail.com', 'Petar', 'Petrovic', '2022-12-23', 9, '');

-- --------------------------------------------------------

--
-- Table structure for table `korisnik`
--

CREATE TABLE `korisnik` (
  `id` int(6) UNSIGNED NOT NULL,
  `Ime` varchar(30) NOT NULL,
  `Prezime` varchar(30) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `lozinka` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `korisnik`
--

INSERT INTO `korisnik` (`id`, `Ime`, `Prezime`, `email`, `lozinka`) VALUES
(1, 'Luka', 'Vucicevic', 'lukarvucicevic@gmail.com', 'luka'),
(2, 'Petar', 'Petrovic', 'pera@gmail.com', 'pera');

-- --------------------------------------------------------

--
-- Table structure for table `pretplate`
--

CREATE TABLE `pretplate` (
  `id` int(6) UNSIGNED NOT NULL,
  `vrsta` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `datum_pretplate` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pretplate`
--

INSERT INTO `pretplate` (`id`, `vrsta`, `email`, `datum_pretplate`) VALUES
(3, '1', 'lukarvucicevic@gmail.com', '2022-12-22'),
(4, '1', 'pera@gmail.com', '2022-12-23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `filmovi`
--
ALTER TABLE `filmovi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `komentari`
--
ALTER TABLE `komentari`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `korisnik`
--
ALTER TABLE `korisnik`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pretplate`
--
ALTER TABLE `pretplate`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `filmovi`
--
ALTER TABLE `filmovi`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `komentari`
--
ALTER TABLE `komentari`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `korisnik`
--
ALTER TABLE `korisnik`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pretplate`
--
ALTER TABLE `pretplate`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

DELIMITER $$
--
-- Events
--
CREATE DEFINER=`root`@`localhost` EVENT `Izbrisi` ON SCHEDULE EVERY 1 MINUTE STARTS '2022-12-22 17:39:27' ON COMPLETION NOT PRESERVE ENABLE DO DELETE FROM pretplate WHERE CURRENT_TIMESTAMP() < "SELECT DATE_ADD(datum_pretplate, INTERVAL 30 DAY)"$$

DELIMITER ;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
