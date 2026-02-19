-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2025 at 05:56 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `air`
--

-- --------------------------------------------------------

--
-- Table structure for table `pemakaian_meter`
--

CREATE TABLE `pemakaian_meter` (
  `no` int(11) NOT NULL,
  `username` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `meter_awal` smallint(6) NOT NULL,
  `meter_akhir` smallint(6) NOT NULL,
  `pemakaian` smallint(6) NOT NULL,
  `tgl` date NOT NULL,
  `waktu` time NOT NULL,
  `kd_tarif` char(5) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `tagihan` int(11) NOT NULL,
  `status` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tarif`
--

CREATE TABLE `tarif` (
  `kd_tarif` varchar(5) NOT NULL,
  `tarif` smallint(6) NOT NULL,
  `tipe` varchar(10) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Username` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `alamat` text NOT NULL,
  `kota` varchar(100) NOT NULL,
  `tip` varchar(50) NOT NULL,
  `level` varchar(50) NOT NULL,
  `tipe` varchar(10) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pemakaian_meter`
--
ALTER TABLE `pemakaian_meter`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pemakaian_meter`
--
ALTER TABLE `pemakaian_meter`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
