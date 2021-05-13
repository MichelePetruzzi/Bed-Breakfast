<?php

session_start();
include("db_conn.php");

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
    
    <title>www.b&bpuglia.com</title>
 </head>
 <body background="puglia-alberobello.jpg" class="container-fluid">
    <!--<div class="hello">
		<h1 align="center"> </h1>
	</div> -->
<!-- ------------------------------------------------------------------------------- -->
<!-- <nav class="navbar navbar-light bg-light">
  		<div class="container-fluid">
    	<span class="navbar-brand mb-0 h1">Bed & Breakfast</span>
  		</div>
      1)navbar-expand-lg fixed-top py-3
      2)navbar navbar-dark bg-primary
      3)navbar navbar-light" style="background-color: #e3f2fd;
      4)navbar-expand-lg navbar-dark navbg-primary fixed-top bg-dark
</nav> -->

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

<br><br><br>

<table align="center" style="margin-top: 90px">
    <form action="visita_puglia.php" method="POST" name="cerca_b&b" class="row g-3">
    <tr>
        <td colspan="2">
            <h3 align="center" style="shape-rendering: 20px">Trova un alloggio in Puglia</h3>
        </td>
    </tr>
    <tr>
        <td colspan="2">
            <div class="col">
                <label>Trova nelle vicinanze</label><br>
                <input type="text" name="dove" class="form-control" style="width: 100%" placeholder="Dove" aria-label="dove">
            </div>
        </td>
    </tr>
    <tr>
        <td><div class="col">
            <label>check-in</label><br>
                <input type="date" name="arrivo" class="form-control" placeholder="check-in" aria-label="data-arrivo">
            </div>
        </td>
        <td>
            <div class="col">
                <label>check-out</label><br>
                <input type="date" name="partenza" class="form-control" placeholder="check-out" aria-label="data-arrivo">
            </div>
        </td>
    </tr>
    <tr>
        <td>
            <label>Adulti</label><br>
            <select name="adulti" class="form-select mb-1" aria-label=".form-select-adulti">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
            </select>
        </td>
        <td>
            <label>Bambini</label><br>
            <select name="bambini" class="form-select mb-1" aria-label=".form-select-bambini">
                <option selected>0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
            </select>
        </td>
    </tr>
    <tr>
        <td colspan="2" align="center">
            <button type="submit" name="cerca" style="width: 100%" class="btn btn-primary">Cerca</button>
        </td>
    </tr>
    </form>
</table>

<!-- FORM
<form action="login.php" method="POST" style="margin-top: 200px">
    <h3 align="center"> Login Utente</h3>
    <table align="center">
        <tr>
            <th><label for="exampleUsername" class="form-label">&nbspUsername&nbsp</label></th>
            <td><input type="text" class="form-control" id="exampleInputUsername" maxlength="20"></td>
        </tr>
        <tr>
            <th><label for="exampleInputPassword1" class="form-label">&nbspPassword&nbsp</label></th>
            <td><input type="password" class="form-control" id="exampleInputPassword1" minlength="4" maxlength="20"></td>
        </tr>
        <tr>
            <td align="center" colspan="2"><button type="submit" class="btn btn-primary">Sign in</button>&nbsp<button type="submit" class="btn btn-primary">Sign up</button>
            </td>
        </tr>
    </table>
</form> -->
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<table>
  <thead>
    <p style="font-size: 25px; color: yellow">
      <b>Fatti la tua vacanza in Puglia!</b>
    </p>
    <table border="+2" bgcolor="#000000">
      <tr>
        <div id="carouselExampleCaptions" align="center" style="width: 70%" style="height: 30%" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="5000">
      <img src="mare.jpg" class="d-block w-100" style="border-radius: 10px 10px 10px 10px;" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Visita le nostre città Pugliesi</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="3000">
      <img src="Riviera-Maya.jpg" class="d-block w-100" style="border-radius: 10px 10px 10px 10px;" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Fai la tua vacanza nei residence migliore della Puglia</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="3000">
      <img src="balconi-fioriti-locorotondo.jpg" class="d-block w-100" style="border-radius: 10px 10px 10px 10px;" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Visita le città tipiche della Puglia</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="3000">
      <img src="Puglia.jpg" class="d-block w-100" style="border-radius: 10px 10px 10px 10px;" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Vedrai i tramonti meravigliosi</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="3000">
      <img src="85f10849c4.jpg" class="d-block w-100" style="border-radius: 10px 10px 10px 10px;" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Fai una passeggiata di sera</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
  </div>
      </tr>
    </table>
  </thead>
</table>

<br>

<table align="center">
    <tr>
        <td><img src="fasano-puglia.jpg" class="rounded float-start" height="250" width="500" style="border-radius: 10px 10px 10px 10px;" style="padding: 2px"></td>
        <td><img src="115566073.jpg" class="rounded mx-auto d-block" height="250" width="500" style="border-radius: 10px 10px 10px 10px;" style="padding: 2px"></td>
        <td><img src="DSCF4354.jpg" class="rounded float-end" height="250" width="500" style="border-radius: 10px 10px 10px 10px;" style="padding: 2px"></td>
    </tr>
</table>

<!--
  
<div id="carouselExampleInterval" align="center" style="width: 70%" style="height: 70%" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="5000">
      <img src="mare.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item" data-bs-interval="3000">
      <img src="Riviera-Maya.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item" data-bs-interval="3000">
      <img src="balconi-fioriti-locorotondo.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item" data-bs-interval="3000">
      <img src="Puglia.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item" data-bs-interval="3000">
      <img src="85f10849c4.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
 </div>

-->

  <!-- <br><br><br><br>
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="mare.jpg" class="d-block w-100" alt="Mountain View">
    </div>
    <div class="carousel-item">
      <img src="Riviera-Maya.jpg" class="d-block w-100" alt="Mountain View">
    </div>
    <div class="carousel-item">
      <img src="puglia-alberobello.jpg" class="d-block w-100" alt="Mountain View">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div> -->


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <script type="text/javascript" src="dist/libs.min.js"></script>
	<script type="text/javascript" src="dist/index.bundle.js"></script>
	<script type="text/javascript" src="dist/index.css"></script>
  <br>
  </body>
</html>