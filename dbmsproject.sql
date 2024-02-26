-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3309
-- Generation Time: Oct 18, 2023 at 06:43 PM
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
-- Database: `dbmsproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `pglist`
--

CREATE TABLE `pglist` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `location` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `image_url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pglist`
--

INSERT INTO `pglist` (`id`, `name`, `price`, `location`, `description`, `image_url`) VALUES
(1, 'Sai Residency PG', 7500.00, 'New Delhi', 'A serene and comfortable place for students and working professionals.', './images/Pg/pg1.webp'),
(2, 'Lakshmi PG', 6000.00, 'Patna', 'Your peaceful home away from home in the heart of the city.', './images/Pg/pg2.webp'),
(3, 'Green View PG', 8000.00, 'New Delhi', 'Live in harmony with nature in our eco-friendly PG.', './images/Pg/pg3.webp'),
(4, 'Cosmo PG', 7200.00, 'Jalandhar', 'A modern PG with all the amenities you need.', './images/Pg/pg4.webp'),
(5, 'Royal Mansion PG', 12000.00, 'Patna', 'Experience luxury living at our royal PG mansion.', './images/Pg/pg5.webp'),
(6, 'Student Inn PG', 5500.00, 'Ranchi', 'Affordable and convenient PG for students near the university.', './images/Pg/pg6.webp'),
(7, 'Blue Haven PG', 7800.00, 'Chandigarh', 'Stay in our beautifully designed blue-themed PG.', './images/Pg/pg7.webp'),
(8, 'Golden Nest PG', 9500.00, 'Jalandhar', 'Find comfort and warmth at the Golden Nest PG.', './images/Pg/pg8.webp'),
(9, 'Serene Home PG', 6800.00, 'Ranchi', 'A serene and homely PG for a peaceful stay.', './images/Pg/pg9.webp'),
(10, 'Star PG', 9200.00, 'Hardaspur', 'Enjoy a star-level experience at our premium PG.', './images/Pg/pg10.webp'),
(11, 'Satyam PG', 5800.00, 'Phagwara', 'A serene and homely PG for a peaceful stay.', './images/Pg/pg11.webp'),
(12, 'Alph Star PG', 4200.00, 'Phagwara', 'Enjoy a star-level experience at our premium PG.', './images/Pg/pg12.webp');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phonenumber` varchar(15) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gender` enum('Male','Female','Others') NOT NULL,
  `profilepic` varchar(255) DEFAULT NULL,
  `registration_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `is_active` tinyint(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `fname`, `username`, `email`, `phonenumber`, `password`, `gender`, `profilepic`, `registration_date`, `is_active`) VALUES
(1, 'Satish kumar', 'satish123', 'satish123@gmail.com', '8709797992', '$2y$10$OAueeLtIKTMjHtcUxtzm1OqYW1FmMTpr2xDOXUqY6tZAzKC1v7oXK', 'Male', 'ProfilePictures/Satish.png', '2023-09-20 17:28:49', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pglist`
--
ALTER TABLE `pglist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `phonenumber` (`phonenumber`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pglist`
--
ALTER TABLE `pglist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
