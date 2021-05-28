-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2021 at 12:06 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sekolahku`
--

-- --------------------------------------------------------

--
-- Table structure for table `pendaftar`
--

CREATE TABLE `pendaftar` (
  `NISN` char(15) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `tgl_lahir` varchar(15) NOT NULL,
  `agama` varchar(15) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_telepon` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `sekolah_asal` varchar(100) NOT NULL,
  `tgl_mendaftar` varchar(15) NOT NULL,
  `keterangan` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendaftar`
--

INSERT INTO `pendaftar` (`NISN`, `nama`, `jenis_kelamin`, `tgl_lahir`, `agama`, `alamat`, `no_telepon`, `email`, `sekolah_asal`, `tgl_mendaftar`, `keterangan`) VALUES
('200212080002', 'I Putu Arya Prisma Arinata', 'Laki - Laki', '12-08-2002', 'Hindu', 'Banjar Sanggulan, Kediri, Tabanan', '085737456789', 'aryaprisma@gmail.com', 'Smp Negeri 2 Tabanan', '27-05-2021', 'lolos'),
('200214060001', 'Putu Agus Darma Putra Juniarta', 'Laki - Laki', '14-06-2002', 'Hindu', 'Banjar Tegal Baleran', '085737548643', 'agusdarmaputra23@gmail.com', 'Smp Negeri 3 Tabanan', '27-05-2021', 'lolos');

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `NIP` char(20) NOT NULL,
  `nama_petugas` varchar(100) NOT NULL,
  `alamat_petugas` varchar(100) NOT NULL,
  `telepon_petugas` varchar(15) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(500) NOT NULL,
  `hak_akses` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`NIP`, `nama_petugas`, `alamat_petugas`, `telepon_petugas`, `username`, `password`, `hak_akses`) VALUES
('01', 'Super User', 'Tidak ada data', 'Tidak ada data', 'superuser', '202cb962ac59075b964b07152d234b70', 'superuser'),
('20021406001', 'Putu Agus Darma Putra juniarta', 'Jln Rajawali Gng 5 No 25', '085737548643', 'agus', '202cb962ac59075b964b07152d234b70', 'petugas');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pendaftar`
--
ALTER TABLE `pendaftar`
  ADD PRIMARY KEY (`NISN`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`NIP`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
