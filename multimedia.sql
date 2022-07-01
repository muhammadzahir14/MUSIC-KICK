-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2022 at 05:09 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `multimedia`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(10) UNSIGNED NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `full_name`, `username`, `password`) VALUES
(1, 'Muhd Rafiq', 'rafiq', 'f3ed11bbdb94fd9ebdefbaf646ab94d3'),
(9, 'Zahir Bryan', 'zahir', 'f3ed11bbdb94fd9ebdefbaf646ab94d3'),
(10, 'James Nabil', 'nabil', 'f3ed11bbdb94fd9ebdefbaf646ab94d3'),
(12, 'Administrator', 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_customer`
--

INSERT INTO `tbl_customer` (`id`, `username`, `email`, `password`) VALUES
(0, 'zahir', 'muhdzahir407@gmail.com', '902fbdd2b1df0c4f70b4a5d23525e932'),
(0, 'zahir', 'muhdzahir407@gmail.com', '900150983cd24fb0d6963f7d28e17f72'),
(0, 'rafiq', 'rafiq@gmail.com', '900150983cd24fb0d6963f7d28e17f72'),
(0, 'nabil', 'nabil@gmail.com', '900150983cd24fb0d6963f7d28e17f72'),
(0, '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(0, '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(0, '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(0, '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(0, 'zahir', 'muhdzahir407@gmail.com', '900150983cd24fb0d6963f7d28e17f72'),
(0, 'put', 'put@gmail.com', '900150983cd24fb0d6963f7d28e17f72'),
(0, '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(0, 'jebon', 'jebon@gmail.com', '900150983cd24fb0d6963f7d28e17f72'),
(0, 'zaz', 'muhdzahir407@gmail.com', '900150983cd24fb0d6963f7d28e17f72'),
(0, 'punai', 'punai@gmail.com', '900150983cd24fb0d6963f7d28e17f72'),
(0, 'stopa', 'stopa@gmail.com', '900150983cd24fb0d6963f7d28e17f72'),
(0, '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(0, 'zah', 'zah@gmail.com', '900150983cd24fb0d6963f7d28e17f72'),
(0, 'jett', 'jett@gmail.com', '900150983cd24fb0d6963f7d28e17f72'),
(0, 'raze', 'raze@gmail.com', '900150983cd24fb0d6963f7d28e17f72'),
(0, 'sage', 'sage@gmail.com', '900150983cd24fb0d6963f7d28e17f72'),
(0, 'nabill', 'nabill@gmail.com', '900150983cd24fb0d6963f7d28e17f72'),
(0, 'kamaliah', 'kamaliah@gmail.com', '900150983cd24fb0d6963f7d28e17f72'),
(0, 'hazran', 'hazran@gmail.com', '900150983cd24fb0d6963f7d28e17f72'),
(0, '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(0, '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(0, '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(0, '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(0, 'izaz', 'izaz@gmail.com', 'e2fc714c4727ee9395f324cd2e7f331f'),
(0, 'amir', 'amir@gmail.com', 'e2fc714c4727ee9395f324cd2e7f331f'),
(0, 'haziq', 'haziq@gmail.com', 'e2fc714c4727ee9395f324cd2e7f331f'),
(0, 'test', 'test@gmail.com', '900150983cd24fb0d6963f7d28e17f72'),
(0, 'aiman', 'aiman@gmail.com', 'e2fc714c4727ee9395f324cd2e7f331f'),
(0, 'iman', 'iman@gmail.com', 'e2fc714c4727ee9395f324cd2e7f331f');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
