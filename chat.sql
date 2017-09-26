-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1:3306
-- Généré le :  Mar 26 Septembre 2017 à 11:37
-- Version du serveur :  5.6.34-log
-- Version de PHP :  7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `chat`
--
CREATE DATABASE IF NOT EXISTS `chat` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `chat`;

-- --------------------------------------------------------

--
-- Structure de la table `ancien_messagea`
--

CREATE TABLE IF NOT EXISTS `ancien_messagea` (
  `pseudo` varchar(255) NOT NULL,
  `message` longtext NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `chat_accountsa`
--

CREATE TABLE IF NOT EXISTS `chat_accountsa` (
  `account_login` varchar(30) CHARACTER SET latin1 COLLATE latin1_german1_ci NOT NULL,
  `account_pass` varchar(255) CHARACTER SET latin1 COLLATE latin1_german1_ci NOT NULL,
  `mail` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `mail_verif` enum('0','1') NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `chat_accountsa`
--

INSERT INTO `chat_accountsa` (`account_login`, `account_pass`, `mail`, `prenom`, `nom`, `mail_verif`) VALUES
('luc987', 'eff6aeea6f801ead8d680431b903806b', 'luc.chaho@gmail.com', 'Luc', 'CHAHO', '0'),
('pierre91', 'dcbbee87b56008c57614a3bfed8c2446', 'pierre.barms@gmail.com', 'Pierre', 'BARMS', '0');

-- --------------------------------------------------------

--
-- Structure de la table `chat_messagesa`
--

CREATE TABLE IF NOT EXISTS `chat_messagesa` (
  `message_id` int(11) NOT NULL,
  `message_text` longtext CHARACTER SET latin1 COLLATE latin1_german1_ci NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `timestamp` int(11) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=178 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `chat_messagesa`
--

INSERT INTO `chat_messagesa` (`message_id`, `message_text`, `pseudo`, `timestamp`) VALUES
(174, 'mlkdsfmldsijhfojdsoijfodsjf', 'luc987', 1506427855),
(175, 'what are you saying ?', 'pierre91', 1506427987),
(176, 'je suis pierre', 'pierre91', 1506425346),
(177, 'lol', 'pierre91', 1506425382);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `ancien_messagea`
--
ALTER TABLE `ancien_messagea`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `chat_accountsa`
--
ALTER TABLE `chat_accountsa`
  ADD PRIMARY KEY (`account_login`);

--
-- Index pour la table `chat_messagesa`
--
ALTER TABLE `chat_messagesa`
  ADD PRIMARY KEY (`message_id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `ancien_messagea`
--
ALTER TABLE `ancien_messagea`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT pour la table `chat_messagesa`
--
ALTER TABLE `chat_messagesa`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=178;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
