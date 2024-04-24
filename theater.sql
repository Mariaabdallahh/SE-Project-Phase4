-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2024 at 01:57 PM
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
-- Database: `theater`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `job_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `task_title` varchar(255) NOT NULL,
  `creation_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `task` varchar(255) NOT NULL,
  `states` varchar(50) NOT NULL,
  `department` varchar(255) NOT NULL,
  `deadline` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `email`, `task_title`, `creation_date`, `task`, `states`, `department`, `deadline`) VALUES
(1, 'john@example.com', 'Project Proposal', '2024-04-23 22:14:07', 'Complete project proposal', 'complete', 'marketing', NULL),
(2, 'emma@example.com', 'Presentation Slides', '2024-04-23 22:14:07', 'Prepare presentation slides', 'to do', 'marketing', NULL),
(3, 'mark@example.com', 'Budget Report', '2024-04-23 22:14:07', 'Finalize budget report', 'to do', 'marketing', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ticket_purchases`
--

CREATE TABLE `ticket_purchases` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `purchase_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `points` int(11) DEFAULT 0,
  `discount` decimal(10,2) DEFAULT 0.00
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Triggers `ticket_purchases`
--
DELIMITER $$
CREATE TRIGGER `calculate_points` BEFORE INSERT ON `ticket_purchases` FOR EACH ROW BEGIN
    DECLARE amount_spent INT;
    SET amount_spent = NEW.amount;
    
    -- Calculate points based on amount spent
    SET NEW.points = amount_spent; -- 1 point for every $1 spent
    
    -- Check if the user has accumulated enough points for a discount
    IF NEW.points >= 500 THEN
        -- Apply a 25% discount for every 500 points collected
        SET NEW.discount = FLOOR(NEW.points / 500) * 25; -- Calculate discount
        SET NEW.points = NEW.points - (FLOOR(NEW.points / 500) * 500); -- Deduct used points
    END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` varchar(50) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `registration_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `points` int(11) DEFAULT 0,
  `expiry_date` timestamp NOT NULL DEFAULT (current_timestamp() + interval 5 year),
  `discount` decimal(5,2) DEFAULT 0.50
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `role`, `phone_number`, `address`, `registration_date`, `points`, `expiry_date`, `discount`) VALUES
(5, '@gmail.com', 'P@ssw0rd', 'helmi.kanafani@outlook.com', '', '+96178950309', '', '2024-04-23 22:36:57', 0, '2029-04-23 22:36:57', 0.00),
(6, '@gmail.com', 'P@ssw0rd', 'P@ssw0rd', '', '', '', '2024-04-23 22:38:30', 0, '2029-04-23 22:38:30', 0.00),
(7, '@gmail.com', 'P@ssw0rd', 'helmi.kanafani@gmail.com', '', '+96178950309', '', '2024-04-23 22:39:32', 0, '2029-04-23 22:39:32', 0.00),
(8, '@gmail.com', 'P@ssw0rd', 'nataliesabbagh@hotmail.com', '', '71365658', '', '2024-04-23 22:41:36', 0, '2029-04-23 22:41:36', 0.00),
(9, 'maria', '$2y$10$DRmgXzzzM3V/Ru52YlnUZ.tjQ9tpT4zVn./ZH4jUu9gc3z3tUCl32', 'maria@gmail.com', 'Customer', '19281083', 'location1', '2024-04-24 10:13:26', 0, '2029-04-24 10:13:26', 0.50),
(10, 'admin', '$2y$10$C0tBdRBH3ChsmVgtUdtcreAcrPLTF3dIF89iewJGxhMZ4PhZhSu.G', 'admin@gmail.com', 'CEO', '123123123', 'location', '2024-04-24 10:22:28', 0, '2029-04-24 10:22:28', 0.50),
(11, 'lala', '$2y$10$7jeadORC9il0bI.Dr9fRDewAFpTfQK.rPGbWh.ZQKThIqkldtl74O', 'lala@gmail.com', 'Customer', '90909090', 'location', '2024-04-24 10:41:52', 0, '2029-04-24 10:41:52', 0.50),
(12, 'admin12 ', '$2y$10$aLwFQi5KinBKjSKWes/GruywhiwEeAuXvA/O9ajOZcuqMQzQQq/nK', 'admin12@gmail.com', 'CEO', '21212121', 'location1', '2024-04-24 10:46:01', 0, '2029-04-24 10:46:01', 0.50),
(14, 'admin123', '$2y$10$iSWN3WBdAzj0YvWC7IkxduNQeATbw4qQi9rzhFNklSt39gDjSrreq', 'admin123@gmail.com', 'CEO', '123123123', 'location', '2024-04-24 10:58:06', 0, '2029-04-24 10:58:06', 0.50),
(16, 'maria', '$2y$10$XZf4YRmgQh8mU78D6cKcYuUD2Uteu1Jcs5lHH.zwmRegx55U/OZBe', 'maria1212@gmail.com', 'Customer', '123123123123', 'locationm', '2024-04-24 11:01:33', 0, '2029-04-24 11:01:33', 0.50),
(17, 'EMmaria', '$2y$10$.haxCknO1c3f5Hd1u/k6.OAPJpQy/LGRLdASPpmyb0kPAjgOWYAoi', 'EMmaria@gmail.com', 'Employer', '123455632', 'locationm', '2024-04-24 11:13:56', 0, '2029-04-24 11:13:56', 0.50),
(18, 'mama', '$2y$10$.NhHEmR5tQjsavLzOeaj2.nlQvekWPH.1.z1zYOpAqsUR8UTApFKe', 'mama@gmail.com', 'Customer', '12312312312342', 'loction', '2024-04-24 11:27:44', 0, '2029-04-24 11:27:44', 0.50),
(19, 'mama1', '$2y$10$J/a9zNhsWEVrnMJby2Ob9.GXQ3jiNBGhGNJSF8sN6ptcembyw0dty', 'mama1@gmail.com', 'Customer', '10290', 'location', '2024-04-24 11:28:18', 0, '2029-04-24 11:28:18', 0.50),
(20, 'admin1234', '$2y$10$ZhQgJmc5cY688wyxxygZ3ucAFE/ojOBcAeHTcE4qdXzeB0WQvbNlq', 'admin1234@gmail.com', 'CEO', '123123123', 'adrdress11', '2024-04-24 11:39:00', 0, '2029-04-24 11:39:00', 0.50);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ticket_purchases`
--
ALTER TABLE `ticket_purchases`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `ticket_purchases`
--
ALTER TABLE `ticket_purchases`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ticket_purchases`
--
ALTER TABLE `ticket_purchases`
  ADD CONSTRAINT `ticket_purchases_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

DELIMITER $$
--
-- Events
--
CREATE DEFINER=`root`@`localhost` EVENT `remove_expired_points` ON SCHEDULE EVERY 1 DAY STARTS '2024-04-24 02:04:48' ON COMPLETION NOT PRESERVE ENABLE DO UPDATE users SET points = 0 WHERE expiry_date <= NOW()$$

DELIMITER ;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
