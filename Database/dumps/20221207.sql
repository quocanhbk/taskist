-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: db:3306
-- Generation Time: Dec 06, 2022 at 03:25 PM
-- Server version: 8.0.31
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `taskist`
--

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id` bigint UNSIGNED NOT NULL,
  `description` varchar(255) NOT NULL DEFAULT '',
  `due_date` date DEFAULT NULL,
  `completed` tinyint(1) NOT NULL DEFAULT '0',
  `user_id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `description`, `due_date`, `completed`, `user_id`, `title`, `created_at`, `updated_at`) VALUES
(1, '', NULL, 0, 3, 'Do the laundry', '2022-12-05 13:31:51', '2022-12-06 06:37:40'),
(2, '', NULL, 0, 3, 'Do the laundry', '2022-12-05 13:31:51', '2022-12-06 06:37:38'),
(3, 'Get it doneeee!', NULL, 0, 3, 'Do homework', '2022-12-05 13:31:51', '2022-12-06 08:13:07'),
(4, '', NULL, 0, 3, 'Clean the house', '2022-12-05 13:31:51', '2022-12-06 08:13:08'),
(5, '', '2022-12-05', 0, 3, 'Go to work', '2022-12-05 14:07:24', '2022-12-06 08:13:09'),
(6, '', NULL, 0, 3, 'abc', '2022-12-05 14:15:21', '2022-12-06 08:13:10'),
(7, '', NULL, 0, 3, 'def', '2022-12-05 14:16:20', '2022-12-06 08:13:10'),
(8, '', NULL, 0, 3, 'wed', '2022-12-05 14:17:57', '2022-12-06 08:13:11'),
(9, '', NULL, 0, 3, 'wer', '2022-12-05 14:18:33', '2022-12-06 08:13:12'),
(10, '', NULL, 1, 3, 'wer', '2022-12-05 14:41:36', '2022-12-05 14:42:08'),
(11, '', '2022-12-07', 1, 3, 'upcoming', '2022-12-05 16:03:54', '2022-12-05 16:03:58'),
(12, '', '2022-12-08', 1, 3, 'Upcoming', '2022-12-05 16:10:16', '2022-12-05 16:13:21'),
(13, '', '2022-12-09', 1, 3, 'abc', '2022-12-06 02:25:35', '2022-12-06 06:18:54'),
(14, 'nice', '2022-12-07', 1, 3, 'Upcoming task', '2022-12-06 06:28:37', '2022-12-06 06:35:52'),
(15, '', NULL, 1, 3, 'nice', '2022-12-06 06:30:43', '2022-12-06 06:34:38'),
(16, '', NULL, 1, 3, 'hehe', '2022-12-06 06:30:50', '2022-12-06 06:36:50'),
(17, '', NULL, 1, 3, 'abc', '2022-12-06 06:30:54', '2022-12-06 06:37:34'),
(18, '', NULL, 0, 3, 'oke', '2022-12-06 06:31:14', '2022-12-06 06:37:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tasks`
--
ALTER TABLE `tasks`
  ADD CONSTRAINT `tasks_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
