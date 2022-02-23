-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2022 at 09:12 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kriyata`
--

-- --------------------------------------------------------

--
-- Table structure for table `sports-main-user`
--

CREATE TABLE `sports-main-user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `from_ip` varchar(255) NOT NULL,
  `from_browser` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sports-main-user`
--

INSERT INTO `sports-main-user` (`id`, `name`, `email`, `phone`, `password`, `from_ip`, `from_browser`, `time`) VALUES
(1, 'TAWDE HRUSHIKESH DEEPAK MADHAVI', 'hdtawde@gmail.com', '8652827907', '5d54510ccd96e5fed9b0cd62e9f042c9786d32ae1d69ee155773f1a8fc3fa2bb25f38edbed0d821604ef7db7cbff035d454236c88fd3a99c431f282c788ad9d7', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.102 Safari/537.36', 'Sun, 20 Feb 2022 19:18:00 +0530'),
(4, 'sd', 'dssd', '9822989211', 'b002315ed000197ee8f0440c97184d9bc4b8368365f645879e8adac47aec97f3d8e3eefab93f3b42012bddeaf5595d94a36a95c7a21dbb57e57035a2f2402d71', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.102 Safari/537.36', 'Tue, 22 Feb 2022 13:33:40 +0530'),
(5, 'Gagan Bhirangi', 'sd@dsd.com', '8879527426', 'b002315ed000197ee8f0440c97184d9bc4b8368365f645879e8adac47aec97f3d8e3eefab93f3b42012bddeaf5595d94a36a95c7a21dbb57e57035a2f2402d71', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.102 Safari/537.36', 'Tue, 22 Feb 2022 13:35:10 +0530');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sports-main-user`
--
ALTER TABLE `sports-main-user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sports-main-user`
--
ALTER TABLE `sports-main-user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
