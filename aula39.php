<?php

    $vnome = $_POST['f_usu'];
    $vsenha = $_POST['f_senha'];

    include "conexao.inc";

    $sql = "SELECT * FROM tb_cadastro WHERE nome='$vnome' and senha='$vsenha'";
    $res = mysqli_query($con,$sql);
    ;

    if ($num =  mysqli_affected_rows($con)>0) {
        $num = rand(1000000000,9000000000);
        setcookie("secao",$num);
        header("Location:aula39b.php?doka=$num");
    }else{
        echo "Usuário ou senha errado.";
    }
    mysqli_close($con);
?>