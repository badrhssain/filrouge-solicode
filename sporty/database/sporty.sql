-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 23 juin 2022 à 03:44
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `sporty`
--

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `idCategorie` int(5) NOT NULL,
  `NomCategorie` varchar(254) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`idCategorie`, `NomCategorie`) VALUES
(1, 'Adidas'),
(2, 'Nike'),
(3, 'Puma');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `idClient` int(5) NOT NULL,
  `nom` varchar(254) DEFAULT NULL,
  `prenom` varchar(254) DEFAULT NULL,
  `email` varchar(254) DEFAULT NULL,
  `telephone` varchar(254) DEFAULT NULL,
  `Motdepasse` varchar(254) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`idClient`, `nom`, `prenom`, `email`, `telephone`, `Motdepasse`) VALUES
(1, '', '', 'badrhssain@ag.sgh', '055', 'da39a3ee5e6b4b0d3255bfef95601890afd80709'),
(2, 'najat', 'benazaiz', 'najat@gmail.com', '06789987', '9c666e97d0eedb1110e16d48b97679e1234e769b'),
(3, 'badr', 'hssain', 'badr@gmail.com', '0674608993', '5137f07ca4d273841441206434b505f1f701007a'),
(4, 'badr', 'hssain', 'badr2@gmail.com', '0674608993', '5137f07ca4d273841441206434b505f1f701007a'),
(5, 'badr', 'hssain', 'badr3@gmail.com', '0674608993', '5137f07ca4d273841441206434b505f1f701007a'),
(6, 'badr', 'hssain', 'badr10@gmail.com', '0674608993', '5137f07ca4d273841441206434b505f1f701007a'),
(7, 'badr', 'hssain', 'bd@bd.bd', '6555566', '5137f07ca4d273841441206434b505f1f701007a'),
(8, 'badr', 'hssain', 'badr50@gmail.com', '06766666', '5137f07ca4d273841441206434b505f1f701007a');

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `idCommande` int(5) NOT NULL,
  `idClient` int(5) DEFAULT NULL,
  `dateDeLivraision` date DEFAULT NULL,
  `adresseLivraison` varchar(254) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `commande`
--

INSERT INTO `commande` (`idCommande`, `idClient`, `dateDeLivraision`, `adresseLivraison`) VALUES
(1, 2, '2022-06-01', 'ERTYU'),
(2, 2, '2022-06-01', 'ERTYU'),
(3, 2, '2022-06-01', 'ERTYU'),
(4, 2, '2022-06-01', 'ERTYU'),
(14, 6, '0000-00-00', '[value-4]'),
(16, 2, '2022-06-01', 'ERTYU'),
(17, 2, '2022-06-01', 'ERTYU'),
(18, 6, '0000-00-00', ''),
(19, 6, '2022-06-26', 'tanger'),
(20, 6, '0000-00-00', 'tanger'),
(21, 6, '2022-06-30', 'zemmori 3 yousra 1'),
(22, 6, '2022-06-30', 'zemmori 3 yousra 1'),
(23, 6, '2022-07-01', 'zemmori 3 yousra 1'),
(24, 6, '2022-07-01', '');

-- --------------------------------------------------------

--
-- Structure de la table `detailcommande`
--

