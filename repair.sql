-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2017 at 12:47 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `repair`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` int(11) NOT NULL,
  `content` longtext,
  `created_at` varchar(45) DEFAULT NULL,
  `updated_at` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `content`, `created_at`, `updated_at`) VALUES
(1, '<div>\r\n<h5>smart services</h5>\r\n<div class=\"description\">Puls (formerly CellSavers.com) connects consumers with expert technicians for rapid-response repairs and on-the-spot support for the devices at the heart of digital life. Puls&rsquo; proprietary software, 24/7 customer service, and 1000-strong professional network ensure an instant customer-technician match and a 60-minute arrival time for most appointments.</div>\r\n</div>\r\n<div>\r\n<h5>driving forward</h5>\r\n<div class=\"description\">Puls has expanded to meet growing demand, serving over 100,000 customers in more than 40 US DMAs since 2015, with services from cell phone repair to tv installation and smart home setup. Puls is headquartered in San Francisco, with offices in San Diego and Tel Aviv, and is backed by top tier global investors and partnerships.</div>\r\n</div>', NULL, '2017-11-09 22:22:57');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `blog_name` varchar(45) DEFAULT NULL,
  `blog_content` longtext,
  `blog_image` varchar(45) DEFAULT NULL,
  `created_at` varchar(45) DEFAULT NULL,
  `updated_at` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `blog_name`, `blog_content`, `blog_image`, `created_at`, `updated_at`) VALUES
(2, 'Blog 1', '<p>asdas asdas d adas dasd asd asd asdasas das das das dasdasdasdasdasdasdas a asdas dasd as dad asd asd asdas ad asd asd as dasd asdasd asd&nbsp;</p>', '1510186279.jpg', '2017-11-09 00:11:19', '2017-11-09 00:14:02'),
(3, '2017s Best Cellphone Repair Company', '<p>It&rsquo;s probably a safe assumption that pretty much everyone would <em>like</em> to have wireless phone charging. After all, who likes a cable? They get in the way and cramp your style. In fact, there&rsquo;s an entire service devoted to organizing cables so that people can pretend they don&rsquo;t exist.</p>\r\n<p>But instead of pretending that cables don&rsquo;t exist, what if we simply got rid of them entirely?</p>\r\n<p>Contrary to popular belief, wireless charging doesn&rsquo;t belong to the mobile elites, chatting away smugly on their spanking new flagship models. And though the technology has been around for a little while, Apple has effectively cemented wireless charging&rsquo;s new mainstream status with its<a href=\"http://fortune.com/2017/10/25/apple-powerbyproxi-acquisition/\"> latest acquisition </a>of New Zealand company PowerbyProxi.</p>\r\n<h2><img class=\"alignnone size-full wp-image-1152\" src=\"https://puls.com/blog/wp-content/uploads/2017/11/10728457974_5e6fba270e_o.jpg\" sizes=\"(max-width: 900px) 100vw, 900px\" srcset=\"https://puls.com/blog/wp-content/uploads/2017/11/10728457974_5e6fba270e_o.jpg 900w, https://puls.com/blog/wp-content/uploads/2017/11/10728457974_5e6fba270e_o-300x200.jpg 300w, https://puls.com/blog/wp-content/uploads/2017/11/10728457974_5e6fba270e_o-768x513.jpg 768w\" alt=\"wireless phone on wireless charger\" width=\"900\" height=\"601\" /></h2>\r\n<h2><strong>Power to the people</strong></h2>\r\n<p>Pretty much anyone can convert their phone to wireless charging capability.</p>\r\n<p>This is good news for those of us who don&rsquo;t love texting while tethered to the wall via a short three-foot cable. (Note: while you won&rsquo;t be connected to the wall via a cable, your phone will stop charging each time you pick it up off the charging pad to text, and will resume charging when you put it down again.)</p>\r\n<p>And while other major producers like Samsung, Motorola, and others have embraced wireless charging in their flagship models on down, Apple&rsquo;s entry into the arena means that the feature will likely be ubiquitous in the near future.</p>\r\n<p>Here&rsquo;s a picture of the wireless charging landscape as it stands, and a guide to get you started on your new, wireless way of life.</p>\r\n<p>&nbsp;</p>\r\n<h2><strong>What is wireless charging and how does it work?</strong></h2>\r\n<p>There are two components to wireless charging: the charger and the receiver. Many (<em>but by no means all</em>) new phones come with wireless charging receivers built in. But pretty much any phone can be adapted for wireless charging by sticking an adhesive patch on the back of the device. It&rsquo;s not the most elegant solution, but it works. Also, there are cases for many phones with the wireless adapter built in, so you&rsquo;ve got options.</p>\r\n<div id=\"attachment_1154\" class=\"wp-caption alignnone\"><img class=\"size-full wp-image-1154\" src=\"https://puls.com/blog/wp-content/uploads/2017/11/ef7ebfa9-b828-4f7e-a776-8f681342eea9-e1510134699669.jpg\" alt=\"Samsung phone and wireless charging dock\" width=\"900\" height=\"600\" />\r\n<p class=\"wp-caption-text\">Samsung wireless charging station. Credit: Samsung</p>\r\n</div>\r\n<p>To charge the phone, simply place it on top of a charging pad. The wireless part is technically true, but the charge doesn&rsquo;t transfer if there&rsquo;s any distance between the phone and the charger.</p>\r\n<p>Fortunately, a range of companies are coming out with some pretty nifty charging stations, and <a href=\"http://www.ikea.com/us/en/catalog/categories/departments/wireless_charging/30611/\">IKEA even has a whole product line</a> dedicated to wireless charging.</p>\r\n<h2>&nbsp;</h2>\r\n<h2>&nbsp;</h2>\r\n<h2><strong>Is there a standard wireless charging platform?</strong></h2>\r\n<p>Right now, the most popular is called Qi, and it&rsquo;s used on phones from Samsung, to Google, to Nokia. Apple has included wireless charging as a feature on the iPhone 8 and above, and these devices utilize Qi, but it&rsquo;s unclear whether Apple is going to head in a new direction with PowerbyProxi. There&rsquo;s a good chance the company will introduce its own higher standard, which will drive incentive for other companies to up their standards as well.</p>\r\n<div id=\"attachment_1153\" class=\"wp-caption alignnone\"><img class=\"wp-image-1153 size-full\" src=\"https://puls.com/blog/wp-content/uploads/2017/11/apple-airpower.png\" sizes=\"(max-width: 770px) 100vw, 770px\" srcset=\"https://puls.com/blog/wp-content/uploads/2017/11/apple-airpower.png 770w, https://puls.com/blog/wp-content/uploads/2017/11/apple-airpower-300x268.png 300w, https://puls.com/blog/wp-content/uploads/2017/11/apple-airpower-768x687.png 768w\" alt=\"\" width=\"770\" height=\"689\" />\r\n<p class=\"wp-caption-text\">Apple AirPower. Credit: Apple</p>\r\n</div>\r\n<p>Apple has also announced the AirPower, a new wireless charging pad that it plans to introduce into the market next year.</p>\r\n<p>&nbsp;</p>\r\n<h2><strong>Is my phone capable of pairing with a wireless adapter kit?</strong></h2>\r\n<p>Yes, pretty much all phones these days can be adapted to wireless charging. Most commonly found are adapters compatible with USB C ports, but you can find universal adapters that will connect to your micro-USB port or Lightning port.</p>\r\n<p>While all of the above will work with standard wireless charging pads, it should be noted that there is also a new <a href=\"http://bgr.com/2017/10/26/iphone-8-plus-wireless-charger-amazon-best/\">7.5 watt super-fast charger,</a> which is 50% faster than the regular 3.5 &ndash; 5 watt chargers.</p>\r\n<p>Most iPhones are not yet compatible with this speed but will be upon the release of an upcoming version of iOS 11.</p>\r\n<p>&nbsp;</p>\r\n<h2><strong>What does it cost?</strong></h2>\r\n<p>Despite the indisputable cool factor, adapting your phone to charge wirelessly is surprisingly affordable. Phone adapters cost between $10 &ndash; $20, and charging pads start around $10 and can go up to $50 or more, though the vast majority top out at around $25.</p>\r\n<p>In terms of bang for your buck, it seems a no-brainer. For both good looks and ease of use, it makes sense to invest in a kit &ndash; for the price of two matinee movie tickets, you can free yourself from that electronic leash forever. And besides, you didn&rsquo;t really need to see that Tyler Perry Halloween movie anyway.</p>', '1510266157.png', '2017-11-09 22:22:37', '2017-11-09 22:22:37');

-- --------------------------------------------------------

--
-- Table structure for table `codes`
--

CREATE TABLE `codes` (
  `id` int(11) NOT NULL,
  `type` varchar(45) DEFAULT NULL,
  `package_id` int(11) DEFAULT NULL,
  `code` varchar(45) DEFAULT NULL,
  `created_at` varchar(45) DEFAULT NULL,
  `updated_at` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `codes`
--

INSERT INTO `codes` (`id`, `type`, `package_id`, `code`, `created_at`, `updated_at`) VALUES
(23, 'package', 1, 'code1', '2017-11-08 23:09:18', '2017-11-08 23:09:18'),
(24, 'package', 1, 'code 2', '2017-11-08 23:09:18', '2017-11-08 23:09:18'),
(25, 'package', 1, 'code 3', '2017-11-08 23:09:18', '2017-11-08 23:09:18'),
(26, 'package', 2, '123', '2017-11-08 23:09:48', '2017-11-08 23:09:48'),
(27, 'package', 2, '123', '2017-11-08 23:09:48', '2017-11-08 23:09:48'),
(28, 'package', 2, '222', '2017-11-08 23:09:48', '2017-11-08 23:09:48'),
(29, 'package', 3, 'NEWBIE', '2017-11-09 22:17:31', '2017-11-09 22:17:31'),
(31, 'package', 5, 'NEWBIE', '2017-11-09 22:19:20', '2017-11-09 22:19:20'),
(34, 'package', 4, 'NEWBIE', '2017-11-09 23:09:39', '2017-11-09 23:09:39');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 2),
(3, '2017_11_07_181539_create_setting_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `modules`
--

CREATE TABLE `modules` (
  `id` int(11) NOT NULL,
  `service_id` int(11) DEFAULT NULL,
  `module_title` varchar(45) DEFAULT NULL,
  `module_description` longtext,
  `sort_id` int(11) DEFAULT NULL,
  `select_type` varchar(45) NOT NULL,
  `created_at` varchar(45) NOT NULL,
  `updated_at` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `module_options`
--

CREATE TABLE `module_options` (
  `id` int(11) NOT NULL,
  `title` varchar(45) DEFAULT NULL,
  `image` varchar(45) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `cost` varchar(45) DEFAULT NULL,
  `module_id` int(11) NOT NULL,
  `created_at` varchar(45) NOT NULL,
  `updated_at` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `offerings`
--

CREATE TABLE `offerings` (
  `id` int(11) NOT NULL,
  `offering` varchar(45) DEFAULT NULL,
  `package_id` int(11) DEFAULT NULL,
  `created_at` varchar(45) DEFAULT NULL,
  `updated_at` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `offerings`
--

INSERT INTO `offerings` (`id`, `offering`, `package_id`, `created_at`, `updated_at`) VALUES
(33, 'offering 1', 1, '2017-11-08 23:09:18', '2017-11-08 23:09:18'),
(34, 'offering 2', 1, '2017-11-08 23:09:18', '2017-11-08 23:09:18'),
(35, '2 2 2', 2, '2017-11-08 23:09:48', '2017-11-08 23:09:48'),
(36, '3  3 3', 2, '2017-11-08 23:09:48', '2017-11-08 23:09:48'),
(37, '4 4 4', 2, '2017-11-08 23:09:48', '2017-11-08 23:09:48'),
(38, 'Free Service', 3, '2017-11-09 22:17:31', '2017-11-09 22:17:31'),
(41, 'Free Checkup', 5, '2017-11-09 22:19:19', '2017-11-09 22:19:19'),
(42, 'Screen Removal', 5, '2017-11-09 22:19:20', '2017-11-09 22:19:20'),
(43, 'Installing Battery', 5, '2017-11-09 22:19:20', '2017-11-09 22:19:20'),
(44, 'Provide New Battery', 5, '2017-11-09 22:19:20', '2017-11-09 22:19:20'),
(45, 'Provide New Screens', 5, '2017-11-09 22:19:20', '2017-11-09 22:19:20'),
(47, 'Testing', 4, '2017-11-09 23:09:39', '2017-11-09 23:09:39'),
(48, 'Testing', 4, '2017-11-09 23:09:39', '2017-11-09 23:09:39'),
(49, 'Testing', 4, '2017-11-09 23:09:39', '2017-11-09 23:09:39');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pricings`
--

