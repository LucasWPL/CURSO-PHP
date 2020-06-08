
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Aula 36 e 37</title>
    </head>
    <body>
        <form action="aula36.php" align="center" method="POST">
            <table border="1" align="center">
                <thead>
                    <tr><th>Código</th>
                    <th>Nome</th>
                    <th>Select</th></tr>
                </thead>

                <?php
                    include "conexao.inc";
                    //VERIFICANDO SE O FORMULÁRIO JÁ FOI SUBMETIDO
                    if (isset($_POST['sel'])) {
                        //VERIFICANDO SE A CHECKBOX RECEBEU VALORES
                        foreach($_POST['sel'] as $codigo){
                            $sql = "DELETE FROM tb_cadastro WHERE id=$codigo";
                            $res = mysqli_query($con,$sql);
                        }
                        echo "Cadastro(s) deletado(s) com sucesso!";
                    }

                    //ESTRUTURANDO A TABELA A PARTIR DO BDD
                    $sql = "SELECT * FROM tb_cadastro ORDER BY id";
                    $res = mysqli_query($con,$sql);
                    
                    while ($vet= mysqli_fetch_row($res)){
                        $vcod = $vet[0];
                        $vnome = $vet[1];

                        echo "<tr><td>$vcod</td>".
                             "<td>$vnome</td>". 
                             //CHECKBOX PARA SABER O QUE O USUÁRIO QUER EXCLUIR
                             "<td align=center><input type=checkbox value=$vcod name=sel[]</td>";
                    }
                    mysqli_close($con);
                ?>
            </table>
            <input type="submit" value="Excluir" name="bt_excluir">
        </form>
    </body>
</html>