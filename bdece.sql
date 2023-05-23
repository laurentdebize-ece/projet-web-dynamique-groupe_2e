-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 23, 2023 at 08:26 PM
-- Server version: 5.7.24
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bdece`
--

-- --------------------------------------------------------

--
-- Table structure for table `classe`
--

CREATE TABLE `classe` (
  `idClasse` int(100) NOT NULL,
  `nomClasse` varchar(100) NOT NULL,
  `idPromo` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `classe`
--

INSERT INTO `classe` (`idClasse`, `nomClasse`, `idPromo`) VALUES
(1, 'classe1\r\n', 1),
(2, 'classe2', 1);

-- --------------------------------------------------------

--
-- Table structure for table `competences`
--

CREATE TABLE `competences` (
  `idCompetence` int(100) NOT NULL,
  `nomCompetence` varchar(25) NOT NULL,
  `idMatiere` int(10) NOT NULL,
  `idEval` int(11) NOT NULL,
  `idUtilisateur` int(200) NOT NULL,
  `statutProf` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `competences`
--

INSERT INTO `competences` (`idCompetence`, `nomCompetence`, `idMatiere`, `idEval`, `idUtilisateur`, `statutProf`) VALUES
(6, 'parler', 8, 0, 3, NULL),
(7, 'parler', 8, 0, 1, NULL),
(8, 'parler', 8, 0, 6, NULL),
(9, 'parler', 8, 0, 6, NULL),
(10, 'verbes', 8, 0, 3, NULL),
(11, 'verbes', 8, 0, 1, NULL),
(12, 'verbes', 8, 0, 6, NULL),
(13, 'verbes', 8, 0, 6, NULL),
(14, 'noms', 8, 0, 3, NULL),
(15, 'noms', 8, 0, 1, NULL),
(16, 'noms', 8, 0, 6, NULL),
(17, 'noms', 8, 0, 6, NULL),
(18, 'pronoms', 8, 0, 3, NULL),
(19, 'pronoms', 8, 0, 1, NULL),
(20, 'pronoms', 8, 0, 6, NULL),
(21, 'pronoms', 8, 0, 6, NULL),
(22, 'compréhension écrite', 8, 0, 3, NULL),
(23, 'compréhension écrite', 8, 0, 1, NULL),
(24, 'compréhension écrite', 8, 0, 6, NULL),
(25, 'compréhension écrite', 8, 0, 6, NULL),
(26, 'compréhension orale', 8, 0, 3, NULL),
(27, 'compréhension orale', 8, 0, 1, NULL),
(28, 'compréhension orale', 8, 0, 6, NULL),
(29, 'compréhension orale', 8, 0, 6, NULL),
(30, 'additions', 1, 0, 9, NULL),
(31, 'additions', 1, 0, 1, NULL),
(32, 'additions', 1, 0, 6, NULL),
(33, 'additions', 1, 0, 6, NULL),
(34, 'additions', 1, 0, 9, NULL),
(35, 'additions', 1, 0, 7, NULL),
(36, 'additions', 1, 0, 8, NULL),
(37, 'additions', 1, 0, 8, NULL),
(38, 'multiplications', 1, 0, 9, NULL),
(39, 'multiplications', 1, 0, 1, NULL),
(40, 'multiplications', 1, 0, 6, NULL),
(41, 'multiplications', 1, 0, 6, NULL),
(42, 'multiplications', 1, 0, 9, NULL),
(43, 'multiplications', 1, 0, 7, NULL),
(44, 'multiplications', 1, 0, 8, NULL),
(45, 'multiplications', 1, 0, 8, NULL),
(46, 'soustractions', 1, 0, 9, NULL),
(47, 'soustractions', 1, 0, 1, NULL),
(48, 'soustractions', 1, 0, 6, NULL),
(49, 'soustractions', 1, 0, 6, NULL),
(50, 'soustractions', 1, 0, 9, NULL),
(51, 'soustractions', 1, 0, 7, NULL),
(52, 'soustractions', 1, 0, 8, NULL),
(53, 'soustractions', 1, 0, 8, NULL),
(54, 'divisions', 1, 0, 9, NULL),
(55, 'divisions', 1, 0, 1, NULL),
(56, 'divisions', 1, 0, 6, NULL),
(57, 'divisions', 1, 0, 6, NULL),
(58, 'divisions', 1, 0, 9, NULL),
(59, 'divisions', 1, 0, 7, NULL),
(60, 'divisions', 1, 0, 8, NULL),
(61, 'divisions', 1, 0, 8, NULL),
(62, 'DES', 1, 0, 9, NULL),
(63, 'DES', 1, 0, 1, NULL),
(64, 'DES', 1, 0, 6, NULL),
(65, 'DES', 1, 0, 6, NULL),
(66, 'DES', 1, 0, 9, NULL),
(67, 'DES', 1, 0, 7, NULL),
(68, 'DES', 1, 0, 8, NULL),
(69, 'DES', 1, 0, 8, NULL),
(70, 'racine carrée', 1, 0, 9, NULL),
(71, 'racine carrée', 1, 0, 1, NULL),
(72, 'racine carrée', 1, 0, 6, NULL),
(73, 'racine carrée', 1, 0, 6, NULL),
(74, 'racine carrée', 1, 0, 9, NULL),
(75, 'racine carrée', 1, 0, 7, NULL),
(76, 'racine carrée', 1, 0, 8, NULL),
(77, 'racine carrée', 1, 0, 8, NULL),
(78, 'parler', 8, 0, 3, NULL),
(79, 'parler', 8, 0, 7, NULL),
(80, 'parler', 8, 0, 8, NULL),
(81, 'parler', 8, 0, 8, NULL),
(82, 'compréhension orale', 8, 0, 3, NULL),
(83, 'compréhension orale', 8, 0, 7, NULL),
(84, 'compréhension orale', 8, 0, 8, NULL),
(85, 'compréhension orale', 8, 0, 8, NULL),
(86, 'compréhension écrite', 8, 0, 3, NULL),
(87, 'compréhension écrite', 8, 0, 7, NULL),
(88, 'compréhension écrite', 8, 0, 8, NULL),
(89, 'compréhension écrite', 8, 0, 8, NULL),
(90, 'pronoms', 8, 0, 3, NULL),
(91, 'pronoms', 8, 0, 7, NULL),
(92, 'pronoms', 8, 0, 8, NULL),
(93, 'pronoms', 8, 0, 8, NULL),
(94, 'noms', 8, 0, 3, NULL),
(95, 'noms', 8, 0, 7, NULL),
(96, 'noms', 8, 0, 8, NULL),
(97, 'noms', 8, 0, 8, NULL),
(98, 'verbes', 8, 0, 3, NULL),
(99, 'verbes', 8, 0, 7, NULL),
(100, 'verbes', 8, 0, 8, NULL),
(101, 'verbes', 8, 0, 8, NULL),
(102, 'BDD', 5, 0, 10, NULL),
(103, 'BDD', 5, 0, 1, NULL),
(104, 'BDD', 5, 0, 6, NULL),
(105, 'BDD', 5, 0, 6, NULL),
(106, 'BDD', 5, 0, 10, NULL),
(107, 'BDD', 5, 0, 7, NULL),
(108, 'BDD', 5, 0, 8, NULL),
(109, 'BDD', 5, 0, 8, NULL),
(110, 'HTML', 5, 0, 10, NULL),
(111, 'HTML', 5, 0, 1, NULL),
(112, 'HTML', 5, 0, 6, NULL),
(113, 'HTML', 5, 0, 6, NULL),
(114, 'HTML', 5, 0, 10, NULL),
(115, 'HTML', 5, 0, 7, NULL),
(116, 'HTML', 5, 0, 8, NULL),
(117, 'HTML', 5, 0, 8, NULL),
(118, 'CSS', 5, 0, 10, NULL),
(119, 'CSS', 5, 0, 1, NULL),
(120, 'CSS', 5, 0, 6, NULL),
(121, 'CSS', 5, 0, 6, NULL),
(122, 'CSS', 5, 0, 10, NULL),
(123, 'CSS', 5, 0, 7, NULL),
(124, 'CSS', 5, 0, 8, NULL),
(125, 'CSS', 5, 0, 8, NULL),
(126, 'JS', 5, 0, 10, NULL),
(127, 'JS', 5, 0, 1, NULL),
(128, 'JS', 5, 0, 6, NULL),
(129, 'JS', 5, 0, 6, NULL),
(130, 'JS', 5, 0, 10, NULL),
(131, 'JS', 5, 0, 7, NULL),
(132, 'JS', 5, 0, 8, NULL),
(133, 'JS', 5, 0, 8, NULL),
(134, 'Bootstrap', 5, 0, 10, NULL),
(135, 'Bootstrap', 5, 0, 1, NULL),
(136, 'Bootstrap', 5, 0, 6, NULL),
(137, 'Bootstrap', 5, 0, 6, NULL),
(138, 'Bootstrap', 5, 0, 10, NULL),
(139, 'Bootstrap', 5, 0, 7, NULL),
(140, 'Bootstrap', 5, 0, 8, NULL),
(141, 'Bootstrap', 5, 0, 8, NULL),
(142, 'Langage C', 5, 0, 10, NULL),
(143, 'Langage C', 5, 0, 1, NULL),
(144, 'Langage C', 5, 0, 6, NULL),
(145, 'Langage C', 5, 0, 6, NULL),
(146, 'Langage C', 5, 0, 10, NULL),
(147, 'Langage C', 5, 0, 7, NULL),
(148, 'Langage C', 5, 0, 8, NULL),
(149, 'Langage C', 5, 0, 8, NULL),
(150, 'fonction de transfert', 4, 0, 11, NULL),
(151, 'fonction de transfert', 4, 0, 1, NULL),
(152, 'fonction de transfert', 4, 0, 6, NULL),
(153, 'fonction de transfert', 4, 0, 6, NULL),
(154, 'fonction de transfert', 4, 0, 11, NULL),
(155, 'fonction de transfert', 4, 0, 7, NULL),
(156, 'fonction de transfert', 4, 0, 8, NULL),
(157, 'fonction de transfert', 4, 0, 8, NULL),
(158, 'diagramme de bode', 4, 0, 11, NULL),
(159, 'diagramme de bode', 4, 0, 1, NULL),
(160, 'diagramme de bode', 4, 0, 6, NULL),
(161, 'diagramme de bode', 4, 0, 6, NULL),
(162, 'diagramme de bode', 4, 0, 11, NULL),
(163, 'diagramme de bode', 4, 0, 7, NULL),
(164, 'diagramme de bode', 4, 0, 8, NULL),
(165, 'diagramme de bode', 4, 0, 8, NULL),
(166, 'schémas blocs', 4, 0, 11, NULL),
(167, 'schémas blocs', 4, 0, 1, NULL),
(168, 'schémas blocs', 4, 0, 6, NULL),
(169, 'schémas blocs', 4, 0, 6, NULL),
(170, 'schémas blocs', 4, 0, 11, NULL),
(171, 'schémas blocs', 4, 0, 7, NULL),
(172, 'schémas blocs', 4, 0, 8, NULL),
(173, 'schémas blocs', 4, 0, 8, NULL),
(174, 'PID', 4, 0, 11, NULL),
(175, 'PID', 4, 0, 1, NULL),
(176, 'PID', 4, 0, 6, NULL),
(177, 'PID', 4, 0, 6, NULL),
(178, 'PID', 4, 0, 11, NULL),
(179, 'PID', 4, 0, 7, NULL),
(180, 'PID', 4, 0, 8, NULL),
(181, 'PID', 4, 0, 8, NULL),
(182, 'OEM', 2, 0, 12, NULL),
(183, 'OEM', 2, 0, 1, NULL),
(184, 'OEM', 2, 0, 6, NULL),
(185, 'OEM', 2, 0, 6, NULL),
(186, 'OEM', 2, 0, 12, NULL),
(187, 'OEM', 2, 0, 7, NULL),
(188, 'OEM', 2, 0, 8, NULL),
(189, 'OEM', 2, 0, 8, NULL),
(190, 'PFD', 2, 0, 12, NULL),
(191, 'PFD', 2, 0, 1, NULL),
(192, 'PFD', 2, 0, 6, NULL),
(193, 'PFD', 2, 0, 6, NULL),
(194, 'PFD', 2, 0, 12, NULL),
(195, 'PFD', 2, 0, 7, NULL),
(196, 'PFD', 2, 0, 8, NULL),
(197, 'PFD', 2, 0, 8, NULL),
(198, 'Maxwell Gauss', 2, 0, 12, NULL),
(199, 'Maxwell Gauss', 2, 0, 1, NULL),
(200, 'Maxwell Gauss', 2, 0, 6, NULL),
(201, 'Maxwell Gauss', 2, 0, 6, NULL),
(202, 'Maxwell Gauss', 2, 0, 12, NULL),
(203, 'Maxwell Gauss', 2, 0, 7, NULL),
(204, 'Maxwell Gauss', 2, 0, 8, NULL),
(205, 'Maxwell Gauss', 2, 0, 8, NULL),
(206, 'Maxwell Ampère', 2, 0, 12, NULL),
(207, 'Maxwell Ampère', 2, 0, 1, NULL),
(208, 'Maxwell Ampère', 2, 0, 6, NULL),
(209, 'Maxwell Ampère', 2, 0, 6, NULL),
(210, 'Maxwell Ampère', 2, 0, 12, NULL),
(211, 'Maxwell Ampère', 2, 0, 7, NULL),
(212, 'Maxwell Ampère', 2, 0, 8, NULL),
(213, 'Maxwell Ampère', 2, 0, 8, NULL),
(214, 'Maxwell Flux', 2, 0, 12, NULL),
(215, 'Maxwell Flux', 2, 0, 1, NULL),
(216, 'Maxwell Flux', 2, 0, 6, NULL),
(217, 'Maxwell Flux', 2, 0, 6, NULL),
(218, 'Maxwell Flux', 2, 0, 12, NULL),
(219, 'Maxwell Flux', 2, 0, 7, NULL),
(220, 'Maxwell Flux', 2, 0, 8, NULL),
(221, 'Maxwell Flux', 2, 0, 8, NULL),
(222, 'Maxwell Faraday', 2, 0, 12, NULL),
(223, 'Maxwell Faraday', 2, 0, 1, NULL),
(224, 'Maxwell Faraday', 2, 0, 6, NULL),
(225, 'Maxwell Faraday', 2, 0, 6, NULL),
(226, 'Maxwell Faraday', 2, 0, 12, NULL),
(227, 'Maxwell Faraday', 2, 0, 7, NULL),
(228, 'Maxwell Faraday', 2, 0, 8, NULL),
(229, 'Maxwell Faraday', 2, 0, 8, NULL),
(230, 'business modèle', 9, 0, 1, NULL),
(231, 'faillite', 9, 0, 1, NULL),
(232, 'business plan', 9, 0, 1, NULL),
(233, 'Business en entreprise', 9, 0, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ecole`
--