CREATE TABLE `pricings` (
  `id` int(11) NOT NULL,
  `package_name` varchar(45) DEFAULT NULL,
  `package_price` varchar(45) DEFAULT NULL,
  `discount` varchar(45) DEFAULT NULL,
  `created_at` varchar(45) DEFAULT NULL,
  `updated_at` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pricings`
--

INSERT INTO `pricings` (`id`, `package_name`, `package_price`, `discount`, `created_at`, `updated_at`) VALUES
(1, 'Package 1', '1231231', '22', '2017-11-08 20:59:53', '2017-11-08 23:02:26'),
(2, 'Package 2', '123123', '222', '2017-11-08 22:23:27', '2017-11-08 23:09:48'),
(3, 'Phone Repair', '100', '10', '2017-11-09 22:17:31', '2017-11-09 22:17:31'),
(4, 'Mounting', '250', '25', '2017-11-09 22:18:24', '2017-11-09 22:18:24'),
(5, 'Phone Repair', '110', '10', '2017-11-09 22:19:19', '2017-11-09 22:19:19');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `service_name` varchar(45) DEFAULT NULL,
  `service_about` longtext,
  `service_image` varchar(45) DEFAULT NULL,
  `created_at` varchar(45) DEFAULT NULL,
  `updated_at` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `service_name`, `service_about`, `service_image`, `created_at`, `updated_at`) VALUES
(5, 'Phone Repair', '<h3 class=\"medium\">how it works</h3>\r\n<ul class=\"reasons\">\r\n<li>\r\n<h4 class=\"small\">tell us about your device</h4>\r\n<p>we support Apple, Google and Samsung phones and tablets</p>\r\n</li>\r\n<li>\r\n<h4 class=\"small\">confirm a time and location</h4>\r\n<p>Puls technicians meet you same day, wherever you may be</p>\r\n</li>\r\n<li>\r\n<h4 class=\"small\">get on with your day</h4>\r\n<p>we supply the parts and skills. no need to ship your device, drive to a store or wait in line</p>\r\n</li>\r\n</ul>', '1510265751.png', '2017-11-09 22:15:51', '2017-11-09 22:15:51'),
(6, 'Mounting', '<h3 class=\"medium\">how it works</h3>\r\n<ul class=\"reasons\">\r\n<li>\r\n<h4 class=\"small\">online booking</h4>\r\n<p>book a same-day appointment in seconds</p>\r\n</li>\r\n<li>\r\n<h4 class=\"small\">professional installation</h4>\r\n<p>an expert technician arrives to mount your tv. work and materials guaranteed.</p>\r\n</li>\r\n<li>\r\n<h4 class=\"small\">safe payment</h4>\r\n<p>get a quote in seconds. pay us only after the job is done.</p>\r\n</li>\r\n</ul>', '1510265796.png', '2017-11-09 22:16:36', '2017-11-09 22:16:36');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `google` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `map_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `company_name`, `company_address`, `company_email`, `company_mobile`, `facebook`, `twitter`, `google`, `logo`, `map_url`, `created_at`, `updated_at`) VALUES
(1, 'Apple FIX NYC', '<p>asdasdasdasdasdasd</p>', 'ada@asd.com', '1231231', 'sadasd', 'asdsd', 'dsadas', '1510087289.jpg', 'asd', NULL, '2017-11-12 18:44:06');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@admin.com', '$2y$10$mScJTOBk7NGYXpL0GwYlPOF4dnOxo3bjS9IQNr2NVPf4EQodgE9nu', '0SJe5ieSCuKrje57IJIIPzfl0ZnwEWP5CaNhbcjZIaYMKT4OvG6Mitakk5Eb', '2017-11-06 16:17:06', '2017-11-06 16:17:06');

-- --------------------------------------------------------

--
-- Table structure for table `works`
--

CREATE TABLE `works` (
  `id` int(11) NOT NULL,
  `content` longtext,
  `created_at` varchar(45) DEFAULT NULL,
  `updated_at` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `works`
--

INSERT INTO `works` (`id`, `content`, `created_at`, `updated_at`) VALUES
(1, '<p>afsdfsdfsdfsfsdf</p>', NULL, '2017-11-08 23:31:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `codes`
--
ALTER TABLE `codes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `modules`
--
ALTER TABLE `modules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `module_options`
--
ALTER TABLE `module_options`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offerings`
--
ALTER TABLE `offerings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pricings`
--
ALTER TABLE `pricings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `works`
--
ALTER TABLE `works`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `codes`
--
ALTER TABLE `codes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `modules`
--
ALTER TABLE `modules`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `module_options`
--
ALTER TABLE `module_options`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `offerings`
--
ALTER TABLE `offerings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `pricings`
--
ALTER TABLE `pricings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `works`
--
ALTER TABLE `works`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
