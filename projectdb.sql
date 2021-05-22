-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2021 at 11:29 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectdb`
DROP DATABASE IF EXISTS `projectdb`;

CREATE DATABASE `projectdb`;

USE `projectdb`;

--

-- --------------------------------------------------------

--
-- Table structure for table `cleaningteam`
--

CREATE TABLE `cleaningteam` (
  `team_id` int(10) NOT NULL,
  `team_name` varchar(10) NOT NULL,
  `team_unitNo` varchar(10) NOT NULL,
  `team_contact` int(10) NOT NULL,
  `team_location` varchar(30) NOT NULL,
  `team_hrRate` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cleaningteam`
--

INSERT INTO `cleaningteam` (`team_id`, `team_name`, `team_unitNo`, `team_contact`, `team_location`, `team_hrRate`) VALUES
(111, 'Velly', 'g99', 718050141, 'P.O Box 12', 0),
(201, 'Sipho', 'g99', 719450241, 'P.O Box 123', 0),
(221, 'Sam', 'g99', 714552741, 'P.O Box 1255', 0),
(342, 'Samuel', 'g99', 712578421, 'P.O Box 4543', 0),
(421, 'Samson', 'g99', 729845431, 'P.O Box 55', 0),
(422, 'Solly', 'g99', 744885785, 'P.O Box 56', 6),
(423, 'Allie', 'g99', 745588858, 'P.O Box 887', 5),
(424, 'Marble', 'e44', 825544585, 'P.O Box  47 acorn', 6),
(425, 'Mata', 'g99', 715588547, '32 witty street', 4),
(426, 'Mathla', 'e44', 814455748, '4 street bush', 3),
(431, 'Marble', 'e45', 855475254, 'P.O Box 12 bully', 2),
(432, 'Mathla', 'e46', 755554445, '33 midbank street', 12),
(433, 'Mata', 'e47', 711554862, '220 marble  street', 13),
(434, 'Allie', 'e42', 745588858, '23 sgagula street', 5),
(435, 'Bafo', 'e23', 744885785, 'Mkuihlu 23 street', 6),
(436, 'Lebo', 'e44', 785544242, 'P.O Box 56', 7),
(437, 'Kelotso', 'e23', 855475254, 'P.O Box 887', 9),
(438, 'Marvin', 'e45', 711458552, 'P.O Box  47 acorn', 7),
(439, 'Carvin', 'e43', 711144571, '32 witty street', 15),
(440, 'Linda', 'e49', 711144585, '4 street bush', 4);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cust_id` int(11) NOT NULL,
  `cust_name` varchar(20) NOT NULL,
  `cust_surname` varchar(20) NOT NULL,
  `cust_email` varchar(100) NOT NULL,
  `cust_username` varchar(20) NOT NULL,
  `cust_password` varchar(50) NOT NULL,
  `cust_contact_nr` varchar(15) NOT NULL,
  `cust_report` varchar(20) NOT NULL,
  `Role` varchar(255) CHARACTER SET armscii8 COLLATE armscii8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cust_id`, `cust_name`, `cust_surname`, `cust_email`, `cust_username`, `cust_password`, `cust_contact_nr`, `cust_report`, `Role`) VALUES
(1, 'admin', 'admin', 'admin.admin@gmail.com', 'admin', 'password1', '0710482103', 'Fhthttht', 'admin'),
(2, 'Charlote', 'Mnisi', 'leylahmuleni@gmail.com', 'charlote', '12345', '0797441665', 'assigning', 'admin'),
(12545, 'Vince', 'Nxumalo', 'vince.nxml700@gmail.com', 'vince', 'VN', '0710482101', 'None', 'customer'),
(12547, 'John', 'Mahlako', 'seakgamothoevans@gmail.com', 'john', 'jonny', '0710482104', 'None', 'customer'),
(12550, 'Joy', 'Nkhabela', 'joy@gmail.com', 'joy', 'bn', '0712244548', 'Dfdf', 'customer'),
(12551, 'Marry', 'Matloga', 'marrey222@gmail.com', 'marry', 'marry', '0715548565', 'Sdfg', 'customer'),
(12553, 'Soffie', 'Khumalow', 'hku@gmail.com', 'kh', 'kh', '0710482101', 'Fhthttht', 'customer'),
(12564, 'charlote', 'Mnisi', 'charmnisi@gmail.com', 'char', '12345', '0737441665', 'None', 'customer')
(12565, 'Jordge', 'Mahlako', 'jor@gmail.com', 'joo', '22233', '0788874519', 'None', 'customer');

-- --------------------------------------------------------

--
-- Table structure for table `customerservice`
--

