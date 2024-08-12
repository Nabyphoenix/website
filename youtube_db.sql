-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2024 at 06:49 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `youtube_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `shop`
--

CREATE TABLE `shop` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `password` int(10) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `cover` text NOT NULL,
  `email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `shop`
--

INSERT INTO `shop` (`id`, `name`, `password`, `gender`, `cover`, `email`) VALUES
(1, 'hakizimana nabi', 1234, 'male', '', 'Nabihakimana@gmail.com'),
(2, 'hakizimana nabi', 1234, 'male', '', 'Nabihakimana@gmail.com'),
(3, 'hakizimana nabi', 123, 'male', '', 'afrigame123@gmail.com'),
(4, 'hakizimana nabi', 123, 'male', '', 'afrigame123@gmail.com'),
(5, 'hakizimana nabi', 1, 'male', '', 'nabihakizimana@gmail.com'),
(6, 'naby', 1234, 'male', '', 'Nabihakimana@gmail.com'),
(7, 'hakizimana nabi', 123456, 'male', '', 'Nabihakimana@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_msg`
--

CREATE TABLE `tbl_msg` (
  `id` int(11) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_msg`
--

INSERT INTO `tbl_msg` (`id`, `message`) VALUES
(1, 'message');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_videos`
--

CREATE TABLE `tbl_videos` (
  `unique_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `path_name` varchar(100) NOT NULL,
  `cover` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_videos`
--

INSERT INTO `tbl_videos` (`unique_id`, `name`, `description`, `path_name`, `cover`) VALUES
(1, 'hakizimana nabi', 'you are welcome', 'thumb-662302441c47b.mp4', 'thumb-662302441be3f.jpg'),
(2, 'hakizimana nabi', 'you are welcome', 'thumb-6623024b9d23e.mp4', 'thumb-6623024b9ceae.jpg'),
(3, 'hakizimana nabi', 'you are welcome', 'thumb-6623041323cf9.mp4', 'thumb-662304132369d.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_smart`
--

CREATE TABLE `tb_smart` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `use_tb`
--

CREATE TABLE `use_tb` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `shop`
--
ALTER TABLE `shop`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_msg`
--
ALTER TABLE `tbl_msg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_videos`
--
ALTER TABLE `tbl_videos`
  ADD PRIMARY KEY (`unique_id`);

--
-- Indexes for table `tb_smart`
--
ALTER TABLE `tb_smart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `use_tb`
--
ALTER TABLE `use_tb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `shop`
--
ALTER TABLE `shop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_msg`
--
ALTER TABLE `tbl_msg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_videos`
--
ALTER TABLE `tbl_videos`
  MODIFY `unique_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_smart`
--
ALTER TABLE `tb_smart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `use_tb`
--
ALTER TABLE `use_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
