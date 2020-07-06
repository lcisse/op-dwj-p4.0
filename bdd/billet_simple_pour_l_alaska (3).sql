-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le :  lun. 06 juil. 2020 à 10:14
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `billet_simple_pour_l'alaska`
--

-- --------------------------------------------------------

--
-- Structure de la table `billets`
--

DROP TABLE IF EXISTS `billets`;
CREATE TABLE IF NOT EXISTS `billets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) NOT NULL,
  `contenu` text NOT NULL,
  `date_billet` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `billets`
--

INSERT INTO `billets` (`id`, `titre`, `contenu`, `date_billet`) VALUES
(2, 'Chapitre 2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2020-05-26 04:41:02'),
(3, 'Chapitre 3', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2020-05-27 04:42:03'),
(4, 'Chapitre 4', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2020-05-28 04:44:40'),
(5, 'Chapitre 5', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2020-05-29 04:45:40'),
(6, 'Chapitre 6', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2020-05-30 04:46:45'),
(7, 'Chapitre 7', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2020-05-30 04:47:47'),
(8, 'Chapitre 8', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2020-05-31 04:48:42'),
(11, 'Chapitre 9', '&lt;p&gt;&lt;em&gt;Bienvenue&lt;/em&gt; dans ce nouveau chapitre concerant mon livre, &lt;strong&gt;voyage simple pour l\'alaska&lt;/strong&gt;. Dans ce champitre je vais vous partager mon voyage a l\'alaska.&lt;/p&gt;<br />\r\n&lt;p&gt;Bienvenue dans ce nouveau chapitre concerant mon livre, voyage simple pour l\'alaska. Dans ce champitre je vais vous partager mon voyage a l\'alaska.&lt;/p&gt;<br />\r\n&lt;p&gt;&lt;span style=&quot;color: #2dc26b;&quot;&gt;C\'&amp;eacute;tait cool !!!&lt;/span&gt;&lt;/p&gt;<br />\r\n&lt;p&gt;Bienvenue dans ce nouveau chapitre concerant mon livre, voyage simple pour l\'alaska. Dans ce champitre je vais vous partager mon voyage a l\'alaska.&lt;/p&gt;', '2020-06-22 21:33:29'),
(14, 'Chapitre 10', '&lt;p&gt;&lt;span style=&quot;color: #212529; font-family: -apple-system, BlinkMacSystemFont, \\\'Segoe UI\\\', Roboto, \\\'Helvetica Neue\\\', Arial, sans-serif, \\\'Apple Color Emoji\\\', \\\'Segoe UI Emoji\\\', \\\'Segoe UI Symbol\\\'; font-size: 16px; font-style: italic; background-color: #ffffff;&quot;&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.&lt;/span&gt;&lt;/p&gt;', '2020-06-30 03:45:35'),
(26, 'Chapitre 13', '<p><span style=&quot;box-sizing: border-box; color: #212529; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, \'Helvetica Neue\', Arial, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\'; font-size: 16px; font-style: italic; background-color: #ffffff;&quot;><span style=&quot;box-sizing: border-box; font-weight: bolder;&quot;>Lorem ipsum dolor sit amet,</span>&nbsp;consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim&nbsp;</span><span style=&quot;box-sizing: border-box; color: #212529; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, \'Helvetica Neue\', Arial, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\'; font-size: 16px; font-style: italic; background-color: #ffffff;&quot;>veniam, quis nostrud</span><span style=&quot;box-sizing: border-box; color: #212529; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, \'Helvetica Neue\', Arial, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\'; font-size: 16px; font-style: italic; background-color: #ffffff;&quot;>&nbsp;exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.&nbsp;<span style=&quot;box-sizing: border-box;&quot;>Duis aute irure dolor&nbsp;</span>in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span></p>', '2020-06-30 15:23:15'),
(22, 'Chapitre 11', '&amp;lt;p&amp;gt;&amp;lt;span style=&amp;quot;color: #212529; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, \'Helvetica Neue\', Arial, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\'; font-size: 16px; font-style: italic; background-color: #ffffff;&amp;quot;&amp;gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.&amp;lt;/span&amp;gt;&amp;lt;/p&amp;gt;', '2020-06-30 14:22:58'),
(25, 'Chapitre 12', '&lt;p&gt;&lt;span style=&quot;color: #212529; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, \'Helvetica Neue\', Arial, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\'; font-size: 16px; font-style: italic; background-color: #ffffff;&quot;&gt;&lt;strong&gt;Lorem ipsum dolor sit amet,&lt;/strong&gt; consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim &lt;/span&gt;&lt;span style=&quot;color: #ba372a; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, \'Helvetica Neue\', Arial, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\'; font-size: 16px; background-color: #ffffff;&quot;&gt;veniam, quis nostrud&lt;/span&gt;&lt;span style=&quot;color: #212529; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, \'Helvetica Neue\', Arial, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\'; font-size: 16px; font-style: italic; background-color: #ffffff;&quot;&gt; exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. &lt;span style=&quot;background-color: #b96ad9;&quot;&gt;Duis aute irure dolor &lt;/span&gt;in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.&lt;/span&gt;&lt;/p&gt;', '2020-06-30 15:18:38');

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

DROP TABLE IF EXISTS `commentaires`;
CREATE TABLE IF NOT EXISTS `commentaires` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_billet` int(11) NOT NULL,
  `auteur` varchar(255) NOT NULL,
  `commentaire` text NOT NULL,
  `date_commentaire` datetime NOT NULL,
  `commentaires_signales` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `commentaires`
