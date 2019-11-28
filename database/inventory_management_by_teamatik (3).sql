-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 28, 2019 at 03:50 AM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventory_management_by_teamatik`
--
CREATE DATABASE IF NOT EXISTS `inventory_management_by_teamatik` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `inventory_management_by_teamatik`;

-- --------------------------------------------------------

--
-- Table structure for table `admin_system`
--

DROP TABLE IF EXISTS `admin_system`;
CREATE TABLE IF NOT EXISTS `admin_system` (
  `id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(30) NOT NULL,
  `admin_pass` varchar(15) NOT NULL,
  `admin_contact` int(12) NOT NULL,
  `admin_address` varchar(50) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_system`
--

INSERT INTO `admin_system` (`id_admin`, `admin_name`, `admin_pass`, `admin_contact`, `admin_address`) VALUES
(1, 'admin', 'admin', 1234567890, 'teamatik');

-- --------------------------------------------------------

--
-- Table structure for table `barcode`
--

DROP TABLE IF EXISTS `barcode`;
CREATE TABLE IF NOT EXISTS `barcode` (
  `id_barcode` int(11) NOT NULL AUTO_INCREMENT,
  `id_product` int(11) NOT NULL,
  `id_employees` int(11) NOT NULL,
  `id_supplier` int(11) NOT NULL,
  `id_transaction` int(11) NOT NULL,
  PRIMARY KEY (`id_barcode`),
  KEY `id_product` (`id_product`),
  KEY `id_supplier` (`id_supplier`),
  KEY `id_transaction` (`id_transaction`),
  KEY `id_employee` (`id_employees`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

DROP TABLE IF EXISTS `department`;
CREATE TABLE IF NOT EXISTS `department` (
  `id_department` int(11) NOT NULL AUTO_INCREMENT,
  `department_name` varchar(255) NOT NULL,
  PRIMARY KEY (`id_department`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id_department`, `department_name`) VALUES
(1, 'IT'),
(2, 'HRs');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

DROP TABLE IF EXISTS `employee`;
CREATE TABLE IF NOT EXISTS `employee` (
  `id_employees` int(11) NOT NULL AUTO_INCREMENT,
  `employees_name` varchar(255) NOT NULL,
  `employees_address` varchar(50) NOT NULL,
  `employees_contact` varchar(15) NOT NULL,
  `id_position` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id_employees`),
  KEY `id_position` (`id_position`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id_employees`, `employees_name`, `employees_address`, `employees_contact`, `id_position`, `status`) VALUES
(1, 'Kevin', 'kepon@student.umn.ac.id', '123321', 1, 1),
(4, 'asd', 'asd@asd.com', '10240128', 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

DROP TABLE IF EXISTS `invoice`;
CREATE TABLE IF NOT EXISTS `invoice` (
  `id_invoice` int(11) NOT NULL AUTO_INCREMENT,
  `product_price` int(11) NOT NULL,
  `product_qty` int(11) NOT NULL,
  `discount` int(11) NOT NULL,
  `id_supplier` int(11) NOT NULL,
  `date_recorded` date NOT NULL,
  PRIMARY KEY (`id_invoice`),
  KEY `id_supplier_i` (`id_supplier`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `position`
--

DROP TABLE IF EXISTS `position`;
CREATE TABLE IF NOT EXISTS `position` (
  `id_position` int(11) NOT NULL AUTO_INCREMENT,
  `position_name` varchar(255) NOT NULL,
  `id_department` int(11) NOT NULL,
  PRIMARY KEY (`id_position`),
  KEY `id_department` (`id_department`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `position`
--

INSERT INTO `position` (`id_position`, `position_name`, `id_department`) VALUES
(1, 'Developer', 2),
(2, 'Technical Supports', 1);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `id_product` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(255) NOT NULL,
  `id_category` int(11) NOT NULL,
  `date_encode` date NOT NULL,
  `date_expired` date NOT NULL,
  `product_qty` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `id_supplier` int(11) NOT NULL,
  `id_invoice` int(11) NOT NULL,
  PRIMARY KEY (`id_product`),
  KEY `id_category` (`id_category`),
  KEY `id_supplier` (`id_supplier`) USING BTREE,
  KEY `id_invoice` (`id_invoice`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

DROP TABLE IF EXISTS `product_category`;
CREATE TABLE IF NOT EXISTS `product_category` (
  `id_category` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(255) NOT NULL,
  `depreciation` int(11) NOT NULL,
  PRIMARY KEY (`id_category`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_category`
--

INSERT INTO `product_category` (`id_category`, `category_name`, `depreciation`) VALUES
(1, 'asd', 5),
(3, 'a', 1);

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

DROP TABLE IF EXISTS `supplier`;
CREATE TABLE IF NOT EXISTS `supplier` (
  `id_supplier` int(11) NOT NULL AUTO_INCREMENT,
  `supplier_name` varchar(30) NOT NULL,
  `supplier_contact` int(12) NOT NULL,
  `supplier_address` varchar(50) NOT NULL,
  PRIMARY KEY (`id_supplier`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`id_supplier`, `supplier_name`, `supplier_contact`, `supplier_address`) VALUES
(3, 'tes', 123, 'asd'),
(4, 'asd', 124124, 'asdaf');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

DROP TABLE IF EXISTS `transaction`;
CREATE TABLE IF NOT EXISTS `transaction` (
  `id_transaction` int(11) NOT NULL AUTO_INCREMENT,
  `id_product` int(11) NOT NULL,
  `id_employee` int(11) NOT NULL,
  `borrow_date` date NOT NULL,
  `exp_return_date` date NOT NULL,
  `return_date` date NOT NULL,
  PRIMARY KEY (`id_transaction`),
  KEY `id_product_t` (`id_product`),
  KEY `id_employee_t` (`id_employee`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `barcode`
--
ALTER TABLE `barcode`
  ADD CONSTRAINT `id_employee` FOREIGN KEY (`id_employees`) REFERENCES `employee` (`id_employees`),
  ADD CONSTRAINT `id_product` FOREIGN KEY (`id_product`) REFERENCES `product` (`id_product`),
  ADD CONSTRAINT `id_supplier` FOREIGN KEY (`id_supplier`) REFERENCES `supplier` (`id_supplier`),
  ADD CONSTRAINT `id_transaction` FOREIGN KEY (`id_transaction`) REFERENCES `transaction` (`id_transaction`);

--
-- Constraints for table `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `id_position` FOREIGN KEY (`id_position`) REFERENCES `position` (`id_position`);

--
-- Constraints for table `invoice`
--
ALTER TABLE `invoice`
  ADD CONSTRAINT `id_supplier_i` FOREIGN KEY (`id_supplier`) REFERENCES `supplier` (`id_supplier`);

--
-- Constraints for table `position`
--
ALTER TABLE `position`
  ADD CONSTRAINT `id_department` FOREIGN KEY (`id_department`) REFERENCES `department` (`id_department`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `id_category` FOREIGN KEY (`id_category`) REFERENCES `product_category` (`id_category`),
  ADD CONSTRAINT `id_invoice` FOREIGN KEY (`id_invoice`) REFERENCES `invoice` (`id_invoice`);

--
-- Constraints for table `transaction`
--
ALTER TABLE `transaction`
  ADD CONSTRAINT `id_employee_t` FOREIGN KEY (`id_employee`) REFERENCES `employee` (`id_employees`),
  ADD CONSTRAINT `id_product_t` FOREIGN KEY (`id_product`) REFERENCES `product` (`id_product`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
