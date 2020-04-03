-- Adminer 4.2.5 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `administrator`;
CREATE TABLE `administrator` (
  `id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(191) NOT NULL,
  `password` varchar(191) NOT NULL,
  `tanggal_jammasuk` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `tanggal_jam_keluar` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `level` int(11) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


DROP TABLE IF EXISTS `deklarasi_karyawan`;
CREATE TABLE `deklarasi_karyawan` (
  `id_deklarasi_karyawan` int(11) NOT NULL AUTO_INCREMENT,
  `deskripsi_deklarasi` text NOT NULL,
  `jumlah_deklarasi` int(11) NOT NULL,
  `keterangan_deklarasi` text NOT NULL,
  `uang_muka` int(11) NOT NULL,
  `jumlah_pengeluaran_actual` int(11) NOT NULL,
  `kembali_keperusahaan` int(11) NOT NULL,
  `kembali_kekaryawan` int(11) NOT NULL,
  `pemohon` int(11) NOT NULL,
  `depth` int(11) NOT NULL,
  `boh` int(11) NOT NULL,
  PRIMARY KEY (`id_deklarasi_karyawan`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


DROP TABLE IF EXISTS `department`;
CREATE TABLE `department` (
  `id_departement` int(11) NOT NULL AUTO_INCREMENT,
  `nama_department` varchar(191) NOT NULL,
  PRIMARY KEY (`id_departement`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


DROP TABLE IF EXISTS `detail_peminjaman_kop`;
CREATE TABLE `detail_peminjaman_kop` (
  `id_detail_pkop` int(11) NOT NULL,
  `id_pkop` varchar(191) NOT NULL,
  `pajak_kendaraan` int(11) NOT NULL,
  `stnk` int(11) NOT NULL,
  `izin_kaca_film` int(11) NOT NULL,
  `kunci_kunci` int(11) NOT NULL,
  `ptiga_k` int(11) NOT NULL,
  `segitiga_pengaman` int(11) NOT NULL,
  `dongkrak` int(11) NOT NULL,
  `ban_cadangan` int(11) NOT NULL,
  `apar` int(11) NOT NULL,
  `safety_belt` int(11) NOT NULL,
  `bodi_kendaraan` int(11) NOT NULL,
  `airradiator_batrai` int(11) NOT NULL,
  `oli_mesin` int(11) NOT NULL,
  `minyak_rem` int(11) NOT NULL,
  `tekanan_ban` int(11) NOT NULL,
  `bahan_bakar` int(11) NOT NULL DEFAULT 1,
  `pemohom` int(11) NOT NULL,
  `depth` int(11) NOT NULL,
  `adh` int(11) NOT NULL,
  `scurity` int(11) NOT NULL,
  PRIMARY KEY (`id_detail_pkop`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


DROP TABLE IF EXISTS `detail_pst`;
CREATE TABLE `detail_pst` (
  `id_detail_pst` int(11) NOT NULL AUTO_INCREMENT,
  `id_pst` varchar(191) NOT NULL,
  `tiket_byadm` int(11) NOT NULL,
  `tiket` int(11) NOT NULL,
  `airport_tax` int(11) NOT NULL,
  `taksi` int(11) NOT NULL,
  `tol` int(11) NOT NULL,
  `hotel` int(11) NOT NULL,
  `upd` int(11) NOT NULL,
  `fiskal` int(11) NOT NULL,
  `bbm` int(11) NOT NULL,
  `lain_lain` int(11) NOT NULL,
  `total_estim_luartiket` int(11) NOT NULL,
  `uang_muka_diizinkan` int(11) NOT NULL,
  PRIMARY KEY (`id_detail_pst`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


DROP TABLE IF EXISTS `izin_keluar_kantor`;
CREATE TABLE `izin_keluar_kantor` (
  `id_surat_keluar` int(11) NOT NULL AUTO_INCREMENT,
  `id_karyawan` int(11) NOT NULL,
  `keterangan_keluar` text NOT NULL,
  `jam_keluar` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `jam_kembali` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `pemohon` int(191) NOT NULL,
  `depth` int(191) NOT NULL,
  `adh` int(191) NOT NULL,
  `scurity` int(11) NOT NULL,
  PRIMARY KEY (`id_surat_keluar`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


DROP TABLE IF EXISTS `karyawan`;
CREATE TABLE `karyawan` (
  `id_karyawan` int(11) NOT NULL AUTO_INCREMENT,
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
  PRIMARY KEY (`id_karyawan`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `karyawan` (`id_karyawan`, `id_departement`, `id_level`, `nrp`, `nama_karyawan`, `tempat_lahir`, `tanggal_lahir`, `pekerjaan`, `agama`, `jenis_kelamin`, `golongan_darah`, `notelp`, `alamat`, `email`, `password`) VALUES
(1,	1,	0,	'-',	'administrator',	'-',	'2020-02-26',	'-',	'-',	'-',	'-',	'-',	'-',	'admin@admin.com',	'$2y$10$UP/oGuIh16r7Akp/rFYcluSdW4voeSt4St6twfTVt01zcZNZx9tiO');

DROP TABLE IF EXISTS `kendaraan`;
CREATE TABLE `kendaraan` (
  `no_plat_kendaaran` int(11) NOT NULL,
  `kendaraan_type` varchar(191) NOT NULL,
  `kendaraan_km` varchar(191) NOT NULL,
  PRIMARY KEY (`no_plat_kendaaran`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


DROP TABLE IF EXISTS `level_karyawan`;
CREATE TABLE `level_karyawan` (
  `id_level` int(11) NOT NULL AUTO_INCREMENT,
  `level` int(11) NOT NULL,
  `nama_level` varchar(191) NOT NULL,
  PRIMARY KEY (`id_level`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


DROP TABLE IF EXISTS `peminjaman_kop`;
CREATE TABLE `peminjaman_kop` (
  `id_pkop` varchar(191) NOT NULL,
  `id_karyawan` int(11) NOT NULL,
  `no_plat_kendaaran` int(11) NOT NULL,
  `tangal_peminjaman` date NOT NULL,
  `tanggal_penggunaan_masuk` date NOT NULL,
  `tanggal_penggunaan_kembali` date NOT NULL,
  `waktu_penggunaan_masuk` varchar(191) NOT NULL,
  `waktu_penggunaan_kembali` varchar(191) NOT NULL,
  `keperluan` varchar(191) NOT NULL,
  `pengemudi` varchar(191) NOT NULL,
  `tujuan` text NOT NULL,
  `keterangan_lanjutan` text NOT NULL,
  `pemohon` int(11) NOT NULL,
  `depth` int(11) NOT NULL,
  `adh` int(11) NOT NULL,
  `scurity` int(11) NOT NULL,
  PRIMARY KEY (`id_pkop`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


DROP TABLE IF EXISTS `pengajuan_entertaiment`;
CREATE TABLE `pengajuan_entertaiment` (
  `id_entertaiment` int(11) NOT NULL AUTO_INCREMENT,
  `nama_tamu` varchar(191) NOT NULL,
  `jabatan` varchar(191) NOT NULL,
  `nama_perushaan` varchar(191) NOT NULL,
  `tanggal_jamuan` varchar(191) NOT NULL,
  `tempat_jamuan` varchar(191) NOT NULL,
  `alamat` varchar(191) NOT NULL,
  `dalam_tangka` varchar(191) NOT NULL,
  `total` int(11) NOT NULL,
  `pemohon_marketing` int(11) NOT NULL,
  `adh` int(11) NOT NULL,
  `boh` int(11) NOT NULL,
  PRIMARY KEY (`id_entertaiment`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


DROP TABLE IF EXISTS `permintaan_solar`;
CREATE TABLE `permintaan_solar` (
  `id_permintaan_solar` int(11) NOT NULL AUTO_INCREMENT,
  `id_karyawan` int(11) NOT NULL,
  `tanggal_permintaan` date NOT NULL,
  `jumlah_solar` double NOT NULL,
  `keperluan_solar` varchar(191) NOT NULL,
  `pemohon` int(11) NOT NULL,
  `depth` int(11) NOT NULL,
  `Adh` int(11) NOT NULL,
  PRIMARY KEY (`id_permintaan_solar`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


DROP TABLE IF EXISTS `permintaan_surat_tugas`;
CREATE TABLE `permintaan_surat_tugas` (
  `id_pst` varchar(191) NOT NULL,
  `id_anggota` int(11) NOT NULL,
  `perusahaan_tujuan` varchar(191) NOT NULL,
  `keperluan_dinas` varchar(191) NOT NULL,
  `beban` int(11) NOT NULL,
  `serial_number` int(11) NOT NULL,
  `daerah_tujuan` varchar(191) NOT NULL,
  `tanggal_beragkat` date NOT NULL,
  `tanggal_kembali` date NOT NULL,
  `jumlah_hari` int(11) NOT NULL,
  `transportasi` varchar(191) NOT NULL,
  `penginapan` varchar(191) NOT NULL,
  `job_pekerjaan` varchar(191) NOT NULL,
  `total_hardsite` int(11) NOT NULL,
  `pemohon` int(11) NOT NULL,
  `depth` int(11) NOT NULL,
  `adh` int(11) NOT NULL,
  PRIMARY KEY (`id_pst`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


DROP TABLE IF EXISTS `permohonan_advance`;
CREATE TABLE `permohonan_advance` (
  `id_permohonan_advance` int(11) NOT NULL AUTO_INCREMENT,
  `id_karyawan` int(11) NOT NULL,
  `keterangan_keperluan` text NOT NULL,
  `jumlah_keperluan` int(11) NOT NULL,
  `pemohon` int(11) NOT NULL,
  `adh` int(11) NOT NULL,
  `boh` int(11) NOT NULL,
  PRIMARY KEY (`id_permohonan_advance`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


DROP TABLE IF EXISTS `permohonan_cuti`;
CREATE TABLE `permohonan_cuti` (
  `id_permohonan_cuti` int(11) NOT NULL AUTO_INCREMENT,
  `id_karyawan` int(11) NOT NULL,
  `nrpp` int(11) NOT NULL,
  `tanggal_mulai_kerja` date NOT NULL,
  `keterangan_cuti` text NOT NULL,
  `tanggal_mulai_cuti` date NOT NULL,
  `tanggal_selesai_cuti` date NOT NULL,
  `prode_tahun_cuti` varchar(191) NOT NULL,
  `tanggal_permohonan` date NOT NULL,
  `pemohon` int(11) NOT NULL,
  `depth` int(11) NOT NULL,
  `personaliah` int(11) NOT NULL,
  PRIMARY KEY (`id_permohonan_cuti`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


DROP TABLE IF EXISTS `permohonan_komunikasi`;
CREATE TABLE `permohonan_komunikasi` (
  `id_permohonan_komunikasi` int(11) NOT NULL AUTO_INCREMENT,
  `id_jabatan` int(11) NOT NULL,
  `lokasi_ho_cab_site` varchar(191) NOT NULL,
  `besar_pengeluaran` int(11) NOT NULL,
  `besar_penggantian` int(11) NOT NULL,
  `tanggal_bulan_pemakaian` int(11) NOT NULL,
  `pemohon` int(11) NOT NULL,
  `depth` int(11) NOT NULL,
  `adh` int(11) NOT NULL,
  `boh` int(11) NOT NULL,
  PRIMARY KEY (`id_permohonan_komunikasi`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


DROP TABLE IF EXISTS `report_temuan_lk`;
CREATE TABLE `report_temuan_lk` (
  `id_temuan` int(11) NOT NULL AUTO_INCREMENT,
  `id_karyawan` int(11) NOT NULL,
  `tanggal_temuan` date NOT NULL,
  `tempat_temuan` varchar(191) NOT NULL,
  `foto_temuan` varchar(191) NOT NULL,
  `keterangan_temuan` text NOT NULL,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_temuan`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `report_temuan_lk` (`id_temuan`, `id_karyawan`, `tanggal_temuan`, `tempat_temuan`, `foto_temuan`, `keterangan_temuan`, `status`) VALUES
(5,	1,	'2010-07-08',	'Nostrum consequatur',	'aplewhi.png',	'<p>Ad voluptates dolore.</p>',	1);

-- 2020-02-27 15:06:30
