-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2023 at 05:07 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `parkir_mat`
--

-- --------------------------------------------------------

--
-- Table structure for table `tiket`
--

CREATE TABLE `tiket` (
  `nomor` char(100) NOT NULL,
  `booked` varchar(100) DEFAULT NULL,
  `status` varchar(100) NOT NULL,
  `by` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tiket`
--

INSERT INTO `tiket` (`nomor`, `booked`, `status`, `by`) VALUES
('1001', 'No', 'No', '-'),
('1002', 'No', 'No', '-'),
('1003', 'No', 'No', '-'),
('1004', 'No', 'No', '-'),
('1005', 'No', 'No', '-'),
('1006', 'No', 'No', '-'),
('1007', 'Yes', 'No', 'Jabran'),
('1008', 'Yes', 'Yes', 'aqila'),
('1009', 'Yes', 'Yes', 'Kakasi'),
('1010', 'No', 'No', '-'),
('1011', 'No', 'No', '-'),
('1012', 'No', 'No', '-'),
('1013', 'No', 'No', '-'),
('1014', 'No', 'No', '-'),
('1015', 'Yes', 'Yes', 'Laras'),
('1016', 'No', 'No', '-'),
('1017', 'No', 'No', '-'),
('1018', 'No', 'No', '-'),
('1019', 'No', 'No', '-'),
('1020', 'No', 'No', '-');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(9, 'karim', '$2y$10$2geiHE/IrC2T.FRGv4VYGOV5UtzOVp7cmPFYWdQi9NzKfPLLJdOby'),
(11, 'farrel', '$2y$10$56fCwQRazkJ2YTRkthf4mOe3LkNPfYoAyC.vJX2hjSDVG5OoUo0yS');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tiket`
--
ALTER TABLE `tiket`
  ADD PRIMARY KEY (`nomor`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
