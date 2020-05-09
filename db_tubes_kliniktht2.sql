-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2020 at 02:11 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_tubes_kliniktht2`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `username`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(2, 'Haura Athaya', 'haura.athaya@gmail.com', 'hauraathaya', 'admin.png', '$2y$10$D.PeNcErut3eXEc0G3Ps5.I4tT4bb/YCozcSx5ecgfBQXKuLP3ipC', 1, 1, 1586772910),
(16, 'Sweet Bliss', 'sweetbliss2000@gmail.com', 'sweetbliss', 'default.jpg', '$2y$10$otwA0Hy0NAR.tj34WBKEaejC4QV83PTkfsToJC31oMQZKRIF4.Pri', 3, 1, 1587301561),
(21, 'Dr. Haura', 'klinikthttelu1@gmail.com', 'dokterhaura', 'dokter1.jpg', '$2y$10$EbkBCVst/7QEcbUetVtweehX5XWS4q.V.rsdHWidSZ3Z2kUTM0XTq', 2, 1, 1587743120),
(22, 'Dr. Tri Ayu', 'klinikthttelu2@gmail.com', 'doktertriayu', 'dokter2.jpg', '$2y$10$BxA6ah69OEcDOZa4Dc50Fuu.r.ygUiM8JsbtxW96VUuA0F/qsAFZi', 2, 1, 1587743129),
(23, 'Dr. Annisa', 'klinikthttelu3@gmail.com', 'dokterannisa', 'dokter3.jpg', '$2y$10$gla8HCcJdiWjDK9N2eVUjOIr2yh.kAq9W/PleG.JULjiw9lvn9Clq', 2, 1, 1587743139),
(24, 'Dr. Tasya', 'klinikthttelu4@gmail.com', 'doktertasya', 'dokter4.jpg', '$2y$10$ek812e.dMdzkjx5WtHm/k.jiPsuMG.FkKxKofwvvmpikmbuyyqns2', 2, 1, 1587743152),
(25, 'Dr. Syifa', 'klinikthttelu5@gmail.com', 'doktersyifa', 'dokter5.jpg', '$2y$10$GXQuqGlptrhqwrjRQ70PKehaLZQUj8LR7qWn0p6J/2AyYL6WGuOEi', 2, 1, 1587746022),
(27, 'Sugar Bliss', 'sugarbliss2406@gmail.com', 'sugarbliss', 'dokter6.jpg', '$2y$10$HtYsvRfgNu2XtfPTheVXL.8hPIaC07BSFmmB1MFjZdWEDRfnkILgu', 3, 1, 1587785560),
(28, 'Dr. Miranda', 'klinikthttelu@gmail.com', 'doktermiranda', 'default.jpg', '$2y$10$jKtZ3PehjYGqveMz8i5QTuZscAg7NJJOXMKs/lECd4S98hH.wpGoa', 2, 1, 1587806269);

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 3),
(3, 3, 3),
(4, 1, 4),
(5, 2, 2),
(9, 1, 13),
(10, 1, 14),
(11, 2, 3),
(12, 3, 15);

-- --------------------------------------------------------

--
-- Table structure for table `user_dokter`
--

CREATE TABLE `user_dokter` (
  `id` int(11) NOT NULL,
  `nama_dokter` varchar(128) NOT NULL,
  `jam_praktek` varchar(128) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `image` varchar(100) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_dokter`
--

