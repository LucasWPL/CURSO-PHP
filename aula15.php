<?php
    //Manipulação de data
    date_default_timezone_set('America/Sao_Paulo');
    $dia = date("d");
    $mes = date("m");
    $ano = date("Y");

    // echo $dia." / ".$mes." / ".$ano;
   
    $meses = array("Janeiro","Fevereiro","Março","Abril","Maio","Junho","Julho","Agosto","Setembro","Outubro","Novembro","Dezembro");
   
    echo $dia." de ".$meses[$mes-1]." de ".$ano."   ";
    $hora = date("H"); 
    $minuto = date("i");
    $segundo = date ("s");

    echo $hora.":".$minuto.":".$segundo;
?>

<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Aula 15</title>
</head>
<body>

	
</body>
</html>