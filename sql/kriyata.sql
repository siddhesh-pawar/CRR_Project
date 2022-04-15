-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2022 at 10:24 AM
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
  `player_id` varchar(255) NOT NULL,
  `player_name` varchar(255) NOT NULL,
  `tournament_id` varchar(255) NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `team_name` varchar(255) NOT NULL,
  `from_ip` varchar(255) NOT NULL,
  `from_browser` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `created_by` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `entries`
--

INSERT INTO `entries` (`player_id`, `player_name`, `tournament_id`, `uuid`, `team_name`, `from_ip`, `from_browser`, `time`, `created_by`) VALUES
('10', 'Deep', 'd1e9642e-5c64-41ba-8bad-5085a58f240f', 'bc003be4-9c29-4417-b8ef-3fc5f3d6c098', 'Soul Crushers.', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.84 Safari/537.36', 'Sun, 03 Apr 2022 22:58:10 +0530', '1'),
('11', 'Ayush', 'd1e9642e-5c64-41ba-8bad-5085a58f240f', '87bd5f8d-e918-4166-ba7d-6d3ea50475e1', 'Man of Stealth', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.84 Safari/537.36', 'Sun, 03 Apr 2022 22:58:27 +0530', '1'),
('12', 'Deep', 'd1e9642e-5c64-41ba-8bad-5085a58f240f', '87bd5f8d-e918-4166-ba7d-6d3ea50475e1', 'Man of Stealth', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.84 Safari/537.36', 'Sun, 03 Apr 2022 22:58:27 +0530', '1'),
('13', 'Clifford', 'd1e9642e-5c64-41ba-8bad-5085a58f240f', 'adf2764f-35e4-4ed3-829e-91295fa4dd05', 'Rumbled Rockers', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.84 Safari/537.36', 'Sun, 03 Apr 2022 22:59:00 +0530', '1'),
('14', 'Omkar', 'd1e9642e-5c64-41ba-8bad-5085a58f240f', 'adf2764f-35e4-4ed3-829e-91295fa4dd05', 'Rumbled Rockers', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.84 Safari/537.36', 'Sun, 03 Apr 2022 22:59:00 +0530', '1'),
('15', 'Siddhikesh', 'd1e9642e-5c64-41ba-8bad-5085a58f240f', '31aca666-8971-497c-a5f9-f99501b3c0e0', 'The Untouchables', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.84 Safari/537.36', 'Sun, 03 Apr 2022 22:59:26 +0530', '1'),
('16', 'Hrushi', 'd1e9642e-5c64-41ba-8bad-5085a58f240f', '31aca666-8971-497c-a5f9-f99501b3c0e0', 'The Untouchables', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.84 Safari/537.36', 'Sun, 03 Apr 2022 22:59:26 +0530', '1'),
('19', 'Hrushikesh', '590ce773-c39c-4c5c-afdb-a509610597c9', '7d05edf6-1052-4fa7-b5d3-0927b05b6312', 'The Solars', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.84 Safari/537.36', 'Mon, 04 Apr 2022 19:40:27 +0530', '1'),
('20', 'Yash', '590ce773-c39c-4c5c-afdb-a509610597c9', '7d05edf6-1052-4fa7-b5d3-0927b05b6312', 'The Solars', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.84 Safari/537.36', 'Mon, 04 Apr 2022 19:40:27 +0530', '1'),
('21', 'Aumkar', '590ce773-c39c-4c5c-afdb-a509610597c9', '7d05edf6-1052-4fa7-b5d3-0927b05b6312', 'The Solars', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.84 Safari/537.36', 'Mon, 04 Apr 2022 19:40:27 +0530', '1'),
('22', 'Paritosh', '590ce773-c39c-4c5c-afdb-a509610597c9', '7d05edf6-1052-4fa7-b5d3-0927b05b6312', 'The Solars', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.84 Safari/537.36', 'Mon, 04 Apr 2022 19:40:27 +0530', '1'),
('23', 'Devang', '590ce773-c39c-4c5c-afdb-a509610597c9', '7d05edf6-1052-4fa7-b5d3-0927b05b6312', 'The Solars', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.84 Safari/537.36', 'Mon, 04 Apr 2022 19:40:27 +0530', '1'),
('24', 'Siddhikesh', '590ce773-c39c-4c5c-afdb-a509610597c9', '7d05edf6-1052-4fa7-b5d3-0927b05b6312', 'The Solars', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.84 Safari/537.36', 'Mon, 04 Apr 2022 19:40:27 +0530', '1'),
('25', 'Sahil', '590ce773-c39c-4c5c-afdb-a509610597c9', '7d05edf6-1052-4fa7-b5d3-0927b05b6312', 'The Solars', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.84 Safari/537.36', 'Mon, 04 Apr 2022 19:40:27 +0530', '1'),
('26', 'Omkar', '590ce773-c39c-4c5c-afdb-a509610597c9', '7d05edf6-1052-4fa7-b5d3-0927b05b6312', 'The Solars', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.84 Safari/537.36', 'Mon, 04 Apr 2022 19:40:27 +0530', '1'),
('27', 'Saurabh', '590ce773-c39c-4c5c-afdb-a509610597c9', '7d05edf6-1052-4fa7-b5d3-0927b05b6312', 'The Solars', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.84 Safari/537.36', 'Mon, 04 Apr 2022 19:40:27 +0530', '1'),
('28', 'Ashutosh', '590ce773-c39c-4c5c-afdb-a509610597c9', '7d05edf6-1052-4fa7-b5d3-0927b05b6312', 'The Solars', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.84 Safari/537.36', 'Mon, 04 Apr 2022 19:40:27 +0530', '1'),
('29', 'Ayush', '590ce773-c39c-4c5c-afdb-a509610597c9', '7d05edf6-1052-4fa7-b5d3-0927b05b6312', 'The Solars', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.84 Safari/537.36', 'Mon, 04 Apr 2022 19:40:27 +0530', '1'),
('3', 'Paritosh', 'd1e9642e-5c64-41ba-8bad-5085a58f240f', 'a3ffcd1d-7485-4955-9743-0ef5ef519f85', 'Strikers', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.84 Safari/537.36', 'Sun, 03 Apr 2022 11:48:37 +0530', '1'),
('32', 'Anirudh', 'd1e9642e-5c64-41ba-8bad-5085a58f240f', 'c27a3c35-3266-41e1-8e7b-bff875e6947a', 'Xpark', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.75 Safari/537.36', 'Sun, 10 Apr 2022 16:33:53 +0530', '1'),
('33', 'Abhishekh', 'd1e9642e-5c64-41ba-8bad-5085a58f240f', 'c27a3c35-3266-41e1-8e7b-bff875e6947a', 'Xpark', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.75 Safari/537.36', 'Sun, 10 Apr 2022 16:33:53 +0530', '1'),
('4', 'Yash', 'd1e9642e-5c64-41ba-8bad-5085a58f240f', 'a3ffcd1d-7485-4955-9743-0ef5ef519f85', 'Strikers', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.84 Safari/537.36', 'Sun, 03 Apr 2022 11:48:37 +0530', '1'),
('5', 'subha sasmal', 'd1e9642e-5c64-41ba-8bad-5085a58f240f', 'c638a48c-dc2d-416d-a8a8-ace879f2a9ea', 'The incredibles', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.84 Safari/537.36', 'Sun, 03 Apr 2022 12:28:18 +0530', '1'),
('6', 'yash poliyath', 'd1e9642e-5c64-41ba-8bad-5085a58f240f', 'c638a48c-dc2d-416d-a8a8-ace879f2a9ea', 'The incredibles', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.84 Safari/537.36', 'Sun, 03 Apr 2022 12:28:18 +0530', '1'),
('7', 'Harleen', 'c77665b9-f1e0-4ae9-a23f-a19bc9d8f0e2', '9989a57b-bc8d-4b73-a0cb-e237472834e6', 'Showstoppers', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.84 Safari/537.36', 'Sun, 03 Apr 2022 22:57:24 +0530', '1'),
('8', 'Prachi', 'c77665b9-f1e0-4ae9-a23f-a19bc9d8f0e2', '9989a57b-bc8d-4b73-a0cb-e237472834e6', 'Showstoppers', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.84 Safari/537.36', 'Sun, 03 Apr 2022 22:57:24 +0530', '1'),
('9', 'Dishant', 'd1e9642e-5c64-41ba-8bad-5085a58f240f', 'bc003be4-9c29-4417-b8ef-3fc5f3d6c098', 'Soul Crushers.', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.84 Safari/537.36', 'Sun, 03 Apr 2022 22:58:10 +0530', '1'),
('fce6ae57-a1fb-45ea-a30f-3f1fbe4e90f1', 'Parth Tawde', '94d6c204-28f0-45e3-ac4b-1f0f6cc059bb', '68ccbb2d-a67b-4291-b1ae-5f2f8e327f28', 'Vishwanathans', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.88 Safari/537.36', 'Thu, 14 Apr 2022 21:56:51 +0530', '1');

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
('b2dd6a90-02dc-44d6-b5ee-a6c2b123cb55', 'IPL 2022', 'IPL-2022', '1648894166.png', '2022-05-03', '2022-05-20', 'great event', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.84 Safari/537.36', 'Sat, 02 Apr 2022 15:39:25 +0530', '1');

-- --------------------------------------------------------

--
-- Table structure for table `fixtures`
--

CREATE TABLE `fixtures` (
  `id` int(255) NOT NULL,
  `team_1_uuid` varchar(255) NOT NULL,
  `team_1_name` varchar(255) NOT NULL,
  `team_2_uuid` varchar(255) NOT NULL,
  `team_2_name` varchar(255) NOT NULL,
  `result` varchar(255) NOT NULL,
  `tournament_id` varchar(255) NOT NULL,
  `from_ip` varchar(255) NOT NULL,
  `from_browser` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `created_by` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fixtures`
--

INSERT INTO `fixtures` (`id`, `team_1_uuid`, `team_1_name`, `team_2_uuid`, `team_2_name`, `result`, `tournament_id`, `from_ip`, `from_browser`, `time`, `created_by`) VALUES
(225, 'bc003be4-9c29-4417-b8ef-3fc5f3d6c098', 'Soul Crushers.', 'bye', 'bye', '', 'd1e9642e-5c64-41ba-8bad-5085a58f240f', '', '', '', ''),
(226, 'a3ffcd1d-7485-4955-9743-0ef5ef519f85', 'Strikers', 'c27a3c35-3266-41e1-8e7b-bff875e6947a', 'Xpark', '', 'd1e9642e-5c64-41ba-8bad-5085a58f240f', '', '', '', ''),
(227, 'c638a48c-dc2d-416d-a8a8-ace879f2a9ea', 'The incredibles', '87bd5f8d-e918-4166-ba7d-6d3ea50475e1', 'Man of Stealth', '', 'd1e9642e-5c64-41ba-8bad-5085a58f240f', '', '', '', ''),
(228, 'adf2764f-35e4-4ed3-829e-91295fa4dd05', 'Rumbled Rockers', '31aca666-8971-497c-a5f9-f99501b3c0e0', 'The Untouchables', '', 'd1e9642e-5c64-41ba-8bad-5085a58f240f', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `fixture_fomat`
--

CREATE TABLE `fixture_fomat` (
  `id` int(255) NOT NULL,
  `fixture_uuid` varchar(255) NOT NULL,
  `no_of_teams` int(11) NOT NULL,
  `no_of_matches` int(11) NOT NULL,
  `upper_half_teams` int(11) NOT NULL,
  `lower_half_teams` int(11) NOT NULL,
  `no_of_byes` int(11) NOT NULL,
  `no_of_rounds` int(11) NOT NULL,
  `no_of_byes_uh` int(11) NOT NULL,
  `no_of_byes_lh` int(11) NOT NULL,
  `from_ip` int(11) NOT NULL,
  `from_browser` int(11) NOT NULL,
  `time` int(11) NOT NULL,
  `created_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fixture_fomat`
--

INSERT INTO `fixture_fomat` (`id`, `fixture_uuid`, `no_of_teams`, `no_of_matches`, `upper_half_teams`, `lower_half_teams`, `no_of_byes`, `no_of_rounds`, `no_of_byes_uh`, `no_of_byes_lh`, `from_ip`, `from_browser`, `time`, `created_by`) VALUES
(19, '113f736a-7747-4dc5-a0c3-5c04c2ee66ab', 7, 6, 4, 3, 1, 3, 0, 1, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `lower_half`
--

CREATE TABLE `lower_half` (
  `id` int(11) NOT NULL,
  `fixture_id` varchar(255) NOT NULL,
  `team_uuid` varchar(255) NOT NULL,
  `team_name` varchar(255) NOT NULL,
  `bye` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lower_half`
--

INSERT INTO `lower_half` (`id`, `fixture_id`, `team_uuid`, `team_name`, `bye`) VALUES
(1, '113f736a-7747-4dc5-a0c3-5c04c2ee66ab', 'c638a48c-dc2d-416d-a8a8-ace879f2a9ea', 'The incredibles', 'true'),
(2, '113f736a-7747-4dc5-a0c3-5c04c2ee66ab', 'bc003be4-9c29-4417-b8ef-3fc5f3d6c098', 'Soul Crushers.', 'false'),
(3, '113f736a-7747-4dc5-a0c3-5c04c2ee66ab', '31aca666-8971-497c-a5f9-f99501b3c0e0', 'The Untouchables', 'false');

-- --------------------------------------------------------

--
-- Table structure for table `matches`
--

CREATE TABLE `matches` (
  `id` int(11) NOT NULL,
  `fixture_id` int(11) NOT NULL,
  `team_1_name` int(11) NOT NULL,
  `team_1_uuid` int(11) NOT NULL,
  `team_2_name` int(11) NOT NULL,
  `team_2_uuid` int(11) NOT NULL,
  `result` varchar(255) NOT NULL,
  `from_ip` int(11) NOT NULL,
  `from_browser` int(11) NOT NULL,
  `time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `start_tour_date` varchar(255) NOT NULL,
  `end_tour_date` varchar(255) NOT NULL,
  `from_ip` varchar(255) NOT NULL,
  `from_browser` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `created_by` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tournaments`
--

INSERT INTO `tournaments` (`id`, `event_id`, `tour_name`, `tour_slug`, `tour_descrip`, `player_limit`, `start_tour_date`, `end_tour_date`, `from_ip`, `from_browser`, `time`, `created_by`) VALUES
('590ce773-c39c-4c5c-afdb-a509610597c9', 'b2dd6a90-02dc-44d6-b5ee-a6c2b123cb55', 'Cricket', 'Cricket', 'heya', '11', '2022-05-05', '2022-05-12', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.88 Safari/537.36', 'Thu, 14 Apr 2022 16:30:12 +0530', '1'),
('94d6c204-28f0-45e3-ac4b-1f0f6cc059bb', 'b2dd6a90-02dc-44d6-b5ee-a6c2b123cb55', 'Chess', 'Chess', 'Vishwanathan is the best player in the world', '1', '2022-05-14', '2022-05-16', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.88 Safari/537.36', 'Thu, 14 Apr 2022 18:18:45 +0530', '1'),
('c77665b9-f1e0-4ae9-a23f-a19bc9d8f0e2', 'b2dd6a90-02dc-44d6-b5ee-a6c2b123cb55', 'Table Tennis(Doubles)', 'Table-Tennis-Doubles-', 'its a very nice game', '2', '2022-05-07', '2022-05-11', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.88 Safari/537.36', 'Thu, 14 Apr 2022 16:29:44 +0530', '1'),
('d1e9642e-5c64-41ba-8bad-5085a58f240f', 'b2dd6a90-02dc-44d6-b5ee-a6c2b123cb55', 'Badminton(Doubles)', 'Badminton', 'hey', '2', '2022-05-05', '2022-05-10', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.84 Safari/537.36', 'Sat, 02 Apr 2022 18:20:13 +0530', '1');

-- --------------------------------------------------------

--
-- Table structure for table `upper_half`
--

CREATE TABLE `upper_half` (
  `id` int(11) NOT NULL,
  `fixture_id` varchar(255) NOT NULL,
  `team_uuid` varchar(255) NOT NULL,
  `team_name` varchar(255) NOT NULL,
  `bye` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `upper_half`
--

INSERT INTO `upper_half` (`id`, `fixture_id`, `team_uuid`, `team_name`, `bye`) VALUES
(1, '113f736a-7747-4dc5-a0c3-5c04c2ee66ab', 'adf2764f-35e4-4ed3-829e-91295fa4dd05', 'Rumbled Rockers', 'false'),
(2, '113f736a-7747-4dc5-a0c3-5c04c2ee66ab', 'a3ffcd1d-7485-4955-9743-0ef5ef519f85', 'Strikers', 'false'),
(3, '113f736a-7747-4dc5-a0c3-5c04c2ee66ab', '87bd5f8d-e918-4166-ba7d-6d3ea50475e1', 'Man of Stealth', 'false'),
(4, '113f736a-7747-4dc5-a0c3-5c04c2ee66ab', '2e4a6412-c046-4581-9996-e96ec5358a2a', 'Xpark', 'false');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `entries`
--
ALTER TABLE `entries`
  ADD PRIMARY KEY (`player_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `fixtures`
--
ALTER TABLE `fixtures`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fixture_fomat`
--
ALTER TABLE `fixture_fomat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lower_half`
--
ALTER TABLE `lower_half`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `matches`
--
ALTER TABLE `matches`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `upper_half`
--
ALTER TABLE `upper_half`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fixtures`
--
ALTER TABLE `fixtures`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=229;

--
-- AUTO_INCREMENT for table `fixture_fomat`
--
ALTER TABLE `fixture_fomat`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `lower_half`
--
ALTER TABLE `lower_half`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `matches`
--
ALTER TABLE `matches`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `upper_half`
--
ALTER TABLE `upper_half`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
