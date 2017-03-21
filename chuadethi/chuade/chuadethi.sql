-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2017 at 01:56 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chuadethi`
--

-- --------------------------------------------------------

--
-- Table structure for table `cauthu`
--

CREATE TABLE `cauthu` (
  `mact` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `hoten` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `namsinh` int(50) NOT NULL,
  `quequan` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `sodienthoai` int(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cauthu`
--

INSERT INTO `cauthu` (`mact`, `hoten`, `namsinh`, `quequan`, `sodienthoai`) VALUES
('m01', 'Nguyen Hoan Hai', 1991, 'Ha Noi', 212121),
('m02', 'Nguyen Xuan Chien Tuan', 1992, 'Thai Binh', 2112),
('m03', 'Phan Hai Ly', 1991, 'Ha Nam', 121521),
('m04', 'Nguyen Van Bon', 1993, 'Thai Binh', 1545512),
('m05', 'Nguyen Thi Nam', 1993, 'Ha Nam', 21545);

-- --------------------------------------------------------

--
-- Table structure for table `cauthu1`
--

CREATE TABLE `cauthu1` (
  `mact` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `hoten` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `quequan` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `namsinh` int(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cauthu1`
--

INSERT INTO `cauthu1` (`mact`, `hoten`, `quequan`, `namsinh`) VALUES
('m02', 'Nguyen Van Mot', 'Thanh', 1616),
('m03', 'Nguyen Van Mot', 'Ha Nam', 5151);

-- --------------------------------------------------------

--
-- Table structure for table `dienthoai`
--

CREATE TABLE `dienthoai` (
  `madt` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `tendt` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `hangdt` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `gia` int(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `dienthoai`
--

INSERT INTO `dienthoai` (`madt`, `tendt`, `hangdt`, `gia`) VALUES
('m01', 'Iphone5', 'Apple', 12121212),
('m02', 'Samsung', 'Samsung', 121212),
('m06', 'Nokia 3110c', 'Nokia', 5000000),
('m03', 'Samsung galaxy j7', 'Samsung', 4000000),
('', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `nhanvien`
--

CREATE TABLE `nhanvien` (
  `manv` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `hoten` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `gioitinh` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `quequan` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `namtuyendung` int(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `nhanvien`
--

INSERT INTO `nhanvien` (`manv`, `hoten`, `gioitinh`, `quequan`, `namtuyendung`) VALUES
('m01', 'Nguyen Van Mot', 'Nam', 'Ha Noi', 1990),
('m02', 'Nguyen Van Hai', 'Nam', 'Ha NAm', 2001),
('m03', 'Tran Thi Ba', 'Nu', 'Thanh Hoa', 2001),
('m04', 'Nguyen Van Bon', 'Nam', 'Ha Noi', 1996),
('m05', 'Tran Thi Nam', 'Nu', 'Ha Tinh', 2010),
('m06', 'Tran Thi Sau', 'Nu', 'Ha Nam', 2005);

-- --------------------------------------------------------

--
-- Table structure for table `sinhvien`
--

CREATE TABLE `sinhvien` (
  `masv` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `hoten` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `gioitinh` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `quequan` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sinhvien`
--

INSERT INTO `sinhvien` (`masv`, `hoten`, `gioitinh`, `quequan`) VALUES
('m01', 'Nguyen Van Mot', 'Nam', 'Ha NAm'),
('m02', 'Nguyen Thi Hai', 'Nu', 'Ha Noi'),
('m03', 'Nguyen Van Ba', 'Nam', 'Ha Tinh'),
('m04', 'Tran Van Bon', 'Nam', 'Ha Cai gì do'),
('m05', 'Tran van nam', 'Nam', 'Ha Noi'),
('m12', 'Tran Duy Son', 'Nam', 'Ha Noi'),
('m10', 'Duong Cong Cuong', 'Nam', 'Bac Ninh');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `fullname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `state` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `fullname`, `password`, `email`, `state`) VALUES
('tuan', 'Nguyen Xuan Chien Tuan', 'tuan1', 'tuan', 'tuan tuan'),
('ly', 'phan hai ly', 'lyly', 'lyly', 'lyly');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cauthu`
--
ALTER TABLE `cauthu`
  ADD PRIMARY KEY (`mact`);

--
-- Indexes for table `cauthu1`
--
ALTER TABLE `cauthu1`
  ADD PRIMARY KEY (`mact`);

--
-- Indexes for table `dienthoai`
--
ALTER TABLE `dienthoai`
  ADD PRIMARY KEY (`madt`);

--
-- Indexes for table `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`manv`);

--
-- Indexes for table `sinhvien`
--
ALTER TABLE `sinhvien`
  ADD PRIMARY KEY (`masv`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
