-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Oct 30, 2019 at 07:58 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `BDSGPT`
--

-- --------------------------------------------------------

--
-- Table structure for table `adeudo`
--

CREATE TABLE `adeudo` (
  `id` int(8) NOT NULL,
  `estado` int(1) NOT NULL,
  `comentario` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `informegeneral`
--

CREATE TABLE `informegeneral` (
  `id` int(8) NOT NULL,
  `estado` int(1) NOT NULL,
  `comentario` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ingles`
--

CREATE TABLE `ingles` (
  `id` int(8) NOT NULL,
  `comentario` text NOT NULL,
  `estado` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Proyecto`
--

CREATE TABLE `Proyecto` (
  `id` int(11) NOT NULL,
  `nombrep` varchar(200) NOT NULL,
  `usuario` varchar(15) NOT NULL,
  `estadop` int(1) NOT NULL,
  `fecharevision` date NOT NULL,
  `comentarios` text NOT NULL,
  `asesor` varchar(50) NOT NULL,
  `revisor` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(8) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(128) NOT NULL,
  `Tipo` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adeudo`
--
ALTER TABLE `adeudo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `informegeneral`
--
ALTER TABLE `informegeneral`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ingles`
--
ALTER TABLE `ingles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Proyecto`
--
ALTER TABLE `Proyecto`
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
-- AUTO_INCREMENT for table `adeudo`
--
ALTER TABLE `adeudo`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `informegeneral`
--
ALTER TABLE `informegeneral`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ingles`
--
ALTER TABLE `ingles`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Proyecto`
--
ALTER TABLE `Proyecto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT;