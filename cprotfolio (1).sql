-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 18, 2024 at 11:54 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cprotfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint UNSIGNED NOT NULL,
  `homebanner1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `home_banner_link1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `homebanner2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `home_banner_link2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `homebanner3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `home_banner_link3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner_link4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner_link5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `homebanner1`, `home_banner_link1`, `homebanner2`, `home_banner_link2`, `homebanner3`, `home_banner_link3`, `banner4`, `banner_link4`, `banner5`, `banner_link5`, `created_at`, `updated_at`) VALUES
(1, 'upload/20240118093437_9210.jpg', 'gfghdghgh', 'upload/20240118093437_2478.png', 'dgdfgdfg', 'upload/20240118093437_3949.jpg', 'hjdkjjd', 'upload/20240118100154_5234.png', 'dfgdgs', 'upload/20240117112005.jpg', 'dfgsfg', '2024-01-17 04:30:12', '2024-01-18 04:01:54');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `image`, `created_at`, `updated_at`) VALUES
(8, 'BUSINESS', 'business', 'upload/20240110094519.jpg', '2024-01-10 03:45:19', '2024-01-10 03:45:19'),
(10, 'POLITICS', 'politics', 'upload/20240110095429.jpg', '2024-01-10 03:54:29', '2024-01-10 03:54:29'),
(11, 'Technology', 'technology', 'upload/20240110105909.jpg', '2024-01-10 04:59:09', '2024-01-10 04:59:21');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint UNSIGNED NOT NULL,
  `post_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comment` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `post_id`, `name`, `email`, `comment`, `created_at`, `updated_at`) VALUES
(1, 9, 'Sajid', 'admin@admin.com', 'gfhgfg', '2024-01-17 02:28:15', '2024-01-17 02:28:15'),
(2, 5, 'Sajid', 'ryreyeyt', 'trgrthtrh', '2024-01-17 02:31:46', '2024-01-17 02:31:46');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2024_01_01_045335_create_categories_table', 2),
(7, '2024_01_01_075221_create_sub_categories_table', 3),
(9, '2024_01_02_094155_create_pages_table', 5),
(10, '2024_01_02_101810_create_sections_table', 6),
(11, '2024_01_02_050733_create_posts_table', 7),
(13, '2024_01_04_075332_create_web_settings_table', 8),
(15, '2024_01_17_075522_create_comments_table', 9),
(18, '2024_01_17_085821_create_banners_table', 10),
(20, '2024_01_18_100744_create_videos_table', 11);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sidebar` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `name`, `slug`, `sidebar`, `image`, `created_at`, `updated_at`) VALUES
(2, 'Home', 'home', NULL, 'upload/20240102101536.png', '2024-01-02 04:15:36', '2024-01-02 04:15:36'),
(3, 'Aboute', 'aboute', NULL, 'upload/20240104053229.png', '2024-01-03 23:32:29', '2024-01-03 23:32:29');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint UNSIGNED NOT NULL,
  `post_creator` bigint UNSIGNED NOT NULL,
  `category_id` bigint UNSIGNED NOT NULL,
  `sub_category_id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_size` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_position` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `post_creator`, `category_id`, `sub_category_id`, `title`, `slug`, `description`, `image`, `image_size`, `image_position`, `created_at`, `updated_at`) VALUES
