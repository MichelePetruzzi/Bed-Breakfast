<?php
session_start();
include("db_conn.php");
error_reporting(0);

//Acquisisco i valori dal form cerca_b&b
$localita = $_POST["dove"];
$arrivo = $_POST["arrivo"];
$partenza = $_POST["partenza"];
$adulti = $_POST["adulti"];
$bambini = $_POST["bambini"];

$_SESSION["dove"] = $localita;
$_SESSION["arrivo"] = $arrivo;
$_SESSION["partenza"] = $partenza;
$_SESSION["adulti"] = $adulti;
$_SESSION["bambini"] = $bambini;

$arrivo = $_SESSION["arrivo"];
$partenza = $_SESSION["partenza"];

//Calcolo data prezzo
$arrivo = new DateTime(implode("-", array_reverse(explode("/", $_POST["arrivo"]))));
$partenza = new DateTime(implode("-", array_reverse(explode("/", $_POST["partenza"]))));

$diff = $arrivo->diff($partenza);

$giorni = $diff->days;
$_SESSION["giorni"] = $giornii;

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
	<title>Visita la Puglia</title>
</head>
<body background="src/img/puglia-alberobello.jpg" class="container-fluid" style="background-attachment: fixed;">
  <nav class="navbar navbar-expand-lg navbar-dark navbg-primary fixed-top bg-dark">
  <div class="container-fluid">
    <img src="src/img/bed-and-breakfast.png" align="left" width="150" height="85" alt="b&b">
    <a class="navbar-brand" href="#">&nbsp&nbsp B&B Puglia</a>
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

<!-- Inizio 1° appartamento -->
<?php
//Visualizza tutti i dati dell'appartamento
$query = "SELECT * FROM appartamenti";

//Risultato della query
  $result = $conn->query($query);

  if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {
    ?>
  <div style="margin-left: 30px; margin-top: 110px;">
  <table bgcolor="#fffff0" border="0" style="border-radius: 10px 10px 10px 10px;">
    <tr>
      <td>
        <div class="row">
          <div class="col-12">
            <h3 align="top"><?php echo $row["Toponimo"]." ".$row["Nome_via"]." ".$row["Civico"]; ?></h3>
              <div style="color: black">
                <b><i>Ideale per <?php echo $adulti ?> adulti e <?php echo $bambini ?> bambini</i></b><br>
              <p>
                <ul><b>Caratteristiche: </b><br>
                <li><b><?php echo $row["Descrizione"]; ?></b></li>
                <li><b>Prezzo €<?php echo $row["Prezzo"]; ?>/notte (compreso le pulizie)</b></li>
                <li><b>Codice appartamento <?php echo $row["ID_Appartamento"]; ?></b></li>
              </ul>
              </p>
            </div>
          </div>
        </div>
      </td>
      </tr>
      <tr>
        <td>
          <?php
            for ($i=1; $i<9; $i++) {
          ?>
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5" aria-label="Slide 6"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="6" aria-label="Slide 7"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="7" aria-label="Slide 8"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="8" aria-label="Slide 9"></button>
        </div>
      <div class="carousel-inner">
      <div class="carousel-item active">
      <img src="src/img/<?php echo $row["ID_Appartamento"]."_".$i; ?>.jpg" class="d-block w-100" height="550" width="250" style="border-radius: 10px 10px 10px 10px;">
      </div>
    <?php } ?>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
    </button>
    </div>
  </td>
</tr>
</td>
</tr>    

<tr>
  <td>
    <div>
      <?php
        $prezzo = $row["Prezzo"];

        $preventivo = $giorni * $prezzo;

        $preventivo = $preventivo * ($adulti + $bambini/2);

        echo "<b>Preventivo: €".$preventivo."</b>";
        //$_SESSION["prezzo"] = $preventivo;
        
      ?>
    </div>
  </td>
</tr>
<?php
  if ($_SESSION["logged"] == true) {
?>
<form action="prenota.php" method="POST" name="prenota_subito">
  <input type="text" name="id_app" hidden="hidden" value="<?php echo $row['ID_Appartamento']; ?>">
    <input type="text" name="prz" hidden="hidden" value="<?php echo $preventivo; ?>">
    <tr>
      <td>
       <button type="submit" id="<?php echo $row['ID_Appartamento']; ?>" name="<?php echo $row['ID_Appartamento']; ?>" class="btn btn-primary" value="Prenota subito">Prenota subito</button>
        <br>
      </td>
    </tr>
</form>
<?php
  }
  else{
  ?>
<form action="login.php" method="POST" name="login">
<tr>
  <td>
    <button type="submit" id="<?php echo $row['ID_Appartamento']; ?>" name="<?php echo $row['ID_Appartamento']; ?>" class="btn btn-primary" value="Effettua Login">Effettua Login</button>
    <br>
  </td>
</tr>
</form>
  <?php
     }
  ?>
</table>
</td>
</tr>
</table>
</div>

<!-- Mappa google -->
<br><br><br>
<div>
  <div class="personal container">
      <div class="row">
        <div class="col-12" style="color: white">
            <h3>Posizione</h3>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3298.3328280491246!2d17.32926776813303!3d40.830773988427374!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x13464d393ab62f2d%3A0x3661382d452b26ca!2sVilla%20Selva%20di%20Fasano!5e1!3m2!1sit!2sit!4v1620241021777!5m2!1sit!2sit" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
      </div>
    </div>
<!-- Fine 1° appartamento -->
<br><br>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <script type="text/javascript" src="dist/libs.min.js"></script>
    <script type="text/javascript" src="dist/index.bundle.js"></script>
    <script type="text/javascript" src="dist/index.css"></script>

</body>
</html>

<?php
  }
}
else {
  echo "Errore! Al momento non ci sono appartamenti registrati.";
}

?>