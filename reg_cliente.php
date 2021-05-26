<?php
session_start();
include("db_conn.php");
error_reporting("0");

echo "<form action='index.php' method='POST'>";

$cognome = $_POST["cognome"];
$nome = $_POST["nome"];
$toponimo = $_POST["toponimo"];
$nome_via = $_POST["nome_via"];
$civico = $_POST["civico"];
$id_comune = $_POST["id_comune"];
$telefono = $_POST["telefono"];
$email = $_POST["email"];
$email_conf = $_POST["email_conf"];
$username = $_POST["username"];
$password = $_POST["pwd"];
$password2 = $_POST["pwd_conf"];
$num_creditcard = $_POST["num_creditcard"];
$tipo_creditcard = $_POST["tipo_creditcard"];

//Verifico se esiste già un account con queste credenziali
$query = "SELECT `Username_Cliente`, `Email`, `Password` FROM `clienti` WHERE `Username_Cliente` == '$username' AND `Email` == '$email' AND `Password` == '$password'; ";

$result = $conn -> query($query);

if ($result->num_rows > 0) {
	# code...
	echo "Questo account esiste già, prova ad effetuare il login.<br>";
}
else{

	/*
	//funzione verifica validazione campo email
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		//email non valida
		die("Attenzione: L'Email non e' inserita correttamente.<br>");
		header(" Refresh: 1; url='registrazione.php' ");
	} */

	/*
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
	*/

	/*
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
	*/
	 	//password critografata con hash
		$hash = password_hash($password, PASSWORD_DEFAULT);
		//echo "<br> Password: ".$hash;
	  	//Registrazione andata a buon fine
	  	$query_reg = "INSERT INTO `clienti`(`Username_Cliente`, `Cognome`, `Nome`, `Toponimo`, `Nome_via`, `Civico`, `ID_ComuneCli`, `Telefono`, `Email`, `Password`, `Num_CreditCard`, `Tipo_CreditCard`) VALUES ('$username', '$cognome', '$nome', '$toponimo', '$nome_via', '$civico', '$id_comune', '$telefono', '$email', '$hash', '$num_creditcard', '$tipo_creditcard'); ";
	//}

	if ($conn-> query($query_reg) == true) {
	  echo "<br><br><h2>Registrazione avvenuta con successo.<h2><br>";
	  //header(" Refresh: 2; url='index.php' ");
	  $_SESSION["username"]=$username;
	  $_SESSION["logged"]=true;
	}
	else{
	  echo "Registrazione non avvenuta: ".$query_reg."<br>".$conn-> error;
	  $_SESSION["username"]="";
      $_SESSION["logged"]=false;
	  echo "<br>";
	  //Chiusura connessione
	  //$conn->close();
	}
}

echo "<input type='submit' value='Clicca per continuare'>";
echo "</form>";

?>