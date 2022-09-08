-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 09, 2022 at 12:43 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `walet`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id` int(11) NOT NULL,
  `data_masuk` int(11) NOT NULL,
  `data_keluar` int(11) NOT NULL,
  `jumlah_populasi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `data_masuk`, `data_keluar`, `jumlah_populasi`) VALUES
(1, 29, 27, 6),
(2, 29, 27, 6),
(3, 29, 27, 6),
(4, 294, 274, 64),
(5, 29, 27, 6),
(6, 29, 27, 6),
(7, 30, 271, 611),
(8, 29, 27, 6),
(9, 29, 23, 6),
(10, 29, 27, 6),
(11, 29, 27, 6),
(12, 29, 1, 6),
(13, 2, 1, 6),
(14, 2, 1, 6),
(15, 2, 1, 6),
(16, 2, 1, 15),
(17, 2, 27, 15),
(18, 29, 27, 15),
(19, 29, 27, 6),
(20, 21, 27, 6),
(21, 21, 20, 6),
(22, 20, 20, 6),
(23, 20, 20, 10),
(24, 21, 20, 10),
(25, 25, 20, 10),
(26, 25, 20, 10),
(27, 21, 20, 10),
(28, 20, 20, 10),
(29, 21, 20, 10),
(30, 21, 20, 10),
(31, 21, 20, 10),
(32, 21, 20, 10),
(33, 21, 20, 10),
(34, 21, 20, 10),
(35, 21, 20, 10),
(36, 21, 20, 10),
(37, 21, 20, 10),
(38, 2, 1, 3),
(39, 2, 1, 5),
(40, 2, 1, 2),
(41, 2, 1, 132),
(42, 132, 1, 132),
(43, 132, 546, 132),
(44, 132, 1, 132),
(45, 2, 1, 132),
(46, 2, 1, 3),
(47, 2, 123, 3),
(48, 123, 123, 3),
(49, 123, 123, 123),
(50, 123, 1, 123),
(51, 2, 1, 123),
(52, 2, 1, 3),
(53, 2, 321, 3),
(54, 231, 321, 3),
(55, 231, 321, 212),
(56, 231, 1, 212),
(57, 2, 1, 212),
(58, 2, 1, 3),
(59, 21, 20, 10),
(60, 21, 20, 10),
(61, 123, 123, 123),
(62, 21, 20, 10),
(63, 4, 4, 0),
(64, 5, 4, 0),
(65, 5, 4, 2),
(66, 5, 8, 2),
(67, 5, 4, 2),
(68, 2, 2, 1),
(69, 2, 3, 1),
(70, 2, 3, 0),
(71, 2, 3, 0),
(72, 2, 4, 0),
(73, 2, 4, 0),
(74, 3, 4, 0),
(75, 3, 4, 1),
(76, 3, 5, 0),
(77, 4, 5, 0),
(78, 4, 5, 1),
(79, 4, 5, 1),
(80, 4, 6, 1),
(81, 4, 6, 0),
(82, 4, 6, 0),
(83, 5, 6, 0),
(84, 5, 7, 0),
(85, 5, 7, 0),
(86, 5, 8, 0),
(87, 5, 8, 0),
(88, 5, 9, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
