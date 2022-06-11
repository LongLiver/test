-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2022 at 02:18 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tunesourcewedsite`
--

-- --------------------------------------------------------

--
-- Table structure for table `genre`
--

CREATE TABLE `genre` (
  `genre_id` int(11) NOT NULL,
  `genre_name` varchar(200) DEFAULT NULL,
  `genre_description` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `genre`
--

INSERT INTO `genre` (`genre_id`, `genre_name`, `genre_description`) VALUES
(1, 'V-Pop', NULL),
(2, 'K-Pop', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `song_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `singer`
--

CREATE TABLE `singer` (
  `singer_id` int(11) NOT NULL,
  `singer_name` varchar(200) DEFAULT NULL,
  `singer_description` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `singer`
--

INSERT INTO `singer` (`singer_id`, `singer_name`, `singer_description`) VALUES
(1, 'Karik', NULL),
(2, 'Tara', NULL),
(3, 'BlackPink', NULL),
(4, 'Hoàng Dũng', NULL),
(5, 'Chi Dân', NULL),
(6, 'Vũ Duy Khánh', NULL),
(7, 'Đức Phúc', NULL),
(8, 'Sơn Tùng MTP', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `song`
--

CREATE TABLE `song` (
  `song_id` int(11) NOT NULL,
  `song_name` varchar(200) DEFAULT NULL,
  `song_lyric` varchar(200) DEFAULT NULL,
  `song_price` varchar(100) DEFAULT NULL,
  `song_audio` varchar(100) DEFAULT NULL,
  `song_img` varchar(100) DEFAULT NULL,
  `genre_id` int(11) DEFAULT NULL,
  `singer_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `song`
--

INSERT INTO `song` (`song_id`, `song_name`, `song_lyric`, `song_price`, `song_audio`, `song_img`, `genre_id`, `singer_id`) VALUES
(1, 'Anhlacuaem', 'gggggg', '5$', 'Anhlacuaem.mp3', 'Karik1.PNG', 1, 1),
(3, 'AS IF IT\'S YOUR LAST', NULL, '15$', 'AS IF IT\'S YOUR LAST.mp3', '5.JPG', 2, 3),
(4, 'Nàng Thơ', 'Em, ngày em đánh rơi nụ cười vào anh\r\nCó nghĩ sau này em sẽ chờ\r\nVà vô tư cho đi hết những ngây thơ\r\nAnh, một người hát mãi những điều mong manh\r\nLang thang tìm niềm vui đã lỡ\r\nChẳng buồn dặn lòng quê', '5$', 'Nangtho.mp3', '3.JPG', 1, 4),
(5, 'Lạc trôi', 'Ah ah\r\nNgười theo hương hoa mây mù giăng lối\r\nLàn sương khói phôi phai đưa bước ai xa rồi\r\nĐơn côi mình ta vấn vương\r\nHồi ức trong men say chiều mưa buồn\r\nNgăn giọt lệ ngừng khiến khoé mi sầu bi\r\nĐườn', '10$', 'Lactroi.mp3', '8.JPG', 1, 8),
(6, 'Vợ tuyệt vời nhất', NULL, '5$', 'votuyetvoinhat.mp3', '9.JPG', 1, 6),
(7, 'Làm vợ anh nhé', NULL, '5$', 'lamvoanhnhe.mp3', '7.JPG', 1, 5),
(8, 'Ngày đầu tiên', NULL, '6$', 'ngaydautien.mp3', '6.JPG', 1, 7);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(200) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `fullname` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `fullname`) VALUES
(1, 'long', '123', 'long'),
(3, 'vy', '012', 'null'),
(90, 'longndbhaf200106', 'liverpool1912', 'null');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`genre_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `song_id` (`song_id`);

--
-- Indexes for table `singer`
--
ALTER TABLE `singer`
  ADD PRIMARY KEY (`singer_id`);

--
-- Indexes for table `song`
--
ALTER TABLE `song`
  ADD PRIMARY KEY (`song_id`),
  ADD KEY `genre_id` (`genre_id`),
  ADD KEY `singer_id` (`singer_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `genre`
--
ALTER TABLE `genre`
  MODIFY `genre_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `singer`
--
ALTER TABLE `singer`
  MODIFY `singer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `song`
--
ALTER TABLE `song`
  MODIFY `song_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`song_id`) REFERENCES `song` (`song_id`);

--
-- Constraints for table `song`
--
ALTER TABLE `song`
  ADD CONSTRAINT `song_ibfk_1` FOREIGN KEY (`genre_id`) REFERENCES `genre` (`genre_id`),
  ADD CONSTRAINT `song_ibfk_2` FOREIGN KEY (`singer_id`) REFERENCES `singer` (`singer_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
