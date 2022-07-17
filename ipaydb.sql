-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2022 at 11:30 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ipaydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `ipay_user`
--

CREATE TABLE `ipay_user` (
  `id` int(6) UNSIGNED NOT NULL,
  `name` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `number` varchar(11) NOT NULL,
  `money` float DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ipay_user`
--

INSERT INTO `ipay_user` (`id`, `name`, `password`, `email`, `number`, `money`) VALUES
(14, 'Gian Dasigan', 'gian123', 'giand@gmail.com', '09292312333', 453),
(15, 'Hiroyuki Suzuki', 'hiro123', 'hdsuzuki@gmail.com', '09567933589', 1000),
(16, 'Kyle Basco', 'kyle123', 'kylebasco@gmail.com', '09153846211', 1200),
(18, 'Cherry Cardiel', 'cherrycardi', 'crdlc@gmail.com', '09152839932', 1100),
(19, 'John Malabid', 'jp123', 'jpmalabid@gmail.com', '09182752662', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ipay_user`
--
ALTER TABLE `ipay_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ipay_user`
--
ALTER TABLE `ipay_user`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
