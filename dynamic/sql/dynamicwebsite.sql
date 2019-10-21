-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2019 at 08:55 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dynamicwebsite`
--

-- --------------------------------------------------------

--
-- Table structure for table `navbar`
--

CREATE TABLE `navbar` (
  `id` int(11) NOT NULL,
  `brand` varchar(250) NOT NULL,
  `home` varchar(250) NOT NULL,
  `homelink` varchar(250) NOT NULL,
  `gallery` varchar(250) NOT NULL,
  `gallerylink` varchar(250) NOT NULL,
  `about` varchar(250) NOT NULL,
  `aboutlink` varchar(250) NOT NULL,
  `contact` varchar(250) NOT NULL,
  `contactlink` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `navbar`
--

INSERT INTO `navbar` (`id`, `brand`, `home`, `homelink`, `gallery`, `gallerylink`, `about`, `aboutlink`, `contact`, `contactlink`) VALUES
(1, 'http://localhost/dynamic/img/apple.png', 'HOME', 'index.php', 'GALLERY', 'Gallery_preloader.php', 'ABOUT', 'lectr2.php', 'CONTACT', 'accordion.php');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` varchar(250) NOT NULL,
  `image` varchar(250) NOT NULL,
  `button` varchar(10) NOT NULL,
  `btnlink` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `description`, `image`, `button`, `btnlink`) VALUES
(1, 'dynamic website', 'dynamic website\r\ndynamic website\r\ndynamic website', 'http://localhost/dynamic/images/Screenshot%20(76).png', 'REad more', ''),
(2, 'dynamic col2', 'dynamic col2dynamic col2dynamic col2dynamic col2dynamic col2dynamic col2dynamic col2dynamic col2dynamic col2dynamic col2dynamic col2dynamic col2dynamic col2dynamic col2dynamic col2dynamic col2dynamic col2dynamic col2dynamic col2dynamic col2dynamic co', 'http://localhost/dynamic/images/Screenshot%20(78).png', 'READ MORE', ''),
(3, 'dynamic col3', 'dynamic col3dynamic col3dynamic col3dynamic col3', 'http://localhost/dynamic/images/Screenshot%20(78).png', 'READ MORE', '');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `description` varchar(250) NOT NULL,
  `image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `title`, `description`, `image`) VALUES
(1, 'hello', 'hihihihihihi', '4.jpg'),
(2, '', '', '5.jpg'),
(3, '', '', '6.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `navbar`
--
ALTER TABLE `navbar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `navbar`
--
ALTER TABLE `navbar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
