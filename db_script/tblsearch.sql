-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 27, 2020 at 10:13 PM
-- Server version: 5.6.49-cll-lve
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbluv`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblsearch`
--

CREATE TABLE `tblsearch` (
  `ID` int(11) NOT NULL,
  `ADDED DATE` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `SEARCH` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblsearch`
--

INSERT INTO `tblsearch` (`ID`, `ADDED DATE`, `SEARCH`) VALUES
(1, '2020-09-27 04:38:17', '{\"fromage\":\"18\",\"toage\":\"70\",\"fromheight\":\"\",\"toheight\":\"\",\"religion\":\"\",\"caste\":\"\",\"country\":\"\",\"state\":\"\",\"annual_income1\":\"\",\"annual_income2\":\"\",\"wedding_budget1\":\"\",\"wedding_budget2\":\"\",\"open_for_divorce\":\"\",\"open_for_outside_india\":\"\",\"marital_status\":\"\",\"photo\":\"\",\"manglik\":\"\",\"believes_in_horoscope\":\"\",\"education_qualification\":\"\",\"occupation\":\"\",\"from_premium_institute\":\"\",\"residential_type\":\"\",\"affluence_level\":\"\",\"family_income1\":\"\",\"family_income2\":\"\",\"family_type\":\"\",\"willing_to_stay\":\"\",\"net_worth1\":\"\",\"net_worth2\":\"\",\"food_habits\":\"\",\"drink\":\"\",\"smoke\":\"\",\"looks\":\"\",\"body_type\":\"\",\"communication\":\"\",\"complexion\":\"\"}');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblsearch`
--
ALTER TABLE `tblsearch`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblsearch`
--
ALTER TABLE `tblsearch`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
