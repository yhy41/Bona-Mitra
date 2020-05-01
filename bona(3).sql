-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2020 at 10:25 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bona`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('fairuz', '012'),
('putra', '789'),
('syafiq', '456'),
('yahya', '123');

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE `dokter` (
  `id_dokter` int(11) NOT NULL,
  `nama_dokter` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `kontak` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`id_dokter`, `nama_dokter`, `alamat`, `kontak`) VALUES
(1, 'Dr. Adam', 'Jl. Asri No 22, Bandung', '081234123142'),
(2, 'Dr. Justin', 'Jl. Belanda, Jakarta Selatan', '083412749123'),
(3, 'Dr. Taylor', 'Perum. Mega Utara, Bekasi', '087712391265');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id_feedback` int(11) NOT NULL,
  `nama_tamu` varchar(50) NOT NULL,
  `email_tamu` varchar(50) NOT NULL,
  `kategori` enum('Saran','Kritik','Komentar') NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id_feedback`, `nama_tamu`, `email_tamu`, `kategori`, `isi`) VALUES
(1, 'Budi', 'budi@gmail.com', 'Saran', 'Saya tidak sakit'),
(2, 'Darmawan', 'darmawan@gmail.com', 'Komentar', 'Temennya temen saya sakit'),
(5, 'Joko', 'joko@gmail.com', 'Kritik', 'Kurang berkenan'),
(6, 'Aji', 'aji@gmail.com', 'Saran', 'tambahin tv');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_dokter`
--

CREATE TABLE `jadwal_dokter` (
  `id_jadwal` int(11) NOT NULL,
  `hari` varchar(10) NOT NULL,
  `jam_mulai` time NOT NULL,
  `jam_selesai` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jadwal_dokter`
--

INSERT INTO `jadwal_dokter` (`id_jadwal`, `hari`, `jam_mulai`, `jam_selesai`) VALUES
(5, 'Senin', '09:30:00', '12:30:00'),
(12, 'Selasa', '10:30:00', '12:30:00'),
(13, 'Senin', '13:30:00', '14:30:00'),
(14, 'Rabu', '07:30:00', '10:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `kamar_inap`
--

CREATE TABLE `kamar_inap` (
  `id_kamar` int(11) NOT NULL,
  `nama_kamar` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kamar_inap`
--

INSERT INTO `kamar_inap` (`id_kamar`, `nama_kamar`) VALUES
(1, 'Mawar I'),
(2, 'Mawar II'),
(3, 'Anggrek I'),
(4, 'Anggrek II'),
(6, 'Dahlia III'),
(7, 'Dahlia IV'),
(8, 'Dahlia V');

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `id_pasien` int(11) NOT NULL,
  `nama_pasien` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `kontak` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`id_pasien`, `nama_pasien`, `tanggal_lahir`, `alamat`, `email`, `kontak`) VALUES
(1, 'Hari Ngadiyatmo', '1975-04-14', 'Apartemen Gusti Jaya No 13, Banten', 'ngadiyatmo14@yahoo.co.id', '081728943312'),
(2, 'Clarissa Septiani', '1975-04-15', 'Desa Sukomakmur Blok F1/4A, Tegal', 'clarissaseptiani@gmail.com', '187462293711'),
(6, 'Maman', '2000-03-03', 'Sukoharjo', 'maman@gmail.com', '0882131441'),
(7, 'Supratman', '2003-12-15', 'Tegal', 'supratman@gmail.com', '08736719213'),
(8, 'Gunawan', '1980-07-19', 'Brebes', 'gunawan@gmail.com', '0221731912'),
(10, 'Mamat', '2000-03-03', 'Sulawesi', 'mamat@gmail.com', '0812931712'),
(11, 'Junaidi', '1980-07-20', 'Sukodono', 'junaidi@gmail.com', '0892981721');

-- --------------------------------------------------------

--
-- Table structure for table `pemeriksaan`
--

