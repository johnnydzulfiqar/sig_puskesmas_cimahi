-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Mar 2022 pada 01.42
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sig`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `lokasi`
--

CREATE TABLE `lokasi` (
  `id_lokasi` int(11) NOT NULL,
  `lat` float NOT NULL,
  `ing` float NOT NULL,
  `nama` varchar(50) NOT NULL,
  `des` text NOT NULL,
  `image` varchar(50) NOT NULL,
  `image_text` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `lokasi`
--

INSERT INTO `lokasi` (`id_lokasi`, `lat`, `ing`, `nama`, `des`, `image`, `image_text`) VALUES
(17, -6.8721, 107.542, 'Puskesmas Cimahi Tengah', 'Jl. Pasar Atas No.5, Cimahi, Kec. Cimahi Tengah, Kota Cimahi, Jawa Barat 40525', '1.jpg', 0),
(18, -6.88735, 107.54, 'Puskesmas Cigugur Tengah', 'Jl. Abdul Halim No.199, Karangmekar, Kec. Cimahi Tengah, Kota Cimahi, Jawa Barat 40522', '2.jpg', 0),
(19, -6.87379, 107.519, 'Puskesmas Padasuka', 'Jl. Kb. Manggu 1 No.352, Padasuka, Kec. Cimahi Tengah, Kota Cimahi, Jawa Barat 40526', '3.jpg', 0),
(20, -6.87416, 107.548, 'Puskesmas Cimahi Utara', 'Jl. Jati Serut No.16, Cibabat, Kec. Cimahi Utara, Kota Cimahi, Jawa Barat 40573', '4.jpg', 0),
(21, -6.89285, 107.511, 'Puskesmas Cibeber Kota Cimahi', 'Jl. Puri Fajar Raya No.1, Cibeber, Kec. Cimahi Sel., Kota Cimahi, Jawa Barat 40531', '5.jpg', 0),
(22, -6.89246, 107.56, 'Puskesmas Sukaraja', 'Jl. Mega Raya No.51, Sukaraja, Kec. Cicendo, Kota Bandung, Jawa Barat 40175', '6.png', 0),
(23, -6.861, 107.537, 'Puskesmas Citeureup', 'Jl. Citeureup No.20A, Citeureup, Kec. Cimahi Utara, Kota Cimahi, Jawa Barat 40512', '7.jpg', 0),
(24, -6.90128, 107.527, 'PUSKESMAS Cimahi Selatan', 'Jl. Baros No.16, Utama, Kec. Cimahi Sel., Kota Cimahi, Jawa Barat 40533', '8.jpeg', 0),
(25, -6.88852, 107.561, 'Puskesmas Pasirkaliki Cimahi', 'Jl. Cidamar No.34, Pasirkaliki, Kec. Cimahi Utara, Kota Cimahi, Jawa Barat 40514', '9.jpg', 0),
(26, -6.90048, 107.554, 'Puskesmas Cibeureum', 'Jl. Jend. H. Amir Machmud No.126, Cibeureum, Kec. Cimahi Sel., Kota Cimahi, Jawa Barat 40535', '10.jpg', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `name`, `username`, `password`) VALUES
(1, 'administrator', 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `lokasi`
--
ALTER TABLE `lokasi`
  ADD PRIMARY KEY (`id_lokasi`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `lokasi`
--
ALTER TABLE `lokasi`
  MODIFY `id_lokasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
