-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2022 at 05:16 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

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
-- Table structure for table `penyimpanan`
--

CREATE TABLE `penyimpanan` (
  `IdPenyimpanan` int(10) NOT NULL,
  `TanggalPenyimpanan` int(8) NOT NULL,
  `IdBarang` int(11) NOT NULL,
  `JumlahSimpan` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `kategori_barang` varchar(50) NOT NULL,
  `stok` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_barang`
--

INSERT INTO `tb_barang` (`id_barang`, `nama_barang`, `kategori_barang`, `stok`) VALUES
(1, 'ember kecil', 'alat', 18),
(2, 'setrika', 'alat', 40),
(3, 'pipet 1-10mili', 'alat', 1),
(4, 'pengaduk', 'alat', 13),
(5, 'gelas ukur 100mili', 'alat', 6),
(6, 'baker gelas 80-1000mili', 'alat', 23),
(7, 'elenmayer 250mili', 'alat', 69),
(8, 'termometer 100derajat', 'alat', 17),
(9, 'tabung reaksi', 'alat', 11),
(10, 'neraca patangan', 'alat', 61),
(11, 'labu ukur 1000mili', 'alat', 12),
(12, 'head layer', 'alat', 21),
(13, 'hekter gun', 'alat', 46),
(14, 'mixer', 'alat', 26),
(15, 'kompor listrik', 'alat', 8),
(16, 'camping', 'alat', 14),
(17, 'cetakan tembaga cat', 'alat', 0),
(18, 'mug plastik', 'alat', 0),
(19, 'scren 20x30 30-100', 'alat', 0),
(20, 'rakkel 20x30 50-110', 'alat', 7),
(21, 'timbangan digital', 'alat', 0),
(22, 'semprotan pembersih scren', 'alat', 0),
(23, 'terminal sambungan', 'alat', 0),
(24, 'laptop', 'alat', 0),
(25, 'mug stanles', 'alat', 0),
(26, 'formal dehyde', 'zat kimia', 33),
(27, 'Hydrochloric acid', 'zat kimia', 0),
(28, 'ammonia solution', 'zat kimia', 19),
(29, 'acetic acid', 'zat kimia', 0),
(30, 'nitric acid', 'zat kimia', 0),
(31, 'sulfuric acid', 'zat kimia', 51),
(32, 'spirtuos (blue alcohol)', 'zat kimia', 0),
(33, 'acid formic', 'zat kimia', 6),
(34, 'vaselin putih', 'zat kimia', 0),
(35, 'potassium lodide', 'zat kimia', 16),
(36, 'teepol ch 53', 'zat kimia', 0),
(37, 'natrium hydroxyd cair', 'zat kimia', 0),
(38, 'glycerin ph', 'zat kimia', 0),
(39, 'acid acetic glasial', 'zat kimia', 0),
(40, 'hydrogen peroxide 50%', 'zat kimia', 0),
(41, 'resin tolak air', 'zat kimia', 0),
(42, 'alcohol 96%', 'zat kimia', 0),
(43, 'hydrogen peroxide 20%', 'zat kimia', 12),
(44, 'ethanol 70%', 'zat kimia', 0),
(45, 'ammonia 10%', 'zat kimia', 0),
(46, 'lar phenophalein', 'zat kimia', 0),
(47, 'sodium thiosulfate pentahydrate', 'zat kimia', 0),
(48, 'natrium hypochlorid', 'zat kimia', 0),
(49, 'gandapura', 'zat kimia', 0),
(50, 'acid lactic', 'zat kimia', 50),
(51, 'formal dehyde', 'zat kimia', 0),
(55, 'jhgjhg', 'males', 67),
(59, 'ember osuidfoi', 'alat', 34),
(61, 'asam sulfat', 'zat kimia', 10);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `KodePinjam` int(5) NOT NULL,
  `IdBarang` int(11) NOT NULL,
  `KodeKategori` varchar(10) NOT NULL,
  `NamaBarang` varchar(50) NOT NULL,
  `JumlahBarang` int(7) NOT NULL,
  `NamaPeminjam` varchar(25) NOT NULL,
  `WaktuPinjam` varchar(15) NOT NULL,
  `WaktuKembali` varchar(15) NOT NULL,
  `Keterangan` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`KodePinjam`, `IdBarang`, `KodeKategori`, `NamaBarang`, `JumlahBarang`, `NamaPeminjam`, `WaktuPinjam`, `WaktuKembali`, `Keterangan`) VALUES
(3, 332, 'alat', 'jankin', 7, '', '0000-00-00', '0000-00-00', 'dipinjam'),
(4445, 40, 'zat kimia', 'hydrogen peroxide 50%', 5, 'hingke', '2022-11-30', '2022-12-10', 'sedang dipinjam'),
(5199, 15, 'alat', 'kompor listrik', 6, 'jhgu', '2022-11-30', '2022-12-10', 'sedang dipinjam'),
(5218, 0, 'alat', 'camping', 6, 'khkjhjk', '2022-11-30', '2022-12-22', 'sedang dipinjam'),
(6071, 0, 'alat', 'ember kecil', 3, 'nn', '2022-11-30', '2022-12-10', 'sedang dipinjam'),
(6861, 0, 'alat', 'cetakan tembaga cat', 53, 'kfdt', '2022-11-30', '2023-04-18', 'sedang dipinjam'),
(7013, 0, 'Pilih Kate', 'Pilih nama barang', 0, '', '0000-00-00', '0000-00-00', ''),
(7272, 4, 'alat', 'pengaduk', 7, 'judaji selip', '2022-11-30', '2023-03-07', 'sedang dipinjam'),
(7308, 39, 'zat kimia', 'acid acetic glasial', 8, 'kim', '2022-12-01', '2022-12-31', 'sedang dipinjam'),
(8550, 50, 'zat kimia', 'acid lactic', 235, 'pinkman', '2022-11-30', '2022-12-10', 'sedang dipinjam'),
(8633, 0, 'alat', 'mug plastik', 88, 'njij', '2022-11-30', '2022-12-10', 'sedang dipinjam'),
(9306, 0, '', '', 3, 'nn', '2022-11-30', '2022-12-10', 'sedang dipinjam');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `IdUser` int(11) NOT NULL,
  `Username` varchar(15) NOT NULL,
  `Password` varchar(15) NOT NULL,
  `Role` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`IdUser`, `Username`, `Password`, `Role`) VALUES
(1, 'Admin1', 'user01', 'admin'),
(10, 'jake', 'kkkk', 'user'),
(11, 'Naufal Avrilzal', 'smkbisa', 'user'),
(13, 'satu', '5433', 'user'),
(15, 'uytu', '4332', 'user'),
(16, 'king mi', 'fuhrer', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `penyimpanan`
--
ALTER TABLE `penyimpanan`
  ADD PRIMARY KEY (`IdPenyimpanan`);

--
-- Indexes for table `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`KodePinjam`),
  ADD KEY `IdBarang` (`IdBarang`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`IdUser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `penyimpanan`
--
ALTER TABLE `penyimpanan`
  MODIFY `IdPenyimpanan` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `KodePinjam` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9307;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `IdUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
