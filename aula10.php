<?php
	//FOREACH
	$vet = array("moto","carro","bike","caminhão","navio","avião");
    
    foreach ($vet as  $veiculo) {
        echo"$veiculo<br>";
        if ($veiculo=="bike") {
            echo "Existe bicicleta na lista!";
        break;
        
        }
    }
	echo "<br><hr><br>";

	foreach ($vet as $veiculo) {
        echo"$veiculo<br>";
    }

?>

<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Aula 10</title>
</head>
<body>

	
</body>
</html>