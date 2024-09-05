-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2024 at 05:35 PM
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
-- Database: `db_634230044`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_shoesproduct`
--

CREATE TABLE `tb_shoesproduct` (
  `shoe_id` int(9) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int(100) NOT NULL,
  `addBy` varchar(50) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_shoesproduct`
--

INSERT INTO `tb_shoesproduct` (`shoe_id`, `name`, `price`, `addBy`, `reg_date`) VALUES
(1, 'NIke', 1000, 'Piyawat Seaoung', '2024-07-31 06:57:41'),
(3, 'Jodan', 1400, 'Piyawat Seaoung', '2024-08-07 06:39:06'),
(4, 'NIke Nitro', 4000, 'Piyawat Seaoung', '2024-08-07 06:42:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(40) NOT NULL,
  `lname` varchar(40) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `password`, `role`) VALUES
(1, 'hello', 'hi', 'test@gmail.com', '$2y$10$mHK0REenEzFFYggSLOKsOehHyvdrrZgcDOBTq9kiqWTYc76ufXRbC', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_shoesproduct`
--
ALTER TABLE `tb_shoesproduct`
  ADD PRIMARY KEY (`shoe_id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_shoesproduct`
--
ALTER TABLE `tb_shoesproduct`
  MODIFY `shoe_id` int(9) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
