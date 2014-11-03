-- phpMyAdmin SQL Dump
-- version 4.1.8
-- http://www.phpmyadmin.net
--
-- Client :  localhost:8889
-- Généré le :  Lun 03 Novembre 2014 à 10:14
-- Version du serveur :  5.5.34
-- Version de PHP :  5.5.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `impose`
--

-- --------------------------------------------------------

--
-- Structure de la table `gif`
--

CREATE TABLE `gif` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) NOT NULL,
  `nom_image` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `auteur` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Contenu de la table `gif`
--

INSERT INTO `gif` (`id`, `titre`, `nom_image`, `date`, `auteur`) VALUES
(7, 'test', '', '2014-05-21', 'fenyouse'),
(8, 'test 2', '', '2014-05-22', 'fenyouse'),
(9, 'test 2', '', '2014-05-22', 'fenyouse'),
(10, 'test 2', '', '2014-05-22', 'fenyouse'),
(11, 'test 2', '', '2014-05-22', 'fenyouse'),
(12, 'test 2', '', '2014-05-22', 'fenyouse'),
(13, 'test 2', '', '2014-05-22', 'fenyouse'),
(14, 'test 2', '', '2014-05-22', 'fenyouse'),
(15, 'test 2', '', '2014-05-22', 'fenyouse'),
(16, 'test 2', '', '2014-05-22', 'fenyouse'),
(17, 'test 2', '', '2014-05-22', 'fenyouse'),
(18, 'test 2', '', '2014-05-22', 'fenyouse'),
(19, 'test 2', '', '2014-05-22', 'fenyouse'),
(20, 'test 2', '', '2014-05-22', 'fenyouse'),
(21, 'test 2', '', '2014-05-22', 'fenyouse'),
(22, 'test 2', '', '2014-05-22', 'fenyouse'),
(23, 'test 2', '', '2014-05-22', 'fenyouse'),
(24, 'test 2', '', '2014-05-22', 'fenyouse'),
(25, 'test 2', '', '2014-05-22', 'fenyouse'),
(26, 'test 2', '', '2014-05-22', 'fenyouse'),
(27, 'test 2', '', '2014-05-22', 'fenyouse'),
(28, 'test 2', '', '2014-05-22', 'fenyouse'),
(29, 'test 2', '', '2014-05-22', 'fenyouse'),
(30, 'test 2', '', '2014-05-22', 'fenyouse');

-- --------------------------------------------------------

--
-- Structure de la table `img`
--

CREATE TABLE `img` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) NOT NULL,
  `nom_image` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `auteur` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Contenu de la table `img`
--

INSERT INTO `img` (`id`, `titre`, `nom_image`, `date`, `auteur`) VALUES
(7, 'test', '', '2014-05-21', 'fenyouse'),
(8, 'test 2', '', '2014-05-22', 'fenyouse'),
(9, 'test 2', '', '2014-05-22', 'fenyouse'),
(10, 'test 2', '', '2014-05-22', 'fenyouse'),
(11, 'test 2', '', '2014-05-22', 'fenyouse'),
(12, 'test 2', '', '2014-05-22', 'fenyouse'),
(13, 'test 2', '', '2014-05-22', 'fenyouse'),
(14, 'test 2', '', '2014-05-22', 'fenyouse'),
(15, 'test 2', '', '2014-05-22', 'fenyouse'),
(16, 'test 2', '', '2014-05-22', 'fenyouse'),
(17, 'test 2', '', '2014-05-22', 'fenyouse'),
(18, 'test 2', '', '2014-05-22', 'fenyouse'),
(19, 'test 2', '', '2014-05-22', 'fenyouse'),
(20, 'test 2', '', '2014-05-22', 'fenyouse'),
(21, 'test 2', '', '2014-05-22', 'fenyouse'),
(22, 'test 2', '', '2014-05-22', 'fenyouse'),
(23, 'test 2', '', '2014-05-22', 'fenyouse'),
(24, 'test 2', '', '2014-05-22', 'fenyouse'),
(25, 'test 2', '', '2014-05-22', 'fenyouse'),
(26, 'test 2', '', '2014-05-22', 'fenyouse'),
(27, 'test 2', '', '2014-05-22', 'fenyouse'),
(28, 'test 2', '', '2014-05-22', 'fenyouse'),
(29, 'test 2', '', '2014-05-22', 'fenyouse'),
(30, 'test 2', '', '2014-05-22', 'fenyouse');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Prenom` varchar(255) NOT NULL,
  `Nom` varchar(255) NOT NULL,
  `Pseudo` varchar(255) NOT NULL,
  `MotDePasse` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Contenu de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`ID`, `Prenom`, `Nom`, `Pseudo`, `MotDePasse`, `Email`) VALUES
(13, 'laurent', 'lescene', 'fenyouse', 'necrototo', 'laurent.lescene@y-nov.com'),
(16, 'truc', 'muche', 'necrototo', 'fenyouse', 'laurent.lescene@y-nov.com'),
(17, 'truc', 'truc', 'truc', 'truc', 'truc@truc.com');

-- --------------------------------------------------------

--
-- Structure de la table `video`
--

CREATE TABLE `video` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `auteur` varchar(255) NOT NULL,
  `lien` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Contenu de la table `video`
--

INSERT INTO `video` (`id`, `titre`, `date`, `auteur`, `lien`) VALUES
(1, 'test', '2014-05-21', 'fenyouse', 'www.youtube.com/watch?v=hFwrArBEC9o'),
(2, 'test 2', '2014-05-22', 'fenyouse', 'www.youtube.com/embed/_etwz7NkemE'),
(5, 'chimpology', '2014-05-22', 'fenyouse', 'www.youtube.com/watch?v=CBBvXth-O_g'),
(7, 'Les mémoires - Palmashow', '2014-05-21', 'fenyouse', 'www.youtube.com/watch?v=1rX8z1uvOW8'),
(8, 'Quand il fait garder son gosse - Palmashow', '2014-05-22', 'fenyouse', 'www.youtube.com/watch?v=HY-8zqm099s'),
(9, 'chimpology', '2014-05-22', 'fenyouse', 'www.youtube.com/watch?v=CBBvXth-O_g'),
(10, 'test', '2014-05-21', 'fenyouse', 'www.youtube.com/watch?v=U2wtIIT9hMU'),
(11, 'test 2', '2014-05-22', 'fenyouse', 'www.youtube.com/embed/_etwz7NkemE'),
(12, 'chimpology', '2014-05-22', 'fenyouse', 'www.youtube.com/watch?v=CBBvXth-O_g'),
(13, 'test', '2014-05-21', 'fenyouse', 'www.youtube.com/watch?v=U2wtIIT9hMU'),
(14, 'test 2', '2014-05-22', 'fenyouse', 'www.youtube.com/embed/_etwz7NkemE'),
(15, 'chimpology', '2014-05-22', 'fenyouse', 'www.youtube.com/watch?v=CBBvXth-O_g'),
(16, 'test', '2014-05-21', 'fenyouse', 'www.youtube.com/watch?v=U2wtIIT9hMU'),
(17, 'test 2', '2014-05-22', 'fenyouse', 'www.youtube.com/embed/_etwz7NkemE'),
(18, 'chimpology', '2014-05-22', 'fenyouse', 'www.youtube.com/watch?v=CBBvXth-O_g'),
(19, 'cows & cows & cows', '2014-05-22', 'fenyouse', 'www.youtube.com/watch?v=FavUpD_IjVY&list=PL81280E14A07C995D');
