-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2025 at 12:32 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sarara_social`
--

-- --------------------------------------------------------

--
-- Table structure for table `addresses`
--

CREATE TABLE `addresses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `street_address` text DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `province` varchar(255) DEFAULT NULL,
  `zip_code` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `addresses`
--

INSERT INTO `addresses` (`id`, `order_id`, `first_name`, `last_name`, `phone`, `street_address`, `city`, `province`, `zip_code`, `created_at`, `updated_at`) VALUES
(1, 1, 'ewrwerw', 'weerwe', '23423', 'degd', 'ertwew', 'dsfg', '345', '2025-02-18 07:53:50', '2025-02-18 07:53:50'),
(2, 2, 'Elsa', 'Denesik', '380-685-3573', '913 Kirlin Drives', 'Visalia', '674 Regan Land', '63516', '2025-02-20 13:24:13', '2025-02-20 13:24:13'),
(3, 3, 'Vito', 'Kling', '514-865-7007', '47839 Yasmeen River', 'St. Charles', '601 Rogahn Throughway', '79475', '2025-02-20 13:28:24', '2025-02-20 13:28:24'),
(4, 4, 'Rosalyn', 'Schmidt', '653-456-2736', '37995 Friesen Landing', 'Athens-Clarke County', '349 Abbott Path', '47487-2610', '2025-02-20 13:42:57', '2025-02-20 13:42:57'),
(5, 7, 'Scarlett', 'Altenwerth', '832-586-7866', '18116 Lorine Highway', 'Weymouth Town', '733 Carlo Walks', '54736', '2025-02-20 14:28:05', '2025-02-20 14:28:05'),
(6, 8, 'Oma', 'Mante', '658-773-2894', '7200 Rippin Point', 'Apopka', '456 Romaguera Keys', '32016', '2025-02-20 15:28:11', '2025-02-20 15:28:11'),
(7, 9, 'Peshal', 'Sedhai', '987654321', 'KTM', 'KTM', 'Bagmati', '123123', '2025-02-19 05:35:13', '2025-02-19 05:35:13'),
(8, 10, '123', '123', '123', '123', '123', '123', '123', '2025-02-19 05:42:54', '2025-02-19 05:42:54');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `slug`, `image`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'B&B ', 'bb', 'brands/01JMJQWZGKAV5NCFNQM3ZT8HVB.jpg', 1, '2025-02-17 18:08:18', '2025-02-20 16:48:21'),
(2, 'Giant', 'jhbh', 'brands/01JMJQY89Z430YPVHR4WTR7XY9.jpg', 1, '2025-02-17 23:49:03', '2025-02-20 16:49:03'),
(3, 'Velocity', 'velocity', 'brands/01JMJQZ89KCFTX6T6Z0NR0EECG.png', 1, '2025-02-19 23:10:13', '2025-02-20 16:49:36'),
(4, 'Run', 'run', 'brands/01JMJR0MGRF92EHB2D3P4RDTX4.png', 1, '2025-02-20 16:50:21', '2025-02-20 16:50:21'),
(5, 'The North Face', 'the-north-face', 'brands/01JMJR20Y6PVAX830P0JY2HEN5.svg', 1, '2025-02-20 16:51:06', '2025-02-20 16:51:06'),
(6, 'Black Diamond', 'black-diamond', 'brands/01JMJR2Y7H40TM5E1V702GJXPR.png', 1, '2025-02-20 16:51:36', '2025-02-20 16:51:41'),
(7, 'New Nepal Cycles', 'new-nepal-cycles', 'brands/01JMEZ3VQ05QB64BM4XTW6JFWB.jpg', 1, '2025-02-19 05:37:29', '2025-02-19 05:37:29');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('356a192b7913b04c54574d18c28d46e6395428ab', 'i:9;', 1740091901),
('356a192b7913b04c54574d18c28d46e6395428ab:timer', 'i:1740091901;', 1740091901),
('livewire-rate-limiter:a17961fa74e9275d529f489537f179c05d50c2f3', 'i:2;', 1740082142),
('livewire-rate-limiter:a17961fa74e9275d529f489537f179c05d50c2f3:timer', 'i:1740082142;', 1740082142);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `image`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Helmets', 'helmets', 'categories/01JMJR9ABTFN31HBSZJ0H28BWP.jpg', 1, '2025-02-17 17:51:44', '2025-02-20 16:55:06'),
(2, 'Tires', 'tires', 'categories/01JMJRA2DHR4YBFGFMVPV7BPER.jpg', 1, '2025-02-19 23:09:21', '2025-02-20 16:55:30'),
(3, 'Cycles', 'cycles', 'categories/01JMJR8Q4GDEZXSV7HCPHMMAHF.jpg', 1, '2025-02-19 23:09:50', '2025-02-20 16:54:46'),
(4, 'Bottles', 'bottles', 'categories/01JMJR4VV5V4H11TM73PWESN37.jpg', 1, '2025-02-20 16:52:40', '2025-02-20 16:52:40'),
(5, 'Sleeping Bags', 'sleeping-bags', 'categories/01JMJR5V4JKDDEJ5B0Z1J7Q831.jpg', 1, '2025-02-20 16:53:12', '2025-02-20 16:53:12'),
(6, 'Trekking Shoes', 'trekking-shoes', 'categories/01JMJR789WM5JZZ6N8K2J8R9M0.jpg', 1, '2025-02-20 16:53:58', '2025-02-20 16:53:58'),
(7, 'Trekking Socks', 'trekking-socks', 'categories/01JMEZ53RCAAJMYWREYE8EYSTJ.jpg', 1, '2025-02-19 05:38:10', '2025-02-19 05:38:18');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `destination` varchar(255) NOT NULL,
  `total_people` int(11) NOT NULL,
  `from_date` date NOT NULL,
  `to_date` date NOT NULL,
  `total_days` int(11) NOT NULL DEFAULT 0,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `is_featured` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `name`, `description`, `image`, `destination`, `total_people`, `from_date`, `to_date`, `total_days`, `is_active`, `is_featured`, `created_at`, `updated_at`) VALUES
