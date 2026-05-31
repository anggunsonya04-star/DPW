-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2026 at 01:22 AM
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
-- Database: `db_kampus`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_dosen`
--

CREATE TABLE `t_dosen` (
  `idDosen` int(11) NOT NULL,
  `namaDosen` varchar(50) NOT NULL,
  `noHP` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `t_dosen`
--

INSERT INTO `t_dosen` (`idDosen`, `namaDosen`, `noHP`) VALUES
(1, 'Angger Binuko Paksi, M.Kom.', '081739528434'),
(2, 'Lutfiyah Dwi Setia, S.Kom., M.Kom.', '081335296448'),
(3, 'Tri Septianto, S.Kom., M.Kom.', '085287649448'),
(10, 'Rahmat Dwi Prasetya', '085927316500'),
(11, 'Mochamat Bayu Aji, M.Kom.', '089332584335');

-- --------------------------------------------------------

--
-- Table structure for table `t_login`
--

CREATE TABLE `t_login` (
  `id` int(6) UNSIGNED NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `tgl_registrasi` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t_mahasiswa`
--

CREATE TABLE `t_mahasiswa` (
  `npm` int(11) NOT NULL,
  `namaMhs` varchar(50) NOT NULL,
  `prodi` varchar(25) DEFAULT NULL,
  `alamat` varchar(70) DEFAULT NULL,
  `noHP` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `t_mahasiswa`
--

INSERT INTO `t_mahasiswa` (`npm`, `namaMhs`, `prodi`, `alamat`, `noHP`) VALUES
(253307031, 'Habibbah Prima Risqullah', 'Teknologi Informasi', 'Dagangan', '085296491579'),
(253307033, 'Alfi Mariani', 'Teknologi Informasi', 'Rejomulyo', '081339740590'),
(253307035, 'Nadin', 'Teknologi Informasi', 'Kota Madiun', '089539636770'),
(253307038, 'Anggun Sonya Meylani', 'Teknologi Informasi', 'Madiun', '085748628350'),
(253307039, 'Hayyu Adhini Wahida', 'Teknologi Informasi', 'Jiwan', '081240865670');

-- --------------------------------------------------------

--
-- Table structure for table `t_matakuliah`
--

CREATE TABLE `t_matakuliah` (
  `kodeMK` int(11) NOT NULL,
  `namaMK` varchar(70) NOT NULL,
  `sks` int(11) DEFAULT NULL,
  `jam` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `t_matakuliah`
--

INSERT INTO `t_matakuliah` (`kodeMK`, `namaMK`, `sks`, `jam`) VALUES
(1, 'Desain dan Pemrograman Web', 3, 5),
(2, 'Komputasi Matematika', 2, 2),
(3, 'Sistem Komunikasi Optic', 3, 5),
(4, 'UI/UX Design', 2, 1),
(5, 'Sistem Operasi', 3, 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_dosen`
--
ALTER TABLE `t_dosen`
  ADD PRIMARY KEY (`idDosen`);

--
-- Indexes for table `t_login`
--
ALTER TABLE `t_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_mahasiswa`
--
ALTER TABLE `t_mahasiswa`
  ADD PRIMARY KEY (`npm`);

--
-- Indexes for table `t_matakuliah`
--
ALTER TABLE `t_matakuliah`
  ADD PRIMARY KEY (`kodeMK`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_dosen`
--
ALTER TABLE `t_dosen`
  MODIFY `idDosen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `t_login`
--
ALTER TABLE `t_login`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
