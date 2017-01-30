-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2016 at 05:38 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ternak`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_kandang`
--

CREATE TABLE `t_kandang` (
  `id_kandang` int(4) NOT NULL,
  `no_kandang` int(4) NOT NULL,
  `jml_ayam` int(6) NOT NULL,
  `id_vaksin` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_kandang`
--

INSERT INTO `t_kandang` (`id_kandang`, `no_kandang`, `jml_ayam`, `id_vaksin`) VALUES
(1, 1, 113, 1),
(4, 2, 234, 1),
(5, 3, 453, 1),
(6, 4, 243, 1);

-- --------------------------------------------------------

--
-- Table structure for table `t_pelanggan`
--

CREATE TABLE `t_pelanggan` (
  `id_pelanggan` int(5) NOT NULL,
  `id_perusahaan` int(6) NOT NULL,
  `nama_pelanggan` varchar(35) NOT NULL,
  `alamat_pelanggan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_pelanggan`
--

INSERT INTO `t_pelanggan` (`id_pelanggan`, `id_perusahaan`, `nama_pelanggan`, `alamat_pelanggan`) VALUES
(1, 0, 'rudianto', 'cileunyi'),
(2, 0, 'fikri', 'garut kota'),
(3, 0, 'joko', 'jakarta\r\n'),
(4, 1, 'rudi', '<p>\r\n	cileunyi</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `t_pemesanan`
--

CREATE TABLE `t_pemesanan` (
  `id_pemesanan` int(6) NOT NULL,
  `id_pelanggan` int(5) NOT NULL,
  `id_perusahaan` int(6) NOT NULL,
  `waktu_pemesanan` date NOT NULL,
  `waktu_kirim` date NOT NULL,
  `jumlah_pemesanan` int(8) NOT NULL,
  `status_pemesanan` enum('Sudah Lunas','Belum Lunas','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_pemesanan`
--

INSERT INTO `t_pemesanan` (`id_pemesanan`, `id_pelanggan`, `id_perusahaan`, `waktu_pemesanan`, `waktu_kirim`, `jumlah_pemesanan`, `status_pemesanan`) VALUES
(1, 2, 0, '2016-09-29', '0000-00-00', 300, 'Sudah Lunas'),
(2, 3, 0, '2016-09-29', '0000-00-00', 545, 'Sudah Lunas'),
(3, 4, 1, '2016-10-02', '2016-10-03', 300, 'Sudah Lunas');

-- --------------------------------------------------------

--
-- Table structure for table `t_perusahaan`
--

CREATE TABLE `t_perusahaan` (
  `id_perusahaan` int(6) NOT NULL,
  `nama_perusahaan` varchar(35) NOT NULL,
  `alamat_perusahaan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_perusahaan`
--

INSERT INTO `t_perusahaan` (`id_perusahaan`, `nama_perusahaan`, `alamat_perusahaan`) VALUES
(1, 'griya grand cinunuk', '<p>\r\n	cinunuk cileunyi</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `t_produksi`
--

CREATE TABLE `t_produksi` (
  `id_produksi` int(9) NOT NULL,
  `id_kandang` int(6) NOT NULL,
  `jumlah_telur` int(9) NOT NULL,
  `waktu` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_produksi`
--

INSERT INTO `t_produksi` (`id_produksi`, `id_kandang`, `jumlah_telur`, `waktu`) VALUES
(1, 1, 89, '2016-10-01'),
(2, 6, 100, '0000-00-00'),
(3, 0, 0, '0000-00-00'),
(4, 4, 99, '2016-10-13');

-- --------------------------------------------------------

--
-- Table structure for table `t_user`
--

CREATE TABLE `t_user` (
  `id_user` int(3) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` text NOT NULL,
  `nama` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_user`
--

INSERT INTO `t_user` (`id_user`, `username`, `password`, `nama`) VALUES
(1, 'admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `t_vaksin`
--

CREATE TABLE `t_vaksin` (
  `id_vaksin` int(3) NOT NULL,
  `nama_vaksin` varchar(35) NOT NULL,
  `jml_vaksin` int(3) NOT NULL,
  `tanggal_vaksin` datetime NOT NULL,
  `harga_vaksin` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_vaksin`
--

INSERT INTO `t_vaksin` (`id_vaksin`, `nama_vaksin`, `jml_vaksin`, `tanggal_vaksin`, `harga_vaksin`) VALUES
(1, 'vaksin campak', 500, '0000-00-00 00:00:00', 5000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_kandang`
--
ALTER TABLE `t_kandang`
  ADD PRIMARY KEY (`id_kandang`);

--
-- Indexes for table `t_pelanggan`
--
ALTER TABLE `t_pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `t_pemesanan`
--
ALTER TABLE `t_pemesanan`
  ADD PRIMARY KEY (`id_pemesanan`);

--
-- Indexes for table `t_perusahaan`
--
ALTER TABLE `t_perusahaan`
  ADD PRIMARY KEY (`id_perusahaan`);

--
-- Indexes for table `t_produksi`
--
ALTER TABLE `t_produksi`
  ADD PRIMARY KEY (`id_produksi`);

--
-- Indexes for table `t_user`
--
ALTER TABLE `t_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `t_vaksin`
--
ALTER TABLE `t_vaksin`
  ADD PRIMARY KEY (`id_vaksin`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_kandang`
--
ALTER TABLE `t_kandang`
  MODIFY `id_kandang` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `t_pelanggan`
--
ALTER TABLE `t_pelanggan`
  MODIFY `id_pelanggan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `t_pemesanan`
--
ALTER TABLE `t_pemesanan`
  MODIFY `id_pemesanan` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `t_perusahaan`
--
ALTER TABLE `t_perusahaan`
  MODIFY `id_perusahaan` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `t_produksi`
--
ALTER TABLE `t_produksi`
  MODIFY `id_produksi` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `t_user`
--
ALTER TABLE `t_user`
  MODIFY `id_user` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `t_vaksin`
--
ALTER TABLE `t_vaksin`
  MODIFY `id_vaksin` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
