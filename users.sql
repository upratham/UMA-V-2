-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Jan 24, 2025 at 03:44 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `virtual_lab_sim`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `sr_no` int(11) NOT NULL,
  `user_name` text NOT NULL,
  `role` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`sr_no`, `user_name`, `role`, `password`) VALUES
(2, 'Student_1', 'student', '$2y$10$lOZ3BnZ5II7ADpuDZj3eruP8GyT8ofNgReGXG7Sv8xhCAQOGQUmtW'),
(3, 'Teacher_C1', 'director', '$2y$10$9/l4Sqxeua2ynctADDC5cuZ/wA3MB1dSnwa1f.1F4J87V4SDcJeJK'),
(4, 'A1', 'director', '$2y$10$C3TeZGznJjiPOYSgRx3QOuQ9Q1E2UHJOO//z8c3lYOfLwI7hdn3vu'),
(5, 'A10', 'director', '$2y$10$z6KZBVXUIDh0SL/SBUZAYuvZSbNHUJcSqcDo1pSDfPRChwfZp35eO'),
(6, 'B2', 'director', '$2y$10$vpwSXcbAr9htYt/kjCOhFe7wLF5KMZmk/IVVEWMh7fHq4UwMH91Q6'),
(7, 'ved', 'student', '$2y$10$sPk6LPHpgoVJCB0/LRfXmuUMFMtkKPQzoa6/BQ2byxMbIFB3YLxy6'),
(8, 'C2', 'director', '$2y$10$.kux9em1h8VRHw8DvSsOcOFFv.Mxc0t2pWubsnNUPJ/gto9U4znLS'),
(9, 'abhi', 'student', '$2y$10$./qTEjqmBv8hmcaZLKUhW.1Y5ABe5.67IDeYSpx.bQTNdFAoWMeim'),
(10, 'prathamesh', 'student', '$2y$10$j9qMfv0C3v8K3xxPQTHGnO6fUy05IW4ozHpeh1oFntg/5rRLf305q'),
(11, 'ppp', 'student', '$2y$10$n7rLSNlIxVlfBRaF5TzGLu/Q9W95odyrJeteIUkh2eZPn1rcR.eeu'),
(12, 'adi', 'director', '$2y$10$WZd9xAY7ZntCaFbfY2LzKeHRwquM7v.mno/TaVRijZjquuMelagDu'),
(13, 'ida', 'director', '$2y$10$wcTVpxPPO6PTBAlf3.RTFOXYSfSFQPWN3TJr5CxohJaB8Dz2u12gG'),
(14, 'jhgg', 'student', '$2y$10$tljKTrCeZdgmYoSopUgnAODa/hoyq1DBZHbItrl.h.l2s/Dt/bmPS'),
(15, 'ihgigiy', 'student', '$2y$10$DyPqUXf2VIFsA32U7YscyukIGwMLjpn012dTVcsS/IzhPY9K1/1A6'),
(16, 'lgifuyfdt', 'student', '$2y$10$RxXnAzpbO9TQeFoCfplGuedwUtw.49qHPIg0HZ0AFvUkGist2dgwC'),
(17, 'lgifuyfdthrhh', 'student', '$2y$10$QFtAEbqLx2eFMo.GllFbMOlrFAv425S2QIqAAzDn88gnTCmNUHbd2'),
(18, 'lgifuyfdthrhhff', 'student', '$2y$10$seECrqTeRVJ/EY1GIJuaa.OWWktvTtWxKmq/UN4Db4VTBDkhCtJuG'),
(19, 'khgfjfjf', 'student', '$2y$10$LK9nPOi8nzLiVIWhTxUKSe9jOyzmpLAXAplRqFJ/Ftg./vCBW7je.'),
(20, 'ljbjfhdhc', 'student', '$2y$10$ftYj2l7SEy7mEjR1Lfjl6OuYqh4tV7St4yDwNcSWOAnGEPupQKZNq');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`sr_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
