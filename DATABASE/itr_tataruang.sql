-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 01, 2019 at 03:09 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.19

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
(2, 'Ari Dwi Titisari', 'aridwititisari@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'ADMIN', 'YA'),
(3, 'Yuniar Adeline Noer A', 'yuniaradeline@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'ADMIN', 'YA');

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
  `tgl_persetujuan` date DEFAULT NULL,
  `petugas_survei` varchar(50) DEFAULT NULL,
  `tgl_survei` varchar(50) DEFAULT NULL,
  `penganalisa` varchar(50) DEFAULT NULL,
  `tgl_analisa` varchar(50) DEFAULT NULL,
  `nama_pengambil` varchar(50) DEFAULT NULL,
  `tgl_ambil` varchar(50) DEFAULT NULL,
  `titik_koordinat1x` varchar(100) DEFAULT NULL,
  `titik_koordinat1y` varchar(100) DEFAULT NULL,
  `titik_koordinat2x` varchar(100) DEFAULT NULL,
  `titik_koordinat2y` varchar(100) DEFAULT NULL,
  `titik_koordinat3x` varchar(100) DEFAULT NULL,
  `titik_koordinat3y` varchar(100) DEFAULT NULL,
  `titik_koordinat4x` varchar(100) DEFAULT NULL,
  `titik_koordinat4y` varchar(100) DEFAULT NULL,
  `foto_lokasi` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_berkas`
--

INSERT INTO `tbl_berkas` (`id`, `noktp`, `noreg`, `tgl`, `nama`, `ktp`, `kk`, `bkl`, `pbb`, `sppl`, `sk`, `status_berkas`, `tgl_persetujuan`, `petugas_survei`, `tgl_survei`, `penganalisa`, `tgl_analisa`, `nama_pengambil`, `tgl_ambil`, `titik_koordinat1x`, `titik_koordinat1y`, `titik_koordinat2x`, `titik_koordinat2y`, `titik_koordinat3x`, `titik_koordinat3y`, `titik_koordinat4x`, `titik_koordinat4y`, `foto_lokasi`) VALUES
(1, '35001122334455', 'TR0001', '2019-08-05', 'Tsamrotul Fuad', '14.jpg', '', '', '', '', '', 'Sudah Diambil', '2019-08-05', 'Wira Kusuma Panggabaya', '2019-08-02', 'Lestari', '2019-08-01', 'Tsamrotul Fuad', '2019-08-05', '-7.6329825', '112.9168183', '', '', '', '', '', '', '3.jpg');

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
(1, '1212', 'Yuniar Adeline Noor A', '', 'Jalan Pahlawan No 22 A Pekuncen', 'CPNS', 'Pemukiman', 'Bugul', '12345'),
(2, '1212', 'Adel', 'Perempuan', 'Jl. Pahlawan No. 22 A Pekuncen', 'PHL', 'Pemukiman', 'JL. NUSA INDAH NO. 05 RT.06/RW.07 KEL. SUKABUMI KEC. MAYANGAN, PROBOLINGGO', '123456'),
(3, '12345', 'SAHAT MANALU', 'Laki-laki', 'JL. NUSA INDAH NO. 05 RT.06/RW.07 KEL. SUKABUMI KEC. MAYANGAN, PROBOLINGGO', 'KARYAWAN SWASTA', 'Pemukiman', 'JL. KH HASYIM ASHARI, PASURUAN', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_perubahan`
--

CREATE TABLE `tbl_perubahan` (
  `id_perubahan` int(11) NOT NULL,
  `noktp` varchar(20) NOT NULL,
  `lokasi` varchar(100) NOT NULL,
  `tgl_pengajuan` varchar(15) NOT NULL,
  `kelurahan` varchar(100) NOT NULL,
  `lahandiajukan` varchar(100) NOT NULL,
  `lahansesuai` varchar(100) NOT NULL,
  `tujuanlahan` varchar(100) NOT NULL,
  `statustanah` varchar(100) NOT NULL,
  `btsutara` varchar(255) NOT NULL,
  `btsselatan` varchar(255) NOT NULL,
  `btstimur` varchar(255) NOT NULL,
  `btsbarat` varchar(255) NOT NULL,
  `status` char(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_perubahan`
--

INSERT INTO `tbl_perubahan` (`id_perubahan`, `noktp`, `lokasi`, `tgl_pengajuan`, `kelurahan`, `lahandiajukan`, `lahansesuai`, `tujuanlahan`, `statustanah`, `btsutara`, `btsselatan`, `btstimur`, `btsbarat`, `status`) VALUES
(1, '12345', 'JL. NUSA INDAH NO. 05 RT.06/RW.07 KEL. SUKABUMI KEC. MAYANGAN, PROBOLINGGO', '2018-01-03', 'Purutrejo/Purworejo', 'Perkantoran & Pergudangan', 'PERDAGANGAN, JASA & PEMUKIMAN\r\n', 'PERKANTORAN & PERGUDANGAN', 'SHGB PT DJARUM', 'KANTOR PKPRI', 'Jl. KH HASYIM ASARI', 'WARKOP UGD 2', 'SAWAH P. UNTUNG', 'Berkas Diterima');

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
(2, 'Adel', '1212', '123456', 'PEMOHON', 'YA'),
(3, 'Yuniar Adeline Noor A', '1212', '12345', 'PEMOHON', 'YA'),
(4, 'SAHAT MANALU', '12345', '12345', 'PEMOHON', 'YA');

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
-- Indexes for table `tbl_perubahan`
--
ALTER TABLE `tbl_perubahan`
  ADD PRIMARY KEY (`id_perubahan`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_berkas`
--
ALTER TABLE `tbl_berkas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_pemohon`
--
ALTER TABLE `tbl_pemohon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_perubahan`
--
ALTER TABLE `tbl_perubahan`
  MODIFY `id_perubahan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
