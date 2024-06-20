-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Jun 2024 pada 10.10
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data_buku`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_buku`
--

CREATE TABLE `tbl_buku` (
  `id_buku` int(11) NOT NULL,
  `judul_buku` varchar(500) NOT NULL,
  `tahun_terbit` date NOT NULL,
  `nama_pengarang` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_buku`
--

INSERT INTO `tbl_buku` (`id_buku`, `judul_buku`, `tahun_terbit`, `nama_pengarang`) VALUES
(1, 'Catatan Tarim baru', '2024-06-06', 'Lora Ismail'),
(2, 'Belajar Java script', '2024-06-08', 'Irfan fahmi'),
(3, 'Yang Telah Lama menghilang', '2017-06-06', 'Tere Liye'),
(4, 'Halaqah Cinta', '2024-06-05', 'Lin Aiko'),
(5, 'Dear Allah', '2015-06-03', 'Diana Febi'),
(6, 'Nahdatul ulama', '2011-06-30', 'imam asyari'),
(7, 'Sebening Syahadat', '2024-06-04', 'Lin aiko'),
(8, 'anak pintar', '2022-05-09', 'tere liye'),
(9, 'bahasa mandarin', '2024-08-06', 'diana'),
(10, 'laut pasang', '2022-04-20', 'Diana Febi'),
(11, 'ya tarim', '2022-09-10', 'syaikhona kholil'),
(12, 'Dua Barista', '2013-10-11', 'Najathy Sharma'),
(13, 'si anak pelangi', '2021-03-12', 'Tere liye'),
(14, 'si anak cahaya', '2015-04-10', 'Tere liye'),
(15, 'si anak savana', '2024-10-11', 'Tere liye'),
(16, 'pulang-pergi', '2022-03-12', 'Tere liye'),
(17, 'Tanah para bandit', '2011-08-18', 'Tere liye'),
(18, 'bandit-bandit berkelas', '2021-03-12', 'Tere liye'),
(19, 'Merindu Cahaya hati', '2018-05-17', 'Khilma anis');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_buku`
--
ALTER TABLE `tbl_buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_buku`
--
ALTER TABLE `tbl_buku`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
