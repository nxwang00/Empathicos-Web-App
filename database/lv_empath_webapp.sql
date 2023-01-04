-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2021 at 09:21 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lv_empath_webapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` int(11) NOT NULL,
  `page` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `course` varchar(255) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `position` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT '1' COMMENT '1=Active,2=Inactive	',
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `page`, `name`, `image`, `description`, `course`, `website`, `position`, `status`, `created_at`, `updated_at`) VALUES
(4, 'Paul Wagner', 'Paul Wagner', '1611830859.png', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'Development', 'https://paulwagner.com/', '3', '1', '2020-12-21 19:10:41', '2021-02-15 12:39:20'),
(8, 'Empathicos', 'Empathicos', '1611830987.png', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.</p>', 'Development', 'https://empathicos.com', '1', '1', '2020-12-25 10:42:16', '2021-02-15 12:38:55'),
(12, 'Andreea Plesea', 'Andreea Plesea', '1611831761.png', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'Development', 'https://andreeaplesea.com', '2', '1', '2021-01-28 11:02:41', '2021-02-15 12:39:09'),
(13, 'Artist', 'Artist', '1611831818.png', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'Development', 'https://www.artist.com/', '4', '1', '2021-01-28 11:03:38', '2021-02-15 12:39:29');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(75) DEFAULT NULL,
  `password` varchar(128) NOT NULL,
  `about` text DEFAULT NULL,
  `image` varchar(128) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `email_verified_at` datetime DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `about`, `image`, `birthday`, `status`, `email_verified_at`, `created_at`, `updated_at`) VALUES
(1, 'Mr. Admin', 'admin@gmail.com', '$2y$10$bI1gExvEF2ut4uC07CGkquEiJo9Zowodt2QqxsRmbH/gXaTccH0la', '<p><strong>Lorem Ipsum i</strong>s simply a dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s when an unknown printer took a galley of.&nbsp;<strong>Lorem Ipsum</strong>&nbsp;is simply a dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s when an unknown printer took a galley of.&nbsp;<strong>Lorem Ipsum</strong>&nbsp;is simply a dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s when an unknown printer took a galley of.&nbsp;<strong>Lorem Ipsum</strong>&nbsp;is simply a dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s when an unknown printer took a galley of.</p>\r\n\r\n<p>&nbsp;</p>', '3DDkXUCE_400x400_1611309579.jpg', NULL, 1, NULL, '2020-12-04 07:43:43', '2021-02-24 10:07:42');

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `slug` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT '1' COMMENT '1=Active,2=Inactive',
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `slug`, `description`, `image`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'lorem-ipsum-is-simply-dummy-text-of-the-printing-and-typesetting-industry-4', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '1611210870.jpg', '1', '2020-12-05 10:14:12', '2021-02-15 11:14:55'),
(3, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'lorem-ipsum-is-simply-dummy-text-of-the-printing-and-typesetting-industry-5', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '1611210772.jpg', '1', '2020-12-05 10:14:14', '2021-02-15 11:14:58'),
(4, 'What is Lorem Ipsum?', 'what-is-lorem-ipsum-5', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '1611210817.jpg', '1', '2020-12-25 07:25:00', '2021-02-15 11:15:00'),
(5, 'What is Lorem Ipsum?', 'what-is-lorem-ipsum-6', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '1611210836.jpg', '1', '2020-12-25 07:25:18', '2021-02-15 11:15:02'),
(8, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'lorem-ipsum-is-simply-dummy-text-of-the-printing-and-typesetting-industry-6', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '1611210911.jpg', '1', '2020-12-05 10:14:12', '2021-02-15 11:15:05'),
(9, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'lorem-ipsum-is-simply-dummy-text-of-the-printing-and-typesetting-industry-7', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '1611210925.jpg', '1', '2020-12-05 10:14:14', '2021-02-15 11:15:07'),
(10, 'What is Lorem Ipsum?', 'what-is-lorem-ipsum-8', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '1611210930.jpg', '1', '2020-12-25 07:25:00', '2021-02-15 11:15:10'),
(11, 'What is Lorem Ipsum?', 'what-is-lorem-ipsum-7', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '1611210939.jpg', '1', '2020-12-25 07:25:18', '2021-02-15 11:15:12'),
(13, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'lorem-ipsum-is-simply-dummy-text-of-the-printing-and-typesetting-industry-8', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '1611211023.jpg', '1', '2020-12-05 10:14:12', '2021-02-15 11:15:15'),
(14, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'lorem-ipsum-is-simply-dummy-text-of-the-printing-and-typesetting-industry-3', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '1611211031.jpg', '1', '2020-12-05 10:14:14', '2021-02-15 11:14:42'),
(15, 'What is Lorem Ipsum?', 'what-is-lorem-ipsum-4', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '1611211037.jpg', '1', '2020-12-25 07:25:00', '2021-02-15 11:14:38'),
(16, 'What is Lorem Ipsum?', 'what-is-lorem-ipsum-3', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '1611211042.jpg', '1', '2020-12-25 07:25:18', '2021-02-15 11:14:36'),
(17, 'What is Lorem Ipsum?', 'what-is-lorem-ipsum-2', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '1611211048.jpg', '1', '2021-01-07 08:24:46', '2021-02-15 11:14:33'),
(18, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'lorem-ipsum-is-simply-dummy-text-of-the-printing-and-typesetting-industry-2', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '1611211053.jpg', '1', '2020-12-05 10:14:12', '2021-02-15 11:14:31'),
(19, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'lorem-ipsum-is-simply-dummy-text-of-the-printing-and-typesetting-industry-1', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '1611211059.jpg', '1', '2020-12-05 10:14:14', '2021-02-15 11:14:28'),
(20, 'What is Lorem Ipsum?', 'what-is-lorem-ipsum-1', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '1611211064.jpg', '1', '2020-12-25 07:25:00', '2021-02-15 11:14:26'),
(21, 'What is Lorem Ipsum?', 'what-is-lorem-ipsum', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '1611211078.jpg', '1', '2020-12-25 07:25:18', '2021-02-15 11:14:23'),
(22, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'lorem-ipsum-is-simply-dummy-text-of-the-printing-and-typesetting-industry', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '1611211084.jpg', '1', '2021-01-07 08:24:46', '2021-03-31 07:08:35');

-- --------------------------------------------------------

--
-- Table structure for table `badges`
--

CREATE TABLE `badges` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1' COMMENT '1=Active,2=Inactive',
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `badges`
--

INSERT INTO `badges` (`id`, `name`, `description`, `image`, `status`, `created_at`, `updated_at`) VALUES
(7, 'Caterpillar', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '1616158618.PNG', '1', '2020-12-30 09:22:23', '2021-03-19 12:56:58'),
(8, 'Butterfly', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '1616158680.PNG', '1', '2020-12-31 09:38:56', '2021-03-19 12:58:00'),
(11, 'Hornet', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '1616158718.PNG', '1', '2020-12-30 09:22:23', '2021-03-19 12:58:38'),
(12, 'Adventurer', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '1616158821.PNG', '1', '2020-12-31 09:38:56', '2021-03-19 13:00:21'),
(13, 'Fairy', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '1616158842.PNG', '1', '2020-12-30 09:22:23', '2021-03-19 13:00:42'),
(14, 'Dragonfly', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '1616158875.PNG', '1', '2020-12-31 09:38:56', '2021-03-19 13:01:15'),
(15, 'Manifestor', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '1616158902.PNG', '1', '2020-12-30 09:22:23', '2021-03-19 13:01:42'),
(16, 'Puppy', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '1616158928.PNG', '1', '2020-12-31 09:38:56', '2021-03-19 13:02:08'),
(17, 'Lover', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '1616159047.PNG', '1', '2020-12-30 09:22:23', '2021-03-19 13:04:07'),
(18, 'Healer', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '1616159076.PNG', '1', '2020-12-31 09:38:56', '2021-03-31 06:36:50'),
(19, 'Empath', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '1616222671.PNG', '1', '2020-12-30 09:22:23', '2021-03-20 06:44:31'),
(20, 'Transcended', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '1616222700.PNG', '1', '2020-12-31 09:38:56', '2021-03-20 06:45:00');

-- --------------------------------------------------------

--
-- Table structure for table `badge_categories`
--

CREATE TABLE `badge_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1' COMMENT '1=Active,2=Inactive	',
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `badge_categories`
--

INSERT INTO `badge_categories` (`id`, `name`, `image`, `description`, `status`, `created_at`, `updated_at`) VALUES
(6, 'Prayer', '1611150568.png', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '1', '2020-12-21 13:20:08', '2021-03-15 11:00:04'),
(7, 'Desire', '1611150582.png', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '1', '2020-12-25 09:53:32', '2021-01-20 13:49:42'),
(8, 'Empathy', '1611150594.png', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '1', '2020-12-25 09:53:52', '2021-01-20 13:49:54'),
(9, 'Love', '1611150606.png', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '1', '2020-12-30 07:59:45', '2021-03-19 09:49:56'),
(10, 'Encouragement', '1611150619.png', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '1', '2020-12-30 08:00:21', '2021-03-19 11:26:36'),
(11, 'Play & Wonder', '1611150635.png', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '1', '2020-12-31 09:08:30', '2021-03-19 06:52:46'),
(12, 'Joy', '1611150648.png', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '1', '2020-12-30 08:00:21', '2021-01-20 13:50:48'),
(13, 'Gratitude', '1611150663.png', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '1', '2020-12-31 09:08:30', '2021-03-15 11:00:54');

-- --------------------------------------------------------

--
-- Table structure for table `badge_categories_images`
--

CREATE TABLE `badge_categories_images` (
  `id` int(11) NOT NULL,
  `badge_id` varchar(255) NOT NULL,
  `image` text DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `badge_categories_images`
--

INSERT INTO `badge_categories_images` (`id`, `badge_id`, `image`, `created_at`, `updated_at`) VALUES
(81, '18', '16113088160.jpg', '2021-01-22 15:16:56', '2021-01-22 15:16:56'),
(77, '15', '16113087862.jpg', '2021-01-22 15:16:26', '2021-01-22 15:16:26'),
(76, '15', '16113087851.jpg', '2021-01-22 15:16:26', '2021-01-22 15:16:26'),
(75, '15', '16113087850.jpg', '2021-01-22 15:16:26', '2021-01-22 15:16:26'),
(61, '17', '16113083282.jpg', '2021-01-22 15:08:48', '2021-01-22 15:08:48'),
(60, '17', '16113083281.jpg', '2021-01-22 15:08:48', '2021-01-22 15:08:48'),
(59, '17', '16113083280.jpg', '2021-01-22 15:08:48', '2021-01-22 15:08:48'),
(54, '16', '16113076211.png', '2021-01-22 14:57:01', '2021-01-22 14:57:01'),
(53, '16', '16113076210.jpg', '2021-01-22 14:57:01', '2021-01-22 14:57:01'),
(99, '6', '16115666622.jpg', '2021-01-25 14:54:22', '2021-01-25 14:54:22'),
(98, '6', '16115666621.jpg', '2021-01-25 14:54:22', '2021-01-25 14:54:22'),
(97, '6', '16115666620.jpg', '2021-01-25 14:54:22', '2021-01-25 14:54:22'),
(94, '10', '16115614190.jpg', '2021-01-25 13:26:59', '2021-01-25 13:26:59'),
(95, '10', '16115614191.jpg', '2021-01-25 13:26:59', '2021-01-25 13:26:59'),
(96, '10', '16115614192.jpg', '2021-01-25 13:26:59', '2021-01-25 13:26:59');

-- --------------------------------------------------------

--
-- Table structure for table `badge_templates`
--

CREATE TABLE `badge_templates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `badge_id` int(10) DEFAULT NULL,
  `field` int(10) DEFAULT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `badge_templates`
--

INSERT INTO `badge_templates` (`id`, `badge_id`, `field`, `value`, `created_at`, `updated_at`) VALUES
(90, 7, 1, '{\"title\":\"WHO AM I?\",\"description\":\"I am the Caterpillar. You may rarely see me. I can easily be crushed so I blend in to survive.  You will only see me someday when I begin to fly. Until then I hold only within me the mysteries of all I am and know.\",\"image\":\"161615939340.png\"}', '2021-03-19 13:09:53', '2021-03-19 13:09:53'),
(91, 7, 2, '{\"title\":\"WHERE DO I NEED TO GO?\",\"short_description\":null,\"description\":\"The safe shade of a leaf or a nest of silk I weave are my favorite places. I do not stray far from where I was born. I need the familiar food of my birth, the leaves that taste like home. In the comfort of the familiar I find my safety.\",\"image\":\"161615959249.jpg\"}', '2021-03-19 13:13:12', '2021-03-19 13:13:12'),
(92, 7, 3, '{\"title\":\"WHAT DO I NEED TO DO?\",\"description\":\"Stay close to what I know, and tread lightly as I grow. I devour the light of the sun and the water of the Earth with every leaf that feeds me.\",\"image\":\"161615968477.jpg\",\"second_image\":\"default.png\"}', '2021-03-19 13:14:44', '2021-03-19 13:14:44'),
(93, 7, 4, '{\"title\":\"WHO DO I NEED AROUND ME?\",\"description\":\"I need to be with those with tender hearts who will be careful not to crush me. Protect me if you see me  - everything you love in a butterfly or a flower is in me. Don\\u2019t judge me that I am slimy, I crawl or I am slow. Someday I will unfold and fly, knowing things about the Earth I would have otherwise never known. Can you appreciate me now and wait until I find all my colors?\",\"image\":\"161615973858.jpg\"}', '2021-03-19 13:15:38', '2021-03-19 13:15:38'),
(94, 7, 5, '{\"title\":\"WHAT MAKES ME HAPPY?\",\"short_description\":null,\"description\":\"A world in which everyone sees the Divine purpose of everything and the limitless potential of every being.\",\"image\":\"161615979692.jpg\"}', '2021-03-19 13:16:36', '2021-03-19 13:16:36'),
(95, 7, 6, '{\"title\":\"The caterpillar reminds us of the potential\",\"description\":\"The caterpillar reminds us of the potential, courage, and resilience in all of us and asks us to be kind and patient with each other because we all have value. Sometimes we feel scared and are hiding our beautiful colors. We need patience, compassion and trust to allow our true nature to emerge. \\r\\n\\r\\nWe may be afraid to venture far from what is familiar and feel unprepared to take risks. With courage and faith, we can all leave the safety of the familiar and transform to show our beautiful colors to the world.  The familiar holds sweet comforts for us, but it will not show us new ways of being or teach us about the strength that we have to manage challenges.\",\"image\":\"161615993235.jpg\",\"second_image\":\"161615993243.jpg\"}', '2021-03-19 13:18:52', '2021-03-19 13:18:52'),
(96, 7, 1, '{\"title\":\"Now that you know who the Caterpillar\",\"description\":\"Now that you know who the Caterpillar is and what the Caterpillar represents, here are some ways in which you can bring the spirit of the Caterpillar in your life.\",\"image\":\"161616026520.png\"}', '2021-03-19 13:24:25', '2021-03-19 13:24:25'),
(97, 7, 2, '{\"title\":\"Appreciate all your experiences - can you trust yourself and the Universe?\",\"short_description\":null,\"description\":\"The Caterpillar is necessary to the Butterfly. This is the cycle of life, of experiencing, learning and growing. We cannot avoid our experiences. We can either become disheartened, angry at life, others or ourselves, or we can learn and grow.\\r\\n\\r\\n In any situation where we feel that we have been thrown on the ground, the single best thing we can do is pay attention to how we respond in trying to get back up. We can learn the most about ourselves and life in difficult situations. If we use every situation to advance our understanding of ourselves and to evolve, no matter what happens we will have a victory that nothing and no one can take from us. Appreciate every experience that you had or have.\\r\\n\\r\\n If you feel that an experience changed you in a way that is unhelpful to you currently, resolve to change this for yourself. What would be more helpful? What do your own responses to the situation teach you? What do you need to forgive and let go of to move forward?\\r\\n\\r\\nKeep growing, keep going, keep feeding yourself the healthy food of trust, optimism, and resolve. You got this!\",\"image\":\"161616038268.jpg\"}', '2021-03-19 13:26:22', '2021-03-19 13:26:22'),
(98, 7, 3, '{\"title\":\"Surrender for true transformation - can you let go of your ideas and let life move you?\",\"description\":\"The Caterpillar surrenders itself entirely to be transformed into a butterfly, its body turned into new matter by divine alchemy. We can choose to surrender and go with the flow of life, or we can try to control, resist and orchestrate. We may be able for some time to control some circumstances, but we need to be prepared for the undoing of it all as we ourselves long for the flow of life.\\r\\n\\r\\nAs the caterpillar is moving toward its transformation, so we too seek that which moves us toward our highest versions of ourselves. For most of us, surrender comes only when we are too tired, too desperate, too lonely, too sick to keep going. Then we finally let go and allow what needs to be allowed. We are acknowledging that we cannot understand everything.\\r\\n\\r\\nAs you deal with challenges, imagine that an outcome that serves you and everyone else will materialise. It may not be what you imagine it to be, but have trust that it is indeed serving you.\",\"image\":\"161616049879.jpg\",\"second_image\":\"161616049820.jpg\"}', '2021-03-19 13:28:18', '2021-03-19 13:28:18'),
(99, 7, 4, '{\"title\":\"See yourself and others with compassion.\",\"description\":\"Just like the caterpillar is vulnerable to the elements, we are all feeling equally challenged by life at different times. We are all learning and trying what we think is our best based on what we were taught by others to do. It may not seem that way but our human struggles are common. Be kind to yourself as you are finding your way in life and look upon others with kindness as well. \\r\\n\\r\\nIt is difficult sometimes to show compassion to ourselves. We feel we fall short, and oftentimes we don\\u2019t know how to appreciate that there is no agreed template of what it means to be human and we need to learn.\",\"image\":\"161616057228.jpg\"}', '2021-03-19 13:29:33', '2021-03-19 13:29:33'),
(100, 7, 5, '{\"title\":\"Balance the familiar with needed risk - are you playing it too safe?\",\"short_description\":null,\"description\":\"We receive much useful knowledge and wisdom from our families and places of birth, but to become evolved adults we need to learn how to let go of what is familiar but no longer serves us. \\r\\n\\r\\nAre you operating by notions embedded in your family and culture? Dare to evaluate these against the light of truth and let go of what is not aligned with you. It can be scary to act, think or behave in ways that are counter to what we have learned to do for so many years, but it is the way that we break free.\\r\\n\\r\\nWhat is familiar can be reassuring and soothing, but if we allow the attraction of safety and comfort to dictate the choices of our lives, we can become limited beings living the lives of other people. When the structures that bring us comfort disappear, we are completely lost without an identity of our own. Venture beyond what feels safe and dare to stake your claim to your place in the world in your own way. Change will always make us feel uncomfortable and even lost as others question our ways, but it is the only way to grow.\",\"image\":\"161616064989.jpg\"}', '2021-03-19 13:30:49', '2021-03-19 13:30:49'),
(101, 7, 6, '{\"title\":\"Embrace resilience - how well do you adapt to change?\",\"description\":\"As a caterpillar charters its course, it responds to obstacles and changes its course swiftly and smoothly. We all need to be prepared to respond to the situations in our lives as none of us are exempt from challenges. \\r\\n\\r\\nWhen we cling to our expectations of life instead of being willing to accept and respond to what is, we suffer and render ourselves powerless. Just as a dry wig snaps easily in two, so do we when we are rigid and lack flexibility and adaptability. Your mind can be your best ally or your worst enemy. You determine its place. \\r\\n\\r\\nAre your thoughts moving you toward progress in some way or are you just indulging a fantasy? Say no to the addictive lure of playing out scenarios in your mind. When we are challenged we need all our strength. Pray, meditate, find ways to quiet the mind, and allow answers to come to guide you.\",\"image\":\"161616074551.jpg\",\"second_image\":\"161616074566.jpg\"}', '2021-03-19 13:31:52', '2021-03-19 13:32:25'),
(102, 8, 1, '{\"title\":\"WHO AM I?\",\"description\":\"I am the Butterfly. I am whispered by the Divine into joy, color and flight. I love flowers and light.  I follow my wings wherever they take me on the breath of the Divine. In my flight, I increase the abundance of the world.\",\"image\":\"161616179583.png\"}', '2021-03-19 13:49:55', '2021-03-19 13:49:55'),
(103, 8, 2, '{\"title\":\"WHERE DO I NEED TO GO?\",\"short_description\":null,\"description\":\"Among flowers, where I am of value and I can fly freely. I live in a dance with the Divine and I cannot predict where it may take me.\",\"image\":\"161616225212.jpg\"}', '2021-03-19 13:50:37', '2021-03-19 13:57:32'),
(104, 8, 3, '{\"title\":\"WHAT DO I NEED TO DO?\",\"description\":\"I simply need to follow my joy from flower to flower, ray of sun to ray of sun, soul whisper to soul whisper.  It may not seem like I do much, but others are inspired by my dance in the world. Value me as I am.\",\"image\":\"161616227530.jpg\",\"second_image\":\"161616227530.jpg\"}', '2021-03-19 13:51:15', '2021-03-19 13:57:55'),
(105, 8, 4, '{\"title\":\"WHO DO I NEED AROUND ME?\",\"description\":\"I need to be with those who can watch my colors and flight with joy and love. Do not try to hold me by my wings. I hurt easily. My beauty belongs to my freedom. Watch me dance with a child\\u2019s heart and accept my flight.\",\"image\":\"161616228886.jpg\"}', '2021-03-19 13:52:06', '2021-03-19 13:58:08'),
(106, 8, 5, '{\"title\":\"WHAT MAKES ME HAPPY?\",\"short_description\":null,\"description\":\"When the whole world has a soft and tender heart, as easily touched by love as if by a butterfly.\",\"image\":\"161616230275.jpg\"}', '2021-03-19 13:52:49', '2021-03-19 13:58:22'),
(107, 8, 6, '{\"title\":\"When the Butterfly comes our way, it is a reminder of the tenderness and beauty of our souls.\",\"description\":\"The Butterfly\\u2019s greatness is a beauty we cannot capture and a reminder of the transformative power of our souls.  Just like the Butterfly needs to fly, freely dancing in the wind and the sun, we also need to be free to express our unique beauty, and seek what speaks to our souls and makes us happy. Our free and truthful dance with life is our creation, our gift to the world, just as the Butterfly serves the world with its beauty and wondrous flight. Trust your own colors and follow the whispers of your soul. \\r\\n\\r\\nIt is only when we imprison ourselves or allow others to do so that we are jeopardizing who we are. A butterfly needs protection from those who cannot understand the Butterfly\\u2019s nature. Dance away from anyone who seeks to hold you too tightly. Seek the freedom of your wings and the Divine before anyone and anything else.\",\"image\":\"161616236527.jpg\",\"second_image\":\"default.png\"}', '2021-03-19 13:59:25', '2021-03-19 13:59:25'),
(108, 8, 1, '{\"title\":\"Now that you know who\",\"description\":\"The Butterfly is and what the Butterfly represents, here\'s how you can invite the spirit of The Butterfly into your life:\",\"image\":\"161616250590.png\"}', '2021-03-19 14:01:45', '2021-03-19 14:01:45'),
(109, 8, 2, '{\"title\":\"Honor yourself and your journey - are you paying enough attention to your true desires?\",\"short_description\":null,\"description\":\"The soul speaks in whispers that oftentimes are drowned by the busyness of our daily lives. Carried away by our goals and the waves of events in our lives, we can forget to stop and pay attention to what matters most - who we are becoming and how we want to live.\\r\\n\\r\\nSpend some time in silence every day and learn to listen. With time our own language becomes clearer to us.\",\"image\":\"161616263385.jpg\"}', '2021-03-19 14:03:53', '2021-03-19 14:03:53'),
(110, 8, 3, '{\"title\":\"Honor your freedom as a Divine being- are you creating structures in your life that allow you to evolve and unfold?\",\"description\":\"If we don\\u2019t pay attention, we may unwittingly create and prioritize relationships and situations in our life that create limiting and narrow identities for us.\\r\\n\\r\\nOur relationships can serve love, joy, growth and evolution. However,  relationships can also be like the hands that catch the wings of the butterfly.  Drawn to each other\\u2019s beauty and unique traits, people may try to hold on to what they love in ways that can destroy what was loved in the first place. If we are not careful in how we structure our relationships, we may forgo ourselves. \\r\\n\\r\\nEvaluate your beliefs about your role in your relationships. Do you believe that you need to sacrifice yourself? Do you believe others have a right to demand that you fulfill their needs at the expense of yours? \\r\\n\\r\\nIt is the inherent right of every human being to pursue their highest vision of their life and unfold into the colorful butterfly they were always meant to be.\",\"image\":\"161616268782.jpg\",\"second_image\":\"161616268744.jpg\"}', '2021-03-19 14:04:47', '2021-03-19 14:04:47'),
(111, 8, 4, '{\"title\":\"Enjoy your creativity - do you express yourself enough?\",\"description\":\"Creativity is divine. In going beyond the limitations of our intellect, we connect with our true nature when we create. Discovering what brings us joy and our unique gifts takes patience, curiosity and kindness. Just like the butterfly fulfills its purpose simply by flying from flower to flower, our gifts bring us joy once discovered and enrich the world around us. Seek until you discover.\",\"image\":\"161616273921.jpg\"}', '2021-03-19 14:05:39', '2021-03-19 14:05:39'),
(112, 8, 5, '{\"title\":\"Ignite change - what do you wish to transform?\",\"short_description\":null,\"description\":\"The butterfly is a messenger of transformation and rebirth. Who we are today does not need to be who we are tomorrow. Transformation may not happen in a day, and before rebirth onto joyous light there is darkness. But we all have the ability to transform and become the best versions of ourselves. As impossible as it may seem, who you think you are, is not for all time. \\r\\n        \\r\\nIf your heart speaks of change, listen to it. Allow yourself to believe in its possibility. Ask \\u201cwhat if?\\u201d and ask the Universe for help in finding the way.  Then take one step toward it.\",\"image\":\"161616278259.jpg\"}', '2021-03-19 14:06:22', '2021-03-19 14:06:22'),
(113, 8, 6, '{\"title\":\"Follow your joy. There is so much in this world to bring us joy.\",\"description\":\"Sometimes we may forget to pay attention and enjoy our experiences, or we may deny ourselves what makes us joyful. Give joy a place of honor in your life - it is your right as a human being. \\r\\n\\r\\nIt may take time to shift your focus to joy. Begin your day with an intention of joy. Be intentional with activities that you enjoy but sometimes you rush through - maybe you stop to slowly smell the fresh coffee or appreciate the light of the morning sun. Consider if you have enough in a day, a week or a month that feeds your joy.\",\"image\":\"161616283740.jpg\",\"second_image\":\"default.png\"}', '2021-03-19 14:07:17', '2021-03-19 14:07:17'),
(114, 11, 1, '{\"title\":\"WHO AM I?\",\"description\":\"I am the Hornet. I love the sweetness of flowers and the freedom of flight. I love my family and the castle we built together to protect us from storms and enemies. I seek to provide and protect, and I am blessed with the power to create and destroy. When storms come, and when invaders threaten our world, I flair up, enflame and begin to think and feel protectively. I first declare my love for my loved ones, then I set to defend. If I am called to sting and destroy an enemy, so be it. I live to love and will protect that love with all my might.\",\"image\":\"161616313634.png\"}', '2021-03-19 14:12:16', '2021-03-19 14:12:16'),
(115, 11, 2, '{\"title\":\"WHERE DO I NEED TO GO?\",\"short_description\":null,\"description\":\"In the midst of those I love.\",\"image\":\"161616317677.jpg\"}', '2021-03-19 14:12:56', '2021-03-19 14:12:56'),
(116, 11, 3, '{\"title\":\"WHAT DO I NEED TO DO?\",\"description\":\"Always act as my nature demands, protecting what I love. With unbridled force, I build, enjoy, seek, love, defend, destroy as it is needed.\",\"image\":\"161616322254.jpg\",\"second_image\":\"161616322266.jpg\"}', '2021-03-19 14:13:42', '2021-03-19 14:13:42'),
(117, 11, 4, '{\"title\":\"WHO DO I NEED AROUND ME?\",\"description\":\"I need to be with those who are my family. We share a common life and I defend us against all intruders.\",\"image\":\"161616326030.jpg\"}', '2021-03-19 14:14:20', '2021-03-19 14:14:20'),
(118, 11, 5, '{\"title\":\"WHAT MAKES ME HAPPY?\",\"short_description\":null,\"description\":\"A world where every creature is respected and appreciated.\",\"image\":\"161616330026.jpg\"}', '2021-03-19 14:15:00', '2021-03-19 14:15:00'),
(119, 11, 6, '{\"title\":\"The Hornet teaches us that we need to accept and honor all sides of ourselves.\",\"description\":\"We need to honor ourselves by honoring what and who we love, and acting as each situation demands. The laws of life are beyond our limited notions of right and wrong. Sometimes we don\\u2019t dare to act because we decide that there is only one correct way to be or act. We are limited by our judgments of ourselves. If we dare to see the truth, we might discover within us unknown power and knowledge that can serve us well in protecting what we love.\",\"image\":\"161616335177.jpg\",\"second_image\":\"161616337475.jpg\"}', '2021-03-19 14:15:51', '2021-03-19 14:16:14'),
(120, 11, 1, '{\"title\":\"Now that you know who\",\"description\":\"The Hornet is and what she represents, here\'s how you can invite the mind and heart of The Hornet into your life:\",\"image\":\"161616343394.png\"}', '2021-03-19 14:17:13', '2021-03-19 14:17:13'),
(121, 11, 2, '{\"title\":\"Evaluate your boundaries -are you honoring yourself?\",\"short_description\":null,\"description\":\"Unaware of what drives us and others, we might settle comfortably in dynamics that hurt us or prevent us from moving forward. Before we know it, we become changed people, giving what we never intended to give and chasing what we never needed.  In light, we are all one, but on the stage of this life we are all playing different roles at different times. Be ready to perceive what is as it is rather than as you want it to be. \\r\\n\\r\\nIf you drew conclusions about people in your life, reassess them in the light of reality. What nourishes you? What drains you? What gives nothing in return? Accept what you see, hear, sense as real without trying to cast the spell of your desires on it. Allow people to show you who they really are. Learn, forgive, let go, and protect going forward. \\r\\n\\r\\nExpect relationships that add to your joy, light and love, and celebrate who you are. Give each person their rightful place in your life, and do so without guilt or fear. Who is meant to go with you will go.\",\"image\":\"161616348018.jpg\"}', '2021-03-19 14:18:00', '2021-03-19 14:18:00'),
(122, 11, 3, '{\"title\":\"With life giving us a few tumbles and people.\",\"description\":\"With life giving us a few tumbles and people challenging our patience and pushing against our boundaries, it is only natural that we get angry.  Anger is a call to action and can electrify us into a new pathway. Anger is shining light on parts of ourselves that we are neglecting or intentionally pushing into oblivion. \\r\\n\\r\\nWe may wish to deny anger. Perhaps we have been hurt by unhealthy expressions of anger or we were taught that we are not allowed to feel anger. But anger is as divine as love. The existence of anger can be denied for some time, but it cannot be eradicated. For as long as it stands guard, it will stand in the way of all else until you take action to make it unnecessary. \\r\\n\\r\\nWhen we ignore our anger, we are relinquishing our responsibility to ourselves to honor who we are. Listen to its message, release, grieve, forgive and commit to act in new ways that will honor all sides of you.\",\"image\":\"161616359447.jpg\",\"second_image\":\"161616359479.jpg\"}', '2021-03-19 14:19:54', '2021-03-19 14:19:54'),
(123, 11, 4, '{\"title\":\"Go into action mode.\",\"description\":\"If we remain passively waiting for the lives that we want, days of waiting can turn into weeks, months and years. We may have an expectation that life needs to be fair, and expect rewards for what we consider to be our good actions. Instead of taking action, we measure our worthiness.\\r\\n\\r\\nLife is a series of encounters and events that are calibrated according to universal laws, not according to our individual notions of fairness. The truth about ourselves and life can only be found in the light, not in the stories of our individual lives. \\r\\n\\r\\nPay attention to how you think about yourself, others and life. If you find yourself thinking about what you deserve or fairness, let go of these notions. When we expect someone or life itself to somehow even out imaginary scales for us, we remain powerless, forever waiting. Let go and take action. Ask yourself what would serve you and act. Do not expect others to act for you and do not use failure as an excuse to give up.\",\"image\":\"161616365595.jpg\"}', '2021-03-19 14:20:55', '2021-03-19 14:20:55'),
(124, 11, 5, '{\"title\":\"Pursue your purpose with vigor -  are you holding yourself back?\",\"short_description\":null,\"description\":\"To live authentically we need to be unapologetic about who we are and what we want. Shame and guilt have no place in the pursuit and expression of divine truths. Our task is to learn who we are, clear the cobwebs of delusion, and live in truth. When we look at ourselves through the lens of shame or guilt, we are deciding the Universe made a mistake. We are giving sway to the opinions of those who are judging what they do not understand and who do not matter. You may be judged. You may be rejected.  You may sometimes make mistakes. Accept these as part of life. \\r\\n\\r\\nPour your energy into the vigorous pursuit of your path and loving your beautiful true self, not into appeasing, pleasing or changing for the benefit of others. Reclaim yourself and trust the energy that moves you forward.\",\"image\":\"161616370367.jpg\"}', '2021-03-19 14:21:43', '2021-03-19 14:21:43'),
(125, 11, 6, '{\"title\":\"Build your support networks - who has your back?\",\"description\":\"We live most joyfully when we believe in our own strength, and have the unconditional love and support of others who do as well. Seek your tribe, discover where you thrive and build relationships with those who inspire you, empower you and love you as you are. \\r\\n\\r\\nToo often we allow external circumstances, excuses, habits and comfort to dictate who we have in our lives. We become indulgent with ourselves and others, and we lower the standards for what our lives could be. We can all flourish together in love and light, learning from each other\\u2019s strengths, and rejoicing in the support and love of each other as we move through the challenges of life.\",\"image\":\"161616374930.jpg\",\"second_image\":\"161616374995.jpg\"}', '2021-03-19 14:22:29', '2021-03-19 14:22:29'),
(126, 20, 1, '{\"title\":\"WHO AM I?\",\"description\":\"I am the Transcendent. I illuminate what lies in the dark and I remain unchanged by the ebb and flow around me. Perfectly aware of my nature, I am at peace with all that is, allowing life to live me just as a flower allows itself to be. And just as a flower trusts to be and become all that it needs to be, so I trust that I am all that I need to be.\",\"image\":\"161622369999.png\"}', '2021-03-19 14:25:36', '2021-03-20 07:01:39'),
(127, 20, 2, '{\"title\":\"WHERE DO I NEED TO GO?\",\"short_description\":null,\"description\":\"I let life move through me without seeking. Just like a flower does not attempt to move its roots, I need not move what does not ask for moveme\",\"image\":\"161622370765.jpg\"}', '2021-03-19 14:26:20', '2021-03-20 07:01:47'),
(128, 20, 3, '{\"title\":\"WHAT DO I NEED TO DO?\",\"description\":\"My being is my doing. As I am, I illuminate possibilities beyond what your mind sees. I allow life unquestioningly, accepting my beauty and nature as my gift and right. I make no judgment of what passes me or comes to me.\",\"image\":\"161622371946.jpg\",\"second_image\":\"161622371973.jpg\"}', '2021-03-19 14:26:49', '2021-03-20 07:01:59'),
(129, 20, 4, '{\"title\":\"WHO DO I NEED AROUND ME?\",\"description\":\"Those who choose to be - whoever may be around me, I will accept their presence as gifts of life.  A flower does not change its petals according to its watcher.\",\"image\":\"161622373544.jpg\"}', '2021-03-19 14:27:09', '2021-03-20 07:02:15'),
(130, 20, 5, '{\"title\":\"WHAT MAKES ME HAPPY?\",\"short_description\":null,\"description\":\"A world in which everyone trusts the life within them to surrender to it.\",\"image\":\"161622374921.jpg\"}', '2021-03-19 14:27:31', '2021-03-20 07:02:29'),
(131, 20, 6, '{\"title\":\"The Transcendent teaches us about the possibility of living beyond.\",\"description\":\"The Transcendent teaches us about the possibility of living beyond judgment, needs and desires of our own making. The Transcendent illuminates the illusory nature of what we perceive to be necessary. We can meet all people and events remaining true to our nature, choosing to continue to illuminate the world with our beauty.\\r\\n\\r\\n A flower does not question if the eyes of those who watch it are worthy of its beauty before offering its beauty to the world, nor does it refuse to bloom because winter passed it. Remain true to your nature and let it live through you.\",\"image\":\"161622376349.jpg\",\"second_image\":\"161622376317.jpg\"}', '2021-03-19 14:28:14', '2021-03-20 07:02:43'),
(132, 12, 1, '{\"title\":\"WHO AM I?\",\"description\":\"I am the Adventurer. I seek the unknown and delight in the unexpected. My courage comes not from my size or the cleverness of my mind, but from the joy in my heart as I step onto a new path. I seek the wholeness of experiences to reveal the mysteries of life within me. With each new step that I take, new life springs in me. Each new step is full of endless possibilities. My past does not define me and my future is not yet known. As I live so I learn.  You may find me on top of a mountain listening to the stars, or in a friend\\u2019s home. It is the heart that defines my adventures.\",\"image\":\"161616409567.png\"}', '2021-03-19 14:28:15', '2021-03-19 14:28:15'),
(133, 20, 1, '{\"title\":\"Now that you know who.\",\"description\":\"Now that you know who The Transcendent is and what The Transcendent represents, here\'s how you can invite the mind and heart of The Transcendent into your life:\",\"image\":\"161622385879.png\"}', '2021-03-19 14:28:52', '2021-03-20 07:04:18'),
(134, 12, 2, '{\"title\":\"WHERE DO I NEED TO GO?\",\"short_description\":null,\"description\":\"I allow my soul to whisper of new beginnings - wherever a path may go, I never know.\",\"image\":\"161616415768.jpg\"}', '2021-03-19 14:29:17', '2021-03-19 14:29:17'),
(135, 20, 2, '{\"title\":\"Go beyond notions of right and wrong.\",\"short_description\":null,\"description\":\"Go beyond notions of right and wrong. Divine truth is beyond notions of right or wrong that we can conjure. When we don\\u2019t know the truth about ourselves, what are we really promoting with our convictions? \\r\\n\\r\\nWhen we are out of touch with our true selves, we will easily be taken in by any notion that holds the promise of soothing our pains, provide some momentary pleasure or make us feel in power. We are blinded by what others have taught us to believe we are or need to be, and by our notions of who we want to be. \\r\\n\\r\\nBe wary of your convictions. Hold ideas lightly and use labels as helpful guideposts, not absolute truths. Seek love and truth. Discover your truth, embody your truth and watch the world around you be changed.\",\"image\":\"161622387692.jpg\"}', '2021-03-19 14:29:27', '2021-03-20 07:04:36'),
(136, 12, 3, '{\"title\":\"WHAT DO I NEED TO DO?\",\"description\":\"To freely and joyfully follow every path that the soul longs for. My journey is sacred, a charted path that only seems uncharted.\",\"image\":\"161616419788.jpg\",\"second_image\":\"161616419712.jpg\"}', '2021-03-19 14:29:57', '2021-03-19 14:29:57'),
(137, 20, 3, '{\"title\":\"Suffering happens in the gap between who we are and who we think we are.\",\"description\":\"Suffering happens in the gap between who we are and who we think we are. The task of knowing who we are may not come easy, but otherwise we are endlessly caught in the pursuit of reassurance. We inevitably feel fearful and lost when we try to find the reassurance and peace of the eternal in what is by its very nature temporary and changeable. There is no assurance of what any of our external circumstances will be in any moment. \\r\\n\\r\\nIf we go within, step by step, we can discover our anchor. When we discover who we truly are, we understand that all the power struggles and all our pursuits are unnecessary.\",\"image\":\"161622389045.jpg\",\"second_image\":\"161622389027.jpg\"}', '2021-03-19 14:30:00', '2021-03-20 07:04:50'),
(138, 20, 4, '{\"title\":\"Choose how you respond.\",\"description\":\"Choose how you respond. When we don\\u2019t know ourselves, we are blind to our own motivations, and react in ways that only lead us into the same scenarios we would like to avoid.\\r\\n\\r\\nWe believe our thoughts and emotions and are convinced of the necessity and righteousness of our actions. Discover who you are beyond your thoughts and emotions.\",\"image\":\"161622389786.jpg\"}', '2021-03-19 14:30:28', '2021-03-20 07:04:57'),
(139, 12, 4, '{\"title\":\"WHO DO I NEED AROUND ME?\",\"description\":\"Those who know that love is to be found in what frees us not what binds us.\",\"image\":\"161616423581.jpg\"}', '2021-03-19 14:30:35', '2021-03-19 14:30:35'),
(140, 12, 5, '{\"title\":\"WHAT MAKES ME HAPPY?\",\"short_description\":null,\"description\":\"A world in which everyone finds the joy of following their hearts with courage.\",\"image\":\"161616427198.jpg\"}', '2021-03-19 14:31:11', '2021-03-19 14:31:11'),
(141, 20, 5, '{\"title\":\"Judging or blaming others comes easy.\",\"short_description\":null,\"description\":\"Judging or blaming others comes easy, but it is unhelpful to our wellbeing and evolution. Our task is simply to learn who we truly are and live our truth. There is no need to change ourselves according to the actions of others. \\r\\n\\r\\nThe first step in claiming our power and truth is to learn to let go of our expectations of others, and own all our choices and aspects of our lives.\",\"image\":\"161622390318.jpg\"}', '2021-03-19 14:31:16', '2021-03-20 07:05:03'),
(142, 20, 6, '{\"title\":\"Accept the ebb and flow of life.\",\"description\":\"Accept the ebb and flow of life - there will always be changing circumstances, and events that we have no control over. To reject this, is to reject the very nature of life. Our fears and frustrations come from a lack of acceptance of something that simply cannot be changed. It is only when we accept our place in the Universe and our own nature that we can find peace.\",\"image\":\"161622391780.jpg\",\"second_image\":\"161622391733.jpg\"}', '2021-03-19 14:31:44', '2021-03-20 07:05:17'),
(144, 12, 6, '{\"title\":\"The Adventurer teaches us about courage and the importance of trusting ourselves to follow our hearts.\",\"description\":\"We need new experiences to grow and teach us our own strengths. We may prefer the solace of familiar comforts, but we deserve to rejoice in the wonders of life and discover our own magic. Our hearts tell us when it is time to move forward and grow. Allow your heart to be the source of your courage. Certainty is illusory and it can only bind us to what we have already experienced. Become new and refreshed as you embark on a new adventure!\",\"image\":\"161616440643.jpg\",\"second_image\":\"161616440668.jpg\"}', '2021-03-19 14:33:26', '2021-03-19 14:33:26'),
(145, 12, 1, '{\"title\":\"Now that you know who The Adventurer.\",\"description\":\"Now that you know who The Adventurer is and what the Adventurer represents, here\'s how you can invite the mind and heart of The Adventurer into your life\",\"image\":\"161616445272.png\"}', '2021-03-19 14:34:12', '2021-03-19 14:34:12'),
(146, 19, 1, '{\"title\":\"WHO AM I?\",\"description\":\"I am the Empath. I see and feel all the colors of joy and pain in all beings. Your joy adds to my joy, your pain I wish to heal. Beyond all notions of right or wrong, I hold everyone in the same love. I speak the silent language of our eternal nature. I listen not for your words, but your heart. I see not your limits, but the endless beauty of your soul that you may have forgotten. Through the eyes of love, I bring forth truths to help empower and uplift you.\",\"image\":\"161622304477.png\"}', '2021-03-19 14:34:53', '2021-03-20 06:50:44'),
(147, 12, 2, '{\"title\":\"Dare to imagine something new for yourself.\",\"short_description\":null,\"description\":\"An adventure is defined by the change within us. Whatever you wish to change, set an intention and take a step toward it. With every change that we make, we are recreating ourselves anew. Step by step, we are creating a new journey, and only when we look behind do we realize how far we have gone simply by putting one foot in front the another. \\r\\n\\r\\nYou don\\u2019t need a grand plan. You simply need intention and action.\",\"image\":\"161616450889.jpg\"}', '2021-03-19 14:35:08', '2021-03-19 14:35:08'),
(148, 19, 2, '{\"title\":\"WHERE DO I NEED TO GO?\",\"short_description\":null,\"description\":\"I set down the burdens of others\\u2019 hearts in the retreat of silence, the peaceful beauty of nature, the familiar comfort of home.\",\"image\":\"161622305396.jpg\"}', '2021-03-19 14:35:16', '2021-03-20 06:50:53'),
(149, 19, 3, '{\"title\":\"WHAT DO I NEED TO DO?\",\"description\":\"I live to love and create bridges of compassion and love among all beings. No creature is too small. My heart rejoices in the meeting of all beings, and leads me into expressions of love and light in the world.\",\"image\":\"161622306397.jpg\",\"second_image\":\"161622306324.jpg\"}', '2021-03-19 14:35:45', '2021-03-20 06:51:03'),
(150, 12, 3, '{\"title\":\"Discover something new.\",\"description\":\"At heart, we are always children eager to explore. When we discover something new, we are in uncharted territory, alive with curiosity and wonder, as our minds have no point of reference. We become more alive and present.\\r\\n\\r\\nWhether we explore a new place, a new recipe, a whole new way of living, it is through new experiences that we grow.\",\"image\":\"161616455420.jpg\",\"second_image\":\"161616468787.jpg\"}', '2021-03-19 14:35:54', '2021-03-19 14:38:07'),
(151, 19, 4, '{\"title\":\"WHO DO I NEED AROUND ME?\",\"description\":\"Those who can see and listen with their hearts, and act with sweetness and gentleness. My heart is the treasure I need to honor at all times.\",\"image\":\"161622307263.jpg\"}', '2021-03-19 14:36:08', '2021-03-20 06:51:12'),
(152, 19, 4, '{\"title\":\"WHAT MAKES ME HAPPY?\",\"description\":\"A world where everyone sees and loves one another beyond the limits of all notions of right and wrong.\",\"image\":\"161622308293.jpg\"}', '2021-03-19 14:36:31', '2021-03-20 06:51:22'),
(153, 12, 4, '{\"title\":\"Evaluate your relationship with comfort.\",\"description\":\"We all need a measure of comfort in our lives, but an attachment to our comfort can hold us back. Comfort may seem to be the highest outcome when we are afraid to trust ourselves to pursue something else. \\r\\n\\r\\nIf you cling too much to comfort, work on building some courage and tolerance to discomfort.  Reconnect to your inner strength. Bring more courage and vibrancy into your life.\",\"image\":\"161616460171.jpg\"}', '2021-03-19 14:36:41', '2021-03-19 14:36:41'),
(154, 19, 6, '{\"title\":\"The Empath teaches us about the value of seeing.\",\"description\":\"The Empath teaches us about the value of seeing others beyond the limits of what they show in the world. Our roles in life are only a fraction of who we are. Beyond these masks, our hearts reveal us as beings of love and light, all united in the common struggle of learning how to meet the challenges of life. When we can see others in this way, we understand their greatness as well as their struggles, and that we are all the same. We can feel empathy and compassion. We are able to forgive and live more freely, while helping to uplift others through our actions. \\r\\nThe Empath also teaches that our hearts need tender care. Learn to soothe, protect and nourish your heart, and it will always be your greatest strength.\",\"image\":\"161622310169.jpg\",\"second_image\":\"161622310195.jpg\"}', '2021-03-19 14:37:16', '2021-03-20 06:51:41'),
(155, 19, 1, '{\"title\":\"Now that you know who.\",\"description\":\"Now that you know who The Empath is and what The Empath represents, here\'s how you can invite the mind and heart of The Empath into your life:\",\"image\":\"161622316576.png\"}', '2021-03-19 14:37:42', '2021-03-20 06:52:45'),
(156, 19, 2, '{\"title\":\"Connect from the heart.\",\"short_description\":null,\"description\":\"Connect from the heart. Let compassion and love flow. It is through our hearts that we are able to perceive what our minds cannot. When we connect from the heart we can understand ourselves and others beyond the masks that we have become used to wearing. What lies in the shadows comes into the light and is healed when it is seen and loved. \\r\\n\\r\\nWith some discipline and patience, anyone can train their minds to do new tricks. But to embrace our sensitivity is a true superpower. When we have faith in our hearts, we may be left speechless by the magic that we discover. The true currency of life has always been love. Anything else is merely a proxy that we seek when we believe we cannot have love. \\r\\n\\r\\nShift your focus to your heart space. When we learn to be in our hearts, we become healers for ourselves and others.\",\"image\":\"161622317588.jpg\"}', '2021-03-19 14:38:06', '2021-03-20 06:52:55'),
(157, 19, 3, '{\"title\":\"Forgive all aspects and let go of the past.\",\"description\":\"Forgive all aspects and let go of the past. Our hearts cannot be free and abundant when we hold on to anger, resentment or hate. We choose whether to take ownership for all aspects of our lives or to try to place blame at the feet of others. Blame is always an exercise in futility that drains us of valuable energy. \\r\\n\\r\\nWhen we let go of the past and choose to live in our hearts, we serve ourselves and others. In becoming loving and compassionate, we are improving our corner of the world.\",\"image\":\"161622324892.jpg\",\"second_image\":\"161622324831.jpg\"}', '2021-03-19 14:38:33', '2021-03-20 06:54:08'),
(158, 19, 4, '{\"title\":\"Engage with the truth, not the illusion.\",\"description\":\"Engage with the truth, not the illusion. We all weave a web of stories around our lives, covering everything with the versions of reality that seem easier to accept. When we choose to live from the heart, we discover uncomfortable truths about ourselves and others. \\r\\n\\r\\nIt is tempting to still choose the illusion of our stories, but this is how we lose the thread of life to our minds. As your stories demand attention, ask yourself why? Each story gives us something or protects us from something.\",\"image\":\"161622326849.jpg\"}', '2021-03-19 14:38:57', '2021-03-20 06:54:28'),
(159, 12, 5, '{\"title\":\"Do you need to say yes more often?\",\"short_description\":null,\"description\":\"Sometimes we reject new offers merely out of habit or because we seek a measure of control. When we have happy full lives, we may simply not have room for any new adventures. \\r\\n\\r\\nBut if apathy has set in, be more positive and see what you can bring into your life.\",\"image\":\"161616474991.jpg\"}', '2021-03-19 14:39:09', '2021-03-19 14:39:09'),
(160, 19, 5, '{\"title\":\"Release your expectations of others to see their truth.\",\"short_description\":null,\"description\":\"Release your expectations of others to see their truth. Our perceptions of others are tainted by our own expectations. We all have limitations and struggles. When we have expectations from others, we diminish our ability to see them as they are, and we allow anger or disappointment to close our hearts to love.\",\"image\":\"161622327964.jpg\"}', '2021-03-19 14:39:20', '2021-03-20 06:54:39'),
(161, 19, 6, '{\"title\":\"Know yourself and protect your wellbeing and joy.\",\"description\":\"Know yourself and protect your wellbeing and joy. Loving and nurturing ourselves is necessary for us to be loving and compassionate beings. It is for us to know what we need and to create plans to enable it.\\r\\n\\r\\nDo not expect anything from others. When we don\\u2019t take responsibility for ourselves, we predictably become resentful, finding fault with everyone but ourselves. Before we know it, kindness, compassion and joy are in the past. Honor who you are and protect it.\",\"image\":\"161622330658.jpg\",\"second_image\":\"161622330691.jpg\"}', '2021-03-19 14:39:46', '2021-03-20 06:55:06'),
(162, 12, 6, '{\"title\":\"Honor your life journey as sacred.\",\"description\":\"You have a birthright to pursue what calls to you. That you may succeed or fail is not for others to determine. What you give up, no one can give back to you. \\r\\n\\r\\nExpect nothing from others and pack lightly for your journey: all that you need is within you. Decide who is a trusty friend and who needs to be left behind. Release what weighs you down - forgive all that passed for it no longer exists. Then with your heart light, set on your journey.\",\"image\":\"161616479672.jpg\",\"second_image\":\"default.png\"}', '2021-03-19 14:39:56', '2021-03-19 14:39:56'),
(163, 18, 1, '{\"title\":\"WHO AM I?\",\"description\":\"I am the Healer. I bring forth the power of Divine love and the truths of Universal laws. I bow with love for the Divine in every creature and I serve all who seek me. I honor ancient wisdom and seek the truths of life. As I serve the healing of others, I reach beyond time and space to know what needs to be revealed for the healing of wounds of the body, mind or heart. As I embody my own Divinity, I help restore others in the truth of their own divine nature, perfect and whole.\",\"image\":\"161622212620.png\"}', '2021-03-19 14:45:17', '2021-03-20 06:35:26'),
(164, 18, 2, '{\"title\":\"WHERE DO I NEED TO GO?\",\"short_description\":null,\"description\":\"I answer the call of those who seek me.\",\"image\":\"161622220065.jpg\"}', '2021-03-19 14:45:37', '2021-03-20 06:36:40'),
(165, 18, 3, '{\"title\":\"WHAT DO I NEED TO DO?\",\"description\":\"To remain a pure vessel of love and truth, serving others in their healing.\",\"image\":\"161622221218.jpg\",\"second_image\":\"161622221265.jpg\"}', '2021-03-19 14:45:55', '2021-03-20 06:36:52'),
(166, 18, 4, '{\"title\":\"WHO DO I NEED AROUND ME?\",\"description\":\"Those who can embrace sweetness and love.\",\"image\":\"161622222087.jpg\"}', '2021-03-19 14:46:18', '2021-03-20 06:37:00'),
(167, 18, 5, '{\"title\":\"WHAT MAKES ME HAPPY?\",\"short_description\":null,\"description\":\"A world in which everyone is whole and happy.\",\"image\":\"161622222883.jpg\"}', '2021-03-19 14:46:43', '2021-03-20 06:37:08'),
(168, 18, 6, '{\"title\":\"The Healer teaches us about love.\",\"description\":\"The Healer teaches us about love, our Divine nature, and the importance of truth. Healing is a knowing beyond what our intellect knows. More often than not, our intellect hides from us important wisdom about ourselves and cuts us off from love. To heal, we must first be willing to let go of what we think we know, and let love and a desire for the truth guide us. When we are cut off from love and our truth, the world can feel lonely and frightening. We lack the courage to take any action, even action that we know would heal us. We are discouraged because we cannot see the meaning or purpose of anything because we do not understand our own purpose. In love and truth, we begin to understand our value and purpose and learn to serve it, thus becoming whole again.\",\"image\":\"161622224558.jpg\",\"second_image\":\"161622224581.jpg\"}', '2021-03-19 14:47:14', '2021-03-20 06:37:25'),
(169, 13, 1, '{\"title\":\"WHO AM I?\",\"description\":\"I am the Fairy. I open secret doors to magic and light up the darkest paths. To the weary heart, I prescribe some joy. If you can see me, even if in your mind\\u2019s eye, you will surely smile.\",\"image\":\"161616526336.jpg\"}', '2021-03-19 14:47:43', '2021-03-19 14:47:43'),
(170, 18, 1, '{\"title\":\"Now that you know who.\",\"description\":\"Now that you know who The Healer is and who The Healer represents, here\'s how you can invite the mind and heart of The Healer into your life:\",\"image\":\"161622228980.png\"}', '2021-03-19 14:47:44', '2021-03-20 06:38:09'),
(171, 18, 2, '{\"title\":\"Listen to your wisdom.\",\"short_description\":null,\"description\":\"Listen to your wisdom. Our bodies are sacred vessels, oracles bringing us messages from within. If we pay attention they teach us about ailments more profound than those we most often seek to heal. Just like the tip of an iceberg tells us of what we cannot see, so our bodies tell us of what we cannot perceive or choose to deny. We may need to enlist the wisdom of doctors to heal our bodies, but it is only us that can accomplish the healing that is needed to be whole and fully healed. \\r\\n\\t\\r\\nThe symptoms of the body are the symptoms of the soul made manifest physically. Know that your body is telling you a story that you need to hear. Be willing to accept its wisdom, as well as your own power to change what needs to be changed. What have you neglected and what have you asked for? What have you accepted and what have you denied yourself? How far and hard did you push yourself? \\r\\n\\r\\nIn sickness, we have a chance to heal the deepest parts of ourselves and to emerge more truthful, wise and grounded in our truth.\",\"image\":\"161622229734.jpg\"}', '2021-03-19 14:48:06', '2021-03-20 06:38:17'),
(172, 13, 2, '{\"title\":\"WHERE DO I NEED TO GO?\",\"short_description\":null,\"description\":\"I always seek love, light and play. If you know how to see me, you will find me in the field where the muse sings and the bluebells bloom.\",\"image\":\"161616529740.jpg\"}', '2021-03-19 14:48:17', '2021-03-19 14:48:17'),
(173, 18, 3, '{\"title\":\"Acceptance is healing.\",\"description\":\"Acceptance is healing. To be in a state of wholeness and harmony with life, we need to accept all of who we are, including our vulnerability, and learn to dance in the flow of life rather than oppose it. When we deny and resist the laws of life, we live in fear and deny ourselves the healing force of life. \\r\\n\\r\\nIt is our vulnerabilities that teach us our own nature and lead us to our evolution. Without pain we would be lost as if without a map, unsure of our direction and unaware that we even need to travel anywhere. \\r\\n\\r\\nOur fears arise from our refusal to accept what is. We become divided within, with our minds seeking certainty in contradiction with our inner wisdom about the truth.\",\"image\":\"161622230891.jpg\",\"second_image\":\"161622230887.jpg\"}', '2021-03-19 14:48:31', '2021-03-20 06:38:28'),
(174, 13, 3, '{\"title\":\"WHAT DO I NEED TO DO?\",\"description\":\"Love all that I love, sing my song, dance my dance. I will playfully tease you into a child\\u2019s joy. I am here to protect your tender child\\u2019s heart within which all joy for life resides.\",\"image\":\"161616532976.jpg\",\"second_image\":\"161616534685.jpg\"}', '2021-03-19 14:48:49', '2021-03-19 14:49:06'),
(175, 18, 4, '{\"title\":\"Connect to your inner wisdom.\",\"description\":\"Connect to your inner wisdom. To embody the Healer, we need to trust our ability to heal ourselves. Our intuition is our guide that knows the terrain of the Universe beyond the confines of place and time. Our task as our own healers is to understand what we need.\\r\\n\\r\\nSometimes healing is a solitary path. Other times, healing demands that we bring forth into our lives those who can support us. When we become committed to our own healing and are willing to surrender to our task, our prayers and intentions summon into existence all that we need as the Universe answers our calls. \\r\\n\\r\\nWhether you are trying to heal your emotions, your mind or your body, ask yourself what is it that you need? Trust and listen patiently as answers emerge.\",\"image\":\"161622232630.jpg\"}', '2021-03-19 14:48:52', '2021-03-20 06:38:46');
INSERT INTO `badge_templates` (`id`, `badge_id`, `field`, `value`, `created_at`, `updated_at`) VALUES
(176, 18, 5, '{\"title\":\"Find balance.\",\"short_description\":null,\"description\":\"Find balance. When we strive too much in the pursuit of our goals or give too much to others we can become unbalanced. Consider the ways in which you are giving and the ways in which you are nourishing yourself. Is there a balance that serves you or do you feel drained?\\r\\n\\r\\nIf your light feels dimmed, do not assume this is a permanent situation or that it reflects who you are. Give yourself what you need. Allow yourself to completely relax into caring for yourself. What seems so important today is only an illusion. Place your wholeness, wellbeing, and integrity above all else in your life, and what needs to serve you will appear.\",\"image\":\"161622237319.jpg\"}', '2021-03-19 14:49:12', '2021-03-20 06:39:33'),
(177, 18, 6, '{\"title\":\"Regain your connection with all that is.\",\"description\":\"Regain your connection with all that is. We spend our lives seeking to prove how we are different and what marks us as special. And while we may derive some satisfaction from status tokens that give us a sense of invincibility, this is only momentary. \\r\\n\\r\\nIn chasing our special status, we seek to feel protected and beyond the reach of the challenges that we fear may bring us down. But it is only in our connection with all that is that we can find true peace that does not depend on our ability to conjure another marker of special status. As we regain our sense of being part of the world, at one with the whole Universe, we can also let go of fear and limited notions of who we are.\",\"image\":\"161622238696.jpg\",\"second_image\":\"161622238673.jpg\"}', '2021-03-19 14:49:35', '2021-03-20 06:39:46'),
(178, 13, 4, '{\"title\":\"WHO DO I NEED AROUND ME?\",\"description\":\"Those whose hearts soften as a flower whispers or a leaf falls.\",\"image\":\"161616538494.jpg\"}', '2021-03-19 14:49:44', '2021-03-19 14:49:44'),
(179, 13, 5, '{\"title\":\"WHAT MAKES ME HAPPY?\",\"short_description\":null,\"description\":\"A world where everyone knows how to be joyful, happy and playful.\",\"image\":\"161616543390.jpg\"}', '2021-03-19 14:50:33', '2021-03-19 14:50:33'),
(180, 17, 1, '{\"title\":\"WHO AM I?\",\"description\":\"I am the Lover.  I love you and accept you just as you are. I show you your strength, and comfort you through your pain. I rejoice in your victories whether they take you far or bring you near.  I listen to the tears, celebrate the laughter, and hold your hand lightly until you are ready to let go. I rejoice in your victories more than your presence,  your joy more than my own, your unbridled expression more than your agreement.\",\"image\":\"161622119931.png\"}', '2021-03-19 14:51:05', '2021-03-20 06:19:59'),
(181, 17, 2, '{\"title\":\"WHERE DO I NEED TO GO?\",\"short_description\":null,\"description\":\"I travel the endless horizons of my heart to reach you.\",\"image\":\"161622121430.jpg\"}', '2021-03-19 14:51:24', '2021-03-20 06:20:14'),
(182, 13, 6, '{\"title\":\"The Fairy always seeks to remind you of your child\\u2019s heart.\",\"description\":\"What longings have you hidden and turned away from? Dare to trust your heart and ask it to speak. Allow magic to take hold in your life. Let your heart love what it loves. Dance, sing, paint, be happy. Some people don\\u2019t believe in fairies, but why would you choose such a thing?\",\"image\":\"161616550425.jpg\",\"second_image\":\"161616550418.jpg\"}', '2021-03-19 14:51:44', '2021-03-19 14:51:44'),
(183, 17, 3, '{\"title\":\"WHAT DO I NEED TO DO?\",\"description\":\"To love freely, embracing all aspects of creation.\",\"image\":\"161622123426.jpg\",\"second_image\":\"161622123498.jpg\"}', '2021-03-19 14:51:44', '2021-03-20 06:20:34'),
(184, 17, 4, '{\"title\":\"WHO DO I NEED AROUND ME?\",\"description\":\"Those who seek love as the limitless and ever-enduring force that unites us all.\",\"image\":\"161622124946.jpg\"}', '2021-03-19 14:52:11', '2021-03-20 06:20:49'),
(185, 13, 1, '{\"title\":\"Now that you know who\",\"description\":\"The Fairy is and what she represents, here\'s how you can invite the mind and heart of The Fairy into your life:\",\"image\":\"161616554467.png\"}', '2021-03-19 14:52:24', '2021-03-19 14:52:24'),
(186, 17, 4, '{\"title\":\"WHAT MAKES ME HAPPY?\",\"description\":\"A world in which everyone transcends the temporary nature of their desires and all beings are loved unconditionally for who they are\",\"image\":\"161622126973.jpg\"}', '2021-03-19 14:52:30', '2021-03-20 06:21:09'),
(187, 17, 6, '{\"title\":\"The Lover reminds us about the nature of love.\",\"description\":\"The Lover reminds us about the nature of love. Love transcends all structures and makes no demands. It lives in our hearts regardless of circumstances and seeks only the highest good of everyone. It does not seek a reward or to gratify a need.  We can continue to love when circumstances change in ways we dislike or even through conflict.  In love, we can transcend what separates us and learn how to accept all aspects of ourselves and others.\",\"image\":\"161622128891.jpg\",\"second_image\":\"161622128842.jpg\"}', '2021-03-19 14:52:56', '2021-03-20 06:21:28'),
(188, 13, 2, '{\"title\":\"Surround yourself with beauty and goodness.\",\"short_description\":null,\"description\":\"Surround yourself with beauty and goodness. If the only magic in your life comes from that all-inclusive resort vacation, you need a better plan. \\r\\n\\r\\nWe are meant to enjoy our lives all the time, not only every now and then. Upgrade your standards and uplift your life.  We are masterful and quick alchemists - what we take in with our senses can connect us to entire worlds within ourselves. Be the master of your life and make your world work for you.\",\"image\":\"161616559920.jpg\"}', '2021-03-19 14:53:19', '2021-03-19 14:53:19'),
(189, 17, 1, '{\"title\":\"Now that you know.\",\"description\":\"Now that you know who the Lover is and what the Lover represents, here are some ways in which you can bring the mind and heart of the Lover into your life:\",\"image\":\"161622130463.png\"}', '2021-03-19 14:53:20', '2021-03-20 06:21:44'),
(190, 13, 3, '{\"title\":\"Make a new choice - when the mood is low, can you go high?\",\"description\":\"We should pay attention to our emotions and allow ourselves to cry or be angry as we need to, but if your inner grump or inner moody child is taking over perhaps you need to make a change.\\r\\n\\r\\nSometimes we refuse to move out of negative states simply because we are used to them. It is no skin off the Fairy\\u2019s nose what you do, but wouldn\\u2019t you like a bit more joy? \\r\\n\\r\\nYou can choose to uplift yourself and take your mind off whatever endless thought noodle you are chewing on. Turn up the music, sing, dance, watch that funny sweet movie for the umpteenth time, whatever reminds you of goodness. And if tears or anger are waiting to come out, they will do so much faster once your heart is open.\",\"image\":\"161616564951.jpg\",\"second_image\":\"161616564967.jpg\"}', '2021-03-19 14:54:09', '2021-03-19 14:54:09'),
(191, 17, 2, '{\"title\":\"Celebrate and encourage those you love.\",\"short_description\":null,\"description\":\"Celebrate and encourage those you love. When our loved ones become the mirrors of our qualities and strengths, we feel empowered in new ways. Love has the power to uplift and propel forward those you love. \\r\\nBring forth your appreciation of who they are and help them shine. When they lack courage or are unaware of their own magic, remind them of the truth of who they are and what they can do.\",\"image\":\"161622133566.jpg\"}', '2021-03-19 14:54:15', '2021-03-20 06:22:15'),
(192, 17, 2, '{\"title\":\"Infuse all your interactions with clarity, honesty and directness.\",\"short_description\":null,\"description\":\"Infuse all your interactions with clarity, honesty and directness. Our ability to communicate directly and honestly keeps us clear of resentment and lets the ones we love always know where they stand. In loving relationships, we feel safe and know what to expect. \\r\\n\\r\\n When we communicate in ways that are unclear or untruthful, we are damaging the sense of safety and reality of those who are placing their trust in us. We may think that we are protecting them from something, but we are in fact only protecting ourselves from what we fear. Love can only thrive in truthfulness. \\r\\n\\r\\nIf you are finding it difficult to express yourself, take steps to remedy.\",\"image\":\"161622136032.jpg\"}', '2021-03-19 14:54:51', '2021-03-20 06:22:40'),
(193, 13, 4, '{\"title\":\"Embrace a little chaos - are you undone by the unexpected?\",\"description\":\"The more we expect everything should go according to our plans and expectations, the more brittle our mettle. \\r\\n\\r\\nWhen we worry about things going our way, we waste precious time of our lives and the slightest turn can make us feel like a bad prophecy is coming to life. \\r\\n\\r\\nIf you find yourself easily undone by changes, take some time to decide what are the most important things that you need to protect. This way you know to meet the rest with ease. Have yourself a little chuckle at the contrast between what we want and what we get. Each experience is a new chance to grow.\",\"image\":\"161616569146.jpg\"}', '2021-03-19 14:54:51', '2021-03-19 14:54:51'),
(194, 17, 3, '{\"title\":\"Accept others fully as they are.\",\"description\":\"Accept others fully as they are. Love never demands that someone else be someone other than who they are, that they change or mold themselves to fit to our standards. We are all flawed and different in wonderful ways. Love is always a celebration of who we are. \\r\\n\\r\\nOur desire to change others comes from our needs, expectations, desires or fears.  We may have hoped that someone can fulfill a certain need or we may have assumed they are different than what they are. It is for us to take responsibility for what we are carrying within us.\",\"image\":\"161622149953.jpg\",\"second_image\":\"161622149952.jpg\"}', '2021-03-19 14:55:14', '2021-03-20 06:24:59'),
(195, 17, 5, '{\"title\":\"Meet others in their power.\",\"short_description\":null,\"description\":\"Meet others in their power. When we love others we want them to succeed. Our relationships are empowering when we treat each other as the powerful individuals that we are, fully capable to take responsibility for ourselves. \\r\\nIt may seem counter-intuitive, but it is only when we ask those we love to own what is theirs to own that we are treating them with love. Co-dependent relationships in which we rely on each other keep us comfortable with our weaknesses instead of encouraging us to evolve.\\r\\nDistinguish between showing compassion and enabling unhealthy dynamics. It is how we help each other stand strong and grow.\",\"image\":\"161622153167.jpg\"}', '2021-03-19 14:55:34', '2021-03-20 06:25:31'),
(196, 13, 5, '{\"title\":\"Connect with nature- remember who you are.\",\"short_description\":null,\"description\":\"We are mostly made of stardust, and we are connected to the entire Universe. Embrace all the elements. Let the rain and the wind cleanse you, and the sun revitalize you. Make time to connect to nature even if it is simply to salute the sun as it rises and it sets, whether the sky is clear or covered with clouds. \\r\\n\\r\\nWe are tiny beings attached to a planet that is somehow traveling through the Universe.  Stop and acknowledge the wonder of you standing among the billions of people, floating through the Universe.\",\"image\":\"161616573785.jpg\"}', '2021-03-19 14:55:37', '2021-03-19 14:55:37'),
(197, 13, 6, '{\"title\":\"Love your inner child.\",\"description\":\"Sometimes, we need to revive parts of us long-forgotten. Other times, we need to discover what we never before had a chance to discover. We all carry some secret wishes in our hearts. \\r\\n\\r\\nWhether you miss the sweetness of something you used to know a long time ago or you feel a longing that cannot be described, allow yourself to explore and experience. Be a child again and experiment as a child would, with no regard for purpose, outcome, validation. Find that which absorbs you completely, speaks to your heart, renders you aglow. Ignore the voices that tell you it is silly. It does not mean anything. The child in you deserves unconditional love and freedom.\",\"image\":\"161616580236.jpg\",\"second_image\":\"161616580213.jpg\"}', '2021-03-19 14:56:42', '2021-03-19 14:56:42'),
(198, 17, 6, '{\"title\":\"Celebrate the freedom of those you love.\",\"description\":\"Celebrate the freedom of those you love. Our paths in life may diverge at various points, yet love is not constrained by time or place. When we love, we can only wish that the ones we love freely pursue their joy and purpose in life. There can be no question of wishing to curtail what gives them joy or to withhold our love because of it. \\r\\nWe feel the loss when someone we love follows a new path, but love asks that we grieve the loss and celebrate that our loved ones are finding their way in life. \\r\\nTo seek to place boundaries on the freedom of others is to try to hold them hostage to our own needs, hopes and desires.\",\"image\":\"161622155167.jpg\",\"second_image\":\"161622155141.jpg\"}', '2021-03-19 14:56:46', '2021-03-20 06:25:51'),
(199, 14, 1, '{\"title\":\"WHO AM I?\",\"description\":\"I am the Dragonfly. You may see me only for a finite second, seemingly a fleeting visitor, yet an ancient dweller. I belong to all times and no time at all. My magical color and perfect flight inspire awe and wonder.\",\"image\":\"161616635521.jpg\"}', '2021-03-19 15:05:55', '2021-03-19 15:05:55'),
(200, 14, 2, '{\"title\":\"WHERE DO I NEED TO GO?\",\"short_description\":null,\"description\":\"I seek only the places of the purest sweetness, where the water mirrors the sky.\",\"image\":\"161616639811.jpg\"}', '2021-03-19 15:06:38', '2021-03-19 15:06:38'),
(201, 14, 3, '{\"title\":\"WHAT DO I NEED TO DO?\",\"description\":\"I hold in me ancient truths of creation. My perfect flight is the Divine\\u2019s play. I carry messages that speak to your soul, reminders of the perfection of all things created, magic, beauty and love.\",\"image\":\"161621803070.jpg\",\"second_image\":\"161621803026.jpg\"}', '2021-03-20 05:27:10', '2021-03-20 05:27:10'),
(202, 14, 4, '{\"title\":\"WHO DO I NEED AROUND ME?\",\"description\":\"Those who bow to every creature as to a beloved.\",\"image\":\"161621807847.jpg\"}', '2021-03-20 05:27:58', '2021-03-20 05:27:58'),
(203, 14, 5, '{\"title\":\"WHAT MAKES ME HAPPY?\",\"short_description\":null,\"description\":\"A world in which everyone remembers their magic and celebrates the perfection of their creations.\",\"image\":\"161621813125.jpg\"}', '2021-03-20 05:28:51', '2021-03-20 05:28:51'),
(204, 14, 6, '{\"title\":\"When it appears, the Dragonfly surprises us with its beauty and perfection.\",\"description\":\"When it appears, the Dragonfly surprises us with its beauty and perfection. It reminds us of the harmony and perfection of the Universe. Allow the Dragonfly to speak to you, to remind you of the wonder of all that is. Trust that we are all part of the same eternally magic Universe, and we each have our unique colors and purpose.\",\"image\":\"161621820381.jpg\",\"second_image\":\"161621820333.jpg\"}', '2021-03-20 05:30:03', '2021-03-20 05:30:03'),
(205, 14, 1, '{\"title\":\"Now that you know who.\",\"description\":\"The Dragonfly is and what The Dragonfly represents, here\'s how you can invite the mind and heart of The Dragonfly into your life:\",\"image\":\"161621836324.png\"}', '2021-03-20 05:32:43', '2021-03-20 05:32:43'),
(206, 16, 1, '{\"title\":\"WHO AM I?\",\"description\":\"I am the Puppy. I am in wonder at everything and I always expect the best. I am very loyal even though I get distracted easily: there is so much wonder around me, I simply can\\u2019t help it! Everything is fun and magical. I love everyone and I want everyone to play with me. Come play with me!\",\"image\":\"161622024281.png\"}', '2021-03-20 05:33:07', '2021-03-20 06:04:02'),
(207, 14, 2, '{\"title\":\"Connect with the sacred and eternal nature of all things.\",\"short_description\":null,\"description\":\"Connect with the sacred and eternal nature of all things. No matter the time or place we are always sacred beings. But immersed in the busyness of our lives, we see ourselves reflected only in the mundane and can become limited by the sharp edges of rules, labels, and roles. It is then not long before we begin to believe in the reality of these identities. Make room in your life for that which defies the limits of the mundane. Connect to your sacred nature and the sacred nature of the Universe.\\r\\n\\r\\nShake off the rattle of the world\\u2019s noise and immerse yourself in silence. Let the pronouncements of daily life fade as if in a distant dream. Invite the magic of the elements of the Universe into your life, practicing rituals to cross over the border into the magic of eternal truths. Seek answers through symbols and guidance from the Divine. Dare to invoke that which your heart knows but your mind denies until you truly find yourself.\",\"image\":\"161621843493.jpg\"}', '2021-03-20 05:33:54', '2021-03-20 05:33:54'),
(208, 16, 2, '{\"title\":\"WHERE DO I NEED TO GO?\",\"short_description\":null,\"description\":\"Everywhere and anywhere. I have no agenda. I am happy to be with you.\",\"image\":\"161622026322.jpg\"}', '2021-03-20 05:34:27', '2021-03-20 06:04:23'),
(209, 14, 3, '{\"title\":\"Allow your emotions to transform you.\",\"description\":\"The Dragonfly dwells in the depths of water until it is ready to emerge and fly above, always seeking the sweetness of the purest water. Our emotions are transformative, taking us into depths that we cannot know until we become willing vessels of the oceans waiting to lap onto our shores. Feel your pain. Allow your desires. Let anger run its course through you. It is in this way that we become cleansed in the truth of our hearts until we finally can emerge lighter and joyful, eager to fly. \\r\\n        \\r\\nWhen we choose to live in the truth of our hearts, we discover how many burdens can be set aside. After we have felt our deepest pains and cried our tears, we learn the worst is not what we thought. From the seats of our hearts, we finally feel and know our place in the world.\",\"image\":\"161621849630.png\",\"second_image\":\"161621849680.png\"}', '2021-03-20 05:34:56', '2021-03-20 05:34:56'),
(210, 16, 3, '{\"title\":\"WHAT DO I NEED TO DO?\",\"description\":\"Enjoy everything around me. Play and love.\",\"image\":\"161622027993.jpg\",\"second_image\":\"161622027933.jpg\"}', '2021-03-20 05:35:00', '2021-03-20 06:04:39'),
(211, 16, 4, '{\"title\":\"WHO DO I NEED AROUND ME?\",\"description\":\"I need other friends who love as I love. Be patient with me. I am still learning. Everything makes me happy but I hurt easily too.\",\"image\":\"161622029485.jpg\"}', '2021-03-20 05:35:19', '2021-03-20 06:04:54'),
(212, 16, 5, '{\"title\":\"WHAT MAKES ME HAPPY?\",\"short_description\":null,\"description\":\"More things than I can count. My greatest happiness is a world of play, love, and tenderness.\",\"image\":\"161622039539.jpg\"}', '2021-03-20 05:35:58', '2021-03-20 06:06:35'),
(213, 14, 4, '{\"title\":\"Embrace your true colors - are you enjoying who you are?\",\"description\":\"Love and appreciation for who we are cannot be conjured through definitions. We may have invented or believed some definitions of ourselves, but their permanence depends only on our convictions. Unwind the wires of untruths until you reach yourself again. \\r\\n\\r\\nExperience yourself and know your colors belong in the Universe exactly as they are. Allow yourself to unfold moment by moment, renouncing what you think you know about who you are.\",\"image\":\"161621856349.jpg\"}', '2021-03-20 05:36:03', '2021-03-20 05:36:03'),
(214, 16, 6, '{\"title\":\"The Puppy teaches us about the joy of opening up our hearts.\",\"description\":\"The Puppy teaches us about the joy of opening up our hearts, and the beauty of play and wonder, and reminds us of the need to be careful with each other\\u2019s hearts. The Puppy loves unconditionally, and the Puppy\\u2019s playfulness and joy are their own reasons for being, independent of the choices of anyone else. In this lies the strength and the beauty of the Puppy - allies protect the Puppy, and the world around becomes alight with the Puppy\\u2019s pure joy of being and loving. \\r\\nYet the Puppy can only thrive when surrounded by those who know how to love and protect. When meeting those who seek power over love, the Puppy becomes easy prey.  When we open our hearts to someone we are completely vulnerable. The Puppy tells us that there is tremendous value in living with our hearts open, but we also need to be discerning and choose carefully those with whom we share the blessings of our souls.\",\"image\":\"161622040830.jpg\",\"second_image\":\"161622040872.jpg\"}', '2021-03-20 05:36:48', '2021-03-20 06:06:48'),
(215, 14, 5, '{\"title\":\"Dance with life and evolve - can you master yourself?\",\"short_description\":null,\"description\":\"In life we need to know when to hold still, take a sharp turn or move forward. We can choose to pay attention and practice our flight until we perfect it, or we can choose to remain unaware of the nature of life\\u2019s invitations and remain powerless participants. Perception, like anything else, takes focus and practice.\\r\\n\\r\\n If you believe you are not or cannot be the master of you, evolve toward a new understanding. Do not confuse who you are with your lack of experience or understanding. Choose to know more, perceive more, master more of your reality. It is in this way that we evolve.\",\"image\":\"161621861877.jpg\"}', '2021-03-20 05:36:58', '2021-03-20 05:36:58'),
(216, 16, 1, '{\"title\":\"Now that you know.\",\"description\":\"Now that you know who the Puppy is and what the Puppy represents, here are some ways in which you can bring the mind and the heart of the Puppy into your life:\",\"image\":\"161622043624.png\"}', '2021-03-20 05:37:32', '2021-03-20 06:07:16'),
(217, 14, 6, '{\"title\":\"Conjure the unknown  - what worlds can you uncover?\",\"description\":\"In our desire for certainty, we may fix our gaze on what we know, and relinquish the possibilities and wisdom of what remains unknown. Seek those who have already traveled to different possibilities than what you accept as possible. Listen to messengers who may challenge your perception. At all times, listen, watch and feel, beckoning light to reveal what is yours to know. \\r\\n\\r\\nOur world reveals only one possibility of many. A new possibility is only one breath away, one thought away, one feeling away.\",\"image\":\"161621867471.jpg\",\"second_image\":\"161621867413.jpg\"}', '2021-03-20 05:37:54', '2021-03-20 05:37:54'),
(218, 16, 2, '{\"title\":\"Embrace playfulness and friendliness.\",\"short_description\":null,\"description\":\"Embrace playfulness and friendliness. Life is so much better when we are willing to let go and have some fun. When we don\\u2019t expect anything from anyone, we can simply enjoy and celebrate life together. \\r\\nMuch of what gets in the way of our enjoyment are expectations, needs and desires that cannot be fulfilled by others anyway in the ways that we imagine. There is no reason to stop enjoying what we are enjoying merely because someone else cannot share in our experience in the way that we expect them to. Accept them as they are and continue on your merry way.\",\"image\":\"161622045321.jpg\"}', '2021-03-20 05:37:58', '2021-03-20 06:07:33'),
(219, 16, 3, '{\"title\":\"Express yourself authentically.\",\"description\":\"Express yourself authentically. Puppies melt our hearts because they are completely truthful and vulnerable. We are afraid to make fools of ourselves, yet there is no greater joy than to watch someone acting truthfully. What we are all longing for is to express and understand the truth of our human experience. \\r\\nThere is no  \\u201cnormal.\\u201d Each one of us has something to add to the tale of human experience. Do not write yourself out of the book of life because you are worried your entry would not match up to that of others. There is no contest. There is only a continuous adventure in which we are all trying to figure out what it means to be human and how to make it easier. We think others have it figured out better than we do only because they also try to fake it.\",\"image\":\"161622057031.jpg\",\"second_image\":\"1616220570100.jpg\"}', '2021-03-20 05:38:41', '2021-03-20 06:09:30'),
(220, 16, 4, '{\"title\":\"Practice discernment in relationships\",\"description\":\"Practice discernment in relationships - do you see others for who they are? The more we wish to live authentically with our hearts open, the more we need to be ruthless with the truth about our relationships. It is wonderful to live from the heart and express our truth, but we can only accomplish that when we surround ourselves with people who love us and support us. In our intimate relationships, we are completely unprotected if we are blind to the truth.\\r\\nEager to love others despite all their flaws, we may fail to protect our own hearts. We may not understand who others truly are because we are attached to our desires and assumptions about them, and we may decide that everyone has the same intentions as we do.\\r\\nDemand for yourself nothing less than what your heart needs. Meet others where they are and act accordingly.  Set boundaries that protect your ability to feel safe, nurtured and loved. \\r\\nLove does not require that we allow others to treat us in ways that do not honor us. Be honest with yourself, and give each person the role they truly deserve in your life.\",\"image\":\"161622062392.jpg\"}', '2021-03-20 05:40:13', '2021-03-20 06:10:23'),
(221, 16, 5, '{\"title\":\"Embrace the present.\",\"short_description\":null,\"description\":\"Embrace the present. Each moment arrives with possibilities that we cannot fathom. When we are fully present and aware, we can find so much more in each moment than when we are tied up in the past or worried about the future. \\r\\nThrow yourself into each experience and move to the next. When we are dwelling on the past we are merely entertaining our thoughts about something that no longer exists.\",\"image\":\"161622065887.jpg\"}', '2021-03-20 05:40:40', '2021-03-20 06:10:58'),
(222, 16, 6, '{\"title\":\"Rolling in the mud and sniffing trees may be out of the question.\",\"description\":\"Rolling in the mud and sniffing trees may be out of the question, but how about the other simple joys of life? When we are at our best, joy emerges naturally. We may not exactly run around like puppies do, but joy is natural for us as well. \\r\\nIf for you joy requires a lot of work and choreography to create just the right circumstances, and it is not visiting you that often, take it as a sign that some aspects of you need some work. Our lives are made up mostly of the mundane of our daily lives and it is in our daily lives that we discover our true state of being.   You deserve joy.  Discover what holds you back and learn how you can let it go.\",\"image\":\"161622067695.jpg\",\"second_image\":\"161622067649.jpg\"}', '2021-03-20 05:41:04', '2021-03-20 06:11:16'),
(223, 15, 1, '{\"title\":\"WHO AM I?\",\"description\":\"I am the Manifestor. Through me, the Universe creates what lies beyond the limit of time, space and thought. I do not know the destination, but I trust the journey. My heart is a vessel for the Universe. I continuously purify my heart to paint the world in the purest light and love. As I create myself, so I create.\",\"image\":\"161621908250.png\"}', '2021-03-20 05:44:42', '2021-03-20 05:44:42'),
(224, 15, 2, '{\"title\":\"WHERE DO I NEED TO GO?\",\"short_description\":null,\"description\":\"In realms where the Divine\\u2019s whispers are clear and the light of love is strong.\",\"image\":\"161621912672.jpg\"}', '2021-03-20 05:45:26', '2021-03-20 05:45:26'),
(225, 15, 3, '{\"title\":\"WHAT DO I NEED TO DO?\",\"description\":\"Listen to my heart as it speaks its joy and love. With complete trust, I surrender to its call to manifest worlds I cannot always see.\",\"image\":\"161621917861.jpg\",\"second_image\":\"161621917827.jpg\"}', '2021-03-20 05:46:18', '2021-03-20 05:46:18'),
(226, 15, 4, '{\"title\":\"WHO DO I NEED AROUND ME?\",\"description\":\"Those who know the treasures of their hearts\",\"image\":\"161621922833.jpg\"}', '2021-03-20 05:47:08', '2021-03-20 05:47:08'),
(227, 15, 5, '{\"title\":\"WHAT MAKES ME HAPPY?\",\"short_description\":null,\"description\":\"A world where every person feels safe and free to trust their heart.\",\"image\":\"161621927681.jpg\"}', '2021-03-20 05:47:56', '2021-03-20 05:47:56'),
(228, 15, 6, '{\"title\":\"The Manifestor reminds us that trust.\",\"description\":\"The Manifestor reminds us that trust, love and faith are the path to self-realization and creating abundantly.  We are our greatest treasure and by honoring our hearts we commune with the Divine in a dance of creation. Our gift to life is the realization of all that we are. To surrender to our hearts, we need complete faith in the abundant possibilities that we hold within us and that the Divine desires to manifest through us.\",\"image\":\"161621934716.jpg\",\"second_image\":\"161621934780.jpg\"}', '2021-03-20 05:49:07', '2021-03-20 05:49:07'),
(229, 15, 1, '{\"title\":\"Now that you know who\",\"description\":\"Now that you know who the Manifestor is and what the Manifestor represent, here are some ways in which you can bring the Manifestor\\u2019s heart and mind into your life:\",\"image\":\"161621943546.png\"}', '2021-03-20 05:50:35', '2021-03-20 05:50:35'),
(230, 15, 2, '{\"title\":\"Dance with the flow of life.\",\"short_description\":null,\"description\":\"Unaware of the many forces shaping our lives, it is unwise to hold on tightly to any outcome. Experiencing our nature, life and the Universe without attempting to control the outcome may feel scary, but it is how we can step again into the magic stream of life. \\r\\n\\r\\n In this way, we become willing and intentional vessels for what seeks to come forth to be realized through us. We respond to what is being presented to us and we pour our energy forth into what is appropriate for the situation without clinging to particular outcomes. We renounce the need to know the why of everything, and playfully work toward the next goal as children do when they build sand castles that may or may not survive the evening  tide.\",\"image\":\"161621951343.jpg\"}', '2021-03-20 05:51:53', '2021-03-20 05:51:53'),
(231, 15, 3, '{\"title\":\"Embrace the Creator in you.\",\"description\":\"Embrace the Creator in you. To create is as fundamental to our nature as breathing. Every cell in our bodies, our daily actions, our thoughts, our words, our emotions are our creations in a dance with the Universe. Enthralled with what is around us, we may completely forget ourselves. But we all have a longing to bring forth expressions of what cannot be seen, making the unseen visible. In this, we find the sweetness of being reunited with our truth. Awaken the creator in you.\\r\\n Renounce purpose and usefulness as your guides, and embrace creation as an experience of yourself. Be fearless and do not allow the limitations of others inform you. Try, feel, decide, move on. Nothing needs to be lasting, nothing needs to be validated. Simply awaken yourself to who you are.\",\"image\":\"161621962312.jpg\",\"second_image\":\"161621962374.jpg\"}', '2021-03-20 05:53:11', '2021-03-20 05:53:43'),
(232, 15, 4, '{\"title\":\"Discover the magic of you.\",\"description\":\"Without attention and intention, our potential remains just a dormant option we never exercise. The path of awareness may seem difficult, but it is a necessity. Pain will come and go but suffering is something we inflict on ourselves when we are at odds with our true nature. \\r\\n\\r\\nBegin to strip away what you think you know about yourself and life. Dare to pull the false truths that are band-aids plastered on your wounds and dare to feel your pain. Choose the truth of your tears, your anger, your pain over the agonizing anesthetic of lies. Choose the rawness of your fears, disappointments and losses over the illusions of your mind. Choose yourself over the lie about yourself. From this, you will eventually emerge whole and free, ready to experience your own magic.\",\"image\":\"161621968968.jpg\"}', '2021-03-20 05:54:49', '2021-03-20 05:54:49'),
(233, 15, 5, '{\"title\":\"Co-create with the Universe.\",\"short_description\":null,\"description\":\"Our requests and the intentions of our hearts are always answered in realms we may not perceive. But for as long as we are unaware of the desires that lead us, and live by undeclared intentions, we remain unaware of our own power of choice and the Universe\\u2019s answer to us. It is only when we become conscious creators that our power of choice becomes manifest to us\",\"image\":\"161621973942.jpg\"}', '2021-03-20 05:55:39', '2021-03-20 05:55:39'),
(234, 15, 6, '{\"title\":\"Manifesting without wisdom is child\\u2019s play.\",\"description\":\"The true task of life is not to conjure answers to our every desire, but to learn who we truly are. Like an actor can learn to evoke the right emotions, so can we learn to manifest the objects of our desires. We might then feel reassured that we have mastered life. Yet, for as long as our intentions and motivations are hidden from us, we can still expect to be blindsided.  Our true task is to master ourselves. It is when we become clear on who we truly are, and have made the unconscious conscious, that we can become the masters of ourselves.\",\"image\":\"161621978514.jpg\",\"second_image\":\"161621985619.jpg\"}', '2021-03-20 05:56:25', '2021-03-20 05:57:36');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1' COMMENT '1=Active,2=Inactive	',
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `status`, `created_at`, `updated_at`) VALUES
(5, 'Products', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '1', '2020-12-21 13:20:04', '2021-03-15 11:42:04'),
(6, 'Services', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '1', '2020-12-21 13:20:08', '2021-01-21 05:44:21');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `message`, `created_at`, `updated_at`) VALUES
(5, 'Ajay Lowanshi', 'ajaylove1shi@gmail.com', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n\r\n', '2020-12-21 13:20:04', '2020-12-21 13:20:04'),
(23, 'Ajay Test Lowanshi', 'ajay.lowanshi@gmail.com', 'use Auth;', '2021-02-15 09:30:15', '2021-02-15 09:30:15'),
(24, 'Test', 'rishabh.soni@thedetmail.com', 'Testing', '2021-03-01 09:38:10', '2021-03-01 09:38:10'),
(25, '1234', 'rishabh.soni@thedetmail.com', '1234', '2021-03-01 09:39:34', '2021-03-01 09:39:34'),
(26, '@#$%', 'rishabh.soni@thedetmail.com', '$%^&', '2021-03-01 09:40:42', '2021-03-01 09:40:42'),
(27, 'Test', 'rishabh.soni@thedetmail.com', '123', '2021-03-01 10:25:12', '2021-03-01 10:25:12'),
(28, 'Test', 'rishabh.soni@thedetmail.com', '1234', '2021-03-01 12:48:30', '2021-03-01 12:48:30'),
(29, 'Test', 'rishabh.soni@thedetmail.com', '12345', '2021-03-02 10:11:41', '2021-03-02 10:11:41'),
(30, 'Test', 'rishabh.soni@thedetmail.com', 'Checking contact feature', '2021-03-03 05:01:57', '2021-03-03 05:01:57'),
(31, 'Test', 'rishabh.soni@thedetmail.com', '1234', '2021-03-03 12:28:27', '2021-03-03 12:28:27'),
(32, 'Test chrome', 'rishabh.soni@thedetmail.com', '123', '2021-03-04 05:35:23', '2021-03-04 05:35:23'),
(33, 'Test Chrome', 'rishabh.soni@thedetmail.com', 'hello', '2021-03-05 11:03:58', '2021-03-05 11:03:58'),
(34, '0000', 'rishabh.soni@thedetmail.com', '0000000000000000000', '2021-03-06 07:24:46', '2021-03-06 07:24:46'),
(35, 'Test Chrome 2.0', 'rishabh.soni@thedetmail.com', '13245678', '2021-03-08 05:34:24', '2021-03-08 05:34:24'),
(36, 'Test Chrome 2.0', 'rishabh.soni@thedetmail.com', '13245678', '2021-03-08 05:35:51', '2021-03-08 05:35:51'),
(37, 'Test chrome', 'rishabh.soni@thedetmail.com', 'hello', '2021-03-08 05:57:32', '2021-03-08 05:57:32'),
(38, 'Test 2.0', 'Rishabh.soni@thedetmail.com', 'hello', '2021-03-08 07:02:15', '2021-03-08 07:02:15'),
(39, 'Test chrome', 'rishabh.soni@thedetmail.com', '12345', '2021-03-09 06:30:51', '2021-03-09 06:30:51'),
(40, 'Test chrome', 'rishabh.soni@thedetmail.com', '12345', '2021-03-09 06:31:02', '2021-03-09 06:31:02'),
(41, 'Test chrome', 'rishabh.soni@thedetmail.com', '12345', '2021-03-10 10:37:56', '2021-03-10 10:37:56'),
(42, 'Test mozilla', 'Rishabh.soni@thedetmail.com', '123', '2021-03-10 11:26:36', '2021-03-10 11:26:36');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `price` varchar(255) NOT NULL DEFAULT '0.00',
  `image` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT '1' COMMENT '1=Active,2=Inactive',
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `title`, `description`, `price`, `image`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '0.00', '1611210870.jpg', '1', '2020-12-05 10:14:12', '2021-01-29 06:27:35'),
(3, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '<p>Lorem Ipsum is simply dummy text of the printing  and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '0.00', '1611210772.jpg', '1', '2020-12-05 10:14:14', '2021-01-21 06:32:52'),
(4, 'What is Lorem Ipsum?', '<p>Lorem Ipsum is simply dummy text of the printing  and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '0.00', '1611210817.jpg', '1', '2020-12-25 07:25:00', '2021-01-21 06:33:37'),
(5, 'What is Lorem Ipsum?', '<p>Lorem Ipsum is simply dummy text of the printing  and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '0.00', '1611210836.jpg', '1', '2020-12-25 07:25:18', '2021-01-21 06:33:56'),
(8, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '<p>Lorem Ipsum is simply dummy text of the printing  and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '0.00', '1611210911.jpg', '1', '2020-12-05 10:14:12', '2021-01-21 06:35:11'),
(9, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '<p>Lorem Ipsum is simply dummy text of the printing  and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '0.00', '1611210925.jpg', '1', '2020-12-05 10:14:14', '2021-01-21 06:35:25'),
(10, 'What is Lorem Ipsum?', '<p>Lorem Ipsum is simply dummy text of the printing  and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '0.00', '1611210930.jpg', '1', '2020-12-25 07:25:00', '2021-01-21 06:35:30'),
(11, 'What is Lorem Ipsum?', '<p>Lorem Ipsum is simply dummy text of the printing  and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '0.00', '1611210939.jpg', '1', '2020-12-25 07:25:18', '2021-01-21 06:35:39'),
(13, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '<p>Lorem Ipsum is simply dummy text of the printing  and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '0.00', '1611211023.jpg', '1', '2020-12-05 10:14:12', '2021-01-21 06:37:03'),
(14, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '<p>Lorem Ipsum is simply dummy text of the printing  and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '0.00', '1611211031.jpg', '1', '2020-12-05 10:14:14', '2021-01-30 05:28:48'),
(15, 'What is Lorem Ipsum?', '<p>Lorem Ipsum is simply dummy text of the printing  and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '0.00', '1611211037.jpg', '1', '2020-12-25 07:25:00', '2021-01-21 06:37:17'),
(16, 'What is Lorem Ipsum?', '<p>Lorem Ipsum is simply dummy text of the printing  and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '0.00', '1611211042.jpg', '1', '2020-12-25 07:25:18', '2021-01-21 06:37:22'),
(17, 'What is Lorem Ipsum?', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '0.00', '1611211048.jpg', '1', '2021-01-07 08:24:46', '2021-01-21 06:39:26'),
(18, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '<p>Lorem Ipsum is simply dummy text of the printing  and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '0.00', '1611211053.jpg', '1', '2020-12-05 10:14:12', '2021-01-21 06:37:33'),
(19, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '<p>Lorem Ipsum is simply dummy text of the printing  and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '0.00', '1611211059.jpg', '1', '2020-12-05 10:14:14', '2021-01-21 06:37:39'),
(20, 'What is Lorem Ipsum?', '<p>Lorem Ipsum is simply dummy text of the printing  and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '0.00', '1611211064.jpg', '1', '2020-12-25 07:25:00', '2021-01-21 06:37:44'),
(21, 'What is Lorem Ipsum?', '<p>Lorem Ipsum is simply dummy text of the printing  and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '0.00', '1611211078.jpg', '1', '2020-12-25 07:25:18', '2021-01-21 06:37:58'),
(22, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '0.00', '1611211084.jpg', '1', '2021-01-07 08:24:46', '2021-01-21 06:39:36');

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` int(10) UNSIGNED NOT NULL,
  `question` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `anwser` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1' COMMENT '1=Active,2=Inactive	',
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `question`, `anwser`, `status`, `created_at`, `updated_at`) VALUES
(6, 'Where can I get some?', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.</p>', '1', '2020-12-21 13:20:08', '2020-12-25 09:57:01'),
(7, 'Where does it come from?', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '1', '2020-12-25 09:53:32', '2020-12-25 09:57:14'),
(8, 'What is Lorem Ipsum?', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '1', '2020-12-25 09:53:52', '2020-12-25 09:53:52'),
(9, 'What is Lorem Ipsum?', '<p>What is Lorem Ipsum?What is Lorem Ipsum?What is Lorem Ipsum?What is Lorem Ipsum?What is Lorem Ipsum?</p>', '1', '2021-01-07 08:31:06', '2021-01-07 08:31:06');

-- --------------------------------------------------------

--
-- Table structure for table `favorites`
--

CREATE TABLE `favorites` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `badge_id` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `favorites`
--

INSERT INTO `favorites` (`id`, `user_id`, `badge_id`, `created_at`, `updated_at`) VALUES
(1, '1', '3', '2020-12-18 19:48:16', '2020-12-18 19:48:16'),
(2, '2', '2', '2020-12-18 19:48:16', '2020-12-18 19:48:16'),
(3, '1', '3', '2020-12-18 14:19:28', '2020-12-18 14:19:28'),
(4, '1', '3', '2020-12-18 14:21:37', '2020-12-18 14:21:37'),
(5, '17', '7', '2021-03-16 07:42:11', '2021-03-16 07:42:11'),
(16, '60', '8', '2021-03-17 12:24:18', '2021-03-17 12:24:18'),
(18, '60', '26', '2021-03-17 12:46:16', '2021-03-17 12:46:16'),
(22, '16', '8', '2021-03-19 09:38:35', '2021-03-19 09:38:35'),
(23, '60', '7', '2021-03-19 13:40:28', '2021-03-19 13:40:28'),
(24, '60', '7', '2021-03-19 13:40:29', '2021-03-19 13:40:29'),
(25, '16', '12', '2021-03-31 11:11:07', '2021-03-31 11:11:07'),
(27, '39', '12', '2021-03-31 11:19:48', '2021-03-31 11:19:48');

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks`
--

CREATE TABLE `feedbacks` (
  `id` int(10) UNSIGNED NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `feedbacks`
--

INSERT INTO `feedbacks` (`id`, `message`, `user_id`, `created_at`, `updated_at`) VALUES
(5, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n\r\n', '16', '2020-12-21 13:20:04', '2020-12-21 13:20:04'),
(6, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n\r\n', '16', '2020-12-21 13:20:08', '2020-12-21 13:20:08'),
(7, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n\r\n', '16', '2020-12-21 13:20:04', '2020-12-21 13:20:04'),
(8, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n\r\n', '16', '2020-12-21 13:20:08', '2020-12-21 13:20:08'),
(9, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n\r\n', '16', '2020-12-21 13:20:04', '2020-12-21 13:20:04'),
(10, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n\r\n', '16', '2020-12-21 13:20:08', '2020-12-21 13:20:08'),
(11, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n\r\n', '16', '2020-12-21 13:20:04', '2020-12-21 13:20:04'),
(12, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n\r\n', '16', '2020-12-21 13:20:08', '2020-12-21 13:20:08'),
(13, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n\r\n', '16', '2020-12-21 13:20:04', '2020-12-21 13:20:04'),
(16, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n\r\n', '16', '2020-12-21 13:20:08', '2020-12-21 13:20:08'),
(22, 'Send us your comment about Empathicos', '16', '2021-01-30 07:05:14', '2021-01-30 07:05:14'),
(23, '1234', '60', '2021-03-01 10:03:42', '2021-03-01 10:03:42'),
(24, 'feedback', '60', '2021-03-01 10:04:01', '2021-03-01 10:04:01'),
(25, 'rishabh', '60', '2021-03-01 10:05:07', '2021-03-01 10:05:07'),
(26, 'Amazing app', '61', '2021-03-01 12:14:23', '2021-03-01 12:14:23'),
(27, 'Amazing app', '61', '2021-03-01 12:14:24', '2021-03-01 12:14:24'),
(28, '12354', '60', '2021-03-01 12:51:23', '2021-03-01 12:51:23'),
(29, '123456abc', '60', '2021-03-02 09:16:05', '2021-03-02 09:16:05'),
(30, '123456', '64', '2021-03-03 06:20:33', '2021-03-03 06:20:33'),
(31, '1245', '64', '2021-03-03 12:52:26', '2021-03-03 12:52:26'),
(32, 'test', '59', '2021-03-03 19:05:23', '2021-03-03 19:05:23'),
(33, 'Nice app...', '60', '2021-03-04 05:54:55', '2021-03-04 05:54:55'),
(34, '4524245', '60', '2021-03-04 11:53:49', '2021-03-04 11:53:49'),
(35, '123456', '60', '2021-03-04 13:15:43', '2021-03-04 13:15:43'),
(36, '!@#$%^&*()', '60', '2021-03-06 07:32:04', '2021-03-06 07:32:04'),
(37, 'FEEDBACK', '64', '2021-03-08 06:01:55', '2021-03-08 06:01:55'),
(38, 'Test', '61', '2021-03-08 06:54:15', '2021-03-08 06:54:15'),
(39, '1234', '64', '2021-03-09 06:36:54', '2021-03-09 06:36:54'),
(40, 'test', '59', '2021-03-09 10:12:35', '2021-03-09 10:12:35'),
(41, 'test', '59', '2021-03-09 10:12:35', '2021-03-09 10:12:35'),
(42, 'testing feedback', '60', '2021-03-10 10:37:12', '2021-03-10 10:37:12'),
(44, '13245', '60', '2021-03-17 12:25:46', '2021-03-17 12:25:46');

-- --------------------------------------------------------

--
-- Table structure for table `invitations`
--

CREATE TABLE `invitations` (
  `id` int(11) NOT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT '1' COMMENT '1=Send,2=Accepted',
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `invitations`
--

INSERT INTO `invitations` (`id`, `user_id`, `message`, `name`, `email`, `status`, `created_at`, `updated_at`) VALUES
(4, '16', 'I am infinitely more alive and in love because of this group. I thought I was relegated to a negative attitude LOL but seriously, this group gave me hope and faith I never had before.', 'Ajay Lowanshi', 'ajay.lowanshi@thedetmail.com', '1', '2021-01-21 11:19:39', '2021-01-21 12:29:35'),
(5, '17', 'I am infinitely more alive and in love because of this group. I thought I was relegated to a negative attitude LOL but seriously, this group gave me hope and faith I never had before.', 'Ajju Lowanshi', 'ajju.lowanshi@thedetmail.com', '1', '2021-01-21 11:19:39', '2021-01-21 12:29:29'),
(6, '16', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Ajay Lowanshi', 'ajay.lowanshi@thedetmail.com', '1', '2021-01-28 11:25:48', '2021-01-28 11:25:48'),
(7, '16', 'test', 'Inna Jeltai', 'ijeltai@gmail.com', '2', '2021-02-05 14:08:53', '2021-02-05 14:09:27'),
(8, '16', 'sdfsdf', 'Inna Jeltai', 'ijeltai1@gmail.com', '2', '2021-02-05 14:23:12', '2021-02-05 14:23:23'),
(9, '16', 'We love you! Thank you for sharing the Empathicos magic with your friends & loved-ones!', 'Inna Jeltai', 'ijeltsai@gmail.com', '2', '2021-02-05 14:28:05', '2021-02-05 14:32:05'),
(10, '16', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Ajay Technician', 'ajay.lowanshi1@thedetmail.com', '1', '2021-02-05 14:37:39', '2021-02-05 14:37:39'),
(11, '16', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Ajay Technician', 'ajay.lowanshi12@thedetmail.com', '1', '2021-02-05 14:38:02', '2021-02-05 14:38:02'),
(12, '16', 'We love you! Thank you for sharing the Empathicos magic with your friends & loved-ones!\r\n\r\nWe love you! Thank you for sharing the Empathicos magic with your friends & loved-ones!\r\n\r\nWe love you! Thank you for sharing the Empathicos magic with your friends & loved-ones!\r\n\r\nWe love you! Thank you for sharing the Empathicos magic with your friends & loved-ones!\r\n\r\nWe love you! Thank you for sharing the Empathicos magic with your friends & loved-ones!\r\n\r\nWe love you! Thank you for sharing the Empathicos magic with your friends & loved-ones!', 'Ajay Technician', 'ajay.lowanshdddi@thedetmail.com', '2', '2021-02-05 14:38:37', '2021-02-05 14:39:11'),
(13, '16', 'We love you! Thank you for sharing the Empathicos magic with your friends & loved-ones!', 'Ajay Test Lowanshi', 'ajay.lowanshi@gmail.com', '1', '2021-02-12 11:21:51', '2021-02-12 11:21:51'),
(14, '16', 'We love you! Thank you for sharing the Empathicos magic with your friends & loved-ones!', 'Ajay Test Lowanshi', 'ajay.lowanshi@gmail.com', '2', '2021-02-12 11:24:18', '2021-02-12 11:24:43'),
(15, '40', NULL, 'ajay', 'ajay@email.com', '1', '2021-02-12 11:30:52', '2021-02-12 11:30:52'),
(16, '16', 'We love you! Thank you for sharing the Empathicos magic with your friends & loved-ones!', 'Ajay Test Lowanshi', 'ajay.lowanshi@gmail.com', '1', '2021-02-25 08:54:41', '2021-02-25 08:54:41'),
(17, '60', 'INvite', 'Test', 'rishabh.soni@thedetmail.com', '1', '2021-03-01 09:42:20', '2021-03-01 09:42:20'),
(18, '60', 'amazingsite', 'Test', 'rishabh.soni@thedetmail.com', '1', '2021-03-01 10:11:47', '2021-03-01 10:11:47'),
(19, '61', NULL, 'Rishabh', 'rishabh98267@gmail.com', '1', '2021-03-01 12:25:02', '2021-03-01 12:25:02'),
(20, '61', NULL, 'Rishabh', 'rishabh98267@gmail.com', '1', '2021-03-01 12:25:08', '2021-03-01 12:25:08'),
(21, '61', NULL, 'Rishabh', 'rishabh98267@gmail.com', '1', '2021-03-01 12:25:10', '2021-03-01 12:25:10'),
(22, '61', NULL, 'Rishabh', 'rishabh98267@gmail.com', '1', '2021-03-01 12:25:10', '2021-03-01 12:25:10'),
(23, '61', NULL, 'Rishabh', 'rishabh98267@gmail.com', '1', '2021-03-01 12:25:10', '2021-03-01 12:25:10'),
(24, '61', NULL, 'Rishabh', 'rishabh98267@gmail.com', '1', '2021-03-01 12:25:11', '2021-03-01 12:25:11'),
(25, '61', NULL, 'Rishabh', 'rishabh98267@gmail.com', '1', '2021-03-01 12:25:12', '2021-03-01 12:25:12'),
(26, '61', NULL, 'Rishabh', 'rishabh98267@gmail.0', '1', '2021-03-01 12:25:19', '2021-03-01 12:25:19'),
(27, '61', NULL, 'Rishabh', 'rishabh98267@gmail.0', '1', '2021-03-01 12:25:19', '2021-03-01 12:25:19'),
(28, '61', NULL, 'Rishabh', 'rishabh98267@gmail.0', '1', '2021-03-01 12:25:20', '2021-03-01 12:25:20'),
(29, '60', '1234', 'Test', 'rishabh.soni@thedetmail.com', '1', '2021-03-01 12:49:25', '2021-03-01 12:49:25'),
(30, '61', NULL, 'Myself', 'rishabh98267@gmail.com', '1', '2021-03-02 12:13:38', '2021-03-02 12:13:38'),
(31, '61', NULL, 'Myself', 'rishabh98267@gmail.com', '1', '2021-03-02 12:13:41', '2021-03-02 12:13:41'),
(32, '61', NULL, 'Myself', 'rishabh98267@gmail.com', '1', '2021-03-02 12:13:44', '2021-03-02 12:13:44'),
(33, '61', NULL, 'Myself', 'rishabh98267@gmail.com', '1', '2021-03-02 12:13:44', '2021-03-02 12:13:44'),
(34, '61', NULL, 'Myself', 'rishabh98267@gmail.com', '1', '2021-03-02 12:13:44', '2021-03-02 12:13:44'),
(35, '61', NULL, 'Myself', 'rishabh98267@gmail.com', '1', '2021-03-02 12:13:44', '2021-03-02 12:13:44'),
(36, '61', NULL, 'Myself', 'rishabh98267@gmail.com', '1', '2021-03-02 12:13:45', '2021-03-02 12:13:45'),
(37, '61', NULL, 'Myself', 'rishabh98267@gmail.com', '1', '2021-03-02 12:13:45', '2021-03-02 12:13:45'),
(38, '61', NULL, 'Myself', 'rishabh98267@gmail.com', '1', '2021-03-02 12:13:45', '2021-03-02 12:13:45'),
(39, '61', NULL, 'Myself', 'rishabh98267@gmail.com', '1', '2021-03-02 12:13:45', '2021-03-02 12:13:45'),
(40, '61', NULL, 'Myself', 'rishabh98267@gmail.com', '1', '2021-03-02 12:13:45', '2021-03-02 12:13:45'),
(41, '61', NULL, 'Myself', 'rishabh98267@gmail.com', '1', '2021-03-02 12:13:45', '2021-03-02 12:13:45'),
(42, '61', NULL, 'Myself', 'rishabh98267@gmail.com', '1', '2021-03-02 12:13:46', '2021-03-02 12:13:46'),
(43, '64', 'abcd', 'Testing', 'rishabh.soni@thedetmail.com', '1', '2021-03-03 12:30:37', '2021-03-03 12:30:37'),
(44, '60', '1234', 'Test chrome', 'rishabh.soni@thedetmail.com', '1', '2021-03-04 05:37:28', '2021-03-04 05:37:28'),
(45, '61', NULL, 'Rishu', 'rishabh.soni@thedetmail.com', '1', '2021-03-04 10:08:42', '2021-03-04 10:08:42'),
(46, '61', NULL, 'Rishu', 'rishabh.soni@thedetmail.com', '1', '2021-03-04 10:08:47', '2021-03-04 10:08:47'),
(47, '61', NULL, 'Rishu', 'rishabh.soni@thedetmail.com', '1', '2021-03-04 10:08:47', '2021-03-04 10:08:47'),
(48, '61', NULL, 'Rishu', 'rishabh.soni@thedetmail.com', '1', '2021-03-04 10:08:48', '2021-03-04 10:08:48'),
(49, '61', NULL, 'Rishu', 'rishabh.soni@thedetmail.com', '1', '2021-03-04 10:08:48', '2021-03-04 10:08:48'),
(50, '61', NULL, 'Rishu', 'rishabh.soni@thedetmail.com', '1', '2021-03-04 10:08:49', '2021-03-04 10:08:49'),
(51, '61', NULL, 'Rishu', 'rishabh.soni@thedetmail.com', '1', '2021-03-04 10:08:49', '2021-03-04 10:08:49'),
(52, '61', NULL, 'Rishu', 'rishabh.soni@thedetmail.com', '1', '2021-03-04 10:08:49', '2021-03-04 10:08:49'),
(53, '61', NULL, 'Rishu', 'rishabh.soni@thedetmail.com', '1', '2021-03-04 10:08:50', '2021-03-04 10:08:50'),
(54, '61', NULL, 'Rishu', 'rishabh.soni@thedetmail.com', '1', '2021-03-04 10:08:51', '2021-03-04 10:08:51'),
(55, '61', NULL, 'Rishu', 'rishabh.soni@thedetmail.com', '1', '2021-03-04 10:08:51', '2021-03-04 10:08:51'),
(56, '61', NULL, 'Rishu', 'rishabh.soni@thedetmail.com', '1', '2021-03-04 10:08:51', '2021-03-04 10:08:51'),
(57, '61', NULL, 'Rishu', 'rishabh.soni@thedetmail.com', '1', '2021-03-04 10:08:51', '2021-03-04 10:08:51'),
(58, '61', NULL, 'Rishu', 'rishabh.soni@thedetmail.com', '1', '2021-03-04 10:08:51', '2021-03-04 10:08:51'),
(59, '61', NULL, 'Rishu', 'rishabh.soni@thedetmail.com', '1', '2021-03-04 10:08:51', '2021-03-04 10:08:51'),
(60, '61', NULL, 'Rishu', 'rishabh.soni@thedetmail.com', '1', '2021-03-04 10:08:51', '2021-03-04 10:08:51'),
(61, '61', NULL, 'Rishu', 'rishabh.soni@thedetmail.com', '1', '2021-03-04 10:08:52', '2021-03-04 10:08:52'),
(62, '61', NULL, 'Rishu', 'rishabh.soni@thedetmail.com', '1', '2021-03-04 10:08:52', '2021-03-04 10:08:52'),
(63, '61', NULL, 'Rishu', 'rishabh.soni@thedetmail.com', '1', '2021-03-04 10:08:52', '2021-03-04 10:08:52'),
(64, '61', NULL, 'Rishu', 'rishabh.soni@thedetmail.com', '1', '2021-03-04 10:08:52', '2021-03-04 10:08:52'),
(65, '61', NULL, 'Rishu', 'rishabh.soni@thedetmail.com', '1', '2021-03-04 10:08:52', '2021-03-04 10:08:52'),
(66, '61', NULL, 'Rishu', 'rishabh.soni@thedetmail.com', '1', '2021-03-04 10:08:52', '2021-03-04 10:08:52'),
(67, '61', NULL, 'Rishu', 'rishabh.soni@thedetmail.com', '1', '2021-03-04 10:08:52', '2021-03-04 10:08:52'),
(68, '61', NULL, 'Rishu', 'rishabh.soni@thedetmail.com', '1', '2021-03-04 10:08:53', '2021-03-04 10:08:53'),
(69, '61', NULL, 'Rishu', 'rishabh.soni@thedetmail.com', '1', '2021-03-04 10:08:53', '2021-03-04 10:08:53'),
(70, '61', NULL, 'Rishu', 'rishabh.soni@thedetmail.com', '1', '2021-03-05 10:49:47', '2021-03-05 10:49:47'),
(71, '61', NULL, 'Rishu', 'rishabh.soni@thedetmail.com', '1', '2021-03-05 10:49:51', '2021-03-05 10:49:51'),
(72, '61', NULL, 'Rishu', 'rishabh.soni@thedetmail.com', '1', '2021-03-05 10:49:53', '2021-03-05 10:49:53'),
(73, '61', NULL, 'Rishu', 'rishabh.soni@thedetmail.com', '1', '2021-03-05 10:49:54', '2021-03-05 10:49:54'),
(74, '61', NULL, 'Rishu', 'rishabh.soni@thedetmail.com', '1', '2021-03-05 10:49:55', '2021-03-05 10:49:55'),
(75, '61', NULL, 'Rishu', 'rishabh.soni@thedetmail.com', '1', '2021-03-05 10:49:55', '2021-03-05 10:49:55'),
(76, '61', NULL, 'Rishu', 'rishabh.soni@thedetmail.com', '1', '2021-03-05 10:49:55', '2021-03-05 10:49:55'),
(77, '61', NULL, 'Rishu', 'rishabh.soni@thedetmail.com', '1', '2021-03-05 10:49:56', '2021-03-05 10:49:56'),
(78, '61', NULL, 'Rishu', 'rishabh.soni@thedetmail.com', '1', '2021-03-05 10:49:56', '2021-03-05 10:49:56'),
(79, '61', NULL, 'Rishu', 'rishabh.soni@thedetmail.com', '1', '2021-03-05 10:49:59', '2021-03-05 10:49:59'),
(80, '61', NULL, 'Rishu', 'rishabh.soni@thedetmail.com', '1', '2021-03-05 10:50:02', '2021-03-05 10:50:02'),
(81, '61', NULL, 'Rishu', 'rishabh.soni@thedetmail.com', '1', '2021-03-05 10:50:04', '2021-03-05 10:50:04'),
(82, '61', NULL, 'Rishu', 'rishabh.soni@thedetmail.com', '1', '2021-03-05 10:50:05', '2021-03-05 10:50:05'),
(83, '61', NULL, 'Rishu', 'rishabh.soni@thedetmail.com', '1', '2021-03-05 10:50:05', '2021-03-05 10:50:05'),
(84, '61', NULL, 'Rishu', 'rishabh.soni@thedetmail.com', '1', '2021-03-05 10:50:05', '2021-03-05 10:50:05'),
(85, '61', NULL, 'Rishu', 'rishabh.soni@thedetmail.com', '1', '2021-03-05 10:50:17', '2021-03-05 10:50:17'),
(86, '61', NULL, 'Rishu', 'rishabh.soni@thedetmail.com', '1', '2021-03-05 10:50:17', '2021-03-05 10:50:17'),
(87, '61', NULL, 'Rishu', 'rishabh.soni@thedetmail.com', '1', '2021-03-05 10:50:17', '2021-03-05 10:50:17'),
(88, '61', NULL, 'Rishu', 'rishabh.soni@thedetmail.com', '1', '2021-03-05 10:50:17', '2021-03-05 10:50:17'),
(89, '61', NULL, 'Rishu', 'rishabh.soni@thedetmail.com', '1', '2021-03-05 10:50:18', '2021-03-05 10:50:18'),
(90, '61', NULL, 'Rishu', 'rishabh.soni@thedetmail.com', '1', '2021-03-05 10:50:18', '2021-03-05 10:50:18'),
(91, '61', NULL, 'Rishu', 'rishabh.soni@thedetmail.com', '1', '2021-03-05 10:50:18', '2021-03-05 10:50:18'),
(92, '61', NULL, 'Rishu', 'rishabh.soni@thedetmail.com', '1', '2021-03-05 10:50:18', '2021-03-05 10:50:18'),
(93, '61', NULL, 'Rishu', 'rishabh.soni@thedetmail.com', '1', '2021-03-05 10:50:18', '2021-03-05 10:50:18'),
(94, '61', NULL, 'Rishu', 'rishabh.soni@thedetmail.com', '1', '2021-03-05 10:50:18', '2021-03-05 10:50:18'),
(95, '60', 'Hello', 'Test chrome', 'rishabh.soni@thedetmail.com', '1', '2021-03-05 11:05:17', '2021-03-05 11:05:17'),
(96, '60', '!@@#$%^&*()', '0000', 'rishabh.soni@thedetmail.com', '1', '2021-03-06 07:28:35', '2021-03-06 07:28:35'),
(97, '61', NULL, 'Rishu', 'rishabh.soni@thedetmail.com', '1', '2021-03-08 06:47:42', '2021-03-08 06:47:42'),
(98, '61', NULL, 'Rishu', 'rishabh.soni@thedetmail.com', '1', '2021-03-08 06:47:44', '2021-03-08 06:47:44'),
(99, '61', NULL, 'Rishu', 'rishabh.soni@thedetmail.com', '1', '2021-03-08 06:47:44', '2021-03-08 06:47:44'),
(100, '61', NULL, 'Rishu', 'rishabh.soni@thedetmail.com', '1', '2021-03-08 06:47:44', '2021-03-08 06:47:44'),
(101, '61', NULL, 'Rishu', 'rishabh.soni@thedetmail.com', '1', '2021-03-08 06:47:44', '2021-03-08 06:47:44'),
(102, '61', NULL, 'Rishu', 'rishabh.soni@thedetmail.com', '1', '2021-03-08 06:47:44', '2021-03-08 06:47:44'),
(103, '61', NULL, 'Rishu', 'rishabh.soni@thedetmail.com', '1', '2021-03-08 06:47:44', '2021-03-08 06:47:44'),
(104, '61', NULL, 'Rishu', 'rishabh.soni@thedetmail.com', '1', '2021-03-08 06:47:45', '2021-03-08 06:47:45'),
(105, '61', NULL, 'Rishu', 'rishabh.soni@thedetmail.com', '1', '2021-03-08 06:47:45', '2021-03-08 06:47:45'),
(106, '64', 'abcd', 'abc', 'abc@gmail.com', '1', '2021-03-08 07:28:47', '2021-03-08 07:28:47'),
(107, '64', '13254', 'Test chrome', 'rishabh.soni@thedetmail.com', '1', '2021-03-09 06:35:58', '2021-03-09 06:35:58'),
(108, '17', 'We love you! Thank you for sharing the Empathicos magic with your friends & loved-ones!', 'Ajay Lowanshi', 'ajay.lowanshi@gmail.com', '1', '2021-03-16 07:47:58', '2021-03-16 07:47:58'),
(109, '17', 'We love you! Thank you for sharing the Empathicos magic with your friends & loved-ones!', 'Ajay Lowanshi', 'ajay.lowanshi@gmail.com', '1', '2021-03-16 07:48:07', '2021-03-16 07:48:07');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_password_resets_table', 1),
(2, '2016_06_01_000001_create_oauth_auth_codes_table', 1),
(3, '2016_06_01_000002_create_oauth_access_tokens_table', 1),
(4, '2016_06_01_000003_create_oauth_refresh_tokens_table', 1),
(5, '2016_06_01_000004_create_oauth_clients_table', 1),
(6, '2016_06_01_000005_create_oauth_personal_access_clients_table', 1),
(7, '2021_01_27_054903_create_payments_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_access_tokens`
--

INSERT INTO `oauth_access_tokens` (`id`, `user_id`, `client_id`, `name`, `scopes`, `revoked`, `created_at`, `updated_at`, `expires_at`) VALUES
('004970b7701ccf4e0c1dcae8cebf9c6c136156b28895ce095a9fa6d60a3e51928e9c5761b4fb70c3', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-02 10:06:12', '2021-03-02 10:06:12', '2022-03-02 10:06:12'),
('01932e086fc434a439119e6e2771f88a94ac66006893e63db5a05ced24f8c3d7511520085e11f998', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-02 07:24:09', '2021-03-02 07:24:09', '2022-03-02 07:24:09'),
('01b9d862f8a7ca4d2e8383bb304d0280417c90c5fe918b6a1fe563818ef20efca5dee5584dcb5e36', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-02 09:29:31', '2021-03-02 09:29:31', '2022-03-02 09:29:31'),
('0228d9d8ba3105325ecc51bd51aea8e58e2adf753665b0bd9169eba9fa2f36571d30d0a6beaa3933', 53, 3, 'Personal Access Token', '[]', 0, '2021-02-16 14:16:22', '2021-02-16 14:16:22', '2022-02-16 14:16:22'),
('02758f8af9092b7d762579371749ccede754a0115b5f13a153914f308e3964bdd4fd1d79b47102b8', 61, 3, 'Personal Access Token', '[]', 0, '2021-03-05 13:34:37', '2021-03-05 13:34:37', '2022-03-05 13:34:37'),
('02a5546f69a915d31623e144e3591851376b67f1c16d3abff39a7889cb8dd10baa640f483d6c4294', 61, 3, 'Personal Access Token', '[]', 0, '2021-03-05 06:39:39', '2021-03-05 06:39:39', '2022-03-05 06:39:39'),
('036992139f2bfe6e0f9ec59bd2f231b22f21bb1cf078b2b222d9c3172158a192fd8f6141f78d8443', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-06 13:01:02', '2021-03-06 13:01:02', '2022-03-06 13:01:02'),
('03dc303f1df896475367b65d38b8b88c5f7b84381eacd39a6e2c39fb781c1ff85821118f12345586', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-01 07:28:20', '2021-03-01 07:28:20', '2022-03-01 07:28:20'),
('03e08e701ff67077c027d06c35281e466482c2636a4ad9dfbdd4b8e6223ddce65396afefe83d287e', 53, 3, 'Personal Access Token', '[]', 0, '2021-02-16 11:12:20', '2021-02-16 11:12:20', '2022-02-16 11:12:20'),
('03fbfc919ea6a2941b99f5500349583f547fa44b8148a0030ce7269c1729f288f6daa55966fcddef', 55, 3, 'Personal Access Token', '[]', 0, '2021-02-27 11:26:31', '2021-02-27 11:26:31', '2022-02-27 11:26:31'),
('0456eb4cad9e063e1099719cad88c1ba20c2a1e92768fa7f68c003a782ea4effc5c710f9716339d5', 61, 3, 'Personal Access Token', '[]', 0, '2021-03-05 10:52:31', '2021-03-05 10:52:31', '2022-03-05 10:52:31'),
('04ef541b1194ff4e05033d4dac7439e1945a878959869f9300088f4487fdd53a8cd6ffd5ad3deba2', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-01 14:50:50', '2021-03-01 14:50:50', '2022-03-01 14:50:50'),
('056a625a4c570dfe8c765dc32861652d32e23499def06f66898c478584c8dcbe9b0241d3148744ca', 37, 3, 'Personal Access Token', '[]', 0, '2021-02-02 08:36:11', '2021-02-02 08:36:11', '2022-02-02 14:06:11'),
('0613ca066088c48909cbc5ab2c360e0603bcad1999a18cb35151a0a71471ef6df4d3f7a2de07d0ef', 61, 3, 'Personal Access Token', '[]', 0, '2021-03-06 07:13:14', '2021-03-06 07:13:14', '2022-03-06 07:13:14'),
('0637012c589ec65c270c25347a10d3352f984539964665b33d111f34e38787e9792ca500b3939125', 22, 3, 'Personal Access Token', '[]', 1, '2021-01-28 02:35:02', '2021-01-28 02:35:02', '2022-01-28 08:05:02'),
('065f45d1a7ebb5eb585a6b87c1f9e59531593424137d645146f5bc08a4b9ccdebcb2e55917a95d1f', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-04 07:28:19', '2021-03-04 07:28:19', '2022-03-04 07:28:19'),
('067fcd72af8055f3e793adefecf837dfd8c68641b1626569fc5969c73904128bce7cd9b02af1a530', 16, 3, 'Personal Access Token', '[]', 0, '2021-01-29 00:27:08', '2021-01-29 00:27:08', '2022-01-29 05:57:08'),
('07eda5e1bbd5eb09201acb981ac26fd642c9dec4fcf128de51b17663581bbb8f810aa783057e7bbc', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-02 05:21:49', '2021-03-02 05:21:49', '2022-03-02 05:21:49'),
('086a9678e2039e963faf9b6491e13be481f2e989ae90b4cd81041ccae6296e22745fac365b14266d', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-03 09:22:14', '2021-03-03 09:22:14', '2022-03-03 09:22:14'),
('08869561026f2e9f051b81adf4f435e397cb9c281577efe59d3849e8277a16f58da20f0313d52e44', 61, 3, 'Personal Access Token', '[]', 0, '2021-03-02 10:53:53', '2021-03-02 10:53:53', '2022-03-02 10:53:53'),
('08ae728885e5f0d28cad33526860c997d69b0f69323114c57b45e9cc816b3bad362b8511b30d22db', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-01 15:26:35', '2021-03-01 15:26:35', '2022-03-01 15:26:35'),
('08bc25bb70a9c957dbb8fc1151f17ca9e9e415a76d5d227cb98cfc7767b60606ca293cf11b33942f', 61, 3, 'Personal Access Token', '[]', 0, '2021-03-01 11:37:36', '2021-03-01 11:37:36', '2022-03-01 11:37:36'),
('08c20b4ffd2ecf7c637aa4675be1285aa5358b1e61ad0fe63ff43e02b24fc9326e29a5c2543491ad', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-04 09:26:35', '2021-03-04 09:26:35', '2022-03-04 09:26:35'),
('091ecc00d60bd431bf69cbff5c7cfa6d9293671635113ac5df3073a342430e538eaa7c0105670827', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-04 09:27:27', '2021-03-04 09:27:27', '2022-03-04 09:27:27'),
('0924ad8d2fc83e080d4fcf260de3f8f1186ddef2c24c2d9825bb960dfe769c09b956a49a961726b0', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-01 12:48:25', '2021-03-01 12:48:25', '2022-03-01 12:48:25'),
('09928d952e3414f923e45f7797913c2ba24fdf68e644e4b4c8b8ec135b0d4eb8afb03488dee945dd', 55, 3, 'Personal Access Token', '[]', 0, '2021-02-27 14:26:50', '2021-02-27 14:26:50', '2022-02-27 14:26:50'),
('09a5297a8131a6f97888fef08d4bdc14f950be694631cee5d979dafba801ed7f237eb46deb326781', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-01 09:43:29', '2021-03-01 09:43:29', '2022-03-01 09:43:29'),
('09bb3ee447f36979c2fa975ffa359b96c2795b8ee075d913b9a532536a7ae9ff7d9ad54d75e42965', 61, 3, 'Personal Access Token', '[]', 0, '2021-03-05 11:12:13', '2021-03-05 11:12:13', '2022-03-05 11:12:13'),
('09e17f268b4d3fd432c66f4f9a7777d862f365caf79886ea27a20d1cd304c32f7d1b66d8e0b05991', 55, 3, 'Personal Access Token', '[]', 0, '2021-02-19 10:57:19', '2021-02-19 10:57:19', '2022-02-19 10:57:19'),
('0a8592d8bfce167a93208f1432f2b4b3f6af1c672a9e9db622985aa60d12c1d4be050daee0c1c61d', 61, 3, 'Personal Access Token', '[]', 0, '2021-03-10 09:21:31', '2021-03-10 09:21:31', '2022-03-10 09:21:31'),
('0b1f74d0eddc106aca97374978ffb14ee9feeb59a2746fa796431f715e0f7c597276140432f0036e', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-04 09:52:36', '2021-03-04 09:52:36', '2022-03-04 09:52:36'),
('0b3eefd278f726de51e5106c814e5718bffe328268ea316ccbe6e4e3701cf0dd9867162b03676f9c', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-01 12:46:39', '2021-03-01 12:46:39', '2022-03-01 12:46:39'),
('0b969903b25026ee5f589b67f9f2de5d3b9dbfb276fd3a3632a56c9dc3b7a74286589540aedc27ac', 61, 3, 'Personal Access Token', '[]', 0, '2021-03-09 05:03:12', '2021-03-09 05:03:12', '2022-03-09 05:03:12'),
('0bbe76da03846c26cf4dbaa1ebd9db342dc2a2e8eb573f424374dc44bb754d38667985dabcf88ec3', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-04 09:39:02', '2021-03-04 09:39:02', '2022-03-04 09:39:02'),
('0cac3373459e0c9913f2ffa3d6c3383885c3e4ab158262d3fc04af30b6f4144ea32e705dad666282', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-01 12:58:18', '2021-03-01 12:58:18', '2022-03-01 12:58:18'),
('0cd892aaf9f34aa83d3ee2d187d9d8653bded93d83d4b1aaecc0b34010a8b2f29238bad217022942', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-01 14:12:22', '2021-03-01 14:12:22', '2022-03-01 14:12:22'),
('0d9f066205ad25d4238e0201b9c1d487fb8b4a9864fb76e403148e799636651146a54ae405609494', 61, 3, 'Personal Access Token', '[]', 0, '2021-03-03 10:11:01', '2021-03-03 10:11:01', '2022-03-03 10:11:01'),
('0dd4785b88a2db7eaf91b8c211d05a6c8e366840195dcc9329f1e155376b7394cca7bd0836e996b0', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-01 10:00:25', '2021-03-01 10:00:25', '2022-03-01 10:00:25'),
('0de1589c3ca6b3e50079e016fb8b04dd182b5d2c7d8c56828f0402bf26bd28e8fc8f75c196a46f53', 55, 3, 'Personal Access Token', '[]', 0, '2021-02-22 10:09:56', '2021-02-22 10:09:56', '2022-02-22 10:09:56'),
('0df5c94f1cbc97b8dd36e7dc6b005876919ef61845ef4a4f142892dcb3ed3ed15c9e52af19fc9cc8', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-04 07:31:53', '2021-03-04 07:31:53', '2022-03-04 07:31:53'),
('0e35fbf787632c2503a4b42936bddc4292b0717b102b2e88c083a2c11e1c60ac8c6310cdbd0b253e', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-04 11:18:05', '2021-03-04 11:18:05', '2022-03-04 11:18:05'),
('0f3f111b37adb5638de22b553e62448c96616195700ddb398d22428599c2e63d8de1bd0a1462de0a', 55, 3, 'Personal Access Token', '[]', 0, '2021-02-27 14:28:41', '2021-02-27 14:28:41', '2022-02-27 14:28:41'),
('0fc73aae8b69bdb48978f1c4b0b57e41c78e85c48f88d1f4304f2d430c92e0759fca667e1877531c', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-04 10:44:32', '2021-03-04 10:44:32', '2022-03-04 10:44:32'),
('0fc83558534e7ec3dc1aedf3f0d0c3b007dc9f46d2c4897318ac8fb25f5746c90458eab343b4355a', 53, 3, 'Personal Access Token', '[]', 0, '2021-02-16 13:46:38', '2021-02-16 13:46:38', '2022-02-16 13:46:38'),
('106670d26b4e40b776409ea2248e92fe8678fc144cbdc091e8d1ea66f6248ef87ff71d8fba23fda8', 58, 3, 'Personal Access Token', '[]', 0, '2021-02-26 13:10:26', '2021-02-26 13:10:26', '2022-02-26 13:10:26'),
('10a1d5d1e057ec9f5788d240992427b91d5051c3b279d09f48ee7a730f2bc867e7e1739843421726', 55, 3, 'Personal Access Token', '[]', 0, '2021-02-27 15:15:58', '2021-02-27 15:15:58', '2022-02-27 15:15:58'),
('10f90b349776705baea22a27af0beb8988c42f600ad3ef7ab8c63d7830dfad80411fde8d04c0e52d', 61, 3, 'Personal Access Token', '[]', 0, '2021-03-05 10:51:39', '2021-03-05 10:51:39', '2022-03-05 10:51:39'),
('111173fd15bc812b3eaf6fcc0c7ad284fe6f74e0884dbcccb90a7ea72ca8099c3a78b059be7092a6', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-02 08:57:08', '2021-03-02 08:57:08', '2022-03-02 08:57:08'),
('117dbf949e160cb7e002bb6b4665e0c6365daec400953002d4e102fb42980f3f9e5c60ea0a78f32a', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-04 10:31:55', '2021-03-04 10:31:55', '2022-03-04 10:31:55'),
('122162294ff670ee6bbc8fe96bb89290b3a22017aa7ad946f6034a9b65c44391a58848b9339e4a55', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-06 13:19:54', '2021-03-06 13:19:54', '2022-03-06 13:19:54'),
('1241b1806682c22d5fcc37cbd5075b75c9b4214a3e19637e1fd3b06fc03f89b8415f291507e9cee1', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-01 12:24:51', '2021-03-01 12:24:51', '2022-03-01 12:24:51'),
('1245997a6f5732a6bcce9152811d310d8c2fe2b3ac2c3cc3619fe91248e75b5685dce282d20218cb', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-05 13:23:44', '2021-03-05 13:23:44', '2022-03-05 13:23:44'),
('125eeb3642958d8038e5ce14c441edd2b05a0cb2e3589d9c35279e9bfcb3f3a6bd6efa297f0d5522', 53, 3, 'Personal Access Token', '[]', 0, '2021-02-16 14:16:12', '2021-02-16 14:16:12', '2022-02-16 14:16:12'),
('12b1464e4456e77c7be80f49c51d5a4e2d6116cced4888c3dad95570f8c9ea2f61f9727d4aae75ab', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-02 10:20:47', '2021-03-02 10:20:47', '2022-03-02 10:20:47'),
('12e8c5dd184e67e45778f1c0a06cb003114583431a388fc219fda88fd63d7acc805274f1fa7f6e50', 61, 3, 'Personal Access Token', '[]', 0, '2021-03-04 09:52:28', '2021-03-04 09:52:28', '2022-03-04 09:52:28'),
('13cfb96fca61e12f8abda61562cb473d161ad5a42b8ee3858ac3b4384641689f9e524e8e26dc0d6c', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-01 13:16:25', '2021-03-01 13:16:25', '2022-03-01 13:16:25'),
('13d345f90ffbda48d5fad2121e2afa26c9f3f42d878c0e95d00b03b60ed7bb0eb3e86007034e6a94', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-17 14:21:30', '2021-03-17 14:21:30', '2022-03-17 14:21:30'),
('13e3a9e8f7ca36c3d55d4ffadb7959441f6885e15d3e0cac08854eb31cc55f461f5353854d651d58', 61, 3, 'Personal Access Token', '[]', 0, '2021-03-04 10:37:28', '2021-03-04 10:37:28', '2022-03-04 10:37:28'),
('14a9a8aa60554e8c3f90bb214b3fab3740097ffd2c46570a46173eeecfbd2925e853cf3b6e85dadf', 16, 3, 'Personal Access Token', '[]', 0, '2021-03-09 08:39:09', '2021-03-09 08:39:09', '2022-03-09 08:39:09'),
('14d061f8653c4c19ca61d900a786d17cd7af50ea033b5ab702c5d244dd4244cc924fc76294613203', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-01 07:35:12', '2021-03-01 07:35:12', '2022-03-01 07:35:12'),
('14f3fe6bb175ea4a9dfe154c047ff1617e7771215e316282d2cef4d8aa43bd94f530b967fd0d41c8', 16, 3, 'Personal Access Token', '[]', 0, '2021-01-27 08:14:03', '2021-01-27 08:14:03', '2022-01-27 13:44:03'),
('150d15af316b5a7b079ed10670a8d56f719e8a3a2b61837a6b18b6160f613c27e9e7e5f9228d6f7e', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-01 15:27:57', '2021-03-01 15:27:57', '2022-03-01 15:27:57'),
('1528046e8f2bf816345736d76ee01a94c2ff34a7698c6b2b6597969cdb0d05f27b1404398d38e321', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-01 09:26:14', '2021-03-01 09:26:14', '2022-03-01 09:26:14'),
('159d27238bfeee9145ab5a8ba0dd103f1dd647e15c67cfe67364347e09a591dfb998816dcb2c6bbc', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-04 10:42:32', '2021-03-04 10:42:32', '2022-03-04 10:42:32'),
('15ddd8acea4f439c67ce501e42aa392538b4e66b73a1b6a7508ae22f69f48dd00b6358cf91b83ea6', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-05 13:28:48', '2021-03-05 13:28:48', '2022-03-05 13:28:48'),
('16080d3ba79b33e22e87ba8bbfbbc580ba639347da54d563c3e3671a26741902e74b3f891bf5e91a', 55, 3, 'Personal Access Token', '[]', 0, '2021-02-22 11:15:20', '2021-02-22 11:15:20', '2022-02-22 11:15:20'),
('16492a6e83584a1a16561916188059acd694aa94bc33b3f09b981a8dba2dff3d0cd12e53c1b9393d', 61, 3, 'Personal Access Token', '[]', 0, '2021-03-05 10:24:23', '2021-03-05 10:24:23', '2022-03-05 10:24:23'),
('1652652329fc7f87d42742f4d7e76ab43e45b672a4b8e26ac643c457ad39854916affc4e59ffa284', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-04 07:41:43', '2021-03-04 07:41:43', '2022-03-04 07:41:43'),
('168a6d00a93aadf17fddca5c8c15914728ae7da6fb5bde9c67b9821f60cbdb5d90c65f375e9d0c4a', 53, 3, 'Personal Access Token', '[]', 0, '2021-02-17 14:28:47', '2021-02-17 14:28:47', '2022-02-17 14:28:47'),
('16abc4ec9326323687c6c8091960b4202d6e4fcfc5b94a0c2c9ddc08bffaa606c463a1372dca606e', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-03 13:37:33', '2021-03-03 13:37:33', '2022-03-03 13:37:33'),
('16db163dcc711cc2df0d00818710c0036936151997db61ef8c86d8fc3e680d60a12939e1c3bce3e8', 55, 3, 'Personal Access Token', '[]', 0, '2021-02-22 09:49:09', '2021-02-22 09:49:09', '2022-02-22 09:49:09'),
('16eb2743ef4d9ed02fb5254226e9ba6ed9123f134751c5ad3b29d13d2155aa87930fa2d157e2e246', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-03 14:43:40', '2021-03-03 14:43:40', '2022-03-03 14:43:40'),
('16fb0bf89b7f120ab8f1365a94c6d2ed7a214e90b4af1d54f36113a8a527f0f6f407d5886cbb49b7', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-01 07:23:29', '2021-03-01 07:23:29', '2022-03-01 07:23:29'),
('170f1b4e6b7b504317547045c34fa6dcc4ea09d19e1b46733ae0e49b92c0321c864d962e307d5779', 55, 3, 'Personal Access Token', '[]', 0, '2021-02-22 10:28:10', '2021-02-22 10:28:10', '2022-02-22 10:28:10'),
('17943d0659a8e726cc4adc7ddeda97c792aa20325c4238db0f1e7006ec4383f1f4f6e9cbd77e84da', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-02 10:24:59', '2021-03-02 10:24:59', '2022-03-02 10:24:59'),
('17982fe4bb61c5d094c464327562826586e9b41b0531fbbfcccdca7710478bf5bfe9474680b41b9e', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-01 12:59:27', '2021-03-01 12:59:27', '2022-03-01 12:59:27'),
('179ad8f2aa3ddb6d230870b1ed875bddc890b18649600fd5c6f81380cc898f65cee748b19f8e8bf5', 53, 3, 'Personal Access Token', '[]', 0, '2021-02-16 13:53:48', '2021-02-16 13:53:48', '2022-02-16 13:53:48'),
('1820a57249ccfeaba1ccdf751903f7f4cb36851049c8e9e0d536ed4f4a0d871ea20ba0d79eb09b5e', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-04 07:17:54', '2021-03-04 07:17:54', '2022-03-04 07:17:54'),
('1842b0bb49821d0007e1cdba9b0b94a4ab0285b67af6c9647ed223d965a88e6bf6f7863acbc0a98c', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-03 13:32:16', '2021-03-03 13:32:16', '2022-03-03 13:32:16'),
('18ced1d1728f6f4e5f079d7f2e2fa0162ae04886185a3df348e83c094a02f1f53125f99372437021', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-06 11:42:26', '2021-03-06 11:42:26', '2022-03-06 11:42:26'),
('18ddde3743f12808daa7e7b221db499866a543ab599d3c3a17c4f8e742d1408a7852c523f58a6b26', 61, 3, 'Personal Access Token', '[]', 0, '2021-03-05 11:39:21', '2021-03-05 11:39:21', '2022-03-05 11:39:21'),
('194e8c509a7173471555c4deddc69e5170db620bfb5aeaacd5b17f87003c67144a7c593bcd7d2a9e', 38, 3, 'Personal Access Token', '[]', 0, '2021-03-03 14:51:51', '2021-03-03 14:51:51', '2022-03-03 14:51:51'),
('19aeebdc0f7090d418aa9c25e86a211d0a1414c1499e47345fe2c57af556959ec8fbd6ee8a77649a', 39, 3, 'Personal Access Token', '[]', 0, '2021-03-03 15:09:23', '2021-03-03 15:09:23', '2022-03-03 15:09:23'),
('19fd4123bc97fbd1000d7f38728301578d480fa7a185cb020bfd4f1706903ba872415d961ee62bd2', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-01 12:55:32', '2021-03-01 12:55:32', '2022-03-01 12:55:32'),
('1ada09c5a129c1376539be3319459bc0866c7c9b17b44f98c3e2091907b838b9c286ddc7e62fbc08', 61, 3, 'Personal Access Token', '[]', 0, '2021-03-04 13:25:50', '2021-03-04 13:25:50', '2022-03-04 13:25:50'),
('1b1d45d5f229752fc5824821948300fd155e6607acdc654175306dd8c32bb5324da7134e2a5f2240', 39, 3, 'Personal Access Token', '[]', 0, '2021-03-03 12:43:32', '2021-03-03 12:43:32', '2022-03-03 12:43:32'),
('1b3434ec198ce72cb523532e503f9318ed0f118110fdd7a43c9a52abba5271740f9bb6fb2e3ddff2', 53, 3, 'Personal Access Token', '[]', 0, '2021-02-16 13:52:54', '2021-02-16 13:52:54', '2022-02-16 13:52:54'),
('1b7aa1dd5bc8715193a90d1080a4c748ba623a1e74ead9ff9b56c29fc501dfeabb3cc601d2d036e0', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-06 10:50:39', '2021-03-06 10:50:39', '2022-03-06 10:50:39'),
('1b91e22394cd38ca0354846788a47847e41b5251bd64c590444d48002e64c23ccab4481a98057024', 61, 3, 'Personal Access Token', '[]', 0, '2021-03-04 07:01:58', '2021-03-04 07:01:58', '2022-03-04 07:01:58'),
('1c098054238055a7ef42e25ce2555c7002805691249f5f248adc1fa9f138de007e8a145e9f40f52f', 55, 3, 'Personal Access Token', '[]', 0, '2021-02-27 12:08:28', '2021-02-27 12:08:28', '2022-02-27 12:08:28'),
('1c21010933dc103dc4cd15d6e5ffc331565cccd9eec697a130b63c1e4e358938a2c013ecc131b512', 16, 3, 'Personal Access Token', '[]', 0, '2021-01-27 08:45:18', '2021-01-27 08:45:18', '2022-01-27 14:15:18'),
('1cd30142080a1d8f44cc035b8c75398975b3b42eaa6233c9828e4df456cbe1b0d68a769377e5daf8', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-01 10:17:53', '2021-03-01 10:17:53', '2022-03-01 10:17:53'),
('1deae1f3d3d68c9d61e30bb213a73741dc4ef3b49762d16766cdd88e495826c809a63b62cc5bab78', 53, 3, 'Personal Access Token', '[]', 0, '2021-02-17 13:11:44', '2021-02-17 13:11:44', '2022-02-17 13:11:44'),
('1dfdec6089fcb4fd807f4b4a38ff23ae124a8be80f8ce7d2b9cd0bee8c69b97aaec4f6416c9fd21e', 61, 3, 'Personal Access Token', '[]', 0, '2021-03-01 11:14:47', '2021-03-01 11:14:47', '2022-03-01 11:14:47'),
('1e0f8b53899e92fc22ae088f6ab8b5a732e759fece4849b5d9e4a47406d3100a9ec6c29d02e20e36', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-01 07:05:03', '2021-03-01 07:05:03', '2022-03-01 07:05:03'),
('1e30ac8443fb2d966978fbce21781882c7959c21d0d59f4cc090d399e076613b56d35f17c8bafb44', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-05 09:20:37', '2021-03-05 09:20:37', '2022-03-05 09:20:37'),
('1eb11e7b3e9bc76cdb68f4f1b5a62fe35554dcd15dc5b35dd3254d222d2bea4ff68e8ef7a3e39670', 55, 3, 'Personal Access Token', '[]', 0, '2021-02-26 15:31:47', '2021-02-26 15:31:47', '2022-02-26 15:31:47'),
('1ebcf1a059327e143ab2639948126bfda7f5a08783584b7a660268cb9131b1bf30d2506cef95b1e6', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-01 14:04:42', '2021-03-01 14:04:42', '2022-03-01 14:04:42'),
('1f1656f627e7eff1cb075ec95d7300c4c7cd9e3be539ec47d28dd25640d466ee7dd7a26d255d72d8', 55, 3, 'Personal Access Token', '[]', 0, '2021-02-27 11:28:11', '2021-02-27 11:28:11', '2022-02-27 11:28:11'),
('1f83050771eeaf54040a96e0578d5dc79c5522eee802aec9ea104f1be62f689158d70482aa4cf315', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-02 08:55:10', '2021-03-02 08:55:10', '2022-03-02 08:55:10'),
('1fb987606d9684fa705614a000da3d931bd2154d30fe8ab3480c7a62040f1f2289bc4a1d98a8b679', 61, 3, 'Personal Access Token', '[]', 0, '2021-03-10 10:28:20', '2021-03-10 10:28:20', '2022-03-10 10:28:20'),
('1fcc62e4653dd0159219f2cd9f971378e53d4d82ee41075ac34e9920dc1b3177fa3b4ad006694cec', 61, 3, 'Personal Access Token', '[]', 0, '2021-03-07 19:01:49', '2021-03-07 19:01:49', '2022-03-07 19:01:49'),
('204a69e9b10d505290d7ef0223e438ab840fbbd931a68f18dd5129948d668cf742731c2cf905a1be', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-03 13:08:53', '2021-03-03 13:08:53', '2022-03-03 13:08:53'),
('205388bdf7bc24a120a25a1b465cf6fb2c7dbd40458c1bf9936059696b41606d932a0cf385a2d613', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-04 10:15:19', '2021-03-04 10:15:19', '2022-03-04 10:15:19'),
('2086f779ced9dd000834d13f6131ed9cdf570ab2c29fc953a484d8c58dd53d9cbc9d5c2381c86e97', 45, 3, 'Personal Access Token', '[]', 0, '2021-02-02 23:38:21', '2021-02-02 23:38:21', '2022-02-03 05:08:21'),
('20b415ad358095e267dd59df60f7795fb6908ff386ffd93b67faacf3f0a9e7099b55e41d6f2f1607', 53, 3, 'Personal Access Token', '[]', 0, '2021-02-17 13:36:04', '2021-02-17 13:36:04', '2022-02-17 13:36:04'),
('214a9687a87eaf5620c1e760615c7a6ecbf8864e8efc9b4b14cd1890e10af13cad5690c81cdcb135', 53, 3, 'Personal Access Token', '[]', 0, '2021-02-16 13:47:33', '2021-02-16 13:47:33', '2022-02-16 13:47:33'),
('21746c4c09c1886a50b12062827ea260759091af613a2a0d5673da86383bd4fb9ebcf5afffca734f', 16, 3, 'Personal Access Token', '[]', 0, '2021-01-27 08:13:19', '2021-01-27 08:13:19', '2022-01-27 13:43:19'),
('21fabba7729ebea770d2c387930090eb6c5cab65382ccc5285c94851c01e19f154ff6e23464dc990', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-03 15:20:11', '2021-03-03 15:20:11', '2022-03-03 15:20:11'),
('224e32c74c03889e29db27fda2b8c2a7adcfd1593a18d6a3f8f6f234cdf176e339a12fe396add6ad', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-04 09:20:26', '2021-03-04 09:20:26', '2022-03-04 09:20:26'),
('22ab9b4768ab71a66108b3cb1fdfcba189693f0bbf5778054ceb4f29a5f22daab4e5e434ae25b989', 39, 3, 'Personal Access Token', '[]', 0, '2021-02-24 15:04:29', '2021-02-24 15:04:29', '2022-02-24 15:04:29'),
('22b5c3174f15f23a50331f49a97fd3d46acb01a2f4d13b6e77ac8e890bf1c5c8515c3a0e64c8a9be', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-03 05:58:30', '2021-03-03 05:58:30', '2022-03-03 05:58:30'),
('22d09c7960c4ce1587ec75ebcea0e537994979cd5405e421df76b298b541b25d7ec7fb31746e5e1a', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-02 10:08:44', '2021-03-02 10:08:44', '2022-03-02 10:08:44'),
('239841f605f66517951294c43a94e18594d25fae50bb078dc247a148a06daca1eff3f4df03aa5c18', 39, 3, 'Personal Access Token', '[]', 0, '2021-03-01 14:53:21', '2021-03-01 14:53:21', '2022-03-01 14:53:21'),
('246858413d5de774a600514e7c3b675e1902702abb91fea4f860ee33c2361590ffbff2c173a14319', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-01 10:28:18', '2021-03-01 10:28:18', '2022-03-01 10:28:18'),
('253d687e8e330f09544800a01c2b7df86d68993009be878f173123f80fe378b8c4e5eaa9e634cf99', 55, 3, 'Personal Access Token', '[]', 0, '2021-02-22 12:09:43', '2021-02-22 12:09:43', '2022-02-22 12:09:43'),
('2575549188d31c5bfa99d5f22ca0701822a60bc3807755d60b5dd25206533de6930f56c63d18f661', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-04 10:56:18', '2021-03-04 10:56:18', '2022-03-04 10:56:18'),
('26ac79456190b24d2be05f869ae2eb407854b8a9af560889da1463cdb3aabac607a0fdd9b1f74096', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-04 10:20:37', '2021-03-04 10:20:37', '2022-03-04 10:20:37'),
('272ba21788159ffa15b91bf88ea7f9b575df3b3260a77ac791af9bfbf92b138ba48e3a10517d40d8', 61, 3, 'Personal Access Token', '[]', 0, '2021-03-01 11:37:16', '2021-03-01 11:37:16', '2022-03-01 11:37:16'),
('27696c46a4f9e25cee909f414eeeae07585ecf3baac7e036523dd23d70a8c66b6d5893a75e83261a', 61, 3, 'Personal Access Token', '[]', 0, '2021-03-10 09:09:58', '2021-03-10 09:09:58', '2022-03-10 09:09:58'),
('27bfa60c5f0a288f98b51906441cdf9180d9385115d83a4a9bbdc31ba78bfc581466869e9b2b378e', 53, 3, 'Personal Access Token', '[]', 0, '2021-02-16 10:13:49', '2021-02-16 10:13:49', '2022-02-16 10:13:49'),
('27ca55d788642de204f74b00c58039a56126f02df6a7fed9a2c2112e8cd7d0b67a4139b0c679a37a', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-04 08:59:54', '2021-03-04 08:59:54', '2022-03-04 08:59:54'),
('28ae9c6a3b3261ab8aa704d1f731edc05998eb96c217a2a849de47dc080d4d9da8930238abd6c745', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-06 10:43:18', '2021-03-06 10:43:18', '2022-03-06 10:43:18'),
('28c327cb40e4001ec52005ad2fe41bbbd6c8bc1a44ad72e20cd258cfa143f6d38cffbf6ae546236b', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-03 13:07:15', '2021-03-03 13:07:15', '2022-03-03 13:07:15'),
('28ef38026f20455777d59b35b120103cfdaf9141ece16c8d6d0ed256653cb35e41894f93042b6d5c', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-01 11:15:33', '2021-03-01 11:15:33', '2022-03-01 11:15:33'),
('293f92115333c07123fd812080f93bc065ead4ca17f9929457e22aaeb9d62caf12287ee18decc429', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-06 13:03:30', '2021-03-06 13:03:30', '2022-03-06 13:03:30'),
('2ab00852e5b8ca442a100334214242028f1d07d7ca4c96473e57afc47bff6e5ac54a7badaf84a22d', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-05 13:33:19', '2021-03-05 13:33:19', '2022-03-05 13:33:19'),
('2ab299afc4150d0a043da51b46303519d04675cd4ae967c7b34234f84a706db46c38d18e02897147', 61, 3, 'Personal Access Token', '[]', 0, '2021-03-18 06:37:55', '2021-03-18 06:37:55', '2022-03-18 06:37:55'),
('2ad7f7929aaf398b8cd2cf70a52e3715ab37e70de904c334b7ee2dfc9a38c8d62fad392d03df4a7d', 53, 3, 'Personal Access Token', '[]', 0, '2021-02-17 13:22:23', '2021-02-17 13:22:23', '2022-02-17 13:22:23'),
('2afd50431d1ac13f79e0417531f70a3a4c78ae2348e1727c98e5b83203eb4997528919ea5f9bdbce', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-03 13:25:02', '2021-03-03 13:25:02', '2022-03-03 13:25:02'),
('2b4d7ec04c5085ee8283e0908aaa6871f2592fee49092e387b52c627b5e93b9c3bb28b41189350d9', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-02 11:01:44', '2021-03-02 11:01:44', '2022-03-02 11:01:44'),
('2c58b5784b503607af795adb4a9f122968ab29a1de2a7c44d4c7927ac9963168fa7cee0c385a20b4', 61, 3, 'Personal Access Token', '[]', 0, '2021-03-08 13:28:01', '2021-03-08 13:28:01', '2022-03-08 13:28:01'),
('2cba4125ab66cb40fd2428d265b833c14511792ebcb5ed0e94d35822aa0495df47c56c0c7bea4d9b', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-04 11:25:20', '2021-03-04 11:25:20', '2022-03-04 11:25:20'),
('2d06cd00862cae25163a2310b3f9b4b5b67ef4f1b13fc7407579245cd15f351cd910f19e2354a95b', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-03 08:43:27', '2021-03-03 08:43:27', '2022-03-03 08:43:27'),
('2d5fe18cf88cfc030a2644384f2b643ba4c2b48e37a03f4a1ca83069379d7370c9a078b8a78821e9', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-09 15:18:05', '2021-03-09 15:18:05', '2022-03-09 15:18:05'),
('2d8c900a535ba4d0ae25d63a896a95da759686339db4405e9b3cee771260e0b7ea8304beb76cdb23', 61, 3, 'Personal Access Token', '[]', 0, '2021-03-06 07:17:00', '2021-03-06 07:17:00', '2022-03-06 07:17:00'),
('2d92290f192f6afffa92c2dd5f1e403c45a9fee49eacf8d0af1753e30017c341a358b89b12b63056', 55, 3, 'Personal Access Token', '[]', 0, '2021-02-27 13:09:49', '2021-02-27 13:09:49', '2022-02-27 13:09:49'),
('2e2df6cba74e1388afa37eca2415a43fad1e0e9da1d1d17107df9ae1a068f2998288b9392c76e965', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-02 06:59:54', '2021-03-02 06:59:54', '2022-03-02 06:59:54'),
('2efbb41e3144da7d86cef905bf68afe8e38aff3379bcd1ea5c4575a85aaee9b26c8e4affef936611', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-04 10:21:19', '2021-03-04 10:21:19', '2022-03-04 10:21:19'),
('2efed61805d7284e2e7e821851574c27eb4677e2ce58e57a2440ccf69ef573d309c61fc06568ea6e', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-01 06:45:08', '2021-03-01 06:45:08', '2022-03-01 06:45:08'),
('2f0449036a4ff20452912abe8a6386cc2a5fa001bf2ed022455dc10bce7a63a8a7ab8efc30aa0740', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-04 11:04:30', '2021-03-04 11:04:30', '2022-03-04 11:04:30'),
('2f2b4aaeba55bf657035aafe72a29ce9461bbe03ceba4dde22e6049b1506244d262f6e91d325c3ff', 59, 3, 'Personal Access Token', '[]', 0, '2021-03-04 11:33:40', '2021-03-04 11:33:40', '2022-03-04 11:33:40'),
('2f2d4bfbf3547d8c47c442d7e1de1ac9310c5d2d699292ff7b20899b50c24e498fe9ea2fe9725f06', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-06 13:16:54', '2021-03-06 13:16:54', '2022-03-06 13:16:54'),
('2f514404c2658031d09858443c1adb3349044fe4b006a51e7fb862f5037fc82cbd6f4c9b5f84734b', 55, 3, 'Personal Access Token', '[]', 0, '2021-02-22 12:08:38', '2021-02-22 12:08:38', '2022-02-22 12:08:38'),
('2f58a49d1c30a01d64d75a7b1c25dacd3b1113b2cf819ad9e2a0989bd14ca148cdd3ecc6b5ee87d2', 61, 3, 'Personal Access Token', '[]', 0, '2021-03-09 08:42:58', '2021-03-09 08:42:58', '2022-03-09 08:42:58'),
('2f75f39a9bc9d4d7912d24a9a5564e70099e320ae66b6c92250dc032ced70bd452416d56c571853f', 57, 3, 'Personal Access Token', '[]', 0, '2021-02-24 15:05:02', '2021-02-24 15:05:02', '2022-02-24 15:05:02'),
('300f25f02bbb70e7d79714710ff347ea4980a686dacf0519478293d3ec1e37a6676382590873410e', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-02 12:32:50', '2021-03-02 12:32:50', '2022-03-02 12:32:50'),
('30c7dd9e17237fadd9c5fb9e7d04865fa5600c52e4d672111ec57c57b21b65101b3fb1fb08cabe2e', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-01 07:32:49', '2021-03-01 07:32:49', '2022-03-01 07:32:49'),
('30ecf23ecb8cadecc1dbbc04e486b341bd2458ce92ffbf1f08108f16c551eca181c69443cd8046e4', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-05 14:26:45', '2021-03-05 14:26:45', '2022-03-05 14:26:45'),
('3108e33973d571e47306ff898cdfa8d06fcdeb649d9dd9c2924dd056310fdf3d27a145fe1ba44702', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-01 13:09:26', '2021-03-01 13:09:26', '2022-03-01 13:09:26'),
('3191085bb8ee1e89146c56f29a307d623a91c76cf4a2cc5d9215a7c73b70358591bfa02243952f49', 61, 3, 'Personal Access Token', '[]', 0, '2021-03-06 07:51:19', '2021-03-06 07:51:19', '2022-03-06 07:51:19'),
('31b295754d4ad05e3e2e10a768bc9d1d31e18316ab52e214f465cd1d5af1131c46134a7333f4b0a7', 61, 3, 'Personal Access Token', '[]', 0, '2021-03-04 12:19:12', '2021-03-04 12:19:12', '2022-03-04 12:19:12'),
('31dd6d9c9306058409abcd33facebdc36243528d6a75d2650e72af895875cf502578ae45cf948771', 55, 3, 'Personal Access Token', '[]', 0, '2021-02-27 13:08:11', '2021-02-27 13:08:11', '2022-02-27 13:08:11'),
('324a7b4ea51c1cc7dc2213aa26d2d169c318ba4e5125b0e74c407e684bd6478ee27c7465a77daf73', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-04 07:45:56', '2021-03-04 07:45:56', '2022-03-04 07:45:56'),
('32dfafe58c751892e6f512ed1b95cab5987423bea13d48cff28b293b9b95726d4b48d4b77c836e84', 59, 3, 'Personal Access Token', '[]', 0, '2021-03-09 10:11:00', '2021-03-09 10:11:00', '2022-03-09 10:11:00'),
('32eca3a5324c4fd9f1d8509c7d8dfa5933ed6eb635c62dc34657c775fd5dccfb9e3e5d89067f6c29', 53, 3, 'Personal Access Token', '[]', 0, '2021-02-17 13:22:41', '2021-02-17 13:22:41', '2022-02-17 13:22:41'),
('330dbafa6da7eec83152b26f6a47a03a85572dbe35bc00b69cc7326c961dd5c247003e86a0de080c', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-03 13:08:41', '2021-03-03 13:08:41', '2022-03-03 13:08:41'),
('332e40b8b848edf415da99f69fbfd1651d9a4fcec8a8426b508a51c8eddb9960920a5c9719031434', 61, 3, 'Personal Access Token', '[]', 0, '2021-03-09 07:20:55', '2021-03-09 07:20:55', '2022-03-09 07:20:55'),
('33587c04f344850af954848e6738ed9e85692ddb9f1693aa80af741d044b7c4cc4eb52d5c3ff31f7', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-01 10:30:18', '2021-03-01 10:30:18', '2022-03-01 10:30:18'),
('33b586d6d6da8674b02fd50c44c71b900c79a0e01c11f7b899f9d78bd2f5b26d7fb215a7bdeda2ee', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-01 13:08:32', '2021-03-01 13:08:32', '2022-03-01 13:08:32'),
('34116ea8babf84fdce68ddaf501a8f38ec55b98bdbd630fe7be12864fe15e0fece2f119a7782ffe2', 36, 3, 'Personal Access Token', '[]', 0, '2021-02-02 08:35:14', '2021-02-02 08:35:14', '2022-02-02 14:05:14'),
('34672c044b8adb53f5c277df9bdfd783fcef5e0e5042b866af02d9aecbf966ef3834abc7709e2061', 55, 3, 'Personal Access Token', '[]', 0, '2021-02-27 11:57:00', '2021-02-27 11:57:00', '2022-02-27 11:57:00'),
('3529eea9d280366f9a36eb175e3f11337cde3facdfaf34ba6d728e80751366f9cc77aab698e9c21a', 61, 3, 'Personal Access Token', '[]', 0, '2021-03-04 12:42:54', '2021-03-04 12:42:54', '2022-03-04 12:42:54'),
('35b004d247d7a30960198879b255a93f4d9ce0237eadc2fbb0384fe0f9a2f83a5e3110dc723a9dc1', 55, 3, 'Personal Access Token', '[]', 0, '2021-02-22 07:03:09', '2021-02-22 07:03:09', '2022-02-22 07:03:09'),
('35b2d0705593a7f86985856f8ed07ceb026e23368af6526e46f07b1fc7d23f3c55abc7f8bc76d396', 61, 3, 'Personal Access Token', '[]', 0, '2021-03-05 10:49:08', '2021-03-05 10:49:08', '2022-03-05 10:49:08'),
('361317be29de9f4264df39b5c86358667faf131ba7dc7c801283774cf87831729aa83eab457fb81f', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-02 10:26:35', '2021-03-02 10:26:35', '2022-03-02 10:26:35'),
('36626a49f12c3bb0a8231c1586d9d06b88180d694b156c52730e58a4ac5507f94f715f0bb1083796', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-04 11:06:55', '2021-03-04 11:06:55', '2022-03-04 11:06:55'),
('3666a0b3ddb1a3f62fa530c31ffec225512d1aab50676d46a18799a505cdf8c5d4b580eabf069624', 55, 3, 'Personal Access Token', '[]', 0, '2021-02-27 11:37:03', '2021-02-27 11:37:03', '2022-02-27 11:37:03'),
('36737ab9791d283d505c00828e741d7893e395bc16b1d4244a6d96daaf63748b3cf68ccc104c0114', 55, 3, 'Personal Access Token', '[]', 0, '2021-02-27 12:16:32', '2021-02-27 12:16:32', '2022-02-27 12:16:32'),
('369d8d9ff757c0d91d2df3225c90325e2896f7378a632a43b84cce0586aaaf508d8cdd9b4488847e', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-04 10:40:41', '2021-03-04 10:40:41', '2022-03-04 10:40:41'),
('37a00eb13c67aada5309a7b5baf841a636c0b5eb1023cd4488fadee507dec73922c41315919f6b60', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-04 11:15:22', '2021-03-04 11:15:22', '2022-03-04 11:15:22'),
('388a90b3e71bd1c66c29dce57157a8e84b5d1e90129fa833d4fee7b5840ec6b861e07937b8fb3d97', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-04 09:54:49', '2021-03-04 09:54:49', '2022-03-04 09:54:49'),
('38c28c3b87b85dcb803ac475b15ed33c339327ced8dd9ff13b7f0b2d14d35f3fc41a888b86cb523d', 61, 3, 'Personal Access Token', '[]', 0, '2021-03-04 10:42:55', '2021-03-04 10:42:55', '2022-03-04 10:42:55'),
('38f41bd787b3f22682c9b29225e5ac224b2d6e203bd359b6795a3e72998288c8f7edb06da1e3d2e6', 65, 3, 'Personal Access Token', '[]', 0, '2021-03-03 14:51:29', '2021-03-03 14:51:29', '2022-03-03 14:51:29'),
('39047b7ea22762f5d84e79f4d45c681809631df298505fac31fe75f850d46c571109006cb34495e3', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-04 07:11:53', '2021-03-04 07:11:53', '2022-03-04 07:11:53'),
('39051b4001f77d59d52bed985873e1cd5c6117cf8556de3d854140880082b8f9a3d3108a0f2668df', 61, 3, 'Personal Access Token', '[]', 0, '2021-03-06 07:41:47', '2021-03-06 07:41:47', '2022-03-06 07:41:47'),
('39105d430ea68c6b785302021d38c88c564c5592edeca2b6b4f83fa8120100d7f76ce83038b09ce1', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-04 10:15:35', '2021-03-04 10:15:35', '2022-03-04 10:15:35'),
('394cf2b19c1d8f90db70d6e4efdf6e991d144e59f1d15317d2c84c563d475e81b10b2d1102174518', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-02 06:46:04', '2021-03-02 06:46:04', '2022-03-02 06:46:04'),
('39a28ab5262b6af79f349aac978746478e27aedc5ea1c41abb3336e3cc5f23f26b8a63cdb4ac8e16', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-03 13:23:20', '2021-03-03 13:23:20', '2022-03-03 13:23:20'),
('39ac2b4603756899c52283df17fd0ecf3b8b7c418c5217a493732f47e72c19be9ea0cc47fd7d92ed', 36, 3, 'Personal Access Token', '[]', 0, '2021-02-02 08:34:50', '2021-02-02 08:34:50', '2022-02-02 14:04:50'),
('3a2d58aeed46f480d2f92830dee026a8d8576c4c1cb3c48c639ab785b56d56f09602af46231c6d67', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-03 09:16:23', '2021-03-03 09:16:23', '2022-03-03 09:16:23'),
('3b28fe6d2da253857eb362b67cfa470df3f0c9ce095dcfdc95594f34ee0138f733e12b6ad4514221', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-03 14:04:20', '2021-03-03 14:04:20', '2022-03-03 14:04:20'),
('3b3965310698e0812551afc2c62585ef21e40b42f127af818e3db27e64a32a895fd5564c41a775c0', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-04 09:43:10', '2021-03-04 09:43:10', '2022-03-04 09:43:10'),
('3b7f5e9086c40bc87d01206c9c96d8ded14df70f7bd736d7d09a0b6de5b0e2b21b65b5f413c55737', 55, 3, 'Personal Access Token', '[]', 0, '2021-02-22 12:09:01', '2021-02-22 12:09:01', '2022-02-22 12:09:01'),
('3b831d06adc8353596707889a50b18b2694010dbb664a4dc4869c336fd192aa461d704c6e673a21c', 61, 3, 'Personal Access Token', '[]', 0, '2021-03-05 10:51:59', '2021-03-05 10:51:59', '2022-03-05 10:51:59'),
('3c248445985759b9d65e88fd5fc0379c99b55f369b85faad5069f05dca50b034c220d6cc2d498c2d', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-01 10:13:26', '2021-03-01 10:13:26', '2022-03-01 10:13:26'),
('3c463ad86adc16772dec62989d03be999fd735a50b2750f66899be9557c4c217021c671bdd1b56d9', 70, 3, 'Personal Access Token', '[]', 0, '2021-03-06 11:04:42', '2021-03-06 11:04:42', '2022-03-06 11:04:42'),
('3c5a0b2d20ae10143aebf5a5c6e29fc0657adcc0a310e35fa32c28c1c2be42a3ab85589ab4019d55', 16, 3, 'Personal Access Token', '[]', 0, '2021-01-27 08:15:25', '2021-01-27 08:15:25', '2022-01-27 13:45:25'),
('3c763893b54393c97b8df6be12e18095a5f1c6eec4c2b9f293f6d60823907809f23921c53f62fa2a', 45, 3, 'Personal Access Token', '[]', 0, '2021-02-02 23:37:32', '2021-02-02 23:37:32', '2022-02-03 05:07:32'),
('3c9967744e246bc3729b0f4f2cad4ce359609f7feaddfcfd145654fb3a51e86fc862e4d6b9cb35bb', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-06 13:42:31', '2021-03-06 13:42:31', '2022-03-06 13:42:31'),
('3cdd165076215282df2b8588d5a4ad642cfb15b404350b53a091a79462e8ca2e1b82ecb93272294e', 55, 3, 'Personal Access Token', '[]', 0, '2021-02-27 11:25:16', '2021-02-27 11:25:16', '2022-02-27 11:25:16'),
('3cdd279c1d78dbe87f02adec0afa68287318860c0461ee57fb8ba2c4d5f637991cc640f88d6fad29', 55, 3, 'Personal Access Token', '[]', 0, '2021-02-27 14:45:02', '2021-02-27 14:45:02', '2022-02-27 14:45:02'),
('3d93529e2bf40a7e089c2d8c445b2de028456066fdf4e0fcb1c3351a485e86ea61f14b837cc4b724', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-04 10:41:05', '2021-03-04 10:41:05', '2022-03-04 10:41:05'),
('3d9b0785f953b4ba7418f41973078013b18dc555026022ca61a2733c184b8772dbc1c25053762cbe', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-04 06:57:44', '2021-03-04 06:57:44', '2022-03-04 06:57:44'),
('3e304e6942ecbd1fc7c0e661e63b860f2fbac8920cc61bbe86319c8bfd57ae9d828972ae733ded77', 62, 3, 'Personal Access Token', '[]', 0, '2021-03-01 14:53:51', '2021-03-01 14:53:51', '2022-03-01 14:53:51'),
('3e5bb53148cb560c50e7d152188edf27132a08bc2e7d45a6d684d20a77a38284285a184ca9f2fd0d', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-06 10:20:13', '2021-03-06 10:20:13', '2022-03-06 10:20:13'),
('3eeba9e0a6463c8c2396542295bc34965a3b8008fbb61a9ed1a054d6515a9a2d321a3c14097860da', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-01 06:38:59', '2021-03-01 06:38:59', '2022-03-01 06:38:59'),
('3eee76998be98f2576ff435f53ab05435131921c8aadc61609a8b7742ca0255d31a38055253957ff', 61, 3, 'Personal Access Token', '[]', 0, '2021-03-09 08:54:26', '2021-03-09 08:54:26', '2022-03-09 08:54:26'),
('3fa678b86300906489274e540a292b44d25b121986fcdc6e1f5dcda3d03c1a94e783d96ee176776a', 61, 3, 'Personal Access Token', '[]', 0, '2021-03-05 05:39:28', '2021-03-05 05:39:28', '2022-03-05 05:39:28'),
('3fb76ac1376b3ec7f921c5dda4b29c7338329e02943cf041cbe016c2f9d487576e6848ab96a6a4d7', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-01 07:00:13', '2021-03-01 07:00:13', '2022-03-01 07:00:13'),
('3fce38175e6272c6218dadc79dddc3f4972c143326f269305892a601d3aa579e369d62c58f8eeadc', 61, 3, 'Personal Access Token', '[]', 0, '2021-03-06 07:08:58', '2021-03-06 07:08:58', '2022-03-06 07:08:58'),
('3ff9a9821d902434a15dd57d95d54577f6abb503fe09acc1d594d19ff207ae240249b5fda090a690', 61, 3, 'Personal Access Token', '[]', 0, '2021-03-05 13:39:54', '2021-03-05 13:39:54', '2022-03-05 13:39:54'),
('40039bec94f2f5c9125a86e43a52fab4246a5b07f8115b076d40651372ee58f9d7682f3ffc3a5a37', 39, 3, 'Personal Access Token', '[]', 0, '2021-03-06 11:06:15', '2021-03-06 11:06:15', '2022-03-06 11:06:15'),
('4075703cb138fc821c54028ebc23c0c7cd322481f31074bbbc4f2a82e36993351c6c55b51aa68b7a', 61, 3, 'Personal Access Token', '[]', 0, '2021-03-04 11:32:25', '2021-03-04 11:32:25', '2022-03-04 11:32:25'),
('413fa0414aa9b99c5f17e55f0fe672cdcfde17bf0dd7f3c39c9b615c6d05d6f0d8e3c36090eb83b8', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-01 07:36:37', '2021-03-01 07:36:37', '2022-03-01 07:36:37'),
('416126eb4d59b7ee15477ca0c37889e80d78155b5bab9e77391fcf5864055aabf68e2c005726976b', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-06 10:06:38', '2021-03-06 10:06:38', '2022-03-06 10:06:38'),
('416e3abdde77ebd4091331d2facd2837388d9e01d524245521d2ff68713efa2e2b67c513d9b14aeb', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-04 10:26:09', '2021-03-04 10:26:09', '2022-03-04 10:26:09'),
('4199bea5b74ad6e1a91376d1b793029a1603222a1b995619c4f7194d19255860a945eaeb9b94e49b', 61, 3, 'Personal Access Token', '[]', 0, '2021-03-08 05:44:22', '2021-03-08 05:44:22', '2022-03-08 05:44:22'),
('41d84dd22eea6b7d9a252bc02e5804f30e12b1b3e5786fc20c23e879ce6896b45568d17f6870e224', 61, 3, 'Personal Access Token', '[]', 0, '2021-03-19 10:00:02', '2021-03-19 10:00:02', '2022-03-19 10:00:02'),
('4208fbde5e802af2d7e56e65f33fc7721efe958b1a0f488692e3ad4ad639c4346a1269f77bb549f9', 61, 3, 'Personal Access Token', '[]', 0, '2021-03-09 07:36:37', '2021-03-09 07:36:37', '2022-03-09 07:36:37'),
('4216bb009c660edfd7f484668acaf6a4fc3de79990dbfeaaa7c8f1b73f0477ca4404892b82a3d760', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-06 11:16:33', '2021-03-06 11:16:33', '2022-03-06 11:16:33'),
('42474800d64c8c9cf5f07600c60419543ae82eb5012c2459b6acae09d24f0136b340ca50a732f381', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-04 11:17:59', '2021-03-04 11:17:59', '2022-03-04 11:17:59'),
('42aef18d284fc46fff47ed221426f0df46159375db927dc9218f9421c1ca24ce24f34fc8a7fafe33', 61, 3, 'Personal Access Token', '[]', 0, '2021-03-02 12:11:42', '2021-03-02 12:11:42', '2022-03-02 12:11:42'),
('42dc97dfe4cd52e7757d854f130eea12fa56cafe13a84d68a211a829cddbda81efe7944e043bbb23', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-01 12:36:33', '2021-03-01 12:36:33', '2022-03-01 12:36:33'),
('43ce48ac2770bd32574986e1773fcca595fd6026951b3061e2279e1d95f9edd04608f6f8fa9dff49', 39, 3, 'Personal Access Token', '[]', 0, '2021-03-01 14:40:53', '2021-03-01 14:40:53', '2022-03-01 14:40:53'),
('444ceac5e43b6b212148594e01d1e8f4a573b280d8599340aee739efe943ca37792922ee87303eda', 61, 3, 'Personal Access Token', '[]', 0, '2021-03-05 07:03:51', '2021-03-05 07:03:51', '2022-03-05 07:03:51'),
('452dfa7c07e61bef3e2a32d4d945b682494278a48b162694a031fee49ea9135fa51f33b423c66c7e', 55, 3, 'Personal Access Token', '[]', 0, '2021-02-22 12:08:26', '2021-02-22 12:08:26', '2022-02-22 12:08:26'),
('453790957a0b8334b1011c729d21e4ea38cf9db8e5bd9487798864b76aeb6094677492b61fb5e54e', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-01 08:32:26', '2021-03-01 08:32:26', '2022-03-01 08:32:26'),
('458d94d793ee999142215c6faa2123cc751dae16048145ae5cdb4b93e3865d2ccc4e835bcf2e7fb3', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-04 09:58:24', '2021-03-04 09:58:24', '2022-03-04 09:58:24'),
('45a9f40dafda0d10a39c369c1d041df1d50f33b93fc4185591436f953106f21976df9a0d797c82e0', 61, 3, 'Personal Access Token', '[]', 0, '2021-03-06 07:15:12', '2021-03-06 07:15:12', '2022-03-06 07:15:12'),
('45d74cdeeee23ae7bb689e951c87124fd41532cf116775c4ab8287e546d518c1c5d9806b7ef713a0', 53, 3, 'Personal Access Token', '[]', 0, '2021-02-16 13:53:40', '2021-02-16 13:53:40', '2022-02-16 13:53:40'),
('45ec70cfc12cbec0225327aaa40b50fb3611b30b5ab30a3977eefd35d7496328cac6ef87108aa7b1', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-04 11:06:29', '2021-03-04 11:06:29', '2022-03-04 11:06:29'),
('469dbc5ca415dedaed46a0e82a1ad7f920c1adc6a1e478a7e372747af9754221ad8c90fb0be621b5', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-03 14:03:08', '2021-03-03 14:03:08', '2022-03-03 14:03:08'),
('46fda74a9edb8894db34da2b9bceeb22eb7ef1028d4eb3ac2ac408ff9b16a19752111f2eab998971', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-01 09:31:41', '2021-03-01 09:31:41', '2022-03-01 09:31:41'),
('47338b41cbfd4b886b57d76c3950b4672b78130188447f0d8cdd5c7d25eef4c6f20b226e1bcacd99', 39, 3, 'Personal Access Token', '[]', 0, '2021-02-02 08:42:25', '2021-02-02 08:42:25', '2022-02-02 14:12:25'),
('473b219a4ee8f920c7fc981f7e3ca3fc710dee3526725b4081f7311a488e1577ff00c1fca0c0b89f', 35, 3, 'Personal Access Token', '[]', 0, '2021-02-02 08:26:48', '2021-02-02 08:26:48', '2022-02-02 13:56:48'),
('473f10598b4e29f7c2a670e765a3481162ded5cae47a5f51a342b839991b39154b87bf3b9e81d8c3', 61, 3, 'Personal Access Token', '[]', 0, '2021-03-11 13:41:01', '2021-03-11 13:41:01', '2022-03-11 13:41:01'),
('475af39e1da355d2399732c0b35d23eab9c580d6db8f01f73841f88805fff899110d03ef0ae49111', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-03 09:19:25', '2021-03-03 09:19:25', '2022-03-03 09:19:25'),
('479f7f6d1894e88542c0f96ada553f9cd94ed2c49c0bbcce89f79b976ad46e0a422d6b924f5eaf44', 55, 3, 'Personal Access Token', '[]', 0, '2021-02-22 09:52:43', '2021-02-22 09:52:43', '2022-02-22 09:52:43'),
('47bd4ea5fd745383ed2ff02e977245b93ab14ceac05e399c81b0199926c36569f2af65cc19c05ba1', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-04 07:26:43', '2021-03-04 07:26:43', '2022-03-04 07:26:43'),
('48fa283a4f293b1676d50dfd6149f0ee63f3c02d3604af0bfa18d136d64ab09bca7601f0e6b8f490', 61, 3, 'Personal Access Token', '[]', 0, '2021-03-09 07:38:06', '2021-03-09 07:38:06', '2022-03-09 07:38:06'),
('4908a99dea4668e1b55933de8c9096cc28bcda83c49b07cd66e3693d4faaaa0576658ffc0a739a8c', 55, 3, 'Personal Access Token', '[]', 0, '2021-02-27 12:55:59', '2021-02-27 12:55:59', '2022-02-27 12:55:59'),
('4956c3ff4b25af6487ff20ffbbca8a19a99b4e7a282266b540ceaa5ffc9e646d25c59ed3658356bf', 61, 3, 'Personal Access Token', '[]', 0, '2021-03-09 09:24:55', '2021-03-09 09:24:55', '2022-03-09 09:24:55'),
('4967386d525403a2fcffd1157c0284c956b9c89e0de6c4a85320fa9048cb3fedb26b0bbb66e48901', 61, 3, 'Personal Access Token', '[]', 0, '2021-03-12 11:43:06', '2021-03-12 11:43:06', '2022-03-12 11:43:06'),
('49692214404d46b9476cb5018c2433abd59901a6f953c8589179841b43c61c5d56c9058ecafe26aa', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-01 10:06:09', '2021-03-01 10:06:09', '2022-03-01 10:06:09'),
('4a0aa9da90cf96f7ac13b50ae1c853932008aa2704299b7dc12ff428de82fb77b24e96cf1fade53d', 55, 3, 'Personal Access Token', '[]', 0, '2021-02-22 11:53:04', '2021-02-22 11:53:04', '2022-02-22 11:53:04'),
('4aad466c446f8e14663cf8b7616a29685f6bf85132782a61cb49450e38ef105fee47ed811586d94e', 55, 3, 'Personal Access Token', '[]', 0, '2021-02-27 14:17:24', '2021-02-27 14:17:24', '2022-02-27 14:17:24'),
('4aadf5beaed06836dcdc84526b391bd6a60b843d6adc00d1ce90928545e8ac6476959f7d3057e751', 61, 3, 'Personal Access Token', '[]', 0, '2021-03-09 12:00:32', '2021-03-09 12:00:32', '2022-03-09 12:00:32'),
('4ac3253206c970b3432c2e98d75f544ad825ecf409511339df096f0e5309b908e0999a4b581e5a0a', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-02 05:35:49', '2021-03-02 05:35:49', '2022-03-02 05:35:49'),
('4b0f62629b9a27f34c0b3bf7139cc6aafa622221c9093436f8cff28bd5e8d26b06a272b1e627e651', 39, 3, 'Personal Access Token', '[]', 0, '2021-03-03 15:00:55', '2021-03-03 15:00:55', '2022-03-03 15:00:55'),
('4bc50a89f744e2eed6e0a31c08175c6a3fb709794bf7562e8b236e430b28643007a13df1c1af421d', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-01 10:08:32', '2021-03-01 10:08:32', '2022-03-01 10:08:32'),
('4be14e1621d3e39d697b0ea979ff6bfe69e709b869228304f2ed9e6912946a51a84814abd541dfef', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-04 10:34:44', '2021-03-04 10:34:44', '2022-03-04 10:34:44'),
('4c01f6f1953b5c976aea1bf21f98ae8a864c8b186ac18edb9703162ca3215ead1d91bb13a258dddd', 55, 3, 'Personal Access Token', '[]', 0, '2021-02-22 12:03:29', '2021-02-22 12:03:29', '2022-02-22 12:03:29'),
('4c281f070994b518b2fdf3acb89ab87095a777dd0e845b965e1aab980845e638d528912fc7a52218', 61, 3, 'Personal Access Token', '[]', 0, '2021-03-03 09:56:41', '2021-03-03 09:56:41', '2022-03-03 09:56:41'),
('4c32bc2522478e41b4633b17b4c9c3226b1adb79dc367f26a8c7f4bffaefaf4b6097b6e1035ceac8', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-01 07:37:31', '2021-03-01 07:37:31', '2022-03-01 07:37:31'),
('4d2eecd1d24c006a21e8a85e5d6e599a0a6bd9603eae24f14af508f818a4240c5bca1b9eeb320f5d', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-03 14:12:32', '2021-03-03 14:12:32', '2022-03-03 14:12:32'),
('4d5c11ecb3a6e23d1c11588a47f6ba829f26f541327a1cdd0421db866f5899e1b632fbb984122e3c', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-05 09:43:53', '2021-03-05 09:43:53', '2022-03-05 09:43:53'),
('4dd858593bfe2e3bdf01adf1d4e339cf4df14996bf7ffc806e271a0e31a8b870e8fa3dace596743e', 67, 3, 'Personal Access Token', '[]', 0, '2021-03-03 15:07:40', '2021-03-03 15:07:40', '2022-03-03 15:07:40'),
('4de012b92d4629c7d5bc9b001bac2ea674b9a856c0ab75255103a7c36c1d58e3c6117bc0b14a1544', 59, 3, 'Personal Access Token', '[]', 0, '2021-03-03 18:59:42', '2021-03-03 18:59:42', '2022-03-03 18:59:42'),
('4e2686c4e7725682ac0907233b6409502b0086e89a7c70b8a617b3ddfd567cc9cb48e3a0bafca16e', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-09 08:41:07', '2021-03-09 08:41:07', '2022-03-09 08:41:07'),
('4e69c31a4c5a1a3f396c15f1381b9efad8283af82a0d096b0ce242a032ce0d5b18b71b6d6ddde679', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-05 09:48:07', '2021-03-05 09:48:07', '2022-03-05 09:48:07'),
('4f0a95f10081dfbb8dc42ba69804bc749c05dd4b4531e97aac77c312a113da7869604bd4f50e4b20', 53, 3, 'Personal Access Token', '[]', 0, '2021-02-16 09:19:46', '2021-02-16 09:19:46', '2022-02-16 09:19:46'),
('4fd2c9c4fce2dffb495835bfa664f47e048e99a1a49540aa0c60f5651e1022158c00514abd22d88f', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-01 10:13:44', '2021-03-01 10:13:44', '2022-03-01 10:13:44'),
('4ff2ca0e5103ad958c9deb85cef502175bceb382312aac728d03193d5456bcdec37dd6295ac5e37a', 39, 3, 'Personal Access Token', '[]', 0, '2021-02-27 10:53:38', '2021-02-27 10:53:38', '2022-02-27 10:53:38'),
('4ff690331ab0935e58a6fbb41e4eb72bd8fd1da07b8e11a1013a25e50d20650befdaf0f35e1942a1', 36, 3, 'Personal Access Token', '[]', 0, '2021-02-02 08:34:44', '2021-02-02 08:34:44', '2022-02-02 14:04:44'),
('50d1c50bbef9ace293aa378e0f22063fc8b677747286abcbd2a07710063c916172d51705f8b02c43', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-05 13:28:13', '2021-03-05 13:28:13', '2022-03-05 13:28:13');
INSERT INTO `oauth_access_tokens` (`id`, `user_id`, `client_id`, `name`, `scopes`, `revoked`, `created_at`, `updated_at`, `expires_at`) VALUES
('513305904adad79ef07578cd086d59fdef868aca08e3a42b0d565c0c120ed387fc6db9808eb69a30', 39, 3, 'Personal Access Token', '[]', 0, '2021-03-01 12:10:00', '2021-03-01 12:10:00', '2022-03-01 12:10:00'),
('519f5e8962d073cbd9fec974c23ef26b5b974d48822438967350abd627e07f41f9f8bb5da2a1c839', 38, 3, 'Personal Access Token', '[]', 0, '2021-02-02 08:36:49', '2021-02-02 08:36:49', '2022-02-02 14:06:49'),
('5222287806cae549f9c452db33fc40a055eb49ef5c12c6e8f406e543b898a2c804238f9e3f48e499', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-02 10:20:52', '2021-03-02 10:20:52', '2022-03-02 10:20:52'),
('524b1f3c7d3dc42e083e1c5c5fe04d85e13f7c96d048ef9901c384ada6b413802b15f35059822865', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-01 12:02:02', '2021-03-01 12:02:02', '2022-03-01 12:02:02'),
('525c0e547eaafbcb82db5b16b290e18d1709f8d287b644c3a636e579b36e66210bee2bc063835d28', 55, 3, 'Personal Access Token', '[]', 0, '2021-02-22 10:29:02', '2021-02-22 10:29:02', '2022-02-22 10:29:02'),
('52a0f253cbc556912f09632aba619ac6d9521013d4ea1a11fdc1ee68e867df0f856e710902d2c379', 61, 3, 'Personal Access Token', '[]', 0, '2021-03-02 12:28:52', '2021-03-02 12:28:52', '2022-03-02 12:28:52'),
('52aa10d6b600d74f14f2e5e27fd1fc619a765c7f59fee05f3f0afdbd0a3006227305e6a9c23373a7', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-04 10:30:31', '2021-03-04 10:30:31', '2022-03-04 10:30:31'),
('530d837c6531b8ca16830cdc09257278863d5e1f89e704dcebba22c2babf4b79dc1ba04fee861ab3', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-04 11:03:41', '2021-03-04 11:03:41', '2022-03-04 11:03:41'),
('5335bef0ab4dcc2402153341becb39d10795b0060e3c548a684b227f4358ffc2e025764bb9ef65ff', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-01 07:08:33', '2021-03-01 07:08:33', '2022-03-01 07:08:33'),
('534f954c9c35f98ec0c0a2b340b472de6c410a5e4bca60225931118d3002d14589155e560366ee01', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-04 10:43:47', '2021-03-04 10:43:47', '2022-03-04 10:43:47'),
('538c25d8d75efc199d0889e4d9296a4ce6efdbdcbb5192ddfc55624ffa8153b7318015cc74cc955f', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-01 09:50:02', '2021-03-01 09:50:02', '2022-03-01 09:50:02'),
('543e3147409ba6e5fb14b763d88731ec26fbf44d92afe09d2504287e7af1de5347df23469cd47cf5', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-02 12:35:55', '2021-03-02 12:35:55', '2022-03-02 12:35:55'),
('549658cf4c6f7f8c770780d24db317ddf0db0fa7938094862c7bdab38dae04a02cb93d2a3782cf74', 55, 3, 'Personal Access Token', '[]', 0, '2021-02-22 07:04:04', '2021-02-22 07:04:04', '2022-02-22 07:04:04'),
('54afe60c1f3495efbaa5c0a4db4cb05a512e671bf750283f0128e08224e626906f0afa8b93af6e92', 53, 3, 'Personal Access Token', '[]', 0, '2021-02-17 13:23:36', '2021-02-17 13:23:36', '2022-02-17 13:23:36'),
('54c4814d7786c02081061a6e4b8103d3ad89223ef43b080db888ecbcb8deed30e44ad4882b539f15', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-04 08:51:34', '2021-03-04 08:51:34', '2022-03-04 08:51:34'),
('54c843955e534784318d228cb50bcc58c4e2ac457fef6c2e2bdc3d6b62aa3a1fd7cdea49aa23bef1', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-04 07:39:30', '2021-03-04 07:39:30', '2022-03-04 07:39:30'),
('55185ab9e09aa2e662c316c9b6e2f14239efd22f8a3a9eb5410341656b9372781d6f8d0ca94045f9', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-04 10:48:57', '2021-03-04 10:48:57', '2022-03-04 10:48:57'),
('555e5a757ded0737e21078e886e41a4796682f6cdcd7d46cd28504f8a284b391218f03c2a64533b2', 61, 3, 'Personal Access Token', '[]', 0, '2021-03-05 12:38:24', '2021-03-05 12:38:24', '2022-03-05 12:38:24'),
('55d866e3bbadd089e9d9a548d117882be55a863f19cc4e12d4bbae79a3a97807d8772a400f2f1ad3', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-02 10:44:40', '2021-03-02 10:44:40', '2022-03-02 10:44:40'),
('55db9548e8a94a45f5dd57a83a2c42ab175840bc910cfecb58617ad6068fb461c9356ea9ddf5d4c2', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-01 08:30:50', '2021-03-01 08:30:50', '2022-03-01 08:30:50'),
('55e8be93bf408262ce1b3fbe2955d91082acde2e84116a41c6494fada2f1ff8e927dda9bc8c65461', 61, 3, 'Personal Access Token', '[]', 0, '2021-03-09 07:29:52', '2021-03-09 07:29:52', '2022-03-09 07:29:52'),
('55eb808fd6546eb68143c8be18a12c90cff1212f6e62d253320a5e1c0a04bc866fcbd10cbecfa320', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-04 10:28:53', '2021-03-04 10:28:53', '2022-03-04 10:28:53'),
('560f00698971803978deb847f018752d3aaff9c2bef0750baa4a2c84f48b6b0c4aaa7241c5ab4f52', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-04 10:46:11', '2021-03-04 10:46:11', '2022-03-04 10:46:11'),
('566e8d25b7377acdb56beded00eeffe51ffbe9ba119770f2b7631cf473f54e33afb150625dd6dbb3', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-03 13:43:54', '2021-03-03 13:43:54', '2022-03-03 13:43:54'),
('5687719bec80b68d8619bf7acb025b51a6a8c05752b81100e0348612a690b36abd64c35a797ee08a', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-02 09:23:24', '2021-03-02 09:23:24', '2022-03-02 09:23:24'),
('56c07fbe7a78001b27aa04b9b42861bdcf9beb127868504c3ce3c0b267959e472ac8e05bf2c942d9', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-05 13:28:26', '2021-03-05 13:28:26', '2022-03-05 13:28:26'),
('56cf8c6fb75cddc38ae0c0a1907a5260d7e8c8d7a15c1e70e8fe665a247eb893de966bd064aa6859', 55, 3, 'Personal Access Token', '[]', 0, '2021-02-27 15:17:16', '2021-02-27 15:17:16', '2022-02-27 15:17:16'),
('56ee41db23ca8e01d901f7048757f4a523a6fb55b2546bfb1ed9d77b8bbcf69bb53d67773cb4c06a', 53, 3, 'Personal Access Token', '[]', 0, '2021-02-16 09:33:35', '2021-02-16 09:33:35', '2022-02-16 09:33:35'),
('577092edff96e16e78132575481827a7b1867eb8860582e08e02651f325add0d05e1ecbacedaea9d', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-01 07:24:16', '2021-03-01 07:24:16', '2022-03-01 07:24:16'),
('57bcdef8e3c0f9344a28046ab13301cafe5563171a89fe525a859725c83d7fd25eb9fdcc1d63e128', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-02 08:45:40', '2021-03-02 08:45:40', '2022-03-02 08:45:40'),
('5802e0852b9637e95241d890c59ae703290aad131de1504cabf3c54a960468a83a686274626b1cd7', 61, 3, 'Personal Access Token', '[]', 0, '2021-03-02 18:02:49', '2021-03-02 18:02:49', '2022-03-02 18:02:49'),
('5854b954a0ed11be734295b924c97e4a7445a721e304a11737c3ec98f87606c4ce816e9261addefe', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-01 08:32:08', '2021-03-01 08:32:08', '2022-03-01 08:32:08'),
('5861e3dff8b7d96a8b2485156c97ff323db5c4898beb48063f872b565f39587bc2e53b5414c9b380', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-01 12:51:28', '2021-03-01 12:51:28', '2022-03-01 12:51:28'),
('5874d69088f82675ed24ed40a893156b5bc24a3b111b04e0a5ce233d85bf1bba3463377fbca88e09', 55, 3, 'Personal Access Token', '[]', 0, '2021-02-22 06:56:15', '2021-02-22 06:56:15', '2022-02-22 06:56:15'),
('5935596e035e43e0043cdb2013c29c862c24fc750768026a73641427f3e782a5de93efcdf378353d', 55, 3, 'Personal Access Token', '[]', 0, '2021-02-26 13:03:46', '2021-02-26 13:03:46', '2022-02-26 13:03:46'),
('594279706fbaaeb218d7b3dba909bfa7f034ebfe1cbf8150bd448cfae5ed8e45ad89c207019c6239', 61, 3, 'Personal Access Token', '[]', 0, '2021-03-01 11:14:24', '2021-03-01 11:14:24', '2022-03-01 11:14:24'),
('596e36a1baacb074306c30dbb24b1f9c5f6365a32df872d0492ecb62f2472f37e6c6fbf1c8925542', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-06 10:58:10', '2021-03-06 10:58:10', '2022-03-06 10:58:10'),
('5997ef9cf9acf7f16220aa476b37d983f841a0c8156569f680f200517b96d28ae7f96d9ac35a72f4', 55, 3, 'Personal Access Token', '[]', 0, '2021-02-22 09:39:26', '2021-02-22 09:39:26', '2022-02-22 09:39:26'),
('59c5f7f5160484e391a34c778d619cd1a2e1bc4e5e0a1ca1d51e583d76385af661a7511f973d6447', 61, 3, 'Personal Access Token', '[]', 0, '2021-03-03 10:04:47', '2021-03-03 10:04:47', '2022-03-03 10:04:47'),
('5a74bce01fe4a095e2c99c2761f82d2589f16fec15253766e599bdf4fd0c3214b524d67a05089ea8', 61, 3, 'Personal Access Token', '[]', 0, '2021-03-01 13:07:18', '2021-03-01 13:07:18', '2022-03-01 13:07:18'),
('5a7ed70fd2f8c97ce18ac64585f9861d0df43af4921b2baa6d2ae3b6cdb924730475637cc8968260', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-04 07:28:49', '2021-03-04 07:28:49', '2022-03-04 07:28:49'),
('5ae3e00c5c66716d6164df246f12e5163785c105972337fb68f37d5911a0454d497640ce1348cd5d', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-06 10:18:58', '2021-03-06 10:18:58', '2022-03-06 10:18:58'),
('5b44ce7117f104fb8e4e7f640438ed60c197f96ea17e3624da7565067804b9324d4d6451cc4eb955', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-06 11:03:35', '2021-03-06 11:03:35', '2022-03-06 11:03:35'),
('5be0d1b2db7a4f73708bbe28163d7ac4c4e18d24b13d06e80299d69ab5a0ea8fe86ab6c36f80675a', 55, 3, 'Personal Access Token', '[]', 0, '2021-02-22 11:49:20', '2021-02-22 11:49:20', '2022-02-22 11:49:20'),
('5c54c2417146c497358c1c2282af83a88053d3844fe08e8e67d829182c46ce63fd9208f18c97acb8', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-04 10:43:27', '2021-03-04 10:43:27', '2022-03-04 10:43:27'),
('5e00b99677e6062030489ce29cf3113bd55702fdd574d243caddc5188de609d5effced55d5bba98b', 53, 3, 'Personal Access Token', '[]', 0, '2021-02-16 09:24:56', '2021-02-16 09:24:56', '2022-02-16 09:24:56'),
('5eabace2f9ea683e30083dd69a3f96949178699f8758441d4d5650191596bec7fbe965f240025d6f', 53, 3, 'Personal Access Token', '[]', 0, '2021-02-16 14:10:16', '2021-02-16 14:10:16', '2022-02-16 14:10:16'),
('5f33d4d593aaabe1442c9228cafc9f8055f5b9890bad30d0593c6ac2a78d7cbe986b4b4c67eee765', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-02 11:12:55', '2021-03-02 11:12:55', '2022-03-02 11:12:55'),
('5f42602fe1c292eba961b5d3b175a85ce1705a2ebc61f6e77686f899a337b3547b8b9f8503e58a50', 55, 3, 'Personal Access Token', '[]', 0, '2021-02-26 15:19:36', '2021-02-26 15:19:36', '2022-02-26 15:19:36'),
('6017b4797d33e407558cb63c0c45ec9572bf9a9c63c5eedd0d3f27ec939261ca20260086b00e5656', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-01 11:38:26', '2021-03-01 11:38:26', '2022-03-01 11:38:26'),
('6055326d7a4e17b3444b6bdbeb1da37ec0011c62e16d0f9b3794da18239f73f6ca6ba118a612b2b4', 61, 3, 'Personal Access Token', '[]', 0, '2021-03-04 08:57:38', '2021-03-04 08:57:38', '2022-03-04 08:57:38'),
('607510ad9282221e0cc4cd9809249219fc80742d67b71871f0b8f14911067a0866c7c2b7bd83ed30', 55, 3, 'Personal Access Token', '[]', 0, '2021-02-22 11:50:02', '2021-02-22 11:50:02', '2022-02-22 11:50:02'),
('60d8899159bf7bdc4302a4e9c4a254b7dfd46dc5665e9247c926ce45c5dbdd3bc41bd387e30a80a3', 61, 3, 'Personal Access Token', '[]', 0, '2021-03-09 09:40:20', '2021-03-09 09:40:20', '2022-03-09 09:40:20'),
('613c2443f2051c395f64b63a76a7b863c5cbce600c741f1260ac6ae23fd7b19a11cd97cbeb74db78', 61, 3, 'Personal Access Token', '[]', 0, '2021-03-09 06:45:09', '2021-03-09 06:45:09', '2022-03-09 06:45:09'),
('618e33e6e4a0a8eb141c2b985c86458e5e71135bd26a5bcf5fd9508e5a630a9dbf457fb82ec15961', 61, 3, 'Personal Access Token', '[]', 0, '2021-03-04 10:16:36', '2021-03-04 10:16:36', '2022-03-04 10:16:36'),
('6332aadc62f81ec68c9f69e952689c2320c87708ef505c84dd15ad91fb9a721697719e83c50fdef8', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-03 13:32:36', '2021-03-03 13:32:36', '2022-03-03 13:32:36'),
('6366f70d9ebf357e3e6bf460ee0e62fa55c2034c45532dd9bda3ebf0cd817724f09b95400fab977f', 61, 3, 'Personal Access Token', '[]', 0, '2021-03-04 11:39:51', '2021-03-04 11:39:51', '2022-03-04 11:39:51'),
('63962ca41fb82bc6092b6df8d026b34acb2256e26e0627f4e7316f97ea0b6b4a8ce8867372c8f8b1', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-02 07:20:18', '2021-03-02 07:20:18', '2022-03-02 07:20:18'),
('63c04cb3b81c66b3f206740d4b4b49b3cc8ab83e727ab9b4f0f60d479f3f34497497ec38c0213e86', 61, 3, 'Personal Access Token', '[]', 0, '2021-03-02 06:34:47', '2021-03-02 06:34:47', '2022-03-02 06:34:47'),
('63f5b2c4af821a35072e9e19fc59838468a5441436a1022ef7cabb42c50fd265ec2209666192f4c8', 55, 3, 'Personal Access Token', '[]', 0, '2021-02-22 09:48:41', '2021-02-22 09:48:41', '2022-02-22 09:48:41'),
('64c08147c93ec8ccff44df391fec0693180cdf4592164bc5e1412fd45e78752ec3b957ac53bc81aa', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-04 10:13:50', '2021-03-04 10:13:50', '2022-03-04 10:13:50'),
('64eb2371f6c53dc54611817dbce4c98bbaf3cfef79afaaa4a8f2ab7b277288312f1cfa54e111c839', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-04 10:45:26', '2021-03-04 10:45:26', '2022-03-04 10:45:26'),
('650b3d90ff8320993e291baed3f3ccd37d7d39a0068c9b0c1c90d540c205ebb3d1a094f304a64113', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-02 10:16:06', '2021-03-02 10:16:06', '2022-03-02 10:16:06'),
('655c90131ec9e7a33a28b0de89d756d5ff4034a3bd91ca21798192096fe3511b7d81b33d0ed1e958', 39, 3, 'Personal Access Token', '[]', 0, '2021-03-02 07:24:43', '2021-03-02 07:24:43', '2022-03-02 07:24:43'),
('655d463a87df2f0a9c36665c5617ebae5e5530f821b2621e7e15cd850f9d1862cd4f50c10b15a8cb', 61, 3, 'Personal Access Token', '[]', 0, '2021-03-05 10:15:33', '2021-03-05 10:15:33', '2022-03-05 10:15:33'),
('6602f82e446aa8d5d45afa6d5def2d3d0a9a383a5e7aad4922e68e6fe5bbff4172ef7bf3bb1e5ef7', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-02 11:14:32', '2021-03-02 11:14:32', '2022-03-02 11:14:32'),
('6618e375c97f2c358da4f83eeab6f43a185c2b143475c2b6e864ff15968e3c9a1d6f5a3158b27f9e', 61, 3, 'Personal Access Token', '[]', 0, '2021-03-02 05:50:14', '2021-03-02 05:50:14', '2022-03-02 05:50:14'),
('66867a3c09c669c7fcf3961e9976fb93ce367ee54929a614cd4e1ebb6abc627d5f6b4b73473cdae3', 55, 3, 'Personal Access Token', '[]', 0, '2021-02-22 09:48:52', '2021-02-22 09:48:52', '2022-02-22 09:48:52'),
('67450398c84abc61d6b83df249da58e7a97058786df602aa24664fd8f2f5d31068a3bf20118d6e1d', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-04 10:17:31', '2021-03-04 10:17:31', '2022-03-04 10:17:31'),
('674a6593c5acc8a2b2b270cb25a9a60563572d485cc2eeba7291f94353482607cc15a5c1a0197b25', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-01 11:00:28', '2021-03-01 11:00:28', '2022-03-01 11:00:28'),
('677f8886062fe0fd7be97c28c248e8621814a3ba8d0a78ae02fba03c09af86ea2e90cb374dfc8db7', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-03 15:12:35', '2021-03-03 15:12:35', '2022-03-03 15:12:35'),
('6807cf9e7334cf19d5876e4ecb16b9052bb51d6c195985f9f3d238d6f6ec463b657b421a9d309642', 55, 3, 'Personal Access Token', '[]', 0, '2021-02-27 13:16:21', '2021-02-27 13:16:21', '2022-02-27 13:16:21'),
('68585c9ef6d6ac5a37a8724f5cfd9c6f5dd3e4287d1fe26d71383555e84d7dece3f869b064ba20ac', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-04 10:25:55', '2021-03-04 10:25:55', '2022-03-04 10:25:55'),
('688699d2b2da541e227da1eab08f61d47fc154656f3d309872f8a19225b07663351693b0d188f085', 55, 3, 'Personal Access Token', '[]', 0, '2021-02-26 15:28:14', '2021-02-26 15:28:14', '2022-02-26 15:28:14'),
('688efb1858bc52de28ea4ff226074abb7bcd5c2eec4a7781bce0eb34555b25221231346943f9652c', 61, 3, 'Personal Access Token', '[]', 0, '2021-03-04 10:09:44', '2021-03-04 10:09:44', '2022-03-04 10:09:44'),
('69104eb3d3a7d0b53d3c6647dd8b345ffe2c1be8b90e2e1687ba29bf57165a764f66dd68031b0014', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-04 10:57:13', '2021-03-04 10:57:13', '2022-03-04 10:57:13'),
('691e602d43d44736c6508c94286e4446edc13aacdb3387dfbfdbe1f8571e7efe90d75bb735f4fddb', 39, 3, 'Personal Access Token', '[]', 0, '2021-03-08 07:09:12', '2021-03-08 07:09:12', '2022-03-08 07:09:12'),
('69880f2a0f98c228b90bf3889e8639adae89c71e49d4a4a9af800ea539029c7978a464cddc61bd21', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-02 07:23:28', '2021-03-02 07:23:28', '2022-03-02 07:23:28'),
('69983bc82b1107b8ee30d48a4a57c85b2d45856ca9aacbedd0502794ba1f0132323fc3757a865669', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-04 10:17:02', '2021-03-04 10:17:02', '2022-03-04 10:17:02'),
('69c9cb42f647a820b5ce606fb56f60c827d5e6ea9a4f807321f9fc4627426d305e21c1237eb81b8d', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-04 11:23:26', '2021-03-04 11:23:26', '2022-03-04 11:23:26'),
('6a27b1a96ed678501a1e4d9d02de2841cd601ef74645c0bc8906972e2fbc8ad489c646245162336e', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-04 07:25:03', '2021-03-04 07:25:03', '2022-03-04 07:25:03'),
('6a4f4b344ae056f17fc6d383a8a46f4e69191072295eb0af4566f76392291344c484f667ef96106d', 55, 3, 'Personal Access Token', '[]', 0, '2021-02-27 14:19:56', '2021-02-27 14:19:56', '2022-02-27 14:19:56'),
('6a79280501a9c044df2175843d9873173f33ba5a3cbc4a7ee9d21525bc5acb00b0c1b5331cb65109', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-04 09:54:39', '2021-03-04 09:54:39', '2022-03-04 09:54:39'),
('6b465c4c358fb587e3df320a64737351d5cd839cbedf7b0ae1eae2f4dc21c032819464015082492f', 53, 3, 'Personal Access Token', '[]', 0, '2021-02-16 10:59:32', '2021-02-16 10:59:32', '2022-02-16 10:59:32'),
('6b53dfb7c21da0de35869bf8ea23e5d2b6fdb01e1b1832fc8b691bd86877d345a3a4311874c49197', 55, 3, 'Personal Access Token', '[]', 0, '2021-02-22 12:29:43', '2021-02-22 12:29:43', '2022-02-22 12:29:43'),
('6b55743b89aed08267feb4cd577f5156f27dac93abd3448334599d5dbd3e617fcfa9e0a5aaaf23a7', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-03 13:39:24', '2021-03-03 13:39:24', '2022-03-03 13:39:24'),
('6b72ef68a1a8d683fd1f419261d7e734a8ac3049b70b332a4d65734e15d160d4ad42fe5c30663628', 39, 3, 'Personal Access Token', '[]', 0, '2021-03-06 11:06:42', '2021-03-06 11:06:42', '2022-03-06 11:06:42'),
('6b9800941f1bb8abc5f18f926e1db45146ea245848dd31e24980184a711092ff238cbc52115ca0c4', 61, 3, 'Personal Access Token', '[]', 0, '2021-03-08 07:47:09', '2021-03-08 07:47:09', '2022-03-08 07:47:09'),
('6bad583b4500641b09fcaf7e6774c8aaae295eb4963be0a432dfde616527f2ca96606390418a4648', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-02 12:35:52', '2021-03-02 12:35:52', '2022-03-02 12:35:52'),
('6bccac4117ade65c1e5b9b56612fbfc4abab100aab431a860cac30ad892a665ea16958d44f643918', 61, 3, 'Personal Access Token', '[]', 0, '2021-03-05 06:35:58', '2021-03-05 06:35:58', '2022-03-05 06:35:58'),
('6beb0454a367938399cb3444189e96ece98ea59eb8810b2184867583a046e0ea2896cfb0efda9aeb', 16, 3, 'Personal Access Token', '[]', 0, '2021-01-27 08:15:56', '2021-01-27 08:15:56', '2022-01-27 13:45:56'),
('6c15911252200410eb777871d2983fdb4319536ea527b2e3edc47e678358d994fb2d3374f803e46d', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-04 09:38:05', '2021-03-04 09:38:05', '2022-03-04 09:38:05'),
('6c5cb9548b31cd6f496d5d5f76c3c938980b4bba7903aecaa93a077406130a36a45e04d66e796b59', 55, 3, 'Personal Access Token', '[]', 0, '2021-02-26 15:16:54', '2021-02-26 15:16:54', '2022-02-26 15:16:54'),
('6c6b93b046df14eb38d556cd84ff4e464b372d8b13f3393e08b562072980dca8c5d412e28b1bbf26', 40, 3, 'Personal Access Token', '[]', 0, '2021-02-12 06:00:31', '2021-02-12 06:00:31', '2022-02-12 11:30:31'),
('6c92cc3576fdea5f42e7cef968ac6a4bce383b5eb823fe157042c454a1a37ff27986ae924faa6cbe', 59, 3, 'Personal Access Token', '[]', 0, '2021-03-04 12:13:08', '2021-03-04 12:13:08', '2022-03-04 12:13:08'),
('6d2c2a203bb11dbc0aa942529e4a01f6895e838f1084a5113168a9e363de8f6db1f7994842682fb3', 55, 3, 'Personal Access Token', '[]', 0, '2021-02-27 14:13:55', '2021-02-27 14:13:55', '2022-02-27 14:13:55'),
('6d743a6172b4b2d26438ea0201e721c2644f106d26f07ae5ae369b91b8cd875ae408157dcbbec710', 61, 3, 'Personal Access Token', '[]', 0, '2021-03-05 13:03:45', '2021-03-05 13:03:45', '2022-03-05 13:03:45'),
('6d8df27142bb44efe68a9479ca9193673820752531bce8fd56afc9f2df0928295ef10d2a93a779af', 45, 3, 'Personal Access Token', '[]', 0, '2021-02-02 23:38:19', '2021-02-02 23:38:19', '2022-02-03 05:08:19'),
('6dc027e9d1a2e04af66f1e351d932546026b81ecfeadeac1776c3fd060035ced4b861ac523109605', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-06 11:02:15', '2021-03-06 11:02:15', '2022-03-06 11:02:15'),
('6e082bf8aee02f1778902e9420e98ad9da1a9e10eb33274947afb140e71f7f7a2732c8def29104c9', 55, 3, 'Personal Access Token', '[]', 0, '2021-02-27 15:31:36', '2021-02-27 15:31:36', '2022-02-27 15:31:36'),
('6e59de032037184371a0781a200fa0e6d9c98fea2d4519bb9fda25d5bb9ec9d00ce49c0cb17a3381', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-01 07:39:26', '2021-03-01 07:39:26', '2022-03-01 07:39:26'),
('6e7dd37cda0786d4ba65cecc8ab69d0cfef0301b3c541ceb986f8dd25bb4a961bcddb136bdbf4a03', 55, 3, 'Personal Access Token', '[]', 0, '2021-02-22 11:22:00', '2021-02-22 11:22:00', '2022-02-22 11:22:00'),
('6e9b0fc7290fe3fdba6f28d82417ba0a35753a68a7795797d4261617c9f9fbf7d0b46412125d877c', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-04 07:17:06', '2021-03-04 07:17:06', '2022-03-04 07:17:06'),
('6e9de473d4422780d0b0377f42fb12fdc74035991c4846dede4b76bbebe5b51563e727a9390e537a', 55, 3, 'Personal Access Token', '[]', 0, '2021-02-27 15:13:46', '2021-02-27 15:13:46', '2022-02-27 15:13:46'),
('6f2fb6a0604f36bcbffc9a9e64c955928c99f417c845e00ff5caa4c2d2f8897b8923ba0e237098b7', 36, 3, 'Personal Access Token', '[]', 0, '2021-02-02 08:35:17', '2021-02-02 08:35:17', '2022-02-02 14:05:17'),
('6f3b0e5e34447671cd97cfd029912b4be0a5b4b9100c7ff354b8dc37aa2625ae6a29848ddae42f31', 61, 3, 'Personal Access Token', '[]', 0, '2021-03-04 07:48:09', '2021-03-04 07:48:09', '2022-03-04 07:48:09'),
('6f593a6f25ca17e0cfb46898458ae49223b5987506d49117a4fa2934718cbde4550e935c97e86701', 61, 3, 'Personal Access Token', '[]', 0, '2021-03-04 11:48:17', '2021-03-04 11:48:17', '2022-03-04 11:48:17'),
('6f753e72a73c36c4c74fe9f0d91a5ed62a2a79a5e64f16c26626a12386b049af26005a66e477a50d', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-04 08:59:18', '2021-03-04 08:59:18', '2022-03-04 08:59:18'),
('6f8b93e68f92f18bc65703b55d083a7e2f6e5a063b666b4ee540e4edd02f79f93f7d630f56b5cbca', 16, 3, 'Personal Access Token', '[]', 0, '2021-01-29 00:11:48', '2021-01-29 00:11:48', '2022-01-29 05:41:48'),
('701374e65e946516fbaf3466bc826751f7796cb8d56907d93d830feac185bc983cf99c868088d170', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-01 10:07:56', '2021-03-01 10:07:56', '2022-03-01 10:07:56'),
('702cea22b93d159b7c10700814ff40ea023184fe40dfbbbf34e8a2eb92ceadbaec8d6b58317c91d4', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-03 13:16:55', '2021-03-03 13:16:55', '2022-03-03 13:16:55'),
('7048c860290c8ca551e4def7b4b549432ae59edcaf669a8fe84e9126306834716d05b6773503e912', 61, 3, 'Personal Access Token', '[]', 0, '2021-03-05 12:54:18', '2021-03-05 12:54:18', '2022-03-05 12:54:18'),
('705c9a14888a61143e066e27a79e483b75b23c46f94ace23f57b2051c25998658cb9025f34af0b02', 61, 3, 'Personal Access Token', '[]', 0, '2021-03-09 10:28:31', '2021-03-09 10:28:31', '2022-03-09 10:28:31'),
('70d07715020a47f37ba0a76e66c6d64c71556c625d5f1563154520f7889341a174f5beec06d3e8ad', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-01 10:08:55', '2021-03-01 10:08:55', '2022-03-01 10:08:55'),
('7119fec8c3242972c959ffd20545668cd4f5bd3896f56939f6db1d8fa5c5321a80e499d6539665ed', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-06 11:07:28', '2021-03-06 11:07:28', '2022-03-06 11:07:28'),
('7164312c1df43ab49102a7ef7b447b973674b992eead18f025cfa41b69fc510b37128684b24bc6d2', 16, 3, 'Personal Access Token', '[]', 1, '2021-01-27 08:25:53', '2021-01-27 08:25:53', '2022-01-27 13:55:53'),
('73295727e4b028066af461b92c0a5d8c5becaf02a8f565797cb185bc465771ce1ca12c47cacd2029', 61, 3, 'Personal Access Token', '[]', 0, '2021-03-05 10:28:30', '2021-03-05 10:28:30', '2022-03-05 10:28:30'),
('73b36bff0e1c7b648b07314fa112beacde06df4fa82c70eca39d479184437f7585ae3d9ea1e0d012', 41, 3, 'Personal Access Token', '[]', 0, '2021-02-02 08:46:02', '2021-02-02 08:46:02', '2022-02-02 14:16:02'),
('7442f54449c99ca95b7fcc9b68defc6e6e8c7219ed0ff7376a7e81d575cf81955b7cd363bfb025ee', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-01 11:19:26', '2021-03-01 11:19:26', '2022-03-01 11:19:26'),
('74e37d049f6648f1486c86c71e8a04dec2fbe2588728468592e37e3561d368ff283e6efc9d22bdf3', 61, 3, 'Personal Access Token', '[]', 0, '2021-03-01 12:41:19', '2021-03-01 12:41:19', '2022-03-01 12:41:19'),
('74e5cade7d7fd158dccbebbabd2ed9a728c481fbe565a6c99d70612038b9b8f99f0304b0d8806a79', 55, 3, 'Personal Access Token', '[]', 0, '2021-02-22 10:21:46', '2021-02-22 10:21:46', '2022-02-22 10:21:46'),
('7555194b1ee7aa9e4d69203a446c67b4c5d6036b7bd23739728781578c78853d9c2bf5152a91eba0', 53, 3, 'Personal Access Token', '[]', 0, '2021-02-17 05:39:46', '2021-02-17 05:39:46', '2022-02-17 05:39:46'),
('761e6605bae8f0fa0d22151f165ba2860665e7b27e355ee345ba19241690047f2dc9597b4e6ab73a', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-06 12:55:47', '2021-03-06 12:55:47', '2022-03-06 12:55:47'),
('76af98d4d528ea753a763d26969dcf76f2cae97e198785b5ecc486cb3d3175d6d668b4ba21eb1e9a', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-04 10:17:39', '2021-03-04 10:17:39', '2022-03-04 10:17:39'),
('76bbeba049a3dc530ed206693a64fe1e630a4f8ca52359bb41358cc1c5a4550330b567f5ee6feefd', 61, 3, 'Personal Access Token', '[]', 0, '2021-03-09 05:19:03', '2021-03-09 05:19:03', '2022-03-09 05:19:03'),
('7739e093b2ead842eeb8a98da1525085c0c16851237c2ecf903b9270278bf964614e3ebd8544e478', 39, 3, 'Personal Access Token', '[]', 0, '2021-02-27 10:53:25', '2021-02-27 10:53:25', '2022-02-27 10:53:25'),
('780f6ec070ba2edf78fc8082ac3ce136737bc36f9374576181a5f3e7f9e7726817f09252d7027fe0', 61, 3, 'Personal Access Token', '[]', 0, '2021-03-05 13:53:57', '2021-03-05 13:53:57', '2022-03-05 13:53:57'),
('78518c66d7652a946d86157d08221457dd219271cb08a6d15b9a4d1a35fb8b698a23c6bb2863f397', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-01 13:16:06', '2021-03-01 13:16:06', '2022-03-01 13:16:06'),
('78630e22dddc5e4cffc2e50c239a548dd5629281a21005e2cdb3c6c9a2f03d30d16cc6df0bf9ea11', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-02 09:41:01', '2021-03-02 09:41:01', '2022-03-02 09:41:01'),
('788ce185ab8367ba5af6ace8270b88ce524bd9551b49ebc259ae012fdd868b0908fb095ad2e11a46', 42, 3, 'Personal Access Token', '[]', 0, '2021-02-02 08:46:12', '2021-02-02 08:46:12', '2022-02-02 14:16:12'),
('7938064f5ed446710dbdb22cdcec113557e09871b58033b13a6d90cabda855f937d40f0e2cb6a0fd', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-04 10:15:49', '2021-03-04 10:15:49', '2022-03-04 10:15:49'),
('7979d545156e00d24336a7b5c890d47d3ff1e95f77273cee5189a13a1d55af8a3c6490a14afc04ab', 61, 3, 'Personal Access Token', '[]', 0, '2021-03-01 14:54:09', '2021-03-01 14:54:09', '2022-03-01 14:54:09'),
('7979e55a4ea3526896caf3c21ace02d5154335cf865241ddc509eca08ee8d1beccf0872d77233dad', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-02 11:51:57', '2021-03-02 11:51:57', '2022-03-02 11:51:57'),
('7b5efa0fcd80948030f27a41bd3a97e6e29cafd330805960e422dd3a2edd9974d16873adf93d6162', 53, 3, 'Personal Access Token', '[]', 0, '2021-02-16 09:19:57', '2021-02-16 09:19:57', '2022-02-16 09:19:57'),
('7b71222d1592e0012a89858b68bf49d120c58a800777a5aef678a25eafe8199d528c2669cbe5b557', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-01 14:02:12', '2021-03-01 14:02:12', '2022-03-01 14:02:12'),
('7b94c37a289495334938c4a534939530ce89a67e6657b03736838af977e1047b1c834de9771a5d16', 61, 3, 'Personal Access Token', '[]', 0, '2021-03-09 10:11:38', '2021-03-09 10:11:38', '2022-03-09 10:11:38'),
('7bf5960d9335de5a0a35ad543d6d29ed5da96d4f226659729bf62ebb2d9bdd8e7156ea9b7b3cef35', 61, 3, 'Personal Access Token', '[]', 0, '2021-03-03 07:43:30', '2021-03-03 07:43:30', '2022-03-03 07:43:30'),
('7c655235422884f9512e0794132a0db75bb57713f3d3d17d3542c4b931e2e3e53265d0261f40097d', 59, 3, 'Personal Access Token', '[]', 0, '2021-03-01 07:12:32', '2021-03-01 07:12:32', '2022-03-01 07:12:32'),
('7ca937e7f94d2e3f7471b29bd197dc034c27a669d31b8ba3c3b195746ee4a286446bf61895c98a4e', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-03 14:05:47', '2021-03-03 14:05:47', '2022-03-03 14:05:47'),
('7cd93dfc5f8bec289aef6f687fa0ab760ec2970b284c2d9469ae9e1c1cdfa137ca297fb10d28344c', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-04 10:32:04', '2021-03-04 10:32:04', '2022-03-04 10:32:04'),
('7cfb6a3a1473ce5d756638821a74a459e0ab4dbdb4275f04ff98b5d4639dae4fd082f3eba6b138e6', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-04 09:02:39', '2021-03-04 09:02:39', '2022-03-04 09:02:39'),
('7d0444f5666e922df8b56aa5ecb8e7d3bae57d7dcad7478f5abd2a10991acc2eb36b7e52105e654c', 61, 3, 'Personal Access Token', '[]', 0, '2021-03-05 06:46:28', '2021-03-05 06:46:28', '2022-03-05 06:46:28'),
('7d24ca9969208252245b5037abc12a852ab53257f548426f4a3b97d6f5f34c52a2c079e4965a1d61', 61, 3, 'Personal Access Token', '[]', 0, '2021-03-02 10:12:06', '2021-03-02 10:12:06', '2022-03-02 10:12:06'),
('7d29921e0fb23e6bcf72b84dfa41b81515c1c80c7993f7406d58d3fc1762093a9aee5fbbeee84105', 16, 3, 'Personal Access Token', '[]', 0, '2021-03-09 07:41:21', '2021-03-09 07:41:21', '2022-03-09 07:41:21'),
('7d4e9ea9634a84f92cfb290cce941fe81a740d6d0afc3e50f67859397192b1bb29807e4930adec02', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-04 11:18:55', '2021-03-04 11:18:55', '2022-03-04 11:18:55'),
('7d7567f95d441888312abdfc3c8e132a7b76b6326635b5cea820c6ee784612f154819e4929bec1b1', 74, 3, 'Personal Access Token', '[]', 0, '2021-03-18 18:59:59', '2021-03-18 18:59:59', '2022-03-18 18:59:59'),
('7d9c760a497aa587af233956f0d3c443d4ff0549a3b0c40e3d8bb84a97b598874a25be1d7f6ddaf9', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-04 10:56:11', '2021-03-04 10:56:11', '2022-03-04 10:56:11'),
('7e5549431d948210f7b95cce56c892eff2e7da289eff7777ece81c690542b6d6e4a68764c18dc1d9', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-06 10:51:10', '2021-03-06 10:51:10', '2022-03-06 10:51:10'),
('7f295aad6a8c05d7e38494769a137ea93b39ff70082c5ecbdaa8a1bd118814e9c5c0c8af96b54d63', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-04 09:29:38', '2021-03-04 09:29:38', '2022-03-04 09:29:38'),
('7f407a01f3cf1af7c9fcc41bd7b8e5ba6ea6e837e1b28efcd39b5e5a64b020e010638d270d05f9e2', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-04 09:44:46', '2021-03-04 09:44:46', '2022-03-04 09:44:46'),
('7f4e439714a600ae1d57a5467e125eda27d2f4a22fc4d8f38ea278e7de887e7662d7fa2897da6d83', 61, 3, 'Personal Access Token', '[]', 0, '2021-03-06 07:11:58', '2021-03-06 07:11:58', '2022-03-06 07:11:58'),
('800065a04639d924b25a11fbef2736d39184286ae55aca52d4e0233877442c37571c9fce2025bf39', 61, 3, 'Personal Access Token', '[]', 0, '2021-03-05 15:18:26', '2021-03-05 15:18:26', '2022-03-05 15:18:26'),
('802189f927bc5ff45cb7b80e23e578340f98f8edec8ef25d9b1cb340b853d86c3cbe1b87290eb745', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-01 10:06:34', '2021-03-01 10:06:34', '2022-03-01 10:06:34'),
('802760c4acd33e2382a6d3289f8088c13085fc5e3f3fc6282d6fea11c5495de0055d6c9161224a70', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-01 09:23:08', '2021-03-01 09:23:08', '2022-03-01 09:23:08'),
('80686f50b522fd16f2230421a703dae7b3cad75ad1ab1fabdbb7dcad770228803e93e7dcbccfb7e3', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-02 12:19:09', '2021-03-02 12:19:09', '2022-03-02 12:19:09'),
('80cfd9ae648010b2a3a4bb704763a1a04f3b310e21df8c394b06d260e4f7f3c3bca00bbf8e484e64', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-06 10:23:21', '2021-03-06 10:23:21', '2022-03-06 10:23:21'),
('80e03da74f1738c836e8e797abcf58340c2bcba329a1e2bad0d62217a933185d0f527aff55e9d83d', 61, 3, 'Personal Access Token', '[]', 0, '2021-03-02 12:54:17', '2021-03-02 12:54:17', '2022-03-02 12:54:17'),
('8103f491f69a841ba64d8cb0030acabc8732796a1391944f21e4c4019522c95c8459789a08dce27d', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-06 13:16:13', '2021-03-06 13:16:13', '2022-03-06 13:16:13'),
('8157315a64cf4f7937f4af2976dd880ca114519ff648b6ee21716581c6bced9abd64bdfc260c35bb', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-01 10:04:56', '2021-03-01 10:04:56', '2022-03-01 10:04:56'),
('818abee4d9964ba28a7c54612dbbb95913873f34ec3aaa557fcebbf7516e173ab20172475e21b740', 66, 3, 'Personal Access Token', '[]', 0, '2021-03-03 14:57:09', '2021-03-03 14:57:09', '2022-03-03 14:57:09'),
('81beaca4d8d9161283fdd9a55d3ff20e223df05ee0c95faebaf5e3bd232f7540730810eaadccba76', 55, 3, 'Personal Access Token', '[]', 0, '2021-02-27 14:15:03', '2021-02-27 14:15:03', '2022-02-27 14:15:03'),
('81c6f949aa8036d6afad674173aa1116cb20f5aa780d9d78c810aa48c166b04b99499a83bf238059', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-03 08:51:36', '2021-03-03 08:51:36', '2022-03-03 08:51:36'),
('81d6f15b59926c93640d77458697884d5c77ff6e822a922ebe1dd53eabeaf3f1f7c0ff8d7f9fe2e8', 55, 3, 'Personal Access Token', '[]', 0, '2021-02-22 10:20:37', '2021-02-22 10:20:37', '2022-02-22 10:20:37'),
('823625f362adfe3d5c4cd74c8f8aa27c3045ebc9094721a5e4e92bec5379dfc5fa0f645e708925ee', 55, 3, 'Personal Access Token', '[]', 0, '2021-02-27 12:57:41', '2021-02-27 12:57:41', '2022-02-27 12:57:41'),
('8255390c6c2cdcbc07fbdf98647933a21548f1ec974ee317901df94901684c366f582ccb31ab161d', 53, 3, 'Personal Access Token', '[]', 0, '2021-02-17 13:33:36', '2021-02-17 13:33:36', '2022-02-17 13:33:36'),
('82d06ae5ec0ea3fde9229a994cdcb8f6c8686bd16184dffdd689689308f102a2413c369d22b3805f', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-02 05:36:20', '2021-03-02 05:36:20', '2022-03-02 05:36:20'),
('83080f17ec56fef9a76a4c6037e3f51675e956016d7196eeff38a859da96d594621fb94f0849584c', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-03 14:18:24', '2021-03-03 14:18:24', '2022-03-03 14:18:24'),
('830b2f6fbc9ef2cb50d6e78059dee32080c389e819e03508b5ed568278cfc571fbd82c8b16fa632d', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-01 10:13:01', '2021-03-01 10:13:01', '2022-03-01 10:13:01'),
('834121290e161f6c6eae76cff9b6ebf731c0d46dd30267c2ab9721ef6067926c10ed64c81fc8d6b8', 61, 3, 'Personal Access Token', '[]', 0, '2021-03-09 09:39:28', '2021-03-09 09:39:28', '2022-03-09 09:39:28'),
('8375f57b4db650cee7b977d0bc7306994918eef21cf8c998df2cbb88a3df8f4d6e0fb150b5fbe62a', 55, 3, 'Personal Access Token', '[]', 0, '2021-02-27 13:00:41', '2021-02-27 13:00:41', '2022-02-27 13:00:41'),
('83ca2b23aa7d7412103a3351a0abd6ddeda1386d25bbd9f252374fbad4f030df4e71d59dbfe457fe', 53, 3, 'Personal Access Token', '[]', 0, '2021-02-16 14:13:47', '2021-02-16 14:13:47', '2022-02-16 14:13:47'),
('844ce4feebd9a06c96d25d016b47984a27fa79c281901c9d9562278504799ae6c67a9b9e7b3d5dd2', 55, 3, 'Personal Access Token', '[]', 0, '2021-02-27 14:34:16', '2021-02-27 14:34:16', '2022-02-27 14:34:16'),
('84df2842456902b13fe4fadb05688e91a1bd73c5b79aa5ebec80df2563fbb9e3a912e0c3480ced8b', 65, 3, 'Personal Access Token', '[]', 0, '2021-03-03 14:52:48', '2021-03-03 14:52:48', '2022-03-03 14:52:48'),
('85f5a1d726e331e120ce8f05a726058b7dbddda8608adc0978a3e0c2588a691cbb4051c5d17aad25', 55, 3, 'Personal Access Token', '[]', 0, '2021-02-22 11:19:40', '2021-02-22 11:19:40', '2022-02-22 11:19:40'),
('8601031b5ab5f095b0db958cf7dd42131563c7298bcc283b9de4a4c275f212d9027d0cb8df12291c', 53, 3, 'Personal Access Token', '[]', 0, '2021-02-16 10:47:34', '2021-02-16 10:47:34', '2022-02-16 10:47:34'),
('86092ea524a6d2c4982c3f857dc899afdac37a71365bf4deb219bfcedb9f2cb03b6a38bcae85478e', 61, 3, 'Personal Access Token', '[]', 0, '2021-03-05 07:05:40', '2021-03-05 07:05:40', '2022-03-05 07:05:40'),
('870c07b7c87ee6d9b2aa694c7f74f2b1210a77087282ff0767d7197692c99ddde8dee4e471c8f71d', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-02 08:56:30', '2021-03-02 08:56:30', '2022-03-02 08:56:30'),
('874189a14bab44006eadd7043a77e773f8bb513df5ae778a92bf5e4ec53284ff93aec401b9b84965', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-06 11:05:15', '2021-03-06 11:05:15', '2022-03-06 11:05:15'),
('875144b5735b445d85ac3ec320f01c0b3ebf92d2f9f576a5909681b974fd51635c5ffde867e70549', 55, 3, 'Personal Access Token', '[]', 0, '2021-02-27 15:19:06', '2021-02-27 15:19:06', '2022-02-27 15:19:06'),
('8771e312b48f0cfc4ad8cb4d7ccac79a84901a3c2c4149d19456d04337a1f60923f39d8ba7514584', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-01 10:14:05', '2021-03-01 10:14:05', '2022-03-01 10:14:05'),
('87b18f8add9c3ccc8c85eca8ba5ffbb0dcaa19dd9307c40c1be6684d6b7443a61ca5777d82d74d8c', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-02 11:04:18', '2021-03-02 11:04:18', '2022-03-02 11:04:18'),
('87b36750e45641f8ed620c9d2dee9afe0fc6a6a69a5eb6c0b9fec464b3eb4cd3b6a8c739b0aa2a74', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-02 11:30:58', '2021-03-02 11:30:58', '2022-03-02 11:30:58'),
('87ebfb2ec7cac411cd468aad533d604cd2f6d1e8f86e802739a951d82b0f26205fa6dd89fb40d4ad', 61, 3, 'Personal Access Token', '[]', 0, '2021-03-09 11:01:10', '2021-03-09 11:01:10', '2022-03-09 11:01:10'),
('887158c4f4a150ba5116231c91e9e073f48071207a4f153bc6307ce6fcca66623ab4259df4a3dab7', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-04 10:54:14', '2021-03-04 10:54:14', '2022-03-04 10:54:14'),
('89172f47538d2adbbfbb47db8987d0d4ec9ac0593373a57a59eb4dad636e8a2f849db2788519217f', 55, 3, 'Personal Access Token', '[]', 0, '2021-02-22 06:57:19', '2021-02-22 06:57:19', '2022-02-22 06:57:19'),
('896df86c1144c9d25bb479ae55bfa3c257b79d0bd1acf6360820b8a28ac156689cefe57d250f13a0', 61, 3, 'Personal Access Token', '[]', 0, '2021-03-02 12:14:43', '2021-03-02 12:14:43', '2022-03-02 12:14:43'),
('8a493f0d84f915e2d54e961e705be516974b6daac730871f9f9992d631a3d6c1028a10fda23ac0fe', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-04 10:06:42', '2021-03-04 10:06:42', '2022-03-04 10:06:42'),
('8a6318699c1ea655d791188f79723861478912ec1e882d426f659de317ca8f64b2316b691b50d434', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-06 13:19:10', '2021-03-06 13:19:10', '2022-03-06 13:19:10'),
('8a9d0481b4dd89f5a15089bfff7097cb90fed1806ee902cc8e559685b3858ce238de005a6cc1c9a5', 61, 3, 'Personal Access Token', '[]', 0, '2021-03-05 05:45:05', '2021-03-05 05:45:05', '2022-03-05 05:45:05'),
('8aac1e7c106c2d935e66794a792f2d7ff046910e500609e6b34fafdc84b3da4583e55288a014e7c5', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-02 12:41:15', '2021-03-02 12:41:15', '2022-03-02 12:41:15'),
('8ada9d1e0501ca8016478bb81056fda675b9e4d4b8d171c96c3c7845eefdc7e798d870d2cc09bb96', 55, 3, 'Personal Access Token', '[]', 0, '2021-02-27 11:48:15', '2021-02-27 11:48:15', '2022-02-27 11:48:15'),
('8af965bb0d116aae71417cde5966ba42941e54547ada18ee10b81dcefeb3840b2bc63dfdc0fa28f6', 61, 3, 'Personal Access Token', '[]', 0, '2021-03-05 13:02:32', '2021-03-05 13:02:32', '2022-03-05 13:02:32'),
('8b7a2849ccf4a6835f597d56b0451b5accf518bfb341c6d1c33186411fe614d5418b8e8b36e8b7c6', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-01 10:20:18', '2021-03-01 10:20:18', '2022-03-01 10:20:18'),
('8bc0af4d13fe6f98aaf7549bfcd4a069dd4d1c48a06c5f2bacffb716a40146d2c70f75f492444e5a', 61, 3, 'Personal Access Token', '[]', 0, '2021-03-02 12:21:13', '2021-03-02 12:21:13', '2022-03-02 12:21:13'),
('8c2c63aec262d6bbbbd82760726adf6aa96347b35c2e1ed9726ddd7ea45922d81e10d1c170fc6de5', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-06 13:04:44', '2021-03-06 13:04:44', '2022-03-06 13:04:44'),
('8cc3384bdfe8affc042b7c8bf5b50f8b777935b7a9d0d8ccb2676b0c6ca93eaad9d47389dfe5253c', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-05 14:07:47', '2021-03-05 14:07:47', '2022-03-05 14:07:47'),
('8d5ad64f9176a4382ed39a2629abcc3ceb72037bfd9dc530a5c245d5c48c5e171a7e7d13368b49b5', 55, 3, 'Personal Access Token', '[]', 0, '2021-02-27 15:31:23', '2021-02-27 15:31:23', '2022-02-27 15:31:23'),
('8dfc2342883efc3bb6235e22956e8912ec5a551b2d341a124d26b4430ab6d1d60f2348d6a8fa65da', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-03 12:59:47', '2021-03-03 12:59:47', '2022-03-03 12:59:47'),
('8e82caeb064797ea9ce1e5f6f18210b35eda3de9c69401692014a91f4dbb5b0f189f966ab5d76fc9', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-01 15:30:12', '2021-03-01 15:30:12', '2022-03-01 15:30:12'),
('8e9abf1c30ff03732ba7e3e3de6e76fad1f70079207f1f73b61e5219db7a9889b6132c4538ec6dfc', 61, 3, 'Personal Access Token', '[]', 0, '2021-03-06 09:16:36', '2021-03-06 09:16:36', '2022-03-06 09:16:36'),
('8ea4ab9323db6e28c84e5ea9e9547b3f51a36a8f5bed945e427aa57c9b8708c3a23064706a431b6c', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-04 11:21:52', '2021-03-04 11:21:52', '2022-03-04 11:21:52'),
('8ebcd0cb1752b21ac9f7e0a079b05a82e0ef88cef8cde7261c7cf00e36da9060f25225182879bb3c', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-01 06:59:16', '2021-03-01 06:59:16', '2022-03-01 06:59:16'),
('8ec532beb23bf31390a9a79432778174cc4dc28b5d7f5dbf8f4aaba0d6e1e9420afdbf2abf949d06', 55, 3, 'Personal Access Token', '[]', 0, '2021-02-27 14:33:35', '2021-02-27 14:33:35', '2022-02-27 14:33:35'),
('8f10d9e8f3dcb531ac4591699301176b1f642d8997e875554aa7b91f63ee23e36cdfadfb1ceecf0a', 61, 3, 'Personal Access Token', '[]', 0, '2021-03-08 05:11:17', '2021-03-08 05:11:17', '2022-03-08 05:11:17'),
('8f4c661f9a4ad676936882d1813b99a73725f19f0738b47314d0c7132d013785bd0864ef495cb8da', 55, 3, 'Personal Access Token', '[]', 0, '2021-02-27 14:36:07', '2021-02-27 14:36:07', '2022-02-27 14:36:07'),
('8fc89cb15bc32d3c572db3c9aee527922b1d8f3428c6edc3b19be7d9dffbcec4e277d768691bc2d8', 53, 3, 'Personal Access Token', '[]', 0, '2021-02-16 13:45:13', '2021-02-16 13:45:13', '2022-02-16 13:45:13'),
('8fe82c5fb581d8f642e7ad7beb9608447c9ba3fbd081f8627918a28cf12bd071defbf3ce19f48fd4', 53, 3, 'Personal Access Token', '[]', 0, '2021-02-17 13:36:33', '2021-02-17 13:36:33', '2022-02-17 13:36:33'),
('90aee6b369301ce5f418b6188c06d312cc7381d7818c71d0e9c103d76c91937feb45fcdbc6a7fde8', 55, 3, 'Personal Access Token', '[]', 0, '2021-02-26 15:32:23', '2021-02-26 15:32:23', '2022-02-26 15:32:23'),
('90b81c938968108634a93c0f6a60b3d73deec6c203edb604a3e4dffc09a4a268919f9b7210e75e8e', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-02 10:01:01', '2021-03-02 10:01:01', '2022-03-02 10:01:01'),
('90bc6a26076665206ed8ca344d4e02c2a81ac118947fad788721c84683208485700c0145f18e46a4', 53, 3, 'Personal Access Token', '[]', 0, '2021-02-16 09:34:43', '2021-02-16 09:34:43', '2022-02-16 09:34:43'),
('91326e2a0edd049cab9c55ce7eb07e4916eed333cce75e2e75620e6cbfd77f4f41d99761588ec717', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-04 09:05:34', '2021-03-04 09:05:34', '2022-03-04 09:05:34'),
('919dcb3d6ab006eec0caaf42937e7b6557dc0d2a9b9268ba42b323a370969d989bbc51ce2bf438dc', 68, 3, 'Personal Access Token', '[]', 0, '2021-03-03 15:09:46', '2021-03-03 15:09:46', '2022-03-03 15:09:46'),
('91b2aec255ebbed24ba145b98f89e322b9084828beca0319b7531dc147d5f626465efb661f5d21a6', 39, 3, 'Personal Access Token', '[]', 0, '2021-03-01 06:10:25', '2021-03-01 06:10:25', '2022-03-01 06:10:25'),
('91e051b5d7ba57267fa2a7bec473110b0a36f4c1e1be4fd50472a536986b2f09c1855dbaa9b83f39', 55, 3, 'Personal Access Token', '[]', 0, '2021-02-27 12:05:25', '2021-02-27 12:05:25', '2022-02-27 12:05:25'),
('935a8e5e52c323c2d80aaa35aa2f2933de5e95f9bab349afb3aa2e2130b8895750a0e5ec8f70846c', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-01 13:17:44', '2021-03-01 13:17:44', '2022-03-01 13:17:44'),
('93663386dacb8f038d0d5126ab2ce1481d65bfb38ad6ee70d1a78dde2c0b698f3defc6e4bed0fbb0', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-06 10:58:19', '2021-03-06 10:58:19', '2022-03-06 10:58:19'),
('9366a96b0549ba937b41fb27e7bbaca438a70ac757c70f0fb8e1045b30b0db078951aede6fd915d3', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-04 10:47:54', '2021-03-04 10:47:54', '2022-03-04 10:47:54'),
('93db08e9a6d5342d1505b2afd6f787c002ecc4ad650b6ebb4da6e7d47b0b088b8bfe689d8d3cd1ac', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-02 05:37:52', '2021-03-02 05:37:52', '2022-03-02 05:37:52'),
('9426f6ee6bfe4a14cce714a2b7610574215eb4a054409d44c4e2e7960bb010d8f33ed3aa3344821a', 61, 3, 'Personal Access Token', '[]', 0, '2021-03-08 07:26:04', '2021-03-08 07:26:04', '2022-03-08 07:26:04'),
('94c9571c277568aed819db5b2f85e6039d3658d757a845fbf357f9170bb6dacfebae63344533dd4a', 39, 3, 'Personal Access Token', '[]', 0, '2021-02-24 09:12:13', '2021-02-24 09:12:13', '2022-02-24 09:12:13'),
('94d71eab7e7c79b5a0871161798e5e5f985c5d22d0c7c060bd6aee4d56675f594dba8bd857ce8565', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-04 07:22:21', '2021-03-04 07:22:21', '2022-03-04 07:22:21'),
('94db553f2a7c3aef2034fdb02ae4f0f695a2a58e79fed1eb29f2cd4880fd695f357b9b6cce96c066', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-04 11:17:20', '2021-03-04 11:17:20', '2022-03-04 11:17:20'),
('950b1214968c5dc696bd202409bce60d93209c529a8894002125dfa40b07a1a1b4b62ac3f9292f69', 16, 3, 'Personal Access Token', '[]', 0, '2021-01-27 08:26:17', '2021-01-27 08:26:17', '2022-01-27 13:56:17'),
('95154502933b8d3522f9f951a2743b7945453e2c01c3c4c97d2646a925e93e602bda89a4afeae374', 37, 3, 'Personal Access Token', '[]', 0, '2021-02-02 08:35:24', '2021-02-02 08:35:24', '2022-02-02 14:05:24'),
('951f3dc7105f6ba4afa0181ab8e02be660d2821e721f96837217c98bb93de1706fb5239a9f7a41f8', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-01 09:51:09', '2021-03-01 09:51:09', '2022-03-01 09:51:09'),
('95793d5b2e54066644dce554b0b608e8a4130c71356a1cbe08ab769279ebd76a35dbe7b24f7a161d', 61, 3, 'Personal Access Token', '[]', 0, '2021-03-01 11:10:58', '2021-03-01 11:10:58', '2022-03-01 11:10:58'),
('95826ce09068b5c3ab71f66da5a326a6d778a6fff325d79cb817a204751e57bd89c4733640a64058', 61, 3, 'Personal Access Token', '[]', 0, '2021-03-06 12:11:16', '2021-03-06 12:11:16', '2022-03-06 12:11:16'),
('9605af812ed019ce923ddf72aa71f2bb4b315322d24c8f4c779e0c4840bd06411e95dcfc7e371894', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-01 13:13:23', '2021-03-01 13:13:23', '2022-03-01 13:13:23'),
('96842fc44d3aa446ed2de397e771efd1379188576a158e7448885616c8e3bb0ff72532e1e9d5f615', 22, 3, 'Personal Access Token', '[]', 0, '2021-01-29 00:35:10', '2021-01-29 00:35:10', '2022-01-29 06:05:10'),
('96fda964b2428b9f10e1e517bb68a2456ece6f5a0564593d26c62e7e02492c67e0a698aa71282e5b', 61, 3, 'Personal Access Token', '[]', 0, '2021-03-05 11:35:14', '2021-03-05 11:35:14', '2022-03-05 11:35:14'),
('97685fa67e265cf47ddf8bfed2e5d554aea571fb44e2e50750cf60bae8efee31147ada2e05f56ab4', 55, 3, 'Personal Access Token', '[]', 0, '2021-02-22 05:34:54', '2021-02-22 05:34:54', '2022-02-22 05:34:54'),
('979e2f0e3ef60b4152d8184e0ff96665b6ffd9e03c74410d87a1bf38c188b670c67ed6467a16ea79', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-03 12:53:44', '2021-03-03 12:53:44', '2022-03-03 12:53:44'),
('9806179387b3e5c94de542179e5e4cfff227a70f82dc2503ad874edb4557024ff25d2027a3f6a068', 61, 3, 'Personal Access Token', '[]', 0, '2021-03-05 12:36:39', '2021-03-05 12:36:39', '2022-03-05 12:36:39'),
('980da9f51a96ba0ec9d33a8cd26ab5b5feb7c5adaeb6822d717284bcbc0bf98109eba4d2f6492d38', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-01 07:35:35', '2021-03-01 07:35:35', '2022-03-01 07:35:35'),
('982b299f003d35c87014b4c046beb85527a770be3edd2804847f13d5ff1611df87dbb1bb6a388568', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-04 10:33:00', '2021-03-04 10:33:00', '2022-03-04 10:33:00'),
('9841fdf67546d502a70a3db7123d42f77fbafe0d93ddbd928fc904d7f73309afaf645bfd8b811e81', 53, 3, 'Personal Access Token', '[]', 0, '2021-02-16 13:46:28', '2021-02-16 13:46:28', '2022-02-16 13:46:28'),
('988780f19f2c1e0d3f5449a137c51aad4de56d96cbef61dd5e835bb892570c5453c72329a834f388', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-02 11:53:49', '2021-03-02 11:53:49', '2022-03-02 11:53:49'),
('98e0f74897da775a9253054eb08bb8995aa87b55bc12c1111352c7caacd472c5bad2d4d789f557cb', 16, 3, 'Personal Access Token', '[]', 0, '2021-01-27 08:13:28', '2021-01-27 08:13:28', '2022-01-27 13:43:28'),
('98e49c838f6f735665151db45c2b7390b2a121f59e7d413bb30ca6c1046688ac57f676bba41e52d6', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-02 10:45:53', '2021-03-02 10:45:53', '2022-03-02 10:45:53'),
('98f9bbfd21a302bfd50a4db25d81b7ddf2a13452125b8fc8e25e665e93b850bf0a99520a6932c018', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-05 14:28:19', '2021-03-05 14:28:19', '2022-03-05 14:28:19'),
('9900cffd774e011bd9b6e392a51eae51fe6509249f39af8bbaba80c5242ba454e22e2604be1b0672', 61, 3, 'Personal Access Token', '[]', 0, '2021-03-02 08:05:57', '2021-03-02 08:05:57', '2022-03-02 08:05:57'),
('99eb5aebc98294b296945a93bd7b3d4f7120366b5d0a001166e1323e977121551247e660f40ceead', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-02 10:17:33', '2021-03-02 10:17:33', '2022-03-02 10:17:33'),
('9a150d6cf5c6946651f644641f62a110ecf9491258194c21685c71cea05a736d695df18b33a7c99e', 55, 3, 'Personal Access Token', '[]', 0, '2021-02-27 11:22:03', '2021-02-27 11:22:03', '2022-02-27 11:22:03'),
('9a185bac178a59fb4dc96d909231b89acf7d88293342e7e5b2fbe3406997a408ad352e4736e79a5e', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-04 09:28:31', '2021-03-04 09:28:31', '2022-03-04 09:28:31'),
('9a2b1c1cc0d01df81116089808babf9df3575b621cc0a79706057df7842588fd9dc893e6d1dc8834', 39, 3, 'Personal Access Token', '[]', 0, '2021-03-01 14:43:23', '2021-03-01 14:43:23', '2022-03-01 14:43:23'),
('9a4f92dc3bb25ddd8877bd554d39097177780877dea679d652bcce5a25dcb308368348396ceb6fab', 55, 3, 'Personal Access Token', '[]', 0, '2021-02-22 10:39:39', '2021-02-22 10:39:39', '2022-02-22 10:39:39'),
('9a594804b5a8590bf58a78f17963a42e831e511a24f4f944b2293e087a3e3447200a36b61d989c32', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-05 13:56:08', '2021-03-05 13:56:08', '2022-03-05 13:56:08'),
('9a6816c3ada6b73e406ab4d15f179017ac7b270e6aa6a6ba0928274f05cd7b88a005fbfb5085be53', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-04 09:38:47', '2021-03-04 09:38:47', '2022-03-04 09:38:47'),
('9add83f2128df5190bf5f79c97b00a5a69f180e7556e310480021bcd081611ff3fe2594936f3a278', 55, 3, 'Personal Access Token', '[]', 0, '2021-02-22 06:59:20', '2021-02-22 06:59:20', '2022-02-22 06:59:20'),
('9af880af8baac596596cad3dbe7ebe5437680bd3427d710837cbbfb1a030d97a8b92fe679ec29de7', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-03 14:38:22', '2021-03-03 14:38:22', '2022-03-03 14:38:22'),
('9bc81a4c6c2d9b1f570eb6186c89dc8e1d419ca2c7b50ac9428e1d79f187d3df0f988d33e5a2ed85', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-03 15:18:52', '2021-03-03 15:18:52', '2022-03-03 15:18:52'),
('9bcd76212bcac7a655d38fc81c026b17025e4318de87097d237c7c7a8278db8bde8b27addf648b6b', 39, 3, 'Personal Access Token', '[]', 0, '2021-03-06 11:04:58', '2021-03-06 11:04:58', '2022-03-06 11:04:58'),
('9bdee3cc208ab3219ac1e4156b22aca4d9bf401bad0dcf916771d1c891f10712547e4a5a8c82018e', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-04 08:50:15', '2021-03-04 08:50:15', '2022-03-04 08:50:15'),
('9c298b1dbc9879cc3918cd5e50cc9814922b00fb0c65313c26b96c96328321495e067085fc0e86e3', 61, 3, 'Personal Access Token', '[]', 0, '2021-03-08 07:32:05', '2021-03-08 07:32:05', '2022-03-08 07:32:05'),
('9c62c1b7737c9434b9c2a0ff06876cd1dd8a2f1456d33ec1d103b5fbd8cc320de97b3c7ef800f048', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-04 10:40:03', '2021-03-04 10:40:03', '2022-03-04 10:40:03'),
('9c742df034268fc1cdebd5a934f7173043b960eb0fe9a4b44da0ef4f19cc29cdf19e5e121c6cc0b7', 61, 3, 'Personal Access Token', '[]', 0, '2021-03-01 11:36:05', '2021-03-01 11:36:05', '2022-03-01 11:36:05');
INSERT INTO `oauth_access_tokens` (`id`, `user_id`, `client_id`, `name`, `scopes`, `revoked`, `created_at`, `updated_at`, `expires_at`) VALUES
('9c82965689bb750227101a48ce95342ae5e0a6ee23503ef0d1f5c0619f53bc0b57eaa4333c71a199', 53, 3, 'Personal Access Token', '[]', 0, '2021-02-16 09:52:42', '2021-02-16 09:52:42', '2022-02-16 09:52:42'),
('9c8c61a13301027b75eac03f584f0505f5f3a26bfbc21309934b2ab9998a561c0d7003071955e6c5', 61, 3, 'Personal Access Token', '[]', 0, '2021-03-08 06:48:37', '2021-03-08 06:48:37', '2022-03-08 06:48:37'),
('9cd9f72f88724a132cee9fe2c697bac9731bfc7f651c541229af9f548b477b938ba3328e0ad940f9', 61, 3, 'Personal Access Token', '[]', 0, '2021-03-02 12:52:58', '2021-03-02 12:52:58', '2022-03-02 12:52:58'),
('9d52ac40441616d2da9163683604c43be38870ef661bde006c823b63da5f01ad2b284aac2b59cd19', 61, 3, 'Personal Access Token', '[]', 0, '2021-03-02 03:52:48', '2021-03-02 03:52:48', '2022-03-02 03:52:48'),
('9d7128c200ab8728f6113515a50c9875615afd5eb3e22cf5bdbd60d44aa6f18abb065a5580e6ac54', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-02 11:11:44', '2021-03-02 11:11:44', '2022-03-02 11:11:44'),
('9dd7def1bfbb535c1511ced5d655425f85bf9e5b682fc3266dd50781d8deb2205c209c0f8195f84c', 55, 3, 'Personal Access Token', '[]', 0, '2021-02-27 13:06:50', '2021-02-27 13:06:50', '2022-02-27 13:06:50'),
('9e0fbbf304571e76f1fb027da82f24f0c039834d1bf5613534092339f3b0045dc01b6ddb2672f0ea', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-03 09:11:47', '2021-03-03 09:11:47', '2022-03-03 09:11:47'),
('9e20e7d6cf54dcc31d01d676ce7e7f2897f94eb60c7b9d28e31172fd3e7819d0c853e01cb756c316', 55, 3, 'Personal Access Token', '[]', 0, '2021-02-22 07:58:06', '2021-02-22 07:58:06', '2022-02-22 07:58:06'),
('9eae5a845eee955b1c82a3878c375f5da828aaa22b1af139546386543f25325c6c72304bba9801c1', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-04 10:17:20', '2021-03-04 10:17:20', '2022-03-04 10:17:20'),
('9f08ebfc2cfe6646b70bd631c36ff43382e5e12bc38b8151a5f3c5c9e49dce88d24297477b9c8938', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-03 09:27:17', '2021-03-03 09:27:17', '2022-03-03 09:27:17'),
('9f14bbf982b151928d1ca5fb5c4e2745eeb74e7ff836784896a6d9d0209b2cf2e82382a42f01957f', 55, 3, 'Personal Access Token', '[]', 0, '2021-02-22 12:01:41', '2021-02-22 12:01:41', '2022-02-22 12:01:41'),
('9f3be40cfea6f1a4542ea8edf185cecef2ad4a7e2dc10cdcb6e0ed790c52f2c0835ba014196fb445', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-02 11:33:29', '2021-03-02 11:33:29', '2022-03-02 11:33:29'),
('9f47b2a1a6fa8fe7dfa53a8b04ddb97498c6973649783526ef81cda192cd5624c61d60927009e3bc', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-04 07:47:17', '2021-03-04 07:47:17', '2022-03-04 07:47:17'),
('9f7df272ae717ac0a220a5afcdb2c073e21b8ad3ae8c0dfc1d8fbfe593a9771f6c576fe4f8e7eb89', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-03 12:54:30', '2021-03-03 12:54:30', '2022-03-03 12:54:30'),
('9f9e4a53feeab930b5a9c739e567ed5e0bf552fcb1f24066fcc88003aa8fb6232c35413d32a3955c', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-04 10:13:56', '2021-03-04 10:13:56', '2022-03-04 10:13:56'),
('a1bb69e775bb3d5220dac97a8cc84c1d16fffa01caa9bd73b0e50187152371340acef9bad7d25d8e', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-03 09:09:25', '2021-03-03 09:09:25', '2022-03-03 09:09:25'),
('a1be70af3fc67f2cd3def533ad3c35d23c6e4c510fdb4cd12fc397f5c33ef985c129273ac7661056', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-03 09:06:45', '2021-03-03 09:06:45', '2022-03-03 09:06:45'),
('a2093e9f00c72088afe2d57635147a54005f6e5ba8f167f30b8bc3660587a1dc839d0edd12b29437', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-02 09:26:54', '2021-03-02 09:26:54', '2022-03-02 09:26:54'),
('a20da4038c93481548885f3255910137b6ae0afa5dfb1db858b8826329a267498933da9301866d35', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-03 13:38:29', '2021-03-03 13:38:29', '2022-03-03 13:38:29'),
('a210f41406111c8daa6ba92997dff6ab210b339dc7e2bf7302c05ff361a706aea573987be6dc4775', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-01 14:08:23', '2021-03-01 14:08:23', '2022-03-01 14:08:23'),
('a25194a5660aa6883f9a2815bf34a43f7621ef7c93c22ebaf32386b881f417b51c71923fec4a8662', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-04 07:31:58', '2021-03-04 07:31:58', '2022-03-04 07:31:58'),
('a379c4cb9136542b691bb5b8a37f62ba069588168ac694583194b3651b266278e17450e728f230f4', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-04 07:10:41', '2021-03-04 07:10:41', '2022-03-04 07:10:41'),
('a3a59dda6dc1678b042a1da6f41eafc6de823cb2a3eae823e9a1643f615affff69c305ddb93e3a8f', 61, 3, 'Personal Access Token', '[]', 0, '2021-03-04 07:53:32', '2021-03-04 07:53:32', '2022-03-04 07:53:32'),
('a3d6940a3330b1f04cef9c4733ada98296c94330d74a07a749260c861a81d6909e5a2eff882da02a', 61, 3, 'Personal Access Token', '[]', 0, '2021-03-01 11:10:24', '2021-03-01 11:10:24', '2022-03-01 11:10:24'),
('a3e39cf05e9f2cfe3f83ac0e4b892224af2a16bdebd0b70ccf423cb80ea47130a59926d919c1e3ad', 55, 3, 'Personal Access Token', '[]', 0, '2021-02-26 15:29:51', '2021-02-26 15:29:51', '2022-02-26 15:29:51'),
('a440158a794d4692b6ece8c6ec62bb8c5cf6ee58d3dc7b0d790cb806752e4497c4da29797e6f3a08', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-01 10:05:14', '2021-03-01 10:05:14', '2022-03-01 10:05:14'),
('a4cb65b8e8326dec964f675e1c648bd2c9d57d6c33e68292abce55eeb44c5a198ac53cbab34a61c5', 61, 3, 'Personal Access Token', '[]', 0, '2021-03-05 13:32:05', '2021-03-05 13:32:05', '2022-03-05 13:32:05'),
('a5228c7a346a41e94bba64b90391395c91867c0a2d9524c0d2e42aaca6f654ae01af52e205c3cf6b', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-03 14:04:52', '2021-03-03 14:04:52', '2022-03-03 14:04:52'),
('a53ad06d66da900c75dc02522559ae2158a298cf0bbca3bb37b34f24b460ac097e9a28b2da53ec71', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-04 07:12:53', '2021-03-04 07:12:53', '2022-03-04 07:12:53'),
('a65ca94aed43c6ae8c461ba95ada8f6896d879590a89120f8f51fcb7e7f53fe06d43292f27c62076', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-01 09:49:57', '2021-03-01 09:49:57', '2022-03-01 09:49:57'),
('a6aba41313e7e506a4ad058d4238b9b908874453f582b8794858d5f178953c60a7b261c5abc05b38', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-01 06:59:36', '2021-03-01 06:59:36', '2022-03-01 06:59:36'),
('a71a10bb2c90e9e4706e58069116af1cf4e442337779a8a492a01b64c88fd2cb3af516730f825c50', 55, 3, 'Personal Access Token', '[]', 0, '2021-02-26 13:28:07', '2021-02-26 13:28:07', '2022-02-26 13:28:07'),
('a7711f88c1258df951f020a53258b2485e4c4eda686984377b7f5122245d607952a03ef58829f85e', 39, 3, 'Personal Access Token', '[]', 0, '2021-03-01 06:10:12', '2021-03-01 06:10:12', '2022-03-01 06:10:12'),
('a77dcb18390f4a441182ffb2ff22403b40beb701128dbde51ebc49a16eeb41fab001cbc77a07dbe7', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-06 13:05:42', '2021-03-06 13:05:42', '2022-03-06 13:05:42'),
('a78885a30f91a90c3adaa181dfc961e719547398d3c88c4f68e1703c96a70aaccd6af5e77b8d4513', 55, 3, 'Personal Access Token', '[]', 0, '2021-02-27 15:12:44', '2021-02-27 15:12:44', '2022-02-27 15:12:44'),
('a7a84385ab46ad9ba37e257d96d0a7e89164cee8c58699e17342b24dfb85a0fa81c6ca47c84d7926', 16, 3, 'Personal Access Token', '[]', 0, '2021-03-08 09:58:35', '2021-03-08 09:58:35', '2022-03-08 09:58:35'),
('a8c78111d4f92cd42dad085ce1744bc68183b851a3a2b2ed3a8375f73b2ba1eef39cfaef664c0b81', 53, 3, 'Personal Access Token', '[]', 0, '2021-02-16 10:20:17', '2021-02-16 10:20:17', '2022-02-16 10:20:17'),
('a931971d974ae354a2935a80be9001c72a3abd007b8594bf4fef8ef875bf1ebe49ad0e129f92da24', 61, 3, 'Personal Access Token', '[]', 0, '2021-03-08 13:20:06', '2021-03-08 13:20:06', '2022-03-08 13:20:06'),
('aa06d10f9bc7028160b416b391f894f9d465bc97c64c55d406b007265c175a81754d2964f0d22ef7', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-01 07:04:21', '2021-03-01 07:04:21', '2022-03-01 07:04:21'),
('aa5cd3fcd74045698fe96275adc83c8e7524edcc42be1405334aee47fe69eaf62643c19a7068c0d0', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-04 07:40:41', '2021-03-04 07:40:41', '2022-03-04 07:40:41'),
('aa7d3a2592a16486a8ce8795428cb6499b0ca208a1774c59fd2df85860b3dba9549ed5a011df36af', 55, 3, 'Personal Access Token', '[]', 0, '2021-02-22 07:56:30', '2021-02-22 07:56:30', '2022-02-22 07:56:30'),
('aa95eaa08b4c57188abea5423f1e046fe57e010c93e3529f8aaf32a2054f1139b273a6fb0198b4b2', 61, 3, 'Personal Access Token', '[]', 0, '2021-03-04 13:06:46', '2021-03-04 13:06:46', '2022-03-04 13:06:46'),
('ab10ef0e367bec63a7be21a002a1760aa2762bf9f0d18e611ae7b0f12c8524c6efa769c196002769', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-04 11:04:19', '2021-03-04 11:04:19', '2022-03-04 11:04:19'),
('ab504e6704d1374f4cf1d10b6e9a6d98ebb20d3ae287df227cc46e4febc1767d9453ebed596727ff', 55, 3, 'Personal Access Token', '[]', 0, '2021-02-22 12:13:28', '2021-02-22 12:13:28', '2022-02-22 12:13:28'),
('ab9561b1ed2ca4d8861c7f7d4e2b6915881fbe629c4480ec0a86c210741d77f72e9c34543d32c4bb', 55, 3, 'Personal Access Token', '[]', 0, '2021-02-27 13:30:59', '2021-02-27 13:30:59', '2022-02-27 13:30:59'),
('abd5da9b95916c58aa0298ca4de5c569ff83ffca6bcf4377b738f7f8b47a3b8f16f536153c5f6e01', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-06 14:18:52', '2021-03-06 14:18:52', '2022-03-06 14:18:52'),
('ac22fff0c998d85fdc22389758d15eb5b93cb7437a09aed22876f8b126e354b2dc8c6a7724fe6ff9', 55, 3, 'Personal Access Token', '[]', 0, '2021-02-27 13:29:37', '2021-02-27 13:29:37', '2022-02-27 13:29:37'),
('ac7a89d01ca65432bf8c62d2242a2186fb65f2b3165d9433fe7af9e303efcd325603ab10aa29e9fc', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-02 05:42:28', '2021-03-02 05:42:28', '2022-03-02 05:42:28'),
('ad3481cab405dab374fba96e06ace4d51b48b2185021673cf1dd6101ae8e6064ab23757fb9b17b10', 55, 3, 'Personal Access Token', '[]', 0, '2021-02-27 13:13:48', '2021-02-27 13:13:48', '2022-02-27 13:13:48'),
('ad8a6474938b989a56579b0d1c824d65cf99756b25f851c720e4a852eaa70d65285040f32597bb05', 61, 3, 'Personal Access Token', '[]', 0, '2021-03-05 07:05:43', '2021-03-05 07:05:43', '2022-03-05 07:05:43'),
('ad961cf570c857b6d967927c731a21446e4d02c98895e2cf6ce88e8653eb548bedbf59ded6e8ea32', 55, 3, 'Personal Access Token', '[]', 0, '2021-02-27 14:44:13', '2021-02-27 14:44:13', '2022-02-27 14:44:13'),
('ae5ad83951a385f0ec6bec19fd8f43005053f2f881452d993681bb260d391d9803f9393757d59ab8', 61, 3, 'Personal Access Token', '[]', 0, '2021-03-08 07:10:15', '2021-03-08 07:10:15', '2022-03-08 07:10:15'),
('af2db12c67e958f03ec1af4bd3c53404923b7b94366543d4de1ee048415641ddb24007398da57697', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-06 13:17:43', '2021-03-06 13:17:43', '2022-03-06 13:17:43'),
('af508c77e9ff799d68289499883638f5d443f9ed453a9516bc3eb0c1268a3664f6601b832dbfd6ed', 61, 3, 'Personal Access Token', '[]', 0, '2021-03-12 12:24:58', '2021-03-12 12:24:58', '2022-03-12 12:24:58'),
('af6be980f6ba03bcc7e7c0f8cfa388db5a0326b9b48ccc6cc61f156f2efc248045193600f1a2524f', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-06 11:41:03', '2021-03-06 11:41:03', '2022-03-06 11:41:03'),
('af6db5361a481a1861895e127698bfeeadd7b9a24adf47641ec17df834d50f83eddb1780e34b34fe', 39, 3, 'Personal Access Token', '[]', 0, '2021-03-03 09:18:15', '2021-03-03 09:18:15', '2022-03-03 09:18:15'),
('afa8b1d985caabc597beb2a82cbe61d64b7052da5121ce655526deccfd93535711df0fc897ed9734', 55, 3, 'Personal Access Token', '[]', 0, '2021-02-26 15:16:44', '2021-02-26 15:16:44', '2022-02-26 15:16:44'),
('afb2d7c1f38ea78313262fafee0ed69d55225b7e37685ea1cd04e844538f7d8577452bbc15017e56', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-03 09:14:26', '2021-03-03 09:14:26', '2022-03-03 09:14:26'),
('b0228fb16a92830fd8a936b648282cc27ec6fb1ed94642ccf8c310957a0876d0ee3ea1b6f02ed42a', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-02 10:07:00', '2021-03-02 10:07:00', '2022-03-02 10:07:00'),
('b12ac309c3a560ee8c7f54ed76ee4d558dc8b24bd4e0f73f37f542095053886d692872c6a73ac839', 39, 3, 'Personal Access Token', '[]', 0, '2021-02-22 11:31:46', '2021-02-22 11:31:46', '2022-02-22 11:31:46'),
('b17d84603cdf9223ea411d878f94e59d008ded37f192d3826d5f4d8a85f505edd7136cf4951cfc0e', 16, 3, 'Personal Access Token', '[]', 0, '2021-01-27 08:13:54', '2021-01-27 08:13:54', '2022-01-27 13:43:54'),
('b19592613359e379ef7b58d0b8a1e9edcde3280cd2dd8947988297f708b70d5b7317f34608bc0224', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-01 07:31:11', '2021-03-01 07:31:11', '2022-03-01 07:31:11'),
('b202e960a1dc6d2e903a86031fd3891f9d7445ecf5eadb0579f2cfa9237c709e7dcc1ca396e20954', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-01 11:37:37', '2021-03-01 11:37:37', '2022-03-01 11:37:37'),
('b224bcf839c56dd10dc6fbc8f0bfb4bce3977e5126d71d306ad4943085298aad61d92bc9b146eb8c', 55, 3, 'Personal Access Token', '[]', 0, '2021-02-27 14:35:28', '2021-02-27 14:35:28', '2022-02-27 14:35:28'),
('b2257c4e67525b095346a2213ad35a84546fd54f715a73739bb72041af76f0e4c6035e037f9c82ff', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-04 11:02:07', '2021-03-04 11:02:07', '2022-03-04 11:02:07'),
('b26e51b5f1bafd69d884829a384e5febba9b1e94bedf602ab76b00d0899c25fcdaf644c3dd088648', 61, 3, 'Personal Access Token', '[]', 0, '2021-03-11 07:51:31', '2021-03-11 07:51:31', '2022-03-11 07:51:31'),
('b29d84fe6065b8278c54db2435405f93476c33cbd457128b54768b1732581f808dfdd0a6a8f37574', 16, 3, 'Personal Access Token', '[]', 1, '2021-01-27 08:34:25', '2021-01-27 08:34:25', '2022-01-27 14:04:25'),
('b2a3b86c6e23cad2d3b4dcd439325cc7483d5a60a32d45cbfa1f38e302d996e40445b12b0dab9224', 53, 3, 'Personal Access Token', '[]', 0, '2021-02-16 10:57:08', '2021-02-16 10:57:08', '2022-02-16 10:57:08'),
('b31ce89e29c5bd7090b09c9270f73d09ef19c539d1d1f87eae6e6a0089939763e361fe1bd0f9cb35', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-03 09:10:28', '2021-03-03 09:10:28', '2022-03-03 09:10:28'),
('b3bcc66429f32e5d170d0f828b6915f389b71eb81ac031ccb037929d3d85efb09384ab1eb694ea50', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-01 11:17:59', '2021-03-01 11:17:59', '2022-03-01 11:17:59'),
('b40bb13494198876f8314293e46407e189d31726784c8d6fba69cf268addd036459e1ea8f145fc46', 61, 3, 'Personal Access Token', '[]', 0, '2021-03-10 15:48:21', '2021-03-10 15:48:21', '2022-03-10 15:48:21'),
('b414a20d6773248d11601ce36a88f73e99881848ba45e88becb033ec819679d4dccc2a061dab7e2d', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-05 13:21:22', '2021-03-05 13:21:22', '2022-03-05 13:21:22'),
('b49b037acede7d6e87ca932f13b5043e04c14da913118a75f376cdce4b418e1577bd1515f0202956', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-04 09:57:03', '2021-03-04 09:57:03', '2022-03-04 09:57:03'),
('b4c2aae667b9366d6eedadf8d54029265ad6a91e78c7cf9237e10047a41d31a3b1ee84baa197acef', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-04 11:02:25', '2021-03-04 11:02:25', '2022-03-04 11:02:25'),
('b571761f8bc2d6a3bf24ad02379e5ec6950fa13be7212c95936bd6cdc7c8025c849114302d9a455d', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-01 13:10:39', '2021-03-01 13:10:39', '2022-03-01 13:10:39'),
('b6251052a17a233677f9745f28db74f95cbb88310acf1569d8faacc8dab091d2be005e23acf01bcd', 61, 3, 'Personal Access Token', '[]', 0, '2021-03-06 08:57:19', '2021-03-06 08:57:19', '2022-03-06 08:57:19'),
('b649772669babbe5c5b7b173908fd6502502666778afa7531404ec3649a2136281aec349a1e13d35', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-03 09:17:20', '2021-03-03 09:17:20', '2022-03-03 09:17:20'),
('b657de74c22d4e8ec47589dee2b29e6cca3b30f8915ae01e77b4e9ecc72a2b020ba83062f5cc0e30', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-01 11:00:40', '2021-03-01 11:00:40', '2022-03-01 11:00:40'),
('b6609512ef3c68afe1a5a841603f142d4aad5928f2cd5cd2c06e78a30f0ad5b2612c7aa505bfc880', 37, 3, 'Personal Access Token', '[]', 0, '2021-02-02 08:36:02', '2021-02-02 08:36:02', '2022-02-02 14:06:02'),
('b8002a5f8d10d7a5955e0c7326d78c61d315886c1b02b3244aa1fd6d3cfbdaa6ac2ae735d54fff92', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-02 05:43:59', '2021-03-02 05:43:59', '2022-03-02 05:43:59'),
('b890754605a086479b67d92a861d4aa3f0da99c0d455a13a4f8d0b9ba2d7b2fcc9e4716128b0453a', 55, 3, 'Personal Access Token', '[]', 0, '2021-02-22 07:57:53', '2021-02-22 07:57:53', '2022-02-22 07:57:53'),
('b8c7189b6852e6a417dccbe84dea5f3ebf8e8fc43b33eb9bd005826af24d2620b078ebbf012108cd', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-04 11:22:14', '2021-03-04 11:22:14', '2022-03-04 11:22:14'),
('b96368342e9ba15fb7b2d4c8737920d9b6c84e1751bdb8ae849248a97eb2cc5efadcc491f25ce0cb', 55, 3, 'Personal Access Token', '[]', 0, '2021-02-22 12:11:27', '2021-02-22 12:11:27', '2022-02-22 12:11:27'),
('b96e31749d12f2bb98415bdfde4dbf5d94b0d04c9d3001d9785fdf520eb8478068e31c569b37711d', 55, 3, 'Personal Access Token', '[]', 0, '2021-02-22 12:24:31', '2021-02-22 12:24:31', '2022-02-22 12:24:31'),
('b9bd2340569daddc47419467a5b666efacac78e97112c821156c78e1e2c13e57c79613886be273ac', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-06 10:40:22', '2021-03-06 10:40:22', '2022-03-06 10:40:22'),
('bb3036456d97c94a572a5c1539e8f3c71dd5f89692a5f0d7f09f0e036ca866dd29faacdfc2a90c47', 39, 3, 'Personal Access Token', '[]', 0, '2021-02-02 08:45:44', '2021-02-02 08:45:44', '2022-02-02 14:15:44'),
('bbad459afe5bc83425ab7ec3e7feb2dd95e67c2c874a70f06a9a08b0e4214a63a1b9865a227c1471', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-04 11:13:30', '2021-03-04 11:13:30', '2022-03-04 11:13:30'),
('bbebb7f5cd2084038114e02b928ef88f925a6ea4dc9697db8f54facc63fe0e583b5c9fbf6ab54392', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-06 12:57:30', '2021-03-06 12:57:30', '2022-03-06 12:57:30'),
('bc6367f9c9ae3f329ba37b072495df0a7bb41679b91bb66a18b499fc30f2e06e1e4c7696b067b7d2', 55, 3, 'Personal Access Token', '[]', 0, '2021-02-27 11:59:03', '2021-02-27 11:59:03', '2022-02-27 11:59:03'),
('bcf212bea3ab819bfe108000b218e354ce18f8cf3a0e9444a3cef8579a1aabab13bec30547993987', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-06 12:47:50', '2021-03-06 12:47:50', '2022-03-06 12:47:50'),
('bcf94360c9ab9ec50c4db6b89b6cbe94c4b5684e47697c263b239d06727af936ba9d11bddda655db', 53, 3, 'Personal Access Token', '[]', 0, '2021-02-17 12:59:07', '2021-02-17 12:59:07', '2022-02-17 12:59:07'),
('bd3f9067f3a1e8894c2e8d87bb0e01cdc309b9f268b96ac128ab13e7618436124126a88012395c7d', 55, 3, 'Personal Access Token', '[]', 0, '2021-02-22 11:18:05', '2021-02-22 11:18:05', '2022-02-22 11:18:05'),
('bd8bddad7b8f2f3f83fe305b3bd23c6130d307f91ed56a0076d0e8c019a3d9a2c74af4761b4bb1a3', 55, 3, 'Personal Access Token', '[]', 0, '2021-02-27 13:12:48', '2021-02-27 13:12:48', '2022-02-27 13:12:48'),
('bdcd55a8c86324a046b35994951289cb5d03abd9a2de7301ac770022d1b765dcbefd5906c0fe9d75', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-02 09:38:32', '2021-03-02 09:38:32', '2022-03-02 09:38:32'),
('be56bd9d416b17962138e800a6b283075395b536de2920b807c76490a2cae1dd468f8b57f824a149', 61, 3, 'Personal Access Token', '[]', 0, '2021-03-05 06:50:31', '2021-03-05 06:50:31', '2022-03-05 06:50:31'),
('be69bec2cb026998eaa58ca735c588bc4dd29adfe488d641c6e01cffeb3bb76fa3aa15ae4f54138c', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-05 09:21:00', '2021-03-05 09:21:00', '2022-03-05 09:21:00'),
('be9bc5ee85337d7754ddffb2e30d5cb9b089ae579d32729990adaec34ead6568743dd2dbd86bd5e6', 39, 3, 'Personal Access Token', '[]', 0, '2021-02-16 09:17:54', '2021-02-16 09:17:54', '2022-02-16 09:17:54'),
('bef037e60dffd7c7cd6e0a768790c95fc49536996a38edac868a89e4b8635b6d96482e64f3ce8063', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-03 09:13:25', '2021-03-03 09:13:25', '2022-03-03 09:13:25'),
('bf253fa1c738e8f5681abcc45941f54f4ae96e8ceb039cabe08a68ceb7d3f0681e29674d8c2c9aa2', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-06 10:51:23', '2021-03-06 10:51:23', '2022-03-06 10:51:23'),
('bf8bbb110634a64e7c75d14383c7d6470849714c7f9575b2fdcbf784e2ccae4a2c66d2de93ec6288', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-02 11:01:50', '2021-03-02 11:01:50', '2022-03-02 11:01:50'),
('bfaaa521b7b667e6cb870a386849dfbda2af4113c7272a09605b25ce595635c71ccf7668a0c41fc1', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-04 08:54:56', '2021-03-04 08:54:56', '2022-03-04 08:54:56'),
('bfd3abef3761b6205285d84e8ad23278915c087e139f9fb5c5344add755b68dbdd25fad65b6a9a3a', 53, 3, 'Personal Access Token', '[]', 0, '2021-02-16 14:15:24', '2021-02-16 14:15:24', '2022-02-16 14:15:24'),
('c035cc71c23c4d7c87976bfdae8ecbf02b867321eac4aed2d9c60f646e7178a06dc061c4dcd91e7f', 53, 3, 'Personal Access Token', '[]', 0, '2021-02-17 14:25:03', '2021-02-17 14:25:03', '2022-02-17 14:25:03'),
('c0d3916cba9f7d9a5fa54128f090a5e0d240eda15fe144fe5d2ba3fadb18a543730b07b6e7ff1b9b', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-04 11:03:50', '2021-03-04 11:03:50', '2022-03-04 11:03:50'),
('c0df0419c30537f01641098fe5f27cc0926e285692ae2a3411c471b0a806baaeeee4a9bca5891d23', 16, 3, 'Personal Access Token', '[]', 0, '2021-03-08 09:55:11', '2021-03-08 09:55:11', '2022-03-08 09:55:11'),
('c0f1e521a3f570a7221074429df1df73e8ab1d6def7afd9af44037a3169d88039480f0e5c9023cbe', 36, 3, 'Personal Access Token', '[]', 0, '2021-02-02 08:34:47', '2021-02-02 08:34:47', '2022-02-02 14:04:47'),
('c1436050befda19d0b26c8519bf722c6a1c1ad4a321b8651fc1de2ae68c7e8b53921e7b5854a0687', 55, 3, 'Personal Access Token', '[]', 0, '2021-02-27 10:44:22', '2021-02-27 10:44:22', '2022-02-27 10:44:22'),
('c1dddc1c1f8d2d44d1e7b6f95d6fd0502c18ae451496611ed61ac30439cd7e3bc99019cf2a924747', 56, 3, 'Personal Access Token', '[]', 0, '2021-02-24 07:14:35', '2021-02-24 07:14:35', '2022-02-24 07:14:35'),
('c20c3cefc1be7b51681728842e91a709852e77126e75f7ff78668c302f51f1f083b3ead57ab25b00', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-02 08:40:25', '2021-03-02 08:40:25', '2022-03-02 08:40:25'),
('c24861ce95ec6e63e227104ba754d341615f9bdc45082f9b308c48e9e7d3e5baf6d613238e7c9d3e', 55, 3, 'Personal Access Token', '[]', 0, '2021-02-27 13:21:32', '2021-02-27 13:21:32', '2022-02-27 13:21:32'),
('c24e00e7c93e640f271c6ad81052832194e069d821c93217a7531daf4b15eb670a6871bdce2cc43d', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-03 09:12:48', '2021-03-03 09:12:48', '2022-03-03 09:12:48'),
('c278360c85d1cc935488cdf5f6b26f5088960bd56c89920c78d372603bff0cb0f37ec80e9ba422f1', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-05 10:55:19', '2021-03-05 10:55:19', '2022-03-05 10:55:19'),
('c2a34d6459afbd70b9b8302c05e3a2b7233848a1d039b2ae595ce6412e5db319613515761cdf9167', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-06 10:52:31', '2021-03-06 10:52:31', '2022-03-06 10:52:31'),
('c30aa480b6e7327f98d1db4c755629cd920ca4dfb1575c103a982239d069e8432b880f55b164ee36', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-05 09:33:17', '2021-03-05 09:33:17', '2022-03-05 09:33:17'),
('c3d54cf9d56e2dd416f8b2c47581adc84cd460add6087e76333de6f5273efe09ee0b3de45bd98316', 39, 3, 'Personal Access Token', '[]', 0, '2021-02-02 08:42:19', '2021-02-02 08:42:19', '2022-02-02 14:12:19'),
('c3df25a4d268cad5532cdef6975e262553e875bc997d69df3baa135d108e1949a8c3f4e1097ed67f', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-03 13:33:36', '2021-03-03 13:33:36', '2022-03-03 13:33:36'),
('c46c7b8a2145d392d10d940aef5e5ec7a0f9ef5edc518b62efc0bb6860ba3d46efe279441191d249', 55, 3, 'Personal Access Token', '[]', 0, '2021-02-27 12:16:59', '2021-02-27 12:16:59', '2022-02-27 12:16:59'),
('c47eb6349a22968b169ac1b4c4f90f7bceb835b15be1870905cf6e03f5812c25b0bc2cc477e42fd9', 39, 3, 'Personal Access Token', '[]', 0, '2021-03-02 10:28:27', '2021-03-02 10:28:27', '2022-03-02 10:28:27'),
('c4bcb8b96c7a61b863e5767fda7d274e0f85fc4611ad43adf49442f1e4b94e95fa4ca885eb5dfd64', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-01 10:14:34', '2021-03-01 10:14:34', '2022-03-01 10:14:34'),
('c522e7c95de1a5d2298665ace27706c0cfd405b712962a37a971a59eacd3ed4e26d2aca757aeccde', 55, 3, 'Personal Access Token', '[]', 0, '2021-02-27 12:58:13', '2021-02-27 12:58:13', '2022-02-27 12:58:13'),
('c5e2d0da799d916426b5732fa28a9128d783803b1a9522a9b6bd65321ee98705b96523b12504ca73', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-05 09:54:50', '2021-03-05 09:54:50', '2022-03-05 09:54:50'),
('c64f60010a59354cd18bb84301118d04f7dac6458c13eea72ac6572f3a0ee6c53678da458a66614a', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-05 14:28:58', '2021-03-05 14:28:58', '2022-03-05 14:28:58'),
('c6e0b3ae1af0ad6bd6ae1f5f7bd24c39c5cdb3b120d71e4c67c2c011ece71b7714ca707f9e493c43', 53, 3, 'Personal Access Token', '[]', 0, '2021-02-16 13:44:57', '2021-02-16 13:44:57', '2022-02-16 13:44:57'),
('c71fe297bdf591886583826d9be2e0d322373fc85479310e55fdf0d41b5810d99b78a8642be91e56', 61, 3, 'Personal Access Token', '[]', 0, '2021-03-04 12:53:59', '2021-03-04 12:53:59', '2022-03-04 12:53:59'),
('c77b5af34bd97f333fdbf572bea1b1615fa14f89a713d34dfb29fc3cdf88070dfe8ac186b30293ce', 61, 3, 'Personal Access Token', '[]', 0, '2021-03-08 06:35:54', '2021-03-08 06:35:54', '2022-03-08 06:35:54'),
('c7c2f7384d992883c5c5d9ef14e6aa230dd344d5c37c270380ed1206082a258081ab812a317aca21', 55, 3, 'Personal Access Token', '[]', 0, '2021-02-26 15:19:30', '2021-02-26 15:19:30', '2022-02-26 15:19:30'),
('c840ca60eaccb5d54154c4fc5efd609985e9484eb882924493a32a9b7c8590501d4b3f2a36de20c3', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-05 14:32:46', '2021-03-05 14:32:46', '2022-03-05 14:32:46'),
('c8ab7585a6ffe3fa46109ee7ed3be841eec5810ab0327bb83ad1eb01fb5129be3a74e0b0b0c13017', 39, 3, 'Personal Access Token', '[]', 0, '2021-03-31 05:48:27', '2021-03-31 05:48:27', '2022-03-31 11:18:27'),
('c8e789f931ee204cbeca4d09cee19a61e6d335ddbfb8d4383d07d4977bea7f428ce9bede1dc883ca', 55, 3, 'Personal Access Token', '[]', 0, '2021-02-22 11:15:52', '2021-02-22 11:15:52', '2022-02-22 11:15:52'),
('c94782c1164bebd1e24f0df14ecfef83070c7b70d58afef34f3a460c3b74f442d911629c3a5a7968', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-02 11:17:15', '2021-03-02 11:17:15', '2022-03-02 11:17:15'),
('c95017beff145dccc7e44b2e946ea87905878c4ebcfdf41446ecbbba3c7d0a76365dd7b4408986b1', 61, 3, 'Personal Access Token', '[]', 0, '2021-03-10 10:29:59', '2021-03-10 10:29:59', '2022-03-10 10:29:59'),
('c98e09ab25757f6b32e1a74b7d8cc9e5b8c6e8da02e86eeeec7b1da1067e524b58b1e3b0bac9fd7b', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-01 10:09:25', '2021-03-01 10:09:25', '2022-03-01 10:09:25'),
('ca0d9d41d9c1a3ed9287e9714742d5800cb4c166ee18c9b6a4ebbc3047aa6bdfb00d5d0f22389d8b', 55, 3, 'Personal Access Token', '[]', 0, '2021-02-22 11:23:59', '2021-02-22 11:23:59', '2022-02-22 11:23:59'),
('ca4b0b052a1a8d76dbf09a883736589043fd83ca336a3b43d79b70f45daa73bb2620f944429332eb', 61, 3, 'Personal Access Token', '[]', 0, '2021-03-05 06:40:41', '2021-03-05 06:40:41', '2022-03-05 06:40:41'),
('cad25733284b1bc63c797dc1b289334ab6ac5ed006b24f8a6de53a42f17dbcc9b37182036a98cc35', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-01 09:24:34', '2021-03-01 09:24:34', '2022-03-01 09:24:34'),
('cb077d1d34971c4f284a2bdddd8b9e22d986447038f61020ecf0871e9b51eeea6927cda6777670d0', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-01 06:57:18', '2021-03-01 06:57:18', '2022-03-01 06:57:18'),
('cba0ecc9d84e8d7daa3d74a2729629563ed1f17c85dbdd26d7dd3409f42d3fabe3239d897ad922c7', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-02 10:28:09', '2021-03-02 10:28:09', '2022-03-02 10:28:09'),
('cbf64c71b478eb03a7495a4fb8bfe854f3b242d5265cf0733bec5056a58935ebf11153aeb052f868', 55, 3, 'Personal Access Token', '[]', 0, '2021-02-27 12:06:49', '2021-02-27 12:06:49', '2022-02-27 12:06:49'),
('ccc2622c8bbb550d449c291e4b8719b6850f878a08c1eba686f1c9ffd1ceb90f30d89e271a1f5336', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-01 10:56:46', '2021-03-01 10:56:46', '2022-03-01 10:56:46'),
('ccc2c46694607f8436bca59503d57d74159b094d138be1269843e1f3bf3eb561790e086a8fd79059', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-03 13:35:02', '2021-03-03 13:35:02', '2022-03-03 13:35:02'),
('ccfa6edca1cff6ec56e657b11e5d4696957cf29fd541db46a1345b117d356e44af7343e4f1e89803', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-01 10:17:42', '2021-03-01 10:17:42', '2022-03-01 10:17:42'),
('cd111ac039a303bc8c0ed6c67a1a696eb70c09110c321f5fc8a532e9dba49c507b266b4abc78f2f9', 61, 3, 'Personal Access Token', '[]', 0, '2021-03-01 12:58:32', '2021-03-01 12:58:32', '2022-03-01 12:58:32'),
('ce8afc3be08fc2b03ac18c999c7f02374e8cead54402f6141a9c59e9b3640f57e746e8d1b639ab5f', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-06 07:13:13', '2021-03-06 07:13:13', '2022-03-06 07:13:13'),
('ce9872c42a5632427a71eb27da5888e87ca0a455ab9ad9f01c89a38cf6709295b16bc9aabbc37f87', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-06 13:13:54', '2021-03-06 13:13:54', '2022-03-06 13:13:54'),
('ce9989c46f0bf3f10f99e202b6ef4037e0ff11c06b025f852cc20ea0aec84f82d73fa98fdd55206e', 53, 3, 'Personal Access Token', '[]', 0, '2021-02-16 14:03:07', '2021-02-16 14:03:07', '2022-02-16 14:03:07'),
('ceb10165cb311c7ac825031655a333fb444688382715f92512ab6325cbf445b9c04b94e097e1be1a', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-06 12:56:09', '2021-03-06 12:56:09', '2022-03-06 12:56:09'),
('cfbefa7eaddf635e10ecc3cb1381c0869285677482d1553758a3596e3d8ee8ce088b7c9d97e0d6ae', 69, 3, 'Personal Access Token', '[]', 0, '2021-03-04 19:16:17', '2021-03-04 19:16:17', '2022-03-04 19:16:17'),
('d0121e1a3914b1016bd5e1270bff214bbf8c0901554b033ad451d4055a5bef38e8be37bb2387d34c', 53, 3, 'Personal Access Token', '[]', 0, '2021-02-17 14:24:42', '2021-02-17 14:24:42', '2022-02-17 14:24:42'),
('d090b3029e5f524608ec9375f9d2f638d9533ba95d927e0fabee6973b54e05630710477cc1621c31', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-04 11:17:31', '2021-03-04 11:17:31', '2022-03-04 11:17:31'),
('d09421554626cffaaab1482ae9ff103721b69cadecbcae10ffa058b98006f570db4c41e69ddafdd9', 55, 3, 'Personal Access Token', '[]', 0, '2021-02-27 14:25:53', '2021-02-27 14:25:53', '2022-02-27 14:25:53'),
('d0ef2d23922e2977658bba8a67858950aa1ae6815625b44d909241ecce839d06a1afbca2750f9d42', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-05 10:57:34', '2021-03-05 10:57:34', '2022-03-05 10:57:34'),
('d16f6df88f25e094f0bf075d48071cab637b97973363b0760e77411121b2aa814e48c68e18674724', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-05 13:21:49', '2021-03-05 13:21:49', '2022-03-05 13:21:49'),
('d27d4b48d0998c31a71802edfe716a662950d10e8ab93ed5aa349728d44e717db7e77035b00954b7', 39, 3, 'Personal Access Token', '[]', 0, '2021-03-06 11:05:48', '2021-03-06 11:05:48', '2022-03-06 11:05:48'),
('d2c90251670fc1d127f312f90c660d6a9b0784d68c15175d0df1b11a2d873dc33fab9f45ba56922c', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-03 12:57:34', '2021-03-03 12:57:34', '2022-03-03 12:57:34'),
('d3f2eaeabc66c4f1df4dc21ddb4a0a356d482337c6e53abe845c66b7cba8c7ac39b94c050c9053b9', 55, 3, 'Personal Access Token', '[]', 0, '2021-02-27 12:58:56', '2021-02-27 12:58:56', '2022-02-27 12:58:56'),
('d42a64a62554757b307ad0765d9e71858118d6d537da4217b78b69c63d4e051d68d777ee61bfe295', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-05 09:45:05', '2021-03-05 09:45:05', '2022-03-05 09:45:05'),
('d4b284a467e2416e09505db6424bdff3a814fa632a4e49cfd46e5193049b8923a743c4f1fea33474', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-03 08:47:12', '2021-03-03 08:47:12', '2022-03-03 08:47:12'),
('d4c277344d476e33988a061e2b9074c4e4f7688e119b07b1570aed672dae19bbcc5139f2cb246a88', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-04 11:01:51', '2021-03-04 11:01:51', '2022-03-04 11:01:51'),
('d4e9b7669ae1e935b1569e1f05c79c9a9e475d71f2cf3b0fac8835b522019aa73df0fa0cfd6e5a6f', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-01 13:13:12', '2021-03-01 13:13:12', '2022-03-01 13:13:12'),
('d53545edf2f3a31349a8272a1b0ddcc2752dd5d8ab9d7c23afcfba50089550245acbcdc0584140be', 61, 3, 'Personal Access Token', '[]', 0, '2021-03-03 07:45:09', '2021-03-03 07:45:09', '2022-03-03 07:45:09'),
('d5ac50b6be98dd7c8747061da6f0dfe6be499628397e3eefb2af40f5477c31f8bb1bd767232e9dab', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-04 07:38:20', '2021-03-04 07:38:20', '2022-03-04 07:38:20'),
('d6148f50df6cbbc382b32b8ead7c066685eb04bd97b7d12df5bcb4662c1c22cf7d9b927a18db259f', 55, 3, 'Personal Access Token', '[]', 0, '2021-02-27 14:38:49', '2021-02-27 14:38:49', '2022-02-27 14:38:49'),
('d6325b2de2248535c9eb475b35538353b651510ae28f3623c9dbf8d1ce5972f96d4dbdef3d42bf1f', 55, 3, 'Personal Access Token', '[]', 0, '2021-02-27 13:28:48', '2021-02-27 13:28:48', '2022-02-27 13:28:48'),
('d6a72c734d8c44393f262d58f31b90d1ee6a6a9ee711c683666cecbc6a17b1c9c10b29cc63051afc', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-04 10:07:03', '2021-03-04 10:07:03', '2022-03-04 10:07:03'),
('d6aeb33912c8c4df708ec9f9e8cc55d75ab3f96041f6f300c87cd919fdad8e31030046e813f9958d', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-03 14:15:04', '2021-03-03 14:15:04', '2022-03-03 14:15:04'),
('d6bcafe9cb8586bbe9fa154efe986c423fc7ce15577922584cd46bd86a456f6e7720452a9baf8372', 61, 3, 'Personal Access Token', '[]', 0, '2021-03-05 10:50:26', '2021-03-05 10:50:26', '2022-03-05 10:50:26'),
('d75f40ba3bebf85d17bd9aff8c4201f64075d36c164ac0a731a432fe3950477e94813acd42284759', 61, 3, 'Personal Access Token', '[]', 0, '2021-03-02 13:13:52', '2021-03-02 13:13:52', '2022-03-02 13:13:52'),
('d7dea34561683e3fa6ccecbd9a1acbd9de79a3da0952694c72b31f823414bade851abf7dcde16ef7', 55, 3, 'Personal Access Token', '[]', 0, '2021-02-27 13:10:36', '2021-02-27 13:10:36', '2022-02-27 13:10:36'),
('d7e096443922433cbce0c442151ea1d2dd43bb5fa2be182fcaeddfb971f0cf8ee787e07e598a982f', 61, 3, 'Personal Access Token', '[]', 0, '2021-03-09 06:15:28', '2021-03-09 06:15:28', '2022-03-09 06:15:28'),
('d848082542d216f7ecf29ab740d17e727be2d1c2ef9902026bfae646601059be1023dbcf39cb93cc', 59, 3, 'Personal Access Token', '[]', 0, '2021-03-16 16:33:35', '2021-03-16 16:33:35', '2022-03-16 16:33:35'),
('d86adad6acebb292dd03e3840cf1bb1a75e558810ea79e533cc7ab16d8c254e70be92c5331d1190f', 74, 3, 'Personal Access Token', '[]', 0, '2021-03-18 19:01:51', '2021-03-18 19:01:51', '2022-03-18 19:01:51'),
('d8dc25d5c6e23a6dc6a58cf007f7e92407e248818a72a57040391837ec998e9523f7cfd00ce7e72c', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-02 11:17:03', '2021-03-02 11:17:03', '2022-03-02 11:17:03'),
('d906624d1c2b66c3ace56c5484f1b95b24d321e1204f0529fb6dc035156264b29dba86f32a9b002c', 55, 3, 'Personal Access Token', '[]', 0, '2021-02-22 07:57:03', '2021-02-22 07:57:03', '2022-02-22 07:57:03'),
('d930230c4094ce2152c563e788992ca8fb450b81b0f80fd325a4843215ad8c327d7b52c4e4ba3cfc', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-05 13:42:22', '2021-03-05 13:42:22', '2022-03-05 13:42:22'),
('d96d6f489911022c595430dc8ec7e6ec3c3548aa88c7809c4f90adfdafe48556671783dc1867d1da', 55, 3, 'Personal Access Token', '[]', 0, '2021-02-27 14:43:20', '2021-02-27 14:43:20', '2022-02-27 14:43:20'),
('d9af5ad66a9477e0d7c56bed9a7a51f3bab0236a356ed07c4e51a5a39e502c1e97ef58778a1683d5', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-04 11:26:05', '2021-03-04 11:26:05', '2022-03-04 11:26:05'),
('d9e04d6961a2a5898337d2fd818c217827ef873d7845e504b81172b4f768e93d993d9c15c8243537', 36, 3, 'Personal Access Token', '[]', 0, '2021-02-02 08:27:00', '2021-02-02 08:27:00', '2022-02-02 13:57:00'),
('da8cfa9035a211f8a8021f3cca5a43123b7c6a931a229f111a05d5b08e9d16bd5633a66bbf0c6a7a', 55, 3, 'Personal Access Token', '[]', 0, '2021-02-27 10:34:43', '2021-02-27 10:34:43', '2022-02-27 10:34:43'),
('daa2bf876160e7332741eb7d54d5e90c068a0e3342b4fa4e1d473bb18d50b354303392af3a369dc5', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-02 09:19:24', '2021-03-02 09:19:24', '2022-03-02 09:19:24'),
('db491f55475b09b4ec12875a5f8beeb826aaaa6d782a8a266536e952c8e8d941b7d1c74f1691fc40', 55, 3, 'Personal Access Token', '[]', 0, '2021-02-27 14:18:45', '2021-02-27 14:18:45', '2022-02-27 14:18:45'),
('db4aa797745fbc912f25a034c0e64b9dd0b8106fd5617c07d5ca8ab8abe844a654f63005a2013716', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-01 06:40:25', '2021-03-01 06:40:25', '2022-03-01 06:40:25'),
('db744b745db1c79b0ffed3545a973c6ac408cbe3a94f55c9c26bbf55bc23685d1fbdcdaeb0c525cc', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-03 13:07:30', '2021-03-03 13:07:30', '2022-03-03 13:07:30'),
('dc710070e1754030591575b3d2e00af4f5d382be86e36dda2355f6d430d2ed1b5b4641c7f9fc5509', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-02 11:51:13', '2021-03-02 11:51:13', '2022-03-02 11:51:13'),
('dcd7aebc75d774b09a529b7005681e47afc702aab8ac892fabc297fc84c4d9d7058b3d374e71ca7e', 55, 3, 'Personal Access Token', '[]', 0, '2021-02-22 06:59:26', '2021-02-22 06:59:26', '2022-02-22 06:59:26'),
('ddfaa8aab2eb93e3a491279f40cbc1b56b219c0d02532c043639e0e88e951d818027bbf8ea77fce8', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-03 12:31:05', '2021-03-03 12:31:05', '2022-03-03 12:31:05'),
('de3c809e6e68d14a610478ca51973cd350e24fa7016220158058f5bbd1d4d16defd0c41d7fcec42f', 55, 3, 'Personal Access Token', '[]', 0, '2021-02-22 11:54:21', '2021-02-22 11:54:21', '2022-02-22 11:54:21'),
('decc211e1e651290f41b9eb56e59c654586a62b5eca2cc09e4f89730e552c1c4c560117776486bdf', 45, 3, 'Personal Access Token', '[]', 0, '2021-02-02 23:38:23', '2021-02-02 23:38:23', '2022-02-03 05:08:23'),
('df5bc9f9bf4e744d55f09a6133eba5c27a9f8556a63ac236f5d7f82508b5c9076a538f6b1c86f6a7', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-05 13:39:15', '2021-03-05 13:39:15', '2022-03-05 13:39:15'),
('df603085f03c7327b8013c3ee74667fafd5bc9d1ea04052847a6382089488023cae9cf2d6d19435d', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-06 11:07:20', '2021-03-06 11:07:20', '2022-03-06 11:07:20'),
('df70d29f66b606809f66668f6aaad67569629b75d94acce581d532637c876641bad5e7b972b37205', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-05 13:41:31', '2021-03-05 13:41:31', '2022-03-05 13:41:31'),
('df9fe3518ec63a2b3661f6615d48773ae72fede10a2742dd74ba99437805fe60783479007d14bf2c', 40, 3, 'Personal Access Token', '[]', 0, '2021-02-02 08:43:26', '2021-02-02 08:43:26', '2022-02-02 14:13:26'),
('dfeba974512dbbf3659491329046c9ac1a0c2ac687a51b85e761816c38b505e68cb4ef2c73abc8e4', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-02 10:21:54', '2021-03-02 10:21:54', '2022-03-02 10:21:54'),
('e07590ee10fdaa5ef186dcfe8457d896749ef2f32fdeada07637e6d15aa3b80c1506388c888a30df', 55, 3, 'Personal Access Token', '[]', 0, '2021-02-22 10:09:13', '2021-02-22 10:09:13', '2022-02-22 10:09:13'),
('e08eb4177d257991fa66df7135c67bc7501d3b9fe8e41d525ed1abc5a779f31ac876d1cf0f192a3e', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-04 10:54:21', '2021-03-04 10:54:21', '2022-03-04 10:54:21'),
('e0c511c7955793aef8cc469ff4e7146d634409d740ba322fe208d4f183b5bdf6dde271cefe278f31', 55, 3, 'Personal Access Token', '[]', 0, '2021-02-27 13:18:33', '2021-02-27 13:18:33', '2022-02-27 13:18:33'),
('e0e7d7c9308344774ff7dde9afe6a36b0e0617f0c4ae2fabc97a9265d741d6d7b7885c896ecd67de', 61, 3, 'Personal Access Token', '[]', 0, '2021-03-08 06:15:49', '2021-03-08 06:15:49', '2022-03-08 06:15:49'),
('e10da93ab2611f35ce39ade3e70bc3f94b2559b38f926dd770301bdb6094eaae0f43b3a4c90ad477', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-06 10:28:27', '2021-03-06 10:28:27', '2022-03-06 10:28:27'),
('e11acb4945706091823739d6d64d33cf592ad234ee2d86e20f60acb40dbda90e04402ba8850c1e36', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-04 11:07:26', '2021-03-04 11:07:26', '2022-03-04 11:07:26'),
('e15281d1bd2ae1fd074345130ff9a1f228fd23a175072474c41ff3398e4c575f62dae96c697ac19b', 55, 3, 'Personal Access Token', '[]', 0, '2021-02-26 15:17:18', '2021-02-26 15:17:18', '2022-02-26 15:17:18'),
('e1bcaf23789d888ae7b54694c943aa10e24b7da1aeb1099ece915fb242b4e4ad83449124cab8d2de', 69, 3, 'Personal Access Token', '[]', 0, '2021-03-04 12:12:25', '2021-03-04 12:12:25', '2022-03-04 12:12:25'),
('e1db3d761ca78da6919732a36103f6b8b861c40aa439e892a76a9820f74563bfbfae1bd5e0afe58e', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-06 11:08:15', '2021-03-06 11:08:15', '2022-03-06 11:08:15'),
('e225dd195a4511a6142f07be0036ddb9992137bb59a76cf690eb631848f47af98718ab9f487612d8', 55, 3, 'Personal Access Token', '[]', 0, '2021-02-27 14:30:48', '2021-02-27 14:30:48', '2022-02-27 14:30:48'),
('e2732282d85dbf5a0672de00e4bd623dfd55a5a2c34feb5ae70caeceb384c5ec67bda57293ad8652', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-01 14:48:55', '2021-03-01 14:48:55', '2022-03-01 14:48:55'),
('e274570229cf2d2306f25e251e791072045bb6721cf63105d94bdd88a616d463a250f7e65fca22e6', 61, 3, 'Personal Access Token', '[]', 0, '2021-03-01 12:25:45', '2021-03-01 12:25:45', '2022-03-01 12:25:45'),
('e2c09019a575c65b3fc324676aa7ccfd9446e8629eee53a64dcf0a780a0c2d015d73d18fcdc772eb', 55, 3, 'Personal Access Token', '[]', 0, '2021-02-22 11:50:57', '2021-02-22 11:50:57', '2022-02-22 11:50:57'),
('e304c1fc78ffc7e35bf67b0b18f4ef5bad7c5243f6fcb6fe87c9dc96e39d8d777deb8797f7db7303', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-02 12:04:07', '2021-03-02 12:04:07', '2022-03-02 12:04:07'),
('e36437a33008000e05d21bfdcd7aac14df69181331ac196453f69b36d2733bb6c8b8eabe39932f24', 61, 3, 'Personal Access Token', '[]', 0, '2021-03-12 13:03:50', '2021-03-12 13:03:50', '2022-03-12 13:03:50'),
('e3c83a3d8a2bee68f7d4e21efcc5415e3d3ff20f0224e8caeace93634584293dc3566eca2687f124', 43, 3, 'Personal Access Token', '[]', 0, '2021-02-02 09:19:42', '2021-02-02 09:19:42', '2022-02-02 14:49:42'),
('e425606c313bfbae6e59f4e4974c857a80ca74794adf38fd4ac6446d0c70952a9091ad577327f3d4', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-04 08:52:20', '2021-03-04 08:52:20', '2022-03-04 08:52:20'),
('e45bb1070886a449709019857ba4239918e57195a0ed733a9826609dc8da4df311c97c872d073258', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-04 10:07:59', '2021-03-04 10:07:59', '2022-03-04 10:07:59'),
('e46add9ed54478f1ae02bf1a8c8fe567eef67fb6039b4c9199a12d8f84757fb3bcda2d7d2f8db3f2', 55, 3, 'Personal Access Token', '[]', 0, '2021-02-22 11:51:58', '2021-02-22 11:51:58', '2022-02-22 11:51:58'),
('e4aa2b05ca051c74082223ef4b2e979239d273b55bf78395735d44195d6ae777ae9b59e237e032a9', 55, 3, 'Personal Access Token', '[]', 0, '2021-02-22 07:37:48', '2021-02-22 07:37:48', '2022-02-22 07:37:48'),
('e4d085f791830ec3ab667ec4d8e1f6a50cee2481c5a883d45d38b70d96798157e65987eacb54346c', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-03 13:42:19', '2021-03-03 13:42:19', '2022-03-03 13:42:19'),
('e5131ed51f414ddceb39c8ed7890f6dcfb680176d6016588d539eaeae71423fa5ffb4e880f24c7ac', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-04 09:52:57', '2021-03-04 09:52:57', '2022-03-04 09:52:57'),
('e55f316e8537dc64ef75da20b24a182752fdcc014e2c5b1693f08b3c8aa80ef585106ec7031559c1', 55, 3, 'Personal Access Token', '[]', 0, '2021-02-22 11:21:32', '2021-02-22 11:21:32', '2022-02-22 11:21:32'),
('e574e0de4da5d47734e032953f37119d9c0cf33fa19fa71b84ea352b9c9162d2919d97fa535b5113', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-03 15:12:24', '2021-03-03 15:12:24', '2022-03-03 15:12:24'),
('e59ccb3b361b19a691136776f5ca94ee2f2a8f4ecddc745f63e5fd5d36fe4c49879a1c09b4b48079', 61, 3, 'Personal Access Token', '[]', 0, '2021-03-12 13:28:38', '2021-03-12 13:28:38', '2022-03-12 13:28:38'),
('e608cb47bf9fd1abb80d5b34cc8779a05cc8b91b9e670b9b7ca510b99084d9bcc3598e3454785e6c', 55, 3, 'Personal Access Token', '[]', 0, '2021-02-19 10:38:43', '2021-02-19 10:38:43', '2022-02-19 10:38:43'),
('e63a6d2b5724a2a688153c320db329ad1c5be5672e359a38ac16548fb1135b8c15cfe55f07e485d1', 39, 3, 'Personal Access Token', '[]', 0, '2021-02-02 08:42:15', '2021-02-02 08:42:15', '2022-02-02 14:12:15'),
('e648700d9df218b299fa5d7fffa5d77b7f97e555be8e06baf237c8227831248f217494e2da585226', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-01 06:57:05', '2021-03-01 06:57:05', '2022-03-01 06:57:05'),
('e65d0e6c3ec0167c86ac39d2634668ec3fdd5baefaf16885154ecc3e2f3d0c73edb4b7e0e877c893', 61, 3, 'Personal Access Token', '[]', 0, '2021-03-08 12:47:11', '2021-03-08 12:47:11', '2022-03-08 12:47:11'),
('e718b2969dd64caa917930af099f5204360318e4ac74ae43f7b83007294628331a1812ed6fc9049a', 53, 3, 'Personal Access Token', '[]', 0, '2021-02-16 14:11:05', '2021-02-16 14:11:05', '2022-02-16 14:11:05'),
('e72236758770e16314ad43bf5372fee5d7fa818e4b77c4413c725a8466686bb971b5a8309c57eb48', 61, 3, 'Personal Access Token', '[]', 0, '2021-03-09 06:00:58', '2021-03-09 06:00:58', '2022-03-09 06:00:58'),
('e7300bd11d0c6d59e0d17a27b36a1c03eb5b37f858cef607f2b026a6873f0402e095eccc971e5163', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-05 13:33:54', '2021-03-05 13:33:54', '2022-03-05 13:33:54'),
('e734d8e22738a5261ef28a12bcaf38ef59ea2ca1f9a91aa0b0b4bc4f9377c91f4ce6ae4355a333e7', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-01 10:30:35', '2021-03-01 10:30:35', '2022-03-01 10:30:35'),
('e73c150bad56b31aacf5d99265a0ac66bd16e73e6bb15191e893ef8330ea9fb3070ae91ba1f78b9f', 16, 3, 'Personal Access Token', '[]', 0, '2021-01-27 08:18:23', '2021-01-27 08:18:23', '2022-01-27 13:48:23'),
('e75fdc7d13d9f90a1cc4ff49d97123e7163d51dd1fcc327254be220b74f7e3d5ce0164e4edf212c2', 61, 3, 'Personal Access Token', '[]', 0, '2021-03-05 10:19:11', '2021-03-05 10:19:11', '2022-03-05 10:19:11'),
('e7b58ad72ed7959e64a1dabeee8627956d8b197afa1e4167e9b6d17e01967916ce9b91f1e2825294', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-01 10:25:19', '2021-03-01 10:25:19', '2022-03-01 10:25:19'),
('e7d24dbf76b109ce3661d6d69e29e4b310791c09fc96374459350b0e774f17b13dd123084a1b9ef1', 61, 3, 'Personal Access Token', '[]', 0, '2021-03-02 12:34:49', '2021-03-02 12:34:49', '2022-03-02 12:34:49'),
('e83cc1c0e7e949460d7463133d920ee92751fbcd33cd74e016cc72135044c462ec4763aa4da14d40', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-01 10:01:56', '2021-03-01 10:01:56', '2022-03-01 10:01:56'),
('e9871af553af92c2e3581c0795f1ef07d3990094f8b40dd10b9d1219abb7387ad5e9d44425228053', 55, 3, 'Personal Access Token', '[]', 0, '2021-02-22 07:36:38', '2021-02-22 07:36:38', '2022-02-22 07:36:38'),
('e9e12b23151474b6d7c0160724a58243b58e598245e1e5e6eca4a83e35aab1882929e6c5666243d4', 55, 3, 'Personal Access Token', '[]', 0, '2021-02-22 10:27:30', '2021-02-22 10:27:30', '2022-02-22 10:27:30'),
('eac6caad73b58641890ec5a36e2beb65d13db92cbb3c9bfe37bf544ba0633741f0b7383434bdd3a8', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-04 10:09:23', '2021-03-04 10:09:23', '2022-03-04 10:09:23'),
('eb1c19fc7e67a00574d65b20a95da053ca5e42b259753b84c1ba61a7a16b89c6c9e2c4295b0ac2ad', 55, 3, 'Personal Access Token', '[]', 0, '2021-02-26 15:35:19', '2021-02-26 15:35:19', '2022-02-26 15:35:19'),
('ebb6213aa066b5b0f23c2f935f35a6a80521f7430c62f28401e8a7dfa645545c85f3c0356e330b95', 61, 3, 'Personal Access Token', '[]', 0, '2021-03-09 14:03:40', '2021-03-09 14:03:40', '2022-03-09 14:03:40'),
('ec5e8f36d0979a4bd3fe118e7fd9ae76e332f7dbc938cd130fef063dea4fe72b0c435f46546c840c', 61, 3, 'Personal Access Token', '[]', 0, '2021-03-08 07:33:47', '2021-03-08 07:33:47', '2022-03-08 07:33:47'),
('ec920d9fc247f72d8c8b1f248cfb4b9b5c7831d3f59195e9d569d8145e9d0cb8f7d11b5c51eac8e6', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-04 10:41:56', '2021-03-04 10:41:56', '2022-03-04 10:41:56'),
('ed0b535b9df95be4f277c387ed63272b405aabc798555d4e55d8ad2da738234453642a57c28b07dd', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-02 09:39:25', '2021-03-02 09:39:25', '2022-03-02 09:39:25'),
('ed707e98efe5b9f39a312e97680afc586e12072a18b13a36fb73c47e542a2a989cf685cbe3cee2e4', 61, 3, 'Personal Access Token', '[]', 0, '2021-03-09 09:07:42', '2021-03-09 09:07:42', '2022-03-09 09:07:42'),
('ed9bb4770923aabda2f3485e8ddfcfa5239fb1e2e7d3be66d5a1771b6124020dec673f81555485f3', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-02 10:04:27', '2021-03-02 10:04:27', '2022-03-02 10:04:27'),
('eda0dfb7fad73162b9e74b102fbaf51052d8ec7c11b304ffa460aad322f4c7c55d2970e8796c3f8c', 39, 3, 'Personal Access Token', '[]', 0, '2021-03-31 05:47:32', '2021-03-31 05:47:32', '2022-03-31 11:17:32'),
('edb6a9886e2413e07741f6df6793833834a7d2e23133f1ced817f61097bd64632152b2bf188d7078', 37, 3, 'Personal Access Token', '[]', 0, '2021-02-02 08:36:47', '2021-02-02 08:36:47', '2022-02-02 14:06:47'),
('ede20947d7c593869dcbdc444821b4a6fa1ad924b761338ec0214304e6ecd3a79fb8246f105ddef3', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-03 09:07:09', '2021-03-03 09:07:09', '2022-03-03 09:07:09'),
('edf2e225b94036d2e8ad4a7765a6e9d689f4fa9283a9b795bf19efafb6880571a26520aa9bd780c1', 55, 3, 'Personal Access Token', '[]', 0, '2021-02-26 15:19:16', '2021-02-26 15:19:16', '2022-02-26 15:19:16'),
('ee1d1db4ef97a7b374d376986faaf82fcdb5696c7c4e03bf20ffd5e22f226f938547af3eebb41489', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-02 07:18:57', '2021-03-02 07:18:57', '2022-03-02 07:18:57'),
('ee2b3bfd43ceeb8833e4d42b4466293e0ae183d947ce8278a3d0007bbb71f2f2fea45a1ca744901f', 61, 3, 'Personal Access Token', '[]', 0, '2021-03-04 07:54:03', '2021-03-04 07:54:03', '2022-03-04 07:54:03'),
('eeb0add455799aff2b1be17a5458bf8895b5a73296d8dd314828cd0bbd61fa7694fe11369fffbef9', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-01 07:24:20', '2021-03-01 07:24:20', '2022-03-01 07:24:20'),
('eecb55a2766ba19acacdc9db02ae88d285fe557a86dd3f9b64c009f7b5730baf42f0dc1c5ad3d569', 55, 3, 'Personal Access Token', '[]', 0, '2021-02-27 11:48:01', '2021-02-27 11:48:01', '2022-02-27 11:48:01'),
('eef6c7f314e91991fb2fc988ea5a32dcccd6b36202a217b1f52fbe9b6098c9d08927f2b116223b09', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-04 09:25:15', '2021-03-04 09:25:15', '2022-03-04 09:25:15'),
('ef01edd1cc1ad8a1aa56e666475b4f2c99c2636a2315f04db848bcc3c0adce70b62337b6f25074f1', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-04 09:58:10', '2021-03-04 09:58:10', '2022-03-04 09:58:10'),
('efd5672bfc38ef63ecd7e2b6592eb6c0923fbc43ca74e7ddb093fbc9284f0af72de849b91e603d5e', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-04 10:21:15', '2021-03-04 10:21:15', '2022-03-04 10:21:15'),
('f0030bf7caf34709687ef9893fde873e6d6f77dda69a2135ea69dbc2a76028fe23491c3d4e89bde5', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-01 05:41:42', '2021-03-01 05:41:42', '2022-03-01 05:41:42'),
('f031d18132f2d1afe208862be439ec73c9650cfcb4067a38f851cdf7abe3a3eb60f933c473382616', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-04 08:53:57', '2021-03-04 08:53:57', '2022-03-04 08:53:57'),
('f058b6245d553cde53715b75136c7a1192bfe359af2f9cf9cd38fa8a76e83db54c5b09513bd28dcf', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-03 14:14:37', '2021-03-03 14:14:37', '2022-03-03 14:14:37'),
('f09cceae8f3489dd78201e8f3df6ef7d817a8d93cabe5d5435d61c7495ae44e8a9d4d8db77c20125', 16, 3, 'Personal Access Token', '[]', 0, '2021-01-27 08:17:30', '2021-01-27 08:17:30', '2022-01-27 13:47:30'),
('f27d49ed6f51bfefcd37c4031539ea15fe1be21d8d2b8cf23662c8541e53f38672b271462c86bf82', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-04 08:53:13', '2021-03-04 08:53:13', '2022-03-04 08:53:13');
INSERT INTO `oauth_access_tokens` (`id`, `user_id`, `client_id`, `name`, `scopes`, `revoked`, `created_at`, `updated_at`, `expires_at`) VALUES
('f303684ba137cb12e4c8d32023dd0fbc5ee4b80e0cd158f6d035264d1b4c3395d93c10a761013ba9', 41, 3, 'Personal Access Token', '[]', 0, '2021-02-02 08:45:53', '2021-02-02 08:45:53', '2022-02-02 14:15:53'),
('f310ec1bbba83e9ec1bfec31a70dbe8e2ebffd83c2ec36fef3667d6bb0e45678ac932f97abd3167d', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-01 05:34:09', '2021-03-01 05:34:09', '2022-03-01 05:34:09'),
('f3807ad7acd216e030a0a5ade0937f5340a6c1065d49bfb9c3f68626101016627fac70887e2fd874', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-02 07:18:39', '2021-03-02 07:18:39', '2022-03-02 07:18:39'),
('f40f7162d0a3eac648f1b760ae6a64d8cccf076c0a0cb2c65abd1dac0171f436b233f38178e4ae9f', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-03 14:06:38', '2021-03-03 14:06:38', '2022-03-03 14:06:38'),
('f414e90bcb1732e1ef9ac7e5424b781b4def1d5119c7544bd0e04564612630a55ae72a27383efc4a', 55, 3, 'Personal Access Token', '[]', 0, '2021-02-22 11:56:55', '2021-02-22 11:56:55', '2022-02-22 11:56:55'),
('f423ad17bbbbbd83d9d85969fdb7f6774123d973b2145f9eb12edc133710dbd182586a996ed8db00', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-05 14:37:20', '2021-03-05 14:37:20', '2022-03-05 14:37:20'),
('f499b2b2689df7a2ba3fc3ffed9bf8a04d1beeec8c7b6d68bf4b1600bd0197e62fad75f5a70540cb', 55, 3, 'Personal Access Token', '[]', 0, '2021-02-27 12:01:58', '2021-02-27 12:01:58', '2022-02-27 12:01:58'),
('f4de1d7ab0cddba9262267e4e607a694ebe2a13b7f5ec789d2a4d240a9edcbf8a8520f12b94e6717', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-03 12:51:22', '2021-03-03 12:51:22', '2022-03-03 12:51:22'),
('f54bd6553ee91a0862e6aa1d52745d0c6d2820a68c244c047d958dc9b8d910542cda289ecaa1d24a', 53, 3, 'Personal Access Token', '[]', 0, '2021-02-16 10:46:46', '2021-02-16 10:46:46', '2022-02-16 10:46:46'),
('f59812134c217c7ded591b34da86f768349d535f2f06b412a6de71986cda79a9cb569d49688b3557', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-04 10:34:57', '2021-03-04 10:34:57', '2022-03-04 10:34:57'),
('f5f55528630cf3384d2ec0775104c50799b0a541b7a69d0b3cac177554af1e5752eaf872c49bf1fd', 38, 3, 'Personal Access Token', '[]', 0, '2021-03-03 14:52:02', '2021-03-03 14:52:02', '2022-03-03 14:52:02'),
('f60760b66bd1ad553d6328948f8507b4aa6985c06477df5ae12f393f024e6e3c07731eda937e0f37', 16, 3, 'Personal Access Token', '[]', 0, '2021-01-29 00:10:55', '2021-01-29 00:10:55', '2022-01-29 05:40:55'),
('f6332b006591a43d8f42e212730450f5226ee397d2aa503190c6c7baed2fa49c50ed49cadec04f71', 16, 3, 'Personal Access Token', '[]', 0, '2021-03-09 07:43:15', '2021-03-09 07:43:15', '2022-03-09 07:43:15'),
('f6e25187e9ec445f8242fb442572f3764118aca2094fde34eb17727de1784b9372f051a74e5591dd', 61, 3, 'Personal Access Token', '[]', 0, '2021-03-01 11:12:51', '2021-03-01 11:12:51', '2022-03-01 11:12:51'),
('f6f189967e4932aeedc3dd617bedee3bda30c30311365771e1cf5b6a389d0c1fa05eabd1afee574c', 42, 3, 'Personal Access Token', '[]', 0, '2021-02-02 08:46:15', '2021-02-02 08:46:15', '2022-02-02 14:16:15'),
('f6fe11e8a5c5eafe54fedf8915177f75c228bac621fb06d37ddb80550182303edfbfd23b029303a6', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-02 07:14:58', '2021-03-02 07:14:58', '2022-03-02 07:14:58'),
('f7d4a9c2ba4ea4f82b084df5e949461717c85b1ff194f45759aad63bc1c836f1e1ce9907b0da46c8', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-02 08:54:45', '2021-03-02 08:54:45', '2022-03-02 08:54:45'),
('f90c4f4bf8e5227283cc9b929b3bb43c17d50e50bda628520ac50f5cd8f01ac90328cab9a6d0c435', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-06 11:04:19', '2021-03-06 11:04:19', '2022-03-06 11:04:19'),
('f993e9cbfa3c9ec8960425c0a8242adeb1ee40c5310917278acb2e4b8c70e1afe73f1577f73aea6c', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-01 10:08:12', '2021-03-01 10:08:12', '2022-03-01 10:08:12'),
('fa12e1c5c30d801fa889d798b9c65a685f25b09e3dca3cdeb25f25e35ac9e5a5a13105dff0543272', 55, 3, 'Personal Access Token', '[]', 0, '2021-02-22 09:53:41', '2021-02-22 09:53:41', '2022-02-22 09:53:41'),
('fa5495abf470957b552ecdeeb9904fcb1347bc0d0e21b6720c93838fdc1bc078996151d3075330f4', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-01 10:58:54', '2021-03-01 10:58:54', '2022-03-01 10:58:54'),
('fab5f8eeedf985c3d276ec055b6a98ed654b7230b3a70393a2dd58168081560c948e08a83db57af1', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-03 13:02:01', '2021-03-03 13:02:01', '2022-03-03 13:02:01'),
('fb3bcd10b9048fbd0eb4d25687b63d29b58c53ca8efb44d61b69f1b2d929ce2b72e5e5a76e0a4367', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-02 07:22:18', '2021-03-02 07:22:18', '2022-03-02 07:22:18'),
('fb5e1f6aff8ba4c03f0bf5344e3d900c2af7b5666750c42ac268506bc4aa6d5c3910f63a1f5c6af2', 16, 3, 'Personal Access Token', '[]', 0, '2021-03-31 05:40:04', '2021-03-31 05:40:04', '2022-03-31 11:10:04'),
('fc64ffae6aaba652b90792d802dbe71a8879a5c24e9ab8231edb9c58baa35be67f74928dfd8de015', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-02 08:44:59', '2021-03-02 08:44:59', '2022-03-02 08:44:59'),
('fc9d59e8a73a97ce48208e1a3ac04355605b7b59847657c45f573db61808d534cea98cab91b00126', 55, 3, 'Personal Access Token', '[]', 0, '2021-02-26 15:16:19', '2021-02-26 15:16:19', '2022-02-26 15:16:19'),
('fcc533118cfdc5f0a9cc9e9ea2ec66b4b43fc5faa9abae8ae37b13347fad6210254bbb66263d97bc', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-03 13:19:33', '2021-03-03 13:19:33', '2022-03-03 13:19:33'),
('fce868cd9a9ef795e6a637055b9e21d8b39a799d8ae4a526825b69c8c5368ae06f03eef4c534f150', 61, 3, 'Personal Access Token', '[]', 0, '2021-03-01 11:12:16', '2021-03-01 11:12:16', '2022-03-01 11:12:16'),
('fd7c00e27caf607fd6f010ca73573a0a29a5f6043e63f6a71cdf0749fa44e77445cd0877bdff318a', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-04 10:29:03', '2021-03-04 10:29:03', '2022-03-04 10:29:03'),
('fe48b632c488f5da8e1efebebc218162f02a88b32e2f7517876bc902fdf6bccc2e28b17c273060ff', 55, 3, 'Personal Access Token', '[]', 0, '2021-02-22 12:02:33', '2021-02-22 12:02:33', '2022-02-22 12:02:33'),
('ff66c4626d211f9a0eabcd8ea6ad3ed5e998abd60de07aa1d1f5e1439cd19fb52a93fd12d9690298', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-03 13:10:57', '2021-03-03 13:10:57', '2022-03-03 13:10:57'),
('ffe34357e29c3cdb98aa154c09657db398c71626911d00ffbbac1861e166c64bbaa252cc251741b0', 55, 3, 'Personal Access Token', '[]', 0, '2021-03-04 08:51:08', '2021-03-04 08:51:08', '2022-03-04 08:51:08');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_clients`
--

INSERT INTO `oauth_clients` (`id`, `user_id`, `name`, `secret`, `provider`, `redirect`, `personal_access_client`, `password_client`, `revoked`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Empath-Web-App Personal Access Client', 'MkBo9vifqKpg3xlqKaXIsl1hbUD9UlIIHQi8hq8B', NULL, 'http://localhost', 1, 0, 0, '2021-01-07 07:38:03', '2021-01-07 07:38:03'),
(2, NULL, 'Empath-Web-App Password Grant Client', 'R1qxHYKgWqyRb63CrZBURFgzNBPJCna97coBt9F7', 'users', 'http://localhost', 0, 1, 0, '2021-01-07 07:38:03', '2021-01-07 07:38:03'),
(3, NULL, 'Empath-Web-App Personal Access Client', '6WWATrjnSeR3E8vkKnLjugEwrXPQrpJ9LOQWsVRd', NULL, 'http://localhost', 1, 0, 0, '2021-01-27 07:37:34', '2021-01-27 07:37:34'),
(4, NULL, 'Empath-Web-App Password Grant Client', '5mY0SG0JMoRwitdsDoerdQKEosKmOSE2OYNqHwNV', 'users', 'http://localhost', 0, 1, 0, '2021-01-27 07:37:34', '2021-01-27 07:37:34');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_personal_access_clients`
--

INSERT INTO `oauth_personal_access_clients` (`id`, `client_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2021-01-07 07:38:03', '2021-01-07 07:38:03'),
(2, 3, '2021-01-27 07:37:34', '2021-01-27 07:37:34');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`id`, `email`, `token`, `created_at`, `updated_at`) VALUES
(14, 'rishabh.soni@thedetmail.com', '$2y$10$1ZnFVyj4Mr0DLAHphBrhdOCbQuQ/SJ5FbEVDFM2lZjRpZtujRskZ6', '2021-03-10 11:31:22', NULL),
(17, 'rishabh.random@mailid.com', '$2y$10$MAFrZCORyWVSCEDQomNtGOhl300Pzr6BAtdETVclBTzwVBhs.M0J6', '2021-03-11 05:09:35', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `payment_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payer_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payer_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `currency` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1' COMMENT '1=New,2=Completed',
  `payment_method` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '''paypal''' COMMENT 'paypal or stripe',
  `items` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipping` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `grand_total` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `payment_id`, `payer_id`, `payer_email`, `currency`, `payment_status`, `status`, `payment_method`, `items`, `total`, `shipping`, `grand_total`, `created_at`, `updated_at`) VALUES
(7, 'PAYID-MAIRW5Y9C839895G9410442E', 'X8VC7RULFDXG8', 'ajay.lowanshi.parsonal@thedetmail.com', 'USD', 'success', '1', 'paypal', '{\"8\":{\"id\":\"8\",\"name\":\"75-MIN INTUITIVE SESSION W\\/ PAUL + Vedic Astrology Report\",\"price\":525,\"quantity\":\"1\",\"attributes\":{\"image\":\"http:\\/\\/127.0.0.1:8000\\/storage\\/products\\/images\\/1611208112.jpg\"},\"conditions\":[]}}', '525', '50', '575', '2021-01-27 02:22:00', '2021-02-24 09:46:50'),
(8, 'PAYID-MAIRXYY2KT83441P94396334', 'X8VC7RULFDXG8', 'ajay.lowanshi.parsonal@thedetmail.com', 'USD', 'success', '1', 'paypal', '{\"8\":{\"id\":\"8\",\"name\":\"75-MIN INTUITIVE SESSION W\\/ PAUL + Vedic Astrology Report\",\"price\":525,\"quantity\":\"1\",\"attributes\":{\"image\":\"http:\\/\\/127.0.0.1:8000\\/storage\\/products\\/images\\/1611208112.jpg\"},\"conditions\":[]}}', '525', '50', '575', '2021-01-27 02:23:46', '2021-01-29 01:01:14'),
(9, 'PAYID-MAIRY5Y1CD89920TP553171F', 'X8VC7RULFDXG8', 'ajay.lowanshi.parsonal@thedetmail.com', 'USD', 'success', '1', 'paypal', '{\"7\":{\"id\":\"7\",\"name\":\"Group Coaching With Paul: Powerful & Inspiring!\",\"price\":389,\"quantity\":\"1\",\"attributes\":{\"image\":\"http:\\/\\/127.0.0.1:8000\\/storage\\/products\\/images\\/1611207196.jpg\"},\"conditions\":[]}}', '389', '50', '439', '2021-01-27 02:25:57', '2021-02-15 01:26:09'),
(10, 'PAYID-MAIVFRY69332718JU7874031', 'X8VC7RULFDXG8', 'ajay.lowanshi.parsonal@thedetmail.com', 'USD', 'success', '1', 'paypal', '{\"8\":{\"id\":\"8\",\"name\":\"75-MIN INTUITIVE SESSION W\\/ PAUL + Vedic Astrology Report\",\"price\":525,\"quantity\":\"1\",\"attributes\":{\"image\":\"http:\\/\\/127.0.0.1:8000\\/storage\\/products\\/images\\/1611208112.jpg\"},\"conditions\":[]},\"11\":{\"id\":\"11\",\"name\":\"The Spiritual Seeker\\u2019s Handbook (eBook)\",\"price\":9.95,\"quantity\":\"1\",\"attributes\":{\"image\":\"http:\\/\\/127.0.0.1:8000\\/storage\\/products\\/images\\/1611209069.jpg\"},\"conditions\":[]}}', '534.95', '50', '584.95', '2021-01-27 06:17:47', '2021-01-29 01:01:11'),
(11, 'PAYID-MAIVNTY5CN595075P438264S', 'X8VC7RULFDXG8', 'ajay.lowanshi.parsonal@thedetmail.com', 'USD', 'success', '1', 'paypal', '{\"7\":{\"id\":\"7\",\"name\":\"Group Coaching With Paul: Powerful & Inspiring!\",\"price\":389,\"quantity\":\"1\",\"attributes\":{\"image\":\"http:\\/\\/127.0.0.1:8000\\/storage\\/products\\/images\\/1611207196.jpg\"},\"conditions\":[]}}', '389', '50', '439', '2021-01-27 06:48:35', '2021-02-24 09:20:35'),
(12, 'txn_1IRW45Lia80wFQ5moRbYwv50', 'ch_1IRW44Lia80wFQ5m7Cz3JO0V', 'rishabh.soni@thedetmail.com', 'USD', 'success', '1', 'stripe', '{\"8\":{\"id\":\"8\",\"name\":\"75-MIN INTUITIVE SESSION W\\/ PAUL + Vedic Astrology Report\",\"price\":525,\"quantity\":\"1\",\"attributes\":{\"image\":\"http:\\/\\/testserver.co.in\\/empath-web-app\\/storage\\/products\\/images\\/1611208112.jpg\"},\"conditions\":[]}}', '525', '50', '575', '2021-03-05 05:19:05', '2021-03-05 05:20:26'),
(13, 'txn_1IRWJDLia80wFQ5myaTkzlsp', 'ch_1IRWJDLia80wFQ5m1DgMoHlP', 'rishabh.soni@thedetmail.com', 'USD', 'success', '1', 'stripe', '{\"8\":{\"id\":\"8\",\"name\":\"75-MIN INTUITIVE SESSION W\\/ PAUL + Vedic Astrology Report\",\"price\":525,\"quantity\":\"1\",\"attributes\":{\"image\":\"http:\\/\\/testserver.co.in\\/empath-web-app\\/storage\\/products\\/images\\/1611208112.jpg\"},\"conditions\":[]}}', '525', '50', '575', '2021-03-05 05:34:44', '2021-03-05 05:34:44'),
(14, 'txn_1ISbZ0Lia80wFQ5moco4l6s8', 'ch_1ISbZ0Lia80wFQ5mPbm9nKSC', 'rishabh.soni@thedetmail.com', 'USD', 'success', '1', 'stripe', '{\"7\":{\"id\":\"7\",\"name\":\"Group Coaching With Paul: Powerful & Inspiring!\",\"price\":389,\"quantity\":\"1\",\"attributes\":{\"image\":\"http:\\/\\/testserver.co.in\\/empath-web-app\\/storage\\/products\\/images\\/1611207196.jpg\"},\"conditions\":[]},\"10\":{\"id\":\"10\",\"name\":\"INTUITION, CHANNELING & TAROT CLASS: Gold Package\",\"price\":525,\"quantity\":\"1\",\"attributes\":{\"image\":\"http:\\/\\/testserver.co.in\\/empath-web-app\\/storage\\/products\\/images\\/1611209018.jpg\"},\"conditions\":[]}}', '914', '50', '964', '2021-03-08 05:23:31', '2021-03-08 05:23:31'),
(15, 'txn_1ISbd0Lia80wFQ5mtkxTXX3o', 'ch_1ISbczLia80wFQ5mfSqDkZjs', 'rishabh.soni@thedetmail.com', 'USD', 'success', '1', 'stripe', '{\"8\":{\"id\":\"8\",\"name\":\"75-MIN INTUITIVE SESSION W\\/ PAUL + Vedic Astrology Report\",\"price\":525,\"quantity\":\"1\",\"attributes\":{\"image\":\"http:\\/\\/testserver.co.in\\/empath-web-app\\/storage\\/products\\/images\\/1611208112.jpg\"},\"conditions\":[]}}', '525', '50', '575', '2021-03-08 05:27:38', '2021-03-08 05:27:38'),
(16, 'txn_1ISim0Lia80wFQ5mcsWmD1k8', 'ch_1ISilzLia80wFQ5mZqxCj6En', 'rishabh.random@mailid.com', 'USD', 'success', '1', 'stripe', '{\"11\":{\"id\":\"11\",\"name\":\"The Spiritual Seeker\\u2019s Handbook (eBook)\",\"price\":9.949999999999999289457264239899814128875732421875,\"quantity\":\"1\",\"attributes\":{\"image\":\"http:\\/\\/testserver.co.in\\/empath-web-app\\/storage\\/products\\/images\\/1611209069.jpg\"},\"conditions\":[]}}', '9.95', '50', '59.95', '2021-03-08 13:05:24', '2021-03-08 13:05:24'),
(17, 'txn_1ISyTKLia80wFQ5m1Ke748P7', 'ch_1ISyTKLia80wFQ5mi7UmwP4S', 'rishabh.soni@thedetmail.com', 'USD', 'success', '1', 'stripe', '{\"11\":{\"id\":\"11\",\"name\":\"The Spiritual Seeker\\u2019s Handbook (eBook)\",\"price\":9.949999999999999289457264239899814128875732421875,\"quantity\":\"1\",\"attributes\":{\"image\":\"http:\\/\\/testserver.co.in\\/empath-web-app\\/storage\\/products\\/images\\/1611209069.jpg\"},\"conditions\":[]}}', '9.95', '50', '59.95', '2021-03-09 05:51:11', '2021-03-09 05:51:11'),
(18, 'txn_1ISyVILia80wFQ5mTon77um2', 'ch_1ISyVILia80wFQ5mr1YJblRo', 'rishabh.random@mailid.com', 'USD', 'success', '1', 'stripe', '{\"7\":{\"id\":\"7\",\"name\":\"Group Coaching With Paul: Powerful & Inspiring!\",\"price\":389,\"quantity\":\"1\",\"attributes\":{\"image\":\"http:\\/\\/testserver.co.in\\/empath-web-app\\/storage\\/products\\/images\\/1611207196.jpg\"},\"conditions\":[]}}', '389', '50', '439', '2021-03-09 05:53:13', '2021-03-09 05:53:13'),
(19, 'txn_1ISyWqLia80wFQ5mnSxOfLtj', 'ch_1ISyWpLia80wFQ5mnmklMgpR', 'rishabh.soni@thedetmail.com', 'USD', 'success', '1', 'stripe', '{\"11\":{\"id\":\"11\",\"name\":\"The Spiritual Seeker\\u2019s Handbook (eBook)\",\"price\":9.949999999999999289457264239899814128875732421875,\"quantity\":\"1\",\"attributes\":{\"image\":\"http:\\/\\/testserver.co.in\\/empath-web-app\\/storage\\/products\\/images\\/1611209069.jpg\"},\"conditions\":[]}}', '9.95', '50', '59.95', '2021-03-09 05:54:48', '2021-03-09 05:54:48'),
(20, 'txn_1ISyZ4Lia80wFQ5mFdxF0AfM', 'ch_1ISyZ3Lia80wFQ5m5Lrr6UvJ', 'rishabh.random@mailid.com', 'USD', 'success', '1', 'stripe', '{\"7\":{\"id\":\"7\",\"name\":\"Group Coaching With Paul: Powerful & Inspiring!\",\"price\":389,\"quantity\":\"1\",\"attributes\":{\"image\":\"http:\\/\\/testserver.co.in\\/empath-web-app\\/storage\\/products\\/images\\/1611207196.jpg\"},\"conditions\":[]}}', '389', '50', '439', '2021-03-09 05:57:06', '2021-03-09 05:57:06'),
(21, 'txn_1ISzTBLia80wFQ5mYa9R3pjv', 'ch_1ISzTALia80wFQ5mE0HX8SWa', 'rishabh.random@mailid.com', 'USD', 'success', '1', 'stripe', '{\"11\":{\"id\":\"11\",\"name\":\"The Spiritual Seeker\\u2019s Handbook (eBook)\",\"price\":9.949999999999999289457264239899814128875732421875,\"quantity\":-1,\"attributes\":{\"image\":\"http:\\/\\/testserver.co.in\\/empath-web-app\\/storage\\/products\\/images\\/1611209069.jpg\"},\"conditions\":[]},\"8\":{\"id\":\"8\",\"name\":\"75-MIN INTUITIVE SESSION W\\/ PAUL + Vedic Astrology Report\",\"price\":525,\"quantity\":1,\"attributes\":{\"image\":\"http:\\/\\/testserver.co.in\\/empath-web-app\\/storage\\/products\\/images\\/1611208112.jpg\"},\"conditions\":[]},\"7\":{\"id\":\"7\",\"name\":\"Group Coaching With Paul: Powerful & Inspiring!\",\"price\":389,\"quantity\":1,\"attributes\":{\"image\":\"http:\\/\\/testserver.co.in\\/empath-web-app\\/storage\\/products\\/images\\/1611207196.jpg\"},\"conditions\":[]}}', '904.05', '50', '954.05', '2021-03-09 06:55:05', '2021-03-09 06:55:05'),
(22, 'txn_1IT1TOLia80wFQ5mSOOSqUhB', 'ch_1IT1TOLia80wFQ5mN8DePYSJ', 'rishabh.soni@thedetmail.com', 'USD', 'success', '1', 'stripe', '{\"8\":{\"id\":\"8\",\"name\":\"75-MIN INTUITIVE SESSION W\\/ PAUL + Vedic Astrology Report\",\"price\":525,\"quantity\":\"1\",\"attributes\":{\"image\":\"http:\\/\\/testserver.co.in\\/empath-web-app\\/storage\\/products\\/images\\/1611208112.jpg\"},\"conditions\":[]}}', '525', '50', '575', '2021-03-09 09:03:26', '2021-03-09 09:03:26'),
(23, 'txn_1ITPMtLia80wFQ5m8ZuWBAJl', 'ch_1ITPMsLia80wFQ5m0tURe9iS', 'rishabh.soni@thedetmail.com', 'USD', 'success', '1', 'stripe', '{\"8\":{\"id\":\"8\",\"name\":\"75-MIN INTUITIVE SESSION W\\/ PAUL + Vedic Astrology Report\",\"price\":525,\"quantity\":\"1\",\"attributes\":{\"image\":\"http:\\/\\/testserver.co.in\\/empath-web-app\\/storage\\/products\\/images\\/1611208112.jpg\"},\"conditions\":[]}}', '525', '50', '575', '2021-03-10 10:34:19', '2021-03-10 10:34:19'),
(24, 'txn_1ITjFCLia80wFQ5mXRnb776F', 'ch_1ITjFCLia80wFQ5m9RAMkDfV', 'rishabh.random@mailid.com', 'USD', 'success', '1', 'stripe', '{\"8\":{\"id\":\"8\",\"name\":\"75-MIN INTUITIVE SESSION W\\/ PAUL + Vedic Astrology Report\",\"price\":525,\"quantity\":\"1\",\"attributes\":{\"image\":\"http:\\/\\/testserver.co.in\\/empath-web-app\\/storage\\/products\\/images\\/1611208112.jpg\"},\"conditions\":[]}}', '525', '50', '575', '2021-03-11 07:47:42', '2021-03-11 07:47:42'),
(25, 'txn_1IVDwVLia80wFQ5mrLwDUCSB', 'ch_1IVDwVLia80wFQ5m34J255Gc', 'rishabh.soni@thedetmail.com', 'USD', 'success', '1', 'stripe', '{\"7\":{\"id\":\"7\",\"name\":\"Group Coaching With Paul: Powerful & Inspiring!\",\"price\":389,\"quantity\":\"1\",\"attributes\":{\"image\":\"http:\\/\\/testserver.co.in\\/empath-web-app\\/storage\\/products\\/images\\/1611207196.jpg\"},\"conditions\":[]}}', '389', '50', '439', '2021-03-15 10:46:36', '2021-03-15 10:46:36'),
(26, 'txn_1IVDzoLia80wFQ5mz8OGOGrf', 'ch_1IVDzoLia80wFQ5mnCDVbMRx', 'rishabh.random@mailid.com', 'USD', 'success', '1', 'stripe', '{\"7\":{\"id\":\"7\",\"name\":\"Group Coaching With Paul: Powerful & Inspiring!\",\"price\":389,\"quantity\":\"1\",\"attributes\":{\"image\":\"http:\\/\\/testserver.co.in\\/empath-web-app\\/storage\\/products\\/images\\/1611207196.jpg\"},\"conditions\":[]}}', '389', '50', '439', '2021-03-15 10:50:00', '2021-03-15 10:50:00'),
(27, 'txn_1IVE2pLia80wFQ5mW7F5veFZ', 'ch_1IVE2pLia80wFQ5mQTkQVXRk', 'rishabh.random@mailid.com', 'USD', 'success', '1', 'stripe', '{\"7\":{\"id\":\"7\",\"name\":\"Group Coaching With Paul: Powerful & Inspiring!\",\"price\":389,\"quantity\":2,\"attributes\":{\"image\":\"http:\\/\\/testserver.co.in\\/empath-web-app\\/storage\\/products\\/images\\/1611207196.jpg\"},\"conditions\":[]}}', '778', '50', '828', '2021-03-15 10:53:08', '2021-03-15 10:53:08'),
(28, 'txn_1IVERxLia80wFQ5mq72lCFNq', 'ch_1IVERwLia80wFQ5mCrLpizOh', 'rishabh.random@mailid.com', 'USD', 'success', '1', 'stripe', '{\"8\":{\"id\":\"8\",\"name\":\"75-MIN INTUITIVE SESSION W\\/ PAUL + Vedic Astrology Report\",\"price\":525,\"quantity\":\"1\",\"attributes\":{\"image\":\"http:\\/\\/testserver.co.in\\/empath-web-app\\/storage\\/products\\/images\\/1611208112.jpg\"},\"conditions\":[]}}', '525', '50', '575', '2021-03-15 11:19:05', '2021-03-15 11:19:05'),
(29, 'txn_1IVEtqLia80wFQ5m7dT74JN1', 'ch_1IVEtqLia80wFQ5mdi8NxVU0', 'rishabh.random@mailid.com', 'USD', 'success', '1', 'stripe', '{\"16\":{\"id\":\"16\",\"name\":\"Test product\",\"price\":126,\"quantity\":\"1\",\"attributes\":{\"image\":\"http:\\/\\/testserver.co.in\\/empath-web-app\\/storage\\/products\\/images\\/1615807669.png\"},\"conditions\":[]}}', '126', '50', '176', '2021-03-15 11:47:54', '2021-03-15 11:47:54'),
(30, 'txn_1IVbniLia80wFQ5m9sOr43g3', 'ch_1IVbniLia80wFQ5mwjOat6Sn', 'rishabh.soni@thedetmail.com', 'USD', 'success', '1', 'stripe', '{\"8\":{\"id\":\"8\",\"name\":\"75-MIN INTUITIVE SESSION W\\/ PAUL + Vedic Astrology Report\",\"price\":525,\"quantity\":\"1\",\"attributes\":{\"image\":\"http:\\/\\/testserver.co.in\\/empath-web-app\\/storage\\/products\\/images\\/1611208112.jpg\"},\"conditions\":[]}}', '525', '50', '575', '2021-03-16 12:15:06', '2021-03-16 12:15:06'),
(31, 'txn_1IVyTYLia80wFQ5mOy09M8mM', 'ch_1IVyTXLia80wFQ5m7LaKzzuM', 'rishabh.soni@thedetmail.com', 'USD', 'success', '1', 'stripe', '{\"8\":{\"id\":\"8\",\"name\":\"75-MIN INTUITIVE SESSION W\\/ PAUL + Vedic Astrology Report\",\"price\":525,\"quantity\":\"1\",\"attributes\":{\"image\":\"http:\\/\\/testserver.co.in\\/empath-web-app\\/storage\\/products\\/images\\/1611208112.jpg\"},\"conditions\":[]}}', '525', '50', '575', '2021-03-17 12:27:48', '2021-03-17 12:27:48'),
(33, 'txn_1IWeo4Lia80wFQ5m4GuNnWvX', 'ch_1IWeo3Lia80wFQ5mG0TQp3HM', 'ajay.lowanshi@thedetmail.com', 'USD', 'success', '1', 'stripe', '{\"13\":{\"id\":\"13\",\"name\":\"The Field Guide to Human Personalities (eBook)\",\"price\":9.949999999999999289457264239899814128875732421875,\"quantity\":2,\"attributes\":{\"image\":\"http:\\/\\/testserver.co.in\\/empath-web-app\\/storage\\/products\\/images\\/1611209307.jpg\"},\"conditions\":[]}}', '19.9', '50', '69.9', '2021-03-19 09:39:48', '2021-03-19 09:39:48'),
(34, 'txn_1IWiAvLia80wFQ5mq0B0CWGh', 'ch_1IWiAuLia80wFQ5m9jMjGbPr', 'rishabh.soni@thedetmail.com', 'USD', 'success', '2', 'stripe', '{\"8\":{\"id\":\"8\",\"name\":\"75-MIN INTUITIVE SESSION W\\/ PAUL + Vedic Astrology Report\",\"price\":525,\"quantity\":\"1\",\"attributes\":{\"image\":\"http:\\/\\/testserver.co.in\\/empath-web-app\\/storage\\/products\\/images\\/1611208112.jpg\"},\"conditions\":[]}}', '525', '50', '575', '2021-03-19 13:15:37', '2021-03-31 03:26:19');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `categories` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1' COMMENT '1=Active,2=Inactive',
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `categories`, `image`, `status`, `created_at`, `updated_at`) VALUES
(7, 'Group Coaching With Paul: Powerful & Inspiring!', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '389.00', '[\"5\",\"6\"]', '1611207196.jpg', '1', '2020-12-30 09:22:23', '2021-03-01 09:31:20'),
(8, '75-MIN INTUITIVE SESSION W/ PAUL + Vedic Astrology Report', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '525.00', '[\"5\",\"6\"]', '1611208112.jpg', '1', '2021-01-07 08:36:19', '2021-01-21 05:48:40'),
(10, 'INTUITION, CHANNELING & TAROT CLASS: Gold Package', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '525.00', '[\"5\",\"6\"]', '1611209018.jpg', '1', '2021-01-21 06:03:38', '2021-03-15 14:20:13'),
(11, 'The Spiritual Seeker’s Handbook (eBook)', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '9.95', '[\"5\",\"6\"]', '1611209069.jpg', '1', '2021-01-21 06:04:29', '2021-03-17 12:44:30'),
(12, 'THE PERSONAL GROWTH SET: Three eBooks That Will Change Your Life!', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '19.95', '[\"5\",\"6\"]', '1611209133.jpg', '1', '2021-01-21 06:05:33', '2021-03-19 10:34:28'),
(13, 'The Field Guide to Human Personalities (eBook)', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '9.95', '[\"5\",\"6\"]', '1611209307.jpg', '1', '2021-01-21 06:08:27', '2021-03-16 11:13:36');

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` int(11) NOT NULL,
  `product_id` varchar(255) NOT NULL,
  `image` text DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `product_id`, `image`, `created_at`, `updated_at`) VALUES
(38, '8', '16112081122.jpg', '2021-01-21 11:18:33', '2021-01-21 11:18:33'),
(35, '7', '16112077662.jpg', '2021-01-21 11:12:46', '2021-01-21 11:12:46'),
(34, '7', '16112077661.jpg', '2021-01-21 11:12:46', '2021-01-21 11:12:46'),
(33, '7', '16112077660.jpg', '2021-01-21 11:12:46', '2021-01-21 11:12:46'),
(37, '8', '16112081121.jpg', '2021-01-21 11:18:33', '2021-01-21 11:18:33'),
(36, '8', '16112081120.jpg', '2021-01-21 11:18:33', '2021-01-21 11:18:33'),
(10, '9', '1610008822.jpg', '2021-01-07 14:10:22', '2021-01-07 14:10:22'),
(11, '9', '1610008822.jpg', '2021-01-07 14:10:22', '2021-01-07 14:10:22'),
(12, '9', '1610008822.jpg', '2021-01-07 14:10:22', '2021-01-07 14:10:22'),
(39, '10', '16112090190.jpg', '2021-01-21 11:33:39', '2021-01-21 11:33:39'),
(40, '10', '16112090191.jpg', '2021-01-21 11:33:39', '2021-01-21 11:33:39'),
(41, '10', '16112090192.jpg', '2021-01-21 11:33:39', '2021-01-21 11:33:39'),
(42, '11', '16112090690.jpg', '2021-01-21 11:34:29', '2021-01-21 11:34:29'),
(43, '11', '16112090691.jpg', '2021-01-21 11:34:29', '2021-01-21 11:34:29'),
(44, '11', '16112090692.jpg', '2021-01-21 11:34:29', '2021-01-21 11:34:29'),
(45, '12', '16112091330.jpg', '2021-01-21 11:35:33', '2021-01-21 11:35:33'),
(46, '12', '16112091331.jpg', '2021-01-21 11:35:33', '2021-01-21 11:35:33'),
(47, '12', '16112091332.jpg', '2021-01-21 11:35:33', '2021-01-21 11:35:33'),
(48, '13', '16112093070.jpg', '2021-01-21 11:38:27', '2021-01-21 11:38:27'),
(49, '13', '16112093071.jpg', '2021-01-21 11:38:27', '2021-01-21 11:38:27'),
(50, '13', '16112093072.jpg', '2021-01-21 11:38:27', '2021-01-21 11:38:27'),
(51, '14', '16113073250.jpg', '2021-01-22 14:52:05', '2021-01-22 14:52:05'),
(52, '14', '16113073251.png', '2021-01-22 14:52:05', '2021-01-22 14:52:05');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `product_id` varchar(255) DEFAULT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `review` text DEFAULT NULL,
  `rating` varchar(255) NOT NULL DEFAULT '0',
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT '1' COMMENT '1=Show,2=Hide',
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `product_id`, `user_id`, `review`, `rating`, `name`, `email`, `status`, `created_at`, `updated_at`) VALUES
(4, '7', '16', 'I am infinitely more alive and in love because of this group. I thought I was relegated to a negative attitude LOL but seriously, this group gave me hope and faith I never had before.', '3', 'Ajay Lowanshi', 'ajay.lowanshi@thedetmail.com', '1', '2021-01-21 11:19:39', '2021-01-21 12:29:35'),
(5, '7', '17', 'I am infinitely more alive and in love because of this group. I thought I was relegated to a negative attitude LOL but seriously, this group gave me hope and faith I never had before.', '5', 'Ajju Lowanshi', 'ajju.lowanshi@thedetmail.com', '1', '2021-01-21 11:19:39', '2021-01-21 12:29:29'),
(6, '11', '16', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '5', 'Ajay Lowanshi', 'ajay.lowanshi@thedetmail.com', '1', '2021-01-28 11:25:48', '2021-01-28 11:25:48'),
(7, '7', '60', 'I am infinitely more alive and in love because of this group. I thought I was relegated to a negative attitude LOL but seriously, this group gave me hope and faith I never had before.', '5', 'Rishabh', 'rishabh.soni@thedetmail.com', '1', '2021-03-01 09:53:41', '2021-03-01 09:53:41'),
(8, '7', '60', '1234', '0', 'Test', 'rishabh98267@gmail.com', '1', '2021-03-01 09:55:00', '2021-03-01 09:55:00'),
(9, '11', '60', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2', 'Rishabh', 'rishabh.soni@thedetmail.com', '1', '2021-03-01 09:59:38', '2021-03-01 09:59:38'),
(10, '11', '60', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '5', 'Test', 'rishabh.soni@thedetmail.com', '1', '2021-03-01 10:00:45', '2021-03-31 07:06:13'),
(11, '11', '60', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '0', 'Test1', 'rishabh.soni@thedetmail.com', '1', '2021-03-01 10:01:31', '2021-03-01 10:01:31'),
(12, '11', '60', 'null rating test', '0', 'Test', 'rishabh.soni@thedetmail.com', '1', '2021-03-01 10:02:54', '2021-03-01 10:02:54'),
(13, '7', '60', '12345', '1', 'Test', 'rishabh.soni@thedetmail.com', '1', '2021-03-01 13:15:58', '2021-03-01 13:15:58'),
(14, '7', '60', '4 rating', '0', 'Test', 'rishabh.soni@thedetmail.com', '1', '2021-03-01 13:16:45', '2021-03-01 13:16:45'),
(15, '11', '60', '5 rating', '5', 'Test', 'rishabh.soni@thedetmail.com', '1', '2021-03-01 13:17:45', '2021-03-01 13:17:45'),
(16, '10', '60', '5 star', '5', 'Test', 'rishabh.soni@thedetmail.com', '1', '2021-03-01 14:09:28', '2021-03-01 14:09:28'),
(17, '10', '60', '3 star', '0', 'Test', 'rishabh.soni@thedetmail.com', '1', '2021-03-01 14:10:02', '2021-03-01 14:10:02'),
(18, '10', '60', '3 star', '3', 'Test', 'rishabh.soni@thedetmail.com', '1', '2021-03-01 14:10:32', '2021-03-01 14:10:32'),
(19, '10', '60', '1234', '5', 'Test', 'rishabh.soni@thedetmail.com', '1', '2021-03-01 14:18:46', '2021-03-01 14:18:46'),
(20, '13', '60', '1', '1', 'Test', 'rishabh.soni@thedetmail.com', '1', '2021-03-01 14:19:59', '2021-03-01 14:19:59'),
(21, '13', '60', '3', '0', 'Test', 'rishabh.soni@thedetmail.com', '1', '2021-03-01 14:20:07', '2021-03-01 14:20:07'),
(22, '12', '60', '5', '5', 'Test', 'rishabh.soni@thedetmail.com', '1', '2021-03-01 14:22:05', '2021-03-01 14:22:05'),
(23, '12', '60', '2', '2', 'Test', 'rishabh.soni@thedetmail.com', '1', '2021-03-01 14:22:15', '2021-03-01 14:22:15'),
(24, '12', '60', '4', '4', 'Test', 'rishabh.soni@thedetmail.com', '1', '2021-03-01 14:22:25', '2021-03-01 14:22:25'),
(25, '7', '60', 'testing with unregistered mail id', '4', '98269', 'rishbah98269@gmail.com', '1', '2021-03-02 06:57:13', '2021-03-02 06:57:13'),
(26, '8', '64', 'Text', '5', 'Testing', 'rishabh.random@mailid.com', '1', '2021-03-03 11:56:24', '2021-03-03 11:56:24'),
(27, '8', '64', 'text', '3', 'Test2', 'rishabh.random@mailid.com', '1', '2021-03-03 11:56:48', '2021-03-03 11:56:48'),
(28, '8', '64', 'text', '1', 'Test 3', 'rishabh.random@mailid.com', '1', '2021-03-03 11:57:06', '2021-03-03 11:57:06'),
(29, '8', '64', 'text', '4', 'Test 4', 'rishabh.random@mailid.com', '1', '2021-03-03 11:57:33', '2021-03-03 11:57:33'),
(30, '8', '64', 'text', '5', 'Test 5', 'rishabh.random@mailid.com', '1', '2021-03-03 11:57:51', '2021-03-03 11:57:51'),
(31, '13', '60', 'Review with an unregistered mail id', '5', 'Test', 'rishabh.soni98267@gmail.com', '1', '2021-03-04 05:51:23', '2021-03-04 05:51:23'),
(32, '13', '60', '4 star', '4', 'Test', 'rishabh.soni@thedetmail.com', '1', '2021-03-04 11:54:40', '2021-03-04 11:54:40'),
(33, '7', '60', 'testing', '0', 'Test', 'rishabh.soni@thedetmail.com', '1', '2021-03-05 11:00:59', '2021-03-05 11:00:59'),
(36, '12', '60', 'Test mozilla', '5', 'Test', 'rishabh.soni@thedetmail.com', '1', '2021-03-08 06:58:15', '2021-03-08 06:58:15'),
(35, '7', '60', '08/03/21 2.0', '5', 'Test', 'rishabh.soni@thedetmail.com', '1', '2021-03-08 05:18:18', '2021-03-08 05:18:18'),
(37, '12', '64', 'Test Chrome', '3', 'Test', 'rishabh.random@mailid.com', '1', '2021-03-08 06:59:08', '2021-03-31 12:09:25');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `field` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `field`, `value`, `created_at`, `updated_at`) VALUES
(4, 'company', 'Empathicos', '2019-08-13 18:15:31', '2021-02-05 06:14:26'),
(5, 'contact', '9575979998', '2020-07-15 00:27:31', '2021-01-23 07:56:08'),
(6, 'address', '272 Moen Heights Suite 509', '2020-07-15 00:27:31', '2020-07-15 00:27:31'),
(7, 'email', 'info@empathicos.com', '2020-07-15 00:27:31', '2021-01-25 08:31:40'),
(8, 'phone', '4567897897', '2020-07-15 00:27:31', '2020-07-15 00:27:31'),
(9, 'mobile', '7895895895', '2020-07-15 00:27:31', '2021-01-25 08:31:40'),
(10, 'fax', '12315456465465', '2020-07-15 00:27:31', '2020-07-15 00:27:31'),
(11, 'website', 'www.empathicos.com', '2020-07-15 00:27:31', '2021-01-25 08:31:40'),
(12, 'favicon', '431611830999.png', '2020-07-15 00:27:31', '2021-01-28 05:19:59'),
(13, 'logo', '461611830999.png', '2020-07-15 00:27:31', '2021-01-28 05:19:59'),
(14, 'shipping_charges', '50', '2020-07-15 00:27:31', '2021-01-25 06:20:05'),
(15, 'facebook', 'http://www.facebook.com', '2020-07-15 00:27:31', '2021-02-05 06:14:14'),
(16, 'twitter', 'http://www.twitter.com', '2020-07-15 00:27:31', '2021-01-28 05:19:59'),
(17, 'linkedin', 'http://www.linkedin.com', '2020-07-15 00:27:31', '2021-01-28 05:19:59'),
(18, 'instagram', 'http://www.instagram.com', '2020-07-15 00:27:31', '2021-01-25 06:20:05');

-- --------------------------------------------------------

--
-- Table structure for table `templates`
--

CREATE TABLE `templates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(10) DEFAULT NULL,
  `field` int(10) DEFAULT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `templates`
--

INSERT INTO `templates` (`id`, `category_id`, `field`, `value`, `created_at`, `updated_at`) VALUES
(70, 21, 1, '{\"title\":\"changes\",\"description\":\"Fine\",\"image\":\"161415860798.png\"}', '2021-02-24 09:23:27', '2021-02-24 09:23:27'),
(79, 11, 1, '{\"title\":\"1\",\"description\":\"In wonder we perceive the magic and beauty of life.\",\"image\":\"161615457024.jpg\"}', '2021-03-19 06:48:03', '2021-03-19 11:49:30'),
(80, 11, 2, '{\"title\":\"2\",\"short_description\":null,\"description\":\"The fairies made my coffee.\",\"image\":\"161615459332.jpg\"}', '2021-03-19 06:59:16', '2021-03-19 11:49:53'),
(81, 11, 3, '{\"title\":\"3\",\"description\":\"Be your own light on the path to magic.\",\"image\":\"161615462163.jpg\",\"second_image\":\"161615462180.jpg\"}', '2021-03-19 08:28:18', '2021-03-19 11:50:21'),
(82, 11, 4, '{\"title\":\"4\",\"description\":\"The secret is that nothing is as important as you think it is.\",\"image\":\"161615465455.jpg\"}', '2021-03-19 08:29:41', '2021-03-19 11:50:54'),
(83, 11, 5, '{\"title\":\"5\",\"short_description\":null,\"description\":\"It all depends on where you look.\",\"image\":\"161615467521.jpg\"}', '2021-03-19 08:31:33', '2021-03-19 11:52:05'),
(84, 11, 6, '{\"title\":\"6\",\"description\":\"Just be ready for fun\",\"image\":\"161615470158.jpg\",\"second_image\":\"161615470194.jpg\"}', '2021-03-19 08:32:44', '2021-03-19 11:51:41'),
(85, 11, 1, '{\"title\":\"7\",\"description\":\"When we are truly present and responding to life, a sense of wonder arises within us. With our hearts, we perceive beyond the assigned labels and places we gave to each thing in our minds. Instead of travelling the well-known paths of our own minds, we simply experience. The exhilaration of our first taste, our first sight, our first touch, emerges from our complete presence.\\r\\n\\r\\nWhen we have no expectations and experience simply what is, we can sense the infinite.\",\"image\":\"161615474513.jpg\"}', '2021-03-19 08:34:55', '2021-03-19 11:52:25'),
(86, 11, 2, '{\"title\":\"8\",\"short_description\":null,\"description\":\"Just because we are grown-ups and have to hold jobs, that hardly means we cannot have magic in our lives. In fact, we must, if we wish to avoid becoming automatons simply making it from one day to the next. There is no law or good reason to give up what made our hearts happy as children. Our fears that we may be silly or embarrass ourselves are costing us our joy. \\r\\n\\r\\nSo what have you given up that stirs your heart? Isn\\u2019t it silly to be afraid of something that could bring joy, sweetness and love into your life just because a voice from a long time ago has an opinion about it? How funny to be afraid of \\u201cfalse\\u201d hopes for beautiful realms but not of false notions about fear, doubt, guilt or shame. \\r\\n\\r\\nThe truth is we all live in a story anyway. We just seem prefer to dwell in the kingdom of the evil witch much more than anywhere else. No one is saying to hire a fairy to balance your checkbook, but if you invite a fairy to dwell in your heart and home, you may discover that you find balancing that checkbook that much easier.\",\"image\":\"161615507028.jpg\"}', '2021-03-19 08:36:00', '2021-03-19 11:57:50'),
(87, 11, 3, '{\"title\":\"9\",\"description\":\"It is in our hearts that we will find that sense of wonder we had as children discovering the world for the first time. But to rediscover our magic we must learn how to live in our hearts again.\\r\\n\\r\\nThe heroes or the heroines of any story never know which way the path will go and what they will encounter. They accept a challenge and never waver from it. They walk it and hope for the best, receiving some help along the way from little critters and sometimes even monsters with a surprisingly soft spot for lost strangers. \\r\\n\\r\\nThis is how we must walk our path in life as well \\u2013 directed in our resolve not by how difficult the journey may be, but how important it is that we make the journey. If we allow it, our heart will tell us which way to go. When we learn to listen to our hearts, we may be surprised at the feats we can accomplish. We become enchanted with our own magic. That which we thought was a silly dream proves to be real. Our truth can soften hearts and open doors we never thought were possible.\",\"image\":\"161615509542.jpg\",\"second_image\":\"161615509542.jpg\"}', '2021-03-19 08:37:38', '2021-03-19 11:58:15'),
(88, 11, 4, '{\"title\":\"10\",\"description\":\"We can learn our heart\\u2019s true desires by bringing the art of play again into our lives. As we turned from small happy children into older worried children and then into worried adults, we have learned to focus on usefulness, productivity and performance. \\r\\n\\r\\nOur hearts crave play and sometimes they may nudge us into a direction. But we make it so much harder when we take what is meant to be play and make it into work. We may be accustomed to criticizing everything we do. But play is simply about enjoying the game, without a goal in sight. This is how we are meant to be living life.\\r\\n\\r\\nExplore your heart\\u2019s wishes without looking for a particular result. If the child in you wants to paint, sing, dance, or play an instrument, give yourself the experience of trying it out. Do not let fears stop you from trying anything.\",\"image\":\"161615511374.jpg\"}', '2021-03-19 08:38:27', '2021-03-19 11:58:33'),
(89, 11, 5, '{\"title\":\"11\",\"short_description\":null,\"description\":\"If we lost our sense of wonder, we may simply be looking in the wrong direction too much. We can become so consumed with our mind games of worry that we completely forget that we have another option. \\r\\n\\r\\nOur magic is such that one thought may be all it takes to remind us that the Universe is magical. With some discipline, we can learn to enjoy the magic of life far more than our worry wort thoughts that do not serve any purpose. Make a decision to look for the good in  life more often, and watch how your magic works miracles.\",\"image\":\"161615514978.jpg\"}', '2021-03-19 08:39:30', '2021-03-19 11:59:09'),
(90, 11, 6, '{\"title\":\"12\",\"description\":\"When we were children, everything was fair game for play. Our hearts and imagination could transform the drabbest box into a castle and any activity into a game. We had it right at the beginning.\\r\\n\\r\\nIn our hearts, we always remain children, and it is through our hearts that we can transform our entire experience of life. We can uplift our lives by making more of what we do into play, and bringing the spirit of play into the way we approach our lives.\",\"image\":\"161615519147.jpg\",\"second_image\":\"161615519258.jpg\"}', '2021-03-19 08:41:06', '2021-03-19 11:59:52'),
(91, 6, 1, '{\"title\":\"1\",\"description\":\"Pray with the heart and mind of a child.\",\"image\":\"161615522067.jpg\"}', '2021-03-19 08:49:36', '2021-03-19 12:00:20'),
(92, 6, 2, '{\"title\":\"2\",\"short_description\":null,\"description\":\"You were never meant to walk alone \\u2013 release your burdens and welcome the answers.\",\"image\":\"161615524319.jpg\"}', '2021-03-19 08:50:41', '2021-03-19 12:00:43'),
(93, 6, 3, '{\"title\":\"3\",\"description\":\"Pray as to a beloved.\",\"image\":\"161615532594.jpg\",\"second_image\":\"161615532561.jpg\"}', '2021-03-19 08:52:32', '2021-03-19 12:02:05'),
(94, 6, 4, '{\"title\":\"4\",\"description\":\"Your wishes are real, but if you allow it, love will grant you more than you could imagine.\",\"image\":\"161615534840.jpg\"}', '2021-03-19 08:54:04', '2021-03-19 12:02:28'),
(95, 6, 5, '{\"title\":\"5\",\"short_description\":null,\"description\":\"Pray at the feet of your love not your fears.\",\"image\":\"161615536762.jpg\"}', '2021-03-19 08:56:22', '2021-03-19 12:02:47'),
(103, 9, 1, '{\"title\":\"1\",\"description\":\"Love always celebrates our freedom.\",\"image\":\"161615590735.jpg\"}', '2021-03-19 09:55:44', '2021-03-19 12:11:47'),
(104, 9, 2, '{\"title\":\"2\",\"short_description\":null,\"description\":\"We need to let our own hearts teach us about love what others could not.\",\"image\":\"161615594335.jpg\"}', '2021-03-19 10:04:55', '2021-03-19 12:12:23'),
(105, 9, 3, '{\"title\":\"3\",\"description\":\"To love others only when they please us is an easy task.\",\"image\":\"161615595010.jpg\",\"second_image\":\"161615595088.jpg\"}', '2021-03-19 10:05:36', '2021-03-19 12:12:31'),
(109, 9, 4, '{\"title\":\"4\",\"description\":\"Love always includes us and our pursuit of our soul\\u2019s path.\",\"image\":\"161615596078.jpg\"}', '2021-03-19 10:15:38', '2021-03-19 12:12:40'),
(116, 6, 6, '{\"title\":\"6\",\"description\":\"When the questions are gone, everything becomes our prayer.\",\"image\":\"161615539281.jpg\",\"second_image\":\"161615539251.jpg\"}', '2021-03-19 10:21:17', '2021-03-19 12:03:12'),
(117, 6, 1, '{\"title\":\"7\",\"description\":\"In prayer, trust the way a child trusts. Dare to trust that you are loved and held, and that all that you need will indeed come. If we doubt that we are loved, it is only because we perceive ourselves unlovingly. Every part of us that we deem messy, unsightly, shameful, guilty, or unworthy is being loved. Each one of our fears is allowed. When you pray, surrender all your thoughts, and allow what is to flow through you. Feel how you are being loved exactly as you are.\",\"image\":\"161615540873.jpg\"}', '2021-03-19 10:21:38', '2021-03-19 12:03:28'),
(118, 6, 2, '{\"title\":\"8\",\"short_description\":null,\"description\":\"Day by day we are walking on a path that we don\\u2019t understand or know where it may lead us. Answers become clear and miracles come into our lives when we learn to let go of our worries and surrender them in the loving arms of the Divine. We were never meant to walk on our own but we got so busy thinking our way through life that we forgot we walk with angels. In praying we search our hearts to confess our fears, doubts and love, and we choose to ask the Divine to assist us on our paths. Nothing is too small or too big to be surrendered to the Divine. In silence listen and watch for answers.\",\"image\":\"161615543159.jpg\"}', '2021-03-19 10:21:57', '2021-03-19 12:03:51'),
(119, 6, 3, '{\"title\":\"9\",\"description\":\"We were led to believe we will be rewarded and punished, deemed worth or unworthy. These are stories we learned about the Divine and us. If we can see beyond our own sense of unworthiness and fear, we learn we were never created to be beggars. All that is required to speak to the Divine is in our hearts. In anger, fear, grief, confusion, doubt, shame or guilt we are always loved. No matter what we believe about ourselves, the Divine always helps us heal the pain while guiding us into our own power and magic.\",\"image\":\"161615545582.jpg\",\"second_image\":\"161615545543.jpg\"}', '2021-03-19 10:22:12', '2021-03-19 12:04:15'),
(120, 6, 4, '{\"title\":\"10\",\"description\":\"Our hearts will always speak our wishes in prayer. How can they not? To us, their meanings are true and dear. But as we ask the Divine to grant us what we wish, we are also limited in understanding what is possible and what it is that we are truly asking for. Confess your wishes but open your prayer in asking that the goodness of the Divine shower you beyond that which you can imagine. We may become attached to outcomes, but how can we know where they will lead us? Invite the Divine to guide you to your highest good. Ask for wisdom to see and courage to follow through. Invite the Divine to lead you into your greatness instead of trying to lead the Divine to your vision.\",\"image\":\"161615579430.jpg\"}', '2021-03-19 10:22:44', '2021-03-19 12:09:54'),
(121, 6, 5, '{\"title\":\"11\",\"short_description\":null,\"description\":\"The Divine makes no demand of us. Any rules, formalities or laws are made up. We do not need to hold on tightly for fear of being punished. The discipline of prayer or any other spiritual practice is an act of love for ourselves and our path in life. We are always loved and protected, although only we can decide how to move forward. How we pray, whether we pray, and where we pray are all ours to decide and discover. In prayer, follow your heart, and discover how you speak to the Divine\",\"image\":\"161615581371.jpg\"}', '2021-03-19 10:23:08', '2021-03-19 12:10:13'),
(122, 6, 6, '{\"title\":\"12\",\"description\":\"When we let go of the mind and listen to the heart, there are no questions left. The silence answers itself. Questions and requests are rites of passage until we arrive in the silent truth of the heart and know the questions and requests do not matter. Then everything we do is prayer, a continuous conversation with the Divine through silence, word or action.\",\"image\":\"161615583327.jpg\",\"second_image\":\"161615583335.jpg\"}', '2021-03-19 10:23:25', '2021-03-19 12:10:33'),
(123, 9, 5, '{\"title\":\"5\",\"short_description\":null,\"description\":\"Love lives in the light of truth.\",\"image\":\"161615600196.jpg\"}', '2021-03-19 10:27:05', '2021-03-19 12:17:26'),
(124, 9, 6, '{\"title\":\"6\",\"description\":\"Our mere presence is not a stamp of love.\",\"image\":\"161615601476.jpg\",\"second_image\":\"161615601476.jpg\"}', '2021-03-19 10:27:49', '2021-03-19 12:17:30'),
(125, 9, 1, '{\"title\":\"7\",\"description\":\"The invitation of life is to love freely, experience as much as our heart calls us to, and celebrate the freedom to do so.  The binds that we seek to create in our relationships are not born out of love but of need. Love\\u2019s answer to our pursuit of freedom, joy, and purpose can only be a celebration.\\r\\nIt is only from our need for certainty and the desire to have others fulfill our needs, that we determine that certain commitments need to be made in our relationships. To truly love, we need to accept loss as part of life and love. Everything that makes up the human experience is impermanent.  Our life here itself asks us to learn how to love and let go. \\r\\nWe are invited to accept the impermanence of everyone and everything we love, make peace with it, let go when the time comes and grieve. If we seek to avoid pain, we can only create oppressive relationships that do not serve love. Accept that pain may come, yet let this not tame your love.\",\"image\":\"161615601991.jpg\"}', '2021-03-19 10:28:22', '2021-03-19 12:13:39'),
(126, 9, 2, '{\"title\":\"8\",\"short_description\":null,\"description\":\"We learn about love from those who teach us first. The lessons of love that we receive can only be as good as the teachers. If someone had explained our childhood to us, we would have known that all that we learned was how well our parents have learned from their parents to behave with others. Instead, we believed we were learning something essential about love and our own worthiness. \\r\\n\\r\\nOur definition of love may be so narrow as to keep us bound in lives that do not honor our hearts and souls. We may beg at the feet of others for reassurance, yet our hearts await for us to discover our own magic. Only when we heal our wounds, learn our own strength and how to live from love, can we possibly begin to know how to love another.\",\"image\":\"161615602750.jpg\"}', '2021-03-19 10:29:07', '2021-03-19 12:13:47'),
(127, 9, 3, '{\"title\":\"9\",\"description\":\"What we all long for is to be loved and accepted exactly as we are. We want to be seen and accepted fully without reservation. Yet we are easily tempted in our relationships to make demands and throw up our arms in frustration when we are not satisfied. Or we may be willing to forsake who we truly are to satisfy the demands of another. \\r\\n\\r\\nThe only true manifestation of love is full acceptance.  Love never demands that we renounce who we truly are. It is only our unwillingness to take responsibility for our needs, desires and fears that drives us to make demands. To love only when others please us, is an easy task. But can we love them as they are when we are dissatisfied?  \\r\\n\\r\\nInstead of seeking to change others, we need to seek our own truth. It is always easier to look to others as our source of pain or joy, yet we are the ones responsibly for both.\",\"image\":\"161615604079.jpg\",\"second_image\":\"161615604027.jpg\"}', '2021-03-19 10:29:51', '2021-03-19 12:14:00'),
(128, 9, 4, '{\"title\":\"10\",\"description\":\"Sometimes love for ourselves will ask us to act in ways that create temporary pain but help us follow our path of evolution and expansion. What compass do we have in life but ourselves? When our souls speak and beckons us to act, we simply must follow. \\r\\n\\r\\nThere may be wreckage around us, the remains of past dreams and our hearts may be torn between the past and the future. We might wish to comfort those whose hearts we broke as we move forward. Yet all we can do is keep going. In our hearts we can continue to treasure and love what we left behind , and learn to release the pain with tears. \\r\\n\\r\\nIn love, sometimes we must learn how to come together and come apart. The difficulty of the undertaking cannot dictate the course we take. \\r\\n\\r\\n5. The path of love and compassion demands courage and ruthless honesty.  It is easy to use thoughts as shields from uncomfortable truths, but we are also shielding ourselves from love.\\r\\nTo open our hearts to let love and compassion overflow we must relinquish our desire to hide from the truth about ourselves and others.  When we are able to look at pain courageously, we can show others how much their being, light, dignity, joy and peace are worth.\",\"image\":\"161615618549.jpg\"}', '2021-03-19 10:31:12', '2021-03-19 12:16:25'),
(129, 9, 5, '{\"title\":\"11\",\"short_description\":null,\"description\":\"The path of love and compassion demands courage and ruthless honesty.  It is easy to use thoughts as shields from uncomfortable truths, but we are also shielding ourselves from love.\\r\\n\\r\\nTo open our hearts to let love and compassion overflow we must relinquish our desire to hide from the truth about ourselves and others.  When we are able to look at pain courageously, we can show others how much their being, light, dignity, joy and peace are worth.\",\"image\":\"161615619351.jpg\"}', '2021-03-19 10:32:30', '2021-03-19 12:16:33'),
(130, 9, 6, '{\"title\":\"12\",\"description\":\"Sometimes in our intimate relationships we may confuse the daily business of life with love itself. Yet our mere presence is not a stamp of love. \\r\\n\\r\\nTo nourish our relationships we need to show our loved ones that we love them. It is wonderful to have the privilege of sharing our journeys with people we love, so why not show it? Our intimate relationships offer us endless chances to live in the magic of our hearts. \\r\\n\\r\\nAre you adding sweetness to your daily life? All it takes is a simple gesture to remind the other person that they are special and unique for you.\",\"image\":\"161615620262.jpg\",\"second_image\":\"161615620274.jpg\"}', '2021-03-19 10:33:08', '2021-03-19 12:16:42'),
(131, 13, 1, '{\"title\":\"1\",\"description\":\"When we can see all the blessings of life, gratitude inevitably fills our hearts.\",\"image\":\"161615632565.jpg\"}', '2021-03-19 10:34:28', '2021-03-19 12:18:45'),
(132, 13, 2, '{\"title\":\"2\",\"short_description\":null,\"description\":\"As our hearts open to love for all beings, their blessings become our blessings.\",\"image\":\"161615636161.jpg\"}', '2021-03-19 10:34:58', '2021-03-19 12:19:21'),
(133, 13, 3, '{\"title\":\"3\",\"description\":\"In gratitude we learn what our hearts treasure.\",\"image\":\"161615637881.jpg\",\"second_image\":\"161615637854.jpg\"}', '2021-03-19 10:35:41', '2021-03-19 12:19:38'),
(134, 13, 4, '{\"title\":\"4\",\"description\":\"Gratitude reminds us who we really are.\",\"image\":\"161615638071.jpg\"}', '2021-03-19 10:37:32', '2021-03-19 12:19:40'),
(135, 13, 5, '{\"title\":\"5\",\"short_description\":null,\"description\":\"Gratitude is an invitation.\",\"image\":\"161615639296.jpg\"}', '2021-03-19 10:38:45', '2021-03-19 12:19:52'),
(136, 13, 6, '{\"title\":\"6\",\"description\":\"In gratitude we allow ourselves to be vulnerable divine children.\",\"image\":\"161615640592.jpg\",\"second_image\":\"161615640575.jpg\"}', '2021-03-19 10:40:05', '2021-03-19 12:20:05'),
(137, 13, 1, '{\"title\":\"7\",\"description\":\"We can only be grateful for what we know we have. Our perception of life depends on our habits of thought and emotion. We may be rich yet feel poor. We may be loved yet feel unloved. Our minds are like dark rooms in which we develop the films of our lives. It is when we allow the light of truth to enter our hearts and minds that we can begin to see blessings. With the willingness to take responsibility for our hearts and minds, comes the possibility of seeing how much we have but fail to see. A practice of gratitude is a first step in learning to see life differently. Make gratitude your first thought and prayer as you wake up.\",\"image\":\"161615051965.png\"}', '2021-03-19 10:41:59', '2021-03-19 10:41:59'),
(138, 13, 2, '{\"title\":\"8\",\"short_description\":null,\"description\":\"What is received by others is truly also received by us as well. We live in oneness. All the blessings of life here and of all creation throughout the Universe are yours as well.\\r\\n\\r\\n We may be unaware of all that we hold in our hearts and souls, of all that we love and mourn. Our minds may not comprehend, but our hearts know and long for a world where every being is safe, protected and loved. Our gratitude need not be limited to what we perceive to be our blessings. It is in rejoicing for all that others receive that we can know our hearts fully. \\r\\n\\r\\nPause and consider how the blessings in others\\u2019 lives have been blessings for you as well. How the Universe serves you in serving them. How so much that is created to uplift our lives can only exist because of the blessings others have received throughout eons of time.\",\"image\":\"161615645948.jpg\"}', '2021-03-19 10:42:34', '2021-03-19 12:20:59'),
(139, 13, 3, '{\"title\":\"9\",\"description\":\"As we pause to reflect what we feel grateful for, we learn what we hold dear in our hearts. It is a chance to connect and understand ourselves, and be present for the unfolding of our lives. Sometimes we may become so disconnected from what we feel that we may not be aware of what love.\\r\\n\\r\\n Do not despair if you do not know. You are not made of stone \\u2013 you just need to learn how to let your heart speak louder than your thoughts. Take a step every day to connect with your heart. Make gratitude a practice and let it slowly teach you what is in your heart.\",\"image\":\"161615647432.jpg\",\"second_image\":\"161615647495.jpg\"}', '2021-03-19 10:43:30', '2021-03-19 12:21:14'),
(140, 13, 4, '{\"title\":\"10\",\"description\":\"Gratitude is not an offering but a state of being. When we are fully grateful for our entire lives, beyond judgment of good and bad, we reclaim who we truly are and our rightful place in the Universe. As powerful, divine beings we can only be grateful for we can perceive the wonder, joy, abundance of ourselves and the Universe. We understand how loved and protected we are and that we are creators of our lives. \\r\\n\\r\\nWhen we perceive who we are and the beauty of the Universe, gratitude flows naturally. Use gratitude practice to connect you to the wonder and magic of you and the Universe. Imagine the highest outcomes and allow yourself to feel as given. Know that they may come in ways you may not recognize, yet all is there to serve you. Whenever life challenges you, try to reconnect to this state. What we focus on, grows.\",\"image\":\"161615648185.jpg\"}', '2021-03-19 10:44:13', '2021-03-19 12:21:21'),
(141, 13, 5, '{\"title\":\"11\",\"short_description\":null,\"description\":\"Gratitude is an invitation for more of what we love into our lives. Just as showing gratitude for presents that we receive from those we love tells them that we love gifts, so our gratitude tells the Universe what it is that we want to invite in our lives. We always have choices and gratitude is one way to make a choice. The Universe lovingly supports us in our choices. Consider what you focus on in your life. How much do you focus on appreciating your positive emotions and the positive flow into your life? It may not come naturally, but a consistent daily practice can help you make strides.\",\"image\":\"161615648813.jpg\"}', '2021-03-19 10:44:58', '2021-03-19 12:21:28'),
(142, 13, 6, '{\"title\":\"12\",\"description\":\"To be grateful for all that we have \\u2013 our life, the present moment, our health, the ones we love \\u2013 we need to open our hearts and allow ourselves to be vulnerable. In gratitude, we acknowledge what is important to us and the fragility of it. Without vulnerability, we cannot acknowledge how much we love and how much it means. \\r\\n\\r\\nIn gratitude we live both in the knowledge of our own eternal divine nature and in the understanding of our human nature. We celebrate all that we have, knowing blessings may not always look like blessings to us. To be human is to be vulnerable, but our hearts are our greatest strength. \\r\\n\\r\\n It may feel challenging to allow yourself to fully appreciate how much you love and treasure your own life. But without this vulnerability, we are rejecting the most precious parts of ourselves and denying ourselves the sweetness of love and joy. We are allowed to cry for what we love and for what cannot be. We are allowed to acknowledge that our hearts love immensely. It is in the foreground of loss and love that gratitude and joy for what we have grows.\",\"image\":\"161615650010.jpg\",\"second_image\":\"161615650098.jpg\"}', '2021-03-19 10:49:11', '2021-03-19 12:21:40'),
(143, 12, 1, '{\"title\":\"1\",\"description\":\"When we trust who we are and that all that we need will be provided, we become like children, joyful just to be.\",\"image\":\"161615663911.jpg\"}', '2021-03-19 10:50:07', '2021-03-19 12:23:59'),
(144, 12, 2, '{\"title\":\"2\",\"short_description\":null,\"description\":\"Your joy requires no justification.\",\"image\":\"161615664962.jpg\"}', '2021-03-19 10:50:37', '2021-03-19 12:24:09'),
(145, 12, 3, '{\"title\":\"3\",\"description\":\"What may feel natural is merely familiar.\",\"image\":\"161615666257.jpg\",\"second_image\":\"161615666260.jpg\"}', '2021-03-19 10:51:14', '2021-03-19 12:24:22'),
(146, 12, 4, '{\"title\":\"4\",\"description\":\"Outside circumstances tell us nothing about happiness. The king and the pauper may have much in common.\",\"image\":\"161615666963.jpg\"}', '2021-03-19 10:51:49', '2021-03-19 12:24:29'),
(147, 12, 5, '{\"title\":\"5\",\"short_description\":null,\"description\":\"Joy is the only logical path. The sacrifice of our wellbeing is always futile.\",\"image\":\"161615670664.jpg\"}', '2021-03-19 10:52:40', '2021-03-19 12:25:06'),
(148, 12, 6, '{\"title\":\"6\",\"description\":\"Joy requires a commitment to liberation from the forces of doubt, apathy, self-denigration and self-denial that lurk within us.\",\"image\":\"161615671858.jpg\",\"second_image\":\"161615671838.jpg\"}', '2021-03-19 10:53:29', '2021-03-19 12:25:18'),
(149, 12, 1, '{\"title\":\"7\",\"description\":\"To be joyful, we need much less than we think need from the outside world. Our own nature is joy, but as we learned how to navigate the world, we also learned that our own nature may be shameful, dangerous or inappropriate. We became distrustful of our true nature as we discovered the pain of rejection or invalidation ,or as we were taught that safety can come only if we follow certain paths. \\r\\n\\r\\nEverything is a story that we can choose to no longer believe and we can release into the ether. Pay attention to the stories you think you know about yourself and the world, and question them. Are they helping you to be free and joyful? Choose a new narrative that enables you to trust your true nature and declare it to yourself until it becomes a new way of being. Our true nature is not merely an option that we are born with \\u2013 our true nature is who we are.\",\"image\":\"161615673547.jpg\"}', '2021-03-19 10:53:53', '2021-03-19 12:25:35'),
(150, 12, 2, '{\"title\":\"8\",\"short_description\":null,\"description\":\"Joy requires no justification. Our utilitarian intellect may seek to bind our joy to artificial notions of worthiness, fairness, usefulness or profit, and justify our joy on the basis of external circumstances. There is no need to explain, analyze or understand our joy. Joy is simply a state of our being. To seek to justify it is to try to justify our own existence. If joy shines within you, welcome it and let its warmth delight you and heal you.  It is the nature of the mind to seek to pick it apart until our wounds bleed again. Protect your joy by teaching your mind to no longer pick it apart according to its habits. Learn the simplicity of breathing and being.\",\"image\":\"161615676095.jpg\"}', '2021-03-19 10:54:38', '2021-03-19 12:26:00'),
(152, 12, 3, '{\"title\":\"9\",\"description\":\"How we see the world is dictated by what we believe about the world and our place in it. Where we place our focus occupies our minds and our hearts. The world contains everything according to the path of each being and the collective creative process. \\r\\n\\r\\nIt is easy to feel like a victim without choice, at the mercy of external forces. Doubt, worry, fear, shame, guilt, are the way most people experience life, unaware that this is only one possibility woven into a narrative. It may seem impossible that something else exists within reach, but it is only one thought away. \\r\\n\\r\\nWhat if you chose to focus on all that is uplifting? For reasons unknown, we are more afraid of the false hope than of the grey world of worry, doubt, and fear that crushes the possibility of joy.\",\"image\":\"161615677113.jpg\",\"second_image\":\"161615677182.jpg\"}', '2021-03-19 10:55:56', '2021-03-19 12:26:11'),
(154, 12, 4, '{\"title\":\"10\",\"description\":\"It seems a given that the ebb and flow of outside circumstances will catalyze our inner lives. A slight remark or a change of plans, and peace and joy may become distant memories. We drew the wrong conclusions from our observations in early life. \\r\\n\\r\\nThere is no law that invites the outside world inside of us to wreak havoc, any more than you have to open your door to the storms and critters outside your home. When we find ourselves tumbling inside, we can know that we have yet to master the full art of our being. \\r\\n\\r\\nIt may seem easier to dodge the bullet of responsibility, but no one else will help us live our lives. We don\\u2019t get any rehearsals and the time to live is now. Consider why as anything unpleasant unfolds in your life you need to allow it to destruct your wellbeing.\",\"image\":\"161615677977.jpg\"}', '2021-03-19 10:58:22', '2021-03-19 12:26:19'),
(155, 12, 5, '{\"title\":\"11\",\"short_description\":null,\"description\":\"When we feel wronged in some way we may cling to our hurt, anger, blame, righteous indignation. We follow the well-trodden paths of our thoughts into addictive and satisfying scenarios. \\r\\n\\r\\nTo tread the smooth paths we treaded so many times before is easier than to change course toward our joy. We are clinging like addicts to what blocks joy in our lives, allowing the past to confine the present. Learn to forgive and let go, releasing the past, and the pain so you can live the joy that is your birthright. \\r\\n\\r\\nYour negative thoughts and emotions are merely the result of stories you told yourself too many times. We may believe that our self-destructive emotions serve the purpose of improving our reality, but they never do.\",\"image\":\"161615679082.jpg\"}', '2021-03-19 10:59:24', '2021-03-19 12:26:30'),
(156, 12, 6, '{\"title\":\"12\",\"description\":\"We all desire joy yet when faced with its possibility we may be easily hi-jacked by our self-defeating ways. Joy is a possibility for us all the time, but one that we may be ill-equipped to choose. After years of living without it, we have less tolerance for it than we know. \\r\\n\\r\\nWe want it, yet our minds, hearts and bodies have become so used to apathy or pain that joy is unfamiliar territory to be discovered slowly. To live in joy, we need to commit to free ourselves from the forces of doubt, apathy, self-denigration, self-deprecation, self-denial, fear, trauma that lurk within us. Otherwise, like addicts, we will easily toss joy for the familiar comfort of old thoughts and emotions.\",\"image\":\"161615680131.jpg\",\"second_image\":\"161615680117.jpg\"}', '2021-03-19 11:00:26', '2021-03-19 12:26:41'),
(157, 7, 1, '{\"title\":\"1\",\"description\":\"Desires reveal to us who we are.\",\"image\":\"161615698196.jpg\"}', '2021-03-19 11:01:37', '2021-03-19 12:29:41'),
(158, 7, 2, '{\"title\":\"2\",\"short_description\":null,\"description\":\"Our desires may just be a chase for the past.\",\"image\":\"161615698861.jpg\"}', '2021-03-19 11:02:15', '2021-03-19 12:29:48'),
(159, 7, 3, '{\"title\":\"3\",\"description\":\"We are poor translators of our desires.\",\"image\":\"161615700988.jpg\",\"second_image\":\"161615700983.jpg\"}', '2021-03-19 11:06:14', '2021-03-19 12:30:09'),
(160, 7, 4, '{\"title\":\"4\",\"description\":\"Our intentions can create order from chaos.\",\"image\":\"161615701246.jpg\"}', '2021-03-19 11:07:23', '2021-03-19 12:30:12'),
(161, 7, 5, '{\"title\":\"5\",\"short_description\":null,\"description\":\"Do you know what you are saying  yes to?\",\"image\":\"161615702580.jpg\"}', '2021-03-19 11:07:58', '2021-03-19 12:30:26'),
(162, 7, 6, '{\"title\":\"6\",\"description\":\"We can choose the past or we can choose liberation.\",\"image\":\"161615704684.jpg\",\"second_image\":\"161615704649.jpg\"}', '2021-03-19 11:08:51', '2021-03-19 12:30:46'),
(163, 7, 1, '{\"title\":\"7\",\"description\":\"The objects of all our desires are only approximations in the end of what we are truly seeking \\u2013 ourselves. Feeling our desires and engaging in the pursuit of our desires, we are experiencing ourselves. \\r\\n\\r\\nIt is only through our experiences, whether we judge them good or bad, that we can bring to light and experience the many parts of ourselves. Without desire there would be no pursuit. \\r\\n\\r\\nOur minds, bodies, hearts, and souls, each speak a different language. From a complex alchemy, we decide which desires to pursue. And each reveals to us something else about who we are. Some desires show us the difference between illusion and truth; others reveal to us what we treasure the most. In a dance of elation, joy, hope, loss and grief, we experience our bodies,  egos, hearts and souls. It is through desire that we can experience the full measure of what it means to be human.\",\"image\":\"161615706512.jpg\"}', '2021-03-19 11:09:35', '2021-03-19 12:31:05'),
(164, 7, 2, '{\"title\":\"8\",\"short_description\":null,\"description\":\"Unaware of what drives us, we may be led by desires that bind us to our past. As we learned what brings us pain, rejection, validation or love, our beliefs about what is desirable were born. We then follow a path dictated by the earliest lessons in life looking predictably for what we learned to desire. \\r\\n\\r\\nWhen the sweet nectar of promises floods our veins, we completely forget ourselves. We become devoted to answering calls within us that we don\\u2019t understand. We live in a dream that has nothing to do with our true selves, until one day we wake up. \\r\\n\\r\\nWhen the illusion is revealed, so is the distance between who we thought we were and who we truly are. In the pursuit of your desires, consider what you stand to gain and how it serves you. Our desires take us on winding paths until we can see our truth, but we can also make a choice to pursue our truth intentionally.\",\"image\":\"161615705722.jpg\"}', '2021-03-19 11:10:39', '2021-03-19 12:30:57'),
(165, 7, 3, '{\"title\":\"9\",\"description\":\"Our desires can take us into wonderful experiences or can send us down unwise and unsafe paths. When we love and honor ourselves, we can find an inner balance that allows us to distinguish between desires that would send us in an unwanted direction and those that invite us toward our evolution. \\r\\n\\r\\nBut when we are neglectful with ourselves, we become susceptible and vulnerable to compulsively seeking some momentary satisfaction. In our despair, we may reach for what does not serve us.  If we choose to turn away from the truth of our emotions, our bodies, hearts and minds, they will scream louder and louder until we learn to answer. But while we refuse to listen closely, we interpret it all as a call for something other than what it is. We think we know our desires, yet we are blind to them. \\r\\n\\r\\nWe are answering in the ways that we know. Our interpretations of our desires can only be as good as our knowledge of ourselves and the world. Our addictions or unhelpful habits are only how we learned to answer. If you observe what you do, you may learn something about the true desires within. \\r\\n\\r\\nOur natural state is one of peace, love, joy and harmony. This is as much your birthright and potential as anyone else\\u2019s. If chaos and tumult are following you, learn to pay attention, and work toward discovering your truth.\",\"image\":\"161615707911.jpg\",\"second_image\":\"161615707911.jpg\"}', '2021-03-19 11:12:29', '2021-03-19 12:31:20'),
(166, 7, 4, '{\"title\":\"10\",\"description\":\"Many desires may tug at us at any given time. With limited time in this one life, we must somehow discern which ones to follow. Therefore, we must decide what it is that we wish to pursue intentionally and consistently in our life \\u2013 it is only in the light of our intentions that the true value of each desire can be illuminated for us. \\r\\n\\r\\nOur desires will then become important to us according to how well they are aligned with our intentions. If we are pursuing love, all that is contrary will be clearly illuminated as worthless. It is in this way that we are keeping steady and know how to answer life\\u2019s calls. Even if we deviate at times, the knowledge of our highest desire will remind us of our path. \\r\\n\\r\\nSet your intentions for your life. Choose your highest pursuits and let them ordain everything else.\",\"image\":\"161615708616.jpg\"}', '2021-03-19 11:13:09', '2021-03-19 12:31:26'),
(167, 7, 5, '{\"title\":\"11\",\"short_description\":null,\"description\":\"Many of our desires are born from the mind, and the appeal of the pursuit is only as good as the assumptions that we are making about it. We might unwittingly confuse the fa\\u00e7ade of something for its true nature, and believe it is something other than it is.\\r\\n\\r\\nWe must be careful about what we assume lest we pursue careers or marriages for no reason other than a misunderstanding. When the potential cost and effort of our pursuits may be significant, it is always wise to evaluate the stories we are telling ourselves and understand what sacrifices would be required.\\r\\n\\r\\nBe weary of all stories you may be telling yourself. You may be surprised what storybook could be running the show of your life. Investigate, inquire and evaluate. Your desire may turn out to be mere fantasy or curiosity fading away in the light of truth.\",\"image\":\"161615709526.jpg\"}', '2021-03-19 11:13:53', '2021-03-19 12:31:35'),
(168, 7, 6, '{\"title\":\"12\",\"description\":\"Our desires can entrench us into the identities we built in the past or can launch us into the creation of new identities, leading us into expansion and liberation. Our true desires, that we have buried or ignored, can take us on the path of evolution and growth. \\r\\n\\r\\nWithin us lie infinite potentials awaiting our choice. What we focus on and what we allow into our lives will determine who we become. Like athletes, we will test our limits and discover how far we can go. Faced with the possibility of pursuing our true desires, we will be challenged to face our deepest fears, and change the old scripts. \\r\\n\\r\\nIt may seem impossible that we can become new, yet a day comes when the past is just another story.\",\"image\":\"1616157126100.jpg\",\"second_image\":\"161615712613.jpg\"}', '2021-03-19 11:14:41', '2021-03-19 12:32:06'),
(169, 8, 1, '{\"title\":\"1\",\"description\":\"All that we give to others, we are also giving to ourselves.\",\"image\":\"161615726147.jpg\"}', '2021-03-19 11:16:15', '2021-03-19 12:34:21'),
(170, 8, 2, '{\"title\":\"2\",\"short_description\":null,\"description\":\"We are all the same, walking different paths but sharing the same struggle.\",\"image\":\"161615727621.jpg\"}', '2021-03-19 11:16:44', '2021-03-19 12:34:36'),
(171, 8, 3, '{\"title\":\"3\",\"description\":\"There is more that we don\\u2019t know than we know.\",\"image\":\"161615728841.jpg\",\"second_image\":\"161615728818.jpg\"}', '2021-03-19 11:17:28', '2021-03-19 12:34:48'),
(172, 8, 4, '{\"title\":\"4\",\"description\":\"Hold your convictions lightly.\",\"image\":\"161615744776.jpg\"}', '2021-03-19 11:18:18', '2021-03-19 12:37:27'),
(173, 8, 5, '{\"title\":\"5\",\"short_description\":null,\"description\":\"We need self-compassion first.\",\"image\":\"161615731854.jpg\"}', '2021-03-19 11:18:54', '2021-03-19 12:35:18'),
(174, 8, 6, '{\"title\":\"6\",\"description\":\"Always love, protect and nourish yourself.\",\"image\":\"161615734488.jpg\",\"second_image\":\"161615734442.jpg\"}', '2021-03-19 11:19:32', '2021-03-19 12:35:44'),
(175, 8, 1, '{\"title\":\"7\",\"description\":\"In empathy we remain free of judgment or blame of others. We acknowledge that we are all the same, equally worthy and deserving of love and compassion regardless of our temporary identities, roles or actions.\\r\\n\\r\\nAll that we allow to others, we are also allowing to ourselves. Any time we decide that it is acceptable to regard someone as less worthy than we are, we are also excluding ourselves from unconditional love. In declaring that some of us can be deemed unworthy, we are  accepting that love is something that we need to prove ourselves worthy for. With every limitation we seek to put in place for others, we are putting in place a limitation for us and compounding our own pain. \\r\\n\\r\\nOur notions of love and the labels that we give to others were taught to us. Move past the tiny pleasures of assigning others labels and names, blaming, and being right, and claim the true measure of your heart bravely. Our hearts and minds have the capacity to honor everyone.\",\"image\":\"161615735089.jpg\"}', '2021-03-19 11:20:37', '2021-03-19 12:35:50'),
(176, 8, 2, '{\"title\":\"8\",\"short_description\":null,\"description\":\"The human experience is inherently difficult. Our entire lives are a long process of birthing ourselves in a series of painful pushes. With pain as our teacher, we are all equally challenged by life. \\r\\n\\r\\nOutside circumstances tell us little about someone else\\u2019s struggle. Our experiences are calibrated to our own unique paths in life. What may crush someone easily, might merely be an annoyance to someone else. The king may indeed feel like a pauper, and the pauper may feel rich. In empathy, we can meet everyone in the same way, acknowledging that we are all the same, and our external circumstances are merely props for our roles. \\r\\n\\r\\nWe are all in this together as human beings, struggling to find our path or muddling through the one that we have chosen. Some of us may just be better at faking complete composure.\",\"image\":\"161615736030.jpg\"}', '2021-03-19 11:21:29', '2021-03-19 12:36:00'),
(177, 8, 3, '{\"title\":\"9\",\"description\":\"When we feel our positions threatened, we find it difficult to see someone else\\u2019s perspective. Empathy elevates us above a conflict, the enmity in a relationship, above our self-interest so that we may see the other person beyond the immediate circumstances. In empathy, we go beyond our emotions, and make room for the other person and their reality.\\r\\n\\r\\nIt may seem as if in life we all engage in a series of transactions and exchanges with each other. The truth is more subtle. As we each pursue our own path, we simply serve each other in various ways. \\r\\n\\r\\nOur true contract is always with the Universe. It is easy to perceive someone else\\u2019s action as directed at us, but we are each simply taking steps in our journeys as we know how to. We are our own main event. So if you find yourself with tunnel vision, try to broaden your perspective. Anything is rarely exactly what we think it is. We rarely know why anyone truly does anything, just as we may not even know our true intentions.\\r\\n\\r\\n In your mind and heart, seek to hold an expansive view of people\\u2019s motivations. Simply pursue what you need to pursue.\",\"image\":\"161615737327.jpg\",\"second_image\":\"161615737351.jpg\"}', '2021-03-19 11:22:26', '2021-03-19 12:36:13'),
(178, 8, 4, '{\"title\":\"10\",\"description\":\"Empathy for all emerges from a knowledge that we are all one. In empathy we can reconcile what appears to be in conflict because beyond our convictions, needs, and disagreements, we can meet each other in the knowledge of our truth as divine beings.\\r\\n \\r\\nTo honor others\\u2019 versions of reality does not mean to submit to them in agreement. But it is when we meet others in this way that we can pursue our own direction with clarity. Unattached to a need to prove our righteousness, we simply pursue that which is for us to pursue.\",\"image\":\"161615738018.jpg\"}', '2021-03-19 11:23:27', '2021-03-19 12:36:20'),
(179, 8, 5, '{\"title\":\"11\",\"short_description\":null,\"description\":\"The measure of empathy we can show others depends on how much compassion we can have for ourselves and our own struggle. We may dismiss ourselves or criticize ourselves. But life is challenging for everyone, and we did not get to rehearse this life. We are allowed to struggle, and to have our emotions. \\r\\n\\r\\nYou are the first person to whom you need to show compassion. It is only when we understand the depth of our emotions, the depth of our pain, that we can find true acceptance of ourselves. As we understand ourselves, we can understand the struggles of others as well.\",\"image\":\"161615739171.jpg\"}', '2021-03-19 11:24:03', '2021-03-19 12:36:31'),
(180, 8, 6, '{\"title\":\"12\",\"description\":\"To have our hearts open we need to always be responsible for loving and caring for ourselves. When we make a choice to live from the heart, it may be tempting at times to blame others as we are being confronted with their pain. Yet it is for us to take responsibility for who we are and how we take care of ourselves. \\r\\n\\r\\nOur work is to remain loving and compassionate, while ensuring that we uplift ourselves in all the ways that we need to. We need to be discerning, and remember that while we live with our hearts open, we do not have a responsibility to act in all circumstances and to fix everything. We serve the world by doing the work of knowing our hearts and following their call. \\r\\n\\r\\nNourish yourself and set the boundaries that you need to set in your life so that you can feel free, happy and whole. Do not turn your beautiful heart into a gateway to your self-oppression.\",\"image\":\"161615741687.jpg\",\"second_image\":\"161615741681.jpg\"}', '2021-03-19 11:24:36', '2021-03-19 12:36:56'),
(181, 10, 1, '{\"title\":\"1\",\"description\":\"Through challenges we grow.\",\"image\":\"161615378188.jpg\"}', '2021-03-19 11:30:49', '2021-03-19 11:36:22'),
(182, 10, 2, '{\"title\":\"2\",\"short_description\":null,\"description\":\"On the other side of grief there is another you.\",\"image\":\"161615383033.jpg\"}', '2021-03-19 11:37:10', '2021-03-19 11:37:10'),
(183, 10, 3, '{\"title\":\"3\",\"description\":\"Rejection is a story.\",\"image\":\"161615387283.jpg\",\"second_image\":\"161615387267.jpg\"}', '2021-03-19 11:37:52', '2021-03-19 11:37:52'),
(184, 10, 4, '{\"title\":\"4\",\"description\":\"In uncertainty hold still.\",\"image\":\"161615390866.jpg\"}', '2021-03-19 11:38:28', '2021-03-19 11:38:28'),
(186, 10, 5, '{\"title\":\"5\",\"short_description\":null,\"description\":\"Replenish and regenerate.\",\"image\":\"161615403613.jpg\"}', '2021-03-19 11:40:36', '2021-03-19 11:40:36'),
(187, 10, 6, '{\"title\":\"6\",\"description\":\"Say sayonara to what hurt you.\",\"image\":\"161615408749.jpg\",\"second_image\":\"161615408780.jpg\"}', '2021-03-19 11:41:27', '2021-03-19 11:41:27');
INSERT INTO `templates` (`id`, `category_id`, `field`, `value`, `created_at`, `updated_at`) VALUES
(188, 10, 1, '{\"title\":\"7\",\"description\":\"Challenges are part of life. Faced with a challenge, we may be tempted to ask why me?  Or  \\u201cmaybe this will just blow over while I go over there to bury my head in the jar of cookies for a little bit.\\u201d When parts of our lives that are dear to us are being challenged or we are called to step up in a new way, our deepest fears are coming to the surface. We fall easy prey to the voices spelling gloom and doom, making us doubt ourselves, feel guilty for our situation or stuck in place. \\r\\n\\r\\nIt is normal, we are taught from birth that we are victims at the mercy of fate. We can be forgiven for forgetting that we have within us everything that we need to handle life and that we can indeed attract the best outcomes for ourselves. Give yourself some loving, nourish your body, and let your fear and tears run through you. Then let it all go. The voices that tell you that you cannot handle your circumstances are illusory. Our thoughts are mean grouches. \\r\\n\\r\\nEach challenge in life only asks us for our best at that time, not for a particular outcome. Do not hold yourself to invented standards. Ask the Universe for guidance and to assist you toward the highest outcome. Analyze the situation, evaluate your resources, consider what help you need to enroll and move forward.\",\"image\":\"161615413488.jpg\"}', '2021-03-19 11:42:14', '2021-03-19 11:42:14'),
(189, 10, 2, '{\"title\":\"8\",\"short_description\":null,\"description\":\"Loss of any kind can blindside us and leave us stunned as we survey the emptiness or wreckage left behind. There is no other way but through our grief not only for what was lost but also for who we were or could have been. Put your trust in your heart and know that no loss in our lives is meant to be our undoing. \\r\\n\\r\\nGrief shows us how deeply we love. From the tears that we cry, we are finding new depth, wisdom and strength. In the challenge of learning to live in a new way in the wake of loss and grief, lies the opportunity to become reborn. Inevitably, after grief, a new spring comes into our lives.\",\"image\":\"161615420855.jpg\"}', '2021-03-19 11:43:28', '2021-03-19 11:43:28'),
(190, 10, 3, '{\"title\":\"9\",\"description\":\"Sometimes in life we have five-year plans, but other times we don\\u2019t know where we are going to be tomorrow. (Really, we never know, but it is nice to think we do.) If your life as you knew it has all but disappeared and you cannot tell left from right, you are being called to find clarity within and discover a better path. When something leaves our lives, it makes room for something new toward our evolution and unfoldment. \\r\\n\\r\\nIn our performance-obsessed culture, the lack of clear path and a time of uncertainty can make us feel like failures, anxious, confused, and lost. It is tempting to keep pushing for a fix, and become frustrated when nothing works. Learn to let go. You are allowed to have a time to slow down, contemplate, and learn what it is that your next step needs to be. We hurtle along at break-neck speeds making decisions about relationships, careers, and other circumstances. Yet how often do we pause to evaluate our truth against pathways presented to us? \\r\\n\\r\\nUncertainty invites us to go within and find the certainty of who we are. The fog outside reflects the fog inside. Make peace with yourself, ask for answers, and learn to hold still and quiet until a first step becomes clear.\",\"image\":\"161615426460.jpg\",\"second_image\":\"161615426414.jpg\"}', '2021-03-19 11:44:24', '2021-03-19 11:44:24'),
(191, 10, 4, '{\"title\":\"10\",\"description\":\"If you are feeling the sting of rejection, consider if the notion of rejection has some real meaning. We are seven billion people on the planet, each driven by our own purpose, needs and desires, in search of just the right fix to help us sort out our karmas. That someone does not wish for us to be a part of their lives is hardly an indictment of who we are. Given the  numbers, what are the odds that we would be a match?\\r\\n\\r\\nIf we are lucky, others are honest and spare us some future pain. And sometimes people are jerks (yeah, we said it) who get their kicks out of making others suffer. But rejection is mostly a story we tell ourselves. This is how we label situations in which others do not treat us the way we expect them to. \\r\\nWe may get addicted to our story of being unworthy, unloved, or misunderstood and turn into needy children. This does not need to be your story. There is no rejection \\u2013 there are only encounters that we like and encounters that we do not like. Love the part of you that hurts. It needs the story of rejection to draw your attention to something. \\r\\n\\r\\nExcavate your pain and your anger, then let go. You are not less due to anyone else\\u2019s actions. Stand in the light proudly, own the ground you walk on, expect nothing from anyone and love yourself always.\",\"image\":\"161615431217.jpg\"}', '2021-03-19 11:45:12', '2021-03-19 11:45:12'),
(192, 10, 5, '{\"title\":\"11\",\"short_description\":null,\"description\":\"There are days when we may feel exhausted, drained, unable to see how we could ever get back up. Before you decide that this is just how it is going to be, check to see whether you have stretched yourself too thin. We often forget that how we feel is likely the result of our own actions and therefore we can do something about it. If you are giving too much and doing too little to nourish your body and heart, you may end up a walking zombie. \\r\\n\\r\\nTake the time to mend yourself and don\'t let your thougths take you down the wrong path. Nourish yourself with all that you know nourishes you. Awaken your senses and connect to your heart. Tomorrow the day may be much brighter. Our thoughts are not to be trusted when we are tired and depleted. As our bodies work hard to distribute our depleted resources to keep us functioning, the good mood chemistry comes last in line. \\r\\n\\r\\nIf you know you need some help, call in the help. But do not fret, this too shall pass. You will regenerate and find a bright new day. As you do, take heed from this lesson and evaluate what you need to change to keep yourself loved and nourished.\",\"image\":\"161615437248.jpg\"}', '2021-03-19 11:46:12', '2021-03-19 11:46:12'),
(193, 10, 6, '{\"title\":\"12\",\"description\":\"If self-doubt, guilt, shame or fear are overwhelming you, you can choose a new path. You can let thoughts and emotions that you learned as a child to run your life and snuff out your beautiful light, or you can decide to take a first step toward something new. Within us we all have everything needed for a joyous journey of life, and therefore, beautiful soul, you are perfectly equipped to give yourself the life that you deserve.\\r\\n\\r\\nJust because you cannot see your own light and beauty, it doesn\\u2019t mean it is not there. Do not mistake your blindness for the truth. Most people can see the beauty in others but not in themselves. \\r\\n\\r\\nCelebrate that you are a free human being who no longer has to answer to anyone\\u2019s beck and call. You can decide how you want to live on your own terms. You can decide to let go of the past, release the pain, and move toward something new.\",\"image\":\"161615444076.jpg\",\"second_image\":\"161615444013.jpg\"}', '2021-03-19 11:47:20', '2021-03-19 11:47:20');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `device_id` varchar(255) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(75) DEFAULT NULL,
  `password` varchar(128) NOT NULL,
  `about` text DEFAULT NULL,
  `image` varchar(128) NOT NULL DEFAULT 'profile.png',
  `birthday` date DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `promo_code` varchar(255) DEFAULT NULL,
  `email_verified_at` datetime DEFAULT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `device_id`, `name`, `email`, `password`, `about`, `image`, `birthday`, `status`, `promo_code`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(16, '3XdC6', 'Ajay Lowanshi', 'ajay.lowanshi@thedetmail.com', '$2y$10$hTFKU5tQnw07blliGKvutuGJNxi6t7UWZqgDzLEcUDUvjog/3XdC6', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of<strong> Lorem Ipsum.</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of<strong> Lorem Ipsum.</strong></p>', 'download_1611992429.jpg', '1994-08-21', 1, 'M4ZTE', NULL, 'xX7SOvV2VjjNyqgoI9o8JvJMswXdLKtjQeiCiHhMUI35IS7R72saQFHZoEj1', '2021-01-21 01:30:37', '2021-02-24 10:06:15'),
(17, '3XdC7', 'Ajju Lowanshi', 'ajju.lowanshi@thedetmail.com', '$2y$10$s20hXBj0zV8rg7jMzT/zQuPYAUeie4vdaIY7lHD.VmNa0xMvEqwhS', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '1611309200.png', '1996-08-21', 1, '123456', NULL, NULL, '2021-01-21 01:30:37', '2021-01-22 04:23:20'),
(19, '3XdC8', 'Test', 'ajay.lowanshsi@thedetmail.com', '$2y$10$YfQYyRtHK3rRa1LnSiipe.G1xtO/WWXMHOBOW9dm4EMmd4PWNSZ0S', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'profiles.jpg', '1995-02-02', 1, 'yOGFjN', NULL, NULL, '2021-01-27 08:53:18', '2021-01-27 08:53:18'),
(20, '3XdC9', 'Test', 'ajay.lowadnshsi@thedetmail.com', '$2y$10$DtrBuloUXC84.BiPIJ95VeZQkL53E1qKBR5uYDnOmdMp1UBZeE9Aq', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'profiles.jpg', '1995-02-02', 1, 'mI3Ng11', NULL, NULL, '2021-01-27 08:53:30', '2021-01-27 08:53:30'),
(21, '3XdC10', 'Test', 'ajay.lowdadnshsi@thedetmail.com', '$2y$10$/kLIMTaJ4k8IDrVYtszuQuxClXvkUAjEI7aPJMWaS8d5IObPVUOSu', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'profiles.jpg', '1995-02-02', 1, NULL, NULL, NULL, '2021-01-28 01:24:09', '2021-01-28 01:24:09'),
(22, '3XdC11', 'John Rarity', 'example@gmail.com', '$2y$10$.1DACjzEjg5UR9gJQ1EK1OofxC2MlaSbsiUqfD14CI3uODP6M//MG', 'About you', 'profiles.jpg', '1998-12-20', 1, NULL, NULL, NULL, '2021-01-28 01:27:29', '2021-01-28 01:27:29'),
(23, '3XdC12', 'John Rarity', 'exampsle@gmail.com', '$2y$10$XUCQeapWzD.Uz6xGZtt1zekevpvGufruw3aAaOODGHN4E6J73/uze', 'About you', 'profiles.jpg', '1998-12-20', 1, NULL, NULL, NULL, '2021-01-28 01:28:28', '2021-01-28 01:28:28'),
(24, '3XdC13', 'John Rarity', 'exasmple@gmail.com', '$2y$10$oA.NBNb4Cv.j90b7BDOX2uOntVi92ptQpVwIEhSKlCLZroVxKSQH6', 'About you', 'profiles.jpg', '1998-12-20', 1, NULL, NULL, NULL, '2021-01-28 01:32:17', '2021-01-28 01:32:17'),
(25, '3XdC14', 'John Rarity', 'exasmple2@gmail.com', '$2y$10$8PTxKdYYCY0FYIhl6Ag08.FOOI6pKDnCr3XdoA/Cs2.5/iv.jp2Vy', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'profiles.jpg', '1998-12-20', 1, NULL, NULL, NULL, '2021-01-28 01:32:28', '2021-01-28 01:32:28'),
(26, '3XdC15', 'John Rarity', 'exadsfple@gmail.com', '$2y$10$8QhS/UDKTrb2nshLlYV8buNB8ZNaYV8ZMFaSnoHFdJxbAQIND53Fu', 'About you', 'profiles.jpg', '1998-12-20', 1, NULL, NULL, NULL, '2021-01-28 02:35:42', '2021-01-28 02:40:34'),
(27, NULL, 'Your Name', '3XdC16@gmail.com', '$2y$10$TOyOT6Wq7MxfZI2oy6Doje0qcSVRCjLtviXLCRYOrISvFBsMyO4n2', 'About Your Self.', 'profile.jpg', '2021-02-02', 1, NULL, NULL, NULL, '2021-02-02 08:08:11', '2021-02-02 08:08:11'),
(28, '3XdC16', 'Your Name', '3XdC16@gmail.com', '$2y$10$zpbb9I9r9tZU8pRPHM71HuTxqxZzMrnH/M/HPgce.lxN//rP4YjO.', 'About Your Self.', 'profile.jpg', '2021-02-02', 1, NULL, NULL, NULL, '2021-02-02 08:08:40', '2021-02-02 08:08:40'),
(29, NULL, 'John Rarity', 'example5@gmail.com', '$2y$10$TOyOT6Wq7MxfZI2oy6Doje0qcSVRCjLtviXLCRYOrISvFBsMyO4n2', '<p>About Your Self.&nbsp;</p>\r\n\r\n<p>&nbsp;</p>', 'profile.jpg', '1998-12-20', 1, NULL, NULL, NULL, '2021-02-02 08:08:11', '2021-02-19 06:54:19'),
(30, '3XdC17', 'Your Name', '3XdC17@gmail.com', '$2y$10$LvTHRQwfBdYkwL7uBal/YOTM3LwihR3jSksDpyVRI2Xa3LivR6VDW', 'About Your Self.', 'profile.jpg', '2021-02-02', 1, NULL, NULL, NULL, '2021-02-02 08:11:21', '2021-02-02 08:11:21'),
(31, '3XdC18', 'Your Name', '3XdC18@gmail.com', '$2y$10$fHghR5uIbj//gVfeJHDyD.WSFbcEB9lijPRRrUkXBhla3skq7Uqke', 'About Your Self.', 'profile.jpg', '2021-02-02', 1, NULL, NULL, NULL, '2021-02-02 08:11:28', '2021-02-02 08:11:28'),
(32, '3XdC19', 'Your Name', '3XdC19@gmail.com', '$2y$10$ATvhNL3FmhtbgB0opHTNzeUqg9Knn1n6vQ9WFXTArgqUYL.Qic.nW', 'About Your Self.', 'profile.jpg', '2021-02-02', 1, NULL, NULL, NULL, '2021-02-02 08:24:00', '2021-02-02 08:24:00'),
(33, '3XdC20', 'Your Name', '3XdC20@gmail.com', '$2y$10$SIovqqMSGr3zRY3csjUdteP9vrVfnY0F96lgWwRDfU/tF.fnM15Iu', 'About Your Self.', 'profile.jpg', '2021-02-02', 1, NULL, NULL, NULL, '2021-02-02 08:24:19', '2021-02-02 08:24:19'),
(34, '3XdC21', 'Your Name', '3XdC21@gmail.com', '$2y$10$LHwgJIih.xZ7JdOAXCR2zu2clhO0ARyiS/rLf4IOUhG9NPqsTKaiG', 'About Your Self.', 'profile.jpg', '2021-02-02', 1, NULL, NULL, NULL, '2021-02-02 08:25:59', '2021-02-02 08:25:59'),
(35, '3XdC22', 'Your Name', '3XdC22@gmail.com', '$2y$10$1SntAF8u6OMGc5oDxFwgSe3PKQ.8grg7aNZgZPMvGgDuKYBDphCaG', 'About Your Self.', 'profile.jpg', '2021-02-02', 1, NULL, NULL, NULL, '2021-02-02 08:26:48', '2021-02-02 08:26:48'),
(36, '3XdC23', 'Your Name', '3XdC23@gmail.com', '$2y$10$PdrBi2jE20EIN6gzXNoteOT61wygY/JAmSPO6AxdH0yX6l5heLKIy', 'About Your Self.', 'profile.jpg', '2021-02-02', 1, NULL, NULL, NULL, '2021-02-02 08:27:00', '2021-02-02 08:35:17'),
(37, '3XdC24', NULL, '3XdC24@gmail.com', '$2y$10$uiXGjZzCUqjNpsRDUc0xKOahXz/kuOjNkq4mscRuHRGKVZ/ScNiRS', NULL, 'profile.jpg', NULL, 1, NULL, NULL, NULL, '2021-02-02 08:35:24', '2021-02-02 08:36:47'),
(38, '3XdC25', NULL, '3XdC25@gmail.com', '8253', NULL, 'profile.png', NULL, 1, NULL, NULL, NULL, '2021-02-02 08:36:49', '2021-03-03 14:52:02'),
(39, 'device_id', 'John Rarity', '39admin@gmail.com', '90504', 'About you', 'profile.png', '1998-12-20', 1, NULL, NULL, NULL, '2021-02-02 08:42:15', '2021-03-31 05:48:21'),
(53, 'e1df67ca519c552d', NULL, 'e1df67ca519c552d@gmail.com', '28549', NULL, 'profile.png', NULL, 1, NULL, NULL, NULL, '2021-02-16 09:19:46', '2021-02-17 14:28:47'),
(40, '1321323', NULL, '1321323@gmail.com', '28115', NULL, 'profile.png', NULL, 1, NULL, NULL, NULL, '2021-02-02 08:43:26', '2021-02-12 06:00:29'),
(41, '456456456', NULL, '456456456@gmail.com', '$2y$10$STj3sXMNeXsqqbL2u845j.AiHCvq7nqZmoIArtfHoOqZiDGbx2k5C', NULL, 'profile.png', NULL, 1, NULL, NULL, NULL, '2021-02-02 08:45:53', '2021-02-02 08:46:02'),
(42, '1213132', NULL, '1213132@gmail.com', '$2y$10$KtGt1KtvWL0vlp7CjqwZ6uZK8kcvS8z5PSGMfZqM6D/TyZsMjbCYu', NULL, 'profile.png', NULL, 1, NULL, NULL, NULL, '2021-02-02 08:46:12', '2021-02-02 08:46:15'),
(43, '345435', NULL, '345435@gmail.com', '53297', NULL, 'profile.png', NULL, 1, NULL, NULL, NULL, '2021-02-02 09:19:42', '2021-02-02 09:25:47'),
(44, '345434', NULL, '345435@gmail.com', '53297', NULL, 'profile.png', NULL, 1, NULL, NULL, NULL, '2021-02-02 09:30:16', '2021-02-02 09:30:16'),
(45, '1231', 'John Rarity', 'examplse@gmail.com', '86285', 'About you', 'profile.png', '1998-12-20', 1, NULL, NULL, NULL, '2021-02-02 23:33:24', '2021-02-02 23:38:12'),
(46, NULL, 'Inna Jeltai', 'ijeltsai@gmail.com', '$2y$10$TwBNjXmybXIf115oD2uA7OIkFsi4awiSQuM/vWcLeMTC9BZPlKNum', 'Write your bio here...', 'profiles.jpg', '2021-02-05', 1, NULL, NULL, NULL, '2021-02-05 09:02:05', '2021-02-05 09:02:05'),
(47, NULL, 'Inna Jeltai', 'ijeltsai@gmail.com', '$2y$10$puYrqscOzOzp3tv519sql.C2Pb5kjne.o8qg5xlpwyvRa5VkFxlii', 'Write your bio here...', 'profiles.jpg', '2021-02-05', 1, NULL, NULL, NULL, '2021-02-05 09:02:22', '2021-02-05 09:02:22'),
(48, NULL, 'Inna Jeltai', 'ijeltsai@gmail.com', '$2y$10$oqIwNIl0dIWBuat3IayCveBXc.mXUBHI9SK.7t7lDxfvP8VJtxg86', 'Write your bio here...', 'profiles.jpg', '2021-02-05', 1, NULL, NULL, NULL, '2021-02-05 09:03:18', '2021-02-05 09:03:18'),
(49, NULL, 'Inna Jeltai', 'ijeltsai@gmail.com', '$2y$10$1vrd.Y0xVM0.vnN/67ixeOrgWpjby3Q42sGoxY8kp2otwJWkgfxJC', 'Write your bio here...', 'profiles.jpg', '2021-02-05', 1, NULL, NULL, NULL, '2021-02-05 09:03:27', '2021-02-05 09:03:27'),
(50, NULL, 'Inna Jeltai', 'ijeltsai@gmail.com', '$2y$10$d9X0mcwfFQuhZE5dcspQHuOQWEN.xxKs/qBvIsJ5qnIUoryv8OZLC', 'Write your bio here...', 'profiles.jpg', '2021-02-05', 1, NULL, NULL, NULL, '2021-02-05 09:03:40', '2021-02-05 09:03:40'),
(51, NULL, 'Ajay Technician', 'ajay.lowanshdddi@thedetmail.com', '$2y$10$EPhvQwjpEHJGSqSEoJdzY.6gYHdSLI9OvEcv6ZKo/vqsvnl29rfv2', 'Write your bio here...', 'profiles.jpg', '2021-02-05', 1, NULL, NULL, NULL, '2021-02-05 09:09:12', '2021-02-05 09:09:12'),
(52, NULL, 'Ajay Test Lowanshi', 'ajay.lowanshi@gmail.com', '$2y$10$S7HO5HiQMAbAAO6shSbWlup0HbPEguXZDtiYit3GwBl3VZiw.6i6W', '<p>Write your bio here...</p>', 'profiles.jpg', '2021-02-12', 1, NULL, NULL, NULL, '2021-02-12 05:54:43', '2021-02-24 09:54:44'),
(55, '4d1295b5af092f9b', 'vfdddd', '4d1295b5af092f9b@gmail.com', '3568', 'gdsdggdddyd dffrde', 'profile.png', '1970-01-01', 1, NULL, NULL, NULL, '2021-02-19 10:38:43', '2021-03-17 14:21:30'),
(56, '34535', NULL, '34535@gmail.com', '44161', NULL, 'profile.png', NULL, 1, NULL, NULL, NULL, '2021-02-24 07:14:35', '2021-02-24 07:14:35'),
(57, '54646', 'John Rarity', 'exampfdsakljfjsfle@gmail.com', '17849', NULL, 'profile.png', '1970-01-01', 1, NULL, NULL, NULL, '2021-02-24 15:05:02', '2021-02-24 15:05:46'),
(58, 'device_iddada', NULL, 'device_iddada@gmail.com', '94768', NULL, 'profile.png', NULL, 1, NULL, NULL, NULL, '2021-02-26 13:10:26', '2021-02-26 13:10:26'),
(59, '38cc923b663c1942', 'Hemant Dhote', '38cc923b663c1942@gmail.com', '17459', 'Hemant Dhote \nCFO Digital Elite LLP', 'profile.png', '1989-10-07', 1, NULL, NULL, NULL, '2021-03-01 07:12:32', '2021-03-16 16:33:35'),
(60, NULL, 'Test', 'rishabh.soni@thedetmail.com', '$2y$10$t8TiXCspOPWlzRlETCJ53.mA0pmb.p.KqJb8dPivALcfWyyeRazWG', 'Testing', 'Screenshot (3)_1614946809.png', '5648-05-13', 1, NULL, NULL, NULL, '2021-03-01 09:15:12', '2021-03-06 07:40:12'),
(61, 'c74f2d7a3e497574', 'Rishabh', 'c74f2d7a3e497574@gmail.com', '19691', 'Hi', 'profile.png', '4567-12-13', 1, NULL, NULL, NULL, '2021-03-01 11:10:24', '2021-03-19 10:00:02'),
(64, NULL, 'Test chrome', 'rishabh.random@mailid.com', '$2y$10$BYbhxrtraGdJV1nhBNXbEeHcoFdQvKm.uSU6ZPEQRTImZVYdG4lae', 'Testing.....', 'Screenshot (2)_1614756811.png', '9999-12-31', 1, NULL, NULL, NULL, '2021-03-03 05:10:18', '2021-03-15 10:40:54'),
(62, 'about   csddsds dwdsd', 'John Rarity', 'myexample@gmail.com', '79818', 'About you', 'profile.png', '1970-01-01', 1, NULL, NULL, NULL, '2021-03-01 14:53:51', '2021-03-01 14:54:43'),
(65, '132132', NULL, '132132@gmail.com', '95722', NULL, 'profile.png', NULL, 1, NULL, NULL, NULL, '2021-03-03 14:51:29', '2021-03-03 14:52:48'),
(66, 'ghdjshsjhsds', NULL, 'ghdjshsjhsds@gmail.com', '55437', NULL, 'profile.png', NULL, 1, NULL, NULL, NULL, '2021-03-03 14:57:09', '2021-03-03 14:57:09'),
(67, '17e41951ec079e48', 'vj', 'vj@gmail.com', '4626', NULL, 'profile.png', '1970-01-01', 1, NULL, NULL, NULL, '2021-03-03 15:07:40', '2021-03-03 15:08:25'),
(68, 'myDeviceisgood', 'Testing', 'mydevicetest@gmail.com', '13258', 'About you', 'profile.png', '1970-01-01', 1, NULL, NULL, NULL, '2021-03-03 15:09:46', '2021-03-03 15:10:49'),
(70, '1324567897', NULL, '1324567897@gmail.com', '17840', NULL, 'profile.png', NULL, 1, NULL, NULL, NULL, '2021-03-06 11:04:42', '2021-03-06 11:04:42'),
(69, 'c8fbf99e5226771b', NULL, 'c8fbf99e5226771b@gmail.com', '87792', NULL, 'profile.png', NULL, 1, NULL, NULL, NULL, '2021-03-04 12:12:25', '2021-03-04 19:16:17'),
(71, NULL, 'Bhaskar Dhote', 'bhaskardhote7@gmail.com', '$2y$10$f8YqNofWdDvvUQ5ZMayNnOGbKQ452zXJI4afSK8C2O0zLDjLQGGNi', 'Test By bhaskar', 'bluedemobutton_1615549467.jpg', '2021-03-12', 1, NULL, NULL, NULL, '2021-03-12 11:44:10', '2021-03-12 11:44:27'),
(72, NULL, 'Test chrome', 'rishabh982678@thedetmail.com', '$2y$10$0ImYTsN1/D0tpB4nU6JSvOC.DFrfife.m.57aOQYQBPNF9HSfmDra', 'Nothing', 'profiles.jpg', '2021-03-02', 1, NULL, NULL, NULL, '2021-03-17 05:48:28', '2021-03-17 05:48:28'),
(73, NULL, 'Test chrome', 'rishabh9826789@thedetmail.com', '$2y$10$5p2K25B7sVqj2wMHLmvE6.worjXFb64p.I3DdI7wdJBVdvqL0hN96', 'Nothing', 'Screenshot (3)_1615960158.png', '2021-03-02', 1, NULL, NULL, NULL, '2021-03-17 05:48:28', '2021-03-17 05:49:18'),
(74, 'c6cf38e128ac6b76', NULL, NULL, '53091', NULL, 'profile.png', NULL, 1, 'YzZjZj', NULL, NULL, '2021-03-18 18:59:59', '2021-03-18 18:59:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `badges`
--
ALTER TABLE `badges`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `badge_categories`
--
ALTER TABLE `badge_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `badge_categories_images`
--
ALTER TABLE `badge_categories_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `badge_templates`
--
ALTER TABLE `badge_templates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `favorites`
--
ALTER TABLE `favorites`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invitations`
--
ALTER TABLE `invitations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_auth_codes_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `templates`
--
ALTER TABLE `templates`
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
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `badges`
--
ALTER TABLE `badges`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `badge_categories`
--
ALTER TABLE `badge_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `badge_categories_images`
--
ALTER TABLE `badge_categories_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `badge_templates`
--
ALTER TABLE `badge_templates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=235;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `favorites`
--
ALTER TABLE `favorites`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `feedbacks`
--
ALTER TABLE `feedbacks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `invitations`
--
ALTER TABLE `invitations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `password_resets`
--
ALTER TABLE `password_resets`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `templates`
--
ALTER TABLE `templates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=194;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
