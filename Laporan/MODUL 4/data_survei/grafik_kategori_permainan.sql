-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Apr 2021 pada 17.51
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `grafik_kategori_permainan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `player`
--

CREATE TABLE `player` (
  `id` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `no_member` varchar(20) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `kategori` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `player`
--

INSERT INTO `player` (`id`, `nama`, `no_member`, `jenis_kelamin`, `kategori`) VALUES
(1, 'Agus', 'G1', 'L', 'Arkade'),
(2, 'Tirta', 'G2', 'P', 'Tekateki'),
(3, 'Risda', 'G3', 'P', 'Strategi'),
(4, 'Rizki', 'G4', 'L', 'Balapan'),
(5, 'Hendra', 'G5', 'L', 'Balapan'),
(6, 'Vania', 'G6', 'P', 'Arkade'),
(7, 'Ikma', 'G7', 'L', 'Arkade'),
(8, 'Dimas', 'G8', 'L', 'Balapan'),
(9, 'Ibnu', 'G9', 'L', 'Strategi'),
(10, 'Rio', 'G10', 'L', 'Tekateki'),
(11, 'Virina', 'G11', 'P', 'Arkade'),
(12, 'Fidela', 'G12', 'P', 'Tekateki'),
(13, 'Lusia', 'G13', 'P', 'Balapan'),
(14, 'Dinda', 'G14', 'P', 'Balapan'),
(15, 'Immanuel', 'G15', 'L', 'Balapan'),
(16, 'Andre', 'G16', 'L', 'Arkade'),
(17, 'Michael', 'G17', 'L', 'Balapan'),
(18, 'Lucky', 'G18', 'L', 'Strategi'),
(19, 'Ica', 'G19', 'P', 'Tekateki'),
(20, 'Hudaya', 'G20', 'P', 'Arkade');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `player`
--
ALTER TABLE `player`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `player`
--
ALTER TABLE `player`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
