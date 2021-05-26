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
	<title>Login Utente</title>

  <!-- Controlli campi form Login -->
  <script type="text/javascript">
    function valida_form_login() {
     var username = document.login.username.value;
     var password = document.login.password.value;

      //Controllo se il campo è vuoto
      if (username == "") {
        alert("Attenzione! Non hai inserito Username");
          document.getElementById('username').focus();
      }

      if (password == "") {
        alert("Attenzione! Non hai inserito la Password");
          document.getElementById('password').focus();
      }

    }
  </script>

</head>
<body background="src/img/puglia-alberobello.jpg" style="background-attachment: fixed;" class="container-fluid">
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

<!-- FORM -->
<form action="area_login.php" method="POST" name="login" style="margin-top: 250px">
    <div align="center">
      <img src="src/img/78146445.jpg" alt="User" width="50" height="55">
    </div>
    <h3 align="center"> Login Utente</h3>
    <table align="center">
        <tr>
            <th>Username</th>
            <td><input type="text" name="username" id="username" class="form-control" id="exampleInputUsername" maxlength="20"></td>
        </tr>
        <tr>
            <th>Password</th>
            <td><input type="password" name="password" id="password" class="form-control" id="exampleInputPassword1" minlength="4" maxlength="20"></td>
        </tr>
        <tr>
            <td align="center" colspan="2">
              <button type="reset" name="reset" class="btn btn-primary">Annulla</button>&nbsp
              <button type="submit" name="login" onclick="valida_form_login()" class="btn btn-primary">Login</button>
            </td>
        </tr>
        <tr>
          <td colspan="2" align="center"><a href="registrazione.php">Clicca qui se accedi per la prima volta</a></td>
        </tr>
    </table>
</form>

</body>
</html>