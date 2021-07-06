-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 30, 2020 at 05:39 PM
-- Server version: 5.7.28-0ubuntu0.18.04.4
-- PHP Version: 7.4.1

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
  `about` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appoinment`
--

INSERT INTO `appoinment` (`id`, `owner`, `animal`, `age`, `email`, `doctor`, `time`, `file`, `about`, `status`) VALUES
(2, 'patty', 'kitty', '2', '1000903@daffodil.ac', '4', '08 AM - 10 AM', 'images/5e78950a3cfed.jpg', '', 0),
(3, 'Pavel', 'dog', '22', 'O@y.com', '4', '02 PM - 04 PM', 'images/5e789b34d9659.jpg', '', 0),
(4, 'parvaj gf', 'ktta', '2 years', 'parvaj_gf@gf.com', '4', '02 PM - 04 PM', 'images/5e7910de03179.jpg', 'there is no major issue', 0);

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `details` text NOT NULL,
  `image` varchar(100) NOT NULL,
  `time` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `details`, `image`, `time`) VALUES
(3, 'Scary Thing That You Donâ€™t Get Enough Sleep', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.', 'img/5e81c15745fd4.jpg', '2020-03-30'),
(4, 'Scary Thing That You Donâ€™t Get Enough Sleep', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.', 'img/5e81c17a6628f.jpg', '2020-03-30'),
(5, 'Scary Thing That You Donâ€™t Get Enough Sleep', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.', 'img/5e81c1b871120.jpg', '2020-03-30'),
(6, 'Scary Thing That You Donâ€™t Get Enough Sleep', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.', 'img/5e81c1e19a90a.jpg', '2020-03-30'),
(10, 'This is a demo title', 'This is a demo titleThis is a demo titleThis is a demo titleThis is a demo titleThis is a demo titleThis is a demo titleThis is a demo titleThis is a demo titleThis is a demo titleThis is a demo titleThis is a demo titleThis is a demo titleThis is a demo title', 'img/5e81d57e72508.jpg', 'Mar,Mon,2020'),
(11, 'this is a titile for what', 'this is a titile for whatthis is a titile for whatthis is a titile for whatthis is a titile for whatthis is a titile for whatthis is a titile for whatthis is a titile for whatthis is a titile for whatthis is a titile for whatthis is a titile for whatthis is a titile for what', 'img/5e81fec544a12.jpg', 'Mar-30-2020'),
(12, 'Scary Thing That You Donâ€™t Get Enough Sleep', 'Scary Thing That You Donâ€™t Get Enough SleepScary Thing That You Donâ€™t Get Enough SleepScary Thing That You Donâ€™t Get Enough SleepScary Thing That You Donâ€™t Get Enough SleepScary Thing That You Donâ€™t Get Enough SleepScary Thing That You Donâ€™t Get Enough Sleep', 'img/5e81ff26163b8.jpg', '30 Mar 2020');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `msg` text NOT NULL,
  `time` varchar(100) NOT NULL,
  `blog` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `name`, `email`, `msg`, `time`, `blog`) VALUES
(2, 'shuvo', 'seam@mailc.omc', 'this is a normal message', '30 Mar 2020', 3),
(3, 'parvaj', 'parvaj@pv.com', 'this is parvaj comment. ', '30 Mar 2020', 4);

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
  `about` text,
  `status` int(10) NOT NULL DEFAULT '0',
  `depart` int(11) DEFAULT NULL,
  `upp` varchar(255) DEFAULT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `phone`, `email`, `typeu`, `about`, `status`, `depart`, `upp`, `pass`) VALUES
(2, 'sau', 'sazu', 334343, 'sazu2@FACKMAIL.COM', '', NULL, 0, 0, '', '202cb962ac59075b964b07152d234b70'),
(3, 'hasan', 'doctor', 342323245, 'doctor@dco.com', 'Doctor', NULL, 0, 0, '', '202cb962ac59075b964b07152d234b70'),
(4, 'mynul', 'hasan', 434345345, '1000903@daffodil.ac', 'Doctor', 'i am a simple boy', 0, 1, 'images/5e767ed092584.jpg', '202cb962ac59075b964b07152d234b70'),
(5, 'lemon', 'hasan', 34234234, 'lemon@l.com', 'Patient', NULL, 0, 1, '', '202cb962ac59075b964b07152d234b70'),
(6, 'Dr. Lloyd ', 'Wilson', 323423, 'Wilson@fackmail.com', 'Doctor', '      I am an ambitious workaholic, but apart from that, pretty simple person.                              ', 1, 1, 'images/5e80ee28a30ee.jpg', '202cb962ac59075b964b07152d234b70'),
(7, 'Dr. Rachel ', 'Parker', 38423943, 'Parker@ma.com', 'Doctor', 'I am an ambitious workaholic, but apart from that, pretty simple person.                                    ', 1, 3, 'images/5e80f0961a34a.jpg', '202cb962ac59075b964b07152d234b70'),
(8, 'Dr. lan ', 'smith', 38423943, 'smith@ma.com', 'Doctor', 'I am an ambitious workaholic, but apart from that, pretty simple person.                                    ', 1, 5, 'images/5e80f064ecb23.jpg', '202cb962ac59075b964b07152d234b70'),
(9, 'Dr. Alicia  ', 'Henderson', 38423943, 'Henderson@ma.com', 'Doctor', 'I am an ambitious workaholic, but apart from that, pretty simple person.                                    ', 1, 4, 'images/5e80efc6a164d.jpg', '202cb962ac59075b964b07152d234b70');

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
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `depart`
--
ALTER TABLE `depart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
