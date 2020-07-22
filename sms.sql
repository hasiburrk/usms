-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 22, 2020 at 05:42 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sms`
--

-- --------------------------------------------------------

--
-- Table structure for table `chairman_deiails`
--

CREATE TABLE `chairman_deiails` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `chairman_id` int(11) NOT NULL,
  `faculty_id` int(11) NOT NULL,
  `department_id` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `faculty_id` int(11) NOT NULL,
  `department_id` int(11) NOT NULL,
  `levelterm_id` int(11) NOT NULL,
  `course_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_cradit` double(8,2) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `faculty_id`, `department_id`, `levelterm_id`, `course_name`, `course_code`, `course_cradit`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 'Computer Fundamentals', 'CSE-1101', 3.00, 1, '2020-03-12 02:00:14', '2020-03-12 02:00:14'),
(2, 1, 1, 1, 'Computer Fundamentals Sessional', 'CSE-1102', 1.50, 1, '2020-03-12 02:00:45', '2020-03-12 02:00:45'),
(3, 1, 1, 1, 'Structure Programming Language', 'CSE-1103', 3.00, 1, '2020-03-12 02:01:25', '2020-03-12 02:01:25'),
(4, 1, 1, 1, 'Structure Programming Language Sessional', 'CSE-1104', 1.50, 1, '2020-03-12 02:01:45', '2020-03-12 02:01:45'),
(5, 1, 2, 1, 'Electrical Fundamentals', 'EEE-1101', 3.00, 1, '2020-03-15 02:54:14', '2020-03-15 02:54:14'),
(6, 1, 2, 1, 'Electrical Fundamentals Sessional', 'EEE-1102', 1.50, 1, '2020-03-15 02:55:11', '2020-03-15 02:55:11'),
(7, 1, 2, 1, 'Electronic Devices and Circuits', 'EEE-1103', 3.00, 1, '2020-03-15 02:55:49', '2020-03-15 02:55:49'),
(8, 1, 5, 1, 'Civil Foundramentals', 'CE-1101', 3.00, 1, '2020-03-15 02:56:48', '2020-03-15 02:56:48'),
(9, 1, 1, 1, 'Differential Calculus & Co-ordinate Geometry', 'MATH-1101', 3.00, 1, '2020-03-16 00:30:52', '2020-03-16 00:30:52'),
(10, 1, 1, 1, 'Physics', 'PHY-1101', 3.00, 1, '2020-03-16 00:31:16', '2020-03-16 00:31:16'),
(11, 1, 1, 1, 'Communicative English', 'HUM-1101', 3.00, 1, '2020-03-16 00:32:22', '2020-03-16 00:32:22'),
(12, 1, 1, 1, 'Communicative English Sessional', 'HUM-1102', 0.75, 1, '2020-03-16 00:33:13', '2020-03-16 00:33:13'),
(13, 1, 1, 1, 'Viva Voce', 'CSE-1150', 0.75, 1, '2020-03-16 00:33:53', '2020-03-16 00:33:53'),
(14, 1, 1, 2, 'Engineering Drawing', 'ME-1200', 1.00, 1, '2020-03-16 00:35:22', '2020-03-16 00:35:22'),
(15, 1, 1, 2, 'Structure Programming Language Sessional 2', 'CSE-1200', 0.75, 1, '2020-03-16 00:36:20', '2020-03-16 00:36:20'),
(16, 1, 1, 2, 'Object Oriented Programming', 'CSE-1201', 3.00, 1, '2020-03-16 00:36:53', '2020-03-16 00:36:53'),
(17, 1, 1, 2, 'Object Oriented Programming Sessional', 'CSE-1202', 1.50, 1, '2020-03-16 00:37:19', '2020-03-16 00:37:19'),
(18, 1, 1, 2, 'Discrete Mathematics', 'CSE-1203', 3.00, 1, '2020-03-16 00:38:19', '2020-03-16 00:38:19'),
(19, 1, 1, 2, 'Basic Electrical Engineering', 'EEE-1201', 3.00, 1, '2020-03-16 00:39:02', '2020-03-16 00:39:02'),
(20, 1, 1, 2, 'Basic Electrical Engineering Sessional', 'EEE-1202', 1.50, 1, '2020-03-16 00:39:39', '2020-03-16 00:39:39'),
(21, 1, 1, 2, 'Integral Calculus, Differential Equation and Series Solution', 'MATH-1201', 3.00, 1, '2020-03-16 00:40:19', '2020-03-16 00:40:19'),
(22, 1, 1, 2, 'Economics', 'HUM-1201', 2.00, 1, '2020-03-16 00:41:24', '2020-03-16 00:41:24'),
(23, 1, 1, 2, 'Viva Voce', 'CSE-1250', 0.75, 1, '2020-03-16 00:42:11', '2020-03-16 00:42:11'),
(24, 1, 1, 3, 'Data Structures', 'CSE-2101', 3.00, 1, '2020-03-16 00:43:50', '2020-03-16 00:43:50'),
(25, 1, 1, 3, 'Data Structures Sessional', 'CSE-2102', 1.50, 1, '2020-03-16 00:44:22', '2020-03-16 00:44:22'),
(26, 1, 1, 3, 'Design Pattern and Java Programming', 'CSE-2103', 3.00, 1, '2020-03-16 00:44:50', '2020-03-16 00:44:50'),
(27, 1, 1, 3, 'Design Pattern and Java Programming Sessional', 'CSE-2104', 1.50, 1, '2020-03-16 00:45:10', '2020-03-16 00:45:10'),
(28, 1, 1, 3, 'Electronic Devices and Circuits', 'EEE-1201', 3.00, 1, '2020-03-16 00:46:17', '2020-03-16 00:46:17'),
(29, 1, 1, 3, 'Electronic Devices and Circuits Sessional', 'EEE-2102', 1.50, 1, '2020-03-16 00:47:03', '2020-03-16 00:47:03'),
(30, 1, 1, 3, 'Vector, Matrices and Linear Algebra', 'MATH-2101', 3.00, 1, '2020-03-16 00:47:37', '2020-03-16 00:47:37'),
(31, 1, 1, 3, 'Elementary Statistics and Probability', 'STAT-2101', 3.00, 1, '2020-03-16 00:48:24', '2020-03-16 00:48:24'),
(32, 1, 1, 3, 'Viva Voce', 'CSE-2150', 0.75, 1, '2020-03-16 00:48:46', '2020-03-16 00:48:46'),
(33, 1, 1, 4, 'Analytical Programming Sessional', 'CSE-2200', 1.50, 1, '2020-03-16 00:49:32', '2020-03-16 00:49:32'),
(34, 1, 1, 4, 'Algorithms', 'CSE-2201', 3.00, 1, '2020-03-16 00:49:58', '2020-03-16 00:49:58'),
(35, 1, 1, 4, 'Algorithms Sessional', 'CSE-2202', 1.50, 1, '2020-03-16 00:50:39', '2020-03-16 00:50:39'),
(36, 1, 1, 4, 'Theory of Computation', 'CSE-2203', 2.00, 1, '2020-03-16 00:52:20', '2020-03-16 00:52:20'),
(37, 1, 1, 4, 'Digital Systems', 'CSE-2205', 3.00, 1, '2020-03-16 00:53:20', '2020-03-16 00:53:20'),
(38, 1, 1, 4, 'Digital Systems Sessional', 'CSE-2206', 1.50, 1, '2020-03-16 00:53:54', '2020-03-16 00:53:54'),
(39, 1, 1, 4, 'Complex Analysis, Laplace and Fourier Transforms', 'MATH-2201', 3.00, 1, '2020-03-16 00:54:17', '2020-03-16 00:57:44'),
(40, 1, 1, 4, 'Theory of Statistics', 'STAT-2201', 3.00, 1, '2020-03-16 00:54:41', '2020-03-16 00:58:25'),
(41, 1, 1, 4, 'Viva Voce', 'CSE-2250', 0.75, 1, '2020-03-16 00:59:23', '2020-03-16 00:59:23'),
(42, 1, 1, 5, 'Computer Architecture and Organization', 'CSE-3101', 3.00, 1, '2020-03-16 01:00:38', '2020-03-16 01:00:38'),
(43, 1, 1, 5, 'Compiler Design', 'CSE-3103', 3.00, 1, '2020-03-16 01:01:18', '2020-03-16 01:01:18'),
(44, 1, 1, 5, 'Compiler Design Sessional', 'CSE-3104', 1.50, 1, '2020-03-16 01:01:42', '2020-03-16 01:01:42'),
(45, 1, 1, 5, 'Numerical Methods', 'CSE-3105', 3.00, 1, '2020-03-16 01:02:17', '2020-03-16 01:02:17'),
(46, 1, 1, 5, 'Numerical Methods Sessional', 'CSE-3106', 0.75, 1, '2020-03-16 01:02:51', '2020-03-16 01:02:51'),
(47, 1, 1, 5, 'Database Management Systems', 'CSE-3107', 3.00, 1, '2020-03-16 01:03:26', '2020-03-16 01:03:26'),
(48, 1, 1, 5, 'Database Management Systems Sessional', 'CSE-3108', 1.50, 1, '2020-03-16 01:03:56', '2020-03-16 01:03:56'),
(49, 1, 1, 5, 'Data Communication', 'ECE-3101', 3.00, 1, '2020-03-16 01:04:40', '2020-03-16 01:04:40'),
(50, 1, 1, 5, 'Data Communication Sessional', 'ECE-3102', 1.50, 1, '2020-03-16 01:05:27', '2020-03-16 01:05:27'),
(51, 1, 1, 5, 'Viva Voce', 'CSE-3150', 0.75, 1, '2020-03-16 01:05:48', '2020-03-16 01:05:48'),
(52, 1, 1, 6, 'Project', 'CSE-3200', 1.00, 1, '2020-03-16 01:08:49', '2020-03-16 01:08:49'),
(53, 1, 1, 6, 'System Analysis and Design', 'CSE-3201', 3.00, 1, '2020-03-16 01:09:25', '2020-03-16 01:09:25'),
(54, 1, 1, 6, 'Operating Systems', 'CSE-3203', 3.00, 1, '2020-03-16 01:10:13', '2020-03-16 01:10:13'),
(55, 1, 1, 6, 'Operating Systems Sessional', 'CSE-3204', 1.50, 1, '2020-03-16 01:10:37', '2020-03-16 01:10:37'),
(56, 1, 1, 6, 'Web Engineering', 'CSE-3205', 3.00, 1, '2020-03-16 01:11:10', '2020-03-16 01:11:10'),
(57, 1, 1, 6, 'Web Engineering Sessional', 'CSE-3206', 1.50, 1, '2020-03-16 01:11:32', '2020-03-16 01:11:32'),
(58, 1, 1, 6, 'Digital Signal Processing', 'CSE-3207', 3.00, 1, '2020-03-16 01:12:49', '2020-03-16 01:12:49'),
(59, 1, 1, 6, 'Digital Signal Processing Sessional', 'CSE-3208', 0.75, 1, '2020-03-16 01:13:28', '2020-03-16 01:13:28'),
(60, 1, 1, 6, 'Microprocessors and Assembly Language', 'CSE-3209', 3.00, 1, '2020-03-16 01:14:35', '2020-03-16 01:14:35'),
(61, 1, 1, 6, 'Microprocessors and Assembly Language Sessional', 'CSE-3210', 1.50, 1, '2020-03-16 01:14:59', '2020-03-16 01:14:59'),
(62, 1, 1, 6, 'Viva Voce', 'CSE-3250', 0.75, 1, '2020-03-16 01:15:21', '2020-03-16 01:15:21'),
(63, 1, 1, 7, 'Project/Thesis', 'CSE-4100', 1.50, 1, '2020-03-16 01:19:11', '2020-03-16 01:19:11'),
(64, 1, 1, 7, 'Software Engineering', 'CSE-4101', 3.00, 1, '2020-03-16 01:20:01', '2020-03-16 01:20:01'),
(65, 1, 1, 7, 'Software Engineering Sessional', 'CSE-4102', 0.75, 1, '2020-03-16 01:20:37', '2020-03-16 01:20:37'),
(66, 1, 1, 7, 'Artificial Intelligence', 'CSE-4103', 3.00, 1, '2020-03-16 01:21:24', '2020-03-16 01:21:24'),
(67, 1, 1, 7, 'Artificial Intelligence Sessional', 'CSE-4104', 1.50, 1, '2020-03-16 01:22:11', '2020-03-16 01:22:11'),
(68, 1, 1, 7, 'Digital Image Processing', 'CSE-4105', 3.00, 1, '2020-03-16 01:23:20', '2020-03-16 01:23:20'),
(69, 1, 1, 7, 'Digital Image Processing Sessional', 'CSE-4106', 1.50, 1, '2020-03-16 01:23:53', '2020-03-16 01:23:53'),
(70, 1, 1, 7, 'Sociology and Bangladesh Studies', 'HUM-4101', 3.00, 1, '2020-03-16 01:24:36', '2020-03-16 01:24:36'),
(71, 1, 1, 7, 'Multimedia Technology', 'CSE-4109', 3.00, 1, '2020-03-16 01:25:16', '2020-03-16 01:25:16'),
(72, 1, 1, 7, 'Viva Voce', 'CSE-4150', 0.75, 1, '2020-03-16 01:25:38', '2020-03-16 01:25:38'),
(73, 1, 1, 8, 'Project/Thesis', 'CSE-4200', 3.00, 1, '2020-03-16 01:26:38', '2020-03-16 01:26:38'),
(74, 1, 1, 8, 'Computer Networks', 'CSE-4201', 3.00, 1, '2020-03-16 01:27:36', '2020-03-16 01:27:36'),
(75, 1, 1, 8, 'Computer Networks Sessional', 'CSE-4202', 1.50, 1, '2020-03-16 01:28:17', '2020-03-16 01:28:17'),
(76, 1, 1, 8, 'Computer Graphics', 'CSE-4203', 3.00, 1, '2020-03-16 01:33:02', '2020-03-16 01:33:02'),
(77, 1, 1, 8, 'Computer Graphics Sessional', 'CSE-4204', 1.50, 1, '2020-03-16 01:33:42', '2020-03-16 01:33:42'),
(78, 1, 1, 8, 'Interfacing and Microcontrollers', 'CSE-4205', 3.00, 1, '2020-03-16 01:36:52', '2020-03-16 01:36:52'),
(79, 1, 1, 8, 'Interfacing and Microcontrollers Sessional', 'CSE-4206', 0.75, 1, '2020-03-16 01:39:10', '2020-03-16 01:39:10'),
(80, 1, 1, 8, 'Wireless Communication', 'CSE-4211', 3.00, 1, '2020-03-16 01:39:48', '2020-03-16 01:39:48'),
(81, 1, 1, 8, 'Industrial Management and Accounting', 'HUM-4201', 3.00, 1, '2020-03-16 01:40:15', '2020-03-16 01:40:15'),
(82, 1, 1, 8, 'Viva Voce', 'CSE-4250', 0.75, 1, '2020-03-16 01:40:36', '2020-03-16 01:40:36');

-- --------------------------------------------------------

--
-- Table structure for table `course_assigns`
--

CREATE TABLE `course_assigns` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `department_id` int(11) NOT NULL,
  `session_id` int(11) NOT NULL,
  `levelterm_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `course_assigns`
