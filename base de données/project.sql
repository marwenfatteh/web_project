-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  lun. 18 avr. 2022 à 02:16
-- Version du serveur :  5.7.17
-- Version de PHP :  5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `project`
--

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `id` int(11) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `cemail` varchar(30) NOT NULL,
  `mdp` text NOT NULL,
  `cmdp` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='table d''inscription';

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`id`, `nom`, `prenom`, `email`, `cemail`, `mdp`, `cmdp`) VALUES
(1, '1', '1', '1', '1', '1', '1'),
(2, '2', '2', '2', '2', '2', '2'),
(19, 'Kaabi', 'Akrem', 'akremkaabi500@gmail.com', 'akremkaabi500@gmail.com', '1234567899', '1234567899'),
(20, '1', '1', '1status13skater@aol.com', '1@1.com', '1', '1'),
(21, 'kk', 'kk', 'k@k.com', 'k@k.com', '1234567899', '1234567899'),
(22, 'riahi', 'chaima', 'chaima@hotmail.com', 'chaima@hotmail.com', '12345678910', '12345678910'),
(23, 'aaaa', 'kkkk', 'a15@hotmail.com', 'a15@hotmail.com', '1234567899', '1234567899');

-- --------------------------------------------------------

--
-- Structure de la table `espacec`
--

