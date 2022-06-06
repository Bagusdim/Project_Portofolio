-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2020 at 09:38 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agenwisatafix`
--

-- --------------------------------------------------------

--
-- Table structure for table `paket_wisata`
--

CREATE TABLE `paket_wisata` (
  `id_paket` varchar(12) NOT NULL,
  `tempat_paket` varchar(20) DEFAULT NULL,
  `durasi_paket` int(2) NOT NULL,
  `jumlah_orang` int(2) NOT NULL,
  `harga_paket` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `paket_wisata`
--

INSERT INTO `paket_wisata` (`id_paket`, `tempat_paket`, `durasi_paket`, `jumlah_orang`, `harga_paket`) VALUES
('PACK0001', 'Malioboro', 2, 2, 1000000),
('PACK0002', 'Tawangmangu', 3, 2, 1000000),
('PACK0003', 'Gunung Rinjani', 4, 5, 3250000),
('PACK0004', 'Gunung Bromo', 4, 5, 3000000);

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` varchar(12) NOT NULL,
  `id_pemesanan` varchar(12) DEFAULT NULL,
  `total_pembayaran` int(8) NOT NULL,
  `tanggal_pembayaran` date DEFAULT NULL,
  `status` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id_pembayaran`, `id_pemesanan`, `total_pembayaran`, `tanggal_pembayaran`, `status`) VALUES
('PAY0001', 'ORDER0001', 1000000, '2020-12-13', 'LUNAS'),
('PAY0002', 'ORDER0002', 1000000, '0000-00-00', 'BELUM');

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id_pemesanan` varchar(12) NOT NULL,
  `id_pelanggan` int(8) DEFAULT NULL,
  `id_paket` varchar(12) DEFAULT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_selesai` date NOT NULL,
  `total_harga` int(8) DEFAULT NULL,
  `id_pembayaran` varchar(12) DEFAULT NULL,
  `bukti_pembayaran` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`id_pemesanan`, `id_pelanggan`, `id_paket`, `tgl_mulai`, `tgl_selesai`, `total_harga`, `id_pembayaran`, `bukti_pembayaran`) VALUES
('ORDER0001', 1, 'PACK0001', '2020-12-25', '2020-12-27', 1000000, 'PAY0001', '2298959'),
('ORDER0002', 2, 'PACK0001', '2021-01-05', '2021-01-07', 1000000, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `id_pelanggan` int(8) NOT NULL,
  `email_pelanggan` varchar(50) NOT NULL,
  `nama_pelanggan` varchar(30) CHARACTER SET armscii8 NOT NULL,
  `tglLahir_pelanggan` date NOT NULL,
  `kelamin_pelanggan` varchar(9) CHARACTER SET armscii8 NOT NULL,
  `alamat_pelanggan` text NOT NULL,
  `telp_pelanggan` varchar(14) NOT NULL,
  `kewarganegaraan` varchar(20) NOT NULL,
  `kataSandi_pelanggan` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pendaftaran`
--

INSERT INTO `pendaftaran` (`id_pelanggan`, `email_pelanggan`, `nama_pelanggan`, `tglLahir_pelanggan`, `kelamin_pelanggan`, `alamat_pelanggan`, `telp_pelanggan`, `kewarganegaraan`, `kataSandi_pelanggan`) VALUES
(1, 'adhiardiansyah@gmail.com', 'Adhi Ardiansyah', '2001-03-23', 'Laki-laki', 'Gondang 02/02, Kedungjeruk, Mojogedang, Karanganyar', '083866811948', 'INDONESIA', 'adhi1234'),
(2, 'arricohandyanto@gmail.com', 'Arrico Handyanto', '2001-02-12', 'Laki-laki', 'Karanglo 03/02, Wironanggan, Gatak, Sukoharjo', '088990460076', 'INDONESIA', 'arrico1234'),
(3, 'bagusdimas@gmail.com', 'Bagus Dimas Adam', '2000-05-03', 'Laki-laki', 'Beku, Kliworan, Masaran, Sragen', '081277717706', 'INDONESIA', 'bagus1234'),
(4, 'baqiyatuss@gmail.com', 'Baqiyatus Shaliha', '2000-05-18', 'Perempuan', 'Karangmojo, Karangmojo, Tasikmadu, Karanganyar', '083842640989', 'INDONESIA', 'baqis1234');

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran_admin`
--

CREATE TABLE `pendaftaran_admin` (
  `email_admin` varchar(50) NOT NULL,
  `nama_admin` varchar(30) NOT NULL,
  `tglLahir_admin` date NOT NULL,
  `kelamin_admin` varchar(9) NOT NULL,
  `alamat_admin` text NOT NULL,
  `telp_admin` varchar(14) NOT NULL,
  `kewarganegaraan_admin` varchar(15) NOT NULL,
  `kataSandi_admin` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pendaftaran_admin`
--

INSERT INTO `pendaftaran_admin` (`email_admin`, `nama_admin`, `tglLahir_admin`, `kelamin_admin`, `alamat_admin`, `telp_admin`, `kewarganegaraan_admin`, `kataSandi_admin`) VALUES
('admin1@gmail.com', 'admin1', '1995-09-23', 'Laki-laki', 'Surakarta', '089442768462', 'INDONESIA', 'admin1123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `paket_wisata`
--
ALTER TABLE `paket_wisata`
  ADD PRIMARY KEY (`id_paket`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`),
  ADD UNIQUE KEY `id_pemesanan` (`id_pemesanan`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id_pemesanan`),
  ADD UNIQUE KEY `id_pembayaran` (`id_pembayaran`),
  ADD KEY `id_pelanggan` (`id_pelanggan`),
  ADD KEY `id_paket` (`id_paket`) USING BTREE;

--
-- Indexes for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`id_pelanggan`),
  ADD UNIQUE KEY `email_pelanggan` (`email_pelanggan`);

--
-- Indexes for table `pendaftaran_admin`
--
ALTER TABLE `pendaftaran_admin`
  ADD PRIMARY KEY (`email_admin`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `id_pelanggan` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD CONSTRAINT `pembayaran_ibfk_1` FOREIGN KEY (`id_pemesanan`) REFERENCES `pemesanan` (`id_pemesanan`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD CONSTRAINT `pemesanan_ibfk_1` FOREIGN KEY (`id_pelanggan`) REFERENCES `pendaftaran` (`id_pelanggan`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `pemesanan_ibfk_2` FOREIGN KEY (`id_pembayaran`) REFERENCES `pembayaran` (`id_pembayaran`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `pemesanan_ibfk_3` FOREIGN KEY (`id_paket`) REFERENCES `paket_wisata` (`id_paket`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
