-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2019 at 03:47 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes_webpro`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `email` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `jk` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`email`, `nama`, `password`, `jk`) VALUES
('ariqmr123@gmail.com', 'Ariq Musyaffa', '$2y$10$xctGDh4EfsY.Bx4KxwHDheP1OgnXcg2KCWqq110oAGBCteH5tGc/m', 'Laki - laki'),
('ariqramadhan@outlook.com', 'ariq lagi', '$2y$10$xTLi9Sp8d/Lxu7l0fCEheeVA9H0WxEZdHKbWBFe0msn.rkhqu1VSy', 'Laki - laki'),
('clarisa.hasya@gmail.com', 'Clarisa Hasya Yutika', '$2y$10$o43znJ0hTjoOJJXilP7DFObSPXjouddmypj8Y4xp6.o0Xet/ofcaO', 'Perempuan'),
('jnurvania@gmail.com', 'Jovita Nurvania', '$2y$10$l0X1YjhX/zdhK/W1Jr4.8O8q8MKKZMfLWD666IXQSdAZ.DHHGGVAG', 'Perempuan'),
('www@gmail.com', 'awewe', '$2y$10$qKl4xF2xriK1YX1vliLOB.3Le7b86DmLkxP.l1.pEL8CbbivTug9S', 'Perempuan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
