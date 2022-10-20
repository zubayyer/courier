-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2022 at 09:05 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `courier`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutus`
--

CREATE TABLE `aboutus` (
  `Id` int(11) NOT NULL,
  `Discription` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aboutus`
--

INSERT INTO `aboutus` (`Id`, `Discription`) VALUES
(1, 'Our most precious asset  has been gifted to us by the people of Pakistan as an expression of their affection and TRUST.\r\n\r\nIt is by delivering on this trust every single day, come rain or shine, over the past four decades that we have become the country’s logistics backbone delivering an array of services to businesses and consumers alike.\r\n\r\nWe now pledge to add greater value to our services through a blend of passion and new technologies aimed at enhancing productivity of our clients, whilst s');

-- --------------------------------------------------------

--
-- Table structure for table `agentdata`
--

CREATE TABLE `agentdata` (
  `Id` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Area` varchar(255) NOT NULL,
  `Phone` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `agentdata`
--

INSERT INTO `agentdata` (`Id`, `Name`, `Email`, `Password`, `Area`, `Phone`) VALUES
(1, 'Emmad', 'emmad@gmail.com', '12345', '', ''),
(3, 'Emmad', 'emmad@gmail.com', '1234', '', ''),
(4, 'zbr', 'zbr1@gmail.com', '123', '', ''),
(5, 'zbrr', 'zbrr@gmail.com', '123', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `Id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Area` varchar(255) NOT NULL,
  `Status` varchar(30) NOT NULL DEFAULT 'Close'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`Id`, `Name`, `Area`, `Status`) VALUES
(2, 'branch 2', '                       NN2 karachi                                                                  ', 'Open');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `Id` int(11) NOT NULL,
  `Name` varchar(55) NOT NULL,
  `Email` varchar(55) NOT NULL,
  `Message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`Id`, `Name`, `Email`, `Message`) VALUES
(9, 'jawad', 'jwd@gmail.com', 'Heyy!'),
(10, 'jawad', 'jwd@gmail.com', 'Heyy!'),
(11, 'jawad', 'jwd@gmail.com', 'Heyy!'),
(12, 'jawad', 'jwd@gmail.com', 'hello'),
(13, 'jawad', 'jwd@gmail.com', 'hey hello');

-- --------------------------------------------------------

--
-- Table structure for table `courier`
--

