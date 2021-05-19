-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Mag 19, 2021 alle 12:38
-- Versione del server: 5.7.17
-- Versione PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bedbreakfast`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `affitti`
--

CREATE TABLE `affitti` (
  `ID_Affitto` int(3) NOT NULL,
  `Check_in` date NOT NULL,
  `Check_out` date NOT NULL,
  `Num_Giorni` int(2) NOT NULL,
  `Preventivo` double NOT NULL,
  `ID_Appartamento` int(3) NOT NULL,
  `ID_Cliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `affitti`
--

INSERT INTO `affitti` (`ID_Affitto`, `Check_in`, `Check_out`, `Num_Giorni`, `Preventivo`, `ID_Appartamento`, `ID_Cliente`) VALUES
(1, '2021-06-14', '2021-06-27', 13, 1770, 110, 1);

-- --------------------------------------------------------

--
-- Struttura della tabella `appartamenti`
--

CREATE TABLE `appartamenti` (
  `ID_Appartamento` int(3) NOT NULL,
  `Indirizzo` varchar(30) CHARACTER SET latin7 COLLATE latin7_bin NOT NULL,
  `ID_ComuneApp` int(3) NOT NULL,
  `Prezzo` double NOT NULL,
  `Descrizione` varchar(100) CHARACTER SET latin7 COLLATE latin7_bin NOT NULL,
  `ID_Proprietario` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `appartamenti`
--

INSERT INTO `appartamenti` (`ID_Appartamento`, `Indirizzo`, `ID_ComuneApp`, `Prezzo`, `Descrizione`, `ID_Proprietario`) VALUES
(110, 'Viale Miramonti 27', 1, 130, 'Situato a Selva di Fasano, questo trullo offre vacanze indimenticabili', 1),
(111, 'Via Fratelli Roselli 70', 1, 35, 'La casa del proprietario si trova a Fasano, Provincia di Brindisi Puglia.', 1);

-- --------------------------------------------------------

--
-- Struttura della tabella `clienti`
--

CREATE TABLE `clienti` (
  `ID_Cliente` int(3) NOT NULL,
  `Cognome` varchar(30) CHARACTER SET latin7 COLLATE latin7_bin NOT NULL,
  `Nome` varchar(30) CHARACTER SET latin7 COLLATE latin7_bin NOT NULL,
  `Indirizzo` varchar(30) CHARACTER SET latin7 COLLATE latin7_bin NOT NULL,
  `ID_Comune` int(3) NOT NULL,
  `Telefono` varchar(15) CHARACTER SET latin7 COLLATE latin7_bin NOT NULL,
  `Email` varchar(30) CHARACTER SET latin7 COLLATE latin7_bin NOT NULL,
  `Username` varchar(30) CHARACTER SET latin7 COLLATE latin7_bin NOT NULL,
  `Password` varchar(256) CHARACTER SET latin7 COLLATE latin7_bin NOT NULL,
  `Credit_Card` varchar(19) CHARACTER SET latin7 COLLATE latin7_bin NOT NULL,
  `ID_Appartamento` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `clienti`
--

INSERT INTO `clienti` (`ID_Cliente`, `Cognome`, `Nome`, `Indirizzo`, `ID_Comune`, `Telefono`, `Email`, `Username`, `Password`, `Credit_Card`, `ID_Appartamento`) VALUES
(1, 'Taylor', 'Manson', 'Street Liberty 99', 2, '+1971567835469', 'taylor.manson@gmail.com', 'Manson', '$2y$10$Ch0ZUfrxyfmXOF0M1llgKeo1cLQuBqOoWc88qvm55V3PteLqkMTmW', '5412 7512 3412 3456', 110);

-- --------------------------------------------------------

--
-- Struttura della tabella `comuni`
--

CREATE TABLE `comuni` (
  `ID_Comune` int(3) NOT NULL,
  `Comune` varchar(35) CHARACTER SET latin7 COLLATE latin7_bin NOT NULL,
  `Provincia` varchar(2) CHARACTER SET latin7 COLLATE latin7_bin NOT NULL,
  `Nazione` varchar(35) CHARACTER SET latin7 COLLATE latin7_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `comuni`
--

INSERT INTO `comuni` (`ID_Comune`, `Comune`, `Provincia`, `Nazione`) VALUES
(1, 'Fasano', 'BR', 'Italia'),
(2, 'Brooklyn', 'NY', 'USA');

-- --------------------------------------------------------

--
-- Struttura della tabella `proprietari`
--

CREATE TABLE `proprietari` (
  `ID_Proprietario` int(3) NOT NULL,
  `Cognome` varchar(30) CHARACTER SET latin7 COLLATE latin7_bin NOT NULL,
  `Nome` varchar(30) CHARACTER SET latin7 COLLATE latin7_bin NOT NULL,
  `Telefono` varchar(15) CHARACTER SET latin7 COLLATE latin7_bin NOT NULL,
  `Email` varchar(30) CHARACTER SET latin7 COLLATE latin7_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `proprietari`
--

INSERT INTO `proprietari` (`ID_Proprietario`, `Cognome`, `Nome`, `Telefono`, `Email`) VALUES
(1, 'Marino', 'Giorgio', '+393227635781', 'marino.giorgio@gmail.com');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `affitti`
--
ALTER TABLE `affitti`
  ADD PRIMARY KEY (`ID_Affitto`),
  ADD KEY `ID_Appartamento` (`ID_Appartamento`,`ID_Cliente`),
  ADD KEY `ID_Cliente` (`ID_Cliente`);

--
-- Indici per le tabelle `appartamenti`
--
ALTER TABLE `appartamenti`
  ADD PRIMARY KEY (`ID_Appartamento`),
  ADD KEY `ID_Proprietario` (`ID_Proprietario`),
  ADD KEY `ID_ComuneApp` (`ID_ComuneApp`);

--
-- Indici per le tabelle `clienti`
--
ALTER TABLE `clienti`
  ADD PRIMARY KEY (`ID_Cliente`),
  ADD KEY `ID_Appartamento` (`ID_Appartamento`),
  ADD KEY `ID_Comune` (`ID_Comune`);

--
-- Indici per le tabelle `comuni`
--
ALTER TABLE `comuni`
  ADD PRIMARY KEY (`ID_Comune`);

--
-- Indici per le tabelle `proprietari`
--
ALTER TABLE `proprietari`
  ADD PRIMARY KEY (`ID_Proprietario`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `affitti`
--
ALTER TABLE `affitti`
  MODIFY `ID_Affitto` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT per la tabella `appartamenti`
--
ALTER TABLE `appartamenti`
  MODIFY `ID_Appartamento` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;
--
-- AUTO_INCREMENT per la tabella `clienti`
--
ALTER TABLE `clienti`
  MODIFY `ID_Cliente` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT per la tabella `comuni`
--
ALTER TABLE `comuni`
  MODIFY `ID_Comune` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT per la tabella `proprietari`
--
ALTER TABLE `proprietari`
  MODIFY `ID_Proprietario` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `affitti`
--
ALTER TABLE `affitti`
  ADD CONSTRAINT `affitti_ibfk_1` FOREIGN KEY (`ID_Cliente`) REFERENCES `clienti` (`ID_Cliente`),
  ADD CONSTRAINT `affitti_ibfk_2` FOREIGN KEY (`ID_Appartamento`) REFERENCES `clienti` (`ID_Appartamento`),
  ADD CONSTRAINT `affitti_ibfk_3` FOREIGN KEY (`ID_Appartamento`) REFERENCES `appartamenti` (`ID_Appartamento`);

--
-- Limiti per la tabella `appartamenti`
--
ALTER TABLE `appartamenti`
  ADD CONSTRAINT `appartamenti_ibfk_1` FOREIGN KEY (`ID_Proprietario`) REFERENCES `proprietari` (`ID_Proprietario`),
  ADD CONSTRAINT `appartamenti_ibfk_2` FOREIGN KEY (`ID_ComuneApp`) REFERENCES `comuni` (`ID_Comune`);

--
-- Limiti per la tabella `clienti`
--
ALTER TABLE `clienti`
  ADD CONSTRAINT `clienti_ibfk_1` FOREIGN KEY (`ID_Comune`) REFERENCES `comuni` (`ID_Comune`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
