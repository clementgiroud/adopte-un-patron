-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Lun 27 Mars 2017 à 12:28
-- Version du serveur :  10.1.22-MariaDB
-- Version de PHP :  7.1.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `adopte-un-patron`
--

-- --------------------------------------------------------

--
-- Structure de la table `beziers_annonces_aup`
--

CREATE TABLE `beziers_annonces_aup` (
  `id` int(10) UNSIGNED NOT NULL,
  `contrat` int(10) UNSIGNED NOT NULL,
  `salaire` smallint(5) UNSIGNED NOT NULL,
  `duree` smallint(5) UNSIGNED NOT NULL,
  `experience` smallint(255) UNSIGNED NOT NULL,
  `code_postal` varchar(255) NOT NULL,
  `statut` varchar(255) NOT NULL,
  `poste` varchar(255) NOT NULL,
  `presentation` text,
  `grade` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `beziers_annonces_aup`
--

INSERT INTO `beziers_annonces_aup` (`id`, `contrat`, `salaire`, `duree`, `experience`, `code_postal`, `statut`, `poste`, `presentation`, `grade`) VALUES
(1, 1, 1200, 1, 1, '34500', '1', '1', 'gsdfg', 'sdfg');

-- --------------------------------------------------------

--
-- Structure de la table `beziers_candidature_aup`
--

CREATE TABLE `beziers_candidature_aup` (
  `id` int(10) UNSIGNED NOT NULL,
  `candidat` int(10) UNSIGNED NOT NULL,
  `annonces` int(10) UNSIGNED NOT NULL,
  `etat` tinyint(1) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `beziers_entreprise_aup`
--

CREATE TABLE `beziers_entreprise_aup` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `nom` varchar(255) NOT NULL,
  `adresse` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `presentation` text,
  `recruteurs` varchar(255) NOT NULL,
  `statut` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `beziers_evenement_aup`
--

CREATE TABLE `beziers_evenement_aup` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) DEFAULT NULL,
  `description` text NOT NULL,
  `dates` int(11) NOT NULL,
  `lieux` varchar(255) NOT NULL,
  `heure` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `beziers_images_evenement_aup`
--

CREATE TABLE `beziers_images_evenement_aup` (
  `id` int(10) UNSIGNED NOT NULL,
  `chemin` varchar(255) NOT NULL,
  `principale` tinyint(1) UNSIGNED NOT NULL,
  `evenement` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `beziers_news_aup`
--

CREATE TABLE `beziers_news_aup` (
  `id` int(10) UNSIGNED NOT NULL,
  `titre` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `texte` mediumtext NOT NULL,
  `date` int(10) UNSIGNED NOT NULL,
  `status` tinyint(1) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `beziers_pages_aup`
--

CREATE TABLE `beziers_pages_aup` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` mediumtext
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `beziers_pages_aup`
--

INSERT INTO `beziers_pages_aup` (`id`, `title`, `content`) VALUES
(1, 'Mentions Légales', '\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. In nec nisi finibus, aliquet mauris ut, dignissim diam. Integer augue leo, varius nec massa scelerisque, tempus iaculis lectus. Cras lacinia felis ac nulla convallis pellentesque. Aliquam convallis venenatis ex nec fringilla. Ut porta turpis a nulla laoreet, vel fringilla felis convallis. Vivamus ac nisi elit. Vivamus in porta dui, ac pulvinar urna. Quisque scelerisque blandit suscipit. Vestibulum congue eleifend metus sit amet viverra. Proin at orci tincidunt, maximus dolor nec, porttitor nunc.\r\n\r\nIn in pretium dolor, vitae ullamcorper velit. In blandit risus at purus faucibus porttitor. Curabitur scelerisque, eros cursus elementum pellentesque, elit mauris congue velit, nec bibendum lorem massa eu magna. Donec sem est, elementum eu turpis vel, aliquam bibendum nulla. Nullam venenatis, magna luctus porta dictum, felis ligula venenatis sapien, pulvinar tincidunt nisl dolor vitae justo. Mauris quis nisi ipsum. In faucibus felis eget metus rutrum iaculis. Proin eget leo vitae lectus bibendum dapibus quis at erat. Etiam sollicitudin felis quis magna posuere fringilla. Nullam interdum risus libero. Suspendisse potenti. Mauris mattis, est id mattis vestibulum, arcu tortor posuere sem, rhoncus facilisis nisl sem vitae turpis. In at congue mi. Proin non sapien ex. Ut suscipit nunc dui, non hendrerit nunc fermentum a.\r\n\r\nNulla ac augue odio. Sed ac massa sit amet tellus faucibus ornare. In vulputate ipsum sed metus dapibus tincidunt. Integer dui sem, mattis vitae ipsum vitae, luctus accumsan odio. Nulla pretium velit metus, et vestibulum augue ornare ut. Phasellus semper, lorem sed dictum vulputate, arcu mauris volutpat nisl, id mattis felis leo aliquet velit. Cras id sapien purus. Quisque est leo, dictum vitae neque eleifend, vulputate eleifend turpis. Aliquam auctor porttitor nisl sit amet condimentum. Fusce ac dolor scelerisque, sollicitudin erat eu, ultricies turpis. Donec non leo finibus, pharetra ipsum nec, facilisis est. Quisque faucibus dictum nulla, et dictum tortor. Sed non eros libero. Suspendisse cursus ligula eros, eu malesuada lacus rhoncus sed. Maecenas imperdiet dui ac mi placerat commodo.\r\n\r\nDonec rutrum vestibulum suscipit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam eu fermentum orci, eu viverra arcu. Donec dictum sed arcu id feugiat. In hac habitasse platea dictumst. Phasellus sit amet interdum leo. Maecenas sed iaculis ex. Interdum et malesuada fames ac ante ipsum primis in faucibus. Ut sed erat et metus fringilla pulvinar. Nullam dui mi, tincidunt consequat finibus eget, facilisis eu ex. Sed eu risus turpis. Proin varius urna ut lorem consectetur, sit amet euismod lectus fermentum. Nulla a auctor dui. In viverra risus non tellus sollicitudin rhoncus.\r\n\r\nVestibulum sodales velit diam, eu aliquam odio finibus ac. Pellentesque tincidunt eget purus nec imperdiet. Integer porta molestie posuere. Nam ut faucibus lectus. Phasellus ut quam vel nisl feugiat dignissim ut sed elit. Aenean rutrum vulputate consectetur. Vivamus egestas arcu et massa pellentesque porttitor. Nam molestie semper sollicitudin. Integer a ligula vitae urna rhoncus pharetra. Proin at congue mi, quis sagittis ante. Nullam in erat eget nisi interdum laoreet at ac nisl. Vestibulum viverra felis nibh, id gravida ligula tincidunt vel. Aliquam eleifend gravida efficitur. ');

-- --------------------------------------------------------

--
-- Structure de la table `beziers_skills_aup`
--

CREATE TABLE `beziers_skills_aup` (
  `id` smallint(5) UNSIGNED NOT NULL,
  `name` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `beziers_skills_aup`
--

INSERT INTO `beziers_skills_aup` (`id`, `name`) VALUES
(1, 'php'),
(2, 'PHP'),
(3, 'Json'),
(4, 'HTML'),
(5, 'Ruby'),
(6, 'Python\r\n'),
(7, 'C'),
(8, 'Javascript'),
(9, 'Java'),
(10, 'C#'),
(11, 'Illustrator'),
(12, 'C++'),
(13, 'Photoshop'),
(14, 'Linux'),
(15, 'Windows'),
(16, 'Jquery'),
(17, 'Angular JS'),
(18, 'Bootstrap'),
(19, 'Symphonie'),
(20, 'Ajax'),
(21, 'Zend'),
(22, 'Perl CGI'),
(23, 'SQL'),
(24, 'CSS3'),
(25, 'HTML5'),
(26, 'RWD'),
(27, 'Lama'),
(28, 'Dragon');

-- --------------------------------------------------------

--
-- Structure de la table `beziers_statut_juridique_aup`
--

CREATE TABLE `beziers_statut_juridique_aup` (
  `id` int(10) UNSIGNED NOT NULL,
  `statut` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `beziers_table_statistiques_aup`
--

CREATE TABLE `beziers_table_statistiques_aup` (
  `id` int(10) UNSIGNED NOT NULL,
  `candidats` int(10) UNSIGNED NOT NULL,
  `offres` int(10) UNSIGNED NOT NULL,
  `recruteurs` int(10) UNSIGNED NOT NULL,
  `evenement` int(10) UNSIGNED NOT NULL,
  `news` int(10) UNSIGNED NOT NULL,
  `messages` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `beziers_type_de_contrat_aup`
--

CREATE TABLE `beziers_type_de_contrat_aup` (
  `id` int(10) UNSIGNED NOT NULL,
  `type` varchar(50) NOT NULL,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `beziers_type_de_contrat_aup`
--

INSERT INTO `beziers_type_de_contrat_aup` (`id`, `type`, `description`) VALUES
(1, 'CDD', NULL),
(2, 'CDI', NULL),
(3, 'Contrat de professionnalisation ', NULL),
(4, 'Contrat d’apprentissage', NULL),
(5, 'CTT', NULL),
(6, 'Interim', NULL),
(7, 'CDI Temps Partiel', NULL),
(8, 'CDD Temps Partiel', NULL),
(9, 'Contrat de Cooptation', NULL),
(10, 'Contrat de Cooptation a temps partiel', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `beziers_users_aup`
--

CREATE TABLE `beziers_users_aup` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `telephone` varchar(16) NOT NULL,
  `code_postal` smallint(5) UNSIGNED DEFAULT NULL,
  `date_naissance` int(10) UNSIGNED DEFAULT NULL,
  `type` tinyint(1) UNSIGNED NOT NULL,
  `accroche` text,
  `visites` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `photo` varchar(255) DEFAULT NULL,
  `inscription` int(12) UNSIGNED NOT NULL,
  `adresse` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `beziers_users_aup`
--

INSERT INTO `beziers_users_aup` (`id`, `email`, `nom`, `prenom`, `password`, `telephone`, `code_postal`, `date_naissance`, `type`, `accroche`, `visites`, `photo`, `inscription`, `adresse`) VALUES
(6, 'corin.alex@gmail.com', 'Alex', 'Qhorin', '7c4a8d09ca3762af61e59520943dc26494f8941b', '603440061', 34500, 637113600, 1, 'Bliiiiiii', 350, 'http://placehold.it/128x160', 1485114351, 'Beziers'),
(7, 'hippchz@gmail.com', 'Urb', 'Mary', 'b9d675a8965adaa79dbbc550ad362936cabb1889', '630332865', 34500, NULL, 0, NULL, 0, NULL, 1485339813, 'domaine st paul '),
(8, 'Blizzard@gmail.com', 'Unb', 'tre', '9370cdb17a9ca31f1cec5478ef1dad738be11504', '630332568', 34500, NULL, 0, NULL, 0, NULL, 1485851659, '45 av. La lune'),
(9, 'sev@g.com', 'gf', 'gf', '54b1babbacbf140ecdcdf18d1d644a0445e24d6d', '630333', 34500, NULL, 0, NULL, 0, NULL, 1486476259, 'dsqds');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `beziers_annonces_aup`
--
ALTER TABLE `beziers_annonces_aup`
  ADD PRIMARY KEY (`id`),
  ADD KEY `contrat` (`contrat`);

--
-- Index pour la table `beziers_candidature_aup`
--
ALTER TABLE `beziers_candidature_aup`
  ADD PRIMARY KEY (`id`),
  ADD KEY `candidat` (`candidat`,`annonces`),
  ADD KEY `annonces` (`annonces`);

--
-- Index pour la table `beziers_entreprise_aup`
--
ALTER TABLE `beziers_entreprise_aup`
  ADD PRIMARY KEY (`id`),
  ADD KEY `statut` (`statut`);

--
-- Index pour la table `beziers_evenement_aup`
--
ALTER TABLE `beziers_evenement_aup`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `beziers_images_evenement_aup`
--
ALTER TABLE `beziers_images_evenement_aup`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `beziers_news_aup`
--
ALTER TABLE `beziers_news_aup`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `beziers_pages_aup`
--
ALTER TABLE `beziers_pages_aup`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `beziers_skills_aup`
--
ALTER TABLE `beziers_skills_aup`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `beziers_statut_juridique_aup`
--
ALTER TABLE `beziers_statut_juridique_aup`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `beziers_table_statistiques_aup`
--
ALTER TABLE `beziers_table_statistiques_aup`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `beziers_type_de_contrat_aup`
--
ALTER TABLE `beziers_type_de_contrat_aup`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `beziers_users_aup`
--
ALTER TABLE `beziers_users_aup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `beziers_annonces_aup`
--
ALTER TABLE `beziers_annonces_aup`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `beziers_candidature_aup`
--
ALTER TABLE `beziers_candidature_aup`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `beziers_entreprise_aup`
--
ALTER TABLE `beziers_entreprise_aup`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `beziers_evenement_aup`
--
ALTER TABLE `beziers_evenement_aup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `beziers_images_evenement_aup`
--
ALTER TABLE `beziers_images_evenement_aup`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `beziers_news_aup`
--
ALTER TABLE `beziers_news_aup`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `beziers_pages_aup`
--
ALTER TABLE `beziers_pages_aup`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `beziers_skills_aup`
--
ALTER TABLE `beziers_skills_aup`
  MODIFY `id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT pour la table `beziers_statut_juridique_aup`
--
ALTER TABLE `beziers_statut_juridique_aup`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `beziers_table_statistiques_aup`
--
ALTER TABLE `beziers_table_statistiques_aup`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `beziers_type_de_contrat_aup`
--
ALTER TABLE `beziers_type_de_contrat_aup`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT pour la table `beziers_users_aup`
--
ALTER TABLE `beziers_users_aup`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `beziers_annonces_aup`
--
ALTER TABLE `beziers_annonces_aup`
  ADD CONSTRAINT `beziers_annonces_aup_ibfk_1` FOREIGN KEY (`contrat`) REFERENCES `beziers_type_de_contrat_aup` (`id`);

--
-- Contraintes pour la table `beziers_candidature_aup`
--
ALTER TABLE `beziers_candidature_aup`
  ADD CONSTRAINT `beziers_candidature_aup_ibfk_1` FOREIGN KEY (`candidat`) REFERENCES `beziers_users_aup` (`id`),
  ADD CONSTRAINT `beziers_candidature_aup_ibfk_2` FOREIGN KEY (`annonces`) REFERENCES `beziers_annonces_aup` (`id`);

--
-- Contraintes pour la table `beziers_entreprise_aup`
--
ALTER TABLE `beziers_entreprise_aup`
  ADD CONSTRAINT `beziers_entreprise_aup_ibfk_1` FOREIGN KEY (`statut`) REFERENCES `beziers_statut_juridique_aup` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
