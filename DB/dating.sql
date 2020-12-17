-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2020 at 02:42 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dating`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `names` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `profile` text NOT NULL,
  `contact` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `names`, `email`, `password`, `profile`, `contact`) VALUES
(1, 'Creator', '', 'test@gmail.com', '12345', '', 788885556);

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `member_id` int(11) NOT NULL,
  `f_name` longtext NOT NULL,
  `dob` longtext NOT NULL,
  `gender` longtext NOT NULL,
  `country` longtext NOT NULL,
  `city` longtext NOT NULL,
  `email` longtext NOT NULL,
  `username` longtext NOT NULL,
  `password` longtext NOT NULL,
  `programing` longtext NOT NULL,
  `profile` longtext NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`member_id`, `f_name`, `dob`, `gender`, `country`, `city`, `email`, `username`, `password`, `programing`, `profile`, `reg_date`) VALUES
(3, 'Test ', '2020-12-19', 'Male', 'Rwanda', 'Kigali', 'npprince47@gmail.com', 'User 1', '1234', 'Python', '869997_1406933667e.png', '2020-12-17 11:33:55'),
(4, 'Test ', '2020-12-27', 'Male', 'Uganda', 'Kamwege', 'reservations@redchillihideaway.com', 'User 2', '1234', 'Data science', 'akagera np 1.gif', '2020-12-17 11:53:35'),
(5, 'Test ', '2020-12-27', 'Male', 'Uganda', 'Kamwege', 'reservations@redchillihideaway.com', 'User 3', '1234', 'Python', 'volcanoes np.jpg', '2020-12-17 11:33:09'),
(6, 'Test ', '2020-12-27', 'Female', 'Female', 'Rwanda', 'npprince47@gmail.com', 'greenegf', '1234', 'Python', 'akagera np  Lake Ihema.jpg', '2020-12-17 10:23:47');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `request_id` int(11) NOT NULL,
  `sender_id` longtext NOT NULL,
  `receiver_id` longtext NOT NULL,
  `message` longtext NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`request_id`, `sender_id`, `receiver_id`, `message`, `created_date`) VALUES
(1, '6', '5', '6', '2020-12-12 10:24:52'),
(2, '6', '5', '6', '2020-12-12 10:25:17'),
(3, '4', '3', '6', '2020-12-17 13:03:36'),
(4, '6', '6', '6', '2020-12-17 13:03:40'),
(5, '6', '3', '6', '2020-12-12 10:29:17'),
(6, '6', '3', '6', '2020-12-12 10:30:41'),
(7, '6', '3', 'test', '2020-12-02 00:21:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`request_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `request_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
