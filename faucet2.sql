-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Mar 22, 2018 at 07:44 PM
-- Server version: 5.6.35
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `faucet2`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_config`
--

CREATE TABLE `tbl_config` (
  `config_id` int(11) NOT NULL,
  `header` varchar(200) COLLATE utf8_persian_ci NOT NULL,
  `value` varchar(200) COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `tbl_config`
--

INSERT INTO `tbl_config` (`config_id`, `header`, `value`) VALUES
(1, 'referral_percent', '60'),
(2, 'timer', '5'),
(3, 'currency', 'mBTC'),
(4, 'donate_type', 'USD'),
(5, 'donate_min', '0.001'),
(6, 'privkey', 'a6mR4tvKFf0jn7fU919maazSE.j9ZmS9'),
(7, 'verkey', 'H4LpDjtgqHFNeeYMtyscF6S9zMH3RhEi'),
(8, 'hashkey', 's6WVD0WALZugDkC9symb.nyLjl94TqW1'),
(9, 'pusername', 'wilan'),
(10, 'papiname', 'phpfaucet'),
(11, 'ppassword', 'php123'),
(12, 'STORE_NAME', 'phpfaucetsci'),
(13, 'asmoneymin', '1'),
(14, 'currencymin', '1'),
(15, 'minimum_donate', '4'),
(16, 'sci_username', 'a'),
(17, 'sci_pass', 'dsad'),
(18, 'requestcount', '10');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_donate`
--

CREATE TABLE `tbl_donate` (
  `donate` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `amount` int(10) UNSIGNED NOT NULL,
  `date` int(4) UNSIGNED NOT NULL,
  `link` text COLLATE utf8_persian_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `tbl_donate`
--

INSERT INTO `tbl_donate` (`donate`, `user_id`, `amount`, `date`, `link`, `status`) VALUES
(1, 14, 0, 1521765920, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_prize`
--

CREATE TABLE `tbl_prize` (
  `prize_id` int(11) NOT NULL,
  `prize` float NOT NULL,
  `chance` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_prize`
--

INSERT INTO `tbl_prize` (`prize_id`, `prize`, `chance`) VALUES
(7, 1, 1),
(16, 10, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_transaction`
--

CREATE TABLE `tbl_transaction` (
  `trans_id` int(10) UNSIGNED NOT NULL,
  `user_Id` int(10) UNSIGNED NOT NULL,
  `amount` int(10) UNSIGNED NOT NULL,
  `date` int(4) UNSIGNED NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `ausername` varchar(200) COLLATE utf8_persian_ci DEFAULT NULL,
  `username` varchar(200) COLLATE utf8_persian_ci NOT NULL,
  `password` varchar(200) COLLATE utf8_persian_ci NOT NULL,
  `address` varchar(300) COLLATE utf8_persian_ci DEFAULT NULL,
  `parent_id` int(11) UNSIGNED DEFAULT NULL,
  `reset` int(11) NOT NULL DEFAULT '0',
  `ip` int(10) UNSIGNED DEFAULT NULL,
  `credit` decimal(20,8) DEFAULT '0.00000000'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `ausername`, `username`, `password`, `address`, `parent_id`, `reset`, `ip`, `credit`) VALUES
(14, 'cesardanielhg', 'cesardanielhg', '5574dc479dedd21ce1a16be01dd018c7', 'kkkkkfldlfd32343kdkflf', NULL, 1521766065, 0, '34.00000000');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_withdrawal`
--

CREATE TABLE `tbl_withdrawal` (
  `withdrawal_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `amount` float UNSIGNED NOT NULL,
  `fee` int(11) NOT NULL,
  `date` int(4) DEFAULT NULL,
  `type` tinyint(1) NOT NULL,
  `wallet` varchar(300) COLLATE utf8_persian_ci NOT NULL,
  `reccode` varchar(200) COLLATE utf8_persian_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `tbl_withdrawal`
--

INSERT INTO `tbl_withdrawal` (`withdrawal_id`, `user_id`, `amount`, `fee`, `date`, `type`, `wallet`, `reccode`, `status`) VALUES
(3, 13, 0.89, 0, NULL, 1, '', '167457', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_config`
--
ALTER TABLE `tbl_config`
  ADD PRIMARY KEY (`config_id`);

--
-- Indexes for table `tbl_donate`
--
ALTER TABLE `tbl_donate`
  ADD PRIMARY KEY (`donate`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `tbl_prize`
--
ALTER TABLE `tbl_prize`
  ADD PRIMARY KEY (`prize_id`),
  ADD KEY `chance` (`chance`);

--
-- Indexes for table `tbl_transaction`
--
ALTER TABLE `tbl_transaction`
  ADD PRIMARY KEY (`trans_id`),
  ADD KEY `user_Id` (`user_Id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `parent_id` (`parent_id`);

--
-- Indexes for table `tbl_withdrawal`
--
ALTER TABLE `tbl_withdrawal`
  ADD PRIMARY KEY (`withdrawal_id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_config`
--
ALTER TABLE `tbl_config`
  MODIFY `config_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `tbl_donate`
--
ALTER TABLE `tbl_donate`
  MODIFY `donate` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_prize`
--
ALTER TABLE `tbl_prize`
  MODIFY `prize_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `tbl_transaction`
--
ALTER TABLE `tbl_transaction`
  MODIFY `trans_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `tbl_withdrawal`
--
ALTER TABLE `tbl_withdrawal`
  MODIFY `withdrawal_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_transaction`
--
ALTER TABLE `tbl_transaction`
  ADD CONSTRAINT `tbl_transaction_ibfk_1` FOREIGN KEY (`user_Id`) REFERENCES `tbl_user` (`user_id`) ON DELETE CASCADE;

--
-- Constraints for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD CONSTRAINT `tbl_user_ibfk_1` FOREIGN KEY (`parent_id`) REFERENCES `tbl_user` (`user_id`) ON DELETE SET NULL;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
