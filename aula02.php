<?php

	//Variáveis
	$vnome="Lucas";
	$vnum=10;
	$vnum2=10.5;
	$soma=0;

	//Constantes
	define("nome", "Pedro Lucas da Costa Dantas");

	echo "Nome: $vnome<br/>";
	$vnome="Pedro";
	echo "Nome: $vnome<br/>";
	$soma=10+20;
	echo "Soma: $soma<br>";
	
	echo "<hr>Constante do nome: ".nome."<br>";
	echo "Diretório do arquivo: ".__file__."<br>";
	echo "Pasta: ".__dir__."<br>";
	echo "Número da linha:".__line__;
?>

<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Aula 02</title>
</head>
<body>

	
</body>
</html>