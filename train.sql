-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 29, 2020 at 12:12 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `railway`
--

-- --------------------------------------------------------

--
-- Table structure for table `train`
--

DROP TABLE IF EXISTS `train`;
CREATE TABLE IF NOT EXISTS `train` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `train_no` int(11) NOT NULL,
  `train_name` varchar(100) NOT NULL,
  `t_from` varchar(100) NOT NULL,
  `t_to` varchar(100) NOT NULL,
  `day` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `train`
--

INSERT INTO `train` (`id`, `train_no`, `train_name`, `t_from`, `t_to`, `day`) VALUES
(1, 15909, 'avad assam', 'delhi', 'Dibrugarh', 'all days'),
(2, 13452, 'B Mail', 'Bangalore', 'Dibrugarh', 'M,W,F');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
