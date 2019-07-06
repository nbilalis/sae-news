-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2019 at 05:26 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sae-news`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` tinyint(3) UNSIGNED NOT NULL,
  `title` varchar(50) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`) VALUES
(1, 'Politics'),
(2, 'Technology'),
(3, 'Sports'),
(4, 'Entertainment'),
(5, 'Social');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(250) CHARACTER SET greek NOT NULL,
  `body` text CHARACTER SET greek NOT NULL,
  `views` mediumint(9) NOT NULL,
  `likes` mediumint(9) NOT NULL,
  `date` date NOT NULL,
  `user_id` mediumint(8) UNSIGNED NOT NULL,
  `category_id` tinyint(3) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `body`, `views`, `likes`, `date`, `user_id`, `category_id`) VALUES
(1, 'Reunification of migrant toddlers, parents should be completed Thursday', '<h1>Header</h1>', 12, 237, '2019-07-07', 2, 3),
(2, 'Meet the 12 boys rescued from cave', '<h1>Meet the 12 boys rescued from cave</h1>', 23, 12, '2019-07-02', 1, 1),
(3, 'Title', 'Body', 0, 0, '2019-07-09', 3, 3),
(4, 'Title', 'Body', 0, 0, '2019-07-09', 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `first_name` varchar(50) CHARACTER SET greek NOT NULL,
  `last_name` varchar(100) CHARACTER SET greek NOT NULL,
  `username` varchar(50) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `password` varchar(160) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `username`, `password`) VALUES
(1, 'Σοφία', 'Πετροπούλου', 'sofia', '$2y$10$Hy3KwZBxRdUkWyMExbcYBuyBOE19T8osmnML1ZMZanQDd/qcpcuqe'),
(2, 'Ιορδάνης', 'Σαββίδης', 'iordanis', '$2y$10$Hy3KwZBxRdUkWyMExbcYBuyBOE19T8osmnML1ZMZanQDd/qcpcuqe'),
(3, 'θανάσης', 'Νομικός', 'thanasis', '$2y$10$Hy3KwZBxRdUkWyMExbcYBuyBOE19T8osmnML1ZMZanQDd/qcpcuqe'),
(4, 'Σταμάτη', 'Μεθενίτης', 'stamatis', '$2y$10$Hy3KwZBxRdUkWyMExbcYBuyBOE19T8osmnML1ZMZanQDd/qcpcuqe');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_posts_users` (`user_id`),
  ADD KEY `fk_posts_categories` (`category_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `fk_posts_categories` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_posts_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
