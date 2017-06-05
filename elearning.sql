-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 10 Jun 2016 pada 08.05
-- Versi Server: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `elearning`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `no_admin` char(10) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `sex` enum('P','W') DEFAULT NULL,
  `alamat` varchar(20) DEFAULT NULL,
  `gambar` longtext NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`no_admin`, `nama`, `tgl_lahir`, `sex`, `alamat`, `gambar`, `email`) VALUES
('1110001', 'Demi Lovato H', '2016-06-13', 'W', 'Jl. Ahmad Dahlan 9', '../image/gambaradm/demilovato.jpg', 'demilo@gmail.com'),
('1110002', 'Jihada Amalia', '2015-12-06', 'W', 'Jl. Merpati P', '', 'jihadaamalia@yahoo.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai`
--

CREATE TABLE IF NOT EXISTS `nilai` (
  `usernameA` varchar(15) NOT NULL,
  `usernameS` varchar(15) NOT NULL,
  `tgl` date DEFAULT NULL,
  `nilai` float DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `nilai`
--

INSERT INTO `nilai` (`usernameA`, `usernameS`, `tgl`, `nilai`) VALUES
('demilo', 'Pevita', '2016-01-01', 80),
('demilo', 'Pevita', '2016-01-01', 50),
('demilo', 'Pevita', '2016-01-01', 70),
('demilo', 'Pevita', '2016-06-10', 60),
('', '', '0000-00-00', 30),
('', 'pevita', '0000-00-00', 40),
('', 'pevita', '0000-00-00', 40),
('', 'della', '0000-00-00', 80),
('', '', '0000-00-00', 30),
('', 'jihadaa', '0000-00-00', 30);

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE IF NOT EXISTS `siswa` (
  `nis` varchar(10) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `sex` enum('P','W') DEFAULT NULL,
  `alamat` varchar(20) DEFAULT NULL,
  `gambarS` longtext NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`nis`, `nama`, `tgl_lahir`, `sex`, `alamat`, `gambarS`, `email`) VALUES
('3330001', 'Pevita Pearce A', '2005-06-22', 'W', 'Jl. Salak Timur no 3', '../image/gambar/autobot2.png', 'pevita@gmail.com'),
('3330002', 'Jihada Amalia', '2010-12-15', 'W', 'Jl. Salak Timur no 3', 'image/gambar/Le-Pain-Art-Print.jpg', ''),
('3330003', 'Elsa Oktariza', '2016-06-07', 'W', 'Jl. Jeruk ', '', 'elsa@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `u_admin`
--

CREATE TABLE IF NOT EXISTS `u_admin` (
  `usernameA` varchar(10) NOT NULL,
  `passA` varchar(10) DEFAULT NULL,
  `no_admin` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `u_admin`
--

INSERT INTO `u_admin` (`usernameA`, `passA`, `no_admin`) VALUES
('demilo', '9999', '1110001'),
('jihadaama', '1234', '1110002');

-- --------------------------------------------------------

--
-- Struktur dari tabel `u_siswa`
--

CREATE TABLE IF NOT EXISTS `u_siswa` (
  `usernameS` varchar(10) NOT NULL,
  `passS` varchar(10) DEFAULT NULL,
  `usernameA` varchar(15) NOT NULL,
  `nis` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `u_siswa`
--

INSERT INTO `u_siswa` (`usernameS`, `passS`, `usernameA`, `nis`) VALUES
('Pevita', '1234', 'demilo', '3330001'),
('jihadaa', '1234', 'demilo', '3330002'),
('elsaa', '1234', 'demilo', '3330003');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`no_admin`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
 ADD PRIMARY KEY (`nis`);

--
-- Indexes for table `u_admin`
--
ALTER TABLE `u_admin`
 ADD PRIMARY KEY (`usernameA`);

--
-- Indexes for table `u_siswa`
--
ALTER TABLE `u_siswa`
 ADD PRIMARY KEY (`usernameS`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
