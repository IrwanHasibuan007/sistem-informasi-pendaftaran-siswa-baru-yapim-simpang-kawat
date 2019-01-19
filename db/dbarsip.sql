-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 19 Jan 2019 pada 05.37
-- Versi Server: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbarsip`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akutansi`
--

CREATE TABLE `akutansi` (
  `NIS` int(10) NOT NULL,
  `nama` varchar(70) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` text NOT NULL,
  `tanggal_daftar` date NOT NULL,
  `asal_sekolah` varchar(50) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `akutansi`
--

INSERT INTO `akutansi` (`NIS`, `nama`, `tanggal_lahir`, `alamat`, `tanggal_daftar`, `asal_sekolah`, `tempat_lahir`) VALUES
(191001, 'Izrina Panjaitan', '2004-11-12', 'Kisaran', '2019-01-10', 'SMP N 1 Kisaran', ''),
(0, '', '0000-00-00', '', '0000-00-00', '', ''),
(0, '', '0000-00-00', '', '0000-00-00', '', ''),
(0, '', '0000-00-00', '', '0000-00-00', '', ''),
(0, '', '0000-00-00', '', '0000-00-00', '', ''),
(0, '', '0000-00-00', '', '0000-00-00', '', ''),
(0, '', '0000-00-00', '', '0000-00-00', '', ''),
(0, '', '0000-00-00', '', '0000-00-00', '', ''),
(0, '', '0000-00-00', '', '0000-00-00', '', ''),
(0, '', '0000-00-00', '', '0000-00-00', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `arsip`
--

CREATE TABLE `arsip` (
  `id` int(5) NOT NULL,
  `NIS` int(15) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` text NOT NULL,
  `tgl_daftar` date NOT NULL,
  `asal` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `arsip`
--

INSERT INTO `arsip` (`id`, `NIS`, `nama`, `tgl_lahir`, `alamat`, `tgl_daftar`, `asal`) VALUES
(14, 19110002, 'Nuri Yustika', '2002-12-19', 'Mutiara', '2019-01-14', 'SMP N 1 Simpang Kawat'),
(15, 19110003, 'Rahmadani', '2019-01-15', 'Tanjung Balai', '2019-01-15', 'SMP N 1 Kisaran'),
(16, 19110004, 'Nur Aini', '2003-11-27', 'Kisaran', '2019-01-15', 'SMP N 5 Kisaran');

-- --------------------------------------------------------

--
-- Struktur dari tabel `peminjaman`
--

CREATE TABLE `peminjaman` (
  `asal` varchar(50) NOT NULL,
  `NIS` int(50) NOT NULL,
  `nama` varchar(120) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` text NOT NULL,
  `tgl_daftar` date NOT NULL,
  `id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `peminjaman`
--

INSERT INTO `peminjaman` (`asal`, `NIS`, `nama`, `tgl_lahir`, `alamat`, `tgl_daftar`, `id`) VALUES
('SMP N 1 Tanjung Balai', 19220001, 'Beni Leondry', '2003-05-15', 'Mutiara', '2019-01-15', 7),
('SMP N 1 Simpang Kawat', 19220002, 'Muhammad Ayyaz', '2003-09-20', 'Tanjung Balai', '2019-01-15', 8);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tkj`
--

CREATE TABLE `tkj` (
  `NIS` int(30) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `tanggal_daftar` date NOT NULL,
  `asal_sekolah` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `username` varchar(25) NOT NULL,
  `paswd` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `level` int(1) NOT NULL,
  `ket` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`username`, `paswd`, `email`, `nama`, `level`, `ket`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'irwansyahsb@gmail.com', 'Irwansyah Putra Hasibuan', 1, 'Staff Penerimaan Siswa Baru'),
('admin2', 'c84258e9c39059a89ab77d846ddab909', 'astutij142@gmail.com', 'Juli Astuti', 1, 'Staff Penerimaan Siswa Baru'),
('admin3', '32cacb2f994f6b42183a1300d9a3e8d6', 'sipahutarfriska123@gmail.com', 'Friska Wati Sipahutar', 1, 'Staff Penerimaan Siswa Baru');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `arsip`
--
ALTER TABLE `arsip`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `arsip`
--
ALTER TABLE `arsip`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
