-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Des 2023 pada 02.47
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
-- Database: `data-kota-salatiga`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `angka_harapan_hidup`
--

CREATE TABLE `angka_harapan_hidup` (
  `ID` int(11) NOT NULL,
  `Jenis_Kelamin` varchar(100) NOT NULL,
  `2022` float NOT NULL,
  `2021` float NOT NULL,
  `2020` float NOT NULL,
  `2019` float NOT NULL,
  `2018` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `angka_harapan_hidup`
--

INSERT INTO `angka_harapan_hidup` (`ID`, `Jenis_Kelamin`, `2022`, `2021`, `2020`, `2019`, `2018`) VALUES
(1, 'Laki-Laki', 75.66, 75.5, 75.45, 75.32, 75.31),
(2, 'Perempuan', 79.63, 79.44, 79.29, 79.07, 78.97),
(3, 'Laki-Laki dan Perempuan', 77.72, 77.55, 77.4, 77.22, 77.11);

-- --------------------------------------------------------

--
-- Struktur dari tabel `indeks_yang_mempengaruhi`
--

CREATE TABLE `indeks_yang_mempengaruhi` (
  `ID` int(11) NOT NULL,
  `Keterangan` varchar(255) NOT NULL,
  `2022` float NOT NULL,
  `2021` float NOT NULL,
  `2020` float NOT NULL,
  `2019` float NOT NULL,
  `2018` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `indeks_yang_mempengaruhi`
--

INSERT INTO `indeks_yang_mempengaruhi` (`ID`, `Keterangan`, `2022`, `2021`, `2020`, `2019`, `2018`) VALUES
(1, 'Indeks Kedalaman Kemiskinan\r\n', 0.66, 0.8, 0.53, 0.83, 0.69),
(2, 'Indeks Keparahan Kemiskinan\r\n', 0.15, 0.19, 0.08, 0.2, 0.13);

-- --------------------------------------------------------

--
-- Struktur dari tabel `inflasi`
--

CREATE TABLE `inflasi` (
  `ID` int(11) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `2022` float NOT NULL,
  `2021` float NOT NULL,
  `2020` float NOT NULL,
  `2019` float NOT NULL,
  `2018` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `inflasi`
--

INSERT INTO `inflasi` (`ID`, `keterangan`, `2022`, `2021`, `2020`, `2019`, `2018`) VALUES
(1, 'Kota Salatiga', 5.25, 1.48, 1.9, 2.29, 2.68);

-- --------------------------------------------------------

--
-- Struktur dari tabel `ipm`
--

CREATE TABLE `ipm` (
  `ID` int(11) NOT NULL,
  `Keterangan` varchar(255) NOT NULL,
  `2022` float NOT NULL,
  `2021` float NOT NULL,
  `2020` float NOT NULL,
  `2019` float NOT NULL,
  `2018` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `ipm`
--

INSERT INTO `ipm` (`ID`, `Keterangan`, `2022`, `2021`, `2020`, `2019`, `2018`) VALUES
(1, 'IPM', 84.35, 83.6, 83.14, 83.12, 82.41);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kemiskinan`
--

CREATE TABLE `kemiskinan` (
  `ID` int(11) NOT NULL,
  `Keterangan` varchar(255) NOT NULL,
  `2022` float NOT NULL,
  `2021` float NOT NULL,
  `2020` float NOT NULL,
  `2019` float NOT NULL,
  `2018` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kemiskinan`
--

INSERT INTO `kemiskinan` (`ID`, `Keterangan`, `2022`, `2021`, `2020`, `2019`, `2018`) VALUES
(1, 'Garis Kemiskinan', 518815, 480903, 454154, 418955, 380858),
(2, 'Presentase Penduduk Miskin', 4.73, 5.14, 4.94, 4.76, 4.84);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kepadatan`
--

CREATE TABLE `kepadatan` (
  `ID` int(100) NOT NULL,
  `Kepadatan` varchar(100) NOT NULL,
  `2022` int(100) NOT NULL,
  `2021` int(100) NOT NULL,
  `2020` int(100) NOT NULL,
  `2019` int(100) NOT NULL,
  `2018` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kepadatan`
--

INSERT INTO `kepadatan` (`ID`, `Kepadatan`, `2022`, `2021`, `2020`, `2019`, `2018`) VALUES
(1, 'Argomulyo', 2800, 2756, 2660, 2482, 2448),
(2, 'sidomukti', 4161, 4125, 3860, 3862, 3811),
(3, 'sidorejo', 3366, 3372, 3252, 3612, 3566),
(4, 'tingkir', 4573, 4491, 4500, 4464, 4468);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kepadatan_penduduk`
--

CREATE TABLE `kepadatan_penduduk` (
  `ID` int(100) NOT NULL,
  `jumlah penduduk` varchar(100) NOT NULL,
  `2022` int(100) NOT NULL,
  `2021` int(100) NOT NULL,
  `2020` int(100) NOT NULL,
  `2019` int(100) NOT NULL,
  `2018` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kepadatan_penduduk`
--

INSERT INTO `kepadatan_penduduk` (`ID`, `jumlah penduduk`, `2022`, `2021`, `2020`, `2019`, `2018`) VALUES
(1, 'Argomulyo', 50800, 50001, 49295, 45975, 45349),
(2, 'sidomukti', 44938, 44549, 44237, 44249, 43668),
(3, 'sidorejo', 52536, 52634, 52819, 58692, 57943),
(4, 'tingkir', 46791, 46341, 45971, 45168, 44611);

-- --------------------------------------------------------

--
-- Struktur dari tabel `ketenagakerjaan`
--

CREATE TABLE `ketenagakerjaan` (
  `ID` int(11) NOT NULL,
  `Keterangan` varchar(100) NOT NULL,
  `2022` varchar(100) NOT NULL,
  `2021` varchar(100) NOT NULL,
  `2020` varchar(100) NOT NULL,
  `2019` varchar(100) NOT NULL,
  `2018` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `ketenagakerjaan`
--

INSERT INTO `ketenagakerjaan` (`ID`, `Keterangan`, `2022`, `2021`, `2020`, `2019`, `2018`) VALUES
(1, 'TPT', '5.58%', '7.26%', '7.44%', '4.33%', '4.23%'),
(2, 'TPAK', '71%', '70.36%', '70.23%', '66.96%', '72.15%');

-- --------------------------------------------------------

--
-- Struktur dari tabel `laju_pertumbuhan`
--

CREATE TABLE `laju_pertumbuhan` (
  `ID` int(11) NOT NULL,
  `Keterangan` varchar(255) NOT NULL,
  `2022` float NOT NULL,
  `2021` float NOT NULL,
  `2020` float NOT NULL,
  `2019` float NOT NULL,
  `2018` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `laju_pertumbuhan`
--

INSERT INTO `laju_pertumbuhan` (`ID`, `Keterangan`, `2022`, `2021`, `2020`, `2019`, `2018`) VALUES
(1, 'Berdasarkan Pertanian, Kehutanan, dan Perikanan\r\n', 3.59, 2.6, -1.38, 3.18, 4.55),
(2, 'Rata-Rata Laju Pertumbuhan PDRB', 6.41, 2.39, -1.41, 5.76, 6.15);

-- --------------------------------------------------------

--
-- Struktur dari tabel `lama_sekolah`
--

CREATE TABLE `lama_sekolah` (
  `ID` int(11) NOT NULL,
  `Kategori` varchar(255) NOT NULL,
  `2022` float NOT NULL,
  `2021` float NOT NULL,
  `2020` float NOT NULL,
  `2019` float NOT NULL,
  `2018` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `lama_sekolah`
--

INSERT INTO `lama_sekolah` (`ID`, `Kategori`, `2022`, `2021`, `2020`, `2019`, `2018`) VALUES
(1, 'Rata-Rata Lama Sekolah', 10.95, 10.66, 10.42, 10.41, 10.4),
(2, 'Harapan Lama Sekolah', 15.43, 15.42, 15.41, 15.34, 15);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengeluaran_perkapita`
--

CREATE TABLE `pengeluaran_perkapita` (
  `ID` int(11) NOT NULL,
  `Kategori` varchar(255) NOT NULL,
  `2022` float NOT NULL,
  `2021` float NOT NULL,
  `2020` float NOT NULL,
  `2019` float NOT NULL,
  `2018` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pengeluaran_perkapita`
--

INSERT INTO `pengeluaran_perkapita` (`ID`, `Kategori`, `2022`, `2021`, `2020`, `2019`, `2018`) VALUES
(1, 'Pengeluaran Per Kapita', 16351, 15843, 15699, 15944, 15464);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `angka_harapan_hidup`
--
ALTER TABLE `angka_harapan_hidup`
  ADD PRIMARY KEY (`ID`);

--
-- Indeks untuk tabel `indeks_yang_mempengaruhi`
--
ALTER TABLE `indeks_yang_mempengaruhi`
  ADD PRIMARY KEY (`ID`);

--
-- Indeks untuk tabel `inflasi`
--
ALTER TABLE `inflasi`
  ADD PRIMARY KEY (`ID`);

--
-- Indeks untuk tabel `ipm`
--
ALTER TABLE `ipm`
  ADD PRIMARY KEY (`ID`);

--
-- Indeks untuk tabel `kemiskinan`
--
ALTER TABLE `kemiskinan`
  ADD PRIMARY KEY (`ID`);

--
-- Indeks untuk tabel `kepadatan`
--
ALTER TABLE `kepadatan`
  ADD PRIMARY KEY (`ID`);

--
-- Indeks untuk tabel `kepadatan_penduduk`
--
ALTER TABLE `kepadatan_penduduk`
  ADD PRIMARY KEY (`ID`);

--
-- Indeks untuk tabel `ketenagakerjaan`
--
ALTER TABLE `ketenagakerjaan`
  ADD PRIMARY KEY (`ID`);

--
-- Indeks untuk tabel `laju_pertumbuhan`
--
ALTER TABLE `laju_pertumbuhan`
  ADD PRIMARY KEY (`ID`);

--
-- Indeks untuk tabel `lama_sekolah`
--
ALTER TABLE `lama_sekolah`
  ADD PRIMARY KEY (`ID`);

--
-- Indeks untuk tabel `pengeluaran_perkapita`
--
ALTER TABLE `pengeluaran_perkapita`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kepadatan`
--
ALTER TABLE `kepadatan`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `kepadatan_penduduk`
--
ALTER TABLE `kepadatan_penduduk`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
