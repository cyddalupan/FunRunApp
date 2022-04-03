-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2014 at 06:57 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `stripesrun`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_ip` varchar(120) NOT NULL,
  `progress` int(11) NOT NULL,
  `race_category` varchar(60) NOT NULL,
  `registration_branch` varchar(250) NOT NULL,
  `first_name` varchar(250) NOT NULL,
  `last_name` varchar(250) NOT NULL,
  `middle_name` varchar(250) NOT NULL,
  `mobile_network` varchar(10) NOT NULL,
  `mobile_number` varchar(20) NOT NULL,
  `user_email` varchar(400) NOT NULL,
  `landline_network` varchar(10) NOT NULL,
  `landline_number` varchar(20) NOT NULL,
  `user_gender` varchar(20) NOT NULL,
  `date_birth` date NOT NULL,
  `address_number` varchar(120) NOT NULL,
  `address_street` varchar(120) NOT NULL,
  `address_city` varchar(120) NOT NULL,
  `address_province` varchar(120) NOT NULL,
  `address_zipcode` varchar(60) NOT NULL,
  `nationality` varchar(160) NOT NULL,
  `occupation` varchar(250) NOT NULL,
  `visited_branch` varchar(250) NOT NULL,
  `mcdonalds_employed` varchar(250) NOT NULL,
  `fam1_first_name` varchar(250) NOT NULL,
  `fam1_last_name` varchar(250) NOT NULL,
  `fam1_middle_name` varchar(250) NOT NULL,
  `fam1_birthday` date NOT NULL,
  `fam1_relationship` varchar(120) NOT NULL,
  `fam2_first_name` varchar(250) NOT NULL,
  `fam2_last_name` varchar(250) NOT NULL,
  `fam2_middle_name` varchar(250) NOT NULL,
  `fam2_birthday` date NOT NULL,
  `fam2_relationship` varchar(120) NOT NULL,
  `fam3_first_name` varchar(250) NOT NULL,
  `fam3_last_name` varchar(250) NOT NULL,
  `fam3_middle_name` varchar(250) NOT NULL,
  `fam3_birthday` date NOT NULL,
  `fam3_relationship` varchar(120) NOT NULL,
  `emergency_name` varchar(600) NOT NULL,
  `emergency_address` varchar(600) NOT NULL,
  `emergency_number` varchar(120) NOT NULL,
  `emergency_relationship` varchar(120) NOT NULL,
  `news_letter` varchar(20) NOT NULL,
  `terms_condition` varchar(20) NOT NULL,
  `date_registered` datetime NOT NULL,
  `user_status` varchar(120) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=85 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_ip`, `progress`, `race_category`, `registration_branch`, `first_name`, `last_name`, `middle_name`, `mobile_network`, `mobile_number`, `user_email`, `landline_network`, `landline_number`, `user_gender`, `date_birth`, `address_number`, `address_street`, `address_city`, `address_province`, `address_zipcode`, `nationality`, `occupation`, `visited_branch`, `mcdonalds_employed`, `fam1_first_name`, `fam1_last_name`, `fam1_middle_name`, `fam1_birthday`, `fam1_relationship`, `fam2_first_name`, `fam2_last_name`, `fam2_middle_name`, `fam2_birthday`, `fam2_relationship`, `fam3_first_name`, `fam3_last_name`, `fam3_middle_name`, `fam3_birthday`, `fam3_relationship`, `emergency_name`, `emergency_address`, `emergency_number`, `emergency_relationship`, `news_letter`, `terms_condition`, `date_registered`, `user_status`) VALUES
