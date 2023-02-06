-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2023 at 07:04 AM
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
  `nisn` varchar(100) NOT NULL,
  `nama_anggota` varchar(100) NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `kelas_id` int(5) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_telp` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`id_anggota`, `kd_anggota`, `nisn`, `nama_anggota`, `jenis_kelamin`, `kelas_id`, `alamat`, `no_telp`) VALUES
(5, 'KA00001', '2343242', 'sdasd', 'L', 1, 'ada', '3231'),
(6, 'KA00002', '2312', 'dqwe', 'L', 1, 'qeq', '323'),
(7, 'KA00003', '234', 'ss', 'L', 4, 'qwe', '231');

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
(1, '2023-01-05', 'Annisa', 1, 'Pinjam Buku'),
(2, '2023-01-06', 'nida', 2, 'pinjam buku');

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
(7, 'KDB00002', 4, 'asd', 'sadasd', '4', '3', '223', '123', '232', 2);

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `kd_kelas`, `nama_kelas`, `jumlah_siswa`) VALUES
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`id_pinjam`, `kd_pinjam`, `tanggal_pinjam`, `nisn`, `nama_anggota`, `isbn`, `judul_buku`, `lama_pinjam`) VALUES
(11, 'KDP00008', '1212-12-12', '234', 'asdasd', 'asd', 'sadasd', 111111);

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengembalian`
--

INSERT INTO `pengembalian` (`id_kembali`, `kd_kembali`, `kd_pinjam`, `nisn`, `isbn`, `tanggal_pinjam`, `tanggal_kembali`, `total_buku`, `denda`) VALUES
(1, '', '', '7', '7', '0000-00-00', '1212-12-12', '2312', '12'),
(2, '', '', '0', '234', '1212-12-12', '1212-12-12', '12', '12'),
(3, 'KDK00001', 'KDP00008', '0', '234', '1212-12-12', '1212-12-12', '2312', '1212'),
(4, 'KDK00002', 'KDP00008', 'asd', '234', '1212-12-12', '1212-12-12', '23122', '121'),
(5, 'KDK00003', 'KDP00008', '234', 'asd', '1212-12-12', '1212-12-12', '21', '12');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id_admin`, `nama_lengkap`, `username`, `password`, `jenis_kelamin`, `alamat`, `no_telp`) VALUES
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`id_role`, `nama`) VALUES
(1, 'petugas'),
(2, 'anggota\r\n');

-- --------------------------------------------------------

--
-- Stand-in structure for view `tampil_pinjam`
-- (See below for the actual view)
--
CREATE TABLE `tampil_pinjam` (
);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `role_id`) VALUES
(1, 'ridha', '827ccb0eea8a706c4c34a16891f84e7b', 1),
(2, 'admin', '21232f297a57a5a743894a0e4a801fc3', 1);

-- --------------------------------------------------------

--
-- Structure for view `tampil_pinjam`
--
DROP TABLE IF EXISTS `tampil_pinjam`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `tampil_pinjam`  AS SELECT `peminjaman`.`id_pinjam` AS `id_pinjam`, `peminjaman`.`tanggal_pinjam` AS `tanggal_pinjam`, `peminjaman`.`tanggal_kembali` AS `tanggal_kembali`, `peminjaman`.`total_buku` AS `total_buku`, `anggota`.`nisn` AS `nisn`, `anggota`.`nama_anggota` AS `nama_anggota`, `buku`.`isbn` AS `isbn`, `buku`.`judul_buku` AS `judul_buku` FROM ((`peminjaman` join `anggota` on(`peminjaman`.`anggota_id` = `anggota`.`id_anggota`)) join `buku` on(`peminjaman`.`buku_id` = `buku`.`id_buku`))  ;

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
  MODIFY `id_anggota` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `btamu`
--
ALTER TABLE `btamu`
  MODIFY `id_btamu` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id_buku` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `kategoribuku`
--
ALTER TABLE `kategoribuku`
  MODIFY `id_kb` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id_pinjam` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `penerbit`
--
ALTER TABLE `penerbit`
  MODIFY `id_penerbit` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pengembalian`
--
ALTER TABLE `pengembalian`
  MODIFY `id_kembali` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `penulis`
--
ALTER TABLE `penulis`
  MODIFY `id_penulis` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_admin` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `rak`
--
ALTER TABLE `rak`
  MODIFY `id_rak` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
