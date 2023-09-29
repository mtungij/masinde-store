-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2023 at 09:59 PM
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
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`id`, `name`, `mnj_id`, `created_at`) VALUES
(1, 'UYOLE BRANCH', 1, '2023-09-26 09:33:17'),
(2, 'MBALIZI SHOP', 1, '2023-09-26 09:33:49');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `user_id`, `created_at`) VALUES
(1, 1, '2023-09-28 22:58:34'),
(10, 9, '2023-09-29 00:11:28');

-- --------------------------------------------------------

--
-- Table structure for table `cart_item`
--

CREATE TABLE `cart_item` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `cart_id` int(11) NOT NULL,
  `sold_by` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart_item`
--

INSERT INTO `cart_item` (`id`, `product_id`, `quantity`, `cart_id`, `sold_by`) VALUES
(17, 2, 2, 10, 'whole'),
(18, 5, 14, 10, 'retail'),
(20, 12, 5, 1, 'whole'),
(21, 2, 13, 1, 'retail'),
(22, 2, 12, 1, 'whole'),
(23, 4, 1, 1, 'whole');

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `id` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `amount` int(11) NOT NULL,
  `branch_id` int(11) DEFAULT NULL,
  `store_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `loan`
--

CREATE TABLE `loan` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `total_loan` int(11) DEFAULT NULL,
  `phone_number` int(11) DEFAULT NULL,
  `user_id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `loanitem`
--

CREATE TABLE `loanitem` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `loan_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `loan_flow`
--

CREATE TABLE `loan_flow` (
  `id` int(11) NOT NULL,
  `loan_id` int(11) NOT NULL,
  `amount_paid` int(11) NOT NULL,
  `paid_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_item`
--

CREATE TABLE `order_item` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `branch_id` int(11) DEFAULT NULL,
  `store_id` int(11) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `brand` varchar(255) DEFAULT NULL,
  `pkj_amount` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `pkgs_buy_price` int(11) DEFAULT NULL,
  `whole_sale_price` int(11) DEFAULT NULL,
  `retail_sale_price` int(11) DEFAULT NULL,
  `stock_limit` int(11) DEFAULT NULL,
  `expire_date` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `branch_id`, `store_id`, `name`, `brand`, `pkj_amount`, `quantity`, `pkgs_buy_price`, `whole_sale_price`, `retail_sale_price`, `stock_limit`, `expire_date`, `created_at`, `updated_at`) VALUES
