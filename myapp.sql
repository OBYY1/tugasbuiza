-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 04 Des 2023 pada 23.27
-- Versi server: 8.0.30
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myapp`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `matakuliah`
--

CREATE TABLE `matakuliah` (
  `id_mk` int NOT NULL,
  `kode_mk` varchar(10) DEFAULT NULL,
  `nama_mk` varchar(50) DEFAULT NULL,
  `sks_mk` int DEFAULT NULL,
  `semester_mk` int DEFAULT NULL,
  `dosen_mk` varchar(50) DEFAULT NULL,
  `tanggal_update` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `matakuliah`
--

INSERT INTO `matakuliah` (`id_mk`, `kode_mk`, `nama_mk`, `sks_mk`, `semester_mk`, `dosen_mk`, `tanggal_update`) VALUES
(1, 'DUA1101', 'Pendidikan Agama', 3, 1, 'MKDU', '2023-12-03 22:50:12'),
(2, 'DUA1103', 'Trisula ', 3, 1, 'MKDU', '2023-12-03 22:50:12'),
(3, 'TIB1104', 'Matematika 1', 2, 1, 'Winarti, S.Kom, M.Kom', '2023-12-03 22:50:12'),
(4, 'TIC1102', 'Logika dan Algoritma', 3, 1, 'Gugus Azhari, M.Kom', '2023-12-03 22:50:12'),
(5, 'TIC1108', ' Pemrograman Terstruktur', 3, 1, 'Arif Rahman Sujatmika, M.Kom', '2023-12-03 22:50:12'),
(6, 'TIB1105', 'Sistem Digital', 3, 1, 'Winarti, S.Kom, M.Kom', '2023-12-03 22:50:12'),
(7, 'TIB1107', 'Pengantar Teknologi Informasi', 3, 1, 'Lailia Rahmawati, M.Kom', '2023-12-03 22:50:12'),
(8, 'TIB3103', 'Jaringan Komputer', 3, 1, 'Arif Rahman Sujatmika, M.Kom', '2023-12-03 22:50:12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sa`
--

CREATE TABLE `sa` (
  `id` int NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `services`
--

CREATE TABLE `services` (
  `id` int NOT NULL,
  `code` varchar(10) DEFAULT NULL,
  `category` varchar(50) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `price` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `services`
--

INSERT INTO `services` (`id`, `code`, `category`, `name`, `price`, `created_at`) VALUES
(1, 'A101', 'Mobile Legends', '11 Diamonds', 1000, '2023-11-28 04:40:51'),
(2, 'A102', 'Mobile Legends', '22 Diamonds', 2000, '2023-11-28 04:40:51'),
(3, 'A103', 'Mobile Legends', '33 Diamonds', 3000, '2023-11-28 04:40:51'),
(4, 'A104', 'Mobile Legends', '44 Diamonds', 4000, '2023-11-28 04:40:51'),
(5, 'A105', 'Mobile Legends', '55 Diamonds', 5000, '2023-11-28 04:40:51');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `username` varchar(50) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`username`, `password`, `email`) VALUES
('admin', '$2y$10$pmI5db4ZYPpcfS1WZ.Zl6.xLnP4zdBBSV147StLKVCzR1yooHBapq', 'izza.tiundar@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `balance` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `matakuliah`
--
ALTER TABLE `matakuliah`
  ADD PRIMARY KEY (`id_mk`);

--
-- Indeks untuk tabel `sa`
--
ALTER TABLE `sa`
  ADD UNIQUE KEY `username` (`username`);

--
-- Indeks untuk tabel `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `matakuliah`
--
ALTER TABLE `matakuliah`
  MODIFY `id_mk` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `services`
--
ALTER TABLE `services`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
