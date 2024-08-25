-- Adminer 4.8.1 MySQL 8.3.0 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `Predmet`;
CREATE TABLE `Predmet` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `Nazev` varchar(255) NOT NULL,
  `Zkratka` varchar(255) NOT NULL,
  `Od` time DEFAULT NULL,
  `Do` time DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `Predmet` (`ID`, `Nazev`, `Zkratka`, `Od`, `Do`) VALUES
(1,	'Programování pro Internet',	'PRI',	'17:00:00',	'18:50:00'),
(2,	'Produktový design',	'PD',	'08:00:00',	'09:00:00'),
(3,	'Operační systémy',	'OPS',	'12:00:00',	'13:50:00');

DROP TABLE IF EXISTS `PredmetStudent`;
CREATE TABLE `PredmetStudent` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `Student_ID` int NOT NULL,
  `Predmet_ID` int NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `Predmet_ID` (`Predmet_ID`),
  KEY `Student_ID` (`Student_ID`),
  CONSTRAINT `PredmetStudent_ibfk_1` FOREIGN KEY (`Predmet_ID`) REFERENCES `Predmet` (`ID`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `PredmetStudent_ibfk_2` FOREIGN KEY (`Student_ID`) REFERENCES `Student` (`ID`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `PredmetStudent` (`ID`, `Student_ID`, `Predmet_ID`) VALUES
(1,	1,	1),
(2,	2,	2),
(3,	1,	3),
(4,	2,	3);

DROP TABLE IF EXISTS `Student`;
CREATE TABLE `Student` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `Jmeno` varchar(255) NOT NULL,
  `Prijmeni` varchar(255) NOT NULL,
  `Studentske_cislo` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Studijni_rok` year NOT NULL,
  `Forma` enum('Prezencni','Kombinovany','Dalkovy') NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `Student` (`ID`, `Jmeno`, `Prijmeni`, `Studentske_cislo`, `Email`, `Studijni_rok`, `Forma`) VALUES
(1,	'Bill',	'Gates',	'F66600',	'billgates@microsoft.com',	'1984',	'Prezencni'),
(2,	'Steve',	'Jobs',	'F42000',	'stevejobs@apple.com',	'1984',	'Kombinovany');

-- 2024-03-19 15:37:11