(59, '', 0, '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '0000-00-00 00:00:00', 'incomplete'),
(60, '', 7, '5k-adult', 'McDonaldâ€™s Blue Bay, Pasay City', 'Michelle', 'de Jesus', 'Garcia', '0916', '9021001', 'mz@gmail.com', '02', '1234567', 'female', '1984-05-27', '8', 'paz', 'Caloocan', 'Metro Manila', '1400', 'Filipino', 'Process Design ', 'MORAYTA', 'no', 'Family 1', 'de Jesus', 'Garcia', '1984-05-26', 'Husband', 'Family 2', 'de Jesus', 'Garcia', '1984-05-26', 'Daughter', 'Family 3', 'de Jesus', 'Garcia', '1984-05-25', 'Son', 'Mackie Correa', '8 Paz', '', 'Mother', 'checked', 'checked', '2014-10-30 15:52:17', 'completed'),
(61, '', 7, '1k-children', 'McDonaldâ€™s Eastwood', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', 'Navotas', 'Cagayan', '', 'Filipino', 'IT - Hardware', 'SM NORTH EDSA', 'yes -- ', '', '', '', '0000-00-00', 'Others', '', '', '', '0000-00-00', 'Others', '', '', '', '0000-00-00', 'Others', 'sdasd', 'dsfsdf', '123123123', 'Others', 'checked', 'checked', '2014-10-30 20:07:59', 'completed'),
(62, '', 7, '5k-adult', 'McDonaldâ€™s 32nd St. ', 'Michelle', 'de Jesus', 'Garcia', '0916', '1234567', 'mz@gmail.com', '02', '1234567', 'female', '1984-05-27', '', '', 'City', 'Metro Manila', '', 'Filipino', '', '', 'yes -- ', 'Family 1', '', '', '0000-00-00', 'Others', '', '', '', '0000-00-00', 'Others', '', '', '', '0000-00-00', 'Others', 'Mackie Correa', 'lalala', '', 'Wife', 'checked', 'checked', '2014-10-30 15:56:26', 'completed'),
(63, '', 7, '3k-adult', 'McDonaldâ€™s Jose Abad, Manila', 'Michelle', 'de Jesus', 'Garcia', '0916', '1234567', 'mz@gmail.com', '02', '1234567', 'female', '1984-05-27', '8', 'paz', 'Caloocan', 'Metro Manila', '1400', 'Filipino', 'Process Design ', 'GLORIETTA', 'yes -- accounting', '', '', '', '0000-00-00', 'Others', '', '', '', '0000-00-00', 'Others', '', '', '', '0000-00-00', 'Others', 'Lala loopsy', 'malabon', '', 'Son', 'checked', 'checked', '2014-10-30 16:05:55', 'completed'),
(64, '', 6, '3k-family', 'RUNNR, Bonifacio High Street', 'scscs', 'sds', 'sdsd', '0916', '1234567', 'csds@gmail.com', '02', '1234567', 'female', '1984-01-27', '7', 'dcdc', 'Caloocan', 'Metro Manila', '1400', 'Afghan', 'Process Design ', 'MORAYTA', 'no', '', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', 'wsds', 'dsdsdsd', '1234567', 'Son', 'checked', 'checked', '2014-10-30 22:10:13', 'completed'),
(65, '', 0, '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '0000-00-00 00:00:00', 'incomplete'),
(66, '', 0, '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '0000-00-00 00:00:00', 'incomplete'),
(67, '', 2, '3k-family', 'McDonaldâ€™s Blue Bay', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '0000-00-00 00:00:00', 'completed'),
(68, '', 4, '1k-children', 'McDonaldâ€™s Bench, Fort Bonifacio', '', '', '', '', '', '', '', '', '', '0000-00-00', '123', 'asd', 'Marikina', '', '', 'Filipino', '', '', 'yes -- ', '', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', 'asdasd', 'asdasd', 'asdasd', 'Others', 'checked', 'checked', '2014-10-30 21:35:18', 'completed'),
(69, '', 2, '3k-family', 'McDonaldâ€™s Bench, Fort Bonifacio', 'fgfgf', 'fgfgf', 'fgfdgf', '0916', '1234564', 'mz@gmail.com', '02', '1234567', 'female', '1984-05-27', 'dvdvgd', 'dgdg', 'Caloocan', 'Metro Manila', '1400', 'Filipino', 'Accounting/Finance', '', 'no', '', '', '', '0000-00-00', 'Others', 'sdf', 'dsf', 'sdf', '2014-10-14', 'Father', 'dasdasd', 'asdasdasd', 'asdasd', '2014-10-15', 'Others', 'vcvc', 'cvxcvcxv', '1234567', 'Friend', 'checked', 'checked', '2014-10-30 22:05:46', 'completed'),
(70, '', 3, '3k-family', 'RUNNR, Bonifacio High Street', 'xcvdcv', 'dfdfd', 'dfdfd', '0916', '1234567', 'vc@gmail.com', '02', '1234567', 'female', '1984-05-27', '7', 'paz', 'Caloocan', 'Metro Manila', '1400', 'Filipino', 'Banking/Financial', 'CUBAO', 'no', '', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', 'dgdgdg', 'dgdgd', '12345674', 'Others', 'checked', 'checked', '2014-10-30 22:08:55', 'completed'),
(71, '', 7, '1k-children', 'McDonaldâ€™s Adriatico, Manila', 'cyd', 'dalupan', 'magsadia', '0916', '1231313', 'cydmdalupan@gmail.com', '02', '2342342', 'male', '2014-10-14', '123', 'libis orkana', 'Caloocan', 'Metro Manila', '1992', 'Filipino', 'IT - Software ', 'GREENHILLS', 'no', 'asd', 'asd', 'ads', '1990-10-15', 'Father', '', '', '', '0000-00-00', 'Others', '', '', '', '0000-00-00', 'Others', '', '', '', '', '', '', '0000-00-00 00:00:00', 'completed'),
(72, '', 3, '3k-family', 'McDonaldâ€™s Blue Bay', 'cyd', 'dalupan', 'magsadia', '0916', '6178126', 'cyd@gmail.com', '02', '1234444', 'male', '1990-08-10', '123', 'libis orkana', 'Caloocan', 'Metro Manila', '1105', 'Filipino', 'IT - Software ', 'QUEZON AVENUE', 'yes -- account', '', 'dalupan', 'jose', '1970-06-04', 'Father', 'chie', 'dalupan', 'magsadia', '1990-05-01', 'Relative', 'aliya', 'dalupan', 'mm', '2004-10-20', 'Relative', 'annamarie dalupan', 'libis caloocan', '12998273612836876', 'Relative', 'checked', 'checked', '2014-10-31 11:34:16', 'completed'),
(73, '', 2, '', 'McDonaldâ€™s Blue Bay', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '0000-00-00 00:00:00', 'incomplete'),
(74, '', 0, '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '0000-00-00 00:00:00', 'incomplete'),
(75, '', 0, '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '0000-00-00 00:00:00', 'incomplete'),
(76, '', 7, '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '0000-00-00 00:00:00', 'completed'),
(77, '', 7, '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '0000-00-00 00:00:00', 'completed'),
(78, '', 7, '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '0000-00-00 00:00:00', 'completed'),
(79, '', 2, '3k-family', 'McDonaldâ€™s Alabang', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '0000-00-00 00:00:00', 'incomplete'),
(80, '', 7, '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '0000-00-00 00:00:00', 'completed'),
(81, '', 7, '1k-children', 'McDonaldâ€™s Blue Bay', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '0000-00-00 00:00:00', 'completed'),
(82, '', 1, '1k-children', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '0000-00-00 00:00:00', 'incomplete'),
(83, '', 2, '', 'McDonaldâ€™s Blue Bay', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '0000-00-00 00:00:00', 'incomplete'),
(84, '', 2, '1k-children', 'McDonaldâ€™s Greenbelt', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '0000-00-00 00:00:00', 'incomplete');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
