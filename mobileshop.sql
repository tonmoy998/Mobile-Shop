-- phpMyAdmin SQL Dump
-- version 5.2.1deb1ubuntu1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 07, 2024 at 04:28 AM
-- Server version: 10.11.4-MariaDB-1
-- PHP Version: 8.2.10-2ubuntu1
/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;

/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;

/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;

/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `moteshop`
--
-- --------------------------------------------------------
--
-- Table structure for table `mobile`
--
CREATE TABLE
  `mobile` (
    `id` int (11) NOT NULL,
    `name` varchar(255) DEFAULT NULL,
    `brand` varchar(255) DEFAULT NULL,
    `price` int (11) DEFAULT NULL,
    `date` date DEFAULT curdate (),
    `path` varchar(255) DEFAULT NULL
  ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;

--
-- Dumping data for table `mobile`
--
INSERT INTO
  `mobile` (`id`, `name`, `brand`, `price`, `date`, `path`)
VALUES
  (
    1,
    'Galaxy A54 Violet',
    'samsung',
    700,
    '2024-01-07',
    'assets/mobiles/Galaxy_A54_Violet.jpg'
  ),
  (
    2,
    'Galaxy S23',
    'samsung',
    749,
    '2024-01-07',
    'assets/mobiles/Galaxy_S23_Ultra_Cart_Images.jpg'
  ),
  (
    3,
    'Realme 11 Pro',
    'realme',
    769,
    '2024-01-07',
    'assets/mobiles/Realme_11_Pro_plus_Card.jpg'
  ),
  (
    4,
    'iPhone 14',
    'iphone',
    1229,
    '2024-01-07',
    'assets/mobiles/iPhone_14_Plus_Cart_Images.jpg'
  ),
  (
    5,
    'iPhone 14 Purple',
    'iphone',
    1599,
    '2024-01-07',
    'assets/mobiles/iPhone_14_Pro_Deep_Purple_Cart_Images.jpg'
  ),
  (
    6,
    'iPhone 14 Pro',
    'iphone',
    1089,
    '2024-01-07',
    'assets/mobiles/iPhone_14_Pro_Max.jpg'
  ),
  (
    7,
    'iPhone 14 Black',
    'iphone',
    1499,
    '2024-01-07',
    'assets/mobiles/iPhone_14_Pro_Speace_Black_Cart_Images.jpg'
  ),
  (
    8,
    'iPhone 15',
    'iPhone',
    1099,
    '2024-01-07',
    'assets/mobiles/iPhone_15_Plus_Card.jpg'
  ),
  (
    9,
    'iPhone 15 Black',
    'iphone',
    1249,
    '2024-01-07',
    'assets/mobiles/iphone_15_pro__Black_Titanium_1_-_Card.jpg'
  ),
  (
    10,
    'iPhone 15 Blue',
    'iphone',
    1199,
    '2024-01-07',
    'assets/mobiles/iphone_15_pro_max_Blue_Titanium_-_Cardv.jpg'
  ),
  (
    11,
    'Redmi Note 12',
    'xiaomi',
    869,
    '2024-01-07',
    'assets/mobiles/redmi_note_12_5g_card.jpg'
  ),
  (
    12,
    'Xiaomi Redmi 11',
    'xiaomi',
    649,
    '2024-01-07',
    'assets/mobiles/xiaomi_redmi_11_prime_Flashy_Black.jpg'
  );

-- --------------------------------------------------------
--
-- Table structure for table `users`
--
CREATE TABLE
  `users` (
    `id` int (11) NOT NULL,
    `email` varchar(255) NOT NULL,
    `password` varchar(255) NOT NULL,
    `date` date NOT NULL DEFAULT current_timestamp()
  ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;

--
-- Dumping data for table `users`
--
INSERT INTO
  `users` (`id`, `email`, `password`, `date`)
VALUES
  (
    8,
    'mote@gmail.com',
    '$2y$10$R5XruzCgFqo2YIBMbWUqKOkadPtNOlsy1PP1M0Y.4JhlI0yGxA.Qa',
    '2024-01-06'
  ),
  (
    9,
    'tonmoymojumder980@gmail.com',
    '$2y$10$7mSm9pNWr07tdoXOAgebD.Pc7DFlw3tCgGmOJP.kxX2RPbbCU55s6',
    '2024-01-06'
  );

--
-- Indexes for dumped tables
--
--
-- Indexes for table `mobile`
--
ALTER TABLE `mobile` ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users` ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--
--
-- AUTO_INCREMENT for table `mobile`
--
ALTER TABLE `mobile` MODIFY `id` int (11) NOT NULL AUTO_INCREMENT,
AUTO_INCREMENT = 3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users` MODIFY `id` int (11) NOT NULL AUTO_INCREMENT,
AUTO_INCREMENT = 10;

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;

/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;

/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
