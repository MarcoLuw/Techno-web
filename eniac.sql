-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2023 at 06:45 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eniac`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `fullName` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `creationTime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `fullName`, `password`, `creationTime`) VALUES
(1, 'admin', 'admin', 'admin', '2023-04-24 16:20:08'),
(2, 'hoangthh1612', 'Tran Huy Hoang', '1612', '2023-04-24 16:45:55');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(16) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `title`, `image`) VALUES
(1, 'Laptops', 'cate1.png'),
(2, 'SmartPhones', 'cate2.png'),
(3, 'HeadPhones', 'cate3.png');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(16) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `total` float NOT NULL,
  `status` varchar(100) NOT NULL,
  `createTime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `id` int(12) NOT NULL,
  `product_id` int(12) NOT NULL,
  `order_id` int(12) NOT NULL,
  `quantity` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(16) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `category_id` int(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `image`, `category_id`) VALUES
(4, 'iPhone 14 Pro Max Gold', 'This is iPhone 14 Max Gold', 128, '14-promax.png', 2),
(5, 'iPhone 14 Pro Max Purple', 'This is iPhone 14 Pro Max Purple', 105, '14-pro.png', 2),
(6, 'Galaxy S22 Ultra', 'This is Galaxy S22 Ultra', 101.27, 's22-ultra.png', 2),
(7, 'Marshall Major IV', 'This is Marshall Major IV', 48, 'marshall.png', 3),
(8, 'Sony WH-1000XM5', 'This is Sony WH-1000XM5', 85, 'sony-WH.png', 3),
(14, 'Macbook Air M1 2020', 'This is Macbook Air M1 2020', 110, 'macbook-air-M1.png', 1),
(22, 'Asus Zenbook 14', 'This is Asus Zenbook 14', 122, 'zenbook-14.png', 1),
(23, 'Acer Nitro 5', 'This is Acer Nitro 5', 75, 'acer-nitro.png', 1),
(24, 'Lenovo Ideapad 3', 'This is Lenovo Ideapad 3', 52, 'lenovo_ideapad_3.png', 1),
(28, 'Dell Inspiron 16', 'This is Dell Inspiron 16', 78, 'dell-inspiron-16.png', 1),
(29, 'Asus Rog Strix G17', 'This is Asus Rog Strix G17', 95, 'asus-rog-16.png', 1),
(30, 'Galaxy Z Flip 4', 'This is Galaxy Z Flip 4', 98, 'zflip-4.png', 2),
(31, 'Oppo Reno 7', 'This is Oppo Reno 7', 75, 'oppo-reno-7.png', 2),
(32, 'Google Pixel 7', 'This is Google Pixel 7', 72, 'pixel-7.png', 2),
(33, 'Xiaomi Mix Fold 2', 'This is Xiaomi Mix Fold 2', 85, 'xiaomi-mixfold.png', 2),
(34, 'Xiaomi Redmi Note 12', 'This is Xiaomi Redmi Note 12', 52, 'yibo-edition.png', 2),
(35, 'Apple Airpods Max Wireless', 'This is Apple Airpods Max Wireless', 105, 'apple-airpod-max.png', 3),
(36, 'Beoplay H95 Headphones', 'This is Beoplay H95 Headphones', 899, 'beoplay.png', 3),
(37, 'Samsung Galaxy Buds 2 Pro', 'This is Samsung Galaxy Buds 2 Pro', 72, 'galaxy-bud.png', 3),
(38, 'Sony WF-1000XM4', 'This is Sony WF-1000XM4', 75, 'sony-WF.png', 3),
(39, 'Pixel Buds Pro', 'This is Pixel Buds Pro', 77, 'pixel-puds.png', 3),
(40, 'Sony True Wireless WF C500', 'This is Sony True Wireless WF C500', 69, 'sony-wf-c500.png', 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullName` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `creationTime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullName`, `username`, `email`, `phone`, `address`, `password`, `creationTime`) VALUES
(1, 'user 1', 'user 1', 'user1@gmail.com', '0123456789', 'this is user 1 address', '123456', '2023-04-25 12:02:50'),
(2, 'user 2', 'user 2', 'user2@gmail.com', '0123456789', 'this is user 2 address', '123456', '2023-04-25 12:03:55'),
(4, 'Tran Huy Hoang', 'hoangthh', 'hoangctrl1612@gmail.com', '1234512345', 'khu phố 6, phương Linh Trung', '$2y$10$ba.aA7VpoaP9LFciFUzrO.Msb68CPbmeBCMDdvzF7lA8ApmlqYWUa', '2023-04-26 14:40:35'),
(5, 'Tran Huy Hoang', 'hoangthh1111', 'hoangctrl1612@gmail.com', '1234512345', 'khu phố 6, phương Linh Trung', '$2y$10$xQLvVGohRnd/0ZYE.94pHO1UYWZEo8rYEFb0z6T2xma1rD5rBMaF2', '2023-04-26 17:33:27'),
(6, 'Huy Hoang', 'hoangctrl', 'hoangctrl1612@gmail.com', '1234512345', 'khu phố 6, phương Linh Trung', '$2y$10$1qPEY87YZuFFYhhuVvvgfeYHYwd7IjXpWqvv4/vZ4pIkI4XwoeI1i', '2023-04-26 21:01:36'),
(7, 'Tran Huy Hoang', 'hoangthh1212', 'hoangctrl1612@gmail.com', '1234512345', 'khu phố 6, phương Linh Trung', '$2y$10$ttElQUUQamor692wKJ/uy.fzPnfRSb7bSQ1JV9g2BqoUOP1xY5Gl.', '2023-04-27 12:18:53'),
(8, 'Tran Huy Hoang', 'huyhoang1612', 'hoang.tranthh@hcmut.edu.vn', '1234512345', 'Le Thuy - Quang Binh', '$2y$10$.ZpV9Q5xP6XxC/hYAv4cW.uZxyDYoOLp2eG5lVY40y0JmQIulZHzy', '2023-04-27 13:09:44'),
(9, 'Hoang Anh', 'hoanganh', 'hoanganh@gmail.com', '0868585545', 'khu phố 6, phương Linh Trung', '$2y$10$vv1KOMzfqIvXpFu3sGOPIOoscgBvnvA5pn1eZzOaOHnqx.sMCOTRW', '2023-04-27 14:08:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD CONSTRAINT `order_detail_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `order` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_detail_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
