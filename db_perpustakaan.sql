-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 19, 2018 at 11:37 AM
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
-- Database: `db_perpustakaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `id` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `institusi` varchar(50) NOT NULL,
  `fakultas` varchar(50) NOT NULL,
  `tipe` varchar(50) NOT NULL,
  `jkelamin` varchar(50) NOT NULL,
  `tempatlahir` varchar(50) NOT NULL,
  `tanggallahir` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `telepon` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`id`, `nama`, `institusi`, `fakultas`, `tipe`, `jkelamin`, `tempatlahir`, `tanggallahir`, `alamat`, `telepon`, `email`) VALUES
('A01', 'Ucok', 'Kemerdekaan', 'Sastra', 'VIP', 'Laki - laki', 'Medan', '11/11/21998', 'Medan', '0812387123718', 'ucok@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `kode` varchar(50) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `pengarang` varchar(50) NOT NULL,
  `penerbit` varchar(50) NOT NULL,
  `tempatterbit` varchar(50) NOT NULL,
  `tahun` varchar(50) NOT NULL,
  `nomor` varchar(50) NOT NULL,
  `bahasa` varchar(50) NOT NULL,
  `topik` varchar(50) NOT NULL,
  `deskripsi` varchar(50) NOT NULL,
  `stok` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`kode`, `judul`, `pengarang`, `penerbit`, `tempatterbit`, `tahun`, `nomor`, `bahasa`, `topik`, `deskripsi`, `stok`) VALUES
('BK01', 'Belajar CSS', 'Sirjhon', 'Serlangga', 'Medan', '2018', '0023', 'Indonesia', 'Komputer', 'Long', 15),
('BK02', 'Sistem Pendukung Keputusan', 'Thomas', 'Erlangga', 'Jakarta', '2017', '12', 'Indonesia', 'SPK', 'Long', 10),
('BK03', 'WEB DESIGN', 'NN', 'NN', 'NN', 'NN', 'NN', 'NN', 'NN', 'N', 12);

-- --------------------------------------------------------

--
-- Table structure for table `pinjam`
--

CREATE TABLE `pinjam` (
  `kode` varchar(10) NOT NULL,
  `id` varchar(50) NOT NULL,
  `Nama` varchar(100) NOT NULL,
  `fakultas` varchar(50) NOT NULL,
  `kodebuku` varchar(50) NOT NULL,
  `namabuku` varchar(100) NOT NULL,
  `jumlah` int(3) NOT NULL,
  `tanggalpinjam` varchar(50) NOT NULL,
  `tanggalkembali` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`) VALUES
('1', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `pinjam`
--
ALTER TABLE `pinjam`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
