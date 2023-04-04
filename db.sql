-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2023 at 07:32 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(100) NOT NULL,
  `name` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `password`, `email`) VALUES
(1, 'admin', 'd99df224d7371c867798d418b91da7277332b70d', 'admin@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `details` varchar(500) NOT NULL,
  `year` varchar(100) NOT NULL,
  `image_01` varchar(100) NOT NULL,
  `image_02` varchar(100) NOT NULL,
  `image_03` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`id`, `name`, `details`, `year`, `image_01`, `image_02`, `image_03`) VALUES
(1, 'League Titles', 'Liverpool have won a phenomenal 19 top-flight league titles, with Jürgen Klopp leading the Reds to their most recent in the Premier League in 2019-20.', '1900-01, 1905-06, 1921-22, 1922-23, 1946-47, 1963-64, 1965-66, 1972-73, 1975-76, 1976-77, 1978-79, 1', 'jurgen-klopp-trophy.webp', '', ''),
(2, 'European Cups', 'We have proudly won six European Cups - more than any other British team. The first came under Bob Paisley, who added two more to the trophy cabinet before his successor Joe Fagan also won the famous cup. Rafael Benitez oversaw the Miracle of Istanbul in 2005, and the most recent came under Jürgen Klopp in 2019.', '1976-77, 1977-78, 1980-81, 1983-84, 2004-05, 2018-19', 'thumb_88508_default_news_size_5.jpeg', '', ''),
(3, 'FIFA Club World Cup', 'Liverpool broke new ground in December 2019 by lifting the Club World Cup for the first time in Reds history. Jürgen Klopp&#39;s European Cup winners defeated Monterrey and Flamengo to become world champions.\r\n\r\n', '2019', 'images.jfif', '', ''),
(4, 'League Cups', 'Liverpool boast a record tally of nine League Cups. The trophy was last brought home to Anfield in 2022 courtesy of a penalty shootout victory over Chelsea at Wembley.\r\n\r\n', '1980-81, 1981-82, 1982-83, 1983-84, 1994-95, 2000-01, 2002-03, 2011-12, 2021-22', 'Liverpool team Premier League trophy celebration 022722.jpg', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `management`
--

CREATE TABLE `management` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `details` varchar(500) NOT NULL,
  `year` varchar(100) NOT NULL,
  `image_01` varchar(100) NOT NULL,
  `image_02` varchar(100) NOT NULL,
  `image_03` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `management`
--

INSERT INTO `management` (`id`, `name`, `details`, `year`, `image_01`, `image_02`, `image_03`) VALUES
(2, 'John Henry ', '', 'Owner', 'OQ-TALKSPORT-JOHN-HENRY-LIVERPOOL.jpg', '', ''),
(3, 'Jürgen Klopp ', '', 'Manager', 'skysports-jurgen-klopp-liverpool_4654732.jpg', '', ''),
(4, 'Philipp Jacobsen', '', 'Head of Medical Services)', 'download.jfif', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `details` varchar(500) NOT NULL,
  `year` varchar(100) NOT NULL,
  `image_01` varchar(100) NOT NULL,
  `image_02` varchar(100) NOT NULL,
  `image_03` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `name`, `details`, `year`, `image_01`, `image_02`, `image_03`) VALUES
(1, 'Twelve Reds set for international action in March', 'Virgil van Dijk and Cody Gakpo, similarly, tackle France (March 24) and Gibraltar (March 27) for the Netherlands, with the former fixture seeing them face Reds teammate Ibrahima Konate, while Didier Deschamps’ men also meet Caoimhin Kelleher’s Republic of Ireland three days later.\r\n\r\nScotland captain Andy Robertson is set to lead out his nation against Cyprus (March 25) and Spain (March 28).\r\n\r\nDiogo Jota and Portugal are preparing for fixtures against Liechtenstein (March 23) and Luxembourg (Ma', 'PUBLISHED 8 HOURS AGO', 'jordan-henderson-england-081222.txt', '', ''),
(2, 'Real Madrid v Liverpool: Nine interesting stats ahead of Champions League tie', 'Liverpool could become the first English team to beat Real twice in the Spanish capital – Arsenal, Manchester City and Chelsea have also won at Estadio Santiago Bernabeu. \r\n\r\nThe Reds have played 21 times on this date down the years and have never lost – winning 13, including each of the last five.', 'PUBLISHED 15TH MARCH 2023', 'salah-liverpool-fc-real-madrid-140323.txt', '', ''),
(3, 'West Ham v LFC Women kick-off time changed', 'The Barclays Women&#39;s Super League game at Chigwell Construction Stadium on Sunday April 2 will now begin at 5pm BST.', 'PUBLISHED 15TH MARCH 2023', 'Capture.PNG', '', ''),
(4, 'sefDarwin Nunez withdraws from Uruguay squad', 'Darwin Nunez has withdrawn from international duty with Uruguay for the upcoming March international break.\r\n\r\nThe Liverpool forward had been initially included in his nation’s squad for friendly fixtures against Japan and South Korea.\r\n\r\nNunez will now miss the games due to an injury, as confirmed by the Uruguayan Football Association, and will instead receive treatment at the AXA Training Centre.', 'sdfPUBLISHED 2 DAYS AGO', 'Darwin-Nunez-170323.txt', '', ''),
(5, 'Mohamed Salah misses penalty as Liverpool crash back to earth with Bournemouth defeat', 'Liverpool were brought back down to earth as they slipped to defeat at relegation-threatened Bournemouth just six days on from their historic victory over Manchester United.\r\n\r\nJurgen Klopp’s side humiliated their fierce rivals with a 7-0 win at Anfield last Sunday but Philip Billing’s sixth goal of the season was enough for the Cherries to secure a 1-0 victory to move off the foot of the Premier League.', 'PUBLISHED 12 DAYS AGO', '134ab64495420b7454e03f3f93e64682a5e1a3fb.jpeg', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `name` varchar(20) NOT NULL,
  `age` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` enum('male','female') NOT NULL DEFAULT 'male',
  `favorite player` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `age`, `email`, `gender`, `favorite player`, `password`) VALUES
(1, 'adam', 0, 'adam@gmail.com', 'male', '', '3939e7f100ee93dd92de4e3edc07019f28d6aec8');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `management`
--
ALTER TABLE `management`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `management`
--
ALTER TABLE `management`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
