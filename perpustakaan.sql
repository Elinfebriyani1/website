-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2019 at 03:18 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id6286803_perp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama`, `password`, `type`) VALUES
(1, 'elin', 'elin', ''),
(2, 'elin', 'elin', ''),
(3, 'alvy', 'alvy', ''),
(4, 'alvy', 'alvy', ''),
(5, 'admin', 'admin', 'admin'),
(6, 'erowahyu', '12345678', ''),
(7, 'admin1', 'admin1', ''),
(8, 'admin2', 'admin2', ''),
(9, 'qwe', '123', '');

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `id_anggota` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `jeniskelamin` char(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`id_anggota`, `nama`, `alamat`, `jeniskelamin`) VALUES
(1, 'erdha', 'jogja', 'perempuan'),
(2, 'erdha', 'jogja', 'perempuan');

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id_buku` int(11) NOT NULL,
  `kode_buku` varchar(50) NOT NULL,
  `judul_buku` varchar(255) NOT NULL,
  `sampul_buku` varchar(255) NOT NULL,
  `jenis_buku` varchar(50) NOT NULL,
  `link` varchar(255) NOT NULL,
  `qty` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id_buku`, `kode_buku`, `judul_buku`, `sampul_buku`, `jenis_buku`, `link`, `qty`) VALUES
(1, '40', 'dilan ', 'dilan.jpg', 'Novel', 'noveldilan', 2),
(2, '41', 'Ayat-ayat Cinta', 'ayatcinta.jpg', 'Novel', 'novelayatcinta', 0),
(3, '42', 'Dear Friend With Love', 'love.jpg', 'Novel', 'novellove', 0),
(4, '43', 'Daun Yang Jatuh', 'daunjatuh.jpg', 'Novel', 'noveldaun', 0),
(5, '44', 'Ilmu Pengetahuan Alam', 'ipa.jpg', 'Pengetahuan', 'pengetahuanipa', 0),
(6, '45', 'Ilmu Pengetahuan Sosial', 'ips.jpg', 'Pengetahuan', 'pengetahuanips', 0),
(7, '46', 'Atlas', 'atlas.jpg', 'Pengetahuan', 'pengetahuanatlas', 0),
(8, '47', 'Kamus', 'kamus.jpg', 'Pengetahuan', 'pengetahuankamus', 0),
(9, '48', 'Falling Home', 'c1.jpg', 'Cerpen', 'cerpenfalling', 0),
(10, '49', 'THE JUNGLE', 'c2.jpg', 'Cerpen', 'cerpenjungle', 0),
(11, '50', 'Sebatas Mimpi', 'c3.jpg', 'Cerpen', 'cerpensebatas', 0),
(12, '51', 'First Love Forever Love', 'c4.jpg', 'Cerpen', 'cerpenlove', 0),
(13, '52', 'KUNG FU BOY 3', 'k4.jpg', 'Komik', 'komikkungfu', 0),
(14, '53', 'Penjara diLangit', 'k3.jpg', 'Komik', 'komikpenjara', 0),
(15, '54', 'Kuroko\'s Basketball', 'k2.jpg', 'Komik', 'komikkuroko', 0),
(16, '55', 'KARIN dan KIRAN', 'k5.jpg', 'Komik', 'komikkarin', 0);

-- --------------------------------------------------------

--
-- Table structure for table `jenis_buku`
--

CREATE TABLE `jenis_buku` (
  `id_jenis_buku` int(11) NOT NULL,
  `jenis_buku` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_buku`
--

INSERT INTO `jenis_buku` (`id_jenis_buku`, `jenis_buku`) VALUES
(1, 'Pengetahuan'),
(2, 'Novel'),
(3, 'Komik'),
(4, 'Cerpen');

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `no_peminjaman` int(50) NOT NULL,
  `kode_buku` char(50) NOT NULL,
  `id_anggota` int(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tgl_peminjaman` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`no_peminjaman`, `kode_buku`, `id_anggota`, `nama`, `tgl_peminjaman`) VALUES
(0, '40', 0, 'erdha', '2018-12-22');

-- --------------------------------------------------------

--
-- Table structure for table `pengembalian`
--

CREATE TABLE `pengembalian` (
  `tgl_pengembalian` date NOT NULL,
  `tgl_peminjaman` date NOT NULL,
  `kode_buku` char(50) NOT NULL,
  `id_anggota` int(50) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengembalian`
--

INSERT INTO `pengembalian` (`tgl_pengembalian`, `tgl_peminjaman`, `kode_buku`, `id_anggota`, `nama`) VALUES
('2019-01-03', '2019-01-01', '001', 12345, 'elin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id_anggota`);

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indexes for table `jenis_buku`
--
ALTER TABLE `jenis_buku`
  ADD PRIMARY KEY (`id_jenis_buku`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id_anggota`);

--
-- Indexes for table `pengembalian`
--
ALTER TABLE `pengembalian`
  ADD PRIMARY KEY (`id_anggota`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id_anggota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `jenis_buku`
--
ALTER TABLE `jenis_buku`
  MODIFY `id_jenis_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
