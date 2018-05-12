-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 07, 2013 at 01:49 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `storelocator`
--

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE IF NOT EXISTS `city` (
  `city_id` int(20) NOT NULL AUTO_INCREMENT,
  `cityname` varchar(50) NOT NULL,
  PRIMARY KEY (`city_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`city_id`, `cityname`) VALUES
(1, 'Banglore'),
(2, 'Chennai'),
(3, 'Kochin'),
(4, 'Surat'),
(5, 'Delhi'),
(6, 'Hyderabad');

-- --------------------------------------------------------

--
-- Table structure for table `dealer`
--

CREATE TABLE IF NOT EXISTS `dealer` (
  `dealer_id` int(30) NOT NULL AUTO_INCREMENT,
  `dealername` varchar(50) NOT NULL,
  `firmname` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `productname` varchar(20) NOT NULL,
  `cityname` varchar(20) NOT NULL,
  PRIMARY KEY (`dealer_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=61 ;

--
-- Dumping data for table `dealer`
--

INSERT INTO `dealer` (`dealer_id`, `dealername`, `firmname`, `contact`, `address`, `phone`, `productname`, `cityname`) VALUES
(2, 'Mr.E.Abdul Raheem', 'The Runner & Mujeeb', '9447228446', 'The Runner Door No.36/ 1490, Vidayathil Chambers L', 'Ph.0484 2403233', 'Coated Fabric', 'Kochin'),
(6, 'Shanmugam', 'Shree Balaji Ent.', '9945074040', '"#1, 2nd Cross    J.M Lane, Balepet,    Bangalore-', 'NA', 'Coated Fabric', 'Banglore'),
(7, 'K.K Enterprises', 'K.K Enterprises', 'NA', '" # 4/3 Pooranaih Chatram Road    Balepet,    Bang', 'NA', 'Coated Fabric', 'Banglore'),
(12, 'Dilip Kumar', 'Prince International', '9886530098', '" # 6, Tulasi Thota,    Balepet,    Bangalore -560', 'NA', 'Coated Fabric', 'Banglore'),
(13, 'Balram Chaudhary', 'Prince Enterprises', '9886516417', '" # 21/2, 5th Cross,    J.M. lane, Balepet Cross, ', 'NA', 'Coated Fabric', 'Banglore'),
(14, 'Sri Nabin Narsaria', 'M/s Chandra Rexine', '9600198360', '38, Subramani street, Chennai-600001', '25210205', 'Coated Fabric', 'Chennai'),
(15, 'Sri Praveen Kalra', 'M/S Dakshin Traders', '9381049866', '38, Subramani street, Chennai-600001', '25219723', 'Coated Fabric', 'Chennai'),
(16, 'Sri Sripal M.Jain', 'M/s Kwality ', '9790983222', 'NA', 'NA', 'Coated Fabric', 'Chennai'),
(17, 'Sri Ketan V. Shah', 'M/s Nutan Rexine', '9677159363', 'NA', 'NA', 'Coated Fabric', 'Chennai'),
(18, 'Mr. A.Ahmed Kabir', 'M/s A.K.Traders', '9994010489', '10, sevenwells street, Chennai-600001', '25222813', 'Coated Fabric', 'Chennai'),
(19, 'Sri Rajesh Singhi', 'M/s Rajesh Rexine', '9444261791', '449/2, Mint Street, Chennai-600079', '25204881', 'Coated Fabric', 'Chennai'),
(20, 'Sri I.Manikam', 'M/s Jeyam Trading', '9600012181', '5, sevenwells street, Chennai-600001', '25283494', 'Coated Fabric', 'Chennai'),
(21, 'Mr.Joseph T.A', 'Calvin Trader', '9947099493', 'Calvin Traders,Desabhimani Road,Near Deshabhimani ', 'Ph.0484 2539216', 'Coated Fabric', 'Kochin'),
(22, 'Rajesh Kanodia', 'Manish Sales', '9427073867', 'S - 15, Vivekanand estate, Vivekanand Mill Compoun', '9428806193 / 9427073867', 'Coated Fabric', 'Surat'),
(23, 'Gautam Tekriwal', 'Tekriwal & Sons', '9375730004', 'Purvi Traders, B-5 Trade House Ring Road Surat,Guj', 'NA', 'Coated Fabric', 'Surat'),
(24, 'Ramesh H Patel', 'Sun Agency', '9825072272', 'Aradhana Industrial Area, B/H.S.T. Work Shop, Nr. ', '9825072272', 'Coated Fabric', 'Surat'),
(25, 'Vaibhav Bedi', 'Shree Ganesh Sales', '9999906422', '10650/2,Jhalndewalan Raod, Nabi Karim, Delhi-11005', '9999906422', 'Coated Fabric', 'Delhi'),
(26, 'Navtesh Chhatwal', 'Hilux Ent.', '9871006263', '10708,Jhalndewalan Raod, Nabi Karim, Delhi-110055', '9313142323', 'Coated Fabric', 'Delhi'),
(27, 'Atul Sharma', 'Om Trader', '9818588777', '170, Azad Market Delhi', '9891181115', 'Coated Fabric', 'Delhi'),
(28, 'Sunil Nagpal', 'Bhartiya Raxine Co.', '9891181115', '11372/73, Chowk-Singhara,Nabi Karim, New Delhi-110', '9818588777', 'Coated Fabric', 'Delhi'),
(29, 'R.K Traders', 'Rakesh Kumar Arora', '9814844655', 'W.X - 10, Basti Nau, Jalandhar City, Punjab', '9814844655', 'Coated Fabric', 'Delhi'),
(30, 'W.D Bahari & Co.', 'NA', '9814081867', '112 A, Canal Raod, Near Jhandia wala Peer, Basti N', '9814081867', 'Coated Fabric', 'Delhi'),
(31, 'B.R Agrawal', 'Agarwal Brothers', '9390042618', 'NA', 'NA', 'Coated Fabric', 'Hyderabad'),
(32, 'Pawan Kumar Gupta', 'Pawan Kumar', '9347513960', 'NA', 'NA', 'Coated Fabric', 'Hyderabad'),
(33, 'NA', 'Durga Associates-Hyd.', 'NA', '13-1-16/1, Near Prakash Tilkies,Mangalhat-Hyd.-500', 'NA', 'Coated Fabric', 'Hyderabad'),
(34, 'NA', 'Lakhani Group-Koti', 'NA', 'Lakhani Collection-Hyd.5-1-771,opp.Kamat Hotel.Kot', 'NA', 'Coated Fabric', 'Hyderabad'),
(35, 'NA', 'Lakhani Travel World-Hyd', 'NA', '5-1-838,839/1 Beside Vaibhav Textiles.Koti-Hyderab', 'NA', 'Coated Fabric', 'Hyderabad'),
(36, 'NA', 'Lakhani Travellers Choice', 'NA', '5-1-799,807,opp Apco Fabrics,Koti-Hyderabad-500095', 'NA', 'Coated Fabric', 'Hyderabad'),
(37, 'NA', 'Lakhani Leather Works-Hyd.', 'NA', '5-1-804 opp S.V.R Hotel,Koti-Hyderabad-500095', 'NA', 'Coated Fabric', 'Hyderabad'),
(38, 'NA', 'P.N Traders-Hyd(pawan Kumar)', 'NA', '22-8-210/1, Yousaf Bazzar,Hyderabad-500002', 'NA', 'Coated Fabric', 'Hyderabad'),
(39, 'NA', 'Photon Ent-Hyd.', 'NA', '10-2-9/18B,A.C Guard,Masab Tank-Hyd-500004', 'NA', 'Coated Fabric', 'Hyderabad'),
(40, 'NA', 'Rama Traders-Hyd.', 'NA', '14-1-346/A Seetarampet,Mangalhat-Hyd.-500006', 'NA', 'Coated Fabric', 'Hyderabad'),
(41, 'Bhatrt Chawan', 'Chawan Bag-Hyd.-DLR', '9030085798', '12-2-895A3,Zeba Bagh,Asif Nagar-Hyd.Tin No-2815824', 'NA', 'Coated Fabric', 'Hyderabad'),
(42, 'Subhash Agrawal', 'Sanjay Textile', '9000555183', '12-2-895A /3/2 Zeba Bagh,Asif Nagar-Hyd.', 'NA', 'Coated Fabric', 'Hyderabad'),
(43, 'Ramratan Upp.', 'Ramchander Upadhyay', '9849679501', 'Ramchander Upp.& Co-Hyd.5-2-200/A46/2 New Osman,Gu', 'NA', 'Coated Fabric', 'Hyderabad'),
(44, 'NA', 'Ramchander Upp.& Sons', 'NA', '12-2-879/2/A Zeba Bagh,Asif Nagar-Hyd.', 'NA', 'Coated Fabric', 'Hyderabad'),
(45, 'NA', 'Attal Gift Solution-Hyd.', 'NA', '4-5-145;Hashmath Gunj,Koti Sultan Bazar-Hyd.195', 'NA', 'Coated Fabric', 'Hyderabad'),
(46, 'Amit Seth', 'Ketan Enterprise', '9830150075', '70-Canning Street, Kolkata-700001', '9830150075', 'Coated Fabric', 'Kolkata'),
(47, 'Masroor Alam', 'New Heera Sales', '9830091992', '12-Harin Bari, Coolotola,Kolkata-700073', '9830091992', 'Coated Fabric', 'Kolkata'),
(48, 'M.K.Dutta', 'Shiva Ent.', '9830130259', '9-B,Bolai Dutta Street,Kolkata-700073', '9830130259', 'Coated Fabric', 'Kolkata'),
(49, 'Debashish Ghosh', 'Ghosh Ent', '9830213742', '18-Brujdulal Street, Kolkata-700007', '9830213742', 'Coated Fabric', 'Kolkata'),
(50, 'Bharat Bhushan Goyal', 'Naveen Ent', '9330734990', '67-Colootola Street,Kolkata-700073', '9330734990', 'Coated Fabric', 'Kolkata'),
(51, 'L.N.Bose', 'Kalyani Ent', '9836793923', '25/2-B.N.Ghosal Road,Belghoria,Kolkata-700056', '9836793923', 'Coated Fabric', 'Kolkata'),
(52, 'Mohamad Shaid', 'Haq Traders', '8957435791', 'NA', 'NA', 'Coated Fabric', 'Kanpur'),
(53, 'Mohamad Ajaj', 'M.M.S', '9305307150', 'NA', 'NA', 'Coated Fabric', 'Kanpur'),
(54, 'Malikimran Ahmed', 'Sultan Bhai', '9839449485', 'NA', 'NA', 'Coated Fabric', 'Kanpur'),
(55, 'NA', 'Agarwal Bag House ,Allahabad', 'NA', '126, Ziro Road, Allahabad', 'NA', 'Coated Fabric', 'Kanpur'),
(56, 'NA', ' Indira Lager Store , Kanpur ', 'NA', '90/71, Phol Wali Gali, Anawarganj, Kapur ', 'NA', 'Coated Fabric', 'Kanpur'),
(57, 'NA', 'Khanna Pharmaceutical and Chemicals ,Kanpur', 'NA', '123/788 Fazalganj Kanpur', 'NA', 'Coated Fabric', 'Kanpur'),
(58, 'NA', 'Master Trader, Kanpur', 'NA', '42/173 Misri Bazar, Kanur', 'NA', 'Coated Fabric', 'Kanpur'),
(59, 'mukesh', 'sdarkar', '9945074040', '18-Brujdulal Street, Kolkata-700007', '9703863824', '', ''),
(60, 'mukesh', 'sdarkar', '9945074040', '18-Brujdulal Street, Kolkata-700007', '9703863824', 'Echolac', 'Delhi');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `product_id` int(20) NOT NULL AUTO_INCREMENT,
  `productname` varchar(50) NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `productname`) VALUES
(1, 'Coated Fabric'),
(2, 'Synwood'),
(3, 'Ventilator'),
(4, 'Label'),
(5, 'Echolac');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