INSERT INTO `user_dokter` (`id`, `nama_dokter`, `jam_praktek`, `username`, `password`, `image`, `role_id`, `is_active`, `date_created`) VALUES
(8, 'Dr. Haura', '13.00', 'dokterhaura', '$2y$10$EbkBCVst/7QEcbUetVtweehX5XWS4q.V.rsdHWidSZ3Z2kUTM0XTq', 'default.jpg', 2, 1, 1587743120),
(9, 'Dr. Tri Ayu', '14.00', 'doktertriayu', '$2y$10$BxA6ah69OEcDOZa4Dc50Fuu.r.ygUiM8JsbtxW96VUuA0F/qsAFZi', 'default.jpg', 2, 1, 1587743129),
(10, 'Dr. Annisa Miranda', '10.00', 'dokterannisa', '$2y$10$gla8HCcJdiWjDK9N2eVUjOIr2yh.kAq9W/PleG.JULjiw9lvn9Clq', 'default.jpg', 2, 1, 1587743139),
(11, 'Dr. Tasya', '12.00', 'doktertasya', '$2y$10$ek812e.dMdzkjx5WtHm/k.jiPsuMG.FkKxKofwvvmpikmbuyyqns2', 'default.jpg', 2, 1, 1587743152),
(12, 'Dr. Syifa', '09.00', 'doktersyifa', '$2y$10$GXQuqGlptrhqwrjRQ70PKehaLZQUj8LR7qWn0p6J/2AyYL6WGuOEi', 'default.jpg', 2, 1, 1587746022),
(13, 'Dr. Miranda', '11.00', 'doktermiranda', '$2y$10$jKtZ3PehjYGqveMz8i5QTuZscAg7NJJOXMKs/lECd4S98hH.wpGoa', 'default.jpg', 2, 1, 1587806269);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `nama_menu` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `nama_menu`) VALUES
(1, 'Admin'),
(2, 'Dokter'),
(3, 'User'),
(4, 'Menu'),
(13, 'Menu Dokter'),
(14, 'Menu Pasien'),
(15, 'Pasien');

-- --------------------------------------------------------

--
-- Table structure for table `user_pasien`
--

CREATE TABLE `user_pasien` (
  `id` int(100) NOT NULL,
  `nama_pasien` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `role_id` int(1) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL,
  `date_reserved` int(11) NOT NULL,
  `id_dokter` int(11) NOT NULL,
  `nama_dokter` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_pasien`
--

INSERT INTO `user_pasien` (`id`, `nama_pasien`, `email`, `username`, `password`, `image`, `role_id`, `is_active`, `date_created`, `date_reserved`, `id_dokter`, `nama_dokter`) VALUES
(3, 'Sugar Bliss', 'sugarbliss2406@gmail.com', 'sugarbliss', '$2y$10$HtYsvRfgNu2XtfPTheVXL.8hPIaC07BSFmmB1MFjZdWEDRfnkILgu', 'default.jpg', 3, 1, 1587785560, 1587804708, 10, 'Dr. Annisa Miranda'),
(9, 'Sweet Bliss', 'sweetbliss2000@gmail.com', 'sweetbliss', '$2y$10$otwA0Hy0NAR.tj34WBKEaejC4QV83PTkfsToJC31oMQZKRIF4.Pri', 'default.jpg', 3, 1, 1587301561, 1587816086, 12, 'Dr. Syifa');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Admin'),
(2, 'Dokter'),
(3, 'Pasien');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `url` varchar(100) NOT NULL,
  `icon` varchar(100) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `judul`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'admin', 'fas fa-fw fa-tachometer-alt', 1),
(2, 3, 'My Profile', 'user', 'fas fa-fw fa-user-alt', 1),
(3, 3, 'Edit Profile', 'user/edit', 'fas fa-fw fa-user-edit', 1),
(4, 4, 'Menu Management', 'menu', 'fas fa-fw fa-folder-open', 1),
(5, 4, 'Submenu Management', 'menu/submenu', 'far fa-fw fa-folder-open', 1),
(8, 1, 'Role', 'admin/role', 'fas fa-fw fa-user-tie', 1),
(11, 3, 'Change Password', 'user/changepassword', 'fas fa-fw fa-key', 1),
(21, 13, 'List Dokter', 'dokter', 'fas fa-fw fa-user-md', 1),
(22, 14, 'List Pasien', 'pasien/list', 'fas fa-clinic-medical', 1),
(26, 15, 'Jadwal Dokter', 'pasien/', 'fas fa-fw fa-calendar-alt', 1),
(27, 2, 'Reservasi', 'dokter/pasien', 'fas fa-fw fa-user-md', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_token`
--

CREATE TABLE `user_token` (
  `id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `token` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_dokter`
--
ALTER TABLE `user_dokter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_pasien`
--
ALTER TABLE `user_pasien`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user_dokter`
--
ALTER TABLE `user_dokter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user_pasien`
--
ALTER TABLE `user_pasien`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
