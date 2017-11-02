-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 02 nov. 2017 à 09:25
-- Version du serveur :  5.7.19
-- Version de PHP :  5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `tacosinlyon`
--

-- --------------------------------------------------------

--
-- Structure de la table `app`
--

DROP TABLE IF EXISTS `app`;
CREATE TABLE IF NOT EXISTS `app` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `theme` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `version` longtext COLLATE utf8_unicode_ci NOT NULL,
  `packageName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `website` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `debugMode` tinyint(1) NOT NULL,
  `configPackages` longtext COLLATE utf8_unicode_ci COMMENT '(DC2Type:array)',
  `preferences` longtext COLLATE utf8_unicode_ci COMMENT '(DC2Type:array)',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `app`
--

INSERT INTO `app` (`id`, `name`, `theme`, `version`, `packageName`, `description`, `author`, `website`, `email`, `debugMode`, `configPackages`, `preferences`) VALUES
(1, 'tacosinlyon', 'base_keosu', '1.0', 'com.keosu.tacosinlyon', 'tacos à lyon', 'mespeglonnel', 'http://localhost/keosu/web/app_dev.php', 'ddddddddddd4556456@yopmail.com', 0, 'a:2:{s:20:\"keosu-authentication\";a:1:{s:10:\"privateApp\";b:1;}s:10:\"keosu-push\";a:7:{s:10:\"enablePush\";b:0;s:22:\"googleGcmProjectNumber\";N;s:15:\"googleGcmApiKey\";N;s:18:\"googleUseMultiCurl\";b:0;s:10:\"iosSandbox\";b:0;s:13:\"iosPassPhrase\";N;s:6:\"iosPem\";s:0:\"\";}}', 'a:18:{i:0;a:2:{s:3:\"key\";s:11:\"permissions\";s:5:\"value\";s:4:\"none\";}i:1;a:2:{s:3:\"key\";s:16:\"phonegap-version\";s:5:\"value\";s:9:\"cli-6.3.0\";}i:2;a:2:{s:3:\"key\";s:11:\"orientation\";s:5:\"value\";s:7:\"default\";}i:3;a:2:{s:3:\"key\";s:13:\"target-device\";s:5:\"value\";s:9:\"universal\";}i:4;a:2:{s:3:\"key\";s:10:\"Fullscreen\";s:5:\"value\";s:4:\"true\";}i:5;a:2:{s:3:\"key\";s:13:\"webviewbounce\";s:5:\"value\";s:4:\"true\";}i:6;a:2:{s:3:\"key\";s:16:\"prerendered-icon\";s:5:\"value\";s:4:\"true\";}i:7;a:2:{s:3:\"key\";s:15:\"stay-in-webview\";s:5:\"value\";s:5:\"false\";}i:8;a:2:{s:3:\"key\";s:18:\"ios-statusbarstyle\";s:5:\"value\";s:12:\"black-opaque\";}i:9;a:2:{s:3:\"key\";s:17:\"detect-data-types\";s:5:\"value\";s:4:\"true\";}i:10;a:2:{s:3:\"key\";s:15:\"exit-on-suspend\";s:5:\"value\";s:5:\"false\";}i:11;a:2:{s:3:\"key\";s:26:\"Show-splash-screen-spinner\";s:5:\"value\";s:4:\"true\";}i:12;a:2:{s:3:\"key\";s:23:\"auto-hide-splash-screen\";s:5:\"value\";s:5:\"false\";}i:13;a:2:{s:3:\"key\";s:14:\"disable-cursor\";s:5:\"value\";s:5:\"false\";}i:14;a:2:{s:3:\"key\";s:21:\"android-minSdkVersion\";s:5:\"value\";s:2:\"14\";}i:15;a:2:{s:3:\"key\";s:23:\"android-installLocation\";s:5:\"value\";s:4:\"auto\";}i:16;a:2:{s:3:\"key\";s:18:\"disallowOverscroll\";s:5:\"value\";s:4:\"true\";}i:17;a:2:{s:3:\"key\";s:17:\"SplashScreenDelay\";s:5:\"value\";s:4:\"3000\";}}');

-- --------------------------------------------------------

--
-- Structure de la table `articleattachment`
--

DROP TABLE IF EXISTS `articleattachment`;
CREATE TABLE IF NOT EXISTS `articleattachment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `reader_id` int(11) DEFAULT NULL,
  `path` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remote` tinyint(1) NOT NULL,
  `idext` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `orientation` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `articleBody_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_8F0819A81717D737` (`reader_id`),
  KEY `IDX_8F0819A8C72B541B` (`articleBody_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `articleattachment`
