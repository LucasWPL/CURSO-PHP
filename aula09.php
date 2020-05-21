<?php
	//FOR
	$i=0;
	$tam=5;
	$vet = array($tam);
	for ($i=0; $i < $tam ; $i++) { 
		echo "Valor de I: $i<br>";
		}
	echo "<br><hr><br>";

	for ($i=0; $i < $tam; $i++) { 
		$vet[$i] = ($i*$tam);
	}
	
	for ($i=0; $i < $tam; $i++) { 
		echo "Posição: $i - Valor da posição = $vet[$i]<br>";
	}


?>

<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Aula 09</title>
</head>
<body>

	
</body>
</html>