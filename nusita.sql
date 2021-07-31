-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 29, 2021 at 08:25 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nusita`
--

-- --------------------------------------------------------

--
-- Table structure for table `kertas`
--

CREATE TABLE `kertas` (
  `id_kertas` int(11) NOT NULL,
  `tanggal_pemesanan` date NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `Nama_krts` text NOT NULL,
  `Jenis_ivo` varchar(20) NOT NULL,
  `jumlah_rim` int(100) NOT NULL,
  `ukuran` varchar(10) NOT NULL,
  `gramature` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kertas`
--

INSERT INTO `kertas` (`id_kertas`, `tanggal_pemesanan`, `created_at`, `Nama_krts`, `Jenis_ivo`, `jumlah_rim`, `ukuran`, `gramature`, `slug`) VALUES
(1, '2021-07-22', '2021-07-29 10:14:12', 'ivorry kertas ', 'kertas', 1, 'xl', 'yeah', 'bahan-kertas'),
(2, '2021-07-29', '2021-07-29 11:07:01', 'gatau apaan', 'ivo jadi vio', 25, 'badag', 'garade', 'bahan-kertas');

-- --------------------------------------------------------

--
-- Table structure for table `lem`
--

CREATE TABLE `lem` (
  `id_lem` varchar(10) NOT NULL,
  `Nama_lem` int(11) NOT NULL,
  `jumlah_drum` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `plastik`
--

CREATE TABLE `plastik` (
  `id_pls` varchar(10) NOT NULL,
  `id_supplier` varchar(10) NOT NULL,
  `Nama_pls` text NOT NULL,
  `Jenis_pls` text NOT NULL,
  `Jumlah_rol` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `plastik`
--

INSERT INTO `plastik` (`id_pls`, `id_supplier`, `Nama_pls`, `Jenis_pls`, `Jumlah_rol`) VALUES
('1', '1', 'plastik bening', 'plastik karet', '2');

-- --------------------------------------------------------

--
-- Table structure for table `tinta`
--

CREATE TABLE `tinta` (
  `id_tinta` int(10) NOT NULL,
  `Nama_Spl` text NOT NULL,
  `Jenis_tinta` text NOT NULL,
  `Turunan_tinta` varchar(15) NOT NULL,
  `Jumlah_kaleng` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kertas`
--
ALTER TABLE `kertas`
  ADD PRIMARY KEY (`id_kertas`);

--
-- Indexes for table `lem`
--
ALTER TABLE `lem`
  ADD PRIMARY KEY (`id_lem`);

--
-- Indexes for table `plastik`
--
ALTER TABLE `plastik`
  ADD PRIMARY KEY (`id_pls`),
  ADD KEY `id_supplier` (`id_supplier`);

--
-- Indexes for table `tinta`
--
ALTER TABLE `tinta`
  ADD PRIMARY KEY (`id_tinta`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kertas`
--
ALTER TABLE `kertas`
  MODIFY `id_kertas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
