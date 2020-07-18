-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 31 Jan 2020 pada 23.37
-- Versi server: 5.7.24
-- Versi PHP: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_project`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_data`
--

CREATE TABLE `tb_data` (
  `id` int(8) NOT NULL,
  `id_data` int(8) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `link` text NOT NULL,
  `text` text NOT NULL,
  `ins` datetime DEFAULT NULL,
  `ins_l` enum('admin','users') DEFAULT NULL,
  `upd` datetime DEFAULT NULL,
  `upd_l` enum('admin','users') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_data`
--

INSERT INTO `tb_data` (`id`, `id_data`, `judul`, `link`, `text`, `ins`, `ins_l`, `upd`, `upd_l`) VALUES
(14, 12, 'sd', 'sd', 'sd', NULL, NULL, NULL, NULL),
(15, 22610823, 'sdfsdfas', 'dfasdf', 'sadfsdfffffffffffffffffff', NULL, NULL, NULL, NULL),
(16, 21232, 'asdas', 'asda', 'asdas', '2020-01-28 13:14:11', NULL, '2020-01-28 00:00:00', NULL),
(17, 25221474, 'test', 'asdasd', 'dddddddddddddddddddd', NULL, NULL, NULL, NULL),
(18, 12729965, 'test', 'asdasd', 'dddddddddddddddddddd', NULL, NULL, '2020-01-28 12:20:08', NULL),
(19, 47598856, 'test', 'asdasd', 'dddddddddddddddddddd', '2020-01-28 12:22:58', NULL, '2020-01-28 12:22:58', NULL),
(20, 71222757, 'aa', 'aaa', 'a', '2020-01-28 12:39:49', NULL, '2020-01-28 12:43:00', NULL),
(21, 8721918, '', '', '', '2020-01-28 12:41:10', NULL, '2020-01-28 12:41:10', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_users`
--

CREATE TABLE `tb_users` (
  `id_users` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `picture` varchar(255) DEFAULT NULL,
  `token` text,
  `tokenExpire` text,
  `level` enum('admin','users') DEFAULT NULL,
  `created` datetime DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_users`
--

INSERT INTO `tb_users` (`id_users`, `nama`, `email`, `username`, `password`, `picture`, `token`, `tokenExpire`, `level`, `created`, `modified`) VALUES
(1, 'Beni Zukerbeck', 'benixukerbeck@gmail.com', 'admin', '$2y$10$T3xWVEoWnmfR4am5CDW8fOzk59xaKwk5qcrkFOOWTaUR7Tsrm3Q.W', NULL, 'SMVyGX4vuat9fBAgRxJ3Kh6lYQqbCD1E', '1578184269', 'admin', '2020-01-02 13:23:40', NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_data`
--
ALTER TABLE `tb_data`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_data` (`id_data`);

--
-- Indeks untuk tabel `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`id_users`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_data`
--
ALTER TABLE `tb_data`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
