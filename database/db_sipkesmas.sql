-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2018 at 11:03 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sipkesmas`
--

-- --------------------------------------------------------

--
-- Table structure for table `hak_akses`
--

CREATE TABLE `hak_akses` (
  `id_hak_akses` int(5) NOT NULL,
  `nama_hak_akses` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hak_akses`
--

INSERT INTO `hak_akses` (`id_hak_akses`, `nama_hak_akses`) VALUES
(1, 'admin'),
(2, 'pemanggil_antrian'),
(3, 'kepala'),
(4, 'karyawan');

-- --------------------------------------------------------

--
-- Table structure for table `kritik_saran`
--

CREATE TABLE `kritik_saran` (
  `id_pengaduan` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `isi_aduan` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kritik_saran`
--

INSERT INTO `kritik_saran` (`id_pengaduan`, `nama`, `email`, `isi_aduan`) VALUES
(30, 'Roy Andri', 'royandri502@gmail.com', 'Saya kemaren berobat tidak diterima'),
(31, 'Amin', 'amin@gmail.com', 'Kenapa saya tidak bisa mendaftar?');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id_login` int(5) UNSIGNED NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` char(32) DEFAULT NULL,
  `posisi` int(5) NOT NULL,
  `pertanyaan` varchar(100) NOT NULL,
  `jawaban` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id_login`, `username`, `password`, `posisi`, `pertanyaan`, `jawaban`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 1, 'Siapa nama adik saya?', 'Helen'),
(3, 'karyawan', '9e014682c94e0f2cc834bf7348bda428', 4, 'Tanggal berapa ulang tahun saya?', '140997'),
(4, 'kepala', '870f669e4bbbfa8a6fde65549826d1c4', 3, 'Siapa nama anak pertama saya?', 'Andi'),
(12, 'andi', '21232f297a57a5a743894a0e4a801fc3', 1, 'Dimana saya dilahirkan?', 'Yogyakarta'),
(14, 'omar', '21232f297a57a5a743894a0e4a801fc3', 1, 'Apa nama hewan peliharaan saya?', 'kiti'),
(15, 'antrian', 'de42e11c4061dfe433eaa4af87a1f281', 2, 'Apa nama makanan kesukaan saya?', 'Bakso');

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `no_rm` varchar(20) NOT NULL,
  `tanggal_daftar` date NOT NULL,
  `nama_pasien` varchar(100) NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `nama_kk` varchar(100) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `kelurahan` varchar(50) NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `kabupaten` varchar(50) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `agama` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`no_rm`, `tanggal_daftar`, `nama_pasien`, `jenis_kelamin`, `nama_kk`, `pekerjaan`, `alamat`, `kelurahan`, `kecamatan`, `kabupaten`, `tempat_lahir`, `tanggal_lahir`, `agama`) VALUES
('0', '0000-00-00', 'null', 'L', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '0000-00-00', 'null'),
('RM000001', '2018-06-22', 'Roy Andri', 'L', 'Andri', 'Mahasiswa', 'Kronggahan 2', 'Kronggahan', 'Gamping', 'Sleman', 'Tangerang', '1997-09-14', 'Katholik'),
('RM000002', '2018-06-22', 'Agung', 'L', 'Andy', 'Mahasiswa', 'Temanggung', 'Temangguna', 'Temangguna', 'Temanggung', 'Temanggung', '1997-06-10', 'Islam'),
('RM000003', '2018-06-22', 'Ferry', 'L', 'Katulistianto', 'Mahasiswa', 'Kalimantan', 'Kalimantan', 'Kalimantan', 'Kalimantan', 'Kalimantan', '1995-01-12', 'Islam'),
('RM000004', '2018-06-22', 'Dian', 'L', 'Suci', 'Mahasiswa', 'Kebumen', 'Kebumen', 'Kebumen', 'Kebumen', 'Kebumen', '1996-06-19', 'Islam'),
('RM000005', '2018-06-22', 'Jiku', 'L', 'Amin', 'Mahasiswa', 'Pelawan', 'Pelawan', 'Parittiga', 'Bangka Barat', 'Pelawan', '2018-06-22', 'Kristen'),
('RM000006', '2018-06-22', 'Memet', 'L', 'Syaifullah', 'PNS', 'Purworejo', 'Purworejo', 'Purworejo', 'Purworejo', 'Purworejo', '1996-06-19', 'Islam'),
('RM000007', '2018-06-22', 'Ani Mulasti', 'L', 'Setiawan', 'Petani', 'Kronggahan', 'Gamping', 'Mlati', 'Sleman', 'Kronggahan', '1996-06-19', 'Islam'),
('RM000008', '2018-06-22', 'Erni Kumalasari', 'P', 'Anton', 'Guru', 'Ngemplak, Nganti', 'Gamping', 'Mlati', 'Sleman', 'Ngemplak', '2018-06-21', 'Islam'),
('RM000009', '2018-06-22', 'Arfa', 'L', 'Ari', 'Mahasiswa', 'Cirebon', 'Cirebon', 'Cirebon', 'Cirebon', 'Cirebon', '2018-06-21', 'Islam'),
('RM000010', '2018-08-03', 'Padma', 'P', 'Palina', 'Mahasiswa', 'Cebongan', 'Gamping', 'Mlati', 'Sleman', 'Jambi', '1997-06-15', 'Islam');

