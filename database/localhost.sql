-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 22, 2020 at 11:17 AM
-- Server version: 5.6.49-cll-lve
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newsource`
--
CREATE DATABASE IF NOT EXISTS `newsource` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `newsource`;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `category` varchar(255) NOT NULL,
  `mrp` int(11) NOT NULL,
  `oldmrp` int(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `dimensions` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `short_desc` text NOT NULL,
  `meta_tittle` text NOT NULL,
  `meta_desc` varchar(2000) NOT NULL,
  `meta_keyword` varchar(255) NOT NULL,
  `trending` tinyint(4) NOT NULL DEFAULT '0',
  `dealoftheday` smallint(6) NOT NULL DEFAULT '0',
  `topviewed` tinyint(4) NOT NULL DEFAULT '0',
  `sale` tinyint(11) NOT NULL DEFAULT '0',
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `category`, `mrp`, `oldmrp`, `img`, `dimensions`, `description`, `short_desc`, `meta_tittle`, `meta_desc`, `meta_keyword`, `trending`, `dealoftheday`, `topviewed`, `sale`, `timestamp`) VALUES
(5, 'Yume King Size Bed with Storage ', 'bed', 34999, 38999, 'bed8', ' H 39 x W 75 x D 86', 'Mintwud is a classic amalgamation of form and function. Crafted for compact homes, the range is clean and convenient and has an understated design aesthetic that adapts to any space.\r\n\r\nModern is a distinct, defined style which originated in the early 1900s. It uses a combination of vinyl, steel, plastic, glass or wood having monochromatic colors and sleek silhouettes. Modern furniture lives at the intersection of clean lines and relaxed comfort accentuating form and function.', 'Mintwud is a classic amalgamation of form and function. Crafted for compact homes.', '', '', '', 0, 0, 1, 0, '2020-09-28 22:57:30'),
(6, 'Yuuna King Size Bed with Storage', 'bed', 25999, 27999, 'bed13', 'H 36 x W 86 x D 75; Seating Height - 10.1; Mattress size - 72 x 78 (Not included)', 'Modern is a distinct, defined style which originated in the early 1900s. It uses a combination of vinyl, steel, plastic, glass or wood having monochromatic colors and sleek silhouettes. Modern furniture lives at the intersection of clean lines and relaxed comfort accentuating form and function.', 'Mintwud is a classic amalgamation of form and function. Crafted for compact homes, the range is clean and convenient and has an understated design aesthetic that adapts to any space.', '', '', '', 1, 0, 0, 0, '2020-09-28 23:00:20'),
(9, 'Hoshi Queen Size Bed With Storage', 'bed', 28999, 32000, 'bed12', 'H 38 x W 62 x D 88(all dimensions are in inches)', 'Modern is a distinct, defined style which originated in the early 1900s. It uses a combination of vinyl, steel, plastic, glass or wood having monochromatic colors and sleek silhouettes. Modern furniture lives at the intersection of clean lines and relaxed comfort accentuating form and function.', 'Mintwud is a classic amalgamation of form and function. Crafted for compact homes, the range is clean and convenient and has an understated design aesthetic that adapts to any space.', '', '', '', 1, 0, 0, 0, '2020-09-28 23:26:38'),
(10, 'Yeeni straight Zyro', 'bed', 39999, 50000, 'bed11', '(78*60inch) / (1.98m*1.52m)', 'Andromeda Storage Sheesham Wood Bed', 'Andromeda Storage Sheesham Wood Bed', '', '', '0', 1, 0, 0, 0, '2020-09-29 03:14:52'),
(11, 'Melisandre Low Floor Double Bed ', 'bed', 27999, 32000, 'bed10', '84 L x 82 W x 28 H', '1. Melisandre is an epitome of a modern furniture unit design. It is a low-height bed with a slanted backrest. The backrest is in lighter finish and it has a strip on it in darker finish. The base is also coated in dual finish.\r\n2. This furniture unit is made in sheesham wood.\r\n?3. With this, there are three finish options of honey, teak and walnut to choose from.', 'Melisandre is an epitome of a modern furniture unit design. It is a low-height bed with a slanted backrest. ', '', '', '', 1, 0, 0, 0, '2020-09-29 03:28:22'),
(12, 'Sentosa Box Storage Platform Bed ', 'bed', 29999, 36000, 'bed9', '848.0 x 2129.0 x 2380.0 mm', 'Hoarding encouraged. The Sentosa storage bed is every hoarder’s dream. The capacious headboard storage is perfect for things you want out of sight. The shelves cleverly tucked away into the headboard make room for your nighttime essentials. The ledges along the side are perfect for glasses, books, and what-have-you!', 'Sentosa Box Storage Platform Bed (Solid Wood) (Two-Tone Finish, King Bed Size, Box Storage Type)', '', '', '', 0, 0, 0, 0, '2020-09-29 03:34:19'),
(24, 'Jeray Zyro Bed 2', 'bed', 44000, 55999, 'bed7', '', '', '', '', '', '', 1, 0, 0, 0, '2020-09-29 15:30:45'),
(25, 'Platinum Zyro Series 4', 'bed', 39999, 45000, 'bed6', '', 'The artful wave of this platform bed makes it as unique as it is contemporary. The gradual curve of the headboard makes it a great option for those who like to lounge in bed.', '', '', '', '', 1, 0, 0, 0, '2020-09-29 15:33:55'),
(26, 'KEITH LUXURIOUS BED', 'bed', 35999, 40999, 'bed5', '132\"x86\" Ht.55\"', 'Transform your bedroom into a high end, glamorous boudoir with this designer bed. Completely upholstered in fabric, the design influences sophistication, charisma and luxury. Made with wood, fabric & steel in gold finish, this luxury modern furniture combines fashion with furniture.', 'Transform your bedroom into a high end, glamorous boudoir with this designer bed. ', '', '', '', 1, 1, 0, 0, '2020-09-29 15:39:13'),
(27, 'Abstract Zyro 5', 'bed', 27999, 33999, 'bed4', '', 'An exclusive pick, this bed reflects extravagance and style. The entire frame is made of lacquered wood with steel inlay contrasting gorgeously with the faux leather headboard. Abstrast features a hydraulic storage.\r\n', 'An exclusive pick, this bed reflects extravagance and style. ', '', '', '', 1, 0, 0, 0, '2020-09-29 15:41:44'),
(28, 'Abstract Zyro 8', 'bed', 27999, 32000, 'bed3', '', 'An exclusive pick, this bed reflects extravagance and style. The entire frame is made of lacquered wood with steel inlay contrasting gorgeously with the faux leather headboard. Abstrast features a hydraulic storage.\r\n', 'An exclusive pick, this bed reflects extravagance and style. ', '', '', '', 0, 0, 0, 1, '2020-09-29 15:44:03'),
(29, 'Abstract Zyro New-9', 'bed', 32999, 35999, 'bed2', '', '', '', '', '', '', 0, 0, 0, 1, '2020-09-29 15:46:24'),
(30, 'Abstract Zyro 1', 'bed', 35999, 38999, 'bed1', '', '', '', '', '', '', 0, 0, 1, 0, '2020-09-29 15:47:24'),
(31, 'Wilma Dressing Unit In Light Honey and Walnut Finish', 'dressing', 8499, 12000, 'dressing7', 'H 72.4 x W 32.2 x D 18\r\n(all dimensions in inches)', 'eachtree is a world class brand of furniture and accessories, born from a confluence of strong design aesthetics, product innovation, craftsmanship and international furniture expertise. With focus on creating furniture and accessories that are modern and contemporary in design\r\n\r\nADressing Unit is a piece of furniture that combines vanity storage and dressing mirror in one unit.', 'Peachtree is a world class brand of furniture and accessories, born from a confluence of strong design aesthetics, product innovation, craftsmanship and international furniture expertise. ', '', '', '', 0, 0, 1, 0, '2020-10-05 21:18:09'),
(32, 'Yamato Dressing Table with Stool in Columbia Walnut Finish', 'dressing', 8999, 11000, 'dressing6', 'H 70.5 x W 47.2 x D 15.7; Seating Height-21.5\r\n(all dimensions in inches)', 'Mintwud is a classic amalgamation of form and function. Crafted for compact homes, the range is clean and convenient and has an understated design aesthetic that adapts to any space.\r\n\r\nADresseris a dressing table that has chest of drawers as the base and usually a mirror on the top.', 'Mintwud is a classic amalgamation of form and function. Crafted for compact homes, the range is clean and convenient and has an understated design aesthetic that adapts to any space.\r\n\r\n', '', '', '', 1, 0, 0, 1, '2020-10-05 21:20:26'),
(33, 'Rubix Dresser with Mirror in Walnut Finish', 'dressing', 8499, 9999, 'dressing8', 'H 67.3 x W 27.6 x D 16.9 (all dimension in Inches)', '@home - is a perfect one-stop solution store for home planning with finest quality furniture, soft furnishings & home accessories that helps make life beautiful. The designs at @home are contemporary yet practical, reflecting Indian tastes & requirements.\r\n\r\nADresseris a dressing table that has chest of drawers as the base and usually a mirror on the top.', '@home - is a perfect one-stop solution store for home planning with finest quality furniture, soft furnishings & home accessories that helps make life beautiful.', '', '', '', 1, 0, 0, 0, '2020-10-05 21:23:03'),
(34, 'Amelia Dressing Unit in Brown Colour', 'dressing', 11999, 14000, 'dressing9', 'H 75 x W 33 x D 16\r\n(all dimensions in inches)', 'Post-delivery Hometown will connect with you and assemble the product within 72 hrs.In case of any further queries please connect on below co-ordinates: Care@hometown.in and 18002100004\r\n\r\nHometown is one stop destination for all the latest and trendy furniture. All Hometown products are designed and developed with you in mind, and have gone through rigorous quality inspection and conform to the best quality standards in the industry.\r\n\r\nA??Dressing Unit is a piece of furniture that combines vanity storage and dressing mirror in one unit.', 'Hometown is one stop destination for all the latest and trendy furniture. All Hometown products are designed and developed with you in mind, and have gone through rigorous quality inspection and conform to the best quality standards in the industry.', '', '', '', 1, 0, 0, 0, '2020-10-05 21:25:55'),
(35, 'Alto Zyro Dressing', 'dressing', 12999, 15000, 'dressing1', '', '', '', '', '', '', 1, 0, 0, 0, '2020-10-05 21:33:22'),
(36, 'Alto Zyro 4 Dressing', 'dressing', 24999, 28000, 'dressing2', '', '', '', '', '', '', 1, 0, 0, 0, '2020-10-05 21:34:17'),
(37, 'Alto Zyro 3 Dressing', 'dressing', 12999, 14000, 'dressing4', '', '', '', '', '', '', 1, 0, 0, 0, '2020-10-05 21:36:51'),
(38, 'Alto Zyro 5 Dressing', 'dressing', 12999, 15000, 'dressing3', '', '', '', '', '', '', 1, 0, 0, 0, '2020-10-05 21:36:51'),
(39, 'Alto Zyro 11 dressing', 'dressing', 10000, 12999, 'dressing5', '', '', '', '', '', '', 1, 0, 0, 0, '2020-10-05 21:38:18'),
(43, 'Avery L Sofaset', 'sofa', 29999, 33999, 'sofa1', 'As per shown in the image.', 'The Avery L-shaped Corner Lounge is a vibrant touch to the classic Modular Lounge Suites. Its bold lines and sleek corner edges are sure to be eye-catching at your next home gathering!', 'The Avery L-shaped Corner Lounge is a vibrant touch to the classic Modular Lounge Suites.', '', '', '', 1, 0, 0, 0, '2020-10-09 13:47:50'),
(44, 'Lumere - L', 'sofa', 32000, 38000, 'sofa2', 'As per shown in image.', 'The Lumere Sofa Lounge settings have been an almost revolutionary concept in indoor living, excellent for both the family and entertainment. It offer comfort and space and its armrests are specially designed for books and magazine storage. It is available in a choice of two colours and you can customize it to suit the size of your living room.', 'The Lumere Sofa Lounge settings have been an almost revolutionary concept in indoor living, excellent for both the family and entertainment.', '', '', '', 1, 0, 0, 0, '2020-10-09 13:59:52'),
(45, 'Envie Sofaset', 'sofa', 28999, 37999, 'sofa3', 'A per shown in image.', 'The Envie Leather sofa is sure to be the envy of the neighbourhood! This modern and bold lounge suite has adjustable head rests, a unique side table with lighting, and integrated bookshelf/drawer in the arm rests. It has a beautiful two tone design that will add vibrancy to your home.', 'The Envie Leather sofa is sure to be the envy of the neighbourhood!', '', '', '', 1, 0, 0, 0, '2020-10-09 14:07:03'),
(46, 'Beatix L', 'sofa', 34000, 37000, 'sofa4', 'A per shown in image.', 'The Beatrix L-shaped Corner Lounge offers a unique shape and design to your living area. The sofa’s bold curves and leather contrast makes it the ideal sofa to modernize your space. Naturally, the lounge suite will add style and class to your living area with it\'s upgraded features .', 'The Beatrix L-shaped Corner Lounge offers a unique shape and design to your living area. ', '', '', '', 1, 0, 0, 0, '2020-10-09 14:16:44'),
(47, 'Indivi L', 'sofa', 40000, 51000, 'sofa10', 'A per shown in image.', 'The Indivi sofa features bold, curved design and beautiful rich tone colour contrast. It has seat rests that sit in the side arms when not in use.\r\n', 'The Indivi sofa features bold, curved design and beautiful rich tone colour contrast. ', '', '', '', 1, 0, 0, 0, '2020-10-09 14:20:54'),
(48, 'Nexus - 3sC', 'sofa', 35000, 39000, 'sofa5', 'A per shown in image.', 'The Nexus Lounge Set is finely designed with slim stripes and has a spacious layout to suit the modern family. Storage is built like a wave into the sofa, increasing space in your living roomy. Headrests are adjustable to fulfil any need.\r\n\r\nIf you are looking to make the perfect living room, look no further than the Nexus.  ', 'If you are looking to make the perfect living room, look no further than the Nexus.  ', '', '', '', 1, 0, 0, 0, '2020-10-09 14:28:28'),
(49, 'Ikari - L ', 'sofa', 29999, 34000, 'sofa6', 'A per shown in image.', 'The Ikari L-shaped Corner Lounge is perfect for the stylish minimalist. It is uniquely designed with two toned colours, designer armrests, and adjustable headrests. Sure to bring comfort and beauty to your living space with no frills!', 'The Ikari L-shaped Corner Lounge is perfect for the stylish minimalist.', '', '', '', 1, 0, 0, 0, '2020-10-09 14:37:27'),
(50, 'Umbra - L', 'sofa', 30999, 36000, 'sofa7', 'A per shown in image.', 'The Umbra L sofa challenges conventional designs with its bold curved features and rich tone colour contrast, making it the perfect lounge suite to modernise your home. It has a rounded corner piece, with striped seats and backrests.\r\n\r\n', 'The Umbra L Leather sofa challenges conventional designs with its bold curved features and rich tone leather colour contrast, making it the perfect lounge suite to modernise your home.', '', '', '', 1, 0, 0, 0, '2020-10-09 14:41:24'),
(51, 'Gainsworth - L', 'sofa', 31999, 37999, 'sofa9', 'A per shown in image.', 'Challenge conventional design with the Gainsworth L-shaped Corner Lounge! It has bold edges and built-in side table with book storage capacity adds elegance and class to your living area. ', 'Challenge conventional design with the Gainsworth L-shaped Corner Lounge! ', '', '', '', 0, 0, 0, 0, '2020-10-09 14:45:55'),
(52, 'Tessie - L ', 'sofa', 38000, 46000, 'sofa11', 'A per shown in image.', 'The Tessie L sofa offers a modern classic design, with its contrasting  colours and bold features. Additional features abound, including designer armrests with moonlight and adjustable headrests.', 'The Tessie L sofa offers a modern classic design, with its contrasting  colours and bold features. ', '', '', '', 0, 0, 0, 0, '2020-10-09 14:49:23'),
(53, 'Wiggum Corner Lounge', 'sofa', 34999, 40000, 'sofa12', 'A per shown in image.', 'The Wiggum sofa is perfect for those looking for a modern sofa with premium features. It is slim design and with a two tone colour choice, with both adjustable headrest for extra comfort on each end for those to spend hours resting on. \r\n', 'The Wiggum sofa is perfect for those looking for a modern sofa with premium features.', '', '', '', 0, 0, 0, 0, '2020-10-09 14:52:30'),
(54, 'Eden Leather Sofa Lounge Set', 'sofa', 39999, 39999, 'sofa8', 'A per shown in image.', 'The Eden sofa is perfect for the minimalist who still wants to make a bold statement. It is sleek and curved with rich tone colour contrast, which is one of the most popular designs across Europe.', 'The Eden  sofa is perfect for the minimalist who still wants to make a bold statement.', '', '', '', 0, 0, 0, 1, '2020-10-09 14:56:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `products` ADD FULLTEXT KEY `name` (`name`,`description`,`short_desc`);
ALTER TABLE `products` ADD FULLTEXT KEY `name_2` (`name`,`description`,`short_desc`);
ALTER TABLE `products` ADD FULLTEXT KEY `name_3` (`name`,`description`,`short_desc`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
