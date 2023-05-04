-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Nov 2022 pada 02.17
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
-- Database: `tekstil`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `kategori_barang` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_barang`
--

INSERT INTO `tb_barang` (`id_barang`, `nama_barang`, `kategori_barang`) VALUES
(1, 'ember kecil', 'alat'),
(2, 'setrika', 'alat'),
(3, 'pipet 1-10mili', 'alat'),
(4, 'pengaduk', 'alat'),
(5, 'gelas ukur 100mili', 'alat'),
(6, 'baker gelas 80-1000mili', 'alat'),
(7, 'elenmayer 250mili', 'alat'),
(8, 'termometer 100derajat', 'alat'),
(9, 'tabung reaksi', 'alat'),
(10, 'neraca patangan', 'alat'),
(11, 'labu ukur 1000mili', 'alat'),
(12, 'head layer', 'alat'),
(13, 'hekter gun', 'alat'),
(14, 'mixer', 'alat'),
(15, 'kompor listrik', 'alat'),
(16, 'camping', 'alat'),
(17, 'cetakan tembaga cat', 'alat'),
(18, 'mug plastik', 'alat'),
(19, 'scren 20x30 30-100', 'alat'),
(20, 'rakkel 20x30 50-110', 'alat'),
(21, 'timbangan digital', 'alat'),
(22, 'semprotan pembersih scren', 'alat'),
(23, 'terminal sambungan', 'alat'),
(24, 'laptop', 'alat'),
(25, 'mug stanles', 'alat'),
(26, 'formal dehyde', 'zat kimia'),
(27, 'Hydrochloric acid', 'zat kimia'),
(28, 'ammonia solution', 'zat kimia'),
(29, 'acetic acid', 'zat kimia'),
(30, 'nitric acid', 'zat kimia'),
(31, 'sulfuric acid', 'zat kimia'),
(32, 'spirtuos (blue alcohol)', 'zat kimia'),
(33, 'acid formic', 'zat kimia'),
(34, 'vaselin putih', 'zat kimia'),
(35, 'potassium lodide', 'zat kimia'),
(36, 'teepol ch 53', 'zat kimia'),
(37, 'natrium hydroxyd cair', 'zat kimia'),
(38, 'glycerin ph', 'zat kimia'),
(39, 'acid acetic glasial', 'zat kimia'),
(40, 'hydrogen peroxide 50%', 'zat kimia'),
(41, 'resin tolak air', 'zat kimia'),
(42, 'alcohol 96%', 'zat kimia'),
(43, 'hydrogen peroxide 20%', 'zat kimia'),
(44, 'ethanol 70%', 'zat kimia'),
(45, 'ammonia 10%', 'zat kimia'),
(46, 'lar phenophalein', 'zat kimia'),
(47, 'sodium thiosulfate pentahydrate', 'zat kimia'),
(48, 'natrium hypochlorid', 'zat kimia'),
(49, 'gandapura', 'zat kimia'),
(50, 'acid lactic', 'zat kimia'),
(51, 'formal dehyde', 'zat kimia');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
