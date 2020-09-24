-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2018 at 01:39 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foodwastagesaver`
--

-- --------------------------------------------------------

--
-- Table structure for table `a_register`
--

CREATE TABLE `a_register` (
  `reg_id` int(11) NOT NULL,
  `fname` varchar(15) NOT NULL,
  `mname` varchar(15) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `pnumber` int(10) NOT NULL,
  `password` varchar(8) NOT NULL,
  `org` varchar(40) NOT NULL,
  `address` varchar(80) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `a_register`
--

INSERT INTO `a_register` (`reg_id`, `fname`, `mname`, `lname`, `pnumber`, `password`, `org`, `address`, `email`) VALUES
(0, 'tejas', 'hemant', 'choudhari', 2147483647, 'tejas', 'pce', 'dombivli', 'tejas.choudhari15@gmail.com'),
(0, 'tejas', 'hemant', 'choudhari', 2147483647, 'tejas', 'pce', 'dombivli', 'tejas.choudhari15@gmail.com'),
(0, 'tejas', 'hemant', 'choudhari', 2147483647, 'tejas', 'pce', 'dombivli', 'tejas.choudhari15@gmail.com'),
(0, 'shreyas', 'hemant', 'choudhari', 998701465, 'shre', 'pce', 'dombivli', 'tejas.choudhari12@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `break`
--

CREATE TABLE `break` (
  `Name` varchar(20) NOT NULL,
  `Sprout bean` varchar(15) NOT NULL,
  `Salt` varchar(15) NOT NULL,
  `Garam Masala` varchar(15) NOT NULL,
  `Ginger Garlic Paste` varchar(15) NOT NULL,
  `Turmeric Powder` varchar(15) NOT NULL,
  `Cumins seed` varchar(15) NOT NULL,
  `Onion` varchar(15) NOT NULL,
  `Tomato` varchar(15) NOT NULL,
  `Coriander Powder` varchar(15) NOT NULL,
  `Red chilli powder` varchar(15) NOT NULL,
  `Refined Oil` varchar(15) NOT NULL,
  `Sev` varchar(15) NOT NULL,
  `Pav` int(11) NOT NULL,
  `Potato` varchar(15) NOT NULL,
  `Green Peas` varchar(15) NOT NULL,
  `Coaliflower` varchar(15) NOT NULL,
  `Carrot` varchar(15) NOT NULL,
  `Lemon juice` varchar(15) NOT NULL,
  `Poha` varchar(15) NOT NULL,
  `Penauts` varchar(15) NOT NULL,
  `Eggs` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `break`
--

INSERT INTO `break` (`Name`, `Sprout bean`, `Salt`, `Garam Masala`, `Ginger Garlic Paste`, `Turmeric Powder`, `Cumins seed`, `Onion`, `Tomato`, `Coriander Powder`, `Red chilli powder`, `Refined Oil`, `Sev`, `Pav`, `Potato`, `Green Peas`, `Coaliflower`, `Carrot`, `Lemon juice`, `Poha`, `Penauts`, `Eggs`) VALUES
('Misal Pav', '0.88 kg', '0.0057 kg', '0.028 kg', '0.014 kg', '0.0114 kg', '0.0114 kg', '0.375 kg', '0.32 kg', '0.28 kg', '0.056 kg', '9.8 ml', '0.22 kg', 4, '0', '0', '0', '0', '0', '0', '0', 0),
('Omlet Pav', '0 ', '0 ', '0.0057 kg', '0 ', '0 ', '0 ', '0.15 kg', '0.16 kg', '0.0057 kg', '0.057 kg', '14.7 ml', '0 ', 4, '0', '0', '0 ', '0 ', '0 ', '0 ', '0 ', 2),
('Pav Bhaji', '0', '0', '0', '0.014 kg', '0.0057kg', '0', '0.15 kg', '0.32 kg', '0', '0', '9.8 ml', '0', 4, '0.24 kg', '0.11 kg', '0.66 kg', '0.22 kg', '4.9 ml', '0', '0', 0),
('Pohe', '0', '0', '0', '0', '0.0057 kg', '0', '0.15 kg', '0', '0', '0.056 kg', '7.35 ml', '0', 0, '0', '0', '0', '0', '0', '0.33 kg', '0.028 kg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `m_id` int(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `udated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`m_id`, `name`, `email`, `message`, `udated_at`) VALUES
(1, 'Tejas Choudhari', 'tejas.choudhari15@gmail.com', 'Thank you very much!!!', '2018-10-08 07:37:55'),
(2, 'Rahul', 'RAhul@gmail.com', 'iyxewvhkyxvwkjvbkxuwhbakjxhbckejsdjhvbwucxsavycwxjjkwhevbhjcxvhwdkjcvsx kjewv xckjwevdjkvewjxcvdwkjvc jkewsvgckjwjhvcjkh wekjh cxejwkg c', '2018-10-08 07:40:36');

