-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 13, 2022 at 03:46 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adminphp`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `u_id` int(11) NOT NULL COMMENT 'PK คีย์หลักประจำตาราง',
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'ชื่อ',
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'นามสกุล',
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'ชื่อผู้ใช้งาน',
  `password` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'รหัสผ่าน',
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'avatar.png' COMMENT 'รูปโปรไฟล์',
  `role` enum('superadmin','admin') COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'สิทธิ์การเข้าใช้งาน',
  `status` enum('true','false') COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'สถานะเข้าใช้งาน',
  `updated_at` datetime NOT NULL COMMENT 'วันที่แก้ไข',
  `created_at` datetime NOT NULL COMMENT 'วันที่สร้าง'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `firstname`, `lastname`, `username`, `password`, `image`, `role`, `status`, `updated_at`, `created_at`) VALUES
(1, 'appzstory', 'test', 'admin', '$2y$10$VUqy40M0ghYq3Q7Ir8r8uuF9znyRoANcsGyLFw5Brd3nVjBFkHWwW', 'avatar.png	', 'superadmin', 'true', '2022-09-12 00:00:00', '2022-09-09 02:58:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`u_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'PK คีย์หลักประจำตาราง', AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
