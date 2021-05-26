<?php
session_start();
include("db_conn.php");
error_reporting(0);

if ($_SESSION["logged"] == false) {
	echo "Attenzione! E' necessario effettuare prima una registrazione!";	
}
else{
	//$_SESSION["username"] = $username;
	$username = $_SESSION["username"];
	$localita = $_SESSION["dove"];
	$arrivo = $_SESSION["arrivo"];
	$partenza = $_SESSION["partenza"];
	$adulti = $_SESSION["adulti"];
	$bambini = $_SESSION["bambini"];
	$prezzo = $_POST["prz"];
	$id_app = $_POST["id_app"];

	//query inserimento sulla tabella affitti
	$query = "INSERT INTO `affitti`(`Check_in`, `Check_out`, `Importo`, `ID_Appartamento`, `Username_Cliente`) VALUES ('$arrivo', '$partenza', '$prezzo', '$id_app', '$username')";

	if ($conn->query($query) == true) {
	  echo "<br><br><h2 align='center'>Prenotazione avvenuta con successo.<h2><br>";
	}
	else{
	  echo "Prenotazione non avvenuta: ".$query."<br>".$conn-> error;
	  //Chiusura connessione
	  //$conn->close();
	}
}

?>

<!DOCTYPE html>
<html lang="it">
<head>
	<title>www.b&bpuglia.it</title>
</head>
<body background="src/img/puglia-alberobello.jpg" style="background-attachment: fixed;">
	<form action='index.php' method='POST'><br><br><br>
		<input type="submit" value="-->  Clicca per continuare   <--">
	</form>
</body>
</html>