CREATE TABLE `customerservice` (
  `custService_id` int(100) NOT NULL,
  `custService_date` date NOT NULL,
  `custService_size` int(100) NOT NULL,
  `custService_amount` double(10,2) NOT NULL,
  `cust_id` int(11) NOT NULL,
  `service_id` int(10) NOT NULL,
  `invoice_no` int(10) NOT NULL,
  `team_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customerservice`
--

INSERT INTO `customerservice` (`custService_id`, `custService_date`, `custService_size`, `custService_amount`, `cust_id`, `service_id`, `invoice_no`, `team_id`, `locationID`) VALUES
(58, '2021-04-14', 180, 12598.20, 12545, 2, 23333, 201, 74),
(59, '2021-04-14', 180, 12598.20, 12545, 2, 23334, 438, 75),
(60, '2021-04-28', 100, 6999.00, 12545, 2, 23335, 438, 76),
(61, '2021-04-29', 500, 34995.00, 12545, 2, 23336, 0, 77),
(62, '2021-04-29', 500, 34995.00, 12545, 2, 23337, 0, 78);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `emp_id` int(10) NOT NULL,
  `emp_fname` varchar(20) NOT NULL,
  `emp_lname` varchar(20) NOT NULL,
  `emp_address` varchar(100) NOT NULL,
  `emp_email` varchar(30) NOT NULL,
  `team_id` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`emp_id`, `emp_fname`, `emp_lname`, `emp_address`, `emp_email`, `team_id`) VALUES
