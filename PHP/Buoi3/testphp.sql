-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2017 at 04:11 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testphp`
--

-- --------------------------------------------------------

--
-- Table structure for table `cauthu1`
--

CREATE TABLE `cauthu1` (
  `mact` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `hoten` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `namsinh` int(50) NOT NULL,
  `quequan` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `sodienthoai` int(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cauthu1`
--

INSERT INTO `cauthu1` (`mact`, `hoten`, `namsinh`, `quequan`, `sodienthoai`) VALUES
('m01', 'Nguyen Van Mot', 1996, 'Ha Noi', 11111111),
('m02', 'Nguyen Van Hai', 1992, 'Ha Nam', 222222),
('m03', 'Tran Van Ba', 1993, 'Ha Tinh', 333333),
('m04', 'Nguyen Van Bon', 1994, 'Thanh Hoa', 4444444),
('m05', 'Tran Van Nam', 1995, 'Nam Dinh', 555555),
('m21', 'Phuong anh', 1990, 'Ha Noi', 454454),
('m6', 'Phuong anh', 1992, 'Ha Noi', 45454554),
('m7', 'Tran Duy Son', 1992, 'Ha Noi', 45545458),
('m8', 'Nguyen Hoan Hai', 1992, 'Ha Nam', 2147483647),
('m9', 'Khanh Trinh', 1994, 'Ha Noi', 2147483647),
('m10', 'Hai Ly', 1990, 'Bac Ninh', 2147483647),
('m11', 'Duong Cong Cuong', 1992, 'Bac Ninh', 545454545),
('m12', 'Nguyen Xuan Chien Tuan', 1992, 'Thanh Hoa', 15555545),
('m13', 'Nguyen Thi Hoa Ban', 1992, 'Ha Nam', 554545454);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cauthu1`
--
ALTER TABLE `cauthu1`
  ADD PRIMARY KEY (`mact`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
