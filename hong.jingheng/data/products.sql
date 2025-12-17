-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 17, 2025 at 04:35 AM
-- Server version: 10.6.23-MariaDB-cll-lve
-- PHP Version: 8.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bigheadbing_wm608`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `quantity` int(11) NOT NULL,
  `category` varchar(32) NOT NULL,
  `date_create` datetime NOT NULL,
  `date_modify` datetime NOT NULL,
  `description` text NOT NULL,
  `thumbnail` varchar(128) NOT NULL,
  `images` varchar(256) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `quantity`, `category`, `date_create`, `date_modify`, `description`, `thumbnail`, `images`) VALUES
(1, 'Hoya Australis ', 7.99, 2, 'Hoya', '2025-11-05 04:09:50', '2025-12-02 22:10:44', 'Hoya australis is a climbing vine native to Australia, characterized by its round to oval, deep green leaves and fragrant, star-shaped white flowers. This plant, also known as the common waxflower, is relatively easy to care for, preferring bright, indirect light, well-draining soil, and watering only after the soil has dried out. ', 'hoya_australis_thumb.png', 'hoya_australis_1.png,hoya_australis_2.png'),
(2, 'Hoya Kerri Variegated', 12.99, 2, 'Hoya', '2025-11-05 04:12:33', '2025-11-05 04:12:33', 'The Hoya kerrii variegated is a succulent with thick, heart-shaped leaves that are a mix of deep green in the center and creamy yellow or light green on the edges. It is known as the \"variegated sweetheart\".', 'hoya_kerri_thumb.png', 'hoya_kerri_1.png'),
(3, 'Hoya Australis Lisa', 15.00, 2, 'Hoya', '2025-11-05 04:14:31', '2025-11-05 04:14:31', 'Hoya australis Lisa is a vining plant prized for its colorful, variegated leaves and fragrant flowers. Its leaves are a mix of green, yellow, and cream, with new growth often emerging in vibrant pink or crimson tones. It produces clusters of star-shaped flowers that have a sweet, vanilla-chocolate scent. ', 'hoya_lisa_thumb.png', 'hoya_lisa_1.png,hoya_lisa_2.png'),
(4, 'Hoya Sunrise', 14.00, 3, 'Hoya', '2025-11-05 04:17:21', '2025-11-05 04:17:21', 'Hoya Sunrise is a hybrid plant known for its striking, almond-shaped leaves that turn red or burgundy when exposed to bright light, giving the plant its name. It features a prominent lattice of veins and a leathery texture', 'hoya_sunrise_thumb.png', 'hoya_sunrise_1.png,hoya_sunrise_2.png'),
(5, 'Monstera Adansonii Variegated', 20.00, 1, 'Monstera', '2025-11-05 04:20:48', '2025-11-05 04:20:48', 'Monstera Adansonii Variegated is a climbing plants with green marble colors and holes on the leaves. Low maintenance. ', 'monstera_adansonii_thumb.png', 'monstera_adansonii_1.png'),
(6, 'Monstera Albo 1 Leaf', 25.00, 1, 'Monstera', '2025-11-05 04:23:35', '2025-11-05 04:23:35', 'Monstera Albo Variegated 1 Leaf Cutting', 'monstera_albosml_1.png', 'monstera_albosml_1.png'),
(7, 'Monstera Albo Half-Moon 1 Leaf Cutting', 35.00, 1, 'Monstera', '2025-11-05 04:25:48', '2025-11-05 04:25:48', 'Monstera Albo Half-Moon 1 Leaf Cutting. Half Green and Half White. Avoid direct sunlight. ', 'monstera_albosml_3.png', 'monstera_albosml_3.png'),
(8, 'Monstera Albo Variegated', 50.00, 1, 'Monstera', '2025-11-05 04:28:13', '2025-11-05 04:28:13', 'Monstera Albo Variegated small plant fully rooted.', 'monstera_alsosml_2.png', 'monstera_alsosml_2.png'),
(9, 'Monstera Deliciosa Cutting', 6.99, 1, 'Monstera', '2025-11-05 04:30:09', '2025-11-05 04:30:09', 'Two leaves top cutting with medium size leaves.', 'monstera_delicut_thumb.jpg', 'monstera_delicut_1.jpg'),
(10, 'Monstera Deliciosa Cutting', 10.99, 1, 'Monstera', '2025-11-05 04:32:05', '2025-11-05 04:32:05', '3-leaves top cut with fresh root.', 'monstera_delicut_thumb.png', 'monstera_delicut_2.png,monstera_delicut_21.png'),
(11, 'Pre-owned Clay Pot (M)', 6.99, 3, 'Accessories', '2025-11-05 04:34:03', '2025-11-05 04:34:03', 'Pre-owned medium sized clay pot with white decorations.', 'claypot_md_thumb.jpg', 'claypot_md_1.jpg'),
(12, 'Pre-owned Clay Pot (S)', 3.99, 5, 'Accessories', '2025-11-05 04:35:14', '2025-11-05 04:35:14', 'Pre-owned clay planter in small size.', 'claypot_sml_thumb.jpg', 'claypot_sml_1.jpg'),
(17, 'Monstera Obliqua', 15.00, 3, 'Monstera', '2025-12-02 22:52:13', '2025-12-02 22:52:13', 'Monstera obliqua is a rare, tropical vine known for its extremely delicate and holey leaves, which are often mistaken for other Swiss Cheese plants like Monstera adansonii. The plant is highly prized by collectors for its lacy, fenestrated foliage, where the holes can make up as much as 90 percent of the leaf in mature Peruvian varieties.', 'monstera_obliqua_thumb.png', 'monstera_obliqua_1.png,monstera_obliqua_2.png');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