(2, 2, NULL, 'Linus Howe', '', 36, 187, 760, 343, 25, 77, 1979, '2023-09-26 09:35:03', NULL),
(4, 1, 1, 'Leigh Middleton', '', 95, 765, 823, 267, 50, 22, 1978, '2023-09-26 09:38:13', NULL),
(5, 2, 1, 'Elizabeth Lucas', '', 99, 472, 796, 217, 989, 29, 2007, '2023-09-26 09:39:38', NULL),
(6, 2, 1, 'Elizabeth Lucas', '', 99, 472, 796, 217, 989, 29, 2007, '2023-09-26 09:40:16', NULL),
(7, 1, NULL, 'Hayden Montgomery', 'Enim elit dolorum v', 15, 540, 629, 798, 432, 50, 1991, '2023-09-26 09:47:44', NULL),
(8, 1, NULL, 'Avram Wallace', 'Sit sunt dolor in q', 30, 219, 619, 678, 236, 79, 1987, '2023-09-26 09:48:03', NULL),
(9, 2, NULL, 'Armando Duffy', 'Veniam hic ut dolor', 24, 560, 460, 922, 933, 36, 1981, '2023-09-26 09:48:31', NULL),
(10, 2, NULL, 'Raja Glass', 'Aut vitae adipisci e', 13, 99, 688, 580, 877, 27, 1976, '2023-09-26 09:48:42', NULL),
(11, 2, 1, 'Gregory Rollins', 'Occaecat esse sit ', 52, 165, 767, 902, 996, 79, 2006, '2023-09-26 09:49:13', NULL),
(12, 1, 1, 'Nero Alford', 'Deserunt consequuntu', 94, 326, 118, 730, 419, 6, 2000, '2023-09-26 09:57:54', NULL),
(13, 1, NULL, 'Leroy Hawkins', 'Libero cillum ut ess', 47, 460, 405, 59, 34, 34, 2012, '2023-09-26 10:05:38', NULL),
(14, 1, NULL, 'Alyssa Alvarez', 'Enim veniam quae as', 100, 580, 583, 966, 630, 43, 1970, '2023-09-26 10:05:46', NULL),
(15, 1, 1, 'Merrill Adkins', 'Anim nihil et numqua', 7, 238, 568, 99, 102, 56, 1982, '2023-09-26 10:05:55', NULL),
(16, 2, NULL, 'Dalton Bean', 'Facere et nostrud si', 58, 534, 278, 557, 278, 91, 1973, '2023-09-27 06:10:46', NULL),
(17, 1, NULL, 'Magee Rivera', 'Asperiores quia ipsu', 62, 548, 752, 533, 458, 86, 1985, '2023-09-27 06:11:32', NULL),
(18, 1, 1, 'Sybil Olson', 'Culpa dicta explica', NULL, 8, 237, 679, 467, 10, 1974, '2023-09-28 21:42:11', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `store`
--

CREATE TABLE `store` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mnj_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `store`
--

INSERT INTO `store` (`id`, `name`, `mnj_id`, `created_at`) VALUES
(1, 'MAIN STORE', 1, '2023-09-26 09:34:50');

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
  `branch_id` int(3) DEFAULT NULL,
  `store_id` int(3) DEFAULT NULL,
  `is_superuser` int(1) DEFAULT 0,
  `is_staff` int(1) DEFAULT 0,
  `is_active` int(1) DEFAULT 0,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `first_name`, `last_name`, `username`, `email`, `branch_id`, `store_id`, `is_superuser`, `is_staff`, `is_active`, `password`, `created_at`) VALUES
(1, 'alkado', 'heneliko', 'alkadohs', 'alkadosichoen@gmail.com', 0, 1, 1, 1, NULL, '$2y$12$1VBapmDfMLt/k/FFTb00EejG9ue92h0FHEl5MtEAxpgEzU0JaIGRW', '2023-09-25 17:01:08'),
(2, 'Eden', 'Spencer', 'vyvibylyxu', 'viruhypica@mailinator.com', 2, NULL, 1, NULL, NULL, '$2y$12$s.guuI/Wtj7AL7u90JiqrOYqD2b6wRPEoQc0a1DcFcVuYRoWiJ1iK', '2023-09-26 07:28:36'),
(3, 'Laurel', 'Valentine', 'Alkadis', 'lanaz@mailinator.com', 0, 1, 1, 1, NULL, '$2y$12$D5V056cjuR55ZJTYyLAsMejvjBjCKWP7wd/Ndr8dsoG81rVQgJugy', '2023-09-26 08:10:34'),
(4, 'Elaine', 'Palmer', 'nekatyv', 'gijoj@mailinator.com', 0, NULL, 1, NULL, NULL, '$2y$12$uAEOL1QjLIs7CLbi81zM8.tjWNpTvLUX8M.faFms4T6.DIClfN8gK', '2023-09-26 08:18:18'),
(5, 'Neil', 'Dickson', 'taqyvane', 'hisazovahe@mailinator.com', 0, 1, 1, NULL, NULL, '$2y$12$OJZm3BH6iHt0vpdH4XqfbeIyeb3g.NG3lGyVDrHMqidkPdY7feRAC', '2023-09-26 08:21:32'),
(6, 'Jason', 'Brennan', 'vareha', 'tomoqiraq@mailinator.com', 2, 1, 1, 1, NULL, '$2y$12$XD6.WvFPWFr5UZOG5Vcn9.L.hehNasse.LiJ7V2dmqRocS/3KLfYK', '2023-09-26 08:31:35'),
(7, 'Paki', 'Snow', 'nuzevaj', 'xexanopymo@mailinator.com', 1, 1, 1, 1, NULL, '$2y$12$8lIf4QIuf14h.U0l8M5Yz.i/G1IaxCCURj21w143t6tTfb4nHQCb6', '2023-09-26 08:34:25'),
(8, 'Anne', 'Wynn', 'tyhek', 'zugaqe@mailinator.com', 0, NULL, NULL, NULL, NULL, '$2y$12$sb/JZ2nJJnjzIqOmVEw9y.ayJ.WZdaqyPXbl2xJvZTji9NM0G6C8u', '2023-09-26 11:06:42'),
(9, 'Maria', 'Simon', 'maria', 'maria@gmail.com', 1, NULL, 1, 1, NULL, '$2y$12$8lYtL7EiStyuxx5L.p2cFeHMgcSnTx4/xkA/4.tWqSUyenNpqtICG', '2023-09-29 00:04:06');

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
-- Indexes for table `expenses`
--
ALTER TABLE `expenses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `storeExpenses` (`store_id`),
  ADD KEY `branchExpenses` (`branch_id`);

--
-- Indexes for table `loan`
--
ALTER TABLE `loan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `loan_provider` (`user_id`);

