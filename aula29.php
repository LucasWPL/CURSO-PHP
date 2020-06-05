<?php
    // COMANDOS PRIMÁRIOS 2
    include "conexao.inc";

    $res = mysqli_query($con, "SELECT * FROM tb_cadastro");
    $linhas = mysqli_num_rows($res);

    echo "A quantidade de cadastros é igual a: ".$linhas;

    mysqli_close($con);
    
?>

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Aula 29</title>
</head>
<body>
</body>
</html>