-- --------------------------------------------------------

--
-- Table structure for table `c_login`
--

CREATE TABLE `c_login` (
  `login_id` int(15) NOT NULL,
  `email` varchar(25) NOT NULL,
  `pnumber` int(10) NOT NULL,
  `password` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `c_register`
--

CREATE TABLE `c_register` (
  `reg_id` int(11) NOT NULL,
  `fname` varchar(15) NOT NULL,
  `mname` varchar(15) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `pnumber` int(10) NOT NULL,
  `password` varchar(8) NOT NULL,
  `org` varchar(40) NOT NULL,
  `address` varchar(80) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `c_register`
--

INSERT INTO `c_register` (`reg_id`, `fname`, `mname`, `lname`, `pnumber`, `password`, `org`, `address`, `email`) VALUES
(28, 'Tejas', 'Hemant', 'Choudhari', 2147483647, 'shreya', 'PCE', 'Dombivli', 'tejas.choudhari15@gmail.com'),
(29, 'rahul', '', '', 0, 'rahul', '', '', 'tejas.choudhari12@gmail.com'),
(30, 'Tejas', 'Hemant', 'Choudhari', 0, '', 'p', '', ''),
(31, 'Tejas', 'Hemant', 'Choudhari', 0, '', 'p', '', ''),
(32, 'Tejas', 'Hemant', 'Choudhari', 0, '', 'p', '', ''),
(33, 'Tejas', 'Hemant', 'Choudhari', 0, '', 'p', '', ''),
(34, 'Tejas', 'Hemant', 'Choudhari', 0, '', 'p', '', ''),
(35, '', '', '', 0, '', '', '', ''),
(36, '', '', '', 0, '', '', '', 'tejas.choudhari12@gmail.com'),
(37, 'shreuy', '', '', 0, '', '', '', ''),
(38, 'shreuy', '', '', 0, '', '', '', ''),
(39, 'te', '', '', 0, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `lunch`
--

CREATE TABLE `lunch` (
  `Name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `otp_ver`
--

CREATE TABLE `otp_ver` (
  `email` varchar(50) NOT NULL,
  `otp` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `otp_ver`
--

INSERT INTO `otp_ver` (`email`, `otp`) VALUES
('tejas.choudhari10@gmail.com', 358709),
('tejas.choudhari15@gmail.com', 434457),
('tejas.choudhari10@gmail.com', 337914),
('tejas.choudhari12@gmail.com', 334778),
('tejas.choudhari12@gmail.com', 479403),
('tejas.choudhari12@gmail.com', 405045),
('tejas.choudhari15@gmail.com', 339227),
('tejas.choudhari15@gmail.com', 791781);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `break`
--
ALTER TABLE `break`
  ADD PRIMARY KEY (`Name`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`m_id`),
  ADD KEY `email` (`email`);

--
-- Indexes for table `c_login`
--
ALTER TABLE `c_login`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `c_register`
--
ALTER TABLE `c_register`
  ADD PRIMARY KEY (`reg_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `m_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `c_login`
--
ALTER TABLE `c_login`
  MODIFY `login_id` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `c_register`
--
ALTER TABLE `c_register`
  MODIFY `reg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
