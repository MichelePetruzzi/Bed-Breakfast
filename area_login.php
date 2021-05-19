<?php

session_start();
include("db_conn.php");
error_reporting(0);

$username = $_POST["username"];
$password = $_POST["password"];

$_SESSION["username"] = $username;
$_SESSION["password"] = $password;

//Query
$query = "SELECT * FROM `clienti` WHERE `Username` = '$username'; ";

?>

<!DOCTYPE html>
<html lang="it">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="src/colors.css">
    <link rel="stylesheet" type="text/css" href="src/img">
	<title>Area Utente</title>
</head>
<body background="puglia-alberobello.jpg" class="container-fluid">
	<nav class="navbar navbar-expand-lg navbar-dark navbg-primary fixed-top bg-dark">
  <div class="container-fluid">
    <img src="bed-and-breakfast.png" align="left" width="150" height="85" alt="b&b">
    <a class="navbar-brand" href="#">&nbsp&nbsp B&B in Puglia</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">&nbsp Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="visita_puglia.php">Visita la Puglia</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="registrazione.php">Registrati</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="login.php">Login</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Cerca</button>
      </form>
    </div>
  </div>
</nav>

<div style="margin-top: 120px">
  <?php
  //Risultato della query
  $result = $conn->query($query);

  if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {
      //$pwdH = password_hash($password, PASSWORD_DEFAULT);
      //echo "<br>".$pwdH;
      //echo $password."<br>";
      $user = $row["Username"];
      $pwdDB = $row["Password"];
      //echo "<br><b>Username: </b>".$user."<br>";
      //echo "<b>Password: </b>".$pwdDB."<br>";
      //echo $localpwd."<br>";
      //$pawd = (password_verify(password, hash);
      if (password_verify($password, $pwdDB) == true) {
        echo "<br><h2 align='center'>Welcom ".$row["Username"]."</h2><br>";
        echo "<br>";

        //Stampo le info da confermare
        $query = "SELECT AF.`Check_in`, AF.`Check_out`, AF.`Num_Giorni`, AF.`Preventivo`, CL.`Nome`, CL.`Cognome`, CL.`Telefono` CL.`Credit_Card` FROM `affitti` AF, `clienti` CL WHERE AF.`ID_Cliente` = CL.`ID_Cliente` AND CL.`ID_Cliente` = 1 ";
          
          $result = $conn->query($query);

          if ($result ->num_rows > 0) {
            while($row = $result -> fetch_assoc()){
              echo "<br>Nome: ".$row[Nome];
              echo "<br>Cognome: ".$row[Cognome];
              echo "<br>Data arrivo: ".$row[Check_in];
              echo "<br>Data partenza: ".$row[Check_out];
              echo "<br>Numero giorni: ".$row[Num_Giorni];
              echo "<br>Prezzo: €".$row[Preventivo];
              echo "<br>Telefono: ".$row[Telefono];
              echo "<br>Carta di credito: ".$row[Credit_Card];
            }
          }

        }
        else{
            echo "Password errata!";
            echo " Refresh: 2; url=login.php ";
        }

        if ($row["ID_Appartamento"] == 110) {
          echo "<table>";
        echo "<img src='265231953.jpg' height='230' width='350' style='border-radius: 10px 10px 10px 10px;'>";
      }
      else{
        echo "<img src='melavi2.jpeg' height='230' width='350' style='border-radius: 10px 10px 10px 10px;'>";
      }
     }
    }
    else{
      echo "<div align='center'><br><h2>NON ci sono utenti con queste credenziali.</h2></div>";
        header("Refresh: 2; url=login.php");
    }
  ?>
</div>
</body>
</html>