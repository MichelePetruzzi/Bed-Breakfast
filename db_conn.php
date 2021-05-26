<?php

//Stabilisco la connessione con il server
$conn = new mysqli("localhost", "root", "");

if ($conn->connect_error) {
	die("Errore: impossibile stabilire la connessione con il server.");
}

$query = "CREATE DATABASE IF NOT EXISTS bedbreak";

if ($conn -> query($query)) {
	# code...
	//echo "<i>DATABASE 'bedbreakfast' creato. </i><br>";
}
else{
	die("Errore nella creazione del DATABASE. <br>");
	$conn->close();
}

//Connessione al db b&b
if ($conn -> select_db("bedbreak")) {
	# code...
	//echo "<i>Connessione al DATABASE 'bedbreakfast' riuscita.</i><br>";
}
else{
	die("Errore nella connessione al DATABASE 'bedbreak'.<br>");
	$conn->close();
}

//Creazione della tabella proprietari
$query1 = "CREATE TABLE IF NOT EXISTS proprietari(
	ID_Proprietario INT(3) NOT NULL AUTO_INCREMENT,
	Cognome VARCHAR(30) NOT NULL,
	Nome VARCHAR(30) NOT NULL,
	Telefono VARCHAR(15) NOT NULL,
	Email VARCHAR(30) NOT NULL,
	PRIMARY KEY (ID_Proprietario)
	) Engine = InnoDB; ";

if($conn->query($query1)){
	//echo "<i>Tabella 'proprietari' creata correttamente.</i><br>";
}
else {
	die("Errore nella creazione della tabella 'proprietari'.<br>");
	$conn->close();
}

//Creazione della tabella appartamenti
$query2 = "CREATE TABLE IF NOT EXISTS appartamenti(
	ID_Appartamento INT(3) NOT NULL AUTO_INCREMENT,
	Toponimo VARCHAR(10) NOT NULL,
	Nome_via VARCHAR(20) NOT NULL,
	Civico INT(3) NOT NULL,
	ID_ComuneApp INT(3) NOT NULL,
	Prezzo double NOT NULL,
	Descrizione VARCHAR(100) NOT NULL,
	ID_Proprietario INT(3) NOT NULL,
	PRIMARY KEY (ID_Appartamento)
	) Engine = InnoDB; ";

if($conn->query($query2)){
	//echo "<i>Tabella 'appartamenti' creata correttamente.</i><br>";
}
else {
	die("Errore nella creazione della tabella 'appartamenti'.<br>");
	$conn->close();
}

//Creazione della tabella clienti
$query3 = "CREATE TABLE IF NOT EXISTS clienti(
	Username_Cliente VARCHAR(20) NOT NULL,
	Cognome VARCHAR(30) NOT NULL,
	Nome VARCHAR(30) NOT NULL,
	Toponimo VARCHAR(10) NOT NULL,
	Nome_via VARCHAR(20) NOT NULL,
	Civico INT(3) NOT NULL,
	ID_ComuneCli INT(3) NOT NULL,
	Telefono VARCHAR(15) NOT NULL,
	Email VARCHAR(30) NOT NULL,
	Password VARCHAR(256) NOT NULL,
	Num_CreditCard BIGINT(16) NOT NULL,
	Tipo_CreditCard VARCHAR(20) NOT NULL,
	PRIMARY KEY (Username_Cliente)
	) Engine = InnoDB; ";

if($conn->query($query3)){
	//echo "<i>Tabella 'clienti' creata correttamente.</i><br>";
}
else {
	die("Errore nella creazione della tabella 'clienti'.<br>");
	$conn->close();
}

//Creazione della tabella affitti
$query4 = "CREATE TABLE IF NOT EXISTS affitti(
	ID_Affitto INT(3) NOT NULL AUTO_INCREMENT,
	Check_in DATE NOT NULL,
	Check_out DATE NOT NULL,
	Importo DECIMAL NOT NULL,
	ID_Appartamento INT(3) NOT NULL,
	Username_Cliente VARCHAR(20) NOT NULL,
	PRIMARY KEY (ID_Affitto)
	) Engine = InnoDB; ";

if($conn->query($query4)){
	//echo "<i>Tabella 'appartamenti' creata correttamente.</i><br>";
}
else {
	die("Errore nella creazione della tabella 'appartamenti'.<br>");
	$conn->close();
}

//Creazione della tabella comuni
$query5 = "CREATE TABLE IF NOT EXISTS comuni(
	ID_Comune INT(3) NOT NULL AUTO_INCREMENT,
	CAP INT(5) NOT NULL,
	Comune VARCHAR(35) NOT NULL,
	Provincia VARCHAR(2) NOT NULL,
	Nazione VARCHAR(35) NOT NULL,
	PRIMARY KEY (ID_Comune)
	) Engine = InnoDB; ";

if($conn->query($query5)){
	//echo "<i>Tabella 'comuni' creata correttamente.</i><br>";
}
else {
	die("Errore nella creazione della tabella 'comuni'.<br>");
	$conn->close();
}

?>