-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2022 at 12:37 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elite_custom`
--

-- --------------------------------------------------------

--
-- Table structure for table `additional_feature`
--

CREATE TABLE `additional_feature` (
  `id` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `product_id` int(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `images` text DEFAULT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `images`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Auto Part', NULL, 1, '2021-09-10 18:03:07', '2021-09-10 18:03:07'),
(6, 'Cars', NULL, 1, '2021-09-10 18:03:07', '2021-09-10 18:03:07');

-- --------------------------------------------------------

--
-- Table structure for table `config`
--

CREATE TABLE `config` (
  `id` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `currency` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `fb_link` varchar(255) DEFAULT NULL,
  `twitter_link` varchar(255) DEFAULT NULL,
  `insta_link` varchar(255) DEFAULT NULL,
  `linkedin_link` varchar(255) DEFAULT NULL,
  `copyright` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `config`
--

INSERT INTO `config` (`id`, `email`, `phone`, `currency`, `address`, `fb_link`, `twitter_link`, `insta_link`, `linkedin_link`, `copyright`, `created_at`, `updated_at`) VALUES
(1, 'info@odisjames.com', '832.402.9934', 'USD', 'James Street Capital 3225 McLeod Drive, Suite 100 Las Vegas, Nevada 89121', '#', '#', '#', '#', '© Copyright 2021 James-Street. All rights reserved.', '2021-06-22 22:45:08', '2021-06-23 05:50:43');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `phone`, `message`, `created_at`, `updated_at`) VALUES
(1, ' ', 'hozaty@mailinator.com', '27', 'Qui aliqua Est bla', '2021-06-22 17:11:36', '2021-06-22 17:11:36'),
(2, ' ', 'hipuhex@mailinator.com', '85', 'Illum sit do modi', '2021-06-23 05:21:10', '2021-06-23 05:21:10'),
(3, ' ', 'admin@mail.com', '21', 'a', '2021-06-24 13:00:38', '2021-06-24 13:00:38');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `membership_id` int(11) DEFAULT NULL,
  `payment_id` varchar(255) NOT NULL,
  `status` int(11) DEFAULT NULL COMMENT '0 = not cancelled\r\n1 = cancelled\r\n',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `membership_id`, `payment_id`, `status`, `created_at`, `updated_at`) VALUES
(2, 3, 8, 'ch_1J4tXuCmaCeXAIYUb93RxWJK', 0, '2021-06-21 15:16:37', '2021-06-21 15:16:37'),
(3, 3, 8, 'ch_1J4tlJCmaCeXAIYUrn0KVvMt', 0, '2021-06-21 15:30:28', '2021-06-21 15:30:28'),
(4, 3, 9, 'ch_1J4w2LCmaCeXAIYUf1WUugp3', 0, '2021-06-22 05:56:13', '2021-06-22 05:56:13'),
(5, 3, 8, 'ch_1J4wJ9CmaCeXAIYUcaclKOar', 0, '2021-06-22 06:13:34', '2021-06-22 06:13:34'),
(6, 1, 6, 'ch_1J5dHPCmaCeXAIYUH0s42vP6', 0, '2021-06-23 16:06:40', '2021-06-23 16:06:40');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `categories_id` int(25) NOT NULL,
  `user_id` int(255) DEFAULT NULL,
  `product_type` varchar(25) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` float NOT NULL,
  `stock` int(11) NOT NULL,
  `sku` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `categories_id`, `user_id`, `product_type`, `title`, `description`, `price`, `stock`, `sku`, `status`, `created_at`, `updated_at`) VALUES
(18, 1, NULL, NULL, 'Title', 'Description', 615, 4, '55', 1, '2022-03-14 15:10:00', '2022-03-14 15:10:00'),
(22, 6, NULL, NULL, 'Sequi exercitation s1', 'Aut quis non repudia1', 7051, 671, '671', 1, '2022-03-14 17:52:57', '2022-03-14 18:34:15'),
(23, 1, NULL, NULL, 'Enim et delectus si', 'Odit quisquam volupt', 398, 16, '90', 1, '2022-03-14 18:36:56', '2022-03-14 18:36:56'),
(24, 6, NULL, NULL, 'Enim eligendi rem an', 'Sunt fuga Accusanti', 234, 14, '53', 1, '2022-03-14 18:37:18', '2022-03-14 18:37:18');

