-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2022 at 08:20 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `final`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `cart_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `prodcut_name` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_categories`
--

CREATE TABLE `tbl_categories` (
  `cate_id` int(11) NOT NULL,
  `cate_title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_categories`
--

INSERT INTO `tbl_categories` (`cate_id`, `cate_title`) VALUES
(1, 'Book'),
(2, 'Toy & Game');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `cus_id` int(11) NOT NULL,
  `cus_name` varchar(255) NOT NULL,
  `cus_email` varchar(255) NOT NULL,
  `cus_password` varchar(255) NOT NULL,
  `cus_address` varchar(255) NOT NULL,
  `cus_img` varchar(255) NOT NULL,
  `cus_phone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_customer`
--

INSERT INTO `tbl_customer` (`cus_id`, `cus_name`, `cus_email`, `cus_password`, `cus_address`, `cus_img`, `cus_phone`) VALUES
(1, 'dy', 'chanrady@email.com', '200820e3227815ed1756a6b531e7e0d2', 'Phnom Penh', '', '012 859 170\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_page`
--

CREATE TABLE `tbl_page` (
  `pageid` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `lastupdated` datetime NOT NULL,
  `userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_page`
--

INSERT INTO `tbl_page` (`pageid`, `title`, `content`, `lastupdated`, `userid`) VALUES
(1, 'ទំនាក់ទំនង', ' សួស្តី! តើយើងអាចជួយអ្វីបាន​?\r\n-ក្នុងការបញ្ចាទិញ\r\n-ការដឹកជញ្ជូន\r\n-ការត្រឡប់ កញ្ចាប់អីវ៉ាន់\r\n-វិក័យបត្រ', '2022-04-22 20:02:37', 1),
(2, 'អំពីពួកយើង', 'សួស្តី! សូមស្វាគមន៏​មកកាន់ Mugiwarahub គឺជាវេបសាយមុនដំបូងគេបង្អស់ក្នុងប្រទេសកម្ពុជា។ ដោយពួកយើងមាន Manga រូប Anime ស្អាតៗ សម្រាប់តម្រូវចិត្តអតិថិជន', '2022-04-22 20:02:37', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `product_id` int(11) NOT NULL,
  `product_type` int(11) NOT NULL,
  `product_categories` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_desc` varchar(255) NOT NULL,
  `product_img` varchar(255) NOT NULL,
  `product_keyword` varchar(255) NOT NULL,
  `product_pop` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`product_id`, `product_type`, `product_categories`, `product_name`, `product_price`, `product_desc`, `product_img`, `product_keyword`, `product_pop`) VALUES
(1, 1, 1, 'Dragon Ball V1', 20, 'Best Classic Manga', 'c1.jpg', 'dragonball', 1),
(2, 1, 1, 'Dragon Ball V2', 20, 'Best Classic Manga', 'c2.jpg', 'dragonball', 1),
(3, 1, 1, 'Dragon Ball V3', 20, 'Best Classic Manga', 'c3.jpg', 'dragonball', 1),
(4, 1, 1, 'Dragon Ball V4', 20, 'Best Classic Manga', 'c4.jpg', 'dragonball', 1),
(5, 1, 1, 'Dragon Ball V5', 20, 'Best Classic Manga', 'c5.jpg', 'dragonball', 0),
(6, 3, 1, 'Demon Slayer V1', 20, 'Best Classic Manga', 'f1.jpg', 'demon', 1),
(7, 3, 1, 'Demon Slayer V2', 20, 'Best Classic Manga', 'f2.jpg', 'demon', 0),
(8, 3, 1, 'Demon Slayer V3', 20, 'Best Classic Manga', 'f3.jpg', 'demon', 0),
(9, 3, 1, 'Demon Slayer V4', 20, 'Best Classic Manga', 'f4.jpg', 'demon', 1),
(10, 1, 2, 'Dragon Ball Toy', 20, 'goku', 'tc1.jpg', 'dragonball', 0),
(11, 1, 2, 'Dragon Ball Toy', 20, 'gku', 'tc2.jpg', 'dragonball', 0),
(12, 1, 2, 'Dragon Ball TOy', 20, 'Best Classic Manga', 'tc3.jpg', 'dragonball', 1),
(13, 1, 2, 'Dragon Ball TOy', 20, 'Best Classic Manga', 'tc4.jpg', 'dragonball', 1),
(16, 2, 1, 'Assassination Classroom V1', 20, 'Best Classic Manga', 'n1.jpg', 'assassination classroom', 0),
(17, 2, 1, 'Assassination Classroom V2', 20, 'Best Classic Manga', 'n2.jpg', 'assassination classroom', 0),
(18, 2, 1, 'Assassination Classroom V3', 20, 'Best Classic Manga', 'n3.jpg', 'assassination classroom', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_slideshow`
--

CREATE TABLE `tbl_slideshow` (
  `ssid` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `subtitle` varchar(500) NOT NULL,
  `description` varchar(500) NOT NULL,
  `img` varchar(100) NOT NULL,
  `link` varchar(100) NOT NULL,
  `shown` char(1) NOT NULL,
  `sorder` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_slideshow`
--

INSERT INTO `tbl_slideshow` (`ssid`, `title`, `subtitle`, `description`, `img`, `link`, `shown`, `sorder`) VALUES
(8, 'សួស្តីឆ្នាំថ្មី​ ប្រពៃណីជាតិ', '១០% Discount', 'ថ្ងៃ ១៤​-១៥-១៦ មេសា ', '1.png', '#', '1', 1),
(9, 'ទិវាពលកម្មអន្តរជាតិ', '១០% Discount', ' ១ ឧសភា​ ២០២២\r\n', '1.png', '#', '1', 2),
(12, 'សូមស្វាគមន៏', '', '', '1.png', '#', '1', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_type`
--

CREATE TABLE `tbl_type` (
  `type_id` int(11) NOT NULL,
  `type_title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_type`
--

INSERT INTO `tbl_type` (`type_id`, `type_title`) VALUES
(1, 'Classic'),
(2, 'New'),
(3, 'Modern');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `userid` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `userrole` int(11) NOT NULL,
  `lastlogin` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`userid`, `username`, `password`, `fullname`, `userrole`, `lastlogin`) VALUES
(1, 'rady', '200820e3227815ed1756a6b531e7e0d2', 'Chanrady', 1, '2022-04-21 19:38:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `tbl_categories`
--
ALTER TABLE `tbl_categories`
  ADD PRIMARY KEY (`cate_id`);

--
-- Indexes for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`cus_id`);

--
-- Indexes for table `tbl_page`
--
ALTER TABLE `tbl_page`
  ADD PRIMARY KEY (`pageid`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `tbl_slideshow`
--
ALTER TABLE `tbl_slideshow`
  ADD PRIMARY KEY (`ssid`);

--
-- Indexes for table `tbl_type`
--
ALTER TABLE `tbl_type`
  ADD PRIMARY KEY (`type_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_categories`
--
ALTER TABLE `tbl_categories`
  MODIFY `cate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `cus_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_page`
--
ALTER TABLE `tbl_page`
  MODIFY `pageid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tbl_slideshow`
--
ALTER TABLE `tbl_slideshow`
  MODIFY `ssid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;

--
-- AUTO_INCREMENT for table `tbl_type`
--
ALTER TABLE `tbl_type`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
