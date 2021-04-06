-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2021 at 12:18 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ur_code_lite`
--

-- --------------------------------------------------------

--
-- Table structure for table `uploaded_project`
--

CREATE TABLE `uploaded_project` (
  `project_name` varchar(100) NOT NULL,
  `project_description` longtext NOT NULL,
  `department` varchar(100) NOT NULL,
  `class` varchar(11) NOT NULL,
  `sem` varchar(10) NOT NULL,
  `project_sub` varchar(11) NOT NULL,
  `project_uploader` varchar(100) NOT NULL,
  `project_uploader_email` varchar(100) NOT NULL,
  `project_uploader_number` bigint(10) NOT NULL,
  `project_group_members` varchar(100) NOT NULL,
  `project_report` varchar(100) NOT NULL,
  `project_code` varchar(100) NOT NULL,
  `project_zip_directory` varchar(100) NOT NULL,
  `project_report_directory` varchar(100) NOT NULL,
  `project_size` bigint(100) NOT NULL,
  `download_count` int(50) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
