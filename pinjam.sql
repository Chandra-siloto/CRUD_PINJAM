-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Nov 2021 pada 18.48
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpustakaan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pinjam`
--

CREATE TABLE `pinjam` (
  `id` int(9) UNSIGNED NOT NULL,
  `judul` varchar(30) NOT NULL,
  `nama_pengarang` varchar(30) NOT NULL,
  `nama_penerbit` varchar(50) DEFAULT NULL,
  `req_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pinjam`
--

INSERT INTO `pinjam` (`id`, `judul`, `nama_pengarang`, `nama_penerbit`, `req_date`) VALUES
(1, 'Filosofi Kopi', 'Sujiwo Tedjo', 'Sujiwo Tedjo', '2021-11-02 16:17:49'),
(2, 'Ayat - ayat cintah', 'Habiburrahman El Shirazy', 'Habiburrahman El Shirazy', '2021-11-02 16:20:57'),
(4, 'Bumi Manusia', 'Pramoedya Ananta Toer', 'Pramoedya Ananta Toer', '2021-11-02 16:22:02'),
(5, '5 CM', 'Donny Dhirgantoro', 'Donny Dhirgantoro', '2021-11-02 16:20:10'),
(6, 'Laskar Pelangi', 'Andrea Hirata', 'Andrea Hirata', '2021-11-02 16:39:18'),
(7, 'Cantik itu luka', 'Eka kurniawan', 'Eka kurniawan', '2021-11-02 16:22:37'),
(8, 'Lelaki Harimau', 'Eka kurniawan', 'Eka kurniawan', '2021-11-02 16:40:02'),
(9, 'Negeri 5 Negara', 'ahmad fuadi', 'ahmad faudi', '2021-11-02 16:40:46'),
(10, 'Dilan ', 'pidi baiq', 'pidi baiq', '2021-11-02 16:41:33'),
(11, 'Rindu ', 'tere liye', 'tere liye', '2021-11-02 16:42:05'),
(12, '11:11', 'Fiersa Besari', 'Fiersa Besari', '2021-11-02 16:42:37'),
(13, 'Hans', 'Raisa saraswati', 'Raisa saraswati', '2021-11-02 16:43:09'),
(14, 'Sebuah seni untuk bersikap bod', 'mark mason', 'mark mason', '2021-11-02 16:44:46'),
(15, 'ia mati takut neraka', 'Deassy M Destiani', 'Deassy M Destiani', '2021-11-02 16:46:35'),
(16, 'Filsafat pendidikan', 'Drs, uyoh saduloh', 'Drs, uyoh saduloh', '2021-11-02 16:48:00');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pinjam`
--
ALTER TABLE `pinjam`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pinjam`
--
ALTER TABLE `pinjam`
  MODIFY `id` int(9) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=672019009;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
