-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 23 Décembre 2014 à 22:43
-- Version du serveur :  5.6.15-log
-- Version de PHP :  5.5.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `juliepro`
--

-- --------------------------------------------------------

--
-- Structure de la table `alimentation`
--

CREATE TABLE IF NOT EXISTS `alimentation` (
  `alimentationID` int(11) NOT NULL AUTO_INCREMENT,
  `nomRepas` varchar(45) NOT NULL,
  `calorieIngere` int(11) NOT NULL,
  `date` date NOT NULL,
  `categorieID` int(11) NOT NULL,
  `clientID` int(11) NOT NULL,
  PRIMARY KEY (`alimentationID`),
  KEY `fk_Alimentation_catégorieNourriture1_idx` (`categorieID`),
  KEY `fk_Alimentation_Utilisateur1_idx` (`clientID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Contenu de la table `alimentation`
--

INSERT INTO `alimentation` (`alimentationID`, `nomRepas`, `calorieIngere`, `date`, `categorieID`, `clientID`) VALUES
(1, 'Big Mac', 500, '2014-12-08', 1, 2),
(3, 'Cachou', 150, '2014-12-08', 6, 2),
(4, 'Steak', 350, '2014-12-09', 2, 2),
(7, 'abv', 162, '2014-12-18', 1, 2);

-- --------------------------------------------------------

--
-- Structure de la table `categorienourriture`
--

CREATE TABLE IF NOT EXISTS `categorienourriture` (
  `categorieID` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(45) NOT NULL,
  PRIMARY KEY (`categorieID`)
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

CREATE TABLE IF NOT EXISTS `conseil` (
  `conseilID` int(11) NOT NULL AUTO_INCREMENT,
  `texte` text NOT NULL,
  `dateAffichage` date NOT NULL,
  `nbJour` int(11) NOT NULL,
  `clientID` int(11) NOT NULL,
  `entraineurID` int(11) NOT NULL,
  PRIMARY KEY (`conseilID`),
  KEY `fk_Conseil_Utilisateur1_idx` (`entraineurID`),
  KEY `fk_Conseil_Utilisateur2_idx` (`clientID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `entrainement`
--

CREATE TABLE IF NOT EXISTS `entrainement` (
  `entrainementID` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(45) DEFAULT NULL,
  `type` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`entrainementID`)
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

CREATE TABLE IF NOT EXISTS `message` (
  `messageID` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(45) NOT NULL,
  `message` text NOT NULL,
  `date` datetime NOT NULL,
  `estLu` tinyint(1) NOT NULL DEFAULT '0',
  `expediteurID` int(11) NOT NULL,
  `destinataireID` int(11) NOT NULL,
  PRIMARY KEY (`messageID`),
  KEY `fk_Message_utilisateur1_idx` (`expediteurID`),
  KEY `fk_Message_utilisateur2_idx` (`destinataireID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Contenu de la table `message`
--

INSERT INTO `message` (`messageID`, `titre`, `message`, `date`, `estLu`, `expediteurID`, `destinataireID`) VALUES
(1, 'Ceci est un test.', 'Bonjour\r\n\r\nComment Vas-\r\ntu\r\n\r\n\r\n\r\n\r\n\r\n?', '2014-12-16 17:09:53', 1, 1, 2),
(3, 'Test', 'Bonjour', '2014-12-23 15:08:32', 0, 2, 1),
(4, 'Test', 'Bonjour', '2014-12-23 15:14:10', 0, 2, 1),
(6, 'Lorem Ipsum Dolor amet', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam pellentesque justo nec lacinia mattis. Donec lobortis turpis sapien, sed vulputate erat elementum vel. Etiam eros metus, porta at est sit amet, eleifend convallis ipsum. Donec pellentesque pharetra consectetur. Curabitur id lectus neque. Nunc vitae libero vulputate, egestas ligula ut, laoreet justo. Quisque posuere, purus eget eleifend maximus, justo sapien lobortis est, a convallis ante libero ut sem. Donec gravida dui in luctus imperdiet.\r\n\r\nVivamus convallis quis risus et molestie. Sed velit nibh, porttitor ut gravida eget, ullamcorper at quam. Praesent semper nisl ac fringilla posuere. Praesent commodo sapien libero, eget dictum ipsum tempus vitae. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla eleifend tincidunt nisi, eget sollicitudin nunc. Proin erat tortor, varius id sapien ut, sagittis congue orci. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.\r\n\r\nFusce vehicula sapien ac bibendum lacinia. Pellentesque id facilisis lorem. Duis non ornare justo. Praesent convallis accumsan congue. Quisque congue at lorem eget consectetur. Quisque lorem arcu, varius et libero a, lobortis placerat ligula. Aenean et pellentesque massa, sed auctor mi. Nullam risus ipsum, ullamcorper in sapien eu, egestas elementum lorem. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer facilisis lorem eget est interdum ultrices. Ut pretium a nulla ultrices posuere. Phasellus tempor augue quis ligula pellentesque, id iaculis orci placerat. Aliquam ac dictum urna. Proin blandit velit quis arcu lobortis, nec auctor massa vulputate. Integer eleifend odio nulla, non pellentesque arcu tempor ac.\r\n\r\nAliquam molestie aliquet iaculis. Proin venenatis ante non aliquam efficitur. Mauris blandit rhoncus velit tincidunt porta. Pellentesque vehicula accumsan metus et semper. Ut eu dictum lacus. Fusce eu finibus justo. Fusce rutrum semper dignissim. Nam mollis orci ut rhoncus lacinia. Integer nibh risus, auctor eget felis vitae, suscipit mollis odio.\r\n\r\nDuis eleifend ut turpis sed venenatis. Ut vestibulum augue et ex viverra tristique. Aliquam viverra massa vitae consectetur volutpat. Nam a velit ac elit luctus fringilla. Pellentesque dignissim sodales arcu sit amet porta. Nunc porta justo vel quam iaculis gravida. Vestibulum vitae ultricies eros, sed vestibulum lacus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Fusce pulvinar lacus tortor, ut vehicula sapien finibus ut. Integer sit amet urna ac magna molestie dignissim. Nulla luctus fermentum lacus, non posuere augue maximus iaculis. Curabitur ultricies ligula nec ipsum euismod rhoncus.', '2014-12-23 15:00:00', 1, 3, 2);

-- --------------------------------------------------------

--
-- Structure de la table `objectif`
--

CREATE TABLE IF NOT EXISTS `objectif` (
  `objectifID` int(11) NOT NULL AUTO_INCREMENT,
  `semaine` date NOT NULL,
  `nbExercice` int(11) DEFAULT NULL,
  `nbCaloriePerdue` int(11) DEFAULT NULL,
  `maxBattement` int(11) DEFAULT NULL,
  `calorieIngereesParJour` int(11) DEFAULT NULL,
  `clientID` int(11) NOT NULL,
  PRIMARY KEY (`objectifID`),
  KEY `fk_objectif_utilisateur1_idx` (`clientID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `objectif`
--

INSERT INTO `objectif` (`objectifID`, `semaine`, `nbExercice`, `nbCaloriePerdue`, `maxBattement`, `calorieIngereesParJour`, `clientID`) VALUES
(2, '2014-12-21', 4, 1750, 150, NULL, 2);

-- --------------------------------------------------------

--
-- Structure de la table `resultat`
--

CREATE TABLE IF NOT EXISTS `resultat` (
  `resultatID` int(11) NOT NULL AUTO_INCREMENT,
  `FQMax` int(11) NOT NULL,
  `VO2Max` int(11) NOT NULL,
  `calorieBrulee` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `entrainementID` int(11) NOT NULL,
  `clientID` int(11) NOT NULL,
  PRIMARY KEY (`resultatID`),
  KEY `fk_Résultat_Entrainement1_idx` (`entrainementID`),
  KEY `fk_Résultat_Utilisateur1_idx` (`clientID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `resultat`
--

INSERT INTO `resultat` (`resultatID`, `FQMax`, `VO2Max`, `calorieBrulee`, `date`, `entrainementID`, `clientID`) VALUES
(2, 134, 35, 500, '2014-12-08 00:00:00', 1, 3),
(3, 134, 34, 503, '2014-12-10 00:00:00', 2, 2),
(4, 125, 31, 456, '2014-12-10 00:00:00', 1, 2);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE IF NOT EXISTS `utilisateur` (
  `utilisateurID` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(45) NOT NULL,
  `prenom` varchar(45) NOT NULL,
  `noTel` varchar(45) NOT NULL,
  `noCell` varchar(45) DEFAULT NULL,
  `noRue` int(11) NOT NULL,
  `rue` varchar(45) NOT NULL,
  `ville` varchar(45) NOT NULL,
  `codePostal` varchar(45) NOT NULL,
  `age` int(11) NOT NULL,
  `dateInscription` datetime NOT NULL,
  `courriel` varchar(45) NOT NULL,
  `statut` int(11) NOT NULL,
  `entraineurID` int(11) DEFAULT NULL,
  PRIMARY KEY (`utilisateurID`),
  KEY `fk_Utilisateur_Utilisateur_idx` (`entraineurID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `utilisateur`
--

INSERT INTO `utilisateur` (`utilisateurID`, `nom`, `prenom`, `noTel`, `noCell`, `noRue`, `rue`, `ville`, `codePostal`, `age`, `dateInscription`, `courriel`, `statut`, `entraineurID`) VALUES
(1, 'Bernier', 'Samuel', '(450)444-5555', '(514)438-5555', 1, 'Boucher', 'Longueuil', 'J4M 1P9', 18, '2014-12-03 00:00:00', 'samuelb@hotmail.ca', 2, NULL),
(2, 'Gagnier', 'Christophe', '(450)448-5555', '(514)435-5546', 52, 'Buies', 'Longueuil', 'J4P 1T6', 18, '2014-12-03 00:00:00', 'gagnierC@hotmail.ca', 1, 1),
(3, 'Desmecht', 'Samuel', '(450)446-7894', '(514)438-4876', 6254, 'Beauharnois', 'Longueuil', 'J4M 1X6', 23, '2014-12-03 00:00:00', 'samuelD@hotmail.ca', 1, 1);

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
  ADD CONSTRAINT `fk_Message_utilisateur1` FOREIGN KEY (`expediteurID`) REFERENCES `utilisateur` (`utilisateurID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Message_utilisateur2` FOREIGN KEY (`destinataireID`) REFERENCES `utilisateur` (`utilisateurID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `objectif`
--
ALTER TABLE `objectif`
  ADD CONSTRAINT `fk_objectif_utilisateur1` FOREIGN KEY (`clientID`) REFERENCES `utilisateur` (`utilisateurID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

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
