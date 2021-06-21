-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2021 at 02:26 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopmusic`
--

-- --------------------------------------------------------

--
-- Table structure for table `genre`
--

CREATE TABLE `genre` (
  `genre_id` int(50) NOT NULL,
  `genre_name` varchar(255) NOT NULL,
  `genre_infor` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `genre`
--

INSERT INTO `genre` (`genre_id`, `genre_name`, `genre_infor`) VALUES
(4, 'Pob', 'Pop music is a genre of contemporary music and is very popular in popular music.'),
(5, 'Country', 'Country music is associated with a cowboy culture. Country music was born in America based on Southern upland music, influenced by other music systems such as Blues, Jazz.'),
(6, 'Rock', 'Based on the rhythm of all three previous types of music (Blues, Jazz, Country) but Rock has a strong and fast rhythm, often using electronic instruments.'),
(7, 'R&B', 'R&B stands for Rhythm & Blues. It can also be said that R&B is a big branch of the Blues genre that existed a long time ago. R&B originated from the African community, arose in the early 20th century and became a popular music in many countries around the 1940s.'),
(8, 'Dance', 'Dance music (also known as dance music, dance music, floor music) is the music commonly used to dance, dance is the main but people can also use to listen, integrate ...'),
(9, 'Jazz', 'Jazz is an indigenous culture originally unique to Americans and was created by Americans. Western and African music is the place where Jazz was sown, but it is American culture where Jazz flourished and flourished.'),
(10, 'Blues', 'Along with jazz, blues music is derived from black American labor, religious and folk songs initiated by black Americans in the early 20th century. Blues (sad). This music is usually performed by trumpet, the melody.'),
(11, 'Flamenco', 'Flamenco is a typical art form of Spanish culture, synthesized from three genres: Cante, song; Baile, dances, and Guitarra, the musician on the guitar. When first listening to Flamenco, it is easy to mistakenly think that these are just simple melodies that are mixed in the beat of the beat with dancers in multi-layered dresses, but really this is a unique art form full of vibe. art.');

-- --------------------------------------------------------

--
-- Table structure for table `genredetail`
--

CREATE TABLE `genredetail` (
  `song_id` int(11) NOT NULL,
  `genre_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `genredetail`
--

INSERT INTO `genredetail` (`song_id`, `genre_id`) VALUES
(10, 7),
(10, 5),
(10, 8);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `order_id` int(50) NOT NULL,
  `bank` varchar(50) NOT NULL,
  `order_date` varchar(100) NOT NULL,
  `order_total` int(50) NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orderdetail`
--

CREATE TABLE `orderdetail` (
  `song_id` int(50) NOT NULL,
  `order_id` int(50) NOT NULL,
  `quanlity` int(50) NOT NULL,
  `price` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `singer`
--

CREATE TABLE `singer` (
  `singer_id` int(50) NOT NULL,
  `singer_name` varchar(255) NOT NULL,
  `singer_infor` varchar(2000) NOT NULL,
  `singer_img` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `singer`
--

INSERT INTO `singer` (`singer_id`, `singer_name`, `singer_infor`, `singer_img`) VALUES
(1, 'Pháo', 'Her real name is Nguyen Dieu Huyen, also known as an \"underground princess\", she gained great attraction after receiving four picks from coaches at the King of Rap program. Born in 2003, before that, Phao had a period of active activities with underground songs.\r\n\r\nIn real life, Phao is also a cheerful and sociable schoolgirl. She regularly participates in the school\'s collective activities as well as participates in a number of concerts organized by the underground community.', 'img/csphao.jpg'),
(2, 'Sơn Tùng M-TP', 'Nguyen Thanh Tung (born July 5, 1994), commonly known by his stage name Son Tung M-TP, is a Vietnamese male singer, songwriter and actor.\r\n\r\nBorn in Thai Binh city, in his childhood, Tung often sang at the Children\'s Cultural Palace in Thai Binh province and learned to play the organ. After that, Tung together with his classmates formed a group, named Over Band, began to compose and post his songs on a website specializing in music called LadyKillah.', 'img/sontung.jfif'),
(3, 'Jack', 'Trinh Tran Phuong Tuan (born April 12, 1997 in Ben Tre), commonly known by his stage name Jack is a Vietnamese male singer-songwriter and rapper.\r\n\r\nJack became known when working in the group G5R and released the song \"Hong Nhan\". During his career, he has received five Blue Wave awards, one Mai Vang award, one WeChoice Awards and four Zing Music Awards. In addition, he was awarded the Best New Asian Artist Award in Vietnam at the Mnet Asian Music Awards 2019, winning the Best Music Video categ', 'img/jack.jpg'),
(5, 'JustaTee', 'Nguyen Thanh Tuan (born November 1, 1991), commonly known by his stage name JustaTee or JayTee is a Vietnamese male rapper, singer and songwriter. He won 1 Award of Merit and is one of the very successful rappers known and loved by a large audience in the Vietnamese music market.', 'img/just.jpg'),
(6, 'Amme', 'Tran Huyen My, commonly known by her stage name Amee, is a Vietnamese actress and singer. She is currently an artist under St.319 Entertainment.', 'img/amme.jfif'),
(7, 'Trinh Thang Binh', 'Trinh Thang Binh is a Vietnamese singer, songwriter, actor and music producer.', 'img/trinh.jfif'),
(8, 'Mr Siro', 'Vuong Quoc Tuan, commonly known by his stage name Mr. Siro, born November 14, 1981 in Ho Chi Minh City, is a Vietnamese musician and singer.', 'img/siro.jpg'),
(9, 'Erik', 'Le Trung Thanh, commonly known by his stage name Erik is a Vietnamese male singer and dancer. He participated in the program Vietnamese Child Singing in 2013 and then became a member of the group Monstar.', 'img/erik.jfif');

-- --------------------------------------------------------

--
-- Table structure for table `song`
--

CREATE TABLE `song` (
  `song_id` int(50) NOT NULL,
  `song_name` varchar(255) NOT NULL,
  `song_img` varchar(50) NOT NULL,
  `song_mp3` varchar(50) NOT NULL,
  `song_price` int(100) NOT NULL,
  `song_lyric` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `song`
--

INSERT INTO `song` (`song_id`, `song_name`, `song_img`, `song_mp3`, `song_price`, `song_lyric`) VALUES
(6, 'CHÚNG TA CỦA HIỆN TẠI', 'ctcht.jpg', 'chungtacuahientai.mp3', 50, 'Mùa thu mang giấc mơ quay về\r\n'),
(7, 'CÓ CHẮC YÊU LÀ ĐÂY', 'ccyld.jpg', 'cochacyeulafday.mp3', 50, 'ssfsfs'),
(9, 'LẠC TRÔI', 'st.jpg', 'lactroi.mp3', 60, 'fseesg'),
(10, 'Anh luôn là ly do', 'ald.jpg', 'anhluonlaflydo.mp3', 80, 'sgtdfd'),
(11, 'Đã lỡ yêu em nhiều', 'jt.jfif', 'daloyeuemnhieu.mp3', 30, 'fss'),
(12, 'Đến cuối cùng', 'dccc.jfif', 'dencuoicung.mp3', 90, 'sa'),
(13, 'Đi về nhà', 'dvn.jpg', 'divenha.mp3', 74, 'tt'),
(14, 'Đom Đóm', 'dd.jpg', 'domdom.mp3', 52, 'as'),
(15, 'Em Bé', 'ab.jpg', 'embe.mp3', 85, 'gfdf'),
(16, 'Em Gì Ơi', 'j.jpg', 'emgioi.mp3', 85, 'aá'),
(17, 'Em Không Sai Chúng Ta Sai', 'er.jpg', 'emkhongsai.mp3', 45, '32'),
(20, 'Hồng Nhan', 'j.jpg', 'hongnhan.mp3', 32, 'yhjui');

-- --------------------------------------------------------

--
-- Table structure for table `songdetail`
--

CREATE TABLE `songdetail` (
  `song_id` int(50) NOT NULL,
  `singer_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `songdetail`
