-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2018 at 03:25 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `teana`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer_info`
--

CREATE TABLE `customer_info` (
  `customer_id` int(11) NOT NULL,
  `customer_name` text NOT NULL,
  `address` text NOT NULL,
  `contact` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_info`
--

INSERT INTO `customer_info` (`customer_id`, `customer_name`, `address`, `contact`) VALUES
(1, 'Landmark', 'Glorietta, Makati City', '09086999338'),
(2, 'Zalora', 'Marikina City', '09876387621'),
(3, 'Metro Gaisano', 'Metro Manila', '09982019140'),
(4, 'Ol Shoppe Department Store', 'Marikina City', '09180138569'),
(5, 'Online Seller', 'Marikina City', '09307194012');

-- --------------------------------------------------------

--
-- Table structure for table `customer_order`
--

CREATE TABLE `customer_order` (
  `customer_id` int(11) NOT NULL,
  `customer_name` text NOT NULL,
  `address` text NOT NULL,
  `contact` text NOT NULL,
  `order_date` text NOT NULL,
  `delivery_date` text NOT NULL,
  `actual_delivery` text NOT NULL,
  `shoe_type` text NOT NULL,
  `upper_color` text NOT NULL,
  `in_sole` text NOT NULL,
  `feet_size` text NOT NULL,
  `quantity` text NOT NULL,
  `status` text NOT NULL,
  `remarks` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_order`
--

INSERT INTO `customer_order` (`customer_id`, `customer_name`, `address`, `contact`, `order_date`, `delivery_date`, `actual_delivery`, `shoe_type`, `upper_color`, `in_sole`, `feet_size`, `quantity`, `status`, `remarks`) VALUES
(1, 'Landmark', 'Glorietta, Makati City', '09086999338', '2018-08-23', '2018-09-02', '2018-09-02', 'Flat Shoes', 'Red', 'Plain', '0', '100', 'To be delivered', ''),
(2, 'Zalora', 'Marikina City', '09876387621', '2018-08-24', '2018-08-31', '2018-08-31', 'Sandals', 'Blue', 'Plain', '0', '120', 'To be delivered', ''),
(3, 'Metro Gaisano', 'Metro Manila', '09982019140', '2018-08-24', '2018-09-07', '2018-09-07', 'with Heels', 'Black', 'with Design', '0', '100', 'To be delivered', ''),
(4, 'Ol Shoppe Department Store', 'Marikina City', '09180138569', '2018-08-26', '2018-09-02', '2018-09-02', 'Sandals', 'Yellow', 'Plain', '0', '110', 'Delayed', ''),
(5, 'Online Seller', 'Marikina City', '09307194012', '2018-08-27', '2018-09-06', '2018-09-06', 'Flat Shoes', 'Gray', 'Plain', '0', '100', 'Delivered', '');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `supplier_id` int(11) NOT NULL,
  `supplier_name` text NOT NULL,
  `address` text NOT NULL,
  `contact` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`supplier_id`, `supplier_name`, `address`, `contact`) VALUES
(1, 'Metro Happy', 'Marikina City', '09186754879'),
(2, 'Global Innovative', 'Marikina City', '09876387621'),
(3, 'Trans Asia', 'Marikina City', '09982019140'),
(4, 'Nation Shoe Supply', 'Marikina City', '09180138569'),
(5, 'Jaocquin shoe Supply', 'Marikina City', '09307194012');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `user_id` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`user_id`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer_info`
--
ALTER TABLE `customer_info`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `customer_order`
--
ALTER TABLE `customer_order`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`supplier_id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer_info`
--
ALTER TABLE `customer_info`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `customer_order`
--
ALTER TABLE `customer_order`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `supplier_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
