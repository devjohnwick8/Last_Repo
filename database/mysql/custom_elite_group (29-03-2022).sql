-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2022 at 02:51 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `custom_elite_group`
--

-- --------------------------------------------------------

--
-- Table structure for table `additional_feature`
--

CREATE TABLE `additional_feature` (
  `id` int(255) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `product_id` int(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `additional_feature`
--

INSERT INTO `additional_feature` (`id`, `title`, `product_id`, `created_at`, `updated_at`) VALUES
(8, 'asfsfa', 44, '2022-03-16 14:09:24', '2022-03-16 14:09:24'),
(9, 'dasd', 44, '2022-03-16 14:09:24', '2022-03-16 14:09:24'),
(13, 'featured1', 48, '2022-03-21 18:43:40', '2022-03-21 18:43:40'),
(14, 'featured2', 48, '2022-03-21 18:43:40', '2022-03-21 18:43:40'),
(15, 'featured3', 48, '2022-03-21 18:43:40', '2022-03-21 18:43:40');

-- --------------------------------------------------------

--
-- Table structure for table `billings`
--

CREATE TABLE `billings` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `company_name` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `billing_address1` text DEFAULT NULL,
  `billing_address2` varchar(255) DEFAULT NULL,
  `town` varchar(255) DEFAULT NULL,
  `zip_code` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `notes` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
  `order_number` varchar(255) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `membership_id` int(11) DEFAULT NULL,
  `sub_total` varchar(255) DEFAULT NULL,
  `ship_price` varchar(255) DEFAULT NULL,
  `order_total` varchar(255) DEFAULT NULL,
  `payment_id` varchar(255) NOT NULL,
  `status` int(11) DEFAULT NULL COMMENT '0 = pending,\r\n1 = processing,\r\n2 = onhold,\r\n3 = completed,\r\n4 = cancelled,\r\n5 = refunded,\r\n6 = failed,\r\n',
  `login_status` int(11) DEFAULT NULL,
  `billing_id` int(11) DEFAULT NULL,
  `shipping_id` int(11) DEFAULT NULL,
  `reciept_url` text DEFAULT NULL,
  `is_paid` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orders_items`
--

CREATE TABLE `orders_items` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `product_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `order_number` varchar(255) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `categories_id` int(25) NOT NULL,
  `parent_cat_id` int(11) DEFAULT NULL,
  `user_id` int(255) DEFAULT NULL,
  `product_type` varchar(25) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(15,2) DEFAULT NULL,
  `stock` int(11) NOT NULL,
  `sku` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `categories_id`, `parent_cat_id`, `user_id`, `product_type`, `title`, `description`, `price`, `stock`, `sku`, `status`, `created_at`, `updated_at`) VALUES
(43, 3, 1, NULL, NULL, 'AutoParts1', 'Hello1', '1651.00', 411, '1611', 1, '2022-03-16 13:10:57', '2022-03-16 13:11:23'),
(44, 1, 6, NULL, NULL, 'Civic1', 'Do itaque et aut ut1', '2961.00', 801, '841', 1, '2022-03-16 13:30:32', '2022-03-16 13:32:12'),
(47, 3, 1, NULL, NULL, 'Honda Civic Parts', 'PArts Description', '165.00', 100, '4561', 1, '2022-03-21 18:39:25', '2022-03-21 18:39:25'),
(48, 1, 6, NULL, NULL, 'Civic1', 'Car Description', '1010.00', 10, '14', 1, '2022-03-21 18:43:15', '2022-03-21 18:43:40');

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
(1, 43, 'Speed', 'PowerSource', 'Battery Cell Type', 'Voltage', 'Battery Capacity', '2022-03-16 13:10:57', '2022-03-16 13:10:57'),
(4, 47, 'speed', 'PowerSource', 'Battery Cell', 'voltage', 'Battery', '2022-03-21 18:39:25', '2022-03-21 18:39:25');

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
(1, 44, '2021', 'Condition1', 'Body1', 'Mileage', 'Fuel Type1', 'Engine1', 'Transmission1', 'Exterior Color1', 'Interior Color1', '211', '7531', '34', 'Price Description1', '2022-03-16 13:30:32', '2022-03-16 13:32:12'),
(2, 48, '2022', 'Condition', 'body', 'Mileage', 'Fuel Type', 'Engine', 'Transmission', 'color', 'in color', '1234567', '410', '321', '123', '2022-03-21 18:43:15', '2022-03-21 18:43:15');

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
(1, '1647454257.jpg', 43, '2022-03-16 13:10:57', '2022-03-16 13:10:57'),
(2, '1647455432.jpg', 44, '2022-03-16 13:30:32', '2022-03-16 13:30:32'),
(4, '1647905965.jpg', 47, '2022-03-21 18:39:25', '2022-03-21 18:39:25'),
(5, '1647906195.jpg', 48, '2022-03-21 18:43:15', '2022-03-21 18:43:15');

-- --------------------------------------------------------

--
-- Table structure for table `shippings`
--

CREATE TABLE `shippings` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `company_name` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `shipping_address1` text DEFAULT NULL,
  `shipping_address2` varchar(255) DEFAULT NULL,
  `town` varchar(255) DEFAULT NULL,
  `zip_code` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `notes` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(1, 'Honda', '6', 1, '2022-03-15 16:23:41', '2022-03-15 16:23:41'),
(2, 'Civic', '6', 1, '2022-03-15 16:24:03', '2022-03-15 16:24:03'),
(3, 'Honda', '1', 1, '2022-03-15 18:33:48', '2022-03-15 18:33:48');

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

--
-- Dumping data for table `technicals`
--

INSERT INTO `technicals` (`id`, `product_id`, `engine_no_of_cylinder`, `engine_displacement`, `engine_drive_layout`, `engine_horespower`, `engine_rpm`, `engine_torque`, `engine_compression_ratio`, `performance_top_track_speed`, `performance_mph`, `transmission_type`, `transmission_displacement`, `created_at`, `updated_at`) VALUES
(1, 44, 'No Of 1', 'Displacement1', 'Drive 1', 'HoresPower1', 'RPM1', 'Torque1', 'Compression 1', 'Perfomance1', '1', 'Type1', 'Displacement1', '2022-03-16 13:32:12', '2022-03-16 13:33:05'),
(2, 48, 'drive', 'Displacement', 'engine Power', NULL, 'Rpm', 'Torque', 'Compression', 'Top Track Speed', 'MPH', 'Transmission  Type', 'Transmission Displacement', '2022-03-21 18:43:15', '2022-03-21 18:43:15');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `provider_id` varchar(255) DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `password` varchar(555) DEFAULT NULL,
  `user_role` int(1) NOT NULL COMMENT '1 = Admin\r\n2 = Customer',
  `status` int(11) DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `phone`, `provider_id`, `avatar`, `password`, `user_role`, `status`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@mail.com', NULL, NULL, NULL, '$2y$10$eBzm3cEsbRSf2djUAs1P2eyT.yQlWP3XJQb737CalCQoTsdTbRvja', 1, 1, '2021-06-16 21:48:41', '2021-09-13 15:12:37'),
(16, 'Hellow', 'devjohnwick8@gmail.com', '123456798', NULL, NULL, '$2y$10$wRMwYg26dtrw1RIFYbvhrevHDHyv3XOtFmMo8q2rqaNMr8fjzW3nW', 2, 0, '2022-03-28 14:59:59', '2022-03-28 14:59:59');

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
-- Indexes for table `billings`
--
ALTER TABLE `billings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

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
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `billing_id` (`billing_id`),
  ADD KEY `shipping_id` (`shipping_id`);

--
-- Indexes for table `orders_items`
--
ALTER TABLE `orders_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user` (`user_id`),
  ADD KEY `product` (`product_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cat_id` (`categories_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `cate_id` (`parent_cat_id`);

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
-- Indexes for table `shippings`
--
ALTER TABLE `shippings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

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
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `billings`
--
ALTER TABLE `billings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders_items`
--
ALTER TABLE `orders_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `product_autoparts`
--
ALTER TABLE `product_autoparts`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
-- AUTO_INCREMENT for table `shippings`
--
ALTER TABLE `shippings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `technicals`
--
ALTER TABLE `technicals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `additional_feature`
--
ALTER TABLE `additional_feature`
  ADD CONSTRAINT `pro_id` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `billings`
--
ALTER TABLE `billings`
  ADD CONSTRAINT `users_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `cat_id` FOREIGN KEY (`categories_id`) REFERENCES `sub_categories` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `cate_id` FOREIGN KEY (`parent_cat_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

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
-- Constraints for table `shippings`
--
ALTER TABLE `shippings`
  ADD CONSTRAINT `userid` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `technicals`
--
ALTER TABLE `technicals`
  ADD CONSTRAINT `p_id` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
