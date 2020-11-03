-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2019 at 08:29 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `courier`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `total_salary_paid` (OUT `total_salary_paid` INT)  NO SQL
select sum(salary_paid) into total_salary_paid from deliveryperson_info$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `customer_info`
--

CREATE TABLE `customer_info` (
  `c_id` int(11) NOT NULL,
  `c_name` varchar(20) NOT NULL,
  `phone_no` int(11) NOT NULL,
  `address` varchar(20) NOT NULL,
  `p_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_info`
--

INSERT INTO `customer_info` (`c_id`, `c_name`, `phone_no`, `address`, `p_id`) VALUES
(1111, 'Pranav', 1234, 'mysore', 22222),
(2222, 'Suhas', 4567, 'tumkur', 11111),
(3333, 'Vinay', 5678, 'mangalore', 44444),
(4444, 'Charan', 6789, 'udupi', 11111);

-- --------------------------------------------------------

--
-- Table structure for table `deliveryperson_info`
--

CREATE TABLE `deliveryperson_info` (
  `person_id` int(11) NOT NULL,
  `salary` int(11) NOT NULL,
  `salary_paid` int(11) NOT NULL,
  `phone` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `deliveryperson_info`
--

INSERT INTO `deliveryperson_info` (`person_id`, `salary`, `salary_paid`, `phone`, `p_id`, `c_id`) VALUES
(1, 27000, 9000, 2147483647, 11111, 1111),
(2, 6000, 5400, 7896541, 22222, 3333),
(3, 12000, 10800, 485452, 44444, 4444),
(4, 10000, 9000, 2147483647, 33333, 3333);

--
-- Triggers `deliveryperson_info`
--
DELIMITER $$
CREATE TRIGGER `salary_paid` BEFORE INSERT ON `deliveryperson_info` FOR EACH ROW set new.salary_paid=(new.salary-(new.salary*0.1))
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`admin_id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `office_info`
--

CREATE TABLE `office_info` (
  `office_id` int(11) NOT NULL,
  `office_name` varchar(15) NOT NULL,
  `office_address` varchar(15) NOT NULL,
  `office_phoneno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `office_info`
--

INSERT INTO `office_info` (`office_id`, `office_name`, `office_address`, `office_phoneno`) VALUES
(11, 'professional', 'hyderabad', 5678),
(22, 'dhl', 'tumkur', 89652),
(33, 'vrl', 'mangalore', 76523),
(44, 'dhdl', 'bangalore', 7865413),
(55, 'vigneshwara ', 'mysore', 18512),
(66, 'agarwal', 'mumbai', 258652);

-- --------------------------------------------------------

--
-- Table structure for table `parcel_info`
--

CREATE TABLE `parcel_info` (
  `p_id` int(11) NOT NULL,
  `p_weight` int(11) NOT NULL,
  `delivery_date` date NOT NULL,
  `from_address` varchar(15) NOT NULL,
  `to_address` varchar(15) NOT NULL,
  `c_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parcel_info`
--

INSERT INTO `parcel_info` (`p_id`, `p_weight`, `delivery_date`, `from_address`, `to_address`, `c_id`) VALUES
(12, 55, '0000-00-00', 'blore', 'tmk', 1000),
(11111, 2, '2017-12-23', 'hyderabad', 'tumkur', 1111),
(22222, 5, '2017-12-02', 'mumbai', 'mysore', 3333),
(33333, 1, '2017-11-29', 'bangalore', 'tumkur', 2222),
(44444, 3, '2017-12-08', 'tumkur', 'mangalore', 4444);

-- --------------------------------------------------------

--
-- Table structure for table `transport_info`
--

CREATE TABLE `transport_info` (
  `vehicle_id` int(11) NOT NULL,
  `from_location` varchar(10) NOT NULL,
  `to_location` varchar(10) NOT NULL,
  `no_of_parcel` int(11) NOT NULL,
  `from_office_id` int(11) NOT NULL,
  `to_office_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transport_info`
--

INSERT INTO `transport_info` (`vehicle_id`, `from_location`, `to_location`, `no_of_parcel`, `from_office_id`, `to_office_id`) VALUES
(111, 'hyderabad', 'tumkur', 200, 11, 22),
(222, 'mumbai', 'mysore', 1000, 66, 55),
(333, 'tumkur', 'mangalore', 1575, 22, 33),
(444, 'bangalore', 'tumkur', 300, 44, 22);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer_info`
--
ALTER TABLE `customer_info`
  ADD PRIMARY KEY (`c_id`),
  ADD KEY `p_id` (`p_id`);

--
-- Indexes for table `deliveryperson_info`
--
ALTER TABLE `deliveryperson_info`
  ADD PRIMARY KEY (`person_id`),
  ADD KEY `p_id` (`p_id`),
  ADD KEY `c_id` (`c_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `office_info`
--
ALTER TABLE `office_info`
  ADD PRIMARY KEY (`office_id`);

--
-- Indexes for table `parcel_info`
--
ALTER TABLE `parcel_info`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `transport_info`
--
ALTER TABLE `transport_info`
  ADD PRIMARY KEY (`vehicle_id`),
  ADD KEY `from_office_id` (`from_office_id`),
  ADD KEY `to_office_id` (`to_office_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `customer_info`
--
ALTER TABLE `customer_info`
  ADD CONSTRAINT `customer_info_fk_pid` FOREIGN KEY (`p_id`) REFERENCES `parcel_info` (`p_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `deliveryperson_info`
--
ALTER TABLE `deliveryperson_info`
  ADD CONSTRAINT `deliveryperson_info_fk_cid` FOREIGN KEY (`c_id`) REFERENCES `customer_info` (`c_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `deliveryperson_info_fk_pid` FOREIGN KEY (`p_id`) REFERENCES `parcel_info` (`p_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `transport_info`
--
ALTER TABLE `transport_info`
  ADD CONSTRAINT `transport_info_ibfk_1` FOREIGN KEY (`to_office_id`) REFERENCES `office_info` (`office_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transport_info_ibfk_2` FOREIGN KEY (`from_office_id`) REFERENCES `office_info` (`office_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
