-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2024 at 02:24 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `list_todo`
--

-- --------------------------------------------------------

--
-- Table structure for table `project_list`
--

CREATE TABLE `project_list` (
  `id` int(11) NOT NULL,
  `project` varchar(100) NOT NULL,
  `priority` enum('Low','Medium','High') NOT NULL,
  `status` enum('Stuck','Working on it','Done') NOT NULL,
  `start` date NOT NULL,
  `plan_end` date NOT NULL,
  `actual_end` date NOT NULL,
  `complete` varchar(10) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `pl` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project_list`
--

INSERT INTO `project_list` (`id`, `project`, `priority`, `status`, `start`, `plan_end`, `actual_end`, `complete`, `created_at`, `updated_at`, `pl`) VALUES
(1, 'LSP BIOFARMA', 'High', 'Done', '2024-01-10', '2024-02-21', '2024-02-22', '100', '2024-02-22 05:06:27', '2024-03-20 05:28:55', 'Leghi Nadia'),
(2, 'SPRINT 2023', 'Medium', 'Working on it', '2024-02-22', '2024-03-08', '2024-03-15', '36', '2024-02-22 08:22:01', '2024-03-20 05:28:42', 'Orin Zahara');

-- --------------------------------------------------------

--
-- Table structure for table `todo`
--

CREATE TABLE `todo` (
  `id` int(11) NOT NULL,
  `project_name` varchar(100) NOT NULL,
  `task` text NOT NULL,
  `deadline` date NOT NULL,
  `reminder` varchar(100) NOT NULL,
  `progress` enum('Hold','On Progress','Done') NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `todo`
--

INSERT INTO `todo` (`id`, `project_name`, `task`, `deadline`, `reminder`, `progress`, `created_at`, `updated_at`) VALUES
(3, 'LSP BIOFARMA', 'FDS', '2024-02-29', '2024-02-29T11:52', 'Hold', '2024-02-26 04:50:55', '2024-03-20 05:44:57'),
(4, 'PLN', 'Revisi dokumen 3', '2024-03-29', '', 'Hold', '2024-03-20 04:49:55', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'shafira', '827ccb0eea8a706c4c34a16891f84e7b');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `project_list`
--
ALTER TABLE `project_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `todo`
--
ALTER TABLE `todo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `project_list`
--
ALTER TABLE `project_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `todo`
--
ALTER TABLE `todo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
