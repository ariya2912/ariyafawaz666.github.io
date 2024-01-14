-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Jan 2024 pada 21.10
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbpembelianbarang`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbpembelianbarang`
--

CREATE TABLE `tbpembelianbarang` (
  `nofaktur` int(5) NOT NULL,
  `namapembeli` varchar(15) NOT NULL,
  `alamatpembeli` varchar(15) NOT NULL,
  `namabarang` varchar(10) NOT NULL,
  `jumlahbeli` int(11) NOT NULL,
  `diskon` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbpembelianbarang`
--

INSERT INTO `tbpembelianbarang` (`nofaktur`, `namapembeli`, `alamatpembeli`, `namabarang`, `jumlahbeli`, `diskon`) VALUES
(1222, 'Silpia', 'Jampang', 'Mesin Cuci', 7, 60),
(1232, 'dimas', 'baros', 'Kulkas', 4, 8),
(1233, 'Ilyasa', 'Sukaraja', 'TV', 1, 2),
(1234, 'Ariya Fawaz', 'Cisaat', 'TV', 2, 5),
(2121, 'Ariya Fawaz', 'Cisaat', 'TV', 2, 5),
(3212, 'Aprilia', 'Sukaraja', 'Kulkas', 4, 7);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbpembelianbarang`
--
ALTER TABLE `tbpembelianbarang`
  ADD PRIMARY KEY (`nofaktur`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbpembelianbarang`
--
ALTER TABLE `tbpembelianbarang`
  MODIFY `nofaktur` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6771;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
