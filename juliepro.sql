-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 16 Décembre 2014 à 23:28
-- Version du serveur :  5.6.20
-- Version de PHP :  5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `juliepro`
--
CREATE DATABASE IF NOT EXISTS `juliepro` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `juliepro`;

-- --------------------------------------------------------

--
-- Structure de la table `alimentation`
--

DROP TABLE IF EXISTS `alimentation`;
CREATE TABLE IF NOT EXISTS `alimentation` (
`alimentationID` int(11) NOT NULL,
  `nomRepas` varchar(45) NOT NULL,
  `calorieIngere` int(11) NOT NULL,
  `date` date NOT NULL,
  `categorieID` int(11) NOT NULL,
  `clientID` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `alimentation`
--

INSERT INTO `alimentation` (`alimentationID`, `nomRepas`, `calorieIngere`, `date`, `categorieID`, `clientID`) VALUES
(1, 'Big Mac', 500, '2014-12-08', 1, 2),
(3, 'Cachou', 150, '2014-12-08', 6, 2),
(4, 'Steak', 350, '2014-12-09', 2, 2);

-- --------------------------------------------------------

--
-- Structure de la table `categorienourriture`
--

DROP TABLE IF EXISTS `categorienourriture`;
CREATE TABLE IF NOT EXISTS `categorienourriture` (
`categorieID` int(11) NOT NULL,
  `nom` varchar(45) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Contenu de la table `categorienourriture`
--

INSERT INTO `categorienourriture` (`categorieID`, `nom`) VALUES
(1, 'Malbouffe'),
(2, 'Viande'),
(3, 'Poisson'),
(4, 'Fruit'),
(5, 'Légume'),
(6, 'Noix et graine'),
(7, 'Légumineuse');

-- --------------------------------------------------------

--
-- Structure de la table `conseil`
--

DROP TABLE IF EXISTS `conseil`;
CREATE TABLE IF NOT EXISTS `conseil` (
`conseilID` int(11) NOT NULL,
  `texte` text NOT NULL,
  `dateAffichage` date NOT NULL,
  `nbJour` int(11) NOT NULL,
  `clientID` int(11) NOT NULL,
  `entraineurID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `entrainement`
--

DROP TABLE IF EXISTS `entrainement`;
CREATE TABLE IF NOT EXISTS `entrainement` (
`entrainementID` int(11) NOT NULL,
  `nom` varchar(45) DEFAULT NULL,
  `type` varchar(45) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `entrainement`
--

INSERT INTO `entrainement` (`entrainementID`, `nom`, `type`) VALUES
(1, 'Zumba', 'Cardio'),
(2, 'Boots step', 'Cardio');

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

DROP TABLE IF EXISTS `message`;
CREATE TABLE IF NOT EXISTS `message` (
`messageID` int(11) NOT NULL,
  `message` text NOT NULL,
  `date` datetime NOT NULL,
  `estLu` tinyint(1) DEFAULT NULL,
  `expeditaireID` int(11) NOT NULL,
  `destinataireID` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `message`
--

INSERT INTO `message` (`messageID`, `message`, `date`, `estLu`, `expeditaireID`, `destinataireID`) VALUES
(1, 'Bonjour', '2014-12-16 17:09:53', 0, 1, 2);

-- --------------------------------------------------------

--
-- Structure de la table `resultat`
--

DROP TABLE IF EXISTS `resultat`;
CREATE TABLE IF NOT EXISTS `resultat` (
`resultatID` int(11) NOT NULL,
  `FQMax` int(11) NOT NULL,
  `VO2Max` int(11) NOT NULL,
  `calorieBrulee` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `entrainementID` int(11) NOT NULL,
  `clientID` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `resultat`
--

INSERT INTO `resultat` (`resultatID`, `FQMax`, `VO2Max`, `calorieBrulee`, `date`, `entrainementID`, `clientID`) VALUES
(2, 134, 35, 500, '2014-12-08 00:00:00', 1, 3),
(3, 134, 34, 503, '2014-12-10 00:00:00', 2, 2),
(4, 125, 31, 456, '2014-12-08 00:00:00', 1, 2);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
`utilisateurID` int(11) NOT NULL,
  `nom` varchar(45) NOT NULL,
  `prenom` varchar(45) NOT NULL,
  `noTel` varchar(45) NOT NULL,
  `noCell` varchar(45) DEFAULT NULL,
  `adresse` varchar(45) NOT NULL,
  `ville` varchar(45) NOT NULL,
  `codePostal` varchar(45) NOT NULL,
  `age` int(11) NOT NULL,
  `dateInscription` datetime NOT NULL,
  `courriel` varchar(45) NOT NULL,
  `statut` int(11) NOT NULL,
  `entraineurID` int(11) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `utilisateur`
--

INSERT INTO `utilisateur` (`utilisateurID`, `nom`, `prenom`, `noTel`, `noCell`, `adresse`, `ville`, `codePostal`, `age`, `dateInscription`, `courriel`, `statut`, `entraineurID`) VALUES
(1, 'Bernier', 'Samuel', '(450)444-5555', '(514)438-5555', '1850 Boucher', 'Longueuil', 'J4M 1P9', 18, '2014-12-03 00:00:00', 'samuelb@hotmail.ca', 2, NULL),
(2, 'Gagnier', 'Christophe', '(450)448-5555', '(514)435-5546', '2140 Buies', 'Longueuil', 'J4P 1T6', 18, '2014-12-03 00:00:00', 'gagnierC@hotmail.ca', 1, 1),
(3, 'Desmecht', 'Samuel', '(450)446-7894', '(514)438-4876', '1645 Beauharnois', 'Longueuil', 'J4M 1X6', 23, '2014-12-03 00:00:00', 'samuelD@hotmail.ca', 1, 1);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `alimentation`
--
ALTER TABLE `alimentation`
 ADD PRIMARY KEY (`alimentationID`), ADD KEY `fk_Alimentation_catégorieNourriture1_idx` (`categorieID`), ADD KEY `fk_Alimentation_Utilisateur1_idx` (`clientID`);

--
-- Index pour la table `categorienourriture`
--
ALTER TABLE `categorienourriture`
 ADD PRIMARY KEY (`categorieID`);

--
-- Index pour la table `conseil`
--
ALTER TABLE `conseil`
 ADD PRIMARY KEY (`conseilID`), ADD KEY `fk_Conseil_Utilisateur1_idx` (`entraineurID`), ADD KEY `fk_Conseil_Utilisateur2_idx` (`clientID`);

--
-- Index pour la table `entrainement`
--
ALTER TABLE `entrainement`
 ADD PRIMARY KEY (`entrainementID`);

--
-- Index pour la table `message`
--
ALTER TABLE `message`
 ADD PRIMARY KEY (`messageID`), ADD KEY `fk_Message_utilisateur1_idx` (`expeditaireID`), ADD KEY `fk_Message_utilisateur2_idx` (`destinataireID`);

--
-- Index pour la table `resultat`
--
ALTER TABLE `resultat`
 ADD PRIMARY KEY (`resultatID`), ADD KEY `fk_Résultat_Entrainement1_idx` (`entrainementID`), ADD KEY `fk_Résultat_Utilisateur1_idx` (`clientID`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
 ADD PRIMARY KEY (`utilisateurID`), ADD KEY `fk_Utilisateur_Utilisateur_idx` (`entraineurID`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `alimentation`
--
ALTER TABLE `alimentation`
MODIFY `alimentationID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `categorienourriture`
--
ALTER TABLE `categorienourriture`
MODIFY `categorieID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT pour la table `conseil`
--
ALTER TABLE `conseil`
MODIFY `conseilID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `entrainement`
--
ALTER TABLE `entrainement`
MODIFY `entrainementID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `message`
--
ALTER TABLE `message`
MODIFY `messageID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `resultat`
--
ALTER TABLE `resultat`
MODIFY `resultatID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
MODIFY `utilisateurID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `alimentation`
--
ALTER TABLE `alimentation`
ADD CONSTRAINT `fk_Alimentation_Utilisateur1` FOREIGN KEY (`clientID`) REFERENCES `utilisateur` (`utilisateurID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_Alimentation_catégorieNourriture1` FOREIGN KEY (`categorieID`) REFERENCES `categorienourriture` (`categorieID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `conseil`
--
ALTER TABLE `conseil`
ADD CONSTRAINT `fk_Conseil_Utilisateur1` FOREIGN KEY (`entraineurID`) REFERENCES `utilisateur` (`utilisateurID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_Conseil_Utilisateur2` FOREIGN KEY (`clientID`) REFERENCES `utilisateur` (`utilisateurID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `message`
--
ALTER TABLE `message`
ADD CONSTRAINT `fk_Message_utilisateur1` FOREIGN KEY (`expeditaireID`) REFERENCES `utilisateur` (`utilisateurID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_Message_utilisateur2` FOREIGN KEY (`destinataireID`) REFERENCES `utilisateur` (`utilisateurID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `resultat`
--
ALTER TABLE `resultat`
ADD CONSTRAINT `fk_Résultat_Entrainement1` FOREIGN KEY (`entrainementID`) REFERENCES `entrainement` (`entrainementID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_Résultat_Utilisateur1` FOREIGN KEY (`clientID`) REFERENCES `utilisateur` (`utilisateurID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
ADD CONSTRAINT `fk_Utilisateur_Utilisateur` FOREIGN KEY (`entraineurID`) REFERENCES `utilisateur` (`utilisateurID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