CREATE TABLE `espacec` (
  `id` int(11) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mdp` text NOT NULL,
  `numtel` varchar(10) NOT NULL,
  `ville` varchar(11) NOT NULL,
  `msg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='espace client';

--
-- Déchargement des données de la table `espacec`
--

INSERT INTO `espacec` (`id`, `nom`, `prenom`, `email`, `mdp`, `numtel`, `ville`, `msg`) VALUES
(1, 'Kaabi', 'Akrem', 'akremkaabi500@gmail.com', '1234567899', '12345678', 'RADES', 'MA3EJBETNICH L KARHBA'),
(2, 'Kaabi', 'Akrem', 'akremkaabi500@gmail.com', '1234567899', '12345678', 'Rades', 'eastgahghbyuiezarg'),
(3, 'Kaabi', 'Akrem', 'akremkaabi500@gmail.com', '1234567899', '12345678', 'Rades', 'eastgahghbyuiezarg');

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

CREATE TABLE `reservation` (
  `idclient` int(11) NOT NULL,
  `idvoiture` int(11) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `disponible` char(1) NOT NULL,
  `dateD` date NOT NULL,
  `dateF` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COMMENT='table de reservation';

--
-- Déchargement des données de la table `reservation`
--

INSERT INTO `reservation` (`idclient`, `idvoiture`, `nom`, `prenom`, `disponible`, `dateD`, `dateF`) VALUES
(19, 20, 'Kaabi', 'Akrem', 'N', '2022-04-16', '2022-04-29'),
(23, 21, 'aaaa', 'kkkk', 'N', '2022-04-18', '2022-04-24');

-- --------------------------------------------------------

--
-- Structure de la table `voiture`
--

CREATE TABLE `voiture` (
  `id` int(10) NOT NULL,
  `marque` varchar(255) NOT NULL,
  `modele` varchar(255) NOT NULL,
  `serie` varchar(255) NOT NULL,
  `couleur` varchar(255) NOT NULL,
  `chaises` int(11) NOT NULL,
  `vitesse_max` varchar(10) NOT NULL,
  `image_v` varchar(20) NOT NULL,
  `disponible` char(1) NOT NULL,
  `date_v` date NOT NULL,
  `prix` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COMMENT='table de voiture';

--
-- Déchargement des données de la table `voiture`
--

INSERT INTO `voiture` (`id`, `marque`, `modele`, `serie`, `couleur`, `chaises`, `vitesse_max`, `image_v`, `disponible`, `date_v`, `prix`) VALUES
(14, 'Audi', 'R7', '1', 'Rouge', 2, '280 km/h', 'audi11.png', 'O', '2022-04-17', 500),
(15, 'Audi', 'R8', '', 'Blanc', 2, '329 km/h', 'audi12.png', 'O', '2022-04-17', 600),
(16, 'Audi', 'A8', '3', 'Noir', 5, '250 km/h', 'audi13.png', 'O', '2022-04-17', 150),
(17, 'Audi', 'R8 V10', '4', 'Bleu', 2, '300 km/h', 'audi14.png', 'O', '2022-04-17', 400),
(18, 'Bmw', 'Serie 5', '5', 'Rouge', 5, '235 km/h', 'bmw111.png', 'O', '2022-04-17', 650),
(19, 'Bmw', 'Serie 7', '7', 'Noir', 5, '250 km/h', 'bmw12.png', 'O', '2022-04-17', 750),
(20, 'Bmw', 'M2 CS', '2', 'Bleu', 2, '280 km/h', 'bmw13.png', 'O', '2022-04-17', 900),
(21, 'Bmw', 'Serie 8', '8', 'Blanc', 5, '250 km/h', 'bmw14.png', 'O', '2022-04-17', 800),
(22, 'Mercedes', 'Benz', '1', 'Blanc', 5, '185 km/h', 'mercedes111.png', 'O', '2022-04-18', 300),
(23, 'Mercedes', 'GLE 4x4', '5', 'Gris', 5, '210 km/h', 'mercedes12.png', 'O', '2022-04-17', 600),
(24, 'Mercedes', 'Benz Classe A', '3', 'Gris', 5, '206 km/h', 'mercedes13.png', 'O', '2022-04-17', 400),
(25, 'Mercedes', 'Benz Classe C', '4', 'Blanc', 2, '250 km/h', 'mercedes14.png', 'O', '2022-04-17', 700),
(26, 'Porsche', '911', '1', 'Noir', 2, '347 km/h', 'porsche11.png', 'N', '2022-04-17', 1200),
(27, 'Porsche', '718', '5', 'Blanc', 2, '275 km/h', 'porsche12.png', 'O', '2022-04-17', 2000),
(28, 'Porsche', '718', '5', 'Rouge', 2, '275 km/h', 'porsche13.png', 'N', '2022-04-17', 2000),
(29, 'Porsche', 'Panamera', '7', 'Blanc', 5, '315 km/h', 'porsche14.png', 'O', '2022-04-17', 2500),
(30, 'Chevrolet ', 'Aveo', '2', 'Gris', 5, '163 km/H', 'chevrolet11.png', 'O', '2022-04-17', 250),
(31, 'Chevrolet ', 'Cruze', '5', 'Blanc', 5, '205 km/h', 'chevrolet12.png', 'N', '2022-04-17', 500),
(32, 'Chevrolet ', 'Impala', '7', 'Marron', 5, '180 km/h', 'chevrolet13.png', 'O', '2022-04-17', 300),
(33, 'Chevrolet ', 'Camaro ZL1', '8', 'Jaune', 2, '311 km/h', 'chevrolet14.png', 'O', '2022-04-17', 2200),
(34, 'Volkswagen ', 'Passat ', '4', 'Noir', 5, '160 km/h', 'volkswagen11.png', 'O', '2022-04-17', 200),
(35, 'Volkswagen ', 'Golf 8', '7', 'Bleu canard', 5, '280 km/h', 'volkswagen12.png', 'O', '2022-04-17', 300),
(36, 'Volkswagen ', 'Tharu', '7', 'Bleu roi', 5, '150 km/h', 'volkswagen13.png', 'O', '2022-04-17', 250),
(37, 'Volkswagen ', 'Golf Cabriolet', '8', 'Rouge', 2, '207 km/h', 'volkswagen14.png', 'O', '2022-04-17', 900);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `espacec`
--
ALTER TABLE `espacec`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`idclient`,`idvoiture`),
  ADD KEY `fk2` (`idvoiture`);

--
-- Index pour la table `voiture`
--
ALTER TABLE `voiture`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT pour la table `espacec`
--
ALTER TABLE `espacec`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `voiture`
--
ALTER TABLE `voiture`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `fk1` FOREIGN KEY (`idclient`) REFERENCES `client` (`id`),
  ADD CONSTRAINT `fk2` FOREIGN KEY (`idvoiture`) REFERENCES `voiture` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
