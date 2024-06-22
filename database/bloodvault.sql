-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2024 at 09:30 AM
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
(1, 'Dipesh', 'admin@gmail.com', 'admin123');

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
(1, 17, 40, 80, 30, 50, 25, 30, 40);

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
  `status` text NOT NULL DEFAULT '0',
  `user_id` int(4) NOT NULL,
  `Date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donation`
--

INSERT INTO `donation` (`id`, `name`, `phone`, `email`, `address`, `bloodunit`, `bloodgroup`, `gender`, `disease`, `status`, `user_id`, `Date`) VALUES
(25, 'Dipesh Shrestha', 2147483647, 'dipesh@gmail.com', 'kathmandu', 33, 'AB+', 'Male', 'nothing', '1', 32, '2024-06-21');

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

CREATE TABLE `donor` (
  `d_id` int(4) NOT NULL,
  `firstname` varchar(40) NOT NULL,
  `middlename` text NOT NULL,
  `lastname` varchar(40) NOT NULL,
  `username` varchar(40) NOT NULL,
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

INSERT INTO `donor` (`d_id`, `firstname`, `middlename`, `lastname`, `username`, `dob`, `email`, `gender`, `bgroup`, `occupation`, `phone`, `tel`, `province`, `municipality`, `district`, `tole`, `ward`, `password`, `cpassword`) VALUES
(32, 'Dipesh', '', 'Shrestha', 'dipesh123', '2004-12-12', 'dipesh@gmail.com', 'male', 'A-', 'student', 2147483647, 0, 'bagmati', 'baiteshwor', 'dolakha', 'kshatrapa', 8, 'Dipesh@11', ''),
(33, 'Shubham', '', 'Bhandari', 'shubham1', '2004-12-13', 'shubham@gmail.com', 'male', 'A-', 'student', 34543, 0, 'bagmati', 'baiteshwor', 'dolakha', 'kshatrapa', 5, 'Shubh@m1', '');

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
(5, 'Blood donation', '2004-12-13', 'Sallaghari, Bhaktapur', 'Red Cross', 'Ceo od red cross', '326165', 'red@gmail.com', '1', 'hello donor, we are happy to have you here'),
(6, 'doantion camp', '0000-00-00', 'maitighar,kathmnadu', 'red cross', 'nijal', '9864151754', 'nijal@gmail.com', '-1', 'dhjtd'),
(7, 'doantion camp', '4552-02-05', 'Sallaghari, Bhaktapur', 'Red Cross', 'Ceo od red cross', '9864151754', 'nirmal@gmail.com', '1', 'go to hell');

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

--
-- Dumping data for table `hotline`
--

INSERT INTO `hotline` (`h_id`, `name`, `location`, `phone1`, `phone2`, `phone3`) VALUES
(6, 'blood bank', 'Bhaktapur', '2456', '986545', '123456'),
(7, 'e-raktakosh', 'lalitpur', '0125258', '', ''),
(8, 'blood vault', 'kTHMndu', '54494', '', ''),
(9, 'hamro life bank', 'DOLAKHA', '54494', '5353', '36536'),
(10, 'red cross', 'DOLAKHA', '0125258', '5353', '');

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
  `message` varchar(400) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` text NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`id`, `name`, `phone`, `bgroup`, `file`, `message`, `date`, `status`) VALUES
(1, 'Dipesh', '', '', '../files/8109_1713082730.png', '', '2024-06-16 15:45:23', '1'),
(2, 'Dipesh', '9864151754', 'O+', '../files/1781_1713082751.png', 'need fast', '2024-06-16 15:45:23', '-1'),
(3, 'Dipesh', '9864151754', 'B+', '../files/9367_1713083237.png', 'bllod vault', '2024-06-16 15:45:23', '1'),
(4, 'Dipesh', '9864151754', 'B+', '../files/4096_1713083375.png', 'hyy', '2024-06-16 15:45:23', '0'),
(5, 'Dipesh', '9864151754', 'AB+', '../files/1947_1713084097.png', 'hurry!', '2024-06-16 15:45:23', '0'),
(6, 'Dipesh', '9864151754', 'A-', '../files/5905_1713084155.png', 'ahah', '2024-06-16 15:45:23', '0'),
(7, 'Dipesh', '', '', '', '', '2024-06-16 15:45:23', '0'),
(8, 'Dipesh', '9864151754', 'B+', '', 'fef', '2024-06-16 15:45:23', '0'),
(9, '', '', '', '', '', '2024-06-16 15:45:23', '0'),
(10, 'Dipesh', '9864151754', '', '', 'dfd', '2024-06-16 15:45:23', '-1'),
(11, 'Dipesh', '34543', '', '', '', '2024-06-16 15:45:23', '0'),
(12, 'Dipesh', '', '', '', '', '2024-06-16 15:45:23', '0'),
(13, 'nijal', '', '', '', '', '2024-06-16 15:45:23', '0'),
(14, 'nijal', '', '', '', '', '2024-06-16 15:45:23', '0'),
(15, 'Dipesh', '', '', '', '', '2024-06-16 15:45:23', '0'),
(16, 'Dipesh', '', '', '../files/5421_1718445396.jpg', '', '2024-06-16 15:45:23', '0'),
(17, 'Dipesh', '', '', '../files/3523_1718445429.jpg', '', '2024-06-16 15:45:23', '0'),
(18, 'Donor', '', '', '', '', '2024-06-16 15:45:23', '0'),
(19, 'nirmal', '', '', '../files/5464_1718445456.jpg', '', '2024-06-16 15:45:23', '0'),
(20, 'nirmal', '', '', '../files/7600_1718445473.jpg', '', '2024-06-16 15:45:23', '-1'),
(21, 'Dipesh', '', '', '../files/2526_1718445486.jpg', '', '2024-06-16 15:45:23', '0'),
(22, 'Dipesh', '9864151754', '', '../files/2463_1718445525.jpg', '', '2024-06-16 15:45:23', '0'),
(23, 'Dipesh', '', '', '../files/5406_1718445599.jpg', '', '2024-06-16 15:45:23', '0'),
(24, 'Dipesh', '', '', '../files/5700_1718445713.jpg', '', '2024-06-16 15:45:23', '-1');

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
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_user_id` (`user_id`);

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
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `donor`
--
ALTER TABLE `donor`
  MODIFY `d_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `e_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `hotline`
--
ALTER TABLE `hotline`
  MODIFY `h_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `donation`
--
ALTER TABLE `donation`
  ADD CONSTRAINT `fk_user_id` FOREIGN KEY (`user_id`) REFERENCES `donor` (`d_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
