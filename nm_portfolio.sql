-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 13, 2021 at 10:37 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nm_portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `profile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_birth` date NOT NULL,
  `nationality` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `religion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `language` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expert_in` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `freelance` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `objective` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `bgtitle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `profile`, `date_of_birth`, `nationality`, `religion`, `language`, `expert_in`, `freelance`, `objective`, `created_at`, `updated_at`, `bgtitle`, `title`) VALUES
(8, '1631244613.png', '1998-04-09', 'Shan', 'Buddhist', 'Japanese', 'Web Development, UI/UX design', 'Available', 'I\'m a final year student, majoring in Electronic Communication at Technological University (Myitkyina). But I’m very interested in web development and I want to be a full stack developer. So, I studied HTML, CSS, etc., by myself. I’ll try my best to accomplish the excellent result by applying my skills. I have the ability to work independently or as a part of a team. Don\'t worry about learning a new language, I’m a fast learner. And willing to face new challenges and enjoy working under pressure in time. I\'m a motivated and good communicable person.', '2021-09-09 21:00:13', '2021-09-09 21:00:13', 'Nang Myintzu', 'About Me');

-- --------------------------------------------------------

--
-- Table structure for table `admin_contacts`
--

CREATE TABLE `admin_contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telegram` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `github` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_contacts`
--

INSERT INTO `admin_contacts` (`id`, `email`, `phone`, `address`, `facebook`, `twitter`, `telegram`, `github`, `created_at`, `updated_at`) VALUES
(1, 'yuki60398@gmail.com', '09259599508', 'Myitkyina, Kachin State', 'https://www.facebook.com/profile.php?id=100044376262182', '#', '#', 'https://github.com/NangMyintzu-Yuki', '2021-09-10 20:51:33', '2021-09-10 21:15:18');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discussion_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `discussion_title`, `message`, `created_at`, `updated_at`) VALUES
(5, 'Yuki', 'yuki60398@gmail.com', 'Design', 'Great!', '2021-09-11 02:16:12', '2021-09-11 02:16:12');

-- --------------------------------------------------------

--
-- Table structure for table `dashboards`
--

CREATE TABLE `dashboards` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dashboards`
--

INSERT INTO `dashboards` (`id`, `url`, `image`, `title`, `created_at`, `updated_at`) VALUES
(2, 'https://youtu.be/DfIK-B9Gh4c', '1631454909.png', 'Kimchi', '2021-09-12 07:25:09', '2021-09-12 07:25:09'),
(3, 'https://youtu.be/NcJmfiZA6kQ', '1631454962.jpg', 'Six-Legged Spider Robot', '2021-09-12 07:26:02', '2021-09-12 07:26:02'),
(4, 'https://youtu.be/1slJbmL50ps', '1631455005.png', 'Crochet Shop', '2021-09-12 07:26:45', '2021-09-12 07:26:45'),
(5, 'http://yuki.epizy.com/', '1631455068.png', 'Portfolio With Wordpress', '2021-09-12 07:27:48', '2021-09-12 07:27:48'),
(7, 'https://youtu.be/HzP_0VGH6Yk', '1631456621.png', 'Animation', '2021-09-12 07:53:41', '2021-09-12 07:53:41');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mains`
--

