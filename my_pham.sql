-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2021 at 10:30 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my_pham`
--

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id_img` int(11) NOT NULL,
  `img` varchar(30) NOT NULL,
  `width` int(11) NOT NULL,
  `height` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id_img`, `img`, `width`, `height`) VALUES
(1, 'logo.jpg', 100, 50);

-- --------------------------------------------------------

--
-- Table structure for table `cthd`
--

CREATE TABLE `cthd` (
  `id_hd` int(11) NOT NULL,
  `id_sp` int(11) NOT NULL,
  `so_luong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cthd`
--

INSERT INTO `cthd` (`id_hd`, `id_sp`, `so_luong`) VALUES
(13, 3, 1),
(14, 3, 5),
(15, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `dang_nhap`
--

CREATE TABLE `dang_nhap` (
  `Username` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `hd`
--

CREATE TABLE `hd` (
  `id_hd` int(11) NOT NULL,
  `id_kh` int(11) NOT NULL,
  `date` varchar(30) NOT NULL,
  `so_tien` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hd`
--

INSERT INTO `hd` (`id_hd`, `id_kh`, `date`, `so_tien`) VALUES
(13, 37, '27-5-2021', 1285000),
(14, 23, '27-4-2021', 6425000),
(15, 39, '28-5-2021', 1285000);

-- --------------------------------------------------------

--
-- Table structure for table `kh`
--

CREATE TABLE `kh` (
  `id_kh` int(11) NOT NULL,
  `ten_kh` varchar(30) NOT NULL,
  `sdt` int(10) NOT NULL,
  `gmail` varchar(30) NOT NULL,
  `dia_chi` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kh`
--

INSERT INTO `kh` (`id_kh`, `ten_kh`, `sdt`, `gmail`, `dia_chi`) VALUES
(23, 'phạm', 12, '222', 'pham'),
(34, 'khó hiểu', 12334, 'chán', 'bnaatsluwcsj'),
(37, '111', 11, '111', '11'),
(38, 'Phạm Chí Công', 333057256, 'phamchicong0604@gmail.com', '26trung nghĩa 1 hoà minh liên '),
(39, '4', 4, '4', '4');

-- --------------------------------------------------------

--
-- Table structure for table `logo_th`
--

CREATE TABLE `logo_th` (
  `id_th` int(11) NOT NULL,
  `img` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logo_th`
--

INSERT INTO `logo_th` (`id_th`, `img`) VALUES
(1, 'img-1.jpg'),
(2, 'img-2.jpg'),
(3, 'img-3.jpg'),
(4, 'img-4.jpg'),
(5, 'img-5.jpg'),
(6, 'img-6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `quang_cao`
--

CREATE TABLE `quang_cao` (
  `id_qc` int(11) NOT NULL,
  `img` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quang_cao`
--

INSERT INTO `quang_cao` (`id_qc`, `img`) VALUES
(1, 'img-1.jpg'),
(2, 'img-2.jpg'),
(3, 'img-3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `san_pham`
--

CREATE TABLE `san_pham` (
  `id_sp` int(11) NOT NULL,
  `ten_sp` varchar(50) NOT NULL,
  `img` varchar(30) NOT NULL,
  `gia` int(11) NOT NULL,
  `gia_goc` int(11) NOT NULL,
  `tyle_giam` int(11) NOT NULL,
  `tinh_trang` varchar(20) NOT NULL,
  `link` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `san_pham`
--

INSERT INTO `san_pham` (`id_sp`, `ten_sp`, `img`, `gia`, `gia_goc`, `tyle_giam`, `tinh_trang`, `link`) VALUES
(1, 'Kem Dưỡng Body Trẻ Hóa Da Toàn Thân ', 'img-sp1.jpg', 1190000, 1400000, 15, 'đang cập nhật', 'http://localhost:8080/7ngay/sp2.php'),
(2, 'Kem Dưỡng Da Mặt Chống Lão Hóa ', 'img-sp2.jpg', 2160000, 2500000, 14, '', ''),
(3, 'Kem Chống Nắng Toàn Thân Dạng Xịt', 'img-4.jpg', 1285000, 1500000, 14, 'còn hàng', 'http://localhost:8080/7ngay/sp1.php'),
(4, 'Kem Dưỡng Da Mặt Phục Hồi Da ', 'img-3.jpg', 1760000, 2100000, 16, '', ''),
(5, 'Kem Dưỡng Da Mặt Phục Hồi Và Chống Lão Hóa Image M', 'img-sp5.jpg', 2930000, 3400000, 14, 'Còn Hàng', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id_img`);

--
-- Indexes for table `cthd`
--
ALTER TABLE `cthd`
  ADD PRIMARY KEY (`id_hd`,`id_sp`),
  ADD KEY `id_sp` (`id_sp`);

--
-- Indexes for table `dang_nhap`
--
ALTER TABLE `dang_nhap`
  ADD PRIMARY KEY (`Username`);

--
-- Indexes for table `hd`
--
ALTER TABLE `hd`
  ADD PRIMARY KEY (`id_hd`),
  ADD KEY `id_kh` (`id_kh`);

--
-- Indexes for table `kh`
--
ALTER TABLE `kh`
  ADD PRIMARY KEY (`id_kh`);

--
-- Indexes for table `logo_th`
--
ALTER TABLE `logo_th`
  ADD PRIMARY KEY (`id_th`);

--
-- Indexes for table `quang_cao`
--
ALTER TABLE `quang_cao`
  ADD PRIMARY KEY (`id_qc`);

--
-- Indexes for table `san_pham`
--
ALTER TABLE `san_pham`
  ADD PRIMARY KEY (`id_sp`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id_img` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hd`
--
ALTER TABLE `hd`
  MODIFY `id_hd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `kh`
--
ALTER TABLE `kh`
  MODIFY `id_kh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `logo_th`
--
ALTER TABLE `logo_th`
  MODIFY `id_th` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `quang_cao`
--
ALTER TABLE `quang_cao`
  MODIFY `id_qc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `san_pham`
--
ALTER TABLE `san_pham`
  MODIFY `id_sp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cthd`
--
ALTER TABLE `cthd`
  ADD CONSTRAINT `cthd_ibfk_1` FOREIGN KEY (`id_sp`) REFERENCES `san_pham` (`id_sp`),
  ADD CONSTRAINT `cthd_ibfk_2` FOREIGN KEY (`id_hd`) REFERENCES `hd` (`id_hd`);

--
-- Constraints for table `hd`
--
ALTER TABLE `hd`
  ADD CONSTRAINT `hd_ibfk_1` FOREIGN KEY (`id_kh`) REFERENCES `kh` (`id_kh`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
