-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Sep 2019 pada 15.33
-- Versi server: 10.3.16-MariaDB
-- Versi PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tableweek3part2`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `infomhs`
--

CREATE TABLE `infomhs` (
  `no` int(1) NOT NULL,
  `npm` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `infomhs`
--

INSERT INTO `infomhs` (`no`, `npm`, `nama`, `alamat`) VALUES
(0, '', '', ''),
(1, '17081010030', 'johnfang', 'jlkopikopang12iconsicon'),
(2, '17081010031', 'johnfang2', 'jlkop4ikopang12iconsicon'),
(3, '17081010032', 'Parisya shidqi yusyarnanda', 'jlkop4ikopang12ichonsicon'),
(0, '17081010101', 'Parisya shidqi yusyarnanda', ''),
(6, '170810101032', 'MavisClouds1', 'asgardians24'),
(5, '170810101034', 'MavisClouds', 'asgardians'),
(7, '798687568', 'aaaaaaaaaaaaaa', 'asgardians');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `infomhs`
--
ALTER TABLE `infomhs`
  ADD PRIMARY KEY (`npm`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
