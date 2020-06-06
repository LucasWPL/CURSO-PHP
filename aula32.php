<?php
    // Select 
    include "conexao.inc";
    
    if(isset($_POST["f_cat"])){
        $vcat = $_POST["f_cat"];
    }else{
        $vcat = 0;
    }
    $sql = "SELECT * FROM tb_produtos WHERE cat = $vcat";
    $res = mysqli_query($con,$sql);
    $num = mysqli_affected_rows($con);
    if ($vcat != 0){
        echo "--->".$num." produtos cadastrados nessa categoria.";
    }else{

    }
    mysqli_close($con);
    
?>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Aula 32</title>
    </head>
    <body>
        <fieldset>
                <table align="center">
                    <form method="post" name="CATEG" action="aula32.php">
                        <tr>
                            <td><label>Categoria: </label></td>
                            <td><input type="text" name="f_cat" size="40" maxlength="30"/><br></td>
                        </tr>
                        <tr>
                            <td><br><input type="submit" value="Salvar"/></td>
                            <td><br><input type="reset" value="Limpar"/></td>
                        </tr>
                    </form>
                </table>
            </fieldset>
    </body>
</html>