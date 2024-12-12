-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2024 at 04:38 PM
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
-- Database: `corememories`
--

-- --------------------------------------------------------

--
-- Table structure for table `islandcontents`
--

CREATE TABLE `islandcontents` (
  `islandContentID` int(4) NOT NULL,
  `islandOfPersonalityID` int(4) NOT NULL,
  `image` varchar(50) DEFAULT NULL,
  `content` varchar(300) NOT NULL,
  `color` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `islandcontents`
--

INSERT INTO `islandcontents` (`islandContentID`, `islandOfPersonalityID`, `image`, `content`, `color`) VALUES
(1, 1, 'fam1.jpg', 'This was my mom\'s birthday and she just got home from overseas. It was the first time in a long time that we were together on her birthday.\r\n', NULL),
(2, 1, 'fam2.jpg', 'They all slept while I was driving because we were stuck in traffic from Tagaytay.', NULL),
(3, 1, 'fam3.jpg', 'This was the first time we took a family picture in a picture shop since I was in 5th grade.', NULL),
(5, 2, 'friends1.jpg', 'I accidentally met them while I was going home.', NULL),
(6, 2, 'friends2.jpg', 'Going to DevCon was a blast (literally got out kahit di pa tapos).', NULL),
(7, 2, 'friends3.jpg', 'Me and my brother (not by blood). We\'ve known each other for almost 5 years na.', NULL),
(8, 3, 'gaming1.jpg', 'This was the first time I joined a full on tournament (we didn\'t scrim once btw).\r\n', NULL),
(9, 3, 'gaming2.jpg', 'The first time I got into ascendant, I was super proud of myself.', NULL),
(10, 3, 'gaming3.jpg', 'We placed 3rd place in Sinta Fest Valorant tournament representing Computer Society.', NULL),
(11, 4, 'gym1.jpg', 'I was proud of this one because this was the first time I cleanly did a lat spread.', NULL),
(12, 4, 'gym2.jpg', 'This was the time where I invited my friends to go to the gym, it was really fun and I got to make them lift my lifts.', NULL),
(13, 4, 'gym3.jpg', 'This was my first year transformation from being a skinny guy.', NULL),
(14, 2, 'friends4.jpg', 'We just wanted to eat late in the night.', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `islandsofpersonality`
--

CREATE TABLE `islandsofpersonality` (
  `islandOfPersonalityID` int(4) NOT NULL,
  `name` varchar(40) NOT NULL,
  `shortDescription` varchar(300) DEFAULT NULL,
  `longDescription` varchar(900) DEFAULT NULL,
  `color` varchar(10) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `islandsofpersonality`
--

INSERT INTO `islandsofpersonality` (`islandOfPersonalityID`, `name`, `shortDescription`, `longDescription`, `color`, `image`, `status`) VALUES
(1, 'Family Island', 'Family Island is a warm and comforting place where love surrounds me. Cozy homes filled with memories sit on rolling hills, and a bright hearth at the center keeps everyone close. It’s a place where family always supports and cares for each other, no matter what.', NULL, NULL, 'familybanner.jpg', NULL),
(2, 'Friend island', 'Friend Island is a lively place full of laughter and fun. Bright pathways lead to cozy spots where friends share stories and memories. A big tree in the center holds all the special moments and inside jokes, making it a place where friendship and joy always shine.', NULL, NULL, 'friendsbanner.jpg', NULL),
(3, 'Gaming Island', 'Gaming Island is a fun, colorful world full of video games. Not mine though, when I play? ha, expect a scream or a rant about my teammates or something.', NULL, NULL, 'gamingbanner.jpg', NULL),
(4, 'Gym Island', 'Gym Island is a powerhouse of energy, filled with weights, treadmills, and the sound of sneakers on gym floors. It’s where I push my limits, sweat it out, and celebrate small victories. This place is supposed to be about balance, but let’s be real, I spend way too much time here. Obsession? Maybe. D', NULL, NULL, 'gymbanner.jpg', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `islandcontents`
--
ALTER TABLE `islandcontents`
  ADD PRIMARY KEY (`islandContentID`);

--
-- Indexes for table `islandsofpersonality`
--
ALTER TABLE `islandsofpersonality`
  ADD PRIMARY KEY (`islandOfPersonalityID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `islandcontents`
--
ALTER TABLE `islandcontents`
  MODIFY `islandContentID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `islandsofpersonality`
--
ALTER TABLE `islandsofpersonality`
  MODIFY `islandOfPersonalityID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