--

INSERT INTO `course_assigns` (`id`, `teacher_id`, `department_id`, `session_id`, `levelterm_id`, `course_id`, `status`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 3, 1, 1, 1, 3, 1, 2, '2020-03-16 10:37:20', '2020-03-16 10:37:20'),
(2, 3, 1, 2, 2, 15, 1, 2, '2020-04-06 02:01:12', '2020-04-06 02:01:12'),
(3, 2, 1, 1, 2, 16, 1, 2, '2020-06-13 05:53:09', '2020-06-13 05:53:09');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `faculty_id` int(11) NOT NULL,
  `department_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `faculty_id`, `department_name`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Computer Science and Engineering', 1, '2020-03-12 01:58:08', '2020-03-12 01:58:08'),
(2, 1, 'Electrical and Electronic Engineering', 1, '2020-03-12 01:58:14', '2020-03-12 01:58:14'),
(3, 1, 'Electronic and Telecommunication Engineering', 1, '2020-03-12 05:28:26', '2020-03-12 05:28:26'),
(4, 1, 'Information and Communication Engineering', 1, '2020-03-12 05:29:14', '2020-03-12 05:29:14'),
(5, 1, 'Civil Engineering', 1, '2020-03-12 05:29:44', '2020-03-12 05:29:44'),
(6, 1, 'Architecture', 1, '2020-03-12 05:30:03', '2020-03-12 05:30:03'),
(7, 1, 'Urban and Regional Planning', 1, '2020-03-12 05:30:25', '2020-03-12 05:30:25'),
(8, 2, 'Mathematics', 1, '2020-03-12 05:31:33', '2020-03-12 05:31:33'),
(9, 2, 'Physics', 1, '2020-03-12 05:31:53', '2020-03-12 05:31:53'),
(10, 2, 'Pharmacy', 1, '2020-03-12 05:32:10', '2020-03-12 05:32:10'),
(11, 2, 'Chemistry', 1, '2020-03-12 05:32:26', '2020-03-12 05:32:26'),
(12, 2, 'Statistics', 1, '2020-03-12 05:32:44', '2020-03-12 05:32:44'),
(13, 3, 'Business Administration', 1, '2020-03-12 05:33:49', '2020-03-12 05:33:49'),
(14, 3, 'Tourism and Hospitality Management', 1, '2020-03-12 05:34:09', '2020-03-12 05:34:09'),
(15, 4, 'Economics', 1, '2020-03-12 05:34:58', '2020-03-12 05:34:58'),
(16, 4, 'Bangla', 1, '2020-03-12 05:35:15', '2020-03-12 05:35:15'),
(17, 4, 'Social Work', 1, '2020-03-12 05:35:41', '2020-03-12 05:35:41'),
(18, 4, 'English', 1, '2020-03-12 05:35:59', '2020-03-12 05:35:59'),
(19, 4, 'Public Administration', 1, '2020-03-12 05:36:18', '2020-03-12 05:36:18'),
(20, 4, 'History and Bangladesh Studies', 1, '2020-03-12 05:36:39', '2020-03-12 05:36:39'),
(21, 5, 'Geography and Environment', 1, '2020-03-12 05:37:06', '2020-03-12 05:37:06');

-- --------------------------------------------------------

--
-- Table structure for table `faculties`
--

CREATE TABLE `faculties` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `faculty_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faculties`
--

INSERT INTO `faculties` (`id`, `faculty_name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Engineering and Technology', 1, '2020-03-12 01:57:41', '2020-03-12 05:25:42'),
(2, 'Science', 1, '2020-03-12 01:57:45', '2020-03-12 01:57:45'),
(3, 'Business Studies', 1, '2020-03-12 05:26:08', '2020-03-12 05:26:08'),
(4, 'Humanities and Social Science', 1, '2020-03-12 05:26:26', '2020-03-12 05:26:26'),
(5, 'Life and Earth Science', 1, '2020-03-12 05:26:39', '2020-03-12 05:26:39');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `header_footers`
--

