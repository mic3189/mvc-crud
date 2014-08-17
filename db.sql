-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2014 at 03:18 PM
-- Server version: 5.5.36
-- PHP Version: 5.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `your_dbname`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `gender` varchar(150) NOT NULL,
  `education` varchar(150) NOT NULL,
  `lname` varchar(150) NOT NULL,
  `password` varchar(100) NOT NULL,
  `type` int(11) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `fname`, `email`, `gender`, `education`, `lname`, `password`, `type`) VALUES
(1, 'chopstick', 'test@localhost.com', 'male', 'scientest', '', '', 0),
(2, 'chopstick', 'test@yahoo.com', 'male', 'scientest', 'dela crus', '', 0),
(3, 'batrocks', 'support@mylistahan.com', 'male', 'developer', 'rastafarian', '1234', 1),
(4, '', '', '', '', '', '', 0),
(5, 'mike', 'mike@gmail.com', 'male', 'programmer', 'alo', 'admin123', 0),
(6, 'mike2', 'mike2@gmail.com', 'male', 'web designer', 'alo', 'admin123', 0),
(7, 'mike2', 'jr_sabal@yahoo.com', 'male', 'web designer', 'alo', 'admin123', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
