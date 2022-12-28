-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Nov 2022 pada 02.01
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventaris_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pbbarang`
--

CREATE TABLE `pbbarang` (
  `id` int(8) NOT NULL,
  `kode` varchar(20) NOT NULL,
  `namaBarang` varchar(20) NOT NULL,
  `satuan` varchar(20) NOT NULL,
  `hargaBeli` double NOT NULL,
  `stok` int(11) NOT NULL,
  `keterangan` text NOT NULL,
  `status` text NOT NULL,
  `merk` varchar(35) NOT NULL,
  `tahunPembuatan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pbbarangkeluar`
--

CREATE TABLE `pbbarangkeluar` (
  `noNota` varchar(20) NOT NULL,
  `tgl` date NOT NULL,
  `kdPeminjaman` varchar(20) NOT NULL,
  `kdBarang` varchar(20) NOT NULL,
  `jumlah` int(8) NOT NULL,
  `potongan` double NOT NULL,
  `tglKeluar` date NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pbnotabeli`
--

CREATE TABLE `pbnotabeli` (
  `noNota` varchar(20) NOT NULL,
  `tgl` date NOT NULL,
  `kdPemasok` varchar(20) NOT NULL,
  `kdBarang` varchar(20) NOT NULL,
  `jml` int(8) NOT NULL,
  `potongan` double NOT NULL,
  `ket` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pbpemasok`
--

CREATE TABLE `pbpemasok` (
  `id` int(11) NOT NULL,
  `kode` varchar(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `telp` varchar(15) NOT NULL,
  `kota` varchar(20) NOT NULL,
  `tglMasuk` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pbpeminjaman`
--

CREATE TABLE `pbpeminjaman` (
  `id` varchar(11) NOT NULL,
  `kode` varchar(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `telp` varchar(15) NOT NULL,
  `kota` varchar(20) NOT NULL,
  `tglMasuk` date NOT NULL,
  `jabatan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pbuser`
--

CREATE TABLE `pbuser` (
  `id` varchar(10) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `upass` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `level` varchar(5) NOT NULL,
  `tglMasuk` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pbbarang`
--
ALTER TABLE `pbbarang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pbbarangkeluar`
--
ALTER TABLE `pbbarangkeluar`
  ADD PRIMARY KEY (`noNota`);

--
-- Indeks untuk tabel `pbnotabeli`
--
ALTER TABLE `pbnotabeli`
  ADD PRIMARY KEY (`noNota`);

--
-- Indeks untuk tabel `pbpemasok`
--
ALTER TABLE `pbpemasok`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pbpeminjaman`
--
ALTER TABLE `pbpeminjaman`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pbuser`
--
ALTER TABLE `pbuser`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pbbarang`
--
ALTER TABLE `pbbarang`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pbpemasok`
--
ALTER TABLE `pbpemasok`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