CREATE TABLE `header_footers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `owner_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner_subtitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `copyright` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `header_footers`
--

INSERT INTO `header_footers` (`id`, `owner_name`, `owner_subtitle`, `mobile`, `address`, `copyright`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Pabna University Of Science And Technology', 'Understanding is the best method of Learning', '8801835429094', 'Rajapur, Pabna Sader, Pabna', 'ICT Cell, PUST', 1, '2020-03-12 01:57:19', '2020-03-12 01:57:19');

-- --------------------------------------------------------

--
-- Table structure for table `level_terms`
--

CREATE TABLE `level_terms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `level_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `term_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `level_terms`
--

INSERT INTO `level_terms` (`id`, `level_name`, `term_name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Fast', 'Fast', 1, '2020-03-12 01:58:50', '2020-03-12 01:58:50'),
(2, 'Fast', 'Second', 1, '2020-03-12 01:59:01', '2020-03-12 01:59:01'),
(3, 'Second', 'Fast', 1, '2020-03-12 01:59:09', '2020-03-12 01:59:09'),
(4, 'Second', 'Second', 1, '2020-03-12 01:59:15', '2020-03-12 01:59:15'),
(5, 'Third', 'Fast', 1, '2020-03-12 01:59:21', '2020-03-12 01:59:21'),
(6, 'Third', 'Second', 1, '2020-03-12 01:59:27', '2020-03-12 01:59:27'),
(7, 'Forth', 'Fast', 1, '2020-03-12 01:59:33', '2020-03-12 01:59:33'),
(8, 'Forth', 'Second', 1, '2020-03-12 01:59:40', '2020-03-12 01:59:40');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_01_15_154309_create_header_footers_table', 1),
(5, '2020_01_16_183959_create_slides_table', 1),
(6, '2020_02_19_064727_create_faculties_table', 1),
(7, '2020_02_19_100342_create_departments_table', 1),
(8, '2020_02_20_075929_create_sessions_table', 1),
(9, '2020_02_20_142348_create_level_terms_table', 1),
(10, '2020_02_21_151517_create_user_types_table', 1),
(11, '2020_02_24_100753_create_courses_table', 1),
(12, '2020_03_04_045128_create_students_table', 1),
(13, '2020_03_09_104845_create_chairman_deiails_table', 1),
(17, '2020_03_15_100117_create_course_assigns_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `session_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `session_name`, `status`, `created_at`, `updated_at`) VALUES
(1, '2013-2014', 1, '2020-03-12 01:58:28', '2020-03-12 01:58:28'),
(2, '2014-2015', 1, '2020-03-12 01:58:35', '2020-03-12 01:58:35'),
(3, '2015-2016', 1, '2020-03-12 01:58:39', '2020-03-12 01:58:39');

-- --------------------------------------------------------

--
-- Table structure for table `slides`
--

CREATE TABLE `slides` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `silde_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `silde_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `silde_description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slides`
--

INSERT INTO `slides` (`id`, `silde_image`, `silde_title`, `silde_description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'admin/assets/slider/15520513772.jpg', 'Beauty of PUST', 'Pabna University of Science and Technology.', 1, '2020-03-12 01:54:58', '2020-03-12 01:54:58'),
(2, 'admin/assets/slider/69394824_383552949002553_8122286857615572992_o.jpg', 'Independence Square In PUST', 'Pabna University of Science and Technology.', 1, '2020-03-12 01:56:17', '2020-03-12 01:56:17'),
(3, 'admin/assets/slider/69843463_1134466773415975_504008858792886272_o.jpg', 'Beauty of PUST', 'Pabna University of Science and Technology.', 1, '2020-03-12 01:56:47', '2020-03-12 01:56:47');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `father_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `father_mobile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `father_profession` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mother_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mother_mobile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mother_profession` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `student_mobile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_relagion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_roll` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_reg` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `faculty_id` int(11) NOT NULL,
  `department_id` int(11) NOT NULL,
  `levelterm_id` int(11) NOT NULL,
  `session_id` int(11) NOT NULL,
  `student_photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `encrypted_password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `student_name`, `father_name`, `father_mobile`, `father_profession`, `mother_name`, `mother_mobile`, `mother_profession`, `email_address`, `student_mobile`, `student_relagion`, `student_roll`, `student_reg`, `faculty_id`, `department_id`, `levelterm_id`, `session_id`, `student_photo`, `address`, `status`, `password`, `encrypted_password`, `user_id`, `created_at`, `updated_at`) VALUES
(2, 'Monirul Islam', 'Md. Mohir Uddin', '8801718416388', 'Farmer', 'Monira khatun', '8801733416214', 'Housewife', 'monir@gmail.com', '8801835429098', 'Islam', '140102', '101581', 1, 1, 1, 1, NULL, 'Rajshahi', 1, '8801835429098', '$2y$10$xm4ieHrZKio6wk2j3Me2luA0bRIzED9N2wigRhiclYQ6EZ3/LgNj6', 1, '2020-03-13 06:14:52', '2020-03-13 06:14:52'),
(3, 'Md. Bipul Hossain', 'Md. Biplob Hossain', '8801718416382', 'Farmer', 'Bilkis khatun', '8801733416214', 'Housewife', 'bipul@gmail.com', '8801835429097', 'Islam', '140103', '101582', 1, 1, 1, 1, NULL, 'Kustia', 1, '8801835429097', '$2y$10$aXWlbru0mjF0FvVoT1RiUedsvVCmSEUEC5ipUZmwgoLOtRrGb8STm', 1, '2020-03-13 06:16:02', '2020-03-13 06:16:02'),
(4, 'Shahrier Islam', 'Soriful Islam', '8801718416382', 'Teacher', 'Sofia Khatun', '8801733416216', 'Housewife', 'shahrier@gmail.com', '8801835429099', 'Islam', '140201', '101680', 1, 2, 1, 1, NULL, 'Mirpur -2, Dhaka-1216', 1, '8801835429099', '$2y$10$CEcTWfc.8.rSRBcwV/OdyecRPAmiOXebje0W5oE4ck2xvjti6QNiC', 1, '2020-03-13 06:17:51', '2020-03-13 06:17:51'),
(5, 'Najmul Islam', 'Md. Nurul Uddin', '8801718416380', 'Farmer', 'nila khatun', '8801733416216', 'Housewife', 'najmul@gmail.com', '8801835429095', 'Islam', '150101', '111580', 1, 1, 1, 2, NULL, 'Chuadanga', 1, '8801835429095', '$2y$10$3CbUksYObgKAy4C4jdDZ0OaFQ2xx2h1w6BHF1yeUrMCxL0Sp2ss3O', 1, '2020-03-13 06:19:11', '2020-03-13 06:19:11'),
(6, 'Md. Rezwanul Islam', 'Md. Raihanul Islam', '8801718416384', 'Teacher', 'Mst. Ratema Khatun', '8801733416216', 'Housewife', 'rezu@gmail.com', '8801835429098', 'Islam', '140201', '101680', 1, 2, 1, 1, NULL, 'Nouga', 1, '8801835429098', '$2y$10$wB6MfwQB7/sCO5YuLHFaDOWcR9lhwCTX04oMQyEI9Dl32WG0bFLfW', 1, '2020-06-16 04:13:14', '2020-06-16 04:13:14'),
(7, 'Sumon Al Reza', 'Md. Zahidul Islam', '8801718416383', 'Teacher', 'Mst. Ratema Khatun', '8801733416213', 'Housewife', 'sumon@gmail.com', '8801835429092', 'Islam', '140101', '101580', 1, 1, 1, 1, 'C:\\xampp\\tmp\\php2E62.tmp', 'Chuadanga', 1, '8801835429092', '$2y$10$cVSICzcjAmBdJ2YatZ2vHusrcZsNSC5NhAvkPtRpSV8OjGA1/texy', 1, '2020-06-16 04:28:35', '2020-06-16 04:28:35'),
(8, 'Milton Kobir', 'Md. Zahidul Islam', '8801718416383', 'Banker', 'Mst. Fatema Khatun', '8801733416213', 'Public Servent', 'kabir@gmail.com', '8801835429098', 'Islam', '140116', '101593', 1, 1, 1, 1, 'C:\\xampp\\tmp\\php68DC.tmp', 'kustia', 1, '8801835429098', '$2y$10$GEu2y7XqDgezRtuXQeV2ZOGsYPwPvi2GwLeaj0PgDYLet7fOokazO', 1, '2020-06-16 05:52:57', '2020-06-16 05:52:57');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department_id` int(11) DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role`, `department_id`, `name`, `mobile`, `avatar`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', NULL, 'Admin', '8801835429094', 'admin/assets/avatar/51520228_2200572403493628_5385320846615117824_n.jpg', 'hasibur140115@gmail.com', NULL, '$2y$10$vGiOVrFHsod3rqzYbrXHrOGCI2EEqPY4pe5uQetcZEJS/na6oyigu', NULL, '2020-03-12 01:41:36', '2020-03-12 01:54:27'),
(2, 'Chairman', 1, 'Md. Mahmudul Hasan', '8801711333333', 'admin/assets/avatar/PUST_100011.jpg', 'mukul_cse_ruet@yahoo.com', NULL, '$2y$10$dcPE0wY6CmCO5A5jHq6x2eaI0jMmWmzvwmJT8fPygrx6K9bp/cB9e', NULL, '2020-03-12 02:48:17', '2020-03-15 09:42:45'),
(3, 'Teacher', 1, 'Subir Saha', '8801711272047', 'admin/assets/avatar/subir saha.jpg', 'subir_saha@gmail.com', NULL, '$2y$10$xY0XO3Zug.MTJURXOYDIiu98.d8ho2RA3Yl38IMKDyRK5YMY8476S', NULL, '2020-03-12 02:49:29', '2020-03-16 06:18:31'),
(4, 'Chairman', 5, 'Md. Raquibul Hasan', '8801717621147', 'admin/assets/avatar/PUST_100121.jpg', 'rakibul@gmail.com', NULL, '$2y$10$xUWAZYOXD/TdSlLRFbzcm.Ut00vzwdifPx4p7XFCDEdpTT6kvGL6K', NULL, '2020-03-15 02:58:50', '2020-03-15 10:36:27'),
(5, 'Chairman', 2, 'Md. Galib Hasan', '8801712853843', NULL, 'eeemgh@yahoo.com', NULL, '$2y$10$JzcqNpQAVmzybBgQj6zv8u8rAcp9uyAZaHKgg5JsGSCKGmX4iThNC', NULL, '2020-03-15 03:00:39', '2020-03-15 03:00:39'),
(6, 'Teacher', 3, 'Dilip Kumar Sarker', '8801712102477', NULL, 'dks_ms@yahoo.com', NULL, '$2y$10$dNjJ9BGVLdyC7ZK.8Htjx.dxJmDsoYZCpSelGNZILlSphJcCZnUQO', NULL, '2020-03-15 03:38:50', '2020-03-15 03:38:50'),
(7, 'Teacher', 2, 'Nadia Afrin', '8801777888463', NULL, 'nadia.afrin89@gmail.com', NULL, '$2y$10$jc4swecOJhMqNNMMeEfaUeAxA9vWPoURIGzdTNE2hBpbs1kLTKosa', NULL, '2020-03-15 03:40:36', '2020-03-15 03:40:36'),
(8, 'Teacher', 5, 'Dr. Md. Rashedul Haque', '8801724450396', NULL, 'haque_mr@hotmail.com', NULL, '$2y$10$t9nKE4STRCTX4Pj31VfLPePh6pfnhTikaHtu7GfepBqtMhAzcg2Xy', NULL, '2020-03-15 03:42:41', '2020-03-15 03:42:41'),
(9, 'Teacher', 1, 'Md. Niaz Imtiaz', '8801723263163', NULL, 'imtiaz.cse.buet@gmail.com', NULL, '$2y$10$ptY6AGQZHTzlg0E9hMwr0ernfFYESUuhAQmR26jATvTb.UvQHO136', NULL, '2020-03-15 09:38:39', '2020-03-15 09:38:39'),
(10, 'Teacher', 10, 'monir hasan', '8801711556677', NULL, 'monir@gmail.com', NULL, '$2y$10$.5rTKkhK30sGXpjyANL7Z.g5kIPG6HNFAdGN2vp2g008uBBYx4ayS', NULL, '2020-05-06 22:52:57', '2020-05-06 22:52:57'),
(11, 'Librarian', NULL, 'jabed', '01722556677', NULL, 'jabed@gmail.com', NULL, '12345678', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_types`
--

CREATE TABLE `user_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `usertype_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_types`
--

INSERT INTO `user_types` (`id`, `usertype_name`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Chairman', 1, '2020-03-12 02:02:11', '2020-03-12 02:02:11'),
(3, 'Teacher', 1, '2020-03-12 02:02:21', '2020-03-12 02:02:21'),
(4, 'Librarian', 1, '2020-03-12 02:03:10', '2020-03-12 02:03:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chairman_deiails`
--
ALTER TABLE `chairman_deiails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_assigns`
--
ALTER TABLE `course_assigns`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faculties`
--
ALTER TABLE `faculties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `header_footers`
--
ALTER TABLE `header_footers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `level_terms`
--
ALTER TABLE `level_terms`
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
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_mobile_unique` (`mobile`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_types`
--
ALTER TABLE `user_types`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chairman_deiails`
--
ALTER TABLE `chairman_deiails`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `course_assigns`
--
ALTER TABLE `course_assigns`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `faculties`
--
ALTER TABLE `faculties`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `header_footers`
--
ALTER TABLE `header_footers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `level_terms`
--
ALTER TABLE `level_terms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `sessions`
--
ALTER TABLE `sessions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `slides`
--
ALTER TABLE `slides`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user_types`
--
ALTER TABLE `user_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
