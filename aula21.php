<?php
    //CLASSES 02 - HERANÇAS E PRIVATE-PROTECTED
    class Casa {
        protected $var1 = "Porta";
        protected $var2 = "Luz";
        protected $var3 = "Piso";
        
        function listar (){
            echo "<hr><br>".$this-> var1."<br>".$this-> var2."<br>".$this->var3;
        }
    }

    class Quarto extends Casa{
        var $varq1 = "Cama";
        var $varq2 = "Guarda-Roupa";
        var $varq3 = "Ar-Condicionado";

        function listar2 (){
            echo "<br>".$this->var1."<br>".$this->var2."<br>".$this->var3;
            echo "<hr><br>".$this->varq1."<br>".$this->varq2."<br>".$this->varq3;
        }
    }

    $quartoOBJ = new Quarto();
    $casaOBJ = new Casa();

    //$casaOBJ -> listar();
    //$quartoOBJ -> listar();
    $quartoOBJ -> listar2 ();
?>

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Aula 21</title>
</head>
<body>
    
</body>
</html>