CREATE TABLE `detailcommande` (
  `idCommande` int(5) NOT NULL,
  `idProduit` int(5) NOT NULL,
  `qteCommande` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `gallerie`
--

CREATE TABLE `gallerie` (
  `idPhoto` int(5) NOT NULL,
  `idProduit` int(5) DEFAULT NULL,
  `photo_1` varchar(254) DEFAULT NULL,
  `photo_2` varchar(500) DEFAULT NULL,
  `photo_3` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `gallerie`
--

INSERT INTO `gallerie` (`idPhoto`, `idProduit`, `photo_1`, `photo_2`, `photo_3`) VALUES
(1, 1, 'predator1.png', NULL, NULL),
(2, 2, 'predator2.png', NULL, NULL),
(3, 3, 'predator3.png', NULL, NULL),
(4, 4, 'predator4.png', NULL, NULL),
(5, 5, 'predator5.png', NULL, NULL),
(6, 6, 'predator6.png', NULL, NULL),
(7, 7, 'predator7.png', NULL, NULL),
(8, 8, 'predator8.png', NULL, NULL),
(9, 9, 'predator9.png', NULL, NULL),
(10, 10, 'predator10.png', NULL, NULL),
(11, 11, 'predator11.png', NULL, NULL),
(12, 12, 'predator12.png', NULL, NULL),
(13, 13, 'predator13.png', NULL, NULL),
(14, 14, 'predator14.png', NULL, NULL),
(15, 15, 'predator15.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `idProduit` int(5) NOT NULL,
  `idCategorie` int(5) DEFAULT NULL,
  `libelle` varchar(254) DEFAULT NULL,
  `description` varchar(254) DEFAULT NULL,
  `couleur` varchar(254) DEFAULT NULL,
  `prix` decimal(10,0) DEFAULT NULL,
  `quantiteStock` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`idProduit`, `idCategorie`, `libelle`, `description`, `couleur`, `prix`, `quantiteStock`) VALUES
(1, 2, 'Mbappe Nike VAPOR', 'Un nouveau revêtement NIKESKIN ultra-fin vous rapproche du ballon pour un toucher précis à haute vitesse. La finition Nike Mercurial Vapor XIII All Conditions Control (ACC) vous garantit un toucher précis par temps sec et humide.', 'Gris et or', '1499', 3),
(2, 1, 'Predator Freak .1', 'La chaussure est utilisée par des joueurs comme PaulPogba, David Alaba et Toni Duggan Tige en DEMONSKIN révolutionnaire, qui offre un contrôle à 360 degrés et assure une adhérence effrayante sur le ballon', 'colorful', '1199', 6),
(3, 2, 'Mbappe superfly', 'Un nouveau revêtement NIKESKIN ultra-fin vous rapproche du ballon pour un toucher précis à haute vitesse. La finition Nike Mercurial superfly All Conditions Control (ACC) vous garantit un toucher précis par temps sec et humide.', 'Mauve et Or', '1399', 3),
(4, 2, 'Nike Phantom', 'Chaussures de football Nike Phantom GT2 Elite FG pour adulte. Chaussures avec chaussette intégrée à utiliser en terrain naturel sec ou humide ou terrain artificiel dernière génération. Chaussures haut de gamme pour les joueurs de contrôle couleur Black-I', 'blanc', '1299', 5),
(5, 2, 'Nike Vapor XIV FG', 'Fabriqués à partir de matériaux légers et résistants, les crampons Nike Mercurial Vapor vous garantirons un confort à l\'intérieur tout en vous procurant une sensation de légèreté lors de vos efforts.', 'colorful', '1499', 3),
(6, 2, 'Nike Vapor XIII FG', 'Cette chaussure fait partie du pack \'Planet Football Nike\' Les Nike Mercurial Vapor XIII Elite seront portées par les attaquants Neymar et Eden Hazard. Chaussure Nike Mercurial Vapor XIII Elite FG, coloris Beige. Equipée de nouvelles technologies ! Touch', 'beige', '1199', 6),
(7, 2, 'Nike Vapor Elite XIII', 'Ces chaussures nike mercurial vapor 13 sont fabriquées à partir de matériaux plus légers et plus résistants que leurs prédécesseurs. L\'empeigne en tissu Flyknit est plus résistante et plus légère.', 'blue', '1399', 3),
(8, 3, 'puma ultra 1.1 FG', 'Les nouvelles chaussures de football ULTRA 1.1 FG / AG ont une tige synthétique lisse d\'excellente qualité, pour une durabilité et une résistance accrues. Il dispose d\'un système de fixation tressé avec des passants de ceinture renforcés pour un meilleur', 'Blue', '999', 3),
(9, 1, 'ADIDAS X SPEEDFLOW MESSI', 'Du cerveau, à la chaussure, au ballon. Et on recommence. Quand la vivacité d\'esprit et la vitesse d’exécution se rencontrent, tu deviens la version la plus rapide de toi-même. Trouve ton rythme et laisse le reste derrière toi.', 'Bleu et Rose', '1199', 5),
(10, 1, 'ADIDAS X MOSALAH', 'Alors que Mohamed Salah s\'apprête à battre le record de buts marqués en équipe nationale, la chaussure de football adidas X Speedflow a été conçue pour le propulser vers son objectif.', 'Rouge et Or', '1199', 6),
(11, 2, 'Nike Superfly 7 FG', 'Les chaussures de football Nike Mercurial Superfly 7 Elite FG sont livrées avec des tons blancs et un orange Bright Dawn. Fabriquées par Nike, les Mercurial Superfly 7 Elite FG sont parfaitement ajustées pour développer vos actions à grande vitesse. ', 'Noir', '1299', 3),
(12, 1, 'PREDATOR FREAK +FG', 'Chaussure de football adidas Predator Freak +FG pour adulte. Chaussures sans lacets avec chaussette intégrée à porter sur terrain naturel sec ou humide. Chaussures haut de gamme couleur Black-White-Solar yellow.', 'Blue et jaune', '1199', 5),
(13, 3, 'Puma ultra 1.2', 'Les nouvelles chaussures de football ULTRA 1.1 FG / AG ont une tige synthétique lisse d\'excellente qualité, pour une durabilité et une résistance accrues. ', 'blanc', '1249', 6),
(14, 3, 'Puma ultra 1.3 FG', 'Chaussure de football Puma Ultra 1.3 FG/AG pour adulte. Chaussures synthétiques à porter sur terrain naturel ou terrain artificiel dernière génération. Chaussures haut de gamme couleur Sunblaze-Puma White-Bluemazing.', 'rouge', '1299', 5),
(15, 3, 'Puma ultra 1.1 AG/FG', 'Puma Ultra 1.3 FG/AG Football Boots White Black is the latest and greatest shoes from Puma’s stable,these boots are ultra-light, ultra-fast and ultra-powerful on firm or artificial terrain.The MATRYXEVO woven upper gives impressive multi-layered support', 'blanc', '1249', 4);

-- --------------------------------------------------------

--
-- Structure de la table `review`
--

CREATE TABLE `review` (
  `idClient` int(5) DEFAULT NULL,
  `idProduit` int(5) DEFAULT NULL,
  `Id_Review` int(5) NOT NULL,
  `Note` varchar(254) DEFAULT NULL,
  `Commentaire` varchar(254) DEFAULT NULL,
  `Date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `taille`
--

CREATE TABLE `taille` (
  `id_taille` int(5) NOT NULL,
  `id_produit` int(5) NOT NULL,
  `taille` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`idCategorie`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`idClient`);

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`idCommande`),
  ADD KEY `idClient` (`idClient`);

--
-- Index pour la table `detailcommande`
--
ALTER TABLE `detailcommande`
  ADD PRIMARY KEY (`idCommande`,`idProduit`),
  ADD KEY `idProduit` (`idProduit`);

--
-- Index pour la table `gallerie`
--
ALTER TABLE `gallerie`
  ADD PRIMARY KEY (`idPhoto`),
  ADD KEY `idProduit` (`idProduit`);

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`idProduit`),
  ADD KEY `idCategorie` (`idCategorie`);

--
-- Index pour la table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`Id_Review`),
  ADD KEY `idClient` (`idClient`),
  ADD KEY `idProduit` (`idProduit`);

--
-- Index pour la table `taille`
--
ALTER TABLE `taille`
  ADD PRIMARY KEY (`id_taille`),
  ADD KEY `id_produit` (`id_produit`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `idCategorie` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `idClient` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `commande`
--
ALTER TABLE `commande`
  MODIFY `idCommande` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT pour la table `detailcommande`
--
ALTER TABLE `detailcommande`
  MODIFY `idCommande` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `gallerie`
--
ALTER TABLE `gallerie`
  MODIFY `idPhoto` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `produit`
--
ALTER TABLE `produit`
  MODIFY `idProduit` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `review`
--
ALTER TABLE `review`
  MODIFY `Id_Review` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `taille`
--
ALTER TABLE `taille`
  MODIFY `id_taille` int(5) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `commande_ibfk_1` FOREIGN KEY (`idClient`) REFERENCES `client` (`idClient`);

--
-- Contraintes pour la table `detailcommande`
--
ALTER TABLE `detailcommande`
  ADD CONSTRAINT `detailcommande_ibfk_1` FOREIGN KEY (`idCommande`) REFERENCES `commande` (`idCommande`),
  ADD CONSTRAINT `detailcommande_ibfk_2` FOREIGN KEY (`idProduit`) REFERENCES `produit` (`idProduit`);

--
-- Contraintes pour la table `gallerie`
--
ALTER TABLE `gallerie`
  ADD CONSTRAINT `gallerie_ibfk_1` FOREIGN KEY (`idProduit`) REFERENCES `produit` (`idProduit`);

--
-- Contraintes pour la table `produit`
--
ALTER TABLE `produit`
  ADD CONSTRAINT `produit_ibfk_1` FOREIGN KEY (`idCategorie`) REFERENCES `categorie` (`idCategorie`);

--
-- Contraintes pour la table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_ibfk_1` FOREIGN KEY (`idClient`) REFERENCES `client` (`idClient`),
  ADD CONSTRAINT `review_ibfk_2` FOREIGN KEY (`idProduit`) REFERENCES `produit` (`idProduit`);

--
-- Contraintes pour la table `taille`
--
ALTER TABLE `taille`
  ADD CONSTRAINT `taille_ibfk_1` FOREIGN KEY (`id_produit`) REFERENCES `produit` (`idProduit`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
