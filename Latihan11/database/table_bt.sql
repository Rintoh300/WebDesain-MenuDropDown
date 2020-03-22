-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2019 at 08:27 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `buku_tamu`
--

-- --------------------------------------------------------

--
-- Table structure for table `table_bt`
--

CREATE TABLE `table_bt` (
  `tgl` date NOT NULL,
  `nama` varchar(30) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_bt`
--

INSERT INTO `table_bt` (`tgl`, `nama`, `subject`, `isi`) VALUES
('2018-12-03', 'Muthia Putri', 'Ucapan Terima Kasih', 'Bersama ini saya ucapkan banyak terima kasih pada Bapak selaku dosen pembimbing saya yang banyak membantu saya'),
('2018-12-03', 'Muthia Putri', 'Ucapan Terima Kasih', 'Bersama ini saya ucapkan banyak terima kasih pada Bapak selaku dosen pembimbing saya yang banyak membantu saya');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
