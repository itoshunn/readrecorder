-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2016 年 12 朁E04 日 20:17
-- サーバのバージョン： 10.1.19-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cake_readrecorder`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `books`
--

INSERT INTO `books` (`id`, `title`, `author`, `user_id`, `created`, `modified`) VALUES
(1, 'test title', 'test author', 1, '2016-11-23 05:39:16', '2016-11-23 05:39:16'),
(2, 'dd', 'dd', 1, '2016-11-25 09:41:22', '2016-11-25 09:41:22'),
(3, 'aaaaa', 'aaaaa', 1, '2016-12-04 09:55:57', '2016-12-04 09:55:57');

-- --------------------------------------------------------

--
-- テーブルの構造 `phinxlog`
--

CREATE TABLE `phinxlog` (
  `version` bigint(20) NOT NULL,
  `migration_name` varchar(100) DEFAULT NULL,
  `start_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `end_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `phinxlog`
--

INSERT INTO `phinxlog` (`version`, `migration_name`, `start_time`, `end_time`) VALUES
(20161122114333, 'CreateBooks', '2016-11-22 03:08:59', '2016-11-22 03:08:59'),
(20161122120001, 'CreateUsers', '2016-11-22 03:08:59', '2016-11-22 03:08:59'),
(20161125050434, 'CreateLogs', '2016-11-24 20:09:35', '2016-11-24 20:09:36'),
(20161204040732, 'Initial', '2016-12-03 19:07:32', '2016-12-03 19:07:32'),
(20161204041831, 'RenameLogs', '2016-12-03 19:23:48', '2016-12-03 19:23:48'),
(20161204061511, 'RenameReads', '2016-12-03 21:33:11', '2016-12-03 21:33:11');

-- --------------------------------------------------------

--
-- テーブルの構造 `read_logs`
--

CREATE TABLE `read_logs` (
  `id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `finish_date` date NOT NULL,
  `read_flag` tinyint(1) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `read_logs`
--

INSERT INTO `read_logs` (`id`, `book_id`, `user_id`, `start_date`, `finish_date`, `read_flag`, `created`, `modified`) VALUES
(1, 1, 1, '2016-11-25', '2016-11-25', 1, '2016-11-25 05:26:09', '2016-11-25 05:26:14'),
(2, 1, 1, '2016-11-25', '2016-11-25', 0, '2016-11-25 05:55:10', '2016-11-25 05:55:10'),
(3, 1, 1, '2016-11-25', '0000-00-00', 0, '2016-11-25 08:48:35', '2016-11-25 08:48:35'),
(4, 1, 1, '2016-11-25', '0000-00-00', 0, '2016-11-25 09:02:18', '2016-11-25 09:02:18'),
(5, 1, 1, '2016-11-25', '0000-00-00', 0, '2016-11-25 09:02:32', '2016-11-25 09:02:32'),
(6, 1, 1, '2016-11-25', '0000-00-00', 0, '2016-11-25 09:39:58', '2016-11-25 09:39:58'),
(7, 1, 1, '2016-11-25', '0000-00-00', 0, '2016-11-25 09:40:20', '2016-11-25 09:40:20'),
(8, 0, 0, '0000-00-00', '0000-00-00', 0, '2016-11-25 09:46:20', '2016-11-25 09:46:20'),
(9, 0, 0, '0000-00-00', '0000-00-00', 0, '2016-11-25 09:48:03', '2016-11-25 09:48:03'),
(10, 0, 0, '0000-00-00', '0000-00-00', 0, '2016-11-25 09:52:41', '2016-11-25 09:52:41'),
(11, 0, 0, '0000-00-00', '0000-00-00', 0, '2016-11-25 09:53:11', '2016-11-25 09:53:11'),
(12, 0, 0, '0000-00-00', '0000-00-00', 0, '2016-11-25 09:54:55', '2016-11-25 09:54:55'),
(13, 1, 1, '2016-11-25', '0000-00-00', 0, '2016-11-25 09:56:47', '2016-11-25 09:56:47'),
(14, 1, 1, '2016-11-25', '0000-00-00', 0, '2016-11-25 10:04:30', '2016-11-25 10:04:30'),
(15, 2, 1, '2016-11-25', '0000-00-00', 0, '2016-11-25 10:04:40', '2016-11-25 10:04:40'),
(16, 1, 1, '2016-12-04', '0000-00-00', 0, '2016-12-04 09:09:57', '2016-12-04 09:09:57'),
(17, 1, 1, '2016-12-04', '0000-00-00', 0, '2016-12-04 09:30:31', '2016-12-04 09:30:31'),
(18, 1, 1, '2016-12-04', '0000-00-00', 0, '2016-12-04 09:31:32', '2016-12-04 09:31:32'),
(19, 0, 1, '2016-12-04', '0000-00-00', 0, '2016-12-04 09:32:35', '2016-12-04 09:32:35'),
(20, 2, 1, '2016-12-04', '0000-00-00', 0, '2016-12-04 09:47:21', '2016-12-04 09:47:21'),
(21, 2, 1, '2016-12-04', '0000-00-00', 0, '2016-12-04 09:55:43', '2016-12-04 09:55:43');

-- --------------------------------------------------------

--
-- テーブルの構造 `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `users`
--

INSERT INTO `users` (`id`, `user_name`, `password`, `created`, `modified`) VALUES
(1, 'ito', '$2y$10$SkvMQFiMd84SBvEKO7tbX.Ab5vBpmG9DxusHuUoMzJeaIxAVoCma6', '2016-11-23 05:36:20', '2016-12-04 07:58:44'),
(2, 'test', '$2y$10$woJ0ypmsz1owmHnuqa0n6OejUOSzS6Po274RgeKQxotseAkO33b/u', '2016-11-25 01:51:58', '2016-12-04 07:58:57'),
(3, 'aaa', '$2y$10$L1jAT..zSRSYE0emOkmwOuoO6WGHB5ZVb9cCuyvbkRBCQWURnqTfq', '2016-12-04 08:06:27', '2016-12-04 08:06:27'),
(4, 'aaaa', '$2y$10$EWwsu22SZrk2TC8jKhRy7.YwtCsJ0rBIoL/JCqZmxwkXrO/lB/08q', '2016-12-04 09:56:05', '2016-12-04 09:56:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `phinxlog`
--
ALTER TABLE `phinxlog`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `read_logs`
--
ALTER TABLE `read_logs`
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
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `read_logs`
--
ALTER TABLE `read_logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
