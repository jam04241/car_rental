-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2024 at 05:25 PM
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
-- Table structure for table `tbl_client_cust_serv`
--

CREATE TABLE `tbl_client_cust_serv` (
  `client_id` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `Contact_no` int(13) NOT NULL,
  `msgs` text NOT NULL,
  `addrss` varchar(50) NOT NULL,
  `ID_ACC` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_client_payment`
--

CREATE TABLE `tbl_client_payment` (
  `reference_no` int(11) NOT NULL,
  `ID_ACC` int(11) NOT NULL,
  `rent_no` int(11) NOT NULL,
  `Modeofpay` enum('e-pay','cash','debit_card') NOT NULL,
  `dp` decimal(7,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rent_car`
--

CREATE TABLE `tbl_rent_car` (
  `rent_no` int(11) NOT NULL,
  `ID_ACC` int(11) NOT NULL,
  `valid_id` varchar(20) NOT NULL,
  `licence_no` varchar(20) NOT NULL,
  `car_type` enum('Sedan','Pickup') NOT NULL,
  `Vehicle` varchar(50) NOT NULL,
  `date_rental` date NOT NULL,
  `date_period` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_rent_car`
--

INSERT INTO `tbl_rent_car` (`rent_no`, `ID_ACC`, `valid_id`, `licence_no`, `car_type`, `Vehicle`, `date_rental`, `date_period`) VALUES
(1, 4, 'qwe5673', 'qwe5678578', 'Pickup', 'racal', '2024-10-10', '2024-10-24');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_support_details`
--

CREATE TABLE `tbl_support_details` (
  `sub_no` int(11) DEFAULT NULL,
  `ID_ACC` int(11) NOT NULL,
  `rent_no` int(11) NOT NULL,
  `ref_name` varchar(100) NOT NULL,
  `valid_id1` int(11) NOT NULL,
  `valid_id2` int(11) NOT NULL,
  `affliation` varchar(50) NOT NULL,
  `addrss` varchar(50) NOT NULL,
  `contact_no` int(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
(7, 'em', 'mail', 'Female', 'email@gmail.com', '$2y$10$E4IIVErLcQcHQxMAp9e6rOl6Ii6OlOOcT5A9s6scRHQAgS.iymVVm', 'password');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `tbl_userlogin`
--
ALTER TABLE `tbl_userlogin`
  ADD PRIMARY KEY (`ID_ACC`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_client_cust_serv`
--
ALTER TABLE `tbl_client_cust_serv`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_client_payment`
--
ALTER TABLE `tbl_client_payment`
  MODIFY `reference_no` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_rent_car`
--
ALTER TABLE `tbl_rent_car`
  MODIFY `rent_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_userlogin`
--
ALTER TABLE `tbl_userlogin`
  MODIFY `ID_ACC` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
