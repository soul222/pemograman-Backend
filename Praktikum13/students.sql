-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Des 2023 pada 18.14
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nim` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `jurusan` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `students`
--

INSERT INTO `students` (`id`, `nama`, `nim`, `email`, `jurusan`, `created_at`, `updated_at`) VALUES
(1, 'Soultan Amirul Mukminin', '0110222148', 'soul22148ti@nurulfikri.ac.id', 'Teknik Informatika', NULL, NULL),
(2, 'SHILA MUMTAZ', '0110222039', 'shil22039ti@student.nurulfikri.ac.id', 'Teknik Informatika', NULL, NULL),
(3, 'Syayid Muhammad Akbar', '0110222086', 'syay22086ti@student.nurulfikri.ac.id', 'Teknik Informatika', NULL, NULL),
(4, 'Roza Kurniawan Nur Wakid', '0110222124', 'roza22124ti@student.nurulfikri.ac.id', 'Teknik Informatika', NULL, NULL),
(5, 'Rika Rahma', '0110222134', 'rika22134ti@student.nurulfikri.ac.id', 'Teknik Informatika', NULL, NULL),
(6, 'Reski Junaidi Shalat', '0110222210', 'resk22210ti@student.nurulfikri.ac.id', 'Teknik Informatika', NULL, NULL),
(7, 'Muhammad Rofi\'Ul Arham', '0110222080', 'muha22080ti@student.nurulfikri.ac.id', 'Teknik Informatika', NULL, NULL),
(8, 'Muhammad Zidan', '0110222280', 'muha22280ti@student.nurulfikri.ac.id', 'Teknik Informatika', '2023-11-02 09:32:02', '2023-11-02 09:32:02');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
