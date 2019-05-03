-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 03, 2019 at 08:05 AM
-- Server version: 10.3.14-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id3244448_asik`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel_nilai`
--

CREATE TABLE `tabel_nilai` (
  `id` int(11) NOT NULL,
  `no_ujian` varchar(50) NOT NULL,
  `bi` double NOT NULL,
  `mat` double NOT NULL,
  `bing` double NOT NULL,
  `kejuruan` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_nilai`
--

INSERT INTO `tabel_nilai` (`id`, `no_ujian`, `bi`, `mat`, `bing`, `kejuruan`) VALUES
(1, '1000-1', 8, 8, 8, 8),
(2, '1000-2', 9, 8, 9, 7),
(3, '1000-3', 7, 7, 7, 7);

-- --------------------------------------------------------

--
-- Table structure for table `tabel_pesan`
--

CREATE TABLE `tabel_pesan` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `pesan` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `notelp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_pesan`
--

INSERT INTO `tabel_pesan` (`id`, `nama`, `pesan`, `email`, `notelp`) VALUES
(1, 'Alfan Firmansyah Putra', 'Saya mau tanya...', 'alfanfputra@gmail.com', '087162152121'),
(3, 'Fahmy Ruszally', 'Min mau tanya untuk pengambilan skhun itu tanggal berapa? Terimakasih', 'ferdyanto_adhi@yahoo.com', '098765431212'),
(4, 'Hafad', 'Hai Admin :)', 'hafad@gmail.com', '09712653253'),
(5, 'Dika', 'Halo saya mau bertanya', 'dika@gmail.com', '08999765433');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_settanggal`
--

CREATE TABLE `tabel_settanggal` (
  `id` int(11) NOT NULL,
  `settanggal` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_settanggal`
--

INSERT INTO `tabel_settanggal` (`id`, `settanggal`) VALUES
(10, '2018-05-31 01:00');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_siswa`
--

CREATE TABLE `tabel_siswa` (
  `no_ujian` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jurusan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_siswa`
--

INSERT INTO `tabel_siswa` (`no_ujian`, `nama`, `jurusan`) VALUES
('1000-1', 'fahmy', 'tkj'),
('1000-2', 'alfan', 'rpl'),
('1000-3', 'dika', 'mm');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_users`
--

CREATE TABLE `tabel_users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_users`
--

INSERT INTO `tabel_users` (`id`, `username`, `password`) VALUES
(2, 'asd', '7815696ecbf1c96e6894b779456d330e'),
(3, 'admin', '21232f297a57a5a743894a0e4a801fc3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_nilai`
--
ALTER TABLE `tabel_nilai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabel_pesan`
--
ALTER TABLE `tabel_pesan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabel_settanggal`
--
ALTER TABLE `tabel_settanggal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabel_siswa`
--
ALTER TABLE `tabel_siswa`
  ADD PRIMARY KEY (`no_ujian`);

--
-- Indexes for table `tabel_users`
--
ALTER TABLE `tabel_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_nilai`
--
ALTER TABLE `tabel_nilai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tabel_pesan`
--
ALTER TABLE `tabel_pesan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tabel_settanggal`
--
ALTER TABLE `tabel_settanggal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tabel_users`
--
ALTER TABLE `tabel_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
