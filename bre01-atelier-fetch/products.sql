-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : db.3wa.io
-- Généré le : mer. 20 mars 2024 à 08:50
-- Version du serveur :  5.7.33-0ubuntu0.18.04.1-log
-- Version de PHP : 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `maridoucet_bre01_atelier-fetch`
--

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(1023) NOT NULL,
  `picture_url` varchar(255) NOT NULL,
  `picture_alt` varchar(511) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `picture_url`, `picture_alt`, `price`) VALUES
(1, 'Éclat d\'Océan', 'Découvrez notre ligne cosmétique bleue, inspirée par l\'océan. Des ombres à paupières aux vernis à ongles, chaque produit évoque la fraîcheur marine pour une beauté éclatante.', 'https://maridoucet.sites.3wa.io/assets/cosmetics-blue.webp', 'A luxurious looking skin care line in blue and gold tones', 18),
(2, 'Sérum Terre de Bronze', 'Plongez dans notre sérum pour peau brune, conçu pour sublimer votre teint. Infusé d\'ingrédients naturels, notre formule hydratante et éclaircissante apporte éclat et uniformité à votre peau, révélant sa beauté naturelle.', 'https://maridoucet.sites.3wa.io/assets/cosmetics-brown.webp', 'A luxurious looking skin care line in dark brown tones', 22),
(3, 'Crème Éclat du Soleil Pourpre', 'Découvrez notre crème de soin pour une peau lumineuse et hydratée. Infusée de nuances violettes et oranges, cette formule riche en antioxydants nourrit et revitalise votre peau pour une éclatante vitalité.', 'https://maridoucet.sites.3wa.io/assets/cosmetics-purple.webp', 'A luxurious looking skin care line in purple and orange tones', 17),
(4, 'Eau Marine Revitalisante', 'Ressentez la fraîcheur de notre tonique bleu. Infusé de minéraux marins et d\'extraits botaniques, ce tonique rafraîchit et hydrate, laissant votre peau éclatante et revitalisée.', 'https://maridoucet.sites.3wa.io/assets/cosmetics-blue.webp', 'A luxurious looking skin care line in blue and gold tones', 14),
(5, 'Masque Capillaire Terre d\'Éclat', 'Transformez vos cheveux avec notre masque brun nourrissant. Enrichi en huiles naturelles et en protéines végétales, il répare et fortifie, laissant vos cheveux doux, brillants et sublimes.', 'https://maridoucet.sites.3wa.io/assets/cosmetics-brown.webp', 'A luxurious looking skin care line in dark brown tones', 29),
(6, 'Crème de Peau Précieuse', 'Plongez dans le luxe avec notre crème pour la peau violette. Enrichie en antioxydants et en extraits botaniques, cette crème nourrit, hydrate et régénère, révélant une peau radieuse et éclatante de santé.', 'https://maridoucet.sites.3wa.io/assets/cosmetics-purple.webp', 'A luxurious looking skin care line in purple and orange tones', 16);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
