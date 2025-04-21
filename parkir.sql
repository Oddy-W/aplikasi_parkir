-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2025 at 04:34 AM
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
-- Database: `parkir`
--

-- --------------------------------------------------------

--
-- Table structure for table `jeniskendaraan`
--

CREATE TABLE `jeniskendaraan` (
  `id_jenisKendaraan` int(11) NOT NULL,
  `jenis_kendaraan` varchar(20) DEFAULT NULL,
  `harga` varchar(10) DEFAULT NULL,
  `note` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `jeniskendaraan`
--

INSERT INTO `jeniskendaraan` (`id_jenisKendaraan`, `jenis_kendaraan`, `harga`, `note`) VALUES
(1, 'MOTOR', '5000', ''),
(2, 'MOBIL', '10000', ''),
(3, 'DROP OFF', '0', ''),
(4, 'KARYAWAN', '0', ''),
(5, 'BUS', '25000', ''),
(6, 'ELF | MINI BUS', '15000', ''),
(7, 'TAMU', '0', '');

-- --------------------------------------------------------

--
-- Table structure for table `kendaraan`
--

CREATE TABLE `kendaraan` (
  `id` int(11) NOT NULL,
  `nomor_polisi` varchar(10) DEFAULT NULL,
  `nama_kendaraan` varchar(50) DEFAULT NULL,
  `qr_code` varchar(20) DEFAULT NULL,
  `id_jenisKendaraan` int(11) DEFAULT NULL,
  `keterangan` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `kendaraan`
--

INSERT INTO `kendaraan` (`id`, `nomor_polisi`, `nama_kendaraan`, `qr_code`, `id_jenisKendaraan`, `keterangan`) VALUES
(13566, '', 'Mobil', '7701FFFF57446E4F', 2, ''),
(13567, '', 'Mobil', '0F01FFFF57445D1C', 2, ''),
(13568, '', 'Elf', '5C01FFFF574462BC', 6, ''),
(13569, '', 'Mobil', '7F01FFFF574463B6', 1, ''),
(13570, '', 'Elf', '9B01FFFF574478BA', 6, ''),
(13571, '', 'df', '0501FFFF57447888', 3, 'bis'),
(13572, '', 'Motor', '250100086781ADD9', 1, ''),
(13573, '', 'df', 'DA01FFFF574478A1', 3, 'bis'),
(13574, '', 'Mobil', '7601FFFF574477D9', 2, ''),
(13575, '', 'Elf', '8D01FFFF57445009', 6, ''),
(13576, '', 'Motor', '4E0100086781B396', 1, ''),
(13577, '', 'Mobil', '6101FFFF5744671B', 2, ''),
(13578, '', 'Mobil', '9501FFFF57447AB6', 2, ''),
(13579, '', 'df', 'A301FFFF5744718D', 3, 'bis'),
(13580, '', 'Mobil', '9501FFFF574465EB', 2, '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$.bWHxLWVU6dEh0aGBuM69OOmCiiJwk8FR7KeZWGR7W.9mxJre51jW');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jeniskendaraan`
--
ALTER TABLE `jeniskendaraan`
  ADD PRIMARY KEY (`id_jenisKendaraan`);

--
-- Indexes for table `kendaraan`
--
ALTER TABLE `kendaraan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_jenisKendaraan` (`id_jenisKendaraan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jeniskendaraan`
--
ALTER TABLE `jeniskendaraan`
  MODIFY `id_jenisKendaraan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `kendaraan`
--
ALTER TABLE `kendaraan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13581;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kendaraan`
--
ALTER TABLE `kendaraan`
  ADD CONSTRAINT `kendaraan_ibfk_1` FOREIGN KEY (`id_jenisKendaraan`) REFERENCES `jeniskendaraan` (`id_jenisKendaraan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
