-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2019 at 04:21 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epurohit`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(11) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `admin_phone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_email`, `admin_password`, `admin_name`, `admin_phone`) VALUES
(1, 'admin@gmail.com', 'e6e061838856bf47e1de730719fb2609', 'admin', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_brand`
--

CREATE TABLE `tbl_brand` (
  `brand_id` int(11) NOT NULL,
  `brand_name` varchar(255) NOT NULL,
  `brand_description` longtext NOT NULL,
  `publication_status` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_catagory`
--

CREATE TABLE `tbl_catagory` (
  `catagory_id` int(11) NOT NULL,
  `catagory_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_catagory`
--

INSERT INTO `tbl_catagory` (`catagory_id`, `catagory_name`) VALUES
(1, 'Laxmi Puja');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_grade`
--

CREATE TABLE `tbl_grade` (
  `id` int(11) NOT NULL,
  `grade` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_grade`
--

INSERT INTO `tbl_grade` (`id`, `grade`) VALUES
(1, 'A'),
(2, 'B'),
(3, 'C'),
(4, 'D');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_location`
--

CREATE TABLE `tbl_location` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_location`
--

INSERT INTO `tbl_location` (`id`, `name`) VALUES
(1, 'Uttarpara'),
(2, 'Hind Motor'),
(3, 'Konnagar'),
(4, 'Rishra'),
(5, 'Serampore'),
(6, 'Seoraphuli Jn'),
(7, 'Diara'),
(8, 'Nasibpur'),
(9, 'Singur'),
(10, 'Kamarkundu'),
(11, 'Nalikul'),
(12, 'Maliya H'),
(13, 'Haripal'),
(14, 'Kaikala'),
(15, 'Bahir Khanda'),
(16, 'Loknath'),
(17, 'Tarakeswar'),
(18, 'Baidyabati'),
(19, 'Bhadreswar'),
(20, 'Mankundu'),
(21, 'Chandanagr');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_purohit`
--

CREATE TABLE `tbl_purohit` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `zip` int(11) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `location_id` int(11) NOT NULL,
  `grade_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_purohit`
--

INSERT INTO `tbl_purohit` (`id`, `name`, `age`, `address`, `zip`, `contact`, `location_id`, `grade_id`) VALUES
(1, 'Suvam Basak', 65, '3 Santinagar Road Bhadrakali Hooghly', 712232, '9051446080', 1, 3),
(2, 'Debraj ghosh', 45, 'uttarpara', 712232, '9905136581', 2, 4),
(3, 'Archana Pandey', 56, 'Barrackpore', 712235, '9887655431', 4, 3),
(4, 'Titir Ghosh', 52, 'SEA', 777892, '9685741642', 5, 3),
(5, 'Rajdeep Chowdhury', 53, 'Kalyani', 326548, '9564871324', 10, 2),
(6, 'Juhi Juhi', 64, 'Hooghly', 125436, '5977486213', 20, 3),
(7, 'Suvam Roy', 65, 'Uttarpara', 712232, '9051446080', 1, 3),
(8, 'Debraj Biswas', 45, 'uttarpara', 712232, '9905136581', 2, 4),
(9, 'Archana Das', 56, 'Barrackpore', 712235, '9887655431', 4, 3),
(10, 'Titir Roy', 52, 'uttarpara', 777892, '9685741642', 5, 3),
(11, 'Rajdeep Ban', 53, 'Kalyani', 326548, '9564871324', 10, 2),
(12, 'Juhi Maji', 64, 'Hooghly', 125436, '5977486213', 20, 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rate`
--

CREATE TABLE `tbl_rate` (
  `rate_id` int(11) NOT NULL,
  `grade` varchar(255) NOT NULL,
  `catagory_name` varchar(255) NOT NULL,
  `rate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_rate`
--

INSERT INTO `tbl_rate` (`rate_id`, `grade`, `catagory_name`, `rate`) VALUES
(1, 'O', 'Laxmi Puja', '300'),
(2, 'A', 'Laxmi Puja', '500');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_brand`
--
ALTER TABLE `tbl_brand`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `tbl_catagory`
--
ALTER TABLE `tbl_catagory`
  ADD PRIMARY KEY (`catagory_id`);

--
-- Indexes for table `tbl_grade`
--
ALTER TABLE `tbl_grade`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_location`
--
ALTER TABLE `tbl_location`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_purohit`
--
ALTER TABLE `tbl_purohit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_rate`
--
ALTER TABLE `tbl_rate`
  ADD PRIMARY KEY (`rate_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_brand`
--
ALTER TABLE `tbl_brand`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_catagory`
--
ALTER TABLE `tbl_catagory`
  MODIFY `catagory_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_grade`
--
ALTER TABLE `tbl_grade`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_location`
--
ALTER TABLE `tbl_location`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tbl_purohit`
--
ALTER TABLE `tbl_purohit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_rate`
--
ALTER TABLE `tbl_rate`
  MODIFY `rate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
