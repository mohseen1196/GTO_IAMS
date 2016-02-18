-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 18, 2016 at 05:20 PM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gto_iams`
--

-- --------------------------------------------------------

--
-- Table structure for table `client_master`
--

CREATE TABLE IF NOT EXISTS `client_master` (
  `client_id` int(10) NOT NULL AUTO_INCREMENT,
  `client_name` varchar(50) NOT NULL,
  `client_add` varchar(100) NOT NULL,
  `client_city` varchar(50) NOT NULL,
  `client_dist` varchar(50) NOT NULL,
  `client_cntpr` varchar(50) NOT NULL,
  `client_cntno` varchar(20) NOT NULL,
  `client_vatno` varchar(20) NOT NULL,
  `client_status` varchar(20) NOT NULL,
  PRIMARY KEY (`client_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `client_master`
--

INSERT INTO `client_master` (`client_id`, `client_name`, `client_add`, `client_city`, `client_dist`, `client_cntpr`, `client_cntno`, `client_vatno`, `client_status`) VALUES
(1, 'Amit Kumbhar', 'Mahadev Galli', 'Sulgaon', 'Kolhapur', 'Amya', '9657519633', 'AM1234', ''),
(2, 'Pritam Vilas Gurav', 'SidhiVinayak colony', 'Ajara', 'Kolhapur', 'Pritya', '9158482596', 'PG1234', ''),
(3, 'Naaziya Mulla', 'Wanowrie Bazaar Jagtap Chowk', 'Pune', 'Pune', 'Mammu', '234496554', 'NM1234', '');

-- --------------------------------------------------------

--
-- Table structure for table `production_batch_register`
--