(2, 'Sagarmatha Base Camp Visit', 'This is a fun trip to SBC.', '01JMJ4J7H6Q1YQ9EZG4JZPFWRP.jpg', 'SBC', 15, '2025-02-20', '2025-02-28', 0, 1, 1, '2025-02-20 11:10:26', '2025-02-20 11:10:26'),
(3, 'Patan Cycling Event', 'This is a fun event of cycling from Putalisadak to Patan. Join us for free.', '01JMJPP740FGWSV24QKQSV8MVV.jpg', 'Patan Durbar Square', 10, '2025-02-28', '2025-02-28', 0, 1, 1, '2025-02-20 16:27:11', '2025-02-20 16:27:11'),
(4, 'Annapurna Circuit Trek', 'A challenging trek that takes you through diverse terrains, high mountain passes, and charming Nepalese villages.', '01JMJQ2PHCT37H5PJ3N0EDVH15.jpg', 'Annapurna Region, Nepal', 34, '2025-03-08', '2025-02-12', 0, 1, 1, '2025-02-20 16:34:00', '2025-02-20 16:34:00'),
(5, 'Mustang Cycling Expedition', 'Ride through the stunning landscapes of the Mustang region, experiencing Tibetan culture and breathtaking views.\n', '01JMJQ45Q3KW08T97G6ANPAGRH.jpg', 'Mustang', 56, '2025-02-12', '2025-03-08', 0, 1, 1, '2025-02-20 16:34:48', '2025-02-20 16:34:48'),
(6, 'Dhapdam Hiking Event', 'We will be hiking to dhapdham.', '01JMEZ8YGZSAZ0W3MG01695336.jpg', 'Dhapdam', 15, '2025-02-27', '2025-03-08', 0, 1, 0, '2025-02-19 05:40:16', '2025-02-19 05:40:16');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_02_17_201311_create_brands_table', 2),
(5, '2025_02_17_201333_create_categories_table', 2),
(7, '2025_02_17_201428_create_products_table', 2),
(8, '2025_02_17_201433_create_orders_table', 2),
(9, '2025_02_17_201439_create_order_items_table', 2),
(10, '2025_02_17_201456_create_addresses_table', 2),
(11, '2025_02_17_210257_create_posts_table', 2),
(12, '2025_02_17_210303_create_comments_table', 2),
(13, '2025_02_17_210311_create_likes_table', 2),
(16, '2025_02_17_201341_create_events_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `grand_total` decimal(15,2) DEFAULT NULL,
  `payment_method` varchar(255) DEFAULT NULL,
  `payment_status` varchar(255) DEFAULT NULL,
  `status` enum('new','processing','shipped','delivered','cancelled') NOT NULL DEFAULT 'new',
  `currency` varchar(255) DEFAULT NULL,
  `shipping_amount` decimal(15,2) DEFAULT NULL,
  `shipping_method` varchar(255) DEFAULT NULL,
  `notes` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `grand_total`, `payment_method`, `payment_status`, `status`, `currency`, `shipping_amount`, `shipping_method`, `notes`, `created_at`, `updated_at`) VALUES
