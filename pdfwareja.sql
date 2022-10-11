-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2019 at 08:39 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pdfwareja`
--

-- --------------------------------------------------------

--
-- Table structure for table `tberkas`
--

CREATE TABLE IF NOT EXISTS `tberkas` (
`id_berkas` int(11) NOT NULL,
  `judul_b` varchar(255) DEFAULT NULL,
  `abstrak` text,
  `tgl_uploaded` datetime DEFAULT NULL,
  `tgl_updated` date DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `tags` text,
  `viewed` int(11) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_kategori` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tberkas`
--

INSERT INTO `tberkas` (`id_berkas`, `judul_b`, `abstrak`, `tgl_uploaded`, `tgl_updated`, `file`, `tags`, `viewed`, `id_user`, `id_kategori`) VALUES
(3, 'Quiz Metode Numarik', 'Quiz Metode Numerik Tahun 2019/2020', '2019-11-01 00:00:00', '2019-11-28', 'Tugas-1-metnum-2019_2020.pdf', 'quiz, metmun', 27, 1, 11),
(9, 'BAb- 07 Turunan Numerik (Rinardi Munir)', 'Bila persamaan fungsi f(x) diberikan secara eksplisit, maka kita dapat menentukan fungsi turunannya, f ''(x), f "(x), ..., f (n+1) (x), lalu menggunakannya untuk menghitung nilai turunan fungsi di x = t. ', '2019-12-05 00:00:00', '2019-12-03', 'BAb-_07_Turunan_Numerik.pdf', 'numeric, koi', 12, 2, 14),
(10, 'Modul 1 List Berkait', 'Memperkenalkan  penggunaan  perangkat  lunak  bahasa  pemrograman  untuk mengimplementasikan struktur data (tipe data abstrak list berkait linear).Memperkenalkan  instruksi-instruksi  dan  cara  pembuatanprogram  yang  dapat digunakan untuk menerapkan list berkait linear.Melatih  mahasiswa  menyelesaikan  masalah  tentang  list  berkait  linear  dalam bentuk program aplikasi. ', '2019-11-30 00:00:00', NULL, 'Modul_1_List_Berkait.pdf', 'Algoritma, strukdaat', 12, 1, 12),
(12, 'Pemograman Java', 'Mata   kuliah   pemrograman Berorientasi   Obyek   merupakan   mata   kuliah   yang   baru diberlakukan  pada  kurikulum  2012di  Program  Studi  Teknik  Telekomunikasi.  Sesuai  dengan  nama mata kuliah tersebut maka kontennya menuntut mahasiswa untuk dapat mempraktekkannya secara nyata.  Untuk  itulah  diperlukan  praktikum  Pemrograman  Berbasis  Obyek  yang  dapat  mengajak mahasiswa   untuk   lebih   memahami   secara   dalam   Pemrograman   Berbasis   Obyek   agar   dapat diaplikasikan dalam kasus sehari-hari.', '2019-12-04 07:12:14', NULL, 'Pemrograman-Berorientasi-Obyek-Kelas-XI-RPL.pdf', 'java, opp, if, informatika', 34, 2, 12),
(16, 'Algoritma Back-Tracking', 'Runut-balik (backtracking) adalah algoritma yang berbasis pada DFS untuk mencari solusi persoalan secara lebih mangkus. Runut-balik, yang merupakan perbaikan dari algoritma brute-force, secara sistematis mencari solusi persoalan di antara semua kemungkinan solusi yang ada.', '2019-12-04 11:14:15', NULL, 'Algoritma_Runut-balik_(bagian_1).pdf', 'backtracking, runutbalik, algoritma', 5, 2, 12),
(17, 'Solusi Persamaan Diferensial Biasa', 'Persamaan  diferensial  adalah  gabungan  antara  fungsi  yang  tidak  diketahui  secara  eksplisit dan turunan (diferensial)-nya.', '2019-12-05 08:00:00', NULL, 'BAb-_08_Solusi_Persamaan_Diferensial_Biasa4.pdf', 'numeric, metnum, pak sunjana, kalkulus', 3, 2, 12),
(18, 'Bactracking sudooko', 'Lorem Ipsum', '2019-12-05 09:15:00', NULL, 'Makalah_backtrackingpdf.pdf', 'bactraking, refukrsif, tree', 1, 1, 14),
(19, 'IMPLEMENTASI QR CODE SEBAGAI TIKET MASUK EVENT DENGAN MEMPERHITUNGKAN TINGKAT KOREKSI KESALAHAN', 'Quick Response Code (QR Code) adalah hasil dari pengembangan barcode. QR Code berfungsi untuk menyimpan informasi dalam bentuk biner. QR Code dapat menampung berbagai macam informasi, mulai dari byte, alfanumerik, hingga multimedia.', '2019-12-05 14:19:17', '2019-12-25', '491-Article_Text-1124-1-10-20180111(1).pdf', 'QR Code, barcode, kriptografi, enkripsi, dekripsi, reed-solomon', 6, 2, 14),
(20, 'Tugas 5 Alpro 2 - Latihan UTS', 'Tugas Algoritma dan Pemograman 2 berdasarkan latihan UTS', '2019-12-06 08:23:22', NULL, 'Tugas_5_Alpro_2_-_Latihan_UTS.pdf', 'tugas, latihanuas, alprog, algoritma', 3, 4, 11);

-- --------------------------------------------------------

--
-- Table structure for table `tkategori`
--

CREATE TABLE IF NOT EXISTS `tkategori` (
`id_kategori` int(11) NOT NULL,
  `nama_kat` varchar(255) DEFAULT NULL,
  `deks` text
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tkategori`
--

INSERT INTO `tkategori` (`id_kategori`, `nama_kat`, `deks`) VALUES
(11, 'Soal', 'Lorem'),
(12, 'Modul', 'Lorem Ipsum'),
(14, 'Jurnal/Makalah', 'Lorem Ipsum');

-- --------------------------------------------------------

--
-- Table structure for table `tuser`
--

CREATE TABLE IF NOT EXISTS `tuser` (
`id_user` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tuser`
--

INSERT INTO `tuser` (`id_user`, `nama`, `email`, `password`) VALUES
(1, 'Irvan', 'irvanjasdat@gmail.com', 'assqwd123'),
(2, 'nara', 'irvanrevornv3@gmail.com', 'assqwd123'),
(3, 'Mamoru', 'Mamoru555@gmail.com', '$2y$10$0GJnPeRwfm5/t7zM3a6MhuLhi8ysSfyPpS2zqEADeGxvkai6FE0.S'),
(4, 'Dookay', 'Dookay@gmail.com', '$2y$10$nVQ0AbJi0EXbf4TpsT25v.3SWYH6RI6yDnioZQ2DhfCzT/h52GUYa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tberkas`
--
ALTER TABLE `tberkas`
 ADD PRIMARY KEY (`id_berkas`), ADD KEY `id_kategori` (`id_kategori`), ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `tkategori`
--
ALTER TABLE `tkategori`
 ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `tuser`
--
ALTER TABLE `tuser`
 ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tberkas`
--
ALTER TABLE `tberkas`
MODIFY `id_berkas` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `tkategori`
--
ALTER TABLE `tkategori`
MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `tuser`
--
ALTER TABLE `tuser`
MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tberkas`
--
ALTER TABLE `tberkas`
ADD CONSTRAINT `tberkas_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `tkategori` (`id_kategori`),
ADD CONSTRAINT `tberkas_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `tuser` (`id_user`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
