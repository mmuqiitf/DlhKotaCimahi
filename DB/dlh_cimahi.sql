-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.17-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             11.0.0.5919
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for dlh_cimahi
CREATE DATABASE IF NOT EXISTS `dlh_cimahi` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `dlh_cimahi`;

-- Dumping structure for table dlh_cimahi.bod_aktual
CREATE TABLE IF NOT EXISTS `bod_aktual` (
  `id_bodaktual` int(11) NOT NULL AUTO_INCREMENT,
  `titik_pantau` varchar(50) DEFAULT NULL,
  `Bod_aktual` double DEFAULT NULL,
  PRIMARY KEY (`id_bodaktual`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table dlh_cimahi.bod_aktual: ~10 rows (approximately)
/*!40000 ALTER TABLE `bod_aktual` DISABLE KEYS */;
INSERT INTO `bod_aktual` (`id_bodaktual`, `titik_pantau`, `Bod_aktual`) VALUES
	(1, 'Sungai Cisangkan Hulu', 12.1),
	(2, 'Sungai Cisangkan Tengah', 279.1),
	(3, 'Sungai Cisangkan Hilir', 2903),
	(4, 'Sungai Cibaligo Hulu', 1270),
	(5, 'Sungai Cibaligo Tengah', 953.9),
	(6, 'Sungai Cibaligo Hilir', 419.9),
	(7, 'Sungai Cibeureum Hulu', 5310.1),
	(8, 'Sungai Cibeureum Tengah', 1043.7),
	(9, 'Sungai Cibeureum Hilir', 8985.6),
	(10, 'Sungai Cibabat Hulu', 1072.2);
/*!40000 ALTER TABLE `bod_aktual` ENABLE KEYS */;

-- Dumping structure for table dlh_cimahi.bod_eksisting
CREATE TABLE IF NOT EXISTS `bod_eksisting` (
  `ID_BOD_Eksisting` int(11) NOT NULL AUTO_INCREMENT,
  `nama_sungai` varchar(50) NOT NULL,
  `titik_pantau` enum('Hulu','Tengah','Hilir') NOT NULL,
  `BOD` float NOT NULL,
  `Debit` float NOT NULL,
  `beban_pencemar` float NOT NULL,
  `waktu_sampling` date NOT NULL,
  PRIMARY KEY (`ID_BOD_Eksisting`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table dlh_cimahi.bod_eksisting: ~5 rows (approximately)
/*!40000 ALTER TABLE `bod_eksisting` DISABLE KEYS */;
INSERT INTO `bod_eksisting` (`ID_BOD_Eksisting`, `nama_sungai`, `titik_pantau`, `BOD`, `Debit`, `beban_pencemar`, `waktu_sampling`) VALUES
	(2, 'Cisangkan', 'Hulu', 0, 0, 0, '2022-12-12'),
	(3, 'Cibaligo', 'Tengah', 23, 33, 0, '0000-00-00'),
	(4, 'Cibeureum', 'Tengah', 7, 0, 12, '0000-00-00'),
	(5, 'Cilember', 'Hulu', 7, 0, 12, '0000-00-00'),
	(7, 'Cimahi', 'Hulu', 7, 0, 12, '0000-00-00');
/*!40000 ALTER TABLE `bod_eksisting` ENABLE KEYS */;

-- Dumping structure for table dlh_cimahi.bod_potensial
CREATE TABLE IF NOT EXISTS `bod_potensial` (
  `id_potensial` int(11) NOT NULL AUTO_INCREMENT,
  `Tahun_domestik` varchar(50) NOT NULL,
  `Nilai_domestik` double NOT NULL DEFAULT 0,
  PRIMARY KEY (`id_potensial`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table dlh_cimahi.bod_potensial: ~6 rows (approximately)
/*!40000 ALTER TABLE `bod_potensial` DISABLE KEYS */;
INSERT INTO `bod_potensial` (`id_potensial`, `Tahun_domestik`, `Nilai_domestik`) VALUES
	(1, '2021', 3200),
	(2, '2022', 3264),
	(3, '2023', 3329),
	(4, '2024', 3396),
	(5, '2025', 3464),
	(6, '2026', 3533);
/*!40000 ALTER TABLE `bod_potensial` ENABLE KEYS */;

-- Dumping structure for table dlh_cimahi.ika
CREATE TABLE IF NOT EXISTS `ika` (
  `id_ika` int(11) NOT NULL AUTO_INCREMENT,
  `jumlah_ika` varchar(50) DEFAULT NULL,
  `nilai_ika` double DEFAULT NULL,
  `tahun_ika` year(4) DEFAULT NULL,
  PRIMARY KEY (`id_ika`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table dlh_cimahi.ika: ~9 rows (approximately)
/*!40000 ALTER TABLE `ika` DISABLE KEYS */;
INSERT INTO `ika` (`id_ika`, `jumlah_ika`, `nilai_ika`, `tahun_ika`) VALUES
	(1, '15', 39.33, '2013'),
	(2, '30', 38, '2014'),
	(3, '30', 38, '2015'),
	(4, '30', 42.67, '2016'),
	(5, '30', 21.33, '2017'),
	(6, '30', 11.33, '2018'),
	(7, '45', 13.11, '2019'),
	(8, '45', 14, '2020'),
	(9, '45', 16.67, '2021');
/*!40000 ALTER TABLE `ika` ENABLE KEYS */;

-- Dumping structure for table dlh_cimahi.indekskualitas
CREATE TABLE IF NOT EXISTS `indekskualitas` (
  `id_indeks` varchar(50) NOT NULL DEFAULT '',
  `id_tikpan` varchar(50) NOT NULL DEFAULT '',
  `indekskualitas` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_indeks`),
  KEY `id_tikpan` (`id_tikpan`),
  CONSTRAINT `FK_indekskualitas_titikpantau` FOREIGN KEY (`id_tikpan`) REFERENCES `titikpantau` (`id_tikpan`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table dlh_cimahi.indekskualitas: ~0 rows (approximately)
/*!40000 ALTER TABLE `indekskualitas` DISABLE KEYS */;
/*!40000 ALTER TABLE `indekskualitas` ENABLE KEYS */;

-- Dumping structure for table dlh_cimahi.ipa
CREATE TABLE IF NOT EXISTS `ipa` (
  `id_ipa` int(11) NOT NULL AUTO_INCREMENT,
  `Nama_sungai` varchar(50) NOT NULL,
  `Titik_pantau` varchar(50) NOT NULL,
  `Periode` date NOT NULL,
  `Nilai_pij` double NOT NULL DEFAULT 0,
  PRIMARY KEY (`id_ipa`)
) ENGINE=InnoDB AUTO_INCREMENT=91 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table dlh_cimahi.ipa: ~90 rows (approximately)
/*!40000 ALTER TABLE `ipa` DISABLE KEYS */;
INSERT INTO `ipa` (`id_ipa`, `Nama_sungai`, `Titik_pantau`, `Periode`, `Nilai_pij`) VALUES
	(1, '', 'Cimahi Hulu', '2019-04-05', 11.63),
	(2, '', 'Cimahi Tengah', '2019-04-01', 9.28),
	(3, '', 'Cimahi Hilir', '2019-04-05', 11.64),
	(4, '', 'Cisangkan Hulu', '2019-04-01', 10.28),
	(5, '', 'Cisangkan Tengah', '2019-04-01', 11.67),
	(6, '', 'Cisangkan Hilir', '2019-04-02', 7.94),
	(7, '', 'Cibabat Hulu', '2019-04-04', 11.66),
	(8, '', 'Cibabat Tengah', '2019-04-04', 11.76),
	(9, '', 'Cibabat Hilir', '2019-04-05', 11.83),
	(10, '', 'Cibaligo Hulu', '2019-04-04', 11.75),
	(11, '', 'Cibaligo Tengah', '2019-04-04', 11.79),
	(12, '', 'Cibaligo Hilir', '2019-04-02', 12.01),
	(13, '', 'Cibeureum Hulu', '2019-04-01', 10.31),
	(14, '', 'Cibeureum Tengah', '2019-04-02', 9.48),
	(15, '', 'Cibeureum Hilir', '2019-04-02', 10.42),
	(16, '', 'Cimahi Hulu', '2019-07-10', 1.6),
	(17, '', 'Cimahi Tengah', '2019-07-10', 12.29),
	(18, '', 'Cimahi Hilir', '2019-07-09', 15.15),
	(19, '', 'Cisangkan Hulu', '2019-07-10', 14.48),
	(20, '', 'Cisangkan Tengah', '2019-07-10', 15.67),
	(21, '', 'Cisangkan Hilir', '2019-07-08', 15.81),
	(22, '', 'Cibabat Hulu', '2019-07-12', 10.56),
	(23, '', 'Cibabat Tengah', '2019-07-12', 14.92),
	(24, '', 'Cibabat Hilir', '2019-07-16', 15.89),
	(25, '', 'Cibaligo Hulu', '2019-07-16', 14.49),
	(26, '', 'Cibaligo Tengah', '2019-07-15', 15.22),
	(27, '', 'Cibaligo Hilir', '2019-07-08', 17.57),
	(28, '', 'Cibeureum Hulu', '2019-07-09', 12.56),
	(29, '', 'Cibeureum Tengah', '2019-07-08', 12.86),
	(30, '', 'Cibeureum Hilir', '2019-07-08', 11.48),
	(31, '', 'Cimahi Hulu', '2019-11-07', 7.44),
	(32, '', 'Cimahi Tengah', '2019-11-05', 11.18),
	(33, '', 'Cimahi Hilir', '2019-11-05', 15.59),
	(34, '', 'Cisangkan Hulu', '2019-11-07', 5.26),
	(35, '', 'Cisangkan Tengah', '2019-11-05', 17),
	(36, '', 'Cisangkan Hilir', '2019-11-05', 11.28),
	(37, '', 'Cibabat Hulu', '2019-11-07', 14.3),
	(38, '', 'Cibabat Tengah', '2019-11-04', 15.5),
	(39, '', 'Cibabat Hilir', '2019-11-06', 16.42),
	(40, '', 'Cibaligo Hulu', '2019-11-06', 15.31),
	(41, '', 'Cibaligo Tengah', '2019-11-06', 13.85),
	(42, '', 'Cibaligo Hilir', '2019-11-06', 15.55),
	(43, '', 'Cibeureum Hulu', '2019-11-04', 13.31),
	(44, '', 'Cibeureum Tengah', '2019-11-04', 14.23),
	(45, '', 'Cibeureum Hilir', '2019-11-04', 12.15),
	(46, '', 'Cimahi Hulu', '2020-02-20', 6.29),
	(47, '', 'Cimahi Tengah', '2020-02-18', 9.57),
	(48, '', 'Cimahi Hilir', '2020-02-18', 11.31),
	(49, '', 'Cisangkan Hulu', '2020-02-20', 9.49),
	(50, '', 'Cisangkan Tengah', '2020-02-18', 9.48),
	(51, '', 'Cisangkan Hilir', '2020-02-18', 6.93),
	(52, '', 'Cibabat Hulu', '2020-02-20', 9.16),
	(53, '', 'Cibabat Tengah', '2020-02-17', 12.96),
	(54, '', 'Cibabat Hilir', '2020-02-19', 12.14),
	(55, '', 'Cibaligo Hulu', '2020-02-19', 11.24),
	(56, '', 'Cibaligo Tengah', '2020-02-19', 11.68),
	(57, '', 'Cibaligo Hilir', '2020-02-19', 13.77),
	(58, '', 'Cibeureum Hulu', '2020-02-17', 10.8),
	(59, '', 'Cibeureum Tengah', '2020-02-17', 10.86),
	(60, '', 'Cibeureum Hilir', '2020-02-17', 9.02),
	(61, '', 'Cimahi Hulu', '2020-07-15', 15.47),
	(62, '', 'Cimahi Tengah', '2020-07-16', 11.31),
	(63, '', 'Cimahi Hilir', '2020-07-16', 12.12),
	(64, '', 'Cisangkan Hulu', '2020-07-16', 15.42),
	(65, '', 'Cisangkan Tengah', '2020-07-16', 4.59),
	(66, '', 'Cisangkan Hilir', '2020-07-16', 13.97),
	(67, '', 'Cibabat Hulu', '2020-07-15', 12.2),
	(68, '', 'Cibabat Tengah', '2020-07-15', 11.74),
	(69, '', 'Cibabat Hilir', '2020-07-15', 16),
	(70, '', 'Cibaligo Hulu', '2020-07-15', 15.89),
	(71, '', 'Cibaligo Tengah', '2020-07-15', 12.46),
	(72, '', 'Cibaligo Hilir', '2020-07-15', 16.37),
	(73, '', 'Cibeureum Hulu', '2020-07-15', 11.52),
	(74, '', 'Cibeureum Tengah', '2020-07-16', 12.21),
	(75, '', 'Cibeureum Hilir', '2020-07-15', 13.63),
	(76, '', 'Cimahi Hulu', '2020-10-22', 15.06),
	(77, '', 'Cimahi Tengah', '2020-10-22', 13.42),
	(78, '', 'Cimahi Hilir', '2020-10-22', 13.91),
	(79, '', 'Cisangkan Hulu', '2020-10-22', 14.2),
	(80, '', 'Cisangkan Tengah', '2020-10-22', 14.98),
	(81, '', 'Cisangkan Hilir', '2020-10-22', 12.41),
	(82, '', 'Cibabat Hulu', '2020-10-22', 13.84),
	(83, '', 'Cibabat Tengah', '2020-10-22', 13.19),
	(84, '', 'Cibabat Hilir', '2020-10-22', 11.15),
	(85, '', 'Cibaligo Hulu', '2020-10-22', 14.94),
	(86, '', 'Cibaligo Tengah', '2020-10-22', 15.49),
	(87, '', 'Cibaligo Hilir', '2020-10-22', 16.33),
	(88, '', 'Cibeureum Hulu', '2020-10-22', 10.81),
	(89, '', 'Cibeureum Tengah', '2020-10-22', 15.26),
	(90, '', 'Cibeureum Hilir', '2020-10-22', 16.22);
/*!40000 ALTER TABLE `ipa` ENABLE KEYS */;

-- Dumping structure for table dlh_cimahi.katagori_pencemaran
CREATE TABLE IF NOT EXISTS `katagori_pencemaran` (
  `id_ipa` int(11) NOT NULL AUTO_INCREMENT,
  `katagori` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_ipa`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table dlh_cimahi.katagori_pencemaran: ~4 rows (approximately)
/*!40000 ALTER TABLE `katagori_pencemaran` DISABLE KEYS */;
INSERT INTO `katagori_pencemaran` (`id_ipa`, `katagori`) VALUES
	(1, 'Memenuhi'),
	(2, 'Ringan'),
	(3, 'Sedang'),
	(4, 'Berat');
/*!40000 ALTER TABLE `katagori_pencemaran` ENABLE KEYS */;

-- Dumping structure for table dlh_cimahi.sungai
CREATE TABLE IF NOT EXISTS `sungai` (
  `id_sungai` varchar(50) NOT NULL,
  `jumlah` varchar(50) NOT NULL,
  `nama_sungai` varchar(50) DEFAULT NULL,
  `periode` date DEFAULT NULL,
  PRIMARY KEY (`id_sungai`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table dlh_cimahi.sungai: ~15 rows (approximately)
/*!40000 ALTER TABLE `sungai` DISABLE KEYS */;
INSERT INTO `sungai` (`id_sungai`, `jumlah`, `nama_sungai`, `periode`) VALUES
	('1', '12', 'Cimahi Hulu', '2017-11-09'),
	('10', '32', 'Cisangkan Hulu', '2022-03-31'),
	('11', '323', 'Cisangkan Tengah', '2022-03-31'),
	('12', '3', 'Cisangkan Hilir', '2022-03-31'),
	('13', '3', 'Cibaligo Hulu', '2022-03-31'),
	('14', '45', 'Cibaligo Tengah', '2022-03-31'),
	('15', '6', 'Cibaligo hilir', '2022-03-31'),
	('2', '3', 'Cimahi Tengah', '2017-11-09'),
	('3', '23', 'Cimahi Hilir', '2017-11-09'),
	('4', '54', 'Cibabat Hulu', '2017-11-09'),
	('5', '45', 'Cibabat Tengah', '2017-11-28'),
	('6', '21', 'Cibabat Hilir', '2017-11-27'),
	('7', '32', 'Cibeureum Hulu', '2022-03-31'),
	('8', '31', 'Cibeureum Tengah', '2017-11-28'),
	('9', '3', 'Cibeureum Hilir', '2022-03-31');
/*!40000 ALTER TABLE `sungai` ENABLE KEYS */;

-- Dumping structure for table dlh_cimahi.thread
CREATE TABLE IF NOT EXISTS `thread` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_sungai` varchar(50) NOT NULL,
  `Nilai_pij` varchar(50) NOT NULL,
  `id_ipa` int(11) DEFAULT NULL,
  `Nilai_ipa` double DEFAULT NULL,
  `Jumlah_ipa` varchar(50) DEFAULT NULL,
  `Status_Mutu_Air` text DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_sungai` (`id_sungai`),
  KEY `id_ipa` (`id_ipa`),
  CONSTRAINT `FK_thread_katagori_pencemaran` FOREIGN KEY (`id_ipa`) REFERENCES `katagori_pencemaran` (`id_ipa`),
  CONSTRAINT `FK_thread_sungai` FOREIGN KEY (`id_sungai`) REFERENCES `sungai` (`id_sungai`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table dlh_cimahi.thread: ~15 rows (approximately)
/*!40000 ALTER TABLE `thread` DISABLE KEYS */;
INSERT INTO `thread` (`id`, `id_sungai`, `Nilai_pij`, `id_ipa`, `Nilai_ipa`, `Jumlah_ipa`, `Status_Mutu_Air`) VALUES
	(3, '1', '1.26', 1, 0, '0', '10'),
	(4, '2', '2.69', 2, 6.67, '4', 'Ringan'),
	(7, '3', '8.99', 3, 9, '9', 'Sedang'),
	(9, '4', '3.46', 4, 5.67, '17', 'Ringan'),
	(13, '5', '5.50', NULL, NULL, NULL, 'Sedang'),
	(14, '6', '10.31', NULL, NULL, NULL, 'Berat'),
	(16, '7', '5.37', NULL, NULL, NULL, 'Sedang'),
	(17, '8', '6.13', NULL, NULL, NULL, 'Sedang'),
	(18, '9', '6.31', NULL, NULL, NULL, 'Sedang'),
	(19, '10', '5.18', NULL, NULL, NULL, 'Sedang'),
	(20, '11', '9.09', NULL, NULL, NULL, 'Sedang'),
	(21, '12', '9.44', NULL, NULL, NULL, 'Sedang'),
	(22, '13', '3.45', NULL, NULL, NULL, 'Ringan'),
	(23, '14', '10.29', NULL, NULL, NULL, 'Berat'),
	(24, '15', '11.11', NULL, NULL, NULL, 'Berat');
/*!40000 ALTER TABLE `thread` ENABLE KEYS */;

-- Dumping structure for table dlh_cimahi.titikpantau
CREATE TABLE IF NOT EXISTS `titikpantau` (
  `id_tikpan` varchar(50) NOT NULL,
  `id_sungai` varchar(50) DEFAULT NULL,
  `Nama_sungai` varchar(50) DEFAULT NULL,
  `koord_tikpan` varchar(50) DEFAULT NULL,
  `periode_pantau` int(11) DEFAULT NULL,
  `status_mutu` enum('xxx','xxx','xxx','xxx') DEFAULT NULL,
  `Param_1` int(11) DEFAULT NULL,
  `Param_2` int(11) DEFAULT NULL,
  `Param_3` int(11) DEFAULT NULL,
  `Param_4` int(11) DEFAULT NULL,
  `Param_5` int(11) DEFAULT NULL,
  `Param_6` int(11) DEFAULT NULL,
  `Param_7` int(11) DEFAULT NULL,
  `tanggal_pantau` date DEFAULT NULL,
  `Nilai_pij` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_tikpan`),
  KEY `id_sungai` (`id_sungai`),
  CONSTRAINT `FK_titikpantau_sungai` FOREIGN KEY (`id_sungai`) REFERENCES `sungai` (`id_sungai`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table dlh_cimahi.titikpantau: ~2 rows (approximately)
/*!40000 ALTER TABLE `titikpantau` DISABLE KEYS */;
INSERT INTO `titikpantau` (`id_tikpan`, `id_sungai`, `Nama_sungai`, `koord_tikpan`, `periode_pantau`, `status_mutu`, `Param_1`, `Param_2`, `Param_3`, `Param_4`, `Param_5`, `Param_6`, `Param_7`, `tanggal_pantau`, `Nilai_pij`) VALUES
	('1', NULL, 'cimahi', 'Hulu', 1, '', 2, 2, 45, 5, 3, 4, 5, '2022-04-14', '17.736895919603217'),
	('2', '2', 'cimahi', 'Tengah', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-14', NULL);
/*!40000 ALTER TABLE `titikpantau` ENABLE KEYS */;

-- Dumping structure for table dlh_cimahi.tss_aktual
CREATE TABLE IF NOT EXISTS `tss_aktual` (
  `id_tss` int(11) NOT NULL AUTO_INCREMENT,
  `titik_pantau` varchar(50) DEFAULT NULL,
  `tss_aktual` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_tss`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table dlh_cimahi.tss_aktual: ~15 rows (approximately)
/*!40000 ALTER TABLE `tss_aktual` DISABLE KEYS */;
INSERT INTO `tss_aktual` (`id_tss`, `titik_pantau`, `tss_aktual`) VALUES
	(1, 'Sungai Cisangkan Hulu', '29.4'),
	(2, 'Sungai Cisangkan Tengah', '433.2'),
	(3, 'Sungai Cisangkan Hilir', '2073.6'),
	(4, 'Sungai Cibaligo Hulu', '423.4'),
	(5, 'Sungai Cibaligo Tengah', '622.1'),
	(6, 'Sungai Cibaligo Hilir', '482.1'),
	(7, 'Sungai Cibeureum Hulu', '40205.4'),
	(8, 'Sungai Cibeureum Tengah', '8741.1'),
	(9, 'Sungai Cibeureum Hilir', '53913.6'),
	(10, 'Sungai Cibabat Hulu', '1766.0'),
	(11, 'Sungai Cibabat Tengah', '124.4'),
	(12, 'Sungai Cibabat Hilir', '22.5'),
	(13, 'Sungai Cimahi Hulu', '5806.1'),
	(14, 'Sungai Cimahi Tengah', '40525.9'),
	(15, 'Sungai Cimahi Hilir', '0');
/*!40000 ALTER TABLE `tss_aktual` ENABLE KEYS */;

-- Dumping structure for table dlh_cimahi.user
CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `user_email` varchar(50) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `tanggal` date DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table dlh_cimahi.user: ~0 rows (approximately)
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`id_user`, `user_email`, `user_password`, `user_name`, `tanggal`) VALUES
	(1, 'admin@gmail.com', '$2y$10$JmPsceG2lmEeFxCXuPRatebOZpbC/Uezg0Nzpu2M8Ry8b.fI4e7Wu', 'admin', '2022-03-30');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
