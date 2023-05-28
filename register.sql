-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Gazdă: 127.0.0.1
-- Timp de generare: mai 28, 2023 la 01:43 PM
-- Versiune server: 10.4.27-MariaDB
-- Versiune PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Bază de date: `register`
--

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `inregistrari`
--

CREATE TABLE `inregistrari` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` int(11) NOT NULL,
  `admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Eliminarea datelor din tabel `inregistrari`
--

INSERT INTO `inregistrari` (`id`, `username`, `password`, `admin`) VALUES
(1, 'cristina', 1234, 1),
(3, 'Ana', 5678, 0);

--
-- Indexuri pentru tabele eliminate
--

--
-- Indexuri pentru tabele `inregistrari`
--
ALTER TABLE `inregistrari`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pentru tabele eliminate
--

--
-- AUTO_INCREMENT pentru tabele `inregistrari`
--
ALTER TABLE `inregistrari`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
