-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2023 at 10:58 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `masinde_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `id` int(3) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mnj_id` int(11) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`id`, `name`, `mnj_id`, `category`, `created_at`) VALUES
(1, 'UYOLE SHOP', NULL, 'shop', '2023-09-26 09:33:17'),
(2, 'MBALIZI SHOP', NULL, 'shop', '2023-09-26 09:33:49'),
(3, 'MBALIZI STORE', 14, 'store', '2023-10-12 18:42:49'),
(4, 'UYOLE STORE', NULL, 'store', '2023-10-14 07:26:52');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cart_item`
--

CREATE TABLE `cart_item` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `cart_id` int(11) DEFAULT NULL,
  `sold_by` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `debt`
--

CREATE TABLE `debt` (
  `id` int(11) NOT NULL,
  `order_id` varchar(100) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_phone` int(11) DEFAULT NULL,
  `customer_address` varchar(255) NOT NULL,
  `amount_paid` int(11) NOT NULL,
  `amount_due` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `debt`
--

INSERT INTO `debt` (`id`, `order_id`, `customer_name`, `customer_phone`, `customer_address`, `amount_paid`, `amount_due`, `created_at`, `updated_at`) VALUES
(10, 'INV-652850c18a824', 'John Doe', 989877666, 'mahami', 1000, 2748, '2023-10-12 20:02:09', NULL),
(11, 'INV-652aab040837a', 'Maria Kimaro', 97654456, 'soweto', 100000, 237036, '2023-10-14 14:51:48', NULL),
(12, 'INV-652e6fc81d944', 'Kilian Jon', 9897765, 'makambaku', 2000, 6800, '2023-10-17 11:28:08', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `id` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `amount` int(11) NOT NULL,
  `branch_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_number` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL,
  `branch_id` int(11) DEFAULT NULL,
  `total_price` int(11) NOT NULL,
  `amount_paid` int(11) DEFAULT NULL,
  `sell_by` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_number`, `user_id`, `branch_id`, `total_price`, `amount_paid`, `sell_by`, `created_at`) VALUES
('INV-652847e4e642f', 14, 1, 8244, 8244, 'cash', '2023-10-12 19:24:20'),
('INV-652848080479b', 14, 1, 511, 511, 'cash', '2023-10-12 19:24:56'),
('INV-652850c18a824', 14, 1, 2748, 1000, 'debt', '2023-10-12 20:02:09'),
('INV-652aab040837a', 14, 1, 237036, 100000, 'debt', '2023-10-14 14:51:48'),
('INV-652e68fbdf5b5', 18, 2, 357800, 357800, 'cash', '2023-10-17 10:59:07'),
('INV-652e6af9bb0be', 18, 2, 88930, 88930, 'cash', '2023-10-17 11:07:37'),
('INV-652e6fc81d944', 18, 2, 6800, 2000, 'debt', '2023-10-17 11:28:08'),
('INV-652ed76297f3f', 18, 2, 26888, 26888, 'cash', '2023-10-17 18:50:10'),
('INV-652ed852c689c', 18, 2, 7660, 7660, 'cash', '2023-10-17 18:54:10'),
('INV-652ed8b354ffd', 18, 2, 165800, 165800, 'cash', '2023-10-17 18:55:47'),
('INV-652ee3d9cd7c4', 18, 2, 6800, 6800, 'cash', '2023-10-17 19:43:21'),
('INV-652ee3fadad1e', 18, 2, 109000, 109000, 'cash', '2023-10-17 19:43:54'),
('INV-652f7641d4cc9', 14, 1, 89610, 89610, 'cash', '2023-10-18 06:08:01'),
('INV-652f765a18476', 14, 1, 956, 956, 'cash', '2023-10-18 06:08:26'),
('INV-652f766bc7e66', 14, 1, 1190, 1190, 'cash', '2023-10-18 06:08:43'),
('INV-652f767cb2c38', 14, 1, 66920, 66920, 'cash', '2023-10-18 06:09:00'),
('INV-652f7797b44ad', 22, 1, 10048, 10048, 'cash', '2023-10-18 06:13:43'),
('INV-652f945244d2e', 22, 1, 22, 22, 'cash', '2023-10-18 08:16:18'),
('INV-652f946185c5b', 22, 1, 628, 628, 'cash', '2023-10-18 08:16:33'),
('INV-652f94725be23', 22, 1, 22, 22, 'cash', '2023-10-18 08:16:50'),
('INV-652f94b3bd26a', 22, 1, 628, 628, 'cash', '2023-10-18 08:17:55'),
('INV-652f94c0afdb2', 22, 1, 511, 511, 'cash', '2023-10-18 08:18:08'),
('INV-652f94cfe9397', 22, 1, 383, 383, 'cash', '2023-10-18 08:18:23'),
('INV-652f94d9be5dc', 22, 1, 979, 979, 'cash', '2023-10-18 08:18:33'),
('INV-652f94e7d09e8', 22, 1, 22, 22, 'cash', '2023-10-18 08:18:47'),
('INV-652f94f370847', 22, 1, 628, 628, 'cash', '2023-10-18 08:18:59'),
('INV-652f94ff380a7', 22, 1, 956, 956, 'cash', '2023-10-18 08:19:11'),
('INV-653181e76f21a', 14, 1, 95600, 95600, 'cash', '2023-10-19 19:22:15'),
('INV-653187b341f45', 14, 1, 22, 22, 'cash', '2023-10-19 19:46:59'),
('INV-653187bf59122', 14, 1, 6870, 6870, 'cash', '2023-10-19 19:47:11'),
('INV-653187d13f5cb', 14, 1, 9560, 9560, 'cash', '2023-10-19 19:47:29'),
('INV-653187e114f68', 14, 1, 5496, 5496, 'cash', '2023-10-19 19:47:45'),
('INV-653187f4cb0be', 14, 1, 38300, 38300, 'cash', '2023-10-19 19:48:04'),
('INV-65318803a8f5d', 14, 1, 383, 383, 'cash', '2023-10-19 19:48:19'),
('INV-6531884c6fea2', 14, 1, 687, 687, 'cash', '2023-10-19 19:49:32'),
('INV-65318880940e6', 14, 1, 956, 956, 'cash', '2023-10-19 19:50:24'),
('INV-6531889748fce', 14, 1, 628, 628, 'cash', '2023-10-19 19:50:47'),
('INV-653198fd67af4', 14, 1, 628, 628, 'cash', '2023-10-19 21:00:45'),
('INV-65319905adcac', 14, 1, 119, 119, 'cash', '2023-10-19 21:00:53'),
('INV-6531991105f09', 14, 1, 628, 628, 'cash', '2023-10-19 21:01:05'),
('INV-65319926cf5e6', 14, 1, 956, 956, 'cash', '2023-10-19 21:01:26'),
('INV-65319de5455e0', 23, 4, 119, 119, 'cash', '2023-10-19 21:21:41'),
('INV-65319df4c3771', 23, 4, 119, 119, 'cash', '2023-10-19 21:21:56'),
('INV-65319e0331d2b', 23, 4, 22, 22, 'cash', '2023-10-19 21:22:11'),
('INV-65319e09c48d1', 23, 4, 154, 154, 'cash', '2023-10-19 21:22:17'),
('INV-65319e18297ae', 23, 4, 119, 119, 'cash', '2023-10-19 21:22:32'),
('INV-65319e77693dc', 23, 4, 979, 979, 'cash', '2023-10-19 21:24:07'),
('INV-6531c5860df1a', 23, 4, 6280, 6280, 'cash', '2023-10-20 00:10:46'),
('INV-6531c5953f143', 23, 4, 119, 119, 'cash', '2023-10-20 00:11:01'),
('INV-6531c5a5801c8', 23, 4, 1190, 1190, 'cash', '2023-10-20 00:11:17');

-- --------------------------------------------------------

--
-- Table structure for table `order_item`
--

CREATE TABLE `order_item` (
  `id` int(11) NOT NULL,
  `order_id` varchar(100) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `unit_price` int(11) NOT NULL,
  `sold_by` varchar(30) NOT NULL,
  `profit` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_item`
--

INSERT INTO `order_item` (`id`, `order_id`, `product_id`, `quantity`, `unit_price`, `sold_by`, `profit`, `created_at`) VALUES
(91, 'INV-652847e4e642f', 36, 12, 687, 'retail', 6840, '2023-10-18 10:17:06'),
(92, 'INV-652848080479b', 36, 200, 511, 'whole', 78800, '2023-10-18 10:17:06'),
(93, 'INV-652850c18a824', 36, 4, 687, 'retail', 2280, '2023-10-18 10:17:06'),
(94, 'INV-652aab040837a', 38, 12, 628, 'retail', -1512, '2023-10-18 10:17:06'),
(95, 'INV-652aab040837a', 40, 100, 383, 'retail', 33000, '2023-10-18 10:17:06'),
(96, 'INV-652aab040837a', 38, 200, 956, 'whole', 40400, '2023-10-18 10:17:06'),
(97, 'INV-652e68fbdf5b5', 37, 100, 284, 'retail', -63000, '2023-10-18 10:17:06'),
(98, 'INV-652e68fbdf5b5', 37, 100, 936, 'whole', 2200, '2023-10-18 10:17:06'),
(99, 'INV-652e68fbdf5b5', 39, 300, 786, 'whole', 118200, '2023-10-18 10:17:06'),
(100, 'INV-652e6af9bb0be', 43, 45, 888, 'whole', 30375, '2023-10-18 10:17:06'),
(101, 'INV-652e6af9bb0be', 43, 50, 842, 'retail', 31450, '2023-10-18 10:17:06'),
(102, 'INV-652e6af9bb0be', 36, 10, 687, 'retail', 5700, '2023-10-18 10:17:06'),
(103, 'INV-652e6fc81d944', 39, 100, 68, 'retail', -32400, '2023-10-18 10:17:06'),
(104, 'INV-652ed76297f3f', 39, 10, 786, 'whole', 3940, '2023-10-18 10:17:06'),
(105, 'INV-652ed76297f3f', 37, 67, 284, 'retail', -42210, '2023-10-18 10:17:06'),
(106, 'INV-652ed852c689c', 40, 20, 383, 'retail', 6600, '2023-10-18 10:17:06'),
(107, 'INV-652ed8b354ffd', 40, 50, 22, 'whole', -1550, '2023-10-18 10:17:06'),
(108, 'INV-652ed8b354ffd', 41, 300, 549, 'whole', 137700, '2023-10-18 10:17:06'),
(109, 'INV-652ee3d9cd7c4', 39, 100, 68, 'retail', -32400, '2023-10-18 10:17:06'),
(110, 'INV-652ee3fadad1e', 42, 500, 218, 'whole', -137000, '2023-10-18 10:17:06'),
(111, 'INV-652f7641d4cc9', 36, 10, 687, 'retail', 5700, '2023-10-18 10:17:06'),
(112, 'INV-652f7641d4cc9', 38, 130, 628, 'retail', -16380, '2023-10-18 10:17:06'),
(113, 'INV-652f7641d4cc9', 40, 50, 22, 'whole', -1550, '2023-10-18 10:17:06'),
(114, 'INV-652f765a18476', 38, 100, 956, 'whole', 20200, '2023-10-18 10:17:06'),
(115, 'INV-652f766bc7e66', 44, 10, 119, 'retail', -860, '2023-10-18 10:17:06'),
(116, 'INV-652f767cb2c38', 38, 70, 956, 'whole', 14140, '2023-10-18 10:17:06'),
(117, 'INV-652f7797b44ad', 38, 16, 628, 'retail', -2016, '2023-10-18 10:17:06'),
(118, 'INV-652f945244d2e', 40, 10, 22, 'whole', -310, '2023-10-18 10:17:06'),
(119, 'INV-652f946185c5b', 38, 19, 628, 'retail', -2394, '2023-10-18 10:17:06'),
(120, 'INV-652f94725be23', 40, 78, 22, 'whole', -2418, '2023-10-18 10:17:06'),
(121, 'INV-652f94b3bd26a', 38, 1, 628, 'retail', -126, '2023-10-18 10:17:06'),
(122, 'INV-652f94c0afdb2', 36, 1, 511, 'whole', 394, '2023-10-18 10:17:06'),
(123, 'INV-652f94cfe9397', 40, 1, 383, 'retail', 330, '2023-10-18 10:17:06'),
(124, 'INV-652f94d9be5dc', 44, 1, 979, 'whole', 774, '2023-10-18 10:17:06'),
(125, 'INV-652f94e7d09e8', 40, 10, 22, 'whole', -310, '2023-10-18 10:17:06'),
(126, 'INV-652f94f370847', 38, 1, 628, 'retail', -126, '2023-10-18 10:17:06'),
(127, 'INV-652f94ff380a7', 38, 10, 956, 'whole', 2020, '2023-10-18 10:17:06'),
(128, 'INV-653181e76f21a', 38, 100, 956, 'whole', 20200, '2023-10-19 19:22:15'),
(129, 'INV-653187b341f45', 40, 14, 22, 'whole', -434, '2023-10-19 19:46:59'),
(130, 'INV-653187bf59122', 36, 10, 687, 'retail', 5700, '2023-10-19 19:47:11'),
(131, 'INV-653187d13f5cb', 38, 10, 956, 'whole', 2020, '2023-10-19 19:47:29'),
(132, 'INV-653187e114f68', 36, 8, 687, 'retail', 4560, '2023-10-19 19:47:45'),
(133, 'INV-653187f4cb0be', 40, 100, 383, 'retail', 33000, '2023-10-19 19:48:04'),
(134, 'INV-65318803a8f5d', 40, 100, 383, 'retail', 33000, '2023-10-19 19:48:19'),
(135, 'INV-6531884c6fea2', 36, 1, 687, 'retail', 570, '2023-10-19 19:49:32'),
(136, 'INV-65318880940e6', 38, 10, 956, 'whole', 2020, '2023-10-19 19:50:24'),
(137, 'INV-6531889748fce', 38, 6, 628, 'retail', -756, '2023-10-19 19:50:47'),
(138, 'INV-653198fd67af4', 38, 1, 628, 'retail', -126, '2023-10-19 21:00:45'),
(139, 'INV-65319905adcac', 44, 1, 119, 'retail', -86, '2023-10-19 21:00:53'),
(140, 'INV-6531991105f09', 38, 1, 628, 'retail', -126, '2023-10-19 21:01:05'),
(141, 'INV-65319926cf5e6', 38, 25, 956, 'whole', 5050, '2023-10-19 21:01:26'),
(142, 'INV-65319de5455e0', 44, 10, 119, 'retail', -860, '2023-10-19 21:21:41'),
(143, 'INV-65319df4c3771', 44, 10, 119, 'retail', -860, '2023-10-19 21:21:56'),
(144, 'INV-65319e0331d2b', 40, 7, 22, 'whole', -217, '2023-10-19 21:22:11'),
(145, 'INV-65319e18297ae', 44, 40, 119, 'retail', -3440, '2023-10-19 21:22:32'),
(146, 'INV-65319e77693dc', 44, 5, 979, 'whole', 3870, '2023-10-19 21:24:07'),
(147, 'INV-6531c5860df1a', 38, 10, 628, 'retail', -1260, '2023-10-20 00:10:46'),
(148, 'INV-6531c5953f143', 44, 10, 119, 'retail', -860, '2023-10-20 00:11:01'),
(149, 'INV-6531c5a5801c8', 44, 10, 119, 'retail', -860, '2023-10-20 00:11:17');

-- --------------------------------------------------------

--
-- Table structure for table `position`
--

CREATE TABLE `position` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `position`
--

INSERT INTO `position` (`id`, `name`) VALUES
(1, 'Admin'),
(2, 'seller'),
(3, 'vendor');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `brand` varchar(255) DEFAULT NULL,
  `unit` varchar(50) DEFAULT NULL,
  `buy_price` int(11) DEFAULT NULL,
  `whole_sale_price` int(11) DEFAULT NULL,
  `retail_sale_price` int(11) DEFAULT NULL,
  `expire_date` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `brand`, `unit`, `buy_price`, `whole_sale_price`, `retail_sale_price`, `expire_date`, `created_at`, `updated_at`) VALUES
