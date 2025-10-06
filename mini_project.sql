-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2025 at 09:48 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mini_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(11) NOT NULL,
  `dname` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `dname`) VALUES
(1, 'Engineering'),
(2, 'Information Technology'),
(3, 'Business'),
(4, 'Applied Science');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `role` enum('admin','user') DEFAULT 'user',
  `dept_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `role`, `dept_id`) VALUES
(1, 'Yousuf AL Hadhrami', 'admin', '$2y$10$AWih.Lgmd.kBhq3c/iEhheN3JU76cq3N6FwcgdqTsoTtLANfXj0Ye', 'admin', 1),
(2, 'Mashael AL Amri', 'user1', '$2y$10$5Lk7Mp24fwnLsLmUy2erMuIP4ef9D1xPM1SRQAtLWGu.ja.QV.ROi', 'user', 2),
(3, 'Rahaf AL Toobi', 'user2', '$2y$10$IXKWRG9liZlc6Gg9lH8yJefNik5YIaH6DWFeLRRXUScm6hEost0GG', 'user', 3),
(4, 'Ali Salim', 'ali', '$2y$10$Ql/Hxr5z1Nsy2SY5egU8n.kRk.t.NC2MCne1f.0Js58t3NA5Mz1XK', 'user', 3),
(5, 'Ali Salim', 'ali', '$2y$10$YUt284pWMo76NcfP7hWNXOSXav26UJ0nQb/bnpRR5H2q6Th2iLPjC', 'user', 3),
(6, 'Ali Salim', 'ali', '$2y$10$0aB1a.qHlVqAulyVDKrvk.lGRXTKR.zXDrBchI4KdtkT23cuwmqcS', 'user', 3),
(7, 'wsSAWas', 'qwASs', '$2y$10$mKcZ..ri1w.78gGzDtnPJ.ybI6eOrTuixZZAjDPIyYNOcYnDsDEWC', 'user', 2),
(8, 'test', 'test', '$2y$10$Pvze1hpK7dRJiIB2okwnCO0aXTXMKUoaW6DmgAPdrwjSTzFfMKbTu', 'user', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Fk_dept_id` (`dept_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `Fk_dept_id` FOREIGN KEY (`dept_id`) REFERENCES `departments` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
