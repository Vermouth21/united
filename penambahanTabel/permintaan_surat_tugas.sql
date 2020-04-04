-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 02, 2020 at 05:37 PM
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
-- Table structure for table `permintaan_surat_tugas`
--

CREATE TABLE `permintaan_surat_tugas` (
  `id_pst` int(11) NOT NULL,
  `id_karyawan` int(11) NOT NULL,
  `golongan` varchar(191) NOT NULL,
  `jabatan` varchar(191) NOT NULL,
  `divisi` varchar(191) NOT NULL,
  `perusahaan_tujuan` varchar(191) NOT NULL,
  `keperluan_dinas` varchar(191) NOT NULL,
  `beban` varchar(191) NOT NULL,
  `serial_number` varchar(191) NOT NULL,
  `daerah_tujuan` varchar(191) NOT NULL,
  `tanggal_berangkat` date NOT NULL,
  `tanggal_kembali` date NOT NULL,
  `jumlah_hari` int(11) NOT NULL DEFAULT 0,
  `transportasi` varchar(191) NOT NULL,
  `penginapan` varchar(191) NOT NULL,
  `job_pekerjaan` varchar(191) NOT NULL,
  `total_hardsite` int(11) NOT NULL DEFAULT 0,
  `pemohon` int(11) NOT NULL,
  `depth` int(11) NOT NULL,
  `adh` int(11) NOT NULL,
  `tiketbyadm` int(11) NOT NULL DEFAULT 0,
  `tiket` int(11) NOT NULL DEFAULT 0,
  `airporttax` int(11) NOT NULL DEFAULT 0,
  `taxi` int(11) NOT NULL DEFAULT 0,
  `tol` int(11) NOT NULL DEFAULT 0,
  `hotel` int(11) NOT NULL DEFAULT 0,
  `upd` int(11) NOT NULL DEFAULT 0,
  `fiskal` int(11) NOT NULL DEFAULT 0,
  `bbm` int(11) NOT NULL DEFAULT 0,
  `lainlain` int(11) NOT NULL DEFAULT 0,
  `total_estimasi` int(11) NOT NULL DEFAULT 0,
  `uang_diizinkan` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `permintaan_surat_tugas`
--

INSERT INTO `permintaan_surat_tugas` (`id_pst`, `id_karyawan`, `golongan`, `jabatan`, `divisi`, `perusahaan_tujuan`, `keperluan_dinas`, `beban`, `serial_number`, `daerah_tujuan`, `tanggal_berangkat`, `tanggal_kembali`, `jumlah_hari`, `transportasi`, `penginapan`, `job_pekerjaan`, `total_hardsite`, `pemohon`, `depth`, `adh`, `tiketbyadm`, `tiket`, `airporttax`, `taxi`, `tol`, `hotel`, `upd`, `fiskal`, `bbm`, `lainlain`, `total_estimasi`, `uang_diizinkan`) VALUES
(6, 7, 'A', 'Kepala Bidang', 'CabangGA', 'Padang', 'Kerja  Sama', '12', '354541', 'Padag', '2020-03-24', '2020-03-24', 12, 'Mobil', 'Wisma', 'Kelompok', 400000, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 300000, 0, 700000, 400000),
(8, 6, 'A', 'Karyawan GA', 'utaman GA', 'Mediatama', 'Kerjasama', '12', 'Sr90079', 'Padang', '2020-03-24', '2020-03-26', 12, '400000', 'wisma', 'paadang', 300000, 1, 1, 1, 100000, 0, 0, 0, 0, 0, 0, 0, 500000, 0, 4000000, 5000000),
(9, 25, 'A', 'Kepala Bidang', 'utamaGA', 'Sari Roti', 'Penggusuran', '2000', 'Sr8978', 'Padang', '2020-03-24', '2020-03-26', 3, '400000', 'Hotel', 'kerjasama', 30000, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 300000, 0, 5000000, 4000000),
(13, 5, 'Mollitia ducimus au', 'Id ipsum mollitia m', 'Fugiat harum sed co', 'Laudantium perferen', 'Perferendis aut dolo', 'Exercitation nisi om', '797', 'Exercitationem sit n', '2002-08-08', '1975-06-18', 55, 'Officiis consectetur', 'Sint enim voluptatem', 'Voluptas voluptate e', 61, 1, 1, 1, 65, 89, 40, 7, 63, 80, 91, 51, 19, 50, 9, 36);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `permintaan_surat_tugas`
--
ALTER TABLE `permintaan_surat_tugas`
  ADD PRIMARY KEY (`id_pst`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `permintaan_surat_tugas`
--
ALTER TABLE `permintaan_surat_tugas`
  MODIFY `id_pst` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
