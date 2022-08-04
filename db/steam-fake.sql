-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 04, 2022 at 11:56 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `steam-fake`
--

-- --------------------------------------------------------

--
-- Table structure for table `games`
--

CREATE TABLE `games` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `creator` text NOT NULL,
  `releasedate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `games`
--

INSERT INTO `games` (`id`, `name`, `creator`, `releasedate`) VALUES
(1, 'Test01', 'Unkown', '1983-08-11');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` text NOT NULL,
  `password` text NOT NULL,
  `joindate` date NOT NULL,
  `level` int(11) NOT NULL,
  `bannedstatus` char(1) NOT NULL,
  `bannedtime` date NOT NULL,
  `Test01PlayTime` int(11) NOT NULL,
  `Test01LastPlay` date NOT NULL,
  `AdminStatus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `joindate`, `level`, `bannedstatus`, `bannedtime`, `Test01PlayTime`, `Test01LastPlay`, `AdminStatus`) VALUES
('Test', '123', '2015-08-07', 52, '1', '2017-07-01', 925, '2022-07-01', 0),
('$generatedusername', 'GeneratedAccount.js', '2013-05-01', 265, '0', '0000-00-00', 0, '2013-05-01', 0),
('AdminAcc', 'SuperSecurePassword123!', '2022-08-01', 1, '0', '0000-00-00', 0, '2022-08-01', 1),
('', 'GeneratedAccount.js', '2013-05-01', 265, '0', '0000-00-00', 0, '2013-05-01', 0),
('', 'GeneratedAccount.js', '2013-05-01', 265, '0', '0000-00-00', 0, '2013-05-01', 0),
('user98317', 'GeneratedAccount.js', '2013-05-01', 265, '0', '0000-00-00', 0, '2013-05-01', 0),
('user98317', 'GeneratedAccount.js', '2013-05-01', 265, '0', '0000-00-00', 0, '2013-05-01', 0),
('user98317', 'GeneratedAccount.js', '2013-05-01', 265, '0', '0000-00-00', 0, '2013-05-01', 0),
('user98317', 'GeneratedAccount.js', '2013-05-01', 265, '0', '0000-00-00', 0, '2013-05-01', 0),
('user98317', 'GeneratedAccount.js', '2013-05-01', 265, '0', '0000-00-00', 0, '2013-05-01', 0),
('user98317', 'GeneratedAccount.js', '2013-05-01', 265, '0', '0000-00-00', 0, '2013-05-01', 0),
('user98317', 'GeneratedAccount.js', '2013-05-01', 265, '0', '0000-00-00', 0, '2013-05-01', 0),
('user98317', 'GeneratedAccount.js', '2013-05-01', 265, '0', '0000-00-00', 0, '2013-05-01', 0),
('user98317', 'GeneratedAccount.js', '2013-05-01', 265, '0', '0000-00-00', 0, '2013-05-01', 0),
('user98317', 'GeneratedAccount.js', '2013-05-01', 265, '0', '0000-00-00', 0, '2013-05-01', 0),
('user98317', 'GeneratedAccount.js', '2013-05-01', 265, '0', '0000-00-00', 0, '2013-05-01', 0),
('user98317', 'GeneratedAccount.js', '2013-05-01', 265, '0', '0000-00-00', 0, '2013-05-01', 0),
('user98317', 'GeneratedAccount.js', '2013-05-01', 265, '0', '0000-00-00', 0, '2013-05-01', 0),
('user98317', 'GeneratedAccount.js', '2013-05-01', 265, '0', '0000-00-00', 0, '2013-05-01', 0),
('user98317', 'GeneratedAccount.js', '2013-05-01', 265, '0', '0000-00-00', 0, '2013-05-01', 0),
('user98317', 'GeneratedAccount.js', '2013-05-01', 265, '0', '0000-00-00', 0, '2013-05-01', 0),
('user98317', 'GeneratedAccount.js', '2013-05-01', 265, '0', '0000-00-00', 0, '2013-05-01', 0),
('user98317', 'GeneratedAccount.js', '2013-05-01', 265, '0', '0000-00-00', 0, '2013-05-01', 0),
('', 'GeneratedAccount.js', '2013-05-01', 265, '0', '0000-00-00', 0, '2013-05-01', 0),
('', 'GeneratedAccount.js', '2013-05-01', 265, '0', '0000-00-00', 0, '2013-05-01', 0),
('user94761', 'GeneratedAccount.js', '2013-05-01', 265, '0', '0000-00-00', 0, '2013-05-01', 0),
('user39420', 'GeneratedAccount.js', '2013-05-01', 265, '0', '0000-00-00', 0, '2013-05-01', 0),
('user88442', 'GeneratedAccount.js', '2013-05-01', 265, '0', '0000-00-00', 0, '2013-05-01', 0),
('user4712', 'GeneratedAccount.js', '2013-05-01', 265, '0', '0000-00-00', 0, '2013-05-01', 0),
('user32176', 'GeneratedAccount.js', '2013-05-01', 265, '0', '0000-00-00', 0, '2013-05-01', 0),
('user61265', 'GeneratedAccount.js', '2013-05-01', 265, '0', '0000-00-00', 0, '2013-05-01', 0),
('user62443', 'GeneratedAccount.js', '2013-05-01', 265, '0', '0000-00-00', 0, '2013-05-01', 0),
('user21610', 'GeneratedAccount.js', '2013-05-01', 265, '0', '0000-00-00', 0, '2013-05-01', 0),
('user6564', 'GeneratedAccount.js', '2013-05-01', 265, '0', '0000-00-00', 0, '2013-05-01', 0),
('user33129', 'GeneratedAccount.js', '2013-05-01', 265, '0', '0000-00-00', 0, '2013-05-01', 0),
('user7796', 'GeneratedAccount.js', '2013-05-01', 265, '0', '0000-00-00', 0, '2013-05-01', 0),
('user39239', 'GeneratedAccount.js', '2013-05-01', 265, '0', '0000-00-00', 0, '2013-05-01', 0),
('user28320', 'GeneratedAccount.js', '2013-05-01', 265, '0', '0000-00-00', 0, '2013-05-01', 0),
('user14248', 'GeneratedAccount.js', '2013-05-01', 265, '0', '0000-00-00', 0, '2013-05-01', 0),
('user9866', 'GeneratedAccount.js', '2013-05-01', 265, '0', '0000-00-00', 0, '2013-05-01', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
