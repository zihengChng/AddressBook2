-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2016 at 12:34 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;

--
-- Database: `addressbook`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(100) NOT NULL,
  `groupid` int(100) NOT NULL,
  `contactname` varchar(100) NOT NULL,
  `phonenumber` varchar(100) NOT NULL,
  `companynumber` varchar(100) NOT NULL,
  `homenumber` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `company` varchar(100) NOT NULL,
  `education` varchar(100) NOT NULL,
  `birthday` datetime NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `groupid`, `contactname`, `phonenumber`, `companynumber`, `homenumber`, `email`, `company`, `education`, `birthday`, `image`) VALUES
(1, 2, 'Jenkinqweee', '0127008141', 'qwe', '0127008141', 'aaa@aaa.aaa', 'aaaaaa', 'aaaaa', '0000-00-00 00:00:00', ''),
(2, 3, 'qwe', '123', '132', '123', 'sad@asd', '123', '123', '0000-00-00 00:00:00', ''),
(3, 8, 'asd', '123', '123', '123', '123', '123', '', '0000-00-00 00:00:00', ''),
(4, 9, '123', '123', '123', '123', '123', '123', '132', '0000-00-00 00:00:00', ''),
(5, 0, '123', '123', '123', '123', '123', '123', '123', '0231-12-31 00:00:00', ''),
(6, 0, '123', '123', '123', '123', '123@asd', '123', '123', '0231-12-31 00:00:00', ''),
(7, 0, '123', '123', '123', '123', '123@asd', '123', '123', '0231-12-31 00:00:00', ''),
(8, 8, 'qwe', '123', '1231', '123', '123@123', '123', '123', '2016-11-10 00:00:00', ''),
(9, 0, 'qwe', '123', '1231', '123', '123@123', '123', '123', '2016-11-10 00:00:00', ''),
(10, 0, 'Jenkin', '0123456789', '0102203992', '07112312', 'jendog@gmail.com', 'jenkin', 'suc', '2016-12-31 00:00:00', ''),
(11, 8, 'Jenkin', '0123456789', '0102203992', '07112312', 'jendog@gmail.com', 'jenkin', 'suc', '0000-00-00 00:00:00', 'Penguins.jpg'),
(12, 9, 'Jendog', '010001230120', '123123', '1311', '123@123', '1231', '123', '2016-11-23 00:00:00', ''),
(13, 9, '1231', '123123', '1231', '123', '123123@123', '1235', '123', '2016-11-07 00:00:00', ''),
(14, 8, 'ChowLing', '01203132', '123331', '123123', 'chowling@gmail.com', 'chow', 'cheow', '2016-11-29 00:00:00', 'Desert.jpg'),
(15, 8, 'ZiHeng', '01201203', '12030130', '1392389', 'ziheng@gmail.com', 'ziheng', 'ziheng', '2016-11-09 00:00:00', ''),
(26, 8, 'Chowling123', '012345679', '123', '123', '123@asd', '123', '123', '0231-12-31 00:00:00', ''),
(25, 8, 'JunFu', '0102203992', '0102203992', '072263732', 'cloudsoh03021@gmail.com', 'RAZER', 'SUC', '2016-11-22 00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` int(11) NOT NULL,
  `name` varchar(65) NOT NULL,
  `des` text NOT NULL,
  `owner` varchar(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `des`, `owner`) VALUES
(2, 'qqqqqqeeeeeeeqwe', 'sdfswqe', 'admin'),
(3, 'asdas', 'asdasd', 'admin'),
(4, 'asdasd', 'asdas', 'admin'),
(5, 'wfefwe', 'asdasd', 'admin'),
(6, 'dqwqweqw', 'asfasdfasf', 'yoo'),
(7, 'egrgertg', 'qweqd', 'yoo'),
(8, 'asd', 'asd', 'asd'),
(9, 'qwe', 'asd', 'asd'),
(10, 'qqq', 'qqq', 'asd');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phonenumber` int(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `profileimage` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `phonenumber`, `gender`, `date`, `profileimage`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin@admin.com', 127008141, 'Male', '1996-05-14', 'dog.jpg'),
(2, 'yoo', '81dc9bdb52d04dc20036dbd8313ed055', 'jenkin475@gmail.com', 127405696, 'Male', '2016-11-12', ''),
(3, 'yoo', '81dc9bdb52d04dc20036dbd8313ed055', 'loll@sdrgsdrg.com', 12345678, 'Male', '2016-11-12', ''),
(4, 'asd', '7815696ecbf1c96e6894b779456d330e', 'asd@asd', 102203992, 'Male', '1996-10-22', '');

-- --------------------------------------------------------

--
-- Table structure for table `userslogin`
--

CREATE TABLE `userslogin` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userslogin`
--

INSERT INTO `userslogin` (`username`, `password`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3'),
('yoo', '81dc9bdb52d04dc20036dbd8313ed055'),
('yoo', '81dc9bdb52d04dc20036dbd8313ed055'),
('asd', '7815696ecbf1c96e6894b779456d330e');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
