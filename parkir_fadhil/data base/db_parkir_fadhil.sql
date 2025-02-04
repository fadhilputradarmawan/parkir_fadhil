-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 04, 2025 at 03:05 AM
-- Server version: 8.0.30
-- PHP Version: 8.2.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_fadhil`
--

-- --------------------------------------------------------

--
-- Table structure for table `kendaraan`
--

CREATE TABLE `kendaraan` (
  `plat_nomor` varchar(19) NOT NULL,
  `id_parkir` int DEFAULT NULL,
  `jenis_kendaraan` varchar(25) DEFAULT NULL,
  `model_kendaraan` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `kendaraan`
--

INSERT INTO `kendaraan` (`plat_nomor`, `id_parkir`, `jenis_kendaraan`, `model_kendaraan`) VALUES
('B 1658 JR', 11, 'motor', 'Beat'),
('BD 2425 WH', 21, 'motor', 'Vario'),
('H 1899 WH', 15, 'motor', 'mio'),
('P 4716 ZE', 13, 'mobil', 'supra mk4'),
('Z 2396 DR', 18, 'mobil', 'mustang');

-- --------------------------------------------------------

--
-- Table structure for table `parkir`
--

CREATE TABLE `parkir` (
  `id_parkir` int NOT NULL,
  `biaya_parkir` varchar(25) DEFAULT NULL,
  `waktu_parkir` time DEFAULT NULL,
  `tempat_parkir` varchar(22) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `parkir`
--

INSERT INTO `parkir` (`id_parkir`, `biaya_parkir`, `waktu_parkir`, `tempat_parkir`) VALUES
(11, 'Rp10.000', '01:55:50', 'C-21 lantai 1'),
(13, 'Rp21.000', '02:09:53', 'A-12 lantai 3'),
(15, 'Rp10.000', '01:11:31', 'A-2 lantai 2'),
(18, 'Rp14.000', '01:20:11', 'B-8 lantai 2'),
(21, 'Rp5.000', '01:00:42', 'D-15 lantai 2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kendaraan`
--
ALTER TABLE `kendaraan`
  ADD PRIMARY KEY (`plat_nomor`),
  ADD KEY `id_parkir` (`id_parkir`);

--
-- Indexes for table `parkir`
--
ALTER TABLE `parkir`
  ADD PRIMARY KEY (`id_parkir`),
  ADD KEY `id_parkir` (`id_parkir`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kendaraan`
--
ALTER TABLE `kendaraan`
  ADD CONSTRAINT `kendaraan_ibfk_1` FOREIGN KEY (`id_parkir`) REFERENCES `parkir` (`id_parkir`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
