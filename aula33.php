<?php
    // Select 
    include "conexao.inc";
    
    //VERIFICANDO SE RECEBEU UM VALOR NA VCAT
    if(isset($_POST["f_cat"])){
        $vcat = $_POST["f_cat"];
    }else{
        $vcat = 0;
    }

    //COMANDO PARA SELECIONAR TODOS OS ITENS DA CATEGORIA INFORMADA
    $sql = "SELECT * FROM tb_produtos WHERE cat = $vcat";
    $res = mysqli_query($con,$sql);
    
    if ($vcat != 0){
        //CRIAÇÃO DA TABELA
        echo "<table border='1' align='center'>";
        echo "<thead>".
        "<tr><th>Código</th>".
        "<th>Produto</th>". 
        "<th>Preço</th>". 
        "<th>Estoque</th>". 
        "<th>Categoria</th>". 
        "</thead>";
        while($reg = mysqli_fetch_row($res)){
            //VALORES DA TABELA
            $vcod = $reg[0];
            $vprod = $reg[1];
            $vpreco = $reg[2];
            $vestoque = $reg[3];
            $vcateg = $reg[4];

            //LINHAS DA TABELA
            echo "<tr><td>$vcod</td>". 
            "<td>$vprod</td>". 
            "<td>$vpreco</td>". 
            "<td>$vestoque</td>". 
            "<td>$vcateg</td></tr>";
            
        }
    }else{

    }
    mysqli_close($con);
    
?>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Aula 33</title>
    </head>
    <body>
    </body>
</html>