-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 04, 2018 at 04:12 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `catagories`
--

CREATE TABLE `catagories` (
  `cat_id` int(3) NOT NULL,
  `cat_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `catagories`
--

INSERT INTO `catagories` (`cat_id`, `cat_title`) VALUES
(1, 'bootstrap'),
(2, 'php'),
(3, 'javascriptzX'),
(4, 'java');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(3) NOT NULL,
  `comment_post_id` int(3) NOT NULL,
  `comment_author` varchar(255) NOT NULL,
  `comment_email` varchar(255) NOT NULL,
  `comment_content` text NOT NULL,
  `comment_status` varchar(255) NOT NULL,
  `comment_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `comment_post_id`, `comment_author`, `comment_email`, `comment_content`, `comment_status`, `comment_date`) VALUES
(1, 1, 'Sidd', 'siddharth.m98@gmail.com', 'Awesome CMS', 'approved', '2018-03-03'),
(2, 1468, 'man', 'dam@gmail.com', 'awesome too ', 'unapproved', '2018-03-03'),
(3, 6131, 'columber', 'co@reddit.com', 'i too see this ', 'approved', '2018-03-03'),
(6, 7305, 'dsf', 'sdsdas@fasad.com', 'sdf ', 'unapproved', '2018-03-04'),
(5056, 6867, 'sd', '@n.n', 'gf ', 'approved', '2018-03-04'),
(6099, 2223, 'admin', 'admin@gmail.com', 'hello ', 'approved', '2018-03-04');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(3) NOT NULL,
  `post_catagory_id` int(3) NOT NULL,
  `post_title` varchar(255) NOT NULL,
  `post_author` varchar(255) NOT NULL,
  `post_date` date NOT NULL,
  `post_image` text NOT NULL,
  `post_content` text NOT NULL,
  `post_tags` varchar(255) NOT NULL,
  `post_comment_count` int(11) NOT NULL,
  `post_status` varchar(255) NOT NULL DEFAULT 'draft'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `post_catagory_id`, `post_title`, `post_author`, `post_date`, `post_image`, `post_content`, `post_tags`, `post_comment_count`, `post_status`) VALUES
(1, 3, ' New day', '   Sidd', '2004-03-18', 'aviion-438739-unsplash.jpg', ' Everyday seems to be a big day for me', 'day,big,me', 39, 'new'),
(2, 0, '2nd try', 'Siddharth M ', '2003-03-18', 'img2.jpg', 'Once upon a time, most developers used jQuery to animate things in the browser. Fade this, expand that; simple stuff. As interactive projects got more aggressive and mobile devices burst onto the scene, performance became increasingly important. Flash faded away and talented animators pressed HTML5 to do things it had never done before. They needed better tools for complex sequencing and top-notch performance. jQuery simply wasn\'t designed for that. Browsers matured and started offering solutions.\r\n\r\nThe most widely-acclaimed solution was CSS Animations (and Transitions). The darling of the industry for years now, CSS Animations have been talked about endlessly at conferences where phrases like \"hardware accelerated\" and \"mobile-friendly\" tickle the ears of the audience. JavaScript-based animation was treated as if it was antiquated and \"dirty\". But is it?', 'may,work', 38, 'new');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_firstname` varchar(255) NOT NULL,
  `user_lastname` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_image` text NOT NULL,
  `user_role` varchar(255) NOT NULL,
  `user_status` varchar(255) NOT NULL,
  `randSalt` varchar(255) NOT NULL DEFAULT '$2y$10$sleudbryw45692kartsb90'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `user_password`, `user_firstname`, `user_lastname`, `user_email`, `user_image`, `user_role`, `user_status`, `randSalt`) VALUES
(636, 'sidd', '$2y$10$sleudbryw45692kartsb9uxvMq3btvIrBx6cdWR6neaTphbiNFQGm', '', '', 'sidd@gmail.com', '', 'admin', '', '$2y$10$sleudbryw45692kartsb90'),
(2812, 'client@gmail.com', '$2y$10$sleudbryw45692kartsb9uxvMq3btvIrBx6cdWR6neaTphbiNFQGm', '', '', 'client@gmail.com', '', 'subscriber', '', '$2y$10$sleudbryw45692kartsb90');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `catagories`
--
ALTER TABLE `catagories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
