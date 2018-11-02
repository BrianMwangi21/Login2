-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 31, 2018 at 05:43 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `the_maverick`
--

-- --------------------------------------------------------

--
-- Table structure for table `acting_category`
--

CREATE TABLE `acting_category` (
  `Category_Id` int(12) NOT NULL,
  `Category_Name` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jobinfo`
--

CREATE TABLE `jobinfo` (
  `jobid` int(11) NOT NULL,
  `joboffered` varchar(1000) NOT NULL,
  `jobdetails` varchar(1000) NOT NULL,
  `contacts` varchar(1000) NOT NULL,
  `dateposted` varchar(1000) NOT NULL,
  `appliedby` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobinfo`
--

INSERT INTO `jobinfo` (`jobid`, `joboffered`, `jobdetails`, `contacts`, `dateposted`, `appliedby`) VALUES
(1, 'Nelson Mandela BioPick', 'Act as Nelson Mandela', '0716592266', '2018-10-29', ''),
(2, 'Pacific Rim 3', 'Act as the villain', '0716592266', '2018-10-29', 'Brian Mwangi'),
(3, 'Hotel Transylvania 4', 'Act as the godfather', '0725617627', '2018-10-22', 'Angie Makhanu'),
(4, 'The Spy Who Dumped Me Sequal', 'Act as the assistant spy', '0716592266', '2018-10-31', ''),
(5, 'Megan : The Start', 'Act as Megan', '0722304186', '2018-10-31', '');

-- --------------------------------------------------------

--
-- Table structure for table `people_info`
--

CREATE TABLE `people_info` (
  `people_info` int(12) NOT NULL,
  `user_Id` int(12) NOT NULL,
  `Background_Information` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `people_info`
--

INSERT INTO `people_info` (`people_info`, `user_Id`, `Background_Information`) VALUES
(1, 10, '<h1><strong>Title</strong></h1>\r\n\r\n<p>184 Several good answers here, but does it strike anyone as utterly ridiculous that PHP can&#39;t simply return the full contents of the URL bar as one string? &ndash; Brade Oct 14 &#39;13 at 20:44 23 @Brade URL bar is on the user browser, so why would PHP have any functionalities regarding that? PHP is server side. &ndash; eis Oct 19 &#39;13 at 11:53 25 @eis Believe me, there&#39;s plenty of reasons to want this. Landing pages that use the same template but need to be tracked separately, etc.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<blockquote>\r\n<p><a href=\"http://elearning.strathmore.edu\" target=\"_blank\">Experience</a></p>\r\n</blockquote>\r\n\r\n<p>And the fact is that PHP (or any server side lang) can return all the various parts of the URL, but never seem to provide the whole thing in one string. It just seems dumb. &ndash; Brade Oct 29 &#39;13 at 19:14 12 Whole thing is never sent to server side as it shouldn&#39;t matter, which is the reason it&#39;s not readily available anywhere. I would regard any functionality relying on that broken. But, that&#39;s just my opinion. &ndash; eis Oct 29 &#39;13 at 20:31 5 My example above for the need of a self URL: &quot;filling FORM action URLs&quot; may be wrong, as PHP_SELF (path only, sans domain etc.) should be enough for that. But it doesn&#39;t necessarily mean that all other needs for the canonical self URL are invalid. If they indeed are, it would be awesome to see a thorough explanation, why. &ndash; Sz. Dec 7 &#39;13 at 12:58</p>\r\n'),
(2, 11, NULL),
(3, 12, NULL),
(4, 13, NULL),
(5, 14, NULL),
(6, 15, NULL),
(7, 16, NULL),
(8, 17, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `region`
--

CREATE TABLE `region` (
  `Region_Id` int(12) NOT NULL,
  `Region_Name` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `FirstName` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `UserType` text NOT NULL,
  `user_Id` int(12) NOT NULL,
  `Password` varchar(60) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `Contacts` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`FirstName`, `Email`, `UserType`, `user_Id`, `Password`, `LastName`, `Contacts`) VALUES
('Miquel', 'wakubwamiquel@gmail.com', 'actor', 4, 'affa3a5e1e7a2215ad2b1a452a09dae1', 'Wakubwa ', '0715927936'),
('june', 'jkatunge13@gmail.com', 'actor', 3, 'june1234', 'katunge', '3456789'),
('Ayla', 'aylajones@gmail.com', 'sponsor', 5, 'jones41ay', 'Jones', '0712345678'),
('Eva', 'mindueva@gmail.com', 'producer', 6, '123456t', 'Mindu', '0798123456'),
('abuja', 'abuja@gmail.com', 'actor', 7, 'f86089edd8a440fb72b91f0d05a291f2', 'deh', '07364676326'),
('aj', 'aj@test.com', 'actor', 8, 'dd0deb09921442368e5a31b10da82005', 'khalil', '0702987866'),
('stella', 'stellamuigai.sm@gmail.com', 'actor', 9, '2c946c0178ec72aaefa54f786540d301', 'muigai', '0724210700'),
('samuel', 'musakasamuel@gmail.com', 'actor', 10, '81dc9bdb52d04dc20036dbd8313ed055', 'musaka', '0733770876'),
('Brian', 'mwangibrian8@gmail.com', 'actor', 16, 'b8cc395d2609b23df7a476a221a74f21', 'Mwangi', '0716592266'),
('Jeff', 'jeffnganga@gmail.com', 'producer', 12, 'ce50340f51f10ceb1ac16c9c4de4f5fa', 'Nganga', '0716592266'),
('Paul', 'paulpaul@gmail.com', 'sponsor', 13, 'd42ab9ef9f331d0c5835e2b173553c50', 'Paul', '0716592266'),
('Lil', 'lilwayne@gmail.com', 'producer', 14, 'bfd019f82aeee1fd16a72857f7f9c297', 'Wayne', '0716592266'),
('Angie', 'angela@gmail.com', 'actor', 17, '413440ec45185b7aa6af1d5cc7007397', 'Makhanu', '0725617627');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acting_category`
--
ALTER TABLE `acting_category`
  ADD PRIMARY KEY (`Category_Id`);

--
-- Indexes for table `jobinfo`
--
ALTER TABLE `jobinfo`
  ADD PRIMARY KEY (`jobid`);

--
-- Indexes for table `people_info`
--
ALTER TABLE `people_info`
  ADD PRIMARY KEY (`people_info`);

--
-- Indexes for table `region`
--
ALTER TABLE `region`
  ADD PRIMARY KEY (`Region_Id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acting_category`
--
ALTER TABLE `acting_category`
  MODIFY `Category_Id` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobinfo`
--
ALTER TABLE `jobinfo`
  MODIFY `jobid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `people_info`
--
ALTER TABLE `people_info`
  MODIFY `people_info` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `region`
--
ALTER TABLE `region`
  MODIFY `Region_Id` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_Id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
