<?php

//session_start();



?>

<!DOCTYPE html>
<html lang="it">
<head>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="src/colors.css">
    <link rel="stylesheet" type="text/css" href="src/img">
	<title>Registrazione</title>
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
          <a class="nav-link active" aria-current="page" href="index.html">&nbsp Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="visita_puglia.php">Visita la Puglia</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="registrazione.php">Registrati</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="login.php">Accedi</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Cerca</button>
      </form>
    </div>
  </div>
</nav>

<table align="center" border="0" bgcolor="#f0f8ff" style="border-radius: 10px 10px 10px 10px; margin-top: 115px;" width="350">
  <form action="password.php" method="POST">
  <div class="mb-3">
  <tr><td align="center" colspan="2"><h2>Registrazione Utente</h2></td></tr>
  <tr><td align="left"><b>Cognome</b></td><td><input type="text" name="cognome" style="border-radius: 5px 5px 5px 5px;"></td></tr>
  <tr><td align="left"><b>Nome</b></td><td><input type="text" name="nome" style="border-radius: 5px 5px 5px 5px;"></td></tr>
  <tr><td align="left"><b>Codice Fiscale</b></td><td><input type="text" name="cod_fiscale" style="border-radius: 5px 5px 5px 5px;"></td></tr>
  <tr><td align="left"><b>Indirizzo</b></td><td><input type="text" name="indirizzo" style="border-radius: 5px 5px 5px 5px;"></td></tr>
  <tr><td align="left"><b>CAP</b></td><td><input type="number" name="cap" maxlength="5" style="border-radius: 5px 5px 5px 5px;"></td></tr>
  <tr><td align="left"><b>Provincia</b></td><td><input type="text" name="provincia" style="border-radius: 5px 5px 5px 5px;"></td></tr>
  <tr><td align="left"><b>Comune</b></td><td><input type="text" name="comune" style="border-radius: 5px 5px 5px 5px;"></td></tr>
  <tr><td align="left"><b>Telefono</b></td><td><input type="text" name="tell" placeholder="+(39)..." style="border-radius: 5px 5px 5px 5px;"></td></tr>
  <tr><td align="left"><b>Email</b></td><td><input type="text" name="email" style="border-radius: 5px 5px 5px 5px;"></td></tr>
  <tr><td align="left"><b>Conferma E-mail*</b></td><td><input type="text" name="email_conf" style="border-radius: 5px 5px 5px 5px;"></td></tr>
  <tr><td align="left"><b>Password</b></td><td><input type="password" name="pwd" style="border-radius: 5px 5px 5px 5px;"></td></tr>
  <tr><td align="left"><b>Conferma Password</b></td><td><input type="password" name="pwd2" style="border-radius: 5px 5px 5px 5px;"></td></tr>
  <tr>
    <td colspan="2" align="center">
      <button type="reset" name="reset" class="btn btn-secondary" value="Annulla">Annulla</button>&nbsp
      <button type="submit" name="submit" class="btn btn-primary" value="Registrati">Registrati</button>
    </td>
  </tr>
  </form>
 </div>
</table>

</body>
</html>