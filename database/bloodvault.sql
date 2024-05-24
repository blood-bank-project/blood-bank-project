-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2024 at 05:27 PM
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
-- Database: `bloodvault`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `aid` int(4) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aid`, `name`, `email`, `password`) VALUES
(1, 'Dipesh', 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `blood`
--

CREATE TABLE `blood` (
  `s_n` int(11) NOT NULL,
  `A+` int(11) NOT NULL,
  `A-` int(11) NOT NULL,
  `B+` int(11) NOT NULL,
  `B-` int(11) NOT NULL,
  `AB+` int(11) NOT NULL,
  `AB-` int(11) NOT NULL,
  `O+` int(11) NOT NULL,
  `O-` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blood`
--

INSERT INTO `blood` (`s_n`, `A+`, `A-`, `B+`, `B-`, `AB+`, `AB-`, `O+`, `O-`) VALUES
(1, 17, 20, 80, 30, 50, 25, 30, 40);

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

CREATE TABLE `donation` (
  `id` int(4) NOT NULL,
  `name` varchar(40) NOT NULL,
  `phone` int(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `address` varchar(40) NOT NULL,
  `bloodunit` int(4) NOT NULL,
  `bloodgroup` varchar(5) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `disease` varchar(300) NOT NULL,
  `status` text NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donation`
--

INSERT INTO `donation` (`id`, `name`, `phone`, `email`, `address`, `bloodunit`, `bloodgroup`, `gender`, `disease`, `status`) VALUES
(1, 'Dipesh', 34543, 'dipesh@gmail.com', 'Duwakot', 33, '', '', 'nothing', '1'),
(2, 'Dipesh', 34, 'dipesh@gmail.com', 'Duwakot', 33, 'B+', 'Male', 'nothing', '1'),
(4, 'nijal', 2147483647, 'nijal@gmail.com', 'kathmandu', 50, 'A-', 'Male', 'nothing', '1'),
(5, 'Dipesh', 1314, 'nijal@gmail.com', 'ktm', 33, 'AB-', 'Male', 'none', '-1'),
(6, 'Dipesh', 2345677, 'dipesh@gmail.com', 'kathmandu', 22, 'AB+', 'Male', 'nothing', '1'),
(7, 'nirmal', 2324, 'nirmal@gmail.com', 'kathmandu', 20, 'AB+', 'Male', 'nothing', '-1'),
(8, 'Dipesh', 34543, 'dipesh@gmail.com', 'kathmandu', 33, 'A+', 'Male', 'ddd', '1'),
(9, 'Dipesh', 34543, 'dipesh@gmail.com', 'kathmandu', 33, 'A+', 'Male', 'ddd', '-1'),
(10, 'Dipesh', 34543, 'dipesh@gmail.com', 'kathmandu', 50, 'B+', 'Male', '', '1'),
(11, 'nijal', 34, 'dipesh@gmail.com', 'kathmandu', 33, 'A+', 'Male', '', '-1'),
(12, 'nijal', 34, 'dipesh@gmail.com', 'kathmandu', 33, 'AB+', 'Male', '', '1');

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

CREATE TABLE `donor` (
  `d_id` int(4) NOT NULL,
  `firstname` varchar(40) NOT NULL,
  `middlename` text NOT NULL,
  `lastname` varchar(40) NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(40) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `bgroup` varchar(10) NOT NULL,
  `occupation` varchar(30) NOT NULL,
  `phone` int(20) NOT NULL,
  `tel` int(20) NOT NULL,
  `province` text NOT NULL,
  `municipality` text NOT NULL,
  `district` varchar(30) NOT NULL,
  `tole` text NOT NULL,
  `ward` int(4) NOT NULL,
  `password` varchar(40) NOT NULL,
  `cpassword` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donor`
--

INSERT INTO `donor` (`d_id`, `firstname`, `middlename`, `lastname`, `dob`, `email`, `gender`, `bgroup`, `occupation`, `phone`, `tel`, `province`, `municipality`, `district`, `tole`, `ward`, `password`, `cpassword`) VALUES
(5, 'Dipesh', '', 'Shrestha', '2004-12-13', 'dipesh@gmail.com', 'male', 'B+', 'student', 34543, 242, 'bagmati', 'baiteshwor', 'dolakha', 'kshatrapa', 8, 'dipesh', 'dipesh');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `e_id` int(4) NOT NULL,
  `name` text NOT NULL,
  `date` date NOT NULL,
  `location` varchar(50) NOT NULL,
  `organizer` varchar(50) NOT NULL,
  `c_person` varchar(40) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `status` varchar(4) NOT NULL,
  `description` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`e_id`, `name`, `date`, `location`, `organizer`, `c_person`, `phone`, `email`, `status`, `description`) VALUES
(1, 'Blood donation', '2024-01-22', 'maitighar,kathmnadu', 'red cross', 'dipesh shrestha', '9864521874', 'dipesh@gmail.com', '0', 'this is the blood donation event'),
(2, 'doantion camp', '5523-02-25', 'DOLAKHA', 'red cross', 'nijal', '5445698', 'niajl@gamail.com', '1', 'no need to say');

-- --------------------------------------------------------

--
-- Table structure for table `hotline`
--

CREATE TABLE `hotline` (
  `h_id` int(4) NOT NULL,
  `name` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `phone1` varchar(20) NOT NULL,
  `phone2` varchar(20) NOT NULL,
  `phone3` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `id` int(4) NOT NULL,
  `name` varchar(40) NOT NULL,
  `phone` varchar(40) NOT NULL,
  `bgroup` varchar(5) NOT NULL,
  `file` varchar(255) NOT NULL,
  `message` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`id`, `name`, `phone`, `bgroup`, `file`, `message`) VALUES
(1, 'Dipesh', '', '', '../files/8109_1713082730.png', ''),
(2, 'Dipesh', '9864151754', 'O+', '../files/1781_1713082751.png', 'need fast'),
(3, 'Dipesh', '9864151754', 'B+', '../files/9367_1713083237.png', 'bllod vault'),
(4, 'Dipesh', '9864151754', 'B+', '../files/4096_1713083375.png', 'hyy'),
(5, 'Dipesh', '9864151754', 'AB+', '../files/1947_1713084097.png', 'hurry!'),
(6, 'Dipesh', '9864151754', 'A-', '../files/5905_1713084155.png', 'ahah');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `blood`
--
ALTER TABLE `blood`
  ADD PRIMARY KEY (`s_n`);

--
-- Indexes for table `donation`
--
ALTER TABLE `donation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donor`
--
ALTER TABLE `donor`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`e_id`);

--
-- Indexes for table `hotline`
--
ALTER TABLE `hotline`
  ADD PRIMARY KEY (`h_id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `aid` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `blood`
--
ALTER TABLE `blood`
  MODIFY `s_n` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `donation`
--
ALTER TABLE `donation`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `donor`
--
ALTER TABLE `donor`
  MODIFY `d_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `e_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `hotline`
--
ALTER TABLE `hotline`
  MODIFY `h_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
