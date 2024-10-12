-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2024 at 05:26 PM
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
-- Database: `ruben_carrental`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `email`, `password`) VALUES
(1, 'admin@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_client_cust_serv`
--

CREATE TABLE `tbl_client_cust_serv` (
  `client_id` int(11) NOT NULL,
  `ID_ACC` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `Contact_no` bigint(20) NOT NULL,
  `addrss` varchar(50) NOT NULL,
  `msgs` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_client_payment`
--

CREATE TABLE `tbl_client_payment` (
  `reference_no` int(11) NOT NULL,
  `ID_ACC` int(11) NOT NULL,
  `rent_no` int(11) NOT NULL,
  `modeofpay` varchar(20) NOT NULL,
  `dp` decimal(7,2) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_client_payment`
--

INSERT INTO `tbl_client_payment` (`reference_no`, `ID_ACC`, `rent_no`, `modeofpay`, `dp`, `created_at`) VALUES
(1, 9, 1, 'debit-card', 456.00, '2024-10-12 07:35:41'),
(2, 10, 2, 'debit-card', 780.00, '2024-10-12 13:56:15'),
(3, 10, 3, 'cash', 123.00, '2024-10-12 14:07:00'),
(4, 6, 4, 'cash', 87534.00, '2024-10-12 15:04:14');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rent_car`
--

CREATE TABLE `tbl_rent_car` (
  `rent_no` int(11) NOT NULL,
  `ID_ACC` int(11) NOT NULL,
  `valid_id` varchar(20) NOT NULL,
  `license_no` varchar(20) NOT NULL,
  `contact_no` bigint(20) NOT NULL,
  `addrss` varchar(50) NOT NULL,
  `car_type` enum('SUV','Van','Sedan','Loaf') NOT NULL,
  `Vehicle` set('Honda','Nissan','Ford','Toyota') NOT NULL,
  `date_rental` date NOT NULL,
  `date_period` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_rent_car`
--

INSERT INTO `tbl_rent_car` (`rent_no`, `ID_ACC`, `valid_id`, `license_no`, `contact_no`, `addrss`, `car_type`, `Vehicle`, `date_rental`, `date_period`, `created_at`) VALUES
(1, 9, 'bvc213', 'fgh324', 98765, 'ghjg', 'Van', 'Nissan', '2024-11-09', '2024-11-11', '2024-10-12 07:35:35'),
(2, 10, 'LO314', 'KO4324', 956732423, 'Matina, Davao City', 'Loaf', 'Nissan', '2024-10-31', '2024-11-09', '2024-10-12 13:56:07'),
(3, 10, 'qwertyu', '3456u7i', 2345678, 'qewrty', 'Sedan', 'Toyota', '2024-11-09', '2024-11-16', '2024-10-12 14:06:53'),
(4, 6, 'FOI76845634', 'GHO45365765', 98564643, 'Calinan ', 'Loaf', 'Toyota', '2024-10-19', '2024-11-09', '2024-10-12 15:04:05');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_support_details`
--

CREATE TABLE `tbl_support_details` (
  `sub_no` int(11) NOT NULL,
  `ID_ACC` int(11) NOT NULL,
  `rent_no` int(11) NOT NULL,
  `ref_name` varchar(100) NOT NULL,
  `valid_id1` varchar(11) NOT NULL,
  `valid_id2` varchar(11) NOT NULL,
  `affiliation` varchar(50) NOT NULL,
  `addrss` varchar(50) NOT NULL,
  `contact_no` bigint(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_support_details`
--

INSERT INTO `tbl_support_details` (`sub_no`, `ID_ACC`, `rent_no`, `ref_name`, `valid_id1`, `valid_id2`, `affiliation`, `addrss`, `contact_no`, `created_at`) VALUES
(1, 9, 1, 'sanay', 'valid21423', 'valid875763', 'bngfgye', 'tuy', 987654, '2024-10-12 07:36:14'),
(2, 10, 2, 'James Estorsos3', 'GJH6542', 'ASD14343', 'Ka grupo ', 'Mintal, Davao City', 965423444, '2024-10-12 13:56:40'),
(3, 10, 2, 'hgjbm', 'asfgh342', 'mgnb324', 'asdfsgh', 'ewwrth', -98765, '2024-10-12 14:07:11'),
(4, 6, 4, 'Gesef Mari', 'bb060404031', 'bbcakes143', 'Baby Cakes akong love story', 'Padre Pios, Bago Oshiro, Davao City', 95312456, '2024-10-12 15:05:20');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_userlogin`
--

CREATE TABLE `tbl_userlogin` (
  `ID_ACC` int(11) NOT NULL,
  `Fname` varchar(50) NOT NULL,
  `Lname` varchar(50) NOT NULL,
  `Gender` enum('Male','Female') NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `pass_verify` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_userlogin`
--

INSERT INTO `tbl_userlogin` (`ID_ACC`, `Fname`, `Lname`, `Gender`, `email`, `password`, `pass_verify`) VALUES
(5, 'Password', 'Hashed', 'Male', 'passwordhash@ramses.ph', '$2y$10$xpxIY1Q8DfpfrGGDIRaxa.7NYR3bUYwp1VGhxVr9X.8oSjeMxvQ1K', 'cce104'),
(6, 'sample', 'sample', 'Male', 'sample@gmail.com', '$2y$10$Q//wMTv/9Kxu5cUx9ld6meYhCxXBpv91e8qGXUzsCf2/jYU2kxhc6', 'sample'),
(7, 'em', 'mail', 'Female', 'email@gmail.com', '$2y$10$E4IIVErLcQcHQxMAp9e6rOl6Ii6OlOOcT5A9s6scRHQAgS.iymVVm', 'password'),
(8, 'Stephen ', 'Tatel', 'Male', 'stephen@umindanao.ph', '$2y$10$XTQ6UhaxnidlGrSVbBPYq.1tQvdLuNUswYPNgzu6IKQwggkBeLgbW', 'ugelovelife'),
(9, 'Brendan', 'Ciano', 'Male', 'Ciano@umindanao.edu', '$2y$10$iInxm.UMe2d7asoigogzdeAtUxb71/0JnNF13Yz.BmF5chGLIqxRS', '12345'),
(10, 'Rameses', 'Naquila', 'Female', 'Naquila@gmail.com', '$2y$10$snD5.YxVd/OxFkSU9m7uBeWamPx0MY/3AHhWKSYLpHSv5F1fwE2K6', '123456'),
(11, 'Josh Andrei ', 'Magcalas', 'Male', 'josh@gmail.com', '$2y$10$f0WJU44mNWWq41qw7ljz9OrgGFgOc426QGT4xnYwUVDm7jL1amNka', '1234567890'),
(12, 'Harold', 'Naquila', 'Male', 'Naquila@gmail.com', '$2y$10$9ivdVskTOkqyR1Z7P18NlOzRz4BngGvwWraS0vAwBM14EFPqkAyxK', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_client_cust_serv`
--
ALTER TABLE `tbl_client_cust_serv`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `tbl_client_payment`
--
ALTER TABLE `tbl_client_payment`
  ADD PRIMARY KEY (`reference_no`);

--
-- Indexes for table `tbl_rent_car`
--
ALTER TABLE `tbl_rent_car`
  ADD PRIMARY KEY (`rent_no`);

--
-- Indexes for table `tbl_support_details`
--
ALTER TABLE `tbl_support_details`
  ADD PRIMARY KEY (`sub_no`);

--
-- Indexes for table `tbl_userlogin`
--
ALTER TABLE `tbl_userlogin`
  ADD PRIMARY KEY (`ID_ACC`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_client_cust_serv`
--
ALTER TABLE `tbl_client_cust_serv`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_client_payment`
--
ALTER TABLE `tbl_client_payment`
  MODIFY `reference_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_rent_car`
--
ALTER TABLE `tbl_rent_car`
  MODIFY `rent_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_support_details`
--
ALTER TABLE `tbl_support_details`
  MODIFY `sub_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_userlogin`
--
ALTER TABLE `tbl_userlogin`
  MODIFY `ID_ACC` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
