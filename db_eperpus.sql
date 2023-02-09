-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2023 at 04:57 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

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
  `nisn` varchar(100) NOT NULL,
  `nama_anggota` varchar(100) NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `kelas_id` int(5) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_telp` varchar(13) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`id_anggota`, `kd_anggota`, `nisn`, `nama_anggota`, `jenis_kelamin`, `kelas_id`, `alamat`, `no_telp`, `username`, `password`, `role_id`) VALUES
(5, 'KA00001', '2343242', 'sdasd', 'L', 1, 'ada', '3231', 'asd', '7815696ecbf1c96e6894b779456d330e', 2),
(6, 'KA00002', '2312', 'dqwe', 'L', 1, 'qeq', '323', 'qwe', '76d80224611fc919a5d54f0ff9fba446', 2),
(11, 'KA00003', 'tes', 'tes', 'L', 0, 'tes', 'tes', 'tes', '28b662d883b6d76fd96e4ddc5e9ba780', 2),
(12, 'KA00004', 'asd', 'asd', 'P', 4, 'asd', 'asd', 'asd', '7815696ecbf1c96e6894b779456d330e', 2);

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `btamu`
--

INSERT INTO `btamu` (`id_btamu`, `tanggal_kunjungan`, `nama_lengkap`, `kelas_id`, `keperluan`) VALUES
(1, '2023-01-05', 'Annisa', 1, 'Pinjam Buku'),
(2, '2023-01-06', 'nida', 2, 'pinjam buku'),
(3, '2023-02-09', 'asd', 4, 'asd');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id_buku`, `kd_buku`, `kategori_id`, `isbn`, `judul_buku`, `id_penulis`, `id_penerbit`, `tahun_terbit`, `stok_buku`, `harga_buku`, `id_rak`) VALUES
(0, 'KDB00003', 4, '8888', '8888', '3', '3', '8888', '8', '888888', 2),
(7, 'KDB00002', 4, 'asd', 'sadasd', '4', '3', '223', '123', '232', 2);

-- --------------------------------------------------------

--
-- Table structure for table `kategoribuku`
--

CREATE TABLE `kategoribuku` (
  `id_kb` int(5) NOT NULL,
  `kd_kategori` varchar(10) NOT NULL,
  `nama_kategori` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kategoribuku`
--

INSERT INTO `kategoribuku` (`id_kb`, `kd_kategori`, `nama_kategori`) VALUES
(4, 'KB00001', 'asd');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(5) NOT NULL,
  `kd_kelas` varchar(10) NOT NULL,
  `nama_kelas` varchar(20) NOT NULL,
  `jumlah_siswa` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `kd_kelas`, `nama_kelas`, `jumlah_siswa`) VALUES
(0, 'KLS00002', 'kelas9999', 999),
(4, 'KLS00001', 'ad', 12);

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
(18, 'KDP00016', '2023-02-09', 'tes', 'tes', 'asd', 'sadasd', 32);

-- --------------------------------------------------------

--
-- Table structure for table `penerbit`
--

CREATE TABLE `penerbit` (
  `id_penerbit` int(5) NOT NULL,
  `kd_penerbit` varchar(10) NOT NULL,
  `penerbit` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `penerbit`
--

INSERT INTO `penerbit` (`id_penerbit`, `kd_penerbit`, `penerbit`) VALUES
(2, 'KP00001', 'asdfsd'),
(3, 'KP00002', 'sdfsd'),
(4, 'KP00003', 'erere');

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
  `total_buku` varchar(5) NOT NULL,
  `denda` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pengembalian`
--

INSERT INTO `pengembalian` (`id_kembali`, `kd_kembali`, `kd_pinjam`, `nisn`, `isbn`, `tanggal_pinjam`, `tanggal_kembali`, `total_buku`, `denda`) VALUES
(1, 'KDK00005', 'KDP00012', '2340000', '8888', '2023-02-09', '2023-02-10', '9', '90000'),
(2, 'KDK00006', 'KDP00013', '2340000', 'asd', '2023-02-09', '2023-02-10', '88', '88'),
(3, 'KDK00007', 'KDP00012', '2340000', '8888', '2023-02-09', '2023-02-10', '900', '900');

-- --------------------------------------------------------

--
-- Table structure for table `penulis`
--

CREATE TABLE `penulis` (
  `id_penulis` int(5) NOT NULL,
  `kd_penulis` varchar(10) NOT NULL,
  `penulis` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `penulis`
--

INSERT INTO `penulis` (`id_penulis`, `kd_penulis`, `penulis`) VALUES
(2, 'KP00001', 'asd'),
(3, 'KP00002', 'sfs'),
(4, 'KP00003', 'errere');

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `id_admin` int(5) NOT NULL,
  `nama_lengkap` varchar(150) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_telp` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id_admin`, `nama_lengkap`, `username`, `password`, `jenis_kelamin`, `alamat`, `no_telp`) VALUES
(0, 'asdas', 'asds', 'asd', 'L', 'asdasasdsdas', 'asd'),
(2, 'nur aulia afridha', 'afridha', 'afridha', 'P', 'rantau', '085345677779'),
(3, 'riyani', 'yy', 'uuuuu', 'P', 'tapin', '083344556688'),
(5, 'asdasd', 'asd123123', 'asd', 'L', 'asdasd', '1231');

-- --------------------------------------------------------

--
-- Table structure for table `rak`
--

CREATE TABLE `rak` (
  `id_rak` int(5) NOT NULL,
  `kd_rak` varchar(10) NOT NULL,
  `nama_rak` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rak`
--

INSERT INTO `rak` (`id_rak`, `kd_rak`, `nama_rak`) VALUES
(2, 'KR00001', 'dfafgsa21312'),
(3, 'KR00002', 'asdas');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `id_role` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  MODIFY `id_anggota` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `btamu`
--
ALTER TABLE `btamu`
  MODIFY `id_btamu` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id_pinjam` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `pengembalian`
--
ALTER TABLE `pengembalian`
  MODIFY `id_kembali` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
