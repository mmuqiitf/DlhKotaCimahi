-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2022 at 09:23 AM
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
-- Database: `dlh_cimahi`
--

-- --------------------------------------------------------

--
-- Table structure for table `bod_eksisting`
--

CREATE TABLE `bod_eksisting` (
  `ID_BOD_Eksisting` int(11) NOT NULL,
  `nama_sungai` varchar(50) DEFAULT NULL,
  `titik_pantau` enum('Hulu','Tengah','Hilir') DEFAULT NULL,
  `BOD` float DEFAULT NULL,
  `Debit` float DEFAULT NULL,
  `beban_pencemar` float DEFAULT NULL,
  `waktu_sampling` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bod_eksisting`
--

INSERT INTO `bod_eksisting` (`ID_BOD_Eksisting`, `nama_sungai`, `titik_pantau`, `BOD`, `Debit`, `beban_pencemar`, `waktu_sampling`) VALUES
(371, 'Cisangkan', 'Hulu', 7, 0.02, 12.096, '2022-04-05'),
(372, 'Cisangkan', 'Hulu', 7, 0.02, 12.1, '2020-02-03'),
(373, 'Cisangkan', 'Tengah', 17, 0.19, 279.1, '2020-02-03'),
(374, 'Cisangkan', 'Hilir', 14, 2.4, 2, '2020-02-03'),
(375, 'Cibaligo', 'Hulu', 42, 0.35, 1, '2020-02-03'),
(376, 'Cibaligo', 'Tengah', 46, 0.24, 953.9, '2020-02-03'),
(377, 'Cibaligo', 'Hilir', 54, 0.09, 419.9, '2020-02-03'),
(378, 'Cibeureum', 'Hulu', 7, 8.78, 5, '2020-02-03'),
(379, 'Cibeureum', 'Tengah', 8, 1.51, 1, '2020-02-03'),
(380, 'Cibeureum', 'Hilir', 10, 10.4, 8, '2020-02-03'),
(381, 'Cilember', 'Hulu', 17, 0.73, 1, '2020-02-03'),
(382, 'Cilember', 'Tengah', 38, 0.06, 197, '2020-02-03'),
(383, 'Cilember', 'Hilir', 47, 0.02, 81.2, '2020-02-03'),
(384, 'Cimahi', 'Hulu', 27, 0.7, 1, '2020-02-03'),
(385, 'Cimahi', 'Tengah', 19, 1.59, 2, '2020-02-03'),
(386, 'Cimahi', 'Hilir', 8, 0, 0, '2020-02-03'),
(387, 'Cisangkan', 'Hulu', 7, 0.02, 12.096, '0008-12-12'),
(388, 'Cisangkan', 'Hulu', 7, 0.02, 12.096, '2022-04-26');

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
-- Indexes for table `bod_eksisting`
--
ALTER TABLE `bod_eksisting`
  ADD PRIMARY KEY (`ID_BOD_Eksisting`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bod_eksisting`
--
ALTER TABLE `bod_eksisting`
  MODIFY `ID_BOD_Eksisting` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=389;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
