<?php
  //SESSION
  session_start();
    if ($_SESSION['login']=="sim") {
        echo $_SESSION['bv'];
        echo "Siga-nos no instagram! @lucas.wpl";
    }else{
        echo "Por favor, faça o login na nossa página inicial.";
    }
    

?>

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Aula 19</title>
</head>
<body>
    <br>
<a href="aula19.php">PÁGINA INICIAL</a>
</body>
</html>