(1, 5, 120000.00, 'cod', 'pending', 'cancelled', 'npr', NULL, 'pathao', '123', '2025-02-18 06:54:19', '2025-02-19 03:17:12'),
(2, 14, 83500.00, 'cod', 'pending', 'new', 'npr', 0.00, 'none', 'Order placed by 1@123.com', '2025-02-20 13:24:13', '2025-02-20 13:24:13'),
(3, 14, 83500.00, 'online-pay', 'pending', 'processing', 'npr', 0.00, 'none', 'Order placed by 1@123.com', '2025-02-20 13:28:24', '2025-02-20 14:23:26'),
(4, 14, 72800.00, 'cod', 'pending', 'shipped', 'npr', 0.00, 'none', 'Order placed by 1@123.com', '2025-02-20 13:42:57', '2025-02-20 14:23:28'),
(5, 14, 120000.00, 'cod', 'paid', 'delivered', 'npr', NULL, 'ncm', '123', '2025-02-20 14:27:15', '2025-02-20 14:27:15'),
(6, 14, 382500.00, 'online', 'failed', 'delivered', 'npr', NULL, 'upaya', '123', '2025-02-20 14:27:35', '2025-02-20 14:27:35'),
(7, 14, 123800.00, 'cod', 'pending', 'new', 'npr', 0.00, 'none', 'Order placed by 1@123.com', '2025-02-20 14:28:05', '2025-02-20 14:28:05'),
(8, 14, 134300.00, 'online-pay', 'pending', 'new', 'npr', 0.00, 'none', 'Order placed by 1@123.com', '2025-02-20 15:28:11', '2025-02-20 15:28:11'),
(9, 16, 259220.00, 'cod', 'pending', 'shipped', 'npr', 0.00, 'upaya', 'Order placed by Peshal S.', '2025-02-19 05:35:13', '2025-02-19 05:41:13'),
(10, 16, 1500.00, 'online-pay', 'pending', 'new', 'npr', 0.00, 'none', 'Order placed by Peshal S.', '2025-02-19 05:42:54', '2025-02-19 05:42:54');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT 1,
  `unit_amount` decimal(15,2) DEFAULT NULL,
  `total_amount` decimal(15,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `product_id`, `quantity`, `unit_amount`, `total_amount`, `created_at`, `updated_at`) VALUES
