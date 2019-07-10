-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2019 at 05:20 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ci_crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE IF NOT EXISTS `berita` (
  `id` int(11) NOT NULL,
  `judul` varchar(55) NOT NULL,
  `artikel` text NOT NULL,
  `tgl` date NOT NULL,
  `gambar` varchar(55) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `judul`, `artikel`, `tgl`, `gambar`) VALUES
(6, 'Wakaf perumahan mewah', 'coba', '2019-04-30', '31.jpg'),
(10, 'Wakaf sawah mewah', 'er', '2019-05-17', '24.jpg'),
(12, 'Wakaf aplikasi mewah', 'wa', '2019-06-30', '22.jpg'),
(13, 'Wakaf gunung mewah', 'df', '2019-06-05', '12.jpg'),
(14, 'OP', 'OP', '2019-06-14', '23.jpg'),
(15, 'ukuran', 'ukuran', '2019-06-06', 'breadcrumb.jpg'),
(16, ' pengungsian akibat banjir sejak 2 Juni', 'Warga yang tinggal di pengungsian akibat banjir sejak 2 Juni, mulai terserang penyakit diare, berkurangnya pasokan air bersih menjadi salah satu penyebab warga pengungsi mengeluhkan rasa sakit perut atau terserang diare. Adapun korban yang tewas bernama Usman, warga Desa Ulumeraka, Kecamatan Onembute, Kabupaten Konawe. Korban terseret arus banjir pada Minggu (9/6/2019). Sementara itu, menurut Data BPBD Konawe Utara, di Konawe Utara saja terdapat 4.089 jiwa terdampak banjir dan 56 rumah hanyut terseret arus, belum lagi di wilayah Kabupaten/Kota lainnya. Warga pun mengungsi ke tempat yang lebih aman.', '2019-06-06', 'blog-single7.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `coba`
--

CREATE TABLE IF NOT EXISTS `coba` (
  `id` int(11) NOT NULL,
  `nama` varchar(55) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coba`
--

INSERT INTO `coba` (`id`, `nama`) VALUES
(1, 'sa'),
(2, 'gaq'),
(4, 'we'),
(5, 'wee'),
(6, 's'),
(7, 'sa'),
(8, ''),
(9, 're'),
(10, 'rrr'),
(13, 'g');

-- --------------------------------------------------------

--
-- Table structure for table `data_donatur`
--

CREATE TABLE IF NOT EXISTS `data_donatur` (
  `id` int(11) NOT NULL,
  `nama` varchar(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `telpon` varchar(22) NOT NULL,
  `password` varchar(55) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_donatur`
--

INSERT INTO `data_donatur` (`id`, `nama`, `email`, `telpon`, `password`) VALUES
(1, 'hangga', 'hangga@gmail.com', '0937849435', 'b1ce88d23e07a7c777aa208b7ba0048b'),
(2, '', 'hanggakristanto@gmail.com', '802394822', 'dsfsfsdfsdf'),
(3, '', 'hangga', '802394822', '1ertertert'),
(4, '', 'hangga', '08998798', 'hangga'),
(5, '', 'hangga', '', '1'),
(6, '', 'hangga', '345345', '1hrthrth'),
(7, '', 'koko', '9898', 'rtyhrtytry'),
(8, 'koko', 'hangga', '802394822', '1ewrwer'),
(9, 'jusman', 'jusman', '098797', 'kldjfsdfsdf'),
(10, '', 'hangga', '', '1'),
(11, 'hangga yytry', 'hanggarty', '56456456', '1ghfgh'),
(12, 'gaq', 'hanggakristanto@gmail.com', '34', 'tt');

-- --------------------------------------------------------

--
-- Table structure for table `data_wakaf`
--

CREATE TABLE IF NOT EXISTS `data_wakaf` (
  `id` int(11) NOT NULL,
  `jenis_wakaf` varchar(22) NOT NULL,
  `nominal` int(22) NOT NULL,
  `bank` varchar(22) NOT NULL,
  `foto` varchar(55) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login_session`
--

CREATE TABLE IF NOT EXISTS `login_session` (
  `uid` int(20) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(33) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` enum('admin','member') NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_session`
--

INSERT INTO `login_session` (`uid`, `username`, `email`, `password`, `level`) VALUES
(7, 'eaea', '', '353d42f995bd71530824d2be0737433e', 'admin'),
(17, 'hangga@gmail.com', '', '2a21509747f2b7817ae0f8ba84bc4ab3', 'member'),
(18, 'hangga kristanto', 'sdf@frgfg', 'a8a64cef262a04de4872b68b63ab7cd8', 'member'),
(20, 'admin', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(22, 'qq', 'qq@gmail.com', '099b3b060154898840f0ebdfb46ec78f', 'member'),
(23, 'sis@gmail.com', 'sis', 'fb5be496b0b960f3eee21dbdd24f9169', 'member'),
(24, 'sasa', 'sasa@gmail.com', 'f45731e3d39a1b2330bbf93e9b3de59e', 'member'),
(25, 'jak@gmail.com', 'jak', 'ddea8f3e14f60a9d025fc4f71a37997c', 'member'),
(26, 'koko@gmail.com', 'koko', '37f525e2b6fc3cb4abd882f708ab80eb', 'member'),
(27, 'ss@gmail.com', 'ss', '3691308f2a4c2f6983f2880d32e29c84', 'member'),
(28, 'rusdi@gmail.com', 'rusdi', '11174abb701b3bdbe46a8f8a706800e7', 'member'),
(29, 'aziz@gmail.com', 'aziz', 'b85dc795ba17cb243ab156f8c52124e1', 'member');

-- --------------------------------------------------------

--
-- Table structure for table `pewakaf`
--

CREATE TABLE IF NOT EXISTS `pewakaf` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis_wakaf` varchar(55) NOT NULL,
  `nominal` int(22) NOT NULL,
  `bank` varchar(22) NOT NULL,
  `gambar` varchar(55) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pewakaf`
--

INSERT INTO `pewakaf` (`id`, `nama`, `jenis_wakaf`, `nominal`, `bank`, `gambar`) VALUES
(7, 'hangga ', 'tanah sawah', 12000, 'bni syariah', 'breadcrumb1.jpg'),
(8, 'agus ilahi', 's', 1200, 's', '31.jpg'),
(9, 'w', 'sawah', 12, 'BNI', '32.jpg'),
(10, 'e', 'sawah', 34, 'BNI', '11.jpg'),
(11, 'sasa', 'sawah', 90, 'BNI', ''),
(12, 'sis', 'sawah', 12, 'BNI', ''),
(13, 'baru', 'sawah', 122, 'BNI', ''),
(18, 'sis', 'sawah', 99, 'BNI', ''),
(20, 'sa', 'sawah', 44444, 'BNI', ''),
(22, 'jak', 'sawah', 123, 'BNI', ''),
(23, 'sis', 'sawah', 12, 'BNI', ''),
(25, 'ww', 'sawah', 12, 'BNI', ''),
(30, 'solo', 'sawah', 1234123, 'BNI', '35.jpg'),
(31, 'rusdi', 'sawah', 1200, 'BNI', 'blog-single4.jpg'),
(33, 'sis', 'sawah', 90, 'BNI', '1.jpg'),
(34, 'sis', 'sawah', 90000, 'BNI', 'blog-single5.jpg'),
(35, 'lplp', 'wakaf rumah mewah', 12000, 'BNI', 'blog-single6.jpg'),
(45, 'hangga', 'wakaf mobil mewah', 90000, 'BNI 7070705980 an.kita', '36.jpg'),
(46, 'hangga', 'wakaf rumah mewah', 12000, 'BNI 7070705980 an.kita', '37.jpg'),
(47, 'sisss', 'wakaf rumah mewah', 12, 'BNI 7070705980 an.kita', 'blog-single8.jpg'),
(48, 'sis', 'hangga', 12, 'BNI 7070705980 an.kita', '38.jpg'),
(49, 'aziz', 'hangga', 12000, 'BNI 7070705980 an.kita', '39.jpg'),
(50, 'sa', 'hangga', 0, 'BNI 7070705980 an.kita', '310.jpg'),
(52, 'sis', 'saya', 12000, 'BNI 7070705980 an.kita', 'blog-single9.jpg'),
(53, 'sis', 'wakaf rumah mewah', 12000, 'BNI 7070705980 an.kita', '311.jpg'),
(54, 'sis', 'wakaf rumah mewah', 12000, 'BNI 7070705980 an.kita', ''),
(55, 'hangga', 'wakaf rumah mewah', 12000, 'BNI 7070705980 an.kita', ''),
(56, 'hangga', 'saya', 12000, 'BNI 7070705980 an.kita', ''),
(57, 'hangga', 'saya', 12, 'BNI 7070705980 an.kita', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_buku`
--

CREATE TABLE IF NOT EXISTS `tbl_buku` (
  `id_buku` int(11) NOT NULL,
  `no_isbn` varchar(100) NOT NULL,
  `nama_buku` varchar(100) NOT NULL,
  `tanggal_terbit` date NOT NULL,
  `pengarang` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_buku`
--

INSERT INTO `tbl_buku` (`id_buku`, `no_isbn`, `nama_buku`, `tanggal_terbit`, `pengarang`) VALUES
(0, '1212', 'as', '2019-05-16', 'asas');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE IF NOT EXISTS `tbl_users` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(55) NOT NULL,
  `username` varchar(55) NOT NULL,
  `password` varchar(55) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transfer`
--

CREATE TABLE IF NOT EXISTS `transfer` (
  `id` int(11) NOT NULL,
  `foto_transfer` varchar(55) DEFAULT NULL,
  `nama` varchar(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `telpon` varchar(18) NOT NULL,
  `jenis_wakaf` varchar(22) NOT NULL,
  `nominal` int(22) NOT NULL,
  `bank` varchar(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `wakaf`
--

CREATE TABLE IF NOT EXISTS `wakaf` (
  `id` int(11) NOT NULL,
  `judul` varchar(55) NOT NULL,
  `artikel` text NOT NULL,
  `tgl` date NOT NULL,
  `gambar` varchar(55) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wakaf`
--

INSERT INTO `wakaf` (`id`, `judul`, `artikel`, `tgl`, `gambar`) VALUES
(24, 'hangga', 'Warga yang tinggal di pengungsian akibat banjir sejak 2 Juni, mulai terserang penyakit\r\ndiare, berkurangnya pasokan air bersih menjadi salah satu penyebab warga pengungsi\r\nmengeluhkan rasa sakit perut atau terserang diare.\r\n\r\nAdapun korban yang tewas bernama Usman, warga Desa Ulumeraka, Kecamatan Onembute, Kabupaten Konawe. Korban terseret arus banjir pada Minggu (9/6/2019).\r\n\r\nSementara itu, menurut Data BPBD Konawe Utara, di Konawe Utara saja terdapat 4.089 jiwa terdampak banjir dan 56 rumah hanyut terseret arus, belum lagi di wilayah Kabupaten/Kota lainnya. Warga pun mengungsi ke tempat yang lebih aman.', '2019-05-31', 'blog-single.jpg'),
(26, 'saya', 'saya', '2019-06-30', '2.jpg'),
(27, 'wakaf rumah mewah', 'wakaf rumah mewah', '2019-06-07', '3.jpg'),
(28, 'wakaf mobil mewah', 'wakaf mobil mewah', '2019-06-11', 'breadcrumb2.jpg'),
(29, 'coba', 'coba', '2019-06-28', 'blog-single1.jpg'),
(30, 'terakhir', 'ter', '2019-06-20', 'blog-single3.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coba`
--
ALTER TABLE `coba`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_donatur`
--
ALTER TABLE `data_donatur`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_wakaf`
--
ALTER TABLE `data_wakaf`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_session`
--
ALTER TABLE `login_session`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `pewakaf`
--
ALTER TABLE `pewakaf`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `transfer`
--
ALTER TABLE `transfer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wakaf`
--
ALTER TABLE `wakaf`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `coba`
--
ALTER TABLE `coba`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `data_donatur`
--
ALTER TABLE `data_donatur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `data_wakaf`
--
ALTER TABLE `data_wakaf`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `login_session`
--
ALTER TABLE `login_session`
  MODIFY `uid` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `pewakaf`
--
ALTER TABLE `pewakaf`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=58;
--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `transfer`
--
ALTER TABLE `transfer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `wakaf`
--
ALTER TABLE `wakaf`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=31;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
