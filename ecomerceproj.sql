-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2020 at 09:11 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.1.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecomerceproj`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(50) NOT NULL,
  `admin_email` varchar(50) NOT NULL,
  `admin_password` varchar(50) NOT NULL,
  `fullname` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_email`, `admin_password`, `fullname`) VALUES
(2, 'laila@gmail.com', '123', 'laila'),
(3, 'renad@gmail.com', '123', 'renad'),
(6, 'seham@gmail.com', '159753', 'seham'),
(7, 'dina@gmail.com', '88888888', 'dinayousef');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(50) NOT NULL,
  `cat_name` text NOT NULL,
  `cat_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`, `cat_image`) VALUES
(6, 'Men Clothes', 'unnamed.jpg'),
(8, 'Women Clothes', 'girl imag.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(50) NOT NULL,
  `customer_name` text NOT NULL,
  `customer_email` varchar(50) NOT NULL,
  `customer_password` varchar(50) NOT NULL,
  `mobile` int(50) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `customer_name`, `customer_email`, `customer_password`, `mobile`, `address`) VALUES
(2, 'mohammad', 'mohammad@yahoo.com', '888', 782222222, 'aqaba'),
(3, 'yousef', 'yousef@yahoo.com', '78963214', 78525252, 'zarqa'),
(4, 'mahmoud', 'mahmoud@yahoo.com', '852123', 793333379, 'salt'),
(6, 'tamer', 'tamer@yahoo.com', '000', 781111111, 'zarqa'),
(7, 'adam', 'adam@yahoo.com', '8', 785, 'irbed'),
(8, 'hebah', 'heba@yahoo.com', '14789', 78555555, 'al_salt');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `order_id` int(50) NOT NULL,
  `order_date` varchar(50) NOT NULL,
  `customer_id` int(50) NOT NULL,
  `pro_id` int(50) NOT NULL,
  `status` text NOT NULL,
  `total_price` int(50) NOT NULL,
  `qty` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `pro_id` int(50) NOT NULL,
  `pro_name` text NOT NULL,
  `pro_price` double NOT NULL,
  `pro_image` text NOT NULL,
  `pro_desc` text NOT NULL,
  `cat_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pro_id`, `pro_name`, `pro_price`, `pro_image`, `pro_desc`, `cat_id`) VALUES
(3, 'jeans', 10, 'men jeans.jpg', 'Blue comfortable  jeans ', 6),
(4, 'pants', 15, 'men pant2.jpg', 'casual  dark gray pant ', 6),
(5, 'Mev Pants', 15, 'men pants.jpg', 'casual  dark gray pant  ', 6),
(6, 'Karo Pant', 12, 'men pant3.jpg', 'trendy Karo Pant', 6),
(7, 'suit1', 150, 'suit 3.jpg', 'Blue formal Suit For Men', 6),
(8, 'suit2', 250, 'suit 2.jpg', 'Black, formal And Elegant Suit for men', 6),
(9, 'suit3', 300, 'suit 4.jpg', 'Elegant and formal suit with karamel brown color for men ', 6),
(10, 'suit4', 175, 'suit 1.jpg', 'Light Gray Formal Suit for Men', 6),
(11, 'T-Shirt', 8, 'men t_shirt2.jpg', 'Casual trendy T-shirt with three color for men', 6),
(12, 'T-Shirt2', 12, 'men t_shirt1.jpg', 'Trendy Black T-shirt with Gold beads', 6),
(13, 'T-Shirt3', 10, 'men t_shirt3.jpg', 'Light Gray Trendy and comfortable T-shirt for Men', 6),
(14, 'T-Shirt4', 8, 'men hodes.jpg', 'Black,Trendy Hudes for men', 6),
(15, 'Dress', 300, 'event dress1.jpg', 'BlackAnd Elegant  dress for Event ', 8),
(16, 'dress', 350, 'event  dress4.jpg', 'Elegant And Evening Dress With White Color For Woman', 8),
(17, 'dress', 200, 'event  dress2.jpg', 'Dark Red And Elegant Dress For Women Event', 8),
(18, 'dress', 250, 'event  dress3.jpg', 'Elegant Tide Dress With baby porpul color for women', 8),
(19, 'suit', 60, 'women suit3.jpg', 'Red Nice Suit For women', 8),
(20, 'suit', 80, 'women suit4.jpg', 'Elegant and formal suit with karamel brown color for women', 8),
(21, 'suit', 90, 'wemon suit2.jpg', 'Elegant and formal suit with baby pink color for women', 8),
(22, 'suit1', 1201, 'wsuit.jpg', 'Formal and Elegant White suit for amazing event for women1', 8),
(23, 'dress', 40, 'short dress1.jpg', 'Short ,Nice And Dark Red Dress For Women', 8),
(24, 'dress', 30, 'short dress4.jpg', ' Printed dress with flowers with diffrent color for women', 8),
(25, 'dress', 35, 'short dress3.jpg', 'Short Elegant  dress with off_white color for women', 8),
(26, 'dress', 45, 'short dress2.jpg', 'Short , comfortable dress with baby pink color for women', 8);

-- --------------------------------------------------------

--
-- Table structure for table `seccate`
--

CREATE TABLE `seccate` (
  `seccate_id` int(50) NOT NULL,
  `seccate_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `seccate`
--

INSERT INTO `seccate` (`seccate_id`, `seccate_name`) VALUES
(1, 'coming soon category'),
(2, 'feature category');

-- --------------------------------------------------------

--
-- Table structure for table `secprod`
--

CREATE TABLE `secprod` (
  `secprod_id` int(50) NOT NULL,
  `secprod_name` text NOT NULL,
  `secprod_price` int(50) NOT NULL,
  `secprod_image` varchar(50) NOT NULL,
  `cat_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `secprod`
--

INSERT INTO `secprod` (`secprod_id`, `secprod_name`, `secprod_price`, `secprod_image`, `cat_id`) VALUES
(1, 'women wearing', 70, 'product-4.jpg', 1),
(2, 'men wearing', 35, 'product-8.jpg', 1),
(3, 'women wearing', 80, 'product-5.jpg', 1),
(4, 'women wearing', 60, 'product-6.jpg', 2),
(5, 'women wearing', 90, 'product-3.jpg', 2),
(6, 'women wearing', 25, 'product-1.jpg', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pro_id`);

--
-- Indexes for table `seccate`
--
ALTER TABLE `seccate`
  ADD PRIMARY KEY (`seccate_id`);

--
-- Indexes for table `secprod`
--
ALTER TABLE `secprod`
  ADD PRIMARY KEY (`secprod_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `order_id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `pro_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `seccate`
--
ALTER TABLE `seccate`
  MODIFY `seccate_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `secprod`
--
ALTER TABLE `secprod`
  MODIFY `secprod_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
