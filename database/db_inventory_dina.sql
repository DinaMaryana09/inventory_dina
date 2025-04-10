-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 10, 2025 at 02:56 AM
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
-- Database: `db_inventory_dina`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` varchar(20) NOT NULL,
  `nama_barang` varchar(15) DEFAULT NULL,
  `id_jenis` int DEFAULT NULL,
  `stok` varchar(10) DEFAULT NULL,
  `harga` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `nama_barang`, `id_jenis`, `stok`, `harga`) VALUES
('101', 'Facial_wash', 1, '10', '20.000'),
('102', 'Bedak_tabur', 2, '15', '35.000'),
('103', 'Cushion', 3, '5', '100.000'),
('104', 'Farfume', 4, '20', '10.000'),
('105', 'Hair-vitamin', 5, '30', '15.000');

-- --------------------------------------------------------

--
-- Table structure for table `jenis`
--

CREATE TABLE `jenis` (
  `id_jenis` int NOT NULL,
  `nama_jenis` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `jenis`
--

INSERT INTO `jenis` (`id_jenis`, `nama_jenis`) VALUES
(1, 'kosmetik'),
(2, 'kosmetik'),
(3, 'kosmetik'),
(4, 'kosmetik'),
(5, 'kosmetik');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`),
  ADD KEY `id_jenis` (`id_jenis`),
  ADD KEY `id_jenis_2` (`id_jenis`),
  ADD KEY `id_jenis_3` (`id_jenis`),
  ADD KEY `id_jenis_4` (`id_jenis`),
  ADD KEY `id_jenis_5` (`id_jenis`),
  ADD KEY `id_jenis_6` (`id_jenis`);

--
-- Indexes for table `jenis`
--
ALTER TABLE `jenis`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jenis`
--
ALTER TABLE `jenis`
  ADD CONSTRAINT `jenis_ibfk_1` FOREIGN KEY (`id_jenis`) REFERENCES `barang` (`id_jenis`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
