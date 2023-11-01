-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2023 at 01:04 PM
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
-- Database: `db_user`
--

-- --------------------------------------------------------

--
-- Table structure for table `part_belanja`
--

CREATE TABLE `part_belanja` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `jumlah_barang` varchar(10) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `part_belanja`
--

INSERT INTO `part_belanja` (`id`, `nama`, `nama_barang`, `jumlah_barang`, `gambar`) VALUES
(1, '1', '12', '1', '2023-10-25.png');

-- --------------------------------------------------------

--
-- Table structure for table `part_user`
--

CREATE TABLE `part_user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `part_user`
--

INSERT INTO `part_user` (`id_user`, `nama`, `email`, `password`) VALUES
(1, '111', '12@gmail.com', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `part_belanja`
--
ALTER TABLE `part_belanja`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `part_user`
--
ALTER TABLE `part_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `part_belanja`
--
ALTER TABLE `part_belanja`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `part_user`
--
ALTER TABLE `part_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