--

INSERT INTO `songdetail` (`song_id`, `singer_id`) VALUES
(10, 9),
(6, 2),
(7, 2),
(15, 6),
(16, 3),
(17, 9),
(9, 2),
(13, 5),
(13, 5),
(14, 3),
(12, 8),
(11, 5),
(12, 8);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `role` enum('user','admin') NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role`, `username`, `password`, `name`) VALUES
(1, 'admin', 'admin', 'e10adc3949ba59abbe56e057f20f883e', 'Nguyen Chi Thanh'),
(2, 'user', 'phuong', 'e10adc3949ba59abbe56e057f20f883e', 'Nguyen Thi Phuong'),
(3, 'admin', 'adminrole', 'e10adc3949ba59abbe56e057f20f883e', 'admin role'),
(9, 'user', 'hien', 'e10adc3949ba59abbe56e057f20f883e', 'Nguyen Thi Hien'),
(10, 'user', 'ma', 'e10adc3949ba59abbe56e057f20f883e', 'Nguyen Van Dung'),
(14, 'user', 'loc', 'e10adc3949ba59abbe56e057f20f883e', 'La Xuan Lộc');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`genre_id`);

--
-- Indexes for table `genredetail`
--
ALTER TABLE `genredetail`
  ADD KEY `song_id` (`song_id`),
  ADD KEY `genre_id` (`genre_id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `orderdetail`
--
ALTER TABLE `orderdetail`
  ADD PRIMARY KEY (`song_id`),
  ADD KEY `user_id` (`order_id`);

--
-- Indexes for table `singer`
--
ALTER TABLE `singer`
  ADD PRIMARY KEY (`singer_id`);

--
-- Indexes for table `song`
--
ALTER TABLE `song`
  ADD PRIMARY KEY (`song_id`);

--
-- Indexes for table `songdetail`
--
ALTER TABLE `songdetail`
  ADD KEY `song_id` (`song_id`),
  ADD KEY `singer_id` (`singer_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `genre`
--
ALTER TABLE `genre`
  MODIFY `genre_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `order_id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orderdetail`
--
ALTER TABLE `orderdetail`
  MODIFY `song_id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `singer`
--
ALTER TABLE `singer`
  MODIFY `singer_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `song`
--
ALTER TABLE `song`
  MODIFY `song_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `genredetail`
--
ALTER TABLE `genredetail`
  ADD CONSTRAINT `genredetail_ibfk_1` FOREIGN KEY (`genre_id`) REFERENCES `genre` (`genre_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `genredetail_ibfk_2` FOREIGN KEY (`song_id`) REFERENCES `song` (`song_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `orderdetail`
--
ALTER TABLE `orderdetail`
  ADD CONSTRAINT `orderdetail_ibfk_2` FOREIGN KEY (`order_id`) REFERENCES `order` (`order_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `orderdetail_ibfk_3` FOREIGN KEY (`song_id`) REFERENCES `song` (`song_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `songdetail`
--
ALTER TABLE `songdetail`
  ADD CONSTRAINT `songdetail_ibfk_2` FOREIGN KEY (`singer_id`) REFERENCES `singer` (`singer_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `songdetail_ibfk_3` FOREIGN KEY (`song_id`) REFERENCES `song` (`song_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
