-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 22, 2022 at 04:30 PM
-- Server version: 8.0.23
-- PHP Version: 7.3.29-to-be-removed-in-future-macOS

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
  `ID_BOD_Eksisting` int NOT NULL,
  `nama_sungai` varchar(50) NOT NULL,
  `titik_pantau` enum('Hulu','Tengah','Hilir') NOT NULL,
  `BOD` int NOT NULL,
  `Debit` int NOT NULL,
  `beban_pencemar` int NOT NULL,
  `waktu_sampling` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `bod_eksisting`
--

INSERT INTO `bod_eksisting` (`ID_BOD_Eksisting`, `nama_sungai`, `titik_pantau`, `BOD`, `Debit`, `beban_pencemar`, `waktu_sampling`) VALUES
(2, 'Sungai A', 'Hulu', 0, 0, 0, '2022-12-12');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int NOT NULL,
  `user_email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `user_password` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `user_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
  MODIFY `ID_BOD_Eksisting` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;