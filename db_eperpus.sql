-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2023 at 12:37 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_eperpus`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `id_anggota` int(5) NOT NULL,
  `kd_anggota` varchar(10) NOT NULL,
  `tanggal` date NOT NULL,
  `nisn` varchar(100) NOT NULL,
  `nama_anggota` varchar(100) NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_telp` varchar(13) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`id_anggota`, `kd_anggota`, `tanggal`, `nisn`, `nama_anggota`, `jenis_kelamin`, `alamat`, `no_telp`, `username`, `password`, `role_id`) VALUES
(17, 'KA00001', '2023-02-01', '1099209111', 'Ummi Amelia', 'P', 'Parandakan', '087856779123', 'ummi', 'ec4211597b08b6e04edd1b1c4bae2718', 2),
(18, 'KA00002', '2023-02-02', '2312883456', 'Muhammad Rizky', 'L', 'Gadung', '087713908756', 'rizky', '49d8712dd6ac9c3745d53cd4be48284c', 2),
(19, 'KA00003', '2023-02-07', '1230987765', 'Muhammad Imam Hanafi', 'L', 'Bitahan', '097856784513', 'imam', 'eaccb8ea6090a40a98aa28c071810371', 2),
(20, 'KA00004', '2023-02-11', '6788134590', 'Raudatul Munawarrah', 'P', 'Mandurian', '085677314120', 'raudatul', 'db84eeecf5923648f6e7461687aadc67', 2),
(21, 'KA00005', '2023-02-06', '2346777788', 'Jamilah Al-Adawiyyah', 'P', 'Lawahan Cempaka', '085346226713', 'jamilah', '60114d8e31dc21e34aa55bcfefa8c4b6', 2),
(22, 'KA00006', '2023-02-18', '123123123123', 'ghj', 'L', 'ghj', '123123123', 'ghj', 'ea7d201d1cdd240f3798b2dc51d6adcb', 2);

-- --------------------------------------------------------

--
-- Table structure for table `btamu`
--

CREATE TABLE `btamu` (
  `id_btamu` int(5) NOT NULL,
  `tanggal_kunjungan` date NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `kelas_id` int(5) NOT NULL,
  `keperluan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `btamu`
--

INSERT INTO `btamu` (`id_btamu`, `tanggal_kunjungan`, `nama_lengkap`, `kelas_id`, `keperluan`) VALUES
(1, '2023-01-05', 'Ummi Amelia', 7, 'Pinjam Buku'),
(2, '2023-01-06', 'Muhammad Rizky', 15, 'Pinjam Buku'),
(3, '2023-02-09', 'Jamilah Al-Adawiyyah', 18, 'Pinjam Buku'),
(4, '2023-02-01', 'Muhammad Imam Hanafi', 3, 'Pinjam Buku');

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id_buku` int(5) NOT NULL,
  `kd_buku` varchar(10) NOT NULL,
  `kategori_id` int(5) NOT NULL,
  `isbn` varchar(100) NOT NULL,
  `judul_buku` varchar(100) NOT NULL,
  `id_penulis` varchar(75) NOT NULL,
  `id_penerbit` varchar(75) NOT NULL,
  `tahun_terbit` varchar(4) NOT NULL,
  `stok_buku` varchar(3) NOT NULL,
  `harga_buku` varchar(10) NOT NULL,
  `id_rak` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id_buku`, `kd_buku`, `kategori_id`, `isbn`, `judul_buku`, `id_penulis`, `id_penerbit`, `tahun_terbit`, `stok_buku`, `harga_buku`, `id_rak`) VALUES
(3, 'KDB00001', 1, '978-979-29-6548-3', 'Marketing Kelas X', '2', '16', '2017', '50', '93.500', 2),
(4, 'KDB00002', 1, '978-979-29-6551-3', 'Bisnis Online Kelas XII', '2', '16', '2017', '50', '72.000', 2),
(5, 'KDB00003', 9, '978-602-18318-1-6', 'Dictionary English-Indonesian', '15', '17', '2010', '3', '80.000', 9),
(6, 'KDB00004', 1, '978-979-29-6910-8', 'Produk Kreatif dan Kewirausahaan', '2', '16', '2017', '30', '89.000', 2),
(7, 'KDB00005', 8, '978-602-430-559-8', 'Happy Birth-Die', '4', '7', '2019', '2', '84.000', 7),
(8, 'KDB00006', 5, '978-979-29-9063-8', 'Otomatisasi Tata Kelola  Kepegawaian', '11', '16', '2017', '30', '79.500', 4);

-- --------------------------------------------------------

--
-- Table structure for table `kategoribuku`
--

CREATE TABLE `kategoribuku` (
  `id_kb` int(5) NOT NULL,
  `kd_kategori` varchar(10) NOT NULL,
  `nama_kategori` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategoribuku`
--

INSERT INTO `kategoribuku` (`id_kb`, `kd_kategori`, `nama_kategori`) VALUES
(1, 'KB00001', 'Bisnis Daring dan Pemasaran'),
(2, 'KB00002', 'Akuntasi dan Keuangan Lembaga'),
(5, 'KB00003', 'Otomatisasi dan Tata Kelola Perkantoran'),
(6, 'KB00004', 'Bahasa'),
(7, 'KB00005', 'Sejarah'),
(8, 'KB00006', 'Novel'),
(9, 'KB00007', 'Kamus'),
(10, 'KB00008', 'Pengetahuan Umum'),
(11, 'KB00009', 'Matematika');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(5) NOT NULL,
  `kd_kelas` varchar(10) NOT NULL,
  `nama_kelas` varchar(75) NOT NULL,
  `jumlah_siswa` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `kd_kelas`, `nama_kelas`, `jumlah_siswa`) VALUES