(1, 'Faith', 'Khulo', 'p.o box 323', 'fath@gmail.com', 440),
(2, 'Solly', 'Makamu', 'p.o box 3', 'solly@gmail.com', 424),
(3, 'Ally', 'Mallies', 'p.o box 54', 'ally@gmail.com', 438),
(4, 'Witness', 'Mdaka', 'p.o box 88', 'wit@gmail.com', 425),
(5, 'Simon', 'Mkarhi', 'p.o box 556', 's2gmail.com', 432),
(6, 'Vally', 'Kuloo', 'p.o box 332', 'k@gmail.com', 421),
(7, 'Andris', 'Lindas', 'p.o box 0787', 'an@gmail.com', 342),
(8, 'Philip', 'Khosa', 'p.o box 67', 'ph@gmail.com', 201),
(9, 'Mpho', 'Mel', 'p.o box 66', 'mpho@gmail.com', 422),
(10, 'Gift', 'Ndlovu', 'p.o box 65', 'gift@gmail.com', 111),
(45, 'Sfiso', 'Qaba', 'p.o box 98', 'sfiso@gmail.com', 439),
(49, 'Zandi', 'Ndwandwe', 'p.o box 67', 'zandi@gmail.com', 437),
(50, 'Natty', 'Zulu', 'p.o box 65', 'natty@gnail.com', 436),
(51, 'Vusi', 'Maseko', 'p.o box 445', 'vusi@gmail.com', 435),
(52, 'Minnie', 'Nxumalo', 'p.o box 334', 'minnie@gmail.com', 434);

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `invoice_no` int(11) NOT NULL,
  `inv_date` date NOT NULL,
  `cust_id` int(11) NOT NULL,
  `payment_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`invoice_no`, `inv_date`, `cust_id`, `payment_id`) VALUES
(23303, '2021-04-09', 12545, NULL),
(23304, '2021-04-09', 12545, NULL),
(23305, '2021-04-09', 12545, NULL),
(23306, '2021-04-09', 12545, NULL),
(23307, '2021-04-09', 12545, NULL),
(23308, '2021-04-09', 12545, NULL),
(23309, '2021-04-09', 12545, NULL),
(23310, '2021-04-09', 12545, NULL),
(23311, '2021-04-09', 12545, NULL),
(23312, '2021-04-09', 12545, NULL),
(23313, '2021-04-09', 12545, NULL),
(23314, '2021-04-09', 12545, NULL),
(23315, '2021-04-09', 12545, NULL),
(23316, '2021-04-09', 12545, NULL),
(23317, '2021-04-09', 12545, NULL),
(23318, '2021-04-09', 12545, NULL),
(23319, '2021-04-09', 12545, NULL),
(23320, '2021-04-09', 12545, NULL),
(23321, '2021-04-09', 12545, NULL),
(23322, '2021-04-09', 12545, NULL),
(23323, '2021-04-09', 12545, NULL),
(23324, '2021-04-09', 12545, NULL),
(23325, '2021-04-09', 12545, NULL),
(23326, '2021-04-09', 12545, NULL),
(23327, '2021-04-09', 12545, NULL),
(23328, '2021-04-09', 12545, NULL),
(23329, '2021-04-09', 12545, NULL),
(23330, '2021-04-09', 12545, NULL),
(23331, '2021-04-09', 12545, NULL),
(23332, '2021-04-09', 12545, NULL),
(23333, '2021-04-09', 12545, 24),
(23334, '2021-04-09', 12545, 25),
(23335, '2021-04-09', 12545, NULL),
(23336, '2021-04-09', 12545, 26),
(23337, '2021-04-09', 12545, NULL),
(23338, '2021-04-09', 12545, NULL),
(23339, '2021-04-09', 12545, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `locationID` int(100) NOT NULL,
  `cust_id` int(11) NOT NULL,
  `loc_streetname` varchar(100) NOT NULL,
  `loc_address` varchar(100) NOT NULL,
  `loc_city` varchar(100) NOT NULL,
  `loc_suburb` varchar(100) NOT NULL,
  `loc_province` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`locationID`, `cust_id`, `loc_streetname`, `loc_address`, `loc_city`, `loc_suburb`, `loc_province`) VALUES
(74, 12545, '164 Poinsettia Crescent ebony park', '147', 'Midrand', 'Midrand', 8),
(75, 12545, '164 Poinsettia Crescent ebony park', '147', 'Midrand', 'Midrand', 8),
(76, 12545, '164 Poinsettia Crescent ebony park', '47', 'Midrand', 'Midrand', 5),
(77, 12545, '164 Poinsettia Crescent ebony park', '47', 'Midrand', 'Midrand', 5),
(78, 12545, '164 Poinsettia Crescent ebony park', '47', 'Midrand', 'Midrand', 5),
(79, 12545, '164 Poinsettia Crescent ebony park', '47', 'Midrand', 'Midrand', 5),
(80, 12545, '164 Poinsettia Crescent ebony park', '47', 'Midrand', 'Midrand', 5),
(81, 12545, '164 Poinsettia Crescent ebony park', '47', 'Midrand', 'Midrand', 5),
(82, 12545, '164 Poinsettia Crescent ebony park', '47', 'Midrand', 'Midrand', 5),
(83, 12545, '164 Poinsettia Crescent ebony park', '47', 'Midrand', 'Midrand', 5),
(84, 12545, '164 Poinsettia Crescent ebony park', '47', 'Midrand', 'Midrand', 5),
(85, 12545, '164 Poinsettia Crescent ebony park', '47', 'Midrand', 'Midrand', 5),
(86, 12545, '164 Poinsettia Crescent ebony park', '47', 'Midrand', 'Midrand', 5),
(87, 12545, '164 Poinsettia Crescent ebony park', '47', 'Midrand', 'Midrand', 5),
(88, 12545, '164 Poinsettia Crescent ebony park', '47', 'Midrand', 'Midrand', 5),
(89, 12545, '164 Poinsettia Crescent ebony park', '47', 'Midrand', 'Midrand', 5),
(90, 12545, '164 Poinsettia Crescent ebony park', '47', 'Midrand', 'Midrand', 5),
(91, 12545, '164 Poinsettia Crescent ebony park', '47', 'Midrand', 'Midrand', 5),
(92, 12545, '164 Poinsettia Crescent ebony park', '47', 'Midrand', 'Midrand', 5),
(93, 12545, '164 Poinsettia Crescent ebony park', '47', 'Midrand', 'Midrand', 5),
(94, 12545, '164 Poinsettia Crescent ebony park', '47', 'Midrand', 'Midrand', 5),
(95, 12545, '164 Poinsettia Crescent ebony park', '47', 'Midrand', 'Midrand', 5),
(96, 12545, '164 Poinsettia Crescent ebony park', '47', 'Midrand', 'Midrand', 5),
(97, 12545, '164 Poinsettia Crescent ebony park', '47', 'Midrand', 'Midrand', 5),
(98, 12545, '164 Poinsettia Crescent ebony park', '47', 'Midrand', 'Midrand', 5),
(99, 12545, '164 Poinsettia Crescent ebony park', '787878', 'Midrand', 'Midrand', 5),
(100, 12545, '164 Poinsettia Crescent ebony park', '787878', 'Midrand', 'Midrand', 5),
(101, 12545, '164 Poinsettia Crescent ebony park', '78787878', 'Midrand', 'Midrand', 5),
(102, 12545, '164 Poinsettia Crescent ebony park', '78787878', 'Midrand', 'Midrand', 5);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(11) NOT NULL,
  `payment_date` date DEFAULT NULL,
  `payment_status` varchar(30) NOT NULL,
  `cust_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payment_id`, `payment_date`, `payment_status`, `cust_id`) VALUES
(21, '2021-04-11', 'Paid', 12545),
(22, '2021-04-11', 'Paid', 12545),
(23, '2021-04-11', 'Paid', 12545),
(24, '2021-04-11', 'Paid', 12545),
(25, '2021-04-11', 'Paid', 12545),
(26, '2021-04-11', 'Paid', 12545);

-- --------------------------------------------------------

--
-- Table structure for table `province`
--

CREATE TABLE `province` (
  `province_id` int(11) NOT NULL,
  `Name` varchar(255) CHARACTER SET armscii8 COLLATE armscii8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `province`
--

INSERT INTO `province` (`province_id`, `Name`) VALUES
(1, 'Mpumalanga'),
(2, 'Limpopo'),
(5, 'Gauteng'),
(6, 'Eastern Cape'),
(7, 'North West'),
(8, 'Kwazulu-Natal'),
(9, 'Free State'),
(10, 'Northern Cape'),
(11, 'Western Cape');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `service_id` int(10) NOT NULL,
  `service_type` varchar(30) DEFAULT NULL,
  `service_price` double NOT NULL,
  `service_notification` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`service_id`, `service_type`, `service_price`, `service_desc`,`service_notification`) VALUES
(1, 'Home Cleaning', 59.99, 'HC' , 'Y'),
(2, 'Garden Cleaning', 69.99, 'GC' , 'Y'),
(3, 'Carpet Cleaning', 65.99, 'CPC' ,'Y'),
(4, 'Commercial Cleaning', 49.99, 'CMC' , 'Y');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cleaningteam`
--
ALTER TABLE `cleaningteam`
  ADD PRIMARY KEY (`team_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cust_id`);

