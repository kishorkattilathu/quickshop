-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2024 at 01:16 PM
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
-- Database: `quickshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `name`, `email`, `password`) VALUES
(1, 'admin', 'admin@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `booking_id` int(11) NOT NULL,
  `b_user_email` varchar(100) NOT NULL,
  `b_user_id` int(100) NOT NULL,
  `b_product_id` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `quantity` varchar(100) NOT NULL,
  `total_price` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(100) NOT NULL,
  `cat_image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_name`, `cat_image`) VALUES
(2, 'Accessories', '1692252329.jpg'),
(3, 'Bags', '1691469418.jpg'),
(4, 'Dresses', '1691469513.jpeg'),
(5, 'TV', '1691469652.jpeg'),
(6, 'shirt', '1691644556.jpg'),
(8, 'Shoes', '1691645073.jpg'),
(9, 'Caps', '1691645171.jpeg'),
(10, 'Watches', '1692948663.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

CREATE TABLE `complaint` (
  `complaint_id` int(11) NOT NULL,
  `c_name` varchar(100) NOT NULL,
  `c_email` varchar(100) NOT NULL,
  `c_message` varchar(100) NOT NULL,
  `c_reply` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(11) NOT NULL,
  `customer_email` varchar(100) NOT NULL,
  `card_name` varchar(100) NOT NULL,
  `card_number` varchar(100) NOT NULL,
  `expiry_month` varchar(100) NOT NULL,
  `expiry_year` varchar(100) NOT NULL,
  `cvv` varchar(100) NOT NULL,
  `total_payment` varchar(100) NOT NULL,
  `payment_status` varchar(100) NOT NULL,
  `payment_date` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payment_id`, `customer_email`, `card_name`, `card_number`, `expiry_month`, `expiry_year`, `cvv`, `total_payment`, `payment_status`, `payment_date`) VALUES
