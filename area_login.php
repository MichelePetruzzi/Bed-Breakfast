<?php

session_start();
include("db_conn.php");

$username = $_POST["username"];
$password = $_POST["password"];

//Query
$query = "SELECT * FROM `clienti` WHERE `Username` = '$username' AND `Password` = '$password'; ";

//Risultato della query
$result = $conn->query($query);

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

<div align="center" style="margin-top: 120px">
	<?php
    //Password_verify


		if ($result->num_rows > 0) {
		while ($row = $result->fetch_assoc()) {
			echo "<h2>Buongiorno ".$row["Username"]."</h2><br>";
		}
		
    
		}
		else{
			echo "<br>NON vi sono utenti con queste credenziali.";
    		header("Refresh: 2; url=index.php");
		}
	?>
</div>

</body>
</html>