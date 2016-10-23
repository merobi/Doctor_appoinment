-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 01, 2016 at 10:40 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutus`
--

CREATE TABLE `aboutus` (
  `id` int(11) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `admin_details`
--

CREATE TABLE `admin_details` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_details`
--

INSERT INTO `admin_details` (`id`, `user_id`, `fullname`, `email`, `phone`, `image`, `address`, `created_at`, `updated_at`) VALUES
(1, 0, 'sdfsdf', 'fsdfsdf@sadasd', '4234234', '', '4234234', '2016-09-08 07:32:13', '0000-00-00 00:00:00'),
(2, 0, 'asdasdasd', 'asdasd@asdasdas', '23112312', '', 'dasdasdasd', '2016-09-08 07:36:32', '0000-00-00 00:00:00'),
(3, 9, 'asdasd', 'asdasd@asdasdas', '231312', '', 'asdasda', '2016-09-08 07:46:33', '0000-00-00 00:00:00'),
(4, 12, 'helooadsas', 'asdasd@asdasdas', '31231231', 'dysQ6r2MF1WHqQVpDhlG.jpg', '312312312', '2016-09-08 07:54:02', '0000-00-00 00:00:00'),
(5, 13, 'fdgd', 'fsdfsdf@sadasd', '543534', 'oRNgpoiXRwm0G07twj3a.jpg', '345fdsgdfg dfgdf', '2016-09-08 08:15:05', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `appoinment`
--

CREATE TABLE `appoinment` (
  `id` int(11) NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `chamber_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `app_day` varchar(255) NOT NULL,
  `app_time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `camber_info`
--

CREATE TABLE `camber_info` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `country_id` int(11) NOT NULL,
  `city_id` int(255) NOT NULL,
  `postcode` varchar(255) NOT NULL,
  `phonenumber` varchar(255) NOT NULL,
  `contactsupport` varchar(255) NOT NULL,
  `day` varchar(255) NOT NULL,
  `start_time` varchar(255) NOT NULL,
  `end_time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `camber_info`
--

INSERT INTO `camber_info` (`id`, `name`, `address`, `country_id`, `city_id`, `postcode`, `phonenumber`, `contactsupport`, `day`, `start_time`, `end_time`) VALUES
(1, 'Lab Aid', 'Dhanmondi', 1, 1, '1234', '1', '2', '', '9:00AM', '3:00 PM'),
(2, 'nstu', 'dhaka', 1, 1, '8968', '01670465476', '01670465476', '', '9.00am', '6.00pm'),
(3, 'nstu', 'dhaka', 1, 1, '8968', '01670465476', '01670465476', '', '9.00am', '6.00pm'),
(4, 'gfhgf', 'dhaka', 1, 1, '8968', '01670465476', '01670465476', '', '9.00am', '6.00pm'),
(5, 'nstu', 'dhaka', 1, 1, '8968', '01670465476', '01670465476', '', '9.00am', '6.00pm'),
(6, 'nstu', 'dhaka', 3, 1, '8968', '01670465476', '01670465476', '', '9.00am', '6.00pm'),
(7, 'nstu', 'dhaka', 1, 1, '8968', '01670465476', '01670465476', '', '9.00am', '6.00pm'),
(8, '', '', 1, 1, '', '01671089989', '01671089989', '', '9:00AM', '3:00 PM');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact_details` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `doctors_info`
--

CREATE TABLE `doctors_info` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `hospital_id` int(11) NOT NULL,
  `speciality_id` int(11) NOT NULL,
  `camber_id` int(11) NOT NULL,
  `socialmedia_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `regi_no` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_no` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `country_id` int(11) NOT NULL,
  `city_id` int(255) NOT NULL,
  `post_code` int(11) NOT NULL,
  `about_me` text NOT NULL,
  `bloodgroup` varchar(255) NOT NULL,
  `birthday` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctors_info`
--

INSERT INTO `doctors_info` (`id`, `user_id`, `hospital_id`, `speciality_id`, `camber_id`, `socialmedia_id`, `title`, `firstname`, `lastname`, `image`, `regi_no`, `email`, `phone_no`, `address`, `country_id`, `city_id`, `post_code`, `about_me`, `bloodgroup`, `birthday`) VALUES
(1, 1, 1, 1, 1, 1, 'Mr.', 'Robi', 'Alam', 'doctor_images/fKUk4iBqSMcu47gsrvDh.jpg', 'D12345', 'robi@gmail.com', '01671069297', 'Gazupura', 1, 1, 234, 'i am robi from....dhakammmghdhf', 'A+', '1992-8-17'),
(2, 13, 1, 5, 3, 5, 'Mr.', 'robi', 'alam', 'doctor_images/nP1DzIdaxHpa6ZDzHiBN.png', '4575687698', 'prothomrobi1@gmail.com', '01671069296', 'uttara,Dhaka', 1, 1, 2345, 'i am robi', 'A+', '1992-2-12'),
(3, 14, 1, 6, 4, 6, 'Mr.', 'john', 'alam', 'doctor_images/LQboDgzfBr9qI69BgUly.png', '4575687698', 'tanvir@gmail.com', '01671069296', 'uttara,Dhaka', 1, 1, 2345, 'i am robi', 'B+', '1992-2-12'),
(4, 15, 1, 7, 5, 7, 'Mr.', 'hero', 'alam', 'doctor_images/7ClF882GQhF8XH1jf1mB.png', '4575687698', 'tanvir@gmail.com', '01671069296', 'uttara,Dhaka', 1, 2, 2345, 'cvn xgn', 'B+', '1992-2-12'),
(5, 20, 1, 12, 7, 9, 'Mr.', 'robi', 'alam', 'doctor_images/dfO5DUb20AMbV0dnqxBM.png', '4575687698', 'prothomrobi1@gmail.com', '01671069296', 'uttara,Dhaka', 1, 1, 2345, 'cvn xgn', '0', '1992-2-12'),
(6, 43, 1, 13, 8, 13, 'Mr.', 'Robi', 'Alam', 'doctor_images/ivPG98GncGRpp7OZivtU.jpg', 'D12345', 'prothomrobi1@gmail.com', '', '', 1, 1, 2344, '', 'A+', '1999-2-10');

-- --------------------------------------------------------

--
-- Table structure for table `doctors_speciality`
--

CREATE TABLE `doctors_speciality` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `degree` varchar(255) NOT NULL,
  `speciality` varchar(255) NOT NULL,
  `subspeciality` varchar(255) NOT NULL,
  `institution` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctors_speciality`
--

INSERT INTO `doctors_speciality` (`id`, `user_id`, `degree`, `speciality`, `subspeciality`, `institution`) VALUES
(1, 1, 'mbbs', 'Medicin', 'Body', 'DMC'),
(2, 10, 'mbbs', 'medicin', 'body', 'public'),
(3, 11, 'mbbs', 'xgvbdxfzv', 'body', 'dmc'),
(4, 12, 'mbbs', 'medicin', 'body', 'dmc'),
(5, 13, 'mbbs', 'medicin', 'body', 'dmc'),
(6, 14, 'fcfrs', 'medicin', 'body', 'dmc'),
(7, 15, 'mbbs', 'medicin', 'body', 'dmc'),
(8, 16, 'mbbs', 'medicin', 'body', 'public'),
(9, 17, 'mbbs', 'medicin', 'body', 'public'),
(10, 18, 'mbbs', 'medicin', 'body', 'public'),
(11, 19, 'mbbs', 'medicin', 'body', 'dmc'),
(12, 20, 'mbbs', 'medicin', 'body', 'dmc'),
(13, 43, 'fcfrs', 'Medicin', 'Body', '');

-- --------------------------------------------------------

--
-- Table structure for table `institute_info`
--

CREATE TABLE `institute_info` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `country_id` int(11) NOT NULL,
  `city_id` int(255) NOT NULL,
  `post_code` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `fax` varchar(255) NOT NULL,
  `about_hospital` text NOT NULL,
  `registration` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `institute_info`
--

INSERT INTO `institute_info` (`id`, `user_id`, `name`, `image`, `country_id`, `city_id`, `post_code`, `address`, `email`, `phone`, `fax`, `about_hospital`, `registration`, `type`) VALUES
(1, 3, 'Lab Aid', 'hospital_images/tgZo8kNvUmquDCK4uGwI.jpg', 1, 1, '23445', 'dhaka', 'prothomrobi1@gmail.com', '0167105954', 'fax099300', 'Lab Aid is a..rtyrhtr', '123467', 'Hospital'),
(4, 20, 'Lab Aid', 'hospital_images/YENVkDs2c2uWQrnCgymb.jpg', 1, 1, '234', '', 'prothomrobi1@gmail.com', '', '', 'sdgfdg', '1234', 'Hospital'),
(5, 4, 'Lab Aids', 'hospital_images/hu7L91jDC0Dd0Aq52gGg.jpg', 1, 1, '2345', 'Comilla', 'robi@gmail.com', '8698231659', 'faxooo11', 'hellooop', '123467', 'Daignostic'),
(6, 23, 'Lab Aid', 'diagnostic_images/Ot95zXxoybTGKrsyRn3f.jpg', 1, 1, '234', '', 'robi@gmail.com', '', '', 'hello', '123467', 'Daignostic'),
(7, 28, 'popular', 'hospital_images/k6H2OmcRL09QzBGBGMTd.jpg', 1, 1, '65434', '', 'popular@gmail.org', '0135647568', 'p345325', 'it is a ne ew nk', 'p32534', 'Hospital'),
(8, 29, 'popular', 'hospital_images/YiFONIwWzwfxONwBlHNz.jpg', 1, 1, '65434', '', 'popular@gmail.org', '0135647568', 'p345325', 'it is a ne ew nk', 'p32534', 'Hospital'),
(9, 33, 'popular', 'diagnostic_images/uquxa7Yb0Aa2oshgLzK5.jpg', 1, 1, '65434', '', 'popular@gmail.org', '0135647568', 'p345325', 'it is a bhjugk j', 'p32534', 'Daignostic'),
(10, 34, '', 'diagnostic_images/1OZFjDyAOemkITdxVIvQ.jpg', 1, 1, '', '', '', '', '', '', '', 'Daignostic'),
(11, 35, '', 'hospital_images/y7zgABiQsG6dM6uHLAKq.jpg', 1, 1, '', '', '', '', '', '', '', 'Hospital'),
(12, 36, '', 'diagnostic_images/UOe6wYvG5hA4C4J0eagm.jpg', 1, 15, '', '', '', '', '', '', '', 'Daignostic'),
(13, 37, '', 'diagnostic_images/sm7qvGsfKaUTBifBUB9E.jpg', 1, 2, '', '', '', '', '', '', '', 'Daignostic');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `age` varchar(255) NOT NULL,
  `birthday` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `bloodgroup` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`id`, `user_id`, `name`, `address`, `age`, `birthday`, `gender`, `email`, `phone`, `bloodgroup`, `image`) VALUES
(1, 2, 'Robiul', 'Gazupura', '23', '1999-02-13', 'male', 'prothomrobi1@gmail.com', '1', 'B+', 'patient_images/z7GX9fgh62m1wp3ByjqO.jpg'),
(2, 42, '', 'ytrjmnvhbmnv', '23', '23-2-1997', 'male', 'popular@gmail.org', '0135647568', 'A+', 'patient_images/FY7Ome9tiyOiElgosPHU.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `social_media`
--

CREATE TABLE `social_media` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `s_name` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `social_media`
--

INSERT INTO `social_media` (`id`, `user_id`, `s_name`, `link`) VALUES
(1, 1, 'Faceboook', 'www.facebook/robi'),
(2, 2, 'googlee', 'google'),
(3, 3, 'linkdin00', 'www.linkdin.com'),
(4, 4, 'faceb00ook', 'facebook'),
(5, 13, 'facebook', 'www.facebo0ok/robi'),
(6, 14, 'facebook', 'www.facebook/me'),
(7, 15, 'Facebo0ok', 'www.facebook/me'),
(8, 19, 'facebook', 'www.facebook/me'),
(9, 20, 'facebook', 'www.facebook/me'),
(10, 29, 'popular hospital', 'popular.org'),
(11, 35, '', ''),
(12, 42, 'popular diahnostic', 'popular.org'),
(13, 43, 'Facebook', 'www.facebook/robi');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_city`
--

CREATE TABLE `tbl_city` (
  `city_id` int(11) NOT NULL,
  `country_id` int(11) NOT NULL,
  `city_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_city`
--

INSERT INTO `tbl_city` (`city_id`, `country_id`, `city_name`) VALUES
(1, 1, 'Dhaka'),
(2, 1, 'Gazipur'),
(3, 1, 'Narsingdi'),
(4, 1, 'Narayangong'),
(5, 2, 'Mumbai'),
(6, 2, 'Dilhi'),
(15, 13, 'Dhaka'),
(16, 14, 'Dhaka');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_country`
--

CREATE TABLE `tbl_country` (
  `country_id` int(11) NOT NULL,
  `country_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_country`
--

INSERT INTO `tbl_country` (`country_id`, `country_name`) VALUES
(1, 'Bangladesh'),
(2, 'India'),
(3, 'Pakistan'),
(13, 'Bangladesh'),
(14, 'Bangladesh');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_help_link`
--

CREATE TABLE `tbl_help_link` (
  `id` int(11) NOT NULL,
  `institute_id` int(11) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_help_link`
--

INSERT INTO `tbl_help_link` (`id`, `institute_id`, `heading`, `url`) VALUES
(1, 1, 'dental', 'dental.......gjhgjhf'),
(2, 5, 'eye', 'eye.com'),
(3, 1, 'eye specialist', 'eye.com'),
(4, 1, 'neuro specialist', 'neuro.com'),
(5, 5, 'neuro...', 'neuro.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_medical_service`
--

CREATE TABLE `tbl_medical_service` (
  `id` int(11) NOT NULL,
  `institute_id` int(11) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `short_description` varchar(255) NOT NULL,
  `long_description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_medical_service`
--

INSERT INTO `tbl_medical_service` (`id`, `institute_id`, `heading`, `short_description`, `long_description`) VALUES
(1, 1, 'dfghfhfg', 'dfhfgjh', 'dfhfgjghkhjkdfhedgvsdf'),
(2, 5, 'eye', 'new dental is coming', 'new denta i kljdfklgk'),
(3, 1, 'eye specialist', 'eye specialist eye specialist ', 'eye specialist eye specialist eye specialist eye specialist eye specialist eye specialist'),
(4, 1, 'Neuro serjon', 'Neuro serjon is ...', 'Neuro serjon Neuro serjo Neuro serjon Neuro serjo'),
(5, 5, 'neuro specialist', 'neuro specialist....', 'specialistneuro specialist specialistneuro specialist');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `type`, `username`, `password`) VALUES
(1, 'Doctor', 'robi', '123456'),
(2, 'Patient', 'robi', '123456'),
(3, 'Hospital', 'admin', '123456'),
(4, 'Daignostic', 'admin', '123456'),
(5, 'Doctor', 'robi', '123456'),
(15, 'Doctor', 'hero', '123456'),
(16, 'Doctor', 'hey', '123456'),
(17, 'Doctor', 'hey', '123456'),
(18, 'Doctor', 'robi', '123456'),
(19, 'Doctor', 'jack', '123456'),
(20, 'Doctor', 'tom', '123456'),
(21, 'Hospital', 'popular', '123456'),
(30, 'Daignostic', 'popular', '123456'),
(31, 'Daignostic', 'admin', '123456'),
(32, 'Daignostic', 'popular', '123456'),
(33, 'Daignostic', 'popular', '123456'),
(34, 'Daignostic', '', ''),
(35, 'Hospital', 'popular', '123456'),
(36, 'Daignostic', 'admin', '123456'),
(37, 'Daignostic', 'admin', '123456'),
(38, 'Patient', 'robi', '123456'),
(39, 'Patient', 'robi', '123456'),
(40, 'Patient', 'robi', '123456'),
(41, 'Patient', 'robi', '123456'),
(42, 'Patient', 'robi', '123456'),
(43, 'Doctor', 'masud123', 'masud123');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutus`
--
ALTER TABLE `aboutus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_details`
--
ALTER TABLE `admin_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appoinment`
--
ALTER TABLE `appoinment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `camber_info`
--
ALTER TABLE `camber_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctors_info`
--
ALTER TABLE `doctors_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctors_speciality`
--
ALTER TABLE `doctors_speciality`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `institute_info`
--
ALTER TABLE `institute_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_media`
--
ALTER TABLE `social_media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_city`
--
ALTER TABLE `tbl_city`
  ADD PRIMARY KEY (`city_id`);

--
-- Indexes for table `tbl_country`
--
ALTER TABLE `tbl_country`
  ADD PRIMARY KEY (`country_id`);

--
-- Indexes for table `tbl_help_link`
--
ALTER TABLE `tbl_help_link`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_medical_service`
--
ALTER TABLE `tbl_medical_service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutus`
--
ALTER TABLE `aboutus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `admin_details`
--
ALTER TABLE `admin_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `appoinment`
--
ALTER TABLE `appoinment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `camber_info`
--
ALTER TABLE `camber_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `doctors_info`
--
ALTER TABLE `doctors_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `doctors_speciality`
--
ALTER TABLE `doctors_speciality`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `institute_info`
--
ALTER TABLE `institute_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `social_media`
--
ALTER TABLE `social_media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `tbl_city`
--
ALTER TABLE `tbl_city`
  MODIFY `city_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `tbl_country`
--
ALTER TABLE `tbl_country`
  MODIFY `country_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `tbl_help_link`
--
ALTER TABLE `tbl_help_link`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_medical_service`
--
ALTER TABLE `tbl_medical_service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
