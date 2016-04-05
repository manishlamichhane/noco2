-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 06, 2016 at 12:39 AM
-- Server version: 5.5.47-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbnoco2_2016`
--

-- --------------------------------------------------------

--
-- Table structure for table `garbage_categories`
--

CREATE TABLE IF NOT EXISTS `garbage_categories` (
  `garbage_category_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `garbage_category_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`garbage_category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `garbage_categories`
--

INSERT INTO `garbage_categories` (`garbage_category_id`, `garbage_category_name`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Plastic', '', '2016-04-04 20:13:00', '2016-04-04 20:13:00'),
(2, 'Glass', '', '2016-04-04 20:13:00', '2016-04-04 20:13:00'),
(3, 'Bio', '', '2016-04-04 20:13:00', '2016-04-04 20:13:00'),
(4, 'Carboard', '', '2016-04-04 20:13:00', '2016-04-04 20:13:00'),
(5, 'Metal', '', '2016-04-04 20:13:00', '2016-04-04 20:13:00');

-- --------------------------------------------------------

--
-- Table structure for table `garbage_types`
--

CREATE TABLE IF NOT EXISTS `garbage_types` (
  `garbage_type_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `garbage_cat_name` int(10) unsigned NOT NULL,
  `garbage_type_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`garbage_type_id`),
  KEY `garbage_types_garbage_cat_name_foreign` (`garbage_cat_name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=13 ;

--
-- Dumping data for table `garbage_types`
--

INSERT INTO `garbage_types` (`garbage_type_id`, `garbage_cat_name`, `garbage_type_name`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 1, 'Plastic Bags', '', '2016-04-05 00:06:00', '2016-04-05 00:07:04'),
(4, 1, 'Plastic Bottles', '', '2016-04-05 00:06:00', '2016-04-05 00:06:00'),
(5, 2, 'Glass Bottle', '', '2016-04-05 00:18:13', '2016-04-05 03:08:33'),
(6, 2, 'Glass Utensils', '', '2016-04-05 10:16:12', '2016-04-05 03:23:12'),
(7, 3, 'Bio Waste', '', '2016-04-05 01:09:09', '2016-04-04 23:08:13'),
(8, 4, '1 litre', '', '2016-04-05 01:28:08', '2016-04-04 23:35:29'),
(9, 4, '1.5 litre', '', '2016-04-05 04:25:06', '2016-04-05 00:20:17'),
(10, 4, 'Large Pizza cover', '', '2016-04-04 22:14:17', '2016-04-05 01:42:08'),
(11, 4, 'Medium Pizza cover', '', '2016-04-04 23:11:14', '2016-04-05 01:28:18'),
(12, 4, 'Small Pizza cover', '', '2016-04-04 23:11:14', '2016-04-05 01:28:18');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_000001_create_password_resets_table', 1),
('2016_04_01_000002_garbage_categories', 1),
('2016_04_01_000003_garbage_types', 1),
('2016_04_01_000004_user_garbage_relationship', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Manish Lamichhane', 'manishlamichhane@gmail.com', '$2y$10$1rwCAigMZ8vROtJZk7RZfOpcaOdj/RuJ4Ayn8bkUKHyA4TgHUNCDS', 'MThPQHginNz2JdP50okMwNZGJ9NjaRl2q4Mwhca5iiGUxCBSIvcV3zD11jav', '2016-04-04 05:05:55', '2016-04-05 18:29:23');

-- --------------------------------------------------------

--
-- Table structure for table `user_garbage_relationships`
--

CREATE TABLE IF NOT EXISTS `user_garbage_relationships` (
  `user_garbage_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user` int(10) unsigned NOT NULL,
  `garbage_type` int(10) unsigned NOT NULL,
  `garbage_unit` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`user_garbage_id`),
  KEY `user_garbage_relationships_user_foreign` (`user`),
  KEY `user_garbage_relationships_garbage_type_foreign` (`garbage_type`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;

--
-- Dumping data for table `user_garbage_relationships`
--

INSERT INTO `user_garbage_relationships` (`user_garbage_id`, `user`, `garbage_type`, `garbage_unit`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 1, 7, 3, NULL, '2016-04-05 08:17:36', '2016-04-05 08:17:36'),
(2, 1, 9, 3, NULL, '2016-04-05 08:20:04', '2016-04-05 08:20:04'),
(3, 1, 7, 5, NULL, '2016-04-05 08:25:46', '2016-04-05 08:25:46'),
(4, 1, 12, 5, NULL, '2016-04-05 08:33:04', '2016-04-05 08:33:04'),
(5, 1, 3, 4, NULL, '2016-04-05 08:39:41', '2016-04-05 08:39:41'),
(6, 1, 10, 1, NULL, '2016-04-05 08:45:12', '2016-04-05 08:45:12'),
(7, 1, 11, 1, NULL, '2016-04-05 08:49:50', '2016-04-05 08:49:50'),
(8, 1, 12, 1, NULL, '2016-04-05 08:59:59', '2016-04-05 08:59:59'),
(9, 1, 6, 3, NULL, '2016-04-05 09:04:07', '2016-04-05 09:04:07');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `garbage_types`
--
ALTER TABLE `garbage_types`
  ADD CONSTRAINT `garbage_types_garbage_cat_name_foreign` FOREIGN KEY (`garbage_cat_name`) REFERENCES `garbage_categories` (`garbage_category_id`);

--
-- Constraints for table `user_garbage_relationships`
--
ALTER TABLE `user_garbage_relationships`
  ADD CONSTRAINT `user_garbage_relationships_garbage_type_foreign` FOREIGN KEY (`garbage_type`) REFERENCES `garbage_types` (`garbage_type_id`),
  ADD CONSTRAINT `user_garbage_relationships_user_foreign` FOREIGN KEY (`user`) REFERENCES `users` (`user_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