(4, 1, 10, 5, 'Vholuptatem at dolori4', 'vholuptatem-at-dolori4', '<p>Lorem ipsum dolor sit amet consectetur adipiscing elit, a blandit mollis vivamus class pellentesque potenti tristique, hac lacus interdum tellus elementum id. Libero hac nec pellentesque venenatis porta bibendum qjhhgj</p>', 'upload/20240110062436.jpg', NULL, NULL, '2024-01-02 00:58:40', '2024-01-18 05:28:04'),
(5, 1, 8, 5, 'Voluptatem at dolori5', 'voluptatem-at-dolori5', '<p>Lorem ipsum dolor sit amet consectetur adipiscing elit, a blandit mollis vivamus class pellentesque potenti tristique, hac lacus interdum tellus elementum id. Libero hac nec pellentesque venenatis porta bibendum q</p>', 'upload/20240110062544.jpg', NULL, NULL, '2024-01-06 00:58:40', '2024-01-10 04:40:44'),
(6, 1, 8, 2, 'Voluptatem at dolori6', 'voluptatem-at-dolori6', '<p>Lorem ipsum dolor sit amet consectetur adipiscing elit, a blandit mollis vivamus class pellentesque potenti tristique, hac lacus interdum tellus elementum id. Libero hac nec pellentesque venenatis porta bibendum q</p>', 'upload/20240110062607.jpg', NULL, NULL, '2024-01-04 00:58:40', '2024-01-10 04:44:34'),
(7, 1, 11, 2, 'Voluptatem at dolori7', 'voluptatem-at-dolori7', '<p>Lorem ipsum dolor sit amet consectetur adipiscing elit, a blandit mollis vivamus class pellentesque potenti tristique, hac lacus interdum tellus elementum id. Libero hac nec pellentesque venenatis porta bibendum q</p>', 'upload/20240110062708.jpg', NULL, NULL, '2024-01-04 00:58:40', '2024-01-10 05:00:19'),
(8, 1, 11, 2, 'Voluptatem at dolori8', 'voluptatem-at-dolori8', '<p>Lorem ipsum dolor sit amet consectetur adipiscing elit, a blandit mollis vivamus class pellentesque potenti tristique, hac lacus interdum tellus elementum id. Libero hac nec pellentesque venenatis porta bibendum q</p>', 'upload/20240110062727.jpg', NULL, NULL, '2024-01-04 00:58:40', '2024-01-10 05:00:11'),
(9, 1, 11, 2, 'Voluptatem at dolori9', 'voluptatem-at-dolori9', '<p>Lorem ipsum dolor sit amet consectetur adipiscing elit, a blandit mollis vivamus class pellentesque potenti tristique, hac lacus interdum tellus elementum id. Libero hac nec pellentesque venenatis porta bibendum q</p>', 'upload/20240110063044.jpg', NULL, NULL, '2024-01-04 00:58:40', '2024-01-10 05:00:02'),
(10, 1, 11, 2, 'Voluptatem at dolori10', 'voluptatem-at-dolori10', '<p>Lorem ipsum dolor sit amet consectetur adipiscing elit, a blandit mollis vivamus class pellentesque potenti tristique, hac lacus interdum tellus elementum id. Libero hac nec pellentesque venenatis porta bibendum q</p>', 'upload/20240110063112.jpg', NULL, NULL, '2024-01-04 00:58:40', '2024-01-10 04:59:54'),
(11, 1, 10, 2, 'Voluptatem at dolori11', 'voluptatem-at-dolori11', '<p>Lorem ipsum dolor sit amet consectetur adipiscing elit, a blandit mollis vivamus class pellentesque potenti tristique, hac lacus interdum tellus elementum id. Libero hac nec pellentesque venenatis porta bibendum q</p>', 'upload/20240110063537.jpg', NULL, NULL, '2024-01-04 00:58:40', '2024-01-10 03:55:38'),
(12, 1, 10, 2, 'Voluptatem at dolori12', 'voluptatem-at-dolori12', '<p>Lorem ipsum dolor sit amet consectetur adipiscing elit, a blandit mollis vivamus class pellentesque potenti tristique, hac lacus interdum tellus elementum id. Libero hac nec pellentesque venenatis porta bibendum q</p>', 'upload/20240110063618.jpg', NULL, NULL, '2024-01-04 00:58:40', '2024-01-10 03:55:47'),
(13, 1, 10, 2, 'Voluptatem at dolori13', 'voluptatem-at-dolori13', '<p>Lorem ipsum dolor sit amet consectetur adipiscing elit, a blandit mollis vivamus class pellentesque potenti tristique, hac lacus interdum tellus elementum id. Libero hac nec pellentesque venenatis porta bibendum q</p>', 'upload/20240110063642.jpg', NULL, NULL, '2024-01-04 00:58:40', '2024-01-10 03:55:58'),
(14, 1, 8, 2, 'Voluptatem at dolori14', 'voluptatem-at-dolori14', '<p>Lorem ipsum dolor sit amet consectetur adipiscing elit, a blandit mollis vivamus class pellentesque potenti tristique, hac lacus interdum tellus elementum id. Libero hac nec pellentesque venenatis porta bibendum q</p>', 'upload/20240110063658.jpg', NULL, NULL, '2024-01-04 00:58:40', '2024-01-10 03:56:24'),
(15, 1, 11, 2, 'Voluptatem at dolori15', 'voluptatem-at-dolori15', '<p>Lorem ipsum dolor sit amet consectetur adipiscing elit, a blandit mollis vivamus class pellentesque potenti tristique, hac lacus interdum tellus elementum id. Libero hac nec pellentesque venenatis porta bibendum q</p>', 'upload/20240110063716.jpg', NULL, NULL, '2024-01-04 00:58:40', '2024-01-10 04:59:44'),
(16, 1, 8, 2, 'Voluptatem at dolori16', 'voluptatem-at-dolori', '<p>Lorem ipsum dolor sit amet consectetur adipiscing elit, a blandit mollis vivamus class pellentesque potenti tristique, hac lacus interdum tellus elementum id. Libero hac nec pellentesque venenatis porta bibendum q</p>', 'upload/20240110063736.jpg', NULL, NULL, '2024-01-04 00:58:40', '2024-01-10 00:37:36');

