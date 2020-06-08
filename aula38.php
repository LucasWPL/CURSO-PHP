<?php
    //comando update
    include "conexao.inc";

    //COMANDO SIMPLES, POR ISSO N VOU FAZER NADA ELABORADo
    $res = mysqli_query($con,"UPDATE tb_cadastro SET senha='123124' WHERE nome = 'Pedro Lucas'");
    mysqli_close($con);
?>