--

INSERT INTO `articleattachment` (`id`, `reader_id`, `path`, `name`, `remote`, `idext`, `orientation`, `articleBody_id`) VALUES
(1, NULL, '1509357597_mister-tacos.jpg', 'mister tacos', 0, NULL, 'portrait', 2),
(2, NULL, '1509357678_hamamet.jpg', 'hamamet', 0, NULL, 'landscape', 3);

-- --------------------------------------------------------

--
-- Structure de la table `articlebody`
--

DROP TABLE IF EXISTS `articlebody`;
CREATE TABLE IF NOT EXISTS `articlebody` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `reader_id` int(11) DEFAULT NULL,
  `idext` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `body` longtext COLLATE utf8_unicode_ci,
  `author` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL,
  `version` double NOT NULL,
  `enableComments` tinyint(1) NOT NULL,
  `shareUrl` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_227211DB1717D737` (`reader_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `articlebody`
--

INSERT INTO `articlebody` (`id`, `reader_id`, `idext`, `title`, `body`, `author`, `date`, `version`, `enableComments`, `shareUrl`) VALUES
(2, NULL, '0', 'Mister Tacos', '<p><span style=\"font-weight: bold; color: #6a6a6a; font-family: arial, sans-serif; font-size: small;\">Mister Tacos</span><span style=\"color: #545454; font-family: arial, sans-serif; font-size: small;\"> est le spécialiste du Tacos au four lyonnais depuis 2004 à Villeurbanne puis à ... Le concept; Villeurbanne; </span><span style=\"font-weight: bold; color: #6a6a6a; font-family: arial, sans-serif; font-size: small;\">Lyon</span><span style=\"color: #545454; font-family: arial, sans-serif; font-size: small;\"> Saint-Paul; Paris 13ème ...</span></p>', 'mespeglonnel', '2017-10-30 00:00:00', 1, 1, NULL),
(3, NULL, '0', 'Hamamet', '<p><span style=\"font-weight: bold; color: #6a6a6a; font-family: arial, sans-serif; font-size: small;\">Hamamet Tacos</span><span style=\"color: #545454; font-family: arial, sans-serif; font-size: small;\"> Meilleur tacos de Lyon, livraison des pizzas, tacos sur Villeurbanne et Lyon ... Hamamet Food Villeurbanne </span><span style=\"font-weight: bold; color: #6a6a6a; font-family: arial, sans-serif; font-size: small;\">Charpennes</span><span style=\"color: #545454; font-family: arial, sans-serif; font-size: small;\"> Snack Pizzeria</span></p>', 'mespeglonnel', '2017-10-30 00:00:00', 1, 1, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `articletags`
--

DROP TABLE IF EXISTS `articletags`;
CREATE TABLE IF NOT EXISTS `articletags` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tagName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `articleBody_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_96668E4FC72B541B` (`articleBody_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `comment`
--

DROP TABLE IF EXISTS `comment`;
CREATE TABLE IF NOT EXISTS `comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `reader_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `message` longtext COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL,
  `idDataModel` int(11) NOT NULL,
  `dataModelObject` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_5BC96BF01717D737` (`reader_id`),
  KEY `IDX_5BC96BF0A76ED395` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `devices`
--

DROP TABLE IF EXISTS `devices`;
CREATE TABLE IF NOT EXISTS `devices` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` int(11) NOT NULL,
  `token` longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `event`
--

DROP TABLE IF EXISTS `event`;
CREATE TABLE IF NOT EXISTS `event` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `reader_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci,
  `location` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL,
  `enableComments` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_FA6F25A31717D737` (`reader_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `fos_user`
--

DROP TABLE IF EXISTS `fos_user`;
CREATE TABLE IF NOT EXISTS `fos_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `username_canonical` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `email_canonical` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
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
  `accountType` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_957A647992FC23A8` (`username_canonical`),
  UNIQUE KEY `UNIQ_957A6479A0D96FBF` (`email_canonical`),
  UNIQUE KEY `UNIQ_957A6479C05FB297` (`confirmation_token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `gadget`
--

DROP TABLE IF EXISTS `gadget`;
CREATE TABLE IF NOT EXISTS `gadget` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `page_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `shared` tinyint(1) NOT NULL,
  `zone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `config` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `template` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_B1F352BCC4663E4` (`page_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `gadget`
--

INSERT INTO `gadget` (`id`, `page_id`, `name`, `shared`, `zone`, `config`, `template`) VALUES
(3, 2, 'keosu-article', 0, 'top-body', 'a:4:{s:10:\"article-id\";i:2;s:7:\"offline\";b:0;s:5:\"cache\";d:10;s:7:\"timeout\";d:10;}', 'image-top.html'),
(4, 2, 'keosu-map', 0, 'bottom-body', 'a:4:{s:5:\"poiId\";i:1;s:4:\"zoom\";i:1;s:5:\"cache\";d:10;s:7:\"timeout\";d:10;}', 'default.html'),
(5, 3, 'keosu-article', 0, 'top-body', 'a:4:{s:10:\"article-id\";i:3;s:7:\"offline\";b:0;s:5:\"cache\";d:10;s:7:\"timeout\";d:10;}', 'image-top.html'),
(6, 3, 'keosu-map', 0, 'bottom-body', 'a:4:{s:5:\"poiId\";i:2;s:4:\"zoom\";i:1;s:5:\"cache\";d:10;s:7:\"timeout\";d:10;}', 'default.html'),
(9, 1, 'keosu-menu', 0, 'menu', 'a:1:{s:7:\"menu-id\";i:1;}', 'list.html'),
(11, 4, 'keosu-authentication', 0, 'body', 'a:1:{s:18:\"pageToGoAfterLogin\";i:1;}', 'default.html'),
(13, 1, 'keosu-around-me', 0, 'body', 'a:4:{s:5:\"title\";N;s:3:\"tag\";N;s:5:\"cache\";d:10;s:7:\"timeout\";d:10;}', 'map-multiple-markers.html');

-- --------------------------------------------------------

--
-- Structure de la table `location`
--

DROP TABLE IF EXISTS `location`;
CREATE TABLE IF NOT EXISTS `location` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `reader_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci,
  `lat` double NOT NULL,
  `lng` double NOT NULL,
  `enableComments` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_A7E8EB9D1717D737` (`reader_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `location`
--

INSERT INTO `location` (`id`, `reader_id`, `name`, `description`, `lat`, `lng`, `enableComments`) VALUES
(1, NULL, 'Mister Tacos', '', 45.770159, 4.865939000000026, 0),
(2, NULL, 'Hamamet', '', 45.7712109, 4.866993699999966, 0);

-- --------------------------------------------------------

--
-- Structure de la table `locationtags`
--

DROP TABLE IF EXISTS `locationtags`;
CREATE TABLE IF NOT EXISTS `locationtags` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tagName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Location_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_FB06728F80D1AE59` (`Location_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `menuentry`
--

DROP TABLE IF EXISTS `menuentry`;
CREATE TABLE IF NOT EXISTS `menuentry` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `reader_id` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `appId` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_FD7BB0821717D737` (`reader_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `menuentry`
--

INSERT INTO `menuentry` (`id`, `reader_id`, `title`, `appId`) VALUES
(1, NULL, 'Tacos in Lyon', 1);

-- --------------------------------------------------------

--
-- Structure de la table `menupart`
--

DROP TABLE IF EXISTS `menupart`;
CREATE TABLE IF NOT EXISTS `menupart` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `reader_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `css` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `target` int(11) NOT NULL,
  `path` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pathActive` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `menuEntry_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_C5816A661717D737` (`reader_id`),
  KEY `IDX_C5816A66BFD3D7D7` (`menuEntry_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `menupart`
--

INSERT INTO `menupart` (`id`, `reader_id`, `name`, `css`, `target`, `path`, `pathActive`, `menuEntry_id`) VALUES
(1, NULL, 'Connexion', NULL, 4, NULL, NULL, 1),
(2, NULL, 'Mister Tacos', NULL, 2, NULL, NULL, 1),
(3, NULL, 'Hamamet', NULL, 3, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Structure de la table `page`
--

DROP TABLE IF EXISTS `page`;
CREATE TABLE IF NOT EXISTS `page` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `isMain` tinyint(1) NOT NULL,
  `appId` int(11) NOT NULL,
  `templateId` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `page`
--

INSERT INTO `page` (`id`, `name`, `isMain`, `appId`, `templateId`) VALUES
(1, 'Main', 1, 1, 'slide-template.html'),
(2, 'Mister Tacos', 0, 1, 'dual-zone-template.html'),
(3, 'Hamamet', 0, 1, 'dual-zone-template.html'),
(4, 'Connexion', 0, 1, 'keosu-template.html');

-- --------------------------------------------------------

--
-- Structure de la table `picture`
--

DROP TABLE IF EXISTS `picture`;
CREATE TABLE IF NOT EXISTS `picture` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `reader_id` int(11) DEFAULT NULL,
  `path` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `idext` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `enableComments` tinyint(1) NOT NULL,
  `orientation` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_D96676151717D737` (`reader_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `picturetag`
--

DROP TABLE IF EXISTS `picturetag`;
CREATE TABLE IF NOT EXISTS `picturetag` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `picture_id` int(11) NOT NULL,
  `tagName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_B3C089ECEE45BDBF` (`picture_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `picturetags`
--

DROP TABLE IF EXISTS `picturetags`;
CREATE TABLE IF NOT EXISTS `picturetags` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `reader`
--

DROP TABLE IF EXISTS `reader`;
CREATE TABLE IF NOT EXISTS `reader` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `service` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `config` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `allowupdate` tinyint(1) DEFAULT NULL,
  `linkedEntity` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `search`
--

DROP TABLE IF EXISTS `search`;
CREATE TABLE IF NOT EXISTS `search` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `keyValue` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `target` int(11) NOT NULL,
  `targetName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `appId` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `theme`
--

DROP TABLE IF EXISTS `theme`;
CREATE TABLE IF NOT EXISTS `theme` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `theme`
--

INSERT INTO `theme` (`id`, `name`) VALUES
(1, 'base_keosu');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `articleattachment`
--
ALTER TABLE `articleattachment`
  ADD CONSTRAINT `FK_8F0819A81717D737` FOREIGN KEY (`reader_id`) REFERENCES `reader` (`id`),
  ADD CONSTRAINT `FK_8F0819A8C72B541B` FOREIGN KEY (`articleBody_id`) REFERENCES `articlebody` (`id`);

--
-- Contraintes pour la table `articlebody`
--
ALTER TABLE `articlebody`
  ADD CONSTRAINT `FK_227211DB1717D737` FOREIGN KEY (`reader_id`) REFERENCES `reader` (`id`);

--
-- Contraintes pour la table `articletags`
--
ALTER TABLE `articletags`
  ADD CONSTRAINT `FK_96668E4FC72B541B` FOREIGN KEY (`articleBody_id`) REFERENCES `articlebody` (`id`);

--
-- Contraintes pour la table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `FK_5BC96BF01717D737` FOREIGN KEY (`reader_id`) REFERENCES `reader` (`id`),
  ADD CONSTRAINT `FK_5BC96BF0A76ED395` FOREIGN KEY (`user_id`) REFERENCES `fos_user` (`id`);

--
-- Contraintes pour la table `event`
--
ALTER TABLE `event`
  ADD CONSTRAINT `FK_FA6F25A31717D737` FOREIGN KEY (`reader_id`) REFERENCES `reader` (`id`);

--
-- Contraintes pour la table `gadget`
--
ALTER TABLE `gadget`
  ADD CONSTRAINT `FK_B1F352BCC4663E4` FOREIGN KEY (`page_id`) REFERENCES `page` (`id`);

--
-- Contraintes pour la table `location`
--
ALTER TABLE `location`
  ADD CONSTRAINT `FK_A7E8EB9D1717D737` FOREIGN KEY (`reader_id`) REFERENCES `reader` (`id`);

--
-- Contraintes pour la table `locationtags`
--
ALTER TABLE `locationtags`
  ADD CONSTRAINT `FK_FB06728F80D1AE59` FOREIGN KEY (`Location_id`) REFERENCES `location` (`id`);

--
-- Contraintes pour la table `menuentry`
--
ALTER TABLE `menuentry`
  ADD CONSTRAINT `FK_FD7BB0821717D737` FOREIGN KEY (`reader_id`) REFERENCES `reader` (`id`);

--
-- Contraintes pour la table `menupart`
--
ALTER TABLE `menupart`
  ADD CONSTRAINT `FK_C5816A661717D737` FOREIGN KEY (`reader_id`) REFERENCES `reader` (`id`),
  ADD CONSTRAINT `FK_C5816A66BFD3D7D7` FOREIGN KEY (`menuEntry_id`) REFERENCES `menuentry` (`id`);

--
-- Contraintes pour la table `picture`
--
ALTER TABLE `picture`
  ADD CONSTRAINT `FK_D96676151717D737` FOREIGN KEY (`reader_id`) REFERENCES `reader` (`id`);

--
-- Contraintes pour la table `picturetag`
--
ALTER TABLE `picturetag`
  ADD CONSTRAINT `FK_B3C089ECEE45BDBF` FOREIGN KEY (`picture_id`) REFERENCES `picture` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