--

INSERT INTO `commentaires` (`id`, `id_billet`, `auteur`, `commentaire`, `date_commentaire`, `commentaires_signales`) VALUES
(7, 1, 'julien46', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', '0000-00-00 00:00:00', ''),
(9, 3, 'julien46', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', '0000-00-00 00:00:00', ''),
(10, 6, 'sotiba67', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', '0000-00-00 00:00:00', ''),
(11, 8, 'tiba1', 'Mon premier commentaire.', '2020-06-11 15:02:11', 'signaler'),
(12, 8, 'tiba1', 'Mon premier commentaire.', '2020-06-11 15:12:34', 'signaler'),
(13, 8, 'tiba1', 'Mon premier commentaire.', '2020-06-11 15:14:36', 'signaler'),
(14, 8, 'mari27', 'Mon second commentaire.', '2020-06-11 16:12:57', 'signaler'),
(15, 8, 'mari27', 'Mon troisième commentaire.', '2020-06-11 16:16:33', 'signaler'),
(16, 8, 'mari27', 'Je commente', '2020-06-11 16:20:19', ''),
(18, 7, 'tom2', 'Merci !', '2020-06-11 16:43:25', 'signaler'),
(19, 7, 'tiba1', 'super !', '2020-06-11 16:46:29', ''),
(20, 7, 'ted50', 'Merci pour ce magnifique article.', '2020-06-11 16:54:54', ''),
(21, 7, 'tom2', 'article interessant !', '2020-06-11 17:00:36', ''),
(22, 1, 'soti23', 'Merci !!!', '2020-06-11 18:55:48', ''),
(23, 1, 'ted50', 'Article interessant !!!', '2020-06-11 19:32:57', ''),
(24, 5, 'mari27', 'Merci  !!!!', '2020-06-12 13:46:19', ''),
(25, 7, 'mari27', 'super !!!', '2020-06-12 19:48:35', ''),
(26, 7, 'mari27', 'merci !!!', '2020-06-12 19:50:33', ''),
(27, 7, 'mari27', 'merci !!!', '2020-06-12 19:56:23', ''),
(28, 7, 'tiba1', 'test', '2020-06-12 19:58:12', ''),
(29, 5, 'tiba1', 'super !!!', '2020-06-12 23:04:00', ''),
(30, 5, 'tiba1', 'super !!!', '2020-06-12 23:06:11', ''),
(31, 5, 'tom2', 'article interessant !!', '2020-06-12 23:31:00', ''),
(32, 5, 'soti23', 'Merci !!', '2020-06-12 23:38:06', ''),
(33, 5, 'tiba1', 'Je n\'aime pas cet article !!!', '2020-06-13 00:04:13', ''),
(34, 5, 'tiba1', 'Merci !!!', '2020-06-13 00:20:09', ''),
(35, 3, 'ted50', 'Magnifique !!', '2020-06-13 00:26:32', ''),
(36, 4, 'tom2', 'article interessant !!', '2020-06-13 00:34:56', ''),
(37, 4, 'mari27', 'super !!', '2020-06-13 00:43:06', ''),
(38, 4, 'soti23', 'La puissance !!!', '2020-06-13 00:44:01', ''),
(39, 4, 'tom2', 'salut !!!', '2020-06-13 14:48:43', ''),
(40, 4, 'tiba1', 'thanks !!!', '2020-06-13 15:12:19', ''),
(41, 4, 'tiba1', 'thanks !!!', '2020-06-13 15:14:29', ''),
(42, 4, 'soti23', 'merci !!!', '2020-06-13 15:16:06', ''),
(43, 1, 'tom2', 'super !!!', '2020-06-13 16:21:58', ''),
(44, 2, 'tom2', 'Article interessant', '2020-06-13 19:52:30', 'signaler'),
(45, 1, 'sav24', 'thanks !!!', '2020-06-15 15:09:57', ''),
(46, 8, 'sav24', 'Bine interessant !!!', '2020-06-15 15:34:54', ''),
(47, 9, 'ted50', 'la suite...!', '2020-06-18 03:43:37', ''),
(48, 9, 'tiba1', 'super !', '2020-06-19 19:41:08', ''),
(49, 8, 'mari27', 'super !!\r\n', '2020-06-20 23:11:39', ''),
(50, 26, 'las2', 'super !', '2020-07-02 19:23:03', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
CREATE TABLE IF NOT EXISTS `contacts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `messages` varchar(255) NOT NULL,
  `date_messages` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `contacts`
--

INSERT INTO `contacts` (`id`, `nom`, `prenom`, `mail`, `messages`, `date_messages`) VALUES
(1, 'la', 'lala', 'la@gmail.com', 'j\'aimerais savoir ou est ce que je peux achéter votre roman.', '2020-06-30 15:23:15'),
(2, 'mat', 'maté', 'mat@gmail.com', 'je trouve votre très intéressant !', '2020-07-04 01:15:28'),
(3, 'la', 'lam', 'mat@gmail.com', 'super article', '2020-07-04 13:51:52'),
(4, 'la', 'lam', 'mat@gmail.com', 'super article', '2020-07-04 13:53:57'),
(5, 'mat', 'maté', 'mat@gmail.com', 'magnifique livre !', '2020-07-04 13:55:07'),
(6, 'mat', 'maté', 'mat@gmail.com', 'magnifique livre !', '2020-07-04 14:03:16'),
(7, 'luck', 'jean', 'jean@gmail.com', 'je trouve votre roman interessant !', '2020-07-04 14:05:05'),
(9, 'sdjkah', 'aZQIUZKL', 'la7@gmail.com', 'HQILKJRHPI', '2020-07-04 14:14:30'),
(10, 'sdjkah', 'aZQIUZKL', 'la7@gmail.com', 'HQILKJRHPI', '2020-07-04 14:33:42');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `mot_de_passe` varchar(255) NOT NULL,
  `roles` varchar(255) NOT NULL,
  `date_inscription` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `pseudo`, `mail`, `mot_de_passe`, `roles`, `date_inscription`) VALUES
(12, 'sotiba46', 'sotiba46@gmail.com', '7e9a2cb5d07056a2079fea6efc0df77b96312b98', 'visiteur', '2020-06-24 03:21:05'),
(13, 'jean46', 'jean46@gmail.com', '2ced0c02691eda31c4b9dd1127dde90f3aaeb5c3', 'visiteur', '2020-06-24 03:22:25'),
(14, 'julien46', 'julien46@gmail.com', 'cf769bcf77b0efb597df9c3e4928ffec4847ca81', 'visiteur', '2020-06-24 03:23:26'),
(10, 'admin', 'admin@gmail.com', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'administrateur', '2020-06-24 03:16:19'),
(9, 'la7', 'la7@gmail.com', '4f325498ce64a6e20b76d813eb78f3df628d24c3', 'visiteur', '2020-06-24 02:56:17'),
(11, 'admin1', 'admin1@gmail.com', '6c7ca345f63f835cb353ff15bd6c5e052ec08e7a', 'administrateur', '2020-06-24 03:18:29'),
(15, 'sa6', 'sa6@gmail.com', 'aa4325c96ff123c67aee7892c5c3a2ddce2401f5', 'visiteur', '2020-06-26 19:01:55'),
(16, 'las2', 'las2@gmail.com', '4318c49fdc441c9e7c0a066284f17fa6a034fbc3', 'visiteur', '2020-07-02 18:14:45');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
