-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 03, 2020 at 06:00 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ut`
--

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `id_karyawan` int(11) NOT NULL,
  `id_departement` int(11) NOT NULL,
  `id_level` int(11) NOT NULL,
  `nrp` varchar(25) NOT NULL,
  `nama_karyawan` varchar(191) NOT NULL,
  `tempat_lahir` varchar(191) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `pekerjaan` varchar(191) NOT NULL,
  `agama` varchar(25) NOT NULL,
  `jenis_kelamin` varchar(191) NOT NULL,
  `golongan_darah` varchar(25) NOT NULL,
  `notelp` varchar(30) NOT NULL,
  `alamat` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `password` varchar(191) NOT NULL,
  `password_view` varchar(191) NOT NULL,
  `foto_karyawan` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`id_karyawan`, `id_departement`, `id_level`, `nrp`, `nama_karyawan`, `tempat_lahir`, `tanggal_lahir`, `pekerjaan`, `agama`, `jenis_kelamin`, `golongan_darah`, `notelp`, `alamat`, `email`, `password`, `password_view`, `foto_karyawan`) VALUES
(1, 0, 191, '1234', 'administrator', '-', '2020-02-26', '-', '-', '-', '-', '-', '-', 'admin@admin.com', '$2y$10$UP/oGuIh16r7Akp/rFYcluSdW4voeSt4St6twfTVt01zcZNZx9tiO', '12345678', ''),
(4, 2, 2, '2730', 'Rafi sahendra', 'Bukit Gading', '2020-04-16', 'Manager Ga', 'Islam', 'laki-laki', 'A', '085363229539', 'Padang Canduah, Pasaman Barat', 'rafisahendra@gmail.com', '$2y$10$L9Vu2bH/l4tB2UumVLgqZONHWY41eoi7hKerDZj2sSCDdYP/ivQ3q', '12345678', '5e85a04cbd685_mac.png'),
(5, 3, 2, '3730', 'Gema Fajar', 'Lumin', '2020-04-01', 'Bagian Casier', 'Islam', 'laki-laki', 'B', '085363229539', 'Padang, Lubuk Minturun', 'gemafajar@gmail.com', '$2y$10$fyUZ9StShqtCs7Ei0epNHuameqF7AiVCEoRmF8dIls9yq1aZHYPw6', '12345678', '7961e8fc887e2b193b1a52776dba30f3-d2i8426.jpg'),
(6, 4, 2, '4730', 'Restio afrinza', 'Padang', '2020-04-14', 'Casier UT', 'Islam', 'laki-laki', 'O', '085363229539', 'Padang', 'restioafrinza@gmail.com', '$2y$10$6DfwS.jYQ2G6.59Wx7tbb.IZYASPFlU8UX5u7UFcHt3Ricri9Ztma', '12345678', ''),
(7, 5, 2, '5730', 'Nofrian', 'Padang', '2020-04-02', 'Safety Ut', 'Islam', 'laki-laki', 'AB', '085363229539', 'Padang  Panjang', 'nofrian@gmail.com', '$2y$10$TR7oYTy6ecr6eXN72ERuzu2QnqPURsS38iP.FTFNK9pDS4r817BwW', '12345678', ''),
(8, 1, 1, '1730', 'Pak Anton', 'Padang', '2020-04-01', 'ADH', 'Islam', 'laki-laki', 'A', '085363229539', 'Sijunjuang', 'adh@gmail.com', '$2y$10$PlX2mTqY38MuNvEqOgRch.ll5DmIq2J8O8Z4kwyvcVs1.AIZA5AE6', '12345678', '5e859fb3e8b8e_a.png'),
(25, 3, 3, '3731', 'Ririn astari', 'padang', '2020-04-07', 'Bagian Casier', 'Islam', 'Perempuan', 'A', '085363229539', 'Padang, Lubuk Minturun', 'ririnastari@gmail.com', '$2y$10$6XjzQJIUOV9kZPXB/0P9geA0fso5cjhsuexQrdFjrv7J9q0J681mO', '12345678', '5e85f3cc809b0_pasfoto3x4.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id_karyawan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id_karyawan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