-- --------------------------------------------------------

--
-- Table structure for table `pasien_berobat`
--

CREATE TABLE `pasien_berobat` (
  `id_berobat` int(20) NOT NULL,
  `no_rm` varchar(20) NOT NULL,
  `tanggal_berobat` date DEFAULT NULL,
  `nama_pasien` varchar(100) DEFAULT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `tempat_lahir` varchar(50) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `jenis_pasien` varchar(20) DEFAULT NULL,
  `no_jaminan` varchar(20) DEFAULT NULL,
  `tujuan` varchar(20) DEFAULT NULL,
  `no_antrian` int(11) NOT NULL,
  `status` enum('Selesai','Belum Selesai','Gagal','') NOT NULL DEFAULT 'Belum Selesai'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pasien_berobat`
--

INSERT INTO `pasien_berobat` (`id_berobat`, `no_rm`, `tanggal_berobat`, `nama_pasien`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `jenis_pasien`, `no_jaminan`, `tujuan`, `no_antrian`, `status`) VALUES
(1, '0', NULL, NULL, 'L', NULL, NULL, NULL, NULL, NULL, 0, 'Gagal'),
(74, 'RM000001', '2018-08-03', 'Roy Andri', 'L', 'Tangerang', '1997-09-14', 'Umum', '0', 'BP Umum', 1, 'Selesai'),
(75, 'RM000002', '2018-08-03', 'Agung', 'L', 'Temanggung', '1997-06-10', 'Umum', '0', 'BP Umum', 2, 'Selesai'),
(76, 'RM000010', '2018-08-03', 'Padma', 'P', 'Jambi', '1997-06-15', 'Umum', '0', 'BP Umum', 3, 'Selesai'),
(77, 'RM000005', '2018-08-03', 'Jiku', 'L', 'Pelawan', '2018-06-22', 'Umum', '0', 'BP Umum', 4, 'Selesai'),
(78, 'RM000010', '2018-08-03', 'Padma', 'P', 'Jambi', '1997-06-15', 'Umum', '0', 'BP Umum', 5, 'Selesai'),
(79, 'RM000009', '2018-08-03', 'Arfa', 'L', 'Cirebon', '2018-06-21', 'Umum', '0', 'BP Umum', 6, 'Selesai'),
(80, 'RM000007', '2018-08-03', 'Ani Mulasti', 'L', 'Kronggahan', '1996-06-19', 'Umum', '0', 'BP Umum', 7, 'Belum Selesai'),
(81, '0', NULL, NULL, 'L', NULL, NULL, NULL, NULL, NULL, 0, 'Gagal'),
(82, 'RM000001', '2018-08-15', 'Roy Andri', 'L', 'Tangerang', '1997-09-14', 'Umum', '0', 'BP Umum', 1, 'Selesai');

-- --------------------------------------------------------

--
-- Table structure for table `status_antrian`
--

CREATE TABLE `status_antrian` (
  `loket_antrian` varchar(20) NOT NULL,
  `no_antrian` int(5) NOT NULL,
  `status_antrian` enum('Berjalan','Berhenti') NOT NULL,
  `tanggal_mulai` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status_antrian`
--

INSERT INTO `status_antrian` (`loket_antrian`, `no_antrian`, `status_antrian`, `tanggal_mulai`) VALUES
('BP Umum', 1, 'Berhenti', '2018-08-15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hak_akses`
--
ALTER TABLE `hak_akses`
  ADD PRIMARY KEY (`id_hak_akses`);

--
-- Indexes for table `kritik_saran`
--
ALTER TABLE `kritik_saran`
  ADD PRIMARY KEY (`id_pengaduan`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_login`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `hak_akses` (`posisi`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`no_rm`);

--
-- Indexes for table `pasien_berobat`
--
ALTER TABLE `pasien_berobat`
  ADD PRIMARY KEY (`id_berobat`),
  ADD KEY `pasien_berobat_ibfk_1` (`no_rm`);

--
-- Indexes for table `status_antrian`
--
ALTER TABLE `status_antrian`
  ADD PRIMARY KEY (`loket_antrian`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hak_akses`
--
ALTER TABLE `hak_akses`
  MODIFY `id_hak_akses` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kritik_saran`
--
ALTER TABLE `kritik_saran`
  MODIFY `id_pengaduan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id_login` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `pasien_berobat`
--
ALTER TABLE `pasien_berobat`
  MODIFY `id_berobat` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `login_ibfk_1` FOREIGN KEY (`posisi`) REFERENCES `hak_akses` (`id_hak_akses`);

--
-- Constraints for table `pasien_berobat`
--
ALTER TABLE `pasien_berobat`
  ADD CONSTRAINT `pasien_berobat_ibfk_1` FOREIGN KEY (`no_rm`) REFERENCES `pasien` (`no_rm`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
