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
-- Table structure for table `tblprofiles`
--

CREATE TABLE `tblprofiles` (
  `ID` int(11) NOT NULL,
  `Data Taken From` varchar(30) DEFAULT NULL,
  `Subscription Type` varchar(100) DEFAULT NULL,
  `PID` varchar(20) NOT NULL,
  `FIRST NAME` varchar(50) DEFAULT NULL,
  `LAST NAME` varchar(50) DEFAULT NULL,
  `GENDER` varchar(10) NOT NULL,
  `HAS CHILDREN` varchar(50) DEFAULT NULL,
  `DOB` date NOT NULL,
  `BIRTH PLACE` varchar(150) DEFAULT NULL,
  `BIRTH TIME` time DEFAULT NULL,
  `MANGLIK` varchar(150) DEFAULT NULL,
  `BELIEVES IN HOROSCOPE` varchar(50) NOT NULL,
  `GOTRA` varchar(150) DEFAULT NULL,
  `MARITAL STATUS` varchar(20) NOT NULL,
  `HEIGHT` varchar(50) DEFAULT NULL,
  `HEIGHT VALUE` float NOT NULL,
  `BODY TYPE` varchar(100) DEFAULT NULL,
  `EDUCATION` varchar(150) NOT NULL,
  `COLLEGE` varchar(150) DEFAULT NULL,
  `COUNTRY OF RESIDENCE` varchar(100) DEFAULT NULL,
  `STATE OF RESIDENCE` varchar(100) DEFAULT NULL,
  `CITY` varchar(100) NOT NULL,
  `MOTHER TONGUE` varchar(50) NOT NULL,
  `FOOD HABITS` varchar(50) DEFAULT NULL,
  `DRINK` varchar(50) DEFAULT NULL,
  `SMOKE` varchar(50) DEFAULT NULL,
  `RELIGION` varchar(50) NOT NULL,
  `CASTE` varchar(50) NOT NULL,
  `SUB CASTE` varchar(50) DEFAULT NULL,
  `COMPLEXION` varchar(100) DEFAULT NULL,
  `WEIGHT` int(11) DEFAULT NULL,
  `EMPLOYED AS` varchar(100) DEFAULT NULL,
  `EMPLOYED WITH` varchar(100) DEFAULT NULL,
  `ANNUAL INCOME` varchar(50) DEFAULT NULL,
  `ANNUAL INCOME2` varchar(50) DEFAULT NULL,
  `ANNUAL INCOME VALUE` float NOT NULL,
  `ANNUAL INCOME2 VALUE` float NOT NULL,
  `ABOUT` text,
  `FATHER IS` varchar(150) DEFAULT NULL,
  `MOTHER IS` varchar(150) DEFAULT NULL,
  `FATHER NAME` varchar(100) NOT NULL,
  `MOTHER NAME` varchar(100) NOT NULL,
  `FAMILY VALUE` varchar(150) DEFAULT NULL,
  `AFFLUENCE LEVEL` varchar(50) DEFAULT NULL,
  `NATIVE COUNTRY` varchar(50) DEFAULT NULL,
  `NATIVE STATE` varchar(50) DEFAULT NULL,
  `UNMARRIED SISTERS` varchar(10) DEFAULT NULL,
  `MARRIED SISTERS` varchar(50) DEFAULT NULL,
  `UNMARRIED BROTHERS` varchar(50) DEFAULT NULL,
  `MARRIED BROTHERS` varchar(50) DEFAULT NULL,
  `CRIMINAL RECORD` varchar(150) DEFAULT NULL,
  `SPECIAL CASE` varchar(150) DEFAULT NULL,
  `PP SMOKER` varchar(150) DEFAULT NULL,
  `PP DRINKER` varchar(150) DEFAULT NULL,
  `PP VEG/NON VEG` varchar(150) DEFAULT NULL,
  `PP FROMAGE` int(11) DEFAULT NULL,
  `PP TOAGE` int(11) DEFAULT NULL,
  `PP CASTE` varchar(150) DEFAULT NULL,
  `PP EDUCATION QUALIFICATION` varchar(150) DEFAULT NULL,
  `PP MIN HEIGHT` varchar(50) DEFAULT NULL,
  `PP MAX HEIGHT` varchar(50) DEFAULT NULL,
  `PP MIN HEIGHT VALUE` float NOT NULL,
  `PP MAX HEIGHT VALUE` float NOT NULL,
  `PP MOTHER TONGUE` varchar(150) DEFAULT NULL,
  `PP RELIGION` varchar(150) DEFAULT NULL,
  `PP MANGLIK` varchar(150) DEFAULT NULL,
  `PP INCOME` varchar(150) DEFAULT NULL,
  `PP INCOME2` varchar(50) DEFAULT NULL,
  `PP INCOME VALUE` float NOT NULL,
  `PP INCOME2 VALUE` float NOT NULL,
  `PP BODY TYPE` varchar(150) DEFAULT NULL,
  `PP CHALLENGED` varchar(150) DEFAULT NULL,
  `PP MARITAL STATUS` varchar(150) DEFAULT NULL,
  `PP COUNTRY` varchar(150) DEFAULT NULL,
  `PP STATE` varchar(500) DEFAULT NULL,
  `PP HAVE CHILDREN` varchar(150) DEFAULT NULL,
  `PHOTO URL` varchar(250) DEFAULT NULL,
  `EMAIL` varchar(150) DEFAULT NULL,
  `PHONE` varchar(20) DEFAULT NULL,
  `ADDED DATE` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ADDED BY` varchar(150) NOT NULL,
  `HOUSE` varchar(100) DEFAULT NULL,
  `ADDRESS` varchar(500) DEFAULT NULL,
  `SQUARE YARDS` int(11) DEFAULT NULL,
  `HAIR TYPE` varchar(50) DEFAULT NULL,
  `LOOKS` varchar(50) DEFAULT NULL,
  `SPECS` varchar(100) DEFAULT NULL,
  `NET WORTH` bigint(20) DEFAULT NULL,
  `INDUSTRY TYPE` varchar(100) DEFAULT NULL,
  `COMPANY NAME` varchar(100) DEFAULT NULL,
  `AADHAR VERIFIED` varchar(10) DEFAULT NULL,
  `MOBILE VERIFIED` varchar(10) DEFAULT NULL,
  `EMAILID VERIFIED` varchar(10) DEFAULT NULL,
  `AADHAR PROOF` varchar(100) DEFAULT NULL,
  `REGISTRATION FEE` int(11) DEFAULT NULL,
  `MEETING FEE` int(11) DEFAULT NULL,
  `ROKA CHARGE` int(11) DEFAULT NULL,
  `WEEKLY PROFILE` varchar(10) DEFAULT NULL,
  `DURATION` varchar(50) DEFAULT NULL,
  `PACKAGE TYPE` varchar(50) DEFAULT NULL,
  `SOLD BY` varchar(50) DEFAULT NULL,
  `MEETING FINALISED BY` varchar(50) DEFAULT NULL,
  `Meeting Type` varchar(50) DEFAULT NULL,
  `MEETING DATE` date DEFAULT NULL,
  `MEETING TIME` time DEFAULT NULL,
  `MEETING PLACE` varchar(100) DEFAULT NULL,
  `MEETING LVM ID` varchar(50) DEFAULT NULL,
  `CLIENT TYPE` varchar(50) DEFAULT NULL,
  `SCHOOL NAME` text,
  `UG` text,
  `PG` text,
  `UG COLLEGE` text,
  `PG COLLEGE` text,
  `FAMILY BASED OUT OF` text,
  `EMPLOYED IN` text,
  `FAMILY INCOME` text,
  `FAMILY INCOME2` varchar(50) DEFAULT NULL,
  `FAMILY INCOME VALUE` float NOT NULL,
  `FAMILY INCOME2 VALUE` float NOT NULL,
  `FAMILY TYPE` varchar(50) DEFAULT NULL,
  `ABOUT FAMILY` text,
  `PP EMPLOYED AS` text,
  `PP About Partner` text,
  `Residential Status` varchar(250) CHARACTER SET utf8 DEFAULT NULL,
  `Property Details` varchar(250) CHARACTER SET utf8 DEFAULT NULL,
  `Vehicles` varchar(250) CHARACTER SET utf8 DEFAULT NULL,
  `Star` varchar(250) CHARACTER SET utf8 DEFAULT NULL,
  `Rassi` varchar(250) CHARACTER SET utf8 DEFAULT NULL,
  `Alternate Phone` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `Whatsapp Number` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `Permanent Address` varchar(250) CHARACTER SET utf8 DEFAULT NULL,
  `Instagram Id` varchar(250) CHARACTER SET utf8 DEFAULT NULL,
  `Facebook Id` varchar(250) CHARACTER SET utf8 DEFAULT NULL,
  `Linkedin Id` varchar(250) CHARACTER SET utf8 DEFAULT NULL,
  `Communication` varchar(250) CHARACTER SET utf8 DEFAULT NULL,
  `PP Complexion` varchar(250) CHARACTER SET utf8 DEFAULT NULL,
  `PP Cant Get Married To` varchar(250) CHARACTER SET utf8 DEFAULT NULL,
  `Last Calling Date` date DEFAULT NULL,
  `Calling for` varchar(50) DEFAULT NULL,
  `Calling Status` varchar(250) CHARACTER SET utf8 DEFAULT NULL,
  `Calling Comments` varchar(250) CHARACTER SET utf8 DEFAULT NULL,
  `Profile Shortlisted For` varchar(250) CHARACTER SET utf8 DEFAULT NULL,
  `Response Shared Profile` varchar(250) CHARACTER SET utf8 DEFAULT NULL,
  `Lead Date` date DEFAULT NULL,
  `Lead Status` varchar(50) DEFAULT NULL,
  `Lead Follow Up` date DEFAULT NULL,
  `Lead Follow Up Time` time DEFAULT NULL,
  `Lead Comment` varchar(250) CHARACTER SET utf8 DEFAULT NULL,
  `Lead Shared Id` varchar(250) CHARACTER SET utf8 DEFAULT NULL,
  `Lead Shortlisted Id` varchar(250) CHARACTER SET utf8 DEFAULT NULL,
  `Lead Biodata` varchar(250) CHARACTER SET utf8 DEFAULT NULL,
  `Lead Matrimony Picture` varchar(250) CHARACTER SET utf8 DEFAULT NULL,
  `Meeting Status` varchar(250) CHARACTER SET utf8 DEFAULT NULL,
  `Rejection Reason` varchar(250) DEFAULT NULL,
  `Rejection Comments` varchar(500) DEFAULT NULL,
  `Payment Given` int(11) DEFAULT NULL,
  `Payment Remaining` int(11) DEFAULT NULL,
  `Next Payment Due Date` datetime DEFAULT NULL,
  `Payment Comments` varchar(500) DEFAULT NULL,
  `Occupation` varchar(250) DEFAULT NULL,
  `Pincode` varchar(6) DEFAULT NULL,
  `Company Website` varchar(500) DEFAULT NULL,
  `Wedding Budget` varchar(50) DEFAULT NULL,
  `Wedding Budget2` varchar(50) DEFAULT NULL,
  `Wedding Budget Value` float NOT NULL,
  `Wedding Budget2 Value` float NOT NULL,
  `Residential Type` varchar(50) DEFAULT NULL,
  `Willing To Stay` varchar(50) DEFAULT NULL,
  `Pp Partner Occupation` varchar(50) DEFAULT NULL,
  `Open For Divorcee` varchar(50) DEFAULT NULL,
  `From Premium Institute` varchar(50) DEFAULT NULL,
  `Open For Outside India` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblprofiles`
--

INSERT INTO `tblprofiles` (`ID`, `Data Taken From`, `Subscription Type`, `PID`, `FIRST NAME`, `LAST NAME`, `GENDER`, `HAS CHILDREN`, `DOB`, `BIRTH PLACE`, `BIRTH TIME`, `MANGLIK`, `BELIEVES IN HOROSCOPE`, `GOTRA`, `MARITAL STATUS`, `HEIGHT`, `HEIGHT VALUE`, `BODY TYPE`, `EDUCATION`, `COLLEGE`, `COUNTRY OF RESIDENCE`, `STATE OF RESIDENCE`, `CITY`, `MOTHER TONGUE`, `FOOD HABITS`, `DRINK`, `SMOKE`, `RELIGION`, `CASTE`, `SUB CASTE`, `COMPLEXION`, `WEIGHT`, `EMPLOYED AS`, `EMPLOYED WITH`, `ANNUAL INCOME`, `ANNUAL INCOME2`, `ANNUAL INCOME VALUE`, `ANNUAL INCOME2 VALUE`, `ABOUT`, `FATHER IS`, `MOTHER IS`, `FATHER NAME`, `MOTHER NAME`, `FAMILY VALUE`, `AFFLUENCE LEVEL`, `NATIVE COUNTRY`, `NATIVE STATE`, `UNMARRIED SISTERS`, `MARRIED SISTERS`, `UNMARRIED BROTHERS`, `MARRIED BROTHERS`, `CRIMINAL RECORD`, `SPECIAL CASE`, `PP SMOKER`, `PP DRINKER`, `PP VEG/NON VEG`, `PP FROMAGE`, `PP TOAGE`, `PP CASTE`, `PP EDUCATION QUALIFICATION`, `PP MIN HEIGHT`, `PP MAX HEIGHT`, `PP MIN HEIGHT VALUE`, `PP MAX HEIGHT VALUE`, `PP MOTHER TONGUE`, `PP RELIGION`, `PP MANGLIK`, `PP INCOME`, `PP INCOME2`, `PP INCOME VALUE`, `PP INCOME2 VALUE`, `PP BODY TYPE`, `PP CHALLENGED`, `PP MARITAL STATUS`, `PP COUNTRY`, `PP STATE`, `PP HAVE CHILDREN`, `PHOTO URL`, `EMAIL`, `PHONE`, `ADDED DATE`, `ADDED BY`, `HOUSE`, `ADDRESS`, `SQUARE YARDS`, `HAIR TYPE`, `LOOKS`, `SPECS`, `NET WORTH`, `INDUSTRY TYPE`, `COMPANY NAME`, `AADHAR VERIFIED`, `MOBILE VERIFIED`, `EMAILID VERIFIED`, `AADHAR PROOF`, `REGISTRATION FEE`, `MEETING FEE`, `ROKA CHARGE`, `WEEKLY PROFILE`, `DURATION`, `PACKAGE TYPE`, `SOLD BY`, `MEETING FINALISED BY`, `Meeting Type`, `MEETING DATE`, `MEETING TIME`, `MEETING PLACE`, `MEETING LVM ID`, `CLIENT TYPE`, `SCHOOL NAME`, `UG`, `PG`, `UG COLLEGE`, `PG COLLEGE`, `FAMILY BASED OUT OF`, `EMPLOYED IN`, `FAMILY INCOME`, `FAMILY INCOME2`, `FAMILY INCOME VALUE`, `FAMILY INCOME2 VALUE`, `FAMILY TYPE`, `ABOUT FAMILY`, `PP EMPLOYED AS`, `PP About Partner`, `Residential Status`, `Property Details`, `Vehicles`, `Star`, `Rassi`, `Alternate Phone`, `Whatsapp Number`, `Permanent Address`, `Instagram Id`, `Facebook Id`, `Linkedin Id`, `Communication`, `PP Complexion`, `PP Cant Get Married To`, `Last Calling Date`, `Calling for`, `Calling Status`, `Calling Comments`, `Profile Shortlisted For`, `Response Shared Profile`, `Lead Date`, `Lead Status`, `Lead Follow Up`, `Lead Follow Up Time`, `Lead Comment`, `Lead Shared Id`, `Lead Shortlisted Id`, `Lead Biodata`, `Lead Matrimony Picture`, `Meeting Status`, `Rejection Reason`, `Rejection Comments`, `Payment Given`, `Payment Remaining`, `Next Payment Due Date`, `Payment Comments`, `Occupation`, `Pincode`, `Company Website`, `Wedding Budget`, `Wedding Budget2`, `Wedding Budget Value`, `Wedding Budget2 Value`, `Residential Type`, `Willing To Stay`, `Pp Partner Occupation`, `Open For Divorcee`, `From Premium Institute`, `Open For Outside India`) VALUES
(28, 'LV', '', '985272-smriti sehgal', 'Smriti', 'sehgal', 'Female', 'None', '1992-04-12', 'delhi', '13:40:00', 'Donâ€™t know', 'Not Necessary', '', 'Never Married', '5\'Â 2\"Â (1.58mts)', 0, 'Slim', '', NULL, 'India', 'New Delhi', 'Delhi', 'Hindi-Delhi', 'Vegetarian', 'Drinks occasionally', 'Doesn\'t smoke', 'Hindu', 'Khatri ', 'punjabi', 'Fair', 0, 'CxOÂ /Â Â ChairmanÂ /Â Â PresidentÂ /Â Â Director', '', 'Rs.Â 0', 'Rs.Â 0', 0, 0, 'After completing B.Tech in E&C she started participating in family business & helping father in his ventures. She is slim, Fair, Beautiful with modern outlook with traditional values.   interestsÂ -Â Travelling,Listening Music and Shopping', 'Business/SelfÂ Employed', 'Business/SelfÂ Employed', '', '', 'Liberal', 'Affluence Level', 'India', 'New Delhi', 'None', '1', 'None', 'None', 'No', 'None', '', '', '', 28, 32, '', '', '5\'Â 3\"Â (1.60mts)', '5\'Â 11\"Â (1.80mts)', 0, 0, '', 'Hindu,Jain,Sikh', '', 'Rs.1Â Crore', 'Rs.1000+Â Crore', 0, 0, '', 'None', 'Never Married', 'UnitedÂ ArabÂ Emirates,Singapore,India', 'New Delhi,Gurgaon', 'None', NULL, '', '9910018028', '2020-08-21 11:11:02', '', NULL, 'G.K. 1. W  124. ', 0, 'Normal Hair', 'Classy', 'Normal Eyesight', 0, '', NULL, '', 'Yes', '', '', 21000, 0, 100000, '', 'Till You Marrry', 'TillYourRoka', 'Monica', '', '', '0000-00-00', '00:00:00', '', '', 'Paid', 'Indian School New Delhi', 'B.E/B.Tech', '', ' Amity University.', '', 'India', 'Business/SelfÂ Employed', 'Rs.10Â Crore', 'Rs.50Â Crore', 0, 0, 'Joint Family', 'Was running services sector business in joint venture with Japanese firm listed on Tokyo stock exchange for around 24 years, in 2017 sold entire company to Japanese. Now involved in real estate business currently constructing projects in Greater Kailash & Kalkaji, financing builders, Investing in start-ups. Family has many residential & commercial properties given on rent. Another daughter married in respected Industrist family of Northern India.GK House 500 Yards â€“ Basement, Ground, First and Terrace 2 House in Kalkaji â€“ 400 Sq Yards  Entire Building â€“ Commercials Property ( E -156 & F - 2) 5 Shops in TDI shopping mall â€“ G.T. Karnal road After selling New Era consultant, they invested in lot of start-up and have stake in companies .', '', '', 'Citizen', '2 commercial buildings in Kalkaji. And few shops in TDI mall.   2 residential buildings in Kalkaji', '', '', '', '9312436000', '', 'G.K. 1. W  124. ', '', '', '', 'Classy', '', NULL, '2020-08-20', 'Profile Shared', 'Profile Rejected', 'sw smriti bua and  shared itek profile and they declined due to west delhi', '', 'rejected the last profile as well', '0000-00-00', '', '0000-00-00', '00:00:00', '', '', '', '', '', '', '', '', 21000, 0, '0000-00-00 00:00:00', 'sw smriti bua and she mentioned that roka fee wld be increased if we give the right profile', 'Business/Â SelfÂ Employed', '', '', '', '', 0, 0, '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblprofiles`
--
ALTER TABLE `tblprofiles`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `IDX_UNK` (`PID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblprofiles`
--
ALTER TABLE `tblprofiles`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=198;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
