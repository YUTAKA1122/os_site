-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Oct 01, 2021 at 10:46 AM
-- Server version: 5.7.32
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `os_site`
--

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE `activities` (
  `act_id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `aname` varchar(255) NOT NULL,
  `adesc` varchar(255) NOT NULL,
  `capacity` varchar(255) NOT NULL,
  `aimg` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` (`act_id`, `event_id`, `aname`, `adesc`, `capacity`, `aimg`) VALUES
(1, 1, 'Model English Class', 'Let\'s talk in English!', '18', ''),
(2, 2, 'Model English Class', 'Talk in English!', '3', NULL),
(3, 3, 'English Test', 'Our English Exam', '100', NULL),
(5, 1, 'Curriculum Management', 'Introduction of Our Curriculum', '150', NULL),
(6, 2, 'Math Class', 'Enjoy math!', '30', NULL),
(7, 2, 'Japanese Class', 'Experience Historic Novels', '30', NULL),
(8, 3, 'Math Test', 'Our Math Exam', '150', NULL),
(9, 3, 'Science Test', 'Our Science Exam', '150', NULL),
(10, 2, 'Club Experience', 'Watch and try our club activity', '350', NULL),
(11, 2, 'School Tour', 'Enjoy walking around our school', '20', NULL),
(12, 2, 'Mystery Solving in school', 'Solve several Problems and escape from school', '30', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `art_id` int(11) NOT NULL,
  `art_date` date NOT NULL,
  `art_desc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`art_id`, `art_date`, `art_desc`) VALUES
(1, '2021-08-02', 'Homepage was updated.'),
(2, '2021-09-02', 'First Meeting was opened. Please make a reservation.'),
(3, '2021-09-23', 'Open School page is now on homepage.'),
(4, '2021-09-29', 'Check & Challenge Page was released!'),
(5, '2021-09-29', 'We will hold additional open School on 7th, August!');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `act_id1` varchar(255) NOT NULL,
  `act_id2` varchar(255) DEFAULT NULL,
  `reservation` varchar(255) NOT NULL DEFAULT 'reserved'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `user_id`, `item_id`, `act_id1`, `act_id2`, `reservation`) VALUES
(7, 3, 2, '2', '7', 'reserved'),
(9, 14, 2, '2', '2', 'reserved'),
(23, 3, 1, '5', '', 'reserved'),
(24, 3, 3, '3', '', 'reserved'),
(26, 7, 4, '1', '', 'reserved'),
(30, 4, 1, '5', '', 'reserved'),
(31, 7, 2, '7', '6', 'reserved'),
(32, 4, 2, '12', '11', 'reserved'),
(33, 15, 4, '1', '', 'reserved'),
(34, 15, 3, '3', '', 'reserved'),
(35, 15, 2, '12', '2', 'reserved');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `item_id` int(11) NOT NULL,
  `event_id` varchar(255) NOT NULL,
  `iname` varchar(255) NOT NULL,
  `idate` date DEFAULT NULL,
  `capacity` varchar(255) NOT NULL,
  `itarget` varchar(255) NOT NULL,
  `idesc` varchar(255) NOT NULL,
  `iimg` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`item_id`, `event_id`, `iname`, `idate`, `capacity`, `itarget`, `idesc`, `iimg`) VALUES
(1, '1', 'First Meeting', '2021-05-22', '100', 'Parents', 'Introduction of Our School!', 'qrcode_yutaka1122.github.io.png'),
(2, '2', 'Open School', '2021-08-06', '350', 'Students & Parents', 'Experience Our School Life!', 'osBarner.PNG'),
(3, '3', 'Check & Challenge', '2021-10-16', '150', 'Students', 'Try Our Entrance Exam!', NULL),
(4, '1', 'First Meeting', '2021-07-10', '100', 'Parents', 'Introduction of Our School!', 'qrcode_yutaka1122.github.io.png'),
(7, '2', 'Open School', '2021-08-07', '350', 'Students & Parents', 'Experience Our School Life!', NULL),
(8, '3', 'Check & Challenge', '2021-10-30', '150', 'Students & Parents', 'Try Our Entrance Exam!', NULL),
(9, '2', 'Open School', '2021-08-09', '350', 'Students & Parents', 'Experience Our School', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(10) NOT NULL DEFAULT 'u'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `lname`, `fname`, `email`, `password`, `role`) VALUES
(1, 'namioka', 'yutaka', 'aaa@gmail.com', '47bce5c74f589f4867dbd57e9ca9f808', 'u'),
(3, 'nami-san', 'yuta-san', '111@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'u'),
(4, '12', '12', '12@gmail.com', 'c20ad4d76fe97759aa27a0c99bff6710', 'u'),
(5, 'ad', 'min', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'a'),
(7, '111', '111', '1@gmail.com', '698d51a19d8a121ce581499d7b701668', 'u'),
(14, 'Doe', 'John', 'John@gmail.com', '61409aa1fd47d4a5332de23cbf59a36f', 'u'),
(15, 'katou', 'katou', 'katou@gmail.com', '9245b64d5b3e8e7c80850ba77d7931fe', 'u');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`act_id`);

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`art_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activities`
--
ALTER TABLE `activities`
  MODIFY `act_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `art_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