-- --------------------------------------------------------

--
-- Table structure for table `product_autoparts`
--

CREATE TABLE `product_autoparts` (
  `id` int(255) NOT NULL,
  `product_id` int(255) NOT NULL,
  `speed` varchar(255) NOT NULL,
  `powersource` varchar(255) NOT NULL,
  `battery_cell_type` varchar(255) NOT NULL,
  `voltage` varchar(255) NOT NULL,
  `battery_capacity` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_autoparts`
--

INSERT INTO `product_autoparts` (`id`, `product_id`, `speed`, `powersource`, `battery_cell_type`, `voltage`, `battery_capacity`, `created_at`, `updated_at`) VALUES
(1, 18, 'Speed1', 'PowerSource1', 'Battery Cell Type1', 'Voltage1', 'Battery Capacity1', '2022-03-14 15:10:00', '2022-03-14 16:54:08'),
(3, 23, 'Aliqua Velit repudi', 'Quos non dolorem dol', 'Optio vel rem ut co', 'Corrupti ea in mole', 'Quod esse ut volupt', '2022-03-14 18:36:56', '2022-03-14 18:36:56');

-- --------------------------------------------------------

--
-- Table structure for table `product_cars`
--

CREATE TABLE `product_cars` (
  `id` int(255) NOT NULL,
  `product_id` int(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `condition` varchar(255) NOT NULL,
  `body` varchar(255) NOT NULL,
  `mileage` varchar(255) NOT NULL,
  `fuel_type` varchar(255) NOT NULL,
  `engine` varchar(255) NOT NULL,
  `transmission` varchar(255) NOT NULL,
  `exterior_color` varchar(255) NOT NULL,
  `interior_color` varchar(255) NOT NULL,
  `registered` varchar(255) NOT NULL,
  `vin_number` varchar(255) NOT NULL,
  `stock_id` varchar(255) NOT NULL,
  `price_description` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_cars`
--

INSERT INTO `product_cars` (`id`, `product_id`, `year`, `condition`, `body`, `mileage`, `fuel_type`, `engine`, `transmission`, `exterior_color`, `interior_color`, `registered`, `vin_number`, `stock_id`, `price_description`, `created_at`, `updated_at`) VALUES
(1, 22, '1989', 'Earum qui mollit ali1', 'Sequi enim excepteur1', 'Excepteur cupidatat1', 'Excepturi ad volupta1', 'Dolorem nesciunt la1', 'Eos voluptas nesciu1', 'Dolor porro veniam1', 'Quia nisi voluptate1', '201', '2801', '161', '3931', '2022-03-14 17:52:57', '2022-03-14 18:34:15'),
(2, 24, '2002', 'Quo nulla officiis s', 'Perferendis similiqu', 'Dolor vel ab dolore', 'Sequi dolore quae es', 'Veniam ea repellend', 'Sed dolore minim ali', 'Cum est veniam repu', 'Odit voluptatem cupi', '34', '181', '99', '419', '2022-03-14 18:37:18', '2022-03-14 18:37:18');

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `product_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `title`, `product_id`, `created_at`, `updated_at`) VALUES
(2, '1647294602.jpg', 18, '2022-03-14 16:50:02', '2022-03-14 16:50:02'),
(3, '1647298377.jpg', 22, '2022-03-14 17:52:57', '2022-03-14 17:52:57'),
(4, '1647301016.jpg', 23, '2022-03-14 18:36:56', '2022-03-14 18:36:56'),
(5, '1647301038.jpg', 24, '2022-03-14 18:37:18', '2022-03-14 18:37:18');

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `parent_category` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `title`, `parent_category`, `status`, `created_at`, `updated_at`) VALUES
(1, 'test12', '1', 1, '2021-09-10 18:42:57', '2021-09-10 18:48:23'),
(2, 'Officiis quae ea odi', '4', 1, '2021-09-10 18:48:53', '2021-09-13 12:22:40'),
(3, 'new cat', '4', 1, '2021-09-13 12:22:22', '2021-09-13 12:22:22');

-- --------------------------------------------------------

--
-- Table structure for table `technicals`
--

CREATE TABLE `technicals` (
  `id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `engine_no_of_cylinder` varchar(255) DEFAULT NULL,
  `engine_displacement` varchar(255) DEFAULT NULL,
  `engine_drive_layout` varchar(255) DEFAULT NULL,
  `engine_horespower` varchar(255) DEFAULT NULL,
  `engine_rpm` varchar(255) DEFAULT NULL,
  `engine_torque` varchar(255) DEFAULT NULL,
  `engine_compression_ratio` varchar(255) DEFAULT NULL,
  `performance_top_track_speed` varchar(255) DEFAULT NULL,
  `performance_mph` varchar(255) DEFAULT NULL,
  `transmission_type` varchar(255) DEFAULT NULL,
  `transmission_displacement` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `provider_id` varchar(255) DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `password` varchar(555) DEFAULT NULL,
  `user_role` int(1) NOT NULL,
  `status` int(11) DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `provider_id`, `avatar`, `password`, `user_role`, `status`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@mail.com', NULL, NULL, '$2y$10$eBzm3cEsbRSf2djUAs1P2eyT.yQlWP3XJQb737CalCQoTsdTbRvja', 1, 1, '2021-06-16 21:48:41', '2021-09-13 15:12:37'),
(2, 'test', 'test123@gmail.com', NULL, NULL, 'test', 4, 1, '2021-06-18 18:14:13', '2021-09-10 14:42:03'),
(3, 'dev petyr', 'devpetyr911@gmail.com', '105866561827322939177', 'https://lh3.googleusercontent.com/a/AATXAJytHN79d16llvC2GrMy98m9LEXZxwv5cd5ZWDUX=s96-c', NULL, 2, 1, '2021-06-18 18:32:20', '2021-09-10 14:33:55'),
(8, 'muzz', 'muzz@gmail.com', NULL, NULL, 'password', 2, 1, '2021-06-23 04:13:26', '2021-09-10 14:34:37'),
(10, 'test', 'asd@mail.com', NULL, NULL, '123', 2, 0, '2021-06-24 11:45:41', '2021-06-24 11:45:41'),
(11, 'haris', 'haris@gmail.com', NULL, NULL, 'haris123', 3, 0, '2021-06-24 12:58:44', '2021-09-10 14:42:20'),
(12, 'muqtada work', 'muqtadawork@gmail.com', '114224599136896656093', 'https://lh3.googleusercontent.com/a/AATXAJwVUUf24hYV55HjH7Zi4H-rhbJJqJ1a48D55Ral=s96-c', NULL, 2, 1, '2021-06-24 13:08:03', '2021-09-10 14:34:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `additional_feature`
--
ALTER TABLE `additional_feature`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pro_id` (`product_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `config`
--
ALTER TABLE `config`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cat_id` (`categories_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `product_autoparts`
--
ALTER TABLE `product_autoparts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `prodid` (`product_id`);

--
-- Indexes for table `product_cars`
--
ALTER TABLE `product_cars`
  ADD PRIMARY KEY (`id`),
  ADD KEY `prod_id` (`product_id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `proid` (`product_id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `technicals`
--
ALTER TABLE `technicals`
  ADD PRIMARY KEY (`id`),
  ADD KEY `p_id` (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `additional_feature`
--
ALTER TABLE `additional_feature`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `config`
--
ALTER TABLE `config`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `product_autoparts`
--
ALTER TABLE `product_autoparts`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product_cars`
--
ALTER TABLE `product_cars`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `technicals`
--
ALTER TABLE `technicals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `additional_feature`
--
ALTER TABLE `additional_feature`
  ADD CONSTRAINT `pro_id` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `cat_id` FOREIGN KEY (`categories_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `product_autoparts`
--
ALTER TABLE `product_autoparts`
  ADD CONSTRAINT `prodid` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `product_cars`
--
ALTER TABLE `product_cars`
  ADD CONSTRAINT `prod_id` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `product_images`
--
ALTER TABLE `product_images`
  ADD CONSTRAINT `proid` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `technicals`
--
ALTER TABLE `technicals`
  ADD CONSTRAINT `p_id` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
