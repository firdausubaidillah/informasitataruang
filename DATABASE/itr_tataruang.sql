-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2019 at 04:28 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `itr_tataruang`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(25) NOT NULL,
  `aktif_admin` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `nama`, `email`, `password`, `level`, `aktif_admin`) VALUES
(1, 'Lestari', 'lestari.big@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'ADMIN', 'YA'),
(2, 'Ari Dwi Titisari', 'aridwititisari@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'ADMIN', 'YA');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_berkas`
--

CREATE TABLE `tbl_berkas` (
  `id` int(11) NOT NULL,
  `noktp` varchar(16) NOT NULL,
  `noreg` varchar(25) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `ktp` varchar(100) NOT NULL,
  `kk` varchar(100) NOT NULL,
  `bkl` varchar(100) NOT NULL,
  `pbb` varchar(100) NOT NULL,
  `sppl` varchar(100) NOT NULL,
  `sk` varchar(100) NOT NULL,
  `status_berkas` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_berkas`
--

INSERT INTO `tbl_berkas` (`id`, `noktp`, `noreg`, `nama`, `ktp`, `kk`, `bkl`, `pbb`, `sppl`, `sk`, `status_berkas`) VALUES
(16, '35001122334455', 'TR0001', 'Tsamrotul Fuad', '116.jpg', '24.jpg', '33.jpg', '42.jpg', '52.jpg', '62.jpg', 'Menunggu Persetujuan'),
(17, '35001122334455', 'TR0002', 'Tsamrotul Fuad', '25.jpg', '117.jpg', '53.jpg', '63.jpg', '34.jpg', '43.jpg', 'Menunggu Persetujuan'),
(18, '56', 'TR0003', 'Firdaus', '54.jpg', '', '', '', '', '', 'Menunggu Persetujuan');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_hak_akses`
--

CREATE TABLE `tbl_hak_akses` (
  `level` varchar(50) NOT NULL,
  `datamaster` varchar(50) NOT NULL,
  `pemohon` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_hak_akses`
--

INSERT INTO `tbl_hak_akses` (`level`, `datamaster`, `pemohon`) VALUES
('ADMIN', 'YA', 'YA'),
('PEMOHON', 'TIDAK', 'YA');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pemohon`
--

CREATE TABLE `tbl_pemohon` (
  `id` int(11) NOT NULL,
  `ktp` varchar(16) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jk` varchar(9) NOT NULL,
  `alamat` text NOT NULL,
  `tgl` varchar(100) NOT NULL,
  `pekerjaan` varchar(100) NOT NULL,
  `pemanfaatan` varchar(100) NOT NULL,
  `lokasi` text NOT NULL,
  `notelp` char(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pemohon`
--

INSERT INTO `tbl_pemohon` (`id`, `ktp`, `nama`, `jk`, `alamat`, `tgl`, `pekerjaan`, `pemanfaatan`, `lokasi`, `notelp`) VALUES
(1, '35001122334455', 'Tsamrotul Fuad', 'Laki-laki', 'Jl. Rejoso', '2019-07-04', 'PHL', 'Pemukiman', 'Ngemplak', '082233487223'),
(2, '56', 'Firdaus', 'Laki-laki', 'Jalan Jawa', '2019-07-11', 'PHL', 'Pemukiman', 'Ngemplak', '56'),
(3, '3514146112890002', 'Ari Dwi Titisari', 'Perempuan', 'Perumahan Permata Asri Blok P No. 1-2 RT. 03 RW. 05 Kelurahan Gempeng Kecamatan Bangil Kabupaten Pasuruan', '2019-07-26', 'CPNS', 'Rumah', 'Kepel', '082330051234'),
(4, '33', 'Miranti Ramdhini', 'Perempuan', 'Jl. In aja dulu', '2019-07-24', 'CPNS', 'Kantor', 'Panggungrejo', '33');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pernyataan`
--

CREATE TABLE `tbl_pernyataan` (
  `id` int(11) NOT NULL,
  `noreg` char(10) NOT NULL,
  `nama` varchar(90) NOT NULL,
  `jk` varchar(9) NOT NULL,
  `alamat` text NOT NULL,
  `pekerjaan` varchar(100) NOT NULL,
  `ktp` char(16) NOT NULL,
  `notelp` char(12) NOT NULL,
  `lokasi` text NOT NULL,
  `tgl` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `ktp` char(16) NOT NULL,
  `notelp` char(12) NOT NULL,
  `level` varchar(25) NOT NULL,
  `aktif_user` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `nama`, `ktp`, `notelp`, `level`, `aktif_user`) VALUES
(1, 'Tsamrotul Fuad', '35001122334455', '082233487223', 'PEMOHON', 'YA'),
(2, 'Firdaus', '56', '56', 'PEMOHON', 'YA'),
(3, 'Lestari', '3522206411920001', '082301054108', 'PEMOHON', 'YA'),
(4, 'Ari Dwi Titisari', '3514146112890002', '082330051234', 'PEMOHON', 'YA'),
(5, 'Miranti Ramdhini', '33', '33', 'PEMOHON', 'YA');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_berkas`
--
ALTER TABLE `tbl_berkas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_hak_akses`
--
ALTER TABLE `tbl_hak_akses`
  ADD PRIMARY KEY (`level`);

--
-- Indexes for table `tbl_pemohon`
--
ALTER TABLE `tbl_pemohon`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_pernyataan`
--
ALTER TABLE `tbl_pernyataan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_berkas`
--
ALTER TABLE `tbl_berkas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tbl_pemohon`
--
ALTER TABLE `tbl_pemohon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_pernyataan`
--
ALTER TABLE `tbl_pernyataan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
