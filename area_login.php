<?php
session_start();
include("db_conn.php");
error_reporting(0);

$username = $_POST["username"];
$password = $_POST["password"];

//Query
$query = "SELECT `Username_Cliente`, `Password` FROM `clienti` WHERE `Username_Cliente` = '$username'; ";

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
<body background="src/img/puglia-alberobello.jpg" style="background-attachment: fixed;" class="container-fluid">
	<nav class="navbar navbar-expand-lg navbar-dark navbg-primary fixed-top bg-dark">
  <div class="container-fluid">
    <img src="src/img/bed-and-breakfast.png" align="left" width="150" height="85" alt="b&b">
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
      //echo $password."<br>";
      $user = $row["Username_Cliente"];
      $pwdDB = $row["Password"];
      //echo "<br><b>Username: </b>".$user."<br>";
      //echo "<b>Password da te inserita: </b>".$password."<br>";
      //echo "<b>Password nel DB: </b>".$pwdDB."<br>";
      if (password_verify($password, $pwdDB) == true) {
          echo "<br><h2 align='center'>Welcome ".$row[Username_Cliente]."</h2><br>";
          //echo "<br>Password: ".$row[Password]."<br>";
          $_SESSION["username"]=$username;
          $_SESSION["logged"]=true;

          //Query stampa 4 tabelle
          $sql = "SELECT Cli.*, Com.*, App.*, Aff.* FROM `clienti` Cli, `comuni` Com, `appartamenti` App, `affitti` Aff WHERE Cli.ID_ComuneCli = Com.ID_Comune AND App.ID_Appartamento = Aff.ID_Appartamento AND Cli.`Username_Cliente` = Aff.`Username_Cliente`";
          
          $result_sql = $conn->query($sql);
          
          if ($result_sql->num_rows>0) {

          $row = $result_sql->fetch_assoc();
              
          echo "<table bgcolor='#fffff0' style='border-radius: 10px 10px 10px 10px;'>";
          echo "<tr><td>";
          echo "<table style='margin-left: 60px' bgcolor='#fffff0' style='border-radius: 10px 10px 10px 10px;'>";
          echo "<tr><td align='left' colspan='2'><h4>I tuoi dati:</h4></td></tr>";
          echo "<tr><td><b>Nome </b></td><td>".$row[Nome]."</td></tr>";
          echo "<tr><td><b>Cognome </b></td><td>".$row[Cognome]."</td></tr>";
          echo "<tr><td><b>Indirizzo dell'appartamento </b></td><td>"." ".$row[Toponimo]." ".$row[Nome_via]." ".$row[Civico]."</td></tr>";
          echo "<tr><td><b>Comune </b></td><td>".$row[Comune]."</td></tr>";
          echo "<tr><td><b>Provincia </b></td><td>".$row[Provincia]."</td></tr>";
          echo "<tr><td><b>Nazione </b></td><td>".$row[Nazione]."</td></tr>";
          echo "<tr><td><b>Codice Appartamento </b></td><td>".$row[ID_Appartamento]."</td></tr>";
          echo "<tr><td><b>Importo </b></td><td>€ ".$row[Importo]."</td></tr>";
          echo "<tr><td><b>Data inizio pren. </b></td><td>".$row[Check_in]."</td></tr>";
          echo "<tr><td><b>Data scadenza pren. </b></td><td>".$row[Check_out]."</td></tr>";
          echo "<tr><td><b>Email </b></td><td>".$row[Email]."</td></tr>";
          echo "<tr><td><b>Telefono </b></td><td>".$row[Telefono]."</td></tr>";
          echo "<tr><td><b>Numero carta di credito </b></td><td>".$row[Num_CreditCard]."</td></tr>";
          echo "<tr><td><b>Circuito carta di credito </b></td><td>".$row[Tipo_CreditCard]."</td></tr>";
          echo "</table>";
          echo "</td>";
          echo "<td align='center'><img src='src/img/110_1.jpg' height='490' width='520' style='border-radius: 10px 10px 10px 10px;'></td>";
          echo "</tr></table>";
        }
      }
      else{
        echo "<h4 align='center'>Password errata</h4>";
        $_SESSION["username"]="";
        $_SESSION["logged"]=false;
        //echo "Username: ".$user."<br>Password: ".$password."<br>";
        header("Refresh: 3; url=login.php");
      }
      /*if ($password == $row[Password]) {
        echo "<br><h2 align='center'>Welcom ".$row[Username_Cliente]."</h2><br>";
        echo "<br>Password: ".$row[Password]."<br>";
      }
      else{
        echo "<h4 align='center'>Password errata</h4>";
        header("Refresh: 3; url=login.php");
      }*/
  }
}
else{
  echo "<div align='center'><br><h4>NON ci sono utenti con queste credenziali.</h4></div>";
  header("Refresh: 2; url=login.php");
}
?>
</div>

<br><br><br><br><br>
<form action='logout.php' method='POST'>
  <button type="submit" name="logout" value="Logout">Esci dal login</button>
</form>

</body>
</html>