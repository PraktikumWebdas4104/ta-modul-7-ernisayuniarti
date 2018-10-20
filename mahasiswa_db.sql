-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Okt 2018 pada 05.02
-- Versi server: 10.1.34-MariaDB
-- Versi PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mahasiswa_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `datamhs`
--

CREATE TABLE `datamhs` (
  `NIM` varchar(100) NOT NULL,
  `NAMA` varchar(100) NOT NULL,
  `JENISKELAMIN` varchar(100) NOT NULL,
  `PRODI` varchar(100) NOT NULL,
  `FAKULTAS` varchar(100) NOT NULL,
  `ASAL` varchar(100) NOT NULL,
  `MOTOHIDUP` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `datamhs`
--

INSERT INTO `datamhs` (`NIM`, `NAMA`, `JENISKELAMIN`, `PRODI`, `FAKULTAS`, `ASAL`, `MOTOHIDUP`) VALUES
('', '', '', 'mi', 'fit', '', ''),
('6701174008', 'tita', 'perempuan', 'ilkom', 'fte', 'mojokerto', 'welaw'),
('6701174031', 'elita', 'perempuan', 'ilkom', 'fkb', 'samosir', 'helaw'),
('6701174038', 'ernisa', 'perempuan', 'siskom', 'fte', 'sragen', 'keep running'),
('6701174066', 'sepvina', 'perempuan', 'mp', 'fit', 'madiun', 'hello word');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `datamhs`
--
ALTER TABLE `datamhs`
  ADD PRIMARY KEY (`NIM`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
