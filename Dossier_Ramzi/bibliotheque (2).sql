-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 11 déc. 2021 à 21:48
-- Version du serveur : 10.4.21-MariaDB
-- Version de PHP : 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `bibliotheque`
--

-- --------------------------------------------------------

--
-- Structure de la table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `Pays` varchar(15) NOT NULL,
  `Skills` varchar(15) NOT NULL,
  `Salary` int(11) NOT NULL,
  `Description` text NOT NULL,
  `Type` varchar(20) NOT NULL,
  `Designation` varchar(20) NOT NULL,
  `Qualification` varchar(20) NOT NULL,
  `Gender` varchar(6) NOT NULL DEFAULT 'Male',
  `Experince` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `post`
--

INSERT INTO `post` (`id`, `Pays`, `Skills`, `Salary`, `Description`, `Type`, `Designation`, `Qualification`, `Gender`, `Experince`) VALUES
(7, 'TUNIS', 'JavaScript', 1000, 'test1', 'Full Time', 'Web Designe', 'Higher Secondary', 'Male', '2Year to 3Year'),
(9, 'tunis', 'PHP', 9999, 'test 2', 'Full Time', 'IT Contractor', 'Bachelor Degree', 'Male', '2Year to 3Year'),
(11, 'France', 'CSS', 1920, 'test 3', 'Full Time', 'Project Manage', 'Higher Secondary', 'Male', '1Year to 2Year'),
(12, 'test', 'JavaScript', 9999, 'test', 'Intership', 'Web Designe', 'Bachelor Degree', 'Male', '2Year to 3Year'),
(14, 'ramzi', 'JavaScript', 5, 'test 4', 'Freelancer', 'Web Designe', 'Bachelor Degree', 'Male', '3Year to 4Year'),
(16, 'rami rami', 'JavaScript', 6, 'dsfklqfhdlskqf', 'Freelancer', 'Web Designe', 'Bachelor Degree', 'Male', '2Year to 3Year'),
(17, 'titititit', 'JavaScript', 2323, 'dfsgdfgdg', 'Full Time', 'Banking', 'Bachelor Degree', 'Male', '2Year to 3Year'),
(18, 'bayo', 'JavaScript', 8888, 'dsqfsdf', 'Full Time', 'Web Designe', 'Higher Secondary', 'Male', '3Year to 4Year');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `auth` tinyint(1) NOT NULL,
  `id` int(11) NOT NULL,
  `pseudo` varchar(20) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `mdp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
