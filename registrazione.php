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

  <!-- Controlli con javascript -->
  <script type="text/javascript">
    function valida_form() {
     var cognome    = document.reg.cognome.value;
     var nome       = document.reg.nome.value;
     var toponimo   = document.reg.toponimo.value;
     var nome_via   = document.reg.nome_via.value;
     var civico     = document.reg.civico.value;
     var id_comune  = document.reg.id_comune.value;
     var telefono   = document.reg.telefono.value;
     var username   = document.reg.username.value;
     var email      = document.reg.email.value;
     var email_conf = document.reg.email_conf.value;
     var password   = document.reg.pwd.value;
     var password2  = document.reg.pwd_conf.value;
     var num_card   = document.reg.num_creditcard.value;
     var tipo_card  = document.reg.tipo_creditcard.value;

      //Controllo se il campo è vuoto
      if (cognome == "") {
        alert("Campo 'cognome' non inserito ");
          document.getElementById("cognome").focus();
          return false;
      }

      if (nome == "") {
        alert("Campo 'nome' non inserito ");
          nome.focus();
          return false;
      }

      if (toponimo == "") {
        alert("Campo 'toponimo' non inserito ");
          toponimo.focus();
          return false;
      }

      if (nome_via == "") {
        alert("Campo 'Nome via' non inserito ");
          nome_via.focus();
          return false;
      }

      if (civico == "") {
        alert("Campo 'civico' non inserito ");
          civico.focus();
          return false;
      }

      if (id_comune == "") {
        alert("Campo 'ID_Comune' non inserito ");
          id_comune.focus();
          return false;
      }

      if (telefono == "") {
        alert("Campo 'Telefono' non inserito ");
          telefono.focus();
          return false;
      }

      if (username == "") {
        alert("Campo 'Username' non inserito ");
          username.focus();
          return false;
      }

      if (email == "") {
        alert("Campo 'Email' non inserito ");
          email.focus();
          return false;
      }

      if (email_conf == "") {
        alert("Campo 'Conferma E-mail' non inserito ");
          email_conf.focus();
          return false;
      }

      if (password == "") {
        alert("Password NON inserita!");
          pwd.focus();
          return false;
      }

      if (password2 == "") {
        alert("Password di conferma NON inserita!");
          pwd_conf.focus();
          return false;
      }

      if (password != password2) {
        alert("Attenzione! Le Password NON coincidono!");
        pwd.focus();
        return false;
      }

      if (email != email_conf) {
        alert("Attenzione! E-mail inserite NON coincidono!");
        email.focus();
        return false;
      }

      document.getElementById('reg').submit;
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
  <form action="reg_cliente.php" method="POST" name="reg" id="reg">
  <div class="mb-3">
  <tr><td align="center" colspan="2"><h2>Registrazione Utente</h2></td></tr>
  <tr><td align="left"><b>Cognome</b></td><td><input type="text" name="cognome" id="cognome" style="border-radius: 5px 5px 5px 5px;"></td></tr>
  <tr><td align="left"><b>Nome</b></td><td><input type="text" name="nome" id="nome" style="border-radius: 5px 5px 5px 5px;"></td></tr>
  <tr><td align="left"><b>Toponimo</b></td><td><input type="text" name="toponimo" id="toponimo" style="border-radius: 5px 5px 5px 5px;"></td></tr>
  <tr><td align="left"><b>Nome via</b></td><td><input type="text" name="nome_via" id="nome_via" style="border-radius: 5px 5px 5px 5px;"></td></tr><tr><td align="left"><b>Civico</b></td><td><input type="text" name="civico" style="border-radius: 5px 5px 5px 5px;"></td></tr>
  <tr><td align="left"><b>ID_Comune</b></td><td><input type="number" name="id_comune" id="id_comune" maxlength="5" style="border-radius: 5px 5px 5px 5px;"></td></tr>
  <tr><td align="left"><b>Telefono</b></td><td><input type="text" name="telefono" maxlength="15" style="border-radius: 5px 5px 5px 5px;"></td></tr>s
  <tr><td align="left"><b>Username</b></td><td><input type="text" name="username" style="border-radius: 5px 5px 5px 5px;"></td></tr>
  <tr><td align="left"><b>Email</b></td><td><input type="email" name="email" style="border-radius: 5px 5px 5px 5px;"></td></tr>
  <tr><td align="left"><b>Conferma E-mail*</b></td><td><input type="email" name="email_conf" style="border-radius: 5px 5px 5px 5px;"></td></tr>
  <tr><td align="left"><b>Password</b></td><td><input type="password" name="pwd" style="border-radius: 5px 5px 5px 5px;"></td></tr>
  <tr><td align="left"><b>Conferma Password*</b></td><td><input type="password" name="pwd_conf" style="border-radius: 5px 5px 5px 5px;"></td></tr>
  <tr><td align="left"><b>Numero carta di credito</b></td><td><input type="text" name="num_creditcard" maxlength="16" style="border-radius: 5px 5px 5px 5px;"></td></tr>
  <tr><td align="left"><b>Tipo circuito carta</b></td><td><input type="text" name="tipo_creditcard" style="border-radius: 5px 5px 5px 5px;"></td></tr>
  <tr>
    <td colspan="2" align="center">
      <button type="reset" name="reset" class="btn btn-secondary" value="Annulla">Annulla</button>&nbsp
      <button type="button" name="submit" class="btn btn-primary" value="Registrati" onclick="valida_form()">Registrati</button>
    </td>
  </tr>
  </form>
 </div>
</table>
</body>
</html>