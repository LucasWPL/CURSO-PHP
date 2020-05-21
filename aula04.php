<?php

	//Arrays
	$vetor=array(5);
	$vetor2=array("nome"=>"Lucas","cidade"=>"Mossoró","curso"=>"PHP");
	$matriz=array(
		array("Merzedez L230",79500),
		array("Ford Fusion",81200),
		array("Hyunday HB20s",43000),
		array("Chevrolet Onix",54000),
	);

	$vet[0]="Carro";
	$vet[1]="Caminhão";
	$vet[2]="Moto";
	$vet[3]="Avião";
	$vet[4]="Ônibus";

	echo "<hr>Valor 01 = $vet[0]<br>";
	echo "Valor 02 = $vet[1]<br>";
	echo "Valor 03 = $vet[2]<br>";
	echo "Valor 04 = $vet[3]<br>";
	echo "Valor 05 = $vet[4]<br>";

	echo "<hr>Nome: ".$vetor2["nome"]." - Cidade: ".$vetor2["cidade"]. " - Curso: ". $vetor2["curso"]."<br>";
	echo "<hr>Carro 01: ".$matriz [0][0].", Valor = ".$matriz [0][1]."<br>";
	echo "Carro 02: ".$matriz [1][0].", Valor = ".$matriz [1][1]."<br>";
	echo "Carro 03: ".$matriz [2][0].", Valor = ".$matriz [2][1]."<br>";
	echo "Carro 04: ".$matriz [3][0].", Valor = ".$matriz [3][1]."<br><hr>";
?>

<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Aula 04</title>
</head>
<body>

	
</body>
</html>