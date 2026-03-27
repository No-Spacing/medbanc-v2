-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2025 at 10:17 AM
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
-- Database: `medbanc_dev`
--

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` longtext NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `image`, `product_id`, `created_at`, `updated_at`) VALUES
(1, 'images/products/medical-equipment/im50.png', 1, '2025-04-29 23:00:13', NULL),
(2, 'images/products/medical-equipment/im50-1.png', 1, '2025-04-29 23:00:13', NULL),
(3, 'images/products/medical-equipment/im50-2.png', 1, '2025-04-29 23:00:13', NULL),
(4, 'images/products/medical-equipment/im50-3.png', 1, '2025-04-29 23:00:13', NULL),
(5, 'images/products/medical-equipment/im50-4.png', 1, '2025-04-29 23:00:13', NULL),
(6, 'images/products/medical-equipment/im50-5.png', 1, '2025-04-29 23:00:13', NULL),
(7, 'images/products/medical-equipment/se12.png', 2, '2025-04-29 23:00:13', NULL),
(8, 'images/products/medical-equipment/se12-1.png', 2, '2025-04-29 23:00:13', NULL),
(9, 'images/products/medical-equipment/se12-2.png', 2, '2025-04-29 23:00:13', NULL),
(10, 'images/products/medical-equipment/se12-3.png', 2, '2025-04-29 23:00:13', NULL),
(11, 'images/products/medical-equipment/EdanECGse1515.png', 3, '2025-04-29 23:00:13', NULL),
(12, 'images/products/medical-equipment/EdanECGse1515-1.png', 3, '2025-04-29 23:00:13', NULL),
(13, 'images/products/medical-equipment/EdanECGse1515-2.png', 3, '2025-04-29 23:00:13', NULL),
(14, 'images/products/medical-equipment/EdanECGse1515-3.png', 3, '2025-04-29 23:00:13', NULL),
(15, 'images/products/medical-equipment/EdanECGse1515-4.png', 3, '2025-04-29 23:00:13', NULL),
(16, 'images/products/medical-equipment/f9.png', 4, '2025-04-29 23:00:13', NULL),
(17, 'images/products/medical-equipment/f9-1.png', 4, '2025-04-29 23:00:13', NULL),
(18, 'images/products/medical-equipment/comendefis8.png', 5, '2025-04-29 23:00:13', NULL),
(19, 'images/products/medical-equipment/comendefis8-1.png', 5, '2025-04-29 23:00:13', NULL),
(20, 'images/products/medical-equipment/comendefis8-2.png', 5, '2025-04-29 23:00:13', NULL),
(21, 'images/products/medical-equipment/comendefis8-3.png', 5, '2025-04-29 23:00:13', NULL),
(22, 'images/products/medical-equipment/t1600.png', 6, '2025-04-29 23:00:13', NULL),
(23, 'images/products/medical-equipment/t1600-1.png', 6, '2025-04-29 23:00:13', NULL),
(24, 'images/products/medical-equipment/t1600-2.png', 6, '2025-04-29 23:00:13', NULL),
(25, 'images/products/medical-equipment/t1600-3.png', 6, '2025-04-29 23:00:13', NULL),
(26, 'images/products/medical-equipment/ti820.png', 7, '2025-04-29 23:00:13', NULL),
(27, 'images/products/medical-equipment/ts900.png', 8, '2025-04-29 23:00:13', NULL),
(28, 'images/products/medical-equipment/t300.png', 9, '2025-04-29 23:00:13', NULL),
(29, 'images/products/medical-equipment/t520.png', 10, '2025-04-29 23:00:13', NULL),
(30, 'images/products/medical-equipment/mdf.png', 11, '2025-04-29 23:00:13', NULL),
(31, 'images/products/medical-equipment/mecart.png', 12, '2025-04-29 23:00:13', NULL),
(32, 'images/products/medical-equipment/ac.png', 13, '2025-04-29 23:00:13', NULL),
(33, 'images/products/medical-equipment/tpc.png', 14, '2025-04-29 23:00:13', NULL),
(34, 'images/products/medical-equipment/ic.png', 15, '2025-04-29 23:00:13', NULL),
(35, 'images/products/medical-equipment/mc.png', 16, '2025-04-29 23:00:13', NULL),
(36, 'images/products/medical-equipment/mtc.png', 17, '2025-04-29 23:00:13', NULL),
(37, 'images/products/medical-equipment/plc.png', 18, '2025-04-29 23:00:13', NULL),
(38, 'images/products/medical-equipment/sonomax9.png', 19, '2025-04-29 23:00:13', NULL),
(39, 'images/products/medical-equipment/sonoair.png', 20, '2025-04-29 23:00:13', NULL),
(40, 'images/products/medical-equipment/sonoeye.png', 21, '2025-04-29 23:00:13', NULL),
(41, 'images/products/medical-equipment/surgisenz150.png', 22, '2025-04-29 23:00:13', NULL),
(42, 'images/products/medical-equipment/surgisenz400.png', 23, '2025-04-29 23:00:13', NULL),
(43, 'images/products/medical-equipment/TMS TI-820 Infusion Pump.png', 7, '2025-04-29 23:04:31', '2025-04-29 23:04:31'),
(44, 'images/products/medical-equipment/TMS TI-820 Infusion Pump (2).png', 7, '2025-04-29 23:05:01', '2025-04-29 23:05:01'),
(45, 'images/products/medical-equipment/TMS TI-820 Infusion Pump (3).png', 7, '2025-04-29 23:05:01', '2025-04-29 23:05:01'),
(46, 'images/products/medical-equipment/TMS TI-820 Infusion Pump (4).png', 7, '2025-04-29 23:05:01', '2025-04-29 23:05:01'),
(47, 'images/products/medical-equipment/TMS TI-820 Infusion Pump (5).png', 7, '2025-04-29 23:05:01', '2025-04-29 23:05:01'),
(48, 'images/products/medical-equipment/TMS Syringe Pump TS900.png', 8, '2025-04-29 23:06:43', '2025-04-29 23:06:43'),
(49, 'images/products/medical-equipment/TMS Syringe Pump TS900 (2).png', 8, '2025-04-29 23:07:04', '2025-04-29 23:07:04'),
(50, 'images/products/medical-equipment/TMS Syringe Pump TS900 (3).png', 8, '2025-04-29 23:07:04', '2025-04-29 23:07:04'),
(51, 'images/products/medical-equipment/TMS Syringe Pump TS900 (4).png', 8, '2025-04-29 23:07:04', '2025-04-29 23:07:04'),
(52, 'images/products/medical-equipment/TMS Syringe Pump TS900 (5).png', 8, '2025-04-29 23:07:04', '2025-04-29 23:07:04'),
(53, 'images/products/medical-equipment/TMS Portable Suction Machine T-300.png', 9, '2025-04-29 23:09:52', '2025-04-29 23:09:52'),
(54, 'images/products/medical-equipment/TMS Portable Suction Machine T-300 (2).png', 9, '2025-04-29 23:10:09', '2025-04-29 23:10:09'),
(55, 'images/products/medical-equipment/TMS Portable Suction Machine T-300 (3).png', 9, '2025-04-29 23:10:09', '2025-04-29 23:10:09'),
(56, 'images/products/medical-equipment/TMS Suction Machine with Stand T-520.png', 10, '2025-04-29 23:11:44', '2025-04-29 23:11:44'),
(57, 'images/products/medical-equipment/TMS Suction Machine with Stand T-520 (2).png', 10, '2025-04-29 23:12:02', '2025-04-29 23:12:02'),
(58, 'images/products/medical-equipment/TMS Suction Machine with Stand T-520 (3).png', 10, '2025-04-29 23:12:02', '2025-04-29 23:12:02'),
(59, 'images/products/medical-equipment/Medbanc Double Face Medication Trolley.png', 11, '2025-04-29 23:14:16', '2025-04-29 23:14:16'),
(60, 'images/products/medical-equipment/Medbanc Double Face Medication Trolley (2).png', 11, '2025-04-29 23:16:36', '2025-04-29 23:16:36'),
(61, 'images/products/medical-equipment/Medbanc Double Face Medication Trolley (3).png', 11, '2025-04-29 23:16:36', '2025-04-29 23:16:36'),
(62, 'images/products/medical-equipment/Medbanc Double Face Medication Trolley (4).png', 11, '2025-04-29 23:16:36', '2025-04-29 23:16:36'),
(63, 'images/products/medical-equipment/Medbanc Double Face Medication Trolley (5).png', 11, '2025-04-29 23:16:36', '2025-04-29 23:16:36'),
(64, 'images/products/medical-equipment/Medbanc Emergency Cart (2).png', 12, '2025-04-29 23:19:25', '2025-04-29 23:19:25'),
(65, 'images/products/medical-equipment/Medbanc Emergency Cart (3).png', 12, '2025-04-29 23:19:25', '2025-04-29 23:19:25'),
(66, 'images/products/medical-equipment/Medbanc Emergency Cart (4).png', 12, '2025-04-29 23:19:25', '2025-04-29 23:19:25'),
(67, 'images/products/medical-equipment/Medbanc Emergency Cart (5).png', 12, '2025-04-29 23:19:25', '2025-04-29 23:19:25'),
(68, 'images/products/medical-equipment/Medbanc Emergency Cart (6).png', 12, '2025-04-29 23:19:25', '2025-04-29 23:19:25'),
(69, 'images/products/medical-equipment/Medbanc Emergency Cart (7).png', 12, '2025-04-29 23:19:25', '2025-04-29 23:19:25'),
(70, 'images/products/medical-equipment/Anesthesia Cart.png', 13, '2025-04-29 23:20:25', '2025-04-29 23:20:25'),
(71, 'images/products/medical-equipment/Anesthesia Cart (2).png', 13, '2025-04-29 23:20:59', '2025-04-29 23:20:59'),
(72, 'images/products/medical-equipment/Anesthesia Cart (3).png', 13, '2025-04-29 23:20:59', '2025-04-29 23:20:59'),
(73, 'images/products/medical-equipment/Anesthesia Cart (4).png', 13, '2025-04-29 23:20:59', '2025-04-29 23:20:59'),
(74, 'images/products/medical-equipment/Anesthesia Cart (5).png', 13, '2025-04-29 23:20:59', '2025-04-29 23:20:59'),
(75, 'images/products/medical-equipment/Anesthesia Cart (6).png', 14, '2025-04-29 23:22:45', '2025-04-29 23:22:45'),
(76, 'images/products/medical-equipment/Anesthesia Cart (7).png', 14, '2025-04-29 23:22:45', '2025-04-29 23:22:45'),
(77, 'images/products/medical-equipment/Anesthesia Cart (8).png', 14, '2025-04-29 23:22:45', '2025-04-29 23:22:45'),
(78, 'images/products/medical-equipment/Anesthesia Cart (9).png', 14, '2025-04-29 23:22:45', '2025-04-29 23:22:45'),
(79, 'images/products/medical-equipment/Anesthesia Cart (10).png', 14, '2025-04-29 23:22:45', '2025-04-29 23:22:45'),
(80, 'images/products/medical-equipment/Isolation Cart.png', 15, '2025-04-29 23:24:04', '2025-04-29 23:24:04'),
(81, 'images/products/medical-equipment/Isolation Cart (2).png', 15, '2025-04-29 23:26:20', '2025-04-29 23:26:20'),
(82, 'images/products/medical-equipment/Isolation Cart (3).png', 15, '2025-04-29 23:26:20', '2025-04-29 23:26:20'),
(83, 'images/products/medical-equipment/Isolation Cart (4).png', 15, '2025-04-29 23:26:20', '2025-04-29 23:26:20'),
(84, 'images/products/medical-equipment/Isolation Cart (5).png', 15, '2025-04-29 23:26:20', '2025-04-29 23:26:20'),
(85, 'images/products/medical-equipment/Isolation Cart (6).png', 15, '2025-04-29 23:26:20', '2025-04-29 23:26:20'),
(86, 'images/products/medical-equipment/Medication Cart.png', 16, '2025-04-29 23:29:20', '2025-04-29 23:29:20'),
(87, 'images/products/medical-equipment/Medication Cart (2).png', 16, '2025-04-29 23:37:09', '2025-04-29 23:37:09'),
(88, 'images/products/medical-equipment/Medication Cart (3).png', 16, '2025-04-29 23:37:09', '2025-04-29 23:37:09'),
(89, 'images/products/medical-equipment/Medication Cart (4).png', 16, '2025-04-29 23:37:09', '2025-04-29 23:37:09'),
(90, 'images/products/medical-equipment/Medical Transport Carts.png', 17, '2025-04-29 23:38:06', '2025-04-29 23:38:06'),
(91, 'images/products/medical-equipment/Medical Transport Carts (2).png', 17, '2025-04-29 23:39:12', '2025-04-29 23:39:12'),
(92, 'images/products/medical-equipment/Medical Transport Carts (3).png', 17, '2025-04-29 23:39:12', '2025-04-29 23:39:12'),
(93, 'images/products/medical-equipment/Medical Transport Carts (4).png', 17, '2025-04-29 23:39:12', '2025-04-29 23:39:12'),
(94, 'images/products/medical-equipment/Proximity Lock Cart.png', 18, '2025-04-29 23:49:04', '2025-04-29 23:49:04'),
(95, 'images/products/medical-equipment/Proximity Lock Cart (4).png', 18, '2025-04-29 23:49:44', '2025-04-29 23:49:44'),
(96, 'images/products/medical-equipment/Proximity Lock Cart (3).png', 18, '2025-04-29 23:49:44', '2025-04-29 23:49:44'),
(97, 'images/products/medical-equipment/Proximity Lock Cart (2).png', 18, '2025-04-29 23:49:44', '2025-04-29 23:49:44'),
(98, 'images/products/medical-equipment/Chison Sonomax 9.png', 19, '2025-04-29 23:55:07', '2025-04-29 23:55:07'),
(99, 'images/products/medical-equipment/Chison Sonomax 9 (2).png', 19, '2025-04-29 23:57:39', '2025-04-29 23:57:39'),
(100, 'images/products/medical-equipment/Chison Sonomax 9 (3).png', 19, '2025-04-29 23:57:39', '2025-04-29 23:57:39'),
(101, 'images/products/medical-equipment/Chison Sonomax 9 (4).png', 19, '2025-04-29 23:57:39', '2025-04-29 23:57:39'),
(102, 'images/products/medical-equipment/Chison Sonoair 70.png', 20, '2025-04-29 23:59:09', '2025-04-29 23:59:09'),
(103, 'images/products/medical-equipment/Chison Sonoair 70 (2).png', 20, '2025-04-30 00:01:07', '2025-04-30 00:01:07'),
(104, 'images/products/medical-equipment/Chison Sonoair 70 (3).png', 20, '2025-04-30 00:01:07', '2025-04-30 00:01:07'),
(105, 'images/products/medical-equipment/Chison Sonoair 70 (4).png', 20, '2025-04-30 00:01:07', '2025-04-30 00:01:07'),
(106, 'images/products/medical-equipment/Chison Sonoair 70 (5).png', 20, '2025-04-30 00:01:07', '2025-04-30 00:01:07'),
(107, 'images/products/medical-equipment/Chison Sonoeye.png', 21, '2025-04-30 00:02:25', '2025-04-30 00:02:25'),
(108, 'images/products/medical-equipment/Chison Sonoeye (2).png', 21, '2025-04-30 00:02:38', '2025-04-30 00:02:38'),
(109, 'images/products/medical-equipment/Chison Sonoeye (3).png', 21, '2025-04-30 00:02:38', '2025-04-30 00:02:38'),
(110, 'images/products/medical-equipment/Chison Sonoeye (4).png', 21, '2025-04-30 00:02:38', '2025-04-30 00:02:38'),
(111, 'images/products/medical-equipment/Surgisenz Pro EU-150 electrosurgical unit.png', 22, '2025-04-30 00:03:25', '2025-04-30 00:03:25'),
(112, 'images/products/medical-equipment/Surgisenz Pro EU-150 electrosurgical unit (2).png', 22, '2025-04-30 00:03:37', '2025-04-30 00:03:37'),
(113, 'images/products/medical-equipment/Surgisenz Pro EU-150 electrosurgical unit (3).png', 22, '2025-04-30 00:03:37', '2025-04-30 00:03:37'),
(114, 'images/products/medical-equipment/Surgisenz Pro EU-150 electrosurgical unit (4).png', 22, '2025-04-30 00:03:37', '2025-04-30 00:03:37'),
(115, 'images/products/medical-equipment/Surgisenz Pro EU-400 electrosurgical unit.png', 23, '2025-04-30 00:03:47', '2025-04-30 00:03:47'),
(116, 'images/products/medical-equipment/Surgisenz Pro EU-400 electrosurgical unit (2).png', 23, '2025-04-30 00:04:06', '2025-04-30 00:04:06'),
(117, 'images/products/medical-equipment/Surgisenz Pro EU-400 electrosurgical unit (3).png', 23, '2025-04-30 00:04:06', '2025-04-30 00:04:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_images_product_id_foreign` (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product_images`
--
ALTER TABLE `product_images`
  ADD CONSTRAINT `product_images_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
