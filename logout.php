<?php
//Pagina logout
session_start();
session_destroy();

echo "<h1 align='center' style='margin-top: 50px'>Logout in corso...</h1>";
echo "<br><br><br><br><br>";
echo "<h3>Ciao! E' stato un piacere riceverti. A presto!</h3>";
header("Refresh: 4; url=index.php");

?>

<!DOCTYPE html>
<html lang="it">
<head>
	<meta charset="utf-8">
	<title>Logout</title>
</head>
<body background="src/img/puglia-alberobello.jpg" style="background-attachment: fixed;" class="container-fluid">
</body>
</html>