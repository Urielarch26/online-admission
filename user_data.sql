-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2023 at 10:53 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `accounts`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_data`
--

CREATE TABLE `user_data` (
  `ID` int(11) NOT NULL,
  `SchoolYear` varchar(12) NOT NULL,
  `GradeLevelEnrollingFor` varchar(2) NOT NULL,
  `PSA` int(10) NOT NULL,
  `Strand` varchar(255) NOT NULL,
  `LRN` int(12) NOT NULL,
  `LastName` varchar(55) NOT NULL,
  `FirstName` varchar(55) NOT NULL,
  `MiddleName` varchar(55) NOT NULL,
  `Extension` varchar(55) NOT NULL,
  `BirthDate` date NOT NULL,
  `BirthPlace` varchar(255) NOT NULL,
  `Sex` varchar(10) NOT NULL,
  `Age` int(2) NOT NULL,
  `Mothertongue` varchar(55) NOT NULL,
  `IP` varchar(55) NOT NULL,
  `FourP` varchar(55) NOT NULL,
  `Email` varchar(55) NOT NULL,
  `HouseNumberStreet` varchar(55) NOT NULL,
  `StreetName` varchar(55) NOT NULL,
  `Barangay` varchar(55) NOT NULL,
  `MunicipalityCity` varchar(55) NOT NULL,
  `Province` varchar(55) NOT NULL,
  `Country` varchar(55) NOT NULL,
  `ZipCode` varchar(55) NOT NULL,
  `FatherLastName` varchar(55) NOT NULL,
  `FatherFirstName` varchar(55) NOT NULL,
  `FatherMiddleName` varchar(55) NOT NULL,
  `FatherContactNumber` varchar(55) NOT NULL,
  `MotherLastName` varchar(55) NOT NULL,
  `MotherFirstName` varchar(55) NOT NULL,
  `MotherMiddleName` varchar(55) NOT NULL,
  `MotherContactNumber` varchar(55) NOT NULL,
  `GuardianLastName` varchar(55) NOT NULL,
  `GuardianFirstName` varchar(55) NOT NULL,
  `GuardianMiddleName` varchar(55) NOT NULL,
  `GuardianContactNumber` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_data`
--

INSERT INTO `user_data` (`ID`, `SchoolYear`, `GradeLevelEnrollingFor`, `PSA`, `Strand`, `LRN`, `LastName`, `FirstName`, `MiddleName`, `Extension`, `BirthDate`, `BirthPlace`, `Sex`, `Age`, `Mothertongue`, `IP`, `FourP`, `Email`, `HouseNumberStreet`, `StreetName`, `Barangay`, `MunicipalityCity`, `Province`, `Country`, `ZipCode`, `FatherLastName`, `FatherFirstName`, `FatherMiddleName`, `FatherContactNumber`, `MotherLastName`, `MotherFirstName`, `MotherMiddleName`, `MotherContactNumber`, `GuardianLastName`, `GuardianFirstName`, `GuardianMiddleName`, `GuardianContactNumber`) VALUES
(34, '2023-2024', '12', 2147483647, '', 2147483647, 'Senoc', 'Mavi Den Geadrell', 'Montaniel', 'JR', '2004-12-07', 'Marikina', 'Male', 18, 'Tagalog', 'N/A', '123012301203', 'Mavisenoc@gnmnail.com', 'Blk 3 lot 25', 'Avatext', 'San Jose', 'Rodriguez', 'Rizal', 'Philippines', '1860', 'Senoc', 'Rheden', 'Batingal', '09150648688', 'Senoc', 'Gemmarica', 'Montaniel', '09308687999', 'Talde', 'April', 'Jhane', '09150648698'),
(41, '2023-2024', '11', 0, '', 2147483647, 'BETAIZAR', 'JOHN PAUL', 'FRANCISCO', 'N/A', '2004-04-06', 'MONTALBAN', 'MALE', 18, 'TAGALOG', 'N/A', '0', 'johnpaulbetaizar@gmail.com', 'SITIO MAISLAP', 'CATALINO COMPOUND', 'SAN ISIDRO', 'RODRIGUEZ', 'RIZAL', 'PHILIPPINES', '1860', 'BETAIZAR', 'JESSIE', 'MONTER', '280982073', 'BETAIZAR', 'MARY JEAN', 'FRANCISCO', '21309252049', 'BETAIZAR', 'MARY JEAN', 'FRANCISCO', '12192102819'),
(47, '', '', 0, '', 0, '', '', '', '', '0000-00-00', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(48, '', '', 0, '', 0, '', '', '', '', '0000-00-00', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(49, '', '', 0, '', 0, '', '', '', '', '0000-00-00', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(50, '2023-2024', '12', 2147483647, 'TVL _ ICT', 2147483647, 'Senoc', 'Mavi', 'Den Gaedrell M', 'JR', '2004-07-19', 'Marikina', 'Male', 18, 'Tagalog', 'Igorot', '123123123123', 'Mavisenoc@gmail.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(51, '', '', 0, '', 0, '', '', '', '', '0000-00-00', '', '', 0, '', '', '', '', 'Med Heights Phase 2 Blk 3 Lot 25', 'Med Heights Phase 2 Blk 3 Lot 25', 'San Jose', 'Montalban Rizal', 'Rodriguez', 'Philippines', '1860', '', '', '', '', '', '', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_data`
--
ALTER TABLE `user_data`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_data`
--
ALTER TABLE `user_data`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
