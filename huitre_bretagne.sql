-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 06, 2021 at 04:27 PM
-- Server version: 5.7.24
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `huitre_bretagne`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` longtext,
  `content` longtext,
  `alt` longtext,
  `img` longtext,
  `category` longtext
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `content`, `alt`, `img`, `category`) VALUES
(4, 'article recette 1', '                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sunt iusto fugit, aspernatur dolorem fugiat aperiam fuga alias ut reprehenderit reiciendis officiis necessitatibus aut, minima omnis?', 'recette_huitre', 'tototototo\\public\\back\\images\\hbhuitre (16).jpg', 'recettes'),
(5, 'article astuce 1', '                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sunt iusto fugit, aspernatur dolorem fugiat aperiam fuga alias ut reprehenderit reiciendis officiis necessitatibus aut, minima omnis?', 'huitre_bretagne', 'tototototo\\public\\back\\images\\hbhuitres_ambances_2_1.jpeg', 'astuces'),
(7, 'article recette 2', '                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sunt iusto fugit, aspernatur dolorem fugiat aperiam fuga alias ut reprehenderit reiciendis officiis necessitatibus aut, minima omnis?', 'recette_huitre', 'tototototo\\public\\back\\images\\hbbruce-chapman-N64QHk0dFgg-unsplash.jpg', 'recettes'),
(8, 'article tourisme 1', '                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sunt iusto fugit, aspernatur dolorem fugiat aperiam fuga alias ut reprehenderit reiciendis officiis necessitatibus aut, minima omnis?', 'tourisme_bretagne', 'tototototo\\public\\back\\images\\hbtanja-cotoaga-2qsASzkpFvw-unsplash.jpg', 'tourisme'),
(9, 'article tourisme 2', '                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sunt iusto fugit, aspernatur dolorem fugiat aperiam fuga alias ut reprehenderit reiciendis officiis necessitatibus aut, minima omnis?', 'tourisme_bretagne', 'tototototo\\public\\back\\images\\hbhuitre (19).jpg', 'tourisme'),
(10, 'article astuce 2', '                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sunt iusto fugit, aspernatur dolorem fugiat aperiam fuga alias ut reprehenderit reiciendis officiis necessitatibus aut, minima omnis?', 'huitre_bretagne', 'tototototo\\public\\back\\images\\hbHuitres-Vernet-Speciale.png', 'astuces'),
(11, 'article recette 3', '                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sunt iusto fugit, aspernatur dolorem fugiat aperiam fuga alias ut reprehenderit reiciendis officiis necessitatibus aut, minima omnis?', 'recette_huitre', 'tototototo\\public\\back\\images\\hbhuitre (11).jpg', 'recettes'),
(12, 'article astuce 3', '                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sunt iusto fugit, aspernatur dolorem fugiat aperiam fuga alias ut reprehenderit reiciendis officiis necessitatibus aut, minima omnis?', 'huitre_bretagne', 'tototototo\\public\\back\\images\\hbIMG_0877.jpeg', 'astuces'),
(14, 'article tourisme 3', '                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sunt iusto fugit, aspernatur dolorem fugiat aperiam fuga alias ut reprehenderit reiciendis officiis necessitatibus aut, minima omnis?', 'tourisme_bretagne', 'tototototo\\public\\back\\images\\hbexplorez-les-parcs-a-huitres-avec-ivan-7-1920x960-crop-1542040528.jpg', 'tourisme');

-- --------------------------------------------------------

--
-- Table structure for table `commentaires`
--

CREATE TABLE `commentaires` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` longtext,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `content` longtext,
  `article_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `commentaires`
--

INSERT INTO `commentaires` (`id`, `name`, `time`, `content`, `article_id`) VALUES
(8, 'lisa', '2021-03-11 08:47:24', 'good idea for cook', 5),
(9, 'theo', '2021-03-11 11:08:41', 'lololo', 10),
(10, 'cedric', '2021-03-11 14:11:24', 'pas bien a refaire', 5),
(11, 'sam', '2021-03-23 14:52:40', 'really?', 7),
(12, 'sam', '2021-03-23 14:52:47', 'really?', 7);

-- --------------------------------------------------------

--
-- Table structure for table `hbadmin`
--

CREATE TABLE `hbadmin` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `adminname` longtext,
  `mail` longtext,
  `pass` longtext
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hbadmin`
--

