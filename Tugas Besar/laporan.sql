-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2023 at 03:58 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laporan`
--

-- --------------------------------------------------------

--
-- Table structure for table `masyarakat`
--

CREATE TABLE `masyarakat` (
  `nik` int(16) NOT NULL,
  `nama` varchar(36) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(32) NOT NULL,
  `telp` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `masyarakat`
--

INSERT INTO `masyarakat` (`nik`, `nama`, `username`, `password`, `telp`) VALUES
(8781921, 'jonoeverybody', 'jonsky', '123', '08767121234'),
(9979132, 'alip', 'alipudin', '123', '908913210'),
(81388813, 'Muhammad Reza Aditya', 'rejakartans', '123', '085772867820'),
(97788123, 'johanes', 'johan', '123', '081382829789'),
(98712382, 'fahri', 'ipqy', '1234', '0878771321'),
(2147483647, 'Nonik Indah Pertiwi', 'nonicantik', '1234', '73828982378');

-- --------------------------------------------------------

--
-- Table structure for table `pengaduan`
--

CREATE TABLE `pengaduan` (
  `id_pengaduan` int(11) NOT NULL,
  `tgl_pengaduan` date NOT NULL,
  `nik` int(16) NOT NULL,
  `isi_laporan` text NOT NULL,
  `foto` varchar(255) NOT NULL,
  `status` enum('0','proses','selesai') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `pengaduan`
--

INSERT INTO `pengaduan` (`id_pengaduan`, `tgl_pengaduan`, `nik`, `isi_laporan`, `foto`, `status`) VALUES
(3, '2021-01-20', 81239821, 'Laporan Banjir Daerah Baleendah', 'hc.jpg', 'selesai'),
(4, '2021-01-21', 89128331, 'Laporan Gorong-Gorong Tersumbat di SukaBirus', 'suntuk.jpg', 'selesai'),
(5, '2021-01-21', 87671329, 'Laporan Sampah Menumpuk di BantarGebang', 'login.svg', 'selesai'),
(6, '2021-01-21', 9878121, 'Laporan Banjir di Daerah Cikoneng', 'img-buat-laporan.svg', 'selesai'),
(7, '2021-01-22', 9878113, 'Laporan Kucing di Gorong-Gorong', 'img-dashboard-user.svg', 'selesai'),
(8, '2021-01-21', 98971831, 'Laporan Pembenaran Jalan di Daerah Bojongsoan', 'tanggapan.svg', 'selesai'),
(9, '2021-01-21', 98781321, 'Laporan Kebersihan di Gedung GKU', 'error-404-monochrome.svg', 'selesai'),
(10, '2021-01-23', 98090191, 'Laporan Banjir di Gedung Cacuk B', 'santay.svg', 'selesai'),
(11, '2023-11-29', 2147483647, 'Laki Laki ini sebuah Pussy Hunter', 'WIN_20231123_08_26_39_Pro.jpg', 'selesai'),
(13, '2021-01-21', 98971831, 'Laporan Banjir di Daerah Ciganitri', 'tanggapan.svg', 'selesai'),
(14, '2023-12-29', 2147483647, 'walaw e', '', 'proses'),
(15, '2023-12-30', 2147483647, 'banjir tod', 'image_2023-12-30_152914500.png', 'selesai');

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` int(11) NOT NULL,
  `nama_petugas` varchar(35) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(32) NOT NULL,
  `telp` varchar(13) NOT NULL,
  `level` enum('admin','petugas') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `nama_petugas`, `username`, `password`, `telp`, `level`) VALUES
(1, 'Arif Krisna Aditya', 'Cikaya', 'cikaya', '081271484940', 'petugas'),
(2, 'Ghifari Aprilia', 'Zhiff', 'zhiff', '082246165556', 'petugas'),
(3, 'Benito Satria Nugraha', 'Ben', 'ben', '085155050836', 'petugas'),
(6, 'admin', 'admin', 'admin', '9870971312', 'admin'),
(7, 'M Rafif Falah', 'Rafif', 'rafif', '082214211221', 'petugas');

-- --------------------------------------------------------

--
-- Table structure for table `tanggapan`
--

CREATE TABLE `tanggapan` (
  `id_tanggapan` int(11) NOT NULL,
  `id_pengaduan` int(11) NOT NULL,
  `tgl_tanggapan` date NOT NULL,
  `tanggapan` text NOT NULL,
  `id_petugas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tanggapan`
--

INSERT INTO `tanggapan` (`id_tanggapan`, `id_pengaduan`, `tgl_tanggapan`, `tanggapan`, `id_petugas`) VALUES
(1, 3, '2021-01-21', 'Terhandle', 2),
(2, 5, '2021-01-21', 'Terhandle', 2),
(3, 3, '2021-01-21', 'Terhandle', 1),
(9, 8, '2021-01-21', 'Terhandle', 3),
(10, 9, '2021-01-21', 'Terhandle', 2),
(11, 10, '2021-01-23', 'Terhandle', 2),
(12, 11, '2023-12-28', 'Terhandle', 1),
(13, 10, '0000-00-00', 'Terhandle', 0),
(14, 4, '2023-12-30', 'Menanggapi', 1),
(15, 15, '0000-00-00', 'Akan diurus', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `masyarakat`
--
ALTER TABLE `masyarakat`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `pengaduan`
--
ALTER TABLE `pengaduan`
  ADD PRIMARY KEY (`id_pengaduan`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indexes for table `tanggapan`
--
ALTER TABLE `tanggapan`
  ADD PRIMARY KEY (`id_tanggapan`),
  ADD KEY `id_petugas` (`id_petugas`),
  ADD KEY `id_pengaduan` (`id_pengaduan`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `masyarakat`
--
ALTER TABLE `masyarakat`
  MODIFY `nik` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2147483648;

--
-- AUTO_INCREMENT for table `pengaduan`
--
ALTER TABLE `pengaduan`
  MODIFY `id_pengaduan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_petugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tanggapan`
--
ALTER TABLE `tanggapan`
  MODIFY `id_tanggapan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