(1, 'divya@gmail.com', 'sbi', '7788994455661122', '08', '25', '100', '2110', 'Paid', '2024-Jun-24');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_desc` varchar(100) NOT NULL,
  `product_img` varchar(100) NOT NULL,
  `product_price` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `category_id`, `product_name`, `product_desc`, `product_img`, `product_price`) VALUES
(1, 2, 'Redmi Note 12 Pro+ 5G', 'Redmi Note 12 Pro+ 5G has launched in India with a relatively-expensive price tag. The Redmi Note 11', '1692252300.jpg', '29999'),
(2, 2, 'ColorFit Icon Buzz', 'Marketed and Imported by: Nexxbase Marketing Pvt. Ltd, Khasra No-146/25/2/1, Jail Road Badshahpur, G', '1692252772.jpg', '1349'),
(3, 2, 'pTron Quinto 5W Wireless Bluetooth 5.0 Speaker with Dynamic Sound, 6Hrs Playtime, Mini Outdoor Speak', 'Enjoy impressively full sound quality and robust bass realized through a 5Watt dynamic driver with a', '1692252943.jpg', '749'),
(4, 2, 'WH-XB900N Wireless Noise Cancelling Headphones', 'Discover these wireless, noise cancelling headphones with a host of smart functions like intuitive t', '1692253081.jpg', '19990'),
(5, 3, 'Mammon Women Handbags Combo (4-bib-Ribn)', 'Latest handbags combo set design by Mammon This sets includes 1 shoulder bag 1 sling bag 1 hand clut', '1692253210.jpg', '3499'),
(6, 3, 'PLAYY BAGS Medium 15 L TUITION BAG AND COLLEGE BAG FOR GIRLS-B', 'backpack is make in India product which is made of high quality polyester fabric; durable zipper and', '1692253330.jpg', '1299'),
(7, 3, 'Mansur Gavriel Everyday Soft Tote', '[LARGE CAPACITY] This mini bags for girls stylish latest 25 Lx 5 Wx 28 H \" Weight 485 GR. Roomy enou', '1692253436.jpg', '20000'),
(8, 3, 'floki 32 all Fashion Girls 3-PCS Fashion Cute Mini Leather Backpack sling & pouch set for Women/gift', '[*MATERIAL]: We use the soft high quality PU leather with heavy duty zipper hardware for this bag, s', '1692253544.jpg', '549'),
(9, 4, 'Antheaa Fuchsia Solid Chiffon Smocked Tiered Midi Dress', '100% Original Products Pay on delivery might be available Easy 14 days returns and exchanges Try & B', '1692253834.jpg', '1055'),
(10, 4, 'Reformation Gloriana Dress', 'When shopping for dresses, keep your various weddings in mind to maximize the looks you\'ll get out o', '1692253929.jpg', '5000'),
(11, 4, 'Women Fit and Flare Light White Dress', 'Are you looking for a Unique Pattern in Your Wardrobe and Highly Stylized Ethnic Designer Top, then ', '1692254194.jpg', '10000'),
(12, 4, 'Milly Formal Dress JX6075 By Jadore Evening Dress', 'Mailly Formal Evening Dress JX6075 By Jadore Evening is a stunning sweatheart neckline dress. The em', '1692254277.jpg', '13333'),
(13, 5, 'Samsung 80 cm (32 Inches) Wondertainment Series HD Ready LED Smart TV UA32T4340BKXXL (Glossy Black)', 'Resolution: HD Ready (1366x768) | Refresh Rate: 60 hertz Connectivity: 2 HDMI ports to connect set t', '1692254508.jpg', '12990'),
(14, 5, 'Buy Samsung Wondertainment 80 cm (32 Inch) Smart HD Ready TV, UA32T4340BKXXL at Best Price on Relian', 'Buy Samsung Wondertainment 80 cm (32 Inch) Smart HD Ready TV, UA32T4340BKXXL at Best Price on Relian', '1692254601.jpg', '16990'),
(15, 5, 'OnePlus 80 cm (32 inches) Y Series HD Ready LED Smart Android TV 32Y1 (Black)', 'Resolution: HD Ready (1366x768) | Refresh Rate: 60 hertz Connectivity: 2 HDMI ports to connect set t', '1692254662.jpg', '1499'),
(16, 5, 'LG UHD TV UQ75 43 (108cm) 4K Smart TV | WebOS | ThinQ AI | Active HDR', 'α5 Gen5 AI Processor 4K with AI Brightness & 4K Upscaling Magic Remote : Universal Control, Point, C', '1692254755.jpg', '32490'),
(17, 6, 'Men\'s Travel Shirt 100 Warm Bordeaux', 'Our backpack designers created this flannel shirt for going anywhere in the world in comfort with co', '1692254960.jpg', '1499'),
(18, 6, 'Classic Shirt in French Blue', 'Classic Shirt in French Blue', '1692255162.jpg', '2000'),
(19, 6, 'Classic Shirt in French Blue', '100% Cotton Slim Fit Machine wash Product Code: 461119105002 MRP : Rs. 2,499.00 inclusive of all tax', '1692255240.jpg', '700'),
(20, 6, 'Lymio Casual Shirt for Men|| Shirt for Men|| Men Stylish Shirt || Men Printed Shirt (Squre)', 'Care Instructions: Machine Wash Fit Type: Regular Fit shirt for men || casual shirt for men || men s', '1692255304.jpg', '349'),
(21, 8, 'BRUTON Trendy Sports Shoes For Men (Blue)', 'Bruton Manufacturer	STS Enterprises Manufacturer Address	 STS Enterprises H. No. 1821/41, VILL. JOOR', '1692255482.jpg', '299'),
(22, 8, 'Waan Sport Shoes Athletic Lightweight Breathable Running Casual Walking Comfortable Ultralight Men\'s', 'Sole: Airmix Closure: Lace-Up Shoe Width: Medium Shaft measures approximately low-top from arch Slip', '1692255551.jpg', '599'),
(23, 8, 'White casual shoes', 'Name : White casual shoes  Material : Synthetic  Sole Material : Pu  Fastening & Back Detail : Lace-', '1692255611.jpg', '412'),
(24, 8, 'Irsoe Women\'s Running Shoe', 'Closure: Lace-Up Fit Type: Casual Shoe Width: Medium Lifestyle: Walking/ Sports and Casual Shoes', '1692255687.jpg', '990'),
(25, 9, 'SwooK Classic Unisex Mens Boys Womens Adults Baseball Cap Caps Adjustable Cap Caps for Mens Men Boys', 'ILU Cap for Men Women Topi Unisex Head Branded Boy\'s Girl\'s Caps Adjustable Strap Summer Sports Cric', '1692255878.jpg', '449'),
(26, 9, 'Handcuffs Unisex Cotton Baseball Cap', 'Care Instructions: Hand Wash Only Fit Type: Regular Fit Type: Regular Adjustable Strap On The Back T', '1692255937.jpg', '521'),
(27, 9, 'Stylish Cotton Baseball Adjustable EDIKO Cap for Men/Women', 'Comfortable fitting; Protects you from sun & dust.<br> Good stich & perfect print, Add grace to your', '1692256034.jpg', '179'),
(28, 9, 'PUMA Baseball Cap with Brand Logo', 'FEATURES+DETAILS :Classic six panel capCurved visorSelf fabric and hair-safe hook-and-loop closureMo', '1692256154.jpg', '300');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_email`, `address`, `phone`, `password`) VALUES
(1, 'DIVYA DINESAN', 'divya@gmail.com', 'OLLUR, THRISSUR 680306', '9876543215', '123'),
(2, 'Anitha B', 'anitha@gmail.com', 'velappaya', '987654321', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `complaint`
--
ALTER TABLE `complaint`
  ADD PRIMARY KEY (`complaint_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `complaint`
--
ALTER TABLE `complaint`
  MODIFY `complaint_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