CREATE TABLE `pemeriksaan` (
  `id_pemeriksaan` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `tanggal` date NOT NULL,
  `id_pasien` int(11) NOT NULL,
  `id_dokter` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pemeriksaan`
--

INSERT INTO `pemeriksaan` (`id_pemeriksaan`, `deskripsi`, `tanggal`, `id_pasien`, `id_dokter`) VALUES
(1, 'Sakit Kepala Sebelah Kanan', '2020-04-07', 1, 2),
(2, 'Perut Kembung Karena Sering Rebahan', '2020-04-08', 2, 3),
(5, 'Demam Berair', '2019-07-02', 11, 2),
(6, 'Sakit mata sebelah', '2012-12-12', 11, 2);

-- --------------------------------------------------------

--
-- Table structure for table `perawat`
--

CREATE TABLE `perawat` (
  `id_perawat` int(11) NOT NULL,
  `nama_perawat` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `kontak` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `perawat`
--

INSERT INTO `perawat` (`id_perawat`, `nama_perawat`, `alamat`, `kontak`) VALUES
(1, 'Asri', 'Permai', 99972913),
(4, 'Aprilia', 'Sukoarjo', 812931791);

-- --------------------------------------------------------

--
-- Table structure for table `plotting_dokter`
--

CREATE TABLE `plotting_dokter` (
  `id_plotting` int(11) NOT NULL,
  `id_jadwal` int(11) NOT NULL,
  `id_dokter` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `plotting_dokter`
--

INSERT INTO `plotting_dokter` (`id_plotting`, `id_jadwal`, `id_dokter`) VALUES
(1, 5, 1),
(3, 12, 2),
(15, 13, 3),
(27, 13, 1);

-- --------------------------------------------------------

--
-- Table structure for table `rawat_inap`
--

CREATE TABLE `rawat_inap` (
  `id_rawat_inap` int(11) NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `tanggal_keluar` date NOT NULL,
  `id_pemeriksaan` int(11) NOT NULL,
  `id_kamar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rawat_inap`
--

INSERT INTO `rawat_inap` (`id_rawat_inap`, `tanggal_masuk`, `tanggal_keluar`, `id_pemeriksaan`, `id_kamar`) VALUES
(1, '2020-04-09', '2020-04-10', 2, 1),
(3, '2000-02-22', '2000-02-25', 1, 3),
(4, '2009-09-09', '2009-09-12', 5, 8);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id_dokter`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id_feedback`);

--
-- Indexes for table `jadwal_dokter`
--
ALTER TABLE `jadwal_dokter`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indexes for table `kamar_inap`
--
ALTER TABLE `kamar_inap`
  ADD PRIMARY KEY (`id_kamar`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indexes for table `pemeriksaan`
--
ALTER TABLE `pemeriksaan`
  ADD PRIMARY KEY (`id_pemeriksaan`),
  ADD KEY `idx_pasien` (`id_pasien`) USING BTREE,
  ADD KEY `idx_dokter` (`id_dokter`) USING BTREE;

--
-- Indexes for table `perawat`
--
ALTER TABLE `perawat`
  ADD PRIMARY KEY (`id_perawat`);

--
-- Indexes for table `plotting_dokter`
--
ALTER TABLE `plotting_dokter`
  ADD PRIMARY KEY (`id_plotting`,`id_jadwal`,`id_dokter`),
  ADD KEY `idx_dokter` (`id_dokter`),
  ADD KEY `idx_jadwal` (`id_jadwal`) USING BTREE;

--
-- Indexes for table `rawat_inap`
--
ALTER TABLE `rawat_inap`
  ADD PRIMARY KEY (`id_rawat_inap`),
  ADD UNIQUE KEY `idx_pemeriksaan` (`id_pemeriksaan`) USING BTREE,
  ADD KEY `idx_kamar` (`id_kamar`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dokter`
--
ALTER TABLE `dokter`
  MODIFY `id_dokter` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id_feedback` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `jadwal_dokter`
--
ALTER TABLE `jadwal_dokter`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `kamar_inap`
--
ALTER TABLE `kamar_inap`
  MODIFY `id_kamar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id_pasien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `pemeriksaan`
--
ALTER TABLE `pemeriksaan`
  MODIFY `id_pemeriksaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `perawat`
--
ALTER TABLE `perawat`
  MODIFY `id_perawat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `plotting_dokter`
--
ALTER TABLE `plotting_dokter`
  MODIFY `id_plotting` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `rawat_inap`
--
ALTER TABLE `rawat_inap`
  MODIFY `id_rawat_inap` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pemeriksaan`
--
ALTER TABLE `pemeriksaan`
  ADD CONSTRAINT `id_dokter` FOREIGN KEY (`id_dokter`) REFERENCES `dokter` (`id_dokter`),
  ADD CONSTRAINT `id_pasien` FOREIGN KEY (`id_pasien`) REFERENCES `pasien` (`id_pasien`);

--
-- Constraints for table `plotting_dokter`
--
ALTER TABLE `plotting_dokter`
  ADD CONSTRAINT `fk_id_dokter` FOREIGN KEY (`id_dokter`) REFERENCES `dokter` (`id_dokter`),
  ADD CONSTRAINT `fk_id_jadwal` FOREIGN KEY (`id_jadwal`) REFERENCES `jadwal_dokter` (`id_jadwal`);

--
-- Constraints for table `rawat_inap`
--
ALTER TABLE `rawat_inap`
  ADD CONSTRAINT `id_kamar` FOREIGN KEY (`id_kamar`) REFERENCES `kamar_inap` (`id_kamar`),
  ADD CONSTRAINT `id_pemeriksaan` FOREIGN KEY (`id_pemeriksaan`) REFERENCES `pemeriksaan` (`id_pemeriksaan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
