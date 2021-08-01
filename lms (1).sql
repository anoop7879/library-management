-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2021 at 09:45 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(250) NOT NULL,
  `mobile` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `mobile`) VALUES
(1, 'admin', 'admin@gmail.com', '1234', 1148458757);

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `book_id` int(11) NOT NULL,
  `book_name` varchar(200) NOT NULL,
  `book_author` varchar(200) NOT NULL,
  `book_cat` varchar(255) NOT NULL,
  `book_subcat` varchar(255) NOT NULL,
  `book_lang` varchar(255) NOT NULL,
  `book_as` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`book_id`, `book_name`, `book_author`, `book_cat`, `book_subcat`, `book_lang`, `book_as`) VALUES
(1, 'sadad', 'fgsfsf', 'Biographies', 'rfgdgsg', 'hindi', 1),
(2, 'adfadfa', 'lljljl', 'History', 'estgg', 'english', 0),
(3, 'esfsf', 'fsfsff', 'History', 'estgg', 'english', 0),
(4, 'hukhk', 'khjkhk', 'History', 'estgg', 'hindi', 0),
(5, 'huhefkuh', 'efsefsf', 'Biographies', 'rfgdgsg', 'hindi', 0),
(6, 'gjhj', 'jgj', 'hindi', 'estgg', 'english', 0);

-- --------------------------------------------------------

--
-- Table structure for table `book_cat`
--

CREATE TABLE `book_cat` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book_cat`
--

INSERT INTO `book_cat` (`cat_id`, `cat_name`) VALUES
(1, 'Biographies'),
(2, 'Education'),
(3, 'History'),
(4, 'hindi');

-- --------------------------------------------------------

--
-- Table structure for table `book_count`
--

CREATE TABLE `book_count` (
  `count_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `book_year` int(11) NOT NULL,
  `book_no` int(11) NOT NULL,
  `book_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `book_lang`
--

CREATE TABLE `book_lang` (
  `lang_id` int(11) NOT NULL,
  `booklang` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book_lang`
--

INSERT INTO `book_lang` (`lang_id`, `booklang`) VALUES
(1, 'hindi'),
(2, 'english');

-- --------------------------------------------------------

--
-- Table structure for table `book_subcat`
--

CREATE TABLE `book_subcat` (
  `subcat_id` int(11) NOT NULL,
  `subcat_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book_subcat`
--

INSERT INTO `book_subcat` (`subcat_id`, `subcat_name`) VALUES
(1, 'rfgdgsg'),
(2, 'estgg');

-- --------------------------------------------------------

--
-- Table structure for table `book_year`
--

CREATE TABLE `book_year` (
  `year_id` int(11) NOT NULL,
  `bookyear` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book_year`
--

INSERT INTO `book_year` (`year_id`, `bookyear`) VALUES
(1, 1990),
(2, 1991),
(3, 1993),
(4, 1994);

-- --------------------------------------------------------

--
-- Table structure for table `issue_book`
--

CREATE TABLE `issue_book` (
  `issue_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `book_name` varchar(255) NOT NULL,
  `issue_date` varchar(255) NOT NULL,
  `return_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `userdata`
--

CREATE TABLE `userdata` (
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `DOB` varchar(255) NOT NULL,
  `bio` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `about` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userdata`
--

INSERT INTO `userdata` (`user_id`, `name`, `email`, `password`, `phone`, `gender`, `DOB`, `bio`, `city`, `state`, `country`, `about`, `created_at`, `updated_at`) VALUES
(1, 'anoop sawliya', 'anoop@gmail.com', '123', '4524454445', 'Male', '06/Jul/2005', 'uioopip', 'Dewas', 'Madhya Pradesh', 'India', 'yuoiu', '2021-06-30 15:55:58', '2021-06-30 15:55:58'),
(2, 'shailee mandloi', 'shailee@gmail.com', '1234', '0000000000', 'Female', '01/Dec/2009', 'pagal khana', 'Dewas', 'Madhya Pradesh', 'India', 'maha pagal', '2021-07-02 10:43:42', '2021-07-02 10:43:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `book_cat`
--
ALTER TABLE `book_cat`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `book_count`
--
ALTER TABLE `book_count`
  ADD PRIMARY KEY (`count_id`);

--
-- Indexes for table `book_lang`
--
ALTER TABLE `book_lang`
  ADD PRIMARY KEY (`lang_id`);

--
-- Indexes for table `book_subcat`
--
ALTER TABLE `book_subcat`
  ADD PRIMARY KEY (`subcat_id`);

--
-- Indexes for table `book_year`
--
ALTER TABLE `book_year`
  ADD PRIMARY KEY (`year_id`);

--
-- Indexes for table `issue_book`
--
ALTER TABLE `issue_book`
  ADD PRIMARY KEY (`issue_id`);

--
-- Indexes for table `userdata`
--
ALTER TABLE `userdata`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `book_cat`
--
ALTER TABLE `book_cat`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `book_count`
--
ALTER TABLE `book_count`
  MODIFY `count_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `book_lang`
--
ALTER TABLE `book_lang`
  MODIFY `lang_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `book_subcat`
--
ALTER TABLE `book_subcat`
  MODIFY `subcat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `book_year`
--
ALTER TABLE `book_year`
  MODIFY `year_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `issue_book`
--
ALTER TABLE `issue_book`
  MODIFY `issue_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `userdata`
--
ALTER TABLE `userdata`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
