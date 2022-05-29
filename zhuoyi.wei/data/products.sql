-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 17, 2022 at 09:20 PM
-- Server version: 5.7.37-cll-lve
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zhuoyi_2oebags`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `email` varchar(128) NOT NULL,
  `url` varchar(256) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `category` varchar(32) NOT NULL,
  `date_create` datetime NOT NULL,
  `date_modify` datetime NOT NULL,
  `thumbnail` varchar(128) NOT NULL,
  `images` varchar(256) NOT NULL,
  `description` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `email`, `url`, `price`, `category`, `date_create`, `date_modify`, `thumbnail`, `images`, `description`) VALUES
(1, 'Dress', 'Dress@2o2.com', 'http://2o2.com', 60, 'clothes', '2022-04-17 20:42:08', '2022-04-17 20:42:08', 'cloth_dress_2o2.jpg', 'cloth_dress_2o2_1.jpg,cloth_dress_2o2_2.jpg', 'It is easy to match any type of coat.'),
(2, 'Top', 'Top@2o2.com', 'https://2o2.com', 30, 'clothes', '2022-04-17 20:51:52', '2022-04-17 20:51:52', 'cloth_top_2o2.jpg', 'cloth_top_2o2_1.jpg,cloth_top_2o2_2.jpg,cloth_top_2o2_3.jpg', 'Hierarchical top collocation'),
(3, 'Skirt', 'skirt@2o2.com', 'https://2o2.com', 45, 'clothes', '2022-04-17 20:54:47', '2022-04-17 20:54:47', 'cloth_skirt_2o2.jpg', 'cloth_skirt_2o2_1.jpg,cloth_skirt_2o2_2.jpg,cloth_skirt_2o2_3.jpg', 'Classic collocation'),
(4, 'Coat', 'coat@2o2.com', 'http://2o2.com', 90, 'clothes', '2022-04-17 21:03:46', '2022-04-17 21:03:46', 'cloth_coat_2o2.jpg', 'cloth_coat_2o2_1.jpg,cloth_coat_2o2_2.jpg', 'Self-cultivation design'),
(5, 'Shorts', 'shorts@2o2.com', 'http://2o2.com', 45, 'clothes', '2022-04-17 21:05:57', '2022-04-17 21:05:57', 'cloth_shorts_2o2.jpg', 'cloth_shorts_2o2_1.jpg,cloth_shorts_2o2_2.jpg', 'High waist straight cylinder'),
(6, 'Jacket', 'jacket@2o2.com', 'http://2o2.com', 60, 'clothes', '2022-04-17 21:07:54', '2022-04-17 21:07:54', 'cloth_jacket_2o2.jpg', 'cloth_jacket_2o2_1.jpg', 'Vintage lapel jacket'),
(7, 'Pajamas', 'pajamas@2o2.com', 'http://2o2.com', 65, 'clothes', '2022-04-17 21:12:03', '2022-04-17 21:12:03', 'cloth_pajamas_2o2.jpg', 'cloth_pajamas_2o2_1.jpg,cloth_pajamas_2o2_2.jpg', 'Pure cotton / silk'),
(8, 'Hoodie', 'hoodie@2o2.com', 'http://2o2.com', 95, 'clothes', '2022-04-17 21:14:07', '2022-04-17 21:14:07', 'cloth_hoodie_2o2.jpg', 'cloth_hoodie_2o2_1.jpg,cloth_hoodie_2o2_2.jpg', 'Velvet hoodie'),
(9, 'Shirt', 'shirt@2o2.com', 'http://2o2.com', 64, 'clothes', '2022-04-17 21:15:34', '2022-04-17 21:15:34', 'cloth_shirt_2o2.jpg\r\n', 'cloth_shirt_2o2_1.jpg', ''),
(10, 'Jumpsuits', 'jumpsuits@2o2.com', 'http://2o2.com', 60, 'clothes', '2022-04-17 21:16:37', '2022-04-17 21:16:37', 'cloth_jumpsuits_2o2.jpg', 'cloth_jumpsuits_2o2_1.jpg', ''),
(11, 'Accessories', 'accessories@2o2.com', 'http://2o2.com', 30, 'accessories', '2022-04-17 21:18:26', '2022-04-17 21:18:26', 'accessories_2o2.jpg', 'accessories_2o2_1.jpg,accessories_2o2_2.jpg,accessories_2o2_3.jpg', ''),
(12, 'Shoes', 'shoes@2o2.com', 'http://2o2.com', 60, 'accessories', '2022-04-17 21:19:30', '2022-04-17 21:19:30', 'accessories_shoes_2o2.jpg', 'accessories_shoes_2o2_1.jpg', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
