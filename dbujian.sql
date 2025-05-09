-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2025 at 01:04 AM
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
-- Database: `dbujian`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbpraktikum`
--

CREATE TABLE `tbpraktikum` (
  `id` int(2) NOT NULL,
  `jurusan` char(3) NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `hari` varchar(10) NOT NULL,
  `waktu` varchar(20) NOT NULL,
  `materi` varchar(100) NOT NULL,
  `instruktur` varchar(100) NOT NULL,
  `lokasi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbpraktikum`
--

INSERT INTO `tbpraktikum` (`id`, `jurusan`, `kelas`, `hari`, `waktu`, `materi`, `instruktur`, `lokasi`) VALUES
(1, 'TKJ', 'XITKJ1', 'selasa', '15.00-16.00', 'Photoshop', 'Bu Naomi', 'Lab lt1'),
(2, 'TKJ', 'XITKJ2', 'selasa', '15.00-16.00', 'Figma', 'Pak Rieky', 'Lab lt2'),
(3, 'AKL', 'XAKL', 'rabu', '16.00-17.00', 'Pajak', 'Bu Vingka', 'XAKL'),
(8, 'TKJ', 'asd', 'asd', 'asd', 'Prototype', 'Pak Rieky', 'asd'),
(11, 'TKJ', 'XITKJ1', 'Senin', '14.00-15.00', 'Bebas', 'Filbert', 'Kelas');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbpraktikum`
--
ALTER TABLE `tbpraktikum`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbpraktikum`
--
ALTER TABLE `tbpraktikum`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
