-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : db.3wa.io
-- Généré le : mar. 13 fév. 2024 à 09:35
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
-- Base de données : `eddyfrair_grp_distorsion`
--

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `category_name`) VALUES
(1, 'Business'),
(2, 'Sport'),
(3, 'Développement Web'),
(4, 'Design'),
(5, 'Cinema'),
(6, 'Cinema'),
(7, 'Cinema'),
(8, 'test'),
(9, 'PLOP'),
(10, 'Voyage');

-- --------------------------------------------------------

--
-- Structure de la table `channels`
--

CREATE TABLE `channels` (
  `id` int(11) NOT NULL,
  `channel_name` varchar(255) NOT NULL,
  `id_category` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `channels`
--

INSERT INTO `channels` (`id`, `channel_name`, `id_category`) VALUES
(1, 'JS Vanilla', 3),
(2, 'Amazon FBA', 1),
(3, 'Street Workout', 2),
(4, 'testChannel', 7),
(5, 'Jordanie', 10),
(6, 'test channel 2', 3),
(7, 'Mindset', 1),
(8, 'Manga', 5),
(9, 'Documentaire animalier', 6),
(10, 'Maroc', 10),
(11, 'Photopea', 4);

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `content` mediumtext NOT NULL,
  `created_at` datetime NOT NULL,
  `id_channel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `posts`
--

INSERT INTO `posts` (`id`, `content`, `created_at`, `id_channel`) VALUES
(1, 'Le prix du transport par avion est plus cher mais plus rapide.', '2024-02-01 15:09:44', 2),
(2, 'Le muscle up c\'est un figure de base en Street Workout.', '2024-02-01 15:09:45', 3),
(3, 'Certains dise que VueJS est plus facile à prendre en main ', '2024-02-01 15:09:45', 1),
(4, 'qsdfsqdf', '2024-02-05 10:03:55', 1),
(5, 'tests', '2024-02-05 10:03:59', 1),
(6, 'nvbn', '2024-02-05 10:04:02', 1),
(7, 'fdhfgh', '2024-02-05 10:04:04', 1),
(8, 'kdfgsdfjkgdkg', '2024-02-05 12:26:40', 1),
(9, 'Hello World !!!', '2024-02-05 12:43:21', 1),
(10, 'coucou', '2024-02-05 13:46:24', 1),
(11, 'cfghfhg', '2024-02-05 14:23:53', 1),
(12, 'aaa', '2024-02-05 14:21:07', 1),
(13, 'message test channel 2', '2024-02-05 16:28:53', 1),
(14, 'message test', '2024-02-05 16:30:05', 6),
(15, 'hfghfgh', '2024-02-05 16:41:15', 5),
(16, 'channel 5 message', '2024-02-05 16:42:53', 5),
(17, 'Maroc', '2024-02-07 21:28:11', 1);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(5) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `role`, `created_at`) VALUES
(1, 'Test', 'test@test.fr', '$2y$10$MXdJStM/YX9vJDjgD67l6.gNuJpzKs2/9x6nD4p54SRfNQpjv32jq', 'USER', '2016-01-07 13:53:51'),
(2, 'Admin', 'admin@test.fr', '$2y$10$cy4evTNdUAkjwIb8u6MyreJSpNmzVE1LNShHd0JhLcRkFKgXPxx0W', 'ADMIN', '2024-01-26 18:15:35'),
(3, 'User', 'user@test.fr', '$2y$10$txzUzh73e9SKOjJ496JYTuUsHnoSWOdS02KFEORF40eUoZ0vWWcHG', 'USER', '2024-01-26 23:06:35'),
(4, 'Secure', 'secure@test.fr', '$2y$10$UvgzpYt9eZWhrxoPmUFEauH3Juts9HxZA8VRxwDeo1g2vL2gK3CVa', 'ADMIN', '2024-01-26 02:15:34');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `channels`
--
ALTER TABLE `channels`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_category` (`id_category`);

--
-- Index pour la table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_channel` (`id_channel`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `channels`
--
ALTER TABLE `channels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `channels`
--
ALTER TABLE `channels`
  ADD CONSTRAINT `channels_ibfk_1` FOREIGN KEY (`id_category`) REFERENCES `categories` (`id`);

--
-- Contraintes pour la table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`id_channel`) REFERENCES `channels` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