(1, 'KLS00001', 'X - Bisnis Daring dan Pemasaran 1', 35),
(2, 'KLS00002', 'X - Bisnis Daring dan Pemasaran 2', 35),
(3, 'KLS00003', 'X - Akuntansi dan Keuangan Lembaga 1', 32),
(4, 'KLS00004', 'X - Akuntansi dan Keuangan Lembaga 2', 35),
(5, 'KLS00005', 'X - Otomatisasi dan Tata Kelola Perkantoran 1', 32),
(6, 'KLS00006', 'X - Otomatisasi dan Tata Kelola Perkantoran 2', 32),
(7, 'KLS00007', 'XI - Bisnis Daring dan Pemasaran 1', 32),
(8, 'KLS00008', 'XI - Bisnis Daring dan Pemasaran 2', 32),
(9, 'KLS00009', 'XI - Akuntansi dan Keuangan Lembaga 1', 35),
(10, 'KLS00010', 'XI - Akuntansi dan Keuangan Lembaga 2', 32),
(11, 'KLS00011', 'XI - Otomatisasi dan Tata Kelola Perkantoran 1', 30),
(12, 'KLS00012', 'XI - Otomatisasi dan Tata Kelola Perkantoran 2', 30),
(13, 'KLS00013', 'XII - Bisnis Daring dan Pemasaran 1', 30),
(14, 'KLS00014', 'XII - Bisnis Daring dan Pemasaran 2', 27),
(15, 'KLS00015', 'XII - Akuntansi dan Keuangan Lembaga 1', 32),
(16, 'KLS00016', 'XII - Akuntansi dan Keuangan Lembaga 2', 30),
(17, 'KLS00017', 'XII - Otomatisasi dan Tata Kelola Perkantoran 1', 32),
(18, 'KLS00018', 'XII - Otomatisasi dan Tata Kelola Perkantoran 2', 32);

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id_pinjam` int(5) NOT NULL,
  `kd_pinjam` varchar(50) NOT NULL,
  `tanggal_pinjam` date NOT NULL,
  `nisn` varchar(50) NOT NULL,
  `nama_anggota` varchar(100) NOT NULL,
  `isbn` varchar(50) NOT NULL,
  `judul_buku` varchar(100) NOT NULL,
  `lama_pinjam` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`id_pinjam`, `kd_pinjam`, `tanggal_pinjam`, `nisn`, `nama_anggota`, `isbn`, `judul_buku`, `lama_pinjam`) VALUES
(1, 'KDP00009', '2023-02-06', '234', 'ss', 'asd', 'sadasd', 2),
(11, 'KDP00008', '1212-12-12', '234', 'asdasd', 'asd', 'sadasd', 111111),
(12, 'KDP00010', '2023-02-08', '234', 'ss', 'asd', 'sadasd', 2),
(13, 'KDP00011', '2023-02-08', '234', 'ss', 'asd', 'sadasd', 23),
(14, 'KDP00012', '2023-02-09', '2340000', 'ss000', '8888', '8888', 8),
(15, 'KDP00013', '2023-02-09', '2340000', 'ss000', 'asd', 'sadasd', 8),
(16, 'KDP00014', '2023-02-09', '2340000', '', '8888', '8888', 99),
(17, 'KDP00015', '2023-02-09', 'tes', 'tes', '8888', '8888', 2),
(18, 'KDP00016', '2023-02-09', 'tes', 'tes', 'asd', 'sadasd', 32),
(19, 'KDP00017', '2023-02-03', 'tes', 'tes', '8888', '8888', 2),
(20, 'KDP00018', '2023-02-01', '2346777788', 'nanana', '8888', '8888', 5),
(21, 'KDP00019', '2023-01-02', '1099209111', 'Ummi Amelia', '978-979-29-6548-3', 'Marketing Kelas X', 5),
(22, 'KDP00020', '2023-02-01', '2346777788', 'Jamilah Al-Adawiyyah', '978-602-430-559-8', 'Happy Birth-Die', 3),
(23, 'KDP00021', '2022-11-22', '2312883456', 'Muhammad Rizky', '978-979-29-9063-8', 'Otomatisasi Tata Kelola  Kepegawaian', 7),
(24, 'KDP00022', '2023-02-01', '1230987765', 'Muhammad Imam Hanafi', '978-602-18318-1-6', 'Dictionary English-Indonesian', 2),
(25, 'KDP00023', '2023-02-01', '0009999900', 'Nur Aulia', '978-979-29-6548-3', 'Marketing Kelas X', 3),
(26, 'KDP00024', '2023-02-08', '6788134590', 'Raudatul Munawarrah', '978-979-29-6551-3', 'Bisnis Online Kelas XII', 5);

-- --------------------------------------------------------

--
-- Table structure for table `penerbit`
--

CREATE TABLE `penerbit` (
  `id_penerbit` int(5) NOT NULL,
  `kd_penerbit` varchar(10) NOT NULL,
  `penerbit` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penerbit`
