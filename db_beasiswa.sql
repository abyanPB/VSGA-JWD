-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 26, 2024 at 02:08 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_beasiswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `daftar`
--

CREATE TABLE `daftar` (
  `id_daftar` int NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `no_hp` varchar(255) NOT NULL,
  `semester` int NOT NULL,
  `ipk` float NOT NULL,
  `beasiswa` varchar(255) NOT NULL,
  `berkas` text NOT NULL,
  `status_ajuan` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `daftar`
--

INSERT INTO `daftar` (`id_daftar`, `nama`, `email`, `no_hp`, `semester`, `ipk`, `beasiswa`, `berkas`, `status_ajuan`) VALUES
(6, 'Hendri Wahyu Perdana', 'hendri@gmail.com', '088932913921', 5, 3.33, 'KIPK', 'WhatsApp Image 2023-06-21 at 19.22.41.jpg', 1),
(7, 'udsbfsajfsd', 'dimas@gmail.com', '4124124243242', 2, 3.02, 'Unggulan', 'Laporan Pengaduan Pelayanan Provice Group - 2024-06-24 - 2024-07-01.pdf', 2),
(9, 'Ikmal', 'ikmal@gmail.com', '09293283283123', 3, 3.16, 'Unggulan', 'Beranda.png', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftar`
--
ALTER TABLE `daftar`
  ADD PRIMARY KEY (`id_daftar`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daftar`
--
ALTER TABLE `daftar`
  MODIFY `id_daftar` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
