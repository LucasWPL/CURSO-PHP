<?php
	//WHILE 
	$i=0;
	$tamanho=10;
	$vet=array($tamanho);

	while ($i <= $tamanho) {
		echo "$i<br>";
		$i++;
	}
	echo "<br><hr><br>";
	$i=0;
	while ($i <= $tamanho) {
		$vet[$i] = ($i * 10);
		echo "$vet[$i]<br>";
		$i++;
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Aula 07</title>
</head>
<body>

	
</body>
</html>