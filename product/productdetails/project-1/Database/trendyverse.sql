-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2023 at 05:56 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopee`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `item_id` int(11) NOT NULL,
  `item_brand` varchar(200) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_price` int(10) NOT NULL,
  `item_image` varchar(255) NOT NULL,
  `item_img_small2` varchar(255) NOT NULL,
  `item_img_small3` varchar(255) NOT NULL,
  `item_img_small4` varchar(255) NOT NULL,
  `item_register` datetime DEFAULT NULL,
  `item_category` varchar(255) NOT NULL,
  `item_description` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`item_id`, `item_brand`, `item_name`, `item_price`, `item_image`, `item_img_small2`, `item_img_small3`, `item_img_small4`, `item_register`, `item_category`, `item_description`) VALUES
(1, 'Flying Machine', 'Slim Men Black Jeansss', 499, './images/f1.jpg', './images/product-details/gallery1.jpg', './images/product-details/gallery2.jpg', './images/product-details/gallery3.jpg', '2022-12-30 15:56:19', 'Men', 'Shop from wide range of collection Men and Women jeans. These styles are created for the Indian youth\r\n                    who is not only well-informed, but also well-travelled and yet is the no strings attached generally.\r\n                    These Slim Fit Jeans made from high quality color guaranteed soft denim fabric with excellent\r\n                    finishing. These Jeans definitely increases your attraction and stops viewer\'s gaze at you. You look\r\n                    handsome and stylish with these trendy jeans. Note:- Color may little vary due to images taken from\r\n                    Photogenic camera in artificial lightening. Thanks'),
(2, 'Roadster', 'Men Regular Fit Solid Shirt', 917, './images/f2.jpg', './images/roadster-shirt-2.jpg', './images/roadster-shirt-3.jpg', './images/roadster-shirt-4.jpg', '2022-12-31 12:25:15', 'Men', 'A classic Lee Cross solid shirt.Can be worn for from office to after meeting evening get together. -Spread collar -100% premium Cotton -Full Sleeves -Slim Fit / Perfected pattern after extensive research on body measurements. -Hand Wash - For detailed instructions- follow the wash-care label on the garment. -Can be paired with Trouser/Jeans.'),
(3, 'Levi\'s', 'Distressed Women Jeans', 739, './images/levis-jeans-1.png', './images/levis-jeans-2.png', './images/levis-jeans-3.png', './images/levis-jeans-4.png', '2022-12-31 12:26:32', 'Women', 'Blue medium wash 5-pocket mid-rise jeans, mildly distressed with light fade, has a button and zip closure, waistband with belt loops'),
(4, 'Libas', 'Women Cotton Black Kurta', 700, './images/black kurta.png', './images/blackkurta-2.png', './images/blackkurta-3.png', './images/blackkurta-4.png', '2022-12-31 12:29:37', 'Women', 'This Black solid embroidered kurta will enhance your wardrobe. Look stunning in this kurta by pairing it with glossy pumps and statement earrings.'),
(5, 'FTX', 'Solid Men T-Shirt', 599, './images/ftx-tshirt-1.jpg', './images/ftx-tshirt-2.jpg', './images/ftx-tshirt-3.jpg', './images/ftx-tshirt-4.jpg', '2022-12-31 12:30:36', 'Men', 'Comfort and Style.This multi purpose T-shirt is made with Dry fit material with sweat-absorbent technology. Trendy & long lasting colour and positional prints to give edge to your wardrobe. Well defined fit takes shape of your body keeping the comfort of a casual wear intact. Can be used as Sports-Active-Casual wear. Can pair this with Denim-Tracks-Shorts.'),
(6, 'Ikacy', 'Straight Fit Ripped Jeans', 859, './images/f6.jpg', './images/straight_rippedjeans-2.jpg', './images/straight_rippedjeans-3.jpg', './images/straight_rippedjeans-4.jpg', '2022-12-31 12:31:26', 'Women', 'If you want to try out flared jeans but aren’t sure where to start, you can’t go wrong with a tee. A crisp white top works well with these flared pants, and if you want to make it a touch edgier for going out at nighttime, you can toss on a leather jacket as well.'),
(7, 'Aahwan', 'Solid Women Black Top', 429, './images/f7.jpg', './images/solid-tshirt-2.jpg', './images/solid-tshirt-3.jpg', './images/solid-tshirt-4.jpg', '2022-12-31 12:35:02', 'Women', 'LookMark Women\'s Solid Lycra Full Sleeve Crop Tops'),
(8, 'BerryLush', 'Women BodyCon Blue Dress', 629, './images/berrylush-dress-1.jpg', './images/berrylush-dress-2.jpg', './images/berrylush-dress-3.jpg', './images/berrylush-dress-4.jpg', '2022-12-31 12:34:51', 'Women', 'Make a bold style statement with delicacy and ravishing essence with this beautiful Blue Floral Printed Square-Neck Crepe Bodycon Mini Dress from Berrylush. This elegant piece of the outfit is sure to give you a comfortable and alluring appeal with its woven detailing and bodycon shape as it provides smooth contact to your skin with an hourglass silhouette. Compromising shoulder straps and sleeveless design of the dress get you a sassy look while the blue shade with floral print depicts freshness and vibrant hues from your casual look. The mini length gives disclosure to your beautiful legs with uninterrupted movements while the flounce hemline adds a figure-flattering touch. Wear this seductive mini dress with a pair of strappy heels and a white handbag to get a sophisticated final look.');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `register_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `first_name`, `last_name`, `register_date`) VALUES
(1, 'Daily', 'Tuition', '2020-03-28 13:07:17'),
(2, 'Akshay', 'Kashyap', '2020-03-28 13:07:17');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