CREATE TABLE `ecole` (
  `idEcole` int(10) NOT NULL,
  `NomEcole` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ecole`
--

INSERT INTO `ecole` (`idEcole`, `NomEcole`) VALUES
(1, 'ECE');

-- --------------------------------------------------------

--
-- Table structure for table `enseignement`
--

CREATE TABLE `enseignement` (
  `idClasse` int(100) NOT NULL,
  `idProf` int(10) NOT NULL,
  `idMatiere` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `enseignement`
--

INSERT INTO `enseignement` (`idClasse`, `idProf`, `idMatiere`) VALUES
(1, 1, 8),
(2, 1, 8),
(1, 3, 1),
(2, 3, 1),
(1, 4, 5),
(2, 4, 5),
(1, 5, 4),
(2, 5, 4),
(1, 6, 2),
(2, 6, 2),
(1, 7, 3),
(2, 7, 3),
(1, 8, 7),
(2, 8, 7),
(1, 9, 6),
(2, 9, 6);

-- --------------------------------------------------------

--
-- Table structure for table `etudiants`
--

CREATE TABLE `etudiants` (
  `idEtudiant` int(200) NOT NULL,
  `idUtilisateur` int(200) NOT NULL,
  `idClasse` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `etudiants`
--

INSERT INTO `etudiants` (`idEtudiant`, `idUtilisateur`, `idClasse`) VALUES
(1, 1, 1),
(2, 6, 1),
(3, 7, 2),
(4, 8, 2);

-- --------------------------------------------------------

--
-- Table structure for table `matieres`
--

CREATE TABLE `matieres` (
  `idMatiere` int(10) NOT NULL,
  `nom` varchar(25) NOT NULL,
  `NbHeures` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `matieres`
--

INSERT INTO `matieres` (`idMatiere`, `nom`, `NbHeures`) VALUES
(1, 'Maths', 48),
(2, 'Physique', 52),
(3, 'anglais', 16),
(4, 'elec', 50),
(5, 'informatique', 54),
(6, 'humanité', 22),
(7, 'espagnol', 12),
(8, 'Allemand', 12),
(9, 'Business', 24);

-- --------------------------------------------------------

--
-- Table structure for table `profs`
--

CREATE TABLE `profs` (
  `idProf` int(100) NOT NULL,
  `idUtilisateur` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `profs`
--

INSERT INTO `profs` (`idProf`, `idUtilisateur`) VALUES
(1, 3),
(2, 5),
(3, 9),
(4, 10),
(5, 11),
(6, 12),
(7, 13),
(8, 14),
(9, 15);

-- --------------------------------------------------------

--
-- Table structure for table `promo`
--

CREATE TABLE `promo` (
  `idPromo` int(5) NOT NULL,
  `nomPromo` varchar(25) NOT NULL,
  `idEcole` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `promo`
--

INSERT INTO `promo` (`idPromo`, `nomPromo`, `idEcole`) VALUES
(1, 'promo1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `idUtilisateur` int(200) NOT NULL,
  `prenom` varchar(25) NOT NULL,
  `nom` varchar(25) NOT NULL,
  `mdp` varchar(25) NOT NULL,
  `rang` int(5) NOT NULL,
  `mail` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `utilisateurs`
--

INSERT INTO `utilisateurs` (`idUtilisateur`, `prenom`, `nom`, `mdp`, `rang`, `mail`) VALUES
(1, 'virgile', 'fievet', '88b', 3, 'virgile.fievet@hehe.com'),
(2, 'vir', 'fie', '', 1, 'utilisateur2@hehe.com'),
(3, 'bibi', 'bibi', '1234', 2, 'utilisateur3@hehe.com'),
(4, 'kassim', 'AMADOU', '1234', 1, 'utilisateur4@hehe.com'),
(5, 'BENJAMIN', 'AUER', '1234', 2, 'utilisateur5@hehe.com'),
(6, 'Paul', 'CROUZAT', '1234', 3, 'utilisateur6@hehe.com'),
(7, 'Roger', 'ok', '1234', 3, 'utilisateur7@hehe.com'),
(8, 'oleg', 'viny', '1234', 3, 'utilisateur8@hehe.com'),
(9, 'Celine', 'BIANCHI', '1234', 2, 'utilisateur9@hehe.com'),
(10, 'Laurent', 'DEBIZE', '', 2, 'utilisateur10@hehe.com'),
(11, 'Christophe', 'SAVARD', '1234', 2, 'utilisateur11@hehe.com'),
(12, 'Samira', 'DEDECKER', '1234', 2, 'utilisateur12@hehe.com'),
(13, 'Sara', 'SUTTON', '1234', 2, 'utilisateur13@hehe.com'),
(14, 'Eva', 'CALDERONE', '1234', 2, 'utilisateur14@hehe.com'),
(15, 'Frank', 'LAFONTAINE', '1234', 2, 'utilisateur15@hehe.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `classe`
--
ALTER TABLE `classe`
  ADD PRIMARY KEY (`idClasse`),
  ADD KEY `fk_idPromo` (`idPromo`);

--
-- Indexes for table `competences`
--
ALTER TABLE `competences`
  ADD PRIMARY KEY (`idCompetence`),
  ADD KEY `fok1` (`idMatiere`),
  ADD KEY `idU` (`idUtilisateur`);

--
-- Indexes for table `ecole`
--
ALTER TABLE `ecole`
  ADD PRIMARY KEY (`idEcole`);

--
-- Indexes for table `enseignement`
--
ALTER TABLE `enseignement`
  ADD KEY `fk1` (`idClasse`),
  ADD KEY `fk2` (`idMatiere`),
  ADD KEY `fk3` (`idProf`);

--
-- Indexes for table `etudiants`
--
ALTER TABLE `etudiants`
  ADD PRIMARY KEY (`idEtudiant`),
  ADD KEY `fk1_idClasse` (`idClasse`),
  ADD KEY `fk2_idUtilisateur` (`idUtilisateur`);

--
-- Indexes for table `matieres`
--
ALTER TABLE `matieres`
  ADD PRIMARY KEY (`idMatiere`);

--
-- Indexes for table `profs`
--
ALTER TABLE `profs`
  ADD PRIMARY KEY (`idProf`),
  ADD KEY `fk1_idUtilisateur` (`idUtilisateur`);

--
-- Indexes for table `promo`
--
ALTER TABLE `promo`
  ADD PRIMARY KEY (`idPromo`),
  ADD KEY `fk1_idEcole` (`idEcole`);

--
-- Indexes for table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`idUtilisateur`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `classe`
--
ALTER TABLE `classe`
  MODIFY `idClasse` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `competences`
--
ALTER TABLE `competences`
  MODIFY `idCompetence` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=234;

--
-- AUTO_INCREMENT for table `ecole`
--
ALTER TABLE `ecole`
  MODIFY `idEcole` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `etudiants`
--
ALTER TABLE `etudiants`
  MODIFY `idEtudiant` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `matieres`
--
ALTER TABLE `matieres`
  MODIFY `idMatiere` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `profs`
--
ALTER TABLE `profs`
  MODIFY `idProf` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `promo`
--
ALTER TABLE `promo`
  MODIFY `idPromo` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `idUtilisateur` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `classe`
--
ALTER TABLE `classe`
  ADD CONSTRAINT `fk_idPromo` FOREIGN KEY (`idPromo`) REFERENCES `promo` (`idPromo`);

--
-- Constraints for table `competences`
--
ALTER TABLE `competences`
  ADD CONSTRAINT `idM` FOREIGN KEY (`idMatiere`) REFERENCES `matieres` (`idMatiere`),
  ADD CONSTRAINT `idU` FOREIGN KEY (`idUtilisateur`) REFERENCES `utilisateurs` (`idUtilisateur`);

--
-- Constraints for table `enseignement`
--
ALTER TABLE `enseignement`
  ADD CONSTRAINT `fk1` FOREIGN KEY (`idClasse`) REFERENCES `classe` (`idClasse`),
  ADD CONSTRAINT `fk2` FOREIGN KEY (`idMatiere`) REFERENCES `matieres` (`idMatiere`),
  ADD CONSTRAINT `fk3` FOREIGN KEY (`idProf`) REFERENCES `profs` (`idProf`);

--
-- Constraints for table `etudiants`
--
ALTER TABLE `etudiants`
  ADD CONSTRAINT `fk1_idClasse` FOREIGN KEY (`idClasse`) REFERENCES `classe` (`idClasse`),
  ADD CONSTRAINT `fk2_idUtilisateur` FOREIGN KEY (`idUtilisateur`) REFERENCES `utilisateurs` (`idUtilisateur`);

--
-- Constraints for table `profs`
--
ALTER TABLE `profs`
  ADD CONSTRAINT `fk1_idUtilisateur` FOREIGN KEY (`idUtilisateur`) REFERENCES `utilisateurs` (`idUtilisateur`);

--
-- Constraints for table `promo`
--
ALTER TABLE `promo`
  ADD CONSTRAINT `fk1_idEcole` FOREIGN KEY (`idEcole`) REFERENCES `ecole` (`idEcole`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;