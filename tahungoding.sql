-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Des 2023 pada 05.43
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tahungoding`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `division`
--

CREATE TABLE `division` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `division`
--

INSERT INTO `division` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'UI/UX', '2023-12-03 02:53:10', '2023-12-03 02:53:10'),
(2, 'Front-End', '2023-12-03 02:53:10', '2023-12-03 02:53:10'),
(3, 'Back-End', '2023-12-03 02:54:40', '2023-12-03 02:54:40'),
(4, 'Microsoft-Office', '2023-12-03 02:54:40', '2023-12-03 02:54:40');

-- --------------------------------------------------------

--
-- Struktur dari tabel `member`
--

CREATE TABLE `member` (
  `id` int(11) NOT NULL,
  `nim` varchar(16) NOT NULL,
  `name` varchar(250) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `fakultas` varchar(25) NOT NULL,
  `study_program` varchar(255) NOT NULL,
  `semester` varchar(255) NOT NULL,
  `division_id` int(11) DEFAULT NULL,
  `position` varchar(255) DEFAULT NULL,
  `password` varchar(32) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `member`
--

INSERT INTO `member` (`id`, `nim`, `name`, `email`, `fakultas`, `study_program`, `semester`, `division_id`, `position`, `password`, `created_at`, `updated_at`) VALUES
(1, 'A2210000', 'Egi Purnama M', 'mauludin@gmail.com', 'FTI', 'Teknik-Informatika', '5/V', 3, 'Diklatbang', '25d55ad283aa400af464c76d713c07ad', '2023-12-03 02:57:00', '2023-12-03 03:51:20'),
(2, 'A10000', 'Mauludin', 'mauludinegi@gmail.com', 'FTI', 'Teknik Informatika', '5/V', 3, 'Diklatbang', '25d55ad283aa400af464c76d713c07ad', '2023-12-03 03:54:29', '2023-12-03 03:54:29');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `division`
--
ALTER TABLE `division`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_member_division` (`division_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `division`
--
ALTER TABLE `division`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `member`
--
ALTER TABLE `member`
  ADD CONSTRAINT `fk_member_division` FOREIGN KEY (`division_id`) REFERENCES `division` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
