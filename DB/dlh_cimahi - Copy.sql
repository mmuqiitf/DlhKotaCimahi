-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2022 at 08:00 AM
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
  `nama_sungai` varchar(50) NOT NULL,
  `titik_pantau` enum('Hulu','Tengah','Hilir') NOT NULL,
  `BOD` float NOT NULL,
  `Debit` float NOT NULL,
  `beban_pencemar` float NOT NULL,
  `waktu_sampling` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bod_eksisting`
--

INSERT INTO `bod_eksisting` (`ID_BOD_Eksisting`, `nama_sungai`, `titik_pantau`, `BOD`, `Debit`, `beban_pencemar`, `waktu_sampling`) VALUES
(2, 'Sungai A', 'Hulu', 0, 0, 0, '2022-12-12'),
(3, 'Sungai Cisangkan', 'Tengah', 23, 33, 0, '0000-00-00'),
(4, 'Cibaligo', 'Tengah', 7, 0, 12, '0000-00-00'),
(5, 'Cisangkan', 'Hulu', 7, 0, 12, '0000-00-00'),
(6, 'Cisangkan', 'Hulu', 7, 0, 12, '0000-00-00'),
(7, 'Cisangkan', 'Hulu', 7, 0, 12, '0000-00-00');

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
  MODIFY `ID_BOD_Eksisting` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