(36, 'Lavinia Cook', 'Magnam nisi aliquip ', 'Ex veniam cumque al', 117, 511, 687, 1970, '2023-10-12 16:32:36', NULL),
(37, 'Amber Holmes', 'Anim quisquam magna ', 'Doloremque beatae et', 914, 936, 284, 2009, '2023-10-12 16:38:56', NULL),
(38, 'Alma Harrington', 'Ducimus sint veniam', 'Perspiciatis quia s', 754, 956, 628, 1974, '2023-10-12 17:33:58', NULL),
(39, 'Aimee Wade', 'Aut magni beatae qui', 'Culpa repellendus ', 392, 786, 68, 1977, '2023-10-12 18:24:20', NULL),
(40, 'Thomas Daniel', 'Reiciendis laboriosa', 'Autem repellendus E', 53, 22, 383, 1972, '2023-10-12 18:24:36', NULL),
(41, 'Chava Bentley', 'Id occaecat enim vol', 'Non recusandae In e', 90, 549, 270, 2013, '2023-10-12 18:24:44', NULL),
(42, 'Teagan Shepherd', 'Consequatur facere m', 'Est voluptate offici', 492, 218, 129, 2007, '2023-10-12 18:24:53', NULL),
(43, 'my product', 'Facilis esse magni ', 'Cupidatat adipisci c', 213, 888, 842, 2020, '2023-10-13 20:29:22', NULL),
(44, 'Daryl Schultz', 'Expedita voluptas do', 'Laboriosam quam mod', 205, 979, 119, 2023, '2023-10-13 20:31:23', NULL),
(45, 'Lane Andrews', 'Consequuntur tempori', 'Est incidunt atque', 721, 900, 1000, 1980, '2023-10-20 00:17:39', NULL),
(46, 'Maya Berger', 'Adipisicing qui labo', 'Quas soluta in cillu', 7000, 7940, 8000, 2000, '2023-10-20 00:18:57', NULL),
(47, 'Juice Embe', 'Moo', 'Quia ', 700, 800, 900, 2031, '2023-10-20 05:12:29', NULL),
(48, 'Azam Cora', 'Moo', 'Vitae ', 700, 800, 900, 2036, '2023-10-20 05:14:48', NULL),
(49, 'Azam Juice', 'Moo', 'Quasi', 800, 900, 1000, 2026, '2023-10-20 05:16:56', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_branch`
--

CREATE TABLE `product_branch` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `branch_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `inventory` int(11) NOT NULL,
  `stock_limit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_branch`
--

INSERT INTO `product_branch` (`id`, `product_id`, `branch_id`, `quantity`, `inventory`, `stock_limit`) VALUES
(1, 36, 1, 7, 0, 0),
(2, 37, 2, 465, 198, 16),
(3, 38, 1, 900, 100, 74),
(4, 39, 2, 823, 313, 40),
(5, 40, 1, 600, 17, 33),
(6, 41, 2, 916, 616, 19),
(7, 42, 2, 629, 129, 21),
(8, 38, 2, 100, 100, 0),
(9, 40, 2, 120, 50, 0),
(10, 38, 3, 12, 0, 0),
(11, 36, 3, 54, 46, 0),
(12, 40, 3, 307, 7, 0),
(13, 43, 2, 314, 219, 59),
(14, 44, 1, 0, 88, 78),
(15, 44, 3, 156, 96, 0),
(16, 44, 2, 40, 20, 0),
(17, 36, 2, 33, 21, 0),
(18, 38, 4, 12, 2, 0),
(19, 40, 4, 14, 7, 0),
(20, 44, 4, 96, 11, 0),
(21, 45, 2, 132, 132, 19),
(22, 46, 2, 780, 780, 17),
(23, 47, 2, 8000, 8000, 230),
(24, 48, 2, 10000, 10000, 320),
(25, 49, 1, 12000, 12000, 330);

-- --------------------------------------------------------

--
-- Table structure for table `product_transfers`
--

CREATE TABLE `product_transfers` (
  `id` int(11) NOT NULL,
  `product_id` int(7) NOT NULL,
  `transfer_from` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `transfer_to` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_transfers`
--

INSERT INTO `product_transfers` (`id`, `product_id`, `transfer_from`, `quantity`, `transfer_to`, `created_at`) VALUES
(1, 36, '1', 1, '2', '2023-10-14 03:42:05'),
(2, 40, '1', 100, '3', '2023-10-14 03:51:42'),
(3, 40, '1', 100, '3', '2023-10-14 04:53:41'),
(4, 38, '1', 200, '2', '2023-10-14 04:58:37'),
(5, 36, '1', 1, '2', '2023-10-14 09:07:29'),
(6, 38, '1', 12, '4', '2023-10-14 14:21:14'),
(7, 40, '1', 7, '4', '2023-10-14 14:27:33'),
(8, 40, '1', 7, '4', '2023-10-14 14:36:54'),
(9, 44, '1', 96, '4', '2023-10-14 14:37:34'),
(10, 38, '1', 100, '2', '2023-10-17 18:52:30'),
(11, 40, '1', 120, '2', '2023-10-17 18:53:16');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `salary` int(8) DEFAULT NULL,
  `branch_id` int(11) DEFAULT NULL,
  `position` varchar(50) NOT NULL,
  `is_staff` int(1) NOT NULL DEFAULT 1,
  `is_active` int(1) NOT NULL DEFAULT 0,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `first_name`, `last_name`, `username`, `email`, `salary`, `branch_id`, `position`, `is_staff`, `is_active`, `password`, `created_at`) VALUES
(14, 'alkado', 'heneliko', 'alkadohs', 'email@gmail.com', NULL, 1, 'admin', 0, 0, '$2y$12$vkUt.z11VOrCeiC8SgITcuPXo5Hy6djikUeFNuCN0hHAAKyzSRch6', '2023-09-30 11:07:07'),
(15, 'Nathan', 'Gay', 'john', 'kamikyha@mailinator.com', NULL, 1, 'vendor', 0, 0, '$2y$12$XMAxddXUbv6N.KdyUoE0feAjD.ZvqZ06yEDiFjUIAC9pTxs1MeOJi', '2023-10-11 12:11:37'),
(16, 'Amity', 'Cotton', 'new25', 'dyhodo@mailinator.com', NULL, 1, 'vendor', 0, 0, '$2y$12$Dz8uaf4qjPNWCyyOr8E7mObTIX8oYZxZUi4K/ho3cmjtEAFajxfBu', '2023-10-12 18:28:52'),
(18, 'Carl', 'Hyde', 'kado', 'botyc@mailinator.com', NULL, 2, 'vendor', 0, 0, '$2y$12$4OCMkqBWCr78eO32ZArLme2btg7chgYjPXvkZKr.MR7X9gOhgPpie', '2023-10-12 18:36:55'),
(19, 'Rowan', 'Rodriguez', 'nuwasamora', 'gepobiv@mailinator.com', NULL, 3, 'seller', 0, 0, '$2y$12$mId1tIyGdOaJbwvM5UY84.Vfe4woixIvGDW9mM7IIBb0yiI/rkj7e', '2023-10-12 18:52:42'),
(20, 'Kim', 'Joe', 'kimjoe', 'kimjoe@gmail.com', 20000, 4, 'admin', 1, 0, '20677', '2023-10-14 07:43:45'),
(21, 'Hilary', 'Kemp', 'wazopipor', 'fuluhokyh@mailinator.com', 40, 4, 'seller', 1, 0, '$2y$12$9BfE6QZyB9P0PXTHB6/bBue.WWZLZUEg72CUP05kseOcUfxxwXKPG', '2023-10-14 08:17:54'),
(22, 'Calista', 'Nolan', 'uyole', 'rupoky@mailinator.com', 71, 1, 'seller', 1, 0, '$2y$12$2YGAkvjHrNpwR7YD/JOZEu14vpc5dN1V8zt8v3kCVTNQhUMDbdQ4S', '2023-10-18 06:07:00'),
(23, 'Kai', 'Murphy', 'uyole_store', 'bepato@mailinator.com', 42, 4, 'seller', 1, 0, '$2y$12$jvPTCdxRGxclMUKT89x/ouYt6/bVrYKmeMEKUiwlq.4nwFiyrlS5u', '2023-10-19 21:13:56');

-- --------------------------------------------------------

--
-- Table structure for table `vendor_product`
--

CREATE TABLE `vendor_product` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `branch_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vendor_product`
--

INSERT INTO `vendor_product` (`id`, `product_id`, `branch_id`, `user_id`, `quantity`, `created_at`) VALUES
(8, 14, 1, 18, 6, '2023-10-17 07:37:54'),
(9, 3, 1, 16, 78, '2023-10-17 07:44:01'),
(10, 3, 1, 18, 20, '2023-10-17 07:44:22'),
(11, 6, 2, 16, 20, '2023-10-17 07:51:19'),
(12, 2, 2, 16, 10, '2023-10-17 07:52:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`id`),
  ADD KEY `branch_mnj` (`mnj_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cart_user_id` (`user_id`);

--
-- Indexes for table `cart_item`
--
ALTER TABLE `cart_item`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cartKey` (`cart_id`),
  ADD KEY `productKey` (`product_id`);

--
-- Indexes for table `debt`
--
ALTER TABLE `debt`
  ADD PRIMARY KEY (`id`),
  ADD KEY `debt_cart_id` (`order_id`);

--
-- Indexes for table `expenses`
--
ALTER TABLE `expenses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `branchExpenses` (`branch_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_number`),
  ADD UNIQUE KEY `order_number` (`order_number`),
  ADD KEY `order_branch_id` (`branch_id`);

--
-- Indexes for table `order_item`
--
ALTER TABLE `order_item`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ordered_product` (`product_id`),
  ADD KEY `orderId` (`order_id`);

--
-- Indexes for table `position`
--
ALTER TABLE `position`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_branch`
--
ALTER TABLE `product_branch`
  ADD PRIMARY KEY (`id`),
  ADD KEY `branch_product` (`product_id`),
  ADD KEY `product_found_branch` (`branch_id`);

--
-- Indexes for table `product_transfers`
--
ALTER TABLE `product_transfers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userposid` (`position`),
  ADD KEY `userBranchId` (`branch_id`);

--
-- Indexes for table `vendor_product`
--
ALTER TABLE `vendor_product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `vendor_product_key` (`product_id`),
  ADD KEY `vendor_branch_key` (`branch_id`),
  ADD KEY `vendor_user_key` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `branch`
--
ALTER TABLE `branch`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT for table `cart_item`
--
ALTER TABLE `cart_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=203;

--
-- AUTO_INCREMENT for table `debt`
--
ALTER TABLE `debt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `expenses`
--
ALTER TABLE `expenses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_item`
--
ALTER TABLE `order_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=150;

--
-- AUTO_INCREMENT for table `position`
--
ALTER TABLE `position`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `product_branch`
--
ALTER TABLE `product_branch`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `product_transfers`
--
ALTER TABLE `product_transfers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `vendor_product`
--
ALTER TABLE `vendor_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `branch`
--
ALTER TABLE `branch`
  ADD CONSTRAINT `branch_mnj` FOREIGN KEY (`mnj_id`) REFERENCES `user` (`id`) ON DELETE SET NULL ON UPDATE NO ACTION;

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_user_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `cart_item`
--
ALTER TABLE `cart_item`
  ADD CONSTRAINT `CartItemProductId` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON UPDATE NO ACTION,
  ADD CONSTRAINT `cartCartItemId` FOREIGN KEY (`cart_id`) REFERENCES `cart` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `debt`
--
ALTER TABLE `debt`
  ADD CONSTRAINT `debt_cart_id` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_number`) ON UPDATE NO ACTION;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `order_branch_id` FOREIGN KEY (`branch_id`) REFERENCES `branch` (`id`) ON DELETE SET NULL ON UPDATE NO ACTION;

--
-- Constraints for table `order_item`
--
ALTER TABLE `order_item`
  ADD CONSTRAINT `OrderItemProductId` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON UPDATE NO ACTION,
  ADD CONSTRAINT `orderItemOrderId` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_number`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `product_branch`
--
ALTER TABLE `product_branch`
  ADD CONSTRAINT `branch_product` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `product_found_branch` FOREIGN KEY (`branch_id`) REFERENCES `branch` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `vendor_product`
--
ALTER TABLE `vendor_product`
  ADD CONSTRAINT `vendor_branch_key` FOREIGN KEY (`branch_id`) REFERENCES `branch` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `vendor_product_key` FOREIGN KEY (`product_id`) REFERENCES `product_branch` (`id`) ON UPDATE NO ACTION,
  ADD CONSTRAINT `vendor_user_key` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
