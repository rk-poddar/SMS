-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 04, 2022 at 10:59 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sms`
--

-- --------------------------------------------------------

--
-- Table structure for table `addclass`
--

CREATE TABLE `addclass` (
  `classid` int(255) NOT NULL,
  `classname` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `addclass`
--

INSERT INTO `addclass` (`classid`, `classname`, `branch`) VALUES
(3, 'B.Tech', 'CSE'),
(4, 'B.Tech', 'ME'),
(5, 'B.Tech', 'ECE'),
(6, 'B.Tech', 'IT');

-- --------------------------------------------------------

--
-- Table structure for table `addstudent`
--

CREATE TABLE `addstudent` (
  `id` int(255) NOT NULL,
  `rollno` int(255) NOT NULL,
  `stdphoto` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `sem` int(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `mname` varchar(255) NOT NULL,
  `contactno` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `addstudent`
--

INSERT INTO `addstudent` (`id`, `rollno`, `stdphoto`, `name`, `gender`, `dob`, `email`, `mobile`, `class`, `sem`, `fname`, `mname`, `contactno`, `address`, `username`, `password`) VALUES
(29, 24356, 'VBox.log', 'Harkirat Singh Brar', 'Male', '2022-06-04', 'contactat.hackzero@gmail.com', '9876543', 'B.Tech, ECE', 1, 'Fname', 'Mname', '3465765443', 'Darbhanga', 'harkiratsingh@gmail.com', '51f24f4bdc0731fa5050cf9275f141f1'),
(30, 304, 'photo-1508739773434-c26b3d09e071.jpeg', 'Shubham Kumar', 'Male', '2022-06-04', 'shubham@gmail.com', '9876543210', 'B.Tech, CSE', 6, 'fname', 'mname', '9876543210', 'punjab', 'shubham@gmail.com', '3b6beb51e76816e632a40d440eab0097'),
(31, 412, 'photo-1508739773434-c26b3d09e071.jpeg', 'Rahul Poddar', 'Male', '2022-06-04', 'rahul@gmail.com', '9876543210', 'B.Tech, IT', 6, 'Fname', 'Mname', '7319908062', 'Darbhanga', 'rahul@gmail.com', '439ed537979d8e831561964dbbbd7413'),
(32, 304, 'photo-1508739773434-c26b3d09e071.jpeg', 'Shubham Kumar', 'Male', '2022-06-04', 'shubham@gmail.com', '9876543210', 'B.Tech, CSE', 6, 'fname', 'mname', '9876543210', 'punjab', 'shubham@gmail.com', '3b6beb51e76816e632a40d440eab0097');

-- --------------------------------------------------------

--
-- Table structure for table `addteacher`
--

CREATE TABLE `addteacher` (
  `id` int(255) NOT NULL,
  `tcphoto` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `dpt` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `addteacher`
--

INSERT INTO `addteacher` (`id`, `tcphoto`, `name`, `gender`, `email`, `mobile`, `dpt`, `username`, `password`) VALUES
(4, 'photo-1611172061501-ee8ef02d49c5.jpeg', 'Harkirat Singh Brar', 'Male', 'harkiratsingn@gmail.com', '9876543210', 'CSE', 'harkiratsingh@gmail.com', '50d0614edc63698fba006ffbd3e6b259'),
(7, 'VBox.log.3', 'Rahul Kumar', 'Male', 'aditya@gmail.com', '23546576765', 'CSE', 'harkiratsingh@gmail.com', '37079b3491ef5a89e962848eacd11017'),
(8, 'pexels-erik-mclean-4157090.jpg', 'Aditya', 'Male', 'aditya@gmail.com', '9876567898', 'ME', 'aditya@gmail.com', '9a65b9459303001ecedc4e5db7208ead'),
(9, 'photo-1508739773434-c26b3d09e071.jpeg', 'Rahul Kumar', 'Male', 'rahul@gmail.com', '9876543210', 'ME', 'rahul@gmail.com', '374a624c5d46bc3a722fb3062ae5de66');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'pass');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `id` int(255) NOT NULL,
  `ntitle` varchar(255) NOT NULL,
  `anotice` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`id`, `ntitle`, `anotice`) VALUES
(1, 'Assignment 1', 'wallpaper.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `timetable`
--

CREATE TABLE `timetable` (
  `id` int(255) NOT NULL,
  `timetable` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `timetable`
--

INSERT INTO `timetable` (`id`, `timetable`) VALUES
(5, 'Screenshot (29).png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addclass`
--
ALTER TABLE `addclass`
  ADD PRIMARY KEY (`classid`);

--
-- Indexes for table `addstudent`
--
ALTER TABLE `addstudent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `addteacher`
--
ALTER TABLE `addteacher`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `timetable`
--
ALTER TABLE `timetable`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addclass`
--
ALTER TABLE `addclass`
  MODIFY `classid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `addstudent`
--
ALTER TABLE `addstudent`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `addteacher`
--
ALTER TABLE `addteacher`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `timetable`
--
ALTER TABLE `timetable`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