CREATE TABLE `courier` (
  `Id` varchar(255) NOT NULL,
  `Item` varchar(255) NOT NULL,
  `Type` int(11) NOT NULL,
  `Sender` varchar(50) NOT NULL,
  `SenderAddress` varchar(255) NOT NULL,
  `SenderPhone` int(30) NOT NULL,
  `Reciever` varchar(50) NOT NULL,
  `RecieverEmail` varchar(30) NOT NULL,
  `RecieverAddress` varchar(255) NOT NULL,
  `RecieverPhone` varchar(50) NOT NULL,
  `SendDate` varchar(20) NOT NULL DEFAULT current_timestamp(),
  `DeliveryDate` varchar(50) NOT NULL,
  `Amount` int(11) NOT NULL,
  `desiredDate` varchar(20) NOT NULL DEFAULT 'No'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courier`
--

INSERT INTO `courier` (`Id`, `Item`, `Type`, `Sender`, `SenderAddress`, `SenderPhone`, `Reciever`, `RecieverEmail`, `RecieverAddress`, `RecieverPhone`, `SendDate`, `DeliveryDate`, `Amount`, `desiredDate`) VALUES
('ord:23142xx', 'books', 5, 'Emmad', 'Golimaaar KHI', 35363363, 'fahad', 'fhd@gmail.com', 'Baldia No.9 KHI ', '0312454898', '2022-10-17 23:54:33', '2022-10-21', 33000, '2022-10-20'),
('ord:23494xx', 'courier', 5, 'Emmad', 'Golimaaar KHI', 312455678, 'Haris', 'emmad@gmail.com', 'gorumandar', '03165425458', '2022-10-18 00:03:23', '2023-12-12', 132000, '2023-12-11'),
('ord:27047xx', 'boots', 2, 'sads', 'golimar', 31255, 'hars', 'haris@gmail.com', 'fhk', '031261545', '2022-10-13 19:10:37', '2022-10-23', 9000, '2022-10-15'),
('ord:31292xx', 'aaaa', 5, 'dh', 'fdaaaaaaaaaaaaaaaaaaaaaa', 36565465, 'emmad', 'admin@gmail.com', 'asdf', '0312454898', '2022-10-13 19:47:02', '2022-09-27', 44000, '2022-10-18'),
('ord:42765xx', 'clothes', 2, 'haris', 'sadar', 312455678, 'fahad', 'fhd@gmail.com', 'golimar', '031255', '2022-10-13 19:01:45', '2022-10-21', 4500, '2022-10-23'),
('ord:46071xx', 'clothes', 5, 'Emmad', 'Golimaaar KHI', 312455678, 'fahad', 'zbr@gmail.com', 'golimar', '0312454898', '2022-10-13 19:15:46', '2022-10-22', 77000, '2022-10-19'),
('ord:50199xx', 'clothes', 2, 'Emmad', 'Golimaaar KHI', 312455678, 'Jawad', 'jwd@gmail.com', 'Purana Golimaar KHI', '03124565794', '2022-10-12 20:07:18', '2022-10-21', 10500, '2022-10-28'),
('ord:61004xx', 'samaan', 2, 'omair', 'omair@gmail.com', 2147483647, 'obaid', 'obaid@gmail.com', 'Kht Kpk ', '0316245851', '2022-10-12 18:38:01', '2022-10-15', 6000, '2022-10-26'),
('ord:61565xx', 'goods', 5, 'Fahad', 'Baldia no.9 KHI', 2147483647, 'Haris', 'hrs@gmail.com', 'Guromandar KHI', '03152465124', '2022-10-12 20:10:00', '2022-11-25', 55000, '2022-11-24'),
('ord:70046xx', 'clothes', 6, 'Emmad', 'Golimaaar KHI', 312455678, 'emmad', 'emmad@gmail.com', 'golimar', '03215458', '2022-10-13 19:22:00', '2022-10-15', 15000, '2022-10-21'),
('ord:72591xx', 'clothes', 5, 'Emmad', 'Golimaaar KHI', 35363363, 'emmad', 'ww657483@gmail.com', 'golimar', '031255', '2022-10-13 19:38:53', '2022-10-19', 55000, '2022-10-21'),
('ord:74527xx', 'books', 5, 'fahad', 'baldia', 312455678, 'haris', 'haris@gmail.com', 'sadar', '0312585545', '2022-10-13 18:51:23', '2022-10-14', 22000, '2022-10-21'),
('ord:86693xx', 'toys', 2, 'Danish', 'Sarjani KHI', 2147483647, 'Haris', 'hrs@gmail.com', 'sadar', '03162548765', '2022-10-18 00:01:02', '2022-10-13', 13500, '2022-10-12'),
('ord:97307xx', 'clothes', 6, 'Shaheer', 'NN KHI', 36565465, 'Jawad', 'jwd@gmail.com', 'golimar', '0312454898', '2022-10-17 23:56:19', '2022-10-23', 15000, '2022-10-19');

-- --------------------------------------------------------

--
-- Table structure for table `couriertype`
--

CREATE TABLE `couriertype` (
  `Id` int(11) NOT NULL,
  `Type` varchar(30) NOT NULL,
  `Discription` varchar(255) NOT NULL,
  `Amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `couriertype`
--

INSERT INTO `couriertype` (`Id`, `Type`, `Discription`, `Amount`) VALUES
(2, 'fast delivery', 'delivery within 24 hours', 1500),
(5, 'premium', 'delivery whithin a week', 11000),
(6, 'Luxury', 'safe and fast delivery ', 2500);

-- --------------------------------------------------------

--
-- Table structure for table `orderstatus`
--

CREATE TABLE `orderstatus` (
  `Id` int(11) NOT NULL,
  `Courier_Id` varchar(30) NOT NULL,
  `Status` varchar(255) NOT NULL DEFAULT 'Recieved',
  `Date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orderstatus`
--

INSERT INTO `orderstatus` (`Id`, `Courier_Id`, `Status`, `Date`) VALUES
(23, '', '', ''),
(25, 'ord:23142xx', 'Recieved', '17/10/2022'),
(26, 'ord:97307xx', 'Recieved', '17/10/2022'),
(27, 'ord:86693xx', 'Recieved', '17/10/2022'),
(28, 'ord:23494xx', 'Recieved', '17/10/2022');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `Id` int(11) NOT NULL,
  `Question` varchar(500) NOT NULL,
  `Answer` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`Id`, `Question`, `Answer`) VALUES
(1, 'Do I need to have an account to shop with you?', 'No, but setting up an account will allow you to order without having to enter your details every time you shop with us, making your shopping experience seamless.'),
(2, 'Can I cancel my order?', 'A cancellation request depends on the status of the order. If your order has been shipped, it cannot be cancelled. We aim to ship your order as soon as possible so please take extra care when selecting your items.'),
(3, 'How can I check the status of my order?', 'You can visit the Order history after logging in to your account to check your current order status as well as your previous order history.');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `Id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Phone` varchar(30) NOT NULL,
  `CNIC` varchar(50) NOT NULL,
  `Role` varchar(20) NOT NULL DEFAULT 'Agent',
  `Branch` int(11) NOT NULL,
  `Image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`Id`, `Name`, `Email`, `Password`, `Address`, `Phone`, `CNIC`, `Role`, `Branch`, `Image`) VALUES
(1, 'Zbr', 'zbr@gmail.com', '124', 'SITE KHI', '03129988225', '14302 45154516 5', 'Admin', 1, 'Image/IMG-20121202-01720_002.jpg'),
(12, 'Zubair', 'zubair@gmail.com', '125', 'Kohat Kpk', '03125469854', '14302 54465654 4', 'Agent', 0, 'Image/DSC_0088.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Id` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Id`, `Name`, `Email`, `Password`) VALUES
(1, 'jawad', 'jwd@gmail.com', '125');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutus`
--
ALTER TABLE `aboutus`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `agentdata`
--
ALTER TABLE `agentdata`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `courier`
--
ALTER TABLE `courier`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `SenderId` (`Sender`),
  ADD KEY `Type` (`Type`);

--
-- Indexes for table `couriertype`
--
ALTER TABLE `couriertype`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `orderstatus`
--
ALTER TABLE `orderstatus`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutus`
--
ALTER TABLE `aboutus`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `agentdata`
--
ALTER TABLE `agentdata`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `branch`
--
ALTER TABLE `branch`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `couriertype`
--
ALTER TABLE `couriertype`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `orderstatus`
--
ALTER TABLE `orderstatus`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `courier`
--
ALTER TABLE `courier`
  ADD CONSTRAINT `courier_ibfk_2` FOREIGN KEY (`Type`) REFERENCES `couriertype` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
