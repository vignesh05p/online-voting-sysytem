-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2021 at 11:09 PM
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
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE `administrator` (
  `id` int(5) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `vote_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`id`, `username`, `password`, `vote_status`) VALUES
(1, 'admin', '123', 'off');

-- --------------------------------------------------------

--
-- Table structure for table `duration`
--

CREATE TABLE `duration` (
  `time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `duration`
--

INSERT INTO `duration` (`time`) VALUES
('10');

-- --------------------------------------------------------

--
-- Table structure for table `pictures`
--

CREATE TABLE `pictures` (
  `id` int(11) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `votes` int(5) NOT NULL,
  `ip` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pictures`
--

INSERT INTO `pictures` (`id`, `picture`, `votes`, `ip`) VALUES
(1, 'images/1.png', 2, '192.168.56.1'),
(2, 'images/2.png', 6, '192.168.56.1'),
(3, 'images/3.png', 1, '192.168.56.1'),
(4, 'images/4.png', 1, '192.168.56.1'),
(5, 'images/5.png', 0, '192.168.56.1'),
(6, 'images/6.png', 0, '192.168.56.1'),
(7, 'images/7.png', 0, '192.168.56.1'),
(8, 'images/8.png', 0, '192.168.56.1'),
(9, 'images/9.png', 0, '192.168.56.1'),
(10, 'images/10.png', 0, '192.168.56.1'),
(11, 'images/11.png', 0, '192.168.56.1'),
(12, 'images/12.png', 0, '192.168.56.1'),
(13, 'images/13.png', 0, '192.168.56.1'),
(14, 'images/14.png', 0, '192.168.56.1'),
(15, 'images/15.png', 0, '192.168.56.1'),
(16, 'images/16.png', 0, '192.168.56.1'),
(17, 'images/17.png', 0, '192.168.56.1'),
(18, 'images/18.png', 0, '192.168.56.1'),
(19, 'images/19.png', 0, '192.168.56.1'),
(20, 'images/20.png', 0, '192.168.56.1'),
(21, 'images/21.png', 0, '192.168.56.1'),
(22, 'images/22.png', 0, '192.168.56.1');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `vote_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `vote_id`) VALUES
(1, 'S_A', 0),
(2, 'S_B', 0),
(3, 'S_C', 0),
(4, 'S_D', 0),
(5, 'S_E', 0),
(6, 'S_F', 0),
(7, 'S_G', 0),
(8, 'S_H', 0),
(9, 'S_I', 0),
(10, 'S_J', 0),
(11, 'S_K', 0),
(12, 'S_L', 0),
(13, 'S_M', 0),
(14, 'S_N', 0),
(15, 'S_O', 0),
(16, 'S_P', 0),
(17, 'S_Q', 0),
(18, 'S_R', 0),
(19, 'S_S', 0),
(20, 'S_T', 0),
(21, 'S_U', 0),
(22, 'S_V', 0),
(23, 'S_W', 0),
(24, 'S_X', 0),
(25, 'S_Y', 0),
(26, 'S_Z', 0);

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int(5) NOT NULL,
  `name` varchar(255) NOT NULL,
  `vote_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `name`, `vote_id`) VALUES
(1, 'T_A', 0),
(2, 'T_B', 0),
(3, 'T_C', 0),
(4, 'T_D', 0),
(5, 'T_E', 0),
(6, 'T_F', 0),
(7, 'T_G', 0),
(8, 'T_H', 0),
(9, 'T_I', 0),
(10, 'T_J', 0),
(11, 'T_K', 0),
(12, 'T_L', 0),
(13, 'T_M', 0),
(14, 'T_N', 0),
(15, 'T_O', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pictures`
--
ALTER TABLE `pictures`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrator`
--
ALTER TABLE `administrator`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pictures`
--
ALTER TABLE `pictures`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
