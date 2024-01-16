-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Jan 2024 pada 15.08
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_tb_buku`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_buku`
--

CREATE TABLE `tb_buku` (
  `id_buku` varchar(10) NOT NULL,
  `kategori` varchar(20) NOT NULL,
  `nama_buku` varchar(50) NOT NULL,
  `harga` varchar(10) NOT NULL,
  `stok` varchar(10) NOT NULL,
  `penerbit` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_buku`
--

INSERT INTO `tb_buku` (`id_buku`, `kategori`, `nama_buku`, `harga`, `stok`, `penerbit`) VALUES
('k1001', 'keilmuan', 'analisis & perancangan sistem  informasi', '50.000', '60', 'informatika'),
('k1002', 'keilmuan', 'artifical intelligence', '45.000', '60', 'informatika'),
('k2003', 'keilmuan', 'autocad 3 dimensi', '40.000', '25', 'informatika'),
('k3004', 'keilmuan', 'cloud computing technology', '85.000', '15', 'informatika'),
('b1002', 'bisnis', 'etika bisnis dan tanggung  jawab sosial', '67.500', '20', 'informatika'),
('n1002', 'novel', 'aku ingin cerita', '48.000', '12', 'danendra'),
('n1001', 'novel', 'cahaya dipenjuru hati', '68.000', '10', 'andi offset');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_penerbit`
--

CREATE TABLE `tb_penerbit` (
  `id_penerbit` varchar(10) NOT NULL,
  `nama_penerbit` varchar(20) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `kota` varchar(10) NOT NULL,
  `telepon` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_penerbit`
--

INSERT INTO `tb_penerbit` (`id_penerbit`, `nama_penerbit`, `alamat`, `kota`, `telepon`) VALUES
('SP01', 'penerbit informatika', 'jl.buah batu no.121', 'bandung', '0813-2220-1946'),
('SP03', 'danendra', 'jl moch. toha 44', 'bandung', '022-5201215'),
('sp02', 'andi offset', 'jl suryalaya IX No.3', 'bandung', '0878-3909-0688');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
