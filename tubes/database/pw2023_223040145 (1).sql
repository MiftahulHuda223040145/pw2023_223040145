-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 11 Jun 2023 pada 15.33
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
-- Database: `pw2023_223040145`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `category`
--

CREATE TABLE `category` (
  `id` int NOT NULL,
  `jenis` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `category`
--

INSERT INTO `category` (`id`, `jenis`) VALUES
(1, 'POP CULTURE'),
(2, 'MUSIC'),
(3, 'FASHION'),
(4, 'MAGAZINE'),
(5, 'NEWS'),
(6, 'TECHNOLOGY'),
(7, 'FOOD'),
(8, 'SPORT');

-- --------------------------------------------------------

--
-- Struktur dari tabel `newslatest`
--

CREATE TABLE `newslatest` (
  `id` int NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `waktu` varchar(20) NOT NULL,
  `category` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `newslatest`
--

INSERT INTO `newslatest` (`id`, `gambar`, `judul`, `waktu`, `category`) VALUES
(1, '', 'Berita Terbaru 1', '16 Juni 2023', 1),
(2, '', 'Berita Terbaru 2', '15 Juni 2023', 2),
(3, '', 'Berita Tebaru 3', '14 Juni 2023', 3),
(4, '', 'Berita Tebaru 4', '13 Juni 2023', 4),
(5, '', 'Berita Terbaru 5', '12 Juni 2023', 5),
(6, '', 'Berita Terbaru 6', '11 Juni 2023', 6),
(7, '', 'Berita Tebaru 7', '11 Juni 2023', 7),
(8, '', 'Berita Terbaru 8', '10 Juni 2023', 8);

-- --------------------------------------------------------

--
-- Struktur dari tabel `newsrecomendation`
--

CREATE TABLE `newsrecomendation` (
  `id` int NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `category` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `newsrecomendation`
--

INSERT INTO `newsrecomendation` (`id`, `gambar`, `judul`, `deskripsi`, `category`) VALUES
(1, '', 'Berita Rekomendasi 1', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Commodi iure modi animi cupiditate. Explicabo, nihil?', 1),
(2, '', 'Berita Rekomendasi 2', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Commodi iure modi animi cupiditate. Explicabo, nihil?', 6),
(3, '', 'Berita Rekomendasi 3', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Commodi iure modi animi cupiditate. Explicabo, nihil?', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `newstrending`
--

CREATE TABLE `newstrending` (
  `id` int NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `category` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `newstrending`
--

INSERT INTO `newstrending` (`id`, `gambar`, `judul`, `deskripsi`, `category`) VALUES
(1, '', 'Berita Trending 1', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis minus, quas quidem tempora modi neque, ipsum dolor numquam nostrum obcaecati architecto commodi?', 1),
(2, '', 'Berita Trending 2', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis minus, quas quidem tempora modi neque, ipsum dolor numquam nostrum obcaecati architecto commodi?', 2),
(3, '', 'Berita Trending 3', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis minus, quas quidem tempora modi neque, ipsum dolor numquam nostrum obcaecati architecto commodi?', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `newsvideo`
--

CREATE TABLE `newsvideo` (
  `id` int NOT NULL,
  `video` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `category` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `newsvideo`
--

INSERT INTO `newsvideo` (`id`, `video`, `judul`, `category`) VALUES
(1, '', 'Berita Video 1', 8),
(6, '', 'Berita Video 2', 5),
(7, '', 'Berita Video 3', 1),
(8, '', 'Berita Video 4', 7),
(9, '', 'Berita Video 5', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `email` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `username` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `password` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password`, `gambar`) VALUES
(1, 'miftahul.223040145@mail.unpas.ac.idn', 'Miftahul Hudaaaa', '$2y$10$LhFF8AoplGh2cxyLO43Kf.Jmi78/LDXklxXUOMRIswE/P2wLC5H9C', '6484ad9b374c3.png'),
(32, 'rifqi.223040153@mail.com', 'rifqi', '$2y$10$ZnQuqvp4YsbSfrh116DhXuaRFn5rV9n6aP32NFd/Noy/Dh4GGAgsO', '648425ba7a45a.png'),
(33, 'nizarulfaizin.223040148@mail.unpas.ac.id', 'nizarul faizin', '$2y$10$2i/u7Qr5kWelaf4eVnz/7.pmP4zoIRt6sKq5U2G1CaJgLU63rtZjW', '6485d8e605327.jpg'),
(34, 'ryan.223040173@mail.unpas.ac.id', 'ryan hidayat', '$2y$10$YqAb9m45jANfofDVU54I8.6zVk3AcCRYd/IZkmWnaTuU60V1W6i7m', '6485da48852cc.jpg'),
(36, 'genta.223040168@mail.unpas.ac.id', 'Genta Sena', '$2y$10$2OPKJPmqhJ9j5V68vsBucOQS9/H8Ia935PfQir5Xq1Z6Abjz/3Gx6', '6484afe7a630a.jpg'),
(38, 'anissa.223040172@mail.unpas.ac.id', 'anissa', '$2y$10$7.dZsNko2XhNd4ck0E49..o4wVR4Cp9ltBl1botD6h3487NwsUseW', '6485dfad39b01.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `newslatest`
--
ALTER TABLE `newslatest`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category` (`category`);

--
-- Indeks untuk tabel `newsrecomendation`
--
ALTER TABLE `newsrecomendation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category` (`category`);

--
-- Indeks untuk tabel `newstrending`
--
ALTER TABLE `newstrending`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category` (`category`);

--
-- Indeks untuk tabel `newsvideo`
--
ALTER TABLE `newsvideo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category` (`category`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `newslatest`
--
ALTER TABLE `newslatest`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `newsrecomendation`
--
ALTER TABLE `newsrecomendation`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `newstrending`
--
ALTER TABLE `newstrending`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `newsvideo`
--
ALTER TABLE `newsvideo`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `newslatest`
--
ALTER TABLE `newslatest`
  ADD CONSTRAINT `newslatest_ibfk_1` FOREIGN KEY (`category`) REFERENCES `category` (`id`) ON DELETE RESTRICT ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `newsrecomendation`
--
ALTER TABLE `newsrecomendation`
  ADD CONSTRAINT `newsrecomendation_ibfk_1` FOREIGN KEY (`category`) REFERENCES `category` (`id`) ON DELETE RESTRICT ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `newstrending`
--
ALTER TABLE `newstrending`
  ADD CONSTRAINT `newstrending_ibfk_1` FOREIGN KEY (`category`) REFERENCES `category` (`id`) ON DELETE RESTRICT ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `newsvideo`
--
ALTER TABLE `newsvideo`
  ADD CONSTRAINT `newsvideo_ibfk_1` FOREIGN KEY (`category`) REFERENCES `category` (`id`) ON DELETE RESTRICT ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
