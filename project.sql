-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 18, 2019 at 12:08 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `get_address` ()  BEGIN

select * from Address  ;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `get_used` (IN `row_id` INT(12))  begin 

select * from Address where Address_id = row_id;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `hashir` (OUT `total_address` INT)  BEGIN

select COUNT(*) into  @total_address from Address;

END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `Address`
--

CREATE TABLE `Address` (
  `Address_id` int(11) NOT NULL,
  `House_No` varchar(255) DEFAULT NULL,
  `Street` varchar(255) DEFAULT NULL,
  `City` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Address`
--

INSERT INTO `Address` (`Address_id`, `House_No`, `Street`, `City`) VALUES
(22, '12', 'Sadar', 'Karachi'),
(23, '22', 'Eithad Townn', 'Quetta'),
(24, '543', 'LDA City', 'sheikhupura'),
(25, '41', 'b', 'multan'),
(29, '121', 'adsf', 'dasf'),
(30, '111', 'lda', 'lahore'),
(31, '32', 'fdsg', 'sdf'),
(33, '33', 'boss', 'skp');

-- --------------------------------------------------------

--
-- Stand-in structure for view `addressn`
-- (See below for the actual view)
--
CREATE TABLE `addressn` (
`Address_id` int(11)
,`House_No` varchar(255)
,`Street` varchar(255)
,`City` varchar(255)
);

-- --------------------------------------------------------

--
-- Table structure for table `Bus`
--

CREATE TABLE `Bus` (
  `Bus_id` int(11) NOT NULL,
  `Model_No` varchar(255) DEFAULT NULL,
  `Emp_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Bus`
--

INSERT INTO `Bus` (`Bus_id`, `Model_No`, `Emp_id`) VALUES
(1, 'LEA 9993', 3),
(2, 'LEA 5234', 3),
(3, 'LEA 5421', 4),
(4, 'LEA 5234', 5),
(5, 'LEA 5332', 3),
(6, 'LEA 5214', 4);

-- --------------------------------------------------------

--
-- Table structure for table `Bus_Schedule`
--

CREATE TABLE `Bus_Schedule` (
  `sch_id` int(11) NOT NULL,
  `Bus_id` int(11) DEFAULT NULL,
  `Route_id` int(11) DEFAULT NULL,
  `Start_time` time DEFAULT NULL,
  `End_time` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Bus_Schedule`
--

INSERT INTO `Bus_Schedule` (`sch_id`, `Bus_id`, `Route_id`, `Start_time`, `End_time`) VALUES
(3, 1, 3, '01:00:00', '01:00:00'),
(4, 5, 2, '01:00:00', '01:00:00'),
(5, 5, 3, '01:00:00', '01:00:00'),
(6, 4, 6, '15:23:00', '02:03:00');

-- --------------------------------------------------------

--
-- Table structure for table `Bus_Stop`
--

CREATE TABLE `Bus_Stop` (
  `Stop_id` int(11) NOT NULL,
  `Stop_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Bus_Stop`
--

INSERT INTO `Bus_Stop` (`Stop_id`, `Stop_name`) VALUES
(1, 'niazi chowk'),
(2, 'bzu'),
(3, 'dasf'),
(4, 'johar town'),
(5, 'muslim town'),
(8, 'metro station'),
(9, 'bzu');

-- --------------------------------------------------------

--
-- Table structure for table `Card`
--

CREATE TABLE `Card` (
  `Card_no` int(11) NOT NULL,
  `Balance` int(7) DEFAULT NULL,
  `Cost` int(7) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Card`
--

INSERT INTO `Card` (`Card_no`, `Balance`, `Cost`) VALUES
(3, 2112, 321),
(4, 221, 2121),
(5, 66, 433),
(6, 533, 500);

-- --------------------------------------------------------

--
-- Table structure for table `Customer`
--

CREATE TABLE `Customer` (
  `Customer_id` int(11) NOT NULL,
  `Customer_name` varchar(255) DEFAULT NULL,
  `Card_no` int(9) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Customer`
--

INSERT INTO `Customer` (`Customer_id`, `Customer_name`, `Card_no`) VALUES
(1, 'burhan', 3),
(2, 'burhan132', 3),
(3, 'burhan13', 5),
(4, 'hassan saeed', 5);

-- --------------------------------------------------------

--
-- Table structure for table `Designation`
--

CREATE TABLE `Designation` (
  `Designation_id` int(11) NOT NULL,
  `Designation_Name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Designation`
--

INSERT INTO `Designation` (`Designation_id`, `Designation_Name`) VALUES
(1, 'Drivers'),
(2, 'ticket-collector'),
(3, 'conductor');

-- --------------------------------------------------------

--
-- Table structure for table `Employee`
--

CREATE TABLE `Employee` (
  `Emp_id` int(11) NOT NULL,
  `First_Name` varchar(255) DEFAULT NULL,
  `Last_Name` varchar(255) DEFAULT NULL,
  `CNIC` varchar(255) DEFAULT NULL,
  `Designation_id` int(9) DEFAULT NULL,
  `Phone` varchar(255) DEFAULT NULL,
  `Address_id` int(9) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Employee`
--

INSERT INTO `Employee` (`Emp_id`, `First_Name`, `Last_Name`, `CNIC`, `Designation_id`, `Phone`, `Address_id`) VALUES
(3, 'tariq', 'tariqs', '35404-0775205-3', 2, '0222-4775915', 25),
(4, 'adsfdfas', 'asdfafd', '4321332144321', 2, '312431423421', 23),
(5, 'ad22sfdfas', '32asdfafd', '4321332144321', 1, '312431423421', 22),
(6, 'hassan', 'saeed', '32412343423241', 1, '233232320', 25),
(7, 'erwq', 'ewqr', '42423', 2, '432423', 29),
(9, 'dfads', 'dfsadsfa', '332322', 2, '3324324', 24),
(10, 'hashir', 'dasfdsfa', '432234342234', 1, '234243342243', 30);

-- --------------------------------------------------------

--
-- Table structure for table `Route`
--

CREATE TABLE `Route` (
  `Route_id` int(11) NOT NULL,
  `route_destination` varchar(255) DEFAULT NULL,
  `route_start` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Route`
--

INSERT INTO `Route` (`Route_id`, `route_destination`, `route_start`) VALUES
(2, 'johar town', 'iqbal town'),
(3, 'niazi chowk', 'johar town'),
(4, 'qqwefw', 'qweewqw'),
(5, 'qqweeqfw', 'qweeeewqw'),
(6, 'qqweeqfweq', 'qweeqeeewqw'),
(7, 'cantt', 'chungi no 9');

-- --------------------------------------------------------

--
-- Structure for view `addressn`
--
DROP TABLE IF EXISTS `addressn`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `addressn`  AS  select `address`.`Address_id` AS `Address_id`,`address`.`House_No` AS `House_No`,`address`.`Street` AS `Street`,`address`.`City` AS `City` from `address` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Address`
--
ALTER TABLE `Address`
  ADD PRIMARY KEY (`Address_id`);

--
-- Indexes for table `Bus`
--
ALTER TABLE `Bus`
  ADD PRIMARY KEY (`Bus_id`),
  ADD KEY `Emp_id` (`Emp_id`);

--
-- Indexes for table `Bus_Schedule`
--
ALTER TABLE `Bus_Schedule`
  ADD PRIMARY KEY (`sch_id`),
  ADD KEY `Bus_id` (`Bus_id`),
  ADD KEY `Route_id` (`Route_id`);

--
-- Indexes for table `Bus_Stop`
--
ALTER TABLE `Bus_Stop`
  ADD PRIMARY KEY (`Stop_id`);

--
-- Indexes for table `Card`
--
ALTER TABLE `Card`
  ADD PRIMARY KEY (`Card_no`);

--
-- Indexes for table `Customer`
--
ALTER TABLE `Customer`
  ADD PRIMARY KEY (`Customer_id`),
  ADD KEY `Card_no` (`Card_no`);

--
-- Indexes for table `Designation`
--
ALTER TABLE `Designation`
  ADD PRIMARY KEY (`Designation_id`);

--
-- Indexes for table `Employee`
--
ALTER TABLE `Employee`
  ADD PRIMARY KEY (`Emp_id`),
  ADD KEY `Designation_id` (`Designation_id`),
  ADD KEY `Address_id` (`Address_id`);

--
-- Indexes for table `Route`
--
ALTER TABLE `Route`
  ADD PRIMARY KEY (`Route_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Address`
--
ALTER TABLE `Address`
  MODIFY `Address_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `Bus`
--
ALTER TABLE `Bus`
  MODIFY `Bus_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `Bus_Schedule`
--
ALTER TABLE `Bus_Schedule`
  MODIFY `sch_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `Bus_Stop`
--
ALTER TABLE `Bus_Stop`
  MODIFY `Stop_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `Card`
--
ALTER TABLE `Card`
  MODIFY `Card_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `Customer`
--
ALTER TABLE `Customer`
  MODIFY `Customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `Designation`
--
ALTER TABLE `Designation`
  MODIFY `Designation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `Employee`
--
ALTER TABLE `Employee`
  MODIFY `Emp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `Route`
--
ALTER TABLE `Route`
  MODIFY `Route_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Bus`
--
ALTER TABLE `Bus`
  ADD CONSTRAINT `bus_ibfk_1` FOREIGN KEY (`Emp_id`) REFERENCES `Employee` (`Emp_id`);

--
-- Constraints for table `Bus_Schedule`
--
ALTER TABLE `Bus_Schedule`
  ADD CONSTRAINT `bus_schedule_ibfk_1` FOREIGN KEY (`Bus_id`) REFERENCES `Bus` (`Bus_id`),
  ADD CONSTRAINT `bus_schedule_ibfk_2` FOREIGN KEY (`Route_id`) REFERENCES `Route` (`Route_id`);

--
-- Constraints for table `Customer`
--
ALTER TABLE `Customer`
  ADD CONSTRAINT `customer_ibfk_1` FOREIGN KEY (`Card_no`) REFERENCES `Card` (`Card_no`);

--
-- Constraints for table `Employee`
--
ALTER TABLE `Employee`
  ADD CONSTRAINT `employee_ibfk_1` FOREIGN KEY (`Designation_id`) REFERENCES `Designation` (`Designation_id`),
  ADD CONSTRAINT `employee_ibfk_2` FOREIGN KEY (`Address_id`) REFERENCES `Address` (`Address_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
