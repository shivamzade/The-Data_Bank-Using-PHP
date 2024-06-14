-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2024 at 02:10 PM
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
-- Database: `databank`
--

-- --------------------------------------------------------

--
-- Table structure for table `master_category`
--

CREATE TABLE `master_category` (
  `id` int(100) NOT NULL,
  `unique_id` varchar(100) NOT NULL,
  `category_name` varchar(100) NOT NULL,
  `is_del` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `master_category`
--

INSERT INTO `master_category` (`id`, `unique_id`, `category_name`, `is_del`) VALUES
(1, 'EL01', 'Electrical', 'approved'),
(2, 'MFG01', 'Manufacturer', 'approved'),
(3, 'G01', 'Grosery', 'approved'),
(4, 'MED01', 'medical', 'approved'),
(5, 'AUTO01', 'automobile', 'approved'),
(6, 'FIN01', 'Finance', 'approved'),
(7, 'IT01', 'It Company', 'approved'),
(8, 'SCH01', 'School', 'approved'),
(9, 'X01', 'Xerox Shop', 'approved');

-- --------------------------------------------------------

--
-- Table structure for table `master_data`
--

CREATE TABLE `master_data` (
  `id` int(100) NOT NULL,
  `unique_id` varchar(100) NOT NULL,
  `contact_person` varchar(100) NOT NULL,
  `company_name` varchar(100) NOT NULL,
  `category_id` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `landline` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `entry_date` date NOT NULL,
  `is_del` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `master_data`
--

INSERT INTO `master_data` (`id`, `unique_id`, `contact_person`, `company_name`, `category_id`, `phone`, `landline`, `email`, `address`, `city`, `state`, `entry_date`, `is_del`) VALUES
(1, '1358895932024-06-05-10-14-08', 'Prathmesh Mahajan Sir', 'highclonoid softec pvt ltd.', 'IT01', '8888888888', '256-563-4541', 'demo@gmail.com', 'precidency complex, Gadkari chowk nashik', 'Nashik', 'Maharashtra', '2024-06-05', 'approved'),
(2, '165046856120240606105553', 'Shivam Zade', 'Shivam Xerox', 'X01', '9325236198', '256-563-4542', 'zadeshivam10@gmail.com', 'Juni Chawdi, Balapur', 'Akola', 'Maharashtra', '2024-06-06', 'approved'),
(4, '3144231220240608013639', 'Nishant', 'AI Robotronics', 'Electrical - EL01', '12012012012', '-', 'demo@gmail.com', 'Hinjewadi, Pune', 'pune', 'Maharashtra', '2024-06-08', 'approved');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `unique_id` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `name_of_org` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `reg_date` varchar(100) NOT NULL,
  `expire_date` varchar(100) NOT NULL,
  `mail_verified_status` varchar(100) NOT NULL,
  `admin_status` varchar(100) NOT NULL,
  `is_del` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `unique_id`, `name`, `name_of_org`, `email`, `password`, `phone`, `city`, `reg_date`, `expire_date`, `mail_verified_status`, `admin_status`, `is_del`) VALUES
(7, '197742105920240604093101', 'Shivam C Zade', 'ShivamXerox', 'zadeshivam10@gmail.com', '1234', '9325236198', 'Balapur,Akola', '2024-06-04', '2025-06-04', 'approved', 'approved', 'approved'),
(13, '119331647720240606114657', 'Ajay Naikwade', 'Farming', 'demo@gmail.com', '1234', '1111111111', 'Manmad', '2024-06-06', '2025-06-06', 'approved', 'approved', 'approved');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `master_category`
--
ALTER TABLE `master_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_data`
--
ALTER TABLE `master_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `master_category`
--
ALTER TABLE `master_category`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `master_data`
--
ALTER TABLE `master_data`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
