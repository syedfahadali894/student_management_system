-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2023 at 09:55 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admin`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `name` varchar(50) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `category` varchar(50) NOT NULL,
  `id` int(11) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`name`, `email`, `password`, `category`, `id`, `status`) VALUES
('user', 'user@gmail.com', '123', 'user', 13, 'Active'),
('syedfahadali894', 'sfahadali894@gmail.com', '123', 'admin', 14, 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `bcode` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `image` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `fname`, `email`, `bcode`, `status`, `image`) VALUES
(29, 'Fahad Ali', 'Abdul Razzaq', 'user@gmail.com', '2211F', 'Deactive', '../images/R (1).jpg'),
(30, 'Fahad Ali', 'Abdul Razzaq', 'sfaha@gmail.com', '2211F', 'Active', '../images/R.jpg'),
(34, 'Fahad Ali', 'Abdul Razzaq', 'sfaha@gmail.com', '2211F', 'Active', 'Picture2.png'),
(35, 'Fahad Ali', 'ali', 'user@gmail.com', '2211F', 'Active', 'Beat Your Competetion.png'),
(36, 'Fahad Ali', 'Abdul Razzaq', 'sfahadali894@gmail.com', '2211F', 'Active', 'Screenshot_20220721-222704_Video Player (1).jpg'),
(38, 'Jinah', 'Jinah', 'user@gmail.com', '2211F', 'Active', '../images/fetch/icon.png'),
(39, 'Fahad Ali', 'Abdul Razzaq', 'sfaha@gmail.com', '2211F', 'Active', '../images/Blue Simple Professional CV Resume.pdf'),
(40, 'Fahad Ali', 'Abdul Razzaq', 'sfaha@gmail.com', '2211F', 'Active', '../images/'),
(41, 'Fahad Ali', 'Abdul Razzaq', 'user@gmail.com', '2211F', 'Active', '../images/'),
(42, 'sdfas', 'zsfasdf', 'sfahadali894@gmail.com', '2211F', 'Active', '../images/WhatsApp Image 2023-12-25 at 7.40.11 AM.jpeg'),
(43, 'Fahad Ali', 'Abdul Razzaq', 'sfaha@gmail.com', '2211F', 'Active', '../images/student-attendance-report.pdf'),
(44, 'Hammd Ali', 'Abdul', 'hammad@gmail.com', '2211F', 'Active', '../images/CV-1.pdf'),
(45, 'drg', 'ali', 'sfaha@gmail.com', '2211F', 'Active', '../images/Screenshot 2023-11-06 115434.png'),
(46, '24', 'gfhfh', 'user@gmail.com', '2211', 'Active', '../images/table_data.xlsx'),
(47, 'Fahad Ali', 'Abdul Razzaq', 'sfaha@gmail.com', '2211F', 'Active', '../images/1-removebg-preview (1).png'),
(48, 'Fahad Ali', 'Abdul Razzaq', 'sfaha@gmail.com', '2211F', 'Active', '../images/R.jpg'),
(49, '24', 'Abdul Razzaq', 'sfaha@gmail.com', '2211F', 'Active', '../images/R.jpg'),
(50, 'Fahad Ali', 'Abdul Razzaq', 'sfaha@gmail.com', '2211F', 'Active', '../images/R.jpg'),
(51, 'Fahad Ali', 'Abdul Razzaq', 'sfaha@gmail.com', '2211F', 'Active', '../images/R.jpg'),
(52, 'Fahad Ali', 'Abdul Razzaq', 'sfaha@gmail.com', '2211F', 'Active', '../images/R.jpg'),
(53, 'Fahad Ali', 'Abdul Razzaq', 'sfaha@gmail.com', '2211F', 'Active', '../images/R.jpg'),
(54, 'Fahad Ali', 'Abdul Razzaq', 'sfaha@gmail.com', '2211F', 'Active', '../images/F6Ww0zi1_400x400.jpg'),
(55, 'Fahad Ali', 'Abdul Razzaq', 'sfaha@gmail.com', '2211F', 'Active', '../images/F6Ww0zi1_400x400.jpg'),
(56, 'Fahad Ali', 'Abdul Razzaq', 'sfaha@gmail.com', '2211', 'Active', '../images/F6Ww0zi1_400x400.jpg'),
(57, 'Fahad Ali', 'Abdul Razzaq', 'sfaha@gmail.com', '2211F', 'Active', '../images/F6Ww0zi1_400x400.jpg'),
(58, 'Fahad Ali', 'Abdul Razzaq', 'sfaha@gmail.com', '2211F', 'Active', '../images/F6Ww0zi1_400x400.jpg'),
(59, 'Fahad Ali', 'Abdul Razzaq', 'sfaha@gmail.com', '2211F', 'Active', '../images/F6Ww0zi1_400x400.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
