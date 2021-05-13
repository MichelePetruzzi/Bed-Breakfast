<?php

session_start();
include("db_conn.php");
//$conn = new mysqli("localhost", "root", "");
error_reporting("0");

//$_SESSION[""] = ;

//Connessione al DB 'bedbreakfast'
/*
if($conn->select_db('bedbreakfast')){
	echo "<b>Connessione al database 'bedbreakfast' riuscita.</b><br/>";
} 
else {
    die("Errore nella connessione al database 'bedbreakfast'.<br/>");
    $conn->close();
} */

$cognome = $_POST["cognome"];
$nome = $_POST["nome"];
$indirizzo = $_POST["indirizzo"];
$cap = $_POST["cap"];
$citta = $_POST["citta"];
$provincia = $_POST["provincia"];
$comune = $_POST["comune"];
$nazione = $_POST["nazione"];
$telefono = $_POST["tell"];
$email = $_POST["email"];
$email_conf = $_POST["email_conf"];
$username = $_POST["username"];
$password = $_POST["pwd"];
$password2 = $_POST["pwd_conf"];
$id_appartamento = $_POST["id_appartamento"];

/*
//Verifico se esiste già un account con queste credenziali
$query = "SELECT `Cognome`, `Nome`, `Email`, `Username`, `Password` FROM `clienti` WHERE `Email` == '$email' AND `Username` == '$username' AND `Password` == '$password';";

$result = $conn -> query();

if ($result->num_rows > 0) {
	# code...
	echo "Questo account esiste già, prova ad effetuare il login.<br>";
}
*/

//Verifico l'inserimento corretto
if ($cognome == "" || $nome == "" || $indirizzo == "" || $cap == "" || $citta == "" || $provincia == "" || $comune == "" || $nazione == "" || $telefono == "" || $username == "" || $email == "" || $email_conf == "" || $password == "" || $password2 == "" || $id_appartamento == "") {

	die("<br><h3>Errore: alcuni dati non sono inserite.</h3>");
	header(" Refresh: 1; url='registrazione.php' ");
}

//funzione strpos($..., '') --> è case sensetive!
if (strpos($email, '@') == false) {
	# code...
	die("Attenzione: L'Email non e' inserita correttamente.<br>");
	header(" Refresh: 1; url='registrazione.php' ");
}

if (strpos($email_conf, '@') == false) {
	# code...
	die("Attenzione: L'Email di conferma non e' inserita correttamente.<br>");
	header(" Refresh: 1; url='registrazione.php' ");
}

//----------------------------//
if ($email != $email_conf) {
	# code...
	die("Attenzione: le due Email NON coincidono!<br>");
	header(" Refresh: 1; url='registrazione.php' ");
}

//-----------------------------//
if ($password != $password2) {
	# code...
	die("Attenzione: le due Password NON coincidono");
	header(" Refresh: 1; url='registrazione.php' ");
}
else {
	//password critografata con hash
	$hash = password_hash($password, PASSWORD_DEFAULT);
	//echo "<br> Password: ".$hash;
  	//Registrazione andata a buon fine
  	$query_reg = "INSERT INTO `clienti`(`Cognome`, `Nome`, `Indirizzo`, `CAP`, `Citta`, `Provincia`, `Comune`, `Nazione`, `Telefono`, `Email`, `Username`, `Password`, `ID_Appartamento`) VALUES ('$cognome', '$nome', '$indirizzo', '$cap', '$citta', '$provincia', '$comune', '$nazione', '$telefono', '$email', '$username', '$hash', '$id_appartamento');";
}

if ($conn-> query($query_reg) == true) {
  # code...
  echo "<br><br><h2>Registrazione avvenuta con successo.<h2><br>";
  $_SESSION["logged"]=true;
  header(" Refresh: 2; url='index.php' ");
}
else{
  echo "Registrazione non avvenuta: ".$query_reg."<br>".$conn->error;;
  echo "<br>";
  //Chiusura connessione
  $conn->close();
}

?>