--

INSERT INTO `penerbit` (`id_penerbit`, `kd_penerbit`, `penerbit`) VALUES
(2, 'KP00001', 'CV. Yudhistira'),
(3, 'KP00002', 'Bukunesia'),
(4, 'KP00003', 'Gramedia Pustaka Utama'),
(5, 'KP00004', 'Grasindo'),
(6, 'KP00005', 'Puspa Swara'),
(7, 'KP00006', 'Bentang Belia'),
(8, 'KP00007', 'Balai Pustaka'),
(9, 'KP00008', 'Falcon Publishing'),
(10, 'KP00009', 'Gradien Mediatama'),
(11, 'KP00010', 'Republika'),
(12, 'KP00011', 'Erlangga'),
(13, 'KP00012', 'Bhuana Ilmu Populer'),
(14, 'KP00013', 'Tira Pustaka'),
(15, 'KP00014', 'Pustaka Nusantara'),
(16, 'KP00015', 'Penerbit Andi'),
(17, 'KP00016', 'Nirwana Ilmu');

-- --------------------------------------------------------

--
-- Table structure for table `pengembalian`
--

CREATE TABLE `pengembalian` (
  `id_kembali` int(5) NOT NULL,
  `kd_kembali` varchar(15) NOT NULL,
  `kd_pinjam` varchar(15) NOT NULL,
  `nisn` varchar(50) NOT NULL,
  `isbn` varchar(50) NOT NULL,
  `tanggal_pinjam` date NOT NULL,
  `tanggal_kembali` date NOT NULL,
  `lama_pinjam` varchar(5) NOT NULL,
  `denda` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengembalian`
--

INSERT INTO `pengembalian` (`id_kembali`, `kd_kembali`, `kd_pinjam`, `nisn`, `isbn`, `tanggal_pinjam`, `tanggal_kembali`, `lama_pinjam`, `denda`) VALUES
(1, 'KDK00005', 'KDP00012', '2340000', '8888', '2023-02-09', '2023-02-10', '9', '90000'),
(2, 'KDK00006', 'KDP00013', '2340000', 'asd', '2023-02-09', '2023-02-10', '88', '88'),
(3, 'KDK00007', 'KDP00012', '2340000', '8888', '2023-02-09', '2023-02-10', '900', '900'),
(4, 'KDK00008', 'KDP00015', 'tes', '8888', '2023-02-09', '2023-02-21', '2', '5000'),
(5, 'KDK00009', 'KDP00016', 'tes', 'asd', '2023-02-09', '2023-02-13', '32', '0'),
(6, 'KDK00010', 'KDP00015', 'tes', '8888', '2023-02-09', '2023-02-13', '2', '1000'),
(7, 'KDK00011', 'KDP00018', '2346777788', '8888', '2023-02-01', '2023-02-11', '5', '2500'),
(8, 'KDK00012', 'KDP00019', '1099209111', '978-979-29-6548-3', '2023-01-02', '2023-02-03', '5', '13500'),
(10, 'KDK00014', 'KDP00020', '2346777788', '978-602-430-559-8', '2023-02-01', '2023-02-09', '3', '2500'),
(15, 'KDK00015', 'KDP00022', '1230987765', '978-602-18318-1-6', '2023-02-01', '2023-02-04', '2', '500'),
(16, 'KDK00016', 'KDP00021', '2312883456', '978-979-29-9063-8', '2022-11-22', '2022-11-30', '7', '500'),
(17, 'KDK00017', 'KDP00024', '6788134590', '978-979-29-6551-3', '2023-02-08', '2023-02-25', '5', '6000');

-- --------------------------------------------------------

--
-- Table structure for table `penulis`
--

CREATE TABLE `penulis` (
  `id_penulis` int(5) NOT NULL,
  `kd_penulis` varchar(10) NOT NULL,
  `penulis` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penulis`
--

INSERT INTO `penulis` (`id_penulis`, `kd_penulis`, `penulis`) VALUES
(1, 'KP00001', 'Danang Setyabudi, S.E'),
(2, 'KP00002', 'Danang Setyabudi, S.E dan Dr.Suranto, S.T.,M.M'),
(4, 'KP00003', 'Risma Ridha Anissa'),
(7, 'KP00004', 'Tereliye'),
(8, 'KP00005', 'Muh. Nur Eli Brahim, M.Si'),
(9, 'KP00006', 'Dwi Harti'),
(10, 'KP00007', 'Ika Widiyanti'),
(11, 'KP00008', 'Drs. Joko Pramono'),
(12, 'KP00009', 'Ummi Chanifah'),
(13, 'KP00010', 'Kasmina dan Toali'),
(14, 'KP00011', 'Ratna Hapsari dan M.Adil'),
(15, 'KP00012', 'M.I.Syarief');

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `id_admin` int(5) NOT NULL,
  `nama_lengkap` varchar(150) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_telp` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id_admin`, `nama_lengkap`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `alamat`, `no_telp`) VALUES