--
-- Indexes for table `loanitem`
--
ALTER TABLE `loanitem`
  ADD PRIMARY KEY (`id`),
  ADD KEY `loan_product` (`product_id`),
  ADD KEY `loaditem_loan` (`loan_id`);

--
-- Indexes for table `loan_flow`
--
ALTER TABLE `loan_flow`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_item`
--
ALTER TABLE `order_item`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ordered_product` (`product_id`),
  ADD KEY `orderId` (`order_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `storeKey` (`store_id`),
  ADD KEY `branchKey` (`branch_id`);

--
-- Indexes for table `store`
--
ALTER TABLE `store`
  ADD PRIMARY KEY (`id`),
  ADD KEY `store_mnj` (`mnj_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `branch`
--
ALTER TABLE `branch`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `cart_item`
--
ALTER TABLE `cart_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `expenses`
--
ALTER TABLE `expenses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `loan`
--
ALTER TABLE `loan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `loanitem`
--
ALTER TABLE `loanitem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `loan_flow`
--
ALTER TABLE `loan_flow`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_item`
--
ALTER TABLE `order_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `store`
--
ALTER TABLE `store`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

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
  ADD CONSTRAINT `cartKey` FOREIGN KEY (`cart_id`) REFERENCES `cart` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `productKey` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON UPDATE NO ACTION;

--
-- Constraints for table `expenses`
--
ALTER TABLE `expenses`
  ADD CONSTRAINT `branchExpenses` FOREIGN KEY (`branch_id`) REFERENCES `branch` (`id`) ON DELETE SET NULL ON UPDATE NO ACTION,
  ADD CONSTRAINT `storeExpenses` FOREIGN KEY (`store_id`) REFERENCES `store` (`id`) ON DELETE SET NULL ON UPDATE NO ACTION;

--
-- Constraints for table `loan`
--
ALTER TABLE `loan`
  ADD CONSTRAINT `loan_provider` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON UPDATE NO ACTION;

--
-- Constraints for table `loanitem`
--
ALTER TABLE `loanitem`
  ADD CONSTRAINT `loaditem_loan` FOREIGN KEY (`loan_id`) REFERENCES `loan` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `loan_product` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON UPDATE NO ACTION;

--
-- Constraints for table `order_item`
--
ALTER TABLE `order_item`
  ADD CONSTRAINT `orderId` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `ordered_product` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON UPDATE NO ACTION;

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `branchKey` FOREIGN KEY (`branch_id`) REFERENCES `branch` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `storeKey` FOREIGN KEY (`store_id`) REFERENCES `store` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `store`
--
ALTER TABLE `store`
  ADD CONSTRAINT `store_mnj` FOREIGN KEY (`mnj_id`) REFERENCES `user` (`id`) ON DELETE SET NULL ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
