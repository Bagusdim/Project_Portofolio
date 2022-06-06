-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Jan 2021 pada 02.39
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.3.11

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
-- Struktur dari tabel `paket_wisata`
--

CREATE TABLE `paket_wisata` (
  `id_paket` varchar(12) NOT NULL,
  `nama_paket` varchar(50) DEFAULT NULL,
  `harga_paket` int(8) NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `lokasi` text NOT NULL,
  `durasi` int(2) DEFAULT NULL,
  `kota` varchar(30) DEFAULT NULL,
  `provinsi` varchar(20) DEFAULT NULL,
  `fasilitas` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `paket_wisata`
--

INSERT INTO `paket_wisata` (`id_paket`, `nama_paket`, `harga_paket`, `gambar`, `lokasi`, `durasi`, `kota`, `provinsi`, `fasilitas`) VALUES
('PACK0001', 'Paket Malang 3 Hari 2 Malam', 560000, 'gb1.jpg', '1. Air Terjun Coban Rondo\r\n2. Taman Labirin\r\n3. Agro Wisata\r\n4. Jatim Park 2\r\n5. Museum Angkut\r\n6. Batu Night Spektakuler\r\n7. Tempat oleh-oleh', 3, 'Malang', 'Jawa Tengah', '1. Tranportasi atau Travel AC selama trip\r\n2. Penginapan standar AC sekamar berdua 2 malam di Malang\r\n3. Tiket masuk wisata malang (Museum Angkut, Jatim Park 2, Agrowisata, BNS)\r\n4. Snak dan P3K\r\n5. Makan 7x\r\n6. Guide\r\n7. Dokumentasi Camera DSLR'),
('PACK0002', 'Paket Bromo Malang 2 Hari 1 Malam', 950000, 'gb2.jpg', '1. Gunung Bromo\r\n2. Penanjakan Bromo (Tempat paling bagus untuk melihat view gunung bromo saat sunrise)\r\n3. Pasir Berbisik Bromo\r\n4. Bukit Tele Tabis\r\n5. Air Terjun Madakaripura\r\n6. Pura Luhur Poten\r\n7. Kota Malang\r\n8. Museum Angkut', 2, 'Malang', 'Jawa Timur', '1. Tranportasi atau Travel selama trip\r\n2. Penginapan sekamar bertiga (Sukapura Permai) atau sekamar berdua (Villa Sinar Harapan) satu malam di Gunung Bromo non ac karna sudah dingin \r\n3. Sewa jeep kepenanjakan gunung bromo dan pasir berbisik\r\n4. Tiket masuk taman nasional Gunung Bromo\r\n5. Tiket masuk ke air terjun\r\n6. Tiket masuk ke museum angkut\r\n7. Snak dan P3K\r\n8. Makan 6x\r\n9. Guide\r\n10. Dokumentasi'),
('PACK0003', 'Paket Bromo Malang 3 Hari 2 Malam', 1550000, 'gb3.jpg', '1. Gunung Bromo\r\n2. Penanjakan Bromo (Tempat paling bagus untuk melihat view gunung bromo saat sunrise)\r\n3. Bukit Cinta\r\n4. Pura Luhur Poten\r\n5. Gunung Batok\r\n6. Pasir Berbisik Bromo\r\n7. Bukit Tele Tabis\r\n8. Air Terjun Madakaripura\r\n9. Agro Wisata\r\n10. Jatim Park 2\r\n11. Museum Angkut\r\n12. Batu Night Spektakuler\r\n13. Tempat oleh-oleh', 3, 'Malang', 'Jawa Timur', '1. Tranportasi atau Travel AC selama trip\r\n2. Penginapan standar AC sekamar berdua 1 malam di Malang\r\n3. Sewa jeep untuk tour di bromo\r\n4. Tiket masuk taman nasional Gunung Bromo\r\n5. Tiket masuk wisata malang (Museum Angkut, Jatim Park 2, Agrowisata, BNS)\r\n6. Snak dan P3K\r\n7. Makan 8x\r\n8. Guide\r\n9. Dokumentasi Camera DSLR\r\n10. Stiker'),
('PACK0004', 'Paket Yogyakarta Rafting', 570000, 'gb4.jpg', '1. Sungai Elo Magelang\r\n2. Kali Suci\r\n3. Pantai BKK (Bisa pilih mana aja)\r\n4. Malioboro\r\n5. Kota Gede pusat perak', 2, 'Yogyakarta', 'DIY', '1. Tranportasi atau Travel selama trip\r\n2. Penginapan satu malam ac (berdua/bertiga)\r\n3. Tiket masuk pantai BKK\r\n5. Tiket Arum Jeram\r\n6. Tiket Kali Suci\r\n7. Snak dan P3K\r\n8. Makan 6x\r\n9. Guide\r\n10. Dokumentasi'),
('PACK0005', 'Paket Yogyakarta 3 Hari 2 Malam', 775000, 'gb5.jpg', 'Hari 1\r\n1. Makan Siang\r\n2. Keraton, Taman sari\r\n3. Belanja malioboro dan sekitarnya (Malioboro, Mirota batik, bakpia, dll)\r\n4. Makan Malam\r\n\r\nHari 2\r\n1. Sarapan (di hotel)\r\n2. Gua Pindul / Kali Suci / Air terjun Sri gethuk dan Gua Rancang Kencono\r\n3. Makan Siang\r\n4. Pantai BKK (Bisa pilih mana aja - Baron, Kukup, Krakal, Indrayanti)\r\n5. Makan Malam\r\n\r\nHari 3\r\n1. Sarapan (di hotel)\r\n2. Candi plaosan\r\n3. Candi Prambanan\r\n4. Cari oleh-oleh\r\n5. Makan siang\r\n6. Diantar kebandara/stasiun', 3, 'Yogyakarta', 'DIY', '1. Tranportasi atau Travel selama trip\r\n2. Penginapan satu malam standar ac (berdua/bertiga)\r\n3. Tiket masuk pantai BKK\r\n4. Tiket tahura / hutan pinus dan kebun buah\r\n5. Tiket Caving dan rafting gua pindul\r\n6. Snack dan P3K\r\n7. Makan 6x\r\n8. Guide\r\n9. Dokumentasi'),
('PACK0006', 'Paket Yogyakarta 2 Hari 1 Malam', 350000, 'gb6.jpg', '1. Prambanan\r\n2. Borobudur\r\n3. Pantai BKK (Bisa pilih mana aja)\r\n4. Keratorn\r\n5. Taman Sari\r\n6. Malioboro\r\n7. Kota Gede pusat perak', 2, 'Yogyakarta', 'DIY', '1. Tranportasi atau Travel selama trip\r\n2. Penginapan satu malam standar ac (berdua/bertiga)\r\n3. Tiket masuk pantai BKK\r\n4. Tiket Tempat Wisata\r\n5. Snak dan P3K\r\n6. Makan 5x\r\n7. Guide\r\n8. Dokumentasi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id_pemesanan` int(12) NOT NULL,
  `id_pelanggan` int(8) DEFAULT NULL,
  `id_paket` varchar(12) DEFAULT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_selesai` date NOT NULL,
  `jumlah_orang` int(2) NOT NULL,
  `tanggal_pembayaran` date NOT NULL,
  `bukti` varchar(255) NOT NULL,
  `status` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pemesanan`
--

INSERT INTO `pemesanan` (`id_pemesanan`, `id_pelanggan`, `id_paket`, `tgl_mulai`, `tgl_selesai`, `jumlah_orang`, `tanggal_pembayaran`, `bukti`, `status`) VALUES
(20, 1, 'PACK0001', '2021-01-07', '0000-00-00', 4, '0000-00-00', 'sfsdf', 'BELUM BAYAR');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `id_pelanggan` int(8) NOT NULL,
  `email_pelanggan` varchar(50) NOT NULL,
  `nama_pelanggan` varchar(30) NOT NULL,
  `tglLahir_pelanggan` date NOT NULL,
  `kelamin_pelanggan` varchar(9) NOT NULL,
  `alamat_pelanggan` text NOT NULL,
  `telp_pelanggan` varchar(14) NOT NULL,
  `kewarganegaraan` varchar(20) NOT NULL,
  `kataSandi_pelanggan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pendaftaran`
--

INSERT INTO `pendaftaran` (`id_pelanggan`, `email_pelanggan`, `nama_pelanggan`, `tglLahir_pelanggan`, `kelamin_pelanggan`, `alamat_pelanggan`, `telp_pelanggan`, `kewarganegaraan`, `kataSandi_pelanggan`) VALUES
(1, 'adhiardiansyah@gmail.com', 'Adhi Ardiansyah', '2001-03-23', 'Laki-laki', 'Gondang 2/2, Kedungjeruk, Mojogedang, Karanganyar', '083866811948', 'Indonesia', 'adhi1234'),
(2, 'bagusdimas@gmail.com', 'Bagus Dimas Adam', '2000-05-03', 'Laki-laki', 'Beku, Kliworan, Masaran, Sragen', '085612525667', 'Indonesia', 'bagus1234'),
(4, 'baqiyatuss@gmail.com', 'Baqiyatus Shaliha', '2000-05-18', 'Perempuan', 'Karangmojo, Karangmojo, Tasikmadu, Karanganyar', '087654776221', 'Indonesia', 'baqis1234'),
(5, 'arricohandyanto@gmail.com', 'Arrico Handyanto', '2001-02-12', 'Laki-laki', 'Karanglo 3/2, Wironanggan, Gatak, Sukoharjo', '088990460076', 'Indonesia', 'arrico1234');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftaran_admin`
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
-- Dumping data untuk tabel `pendaftaran_admin`
--

INSERT INTO `pendaftaran_admin` (`email_admin`, `nama_admin`, `tglLahir_admin`, `kelamin_admin`, `alamat_admin`, `telp_admin`, `kataSandi_admin`) VALUES
('admin1@gmail.com', 'admin1', '2000-01-13', 'Laki-laki', 'Gondang 2/2, Kedungjeruk, Mojogedang, Karanganyar', '081234213456', 'admin1123'),
('admin2@gmail.com', 'admin2', '2000-01-21', 'Perempuan', 'Kepobanget ngapadahh', '085776887612', 'admin2123');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `paket_wisata`
--
ALTER TABLE `paket_wisata`
  ADD PRIMARY KEY (`id_paket`);

--
-- Indeks untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id_pemesanan`),
  ADD KEY `id_pelanggan` (`id_pelanggan`) USING BTREE,
  ADD KEY `id_paket` (`id_paket`);

--
-- Indeks untuk tabel `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`id_pelanggan`),
  ADD KEY `email_pelanggan` (`email_pelanggan`) USING BTREE;

--
-- Indeks untuk tabel `pendaftaran_admin`
--
ALTER TABLE `pendaftaran_admin`
  ADD PRIMARY KEY (`email_admin`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id_pemesanan` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `id_pelanggan` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD CONSTRAINT `pemesanan_ibfk_1` FOREIGN KEY (`id_pelanggan`) REFERENCES `pendaftaran` (`id_pelanggan`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `pemesanan_ibfk_2` FOREIGN KEY (`id_paket`) REFERENCES `paket_wisata` (`id_paket`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
