-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2024 at 11:44 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ordermachine`
--

-- --------------------------------------------------------

--
-- Table structure for table `current_orders`
--

CREATE TABLE `current_orders` (
  `item_name` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `item_name` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`item_name`, `img`, `price`, `type`) VALUES
('Baked potato', 'bakedpotato.jpg', 250, 'Sides'),
('Chicken n Beans', 'chickennbeans.jpg', 450, 'main'),
('Corn Salad', 'cornsalad.jpg', 250, 'sides'),
('Cupcakes', 'cupcakes.jpg', 25, 'dessert'),
('Lavacake', 'lavacake.jpg', 125, 'dessert'),
('Rolls', 'rolls.jpeg', 25, 'sides'),
('Mango juice', 'mangojuice.jpeg', 25, 'drinks'),
('Orange juice', 'orangejuice.jpg', 25, 'drinks'),
('Balsamic peppers', 'balsamicpeppers.jpg', 450, 'sides');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `item_name`, `quantity`, `price`) VALUES
(1, 'Chicken n Beans', 2, 900),
(2, 'Balsamic peppers', 1, 450),
(3, 'Baked potato', 1, 250),
(4, 'Lavacake', 2, 250),
(5, 'Cupcakes', 1, 25),
(6, 'Chicken n Beans', 2, 900),
(7, 'Balsamic peppers', 1, 450),
(8, 'Baked potato', 1, 250),
(9, 'Lavacake', 2, 250),
(10, 'Cupcakes', 1, 25),
(11, 'Chicken n Beans', 2, 900),
(12, 'Balsamic peppers', 1, 450),
(13, 'Baked potato', 1, 250),
(14, 'Lavacake', 2, 250),
(15, 'Cupcakes', 1, 25),
(16, 'Chicken n Beans', 2, 900),
(17, 'Balsamic peppers', 1, 450),
(18, 'Baked potato', 1, 250),
(19, 'Lavacake', 2, 250),
(20, 'Cupcakes', 1, 25),
(21, 'Lavacake', 1, 125),
(22, 'Chicken n Beans', 1, 450),
(23, 'Cupcakes', 1, 25),
(24, 'Lavacake', 1, 125),
(25, 'Mango juice', 1, 25),
(26, 'Orange juice', 1, 25),
(27, 'Baked potato', 1, 250),
(28, 'Corn Salad', 1, 250),
(29, 'Rolls', 1, 25),
(30, 'Balsamic peppers', 1, 450),
(31, 'Lavacake', 1, 125),
(32, 'Lavacake', 1, 125),
(33, 'Chicken n Beans', 1, 450),
(34, 'Cupcakes', 1, 25),
(35, 'Lavacake', 1, 125),
(36, 'Baked potato', 1, 250),
(37, 'Balsamic peppers', 1, 450),
(38, 'Baked potato', 1, 250),
(39, 'Chicken n Beans', 1, 450),
(40, 'Chicken n Beans', 1, 450),
(41, 'Lavacake', 1, 125),
(42, 'Orange juice', 1, 25),
(43, 'Lavacake', 1, 125),
(44, 'Lavacake', 1, 125),
(45, 'Baked potato', 1, 250),
(46, 'Orange juice', 1, 25),
(47, 'Lavacake', 1, 125),
(48, 'Balsamic peppers', 1, 450),
(49, 'Lavacake', 1, 125),
(50, 'Lavacake', 1, 125),
(51, 'Chicken n Beans', 2, 900),
(52, 'Balsamic peppers', 2, 900),
(53, 'Orange juice', 1, 25),
(54, 'Cupcakes', 1, 25),
(55, 'Rolls', 1, 25),
(56, 'Corn Salad', 1, 250),
(57, 'Baked potato', 1, 250),
(58, 'Balsamic peppers', 1, 450),
(59, 'Lavacake', 1, 125),
(60, 'Cupcakes', 1, 25),
(61, 'Lavacake', 3, 375),
(62, 'Balsamic peppers', 3, 1350),
(63, 'Chicken n Beans', 2, 900),
(64, 'Orange juice', 1, 25),
(65, 'Corn Salad', 1, 250),
(66, 'Rolls', 1, 25),
(67, 'Baked potato', 3, 750),
(68, 'Cupcakes', 1, 25),
(69, 'Lavacake', 1, 125),
(70, 'Cupcakes', 1, 25),
(71, 'Rolls', 1, 25),
(72, 'Baked potato', 2, 500),
(73, 'Corn Salad', 1, 250),
(74, 'Chicken n Beans', 1, 450),
(75, 'Baked potato', 1, 250),
(76, 'Cupcakes', 1, 25),
(77, 'Baked potato', 1, 250),
(78, 'Lavacake', 1, 125),
(79, 'Cupcakes', 1, 25),
(80, 'Chicken n Beans', 1, 450),
(81, 'Lavacake', 1, 125),
(82, 'Orange juice', 1, 25),
(83, 'Mango juice', 1, 25),
(84, 'Chicken n Beans', 1, 450),
(85, 'Lavacake', 1, 125),
(86, 'Orange juice', 1, 25),
(87, 'Rolls', 1, 25),
(88, 'Chicken n Beans', 1, 450),
(89, 'Lavacake', 1, 125),
(90, 'Orange juice', 2, 50),
(91, 'Cupcakes', 1, 25),
(92, 'Mango juice', 1, 25),
(93, 'Baked potato', 1, 250),
(94, 'Corn Salad', 1, 250),
(95, 'Rolls', 1, 25),
(96, 'Balsamic peppers', 1, 450),
(97, 'Chicken n Beans', 2, 900),
(98, 'Lavacake', 2, 250),
(99, 'Corn Salad', 1, 250),
(100, 'Balsamic peppers', 1, 450),
(101, 'Lavacake', 1, 125),
(102, 'Chicken n Beans', 1, 450),
(103, 'Lavacake', 1, 125),
(104, 'Orange juice', 2, 50),
(105, 'Orange juice', 1, 25),
(106, 'Chicken n Beans', 1, 450),
(107, 'Baked potato', 1, 250),
(108, 'Corn Salad', 1, 250),
(109, 'Lavacake', 1, 125),
(110, 'Chicken n Beans', 5, 2250),
(111, 'Corn Salad', 1, 250),
(112, 'Orange juice', 2, 50),
(113, 'Baked potato', 1, 250);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