(2, 1, 1, 12, 10000.00, 120000.00, '2025-02-18 07:19:39', '2025-02-18 07:19:39'),
(3, 3, 9, 3, 25500.00, 76500.00, '2025-02-20 13:28:24', '2025-02-20 13:28:24'),
(4, 3, 8, 2, 3500.00, 7000.00, '2025-02-20 13:28:24', '2025-02-20 13:28:24'),
(5, 4, 8, 2, 3500.00, 7000.00, '2025-02-20 13:42:57', '2025-02-20 13:42:57'),
(6, 4, 7, 1, 65800.00, 65800.00, '2025-02-20 13:42:57', '2025-02-20 13:42:57'),
(7, 5, 1, 12, 10000.00, 120000.00, '2025-02-20 14:27:15', '2025-02-20 14:27:15'),
(8, 6, 9, 15, 25500.00, 382500.00, '2025-02-20 14:27:35', '2025-02-20 14:27:35'),
(9, 7, 9, 2, 25500.00, 51000.00, '2025-02-20 14:28:05', '2025-02-20 14:28:05'),
(10, 7, 8, 2, 3500.00, 7000.00, '2025-02-20 14:28:05', '2025-02-20 14:28:05'),
(11, 7, 7, 1, 65800.00, 65800.00, '2025-02-20 14:28:05', '2025-02-20 14:28:05'),
(12, 8, 9, 2, 25500.00, 51000.00, '2025-02-20 15:28:11', '2025-02-20 15:28:11'),
(13, 8, 8, 5, 3500.00, 17500.00, '2025-02-20 15:28:11', '2025-02-20 15:28:11'),
(14, 8, 7, 1, 65800.00, 65800.00, '2025-02-20 15:28:11', '2025-02-20 15:28:11'),
(15, 9, 10, 2, 35000.00, 70000.00, '2025-02-19 05:35:13', '2025-02-19 05:35:13'),
(16, 9, 9, 2, 25500.00, 51000.00, '2025-02-19 05:35:13', '2025-02-19 05:35:13'),
(17, 9, 5, 1, 98540.00, 98540.00, '2025-02-19 05:35:13', '2025-02-19 05:35:13'),
(18, 9, 6, 2, 15840.00, 31680.00, '2025-02-19 05:35:13', '2025-02-19 05:35:13'),
(19, 9, 2, 1, 8000.00, 8000.00, '2025-02-19 05:35:13', '2025-02-19 05:35:13'),
(20, 10, 11, 3, 500.00, 1500.00, '2025-02-19 05:42:54', '2025-02-19 05:42:54');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `caption` text DEFAULT NULL,
  `images` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`images`)),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `caption`, `images`, `created_at`, `updated_at`) VALUES
