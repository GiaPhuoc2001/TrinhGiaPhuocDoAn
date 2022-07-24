-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2022 at 12:37 PM
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
-- Database: `database_banhang`
--

-- --------------------------------------------------------

--
-- Table structure for table `db_sanpham_ipad`
--

CREATE TABLE `db_sanpham_ipad` (
  `id` int(11) NOT NULL,
  `iPad_URL` varchar(555) NOT NULL,
  `dungluong` varchar(155) NOT NULL,
  `tensp` varchar(255) NOT NULL,
  `gia` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `db_sanpham_ipad`
--

INSERT INTO `db_sanpham_ipad` (`id`, `iPad_URL`, `dungluong`, `tensp`, `gia`) VALUES
(13, 'ipad-mini4.jpg', '32GB', 'iPad Gen 5', 10000000),
(14, 'ipad pro 2021.png', '128GB', 'iPad Pro 2021', 20000000),
(15, 'ipad pro m1.jpg', '128GB', 'iPad Pro M1', 25000000),
(16, 'iPad-Air-4.png', '64GB', 'iPad Ari 4', 9000000),
(17, 'iPad-Air-5.png', '32GB', 'iPad Air 5', 9000000),
(18, 'ipad-gen-9.jpg', '64GB', 'iPad Gen 9', 13000000),
(19, 'ipad-mini4.jpg', '32GB', 'iPad 4 Mini', 8000000),
(20, 'ipad pro 2020 128g.jpg', '128GB', 'iPad Poro 2020', 25000000);

-- --------------------------------------------------------

--
-- Table structure for table `db_sanpham_iphone`
--

CREATE TABLE `db_sanpham_iphone` (
  `id` int(11) NOT NULL,
  `imgURL` varchar(255) NOT NULL,
  `dungluong` varchar(255) NOT NULL,
  `tensp` varchar(255) NOT NULL,
  `gia` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `db_sanpham_iphone`
--

INSERT INTO `db_sanpham_iphone` (`id`, `imgURL`, `dungluong`, `tensp`, `gia`) VALUES
(55, '13promax.jpg', '515GB', 'iPhone 13 ProMax', 30),
(56, '11promax.jpg', '256GB', 'iPhone 11 ProMax', 1900000),
(57, '12promax.jpg', '256GB', 'iPhone 12 ProMax', 25000000),
(58, 'ip11.jpg', '64GB', 'iPhone 11', 14000000),
(59, 'ip7plus.jpg', '64GB', 'iPhone 7 Plus', 5000000),
(60, 'ip SE.jpg', '32GB', 'iPhone SE', 5000000),
(61, 'ip13mini.jpg', '64GB', 'iPhone 13 Mini', 15500000),
(62, 'ipXsmax.jpg', '64GB', 'iPhone 12 Pro', 14000000),
(63, 'ip13.jpg', '64GB', 'iPhone 13', 20000000),
(64, 'ipXsmax.jpg', '64GB', 'iPhone XsMax', 9000000),
(65, 'ip8plus.jpg', '256GB', 'iPhone 8 plus', 19000000),
(66, 'ip13mini.jpg', '64GB', 'iPhone 8', 6000000);

-- --------------------------------------------------------

--
-- Table structure for table `db_sanpham_mac`
--

CREATE TABLE `db_sanpham_mac` (
  `id` int(11) NOT NULL,
  `mac_URL` varchar(555) NOT NULL,
  `dungluong` varchar(155) NOT NULL,
  `tensp` varchar(255) NOT NULL,
  `gia` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `db_sanpham_mac`
--

INSERT INTO `db_sanpham_mac` (`id`, `mac_URL`, `dungluong`, `tensp`, `gia`) VALUES
(11, 'MAC-air-2020.jpg', '128GB', 'MACBOOK Air 2020', 35000000),
(12, 'MacBookPro-2021.jpg', '128GB', 'MACBOOK Pro 2021', 20000000),
(13, 'MAC-air-2022.jpg', '128GB', 'MACBOOK Air 2022', 30000000),
(14, 'MAC-air.jpg', '128GB', 'MACBOOK Air 2019', 25000000),
(15, 'MAC-pro-128GB-2019.jpg', '512GB', 'MACBOOK Pro 2019', 25000000),
(16, 'MAC-pro-2017.jpg', '128GB', 'MACBOOK', 21000000),
(17, 'MAC-pro-M1-2021.jpg', '512GB', 'MACBOOK Pro M2 2022', 90000000),
(18, 'MAC-xach-tay-512G-2019.jpg', '256GB', 'MACBOOK Air 2016', 38900000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `db_sanpham_ipad`
--
ALTER TABLE `db_sanpham_ipad`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `db_sanpham_iphone`
--
ALTER TABLE `db_sanpham_iphone`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `db_sanpham_mac`
--
ALTER TABLE `db_sanpham_mac`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `db_sanpham_ipad`
--
ALTER TABLE `db_sanpham_ipad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `db_sanpham_iphone`
--
ALTER TABLE `db_sanpham_iphone`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `db_sanpham_mac`
--
ALTER TABLE `db_sanpham_mac`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
