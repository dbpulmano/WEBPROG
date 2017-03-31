-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2017 at 04:31 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `slug` varchar(128) NOT NULL,
  `fullName` varchar(35) NOT NULL,
  `nickname` varchar(8) NOT NULL,
  `email` varchar(20) NOT NULL,
  `homeAddress` varchar(100) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `cellNumber` bigint(11) NOT NULL,
  `comments` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `slug`, `fullName`, `nickname`, `email`, `homeAddress`, `gender`, `cellNumber`, `comments`) VALUES
(3, 'dana-rebekah-pulmano', 'Dana Rebekah Pulmano', 'Daneyy', 'dbpulmano@gmail.com', 'Taguig City', 'F', 9066666666, 'hi'),
(4, 'lel', 'Dana Rebekah Pulmano', 'Daneyy', 'danap@gmail.com', 'Taguig', 'F', 11111111111, 'lalalalala');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id` int(11) NOT NULL,
  `fullName` varchar(35) NOT NULL,
  `nickname` varchar(8) NOT NULL,
  `email` varchar(20) NOT NULL,
  `homeAddress` varchar(100) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `cellNumber` bigint(11) NOT NULL,
  `comments` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `fullName`, `nickname`, `email`, `homeAddress`, `gender`, `cellNumber`, `comments`) VALUES
(1, 'Dana Rebekah B. Pulmano', 'daneyy', 'dbpulmano@gmail.com', 'Taguig City', '1', 12345678910, 'hi ');

-- --------------------------------------------------------

--
-- Table structure for table `trivia`
--

CREATE TABLE `trivia` (
  `id` int(11) NOT NULL,
  `question` varchar(100) NOT NULL,
  `answer` varchar(100) NOT NULL,
  `profile_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trivia`
--

INSERT INTO `trivia` (`id`, `question`, `answer`, `profile_id`) VALUES
(1, 'The ancient Greek statue Ahprodite of Milos, better known as Venus de Milo, is currently on display ', 'The Louvre in Paris, France', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trivia`
--
ALTER TABLE `trivia`
  ADD PRIMARY KEY (`id`),
  ADD KEY `profile_id` (`profile_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `trivia`
--
ALTER TABLE `trivia`
  ADD CONSTRAINT `trivia_ibfk_1` FOREIGN KEY (`profile_id`) REFERENCES `profile` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
