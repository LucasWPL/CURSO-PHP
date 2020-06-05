<?php
    // COMANDOS PRIMÁRIOS
    include "conexao.inc";
    $vnome="Pedro Lucas";
    $vusername="LucasWPL6";
    $vsenha="0000";
    
    $sql = "INSERT INTO tb_cadastro VALUES (NULL, '$vnome', '$vusername', '$vsenha')";
    $res = mysqli_query($con,$sql);
    $num = mysqli_affected_rows($con);

    echo $num." regristros alterados.";
    
    mysqli_close($con);
    
?>

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Aula 30</title>
</head>
<body>
</body>
</html>