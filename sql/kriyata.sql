-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2022 at 07:51 AM
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
-- Table structure for table `entries`
--

CREATE TABLE `entries` (
  `id` int(255) NOT NULL,
  `player_name` varchar(255) NOT NULL,
  `tournament_id` varchar(255) NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `from_ip` varchar(255) NOT NULL,
  `from_browser` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `created_by` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `entries`
--

INSERT INTO `entries` (`id`, `player_name`, `tournament_id`, `uuid`, `from_ip`, `from_browser`, `time`, `created_by`) VALUES
(5, 'aumkar', '88ffcb13-706d-4363-922b-16b608238730', '14560744-f3f4-455d-9c64-2d9a05e39c6b', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.74 Safari/537.36', 'Wed, 23 Mar 2022 01:24:27 +0530', '1'),
(6, 'hrushi', '88ffcb13-706d-4363-922b-16b608238730', '14560744-f3f4-455d-9c64-2d9a05e39c6b', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.74 Safari/537.36', 'Wed, 23 Mar 2022 01:24:27 +0530', '1'),
(7, 'clifford', '88ffcb13-706d-4363-922b-16b608238730', 'fe0eca71-c559-4852-b4f0-7f9a3c765db0', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.74 Safari/537.36', 'Wed, 23 Mar 2022 01:24:56 +0530', '1'),
(8, 'ayush', '88ffcb13-706d-4363-922b-16b608238730', 'fe0eca71-c559-4852-b4f0-7f9a3c765db0', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.74 Safari/537.36', 'Wed, 23 Mar 2022 01:24:56 +0530', '1');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `event_id` varchar(255) NOT NULL,
  `event_name` varchar(255) NOT NULL,
  `event_slug` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `start_date` varchar(255) NOT NULL,
  `end_date` varchar(255) NOT NULL,
  `event_descrip` varchar(255) NOT NULL,
  `from_ip` varchar(255) NOT NULL,
  `from_browser` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `created_by` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_id`, `event_name`, `event_slug`, `logo`, `start_date`, `end_date`, `event_descrip`, `from_ip`, `from_browser`, `time`, `created_by`) VALUES
('0369be82-0773-482a-adf6-ca6c52767103', 'khel mahostav', 'khel_mahostav', '1647160013.png', '2022-03-13', '2022-03-25', 'sds', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.51 Safari/537.36', 'Sun, 13 Mar 2022 13:56:52 +0530', '1'),
('55fcfe26-00de-45d4-b49c-7f4ff3be55d4', 'IPL 2020', 'IPL-2020', '1647679020.png', '2022-03-19', '2022-03-31', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has su', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.74 Safari/537.36', 'Sat, 19 Mar 2022 14:06:59 +0530', '0'),
('9f4e5c83-f73f-42b7-aa88-1f6f26c1c93b', 'XAVION 2020', 'xavion_2020', '1647072475.png', '2022-03-14', '2023-03-08', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one ', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.51 Safari/537.36', 'Sat, 12 Mar 2022 13:37:54 +0530', '1'),
('abcb4833-8fa2-437e-b04d-ec09a10b915d', 'IPL 2022', 'IPL-2022', '1648021693.png', '2022-03-23', '2022-03-31', 'This is a good tournament', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.74 Safari/537.36', 'Wed, 23 Mar 2022 13:18:12 +0530', '9c724ee2-d9b0-4738-bda3-a93ea8af5de4'),
('fb4f9364-0acb-4df1-b86e-2eb05429c774', 'GPL 2020', 'gpl_2020', '1647072422.png', '2022-03-12', '2022-03-31', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one ', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.51 Safari/537.36', 'Sat, 12 Mar 2022 13:37:02 +0530', '1');

-- --------------------------------------------------------

--
-- Table structure for table `sports-main-user`
--

CREATE TABLE `sports-main-user` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `admin_access` varchar(255) NOT NULL,
  `from_ip` varchar(255) NOT NULL,
  `from_browser` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sports-main-user`
--

INSERT INTO `sports-main-user` (`id`, `name`, `email`, `phone`, `password`, `admin_access`, `from_ip`, `from_browser`, `time`) VALUES
('0', 'sassy', 'subhasasmal@kccemsr.edu.in', '9892879549', 'd4457f45a2da6041bf3069787a9e36bb082b1398402c13428a39b8c2f25cb04ec34c2d684cecf9e5f3519d50715cf71961c9d609429d103ea7c7c71b155900a3', 'true', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.51 Mobile Safari/537.36', 'Wed, 16 Mar 2022 12:20:58 +0530'),
('1', 'TAWDE HRUSHIKESH DEEPAK MADHAVI', 'hdtawde@gmail.com', '8652827907', '5d54510ccd96e5fed9b0cd62e9f042c9786d32ae1d69ee155773f1a8fc3fa2bb25f38edbed0d821604ef7db7cbff035d454236c88fd3a99c431f282c788ad9d7', 'true', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.102 Safari/537.36', 'Sun, 20 Feb 2022 19:18:00 +0530'),
('4', 'sd', 'dssd', '9822989211', 'b002315ed000197ee8f0440c97184d9bc4b8368365f645879e8adac47aec97f3d8e3eefab93f3b42012bddeaf5595d94a36a95c7a21dbb57e57035a2f2402d71', 'false', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.102 Safari/537.36', 'Tue, 22 Feb 2022 13:33:40 +0530'),
('5', 'Gagan Bhirangi', 'sd@dsd.com', '8879527426', 'b002315ed000197ee8f0440c97184d9bc4b8368365f645879e8adac47aec97f3d8e3eefab93f3b42012bddeaf5595d94a36a95c7a21dbb57e57035a2f2402d71', 'false', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.102 Safari/537.36', 'Tue, 22 Feb 2022 13:35:10 +0530'),
('6', 'aumkar', 'aumkarringe@gmail.com', '8104460774', '9b71d224bd62f3785d96d46ad3ea3d73319bfbc2890caadae2dff72519673ca72323c3d99ba5c11d7c7acc6e14b8c5da0c4663475c2e5c3adef46f73bcdec043', 'false', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.51 Safari/537.36', 'Sat, 05 Mar 2022 13:39:27 +0530'),
('8', 'Paritosh Mathure', 'paritosh.mathure1100@gmail.com', '8753409530', '4052e0a557fbd7d8f7dda3607e42f1a577d2be8c5d545a0dc1cfeee01f538fb38056e7b4520721752ca2dbf1d884f97015b8b48ea46da3073fd7b5a59babc38f', 'false', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.51 Safari/537.36', 'Mon, 07 Mar 2022 12:38:40 +0530'),
('81', 'siddhikesh', 'siddhikesh@gmail.com', '8104460774', '5d54510ccd96e5fed9b0cd62e9f042c9786d32ae1d69ee155773f1a8fc3fa2bb25f38edbed0d821604ef7db7cbff035d454236c88fd3a99c431f282c788ad9d7', 'true', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.51 Safari/537.36', 'Wed, 16 Mar 2022 12:47:49 +0530'),
('9', 'Pratap Nair', 'pratap123@gmail.com', '9821402862', '3c9909afec25354d551dae21590bb26e38d53f2173b8d3dc3eee4c047e7ab1c1eb8b85103e3be7ba613b31bb5c9c36214dc9f14a42fd7a2fdb84856bca5c44c2', 'false', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.51 Safari/537.36', 'Mon, 07 Mar 2022 14:26:25 +0530'),
('9c724ee2-d9b0-4738-bda3-a93ea8af5de4', 'Paritosh Mathure', 'paritosh@gmail.com', '8652827907', '7553bb2eac55bd32fa395e2228286818db440d413764156381538925f50da7827d92bce2e9f68d467576fa6c1bce680a78b17c0e9e302797671de2c11bb2bf49', 'true', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.74 Safari/537.36', 'Wed, 23 Mar 2022 13:15:01 +0530');

-- --------------------------------------------------------

--
-- Table structure for table `tournaments`
--

CREATE TABLE `tournaments` (
  `id` varchar(255) NOT NULL,
  `event_id` varchar(255) NOT NULL,
  `tour_name` varchar(255) NOT NULL,
  `tour_slug` varchar(255) NOT NULL,
  `tour_descrip` varchar(255) NOT NULL,
  `player_limit` varchar(255) NOT NULL,
  `start_date` varchar(255) NOT NULL,
  `end_date` varchar(255) NOT NULL,
  `from_ip` varchar(255) NOT NULL,
  `from_browser` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `created_by` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tournaments`
--

INSERT INTO `tournaments` (`id`, `event_id`, `tour_name`, `tour_slug`, `tour_descrip`, `player_limit`, `start_date`, `end_date`, `from_ip`, `from_browser`, `time`, `created_by`) VALUES
('09a14cba-d746-4c9b-8cc5-84c516d42a96', '9f4e5c83-f73f-42b7-aa88-1f6f26c1c93b', 'Cricket', 'Cricket', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one ', '11', '2022-03-22', '2022-03-31', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.74 Safari/537.36', 'Tue, 22 Mar 2022 00:46:33 +0530', '1'),
('54cf7a7f-a85d-4341-908e-915a54359512', 'abcb4833-8fa2-437e-b04d-ec09a10b915d', 'Cricket', 'Cricket', 'This is a very good game', '11', '2022-03-24', '2022-03-31', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.74 Safari/537.36', 'Wed, 23 Mar 2022 13:20:58 +0530', '9c724ee2-d9b0-4738-bda3-a93ea8af5de4'),
('88ffcb13-706d-4363-922b-16b608238730', '9f4e5c83-f73f-42b7-aa88-1f6f26c1c93b', 'Table Tennis', 'Table-Tennis', 'Table tennis is a nice game', '2', '2022-03-22', '2022-03-31', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.74 Safari/537.36', 'Tue, 22 Mar 2022 20:40:43 +0530', '1'),
('9a7d9f51-bd0f-479c-b08d-31d78f75aa6d', '55fcfe26-00de-45d4-b49c-7f4ff3be55d4', 'CRICKET', 'CRICKET', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has su', '', '2022-03-25', '2022-03-31', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.74 Safari/537.36', 'Sat, 19 Mar 2022 14:08:03 +0530', '0'),
('e1a09193-cfc9-4f53-b94e-af70f75daa35', 'fb4f9364-0acb-4df1-b86e-2eb05429c774', 'Football', 'Football', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has su', '11', '2022-03-19', '2022-03-31', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.74 Safari/537.36', 'Sat, 19 Mar 2022 21:37:48 +0530', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `entries`
--
ALTER TABLE `entries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `sports-main-user`
--
ALTER TABLE `sports-main-user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tournaments`
--
ALTER TABLE `tournaments`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `entries`
--
ALTER TABLE `entries`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
