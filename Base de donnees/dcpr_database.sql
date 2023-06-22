-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2023 at 03:14 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dcpr`
--
CREATE DATABASE IF NOT EXISTS `dcpr` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `dcpr`;

-- --------------------------------------------------------

--
-- Table structure for table `conducteur`
--

CREATE TABLE `conducteur` (
  `No_Dossier` varchar(50) NOT NULL,
  `Nom` varchar(50) NOT NULL,
  `Prenom` varchar(50) NOT NULL,
  `Sexe` varchar(50) NOT NULL,
  `NIF` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `conducteur`
--

INSERT INTO `conducteur` (`No_Dossier`, `Nom`, `Prenom`, `Sexe`, `NIF`) VALUES
('NF-1234', 'Marc', 'Tommy', 'Masculin', '987654321');

-- --------------------------------------------------------

--
-- Table structure for table `contravention`
--

CREATE TABLE `contravention` (
  `No_Fiche` int(11) NOT NULL,
  `No_Dossier` varchar(50) NOT NULL,
  `Plaque_vehicule` varchar(50) NOT NULL,
  `Couleur` varchar(50) NOT NULL,
  `Marque` varchar(50) NOT NULL,
  `Code_agent` varchar(50) NOT NULL,
  `Adresse` varchar(100) NOT NULL,
  `Article_violation` varchar(50) NOT NULL,
  `Montant_a_payer` float NOT NULL,
  `Date_contravention` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contravention`
--

INSERT INTO `contravention` (`No_Fiche`, `No_Dossier`, `Plaque_vehicule`, `Couleur`, `Marque`, `Code_agent`, `Adresse`, `Article_violation`, `Montant_a_payer`, `Date_contravention`) VALUES
(1, 'NF-1234', 'AA-12090', 'Noir', 'Toyota', 'AG-1253', 'Delmas 33', 'Article 1', 1000, '2020-12-12'),
(2, 'NF-1234', 'AA-12090', 'Noir', 'Toyota', 'AG-1253', 'Delmas 33', 'Article 1', 1000, '2020-12-12'),
(3, 'NF-1234', 'AA-12090', 'Noir', 'Toyota', 'AG-1253', 'Delmas 33', 'Article 1', 1000, '2020-12-12'),
(3, 'NF-1234', 'AA-12090', 'Noir', 'Toyota', 'AG-1253', 'Delmas 33', 'Article 1', 1000, '2020-12-12'),
(3, 'NF-1234', 'AA-12090', 'Noir', 'Toyota', 'AG-1253', 'Delmas 33', 'Article 1', 1000, '2020-12-12'),
(3, 'NF-1234', 'AA-12090', 'Noir', 'Toyota', 'AG-1253', 'Delmas 33', 'Article 1', 1000, '2020-12-12'),
(3, 'NF-1234', 'AA-12090', 'Noir', 'Toyota', 'AG-1253', 'Delmas 33', 'Article 1', 1000, '2020-12-12'),
(3, 'NF-1234', 'AA-12090', 'Noir', 'Toyota', 'AG-1253', 'Delmas 33', 'Article 1', 1000, '2020-12-12'),
(3, 'NF-1234', 'AA-12090', 'Noir', 'Toyota', 'AG-1253', 'Delmas 33', 'Article 1', 1000, '2020-12-12'),
(3, 'NF-1234', 'AA-12090', 'Noir', 'Toyota', 'AG-1253', 'Delmas 33', 'Article 1', 1000, '2020-12-12'),
(3, 'NF-1234', 'AA-12090', 'Noir', 'Toyota', 'AG-1253', 'Delmas 33', 'Article 1', 1000, '2020-12-12'),
(3, 'NF-1234', 'AA-12090', 'Noir', 'Toyota', 'AG-1253', 'Delmas 33', 'Article 1', 1000, '2020-12-12'),
(3, 'NF-1234', 'AA-12090', 'Noir', 'Toyota', 'AG-1253', 'Delmas 33', 'Article 1', 1000, '2020-12-12');

-- --------------------------------------------------------

--
-- Table structure for table `dcpr`
--

CREATE TABLE `dcpr` (
  `Code_agent` varchar(50) NOT NULL,
  `Affectation` varchar(50) NOT NULL,
  `Nom` varchar(50) NOT NULL,
  `Prenom` varchar(50) NOT NULL,
  `Sexe` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dgi`
--

CREATE TABLE `dgi` (
  `No_Fiche` int(11) NOT NULL,
  `Montant` float NOT NULL,
  `Remarque` varchar(50) NOT NULL,
  `Date_paiement` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `username` varchar(50) NOT NULL,
  `Nom` varchar(50) NOT NULL,
  `Prenom` varchar(50) NOT NULL,
  `sexe` varchar(10) NOT NULL,
  `DateDeNaissance` date NOT NULL,
  `DateEnrollement` date NOT NULL,
  `Departement` varchar(50) NOT NULL,
  `Telephone` varchar(20) NOT NULL,
  `Adresse` varchar(100) NOT NULL,
  `MotDePasse` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `utilisateur`
--

INSERT INTO `utilisateur` (`username`, `Nom`, `Prenom`, `sexe`, `DateDeNaissance`, `DateEnrollement`, `Departement`, `Telephone`, `Adresse`, `MotDePasse`) VALUES
('Alexis_509', 'Alexis', 'Jean', 'M', '1999-12-12', '2020-12-12', 'Informatique', '509-1234-5678', 'Delmas 33', '123456789'),
('ed_01st', 'Pavelus', 'Ed Patrice Wakfield', 'Masculin', '2023-05-31', '2023-07-05', 'Ouest', '+50932060070', 'ed_01st', '12345'),
('jeanpierre', 'Jean', 'Pierre', 'M', '2000-01-01', '2020-01-01', 'Ouest', '12345678', 'Delmas 33', '12345678'),
('Marc', 'PaulMarc', 'Paul', 'M', '2000-01-01', '2020-01-01', 'Ouest', '12345678', 'Delmas 33', '12345678'),
('mrs_strawberry17', 'Jean Pierre', 'Alissa', 'Feminin', '2002-02-04', '2056-12-20', 'Ouest', '+509 4078-7885', 'Petion Ville angle rue Faubert et Moise #14', 'Bblolo17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `conducteur`
--
ALTER TABLE `conducteur`
  ADD PRIMARY KEY (`No_Dossier`);

--
-- Indexes for table `contravention`
--
ALTER TABLE `contravention`
  ADD KEY `No_Dossier` (`No_Dossier`);

--
-- Indexes for table `dgi`
--
ALTER TABLE `dgi`
  ADD PRIMARY KEY (`No_Fiche`);

--
-- Indexes for table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dgi`
--
ALTER TABLE `dgi`
  MODIFY `No_Fiche` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `contravention`
--
ALTER TABLE `contravention`
  ADD CONSTRAINT `contravention_ibfk_1` FOREIGN KEY (`No_Dossier`) REFERENCES `conducteur` (`No_Dossier`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
