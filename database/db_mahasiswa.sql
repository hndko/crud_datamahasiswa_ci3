-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 05, 2022 at 07:07 AM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_mahasiswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_mahasiswa`
--

CREATE TABLE `tb_mahasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nrp` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `jurusan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_mahasiswa`
--

INSERT INTO `tb_mahasiswa` (`id`, `nama`, `nrp`, `email`, `jurusan`) VALUES
(1, 'Handoko', '201843502481', 'hd.doko22@gmail.com', 'Sastra Inggris'),
(2, 'Siska Alifia', '201843501101', 'siska.alifia@gmail.com', 'Sastra Inggris'),
(3, 'Daniel Nicolas', '201843501619', 'daniel.nicolas@gmail.com', 'Informatika'),
(4, 'Firmansyah', '201843501010', 'indra45@gmail.com', 'Bahasa Indonesia'),
(5, 'Najla', '201843502929', 'najla.unindra@gmail.com', 'Sastra Inggris'),
(6, 'Nanda', '201843501919', 'nanda.kh@gmail.com', 'Bahasa Indonesia');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_mahasiswa`
--
ALTER TABLE `tb_mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_mahasiswa`
--
ALTER TABLE `tb_mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
