-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2019 at 04:24 AM
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
  `tgl` varchar(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `ktp` varchar(100) NOT NULL,
  `kk` varchar(100) NOT NULL,
  `bkl` varchar(100) NOT NULL,
  `pbb` varchar(100) NOT NULL,
  `sppl` varchar(100) NOT NULL,
  `sk` varchar(100) NOT NULL,
  `status_berkas` varchar(25) NOT NULL,
  `tgl_persetujuan` date NOT NULL,
  `petugas_survei` varchar(50) NOT NULL,
  `tgl_survei` varchar(50) NOT NULL,
  `penganalisa` varchar(50) NOT NULL,
  `tgl_analisa` varchar(50) NOT NULL,
  `nama_pengambil` varchar(50) NOT NULL,
  `tgl_ambil` varchar(50) NOT NULL,
  `titik_koordinat1x` varchar(100) DEFAULT NULL,
  `titik_koordinat1y` varchar(100) DEFAULT NULL,
  `titik_koordinat2x` varchar(100) DEFAULT NULL,
  `titik_koordinat2y` varchar(100) DEFAULT NULL,
  `titik_koordinat3x` varchar(100) DEFAULT NULL,
  `titik_koordinat3y` varchar(100) DEFAULT NULL,
  `titik_koordinat4x` varchar(100) DEFAULT NULL,
  `titik_koordinat4y` varchar(100) DEFAULT NULL,
  `foto_lokasi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_berkas`
--

INSERT INTO `tbl_berkas` (`id`, `noktp`, `noreg`, `tgl`, `nama`, `ktp`, `kk`, `bkl`, `pbb`, `sppl`, `sk`, `status_berkas`, `tgl_persetujuan`, `petugas_survei`, `tgl_survei`, `penganalisa`, `tgl_analisa`, `nama_pengambil`, `tgl_ambil`, `titik_koordinat1x`, `titik_koordinat1y`, `titik_koordinat2x`, `titik_koordinat2y`, `titik_koordinat3x`, `titik_koordinat3y`, `titik_koordinat4x`, `titik_koordinat4y`, `foto_lokasi`) VALUES
(2, '35001122334455', 'TR0001', '2019-07-30', 'Tsamrotul Fuad', '', '', '', '', '', '', 'Sedang Disurvei', '2019-08-04', 'Wira Kusuma Panggabaya', '2019-08-01', 'Lestari', '2019-08-06', '', '', '-7.6329825', '112.9168183', '', '', '', '', '', '', '2019_brosur-a_1.jpg'),
(3, '3522206411920001', 'TR0002', '2019-08-02', 'Lestari', '', '', '', '', '', '', 'Sudah Diambil', '2019-08-02', 'Firdaus Ubaidillah', '2019-08-01', 'Lestari', '2019-08-02', 'lestari', '2019-08-02', '', '', '', '', '', '', '', '', '');

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
  `pekerjaan` varchar(100) NOT NULL,
  `pemanfaatan` varchar(100) NOT NULL,
  `lokasi` text NOT NULL,
  `notelp` char(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pemohon`
--

INSERT INTO `tbl_pemohon` (`id`, `ktp`, `nama`, `jk`, `alamat`, `pekerjaan`, `pemanfaatan`, `lokasi`, `notelp`) VALUES
(1, '35001122334455', 'Tsamrotul Fuad', 'Laki-laki', 'Jl. Sarirejo RT02/RW01  Arjosari Rejoso Kab. Pasuruan ', 'PHL', 'Kantor', 'Mandaran', '082233487223'),
(2, '3522206411920001', 'Lestari', 'Perempuan', 'RT 4 RW 4 KASIMAN', 'CPNS', 'Rumah tinggal', 'Pesona Candi', '082301054108'),
(10, '56', 'Firdaus', 'Laki-laki', 'Jalan Jawa', 'PHL', 'Pemukiman', 'Jambangan', '56');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_petugassurvei`
--

CREATE TABLE `tbl_petugassurvei` (
  `id` int(11) NOT NULL,
  `nama_petugassurvei` varchar(100) NOT NULL,
  `jabatan` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_petugassurvei`
--

INSERT INTO `tbl_petugassurvei` (`id`, `nama_petugassurvei`, `jabatan`) VALUES
(1, 'Wira Kusuma Panggabaya', 'Surveyor'),
(2, 'Farhan Aditiya NF', 'Surveyor'),
(3, 'Firdaus Ubaidillah', 'Surveyor'),
(4, 'Wildhan Raga Pradigdo, ST', 'Surveyor'),
(5, 'Choirul Anam', 'Surveyor'),
(6, 'Tsamrotul Fuad', 'Surveyor');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_timeline`
--

CREATE TABLE `tbl_timeline` (
  `id_timeline` int(11) NOT NULL,
  `waktu` varchar(25) NOT NULL,
  `user` varchar(50) NOT NULL,
  `keterangan` varchar(255) NOT NULL
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
(3, 'Lestari', '3522206411920001', '082301054108', 'PEMOHON', 'YA');

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
-- Indexes for table `tbl_petugassurvei`
--
ALTER TABLE `tbl_petugassurvei`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_timeline`
--
ALTER TABLE `tbl_timeline`
  ADD PRIMARY KEY (`id_timeline`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_pemohon`
--
ALTER TABLE `tbl_pemohon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_petugassurvei`
--
ALTER TABLE `tbl_petugassurvei`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_timeline`
--
ALTER TABLE `tbl_timeline`
  MODIFY `id_timeline` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
