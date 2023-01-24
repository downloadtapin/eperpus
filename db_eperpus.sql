-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Jan 2023 pada 13.24
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.6

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
-- Struktur dari tabel `anggota`
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
-- Dumping data untuk tabel `anggota`
--

INSERT INTO `anggota` (`id_anggota`, `kd_anggota`, `nisn`, `nama_anggota`, `jenis_kelamin`, `kelas_id`, `alamat`, `no_telp`) VALUES
(1, 'KA001', '778888888888', 'Annisa', 'P', 1, 'Lokpaikat', '082145661245'),
(2, 'KA002', '44444444444444', 'Aldi', 'L', 2, 'Kupang', '087725418832'),
(3, 'KA003', '67655555555555', 'aaaa', 'L', 2, 'binuang', '00899667788');

-- --------------------------------------------------------

--
-- Struktur dari tabel `btamu`
--

CREATE TABLE `btamu` (
  `id_btamu` int(5) NOT NULL,
  `tanggal_kunjungan` date NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `kelas_id` int(5) NOT NULL,
  `keperluan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `btamu`
--

INSERT INTO `btamu` (`id_btamu`, `tanggal_kunjungan`, `nama_lengkap`, `kelas_id`, `keperluan`) VALUES
(1, '2023-01-05', 'Annisa', 1, 'Pinjam Buku'),
(2, '2023-01-06', 'nida', 2, 'pinjam buku');

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `id_buku` int(5) NOT NULL,
  `kd_buku` varchar(10) NOT NULL,
  `kategori_id` int(5) NOT NULL,
  `isbn` varchar(100) NOT NULL,
  `judul_buku` varchar(100) NOT NULL,
  `pengarang` varchar(75) NOT NULL,
  `penerbit` varchar(75) NOT NULL,
  `tahun_terbit` varchar(4) NOT NULL,
  `stok_buku` varchar(3) NOT NULL,
  `harga_buku` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`id_buku`, `kd_buku`, `kategori_id`, `isbn`, `judul_buku`, `pengarang`, `penerbit`, `tahun_terbit`, `stok_buku`, `harga_buku`) VALUES
(1, 'KDB0215', 2, '444-777-999-000', 'Sejarah Peradaban Islam Di Indonesia', 'Prof. Dr. H. J. Suyuthi Pulungan, M.A.', 'Jakarta : Amzah', '2019', '10', '104.000'),
(2, 'KDB0216', 1, '8888777777', 'Bumi', 'Tere Liye', 'Gramedia', '2011', '5', '98.000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategoribuku`
--

CREATE TABLE `kategoribuku` (
  `id_kb` int(5) NOT NULL,
  `kd_kategori` varchar(10) NOT NULL,
  `nama_kategori` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kategoribuku`
--

INSERT INTO `kategoribuku` (`id_kb`, `kd_kategori`, `nama_kategori`) VALUES
(1, 'KB001', 'Novel'),
(2, 'KB002', 'Sejarah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(5) NOT NULL,
  `kd_kelas` varchar(10) NOT NULL,
  `nama_kelas` varchar(20) NOT NULL,
  `jumlah_siswa` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `kd_kelas`, `nama_kelas`, `jumlah_siswa`) VALUES
(1, 'KLS01', 'X BDP-1', 32),
(2, 'KLS02', 'X BDP-2', 35);

-- --------------------------------------------------------

--
-- Struktur dari tabel `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id_pinjam` int(5) NOT NULL,
  `tanggal_pinjam` date NOT NULL,
  `tanggal_kembali` date NOT NULL,
  `anggota_id` int(5) NOT NULL,
  `buku_id` int(5) NOT NULL,
  `total_buku` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `peminjaman`
--

INSERT INTO `peminjaman` (`id_pinjam`, `tanggal_pinjam`, `tanggal_kembali`, `anggota_id`, `buku_id`, `total_buku`) VALUES
(1, '2023-01-05', '2023-01-10', 1, 1, '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penerbit`
--

CREATE TABLE `penerbit` (
  `id_penerbit` int(5) NOT NULL,
  `kd_penerbit` varchar(10) NOT NULL,
  `penerbit` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengembalian`
--

CREATE TABLE `pengembalian` (
  `id_kembali` int(5) NOT NULL,
  `buku_id` int(5) NOT NULL,
  `anggota_id` int(5) NOT NULL,
  `tanggal_kembali` date NOT NULL,
  `total_buku` varchar(5) NOT NULL,
  `denda` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `penulis`
--

CREATE TABLE `penulis` (
  `id_penulis` int(5) NOT NULL,
  `kd_penulis` varchar(10) NOT NULL,
  `penulis` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `petugas`
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
-- Dumping data untuk tabel `petugas`
--

INSERT INTO `petugas` (`id_admin`, `nama_lengkap`, `username`, `password`, `jenis_kelamin`, `alamat`, `no_telp`) VALUES
(2, 'nur aulia afridha', 'afridha', 'afridha', 'P', 'rantau', '085345677779'),
(3, 'riyani', 'yy', 'uuuuu', 'P', 'tapin', '083344556688');

-- --------------------------------------------------------

--
-- Struktur dari tabel `role_user`
--

CREATE TABLE `role_user` (
  `id_role` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `role_user`
--

INSERT INTO `role_user` (`id_role`, `nama`) VALUES
(1, 'petugas'),
(2, 'anggota\r\n');

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `tampil_pinjam`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `tampil_pinjam` (
`id_pinjam` int(5)
,`tanggal_pinjam` date
,`tanggal_kembali` date
,`total_buku` varchar(5)
,`nisn` varchar(100)
,`nama_anggota` varchar(100)
,`isbn` varchar(100)
,`judul_buku` varchar(100)
);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `role_id`) VALUES
(1, 'ridha', '827ccb0eea8a706c4c34a16891f84e7b', 1);

-- --------------------------------------------------------

--
-- Struktur untuk view `tampil_pinjam`
--
DROP TABLE IF EXISTS `tampil_pinjam`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `tampil_pinjam`  AS  select `peminjaman`.`id_pinjam` AS `id_pinjam`,`peminjaman`.`tanggal_pinjam` AS `tanggal_pinjam`,`peminjaman`.`tanggal_kembali` AS `tanggal_kembali`,`peminjaman`.`total_buku` AS `total_buku`,`anggota`.`nisn` AS `nisn`,`anggota`.`nama_anggota` AS `nama_anggota`,`buku`.`isbn` AS `isbn`,`buku`.`judul_buku` AS `judul_buku` from ((`peminjaman` join `anggota` on(`peminjaman`.`anggota_id` = `anggota`.`id_anggota`)) join `buku` on(`peminjaman`.`buku_id` = `buku`.`id_buku`)) ;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id_anggota`);

--
-- Indeks untuk tabel `btamu`
--
ALTER TABLE `btamu`
  ADD PRIMARY KEY (`id_btamu`);

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indeks untuk tabel `kategoribuku`
--
ALTER TABLE `kategoribuku`
  ADD PRIMARY KEY (`id_kb`);

--
-- Indeks untuk tabel `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indeks untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id_pinjam`);

--
-- Indeks untuk tabel `penerbit`
--
ALTER TABLE `penerbit`
  ADD PRIMARY KEY (`id_penerbit`);

--
-- Indeks untuk tabel `pengembalian`
--
ALTER TABLE `pengembalian`
  ADD PRIMARY KEY (`id_kembali`);

--
-- Indeks untuk tabel `penulis`
--
ALTER TABLE `penulis`
  ADD PRIMARY KEY (`id_penulis`);

--
-- Indeks untuk tabel `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id_role`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id_anggota` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `btamu`
--
ALTER TABLE `btamu`
  MODIFY `id_btamu` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `buku`
--
ALTER TABLE `buku`
  MODIFY `id_buku` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `kategoribuku`
--
ALTER TABLE `kategoribuku`
  MODIFY `id_kb` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id_pinjam` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `penerbit`
--
ALTER TABLE `penerbit`
  MODIFY `id_penerbit` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pengembalian`
--
ALTER TABLE `pengembalian`
  MODIFY `id_kembali` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `penulis`
--
ALTER TABLE `penulis`
  MODIFY `id_penulis` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_admin` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
