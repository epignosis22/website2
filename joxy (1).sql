-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 05, 2022 at 08:16 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `joxy`
--

-- --------------------------------------------------------

--
-- Table structure for table `destinations`
--

CREATE TABLE `destinations` (
  `id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `destinations`
--

INSERT INTO `destinations` (`id`, `image`, `name`, `description`) VALUES
(1, 'destinations/kla.jpg', 'Kampala City', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis totam minima eum, accusamus dignissimos quasi.'),
(2, 'destinations/bunyonyi.jpg', 'Lake Bunyonyi', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis totam minima eum, accusamus dignissimos quasi.'),
(3, 'destinations/Mabira.jpg', 'Mabira Forest', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis totam minima eum, accusamus dignissimos quasi.'),
(4, 'destinations/mgahinga.jpg', 'Mgahinga Park', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis totam minima eum, accusamus dignissimos quasi.'),
(5, 'destinations/mfals.jpg', 'Murchison Falls', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis totam minima eum, accusamus dignissimos quasi.'),
(6, 'destinations/crater.jpg', 'Mt Elgon Crater', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis totam minima eum, accusamus dignissimos quasi.'),
(7, 'destinations/qnliz.jpg', 'Queen Elizabeth National Park', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis totam minima eum, accusamus dignissimos quasi.'),
(8, 'destinations/lions.jpg', 'Kidepo Valey National Park', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis totam minima eum, accusamus dignissimos quasi.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `destinations`
--
ALTER TABLE `destinations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `destinations`
--
ALTER TABLE `destinations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
