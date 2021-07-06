-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2020 at 03:44 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ahm`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `pass`) VALUES
(1, 'admin', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `appoinment`
--

CREATE TABLE `appoinment` (
  `id` int(11) NOT NULL,
  `owner` varchar(100) NOT NULL,
  `animal` varchar(100) NOT NULL,
  `age` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `doctor` varchar(100) NOT NULL,
  `time` varchar(100) NOT NULL,
  `file` varchar(100) NOT NULL,
  `about` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appoinment`
--

INSERT INTO `appoinment` (`id`, `owner`, `animal`, `age`, `email`, `doctor`, `time`, `file`, `about`) VALUES
(1, 'parvej', 'kitty', '2', '1000903@daffodil.ac', '', '10 AM - 12 P', 'images/5e7894666e016.jpg', ''),
(2, 'patty', 'kitty', '2', '1000903@daffodil.ac', '4', '08 AM - 10 AM', 'images/5e78950a3cfed.jpg', ''),
(3, 'Pavel', 'dog', '22', 'O@y.com', '4', '02 PM - 04 PM', 'images/5e789b34d9659.jpg', ''),
(4, 'parvaj gf', 'ktta', '2 years', 'parvaj_gf@gf.com', '4', '02 PM - 04 PM', 'images/5e7910de03179.jpg', 'there is no major issue'),
(5, '', '', '', '', '', '08 AM - 10 AM', 'images/5e7911fab33ec.', '');

-- --------------------------------------------------------

--
-- Table structure for table `depart`
--

CREATE TABLE `depart` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `depart`
--

INSERT INTO `depart` (`id`, `name`) VALUES
(1, 'Neurology'),
(2, 'Opthalmology'),
(3, 'Nuclear Magnetic'),
(4, 'Surgical'),
(5, 'Cardiology'),
(6, 'X-ray');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `phone` int(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `typeu` varchar(50) NOT NULL,
  `about` text DEFAULT NULL,
  `status` int(10) NOT NULL DEFAULT 0,
  `depart` int(11) DEFAULT NULL,
  `upp` varchar(255) DEFAULT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `phone`, `email`, `typeu`, `about`, `status`, `depart`, `upp`, `pass`) VALUES
(2, 'sau', 'sazu', 334343, 'sazu2@FACKMAIL.COM', '', NULL, 0, 0, '', '202cb962ac59075b964b07152d234b70'),
(3, 'hasan', 'doctor', 342323245, 'doctor@dco.com', '', NULL, 0, 0, '', '202cb962ac59075b964b07152d234b70'),
(4, 'mynul', 'hasan', 434345345, '1000903@daffodil.ac', 'Doctor', 'i am a simple boy', 0, 1, 'images/5e767ed092584.jpg', '202cb962ac59075b964b07152d234b70'),
(5, 'lemon', 'hasan', 34234234, 'lemon@l.com', 'Pation', NULL, 0, 0, '', '202cb962ac59075b964b07152d234b70');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appoinment`
--
ALTER TABLE `appoinment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `depart`
--
ALTER TABLE `depart`
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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `appoinment`
--
ALTER TABLE `appoinment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `depart`
--
ALTER TABLE `depart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