CREATE TABLE `mains` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `intro` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `resume` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mains`
--

INSERT INTO `mains` (`id`, `title`, `intro`, `subtitle`, `image`, `resume`, `created_at`, `updated_at`) VALUES
(1, 'Welcome to my website!', 'I\'m Nang Myintzu', 'I\'m a freelancer', '1631433232.png', '1631433232.pdf', '2021-09-12 00:03:59', '2021-09-12 01:23:52');

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2021_09_08_014918_create_sessions_table', 1),
(7, '2014_10_12_000000_create_users_table', 2),
(8, '2021_09_08_102311_create_mains_table', 3),
(9, '2021_09_09_123212_create_abouts_table', 4),
(10, '2021_09_09_131754_add_bgtitle_to_abouts_table', 5),
(11, '2021_09_09_131957_add_title_to_abouts_table', 6),
(12, '2021_09_10_022126_create_skills_table', 7),
(13, '2021_09_10_072042_create_services_table', 8),
(14, '2021_09_10_081605_add_icon_to_services_table', 9),
(15, '2021_09_10_122013_create_projects_table', 10),
(16, '2021_09_10_134626_create_teams_table', 11),
(17, '2021_09_11_015856_create_contacts_table', 12),
(18, '2021_09_11_021014_create_admin_contacts_table', 12),
(19, '2021_09_12_130051_create_dashboards_table', 13);

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bgtitle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pj_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `language` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `title`, `bgtitle`, `short_description`, `pj_title`, `language`, `image`, `created_at`, `updated_at`) VALUES
(1, 'My Works', 'Projects', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.', 'Six-Legged Spider Robot ', 'Arduino', '1631281235.jpg', '2021-09-10 06:14:59', '2021-09-10 07:10:35'),
(2, 'My Works', 'Projects', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.', 'Kimchi Landing Page', 'HTML,CSS,JavaScript', '1631279853.png', '2021-09-10 06:47:33', '2021-09-10 06:47:33'),
(3, 'My Works', 'Projects', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.', 'CSS Animation', 'HTML,CSS,JavaScript', '1631279878.png', '2021-09-10 06:47:58', '2021-09-10 06:47:58'),
(5, 'My Works', 'Projects', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.', 'Crochet', 'HTML,CSS,JavaScript', '1631279966.png', '2021-09-10 06:49:26', '2021-09-10 06:49:26'),
(6, 'My Works', 'Projects', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.', 'Photoshop', 'Adobe Photoshop', '1631280047.png', '2021-09-10 06:50:47', '2021-09-10 06:50:47'),
(7, 'My Works', 'Projects', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.', 'Portfolio', 'Wordpress', '1631280401.png', '2021-09-10 06:56:41', '2021-09-10 06:56:41');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bgtitle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `bgtitle`, `name`, `short_description`, `service_description`, `created_at`, `updated_at`, `icon`) VALUES
(1, 'Awesome Services ', 'Services', 'Creative Design', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.', 'Claritas est etiam processus dynamicus, qui sequitur mutationem consue.', '2021-09-10 01:18:52', '2021-09-10 02:34:18', 'fa fa-lightbulb'),
(2, 'Awesome Services', 'Services', 'Responsive Layout', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.', 'Claritas est etiam processus dynamicus, qui sequitur mutationem consue.', '2021-09-10 01:31:10', '2021-09-10 02:32:56', 'fab fa-deezer'),
(3, 'Awesome Services', 'Services', 'User Friendly', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.', 'Claritas est etiam processus dynamicus, qui sequitur mutationem consue.', '2021-09-10 01:31:26', '2021-09-10 02:33:29', 'fa fa-user-md'),
(4, 'Awesome Services', 'Services', 'Lovely Animation', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.', 'Claritas est etiam processus dynamicus, qui sequitur mutationem consue.', '2021-09-10 01:31:37', '2021-09-10 02:33:48', 'fa fa-heart'),
(5, 'Awesome Services', 'Services', 'Ready to lunch', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.', 'Claritas est etiam processus dynamicus, qui sequitur mutationem consue.', '2021-09-10 01:31:51', '2021-09-10 02:34:06', 'fab fa-accusoft');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('0AwAsnjaVbY0NWWJtPQGeLUMMDLcFD0MYMICI5YZ', 3, '127.0.0.1', 'Mozilla/5.0 (iPad; CPU OS 11_0 like Mac OS X) AppleWebKit/604.1.34 (KHTML, like Gecko) Version/11.0 Mobile/15A5341f Safari/604.1', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoidTVaVEZuQ3lzODZMOFFMSVFvMnVOYWZFdTBXNzl6eXdOemFHemcyWCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9kYXNoYm9hcmQiO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aTozO3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTAkUGxOLzNkRGtyME9Xa0pjVWFkbEIuLlBpcS9pSEEvdmE5RVlaM3B3VG11ZjQ0cWI0TmRvTmUiO3M6MjE6InBhc3N3b3JkX2hhc2hfc2FuY3R1bSI7czo2MDoiJDJ5JDEwJFBsTi8zZERrcjBPV2tKY1VhZGxCLi5QaXEvaUhBL3ZhOUVZWjNwd1RtdWY0NHFiNE5kb05lIjt9', 1631521745),
('fD3SnZXfnO7FwOTtlcZfrqmXvRXQTUvq4LbiMaO8', 2, '127.0.0.1', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiYURkOWUxZVQwQ1ZXemFlWjY3Q0VoOE1STThyUmxNdXkwTU9PTnlwWiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9kYXNoYm9hcmQiO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToyO3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTAkTmZMczRxT2pjZ0dvMk5oRndWdmdXZWNIYWtLUVoyVkcvcVkzenpleG5ITHBkL0dpTGFFOFMiO3M6MjE6InBhc3N3b3JkX2hhc2hfc2FuY3R1bSI7czo2MDoiJDJ5JDEwJE5mTHM0cU9qY2dHbzJOaEZ3VnZnV2VjSGFrS1FaMlZHL3FZM3p6ZXhuSExwZC9HaUxhRThTIjt9', 1631521784);

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `percent` decimal(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `name`, `percent`, `created_at`, `updated_at`) VALUES
(1, 'HTML ', '85.00', '2021-09-09 20:11:10', '2021-09-09 20:34:56'),
(2, 'CSS', '75.00', '2021-09-09 20:12:00', '2021-09-09 20:12:00'),
(3, 'JavaScript', '65.00', '2021-09-09 20:12:39', '2021-09-09 20:12:39'),
(4, 'Bootstrap', '75.00', '2021-09-09 20:12:51', '2021-09-09 20:12:51'),
(5, 'PHP', '70.00', '2021-09-09 20:13:02', '2021-09-09 20:13:02'),
(6, 'Laravel', '65.00', '2021-09-09 20:13:13', '2021-09-09 20:13:13'),
(7, 'jQuery', '70.00', '2021-09-09 20:13:34', '2021-09-09 20:13:34'),
(8, 'Wordpress', '70.00', '2021-09-09 20:13:48', '2021-09-09 20:13:48'),
(9, 'Photoshop', '70.00', '2021-09-09 20:13:57', '2021-09-09 20:13:57'),
(11, 'Japanese', '60.00', '2021-09-09 20:40:23', '2021-09-09 20:40:52');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bgtitle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author_profile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `member_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `member_obj` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `title`, `bgtitle`, `short_description`, `author_profile`, `member_name`, `post`, `member_obj`, `created_at`, `updated_at`) VALUES
(1, 'My Team', 'Members', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.', '1631283250.jpg', 'Yuki', 'Developer', 'Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima.', '2021-09-10 07:44:10', '2021-09-10 07:44:10'),
(2, 'My Team', 'Members', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.', '1631283285.jpg', 'Khin Khin', 'UI/UX Designer', 'Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima.', '2021-09-10 07:44:45', '2021-09-10 07:44:45'),
(4, 'My Team', 'Members', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.', '1631284098.jpg', 'Nang Myintzu Edit', 'Developer', 'Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima.', '2021-09-10 07:45:47', '2021-09-10 07:58:18');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `utype` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'User' COMMENT 'Admin for Admin and User for User or Customer',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `current_team_id`, `profile_photo_path`, `utype`, `created_at`, `updated_at`) VALUES
(1, 'Yuki', 'yuki60398@gmail.com', NULL, '$2y$10$leUf/6Zrm2sTZfAEAykqg.5.rO4XRJ3GUcm/Yc5TbTLg8ABnzHzNy', NULL, NULL, NULL, 'Admin', '2021-09-07 19:51:31', '2021-09-07 19:51:31'),
(2, 'User One', 'userone@gmail.com', NULL, '$2y$10$NfLs4qOjcgGo2NhFwVvgWecHakKQZ2VG/qY3zzexnHLpd/GiLaE8S', NULL, NULL, NULL, 'User', '2021-09-07 20:33:19', '2021-09-07 20:33:19'),
(3, 'user two', 'usertwo@gmail.com', NULL, '$2y$10$PlN/3dDkr0OWkJcUadlB..Piq/iHA/va9EYZ3pwTmuf44qb4NdoNe', NULL, NULL, NULL, 'User', '2021-09-12 03:22:07', '2021-09-12 03:22:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_contacts`
--
ALTER TABLE `admin_contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dashboards`
--
ALTER TABLE `dashboards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `mains`
--
ALTER TABLE `mains`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `admin_contacts`
--
ALTER TABLE `admin_contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `dashboards`
--
ALTER TABLE `dashboards`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mains`
--
ALTER TABLE `mains`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
