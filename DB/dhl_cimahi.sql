-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.14-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


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

-- Dumping data for table dlh_cimahi.bod_eksisting: ~6 rows (approximately)
/*!40000 ALTER TABLE `bod_eksisting` DISABLE KEYS */;
INSERT INTO `bod_eksisting` (`ID_BOD_Eksisting`, `nama_sungai`, `titik_pantau`, `BOD`, `Debit`, `beban_pencemar`, `waktu_sampling`) VALUES
	(2, 'Sungai A', 'Hulu', 0, 0, 0, '2022-12-12'),
	(3, 'Sungai Cisangkan', 'Tengah', 23, 33, 0, '0000-00-00'),
	(4, 'Cibaligo', 'Tengah', 7, 0, 12, '0000-00-00'),
	(5, 'Cisangkan', 'Hulu', 7, 0, 12, '0000-00-00'),
	(6, 'Cisangkan', 'Hulu', 7, 0, 12, '0000-00-00'),
	(7, 'Cisangkan', 'Hulu', 7, 0, 12, '0000-00-00');
/*!40000 ALTER TABLE `bod_eksisting` ENABLE KEYS */;

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
  `nama_sungai` varchar(50) DEFAULT NULL,
  `periode` date DEFAULT NULL,
  PRIMARY KEY (`id_sungai`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table dlh_cimahi.sungai: ~15 rows (approximately)
/*!40000 ALTER TABLE `sungai` DISABLE KEYS */;
INSERT INTO `sungai` (`id_sungai`, `nama_sungai`, `periode`) VALUES
	('1', 'Cimahi Hulu', '2017-11-09'),
	('10', 'Cisangkan Hulu', '2022-03-31'),
	('11', 'Cisangkan Tengah', '2022-03-31'),
	('12', 'Cisangkan Hilir', '2022-03-31'),
	('13', 'Cibaligo Hulu', '2022-03-31'),
	('14', 'Cibaligo Tengah', '2022-03-31'),
	('15', 'Cibaligo hilir', '2022-03-31'),
	('2', 'Cimahi Tengah', '2017-11-09'),
	('3', 'Cimahi Hilir', '2017-11-09'),
	('4', 'Cibabat Hulu', '2017-11-09'),
	('5', 'Cibabat Tengah', '2017-11-28'),
	('6', 'Cibabat Hilir', '2017-11-27'),
	('7', 'Cibeureum Hulu', '2022-03-31'),
	('8', 'Cibeureum Tengah', '2017-11-28'),
	('9', 'Cibeureum Hilir', '2022-03-31');
/*!40000 ALTER TABLE `sungai` ENABLE KEYS */;

-- Dumping structure for table dlh_cimahi.thread
CREATE TABLE IF NOT EXISTS `thread` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_sungai` varchar(50) NOT NULL,
  `Nilai_pij` varchar(50) NOT NULL,
  `id_ipa` int(11) DEFAULT NULL,
  `Nilai_ipa` double DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_sungai` (`id_sungai`),
  KEY `id_ipa` (`id_ipa`),
  CONSTRAINT `FK_thread_katagori_pencemaran` FOREIGN KEY (`id_ipa`) REFERENCES `katagori_pencemaran` (`id_ipa`),
  CONSTRAINT `FK_thread_sungai` FOREIGN KEY (`id_sungai`) REFERENCES `sungai` (`id_sungai`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table dlh_cimahi.thread: ~15 rows (approximately)
/*!40000 ALTER TABLE `thread` DISABLE KEYS */;
INSERT INTO `thread` (`id`, `id_sungai`, `Nilai_pij`, `id_ipa`, `Nilai_ipa`) VALUES
	(3, '1', '1.26', 1, 0),
	(4, '2', '2.69', 2, 6.67),
	(7, '3', '8.99', 3, 9),
	(9, '4', '3.46', 4, 5.67),
	(13, '5', '5.50', NULL, NULL),
	(14, '6', '10.31', NULL, NULL),
	(16, '7', '5.37', NULL, NULL),
	(17, '8', '6.13', NULL, NULL),
	(18, '9', '6.31', NULL, NULL),
	(19, '10', '5.18', NULL, NULL),
	(20, '11', '9.09', NULL, NULL),
	(21, '12', '9.44', NULL, NULL),
	(22, '13', '3.45', NULL, NULL),
	(23, '14', '10.29', NULL, NULL),
	(24, '15', '11.11', NULL, NULL);
/*!40000 ALTER TABLE `thread` ENABLE KEYS */;

-- Dumping structure for table dlh_cimahi.titikpantau
CREATE TABLE IF NOT EXISTS `titikpantau` (
  `id_tikpan` varchar(50) NOT NULL,
  `id_sungai` varchar(50) DEFAULT NULL,
  `koord_tikpan` varchar(50) DEFAULT NULL,
  `periode_pantau` date DEFAULT NULL,
  `status_mutu` enum('xxx','xxx','xxx','xxx') DEFAULT NULL,
  `Param_1` int(11) DEFAULT NULL,
  `Param_2` int(11) DEFAULT NULL,
  `Param_3` int(11) DEFAULT NULL,
  `Param_4` int(11) DEFAULT NULL,
  `Param_5` int(11) DEFAULT NULL,
  `Param_6` int(11) DEFAULT NULL,
  `Param_7` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_tikpan`),
  KEY `id_sungai` (`id_sungai`),
  CONSTRAINT `FK_titikpantau_sungai` FOREIGN KEY (`id_sungai`) REFERENCES `sungai` (`id_sungai`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table dlh_cimahi.titikpantau: ~0 rows (approximately)
/*!40000 ALTER TABLE `titikpantau` DISABLE KEYS */;
/*!40000 ALTER TABLE `titikpantau` ENABLE KEYS */;

-- Dumping structure for table dlh_cimahi.tss_eksisting
CREATE TABLE IF NOT EXISTS `tss_eksisting` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `nama_sungai` varchar(50) NOT NULL,
  `titik_pantau` enum('Hulu','Tengah','Hilir') NOT NULL,
  `data_tss` float NOT NULL,
  `debit_air` float NOT NULL,
  `beban_pencemar` float NOT NULL,
  `waktu_sampling` date NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table dlh_cimahi.tss_eksisting: ~0 rows (approximately)
/*!40000 ALTER TABLE `tss_eksisting` DISABLE KEYS */;
INSERT INTO `tss_eksisting` (`ID`, `nama_sungai`, `titik_pantau`, `data_tss`, `debit_air`, `beban_pencemar`, `waktu_sampling`) VALUES
	(1, 'Cisangkan', 'Hulu', 17, 0.02, 29.4, '2022-04-07');
/*!40000 ALTER TABLE `tss_eksisting` ENABLE KEYS */;

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
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
