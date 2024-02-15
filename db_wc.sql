-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2024 at 06:55 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_wc`
--

-- --------------------------------------------------------

--
-- Table structure for table `toilet`
--

CREATE TABLE `toilet` (
  `id` int(11) NOT NULL,
  `lokasi` varchar(100) NOT NULL,
  `jumlah_fasilitas` int(11) NOT NULL,
  `kebersihan` enum('bersih','sedang','kotor') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `toilet`
--

INSERT INTO `toilet` (`id`, `lokasi`, `jumlah_fasilitas`, `kebersihan`) VALUES
(13, 'Taman Mini', 22, 'bersih'),
(14, 'Gelora Bung Karno', 12, 'kotor');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `toilet`
--
ALTER TABLE `toilet`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `toilet`
--
ALTER TABLE `toilet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
