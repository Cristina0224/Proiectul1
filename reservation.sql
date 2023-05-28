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
-- Bază de date: `reservation`
--

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `image` varchar(400) NOT NULL,
  `pret` int(20) NOT NULL,
  `descriere` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Eliminarea datelor din tabel `images`
--

INSERT INTO `images` (`id`, `title`, `image`, `pret`, `descriere`) VALUES
(31, 'Menu3', './images/gallery_5.jpeg', 100, 'Bun'),
(33, 'Menu', './images/gallery_4.jpeg', 100, 'rau');

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `rezervari`
--

CREATE TABLE `rezervari` (
  `id` int(11) NOT NULL,
  `nume` varchar(50) NOT NULL,
  `nr` int(11) NOT NULL,
  `data` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Eliminarea datelor din tabel `rezervari`
--

INSERT INTO `rezervari` (`id`, `nume`, `nr`, `data`) VALUES
(6, 'Silviaaa', 1000000, '12.07.2023'),
(8, 'lenuta', 10, '12.12.2029'),
(9, 'ana maria', 10, '1/1/2031');

--
-- Indexuri pentru tabele eliminate
--

--
-- Indexuri pentru tabele `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexuri pentru tabele `rezervari`
--
ALTER TABLE `rezervari`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pentru tabele eliminate
--

--
-- AUTO_INCREMENT pentru tabele `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT pentru tabele `rezervari`
--
ALTER TABLE `rezervari`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
