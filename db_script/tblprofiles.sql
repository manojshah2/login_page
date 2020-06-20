-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 20, 2020 at 04:13 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myproject`
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
  `ABOUT` varchar(500) DEFAULT NULL,
  `FATHER IS` varchar(150) DEFAULT NULL,
  `MOTHER IS` varchar(150) DEFAULT NULL,
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
  `PP MOTHER TONGUE` varchar(150) DEFAULT NULL,
  `PP RELIGION` varchar(150) DEFAULT NULL,
  `PP MANGLIK` varchar(150) DEFAULT NULL,
  `PP INCOME` varchar(150) DEFAULT NULL,
  `PP INCOME2` varchar(50) DEFAULT NULL,
  `PP BODY TYPE` varchar(150) DEFAULT NULL,
  `PP CHALLENGED` varchar(150) DEFAULT NULL,
  `PP MARITAL STATUS` varchar(150) DEFAULT NULL,
  `PP COUNTRY` varchar(150) DEFAULT NULL,
  `PP STATE` varchar(500) DEFAULT NULL,
  `PP HAVE CHILDREN` varchar(150) DEFAULT NULL,
  `PHOTO URL` varchar(250) DEFAULT NULL,
  `EMAIL` varchar(150) DEFAULT NULL,
  `PHONE` varchar(20) DEFAULT NULL,
  `ADDED DATE` datetime NOT NULL DEFAULT current_timestamp(),
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
  `SCHOOL NAME` text DEFAULT NULL,
  `UG` text DEFAULT NULL,
  `PG` text DEFAULT NULL,
  `UG COLLEGE` text DEFAULT NULL,
  `PG COLLEGE` text DEFAULT NULL,
  `FAMILY BASED OUT OF` text DEFAULT NULL,
  `EMPLOYED IN` text DEFAULT NULL,
  `FAMILY INCOME` text DEFAULT NULL,
  `FAMILY INCOME2` varchar(50) DEFAULT NULL,
  `FAMILY TYPE` varchar(50) DEFAULT NULL,
  `ABOUT FAMILY` text DEFAULT NULL,
  `PP EMPLOYED AS` text DEFAULT NULL,
  `PP About Partner` text DEFAULT NULL,
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
  `Company Website` varchar(500) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblprofiles`
--

