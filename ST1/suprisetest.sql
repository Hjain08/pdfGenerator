-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2021 at 09:22 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `suprisetest`
--

-- --------------------------------------------------------

--
-- Table structure for table `st01`
--

CREATE TABLE `st01` (
  `id` int(10) NOT NULL,
  `uname` text NOT NULL,
  `num` int(10) NOT NULL,
  `addr` varchar(255) NOT NULL,
  `quer` varchar(255) NOT NULL,
  `submission` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `st01`
--

INSERT INTO `st01` (`id`, `uname`, `num`, `addr`, `quer`, `submission`) VALUES
(1, 'Harshitha', 787986755, 'Basavanagudi', 'Hello, Can you please help me with the login page?', '2021-04-11 09:53:20'),
(2, 'Harshitha', 787986755, 'Basavanagudi', 'Hello, Can you please help me with the login page?', '2021-04-11 09:53:26'),
(3, 'Nithisha', 675432123, 'Bangalore', 'hjeiuuhad', '2021-04-11 09:54:20'),
(4, 'Rishitha', 676543457, 'KGF', 'can you fix wifi issue?', '2021-04-11 09:55:17'),
(5, 'Rahul', 879076543, 'please call back ASAP!', '', '2021-04-11 09:55:46'),
(6, 'Shreyash ', 897609873, 'Varanasi', 'hello!!Help me!', '2021-04-11 09:56:26'),
(7, 'Jungkook', 787890876, 'S Korea', 'hguihjbnmjlkjkhhjghcfctuikhj', '2021-04-11 14:10:30'),
(8, 'Radhe', 67098754, 'Ramnagar', 'jdksfyuibxjkk', '2021-04-12 05:37:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `st01`
--
ALTER TABLE `st01`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `st01`
--
ALTER TABLE `st01`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
