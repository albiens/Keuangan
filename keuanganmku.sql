-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2019 at 05:32 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `keuanganmku`
--

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` enum('admin','direktur','owner') NOT NULL,
  `nama` varchar(900) NOT NULL,
  `alamat` varchar(900) NOT NULL,
  `email` varchar(150) NOT NULL,
  `nohp` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id`, `username`, `password`, `level`, `nama`, `alamat`, `email`, `nohp`) VALUES
(3, 'owner', '123', 'owner', 'nepu', 'planeptune', 'nep@gmail.com', '123'),
(4, 'asd', 'asd', 'admin', 'nicky', 'rumah', 'mpsh@gmail.com', '081212397265'),
(5, 'nicky', 'asd', 'admin', 'nicky', 'isekai', 'fulturejaro@gmail.com', '081212397265'),
(6, 'Hai', 'asd', 'direktur', 'nicky', 'jln dago no 109', 'fulturejaro@gmail.com', '081212397265'),
(8, 'kou', 'asd', 'admin', 'asd', 'asd', 'asd', 'asd'),
(9, 'moo', 'asd', 'admin', 'asd', 'asd', 'asd', 'asd'),
(11, 'new', 'new', 'direktur', 'spidol', 'jln dago no 109', 'asdasd@gmail.com', 'asda'),
(13, 'kuro', '123', 'owner', 'kuroneko', 'isekai', 'kuro@gmail.com', '081212397265'),
(14, 'admin', '123', 'admin', 'nicky', 'pasko', 'fulturejaro@gmail.com', '081212397265'),
(15, 'direktur', '123', 'direktur', 'nicky', 'pasko', 'fulturejaro@gmail.com', '081212397265'),
(16, 'masagi', 'asd', 'direktur', 'masagi', 'asd', 'asd@gmail.com', '0861234644544');

-- --------------------------------------------------------

--
-- Table structure for table `pemasukan`
--

CREATE TABLE `pemasukan` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `jumlah` int(255) NOT NULL,
  `foto` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemasukan`
--

INSERT INTO `pemasukan` (`id`, `nama`, `tanggal`, `jumlah`, `foto`) VALUES
(3, 'website masagi asd', '2018-09-16', 3500000, ''),
(4, 'website', '2019-01-17', 3800000, ''),
(5, 'website 2', '2019-01-17', 3800000, ''),
(6, 'website 3', '2019-03-19', 3000000, ''),
(7, 'hashire', '2019-03-22', 3200000, ''),
(8, 'Padoru Padoru', '2019-03-22', 3200000, ''),
(9, 'indofood', '2019-03-19', 2000000, ''),
(10, 'asd', '2019-03-14', 35000000, ''),
(11, 'spidol merah', '2019-03-27', 3000000, ''),
(13, 'hasagi website', '2019-03-20', 300000000, ''),
(14, 'website 4', '2019-03-19', 30000, ''),
(15, 'website asd', '2019-04-01', 35000000, ''),
(20, 'test file', '2019-03-04', 200000, 'alpukat.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pengeluaran`
--

CREATE TABLE `pengeluaran` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `jumlah` int(255) NOT NULL,
  `foto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengeluaran`
--

INSERT INTO `pengeluaran` (`id`, `nama`, `tanggal`, `jumlah`, `foto`) VALUES
(5, 'kerang', '2019-03-13', 300000, ''),
(6, 'dadu', '2019-03-04', 300000, ''),
(7, 'umu', '2019-03-19', 300000, ''),
(8, 'umu', '2019-03-19', 300000, ''),
(9, 'meja', '2019-03-19', 700000, ''),
(10, 'komputer', '2019-04-01', 5000000, ''),
(11, 'test file', '2019-03-05', 30000, 'apel.jpg');

-- --------------------------------------------------------

--
-- Stand-in structure for view `sum`
-- (See below for the actual view)
--
CREATE TABLE `sum` (
`Tahun_Bulan` varchar(7)
,`total` varchar(150)
,`tanggal` varchar(7)
,`jumlah` varchar(150)
,`Pendapatan` double
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `sums`
-- (See below for the actual view)
--
CREATE TABLE `sums` (
`Tahun_Bulan` varchar(7)
,`total` varchar(150)
,`tanggal` varchar(7)
,`jumlah` varchar(150)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `sum_pem`
-- (See below for the actual view)
--
CREATE TABLE `sum_pem` (
`total` varchar(150)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `sum_pemasukan`
-- (See below for the actual view)
--
CREATE TABLE `sum_pemasukan` (
`Tahun_Bulan` varchar(7)
,`total` varchar(150)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `sum_pengeluaran`
-- (See below for the actual view)
--
CREATE TABLE `sum_pengeluaran` (
`tanggal` varchar(7)
,`jumlah` varchar(150)
);

-- --------------------------------------------------------

--
-- Structure for view `sum`
--
DROP TABLE IF EXISTS `sum`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `sum`  AS  select `sum_pemasukan`.`Tahun_Bulan` AS `Tahun_Bulan`,`sum_pemasukan`.`total` AS `total`,`sum_pengeluaran`.`tanggal` AS `tanggal`,`sum_pengeluaran`.`jumlah` AS `jumlah`,(`sum_pemasukan`.`total` - `sum_pengeluaran`.`jumlah`) AS `Pendapatan` from (`sum_pemasukan` left join `sum_pengeluaran` on((`sum_pemasukan`.`Tahun_Bulan` = `sum_pengeluaran`.`tanggal`))) ;

-- --------------------------------------------------------

--
-- Structure for view `sums`
--
DROP TABLE IF EXISTS `sums`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `sums`  AS  select `sum_pemasukan`.`Tahun_Bulan` AS `Tahun_Bulan`,`sum_pemasukan`.`total` AS `total`,`sum_pengeluaran`.`tanggal` AS `tanggal`,`sum_pengeluaran`.`jumlah` AS `jumlah` from (`sum_pemasukan` left join `sum_pengeluaran` on((`sum_pemasukan`.`Tahun_Bulan` = `sum_pengeluaran`.`tanggal`))) ;

-- --------------------------------------------------------

--
-- Structure for view `sum_pem`
--
DROP TABLE IF EXISTS `sum_pem`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `sum_pem`  AS  select format(sum(`pemasukan`.`jumlah`),2) AS `total` from `pemasukan` ;

-- --------------------------------------------------------

--
-- Structure for view `sum_pemasukan`
--
DROP TABLE IF EXISTS `sum_pemasukan`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `sum_pemasukan`  AS  select date_format(`pemasukan`.`tanggal`,'%Y-%m') AS `Tahun_Bulan`,format(sum(`pemasukan`.`jumlah`),0) AS `total` from `pemasukan` group by date_format(`pemasukan`.`tanggal`,'%Y-%m') ;

-- --------------------------------------------------------

--
-- Structure for view `sum_pengeluaran`
--
DROP TABLE IF EXISTS `sum_pengeluaran`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `sum_pengeluaran`  AS  select date_format(`pengeluaran`.`tanggal`,'%Y-%m') AS `tanggal`,format(sum(`pengeluaran`.`jumlah`),0) AS `jumlah` from `pengeluaran` group by date_format(`pengeluaran`.`tanggal`,'%Y-%m') ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pemasukan`
--
ALTER TABLE `pemasukan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengeluaran`
--
ALTER TABLE `pengeluaran`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `pemasukan`
--
ALTER TABLE `pemasukan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `pengeluaran`
--
ALTER TABLE `pengeluaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
