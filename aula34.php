 <?php
    // Operando com LIKE 
    include "conexao.inc";
    
    //COMANDO PARA SELECIONAR OS ITENS QUE COMEÇAM COM M
    $sql = "SELECT * FROM tb_produtos WHERE prod LIKE 'm%' ";
    $res = mysqli_query($con,$sql);

    //CRIANDO A TABELA
    echo "<table border='1' align='center'>";
    echo "<thead>".
    "<tr><th>Código</th>".
    "<th>Produto</th>". 
    "<th>Preço</th>". 
    "<th>Estoque</th>". 
    "<th>Categoria</th>". 
    "</thead>";

    //LINHAS DA TABELA
    while($reg = mysqli_fetch_row($res)){
        $vcod = $reg[0];
        $vprod = $reg[1];
        $vpreco = $reg[2];
        $vestoque = $reg[3];
        $vcateg = $reg[4];

        echo "<tr><td>$vcod</td>". 
        "<td>$vprod</td>". 
        "<td>$vpreco</td>". 
        "<td>$vestoque</td>". 
        "<td>$vcateg</td></tr>";
    }
    mysqli_close($con);
    
?>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Aula 34</title>
    </head>
    <body>
    </body>
</html>