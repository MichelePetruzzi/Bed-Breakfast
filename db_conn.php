<?php

//Stabilisco la connessione con il server
$conn = new mysqli("localhost", "root", "");

if ($conn->connect_error) {
	die("Errore: impossibile stabilire la connessione con il server.");
}

$query = "CREATE DATABASE IF NOT EXISTS bedbreakfast";

if ($conn -> query($query)) {
	# code...
	//echo "<i>DATABASE 'bedbreakfast' creato. </i><br>";
}
else{
	die("Errore nella creazione del DATABASE. <br>");
	$conn->close();
}

//Connessione al db b&b
if ($conn -> select_db("bedbreakfast")) {
	# code...
	//echo "<i>Connessione al DATABASE 'bedbreakfast' riuscita.</i><br>";
}
else{
	die("Errore nella connessione al DATABASE 'bedbreakfast'.<br>");
	$conn->close();
}

//Creazione della tabella proprietari
$query = "CREATE TABLE IF NOT EXISTS proprietari(
	ID_Proprietario INT(3) NOT NULL AUTO_INCREMENT,
	Cognome VARCHAR(30) NOT NULL,
	Nome VARCHAR(30) NOT NULL,
	Telefono VARCHAR(15) NOT NULL,
	Email VARCHAR(30) NOT NULL,
	PRIMARY KEY (ID_Proprietario)
	) Engine = InnoDB; ";

if($conn->query($query)){
	//echo "<i>Tabella 'proprietari' creata correttamente.</i><br>";
}
else {
	die("Errore nella creazione della tabella 'proprietari'.<br>");
	$conn->close();
}

//Creazione della tabella appartamenti
$query = "CREATE TABLE IF NOT EXISTS appartamenti(
	ID_Appartamento INT(3) NOT NULL AUTO_INCREMENT,
	Indirizzo VARCHAR(30) NOT NULL,
	ID_ComuneApp INT(3) NOT NULL,
	Prezzo double NOT NULL,
	Descrizione VARCHAR(100) NOT NULL,
	ID_Proprietario INT(3) NOT NULL,
	PRIMARY KEY (ID_Appartamento)
	) Engine = InnoDB; ";

if($conn->query($query)){
	//echo "<i>Tabella 'appartamenti' creata correttamente.</i><br>";
}
else {
	die("Errore nella creazione della tabella 'appartamenti'.<br>");
	$conn->close();
}

//Creazione della tabella clienti
$query = "CREATE TABLE IF NOT EXISTS clienti(
	ID_Cliente INT(3) NOT NULL AUTO_INCREMENT,
	Cognome VARCHAR(30) NOT NULL,
	Nome VARCHAR(30) NOT NULL,
	Indirizzo VARCHAR(30) NOT NULL,
	ID_Comune INT(3) NOT NULL,
	Telefono VARCHAR(15) NOT NULL,
	Email VARCHAR(30) NOT NULL,
	Username VARCHAR(30) NOT NULL,
	Password VARCHAR(256) NOT NULL,
	Credit_Card VARCHAR(19) NOT NULL,
	ID_Appartamento INT(3) NOT NULL,
	PRIMARY KEY (ID_Cliente)
	) Engine = InnoDB; ";

if($conn->query($query)){
	//echo "<i>Tabella 'clienti' creata correttamente.</i><br>";
}
else {
	die("Errore nella creazione della tabella 'clienti'.<br>");
	$conn->close();
}

//Creazione della tabella affitti
$query = "CREATE TABLE IF NOT EXISTS affitti(
	ID_Affitto INT(3) NOT NULL AUTO_INCREMENT,
	Check_in DATE NOT NULL,
	Check_out DATE NOT NULL,
	Num_Giorni INT(2) NOT NULL,
	Preventivo double NOT NULL,
	ID_Appartamento INT(3) NOT NULL,
	ID_Cliente INT NOT NULL,
	PRIMARY KEY (ID_Affitto)
	) Engine = InnoDB; ";

if($conn->query($query)){
	//echo "<i>Tabella 'appartamenti' creata correttamente.</i><br>";
}
else {
	die("Errore nella creazione della tabella 'appartamenti'.<br>");
	$conn->close();
}

//Creazione della tabella comuni
$query = "CREATE TABLE IF NOT EXISTS comuni(
	ID_Comune INT(3) NOT NULL AUTO_INCREMENT,
	Comune VARCHAR(35) NOT NULL,
	Provincia VARCHAR(2) NOT NULL,
	Nazione VARCHAR(35) NOT NULL,
	PRIMARY KEY (ID_Comune)
	) Engine = InnoDB; ";

if($conn->query($query)){
	//echo "<i>Tabella 'comuni' creata correttamente.</i><br>";
	echo "<h2 align='center'>Caricamento.....</h2>";
}
else {
	die("Errore nella creazione della tabella 'comuni'.<br>");
	$conn->close();
}

?>