--
-- Indexes for table `customerservice`
--
ALTER TABLE `customerservice`
  ADD PRIMARY KEY (`custService_id`),
  ADD KEY `cust_id` (`cust_id`,`service_id`,`invoice_no`,`team_id`,`locationID`),
  ADD KEY `service_id` (`service_id`),
  ADD KEY `invoice_no` (`invoice_no`),
  ADD KEY `team_id` (`team_id`);
  ADD KEY `locationID` (`locationID`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`emp_id`),
  ADD UNIQUE KEY `team_id_2` (`team_id`),
  ADD KEY `fk_team_id` (`team_id`),
  ADD KEY `team_id` (`team_id`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`invoice_no`),
  ADD KEY `fk_cust_id` (`cust_id`),
  ADD KEY `cust_id` (`cust_id`,`payment_id`),
  ADD KEY `invoice_ibfk_1` (`payment_id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`locationID`),
  ADD KEY `cust_id` (`cust_id`),
  ADD KEY `loc_province` (`loc_province`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`),
  ADD KEY `fk_cust_id` (`cust_id`);

--
-- Indexes for table `province`
--
ALTER TABLE `province`
  ADD PRIMARY KEY (`province_id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`service_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cleaningteam`
--
ALTER TABLE `cleaningteam`
  MODIFY `team_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=441;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cust_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12565;

--
-- AUTO_INCREMENT for table `customerservice`
--
ALTER TABLE `customerservice`
  MODIFY `custService_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `emp_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `invoice_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23340;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `locationID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `province`
--
ALTER TABLE `province`
  MODIFY `province_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `service_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `customerservice`
--
ALTER TABLE `customerservice`
  ADD CONSTRAINT `customerservice_ibfk_1` FOREIGN KEY (`cust_id`) REFERENCES `customer` (`cust_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `customerservice_ibfk_2` FOREIGN KEY (`service_id`) REFERENCES `service` (`service_id`),
  ADD CONSTRAINT `customerservice_ibfk_3` FOREIGN KEY (`invoice_no`) REFERENCES `invoice` (`invoice_no`);
  ADD CONSTRAINT `customerservice_ibfk_3` FOREIGN KEY (`team_id`) REFERENCES `cleaningTeam` (`team_id`);
  ADD CONSTRAINT `customerservice_ibfk_3` FOREIGN KEY (`locationID`) REFERENCES `location` (`locationID`);

--
-- Constraints for table `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `employee_ibfk_1` FOREIGN KEY (`team_id`) REFERENCES `cleaningteam` (`team_id`);

--
-- Constraints for table `invoice`
--
ALTER TABLE `invoice`
  ADD CONSTRAINT `invoice_ibfk_1` FOREIGN KEY (`payment_id`) REFERENCES `payment` (`payment_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `invoice_ibfk_2` FOREIGN KEY (`cust_id`) REFERENCES `customer` (`cust_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `location`
--
ALTER TABLE `location`
  ADD CONSTRAINT `location_ibfk_1` FOREIGN KEY (`cust_id`) REFERENCES `customer` (`cust_id`),
  ADD CONSTRAINT `location_ibfk_2` FOREIGN KEY (`loc_province`) REFERENCES `province` (`province_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`cust_id`) REFERENCES `customer` (`cust_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
