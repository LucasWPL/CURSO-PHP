<?php
  //SESSION
  session_start();
  $_SESSION['login'] = "sim";
  $_SESSION['bv'] = "<h3> É uma honra tê-lo no nosso site. Saiba mais acessando nosso insta. </h3>";

    echo $_SESSION['bv'];

?>

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Aula 19</title>
</head>
<body>
<a href="auxaula19.php">PÁGINA PRINCIPAL</a>
</body>
</html>