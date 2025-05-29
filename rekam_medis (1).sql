-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3311
-- Generation Time: May 29, 2025 at 10:06 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rekam_medis`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_akses`
--

CREATE TABLE `admin_akses` (
  `login_id` int NOT NULL,
  `akses_id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admin_akses`
--

INSERT INTO `admin_akses` (`login_id`, `akses_id`) VALUES
(1, 'pasien');

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE `dokter` (
  `kd_dokter` int NOT NULL,
  `kd_poli` int NOT NULL,
  `tgl_kunjungan` date DEFAULT NULL,
  `kd_user` int NOT NULL,
  `nm_dokter` varchar(255) NOT NULL,
  `SIP` int NOT NULL,
  `tempat_lhr` varchar(255) NOT NULL,
  `no_telp` int NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `ket` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`kd_dokter`, `kd_poli`, `tgl_kunjungan`, `kd_user`, `nm_dokter`, `SIP`, `tempat_lhr`, `no_telp`, `alamat`, `ket`) VALUES
(1, 1, '2025-05-25', 1, 'dr. Dimas Aditya', 23244, 'Bandung', 838, 'Bandung', 'Dokter umum berpengalaman yang siap menangani berbagai keluhan dasar seperti demam, batuk, pusing, dan masalah kesehatan ringan lainnya. Telah melayani pasien selama lebih dari 5 tahun di bidang pelayanan primer.'),
(2, 2, '2025-05-29', 2, 'drg. Rina Permata Sari', 2325, 'Jakarta', 838, 'Bandung', 'Dokter gigi yang ahli dalam penanganan masalah gigi dan mulut, seperti pencabutan, penambalan, dan perawatan saraf gigi. Aktif dalam kegiatan penyuluhan kesehatan gigi anak-anak.'),
(3, 3, '2025-05-30', 3, 'dr. Lestari Wulandari, Sp.A', 2326, 'Depok', 838, 'Bandung', 'Dokter spesialis anak yang fokus pada pertumbuhan dan perkembangan anak-anak serta penanganan penyakit anak seperti batuk pilek, diare, dan imunisasi. Ramah dan telaten dalam berinteraksi dengan pasien kecil.'),
(4, 4, '2025-05-31', 4, 'dr. Wahyu Prasetyo, Sp.THT', 2327, 'Surabaya', 838, 'Bandung', 'Dokter spesialis THT dengan keahlian dalam menangani infeksi telinga, sinusitis, dan radang tenggorokan. Berpengalaman lebih dari 7 tahun dalam pelayanan THT dan audiometri.');

-- --------------------------------------------------------

--
-- Table structure for table `kunjungan`
--

CREATE TABLE `kunjungan` (
  `tgl_kunjungan` date NOT NULL,
  `no_pasien` int NOT NULL,
  `kd_poli` int NOT NULL,
  `jam_kunjungan` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `kunjungan`
--

INSERT INTO `kunjungan` (`tgl_kunjungan`, `no_pasien`, `kd_poli`, `jam_kunjungan`) VALUES
('2025-05-25', 2, 1, '2025-05-26 22:48:00'),
('2025-05-29', 2, 2, '2025-05-29 11:03:00'),
('2025-05-30', 2, 3, '2025-05-29 11:03:00'),
('2025-05-31', 2, 4, '2025-05-29 11:03:00');

-- --------------------------------------------------------

--
-- Table structure for table `laboratorium`
--

CREATE TABLE `laboratorium` (
  `kd_lab` int NOT NULL,
  `no_rm` int NOT NULL,
  `hasil_lab` varchar(255) NOT NULL,
  `ket` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `kd_user` int NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`kd_user`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$7W/bVIM/Ikx4EhQlt4dVt.P8AeNjVnmRLkvxJL/2NBkiomOx/L17W'),
(4, 'pasien', '$2y$10$7rVqMxXJ8suyIE833DKiuuhbkVha4ev0ZxGYCp.6caSVSqSu3mafq'),
(5, 'dokter', '$2y$10$c3npdcZhtnnwfITlFPd9v.Ecd.1iQbEardqSFzGOXwU9MizLA24oC');

-- --------------------------------------------------------

--
-- Table structure for table `master_akses`
--

CREATE TABLE `master_akses` (
  `Akses_id` varchar(10) NOT NULL,
  `Nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `master_akses`
--

INSERT INTO `master_akses` (`Akses_id`, `Nama`) VALUES
('pasien', 'Pasien');

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE `obat` (
  `kd_obat` int NOT NULL,
  `nm_obat` varchar(255) NOT NULL,
  `jml_obat` int NOT NULL,
  `ukuran` varchar(255) NOT NULL,
  `harga` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`kd_obat`, `nm_obat`, `jml_obat`, `ukuran`, `harga`) VALUES
(1, 'Paracetamol', 8, '1000mg', '10000');

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `no_pasien` int NOT NULL,
  `nm_pasien` varchar(255) NOT NULL,
  `j_kel` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `agama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `tgl_lhr` varchar(255) NOT NULL,
  `usia` int NOT NULL,
  `no_telp` int NOT NULL,
  `nm_kk` varchar(255) NOT NULL,
  `hub_kel` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`no_pasien`, `nm_pasien`, `j_kel`, `agama`, `alamat`, `tgl_lhr`, `usia`, `no_telp`, `nm_kk`, `hub_kel`) VALUES
(2, 'Fazar', 'Laki-laki', 'islam', 'Ujungberung', '2025-05-15', 17, 838, 'L', 'P');

-- --------------------------------------------------------

--
-- Table structure for table `poliklinik`
--

CREATE TABLE `poliklinik` (
  `kd_poli` int NOT NULL,
  `nm_poli` varchar(255) NOT NULL,
  `lantai` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `poliklinik`
--

INSERT INTO `poliklinik` (`kd_poli`, `nm_poli`, `lantai`) VALUES
(1, 'Poli Umum', 3),
(2, 'Poli Gigi', 2),
(3, 'Poli Anak', 2),
(4, 'Poli THT', 2);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `Nama` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`Nama`, `Email`, `Password`) VALUES
('FazarIhsan', 'dewifajar311@gmail.com', 'p'),
('FazarIhsan', 'dewifajar311@gmail.com', 'FazarIhsan57'),
('FazarIhsan', 'dewifajar311@gmail.com', 'asd'),
('FazarIhsan', 'dewifajar311@gmail.com', 'asd'),
('FazarIhsan', 'fazarihsanpratama57@gmail.com', '$2y$10$iBdYCepktJ4VCkUSoL1Zn.cgdSKzw1l2Yepwt7t2Uo9DYUPz.FfjW');

-- --------------------------------------------------------

--
-- Table structure for table `rekam_medis`
--

CREATE TABLE `rekam_medis` (
  `no_rm` int NOT NULL,
  `kd_tindakan` int NOT NULL,
  `kd_obat` int NOT NULL,
  `jumlah_pakai` int NOT NULL,
  `kd_user` int NOT NULL,
  `no_pasien` int NOT NULL,
  `diagnosa` varchar(255) NOT NULL,
  `resep` varchar(255) NOT NULL,
  `keluhan` varchar(255) NOT NULL,
  `tgl_pemeriksaan` date NOT NULL,
  `ket` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `rekam_medis`
--

INSERT INTO `rekam_medis` (`no_rm`, `kd_tindakan`, `kd_obat`, `jumlah_pakai`, `kd_user`, `no_pasien`, `diagnosa`, `resep`, `keluhan`, `tgl_pemeriksaan`, `ket`) VALUES
(6, 1, 1, 2, 5, 2, 'Demam', 'Paracetamol', 'pusing', '2025-05-29', 'Operasi Ginjal');

-- --------------------------------------------------------

--
-- Table structure for table `tindakan`
--

CREATE TABLE `tindakan` (
  `kd_tindakan` int NOT NULL,
  `nm_tindakan` varchar(255) NOT NULL,
  `ket` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tindakan`
--

INSERT INTO `tindakan` (`kd_tindakan`, `nm_tindakan`, `ket`) VALUES
(1, 'Operasi', 'Operasi Ginjal');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_akses`
--
ALTER TABLE `admin_akses`
  ADD KEY `akses_id` (`akses_id`),
  ADD KEY `login_id` (`login_id`);

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`kd_dokter`),
  ADD KEY `kd_poli` (`kd_poli`),
  ADD KEY `tgl_kunjungan` (`tgl_kunjungan`);

--
-- Indexes for table `kunjungan`
--
ALTER TABLE `kunjungan`
  ADD PRIMARY KEY (`tgl_kunjungan`),
  ADD KEY `no_pasien` (`no_pasien`),
  ADD KEY `kd_poli` (`kd_poli`);

--
-- Indexes for table `laboratorium`
--
ALTER TABLE `laboratorium`
  ADD PRIMARY KEY (`kd_lab`),
  ADD KEY `no_rm` (`no_rm`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`kd_user`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `master_akses`
--
ALTER TABLE `master_akses`
  ADD PRIMARY KEY (`Akses_id`);

--
-- Indexes for table `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`kd_obat`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`no_pasien`);

--
-- Indexes for table `poliklinik`
--
ALTER TABLE `poliklinik`
  ADD PRIMARY KEY (`kd_poli`);

--
-- Indexes for table `rekam_medis`
--
ALTER TABLE `rekam_medis`
  ADD PRIMARY KEY (`no_rm`),
  ADD KEY `kd_obat` (`kd_obat`),
  ADD KEY `kd_user` (`kd_user`),
  ADD KEY `no_pasien` (`no_pasien`),
  ADD KEY `kd_tindakan` (`kd_tindakan`);

--
-- Indexes for table `tindakan`
--
ALTER TABLE `tindakan`
  ADD PRIMARY KEY (`kd_tindakan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dokter`
--
ALTER TABLE `dokter`
  MODIFY `kd_dokter` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `laboratorium`
--
ALTER TABLE `laboratorium`
  MODIFY `kd_lab` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `kd_user` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `no_pasien` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `poliklinik`
--
ALTER TABLE `poliklinik`
  MODIFY `kd_poli` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `rekam_medis`
--
ALTER TABLE `rekam_medis`
  MODIFY `no_rm` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tindakan`
--
ALTER TABLE `tindakan`
  MODIFY `kd_tindakan` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin_akses`
--
ALTER TABLE `admin_akses`
  ADD CONSTRAINT `admin_akses_ibfk_1` FOREIGN KEY (`akses_id`) REFERENCES `master_akses` (`Akses_id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `admin_akses_ibfk_2` FOREIGN KEY (`login_id`) REFERENCES `login` (`kd_user`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `dokter`
--
ALTER TABLE `dokter`
  ADD CONSTRAINT `dokter_ibfk_1` FOREIGN KEY (`kd_poli`) REFERENCES `poliklinik` (`kd_poli`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `dokter_ibfk_2` FOREIGN KEY (`tgl_kunjungan`) REFERENCES `kunjungan` (`tgl_kunjungan`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `kunjungan`
--
ALTER TABLE `kunjungan`
  ADD CONSTRAINT `kunjungan_ibfk_1` FOREIGN KEY (`no_pasien`) REFERENCES `pasien` (`no_pasien`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `kunjungan_ibfk_2` FOREIGN KEY (`kd_poli`) REFERENCES `poliklinik` (`kd_poli`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `laboratorium`
--
ALTER TABLE `laboratorium`
  ADD CONSTRAINT `laboratorium_ibfk_1` FOREIGN KEY (`no_rm`) REFERENCES `rekam_medis` (`no_rm`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `rekam_medis`
--
ALTER TABLE `rekam_medis`
  ADD CONSTRAINT `rekam_medis_ibfk_2` FOREIGN KEY (`kd_obat`) REFERENCES `obat` (`kd_obat`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `rekam_medis_ibfk_3` FOREIGN KEY (`kd_user`) REFERENCES `login` (`kd_user`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `rekam_medis_ibfk_4` FOREIGN KEY (`no_pasien`) REFERENCES `pasien` (`no_pasien`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `rekam_medis_ibfk_5` FOREIGN KEY (`kd_tindakan`) REFERENCES `tindakan` (`kd_tindakan`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
