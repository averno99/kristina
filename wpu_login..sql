-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 20 Jan 2022 pada 03.26
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wpu_login`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akseptor`
--

CREATE TABLE `akseptor` (
  `id_data` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `tahun` int(11) NOT NULL,
  `jumlah_akseptor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `akseptor`
--

INSERT INTO `akseptor` (`id_data`, `id`, `tahun`, `jumlah_akseptor`) VALUES
(2, 3, 2015, 5735),
(3, 19, 2015, 8153),
(4, 5, 2015, 6225),
(5, 2, 2015, 9663),
(6, 8, 2015, 7686),
(7, 13, 2015, 3322),
(8, 14, 2015, 4047),
(9, 7, 2015, 2808),
(10, 10, 2015, 1685),
(11, 17, 2015, 3693),
(12, 4, 2015, 2244),
(13, 1, 2015, 2246),
(14, 16, 2015, 3463),
(15, 9, 2015, 1867),
(16, 12, 2015, 2163),
(17, 6, 2015, 4378),
(18, 18, 2015, 2968),
(19, 11, 2015, 2255),
(20, 15, 2015, 2445),
(23, 3, 2016, 5891),
(24, 19, 2016, 8153),
(25, 5, 2016, 6225),
(26, 2, 2016, 10545),
(27, 8, 2016, 6935),
(28, 13, 2016, 3380),
(29, 14, 2016, 4047),
(30, 7, 2016, 3773),
(31, 10, 2017, 1784),
(32, 17, 2016, 3686),
(33, 4, 2016, 2244),
(34, 1, 2016, 2246),
(35, 16, 2016, 5411),
(36, 9, 2016, 1924),
(37, 12, 2016, 2163),
(38, 6, 2016, 4056),
(39, 18, 2016, 3544),
(40, 11, 2016, 2131),
(41, 15, 2016, 2177);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kecamatan`
--

CREATE TABLE `kecamatan` (
  `id` int(11) NOT NULL,
  `Kode` varchar(120) NOT NULL,
  `Nama_Kecamatan` varchar(120) NOT NULL,
  `geojson` varchar(128) NOT NULL,
  `warna` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kecamatan`
--

INSERT INTO `kecamatan` (`id`, `Kode`, `Nama_Kecamatan`, `geojson`, `warna`) VALUES
(1, '61.01.12', 'TEKARANG', 'tekarang.geojson', '#808080'),
(2, '61.01.04', 'TEBAS', 'tebas1.geojson', '#0000FF'),
(3, '61.01.01', 'SAMBAS', 'sambas1.geojson', '#000080'),
(4, '61.01.11', 'GALING', 'galing1.geojson', '#00FFFF'),
(5, '61.01.03', 'JAWAI', 'jawai1.geojson', '#964B00'),
(6, '61.01.16', 'JAWAI SELATAN', 'jawai_selatan1.geojson', '#FFD700'),
(7, '61.01.08', 'PALOH', 'paloh1.geojson', '#00FF00'),
(8, '61.01.05', 'PEMANGKAT', 'pemangkat1.geojson', '#FFFF00'),
(9, '61.01.14', 'SAJAD', 'sajad1.geojson', '#FF00FF'),
(10, '61.01.09', 'SAJINGAN BESAR', 'sajingan_besar.geojson', '#FF007F'),
(11, '61.01.18', 'SALATIGA', 'salatiga1.geojson', '#FF0000'),
(12, '61.01.15', 'SEBAWI', 'sebawi1.geojson', '#800000'),
(13, '61.01.06', 'SEJANGKUNG', 'sejangkung1.geojson', '#FFC0CB'),
(14, '61.01.07', 'SELAKAU', 'selakau1.geojson', '#6F00FF'),
(15, '61.01.19', 'SELAKAU TIMUR', 'selakau_timur1.geojson', '#FF7F00'),
(16, '61.01.13', 'SEMPARUK', 'semparuk1.geojson', '#C0C0C0'),
(17, '61.01.10', 'SUBAH', 'subah1.geojson', '#BF00FF'),
(18, '61.01.17', 'TANGARAN', 'tangaran1.geojson', '#808000'),
(19, '61.01.02', 'TELUK KERAMAT', 'teluk_keramat1.geojson', '#8F00FF');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelahiran`
--

CREATE TABLE `kelahiran` (
  `id_data` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `tahun` int(11) NOT NULL,
  `jumlah_kelahiran` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kelahiran`
--

INSERT INTO `kelahiran` (`id_data`, `id`, `tahun`, `jumlah_kelahiran`) VALUES
(4, 3, 2015, 968),
(5, 19, 2015, 1610),
(6, 5, 2015, 873),
(8, 2, 2015, 1698),
(9, 8, 2015, 882),
(10, 13, 2015, 293),
(11, 14, 2015, 527),
(12, 7, 2015, 455),
(13, 10, 2015, 223),
(14, 17, 2015, 442),
(15, 4, 2015, 439),
(16, 1, 2015, 315),
(17, 16, 2015, 428),
(18, 9, 2015, 286),
(19, 12, 2015, 380),
(20, 6, 2015, 305),
(21, 18, 2015, 450),
(22, 11, 2015, 236),
(23, 15, 2015, 330),
(24, 3, 2016, 972),
(25, 19, 2016, 1627),
(26, 5, 2016, 871),
(27, 2, 2016, 1736),
(28, 8, 2016, 895),
(29, 13, 2016, 303),
(30, 14, 2016, 553),
(31, 7, 2016, 455),
(32, 10, 2016, 240),
(33, 17, 2016, 468),
(34, 4, 2016, 407),
(35, 1, 2016, 311),
(36, 16, 2016, 439),
(37, 9, 2016, 303),
(38, 12, 2016, 370),
(39, 6, 2016, 298),
(40, 18, 2016, 441),
(41, 11, 2016, 321),
(42, 15, 2016, 249);

-- --------------------------------------------------------

--
-- Struktur dari tabel `maksimum`
--

CREATE TABLE `maksimum` (
  `id` int(11) NOT NULL,
  `kecamatan` varchar(128) NOT NULL,
  `harkatmaks_penduduk` int(11) NOT NULL,
  `bobot_penduduk` int(11) NOT NULL,
  `hasil_penduduk` int(11) NOT NULL,
  `harkatmaks_pus` int(11) NOT NULL,
  `bobot_pus` int(11) NOT NULL,
  `hasil_pus` int(11) NOT NULL,
  `harkatmaks_akseptor` int(11) NOT NULL,
  `bobot_akseptor` int(11) NOT NULL,
  `hasil_akseptor` int(11) NOT NULL,
  `harkatmaks_pelayanan` int(11) NOT NULL,
  `bobot_pelayanan` int(11) NOT NULL,
  `hasil_pelayanan` int(11) NOT NULL,
  `harkatmaks_kelahiran` int(11) NOT NULL,
  `bobot_kelahiran` int(11) NOT NULL,
  `hasil_kelahiran` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `maksimum`
--

INSERT INTO `maksimum` (`id`, `kecamatan`, `harkatmaks_penduduk`, `bobot_penduduk`, `hasil_penduduk`, `harkatmaks_pus`, `bobot_pus`, `hasil_pus`, `harkatmaks_akseptor`, `bobot_akseptor`, `hasil_akseptor`, `harkatmaks_pelayanan`, `bobot_pelayanan`, `hasil_pelayanan`, `harkatmaks_kelahiran`, `bobot_kelahiran`, `hasil_kelahiran`, `total`) VALUES
(8, 'Sambas', 0, 2, 0, 0, 2, 0, 0, 3, 0, 0, 1, 0, 0, 2, 0, 0),
(9, 'Teluk Keramat', 0, 2, 0, 0, 2, 0, 0, 3, 0, 0, 1, 0, 0, 2, 0, 0),
(10, 'Jawai', 0, 2, 0, 0, 2, 0, 0, 3, 0, 0, 1, 0, 0, 2, 0, 0),
(11, 'Tebas', 0, 2, 0, 0, 2, 0, 0, 3, 0, 0, 1, 0, 0, 2, 0, 0),
(12, 'Pemangkat', 0, 2, 0, 0, 2, 0, 0, 3, 0, 0, 1, 0, 0, 2, 0, 0),
(13, 'Sejangkung', 0, 2, 0, 0, 2, 0, 0, 3, 0, 0, 1, 0, 0, 2, 0, 0),
(14, 'Selakau', 0, 2, 0, 0, 2, 0, 0, 3, 0, 0, 1, 0, 0, 2, 0, 0),
(15, 'Paloh', 0, 2, 0, 0, 2, 0, 0, 3, 0, 0, 1, 0, 0, 2, 0, 0),
(16, 'Sajingan Besar', 0, 2, 0, 0, 2, 0, 0, 3, 0, 0, 1, 0, 0, 2, 0, 0),
(17, 'Subah', 0, 2, 0, 0, 2, 0, 0, 3, 0, 0, 1, 0, 0, 2, 0, 0),
(18, 'Galing', 0, 2, 0, 0, 2, 0, 0, 3, 0, 0, 1, 0, 0, 2, 0, 0),
(19, 'Tekarang', 0, 2, 0, 0, 2, 0, 0, 3, 0, 0, 1, 0, 0, 2, 0, 0),
(20, 'Semparuk', 0, 2, 0, 0, 2, 0, 0, 3, 0, 0, 1, 0, 0, 2, 0, 0),
(21, 'Sajad', 0, 2, 0, 0, 2, 0, 0, 3, 0, 0, 1, 0, 0, 2, 0, 0),
(22, 'Sebawi', 0, 2, 0, 0, 2, 0, 0, 3, 0, 0, 1, 0, 0, 2, 0, 0),
(23, 'Jawai Selatan', 0, 2, 0, 0, 2, 0, 0, 3, 0, 0, 1, 0, 0, 2, 0, 0),
(24, 'Tangaran', 0, 2, 0, 0, 2, 0, 0, 3, 0, 0, 1, 0, 0, 2, 0, 0),
(25, 'Salatiga', 0, 2, 0, 0, 2, 0, 0, 3, 0, 0, 1, 0, 0, 2, 0, 0),
(26, 'Selakau Timur', 0, 2, 0, 0, 2, 0, 0, 3, 0, 0, 1, 0, 0, 2, 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelayanan`
--

CREATE TABLE `pelayanan` (
  `id_data` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `tahun` int(11) NOT NULL,
  `jumlah_pelayanan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pelayanan`
--

INSERT INTO `pelayanan` (`id_data`, `id`, `tahun`, `jumlah_pelayanan`) VALUES
(4, 3, 2015, 17),
(5, 19, 2015, 27),
(6, 5, 2015, 12),
(7, 2, 2015, 27),
(8, 8, 2015, 8),
(9, 13, 2015, 13),
(10, 14, 2015, 10),
(11, 7, 2015, 13),
(12, 10, 2015, 6),
(13, 17, 2015, 13),
(14, 4, 2015, 12),
(15, 1, 2015, 8),
(16, 16, 2015, 8),
(17, 9, 2015, 10),
(18, 12, 2015, 9),
(19, 6, 2015, 6),
(20, 18, 2015, 6),
(21, 11, 2015, 6),
(22, 15, 2015, 8),
(23, 3, 2016, 17),
(24, 19, 2016, 27),
(25, 5, 2016, 12),
(26, 2, 2016, 28),
(27, 8, 2016, 8),
(28, 13, 2016, 13),
(29, 14, 2016, 10),
(30, 7, 2016, 13),
(31, 10, 2016, 6),
(32, 17, 2016, 14),
(33, 4, 2016, 12),
(34, 1, 2016, 8),
(35, 16, 2016, 8),
(36, 9, 2016, 6),
(37, 12, 2016, 8),
(38, 6, 2016, 10),
(39, 18, 2016, 9),
(40, 11, 2016, 6),
(41, 15, 2016, 6),
(42, 3, 2017, 17),
(43, 19, 2017, 27),
(44, 5, 2017, 12),
(45, 2, 2017, 28),
(46, 8, 2017, 8),
(47, 13, 2017, 13),
(48, 14, 2017, 10),
(49, 7, 2017, 12),
(50, 10, 2017, 6),
(51, 17, 2017, 14),
(52, 4, 2017, 12),
(53, 1, 2017, 8),
(54, 16, 2017, 8),
(55, 9, 2017, 6),
(56, 12, 2017, 8),
(57, 18, 2017, 9),
(58, 11, 2017, 6),
(59, 15, 2017, 6);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemetaan`
--

CREATE TABLE `pemetaan` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `penduduk`
--

CREATE TABLE `penduduk` (
  `id_data` int(11) NOT NULL,
  `id` int(120) NOT NULL,
  `tahun` int(11) NOT NULL,
  `jumlah_penduduk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penduduk`
--

INSERT INTO `penduduk` (`id_data`, `id`, `tahun`, `jumlah_penduduk`) VALUES
(1, 3, 2015, 56787),
(5, 19, 2015, 76869),
(22, 5, 2015, 51173),
(23, 2, 2015, 82579),
(24, 8, 2015, 53703),
(25, 13, 2015, 26071),
(26, 14, 2015, 37214),
(27, 7, 2015, 28324),
(28, 10, 2015, 10587),
(29, 17, 2015, 22726),
(30, 4, 2015, 23038),
(31, 1, 2015, 17238),
(32, 16, 2015, 29582),
(33, 9, 2015, 13504),
(34, 12, 2015, 19716),
(35, 6, 2015, 22049),
(36, 18, 2015, 25646),
(37, 11, 2015, 18418),
(38, 15, 2015, 12596),
(39, 3, 2016, 54339),
(40, 19, 2016, 71534),
(41, 5, 2016, 45276),
(42, 2, 2016, 79431),
(43, 8, 2016, 54478),
(44, 13, 2016, 27517),
(45, 14, 2016, 39495),
(46, 7, 2016, 29903),
(47, 10, 2016, 11414),
(48, 17, 2016, 24127),
(49, 4, 2016, 24479),
(50, 1, 2016, 17993),
(51, 16, 2016, 31208),
(52, 9, 2016, 14152),
(53, 12, 2016, 20966),
(54, 6, 2016, 23493),
(55, 18, 2016, 27072),
(56, 11, 2016, 19655),
(57, 15, 2016, 13454),
(58, 3, 2017, 54720),
(59, 19, 2017, 72339),
(60, 5, 2017, 45859),
(61, 2, 2017, 79145),
(73, 8, 2017, 54727),
(74, 13, 2017, 27438),
(75, 14, 2017, 39763),
(76, 7, 2017, 30164),
(77, 10, 2017, 11639),
(78, 17, 2017, 24701),
(79, 4, 2017, 24873),
(80, 1, 2017, 17998),
(81, 16, 2017, 30969),
(82, 9, 2017, 13946),
(83, 12, 2017, 20946),
(84, 6, 2017, 23450),
(85, 18, 2017, 27325),
(86, 11, 2017, 19563),
(87, 15, 2017, 13599);

-- --------------------------------------------------------

--
-- Struktur dari tabel `persentase`
--

CREATE TABLE `persentase` (
  `id` int(11) NOT NULL,
  `kecamatan` varchar(128) NOT NULL,
  `harkat_maksimum` int(11) NOT NULL,
  `rata_rata` int(11) NOT NULL,
  `hasil` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `persentase`
--

INSERT INTO `persentase` (`id`, `kecamatan`, `harkat_maksimum`, `rata_rata`, `hasil`) VALUES
(1, 'Sambas', 0, 0, 0),
(2, 'Teluk Keramat', 0, 0, 0),
(3, 'Jawai', 0, 0, 0),
(4, 'Tebas', 0, 0, 0),
(5, 'Pemangkat', 0, 0, 0),
(6, 'Sejangkung', 0, 0, 0),
(7, 'Selakau', 0, 0, 0),
(8, 'Paloh', 0, 0, 0),
(9, 'Sajingan Besar', 0, 0, 0),
(10, 'Subah', 0, 0, 0),
(11, 'Galing', 0, 0, 0),
(12, 'Tekarang', 0, 0, 0),
(13, 'Semparuk', 0, 0, 0),
(14, 'Sajad', 0, 0, 0),
(15, 'Sebawi', 0, 0, 0),
(16, 'Jawai Selatan', 0, 0, 0),
(17, 'Tangaran', 0, 0, 0),
(18, 'Salatiga', 0, 0, 0),
(19, 'Selakau Timur', 0, 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pus`
--

CREATE TABLE `pus` (
  `id_data` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `tahun` int(11) NOT NULL,
  `jumlah_pus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pus`
--

INSERT INTO `pus` (`id_data`, `id`, `tahun`, `jumlah_pus`) VALUES
(3, 3, 2015, 8278),
(4, 19, 2015, 12576),
(5, 5, 2015, 9196),
(6, 2, 2015, 13747),
(7, 8, 2015, 10495),
(8, 13, 2015, 4715),
(9, 14, 2015, 6823),
(10, 7, 2015, 5450),
(11, 10, 2015, 1703),
(12, 17, 2015, 4366),
(13, 4, 2015, 3926),
(14, 1, 2015, 3047),
(15, 16, 2015, 6377),
(16, 9, 2015, 2606),
(17, 12, 2015, 2874),
(18, 6, 2015, 4450),
(19, 18, 2015, 5001),
(20, 11, 2015, 3101),
(21, 15, 2015, 2445),
(22, 3, 2016, 8482),
(23, 19, 2016, 12576),
(24, 5, 2016, 9196),
(25, 2, 2016, 14048),
(26, 8, 2016, 10608),
(27, 13, 2016, 4730),
(28, 14, 2016, 6823),
(29, 7, 2016, 5421),
(31, 7, 2016, 5451),
(32, 10, 2016, 2600),
(33, 17, 2016, 5350),
(34, 4, 2016, 3926),
(35, 1, 2016, 3047),
(36, 16, 2016, 7002),
(37, 9, 2016, 2708),
(38, 12, 2016, 3065),
(39, 6, 2016, 5174),
(40, 18, 2016, 5001),
(41, 11, 2016, 3035),
(42, 15, 2016, 2914),
(43, 3, 2017, 8864),
(44, 19, 2017, 12467),
(45, 5, 2017, 9135),
(46, 2, 2017, 13870),
(47, 8, 2017, 10927),
(48, 13, 2017, 4664),
(49, 14, 2017, 2571);

-- --------------------------------------------------------

--
-- Struktur dari tabel `total`
--

CREATE TABLE `total` (
  `id` int(11) NOT NULL,
  `tahun` int(11) NOT NULL,
  `kecamatan_id` int(11) NOT NULL,
  `harkat_penduduk` int(11) NOT NULL,
  `bobot_penduduk` int(11) NOT NULL,
  `hasil_penduduk` int(11) NOT NULL,
  `harkat_pus` int(11) NOT NULL,
  `bobot_pus` int(11) NOT NULL,
  `hasil_pus` int(11) NOT NULL,
  `harkat_akseptor` int(11) NOT NULL,
  `bobot_akseptor` int(11) NOT NULL,
  `hasil_akseptor` int(11) NOT NULL,
  `harkat_pelayanan` int(11) NOT NULL,
  `bobot_pelayanan` int(11) NOT NULL,
  `hasil_pelayanan` int(11) NOT NULL,
  `harkat_kelahiran` int(11) NOT NULL,
  `bobot_kelahiran` int(11) NOT NULL,
  `hasil_kelahiran` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `total`
--

INSERT INTO `total` (`id`, `tahun`, `kecamatan_id`, `harkat_penduduk`, `bobot_penduduk`, `hasil_penduduk`, `harkat_pus`, `bobot_pus`, `hasil_pus`, `harkat_akseptor`, `bobot_akseptor`, `hasil_akseptor`, `harkat_pelayanan`, `bobot_pelayanan`, `hasil_pelayanan`, `harkat_kelahiran`, `bobot_kelahiran`, `hasil_kelahiran`, `total`) VALUES
(38, 2016, 19, 3, 0, 0, 2, 0, 0, 2, 0, 0, 2, 0, 0, 1, 0, 0, 20),
(39, 2016, 5, 3, 0, 0, 2, 0, 0, 2, 0, 0, 2, 0, 0, 3, 0, 0, 24),
(40, 2016, 2, 3, 0, 0, 3, 0, 0, 3, 0, 0, 3, 0, 0, 1, 0, 0, 26),
(41, 2016, 8, 1, 0, 0, 3, 0, 0, 1, 0, 0, 2, 0, 0, 1, 0, 0, 15),
(42, 2016, 13, 1, 0, 0, 3, 0, 0, 3, 0, 0, 2, 0, 0, 1, 0, 0, 21),
(43, 2016, 14, 1, 0, 0, 2, 0, 0, 2, 0, 0, 2, 0, 0, 1, 0, 0, 16),
(44, 2016, 7, 1, 0, 0, 3, 0, 0, 3, 0, 0, 2, 0, 0, 1, 0, 0, 21),
(45, 2016, 10, 1, 0, 0, 3, 0, 0, 3, 0, 0, 2, 0, 0, 1, 0, 0, 21),
(46, 2016, 17, 1, 0, 0, 3, 0, 0, 1, 0, 0, 3, 0, 0, 1, 0, 0, 16),
(47, 2016, 4, 1, 0, 0, 2, 0, 0, 2, 0, 0, 2, 0, 0, 3, 0, 0, 20),
(48, 2016, 1, 1, 0, 0, 3, 0, 0, 1, 0, 0, 2, 0, 0, 3, 0, 0, 19),
(49, 2016, 16, 1, 0, 0, 3, 0, 0, 2, 0, 0, 2, 0, 0, 1, 0, 0, 18),
(50, 2016, 9, 1, 0, 0, 3, 0, 0, 3, 0, 0, 2, 0, 0, 1, 0, 0, 21),
(51, 2016, 12, 1, 0, 0, 3, 0, 0, 2, 0, 0, 2, 0, 0, 3, 0, 0, 22),
(52, 2016, 6, 1, 0, 0, 3, 0, 0, 1, 0, 0, 2, 0, 0, 3, 0, 0, 19),
(53, 2016, 18, 1, 0, 0, 2, 0, 0, 3, 0, 0, 2, 0, 0, 3, 0, 0, 23),
(54, 2016, 11, 1, 0, 0, 1, 0, 0, 1, 0, 0, 2, 0, 0, 3, 0, 0, 15),
(55, 2016, 15, 1, 0, 0, 3, 0, 0, 1, 0, 0, 2, 0, 0, 1, 0, 0, 15),
(56, 2017, 3, 1, 0, 0, 3, 0, 0, 3, 0, 0, 2, 0, 0, 3, 0, 0, 25),
(57, 2017, 19, 1, 0, 0, 1, 0, 0, 3, 0, 0, 2, 0, 0, 3, 0, 0, 21),
(58, 2017, 5, 1, 0, 0, 1, 0, 0, 3, 0, 0, 2, 0, 0, 1, 0, 0, 17),
(59, 2017, 2, 3, 0, 0, 1, 0, 0, 1, 0, 0, 2, 0, 0, 3, 0, 0, 19),
(62, 2017, 8, 1, 0, 0, 3, 0, 0, 3, 0, 0, 2, 0, 0, 3, 0, 0, 25),
(63, 2017, 13, 3, 0, 0, 1, 0, 0, 1, 0, 0, 2, 0, 0, 3, 0, 0, 19),
(64, 2017, 14, 1, 0, 0, 3, 0, 0, 3, 0, 0, 2, 0, 0, 3, 0, 0, 25),
(65, 2017, 7, 1, 0, 0, 1, 0, 0, 1, 0, 0, 3, 0, 0, 1, 0, 0, 12),
(66, 2017, 10, 1, 0, 0, 3, 0, 0, 3, 0, 0, 2, 0, 0, 3, 0, 0, 25),
(67, 2017, 17, 1, 0, 0, 1, 0, 0, 1, 0, 0, 2, 0, 0, 3, 0, 0, 15),
(68, 2017, 4, 1, 0, 0, 1, 0, 0, 1, 0, 0, 2, 0, 0, 1, 0, 0, 11),
(69, 2017, 1, 1, 0, 0, 1, 0, 0, 1, 0, 0, 2, 0, 0, 1, 0, 0, 11),
(70, 2017, 16, 3, 0, 0, 1, 0, 0, 1, 0, 0, 2, 0, 0, 3, 0, 0, 19),
(71, 2017, 9, 3, 0, 0, 1, 0, 0, 3, 0, 0, 2, 0, 0, 3, 0, 0, 25),
(72, 2017, 12, 3, 0, 0, 1, 0, 0, 1, 0, 0, 2, 0, 0, 3, 0, 0, 19),
(73, 2017, 6, 3, 0, 0, 1, 0, 0, 1, 0, 0, 2, 0, 0, 3, 0, 0, 19),
(74, 2017, 18, 1, 0, 0, 3, 0, 0, 3, 0, 0, 2, 0, 0, 1, 0, 0, 21),
(75, 2017, 11, 3, 0, 0, 1, 0, 0, 1, 0, 0, 2, 0, 0, 1, 0, 0, 15),
(76, 2017, 15, 1, 0, 0, 1, 0, 0, 1, 0, 0, 2, 0, 0, 1, 0, 0, 11),
(78, 2020, 1, 1, 0, 2, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 8),
(80, 2016, 3, 3, 2, 6, 3, 2, 6, 3, 3, 9, 2, 1, 0, 1, 2, 2, 25);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `password` varchar(128) NOT NULL,
  `nama` varchar(130) NOT NULL,
  `email` varchar(128) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(11) NOT NULL,
  `image` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `password`, `nama`, `email`, `role_id`, `is_active`, `image`) VALUES
(15, '$2y$10$LGkyICQrAIOupSH9RlFbMO8G84AEpUn9btXo4FDOJZInOFyCGVFGq', 'kristina', 'admin@gmail.com', 1, 0, 'default.jpg'),
(17, '$2y$10$g0WqkbV3lBZeURLHOjzVZOlHa5wSA1Nasre72mNchCYLO8xk3oWie', 'dia', 'pegawai@gmail.com', 2, 0, 'default.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Admin'),
(2, 'Pegawai');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akseptor`
--
ALTER TABLE `akseptor`
  ADD PRIMARY KEY (`id_data`);

--
-- Indexes for table `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kelahiran`
--
ALTER TABLE `kelahiran`
  ADD PRIMARY KEY (`id_data`);

--
-- Indexes for table `maksimum`
--
ALTER TABLE `maksimum`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pelayanan`
--
ALTER TABLE `pelayanan`
  ADD PRIMARY KEY (`id_data`);

--
-- Indexes for table `pemetaan`
--
ALTER TABLE `pemetaan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penduduk`
--
ALTER TABLE `penduduk`
  ADD PRIMARY KEY (`id_data`);

--
-- Indexes for table `persentase`
--
ALTER TABLE `persentase`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pus`
--
ALTER TABLE `pus`
  ADD PRIMARY KEY (`id_data`);

--
-- Indexes for table `total`
--
ALTER TABLE `total`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akseptor`
--
ALTER TABLE `akseptor`
  MODIFY `id_data` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `kecamatan`
--
ALTER TABLE `kecamatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `kelahiran`
--
ALTER TABLE `kelahiran`
  MODIFY `id_data` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `maksimum`
--
ALTER TABLE `maksimum`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `pelayanan`
--
ALTER TABLE `pelayanan`
  MODIFY `id_data` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
--
-- AUTO_INCREMENT for table `pemetaan`
--
ALTER TABLE `pemetaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `penduduk`
--
ALTER TABLE `penduduk`
  MODIFY `id_data` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;
--
-- AUTO_INCREMENT for table `persentase`
--
ALTER TABLE `persentase`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `pus`
--
ALTER TABLE `pus`
  MODIFY `id_data` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
--
-- AUTO_INCREMENT for table `total`
--
ALTER TABLE `total`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
