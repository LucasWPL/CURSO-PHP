<?php

    include "conexao.inc";

    if (isset($_COOKIE['secao'])) {
        if ($_GET['doka'] != $_COOKIE['secao']) {
            echo "Seção encerrada.<br><a href='formaula39.html'>Efetue o login novamente.</a>";
            exit;
        }
        echo "entramo";
    }
    mysqli_close($con);
?>