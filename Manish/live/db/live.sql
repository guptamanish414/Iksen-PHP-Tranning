-- phpMyAdmin SQL Dump
-- version 3.1.3.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 19, 2012 at 10:57 AM
-- Server version: 5.1.33
-- PHP Version: 5.2.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_live`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE IF NOT EXISTS `tb_admin` (
  `user_id` int(5) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `level_id` int(2) NOT NULL,
  `name` varchar(100) NOT NULL,
  `status` enum('A','I') NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`user_id`, `user_name`, `password`, `level_id`, `name`, `status`) VALUES
(1, 'admin', 'admin', 1, 'Administrator', 'A'),
(2, 'moufool', 'bhnjmljsdj', 1, 'Mousumi Paul', 'A'),
(3, 'arpita123', 'klmjhnn', 2, 'Arpita Sanyal', 'A'),
(4, 'ppgbhn', '12541', 2, 'Piyali Gupta', 'A'),
(5, 'opu123', '2441', 2, 'Arpan Mukherjee', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `tb_daily_attendnce`
--

CREATE TABLE IF NOT EXISTS `tb_daily_attendnce` (
  `attd_id` int(20) NOT NULL AUTO_INCREMENT,
  `attd_date` date NOT NULL,
  `emp_id` int(10) NOT NULL,
  `shift_id` int(3) NOT NULL,
  `in_time` time NOT NULL,
  `out_time` time NOT NULL,
  `work_duration` float NOT NULL,
  `OT` float NOT NULL,
  `total_duration` float NOT NULL,
  `status` varchar(100) NOT NULL,
  `remarks` varchar(200) NOT NULL,
  `dept_id` int(3) NOT NULL,
  `comp_name` varchar(100) NOT NULL,
  `printing_date` date NOT NULL,
  PRIMARY KEY (`attd_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `tb_daily_attendnce`
--


-- --------------------------------------------------------

--
-- Table structure for table `tb_emp_mstr`
--

CREATE TABLE IF NOT EXISTS `tb_emp_mstr` (
  `emp_id` int(10) NOT NULL AUTO_INCREMENT,
  `emp_code` varchar(20) NOT NULL,
  `emp_name` varchar(100) NOT NULL,
  `emp_father` varchar(100) NOT NULL,
  `emp_dt_birth` date NOT NULL,
  `emp_gender` enum('M','F') NOT NULL,
  `emp_address` varchar(200) NOT NULL,
  `emp_village` varchar(100) NOT NULL,
  `emp_state` varchar(100) NOT NULL,
  `emp_pincode` varchar(6) NOT NULL,
  `emp_qualification` varchar(100) NOT NULL,
  `emp_pan_no` varchar(20) NOT NULL,
  `emp_mobile` varchar(15) NOT NULL,
  `emp_emr_contact` varchar(15) NOT NULL,
  `emp_email` varchar(50) NOT NULL,
  `emp_dt_joining` date NOT NULL,
  `emp_bank` varchar(200) NOT NULL,
  `emp_bank_accno` varchar(20) NOT NULL,
  `emp_bank_ifsc` varchar(20) NOT NULL,
  `emp_bank_micr` varchar(20) NOT NULL,
  `emp_remarks` varchar(200) NOT NULL,
  `emp_left_dt` date NOT NULL,
  `emp_cv` varchar(100) NOT NULL,
  `status` enum('A','I') NOT NULL,
  PRIMARY KEY (`emp_id`),
  UNIQUE KEY `emp_code` (`emp_code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `tb_emp_mstr`
--


-- --------------------------------------------------------

--
-- Table structure for table `tb_leave_mstr`
--

CREATE TABLE IF NOT EXISTS `tb_leave_mstr` (
  `leave_id` int(3) NOT NULL AUTO_INCREMENT,
  `leave_name` varchar(200) NOT NULL,
  `leave_abbr` varchar(20) NOT NULL,
  `leave_count` int(3) NOT NULL,
  PRIMARY KEY (`leave_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tb_leave_mstr`
--

INSERT INTO `tb_leave_mstr` (`leave_id`, `leave_name`, `leave_abbr`, `leave_count`) VALUES
(1, 'Casual Leave', 'CL', 7),
(2, 'Medical Leave', 'ML', 2),
(3, 'Special Leave', 'SL', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tb_level_mstr`
--

CREATE TABLE IF NOT EXISTS `tb_level_mstr` (
  `level_id` int(2) NOT NULL AUTO_INCREMENT,
  `level_name` varchar(50) NOT NULL,
  `level_abbr` varchar(10) NOT NULL,
  PRIMARY KEY (`level_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tb_level_mstr`
--

INSERT INTO `tb_level_mstr` (`level_id`, `level_name`, `level_abbr`) VALUES
(1, 'Super Administrator', 'SA'),
(2, 'Sub Admin', 'SUA');

-- --------------------------------------------------------

--
-- Table structure for table `tb_shift_mstr`
--

CREATE TABLE IF NOT EXISTS `tb_shift_mstr` (
  `shift_id` int(5) NOT NULL AUTO_INCREMENT,
  `shift_name` varchar(100) NOT NULL,
  `shift_abbr` varchar(50) NOT NULL,
  PRIMARY KEY (`shift_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tb_shift_mstr`
--

INSERT INTO `tb_shift_mstr` (`shift_id`, `shift_name`, `shift_abbr`) VALUES
(1, 'B-Shift', 'B-Shift'),
(2, 'A-Shift', 'A-Shift'),
(3, 'GS-Admin', 'GS-Admin'),
(4, 'NS', 'NS'),
(5, 'C-Shift', 'C-Shift');
