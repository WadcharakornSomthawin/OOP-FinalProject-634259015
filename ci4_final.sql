-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2022 at 05:16 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci4_final`
--

-- --------------------------------------------------------

--
-- Table structure for table `names`
--

CREATE TABLE `names` (
  `id` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `timeIn` time NOT NULL,
  `timeOut` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `names`
--

INSERT INTO `names` (`id`, `fname`, `lname`, `email`, `timeIn`, `timeOut`) VALUES
(8, 'วัชรากร (ต่อ)', 'สมถวิล', '634259015@webmail.npru.ac.th', '09:15:00', '17:09:00'),
(11, 'Nawaporn', 'Boongon', '644259029@webmail.npru.ac.th', '13:35:00', '14:19:00'),
(12, '001 Kanokporn', 'Donpaitee', '644259001@webmail.npru.ac.th', '13:35:00', '14:06:00'),
(13, 'Athiphong', 'Hinoon', '644259026@webmail.npru.ac.th', '13:32:00', '14:19:00'),
(14, 'Worapakorn', 'Jarusiriphot', '644259018@webmail.npru.ac.th', '13:32:00', '14:20:00'),
(15, '014 Nattavut', 'Kaewmaha', '644259014@webmail.npru.ac.th', '13:58:00', '14:19:00'),
(16, 'Suttiporn', 'Kaewsakunnee', '644259025@webmail.npru.ac.th', '13:32:00', '14:18:00'),
(17, 'Surapong', 'keaynin', '644259036@webmail.npru.ac.th', '13:32:00', '14:24:00'),
(18, 'Supphalak', 'Maneepanpanit', '644259034@webmail.npru.ac.th', '13:32:00', '14:30:00'),
(19, 'Natthacha', 'Mumdaeng', '644259007@webmail.npru.ac.th', '13:32:00', '14:19:00'),
(20, 'Thiranat', 'Nutcharoan', '644259011@webmail.npru.ac.th', '13:32:00', '14:16:00'),
(21, 'Athicha', 'Phrombut', '644259040@webmail.npru.ac.th', '13:32:00', '14:21:00'),
(22, 'Sekkarin', 'Singhayoo', '644259021@webmail.npru.ac.th', '13:32:00', '14:20:00'),
(23, '039 Perawich', 'Sirisopon', '644259039@webmail.npru.ac.th', '13:46:00', '14:19:00'),
(24, '003 Kuttapat', 'Somwang', '644259003@webmail.npru.ac.th', '14:11:00', '14:20:00'),
(25, '012 Nattaphong', 'Sriphophan', '644259012@webmail.npru.ac.th', '13:36:00', '14:21:00'),
(26, 'Punyaphat', 'Tagodee', '644259015@webmail.npru.ac.th', '13:57:00', '14:14:00'),
(27, 'Anusom', 'Thavorn', 'moni*****@***.com', '13:39:00', '14:22:00'),
(28, '038 Bowonlak', 'Yookong', '644259038@webmail.npru.ac.th', '13:33:00', '14:20:00'),
(29, 'สมเกียรติ', 'ช่อเหมือน', 'tko@webmail.npru.ac.th', '13:32:00', '14:20:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `names`
--
ALTER TABLE `names`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `names`
--
ALTER TABLE `names`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
