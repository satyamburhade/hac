-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 13, 2019 at 08:36 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `helpinghand`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `Id` int(11) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `donar_registration`
--

CREATE TABLE `donar_registration` (
  `Id` int(11) NOT NULL,
  `Date` varchar(100) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Address` varchar(300) NOT NULL,
  `Contact` bigint(11) NOT NULL,
  `Pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donar_registration`
--

INSERT INTO `donar_registration` (`Id`, `Date`, `Name`, `Email`, `Address`, `Contact`, `Pass`) VALUES
(1, '29/01/2019', 'Pushkar Gavraskar', 'pushkar@gmail.com', '										Beed By Pass road ,Aurangabad 431001																	', 9673104938, '1122'),
(2, '29/01/2019', 'Dhiraj Avasthi', 'dhiraj@gmail.com', '					H.no.C 48/2,sangharsh nager,mukundwadi,aurangabad				', 8208823664, '1122'),
(3, '29/01/2019', 'Ajay Nagre', 'ajay@gmail.com', 'Aurangpura,Aurangabad 431001									', 7331496350, '1122'),
(4, '01/02/2019', 'psg', 'sunilgathadi786@gmail.com', 'H.no.C 48/2,sangharsh nager,mukundwadi,aurangabad', 9503878451, 'psg12345'),
(5, '04/02/2019', 'nayan Kasliwal', 'nayan@gmail.com', 'Gandhi putla,aurangabad									', 840896569, '1122');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `Id` int(11) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Contact` bigint(11) NOT NULL,
  `Description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`Id`, `Email`, `Contact`, `Description`) VALUES
(1, 'pushkar@gmail.com', 2147483647, 'qqqqqqqqwwwwwwwwwwwssssssssssssssss					'),
(2, 'vishal@gmail.com', 7896501234, 'Powerful website.!					'),
(3, 'prathamesh@gmail.com', 98745632586, 'This Is very good work to donate needy peoples.					'),
(4, 'dhiraj@gmail.com', 8208823664, 'sredghtsdj					');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `Id` int(11) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Date` varchar(50) NOT NULL,
  `Type` varchar(50) NOT NULL,
  `Descri` varchar(500) NOT NULL,
  `Pcondition` varchar(50) NOT NULL,
  `Pimgpath` varchar(200) NOT NULL,
  `Pickupdate` varchar(100) DEFAULT NULL,
  `Pickuptime` varchar(20) DEFAULT NULL,
  `Pickupstatus` varchar(100) DEFAULT NULL,
  `Dimgpath` varchar(200) DEFAULT NULL,
  `Ddate` varchar(100) DEFAULT NULL,
  `Dstatus` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`Id`, `Email`, `Date`, `Type`, `Descri`, `Pcondition`, `Pimgpath`, `Pickupdate`, `Pickuptime`, `Pickupstatus`, `Dimgpath`, `Ddate`, `Dstatus`) VALUES
(17, 'pushkar@gmail.com', '04/02/2019', 'Books', 'school 				 				\r\n				', 'Very Good', 'files/17.jpg', '10/02/2019', '10 AM - 05PM ', 'Collected ', 'files1/17.jpg', '11/02/2019', 'Donated'),
(18, 'dhiraj@gmail.com', '04/02/2019', 'Clothes', 'blanket			 				\r\n				', 'Very Good', 'files/18.jpg', '22/01/2019', '10 AM - 05 PM ', 'Collected ', 'files1/18.jpg', '03/02/2019', 'Donated'),
(19, 'dhiraj@gmail.com', '04/02/2019', 'Bags', 'School bag				 				\r\n				', 'Good', 'files/19.jpg', NULL, NULL, NULL, NULL, NULL, NULL),
(20, 'dhiraj@gmail.com', '04/02/2019', 'Watches', 'it is lucky watch		 				\r\n				', 'Good', 'files/20.jpg', '23/01/2019', '10 AM - 05 PM ', 'Collected ', 'files1/20.jpg', '04/02/2019', 'Donated'),
(21, 'nayan@gmail.com', '04/02/2019', 'Books', '				 gfood for graduation				\r\n				', 'Average', 'files/21.jpg', '20/02/2019', '10 AM - 05 PM ', 'Collected ', 'files1/21.jpg', '01/03/2019', 'Donated'),
(22, 'ajay@gmail.com', '04/02/2019', 'Bags', 'School Bags for childrens				\r\n				', 'Very Good', 'files/22.jpg', '06/02/2019', '10 AM - 01 PM ', 'Collected ', 'files1/22.jpg', '01/03/2019', 'Donated'),
(23, 'ajay@gmail.com', '10/02/2019', 'Books', 'adsarfser				 				\r\n				', 'Good', 'files/23.jpg', '28/01/2019', '10 AM - 05PM ', 'Collected ', 'files1/23.jpg', '03/02/2019', 'Donated');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `donar_registration`
--
ALTER TABLE `donar_registration`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `donar_registration`
--
ALTER TABLE `donar_registration`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
