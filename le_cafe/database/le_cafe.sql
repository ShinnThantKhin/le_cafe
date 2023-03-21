-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2022 at 03:53 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `le_cafe`
--

-- --------------------------------------------------------

--
-- Table structure for table `order_online`
--

CREATE TABLE `order_online` (
  `id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_price` float DEFAULT NULL,
  `product_image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_online`
--

INSERT INTO `order_online` (`id`, `product_name`, `product_price`, `product_image`) VALUES
(1, 'HAMBURGER', 3500, './img/burger.png'),
(2, 'CHEESE BURGER', 4500, './img/chesseburger.png'),
(3, 'CHICKEN BURGER', 4000, './img/chicken.png'),
(4, 'VEGGIE BURGER', 5500, './img/veggie.png'),
(5, 'HAM & EGG', 3000, './img/sandwich.png'),
(6, 'CHICKEN & CHEESE', 3000, './img/harmncheese.png'),
(7, 'TUNA & SALAD', 3500, './img/sandwich3.png'),
(8, 'ROAST BEEF', 5000, './img/sandwich4.png'),
(9, 'FRENCH TOAST', 3000, './img/toast.png'),
(10, 'AVOCADO & EGG', 4000, './img/toast4.png'),
(11, 'CREAM CHEESE & CURED SOLMON', 4500, './img/toast2.png'),
(12, 'BACON, MUSHROOM & CARMELIZED ONIONS', 5500, './img/toast3.png'),
(13, 'PLAIN WAFFLE', 2500, './img/waffle1.png'),
(14, 'ICE-CREAM SANDWICH', 3000, './img/waffle2.png'),
(15, 'THE ULTIMATE STRAWBERRY', 4000, './img/waffle.png'),
(16, 'PEANUT BUTTER WAFFLE', 3000, './img/waffle3.png'),
(17, 'LATTE', 3000, './img/latte.png'),
(18, 'AMERICANO', 2500, './img/americano.png'),
(19, 'MOCHA', 4000, './img/mocha.png'),
(20, 'BLACK', 3000, './img/black.png'),
(21, 'MILK TEA', 3500, './img/milktea.png'),
(22, 'THAI TEA', 3500, './img/thaitea.png'),
(23, 'GREEN TEA', 4000, './img/green.png'),
(24, 'HERBAL TEA', 4500, './img/herbal.png'),
(25, 'ORANGE JUICE', 2800, './img/orgjuice.png'),
(26, 'DETOX', 4200, './img/detox.png'),
(27, 'LEON GREEN', 3500, './img/leongreen.png'),
(28, 'STRAWBERRY JUICE', 2800, './img/stwjuice.png');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `cus_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` int(11) NOT NULL,
  `cus_address` varchar(200) NOT NULL,
  `city` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `card_type` enum('v','k','m') NOT NULL,
  `card_number` int(11) NOT NULL,
  `security_code` int(11) NOT NULL,
  `card_holder_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `cus_name`, `email`, `phone`, `cus_address`, `city`, `country`, `card_type`, `card_number`, `security_code`, `card_holder_name`) VALUES
(1, 'Shinn', 'shinn@gmail.com', 1324566, 'kamayut', 'yangon', 'myanmar', 'k', 12, 23, 'shinn'),
(2, 'Emily', 'emily@gmail.com', 978654321, 'No.91, Insein Road, Hlaing', 'Yangon', 'Myanmar', 'v', 115, 123, 'Emma'),
(11, 'Emily', 'emily@gmail.com', 96587122, 'No.123, Pyay Road, Mayangone', 'Yangon', 'Myanmar', 'k', 0, 0, ''),
(12, 'emily', 'emily@gmail.com', 2147483647, 'Insein,yangon', 'yangon', 'myanmar', 'k', 0, 0, ''),
(13, 'Shinn Thant Khin', 'shinnthat@gmail.com', 9817713, 'No.123,Insein Road, Hlaing', 'Yangon', 'Myanmar', 'k', 0, 0, ''),
(14, 'Shinn Thant Khin', 'shinnthantkhin@gmail.com', 2147483647, 'no.1233, Insein Road, Hlaing', 'Yangon', 'Myanmar', 'k', 0, 0, ''),
(15, 'Aye Aye', 'aye2022@gmail.com', 976543218, 'no.123, Insein Road, Hlaing', 'Yangon', 'Myanmar', 'k', 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `id` int(11) NOT NULL,
  `reserved_people` text NOT NULL,
  `reserved_date` date NOT NULL,
  `reserved_time` text NOT NULL,
  `cus_name` varchar(100) NOT NULL,
  `cus_phone` int(13) NOT NULL,
  `cus_email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`id`, `reserved_people`, `reserved_date`, `reserved_time`, `cus_name`, `cus_phone`, `cus_email`) VALUES
(1, '5', '2022-12-21', '11', 'Grace', 9765432, 'grace@gmail.com'),
(2, '4', '2022-12-28', '10', 'emily', 958245522, 'emily@gmail.com'),
(3, '4', '2023-01-21', '2', 'Shinn Thant Khin', 913245163, 'shinnthant@gmail.com'),
(4, '5', '2023-01-20', '1', 'Shinn Thant Khin', 2147483647, 'shinnthantkhin@gmail.com'),
(5, '7', '2022-12-27', '12', 'Aye Aye', 976543218, 'aye2022@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `user_profile`
--

CREATE TABLE `user_profile` (
  `id` int(11) NOT NULL,
  `full_name` varchar(30) NOT NULL,
  `username` varchar(10) NOT NULL,
  `email` text NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_profile`
--

INSERT INTO `user_profile` (`id`, `full_name`, `username`, `email`, `password`) VALUES
(1, 'Grace', 'gggracee', 'grace@gmail.com', 'iamgrace'),
(2, 'emily', 'emily24', 'emily@gmail.com', 'hiemily'),
(3, 'shinn', 'shinn', 'shinn@gmail.com', 'hello02'),
(4, 'hla hla', 'iamhlahla', 'heehee@gmail.com', 'iamhlahla'),
(9, 'Shinn Thant Khin', 'shinnthant', 'shinnthantkhin@gmail.com', 'qwer1234'),
(10, 'Aye Aye', 'aye2022', 'ayeaye2022@gmail.com', 'aye1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `order_online`
--
ALTER TABLE `order_online`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_profile`
--
ALTER TABLE `user_profile`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `order_online`
--
ALTER TABLE `order_online`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_profile`
--
ALTER TABLE `user_profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
