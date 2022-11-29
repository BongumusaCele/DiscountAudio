-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Nov 02, 2022 at 01:00 PM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id19802609_discountaudio`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

DROP TABLE IF EXISTS `tbladmin`;
CREATE TABLE IF NOT EXISTS `tbladmin` (
  `id` int(250) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(500) NOT NULL,
  `surname` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`id`, `firstname`, `surname`, `email`, `password`) VALUES
(1, 'adminHalaand', 'Erling', 'erling@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(2, 'adminkev', 'KDD', 'kdb@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055');

-- --------------------------------------------------------

--
-- Table structure for table `tblaudioproducts`
--

DROP TABLE IF EXISTS `tblaudioproducts`;
CREATE TABLE IF NOT EXISTS `tblaudioproducts` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) NOT NULL,
  `price` int(255) NOT NULL,
  `image` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblaudioproducts`
--

INSERT INTO `tblaudioproducts` (`id`, `name`, `price`, `image`) VALUES
(4, 'JBL 355 Speaker ', 780, 'audioproduct2.jpg'),
(5, 'Pioneer C55 Speaker', 533, 'audioproduct4.jpg'),
(6, 'XTC Door Speakers', 420, 'audioproduct5.jpg'),
(7, 'Pioneer Door Side Speakers', 499, 'audioproduct6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tblbookings`
--

DROP TABLE IF EXISTS `tblbookings`;
CREATE TABLE IF NOT EXISTS `tblbookings` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `user_id` int(255) NOT NULL,
  `name` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `date` date NOT NULL,
  `time` time(6) NOT NULL,
  `servicetype` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblbookings`
--

INSERT INTO `tblbookings` (`id`, `user_id`, `name`, `email`, `date`, `time`, `servicetype`) VALUES
(1, 1, 'john', 'johnstones@outlook.co.za', '2022-10-26', '22:44:00.000000', 'rims installation'),
(2, 1, 'Haland', 'android9@city.com', '2022-12-05', '14:00:00.000000', 'paint work');

-- --------------------------------------------------------

--
-- Table structure for table `tblcart`
--

DROP TABLE IF EXISTS `tblcart`;
CREATE TABLE IF NOT EXISTS `tblcart` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `user_id` int(255) NOT NULL,
  `name` varchar(500) NOT NULL,
  `price` int(255) NOT NULL,
  `quantity` int(255) NOT NULL,
  `image` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblmessages`
--

DROP TABLE IF EXISTS `tblmessages`;
CREATE TABLE IF NOT EXISTS `tblmessages` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `user_id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `number` varchar(10) NOT NULL,
  `message` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblmessages`
--

INSERT INTO `tblmessages` (`id`, `user_id`, `name`, `email`, `number`, `message`) VALUES
(1, 1, 'Musa', 'musa21@gmail.com', '0795543699', 'Hi how are you?');

-- --------------------------------------------------------

--
-- Table structure for table `tblorder`
--

DROP TABLE IF EXISTS `tblorder`;
CREATE TABLE IF NOT EXISTS `tblorder` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `user_id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `number` varchar(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `method` varchar(50) NOT NULL,
  `address` varchar(500) NOT NULL,
  `total_products` varchar(1000) NOT NULL,
  `total_price` int(100) NOT NULL,
  `placed_on` varchar(50) NOT NULL,
  `payment_status` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblorder`
--

INSERT INTO `tblorder` (`id`, `user_id`, `name`, `number`, `email`, `method`, `address`, `total_products`, `total_price`, `placed_on`, `payment_status`) VALUES
(1, 1, 't', '0121212121', 'musa@gmail.com', 'cash on delivery', 'house no. 6, dgd, Cape Town, South Africa - 777', ', mmmm (1) , JBL Speaker (2) ', 6560, '26-Oct-2022', 'completed'),
(2, 1, 'q', '1', 'mmm@gmail.co.za', 'cash on delivery', 'house no. 5, 55, j, i - 22', ', JBL Speaker (1) , mmmm (1) ', 5780, '26-Oct-2022', 'completed'),
(3, 1, 'John ', '0221221222', 'john@gmail.com', 'cash on delivery', 'house no. 255, Hey Ya, Johannesburg, South Africa - 2566', ', Pioneer Door Side Speakers (1) , JBL Speaker (1) , JBL 355 Speaker  (1) ', 2059, '02-Nov-2022', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

DROP TABLE IF EXISTS `tbluser`;
CREATE TABLE IF NOT EXISTS `tbluser` (
  `id` int(250) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(500) NOT NULL,
  `surname` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`id`, `firstname`, `surname`, `email`, `password`) VALUES
(1, 'Johnson', 'Doe', 'johndoe@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(3, 'leroy', 'sane', 'leroysane@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