INSERT INTO `hbadmin` (`id`, `adminname`, `mail`, `pass`) VALUES
(1, 'ting.kc', 'ting.kc.56@gmail.com', '$2y$10$oKmIQWrw9qGHUbpL7MqmMeK/uBwg9wgLtMHwGtvIFLoZDwojTf5c2');

-- --------------------------------------------------------

--
-- Table structure for table `huitres`
--

CREATE TABLE `huitres` (
  `id` int(10) UNSIGNED NOT NULL,
  `img` longtext,
  `alt` longtext,
  `h_name` longtext,
  `h_content` longtext
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `huitres`
--

INSERT INTO `huitres` (`id`, `img`, `alt`, `h_name`, `h_content`) VALUES
(1, 'tototototo\\public\\front\\images\\huitre 1.jpg', '1', 'huitre 1', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut eum similique repellat a laborum, rerum voluptates ipsam eos quo tempore iusto doloresimilique repellat a laborum, rerum voluptates ipsam eos quo tempore iusto doloresimilique repellat a laborum, rerum voluptates ipsam eos quo tempore iusto dolore'),
(2, 'tototototo\\public\\front\\images\\huitre 2.jpg', '2', 'huitre 2', 'similique repellat a laborum, rerum voluptates ipsam eos quo tempore iusto dolore similique repellat a laborum, rerum voluptates ipsam eos quo tempore iusto dolore similique repellat a laborum, rerum voluptates ipsam eos quo tempore iusto dolore similique repellat a laborum, rerum voluptates ipsam eos quo tempore iusto dolore'),
(3, 'tototototo\\public\\front\\images\\huitre 3.jpg', '3', 'huitre 3', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut eum similique repellat a laborum, rerum voluptates ipsam eos quo tempore iusto dolore similique repellat a laborum, rerum voluptates ipsam eos quo tempore iusto dolore similique repellat a laborum, rerum voluptates ipsam eos quo tempore iusto dolore'),
(4, 'tototototo\\public\\front\\images\\huitre 4.jpg', '4', 'huitre 4', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut eum Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut eum Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut eum Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut eum');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `mname` longtext,
  `mail` longtext,
  `sujet` longtext,
  `amessage` longtext
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `time`, `mname`, `mail`, `sujet`, `amessage`) VALUES
(1, '2021-03-03 10:40:30', 'Mr.try', 'love@hb.fr', 'a try', 'just a try, a very importante try.'),
(2, '2021-03-03 10:42:23', 'ting.kc', 'ting.kc.56@gmail.com', 'hey', 'I just want to say to you. '),
(4, '2021-03-03 10:55:23', 'Julie', 'ting.kc.56@gmail.com', 'success', 'if you receive it, means i am good.'),
(5, '2021-03-03 10:56:58', 'Anne', 'ting.kc.56@gmail.com', 'just for css', 'if you receive it, means i am good.'),
(6, '2021-04-01 09:05:41', 'ting.kc', 'ting.kc.56@gmail.com', '456ol', 'dsafdsafd'),
(7, '2021-04-01 12:41:16', 'ting.kc', 'ting.kc.56@gmail.com', 'dafds', 'sdd'),
(8, '2021-04-01 12:41:25', 'ting.kc', 'ting.kc.56@gmail.com', 'dafds', 'sdd'),
(9, '2021-04-01 12:42:47', 'ting.kc', 'ting.kc.56@gmail.com', '456ol', '787878'),
(10, '2021-04-01 12:48:03', 'ting.kc', 'ting.kc.56@gmail.com', '456ol', 'ddd'),
(11, '2021-04-01 12:54:20', 'ting.kc', 'ting.kc.56@gmail.com', '55', '55'),
(12, '2021-04-01 12:54:32', 'ting.kc', 'ting.kc.56@gmail.com', '55', '55'),
(13, '2021-04-01 12:54:46', 'ting.kc', 'ting.kc.56@gmail.com', 'asfd', '66'),
(14, '2021-04-01 12:59:01', 'ting.kc', 'ting.kc.56@gmail.com', 'dfsgdfsgf', 'fdsgdfg'),
(15, '2021-04-01 13:01:07', 'ting.kc', 'ting.kc.56@gmail.com', 'dfsgdfsgf', 'fdsgdfg'),
(16, '2021-04-02 07:46:57', 'ting.kc', 'ting.kc.56@gmail.com', '456ol', 'sdqfsdqfd');

-- --------------------------------------------------------

--
-- Table structure for table `producers`
--

CREATE TABLE `producers` (
  `id` int(20) UNSIGNED NOT NULL,
  `p_name` longtext,
  `adresse` longtext,
  `tel` longtext,
  `p_content` longtext,
  `alt` longtext,
  `img` longtext,
  `huitre_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `producers`
--

INSERT INTO `producers` (`id`, `p_name`, `adresse`, `tel`, `p_content`, `alt`, `img`, `huitre_id`) VALUES
(6, 'sam', '20 rue de la mer\r\n56360\r\nsene', '06 23 23 23 23', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut eum similique repellat a laborum, rerum voluptates ipsam eos quo tempore iusto dolore modi dolorum in pariatur. Incidunt repellendus praesentium quae!', '3', 'tototototo\\public\\back\\images\\hbmichal-bar-haim-RM9yEZLoJSc-unsplash.jpg', 1),
(7, 'Emma', '12 chemin de la pante\r\n56782 arradon', '06 89 89 89 89', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut eum similique repellat a laborum, rerum voluptates ipsam eos quo tempore iusto dolore modi dolorum in pariatur. Incidunt repellendus praesentium quae!', '1', 'tototototo\\public\\back\\images\\hbmichal-bar-haim-RM9yEZLoJSc-unsplash.jpg', 3),
(8, 'Philippe', '56 rue de la reve\r\n56 895 st Paradis', '06 56 56 56 56', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut eum similique repellat a laborum, rerum voluptates ipsam eos quo tempore iusto dolore modi dolorum in pariatur. Incidunt repellendus praesentium quae!', '5', 'tototototo\\public\\back\\images\\hbmichal-bar-haim-RM9yEZLoJSc-unsplash.jpg', 4),
(9, 'mimi', '10 rue du commerce\r\n56000 vannes', '06 12 12 12 14', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut eum similique repellat a laborum, rerum voluptates ipsam eos quo tempore iusto dolore modi dolorum in pariatur. Incidunt repellendus praesentium quae!', '5', 'tototototo\\public\\back\\images\\hbmichal-bar-haim-RM9yEZLoJSc-unsplash.jpg', 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pseudo` longtext,
  `mail` longtext,
  `pass` longtext
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `pseudo`, `mail`, `pass`) VALUES
(1, 'ting.kc', 'ting.kc.56@gmail.com', '$2y$10$oKmIQWrw9qGHUbpL7MqmMeK/uBwg9wgLtMHwGtvIFLoZDwojTf5c2'),
(22, 'Juliette', '123@hu.com', '$2y$10$/C50imYQG3.6t7yJWW5CWOTcIwRUeFUob26Thb.PQONJMqOwIvcgy');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `commentaires`
--
ALTER TABLE `commentaires`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_commentaires_articles` (`article_id`);

--
-- Indexes for table `hbadmin`
--
ALTER TABLE `hbadmin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `huitres`
--
ALTER TABLE `huitres`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `producers`
--
ALTER TABLE `producers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_producers_huitres` (`huitre_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `commentaires`
--
ALTER TABLE `commentaires`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `hbadmin`
--
ALTER TABLE `hbadmin`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `huitres`
--
ALTER TABLE `huitres`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `producers`
--
ALTER TABLE `producers`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `commentaires`
--
ALTER TABLE `commentaires`
  ADD CONSTRAINT `FK_commentaires_articles` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`);

--
-- Constraints for table `producers`
--
ALTER TABLE `producers`
  ADD CONSTRAINT `FK_producers_huitres` FOREIGN KEY (`huitre_id`) REFERENCES `huitres` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
