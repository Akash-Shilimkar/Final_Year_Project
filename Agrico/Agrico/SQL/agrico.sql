-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2023 at 05:18 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agrico`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `a_id` int(11) NOT NULL,
  `about` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`a_id`, `about`) VALUES
(1, 'We Design A Perfect Logo For You To See Just Visit Our Logo Page By Read More Button.');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `UserName` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `updationDate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `UserName`, `Password`, `updationDate`) VALUES
(1, 'admin', '5c428d8875d2948607f3e3fe134d71b4', '2017-06-18 12:22:38');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `con_id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `address1` varchar(100) NOT NULL,
  `yt` varchar(50) NOT NULL,
  `fb` varchar(50) NOT NULL,
  `insta` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`con_id`, `email`, `address`, `address1`, `yt`, `fb`, `insta`) VALUES
(1, 'akashshilimkar415@outlook.com', 'Zeal College of Engineering and Research', 'Dhayari Narhe Road , Narhe , pune-411041', '', 'https://www.facebook.com/iRichZone', 'https://www.instagram.com/i_rich_zone/');

-- --------------------------------------------------------

--
-- Table structure for table `crops`
--

CREATE TABLE `crops` (
  `id` int(11) NOT NULL,
  `fristname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `cropname` varchar(100) NOT NULL,
  `duration` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `phoneno` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `crops`
--

