-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Des 2023 pada 10.01
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portofolio`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(6) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'wahyu', '1218029'),
(2, 'singgih', 'singgih01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `beranda`
--

CREATE TABLE `beranda` (
  `id_beranda` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `keterangan` text NOT NULL,
  `fb` varchar(50) NOT NULL,
  `tw` varchar(50) NOT NULL,
  `ins` varchar(50) NOT NULL,
  `gambar` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `beranda`
--

INSERT INTO `beranda` (`id_beranda`, `nama`, `judul`, `keterangan`, `fb`, `tw`, `ins`, `gambar`) VALUES
(1, 'Wahyu Ardiansyah', 'Saya Seorang Web Developer', '<p>aya seorang Web Developer Yang menguasai Pemrograman Web kushus php (native dan framework laravel dan ci) ,javascript ,jquery,ajax, dan saya sangat Bergairah dan berdedikasi pada pekerjaan saya.</p>', '#', '#', '#', 'IMG_20230423_102836.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kontak`
--

CREATE TABLE `kontak` (
  `id_kontak` int(20) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pesan` text NOT NULL,
  `nomor` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kontak`
--

INSERT INTO `kontak` (`id_kontak`, `nama`, `email`, `pesan`, `nomor`) VALUES
(1, 'wahyu ardiansyah', 'wardiansyah62@gmail.com', 'hjhj', 99999),
(2, 'wahyu ardiansyah', 'wardiansyah62@gmail.com', 'hjhj', 99999),
(3, 'wahyu ardiansyah', 'wardiansyah62@gmail.com', 'hjhj', 99999),
(4, 'wahyu ardiansyah', 'wardiansyah62@gmail.com', 'hjhj', 99999),
(5, 'wahyu', 'wardiansyah62@gmail.com', 'waduh', 99999),
(6, 'wahyu ardiansyah', 'wardiansyah62@gmail.com', 'wahyu hallo', 2147483647),
(7, 'wahyu ardiansyah', 'wardiansyah62@gmail.com', 'wahyu hallo', 999999090);

-- --------------------------------------------------------

--
-- Struktur dari tabel `profil`
--

CREATE TABLE `profil` (
  `id_profil` int(20) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `keterangan` text NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `profil`
--

INSERT INTO `profil` (`id_profil`, `judul`, `keterangan`, `gambar`) VALUES
(1, 'Web Deplopment', 'popup', 'wr1.jpg'),
(2, 'web devepoment', 'popup', 'wr2.jpg'),
(3, 'web devepoment', 'popup', 'wr3.jpg'),
(4, 'web devepoment', 'popup', 'wr3.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `projek`
--

CREATE TABLE `projek` (
  `id_projek` int(6) NOT NULL,
  `jumlah` int(20) NOT NULL,
  `jumlah_selesai` int(20) NOT NULL,
  `Klien` int(20) NOT NULL,
  `tahun` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `projek`
--

INSERT INTO `projek` (`id_projek`, `jumlah`, `jumlah_selesai`, `Klien`, `tahun`) VALUES
(1, 5, 5, 3, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `servis`
--

CREATE TABLE `servis` (
  `id_servis` int(6) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `harga` varchar(20) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `servis`
--

INSERT INTO `servis` (`id_servis`, `judul`, `harga`, `keterangan`) VALUES
(1, 'Web Developing Ecomerce Bisnis', ' 2.000.000', 'Kami akan membuat website ecomerce untuk anda dimulai dari harga 2 jutaan'),
(2, 'web devepoment', ' 2.000.000', 'Kami akan membuat website ecomerce untuk anda dimulai dari harga 2 jutaan'),
(3, 'Web Devloping Company profil', '750.000', 'Kami akan membuat website ecomerce untuk anda dimulai dari harga 7 ratus ribuan'),
(4, 'Web Devloping sistem informasi', '5.000.000', 'Kami akan membuat website ecomerce untuk anda dimulai dari harga 5 jutaan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tentang_kami`
--

CREATE TABLE `tentang_kami` (
  `id_kami` int(6) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `keterangan` text NOT NULL,
  `no_wa` varchar(20) NOT NULL,
  `gambar` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tentang_kami`
--

INSERT INTO `tentang_kami` (`id_kami`, `judul`, `keterangan`, `no_wa`, `gambar`) VALUES
(1, 'Saya Seorang Web Developer', '<p>Halo yang disana! Saya seorang pengembang web, dan saya sangat bersemangat dan berdedikasi pada pekerjaan saya. Dengan pengalaman 3 tahun sebagai pengembang web profesional, saya telah memperoleh keterampilan dan pengetahuan yang diperlukan untuk membuat proyek Anda sukses. Saya menikmati setiap langkah proses pengembangan, mulai dari diskusi dan kolaborasi.</p>', '085609521220', 'IMG_20230927_192325.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `beranda`
--
ALTER TABLE `beranda`
  ADD PRIMARY KEY (`id_beranda`);

--
-- Indeks untuk tabel `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id_kontak`);

--
-- Indeks untuk tabel `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id_profil`);

--
-- Indeks untuk tabel `projek`
--
ALTER TABLE `projek`
  ADD PRIMARY KEY (`id_projek`);

--
-- Indeks untuk tabel `servis`
--
ALTER TABLE `servis`
  ADD PRIMARY KEY (`id_servis`);

--
-- Indeks untuk tabel `tentang_kami`
--
ALTER TABLE `tentang_kami`
  ADD PRIMARY KEY (`id_kami`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `profil`
--
ALTER TABLE `profil`
  MODIFY `id_profil` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `servis`
--
ALTER TABLE `servis`
  MODIFY `id_servis` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
