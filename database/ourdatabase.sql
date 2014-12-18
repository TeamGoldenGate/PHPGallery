-- phpMyAdmin SQL Dump
-- version 4.3.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 18, 2014 at 12:39 PM
-- Server version: 5.6.22
-- PHP Version: 5.5.9-1ubuntu4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `phpteamwork`
--

-- --------------------------------------------------------

--
-- Table structure for table `albums`
--

CREATE TABLE `albums` (
  `album_id` int(11) NOT NULL,
  `album_name` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `rating` int(11) DEFAULT NULL,
  `category` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=48 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `albums`
--

INSERT INTO `albums` (`album_id`, `album_name`, `rating`, `category`, `user_id`) VALUES
(47, 'Lake', 0, 'Natural', 9),
(39, 'Animals', 0, 'Natural', 9);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `picture_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(200) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pictures`
--

CREATE TABLE `pictures` (
  `picture_id` int(11) NOT NULL,
  `name` varchar(40) COLLATE latin1_general_ci NOT NULL,
  `picturename` varchar(200) COLLATE latin1_general_ci NOT NULL,
  `album_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `pictures`
--

INSERT INTO `pictures` (`picture_id`, `name`, `picturename`, `album_id`, `user_id`) VALUES
(4, './images/Koala.jpg', 'Koala', 39, 9),
(5, './images/Penguins.jpg', '', 39, 9),
(14, './images/21.jpg', 'Sunset3', 47, 9),
(13, './images/23.jpg', 'Sunset2', 47, 9),
(12, './images/12.jpg', 'Sunset', 47, 9);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `dateregistred` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_email` varchar(255) NOT NULL,
  `user_fname` varchar(255) NOT NULL,
  `user_lname` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `password`, `dateregistred`, `user_email`, `user_fname`, `user_lname`) VALUES
(2, '123', '144', '2014-12-17 06:48:12', '123', '124', '5155'),
(3, 'test', 'test', '2014-12-17 15:24:57', 'test', 'test', 'test'),
(4, 'test', 'test', '2014-12-17 15:25:22', 'test', 'test', 'test'),
(5, 'test', 'test', '2014-12-17 15:25:37', 'test', 'test', 'test'),
(6, 'test', 'test', '2014-12-17 15:25:44', 'test', 'test', 'test'),
(7, 'raz', 'raz', '2014-12-17 19:17:51', 'raz', 'raz', 'raz'),
(8, '14124', 'bez', '2014-12-17 19:17:58', '1212', '1221', '44'),
(9, 'mynewtest', 'moqtaparola', '2014-12-17 19:22:52', 'moqtemail', 'imeto', 'posledno');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `albums`
--
ALTER TABLE `albums`
  ADD PRIMARY KEY (`album_id`), ADD UNIQUE KEY `id` (`album_id`), ADD UNIQUE KEY `id_2` (`album_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`), ADD KEY `picture_id` (`picture_id`);

--
-- Indexes for table `pictures`
--
ALTER TABLE `pictures`
  ADD PRIMARY KEY (`picture_id`), ADD KEY `album_id` (`album_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `albums`
--
ALTER TABLE `albums`
  MODIFY `album_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT for table `pictures`
--
ALTER TABLE `pictures`
  MODIFY `picture_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;