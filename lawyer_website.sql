-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2024 at 01:20 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lawyer_website`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `Id` int(11) NOT NULL,
  `L_name` varchar(100) DEFAULT NULL,
  `Cfirst_name` varchar(100) DEFAULT NULL,
  `Clast_name` varchar(100) DEFAULT NULL,
  `C_address` varchar(100) DEFAULT NULL,
  `C_email` varchar(100) DEFAULT NULL,
  `C_number` varchar(100) DEFAULT NULL,
  `message` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `card`
--

CREATE TABLE `card` (
  `id` int(11) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `designation` varchar(50) DEFAULT NULL,
  `descripition` varchar(5000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `card`
--

INSERT INTO `card` (`id`, `name`, `designation`, `descripition`) VALUES
(1, 'Oliver Thompson', 'Civil Lawyer', '\"Civil lawyers are champions of resolution, adept at navigating the intricacies of non-criminal legal matters. From contract disputes to personal injury claims, they provide expert counsel and representation to individuals and businesses seeking justice and fair outcomes in civil court.\"'),
(2, 'Olivia Williams', 'Divorce & Family Lawyer', '\"Supporting you through life challenges our family lawyers provide compassionate guidance and expert counsel to protect what matters most: your loved ones and your future.\"'),
(3, 'Henry Taylor', 'Criminal Lawyer', '\"In the face of legal adversity, our criminal lawyers stand as vigilant defenders of justice, ensuring your rights are upheld and your voice is heard. Trust in our expertise to navigate the complexities of the law and safeguard your liberty.\"'),
(4, 'Amelia Parker', 'Labour Lawyer', '\"Empowering employees and employers alike, our labor lawyers champion fairness, advocate for rights, and navigate the complexities of workplace law with precision and dedication. Trust in our expertise to safeguard your interests and promote equitable outcomes.\"');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `userpassword` varchar(50) DEFAULT NULL,
  `usertype` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `userpassword`, `usertype`) VALUES
(1, 'admin@gmail.com', 'admin123', 'admin'),
(2, 'user@gmail.com', 'user123', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `user_id` varchar(100) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `number` int(11) DEFAULT NULL,
  `message` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `user_id`, `name`, `email`, `number`, `message`) VALUES
(1, '', 'Hamza Khan', 'humzamuhammad13@gmail.com', 2147483647, 'dvsdvdv'),
(6, NULL, 'Huzaifa Khan', 'Huzaifa@gmail.com', 2147483647, 'I very stuck in the case.'),
(7, NULL, 'Huzaifa Khan', 'Huzaifa@gmail.com', 2147483647, 'I very stuck in the case.'),
(8, NULL, 'Raza', 'user@gmail.com', 2147483647, 'This is our telephone number.'),
(9, NULL, 'Huzaifa Khan', 'Huzaifa@gmail.com', 2147483647, 'ieuf ieufiqwuefb oqefboqefoq ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `card`
--
ALTER TABLE `card`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `card`
--
ALTER TABLE `card`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
