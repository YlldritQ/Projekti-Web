-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2024 at 06:38 PM
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
-- Database: `news`
--

-- --------------------------------------------------------

--
-- Table structure for table `lajmet`
--

CREATE TABLE `lajmet` (
  `ID` int(11) NOT NULL,
  `Titulli` mediumtext NOT NULL,
  `Img_Link` tinytext NOT NULL,
  `Data` date NOT NULL,
  `Description` longtext NOT NULL,
  `Permbajtja` longtext NOT NULL,
  `Video_Link` tinytext DEFAULT NULL,
  `Kategoria` varchar(25) NOT NULL,
  `UserID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lajmet`
--

INSERT INTO `lajmet` (`ID`, `Titulli`, `Img_Link`, `Data`, `Description`, `Permbajtja`, `Video_Link`, `Kategoria`, `UserID`) VALUES
(12, 'test', 'Foto/foto30.png', '2024-02-01', 'test2', 'test2', '', 'test2', 1),
(13, 'asdasda', 'Foto/foto1.png', '2024-02-01', 'asdasd', 'asdasd', '', 'asdasd', 1),
(14, 'asdasda', 'Foto/foto1.png', '2024-02-01', 'asdasd', 'asdasd', '', 'asdasd', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(11) NOT NULL,
  `name` varchar(11) NOT NULL,
  `surname` varchar(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL,
  `IsAdmin` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `name`, `surname`, `email`, `username`, `password`, `IsAdmin`) VALUES
(1, 'Ylldrit', 'Qallakaj', 'yq68447@ubt-uni.net', 'yq123', '12345', 1),
(2, 'Asdasd', 'Asdas', 'deathreape123', 'ylldrit_bosi@hotmail', 'aeilena12', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lajmet`
--
ALTER TABLE `lajmet`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `FK` (`UserID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lajmet`
--
ALTER TABLE `lajmet`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `lajmet`
--
ALTER TABLE `lajmet`
  ADD CONSTRAINT `FK` FOREIGN KEY (`UserID`) REFERENCES `user` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