INSERT INTO `tblprofiles` (`ID`, `Data Taken From`, `Subscription Type`, `PID`, `FIRST NAME`, `LAST NAME`, `GENDER`, `HAS CHILDREN`, `DOB`, `BIRTH PLACE`, `BIRTH TIME`, `MANGLIK`, `BELIEVES IN HOROSCOPE`, `GOTRA`, `MARITAL STATUS`, `HEIGHT`, `BODY TYPE`, `EDUCATION`, `COLLEGE`, `COUNTRY OF RESIDENCE`, `STATE OF RESIDENCE`, `CITY`, `MOTHER TONGUE`, `FOOD HABITS`, `DRINK`, `SMOKE`, `RELIGION`, `CASTE`, `SUB CASTE`, `COMPLEXION`, `WEIGHT`, `EMPLOYED AS`, `EMPLOYED WITH`, `ANNUAL INCOME`, `ANNUAL INCOME2`, `ABOUT`, `FATHER IS`, `MOTHER IS`, `FAMILY VALUE`, `AFFLUENCE LEVEL`, `NATIVE COUNTRY`, `NATIVE STATE`, `UNMARRIED SISTERS`, `MARRIED SISTERS`, `UNMARRIED BROTHERS`, `MARRIED BROTHERS`, `CRIMINAL RECORD`, `SPECIAL CASE`, `PP SMOKER`, `PP DRINKER`, `PP VEG/NON VEG`, `PP FROMAGE`, `PP TOAGE`, `PP CASTE`, `PP EDUCATION QUALIFICATION`, `PP MIN HEIGHT`, `PP MAX HEIGHT`, `PP MOTHER TONGUE`, `PP RELIGION`, `PP MANGLIK`, `PP INCOME`, `PP INCOME2`, `PP BODY TYPE`, `PP CHALLENGED`, `PP MARITAL STATUS`, `PP COUNTRY`, `PP STATE`, `PP HAVE CHILDREN`, `PHOTO URL`, `EMAIL`, `PHONE`, `ADDED DATE`, `ADDED BY`, `HOUSE`, `ADDRESS`, `SQUARE YARDS`, `HAIR TYPE`, `LOOKS`, `SPECS`, `NET WORTH`, `INDUSTRY TYPE`, `COMPANY NAME`, `AADHAR VERIFIED`, `MOBILE VERIFIED`, `EMAILID VERIFIED`, `AADHAR PROOF`, `REGISTRATION FEE`, `MEETING FEE`, `ROKA CHARGE`, `WEEKLY PROFILE`, `DURATION`, `PACKAGE TYPE`, `SOLD BY`, `MEETING FINALISED BY`, `Meeting Type`, `MEETING DATE`, `MEETING TIME`, `MEETING PLACE`, `MEETING LVM ID`, `CLIENT TYPE`, `SCHOOL NAME`, `UG`, `PG`, `UG COLLEGE`, `PG COLLEGE`, `FAMILY BASED OUT OF`, `EMPLOYED IN`, `FAMILY INCOME`, `FAMILY INCOME2`, `FAMILY TYPE`, `ABOUT FAMILY`, `PP EMPLOYED AS`, `PP About Partner`, `Residential Status`, `Property Details`, `Vehicles`, `Star`, `Rassi`, `Alternate Phone`, `Whatsapp Number`, `Permanent Address`, `Instagram Id`, `Facebook Id`, `Linkedin Id`, `Communication`, `PP Complexion`, `PP Cant Get Married To`, `Last Calling Date`, `Calling for`, `Calling Status`, `Calling Comments`, `Profile Shortlisted For`, `Response Shared Profile`, `Lead Date`, `Lead Status`, `Lead Follow Up`, `Lead Follow Up Time`, `Lead Comment`, `Lead Shared Id`, `Lead Shortlisted Id`, `Lead Biodata`, `Lead Matrimony Picture`, `Meeting Status`, `Rejection Reason`, `Rejection Comments`, `Payment Given`, `Payment Remaining`, `Next Payment Due Date`, `Payment Comments`, `Occupation`, `Pincode`, `Company Website`) VALUES
(7, 'Shaadi.com', 'dfdfdf', 'YVWA1959', 'First Name', 'Last Name', 'Female', 'Yes-Living Seperately', '2020-06-05', 'Noida', '00:00:12', 'Manglik', 'Must', 'Beed', 'Divorced', '4\' 0\" (1.22mts)', 'Athletic', 'MBA/PGDM, B.A', NULL, 'Afghanistan', 'New Delhi', 'Noida1', 'Hindi-Delhi', 'Eggetarian', 'Drinks occasionally', 'Doesn\'t smoke', 'Muslim', 'Caste', 'sdfsdf', 'Fair', 20, 'Software Professional', 'Home', 'Rs. 0', 'Rs.3 Lakh', 'test', 'Service -Private', 'Service -Private', 'Liberal', 'Affluence Level', 'Afghanistan', 'New Delhi', 'None', '1', '2', '3+', 'dfdf', 'Physically-Due to accident', 'Doesn\'t smoke', 'Doesn\'t drink', 'Eggetarian', 18, 18, 'Aggarwal, Hindu: Prajapati, Khatik, Hindu: Rajput - All, Hindu: Khatri, Hindu: Arora, Hindu: Others, Sonar Sunar, Soni, Swarnkar', 'B.A,B.Des', '4\' 0\" (1.22mts)', '4\' 1\" (1.24mts)', 'Hindi-Delhi, Hindi-MP/CG,,, Haryanvi, Hindi-Rajasthan, Punjabi', 'Hindu', 'Manglik', '', NULL, 'Athletic', 'None', 'Never Married', 'Afghanistan', 'Haridwar, Amritsar, Kanpur,, Pathankot, Rajpura, Panipat, Dhuri, Narnaul, Yamunanagar, Mohali, Jalandhar, Panchkula, Roorkee, Ludhiana, Ambala, Lucknow, New Delhi, Bhayander, Faizabad, Faridabad, Ghaziabad, Greater Noida, Gurgaon, Noida, Sahibabad', 'None', 'https://imagecdn.jeevansathi.com/14910/9/298209764-1569040034.jpeg', 'manoj.shh1@gmail.com', '9015418078', '2020-03-11 12:32:13', 'manoj.shah', NULL, 'noida', 0, 'Bald', 'Extraordinary', 'Wear Specs', 0, 'Accounting / Finance', NULL, 'Yes', 'Yes', 'Yes', 'Given', 200, 200, 200, 'tes', '1 Month', 'Luv2Register-3Month', 'me', 'me', 'Telephonic', '2020-06-05', '00:00:01', 'me', 'lvmdf', 'Lead', 'CBSC', 'B.A', 'CA', 'Delhi University', 'IMT ghaziabad', 'Afghanistan', 'Private Sector', '', NULL, 'Joint Family', 'My father is engaged in her own business in Noida and mother is a housewife. I have two siblings one brother and sister and both are married. We belong to Punjabi Mair Rajput (Sonar)  community and well settled in Noida from past 30 Years', 'Software Professional', 'about partner', 'Citizen', 'No property', 'hundyai', 'star', 'rassi', '9015418078', '9015418078', 'noida', 'id', 'fa', 'linkedin', 'Classy', 'Fair', NULL, '2020-06-04', 'Lead', 'Pending', 'this is test results', 'me', 'sdfsdf', '0000-00-00', 'Pending', '2020-06-05', '00:00:01', 'lead comment', 'lead shared', 'lead profile', 'Yes', 'Yes', 'Done', 'Looks', 'coments', 100, 100, '0000-00-00 00:00:00', 'me', 'Actor/Model', '201301', 'www.test.com'),
(8, 'JS', '', 'XAWV9178', 'First Name', 'last name', 'Female', 'None', '0000-00-00', '', '00:00:00', '', '', '', 'Never Married', '0', '', 'M.A', NULL, '', NULL, 'new delhi', '--Select--', '', '', '', '--Select--', 'Hindu: Rajput', '', '', 0, '', '', '', NULL, 'sdfsdf', '', '', '', '', '', NULL, '0', '0', '0', '0', '', '', '', '', '', 0, 0, '', '', '0', '0', '', '', '', '', NULL, '', '', 'Never Married', '', '', '', 'https://imagecdn.jeevansathi.com/16642/7/332847366-1580616951.jpeg', '', '', '2020-03-11 12:37:56', '', NULL, '', 0, '', '', '', 0, '', NULL, '', '', '', '', 0, 0, 0, '', '0', '', '', '', NULL, '0000-00-00', '00:00:00', '', '', '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', '--Select--', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '0000-00-00', NULL, '', '', '', '', '0000-00-00', NULL, '0000-00-00', '00:00:00', '', '', '', '', '', '', '', '', 0, 0, '0000-00-00 00:00:00', '', NULL, NULL, NULL),
(23, NULL, NULL, 'abcd', NULL, NULL, '', NULL, '0000-00-00', NULL, NULL, NULL, '', NULL, '', '0', NULL, '', NULL, NULL, NULL, '', '', NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-05-30 13:13:33', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, NULL, NULL, 'YUUY2841', NULL, NULL, 'Female', NULL, '0000-00-00', 'Not filled in', NULL, '-', 'Horoscope match is Must', 'bhardwaj', 'Never Married', '5', NULL, 'B.E/B.Tech', NULL, NULL, NULL, 'Hubli', 'Kannada', 'Vegetarian', ' Doesn\'t drink', ' Doesn\'t smoke', 'Hindu', 'Brahmin Deshastha', NULL, 'Slim, Very Fair', NULL, 'Non - IT Engineer', NULL, 'Rs. 4 - 5 Lakh', NULL, 'I am fun loving, caring and warm person. I love cooking, Singing and travelling.I am looking for open minded and fun loving person who can be dependable and caring partner preferably belonging to well established family. we are smarth Brahmins. <br/>', 'Business/Entrepreneur', 'Business/Entrepreneur', 'Orthodox', 'Middle Class', NULL, NULL, '1', '1', '0', NULL, NULL, 'Challenged - None', NULL, NULL, NULL, 27, 32, 'Brahmin Vaishnav, Brahmin Madhwa, Brahmin Iyengar, Brahmin, Brahmin Bhatt, Brahmin Deshastha, Brahmin Iyer, Brahmin Smartha, Coorgi, Brahmin Karhade, ', 'M.Arch, M.Des, M.E/M.Tech, M.Pharma, M.S. (Engineering), MCA/PGDCA, CA, CFA, CS, ICWA, M.Com, MBA/PGDM, DM, M.D., M.S. (Medicine), MCh, MDS, MPT, MVSc', '5', '5', 'Marathi, Kannada', 'Hindu', 'Non Manglik', 'Rs.10 Lakh and above, $25,001 and above', NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, '2020-03-11 12:38:03', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Not filled in', 'B.E/B.Tech', NULL, NULL, NULL, 'Hubli, Karnataka', 'Private Sector', 'Rs. 20 - 25 Lakh per Annum', NULL, 'Nuclear Family', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, NULL, NULL, 'YVTW3075', NULL, NULL, 'Female', NULL, '0000-00-00', 'Not filled in', NULL, '-', 'Horoscope match is not necessary', 'Not filled in', 'Never Married', '5', NULL, 'B.E/B.Tech', NULL, NULL, NULL, 'Nashik/ Nasik', 'Marathi', 'Vegetarian', ' Doesn\'t drink', ' Doesn\'t smoke', 'Hindu', 'Maratha', NULL, 'Average, Fair, 63 Kg', NULL, 'Businessperson', NULL, 'Rs. 0 - 1 Lakh', NULL, 'Hi I am very open minded girl. Also have some traditional behaviour in me. like to leave free with out any restrictions. Have lot of friends girls and boys . ', 'Retired', 'Housewife', 'Moderate', 'Upper Middle', NULL, NULL, '1', '1', '0', NULL, NULL, 'Challenged - None, Thalassemia - No, HIV+ - No', NULL, NULL, NULL, 28, 30, 'Maratha, Hindu: Others', NULL, '5', '5', 'Marathi', 'Hindu', NULL, 'Rs. 0 and above, $0 and above', NULL, NULL, NULL, 'Never Married', 'India', 'Maharashtra', NULL, 'https://imagecdn.jeevansathi.com/16657/0/333140696-1580710563.jpeg', NULL, NULL, '2020-03-11 12:38:03', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Not filled in', 'B.E/B.Tech', NULL, 'pursuing MBA marketing', NULL, 'Nashik/ Nasik, Maharashtra', 'Business/ Self Employed', 'Rs. 1 - 2 Lakh per Annum', NULL, 'Nuclear Family', 'A happy middleclass family .. we are both sisters only so we will need to take care of parents. have one small sister\'s boy of 6 years.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, NULL, NULL, 'YVWR6161', NULL, NULL, 'Female', NULL, '0000-00-00', 'Not filled in', NULL, '-', 'Horoscope match is not necessary', 'Not filled in', 'Never Married', '5', NULL, 'MBA/PGDM', NULL, NULL, NULL, 'Allahabad', 'Hindi-UP/UK', NULL, NULL, NULL, 'Hindu', 'Kushwaha', NULL, 'Average, Fair, 50 Kg', NULL, 'HR Professional', NULL, 'Rs. 7.5 - 10 Lakh', NULL, 'My name is [Name Hidden] and I made this profile for my sister. she did MBA from Jaipur and currently working in hospital as a hr professionals.', 'Not filled in', 'Not filled in', 'Not filled in', 'Not filled in', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Challenged - None, Thalassemia - No, HIV+ - No', NULL, NULL, NULL, 27, 33, 'Kurmi, Kushwaha, Maurya, Kurmi kshatriya', 'B.Arch, B.Des, B.E/B.Tech, B.Pharma, M.Arch, M.Des, M.E/M.Tech, M.Pharma, M.S. (Engineering), B.IT, BCA, MCA/PGDCA, B.Com, CA, CFA, CS, ICWA, M.Com, B', '5', '5', 'Hindi-Bihar/Jharkhand, Hindi-UP/UK, Hindi-Delhi', 'Hindu', NULL, 'Rs.10 Lakh and above, $25,001 and above', NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, '2020-03-11 12:38:03', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Not filled in', NULL, 'MBA/PGDM', NULL, NULL, 'Not filled in', 'Private Sector', 'Not filled in', NULL, 'Not filled in', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, NULL, NULL, '', NULL, NULL, '', NULL, '0000-00-00', NULL, NULL, NULL, '', NULL, '', '0', NULL, '', NULL, NULL, NULL, '', '', NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-05-09 10:08:33', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(16, NULL, NULL, 'sdfsdf', NULL, NULL, '', NULL, '0000-00-00', NULL, NULL, NULL, '', NULL, '', '0', NULL, '', NULL, NULL, NULL, '', '', NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-05-09 10:29:47', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(17, 'JS', NULL, 'sdfsdfsdf', NULL, NULL, '', NULL, '0000-00-00', NULL, NULL, NULL, '', NULL, '', '0', NULL, '', NULL, NULL, NULL, '', '', NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-05-09 10:36:52', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(18, 'JS', NULL, 'test', NULL, NULL, '', NULL, '0000-00-00', NULL, NULL, NULL, '', NULL, '', '0', NULL, '', NULL, NULL, NULL, '', '', NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-05-09 10:38:48', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(19, NULL, NULL, 'ddf', NULL, NULL, '', NULL, '0000-00-00', NULL, NULL, NULL, '', NULL, '', '0', NULL, '', NULL, NULL, NULL, '', '', NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-05-09 10:49:26', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20, NULL, NULL, 'test123', NULL, NULL, '', NULL, '0000-00-00', NULL, NULL, NULL, '', NULL, '', '0', NULL, '', NULL, NULL, NULL, '', '', NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-05-09 11:45:15', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(21, NULL, NULL, 'test1234', NULL, NULL, '', NULL, '0000-00-00', NULL, NULL, NULL, '', NULL, '', '0', NULL, '', NULL, NULL, NULL, '', '', NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-05-09 11:59:37', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(22, 'JS', '', 'dfdf', '', '', 'Female', 'None', '0000-00-00', '', '00:00:00', '', '', '', 'Never Married', '0', '', '', NULL, '', NULL, '', '--Select--', '', '', '', '--Select--', '', '', '', 0, '', '', '', NULL, '', '', '', '', '', '', NULL, '0', '0', '0', '0', '', '', '', '', '', 0, 0, '', '', '0', '0', '', '', '', '', NULL, '', '', 'Never Married', '', '', '', NULL, '', '', '2020-05-24 17:22:54', '', NULL, '', 0, '', '', '', 0, '', NULL, '', '', '', '', 0, 0, 0, '', '0', '', '', '', NULL, '0000-00-00', '00:00:00', '', '', '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', '--Select--', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '0000-00-00', NULL, '', '', '', '', '0000-00-00', NULL, '0000-00-00', '00:00:00', '', '', '', '', '', '', '', '', 0, 0, '0000-00-00 00:00:00', '', NULL, NULL, NULL);

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
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
