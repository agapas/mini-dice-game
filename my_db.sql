-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2015 at 12:50 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `my_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `correct_guesses`
--

CREATE TABLE IF NOT EXISTS `correct_guesses` (
`user_id` int(3) NOT NULL,
  `answer` int(1) NOT NULL,
  `correct_guesses_count` int(1) NOT NULL,
  `guessed_on` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `correct_guesses`
--

INSERT INTO `correct_guesses` (`user_id`, `answer`, `correct_guesses_count`, `guessed_on`) VALUES
(1, 6, 1, '2015-05-17'),
(2, 4, 3, '2015-05-17'),
(3, 2, 1, '2015-05-17'),
(4, 1, 1, '2015-05-17'),
(5, 5, 2, '2015-05-17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `correct_guesses`
--
ALTER TABLE `correct_guesses`
 ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `correct_guesses`
--
ALTER TABLE `correct_guesses`
MODIFY `user_id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
