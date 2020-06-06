<?php

    include "conexao.inc";

    $vcod = $_POST["f_cod"];
    $vprod = $_POST["f_prod"];
    $vpreco = $_POST["f_preco"];
    $vest = $_POST["f_est"];

    $sql = "INSERT INTO tb_produtos VALUES('$vcod', '$vprod', $vpreco, $vest)";
    $res = mysqli_query($con, $sql);
    $linhas = mysqli_affected_rows($con);

    if ($linhas == 1){
        echo "Cadastro do produto efetuado com sucesso!";
    }else{
        echo "Ocorreu um erro no cadastro do produto. <br>Tente novamente.";
    }
    mysqli_close($con);
    
?>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Aula 31</title>
    </head>
    <body>
        <a href="formaula31.html">Voltar</a>
    </body>
</html>