-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2025 at 06:07 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `actour`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `adminId` int(10) NOT NULL,
  `userName` varchar(50) NOT NULL,
  `passWord` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `createDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_booking`
--

CREATE TABLE `tbl_booking` (
  `bookingId` int(11) NOT NULL,
  `tourId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `bookingDate` date NOT NULL,
  `numAdult` int(11) NOT NULL,
  `numChildren` int(11) NOT NULL,
  `totalPrice` double NOT NULL,
  `bookingStatus` varchar(255) NOT NULL,
  `specialRequestes` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_chat`
--

CREATE TABLE `tbl_chat` (
  `chatId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `adminId` int(11) NOT NULL,
  `messages` varchar(255) NOT NULL,
  `readStatus` enum('y','n') DEFAULT 'n',
  `createDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `ipAddress` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_checkout`
--

CREATE TABLE `tbl_checkout` (
  `checkoutId` int(11) NOT NULL,
  `bookingId` int(11) NOT NULL,
  `paymentMethod` varchar(50) NOT NULL,
  `paymemtDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `amount` double NOT NULL,
  `paymentStatus` varchar(255) NOT NULL,
  `transaction` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_histori`
--

CREATE TABLE `tbl_histori` (
  `historyId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `tourId` int(11) NOT NULL,
  `actionType` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_images`
--

CREATE TABLE `tbl_images` (
  `imageId` int(11) NOT NULL,
  `tourId` int(11) NOT NULL,
  `imageURL` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `uploadDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_invoice`
--

CREATE TABLE `tbl_invoice` (
  `invoiceId` int(11) NOT NULL,
  `bookingId` int(11) NOT NULL,
  `amount` double NOT NULL,
  `dateIssued` date NOT NULL,
  `details` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_promotion`
--

CREATE TABLE `tbl_promotion` (
  `promotionId` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `discount` double NOT NULL,
  `startDate` date NOT NULL,
  `endDate` date NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_reviews`
--

CREATE TABLE `tbl_reviews` (
  `reviewId` int(11) NOT NULL,
  `tourId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `rating` float NOT NULL,
  `comment` varchar(255) DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tour`
--

CREATE TABLE `tbl_tour` (
  `tourId` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(6000) NOT NULL,
  `images` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `priceChild` float NOT NULL,
  `duration` int(11) NOT NULL,
  `destination` varchar(255) NOT NULL,
  `availability` tinyint(1) NOT NULL,
  `itinerary` varchar(255) NOT NULL,
  `priceAdult` float NOT NULL,
  `review` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `userId` int(11) NOT NULL,
  `userName` varchar(50) NOT NULL,
  `passWord` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phoneNumber` varchar(15) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `ipAddress` varchar(255) NOT NULL,
  `isActive` enum('y','n') NOT NULL DEFAULT 'n',
  `status` enum('d','b') DEFAULT NULL COMMENT 'd: delete\r\nb: baned\r\n'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`adminId`);

--
-- Indexes for table `tbl_booking`
--
ALTER TABLE `tbl_booking`
  ADD PRIMARY KEY (`bookingId`),
  ADD KEY `fk_booking_tour` (`tourId`);

--
-- Indexes for table `tbl_chat`
--
ALTER TABLE `tbl_chat`
  ADD PRIMARY KEY (`chatId`),
  ADD KEY `fl_chat_user` (`userId`),
  ADD KEY `fk_chat_admin` (`adminId`);

--
-- Indexes for table `tbl_checkout`
--
ALTER TABLE `tbl_checkout`
  ADD PRIMARY KEY (`checkoutId`),
  ADD KEY `fk_checkout_booking` (`bookingId`);

--
-- Indexes for table `tbl_histori`
--
ALTER TABLE `tbl_histori`
  ADD PRIMARY KEY (`historyId`),
  ADD KEY `fk_history_user` (`userId`),
  ADD KEY `fk_history_tour` (`tourId`);

--
-- Indexes for table `tbl_images`
--
ALTER TABLE `tbl_images`
  ADD PRIMARY KEY (`imageId`),
  ADD KEY `fk_image_tour` (`tourId`);

--
-- Indexes for table `tbl_invoice`
--
ALTER TABLE `tbl_invoice`
  ADD PRIMARY KEY (`invoiceId`),
  ADD KEY `fk_invoice_booking` (`bookingId`);

--
-- Indexes for table `tbl_promotion`
--
ALTER TABLE `tbl_promotion`
  ADD PRIMARY KEY (`promotionId`);

--
-- Indexes for table `tbl_reviews`
--
ALTER TABLE `tbl_reviews`
  ADD PRIMARY KEY (`reviewId`),
  ADD KEY `fk_review_user` (`userId`),
  ADD KEY `fk_review_tour` (`tourId`);

--
-- Indexes for table `tbl_tour`
--
ALTER TABLE `tbl_tour`
  ADD PRIMARY KEY (`tourId`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `adminId` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_booking`
--
ALTER TABLE `tbl_booking`
  MODIFY `bookingId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_chat`
--
ALTER TABLE `tbl_chat`
  MODIFY `chatId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_checkout`
--
ALTER TABLE `tbl_checkout`
  MODIFY `checkoutId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_histori`
--
ALTER TABLE `tbl_histori`
  MODIFY `historyId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_images`
--
ALTER TABLE `tbl_images`
  MODIFY `imageId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_invoice`
--
ALTER TABLE `tbl_invoice`
  MODIFY `invoiceId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_promotion`
--
ALTER TABLE `tbl_promotion`
  MODIFY `promotionId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_reviews`
--
ALTER TABLE `tbl_reviews`
  MODIFY `reviewId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_tour`
--
ALTER TABLE `tbl_tour`
  MODIFY `tourId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_booking`
--
ALTER TABLE `tbl_booking`
  ADD CONSTRAINT `fk_booking_tour` FOREIGN KEY (`tourId`) REFERENCES `tbl_tour` (`tourId`);

--
-- Constraints for table `tbl_chat`
--
ALTER TABLE `tbl_chat`
  ADD CONSTRAINT `fk_chat_admin` FOREIGN KEY (`adminId`) REFERENCES `tbl_admin` (`adminId`),
  ADD CONSTRAINT `fl_chat_user` FOREIGN KEY (`userId`) REFERENCES `tbl_users` (`userId`);

--
-- Constraints for table `tbl_checkout`
--
ALTER TABLE `tbl_checkout`
  ADD CONSTRAINT `fk_checkout_booking` FOREIGN KEY (`bookingId`) REFERENCES `tbl_booking` (`bookingId`);

--
-- Constraints for table `tbl_histori`
--
ALTER TABLE `tbl_histori`
  ADD CONSTRAINT `fk_history_tour` FOREIGN KEY (`tourId`) REFERENCES `tbl_tour` (`tourId`),
  ADD CONSTRAINT `fk_history_user` FOREIGN KEY (`userId`) REFERENCES `tbl_users` (`userId`);

--
-- Constraints for table `tbl_images`
--
ALTER TABLE `tbl_images`
  ADD CONSTRAINT `fk_image_tour` FOREIGN KEY (`tourId`) REFERENCES `tbl_tour` (`tourId`);

--
-- Constraints for table `tbl_invoice`
--
ALTER TABLE `tbl_invoice`
  ADD CONSTRAINT `fk_invoice_booking` FOREIGN KEY (`bookingId`) REFERENCES `tbl_booking` (`bookingId`);

--
-- Constraints for table `tbl_reviews`
--
ALTER TABLE `tbl_reviews`
  ADD CONSTRAINT `fk_review_tour` FOREIGN KEY (`tourId`) REFERENCES `tbl_tour` (`tourId`),
  ADD CONSTRAINT `fk_review_user` FOREIGN KEY (`userId`) REFERENCES `tbl_users` (`userId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
