-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2021 at 06:58 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecomm_hi`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2021_04_11_063801_create_users_table', 1),
(2, '2021_04_11_143439_create_products_table', 2),
(3, '2021_04_15_075203_create_cart_table', 3),
(4, '2021_04_17_132014_create_orders_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_method` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `product_id`, `user_id`, `address`, `status`, `payment_method`, `payment_status`, `created_at`, `updated_at`) VALUES
(1, 3, 1, 'delhi cantt , New Delhi', 'Pending', 'Online Payment', 'Pending', '2021-04-17 08:41:28', '2021-04-17 08:41:28'),
(2, 1, 1, 'delhi cantt , New Delhi', 'Pending', 'Online Payment', 'Pending', '2021-04-17 08:41:28', '2021-04-17 08:41:28'),
(3, 8, 1, 'delhi cantt , New Delhi', 'Pending', 'Online Payment', 'Pending', '2021-04-17 08:41:28', '2021-04-17 08:41:28'),
(4, 5, 2, 'Noida , utter Pradesh', 'Pending', 'Payment On Delivery', 'Pending', '2021-04-17 08:43:29', '2021-04-17 08:43:29'),
(5, 6, 2, 'Noida , utter Pradesh', 'Pending', 'Payment On Delivery', 'Pending', '2021-04-17 08:43:29', '2021-04-17 08:43:29'),
(6, 5, 4, 'lucknow , utter pradesh', 'Pending', 'EMI Payment', 'Pending', '2021-04-17 11:26:57', '2021-04-17 11:26:57'),
(7, 7, 4, 'lucknow , utter pradesh', 'Pending', 'EMI Payment', 'Pending', '2021-04-17 11:26:57', '2021-04-17 11:26:57');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gallery` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `category`, `gallery`, `description`, `created_at`, `updated_at`) VALUES
(1, 'LG Mobile', '25000', 'mobile', 'https://www.thenewsminute.com/sites/default/files/styles/news_detail/public/LG_mobiles_250121_ians_1200.jpg?itok=2YNVwrn2', 'Smart Phone With 4GB RAM and much more Features', NULL, NULL),
(2, 'Oppo A7', '37900', 'mobile', 'https://www.zdnet.com/a/hub/i/r/2020/02/14/55b9e09e-6347-475f-b8c7-79b7f9f3b8db/resize/1200x900/b34e03298ab91df973459877cdf344f2/oppo-a5-2020-header.jpg', 'Smart Phone With 6GB RAM , 42MP Camera and much more Features', NULL, NULL),
(3, 'Samsung Mobile', '68999', 'mobile', 'https://img.global.news.samsung.com/in/wp-content/uploads/2020/02/1-2.jpg', 'Smart Phone With 12Gb RAM With Duel Camera and much more Features', NULL, NULL),
(4, 'Iphone 10', '75999', 'mobile', 'https://images.indianexpress.com/2020/05/iPhone-SE-2020-fb.jpg', 'Smart Phone With 12GB RAM with 16MP Primary and 8MP secondary Camera  and much more Features', NULL, NULL),
(5, 'Vivo V20', '98525', 'mobile', 'https://images.indianexpress.com/2020/10/vivo-v20.jpg', 'Smart Phone With 16GB RAM with 64mp Primary and 42MP selfie Camera  and much more Features', NULL, NULL),
(6, 'Samsung Tv', '145454', 'tv', 'https://static.bhphoto.com/images/images2500x2500/1551883148_1444278.jpg', 'Smart Tv With  much more Features', NULL, NULL),
(7, 'Lg Smart Tv', '199999', 'tv', 'https://www.lg.com/in/images/tvs/md06117716/gallery/01-1100-V01.jpg', 'Smart Phone Smart work and  much more Features', NULL, NULL),
(8, 'Lg Fridge', '99000', 'fridge', 'https://2.bp.blogspot.com/-wO6WcbN6oLI/WpxhJ_cUwLI/AAAAAAAABy4/mYn1pXvGgJYwgRBWSkFXStzYCTDsAAY_QCLcBGAs/w1200-h630-p-k-no-nu/LG%2Bfridge.jpg', 'Smart Fridge  With Super Colling System and much more Features', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Vishwajit Vm', 'Vishwa@gmail.com', '$2y$10$RIQWwHkbXG6wOY4XHRlHWecbId.JBitpMGXsEHhImXHLtJlquHCWm', NULL, NULL),
(2, 'shivani', 'shiva@gmail.com', '$2y$10$j3Kp6U12crplM/qD86.Zy.DrpyVDAMpeGG4vKv7rDBvhuePAzm9j6', NULL, NULL),
(3, 'carol', 'carol@gmail.com', '$2y$10$Oky5JfTgte1tPKZSs9aAoeXjHgZX3R8SOaA4Xp.V1si7bz/bfIhte', NULL, NULL),
(4, 'manish', 'manish@me.in', '$2y$10$6XjJzWH8JhLgPJqV0WXPreSfXxHa2x5X6uNJ.DpOV5UbyhUaltWya', '2021-04-17 11:18:45', '2021-04-17 11:18:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
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
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
