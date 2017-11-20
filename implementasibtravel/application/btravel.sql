-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 19, 2017 at 07:54 AM
-- Server version: 5.7.17-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `btravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username_admin` varchar(50) NOT NULL,
  `password_admin` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username_admin`, `password_admin`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id_booking` int(11) NOT NULL,
  `id_paket` int(11) NOT NULL,
  `username_member` varchar(50) NOT NULL,
  `atas_nama` varchar(50) NOT NULL,
  `jenis_pembayaran` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id_booking`, `id_paket`, `username_member`, `atas_nama`, `jenis_pembayaran`, `status`) VALUES
(23, 16, 'ani ', 'Ani', 'Rekening BCA', 'Lunas'),
(26, 19, 'erick ', 'Erick', 'Rekening BCA', 'Lunas'),
(27, 16, 'erick ', 'Erick Larsen', 'Rekening BCA', 'Lunas'),
(28, 20, 'erick ', 'c', 'c', 'Proses');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id_komentar` int(11) NOT NULL,
  `username_member` varchar(50) NOT NULL,
  `isi_komentar` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `konfirmasi`
--

CREATE TABLE `konfirmasi` (
  `id_konfirmasi` int(11) NOT NULL,
  `id_booking` int(11) NOT NULL,
  `username_member` varchar(50) NOT NULL,
  `nama_konfirmasi` varchar(50) NOT NULL,
  `gambar` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `username_member` varchar(50) NOT NULL,
  `email_member` varchar(50) NOT NULL,
  `password_member` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`username_member`, `email_member`, `password_member`) VALUES
('a1', '', 'q'),
('a2', '', '2'),
('ani', 'ani@gmail.com', 'ani'),
('asd', 'erick15ti@mahasiswa.pcr.ac.id', '123'),
('erick', 'erick15ti@mahasiswa.pcr.ac.id', '29c2c079b20b08353da33078d70181eb'),
('viki', 'erick15ti@mahasiswa.pcr.ac.id', 'viki'),
('ww', 'ww@ww.com', 'ad57484016654da87125db86f4227ea3');

-- --------------------------------------------------------

--
-- Table structure for table `paket`
--

CREATE TABLE `paket` (
  `id_paket` int(11) NOT NULL,
  `nama_paket` varchar(50) NOT NULL,
  `harga_paket` varchar(50) NOT NULL,
  `rincian_paket` varchar(1000) NOT NULL,
  `gambar` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `paket`
--

INSERT INTO `paket` (`id_paket`, `nama_paket`, `harga_paket`, `rincian_paket`, `gambar`) VALUES
(16, 'Paket A', 'Rp. 4.000.000', 'Paket perjalanan selama 7 hari.\r\n<br/>- Hari pertama check in hotel.\r\n<br/>- Hari kedua ke tanjung - pulau penyu - uluwatu - nyong nyong - walindo - sutra. \r\n<br/>Makan siang di nanyong dan makan malam di indonesia food.\r\n<br/>-Hari ketiga ke puri ubud - pasur ubud - rafting - tegalalong - tampak siring - jimbaran - latex. \r\n<br/>Makan siang di rafting dan makan malam di legong.\r\n<br/>- Hari keempat ke tanah lot - arorma - kopi. Makan siang di Chineese food\r\n<br/>- Hari kelima free\r\n<br/>- Hari keenam free\r\n<br/>- Hari ketujuh ke pantai kuta - venus', '1510205569.jpg'),
(19, 'Paket B', 'Rp. 3.000.000', 'Paket perjalanan selama 5 hari <br/>\r\n- Hari pertama : Check in hotel. <br/>\r\n- Hari kedua : Tanjung - Pulau Penyu - Uluwatu - Bluepoint - Kopi - Jimbaran.<br/>\r\nMakan siang di Indonesian Food dan Makan malam BBQ.<br/>\r\n- Hari ketiga : Tanah Lot - Sanur TT - Lulur. <br/>\r\nMakan siang di IGIA dan Makan malam di Candle dinner snowflater.<br/>\r\n- Hari keempat : Freeday.<br/>\r\n- Hari kelima : Free - Walindo - Pantai Kuta - Airport.<br/>\r\nMakan siang di Bebek Bali.<br/>\r\n\r\n', '1510218547.jpg'),
(20, 'Paket C', 'Rp. 2.500.000', 'Paket perjalanan selama 5 hari <br/>\r\n- Hari pertama : Check in hotel. <br/>\r\n- Hari kedua : Tanjung - Pulau Penyu - Latex - Klapa TT - Kopi. <br/>\r\nMakan siang di Nasi Padang dan Makan malam IGA.<br/>\r\n- Hari ketiga : Lembongan - Jimbaran BBQ.<br/>\r\nMakan siang di Lembongan dan Makan malam BBQ.<br/>\r\n- Hari keempat : Freeday.<br/>\r\n- Hari kelima : Tanah Lot - Uluwatu - Nyang nyang - DFS - Venus - Pantai Kuta.', '1510218809.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username_admin`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id_booking`),
  ADD KEY `id_paket` (`id_paket`),
  ADD KEY `username_member` (`username_member`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id_komentar`),
  ADD KEY `username_member` (`username_member`);

--
-- Indexes for table `konfirmasi`
--
ALTER TABLE `konfirmasi`
  ADD PRIMARY KEY (`id_konfirmasi`),
  ADD KEY `username_member` (`username_member`),
  ADD KEY `id_booking` (`id_booking`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`username_member`);

--
-- Indexes for table `paket`
--
ALTER TABLE `paket`
  ADD PRIMARY KEY (`id_paket`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id_booking` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id_komentar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `konfirmasi`
--
ALTER TABLE `konfirmasi`
  MODIFY `id_konfirmasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `paket`
--
ALTER TABLE `paket`
  MODIFY `id_paket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`id_paket`) REFERENCES `paket` (`id_paket`),
  ADD CONSTRAINT `booking_ibfk_2` FOREIGN KEY (`username_member`) REFERENCES `member` (`username_member`);

--
-- Constraints for table `komentar`
--
ALTER TABLE `komentar`
  ADD CONSTRAINT `komentar_ibfk_1` FOREIGN KEY (`username_member`) REFERENCES `member` (`username_member`);

--
-- Constraints for table `konfirmasi`
--
ALTER TABLE `konfirmasi`
  ADD CONSTRAINT `konfirmasi_ibfk_1` FOREIGN KEY (`username_member`) REFERENCES `member` (`username_member`),
  ADD CONSTRAINT `konfirmasi_ibfk_2` FOREIGN KEY (`id_booking`) REFERENCES `booking` (`id_booking`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
