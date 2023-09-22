-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 22, 2023 at 08:14 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cinemas`
--

-- --------------------------------------------------------

--
-- Table structure for table `atores`
--

CREATE TABLE `atores` (
  `id` int(5) NOT NULL,
  `nome` text NOT NULL,
  `nacionalidade` varchar(50) NOT NULL,
  `data_nascimento` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `atores`
--

INSERT INTO `atores` (`id`, `nome`, `nacionalidade`, `data_nascimento`) VALUES
(4, 'Ryan Reynolds', 'Canadense', '1976-08-23'),
(5, 'Robert Downey Jr', 'Americano', '1965-04-04'),
(6, 'Wagner Moura', 'Brasileiro', '1976-06-27'),
(7, 'Brad Pitt', 'Americano', '1963-12-18'),
(10, 'Tom Holland', 'Americano', '1961-05-10'),
(15, 'Tom Hardy', 'Britanico', '1977-09-15'),
(20, 'Rick', 'Australiano', '1945-12-15'),
(23, 'Antonio Bandeiras', 'Brasileiro', '1942-08-01'),
(24, 'Shia Labeouff', 'Britanico', '1985-03-01'),
(25, 'Terry Chews', 'Americano', '1968-07-30'),
(36, 'Cillian Murphy', 'Irlandes', '1976-05-25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `atores`
--
ALTER TABLE `atores`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `atores`
--
ALTER TABLE `atores`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