(1, 'Humaira Anggraeni', 'Tapin', '2023-02-02', 'P', 'Tambarangan', '085751899812'),
(2, 'Rita Azzahra Burhan', 'Tapin', '2023-02-01', 'P', 'Bungur', '081349360700'),
(3, 'Nur Izzatil', 'Tapin', '2023-01-01', 'P', 'Rangda Malingkung', '085246221543'),
(5, 'Daus Walidi', 'Kandangan', '2022-12-06', 'L', 'Kupang', '082154204874');

-- --------------------------------------------------------

--
-- Table structure for table `rak`
--

CREATE TABLE `rak` (
  `id_rak` int(5) NOT NULL,
  `kd_rak` varchar(10) NOT NULL,
  `nama_rak` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rak`
--

INSERT INTO `rak` (`id_rak`, `kd_rak`, `nama_rak`) VALUES
(2, 'KR00001', 'Bisnis Daring dan Pemasaran'),
(3, 'KR00002', 'Akuntasi dan Keuangan Lembaga'),
(4, 'KR00003', 'Otomatisasi dan Tata Kelola Perkantoran'),
(5, 'KR00004', 'Pengetahuan Umum'),
(6, 'KR00005', 'Buku Matematika'),
(7, 'KR00006', 'Novel'),
(8, 'KR00007', 'Sejarah'),
(9, 'KR00008', 'Kamus'),
(10, 'KR00009', 'Bahasa');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `id_role` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`id_role`, `nama`) VALUES
(1, 'petugas'),
(2, 'anggota\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role_id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `role_id`) VALUES
(1, 'ridha', '827ccb0eea8a706c4c34a16891f84e7b', '1'),
(2, 'admin', '21232f297a57a5a743894a0e4a801fc3', '1'),
(3, 'anggota', 'dfb9e85bc0da607ff76e0559c62537e8', '2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id_anggota`);

--
-- Indexes for table `btamu`
--
ALTER TABLE `btamu`
  ADD PRIMARY KEY (`id_btamu`);

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indexes for table `kategoribuku`
--
ALTER TABLE `kategoribuku`
  ADD PRIMARY KEY (`id_kb`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id_pinjam`);

--
-- Indexes for table `penerbit`
--
ALTER TABLE `penerbit`
  ADD PRIMARY KEY (`id_penerbit`);

--
-- Indexes for table `pengembalian`
--
ALTER TABLE `pengembalian`
  ADD PRIMARY KEY (`id_kembali`);

--
-- Indexes for table `penulis`
--
ALTER TABLE `penulis`
  ADD PRIMARY KEY (`id_penulis`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `rak`
--
ALTER TABLE `rak`
  ADD PRIMARY KEY (`id_rak`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id_role`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id_anggota` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `btamu`
--
ALTER TABLE `btamu`
  MODIFY `id_btamu` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id_buku` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `kategoribuku`
--
ALTER TABLE `kategoribuku`
  MODIFY `id_kb` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id_pinjam` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `penerbit`
--
ALTER TABLE `penerbit`
  MODIFY `id_penerbit` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `pengembalian`
--
ALTER TABLE `pengembalian`
  MODIFY `id_kembali` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `penulis`
--
ALTER TABLE `penulis`
  MODIFY `id_penulis` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_admin` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `rak`
--
ALTER TABLE `rak`
  MODIFY `id_rak` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