INSERT INTO `crops` (`id`, `fristname`, `lastname`, `cropname`, `duration`, `address`, `city`, `state`, `phoneno`) VALUES
(1, 'gunja', 'gupta', 'wheat', '7 to 8 months', 'Shvine', 'Pune', 'Maharastra', 2147483647),
(3, 'Akash', 'Shilimkar ', 'Rice', '90 to 110 days', 'Virwadi', 'Pune', 'Maharastra', 2147483647),
(4, 'Akash ', 'Shilimkar ', 'wheat ', '7 to 8 months ', 'Sr.No.668/6B, Bhagyashree Nagar Society, Bibwewadi Upper Indiranagar,Pune', 'Pune ', 'maharastra', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `crop_prediction`
--

CREATE TABLE `crop_prediction` (
  `id` int(11) NOT NULL,
  `nitrogen` int(25) NOT NULL,
  `phospharas` int(25) NOT NULL,
  `k` int(25) NOT NULL,
  `temp` double NOT NULL,
  `humidity` double NOT NULL,
  `ph` double NOT NULL,
  `rainfall` double NOT NULL,
  `label` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `crop_prediction`
--

INSERT INTO `crop_prediction` (`id`, `nitrogen`, `phospharas`, `k`, `temp`, `humidity`, `ph`, `rainfall`, `label`) VALUES
(1, 90, 42, 43, 20.87974371, 82.00274423, 6.502985292, 202.9355362, 'rice'),
(5, 85, 58, 41, 21.77046169, 80.31964408, 7.038096361, 226.6555374, 'Rice');

-- --------------------------------------------------------

--
-- Table structure for table `market_price`
--

CREATE TABLE `market_price` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `city` varchar(30) NOT NULL,
  `date` date DEFAULT NULL,
  `type` varchar(50) NOT NULL,
  `minimum_rate` int(30) NOT NULL,
  `maximun_rate` int(30) NOT NULL,
  `genral_rate` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `market_price`
--

INSERT INTO `market_price` (`id`, `name`, `city`, `date`, `type`, `minimum_rate`, `maximun_rate`, `genral_rate`) VALUES
(1, 'Rice', 'Pune', '2023-05-05', 'Basmati', 1700, 1700, 1700),
(2, 'Rice', 'Pune', '2023-05-05', 'Kolam', 3600, 6600, 5100);

-- --------------------------------------------------------

--
-- Table structure for table `tblbooking`
--

CREATE TABLE `tblbooking` (
  `id` int(11) NOT NULL,
  `BookingNumber` bigint(12) DEFAULT NULL,
  `userEmail` varchar(100) DEFAULT NULL,
  `VehicleId` int(11) DEFAULT NULL,
  `FromDate` varchar(20) DEFAULT NULL,
  `ToDate` varchar(20) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  `Status` int(11) DEFAULT NULL,
  `PostingDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `LastUpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblbooking`
--

INSERT INTO `tblbooking` (`id`, `BookingNumber`, `userEmail`, `VehicleId`, `FromDate`, `ToDate`, `message`, `Status`, `PostingDate`, `LastUpdationDate`) VALUES
(1, 123456789, 'test@gmail.com', 1, '2020-07-07', '2020-07-09', 'What  is the cost?', 1, '2020-07-07 14:03:09', NULL),
(2, 987456321, 'test@gmail.com', 4, '2020-07-19', '2020-07-24', 'hfghg', 1, '2020-07-09 17:49:21', '2020-07-11 12:20:57'),
(3, 123, 'a@gmail.com', 4, '12-04-2023', '13-04-2023', 'what is cost?', 1, '2023-04-30 17:01:08', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblbrands`
--

CREATE TABLE `tblbrands` (
  `id` int(11) NOT NULL,
  `BrandName` varchar(120) NOT NULL,
  `CreationDate` date DEFAULT NULL,
  `UpdationDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblbrands`
--

INSERT INTO `tblbrands` (`id`, `BrandName`, `CreationDate`, `UpdationDate`) VALUES
(1, 'Mahindra Tractors', '2021-02-28', '2023-03-03'),
(2, 'Holland Tractor', '2020-06-18', NULL),
(3, 'Swaraj Tractor\r\n', '2021-06-18', NULL),
(4, 'Farmtrac Tractors', '2021-06-18', NULL),
(5, 'Swaraj Tractors', '2021-06-18', NULL),
(7, 'Volkswagon', '2017-06-19', '2020-07-07');

-- --------------------------------------------------------

--
-- Table structure for table `tblcontactusinfo`
--

CREATE TABLE `tblcontactusinfo` (
  `id` int(11) NOT NULL,
  `Address` tinytext DEFAULT NULL,
  `EmailId` varchar(255) DEFAULT NULL,
  `ContactNo` char(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcontactusinfo`
--

INSERT INTO `tblcontactusinfo` (`id`, `Address`, `EmailId`, `ContactNo`) VALUES
(1, 'J&K Block, Laxmi Nagar', 'Agrico@gmail.com', '9373267054');

-- --------------------------------------------------------

--
-- Table structure for table `tblcontactusquery`
--

CREATE TABLE `tblcontactusquery` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `EmailId` varchar(120) DEFAULT NULL,
  `ContactNumber` char(11) DEFAULT NULL,
  `Message` longtext DEFAULT NULL,
  `PostingDate` date NOT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcontactusquery`
--

INSERT INTO `tblcontactusquery` (`id`, `name`, `EmailId`, `ContactNumber`, `Message`, `PostingDate`, `status`) VALUES
(1, 'Kunal ', 'kunal@gmail.com', '7977779798', 'I want to know you brach in Chandigarh?', '2020-07-07', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblpages`
--

CREATE TABLE `tblpages` (
  `id` int(11) NOT NULL,
  `PageName` varchar(255) DEFAULT NULL,
  `type` varchar(255) NOT NULL DEFAULT '',
  `detail` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblpages`
--

INSERT INTO `tblpages` (`id`, `PageName`, `type`, `detail`) VALUES
(1, 'Terms and Conditions', 'terms', '<P align=justify><FONT size=2><STRONG><FONT color=#990000>(1) ACCEPTANCE OF TERMS</FONT><BR><BR></STRONG>Welcome to Yahoo! India. 1Yahoo Web Services India Private Limited Yahoo\", \"we\" or \"us\" as the case may be) provides the Service (defined below) to you, subject to the following Terms of Service (\"TOS\"), which may be updated by us from time to time without notice to you. You can review the most current version of the TOS at any time at: <A href=\"http://in.docs.yahoo.com/info/terms/\">http://in.docs.yahoo.com/info/terms/</A>. In addition, when using particular Yahoo services or third party services, you and Yahoo shall be subject to any posted guidelines or rules applicable to such services which may be posted from time to time. All such guidelines or rules, which maybe subject to change, are hereby incorporated by reference into the TOS. In most cases the guides and rules are specific to a particular part of the Service and will assist you in applying the TOS to that part, but to the extent of any inconsistency between the TOS and any guide or rule, the TOS will prevail. We may also offer other services from time to time that are governed by different Terms of Services, in which case the TOS do not apply to such other services if and to the extent expressly excluded by such different Terms of Services. Yahoo also may offer other services from time to time that are governed by different Terms of Services. These TOS do not apply to such other services that are governed by different Terms of Service. </FONT></P>\r\n<P align=justify><FONT size=2>Welcome to Yahoo! India. Yahoo Web Services India Private Limited Yahoo\", \"we\" or \"us\" as the case may be) provides the Service (defined below) to you, subject to the following Terms of Service (\"TOS\"), which may be updated by us from time to time without notice to you. You can review the most current version of the TOS at any time at: </FONT><A href=\"http://in.docs.yahoo.com/info/terms/\"><FONT size=2>http://in.docs.yahoo.com/info/terms/</FONT></A><FONT size=2>. In addition, when using particular Yahoo services or third party services, you and Yahoo shall be subject to any posted guidelines or rules applicable to such services which may be posted from time to time. All such guidelines or rules, which maybe subject to change, are hereby incorporated by reference into the TOS. In most cases the guides and rules are specific to a particular part of the Service and will assist you in applying the TOS to that part, but to the extent of any inconsistency between the TOS and any guide or rule, the TOS will prevail. We may also offer other services from time to time that are governed by different Terms of Services, in which case the TOS do not apply to such other services if and to the extent expressly excluded by such different Terms of Services. Yahoo also may offer other services from time to time that are governed by different Terms of Services. These TOS do not apply to such other services that are governed by different Terms of Service. </FONT></P>\r\n<P align=justify><FONT size=2>Welcome to Yahoo! India. Yahoo Web Services India Private Limited Yahoo\", \"we\" or \"us\" as the case may be) provides the Service (defined below) to you, subject to the following Terms of Service (\"TOS\"), which may be updated by us from time to time without notice to you. You can review the most current version of the TOS at any time at: </FONT><A href=\"http://in.docs.yahoo.com/info/terms/\"><FONT size=2>http://in.docs.yahoo.com/info/terms/</FONT></A><FONT size=2>. In addition, when using particular Yahoo services or third party services, you and Yahoo shall be subject to any posted guidelines or rules applicable to such services which may be posted from time to time. All such guidelines or rules, which maybe subject to change, are hereby incorporated by reference into the TOS. In most cases the guides and rules are specific to a particular part of the Service and will assist you in applying the TOS to that part, but to the extent of any inconsistency between the TOS and any guide or rule, the TOS will prevail. We may also offer other services from time to time that are governed by different Terms of Services, in which case the TOS do not apply to such other services if and to the extent expressly excluded by such different Terms of Services. Yahoo also may offer other services from time to time that are governed by different Terms of Services. These TOS do not apply to such other services that are governed by different Terms of Service. </FONT></P>'),
(2, 'Privacy Policy', 'privacy', '<span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat</span>'),
(3, 'About Us ', 'aboutus', '<span style=\"color: rgb(51, 51, 51); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 13.3333px;\">We offer a varied tractor, ranging from the compact. All our vehicles have air conditioning, &nbsp;power steering. All our tractors are bought and maintained at official dealerships only. Automatic transmission tractorare available in every booking class.&nbsp;</span><span style=\"color: rgb(52, 52, 52); font-family: Arial, Helvetica, sans-serif;\">As we are not affiliated with any specific automaker, we are able to provide a variety of tractors makes and models for customers to rent.</span><div><span style=\"color: rgb(62, 62, 62); font-family: &quot;Lucida Sans Unicode&quot;, &quot;Lucida Grande&quot;, sans-serif; font-size: 11px;\">ur mission is to be recognised as the global leader in Tractor Rental for companies and the public and private sector by partnering with our clients to provide the best and most efficient Tractor Rental solutions and to achieve service excellence.</span><span style=\"color: rgb(52, 52, 52); font-family: Arial, Helvetica, sans-serif;\"><br></span></div>'),
(11, 'FAQs', 'faqs', '																														<span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">Address------Test &nbsp; &nbsp;dsfdsfds</span>');

-- --------------------------------------------------------

--
-- Table structure for table `tblsubscribers`
--

CREATE TABLE `tblsubscribers` (
  `id` int(11) NOT NULL,
  `SubscriberEmail` varchar(120) DEFAULT NULL,
  `PostingDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblsubscribers`
--

INSERT INTO `tblsubscribers` (`id`, `SubscriberEmail`, `PostingDate`) VALUES
(4, 'harish@gmail.com', '2020-07-07 09:26:21'),
(5, 'kunal@gmail.com', '2020-07-07 09:35:07');

-- --------------------------------------------------------

--
-- Table structure for table `tbltestimonial`
--

CREATE TABLE `tbltestimonial` (
  `id` int(11) NOT NULL,
  `UserEmail` varchar(100) NOT NULL,
  `Testimonial` mediumtext NOT NULL,
  `PostingDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbltestimonial`
--

INSERT INTO `tbltestimonial` (`id`, `UserEmail`, `Testimonial`, `PostingDate`, `status`) VALUES
(1, 'test@gmail.com', 'I am satisfied with their service great job', '2020-07-07 14:30:12', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblusers`
--

CREATE TABLE `tblusers` (
  `id` int(11) NOT NULL,
  `FullName` varchar(120) DEFAULT NULL,
  `EmailId` varchar(100) DEFAULT NULL,
  `Password` varchar(100) DEFAULT NULL,
  `ContactNo` char(11) DEFAULT NULL,
  `dob` varchar(100) DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `City` varchar(100) DEFAULT NULL,
  `Country` varchar(100) DEFAULT NULL,
  `RegDate` datetime DEFAULT NULL,
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblusers`
--

INSERT INTO `tblusers` (`id`, `FullName`, `EmailId`, `Password`, `ContactNo`, `dob`, `Address`, `City`, `Country`, `RegDate`, `UpdationDate`) VALUES
(1, 'Test', 'test@gmail.com', 'f925916e2754e5e03f75dd58a5733251', '6465465465', '', 'L-890, Gaur City Ghaziabad', 'Ghaziabad', 'India', '2020-07-07 19:30:49', '2020-07-12 05:44:29');

-- --------------------------------------------------------

--
-- Table structure for table `tblvehicles`
--

CREATE TABLE `tblvehicles` (
  `id` int(11) NOT NULL,
  `VehiclesTitle` varchar(150) DEFAULT NULL,
  `VehiclesBrand` int(11) DEFAULT NULL,
  `VehiclesOverview` longtext DEFAULT NULL,
  `PricePerDay` int(11) DEFAULT NULL,
  `FuelType` varchar(100) DEFAULT NULL,
  `ModelYear` int(6) DEFAULT NULL,
  `SeatingCapacity` int(11) DEFAULT NULL,
  `Vimage1` varchar(120) DEFAULT NULL,
  `Vimage2` varchar(120) DEFAULT NULL,
  `Vimage3` varchar(120) DEFAULT NULL,
  `Vimage4` varchar(120) DEFAULT NULL,
  `Vimage5` varchar(120) DEFAULT NULL,
  `BrakeAssist` int(11) DEFAULT NULL,
  `PowerSteering` int(11) DEFAULT NULL,
  `LeatherSeats` int(11) DEFAULT NULL,
  `RegDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblvehicles`
--

INSERT INTO `tblvehicles` (`id`, `VehiclesTitle`, `VehiclesBrand`, `VehiclesOverview`, `PricePerDay`, `FuelType`, `ModelYear`, `SeatingCapacity`, `Vimage1`, `Vimage2`, `Vimage3`, `Vimage4`, `Vimage5`, `BrakeAssist`, `PowerSteering`, `LeatherSeats`, `RegDate`, `UpdationDate`) VALUES
(1, 'Mahindra 575 DI XP Plus ', 1, 'Mahindra 575 DI XP Plus Tractor is manufactured by Mahindra Tractor Manufacturer. Sometimes demand increases, and supply decreases for any product. The Mahindra 575 XP tractor model never relies on it; its market demand and supply always rises and is stable on the hike. A farmer always demands the Mahindra 575 XP price like models, providing better potency or production to their farms.\r\nAs we all know, the Mahindra 575 DI XP Plus comes from the house of Mahindra & Mahindra, which is popular for the advanced tractors in the field. This amazing tractor is packed with quality features for high performance. Here, you can get all the information about the tractor like the Mahindra 575 di XP plus specification, price, hp, PTO hp, engine and many more.\r\n\r\nMahindra 575 DI XP Plus Tractor - Engine Capacity\r\n\r\nMahindra 575 is one of the popular tractors of the Mahindra brand and has a remarkable position in the tractor market. Mahindra 575 DI XP Plus is a 47 HP Tractor. The Mahindra 575 DI XP Plus engine capacity is 2979 CC and has 4 Cylinders generating engine rated RPM 2000, which is the best combination for the buyers. Moreover, the tractor model comes with a strong gearbox with 8 forward + 2 reverse gears. Mahindra 575 DI XP Plus pto hp is 42 hp. The powerful engine helps the tractor to perform the toughest farming operations with ease. ', 600, 'Petrol', 2021, 1, '575-di-xp-plus-1632207330.jpg', 'Mahindra 575 DI XP Plus 1.png', 'download.jpeg', 'yXtcnkKX6TunH94f115UnKMhF0Ij4Q0eM08ZmijS.jpeg', '', 1, 1, 1, '2023-03-01 07:04:35', '2023-03-03 12:34:20'),
(2, 'New Holland Tractors', 2, 'New Holland 3630 TX Plus is a classy tractor that attracts every farmer\'s attention. The tractor comes from the house of New Holland tractor and is rich with an extra advanced technological solution for the effective work. New Holland 3630 is the best and the most suitable tractor for almost all types of the Indian region. It can efficiently perform almost every type of farming application. Check out New Holland 3630 TX Plus Price, Model, Engine Capacity, Pto Hp, Specification and much more. \r\n\r\nNew Holland 3630 – Engine Capacity \r\n\r\nNew Holland 3630 TX Plus tractor has an engine of 2991 CC, strong and robust in the working field. The tractor is 55 HP and has a set of 3 cylinders. The combination of these features makes this tractor a better choice amongst this range of tractors. Its engine rated RPM is 1500, and it comes with a dry-type air filter that protects the tractor engine from outside dust particles. 3630 New Holland has an advanced water-cooling technology that makes your engine cool in warm conditions. The PTO hp of the tractor is 50.7 that delivers optimum power to the attached farm equipment. The tractor’s engine is developed with hi-tech components and features that make it more efficient for agriculture and allied sectors. Its design and style are too attractive which impresses all the farmers. With this potent engine, the tractor can easily face weather, climate, soil and field conditions. ', 800, 'Petrol', 2020, 2, '3230-nx-1632215295.jpg', 'upload-1632215295-0.jpg', '3630-tx-plus-1632217134.jpg', '20210216103401.png', '', 1, 1, 1, '2020-07-07 07:12:02', '2023-03-04 02:49:35'),
(3, 'Swaraj 744 FE', 3, 'Swaraj 744 FE is a 33.55 – 37.28 kW (45-50hp) category tractor which provides real value for money to its owners. It is fitted with a powerful & fuel efficient 3-cylinder water-cooled engine. It comes with multi speed forward and reverse PTO which makes it highly fuel efficient on PTO driven applications like alternator thresher and reaper. The tractor is equipped with host of features like power steering, dual clutch, DCV and adjustable front-axle. Overall, a powerful all-rounder and an excellent performer.', 700, 'Petrol', 2021, 1, '744-fe-1631014732.jpg', 'SWARAJ-744-FE-4.jpg', 'upload-1591423356-1.jpg', '744-fe-4wd-1631014809.jpg', '', 1, 1, 1, '2023-02-28 07:19:21', '2023-03-04 02:50:10'),
(4, 'Farmtrac 60 classic pro Supermaxx tractor', 4, 'Farmtrac tractors are a wide range of tractors having great efficiency and outstanding effectivity in performance.Farmtrac 60 classic pro Supermaxx tractor engine efficiency of this tractor is 50 HP and PTO HP is NA. The tractor has 8 Forward + 2 Reverse gears and oil-immersed brakes. The fuel tank capacity of the tractor is 60 Lit litres which keeps it long-lasting and durable in performance. The number of cylinders attached with the tractor is 3 having the outstanding ability and maximum efficiency to offer. The price of Farmtrac 60 classic pro Supermaxx 2023 is worth NA *.\r\n\r\nFarmtrac 60 classic pro Supermaxx tractor in India 2023 is the best known and much recognized in the space of having qualified and sound tractors. Farmtrac 60 classic pro Supermaxx is the super classy tractor having an attractive design and unique structure. Farmtrac tractor in India 2021 has already taken upon the share in farmers\' purchase. \r\n\r\nIt has excellent features, quality, and fair price for the tractors keeping them intact and best in use for the farmers and for all kinds of use. The tractor catches everybody’s attention and preference. The company always provides the tractor according to the choice, features, quality and the best price of it making it suitable and easily fit in everybody’s budget. This Farmtrac tractor in India is powered by a fuel-efficient engine that is compatible and robust in use and applications. Farmtrac 60 classic pro Supermaxx tractor has a 4 wheel drive that helps you in completing all the tasks at ease. Moreover, these tractors are kept for all kinds of cropping like cotton, sugarcane, vineyards, and orchards. The highly efficient transmission of the tractor ensures more PTO power delivering superior performance in rotary implements. Farmtrac 60 classic pro Supermaxx tractor in India in 2023 will hopefully maintain its great functionalities too', 900, 'Petrol', 2021, 1, '6171702825307_farmtrac-60-classic-pro-supermaxx-tractorgyan.jpg', 'upload-1632216996-0.jpg', 'Capture.PNG', 'farmtrac-60-power-maxx-tractor-price.jpg', '', 1, NULL, 1, '2021-07-07 07:25:28', '2023-03-02 11:47:57'),
(5, 'Swaraj 855 FE 4WD', 5, 'Swaraj 855 FE 4WD is an amazing and powerful tractor with a super attractive design. Swaraj 855 FE 4WD is an effective tractor launched by the Swaraj Tractor. The 855 FE 4WD comes with all the advanced technology for effective work on the farm. Here we show all the features, quality, and fair price of the Swaraj 855 FE 4WD Tractor. Check down below.\r\n\r\nSwaraj 855 FE 4WD Engine Capacity\r\n\r\nThe tractor comes with 52 HP. Swaraj 855 FE 4WD engine capacity provides efficient mileage on the field. The Swaraj 855 FE 4WD is one of the powerful tractors and offers good mileage. The 855 FE 4WD Tractor has a capability to provide high performance on the field. Swaraj 855 FE 4WD comes with super power which is fuel efficient.', 600, 'Petrol', 2021, 1, '855-fe-4wd-1631015796.jpg', 'Swaraj-855-FE1669626848.png\r\n', 'upload-1591453175-1.jpg', '0c929e47580fe5360ea17cdd482858ae.jpg', '', 1, 1, 1, '2021-07-07 07:34:17', '2023-03-04 02:48:57');

-- --------------------------------------------------------

--
-- Table structure for table `uploadimages`
--

CREATE TABLE `uploadimages` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `uploadimages`
--

INSERT INTO `uploadimages` (`id`, `name`, `mobile`, `image`) VALUES
(6, 'Akash', '2412463635', 'images/LOGO.png'),
(7, 'Akash', '2412463635', 'images/LOGO.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `gender` enum('male','female') NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `full_name`, `phone`, `gender`, `address`) VALUES
(2, 'gunjagupta13@gmail.com', '79dbc4894cc8570eb3eb02eda4f24087bc8e1a04', 'gunja gupta', '9112309922', 'female', 'warje'),
(3, 'a@gmail.com', 'a0918f39af4db17eec15a0edda1c17ac723d33b3', 'Akash Shilimkar', '9373267054', 'male', 'Bhagyashree Nagar Society');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `crops`
--
ALTER TABLE `crops`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `crop_prediction`
--
ALTER TABLE `crop_prediction`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `market_price`
--
ALTER TABLE `market_price`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblbooking`
--
ALTER TABLE `tblbooking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblbrands`
--
ALTER TABLE `tblbrands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblcontactusinfo`
--
ALTER TABLE `tblcontactusinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblcontactusquery`
--
ALTER TABLE `tblcontactusquery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblpages`
--
ALTER TABLE `tblpages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblsubscribers`
--
ALTER TABLE `tblsubscribers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbltestimonial`
--
ALTER TABLE `tbltestimonial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblusers`
--
ALTER TABLE `tblusers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `EmailId` (`EmailId`);

--
-- Indexes for table `tblvehicles`
--
ALTER TABLE `tblvehicles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uploadimages`
--
ALTER TABLE `uploadimages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `crops`
--
ALTER TABLE `crops`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `crop_prediction`
--
ALTER TABLE `crop_prediction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `market_price`
--
ALTER TABLE `market_price`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblbooking`
--
ALTER TABLE `tblbooking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tblbrands`
--
ALTER TABLE `tblbrands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tblcontactusinfo`
--
ALTER TABLE `tblcontactusinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblcontactusquery`
--
ALTER TABLE `tblcontactusquery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblpages`
--
ALTER TABLE `tblpages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tblsubscribers`
--
ALTER TABLE `tblsubscribers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbltestimonial`
--
ALTER TABLE `tbltestimonial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblusers`
--
ALTER TABLE `tblusers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblvehicles`
--
ALTER TABLE `tblvehicles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `uploadimages`
--
ALTER TABLE `uploadimages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