-- --------------------------------------------------------

--
-- Table structure for table `sections`
--

CREATE TABLE `sections` (
  `id` bigint UNSIGNED NOT NULL,
  `page_id` int NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bg_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sections`
--

INSERT INTO `sections` (`id`, `page_id`, `title`, `sub_title`, `description`, `image`, `bg_image`, `created_at`, `updated_at`) VALUES
(1, 3, 'Quia voluptate dolor', 'Delectus aut omnis', '<p>Lorem ipsum dolor sit amet consectetur adipiscing elit rutrum vitae neque aptent, nibh viverra dictum inceptos fames duis erat tempor parturient scelerisque. Mauris tempus ornare nec faucibus porttitor, sociis vivamus nulla proin rhoncus, maecenas aptent molestie parturient. Class vestibulum libero imperdiet fermentum in netus, rhoncus vel vitae placerat eros velit, nibh sed dapibus nunc dis. Posuere vestibulum faucibus laoreet fames primis dapibus potenti augue, nascetur a suscipit tortor suspendisse mi rhoncus pharetra, dui nunc dictum commodo magnis ullamcorper tristique. Aenean ut sodales fringilla eu cum suscipit vel nisl habitasse proin bibendum, sollicitudin mus nunc ullamcorper odio eros justo etiam malesuada. Massa hendrerit habitant aptent iaculis scelerisque neque ultrices placerat, cum turpis est ultricies sodales leo viverra lectus, luctus sem tellus id vehicula facilisis mollis. Urna leo erat a duis vel montes, inceptos orci nec feugiat hendrerit vulputate varius, pretium ultricies fringilla sagittis nibh.</p>', 'upload/20240104063449.png', 'upload/20240108060332.jpg', '2024-01-03 23:40:35', '2024-01-08 00:03:32'),
(3, 3, 'Sit a est ex eaque', 'Molestiae ipsum qua', '<p>Lorem ipsum dolor sit amet consectetur adipiscing elit aliquet magnis magna taciti habitasse, facilisis phasellus odio vulputate commodo iaculis diam consequat egestas in justo tortor, felis ligula eros auctor himenaeos bibendum scelerisque ultricies molestie aenean viverra. Aptent urna semper himenaeos condimentum magnis aliquam morbi convallis orci, vitae habitant a netus bibendum luctus donec. Netus lacus phasellus dui aenean ad arcu cursus, ante nec neque sed fermentum potenti pretium curae, blandit tempus id eu consequat eleifend. Erat massa potenti nisi sapien aptent etiam maecenas, tempus viverra penatibus quisque fames nostra turpis, senectus facilisis platea natoque ullamcorper eu. Auctor dapibus rhoncus sed pellentesque quis justo eros vel enim morbi, platea quam imperdiet hac ultrices scelerisque mattis est gravida ullamcorper ridiculus, sapien porttitor habitasse sociosqu venenatis luctus a praesent netus. Primis habitant lectus tortor purus, elementum montes fusce fames, interdum tincidunt vulputate.</p>', 'upload/20240104054909.jpg', 'upload/20240104054909.png', '2024-01-03 23:49:09', '2024-01-03 23:49:09'),
(4, 2, 'Quia ut vel porro au', 'Tempora ut unde ea q', '<p>Lorem ipsum dolor sit amet consectetur adipiscing elit aliquet magnis magna taciti habitasse, facilisis phasellus odio vulputate commodo iaculis diam consequat egestas in justo tortor, felis ligula eros auctor himenaeos bibendum scelerisque ultricies molestie aenean viverra. Aptent urna semper himenaeos condimentum magnis aliquam morbi convallis orci, vitae habitant a netus bibendum luctus donec. Netus lacus phasellus dui aenean ad arcu cursus, ante nec neque sed fermentum potenti pretium curae, blandit tempus id eu consequat eleifend. Erat massa potenti nisi sapien aptent etiam maecenas, tempus viverra penatibus quisque fames nostra turpis, senectus facilisis platea natoque ullamcorper eu. Auctor dapibus rhoncus sed pellentesque quis justo eros vel enim morbi, platea quam imperdiet hac ultrices scelerisque mattis est gravida ullamcorper ridiculus, sapien porttitor habitasse sociosqu venenatis luctus a praesent netus. Primis habitant lectus tortor purus, elementum montes fusce fames, interdum tincidunt vulputate.</p>', 'upload/20240104063507.png', 'upload/20240108060358.jpg', '2024-01-04 00:14:03', '2024-01-08 00:03:58');

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` bigint UNSIGNED NOT NULL,
  `category_id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `category_id`, `name`, `slug`, `image`, `created_at`, `updated_at`) VALUES
(1, 4, 'T-Shirt', 't-shirt', 'upload/20240102045108.png', '2024-01-01 22:23:45', '2024-01-07 23:13:17'),
(2, 4, 'Round 1st', 'round-1st', 'upload/20240102090758.png', '2024-01-02 03:07:58', '2024-01-07 23:13:05'),
(3, 5, 'Season 1', 'season-1', 'upload/20240102090819.png', '2024-01-02 03:08:19', '2024-01-07 23:12:46'),
(4, 4, 'Nion Roy', 'nion-roy', 'upload/20240108051236.jpg', '2024-01-07 23:12:36', '2024-01-07 23:12:36'),
(5, 10, 'INTERNATIONAL', 'international', 'upload/20240110103950.jpg', '2024-01-10 04:39:50', '2024-01-10 04:39:50');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `type` enum('user','admin') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `type`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@admin.com', NULL, 'admin', '$2y$12$EDcWq2N.bK3S3l3l.56g7.pV668aE6mR2K4CliA.pX1hKszFs3/0S', NULL, '2023-12-31 00:10:47', '2023-12-31 00:10:47'),
(2, 'Nion Roy', 'user@user.com', NULL, 'user', '$2y$12$i62BbjEEavfn6ToxGAvMMuqR3Hciba9F1JerWOq8hHR6q4T/4B216', NULL, '2023-12-31 00:31:13', '2023-12-31 00:31:13'),
(3, 'Season 1', 'user@gmail.com', NULL, 'user', '$2y$12$tXXL7NbymYy2oz76lDOF2.jkJavrIUa5e09eZj6tQC.YQMXkYf4yS', NULL, '2024-01-06 04:10:45', '2024-01-06 04:10:45'),
(4, 'User', 'user2134@gmail.com', NULL, 'user', '$2y$12$/RpSMH7mb3a0YVggxwH8Y.4YmQyPW6z5aBXbQJI2GYAgPeoC985rW', NULL, '2024-01-06 04:15:54', '2024-01-06 04:15:54'),
(5, 'tibipyj', 'user3@user.com', NULL, 'user', '$2y$12$2uzuNVoG/PI2iQBdReZLJez9nkRkp4hWLWTbvf6BtZfHGYruPoq7W', NULL, '2024-01-06 04:36:46', '2024-01-06 04:36:46');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` bigint UNSIGNED NOT NULL,
  `post_creator` bigint UNSIGNED NOT NULL,
  `category_id` bigint UNSIGNED NOT NULL,
  `sub_category_id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `video` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `post_creator`, `category_id`, `sub_category_id`, `title`, `slug`, `description`, `video`, `created_at`, `updated_at`) VALUES
(2, 1, 10, 2, 'video 2', 'video-2', '<p>hfghhgfh</p>', 'BCxhQpS5fQ0', '2024-01-18 05:09:12', '2024-01-18 05:33:56'),
(3, 1, 11, 3, 'ghjgj', 'ghjgj', '<p>fghfghhg</p>', 'kgppJX0G--E', '2024-01-18 05:13:34', '2024-01-18 05:13:34');

-- --------------------------------------------------------

--
-- Table structure for table `web_settings`
--

CREATE TABLE `web_settings` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `fav_icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile_logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_1` int NOT NULL,
  `contact_2` int NOT NULL,
  `email_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `map` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `social_link_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `social_link_2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `social_link_3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `social_link_4` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `social_link_5` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address_1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `address_2` text COLLATE utf8mb4_unicode_ci,
  `working_time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `copyright` text COLLATE utf8mb4_unicode_ci,
  `breaking_news` longtext COLLATE utf8mb4_unicode_ci,
  `bg_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `web_settings`
--

INSERT INTO `web_settings` (`id`, `title`, `sub_title`, `description`, `fav_icon`, `logo`, `mobile_logo`, `contact_1`, `contact_2`, `email_1`, `email_2`, `map`, `social_link_1`, `social_link_2`, `social_link_3`, `social_link_4`, `social_link_5`, `address_1`, `address_2`, `working_time`, `copyright`, `breaking_news`, `bg_image`, `created_at`, `updated_at`) VALUES
(1, 'Newa365', 'Gaming News & Insights', '<p>Lorem ipsum dolor sit amet consectetur adipiscing, elit nullam natoque hendrerit aliquam,</p>', 'upload/20240106111646.png', 'upload/20240106111705.png', 'upload/20240106111705.png', 1922296392, 1821450144, 'hexahily@mailinator.com', 'hutiguq@mailinator.com', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.197714892196!2d90.4206125758984!3d23.81156738642426!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c75b217edcff%3A0xd9bf0907e20cac6f!2sTechweb%20Bd%20It!5e0!3m2!1sen!2sbd!4v1704539687623!5m2!1sen!2sbd', 'https://twitter.com/', 'https://www.facebook.com/', 'https://www.google.com/', 'https://vimeo.com/', 'https://www.pinterest.com/', '<ul>\r\n<li>A-15, Ainuddin Munshi Road,</li>\r\n<li>Bashundhara Main Road, Dhaka</li>\r\n</ul>', NULL, 'Voluptate corrupti', 'All rights reserved 2024.', '<h3>HI! This is Demo Breaking news. &nbsp; &nbsp; &nbsp;Leo does not collect identifiers such as your IP Address that can be linked to you. No personal data is retained by the AI model or any 3rd-party model providers.</h3>', 'upload/20240106111626.jpg', '2024-01-06 05:16:26', '2024-01-18 03:18:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `web_settings`
--
ALTER TABLE `web_settings`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `sections`
--
ALTER TABLE `sections`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `web_settings`
--
ALTER TABLE `web_settings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
