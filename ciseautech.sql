-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mer 28 Décembre 2016 à 21:29
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `ciseautech`
--

-- --------------------------------------------------------

--
-- Structure de la table `acl_classes`
--

CREATE TABLE IF NOT EXISTS `acl_classes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `class_type` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_69DD750638A36066` (`class_type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `acl_entries`
--

CREATE TABLE IF NOT EXISTS `acl_entries` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `class_id` int(10) unsigned NOT NULL,
  `object_identity_id` int(10) unsigned DEFAULT NULL,
  `security_identity_id` int(10) unsigned NOT NULL,
  `field_name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ace_order` smallint(5) unsigned NOT NULL,
  `mask` int(11) NOT NULL,
  `granting` tinyint(1) NOT NULL,
  `granting_strategy` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `audit_success` tinyint(1) NOT NULL,
  `audit_failure` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_46C8B806EA000B103D9AB4A64DEF17BCE4289BF4` (`class_id`,`object_identity_id`,`field_name`,`ace_order`),
  KEY `IDX_46C8B806EA000B103D9AB4A6DF9183C9` (`class_id`,`object_identity_id`,`security_identity_id`),
  KEY `IDX_46C8B806EA000B10` (`class_id`),
  KEY `IDX_46C8B8063D9AB4A6` (`object_identity_id`),
  KEY `IDX_46C8B806DF9183C9` (`security_identity_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `acl_object_identities`
--

CREATE TABLE IF NOT EXISTS `acl_object_identities` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `parent_object_identity_id` int(10) unsigned DEFAULT NULL,
  `class_id` int(10) unsigned NOT NULL,
  `object_identifier` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `entries_inheriting` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_9407E5494B12AD6EA000B10` (`object_identifier`,`class_id`),
  KEY `IDX_9407E54977FA751A` (`parent_object_identity_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `acl_object_identity_ancestors`
--

CREATE TABLE IF NOT EXISTS `acl_object_identity_ancestors` (
  `object_identity_id` int(10) unsigned NOT NULL,
  `ancestor_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`object_identity_id`,`ancestor_id`),
  KEY `IDX_825DE2993D9AB4A6` (`object_identity_id`),
  KEY `IDX_825DE299C671CEA1` (`ancestor_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `acl_security_identities`
--

CREATE TABLE IF NOT EXISTS `acl_security_identities` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `identifier` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `username` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_8835EE78772E836AF85E0677` (`identifier`,`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE IF NOT EXISTS `client` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telephone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nombreCommande` int(11) DEFAULT NULL,
  `nombreAchat` int(11) DEFAULT NULL,
  `typeClient` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `identifiant` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sexe` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `adresse` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_C7440455450FF010` (`telephone`),
  UNIQUE KEY `UNIQ_C7440455C90409EC` (`identifiant`),
  UNIQUE KEY `UNIQ_C7440455E7927C74` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=12 ;

--
-- Contenu de la table `client`
--

INSERT INTO `client` (`id`, `nom`, `prenom`, `telephone`, `email`, `nombreCommande`, `nombreAchat`, `typeClient`, `identifiant`, `sexe`, `adresse`) VALUES
(1, 'SY', 'Ibrahima', '777012937', 'ibrahimasy01@hotmail.fr', NULL, NULL, 'Gold', '1', 'M', 'HLM grand Yoff'),
(2, 'SY', 'Harouna', '775282481', 'harouna_ucad@yahoo.fr', NULL, NULL, 'Gold', 'cl2', 'M', 'HLM grand Yoff'),
(3, 'Mbaye', 'Khady Soda', '777449720', 'ksoda@hotmail.com', NULL, NULL, 'Silver', 'cl3', 'F', 'HLM grand Yoff'),
(5, 'SY', 'Seydou', '772453698', 'seydousy@gmail.com', NULL, NULL, 'Silver', 'cl5', 'F', 'HLM Grand Yoff'),
(8, 'SY', 'Aïcha', '784578541', 'aicha1182@gmail.com', NULL, NULL, 'Gold', 'cl7', 'F', 'HLM Grand Yoff'),
(9, 'NGOM', 'Bassiro', '774569875', 'bg@gmail.com', NULL, NULL, 'Gold', 'cl8', 'M', 'Parcelles'),
(10, 'DIONNA', 'Libasse Libasse', '774523168', 'ldionna@pamecas.sn', NULL, NULL, 'Gold', 'cl9', 'M', 'Cambérene'),
(11, 'DIOUF', 'Serere Simon Pierre', '772135698', 'simzi@gmail.com', NULL, NULL, 'Bronze', 'cl10', 'M', 'Campus ESP');

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE IF NOT EXISTS `commande` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `reference` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dateCommande` date NOT NULL,
  `paieNet` int(11) DEFAULT NULL,
  `livraison` tinyint(1) NOT NULL,
  `dateLivraison` date DEFAULT NULL,
  `avance` int(11) DEFAULT NULL,
  `restant` int(11) DEFAULT NULL,
  `idClient` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nomClient` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prenomClient` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telephoneClient` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nbModele` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_6EEAA67DAEA34913` (`reference`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;

--
-- Contenu de la table `commande`
--

INSERT INTO `commande` (`id`, `reference`, `dateCommande`, `paieNet`, `livraison`, `dateLivraison`, `avance`, `restant`, `idClient`, `nomClient`, `prenomClient`, `telephoneClient`, `nbModele`) VALUES
(1, 'com1', '2016-09-28', 70000, 0, NULL, 20000, 25000, NULL, 'THIAM', 'Fatou Boury', '41258785', 3),
(2, 'com2', '2016-09-28', NULL, 0, NULL, NULL, NULL, NULL, 'THIAM', 'Amadou', '774512369', 5),
(3, 'com3', '2016-09-28', NULL, 0, NULL, NULL, NULL, NULL, 'THIAM', 'Amadou', '774512369', 5),
(4, 'com4', '2016-09-29', NULL, 0, NULL, NULL, NULL, NULL, 'SY', 'Aïcha', '784578541', 2),
(5, 'com5', '2016-09-29', NULL, 0, NULL, NULL, NULL, NULL, 'Mbaye', 'Diouma', '774125698', 2),
(6, 'com6', '2016-10-04', NULL, 0, NULL, NULL, NULL, NULL, 'Fall', 'Marieme', '772146539', 2),
(7, 'com7', '2016-10-09', NULL, 0, NULL, NULL, NULL, NULL, 'Ndiaye', 'Abdoul', '77456987', 2),
(8, 'com8', '2016-12-28', NULL, 0, NULL, NULL, NULL, NULL, 'BA', 'Ibrahima', '774512369', 10),
(9, 'com9', '2016-12-28', NULL, 0, NULL, NULL, NULL, NULL, 'BA', 'Ibrahima', '774512369', 2);

-- --------------------------------------------------------

--
-- Structure de la table `commande_produit`
--

CREATE TABLE IF NOT EXISTS `commande_produit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `reference` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `quantite` int(11) NOT NULL,
  `prixUnitaire` int(11) NOT NULL,
  `montantTotal` int(11) NOT NULL,
  `modele_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_DF1E9E87AC14B70A` (`modele_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=16 ;

--
-- Contenu de la table `commande_produit`
--

INSERT INTO `commande_produit` (`id`, `reference`, `quantite`, `prixUnitaire`, `montantTotal`, `modele_id`) VALUES
(1, 'com3', 5, 25000, 125000, NULL),
(2, 'com3', 5, 35000, 175000, NULL),
(3, 'com3', 2, 10000, 20000, NULL),
(4, 'com3', 1, 25000, 25000, NULL),
(6, 'com4', 10, 10000, 100000, 3),
(7, 'com4', 5, 25000, 125000, 4),
(8, 'com5', 1, 35000, 35000, 2),
(9, 'com5', 3, 25000, 75000, 4),
(10, 'com6', 1, 25000, 25000, 1),
(11, 'com6', 3, 35000, 105000, 2),
(12, 'com7', 2, 25000, 50000, 1),
(13, 'com7', 2, 10000, 20000, 3),
(14, 'com9', 2, 25000, 50000, 1),
(15, 'com9', 5, 10000, 50000, 3);

-- --------------------------------------------------------

--
-- Structure de la table `fos_user_group`
--

CREATE TABLE IF NOT EXISTS `fos_user_group` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_583D1F3E5E237E06` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `fos_user_user`
--

CREATE TABLE IF NOT EXISTS `fos_user_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username_canonical` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_canonical` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `locked` tinyint(1) NOT NULL,
  `expired` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  `confirmation_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `credentials_expired` tinyint(1) NOT NULL,
  `credentials_expire_at` datetime DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `date_of_birth` datetime DEFAULT NULL,
  `firstname` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lastname` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `website` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `biography` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gender` varchar(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  `locale` varchar(8) COLLATE utf8_unicode_ci DEFAULT NULL,
  `timezone` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `facebook_uid` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `facebook_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `facebook_data` longtext COLLATE utf8_unicode_ci COMMENT '(DC2Type:json)',
  `twitter_uid` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `twitter_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `twitter_data` longtext COLLATE utf8_unicode_ci COMMENT '(DC2Type:json)',
  `gplus_uid` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gplus_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gplus_data` longtext COLLATE utf8_unicode_ci COMMENT '(DC2Type:json)',
  `token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `two_step_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_C560D76192FC23A8` (`username_canonical`),
  UNIQUE KEY `UNIQ_C560D761A0D96FBF` (`email_canonical`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Contenu de la table `fos_user_user`
--

INSERT INTO `fos_user_user` (`id`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `locked`, `expired`, `expires_at`, `confirmation_token`, `password_requested_at`, `roles`, `credentials_expired`, `credentials_expire_at`, `created_at`, `updated_at`, `date_of_birth`, `firstname`, `lastname`, `website`, `biography`, `gender`, `locale`, `timezone`, `phone`, `facebook_uid`, `facebook_name`, `facebook_data`, `twitter_uid`, `twitter_name`, `twitter_data`, `gplus_uid`, `gplus_name`, `gplus_data`, `token`, `two_step_code`) VALUES
(1, 'admin', 'admin', 'admin@ciseautech.sn', 'admin@ciseautech.sn', 1, 'knkrjutd9k0gw4ssgocgwkkok8gkcsw', 'Hi9mWkgl5JVKKveHJrq9zlZQQZUrU03BGVwRX43OAmsh3TohOxkMI3vGVMqYVHKUDlrwUrfOprXTSfLcbNGQYQ==', '2016-09-25 14:01:42', 0, 0, NULL, NULL, NULL, 'a:1:{i:0;s:16:"ROLE_SUPER_ADMIN";}', 0, NULL, '2016-09-25 13:59:22', '2016-09-25 14:01:42', NULL, NULL, NULL, NULL, NULL, 'u', NULL, NULL, NULL, NULL, NULL, 'null', NULL, NULL, 'null', NULL, NULL, 'null', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `fos_user_user_group`
--

CREATE TABLE IF NOT EXISTS `fos_user_user_group` (
  `user_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  PRIMARY KEY (`user_id`,`group_id`),
  KEY `IDX_B3C77447A76ED395` (`user_id`),
  KEY `IDX_B3C77447FE54D947` (`group_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `individu`
--

CREATE TABLE IF NOT EXISTS `individu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telephone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mail` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `numIdentification` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dateDelivranceNumID` date NOT NULL,
  `dateExpirationNumID` date NOT NULL,
  `sexe` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nombreCommande` int(11) NOT NULL,
  `typeClient` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nombreAchat` int(11) NOT NULL,
  `adresse` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `situation` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_5EE42FCEB51974D7` (`numIdentification`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `mesure`
--

CREATE TABLE IF NOT EXISTS `mesure` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `identifiant` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `epaule` int(11) NOT NULL,
  `cou` int(11) NOT NULL,
  `mancheLongue` int(11) NOT NULL,
  `mancheCourte` int(11) NOT NULL,
  `longueurBoubou` int(11) NOT NULL,
  `ceinture` int(11) NOT NULL,
  `longueurPantalon` int(11) NOT NULL,
  `cuisse` int(11) NOT NULL,
  `longueurTaille` int(11) DEFAULT NULL,
  `hanche` int(11) DEFAULT NULL,
  `longueurTailleBasse` int(11) DEFAULT NULL,
  `poignet` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Contenu de la table `mesure`
--

INSERT INTO `mesure` (`id`, `identifiant`, `epaule`, `cou`, `mancheLongue`, `mancheCourte`, `longueurBoubou`, `ceinture`, `longueurPantalon`, `cuisse`, `longueurTaille`, `hanche`, `longueurTailleBasse`, `poignet`) VALUES
(1, '1', 70, 50, 90, 40, 170, 60, 100, 60, NULL, NULL, NULL, 20),
(2, 'cl2', 70, 50, 90, 40, 170, 60, 100, 60, NULL, NULL, NULL, 20),
(3, 'cl7', 30, 25, 75, 35, 140, 45, 95, 25, 45, 10, 50, 15),
(4, 'cl9', 70, 50, 90, 40, 170, 60, 100, 60, NULL, NULL, NULL, 20);

-- --------------------------------------------------------

--
-- Structure de la table `modele`
--

CREATE TABLE IF NOT EXISTS `modele` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `designation` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cout` int(11) NOT NULL,
  `typeModele` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dureeConfection` int(11) NOT NULL,
  `reference` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_10028558AEA34913` (`reference`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Contenu de la table `modele`
--

INSERT INTO `modele` (`id`, `designation`, `description`, `cout`, `typeModele`, `dureeConfection`, `reference`) VALUES
(1, 'Abaya', 'modèle pour femme', 25000, 'Femme', 10, 'mdl1'),
(2, 'Turki ndiarem', 'boubou mouride', 35000, 'Homme', 7, 'mdl2'),
(3, 'Ndoket', 'pour les femmes agées', 10000, 'Femme', 2, 'mdl3'),
(4, 'Grand boubou', 'habit pour les dames', 25000, 'Femme', 7, 'mdl4'),
(5, 'Djipir', 'Modele pour jeune fille', 15000, 'Femme', 10, 'mdl5'),
(6, 'Taille mame', 'Robe pour femme', 7000, 'Femme', 4, 'mdl6');

-- --------------------------------------------------------

--
-- Structure de la table `societe`
--

CREATE TABLE IF NOT EXISTS `societe` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `denomination` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `forme` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dateCreation` date DEFAULT NULL,
  `secteur` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `adresse` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telephone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ninea` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nom1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prenom1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fonction1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `numIdentification1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dateDelivranceNumID1` date NOT NULL,
  `dateExpirationNumID1` date NOT NULL,
  `nom2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `prenom2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fonction2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `telephone2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `numIdentification` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dateDelivranceNumID2` date DEFAULT NULL,
  `dateExpirationNumID2` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_19653DBDC678AEBE` (`ninea`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `acl_entries`
--
ALTER TABLE `acl_entries`
  ADD CONSTRAINT `FK_46C8B8063D9AB4A6` FOREIGN KEY (`object_identity_id`) REFERENCES `acl_object_identities` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_46C8B806DF9183C9` FOREIGN KEY (`security_identity_id`) REFERENCES `acl_security_identities` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_46C8B806EA000B10` FOREIGN KEY (`class_id`) REFERENCES `acl_classes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `acl_object_identities`
--
ALTER TABLE `acl_object_identities`
  ADD CONSTRAINT `FK_9407E54977FA751A` FOREIGN KEY (`parent_object_identity_id`) REFERENCES `acl_object_identities` (`id`);

--
-- Contraintes pour la table `acl_object_identity_ancestors`
--
ALTER TABLE `acl_object_identity_ancestors`
  ADD CONSTRAINT `FK_825DE2993D9AB4A6` FOREIGN KEY (`object_identity_id`) REFERENCES `acl_object_identities` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_825DE299C671CEA1` FOREIGN KEY (`ancestor_id`) REFERENCES `acl_object_identities` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `commande_produit`
--
ALTER TABLE `commande_produit`
  ADD CONSTRAINT `FK_DF1E9E87AC14B70A` FOREIGN KEY (`modele_id`) REFERENCES `modele` (`id`);

--
-- Contraintes pour la table `fos_user_user_group`
--
ALTER TABLE `fos_user_user_group`
  ADD CONSTRAINT `FK_B3C77447A76ED395` FOREIGN KEY (`user_id`) REFERENCES `fos_user_user` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_B3C77447FE54D947` FOREIGN KEY (`group_id`) REFERENCES `fos_user_group` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