(1, 5, 'Yeah ! Let\'s go cycling', NULL, '2025-02-18 15:58:51', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `brand_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `images` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`images`)),
  `description` longtext DEFAULT NULL,
  `price` decimal(15,2) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `is_featured` tinyint(1) NOT NULL DEFAULT 0,
  `in_stock` int(11) NOT NULL DEFAULT 1,
  `on_sale` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `brand_id`, `name`, `slug`, `images`, `description`, `price`, `is_active`, `is_featured`, `in_stock`, `on_sale`, `created_at`, `updated_at`) VALUES
(1, 3, 1, 'Crazy Cycle', 'crazy-cycle', '[\"products\\/01JMJREZ4DW4BS4A61PWC6DFC4.jpg\",\"products\\/01JMJREZ4JY83SK2H2AYR4G409.png\",\"products\\/01JMJREZ4P5SVME3EDYSCBAZRM.png\"]', 'The Crazy Cycle is the ultimate fusion of performance, style, and durability, designed for both casual riders and cycling enthusiasts. Built with a lightweight yet robust aluminum alloy frame, it offers a smooth and responsive ride across various terrains. Featuring precision-engineered gears, high-traction tires, and an advanced suspension system, the Crazy Cycle ensures maximum stability and control, whether you\'re commuting through city streets or tackling rugged mountain trails. Its ergonomic design, comfortable saddle, and customizable riding modes make it an excellent choice for long-distance adventures. With a sleek, modern aesthetic and vibrant color options, the Crazy Cycle isn\'t just a ride—it’s a statement of speed, agility, and freedom.', 100000.00, 1, 1, 1, 1, '2025-02-18 04:37:13', '2025-02-20 16:58:17'),
(2, 1, 2, 'Helmet Premium', 'helmet-premium', '[\"products\\/01JMJRGHRY9YK86AB9XGP5M7JY.jpg\",\"products\\/01JMJRGHS3W8WEZYVMYP6TRC76.jpg\"]', 'Thikai khalko helmet', 8000.00, 1, 1, 1, 1, '2025-02-19 21:16:08', '2025-02-20 16:59:02'),
(3, 3, 3, 'Damin Cycle 785', 'dami', '[\"products\\/01JMJRJXY4K3BNHF0P3D9PWFR4.jpg\",\"products\\/01JMJRJXYAE89D8EA9V3A8RRXH.jpg\",\"products\\/01JMJRJXYE1P33AXTRQC5WGF5N.jpg\"]', 'The Damin Cycle 785 is a high-performance bicycle built for speed, durability, and comfort. With a lightweight alloy frame, precision gear system, and shock-absorbing suspension, it ensures a smooth ride on any terrain. Its ergonomic design and high-traction tires provide excellent control, making it perfect for both city commutes and adventurous trails.', 65000.00, 1, 1, 1, 0, '2025-02-19 23:11:15', '2025-02-20 17:00:20'),
(4, 1, 2, 'Weres Helment 200 Series', 'wer', '[\"products\\/01JMJRNBF39J8ZBNWSDY6HGQK7.jpg\",\"products\\/01JMJRNBF8HDEQ7NGMK0CCBM85.jpg\"]', 'The Weres Helmet 200 Series is a lightweight yet durable cycling helmet designed for optimal safety and comfort. Featuring impact-resistant materials, adjustable straps, and enhanced ventilation, it ensures a secure fit and cool ride. Perfect for both casual and professional cyclists, this helmet offers reliable protection without compromising style.', 18500.00, 1, 0, 1, 1, '2025-02-19 23:18:37', '2025-02-20 17:01:40'),
(5, 5, 6, 'Aston Premium Bags', 'asdfsd', '[\"products\\/01JMJRRB6XBNHKMX5XJFN1J9RH.jpg\",\"products\\/01JMJRRB71VEFSXDT933WV0RMM.jpg\"]', 'The Aston Premium Sleeping Bag is designed for ultimate comfort and warmth in any outdoor adventure. Made with high-quality, weather-resistant materials and ultra-soft insulation, it ensures a cozy and restful sleep even in cold conditions. Its lightweight, compact design makes it easy to carry, while the durable zipper and adjustable hood provide extra protection. Perfect for camping, hiking, and backpacking, the Aston Premium Sleeping Bag is your ideal companion for a comfortable night under the stars.', 98540.00, 1, 0, 0, 1, '2025-02-19 23:44:53', '2025-02-20 17:03:18'),
(6, 4, 5, 'Qwen Bottles', 'qweqwe', '[\"products\\/01JMJRTP62WV539967H04YD4SB.jpg\",\"products\\/01JMJRTP67MDWEK8HXT7EBQ58A.jpg\"]', 'The Qwen Bottles are stylish, durable, and designed for everyday hydration. Made from high-quality, BPA-free materials, they keep your drinks fresh and at the perfect temperature for hours. With a leak-proof lid and ergonomic design, they are easy to carry, making them ideal for workouts, travel, or daily use. Available in various sizes and colors, Qwen Bottles combine functionality with a sleek, modern look.', 15840.00, 1, 1, 1, 0, '2025-02-19 23:45:18', '2025-02-20 17:04:35'),
(7, 3, 3, 'Trek Marlin 7 ', 'trek-marlin-7', '[\"products\\/01JMJ763K6GRD55P8923PETWMV.png\"]', 'A versatile hardtail mountain bike, perfect for both trail adventures and daily commute.', 65800.00, 1, 1, 1, 0, '2025-02-20 11:56:14', '2025-02-20 11:56:14'),
(8, 1, 1, 'Giro Agilis MIPS Helmet', 'giro-agilis-mips-helmet', '[\"products\\/01JMJ78TSC07MBA9A6FJXCFA8V.jpg\"]', 'A lightweight and well-ventilated helmet with MIPS technology for extra safety', 3500.00, 1, 0, 1, 1, '2025-02-20 11:57:44', '2025-02-20 11:57:44'),
(9, 2, 2, 'Continental Grand Prix 5000', 'continental-grand-prix-5000', '[\"products\\/01JMJ7ASHH9KHWGNT3TB3RT909.jpg\"]', 'High-performance road tire with low rolling resistance, excellent grip, and superior puncture protection.', 25500.00, 1, 1, 1, 0, '2025-02-20 11:58:48', '2025-02-20 11:58:48'),
(10, 6, 4, 'Super Hiker 55', 'super-hiker-55', '[\"products\\/01JMJRX60W2D1DWZ5NY5N4C93B.jpg\",\"products\\/01JMJRX610S1CWQJM8JTY1HP4S.jpg\",\"products\\/01JMJRX614NCCV2X7C4SXBBQF2.jpg\"]', 'The Super Hiker 55 shoes are built for durability, comfort, and performance on rugged terrains. Featuring a sturdy yet lightweight design, they offer excellent grip, waterproof protection, and cushioned support for long hikes. With breathable materials and an ergonomic fit, these shoes ensure stability and comfort on any adventure.', 35000.00, 1, 1, 1, 0, '2025-02-20 17:05:56', '2025-02-20 17:05:56'),
(11, 7, 7, 'Nepali Cycling Socks', 'nepali-cycling-socks', '[\"products\\/01JMEZ6V7P9WVY1FC2B21SP6QP.jpg\",\"products\\/01JMEZ6V7X52DP0YCHMS0VGKHX.jpg\",\"products\\/01JMEZ6V82V9NTFJZ82341Z1J6.jpg\"]', 'This is a new item.', 500.00, 1, 1, 1, 0, '2025-02-19 05:39:07', '2025-02-19 05:39:07');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('4XNQrd3tIZ6RLkZja1enqSKLrSCzsvYaZ5lNcUQl', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/133.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiN1BtMXpnS2RHSVZYVTBGTmVqcDVGTGhicXVpVndUWU1xSHdHSzZ4ZSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9sb2dpbiI7fX0=', 1740092284),
('vBSC6sHZBic6uDZDvqC3IstdeY76HqPPLRnmEhEU', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36 OPR/116.0.0.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZ3I3QTBlQ3E3cE1BVjBUZExQU0hRV3JXem1MZmR5RUxxWjdWbG1VWCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9sb2dpbiI7fX0=', 1739964507);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 'admin@sarara.com', '1999-12-31 22:55:44', '$2y$12$Kq6Fgt/6S9RAD2SKRZl6rub0XloOOHi1tt1UCR64BtKsdngjL77AC', 'FNtv8cmnyIt784CVlg0uzpACdcr2VD0rEnJDFsKy6l9cCf85VoDWfIGoHjBk', '2025-02-17 15:56:34', '2025-02-17 17:11:04'),
(5, 'Karson Schneider', 'jace_leannon2@yahoo.com', '2025-08-16 00:29:00', '$2y$12$pO2brDz914oiO4DJ0iaFC.enLvD.3NgMhM.tBBxdWUU4EeWZkOd4.', NULL, '2025-02-17 17:09:28', '2025-02-17 17:09:28'),
(6, 'Peshal', 'peshal@gmail.com', NULL, '$2y$12$2RqfHNHEozkUAtFWBc0kwekJc1ZhVkGpOh2pNbAerJ1/JQ/u2XBs6', NULL, '2025-02-18 11:01:34', '2025-02-18 11:01:34'),
(7, '123', '123@123.com', NULL, '$2y$12$TdncGLeVc/nImePrpN9u.uPkrvi.sfciMC2XSK.YWJS2LbIUeXtLW', NULL, '2025-02-18 11:15:27', '2025-02-18 11:15:27'),
(8, '423@123.com', '423@123.com', NULL, '$2y$12$7sMIO.iygIQ2Q9SkKTuAWOY0oDUx1bh1XIGIVBurenBjczNme9K4C', NULL, '2025-02-18 11:18:26', '2025-02-18 11:18:26'),
(9, 'Test User', 'test@example.com', '2025-02-18 12:09:22', '$2y$12$ra3OSMEWmHLsN8T18kraw./PXsw0.Yi/lQOXsMFVDjEzBwt8ygS3q', 'EBNNBFYAzE', '2025-02-18 12:09:22', '2025-02-18 12:09:22'),
(10, 'asd', 'asd@asd.com', NULL, '$2y$12$eSw5KabAeEbw70l.SqJCKuuAHd3ZF1D3fzeEMOUmOzXeSnKHBpXvG', NULL, '2025-02-20 07:59:13', '2025-02-20 07:59:13'),
(11, 'Chauncey Nader', 'alexanne43@hotmail.com', NULL, '$2y$12$7JCVpXl04o/gEHQV5DOFp.ENstp7sktlzLNer0.ntBoOnAMCegAfC', NULL, '2025-02-20 08:09:40', '2025-02-20 08:09:40'),
(12, 'Sonya Bahringer', 'raoul.king@gmail.com', NULL, '$2y$12$nOPMoNpezsCpeVs2pw/pVevhld4rh4qnYlE.V9nSrlTzBivQcrHbG', NULL, '2025-02-20 08:21:29', '2025-02-20 08:21:29'),
(13, 'Jeremie Hermann', 'ara.weissnat3@yahoo.com', NULL, '$2y$12$pFzak7VR91EKtxfX/zV/HeftZlBA7uGjTBanpldcoov07m6CLjRKS', NULL, '2025-02-20 08:45:48', '2025-02-20 08:45:48'),
(14, '1@123.com', '1@123.com', NULL, '$2y$12$kFK3t69GU46iwrKOgyLktupDQ3k4kGD5lhPakUYE43mNezebk7klK', 'WYm5YhIlDiWaHOecf1rzMDoO2fopidgOYfqgb6kYEC9PLimKOn2Rnz2GIIS9', '2025-02-20 08:49:31', '2025-02-20 08:49:31'),
(15, 'Brandon', 'q12@q23.com', NULL, '$2y$12$TYjnz5TCbyH3V4lhBTX44O9WTp9vK/Z3hsZGOztQoOMjj2j4O2m8S', NULL, '2025-02-20 16:17:29', '2025-02-20 16:17:29'),
(16, 'Peshal S.', 'peshal@sarara.com', NULL, '$2y$12$uzOJGjfrQF1u.7d.juMuBOZQTqLEgdW2116.VQL.WPf3/oEnxk3Di', NULL, '2025-02-19 05:33:11', '2025-02-19 05:33:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addresses`
--
ALTER TABLE `addresses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `addresses_order_id_foreign` (`order_id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `brands_slug_unique` (`slug`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_user_id_foreign` (`user_id`),
  ADD KEY `comments_post_id_foreign` (`post_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `likes_user_id_foreign` (`user_id`),
  ADD KEY `likes_post_id_foreign` (`post_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_items_order_id_foreign` (`order_id`),
  ADD KEY `order_items_product_id_foreign` (`product_id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_user_id_foreign` (`user_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_slug_unique` (`slug`),
  ADD KEY `products_category_id_foreign` (`category_id`),
  ADD KEY `products_brand_id_foreign` (`brand_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT for table `addresses`
--
ALTER TABLE `addresses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `addresses`
--
ALTER TABLE `addresses`
  ADD CONSTRAINT `addresses_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `likes`
--
ALTER TABLE `likes`
  ADD CONSTRAINT `likes_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `likes_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `order_items_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_brand_id_foreign` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
