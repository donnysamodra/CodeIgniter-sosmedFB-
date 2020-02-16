-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2019 at 01:31 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pelatihan`
--

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `content` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `username`, `content`) VALUES
(25, 'Akakuro', 'Kuy ML...'),
(26, 'ZeonolDS', 'Asw Semua...!!!'),
(27, 'Pelan_Pelan', 'Jancok!!!'),
(29, 'Sr', 'Tralala... Trilili...'),
(30, 'Sr', 'ML teross'),
(31, 'GGMWas', 'Lag'),
(33, 'Akakuro', 'We are unity....'),
(34, 'Akakuro', 'Hi!!!!'),
(36, 'ZeonolDS', 'Asw lah...\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(20) NOT NULL,
  `password` varchar(64) NOT NULL,
  `email` varchar(32) NOT NULL,
  `name` varchar(32) NOT NULL,
  `photo` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `email`, `name`, `photo`) VALUES
('Akakuro', '$2y$10$kT4d2JX1Lu2PmWaTLstq/evc/1Kon.flSw8Stjb6Y0rKPKDzz6NRW', 'me@gmail.com', 'Malik', 'https://images.designtrends.com/wp-content/uploads/2016/02/17070356/Simple-Wolf-Logo-Design.png'),
('GGMWas', '$2y$10$xFPH93LCd3pf.wRmQceIOeC35/JI9gBK9ENDuzRMbaHhEuqyao4h6', 'gratis@gmail.com', 'Piqul', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT0tlMO1KtGd4RIA5PeRZypH3MC7Mm_NGOPiKfVSaYKG9OhSqcgjQ&s'),
('Pelan_Pelan', '$2y$10$NCUoe0edpQVwxCmOHbkjPuls90KaLBdjuFBEcxjQLWBD17FaC012m', 'jancok@email.com', 'Vansu', 'https://i.pinimg.com/originals/9e/b1/10/9eb11081161d0dc751278a253b0e9cef.jpg'),
('Sr', '$2y$10$.Zrbs4zTwyXyUqdF9XtclePwo/40gO4s8j1A8K.7neP3vUXtHRElS', 'jar@email.com', 'Jarsu', 'https://fiverr-res.cloudinary.com/images/t_main1,q_auto,f_auto/gigs/122355479/original/9b621981c65707431eecf819395821b98f558c4e/creating-animal-logo-based-on-your-request.jpg'),
('ZeonolDS', '$2y$10$q49hggM6uVWNKAy1Jqo40u0AnnQzwKCx1zec4zGmtsdhFqR4qthAO', 'sam@gmail.com', 'Samsul', 'https://pbs.twimg.com/media/DVxvblgWsAcizTM.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Username` (`username`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `post_ibfk_1` FOREIGN KEY (`Username`) REFERENCES `user` (`username`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
