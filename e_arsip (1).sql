-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Jun 2023 pada 04.34
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_arsip`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `arsip`
--

CREATE TABLE `arsip` (
  `id_arsip` int(11) NOT NULL,
  `indeks` varchar(10) DEFAULT NULL,
  `nomor` varchar(255) DEFAULT NULL,
  `tgl_keluar_masuk` date DEFAULT NULL,
  `tgl_surat` date DEFAULT NULL,
  `tujuan` varchar(225) DEFAULT NULL,
  `pengirim` varchar(255) DEFAULT NULL,
  `nama_perihal` varchar(225) DEFAULT NULL,
  `berkas` varchar(225) NOT NULL,
  `kode_kategori` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `arsip`
--

INSERT INTO `arsip` (`id_arsip`, `indeks`, `nomor`, `tgl_keluar_masuk`, `tgl_surat`, `tujuan`, `pengirim`, `nama_perihal`, `berkas`, `kode_kategori`) VALUES
(7, '005', 'dfdsfadfdsf', '2023-06-29', '2023-06-28', 'fdfd', NULL, 'dfdsf', 'e7271c8f5414caf2fb0c398c045eb369.pdf', 2),
(8, '005', '005/223/Dikbud/2023', '2023-06-17', '2023-06-01', 'Kepala Sekolah', 'Dikbud', 'Daftar Nama Siswa', '6acbebac4fcff384685d5b1c303426dc.pdf', 1),
(9, NULL, '800/223/Dikbud/2023', NULL, '2023-06-17', NULL, NULL, 'Undangan Bimtek', '2eee1001dd63cdd78af4b6766124d470.pdf', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Surat Masuk'),
(2, 'Surat Keluar'),
(4, 'Arsip');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama_user` varchar(225) NOT NULL,
  `role` varchar(100) NOT NULL,
  `foto` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nama_user`, `role`, `foto`) VALUES
(1, 'admin', '2e310f292c162dece16e5936ffde36e8', 'Ikhsan Maulan', 'admin', 'afd23a2b08de16c30000fc3dda8de2af.png'),
(5, 'pengguna', '827ccb0eea8a706c4c34a16891f84e7b', 'mulyadin Inder', 'user', '26bf8b5d0189525daf2767e7eda7da43.png');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `arsip`
--
ALTER TABLE `arsip`
  ADD PRIMARY KEY (`id_arsip`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `arsip`
--
ALTER TABLE `arsip`
  MODIFY `id_arsip` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
