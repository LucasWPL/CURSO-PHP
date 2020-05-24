<?php
    //FUNÇÕES
    //ESTÁ COM UM ERRO PROVAVELMENTE RELACIONADO AS VARIÁVEIS, QUE ESTÃO DANDO PROBLEMA NA FUNÇÃO MEDIA
    function aula()
    {
        echo "<hr>Hello WORLD<hr>";
        echo "Aula 12.<br>";        
    }
    aula();

    function soma ($num1,$num2)
    {
        $res = $num1+$num2;
        echo "<br>Soma de $num1+$num2 = $res<br>";
    }
    soma(121,79);

    function soma2($num1,$num2)
    {
        $res = $num1 + $num2;
        return $res;
    }
    $resu = soma2(12,90);
    

    $nota = array(10,7,6,3);  
    function media ($val)
    {
          
        $tam = count($nota);
        $soma = 0;
        for ($i=0; $i<$tam; $i++){
            $soma = $soma + $nota[$i]; 
        }
        echo "Soma de todos elementos da array = $soma";
        return ($soma/$tam);
    }
    
    $med = media ($nota);
     echo "Média geral daas notas: $med";
?>

<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Aula 12</title>
</head>
<body>

	
</body>
</html>