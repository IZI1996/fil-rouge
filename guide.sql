-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 29 juil. 2021 à 09:22
-- Version du serveur :  10.4.14-MariaDB
-- Version de PHP : 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `guide`
--

-- --------------------------------------------------------

--
-- Structure de la table `archivecours`
--

CREATE TABLE `archivecours` (
  `archiveid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `coursid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `catg_specialty`
--

CREATE TABLE `catg_specialty` (
  `Catg_id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `score` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `catg_specialty`
--

INSERT INTO `catg_specialty` (`Catg_id`, `Name`, `score`) VALUES
(1, 'Scientific disciplines', '20'),
(2, 'futurer specialties', '30'),
(3, 'Information technology major', '5'),
(4, 'Business Specialties', '0'),
(5, 'Vocational training specialties', '40');

-- --------------------------------------------------------

--
-- Structure de la table `countries`
--

CREATE TABLE `countries` (
  `countr_id` int(11) NOT NULL,
  `countrie_Name` varchar(200) DEFAULT NULL,
  `img` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `countries`
--

INSERT INTO `countries` (`countr_id`, `countrie_Name`, `img`) VALUES
(1, 'Britain | United States of America', 'img/britania.jfif'),
(2, 'America| United States of America', 'img/amricaa.jpg'),
(3, 'Turkey', 'img/trkey.jpg'),
(4, 'Germany', 'img/germany.jpg'),
(5, 'Australia', 'img/ustralia.jpg'),
(6, 'Canada', 'img/canda.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `courses`
--

CREATE TABLE `courses` (
  `namecour` varchar(100) DEFAULT NULL,
  `imgcour` varchar(100) DEFAULT NULL,
  `idsplt` int(11) DEFAULT NULL,
  `description` varchar(400) NOT NULL,
  `idcours` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `courses`
--

INSERT INTO `courses` (`namecour`, `imgcour`, `idsplt`, `description`, `idcours`) VALUES
('Free courses from the World Bank Group with accredited certificates\r\n', 'img/business-en-ligne.jpg', 3, 'The World Bank Group offers the opportunity to take a number of free online courses with the possibility of obtaining an accredited certificate after successfully completing all course contents.\r\n\r\nThe courses are held online via the edX platform and deal with a number of topics including sustainable development issues, investment, finance and trade, as well as various other topics.', 1),
('Free courses from the World Bank Group with accredited certificates\r\n', 'img/business-en-ligne.jpg', 2, 'The World Bank Group offers the opportunity to take a number of free online courses with the possibility of obtaining an accredited certificate after successfully completing all course contents.\r\n\r\nThe courses are held online via the edX platform and deal with a number of topics including sustainable development issues, investment, finance and trade, as well as various other topics.', 2),
(' Asia Virtual Experience', 'img/téléchargement.jpg', 3, 'The American company Microsoft announced the provision of an internship opportunity in the field of marketing for undergraduate and master\'s students.\r\nThe training will be held online and aims to provide students with practical skills and experience.\r\nThe program is called “Asia Virtual Experience Program” and offers practical lessons in marketing and sales.', 3),
(' Asia Virtual Experience', 'img/téléchargement.jpg', 1, 'The American company Microsoft announced the provision of an internship opportunity in the field of marketing for undergraduate and master\'s students.\r\nThe training will be held online and aims to provide students with practical skills and experience.\r\nThe program is called “Asia Virtual Experience Program” and offers practical lessons in marketing and sales.', 4),
('Public Health and Nursing', 'img/header_small_1edad962-a11d-40ad-b2d6-c3edcad5e06f.webp', 1, 'Explore how nurses can assess community health needs, and analyse public health theories to lead public health promotion.', 70);

-- --------------------------------------------------------

--
-- Structure de la table `events`
--

CREATE TABLE `events` (
  `evenid` int(11) NOT NULL,
  `nameev` varchar(255) DEFAULT NULL,
  `statu` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `ispclt` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `events`
--

INSERT INTO `events` (`evenid`, `nameev`, `statu`, `img`, `ispclt`) VALUES
(1, 'Mathematics and Computer Science Conference for Young Researchers in Germany 2022', 'free', 'img/81658-upcomingevents-hlf.webp', 1),
(2, 'Mathematics and Computer Science Conference for Young Researchers in Germany 2022', 'free', 'img/81658-upcomingevents-hlf.webp', 2),
(3, 'Mathematics and Computer Science Conference for Young Researchers in Germany 2022', 'free', 'img/81658-upcomingevents-hlf.webp', 3),
(4, 'Google Technology Conferences', 'free', 'img/téléchargement.webp', 1),
(5, 'Google Technology Conferences', 'free', 'img/téléchargement.webp', 2),
(6, 'Google Technology Conferences', 'free', 'img/téléchargement.webp', 3),
(7, 'Million Arab programmers to win one million US dollars', 'free', 'img/91321-cec7e3logo.webp', 1),
(8, 'Million Arab programmers to win one million US dollars\r\n', 'free', 'img/91321-cec7e3logo.webp', 2),
(9, 'Million Arab programmers to win one million US dollars\r\n', 'free', 'img/91321-cec7e3logo.webp', 3);

-- --------------------------------------------------------

--
-- Structure de la table `expertt`
--

CREATE TABLE `expertt` (
  `expertid` int(11) NOT NULL,
  `nomexpert` varchar(255) DEFAULT NULL,
  `listtName` varchar(255) DEFAULT NULL,
  `job` varchar(255) DEFAULT NULL,
  `City` varchar(255) DEFAULT NULL,
  `phon` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `nombreuser` int(11) DEFAULT NULL,
  `projets` int(11) DEFAULT NULL,
  `img` varchar(200) DEFAULT NULL,
  `Worktime` datetime DEFAULT NULL,
  `catgid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `expertt`
--

INSERT INTO `expertt` (`expertid`, `nomexpert`, `listtName`, `job`, `City`, `phon`, `email`, `nombreuser`, `projets`, `img`, `Worktime`, `catgid`) VALUES
(1, 'soulaimane', 'ehmidan', 'doctor', 'tanger', '00283129', 'ehmidan@gmail', 1000, 122, 'img/photo_2021-02-19_20-16-15.jpg', '2021-07-13 03:49:42', 1);

-- --------------------------------------------------------

--
-- Structure de la table `grants`
--

CREATE TABLE `grants` (
  `grant_id` int(11) NOT NULL,
  `Name_grant` varchar(200) NOT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `countr_id` int(11) DEFAULT NULL,
  `more` varchar(500) NOT NULL,
  `Discription` varchar(500) NOT NULL,
  `amount` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `grants`
--

INSERT INTO `grants` (`grant_id`, `Name_grant`, `cat_id`, `countr_id`, `more`, `Discription`, `amount`) VALUES
(0, 'TÜBITAK Postgraduate Program', 5, 3, '', 'Travel expenses, private health insurance ', ' 2,500 Turkish Liras'),
(1, 'Ali Kuşçu Science and Technology', 3, 3, '', ' insurance, free accommodation and a full tuition fee waiver.', '€423.75-€565'),
(2, 'Ibn Sina Scholarship for Medical Sciences', 1, 3, 'turkiyeburslari', 'is a government-funded, ', ''),
(3, 'Sports Excellence Scholarship Program', 1, 3, '', 'For those who excel mathematically ', '500 lira'),
(4, 'Sabancı University Postgraduate Scholarships', 1, 3, 'https://www.sabanciuniv.edu/en', 'covers the costs of studying, housing ', ''),
(5, 'Istanbul sehir university of  sciences \r\n', 1, 3, 'https://www.sehir.edu.tr/en', 'Most competitive scholarships', ''),
(6, 'TÜBITAK Postgraduate Program', 1, 3, '', 'Travel expenses, insurance, ', '  2,500 Turkish Liras'),
(8, 'TÜBITAK Postgraduate Program', 2, 3, '', 'Travel expenses, private insurance ', ' 2,500 Turkish Liras'),
(9, 'TÜBITAK Postgraduate Program', 3, 3, '', 'Travel expenses, private insurance ', '2,500 Turkish Liras'),
(10, 'TÜBITAK Postgraduate Program', 4, 3, '', 'Travel expenses, private insurance ', '2,500 Turkish Liras'),
(11, 'Chevening Scholarships Britain', 1, 1, '', 'Full tuition costs. monthly allowance. Travel costs to and from the UK.                            .                            ', 'undefined'),
(12, 'Chevening Scholarships Britain', 2, 1, '', 'Full tuition costs. monthly allowance. Travel costs to and from the UK.', 'undefined'),
(13, 'Chevening Scholarships Britain', 3, 1, '', 'Full tuition costs. monthly allowance. Travel costs to and from the UK', 'undefined'),
(14, 'Chevening Scholarships Britain', 4, 1, '', 'Full tuition costs. monthly allowance. Travel costs to and from the UK', 'undefined'),
(15, 'Gates Cambridge Scholarships', 1, 1, '', 'Funding opportunities from Cambridge Trust ', 'Determined after registration'),
(16, 'Gates Cambridge Scholarships', 2, 1, '', 'Funding opportunities from Cambridge Trust ', 'Determined after registration'),
(17, ' Gates Cambridge Scholarships', 3, 1, '', 'Funding opportunities from Cambridge Trust ', 'Determined after registration'),
(18, ' Gates Cambridge Scholarships', 4, 1, '', '\r\nFunding opportunities from Cambridge ', 'Determined after registration'),
(20, 'Clarendon Scholarships at University of Oxford', 1, 1, '', 'The Clarendon Scholarships are competitive, prestigious and highly sought after', '£15,009.'),
(21, 'Clarendon Scholarships at University of Oxford', 2, 1, '', 'The Clarendon Scholarships are competitive, prestigious and highly sought after\r\n', '£15,009.'),
(22, 'Clarendon Scholarships at University of Oxford', 3, 1, '', 'The Clarendon Scholarships are competitive, prestigious and highly sought after\r\n', '£15,009.'),
(23, 'Clarendon Scholarships at University of Oxford', 4, 1, '', 'The Clarendon Scholarships are competitive, prestigious and highly sought after\r\n', '£15,009.');

-- --------------------------------------------------------

--
-- Structure de la table `specialties`
--

CREATE TABLE `specialties` (
  `spclt_id` int(11) NOT NULL,
  `Namesplt` varchar(700) DEFAULT NULL,
  `cate_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `specialties`
--

INSERT INTO `specialties` (`spclt_id`, `Namesplt`, `cate_id`) VALUES
(1, 'Biotechnology', 1),
(4, 'Nano Science', 1),
(5, 'Biophysics\r\n', 1),
(6, 'Biochemistry', 1),
(7, 'STEM', 1),
(8, 'Anatomy and Histologyy', 1),
(9, 'Biomedical Engineering', 1),
(10, 'Genetics', 1),
(11, 'Criminal Science', 1),
(12, 'Food Science and ', 1),
(13, 'Nature Science', 1),
(14, 'Computer Engineering', 1),
(15, ' Mechatronics Engineering', 1),
(16, ' Nuclear Engineering', 1),
(17, 'Industrial Engineering\r\n', 1),
(18, 'Aerospace Engineering', 1),
(20, 'Renewable and Alternative Energy', 1),
(21, 'Chemistry', 1),
(22, 'Mathematics', 1),
(23, 'Biology', 1),
(24, 'Audio Engineering', 3),
(25, 'Management Information Systems\r\n', 3),
(26, 'Computer Engineering\r\n', 3),
(27, ' Video Games Programming\r\n', 3),
(28, ' E-Marketing', 3),
(29, ' Programming', 3),
(30, 'VR & AR', 3),
(31, 'Cyber Security', 3),
(33, 'Animation and Multimedia', 3),
(34, 'E-Business Management', 3),
(35, 'Internet of Things', 3),
(36, 'Software Engineering', 3),
(37, 'Data Science', 3),
(38, 'Artificial Intelligence', 3),
(39, 'Robotics', 3),
(40, 'Learning Technology', 3),
(41, 'Computer Science', 3),
(163, 'Electronic Commerce\r\n', 2),
(164, 'Video Games Programming', 2),
(165, 'English Language', 2),
(166, 'Film Making', 2),
(167, 'Fashion Design', 2),
(168, 'E-Marketing', 2),
(169, 'Programming', 2),
(170, 'VR & AR', 2),
(171, 'Social Innovation', 2),
(172, 'Cyber Security', 2),
(174, 'Animation and Multimedia', 2),
(175, 'Software Engineering', 2),
(176, 'E-Business Management', 2),
(177, 'Internet of Things', 2),
(178, 'Data Science', 2),
(179, 'Artificial Intelligence', 2),
(180, 'Renewable and Alternative Energy', 2),
(181, 'Robotics', 2),
(182, 'Dental Technology', 2),
(183, 'Learning Technology', 2),
(184, 'Entrepreneurship', 2),
(185, 'Astronomy', 2),
(186, 'Computer Science', 2),
(187, 'Aerospace Engineering', 2),
(189, 'iziiiiiiiiiiiiiiiii', 2),
(190, 'ghsg', 3),
(191, 'ghsg', 1),
(192, 'ghsg', 2),
(193, 'devlopment web', 1),
(194, 'devlopment web', 2),
(195, 'devlopment web', 3),
(196, 'devlopment webb', 1),
(197, 'devlopment webb', 2),
(198, 'devlopment webb', 3);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `score` int(11) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `FirstName` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `City` varchar(255) DEFAULT NULL,
  `Password` text DEFAULT NULL,
  `slogan` varchar(300) NOT NULL,
  `img` varchar(200) NOT NULL,
  `Discription` varchar(300) NOT NULL,
  `type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`user_id`, `score`, `LastName`, `FirstName`, `Email`, `City`, `Password`, `slogan`, `img`, `Discription`, `type`) VALUES
(1, 1, 'izi', 'oussama', 'izi@gmail.com', 'Tanger', '123', 'Admin', 'img/photo_2021-02-19_20-16-15.jpg', '', 0),
(2, 5, 'izi', 'kaoutar', 'izikaoutar@gmail.com', 'tanger', '1234', '', 'img/photo_2021-02-19_20-16-15.jpg', '', 1),
(3, 20, 'Ehmidan', 'Soulayman', 'Ehmidan@gmail', NULL, '123', 'after storm coming the calm ', 'img/photo_2021-02-19_20-16-15.jpg', '', 1),
(5, 0, 'IZI', 'lkdjask', 'kaoutar@gmail', NULL, '123', 'sd', '—Pngtree—lecturer flat illustration_4535762.png', '', 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `archivecours`
--
ALTER TABLE `archivecours`
  ADD PRIMARY KEY (`archiveid`),
  ADD KEY `userid` (`userid`),
  ADD KEY `coursid` (`coursid`);

--
-- Index pour la table `catg_specialty`
--
ALTER TABLE `catg_specialty`
  ADD PRIMARY KEY (`Catg_id`);

--
-- Index pour la table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`countr_id`);

--
-- Index pour la table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`idcours`),
  ADD KEY `idsplt` (`idsplt`);

--
-- Index pour la table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`evenid`),
  ADD KEY `ispclt` (`ispclt`);

--
-- Index pour la table `expertt`
--
ALTER TABLE `expertt`
  ADD PRIMARY KEY (`expertid`),
  ADD KEY `catgid` (`catgid`);

--
-- Index pour la table `grants`
--
ALTER TABLE `grants`
  ADD PRIMARY KEY (`grant_id`),
  ADD KEY `cat_id` (`cat_id`),
  ADD KEY `countr_id` (`countr_id`);

--
-- Index pour la table `specialties`
--
ALTER TABLE `specialties`
  ADD PRIMARY KEY (`spclt_id`),
  ADD KEY `cate_id` (`cate_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `archivecours`
--
ALTER TABLE `archivecours`
  MODIFY `archiveid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `catg_specialty`
--
ALTER TABLE `catg_specialty`
  MODIFY `Catg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT pour la table `countries`
--
ALTER TABLE `countries`
  MODIFY `countr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `courses`
--
ALTER TABLE `courses`
  MODIFY `idcours` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT pour la table `events`
--
ALTER TABLE `events`
  MODIFY `evenid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `expertt`
--
ALTER TABLE `expertt`
  MODIFY `expertid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `specialties`
--
ALTER TABLE `specialties`
  MODIFY `spclt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=200;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `archivecours`
--
ALTER TABLE `archivecours`
  ADD CONSTRAINT `archivecours_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `archivecours_ibfk_2` FOREIGN KEY (`coursid`) REFERENCES `courses` (`idcours`);

--
-- Contraintes pour la table `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `courses_ibfk_1` FOREIGN KEY (`idsplt`) REFERENCES `catg_specialty` (`Catg_id`);

--
-- Contraintes pour la table `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `events_ibfk_1` FOREIGN KEY (`ispclt`) REFERENCES `catg_specialty` (`Catg_id`);

--
-- Contraintes pour la table `expertt`
--
ALTER TABLE `expertt`
  ADD CONSTRAINT `expertt_ibfk_1` FOREIGN KEY (`catgid`) REFERENCES `catg_specialty` (`Catg_id`);

--
-- Contraintes pour la table `grants`
--
ALTER TABLE `grants`
  ADD CONSTRAINT `grants_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `catg_specialty` (`Catg_id`),
  ADD CONSTRAINT `grants_ibfk_2` FOREIGN KEY (`countr_id`) REFERENCES `countries` (`countr_id`);

--
-- Contraintes pour la table `specialties`
--
ALTER TABLE `specialties`
  ADD CONSTRAINT `specialties_ibfk_1` FOREIGN KEY (`cate_id`) REFERENCES `catg_specialty` (`Catg_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
