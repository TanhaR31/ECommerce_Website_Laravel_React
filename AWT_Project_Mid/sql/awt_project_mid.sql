-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2022 at 11:08 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `awt_project_mid`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brand_name_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_name_bn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_slug_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_slug_bn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_image_path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_name_bn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_slug_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_slug_bn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `coupon_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coupon_discount` int(11) NOT NULL,
  `coupon_validity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customer_reviews`
--

CREATE TABLE `customer_reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `c_id` bigint(20) UNSIGNED NOT NULL,
  `s_id` bigint(20) UNSIGNED DEFAULT NULL,
  `p_id` bigint(20) UNSIGNED DEFAULT NULL,
  `rating` int(11) NOT NULL,
  `review` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customer_vouchers`
--

CREATE TABLE `customer_vouchers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `c_id` bigint(20) UNSIGNED NOT NULL,
  `sv_id` bigint(20) UNSIGNED NOT NULL,
  `sv_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `starts` date NOT NULL,
  `expires` date NOT NULL,
  `sv_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customer_vouchers`
--

INSERT INTO `customer_vouchers` (`id`, `c_id`, `sv_id`, `sv_code`, `starts`, `expires`, `sv_status`, `created_at`, `updated_at`) VALUES
(1, 3, 1, 'ERR101', '2022-03-14', '2022-03-28', 'not used', '2022-03-11 13:00:00', '2022-03-11 13:00:00'),
(2, 4, 2, 'ERR102', '2022-03-13', '2022-03-20', 'not used', '2022-03-11 13:00:00', '2022-03-11 13:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
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
(651, '2014_10_12_000000_create_users_table', 1),
(652, '2014_10_12_100000_create_password_resets_table', 1),
(653, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(654, '2019_08_19_000000_create_failed_jobs_table', 1),
(655, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(656, '2022_01_07_170859_create_sessions_table', 1),
(657, '2022_01_07_172347_create_admins_table', 1),
(658, '2022_01_21_135252_create_brands_table', 1),
(659, '2022_01_23_091159_create_categories_table', 1),
(660, '2022_01_23_102613_create_sub_categories_table', 1),
(661, '2022_01_23_142743_create_sub_sub_categories_table', 1),
(662, '2022_01_23_161406_create_multi_imgs_table', 1),
(663, '2022_01_23_161932_create_products_table', 1),
(664, '2022_02_05_184807_create_sliders_table', 1),
(665, '2022_02_23_111309_create_wishlists_table', 1),
(666, '2022_03_05_201332_create_coupons_table', 1),
(667, '2022_03_05_211320_create_shipping_divisions_table', 1),
(668, '2022_03_05_213900_create_shipping_districts_table', 1),
(669, '2022_03_06_173922_create_shipping_states_table', 1),
(670, '2022_03_07_212532_create_shippings_table', 1),
(671, '2022_03_11_103311_create_sellers_table', 1),
(672, '2022_03_11_111114_create_seller_products_table', 1),
(673, '2022_03_11_111300_create_seller_types_table', 1),
(674, '2022_03_11_111611_create_seller_profit_checks_table', 1),
(675, '2022_03_11_112851_create_seller_credits_table', 1),
(676, '2022_03_11_115914_create_seller_vouchers_table', 1),
(677, '2022_03_11_125112_create_customer_vouchers_table', 1),
(678, '2022_03_11_125431_create_customer_reviews_table', 1),
(679, '2022_03_11_130217_create_seller_admin_msgs_table', 1),
(680, '2022_03_11_130419_create_seller_orders_table', 1),
(681, '2022_03_11_130838_create_seller_order_details_table', 1),
(682, '2022_03_11_131457_create_seller_customers_table', 1),
(683, '2022_03_12_155837_create_seller_product_categories_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `multi_imgs`
--

CREATE TABLE `multi_imgs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `photo_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brand_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `subcategory_id` int(11) NOT NULL,
  `subsubcategory_id` int(11) NOT NULL,
  `product_name_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_name_bn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_slug_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_slug_bn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_qty` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_tags_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_tags_bn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_size_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_size_bn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_color_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_color_bn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `selling_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discount_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_descp_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_descp_bn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `long_descp_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `long_descp_bn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hot_deals` int(11) DEFAULT NULL,
  `featured` int(11) DEFAULT NULL,
  `special_offer` int(11) DEFAULT NULL,
  `special_deal` int(11) DEFAULT NULL,
  `status` tinyint(1) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sellers`
--

CREATE TABLE `sellers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `s_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `s_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_verified_at` timestamp NULL DEFAULT NULL,
  `rememberPhoneToken` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `rememberEmailToken` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `s_password_confirm` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `s_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s_approve` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sellers`
--

INSERT INTO `sellers` (`id`, `s_name`, `s_phone`, `phone_verified_at`, `rememberPhoneToken`, `s_email`, `email_verified_at`, `rememberEmailToken`, `s_password`, `s_password_confirm`, `s_address`, `image`, `remember_token`, `s_approve`, `created_at`, `updated_at`) VALUES
(1, 'Mr. X', '01222222222', NULL, NULL, 'mrx@gmail.com', NULL, NULL, '133631788e68ce51eb65eac86bc93753', '133631788e68ce51eb65eac86bc93753', 'Bashundhara, Dhaka', '1647032919_pngtree-businessman-user-avatar-free-vector-png-image_1538405.jpg', NULL, 'yes', '2022-03-11 13:00:00', '2022-03-11 13:00:00'),
(2, 'Ms. Y', '01333333333', NULL, NULL, 'msy@gmail.com', NULL, NULL, '133631788e68ce51eb65eac86bc93753', '133631788e68ce51eb65eac86bc93753', 'Mirpur, Dhaka', '1647032929_Icon-Female-Avatar-Female-Icon-Red-Icon-Avatar-6007530.png', NULL, 'yes', '2022-03-11 14:00:00', '2022-03-11 14:00:00'),
(3, 'Ms. Z', '01444444444', NULL, NULL, 'msz@gmail.com', NULL, NULL, '133631788e68ce51eb65eac86bc93753', '133631788e68ce51eb65eac86bc93753', 'Uttara, Dhaka', '1647031611_seller.png', NULL, 'no', '2022-03-11 15:00:00', '2022-03-11 15:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `seller_admin_msgs`
--

CREATE TABLE `seller_admin_msgs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `s_id` bigint(20) UNSIGNED NOT NULL,
  `ad_id` bigint(20) UNSIGNED NOT NULL,
  `from` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `to` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `msg` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seller_admin_msgs`
--

INSERT INTO `seller_admin_msgs` (`id`, `s_id`, `ad_id`, `from`, `to`, `msg`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'seller', 'admin', 'Hello Admin', '2022-03-11 13:00:00', '2022-03-11 13:00:00'),
(2, 1, 1, 'admin', 'seller', 'Hello Seller :)', '2022-03-11 13:10:00', '2022-03-11 13:10:00'),
(3, 1, 1, 'seller', 'admin', 'Bye', '2022-03-11 13:20:00', '2022-03-11 13:20:00');

-- --------------------------------------------------------

--
-- Table structure for table `seller_credits`
--

CREATE TABLE `seller_credits` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `s_id` bigint(20) UNSIGNED NOT NULL,
  `month` date NOT NULL,
  `spent` decimal(9,3) NOT NULL,
  `received` decimal(9,3) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `seller_customers`
--

CREATE TABLE `seller_customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `c_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seller_customers`
--

INSERT INTO `seller_customers` (`id`, `c_name`, `c_phone`, `c_email`, `c_address`, `c_image`, `created_at`, `updated_at`) VALUES
(1, 'Mr. A', '01777777777', 'mra@gmail.com', 'Banani, Dhaka', '', '2022-03-11 13:00:00', '2022-03-11 13:00:00'),
(2, 'Mr. B', '01888888888', 'mrb@gmail.com', 'Kuril, Dhaka', '', '2022-03-11 13:00:00', '2022-03-11 13:00:00'),
(3, 'Mr. C', '01999999999', 'mrc@gmail.com', 'Kuratoli, Dhaka', '', '2022-03-11 13:00:00', '2022-03-11 13:00:00'),
(4, 'Mr. D', '01777888999', 'mrd@gmail.com', 'Mirpur, Dhaka', '', '2022-03-11 13:00:00', '2022-03-11 13:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `seller_orders`
--

CREATE TABLE `seller_orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `c_id` bigint(20) UNSIGNED NOT NULL,
  `s_id` bigint(20) UNSIGNED NOT NULL,
  `order_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_price` decimal(9,3) NOT NULL,
  `payment_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_method` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_due` decimal(9,3) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seller_orders`
--

INSERT INTO `seller_orders` (`id`, `c_id`, `s_id`, `order_status`, `total_price`, `payment_status`, `payment_method`, `payment_due`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Delivered', '800.000', 'Paid', 'COD', '0.000', '2022-03-11 13:00:00', '2022-03-11 13:00:00'),
(2, 2, 1, 'Ordered', '20020.000', 'Not Paid', 'COD', '20020.000', '2022-03-11 13:00:00', '2022-03-11 13:00:00'),
(3, 3, 2, 'Error', '1640.000', 'Paid', 'COD', '0.000', '2022-03-11 13:00:00', '2022-03-11 13:00:00'),
(4, 2, 1, 'Ordered', '20410.000', 'Advanced', 'Mobile Payment', '15000.000', '2022-03-11 13:00:00', '2022-03-11 13:00:00'),
(5, 4, 1, 'Returned', '2400.000', 'Not Paid', 'COD', '2400.000', '2022-03-11 13:00:00', '2022-03-11 13:00:00'),
(6, 3, 1, 'Error', '800.000', 'Paid', 'COD', '0.000', '2022-03-11 13:00:00', '2022-03-11 13:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `seller_order_details`
--

CREATE TABLE `seller_order_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `o_id` bigint(20) UNSIGNED NOT NULL,
  `p_id` bigint(20) UNSIGNED NOT NULL,
  `qty` int(11) NOT NULL,
  `unit_price` decimal(9,3) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seller_order_details`
--

INSERT INTO `seller_order_details` (`id`, `o_id`, `p_id`, `qty`, `unit_price`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, '800.000', '2022-03-11 13:00:00', '2022-03-11 13:00:00'),
(2, 2, 3, 1, '20020.000', '2022-03-11 13:00:00', '2022-03-11 13:00:00'),
(3, 3, 4, 1, '1510.000', '2022-03-11 13:00:00', '2022-03-11 13:00:00'),
(4, 3, 6, 1, '130.000', '2022-03-11 13:00:00', '2022-03-11 13:00:00'),
(5, 4, 5, 1, '20410.000', '2022-03-11 13:00:00', '2022-03-11 13:00:00'),
(6, 5, 1, 1, '800.000', '2022-03-11 13:00:00', '2022-03-11 13:00:00'),
(7, 5, 1, 1, '800.000', '2022-03-11 13:00:00', '2022-03-11 13:00:00'),
(8, 5, 1, 1, '800.000', '2022-03-11 13:00:00', '2022-03-11 13:00:00'),
(9, 6, 1, 1, '800.000', '2022-03-11 13:00:00', '2022-03-11 13:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `seller_products`
--

CREATE TABLE `seller_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `s_id` bigint(20) UNSIGNED NOT NULL,
  `p_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ct_id` bigint(20) UNSIGNED NOT NULL,
  `p_category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `p_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `p_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `p_qty` int(11) NOT NULL,
  `p_sold` int(11) NOT NULL,
  `fix_cost` decimal(9,3) NOT NULL,
  `var_cost` decimal(9,3) NOT NULL,
  `st_id` bigint(20) UNSIGNED NOT NULL,
  `adm_cost` decimal(9,3) NOT NULL,
  `extra_price` decimal(9,3) NOT NULL,
  `discount` decimal(9,3) NOT NULL,
  `total_price` decimal(9,3) NOT NULL,
  `p_approve` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seller_products`
--

INSERT INTO `seller_products` (`id`, `s_id`, `p_name`, `ct_id`, `p_category`, `p_description`, `p_image`, `p_qty`, `p_sold`, `fix_cost`, `var_cost`, `st_id`, `adm_cost`, `extra_price`, `discount`, `total_price`, `p_approve`, `created_at`, `updated_at`) VALUES
(1, 1, 'Men Shirt', 1, 'Fashion', 'Blue classic long sleeve', '1647115705_cartoon-long-sleeve-blue-classic-men-shirt-vector-29565239.jpg', 100, 42, '650.000', '95.000', 1, '20.000', '55.000', '20.000', '800.000', 1, '2022-03-11 13:00:00', '2022-03-11 13:00:00'),
(2, 1, 'Men Formal Coat', 1, 'Fashion', 'Men Formal Black Coat', '1647111147_istockphoto-1362812225-612x612.jpg', 75, 23, '1000.000', '300.000', 1, '20.000', '100.000', '0.000', '1420.000', 0, '2022-03-11 13:00:00', '2022-03-11 13:00:00'),
(3, 1, 'LED 32 TV', 2, 'Electronics', 'Screen size: 81.3 cm Aspect ratio: 16:9, 4:3 Resolution: 1366 x 768 Viewing angle: H 1780 / V 1780', '1647111789_16323071751.jpg', 50, 11, '20000.000', '500.000', 1, '20.000', '1500.000', '2000.000', '20020.000', 1, '2022-03-11 13:00:00', '2022-03-11 13:00:00'),
(4, 2, 'Women Dress', 1, 'Fashion', 'Women Black Dress In Different Design', '1647102770_download.png', 100, 69, '1000.000', '200.000', 2, '10.000', '300.000', '0.000', '1510.000', 1, '2022-03-11 13:00:00', '2022-03-11 13:00:00'),
(5, 2, 'Air Purifier', 4, 'Appliance', '- Air purifier + Ionizer + UV lamp (3 in 1) - 7 Stage purifications - PM 2.5 Indicator display', '1647122004_Screenshot 2022-03-13 035212.png', 50, 8, '20000.000', '500.000', 2, '10.000', '100.000', '200.000', '20410.000', 1, '2022-03-11 13:00:00', '2022-03-11 13:00:00'),
(6, 2, 'Cat Toy', 6, 'Toys', 'Toys Type: Feather Toys Material: Plastic Mouse Color: Random Teaser Toy:  cat interactive toy', '1647122169_rrrrrrrr.png', 70, 34, '100.000', '10.000', 2, '10.000', '10.000', '0.000', '130.000', 1, '2022-03-11 13:00:00', '2022-03-11 13:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `seller_product_categories`
--

CREATE TABLE `seller_product_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `p_category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seller_product_categories`
--

INSERT INTO `seller_product_categories` (`id`, `p_category`, `created_at`, `updated_at`) VALUES
(1, 'Fashion', '2022-03-11 13:00:00', '2022-03-11 13:00:00'),
(2, 'Electronics', '2022-03-11 13:00:00', '2022-03-11 13:00:00'),
(3, 'Home', '2022-03-11 13:00:00', '2022-03-11 13:00:00'),
(4, 'Appliance', '2022-03-11 13:00:00', '2022-03-11 13:00:00'),
(5, 'Makeup', '2022-03-11 13:00:00', '2022-03-11 13:00:00'),
(6, 'Toys', '2022-03-11 13:00:00', '2022-03-11 13:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `seller_profit_checks`
--

CREATE TABLE `seller_profit_checks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `s_id` bigint(20) UNSIGNED NOT NULL,
  `p_id` bigint(20) UNSIGNED NOT NULL,
  `p_qty` int(11) NOT NULL,
  `p_sold` int(11) NOT NULL,
  `revenue` decimal(9,3) NOT NULL,
  `cogs` decimal(9,3) NOT NULL,
  `gross_profit` decimal(9,3) NOT NULL,
  `net_income` decimal(9,3) NOT NULL,
  `gross_margin` decimal(9,3) NOT NULL,
  `net_margin` decimal(9,3) NOT NULL,
  `selling_rate` decimal(9,3) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `seller_types`
--

CREATE TABLE `seller_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `s_id` bigint(20) UNSIGNED NOT NULL,
  `st_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` decimal(9,3) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seller_types`
--

INSERT INTO `seller_types` (`id`, `s_id`, `st_type`, `amount`, `created_at`, `updated_at`) VALUES
(1, 1, 'Professional', '20.000', '2022-03-11 13:00:00', '2022-03-11 13:00:00'),
(2, 2, 'Normal', '10.000', '2022-03-11 14:00:00', '2022-03-11 14:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `seller_vouchers`
--

CREATE TABLE `seller_vouchers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `s_id` bigint(20) UNSIGNED NOT NULL,
  `sv_req_amount` decimal(9,3) NOT NULL,
  `sv_price` decimal(9,3) NOT NULL,
  `sv_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seller_vouchers`
--

INSERT INTO `seller_vouchers` (`id`, `s_id`, `sv_req_amount`, `sv_price`, `sv_code`, `created_at`, `updated_at`) VALUES
(1, 1, '0.000', '100.000', 'ERR101', '2022-03-11 13:00:00', '2022-03-11 13:00:00'),
(2, 1, '0.000', '50.000', 'ERR102', '2022-03-11 13:00:00', '2022-03-11 13:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `shippings`
--

CREATE TABLE `shippings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `division_id` bigint(20) UNSIGNED NOT NULL,
  `district_id` bigint(20) UNSIGNED NOT NULL,
  `state_id` bigint(20) UNSIGNED NOT NULL,
  `customer_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_code` int(11) NOT NULL,
  `notes` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `shipping_districts`
--

CREATE TABLE `shipping_districts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `division_id` bigint(20) UNSIGNED NOT NULL,
  `district_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `shipping_divisions`
--

CREATE TABLE `shipping_divisions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `division_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `shipping_states`
--

CREATE TABLE `shipping_states` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `division_id` bigint(20) UNSIGNED NOT NULL,
  `district_id` bigint(20) UNSIGNED NOT NULL,
  `state_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slider_img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `subcategory_name_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subcategory_name_bn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subcategory_slug_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subcategory_slug_bn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sub_sub_categories`
--

CREATE TABLE `sub_sub_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `subcategory_id` int(11) NOT NULL,
  `subsubcategory_name_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subsubcategory_name_bn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subsubcategory_slug_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subsubcategory_slug_bn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wishlists`
--

CREATE TABLE `wishlists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_reviews`
--
ALTER TABLE `customer_reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_vouchers`
--
ALTER TABLE `customer_vouchers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `multi_imgs`
--
ALTER TABLE `multi_imgs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sellers`
--
ALTER TABLE `sellers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sellers_s_phone_unique` (`s_phone`),
  ADD UNIQUE KEY `sellers_s_email_unique` (`s_email`);

--
-- Indexes for table `seller_admin_msgs`
--
ALTER TABLE `seller_admin_msgs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seller_credits`
--
ALTER TABLE `seller_credits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seller_customers`
--
ALTER TABLE `seller_customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `seller_customers_c_phone_unique` (`c_phone`),
  ADD UNIQUE KEY `seller_customers_c_email_unique` (`c_email`);

--
-- Indexes for table `seller_orders`
--
ALTER TABLE `seller_orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seller_order_details`
--
ALTER TABLE `seller_order_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seller_products`
--
ALTER TABLE `seller_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seller_product_categories`
--
ALTER TABLE `seller_product_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seller_profit_checks`
--
ALTER TABLE `seller_profit_checks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seller_types`
--
ALTER TABLE `seller_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seller_vouchers`
--
ALTER TABLE `seller_vouchers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `shippings`
--
ALTER TABLE `shippings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shipping_districts`
--
ALTER TABLE `shipping_districts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shipping_divisions`
--
ALTER TABLE `shipping_divisions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shipping_states`
--
ALTER TABLE `shipping_states`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_sub_categories`
--
ALTER TABLE `sub_sub_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customer_reviews`
--
ALTER TABLE `customer_reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customer_vouchers`
--
ALTER TABLE `customer_vouchers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=684;

--
-- AUTO_INCREMENT for table `multi_imgs`
--
ALTER TABLE `multi_imgs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sellers`
--
ALTER TABLE `sellers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `seller_admin_msgs`
--
ALTER TABLE `seller_admin_msgs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `seller_credits`
--
ALTER TABLE `seller_credits`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `seller_customers`
--
ALTER TABLE `seller_customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `seller_orders`
--
ALTER TABLE `seller_orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `seller_order_details`
--
ALTER TABLE `seller_order_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `seller_products`
--
ALTER TABLE `seller_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `seller_product_categories`
--
ALTER TABLE `seller_product_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `seller_profit_checks`
--
ALTER TABLE `seller_profit_checks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `seller_types`
--
ALTER TABLE `seller_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `seller_vouchers`
--
ALTER TABLE `seller_vouchers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `shippings`
--
ALTER TABLE `shippings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shipping_districts`
--
ALTER TABLE `shipping_districts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shipping_divisions`
--
ALTER TABLE `shipping_divisions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shipping_states`
--
ALTER TABLE `shipping_states`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sub_sub_categories`
--
ALTER TABLE `sub_sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wishlists`
--
ALTER TABLE `wishlists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