CREATE TABLE IF NOT EXISTS `production_batch_register` (
  `production_id` int(10) NOT NULL AUTO_INCREMENT,
  `batch_no` int(10) NOT NULL,
  `R.O.M` varchar(10) NOT NULL,
  `S.H.W` varchar(10) NOT NULL,
  `filler_powder` varchar(10) NOT NULL,
  `A.W.F` varchar(10) NOT NULL,
  `HDPE_Bags` varchar(10) NOT NULL,
  PRIMARY KEY (`production_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `production_batch_register`
--

INSERT INTO `production_batch_register` (`production_id`, `batch_no`, `R.O.M`, `S.H.W`, `filler_powder`, `A.W.F`, `HDPE_Bags`) VALUES
(1, 12, '5', '5', '5', '5', '5'),
(2, 15, '1', '2', '3', '4', '5'),
(3, 101, '5', '5', '5', '5', '5'),
(4, 103, '10', '10', '10', '10', '10'),
(5, 0, '10', '10', '10', '10', ''),
(6, 333, '10', '10', '10', '10', '10'),
(7, 400, '10', '10', '10', '10', '10');

-- --------------------------------------------------------

--
-- Table structure for table `production_profile_master`
--

CREATE TABLE IF NOT EXISTS `production_profile_master` (
  `productn_profile_id` int(10) NOT NULL AUTO_INCREMENT,
  `profile_ROM` int(10) NOT NULL,
  `profile_SHW` int(10) NOT NULL,
  `profile_filler` int(10) NOT NULL,
  `profile_AWF` int(10) NOT NULL,
  PRIMARY KEY (`productn_profile_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `production_profile_master`
--

INSERT INTO `production_profile_master` (`productn_profile_id`, `profile_ROM`, `profile_SHW`, `profile_filler`, `profile_AWF`) VALUES
(1, 0, 0, 0, 0),
(2, 15, 15, 15, 15),
(3, 13, 13, 13, 13),
(4, 15, 15, 15, 15),
(5, 20, 20, 20, 20);

-- --------------------------------------------------------

--
-- Table structure for table `product_master`
--

CREATE TABLE IF NOT EXISTS `product_master` (
  `prod_id` int(10) NOT NULL AUTO_INCREMENT,
  `prod_name` varchar(200) NOT NULL,
  PRIMARY KEY (`prod_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `product_master`
--

INSERT INTO `product_master` (`prod_id`, `prod_name`) VALUES
(1, 'Filler Powder'),
(2, 'Raw Organic Manure'),
(3, 'Slaughter House Waste'),
(4, 'Animal Waste Filler'),
(5, 'HDPE Bags');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_bags`
--

CREATE TABLE IF NOT EXISTS `purchase_bags` (
  `purchase_bag_id` int(10) NOT NULL AUTO_INCREMENT,
  `purchase_date` date NOT NULL,
  `supp_id` int(10) NOT NULL,
  `prod_id` int(10) NOT NULL,
  `no_bags` int(100) NOT NULL,
  `bill_no` varchar(20) NOT NULL,
  `bill_amt` int(100) NOT NULL,
  `discount` int(10) DEFAULT NULL,
  `net_amt` int(10) NOT NULL,
  PRIMARY KEY (`purchase_bag_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `purchase_bags`
--

INSERT INTO `purchase_bags` (`purchase_bag_id`, `purchase_date`, `supp_id`, `prod_id`, `no_bags`, `bill_no`, `bill_amt`, `discount`, `net_amt`) VALUES
(1, '2016-02-02', 5, 5, 0, 'm1234', 1000, 0, 1000),
(2, '2016-03-02', 5, 5, 100, 'm1234', 1000, 0, 1000),
(3, '2016-10-02', 5, 5, 50, 'A1234', 500, 50, 450),
(4, '1970-01-01', 8, 5, 250, 'C124', 250, 50, 200),
(5, '1970-01-01', 5, 5, 30, 'c1235', 100, 10, 90),
(6, '1970-01-01', 8, 5, 25, 'a12', 250, 15, 235);

-- --------------------------------------------------------

--
-- Table structure for table `purchase_details`
--

CREATE TABLE IF NOT EXISTS `purchase_details` (
  `purchase_id` int(10) NOT NULL AUTO_INCREMENT,
  `purchase_date` date NOT NULL,
  `supp_id` int(10) NOT NULL,
  `prod_id` int(10) NOT NULL,
  `bill_no` varchar(20) NOT NULL,
  `weight` int(10) NOT NULL,
  `rate` int(10) NOT NULL,
  `vat` decimal(5,0) NOT NULL,
  `final_amount` int(11) NOT NULL,
  PRIMARY KEY (`purchase_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=39 ;

--
-- Dumping data for table `purchase_details`
--

INSERT INTO `purchase_details` (`purchase_id`, `purchase_date`, `supp_id`, `prod_id`, `bill_no`, `weight`, `rate`, `vat`, `final_amount`) VALUES
(20, '0000-00-00', 0, 0, 'm2232', 10, 100, 5, 10000),
(21, '0000-00-00', 0, 0, 'm2232', 10, 100, 5, 10000),
(22, '0000-00-00', 0, 0, 'm2232', 10, 100, 5, 10000),
(23, '0000-00-00', 0, 0, 'm2232', 10, 100, 5, 10000),
(24, '0000-00-00', 0, 0, 'm2232', 10, 100, 5, 10000),
(25, '0000-00-00', 0, 0, 'm2232', 10, 100, 5, 10000),
(26, '0000-00-00', 0, 0, 'm2232', 10, 100, 5, 10000),
(27, '0000-00-00', 0, 0, 'm2232', 10, 100, 5, 10000),
(28, '2016-02-06', 4, 3, 'm2232', 10, 100, 5, 10000),
(29, '2016-02-06', 1, 2, 'm2232', 10, 100, 5, 10000),
(30, '2016-02-02', 1, 2, 'm2232', 10, 100, 5, 10000),
(31, '2016-07-02', 2, 2, 'P1234', 10, 150, 5, 1500),
(32, '1970-01-01', 4, 3, 'S1234', 15, 150, 5, 113),
(33, '2016-10-02', 1, 2, 'prq1234', 10, 100, 5, 50),
(34, '2016-10-02', 1, 2, 'prq1234', 10, 100, 5, 50),
(35, '2016-10-02', 1, 2, 'prq1234', 10, 100, 5, 50),
(36, '1970-01-01', 9, 1, 'B12345', 15, 150, 5, 113),
(37, '1970-01-01', 9, 1, 'B12345', 15, 150, 5, 113),
(38, '1970-01-01', 2, 2, 'Z1234', 10, 150, 5, 75);

-- --------------------------------------------------------

--
-- Table structure for table `sales_register`
--

CREATE TABLE IF NOT EXISTS `sales_register` (
  `sales_id` int(10) NOT NULL AUTO_INCREMENT,
  `order_no` int(10) NOT NULL,
  `order_date` date NOT NULL,
  `client_id` int(10) NOT NULL,
  `order_qty` int(10) NOT NULL,
  `bill_no` varchar(10) NOT NULL,
  `bill_date` date NOT NULL,
  `bill_amount` int(10) NOT NULL,
  `discount` int(10) NOT NULL,
  `vat_amount` int(10) NOT NULL,
  `net_amount` int(10) NOT NULL,
  `dc_no` int(10) NOT NULL,
  `dispatch_date` date NOT NULL,
  PRIMARY KEY (`sales_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `sales_register`
--

INSERT INTO `sales_register` (`sales_id`, `order_no`, `order_date`, `client_id`, `order_qty`, `bill_no`, `bill_date`, `bill_amount`, `discount`, `vat_amount`, `net_amount`, `dc_no`, `dispatch_date`) VALUES
(1, 102, '1970-01-01', 3, 300, 'abcd1234', '1970-01-01', 1000, 100, 5, 900, 0, '1970-01-01'),
(2, 102, '0000-00-00', 3, 120, '', '0000-00-00', 0, 0, 0, 0, 0, '1970-01-01'),
(3, 102, '2016-11-02', 3, 115, '', '0000-00-00', 0, 0, 0, 0, 0, '1970-01-01'),
(4, 102, '2016-10-02', 3, 118, '', '0000-00-00', 0, 0, 0, 0, 0, '1970-01-01'),
(5, 102, '0000-00-00', 3, 0, '', '0000-00-00', 0, 0, 0, 0, 0, '1970-01-01');

-- --------------------------------------------------------

--
-- Table structure for table `stock_master`
--

CREATE TABLE IF NOT EXISTS `stock_master` (
  `stock_id` int(10) NOT NULL AUTO_INCREMENT,
  `prod_id` int(10) NOT NULL,
  `stock_available` int(10) NOT NULL,
  `stock_date` date DEFAULT NULL,
  PRIMARY KEY (`stock_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `stock_master`
--

INSERT INTO `stock_master` (`stock_id`, `prod_id`, `stock_available`, `stock_date`) VALUES
(1, 1, 45, '1970-01-01'),
(2, 2, 40, '1970-01-01'),
(3, 3, 30, '1970-01-01'),
(4, 4, 30, '1970-01-01'),
(5, 5, 55, '1970-01-01'),
(6, 101, 30, '1970-01-01');

-- --------------------------------------------------------

--
-- Table structure for table `supplier_master`
--

CREATE TABLE IF NOT EXISTS `supplier_master` (
  `supp_id` int(10) NOT NULL AUTO_INCREMENT,
  `supp_name` varchar(200) NOT NULL,
  `supp_add` varchar(200) NOT NULL,
  `supp_city` varchar(20) NOT NULL,
  `supp_cntpr` varchar(100) NOT NULL,
  `supp_cntno` varchar(10) NOT NULL,
  `supp_eMail` varchar(50) NOT NULL,
  `prod_id` varchar(50) NOT NULL,
  `supp_vat` varchar(20) NOT NULL,
  PRIMARY KEY (`supp_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `supplier_master`
--

INSERT INTO `supplier_master` (`supp_id`, `supp_name`, `supp_add`, `supp_city`, `supp_cntpr`, `supp_cntno`, `supp_eMail`, `prod_id`, `supp_vat`) VALUES
(1, 'WasimAkram', 'Wanowrie', 'Pune', 'Sam', '909900009', 'wasim3ace@gmail.com', '2', 'w121212'),
(2, 'Pritam Vilas Gurav', 'SidhiVinayak Colony', 'Ajara', 'Pritam', '2147483647', 'guravpritamkumar@gmail.com', '2', 'P2624'),
(4, 'Naaziya Mulla', 'Wanowrie bazaar, Jagtap Chowk', 'Pune', 'Naaziya', '455416', 'cbabh@gmail.com', '3', 'n25562'),
(5, 'Amit Kumbhar', 'Mahadev Galli', 'Sulgaon', 'Amit', '9657519633', '', '5', 'AM1234'),
(6, 'Snehal', 'cjanca', 'Shirol', 'Snehal', '2542612', 'bdsbfhb@gmail.com', '3', 'v22354152'),
(7, 'Parag More', 'Somwar peth', 'Ajara', 'Parag', '9542353', 'parag.more@gmail.com', '4', 'P1234'),
(8, 'Chandrakant Kharude', 'Goten galli', 'Ajara', 'Chandu', '988525', 'chandusabkabandhu@gmail.com', '5', 'C23'),
(9, 'MK', 'xyz', 'miraj', 'mk', '234512', 'mhhjb@gmail.com', '1', 'nmb12234');

-- --------------------------------------------------------

--
-- Table structure for table `user_master`
--

CREATE TABLE IF NOT EXISTS `user_master` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_master`
--

INSERT INTO `user_master` (`username`, `password`) VALUES
('admin', 'admin');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
