-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2022 at 08:35 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `utspaw`
--

-- --------------------------------------------------------

--
-- Table structure for table `even`
--

CREATE TABLE `even` (
  `id_event` int(5) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `tempat` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `even`
--

INSERT INTO `even` (`id_event`, `judul`, `tempat`, `tanggal`, `waktu`) VALUES
(1, 'Happy Donor Darah Kraksaan', 'Jl.Panglima no.277', '2022-04-20', '09.00 - selesai'),
(2, 'Donate for life', 'Musholla Baitus Salam', '2022-04-22', '08.00 - selesai');

-- --------------------------------------------------------

--
-- Table structure for table `pendonor`
--

CREATE TABLE `pendonor` (
  `id_donor` int(3) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis_kelamin` enum('laki-laki','perempuan') NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_hp` varchar(12) NOT NULL,
  `umur` varchar(3) NOT NULL,
  `berat_badan` varchar(5) NOT NULL,
  `gol_darah` varchar(5) NOT NULL,
  `donor_ke` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendonor`
--

INSERT INTO `pendonor` (`id_donor`, `nama`, `jenis_kelamin`, `alamat`, `no_hp`, `umur`, `berat_badan`, `gol_darah`, `donor_ke`) VALUES
(1, 'Dewi Imani Al Qur\' Ani', 'perempuan', 'Bulujaran Lor', '082247342238', '20', '47', 'B', 4),
(2, 'Aditya Sumarno', 'laki-laki', 'Kraksaan', '085257376588', '42', '67', 'B', 17),
(3, 'Rizqi Ghulam Rosul', 'laki-laki', 'Tegalsiwalan', '085231712561', '26', '62', 'B', 1),
(10, 'imani', 'perempuan', 'leces', '123456789012', '23', '49', 'a', 5),
(12, 'ibu', 'laki-laki', 'kuripan', '123456789012', '23', '49', 'a', 2),
(14, 'Aisyah', 'perempuan', 'Banyuanyar', '45362133245', '24', '53', 'O', 2),
(17, 'wiuwiu', 'laki-laki', 'sukapura', '12345432', '57', '75', 'AB', 7);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_users` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` enum('Admin','Pendonor','Operator') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_users`, `username`, `nama_lengkap`, `password`, `level`) VALUES
(1, 'operator', 'DEWI', '4b583376b2767b923c3e1da60d10de59', 'Operator'),
(2, 'pendonor', 'Wafa', '05ace164a79c9ec3ee55c3dfcb61094e', 'Pendonor'),
(3, 'admin', 'PMI Kabupaten Probolinggo', '21232f297a57a5a743894a0e4a801fc3', 'Admin'),
(6, 'aliwafa', 'M. Ali Wafa', '827ccb0eea8a706c4c34a16891f84e7b', 'Pendonor'),
(7, 'alviana', 'Alviana Rizqi', '8c6532b3cf589a9e82a07730736356ac', 'Pendonor');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `even`
--
ALTER TABLE `even`
  ADD PRIMARY KEY (`id_event`);

--
-- Indexes for table `pendonor`
--
ALTER TABLE `pendonor`
  ADD PRIMARY KEY (`id_donor`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `even`
--
ALTER TABLE `even`
  MODIFY `id_event` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pendonor`
--
ALTER TABLE `pendonor`
  MODIFY `id_donor` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
