-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2024 at 03:07 AM
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
  `Contact_no` varchar(20) NOT NULL,
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

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rent_car`
--

CREATE TABLE `tbl_rent_car` (
  `rent_no` int(11) NOT NULL,
  `ID_ACC` int(11) NOT NULL,
  `valid_id` varchar(20) NOT NULL,
  `license_no` varchar(20) NOT NULL,
  `contact_no` varchar(20) NOT NULL,
  `addrss` varchar(50) NOT NULL,
  `car_type` enum('SUV','Van','Sedan','Loaf') NOT NULL,
  `Vehicle` set('Honda','Nissan','Ford','Toyota') NOT NULL,
  `date_rental` date NOT NULL,
  `date_period` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  `contact_no` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
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
(9987500, 'Password', 'Hashed', 'Male', 'passwordhash@ramses.ph', '$2y$10$AHM0p3Abak4rlZBkf13miOns3beCnxVdKU4c0y.ljECC1ixx9JQyu', 'cce104'),
(9987501, 'sample', 'sample', 'Male', 'sample@gmail.com', '$2y$10$ABO5276vIGahsi5IZxXHc.2k3lcU5G2DePFW2oQlJaLKVGW/alg/.', 'sample'),
(9987502, 'em ', 'mail', 'Female', 'email@gmail.com', '$2y$10$iVd1oY7BQ2l/PMvO0gXli.C8m33y/neBqU3jErrfyqgzaZTBRnr/2', 'password'),
(9987503, 'Josh Andrei', 'Magcalas', 'Male', 'josh@gmail.com', '$2y$10$66D1AmsFqS7r5/3LTfYWIui46Y9OHadMss6EK12D0JGZqRsVxtVWa', '1234567890'),
(9987504, 'Gesef Mari', 'Depra', 'Female', 'gesefa@gmail.com', '$2y$10$GzqJzVMjKGfTEOzg8aScse2Yp2O7HvV/F86vUa.R6gGYZZwGyiz22', 'andrei123'),
(9987505, 'Harold', 'Naquila', 'Male', 'Naquila@gmail.com', '$2y$10$cIcfKSgeBgjgJkLpAbUzuu0V9KyQIzV3Nu3qQDTF3TF.f6edpFRTu', '123456'),
(9987506, 'Brendan', 'Ciano', 'Male', 'Ciano@gmail.com', '$2y$10$.kF6K4Yd/q8XA3wwK5G9q.kIoOhVIKyr/hRwWoptpPiC9OAOay5j.', '12345'),
(9987507, 'Rameses', 'Bernabe', 'Male', 'Bernabe@gmail.com', '$2y$10$P.N5RyCxmpEDLgTC4Z4wb.QiTKpCSWXbDpKrnSAothtIPSgAUEgHq', '123456'),
(9987508, 'James', 'Estrosos', 'Male', 'Bro69@gmail.com', '$2y$10$HiEPzRUpUtcLz6Xa7Dgflum1C16GiNLqHr61nPz3qA2.nPO6Eh/Ye', 'james123');

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
  MODIFY `reference_no` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_rent_car`
--
ALTER TABLE `tbl_rent_car`
  MODIFY `rent_no` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_support_details`
--
ALTER TABLE `tbl_support_details`
  MODIFY `sub_no` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_userlogin`
--
ALTER TABLE `tbl_userlogin`
  MODIFY `ID_ACC` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9987509;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
