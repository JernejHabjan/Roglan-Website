# noinspection SqlNoDataSourceInspectionForFile

-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2017 at 02:27 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT = @@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS = @@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION = @@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Roglan_database`
--
CREATE DATABASE IF NOT EXISTS `Roglan_database` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `Roglan_database`;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users`
(
    `id`       int(11)                                                   NOT NULL,
    `username` varchar(25) CHARACTER SET utf8 COLLATE utf8_slovenian_ci  NOT NULL,
    `password` varchar(64) CHARACTER SET utf8 COLLATE utf8_slovenian_ci  NOT NULL,
    `fullname` varchar(100) CHARACTER SET utf8 COLLATE utf8_slovenian_ci NOT NULL,
    `date`     date                                                      NOT NULL,
    `salt`     varchar(40)                                               NOT NULL
) ENGINE = InnoDB
  DEFAULT CHARSET = latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `fullname`, `date`, `salt`)
VALUES (9, 'darkneess10', '70af2bf6e427a73461ae08ccbe153c87bf45049e49518329d431e5bb2da71fbf', 'Jernej Habjan',
        '2017-04-22', '187926643558fb4b7c61cdc6.36472479');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
    ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 10;
/*!40101 SET CHARACTER_SET_CLIENT = @OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS = @OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION = @OLD_COLLATION_CONNECTION */;
