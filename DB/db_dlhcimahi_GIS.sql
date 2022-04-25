-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2022 at 12:18 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_dlhcimahi`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbltitikpantau`
--

CREATE TABLE `tbltitikpantau` (
  `id` int(11) NOT NULL,
  `nama_titikPantau` varchar(50) DEFAULT NULL,
  `nama_sungai` varchar(50) DEFAULT NULL,
  `latitude` varchar(50) DEFAULT NULL,
  `longitude` varchar(50) DEFAULT NULL,
  `deskripsi` varchar(50) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `waktu_sampling` date DEFAULT NULL,
  `BOD` float DEFAULT NULL,
  `Debit` float DEFAULT NULL,
  `beban_pencemar` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbltitikpantau`
--

INSERT INTO `tbltitikpantau` (`id`, `nama_titikPantau`, `nama_sungai`, `latitude`, `longitude`, `deskripsi`, `foto`, `waktu_sampling`, `BOD`, `Debit`, `beban_pencemar`) VALUES
(1, 'Hulu', 'Sungai Cisangkan', '-6.860884239696158', '107.54599258147103', 'Buruk', '1647915480_8626f1536d9ae5da9650.jpeg', NULL, NULL, NULL, NULL),
(2, 'Tengah', 'Sungai Cisangkan', '-6.885228781479196', '107.54367203210677', 'Baik', '1647914686_cbabe543856cd8f1b694.jpeg', NULL, NULL, NULL, NULL),
(3, 'Hilir', 'Sungai Cisangkan', '-6.918239828701714', '107.5337405066197', 'Baik', NULL, NULL, NULL, NULL, NULL),
(4, 'Hulu', 'Sungai Cimahi', '-6.8549544437343375', '107.5625949552502', 'Baik', NULL, NULL, NULL, NULL, NULL),
(5, 'Tengah', 'Sungai Cimahi', '-6.891430987088857', '107.54116955295765', 'Baik', NULL, NULL, NULL, NULL, NULL),
(6, 'Hilir', 'Sungai Cimahi', '-6.908684460319787', '107.5380362078322', 'Baik', NULL, NULL, NULL, NULL, NULL),
(7, 'Hulu', 'Sungai Cibeureum', '-6.883450601550846', '107.57178894175487', 'Baik', NULL, NULL, NULL, NULL, NULL),
(8, 'Tengah', 'Sungai Cibeureum', '-6.91901856716193', '107.56538197799061', 'Baik', NULL, NULL, NULL, NULL, NULL),
(9, 'Hilir', 'Sungai Cibeureum', '-6.930350536583275', '107.56195502862906', 'Baik', NULL, NULL, NULL, NULL, NULL),
(10, 'Hulu', 'Sungai Cilember', '-6.874448809289007', '107.56153095525033', 'Baik', NULL, NULL, NULL, NULL, NULL),
(11, 'Tengah', 'Sungai Cilember', NULL, NULL, 'Baik', NULL, NULL, NULL, NULL, NULL),
(12, 'Hilir', 'Sungai Cilember', NULL, NULL, 'Baik', NULL, NULL, NULL, NULL, NULL),
(13, 'Hulu', 'Sungai Cibaligo', '', '', 'Baik', NULL, NULL, NULL, NULL, NULL),
(14, 'Tengah', 'Sungai Cibaligo', '', '', 'Baik', NULL, NULL, NULL, NULL, NULL),
(15, 'Hilir', 'Sungai Cibaligo', '', '', 'Baik', NULL, NULL, NULL, NULL, NULL),
(20, 'Titik Pantau 1', 'Sungai Cimahi 2', '-6.869221693249033', '107.54225747940508', 'baik', '1648121949_ba19f16f32ec3ecb0cdc.jpg', NULL, NULL, NULL, NULL),
(21, 'Hulu', 'Cisangkan', NULL, NULL, NULL, NULL, '2020-01-01', 7, 0.02, 12.096);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `user_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `user_email`, `user_password`, `user_name`) VALUES
(1, 'admin@gmail.com', '$2y$10$JmPsceG2lmEeFxCXuPRatebOZpbC/Uezg0Nzpu2M8Ry8b.fI4e7Wu', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbltitikpantau`
--
ALTER TABLE `tbltitikpantau`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbltitikpantau`
--
ALTER TABLE `tbltitikpantau`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
