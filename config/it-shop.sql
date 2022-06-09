-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2022 at 03:57 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `itshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id_brand` int(11) NOT NULL,
  `name_brand` varchar(255) NOT NULL,
  `id_manufacturer` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id_brand`, `name_brand`, `id_manufacturer`) VALUES
(7, 'Iphone', 4),
(8, 'Dell', 6),
(9, 'LG', 5),
(10, 'Samsung', 3),
(11, 'Huawei', 1),
(12, 'Lenovo', 2),
(13, 'Tesla', 7);

-- --------------------------------------------------------

--
-- Table structure for table `manufacturers`
--

CREATE TABLE `manufacturers` (
  `id_manufacturer` int(11) NOT NULL,
  `name_manufacturer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `manufacturers`
--

INSERT INTO `manufacturers` (`id_manufacturer`, `name_manufacturer`) VALUES
(1, 'Huawei'),
(2, 'Lenovo'),
(3, 'Samsung'),
(4, 'Apple'),
(5, 'LG'),
(6, 'Dell'),
(7, 'Tesla');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id_orders` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `order_time` datetime NOT NULL DEFAULT current_timestamp(),
  `order_price` varchar(255) NOT NULL,
  `id_product` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id_orders`, `address`, `country`, `order_time`, `order_price`, `id_product`, `id_user`) VALUES
(2, 'Gradsko šetalište bb', 'Serbia', '2022-06-09 15:51:50', '560', 4, 2),
(3, 'Gradsko šetalište bb', 'Serbia', '2022-06-09 15:52:39', '560', 4, 2),
(4, 'Gradsko šetalište bb', 'Serbia', '2022-06-09 15:53:37', '560', 4, 2),
(5, 'Gradsko šetalište bb', 'Serbia', '2022-06-09 15:53:51', '560', 4, 2),
(6, '', '', '2022-06-09 15:54:18', '560', 4, 2),
(7, '', '', '2022-06-09 15:54:22', '560', 4, 2),
(8, 'Milinka Kušića 11', 'Serbia', '2022-06-09 15:55:05', '560', 4, 3),
(9, 'Bulevar oslobodilaca Čačka', 'Serbia', '2022-06-09 15:55:29', '560', 4, 3),
(10, 'Bulevar oslobodilaca Čačka', 'Serbia', '2022-06-09 15:56:50', '560', 1, 3),
(11, 'Savska promenada 98', 'Serbia', '2022-06-09 15:57:13', '560', 5, 3);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `id_type` int(11) NOT NULL,
  `id_brand` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `image`, `id_type`, `id_brand`) VALUES
(1, 'Iphone 11 pro', '460', 'iphone11.jpeg', 3, 7),
(2, 'Klima uredjaj 45PHK33M1', '340', 'air conditioner 1.jpg', 4, 10),
(3, 'Xiaomi', '210', 'huaweip50.jpeg', 3, 11),
(4, 'LCD 43\" Smart TV', '560', 'tv.png', 1, 9),
(5, 'Vostro 3500, 15,6\" FHD', '870', 'laptop1.jpg', 2, 8),
(6, 'IdeaPad 14\" Ryzen 3700', '810', 'laptop2.jpg', 2, 12),
(7, 'LED 32\" Full HD', '340', 'tv1.png', 1, 10),
(8, 'Klima uredjaj R32KC57V', '320', 'air conditioner 2.jpg', 4, 13);

-- --------------------------------------------------------

--
-- Table structure for table `product_types`
--

CREATE TABLE `product_types` (
  `id_type` int(11) NOT NULL,
  `name_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product_types`
--

INSERT INTO `product_types` (`id_type`, `name_type`) VALUES
(1, 'television'),
(2, 'laptop'),
(3, 'mobile'),
(4, 'air conditioner');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `id_user_type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `name`, `surname`, `email`, `username`, `password`, `id_user_type`) VALUES
(1, 'Milan', 'Marković', 'milan@gmial.com', 'milan', 'milan123', 1),
(2, 'Jovana', 'Katić', 'joca@gmail.com', 'jovana', 'jovana123', 1),
(3, 'a', 'a', 'a', 'a', 'a', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_types`
--

CREATE TABLE `user_types` (
  `id_user_type` int(11) NOT NULL,
  `name_user_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_types`
--

INSERT INTO `user_types` (`id_user_type`, `name_user_type`) VALUES
(1, 'korisnik'),
(2, 'moderator'),
(3, 'administrator');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id_brand`),
  ADD KEY `id_manufacturer` (`id_manufacturer`);

--
-- Indexes for table `manufacturers`
--
ALTER TABLE `manufacturers`
  ADD PRIMARY KEY (`id_manufacturer`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id_orders`),
  ADD KEY `id_product` (`id_product`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_type` (`id_type`,`id_brand`),
  ADD KEY `id_brands` (`id_brand`);

--
-- Indexes for table `product_types`
--
ALTER TABLE `product_types`
  ADD PRIMARY KEY (`id_type`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_user_type` (`id_user_type`);

--
-- Indexes for table `user_types`
--
ALTER TABLE `user_types`
  ADD PRIMARY KEY (`id_user_type`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id_brand` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `manufacturers`
--
ALTER TABLE `manufacturers`
  MODIFY `id_manufacturer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id_orders` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `product_types`
--
ALTER TABLE `product_types`
  MODIFY `id_type` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_types`
--
ALTER TABLE `user_types`
  MODIFY `id_user_type` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `brands`
--
ALTER TABLE `brands`
  ADD CONSTRAINT `brands_ibfk_1` FOREIGN KEY (`id_manufacturer`) REFERENCES `manufacturers` (`id_manufacturer`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`id_product`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`id_brand`) REFERENCES `brands` (`id_brand`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`id_type`) REFERENCES `product_types` (`id_type`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`id_user_type`) REFERENCES `user_types` (`id_user_type`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
