-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2021 at 03:29 PM
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
-- Database: `agenwisata`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail_paket`
--

CREATE TABLE `detail_paket` (
  `id_paket` varchar(12) DEFAULT NULL,
  `id_pemesanan` int(12) DEFAULT NULL,
  `idDetail_paket` varchar(20) NOT NULL,
  `lokasi` text NOT NULL,
  `durasi` int(2) DEFAULT NULL,
  `kota` varchar(30) DEFAULT NULL,
  `provinsi` varchar(20) DEFAULT NULL,
  `fasilitas` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail_paket`
--

INSERT INTO `detail_paket` (`id_paket`, `id_pemesanan`, `idDetail_paket`, `lokasi`, `durasi`, `kota`, `provinsi`, `fasilitas`) VALUES
('PACK0001', 1, 'MLG001', '1. Air Terjun Coban Rondo\r\n2. Taman Labirin\r\n3. Agro Wisata\r\n4. Jatim Park 2\r\n5. Museum Angkut\r\n6. Batu Night Spektakuler\r\n7. Tempat oleh-oleh', 3, 'Malang', NULL, '1. Tranportasi atau Travel AC selama trip\r\n2. Penginapan standar AC sekamar berdua 2 malam di Malang\r\n3. Tiket masuk wisata malang (Museum Angkut, Jatim Park 2, Agrowisata, BNS)\r\n4. Snak dan P3K\r\n5. Makan 7x\r\n6. Guide\r\n7. Dokumentasi Camera DSLR'),
('PACK0002', 13, 'MLG002', '1. Gunung Bromo\r\n2. Penanjakan Bromo (Tempat paling bagus untuk melihat view gunung bromo saat sunrise)\r\n3. Pasir Berbisik Bromo\r\n4. Bukit Tele Tabis\r\n5. Air Terjun Madakaripura\r\n6. Pura Luhur Poten\r\n7. Kota Malang\r\n8. Museum Angkut', 2, 'Malang', NULL, '1. Tranportasi atau Travel selama trip\r\n2. Penginapan sekamar bertiga (Sukapura Permai) atau sekamar berdua (Villa Sinar Harapan) satu malam di Gunung Bromo non ac karna sudah dingin \r\n3. Sewa jeep kepenanjakan gunung bromo dan pasir berbisik\r\n4. Tiket masuk taman nasional Gunung Bromo\r\n5. Tiket masuk ke air terjun\r\n6. Tiket masuk ke museum angkut\r\n7. Snak dan P3K\r\n8. Makan 6x\r\n9. Guide\r\n10. Dokumentasi '),
('PACK0003', 1, 'MLG003', '1. Gunung Bromo\r\n2. Penanjakan Bromo (Tempat paling bagus untuk melihat view gunung bromo saat sunrise)\r\n3. Bukit Cinta\r\n4. Pura Luhur Poten\r\n5. Gunung Batok\r\n6. Pasir Berbisik Bromo\r\n7. Bukit Tele Tabis\r\n8. Air Terjun Madakaripura\r\n9. Agro Wisata\r\n10. Jatim Park 2\r\n11. Museum Angkut\r\n12. Batu Night Spektakuler\r\n13. Tempat oleh-oleh', 3, 'Malang', NULL, '1. Tranportasi atau Travel AC selama trip\r\n2. Penginapan standar AC sekamar berdua 1 malam di Malang\r\n3. Sewa jeep untuk tour di bromo\r\n4. Tiket masuk taman nasional Gunung Bromo\r\n5. Tiket masuk wisata malang (Museum Angkut, Jatim Park 2, Agrowisata, BNS)\r\n6. Snak dan P3K\r\n7. Makan 8x\r\n8. Guide\r\n9. Dokumentasi Camera DSLR\r\n10. Stiker'),
('PACK0004', 13, 'YGY001', '1. Sungai Elo Magelang\r\n2. Kali Suci\r\n3. Pantai BKK (Bisa pilih mana aja)\r\n4. Malioboro\r\n5. Kota Gede pusat perak', 2, 'Yokyakarta', NULL, '1. Tranportasi atau Travel selama trip\r\n2. Penginapan satu malam ac (berdua/bertiga)\r\n3. Tiket masuk pantai BKK\r\n5. Tiket Arum Jeram\r\n6. Tiket Kali Suci\r\n7. Snak dan P3K\r\n8. Makan 6x\r\n9. Guide\r\n10. Dokumentasi'),
('PACK0005', 1, 'YGY002', 'Hari 1\r\n1. Makan Siang\r\n2. Keraton, Taman sari\r\n3. Belanja malioboro dan sekitarnya (Malioboro, Mirota batik, bakpia, dll)\r\n4. Makan Malam\r\n\r\nHari 2\r\n1. Sarapan (di hotel)\r\n2. Gua Pindul / Kali Suci / Air terjun Sri gethuk dan Gua Rancang Kencono\r\n3. Makan Siang\r\n4. Pantai BKK (Bisa pilih mana aja - Baron, Kukup, Krakal, Indrayanti)\r\n5. Makan Malam\r\n\r\nHari 3\r\n1. Sarapan (di hotel)\r\n2. Candi plaosan\r\n3. Candi Prambanan\r\n4. Cari oleh-oleh\r\n5. Makan siang\r\n6. Diantar kebandara/stasiun', 3, 'Yokyakarta', NULL, '1. Tranportasi atau Travel selama trip\r\n2. Penginapan satu malam standar ac (berdua/bertiga)\r\n3. Tiket masuk pantai BKK\r\n4. Tiket tahura / hutan pinus dan kebun buah\r\n5. Tiket Caving dan rafting gua pindul\r\n6. Snack dan P3K\r\n7. Makan 6x\r\n8. Guide\r\n9. Dokumentasi'),
('PACK0006', 13, 'YGY003', '1. Prambanan\r\n2. Borobudur\r\n3. Pantai BKK (Bisa pilih mana aja)\r\n4. Keratorn\r\n5. Taman Sari\r\n6. Malioboro\r\n7. Kota Gede pusat perak', 2, 'Yokyakarta', NULL, '1. Tranportasi atau Travel selama trip\r\n2. Penginapan satu malam standar ac (berdua/bertiga)\r\n3. Tiket masuk pantai BKK\r\n4. Tiket Tempat Wisata\r\n5. Snak dan P3K\r\n6. Makan 5x\r\n7. Guide\r\n8. Dokumentasi');

