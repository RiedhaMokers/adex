-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 05, 2013 at 12:22 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbmhs`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE IF NOT EXISTS `admins` (
  `username` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `password` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `nama_lengkap` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `no_telp` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `level` varchar(20) COLLATE latin1_general_ci NOT NULL DEFAULT 'user',
  `blokir` enum('Y','N') COLLATE latin1_general_ci NOT NULL DEFAULT 'N',
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`username`, `password`, `nama_lengkap`, `email`, `no_telp`, `level`, `blokir`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'Syafri Arlis', 'arlies2301@upi-yptk.com', '081374557800', 'admin', 'N');

-- --------------------------------------------------------

--
-- Table structure for table `ambilmk`
--

CREATE TABLE IF NOT EXISTS `ambilmk` (
  `nim` varchar(16) NOT NULL DEFAULT '',
  `kodeMK` varchar(10) NOT NULL DEFAULT '',
  `nilai` char(2) DEFAULT NULL,
  PRIMARY KEY (`nim`,`kodeMK`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ambilmk`
--

INSERT INTO `ambilmk` (`nim`, `kodeMK`, `nilai`) VALUES
('091011152620016', 'KKKI12001', 'E'),
('091011152620016', 'KKKI12002', 'D'),
('091011152620016', 'KKKI12003', 'TL'),
('091011152620016', 'KKKI12004', 'A'),
('091011152620016', 'KKKI12005', 'A'),
('091011152620001', 'KKKI12001', 'E'),
('091011152620001', 'KKKI12003', 'C'),
('091011152620001', 'KKKI12005', 'E'),
('091011152620001', 'KKKI12002', 'D'),
('091011152620001', 'KKKI12004', 'D'),
('091011152620004', 'KKKI12001', '-'),
('091011152620004', 'KKKI12002', '-'),
('091011152620004', 'KKKI12003', '-'),
('091011152620004', 'KKKI12004', '-'),
('091011152620004', 'KKKI12005', '-');

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE IF NOT EXISTS `jurusan` (
  `Kd_Jurusan` varchar(8) NOT NULL,
  `Nm_Jurusan` varchar(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`Kd_Jurusan`, `Nm_Jurusan`) VALUES
('261', 'Sistem Informasi'),
('262', 'Sistem Komputer'),
('263', 'Teknik Informatika'),
('260', 'Manajemen Informatika');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE IF NOT EXISTS `kelas` (
  `ID` varchar(3) NOT NULL,
  `Kd_Kelas` varchar(8) NOT NULL,
  `Nm_Kelas` varchar(16) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`ID`, `Kd_Kelas`, `Nm_Kelas`) VALUES
('1', '001', '1-SI-1'),
('2', '002', '1-SI-2'),
('3', '003', '2-SI-4'),
('4', '004', '3-IF-1'),
('5', '005', 'MI-1');

-- --------------------------------------------------------

--
-- Table structure for table `mhs`
--

CREATE TABLE IF NOT EXISTS `mhs` (
  `NIM` varchar(16) NOT NULL DEFAULT '',
  `Nama` varchar(145) NOT NULL DEFAULT '',
  `tempat` varchar(50) NOT NULL,
  `TglLahir` date NOT NULL DEFAULT '0000-00-00',
  `Jekel` varchar(16) NOT NULL,
  `Kelas` varchar(15) NOT NULL DEFAULT '',
  `Kd_Jurusan` char(20) NOT NULL DEFAULT '',
  PRIMARY KEY (`NIM`),
  KEY `NIM` (`NIM`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mhs`
--

INSERT INTO `mhs` (`NIM`, `Nama`, `tempat`, `TglLahir`, `Jekel`, `Kelas`, `Kd_Jurusan`) VALUES
('11101152600041', 'Mita Laniari', 'Padang', '1993-04-26', 'Perempuan', 'MI-1', '260'),
('10101152611040', 'Muhammad Ikhlas', 'Padang', '1991-04-08', 'Laki-Laki', '1-SI-1', '261'),
('09101152610005', 'Ahmad Jenal', 'Sibolga', '1991-07-31', 'Laki-Laki', '1-SI-1', '261');

-- --------------------------------------------------------

--
-- Table structure for table `mtk`
--

CREATE TABLE IF NOT EXISTS `mtk` (
  `KodeMK` varchar(10) NOT NULL DEFAULT '',
  `NamaMK` varchar(145) NOT NULL DEFAULT '',
  `SKS` int(11) DEFAULT NULL,
  `KodeJrs` char(3) NOT NULL DEFAULT '',
  PRIMARY KEY (`KodeMK`),
  KEY `KodeMK` (`KodeMK`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mtk`
--

INSERT INTO `mtk` (`KodeMK`, `NamaMK`, `SKS`, `KodeJrs`) VALUES
('KKKI12001', 'Pancasila', 2, '263'),
('KKKI12002', 'Agama', 2, '263'),
('KKKI12003', 'Bahasa Indonesia', 2, '263'),
('KKKI12004', 'Kewarganegaraan', 2, '263'),
('KKKI12005', 'Etika Profesi', 2, '263');

-- --------------------------------------------------------

--
-- Table structure for table `tbdownload`
--

CREATE TABLE IF NOT EXISTS `tbdownload` (
  `iddownload` int(4) unsigned NOT NULL AUTO_INCREMENT,
  `deskripsi` varchar(100) NOT NULL DEFAULT '',
  `namafile` varchar(100) NOT NULL DEFAULT '',
  `klik` int(8) NOT NULL DEFAULT '0',
  PRIMARY KEY (`iddownload`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `tbdownload`
--


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
