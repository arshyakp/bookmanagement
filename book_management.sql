-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2019 at 07:51 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.1.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adminuserproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `angulars`
--

CREATE TABLE `angulars` (
  `id` int(10) UNSIGNED NOT NULL,
  `firstname` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bookcollections`
--

CREATE TABLE `bookcollections` (
  `BOOK:No` int(191) NOT NULL,
  `Name` int(191) NOT NULL,
  `Auther Name` int(191) NOT NULL,
  `Publisher Name` int(191) NOT NULL,
  `Location` int(191) NOT NULL,
  `Image` int(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `booksdetails`
--

CREATE TABLE `booksdetails` (
  `id` int(10) UNSIGNED NOT NULL,
  `books_no` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `book_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `auther_name` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `publisher_name` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `booksdetails`
--

INSERT INTO `booksdetails` (`id`, `books_no`, `book_name`, `auther_name`, `publisher_name`, `location`, `type`, `image`, `created_at`, `updated_at`) VALUES
(33, 'AD:01', 'MADHURIKKUM ORMAKALE', 'O N V KURUP', 'DC BOOKS', 'Trivandram', 'type', 'cxampptmpphpf659tmp.jpg', '2018-12-13 02:28:27', '2018-12-19 23:19:29'),
(34, 'AD:02', 'KANIKAVECHA SWAPNANGAL', 'JOHN CHERIAN', 'EXPRESSIONS', 'Kollam', 'type', 'cxampptmpphpe346tmp.jpg', '2018-12-13 02:30:32', '2018-12-19 23:19:09'),
(35, 'AD:03', 'HARITHARAMAYANAM', 'JAYADEVAN V T', 'DC BOOKS', 'Thrissur', 'type', '.jpg', '2018-12-13 02:36:48', '2018-12-19 05:19:38'),
(36, 'AD:04', 'ANASWARATHAYILEKKU', 'O N V KURUP', 'DC BOOKS', 'Eranakulam', 'type', 'cxampptmpphpb588tmp.jpg', '2018-12-13 02:40:10', '2018-12-19 23:13:43'),
(37, 'AD:05', 'A STROLL GRAZING EACH OTHER', 'ULLAS R KOYA', 'A Self Publishing Service of DC Books Group', 'Kannur', 'type', 'cxampptmpphp753btmp.jpg', '2018-12-13 02:42:05', '2018-12-17 06:35:44'),
(38, 'AD:06', 'PAVALE EN PAVALE', 'SIVAKUMAR AMBALAPPUZHA', 'DC BOOKS', 'Kannur', 'type', 'cxampptmpphp4fd3tmp.jpg', '2018-12-13 02:45:12', '2018-12-19 05:19:55'),
(39, 'AD:07', 'MODIFY CHEYYAPPETATHATHU', 'Nadi', 'DC BOOKS', 'Wayanad', 'type', 'cxampptmpphp8e31tmp.jpg', '2018-12-13 02:49:50', '2018-12-18 04:31:56'),
(40, 'AD:08', 'ADYAKALA BALAKAVITHAKAL', 'EZHUMATTOR RAJARAJA VARMA', 'DC BOOKS', 'Calicut', 'type', 'cxampptmpphp4c87tmp.jpg', '2018-12-13 02:52:50', '2018-12-18 04:45:18'),
(41, 'AD:09', 'KOCHUSEETHA', 'VALLATHOL NARAYANA MENON', 'DC BOOKS', 'Kasargode', 'type', 'cxampptmpphpe856tmp.jpg', '2018-12-13 02:54:35', '2018-12-18 23:12:17'),
(42, 'AD:10', 'KOTTAYAM CHRISTHUVUM MATTU KAVITHAKALUM', 'AJEESH DASAN', 'DC BOOKS', 'Malappuram', 'type', 'cxampptmpphp4a0atmp.jpg', '2018-12-13 02:56:06', '2018-12-16 23:37:52'),
(43, 'AD:11', 'MARAVITHAN ORMMA', 'CHANDRASEKHARAN N P', 'DC BOOKS', 'Aalppuzha', 'type', 'cxampptmpphpfcfctmp.jpg', '2018-12-13 03:01:14', '2018-12-14 07:04:22'),
(44, 'AD:12', 'MOUNATHINTE PENNARTHANGAL', 'GEETHA THOTTAM', 'DC BOOKS', 'Calicut', 'type', 'cxampptmpphpf36etmp.jpg', '2018-12-13 03:03:22', '2018-12-17 00:09:40'),
(45, 'AD:50', 'NAMBHAZHAM', 'SK POTTAKKAD', 'DC BOOK', 'CALICUT', 'type', 'cxampptmpphp62fdtmp.jpg', '2018-12-19 23:12:37', '2018-12-19 23:12:37');

-- --------------------------------------------------------

--
-- Table structure for table `bookzzzapplieds`
--

CREATE TABLE `bookzzzapplieds` (
  `id` int(10) UNSIGNED NOT NULL,
  `books_no` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `books_name` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `auther_name` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `publisher_name` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firtsname` int(191) NOT NULL,
  `lastname` int(191) NOT NULL,
  `address` int(191) NOT NULL,
  `phnumber` int(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cmtzs`
--

CREATE TABLE `cmtzs` (
  `id` int(10) UNSIGNED NOT NULL,
  `book_id` int(10) UNSIGNED NOT NULL,
  `reg_id` int(10) UNSIGNED NOT NULL,
  `comments` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cmtzs`
--

INSERT INTO `cmtzs` (`id`, `book_id`, `reg_id`, `comments`, `created_at`, `updated_at`) VALUES
(9, 33, 3, 'very good book', '2018-12-19 22:56:09', '2018-12-19 22:56:09'),
(10, 33, 19, 'nice book', '2018-12-19 23:19:36', '2018-12-19 23:19:36'),
(11, 33, 19, 'nice book', '2018-12-19 23:19:36', '2018-12-19 23:19:36');

-- --------------------------------------------------------

--
-- Table structure for table `logins`
--

CREATE TABLE `logins` (
  `id` int(10) UNSIGNED NOT NULL,
  `reg_id` int(10) UNSIGNED NOT NULL,
  `email` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `logins`
--

INSERT INTO `logins` (`id`, `reg_id`, `email`, `password`, `type`, `created_at`, `updated_at`) VALUES
(1, 3, 'amalgopal@gmail.com', '24680', 'user', NULL, NULL),
(2, 4, 'ahkil@gmail.com', '123456', 'admin', NULL, NULL),
(3, 8, 'devika@gmail.com', '56789', 'user', NULL, NULL),
(4, 9, 'achu@gmail.com', '09876', 'user', NULL, NULL),
(5, 11, 'ammu@gmail.com', '67890', 'user', NULL, NULL),
(6, 19, 'ruthu@gmail.com', '36924', 'user', NULL, NULL),
(8, 21, 'rosemary@brammait.com', 'bramma', 'user', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(7, '2018_12_04_102508_create_registrations_table', 2),
(8, '2018_12_04_114000_create_logins_table', 3),
(9, '2018_12_05_115911_create_sessions_table', 4),
(10, '2018_12_07_054605_create_booksdetails_table', 4),
(11, '2018_12_13_102641_create_morebooks_table', 5),
(12, '2018_12_15_044051_create_appliedbooks_table', 6),
(13, '2018_12_15_064321_create_bookapplieds_table', 7),
(14, '2018_12_15_065029_create_bookzzzapplieds_table', 8),
(15, '2018_12_15_071938_create_appiledusers_table', 9),
(16, '2018_12_17_042804_create_newusers_table', 10),
(17, '2018_12_17_044937_create_userviews_table', 11),
(18, '2018_12_18_122142_create_comments_table', 12),
(19, '2018_12_19_130913_create_cmtzs_table', 13),
(20, '2018_12_24_095302_create_angulars_table', 14);

-- --------------------------------------------------------

--
-- Table structure for table `morebooks`
--

CREATE TABLE `morebooks` (
  `id` int(10) UNSIGNED NOT NULL,
  `books_no` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `books_name` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `auther_name` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `publisher_name` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `morebooks`
--

INSERT INTO `morebooks` (`id`, `books_no`, `books_name`, `auther_name`, `publisher_name`, `location`, `type`, `image`, `created_at`, `updated_at`) VALUES
(1, 'AD:01', 'MADHURIKKUM ORMAKALE', 'O N V KURUP', 'DC BOOKS', 'Trivandram', '1', 'cxampptmpphpf659tmp.jpg', NULL, NULL),
(2, 'AD:01', 'MADHURIKKUM ORMAKALE', 'O N V KURUP', 'DC BOOKS', 'Trivandram', '1', 'cxampptmpphpf659tmp.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `registration` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `registrations`
--

CREATE TABLE `registrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `firstname` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phnumber` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `registrations`
--

INSERT INTO `registrations` (`id`, `firstname`, `lastname`, `address`, `phnumber`, `created_at`, `updated_at`) VALUES
(3, 'amal', 'Gopal', 'melaparambath', '9539040378', '2018-12-05 01:27:41', '2018-12-14 03:27:09'),
(4, 'Akhil', 'mk', 'namiththara', '9048262344', '2018-12-05 01:29:52', '2018-12-05 01:29:52'),
(5, 'Kunjokko', 'Boban', 'pala', '4567890', '2018-12-05 02:11:49', '2018-12-05 02:11:49'),
(6, 'Swatha', 'Subramanniyan', 'Iringal', '9048262344', '2018-12-05 02:13:33', '2018-12-05 02:13:33'),
(8, 'Devika', 'Sugumar', 'Methot thazha', '4567890', '2018-12-05 02:15:55', '2018-12-17 01:00:36'),
(9, 'Krishnan', 'mk', 'Methot thazha', '4567890', '2018-12-05 02:15:55', '2018-12-13 03:15:16'),
(11, 'ammu', 'nm', 'nettur', '9037452844', '2018-12-06 07:20:36', '2018-12-06 07:20:36'),
(19, 'ruthu', 'lal', 'Kavil', '9567849302', '2018-12-11 00:41:07', '2018-12-17 04:31:35'),
(21, 'rose', 'mary', 'mampilly', '9447953651', '2018-12-13 03:24:36', '2018-12-13 03:24:36');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `userviews`
--

CREATE TABLE `userviews` (
  `id` int(10) UNSIGNED NOT NULL,
  `book_id` int(10) UNSIGNED NOT NULL,
  `reg_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `userviews`
--

INSERT INTO `userviews` (`id`, `book_id`, `reg_id`, `created_at`, `updated_at`) VALUES
(45, 33, 3, '2018-12-19 03:47:17', '2018-12-19 03:47:17'),
(46, 35, 8, '2018-12-19 03:48:27', '2018-12-19 03:48:27'),
(47, 35, 3, '2018-12-19 05:18:01', '2018-12-19 05:18:01'),
(48, 38, 8, '2018-12-19 05:19:55', '2018-12-19 05:19:55'),
(49, 33, 3, '2018-12-19 05:21:26', '2018-12-19 05:21:26'),
(50, 34, 8, '2018-12-19 05:22:56', '2018-12-19 05:22:56'),
(51, 36, 3, '2018-12-19 06:24:51', '2018-12-19 06:24:51'),
(52, 34, 3, '2018-12-19 07:55:27', '2018-12-19 07:55:27'),
(53, 33, 3, '2018-12-19 22:55:36', '2018-12-19 22:55:36'),
(54, 36, 3, '2018-12-19 23:13:43', '2018-12-19 23:13:43'),
(55, 34, 19, '2018-12-19 23:19:08', '2018-12-19 23:19:08'),
(56, 33, 19, '2018-12-19 23:19:29', '2018-12-19 23:19:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `angulars`
--
ALTER TABLE `angulars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booksdetails`
--
ALTER TABLE `booksdetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookzzzapplieds`
--
ALTER TABLE `bookzzzapplieds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cmtzs`
--
ALTER TABLE `cmtzs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cmtzs_book_id_foreign` (`book_id`),
  ADD KEY `cmtzs_reg_id_foreign` (`reg_id`);

--
-- Indexes for table `logins`
--
ALTER TABLE `logins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `logins_reg_id_foreign` (`reg_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `morebooks`
--
ALTER TABLE `morebooks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `registrations`
--
ALTER TABLE `registrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD UNIQUE KEY `sessions_id_unique` (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `userviews`
--
ALTER TABLE `userviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userviews_book_id_foreign` (`book_id`),
  ADD KEY `userviews_reg_id_foreign` (`reg_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `angulars`
--
ALTER TABLE `angulars`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `booksdetails`
--
ALTER TABLE `booksdetails`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `bookzzzapplieds`
--
ALTER TABLE `bookzzzapplieds`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cmtzs`
--
ALTER TABLE `cmtzs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `logins`
--
ALTER TABLE `logins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `morebooks`
--
ALTER TABLE `morebooks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `registrations`
--
ALTER TABLE `registrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `userviews`
--
ALTER TABLE `userviews`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cmtzs`
--
ALTER TABLE `cmtzs`
  ADD CONSTRAINT `cmtzs_book_id_foreign` FOREIGN KEY (`book_id`) REFERENCES `booksdetails` (`id`),
  ADD CONSTRAINT `cmtzs_reg_id_foreign` FOREIGN KEY (`reg_id`) REFERENCES `registrations` (`id`);

--
-- Constraints for table `logins`
--
ALTER TABLE `logins`
  ADD CONSTRAINT `logins_reg_id_foreign` FOREIGN KEY (`reg_id`) REFERENCES `registrations` (`id`);

--
-- Constraints for table `userviews`
--
ALTER TABLE `userviews`
  ADD CONSTRAINT `userviews_book_id_foreign` FOREIGN KEY (`book_id`) REFERENCES `booksdetails` (`id`),
  ADD CONSTRAINT `userviews_reg_id_foreign` FOREIGN KEY (`reg_id`) REFERENCES `registrations` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