-- --------------------------------------------------------

--
-- Table structure for table `paket_wisata`
--

CREATE TABLE `paket_wisata` (
  `id_paket` varchar(12) NOT NULL,
  `id_pemesanan` int(12) DEFAULT NULL,
  `nama_paket` varchar(40) NOT NULL,
  `idDetail_paket` varchar(20) DEFAULT NULL,
  `harga_paket` int(8) NOT NULL,
  `gambar` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `paket_wisata`
--

INSERT INTO `paket_wisata` (`id_paket`, `id_pemesanan`, `nama_paket`, `idDetail_paket`, `harga_paket`, `gambar`) VALUES
('PACK0001', 1, 'Paket Malang 3 hari 2 malam', 'MLG001', 750000, 'gb1.jpg'),
('PACK0002', 13, 'Paket Bromo Malang 2 hari 1 malam', 'MLG002', 3600000, 'gb2.jpg'),
('PACK0003', 1, 'Paket Bromo Malang 3 hari 2 malam', 'MLG003', 1200000, 'gb3.jpg'),
('PACK0004', 13, 'Paket Yogyakarta Rafting ', 'YGY001', 1450000, 'gb4.jpg'),
('PACK0005', 1, 'Paket Yogyakarta 3 hari 2 malam', 'YGY002', 7100000, 'gb5.jpg'),
('PACK0006', 13, 'Paket Yogyakarta 2 hari 1 malam', 'YGY003', 830000, 'gb6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` int(12) NOT NULL,
  `id_pemesanan` int(12) DEFAULT NULL,
  `id_paket` varchar(12) DEFAULT NULL,
  `tagihan` int(8) NOT NULL,
  `bayar` int(8) DEFAULT NULL,
  `tanggal_pembayaran` date DEFAULT NULL,
  `status` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id_pembayaran`, `id_pemesanan`, `id_paket`, `tagihan`, `bayar`, `tanggal_pembayaran`, `status`) VALUES
(1, 1, 'PACK0001', 500000, 500000, '2020-12-20', 'LUNAS');

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id_pemesanan` int(12) NOT NULL,
  `id_pelanggan` int(8) DEFAULT NULL,
  `id_paket` varchar(12) DEFAULT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_selesai` date NOT NULL,
  `jumlah_orang` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`id_pemesanan`, `id_pelanggan`, `id_paket`, `tgl_mulai`, `tgl_selesai`, `jumlah_orang`) VALUES
(1, 1, 'PACK0001', '2020-12-21', '2020-12-22', 8),
(13, 1, 'PACK0002', '0000-00-00', '0000-00-00', 0);

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
  `kataSandi_pelanggan` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pendaftaran`
--

INSERT INTO `pendaftaran` (`id_pelanggan`, `email_pelanggan`, `nama_pelanggan`, `tglLahir_pelanggan`, `kelamin_pelanggan`, `alamat_pelanggan`, `telp_pelanggan`, `kewarganegaraan`, `kataSandi_pelanggan`) VALUES
(1, 'adhiardiansyah@gmail.com', 'Adhi Ardiansyah', '2001-03-23', 'Laki-laki', 'Gondang 02/02, Kedungjeruk, Mojogedang, Karanganyar', '083866811948', 'INDONESIA', 'adhi1234'),
(2, 'arricohandyanto@gmail.com', 'Arrico Handyanto', '2001-02-12', 'Laki-laki', 'Karanglo 03/02, Wironanggan, Gatak, Sukoharjo', '088990460076', 'INDONESIA', 'arrico1234'),
(3, 'bagusdimas@gmail.com', 'Bagus Dimas Adam', '2000-05-03', 'Laki-laki', 'Beku, Kliworan, Masaran, Sragen', '081277717706', 'INDONESIA', 'bagus1234'),
(4, 'baqiyatuss@gmail.com', 'Baqiyatus Shaliha', '2000-05-18', 'Perempuan', 'Karangmojo, Karangmojo, Tasikmadu, Karanganyar', '083842640989', 'INDONESIA', 'baqis1234'),
(5, 'akuada@gmail.com', 'akuada', '2020-12-09', 'Laki-laki', 'ada', '088990460076', 'Zimbabwe', '12345678');

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
  `kataSandi_admin` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pendaftaran_admin`
--

INSERT INTO `pendaftaran_admin` (`email_admin`, `nama_admin`, `tglLahir_admin`, `kelamin_admin`, `alamat_admin`, `telp_admin`, `kataSandi_admin`) VALUES
('admin1@gmail.com', 'admin1', '1995-09-23', 'Laki-laki', 'Surakarta', '089442768462', 'admin1123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_paket`
--
ALTER TABLE `detail_paket`
  ADD PRIMARY KEY (`idDetail_paket`),
  ADD KEY `id_paket` (`id_paket`),
  ADD KEY `id_pemesanan` (`id_pemesanan`);

--
-- Indexes for table `paket_wisata`
--
ALTER TABLE `paket_wisata`
  ADD PRIMARY KEY (`id_paket`),
  ADD KEY `idDetail_paket` (`idDetail_paket`) USING BTREE,
  ADD KEY `id_pemesanan` (`id_pemesanan`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`),
  ADD KEY `id_pemesanan` (`id_pemesanan`),
  ADD KEY `id_paket` (`id_paket`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id_pemesanan`),
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
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_pembayaran` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id_pemesanan` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `id_pelanggan` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_paket`
--
ALTER TABLE `detail_paket`
  ADD CONSTRAINT `detail_paket_ibfk_1` FOREIGN KEY (`id_paket`) REFERENCES `paket_wisata` (`id_paket`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `detail_paket_ibfk_2` FOREIGN KEY (`id_pemesanan`) REFERENCES `pemesanan` (`id_pemesanan`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `paket_wisata`
--
ALTER TABLE `paket_wisata`
  ADD CONSTRAINT `paket_wisata_ibfk_1` FOREIGN KEY (`idDetail_paket`) REFERENCES `detail_paket` (`idDetail_paket`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `paket_wisata_ibfk_2` FOREIGN KEY (`id_pemesanan`) REFERENCES `pemesanan` (`id_pemesanan`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD CONSTRAINT `pembayaran_ibfk_1` FOREIGN KEY (`id_pemesanan`) REFERENCES `pemesanan` (`id_pemesanan`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `pembayaran_ibfk_2` FOREIGN KEY (`id_paket`) REFERENCES `paket_wisata` (`id_paket`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD CONSTRAINT `pemesanan_ibfk_1` FOREIGN KEY (`id_pelanggan`) REFERENCES `pendaftaran` (`id_pelanggan`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `pemesanan_ibfk_2` FOREIGN KEY (`id_paket`) REFERENCES `paket_wisata` (`id_paket`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
