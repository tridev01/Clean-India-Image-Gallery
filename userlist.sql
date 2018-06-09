-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2018 at 08:31 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `userlist`
--

-- --------------------------------------------------------

--
-- Table structure for table `image_upload`
--

CREATE TABLE `image_upload` (
  `id` int(4) NOT NULL,
  `file` varchar(255) NOT NULL,
  `Img_Format` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `image_upload`
--

INSERT INTO `image_upload` (`id`, `file`, `Img_Format`) VALUES
(14, 'modiji.jpg', 'jpg'),
(15, 'amitabh.jpg', 'jpg'),
(16, 'air-india-emplyees.jpg', 'jpg'),
(17, 'anu.jpg', 'jpg'),
(18, 'roshan.jpg', 'jpg'),
(19, 'salman.jpg', 'jpg'),
(20, 'vivek.jpg', 'jpg'),
(21, 'Sample3(1).jpg', 'jpg'),
(22, '22vzrdv01-poste_23_2287006f.jpg', 'jpg'),
(23, '10-Beautiful-Drawings-on-Clean-India-Swachh-Bharat-4.jpg', 'jpg'),
(24, 'IndiaTv6ecb75_swachh1.jpg', 'jpg'),
(25, 'Desert.jpg', 'jpg'),
(26, 'Lighthouse.jpg', 'jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(4) NOT NULL,
  `name` varchar(30) NOT NULL,
  `pw` varchar(40) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `pw`, `fullname`, `email`) VALUES
(6, 'admin', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'Admin', 'sen.dev92@gmail.com'),
(7, 'ramji', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'Tridev Sen', 'sen.dev92@gmail.com'),
(8, 'sen01', '8cb2237d0679ca88db6464eac60da96345513964', 'dev sen', 'sen@gmail.com'),
(9, 'jain01', '8cb2237d0679ca88db6464eac60da96345513964', 'ram jain', 'sen.dev92@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `image_upload`
--
ALTER TABLE `image_upload`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `image_upload`
--
ALTER TABLE `image_upload`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
