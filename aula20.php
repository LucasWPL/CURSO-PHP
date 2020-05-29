<?php
    //CLASSES 01

    class Carro {
        var $nome;
        var $tipo;
        var $veloc;
        var $velocmax;
        var $liga;

        function Carro ($tp,$nm){
            $this -> liga = false;
            $this -> veloc = 0;
            $this -> nome = $nm;
            if($tp  == 1){
                $this-> tipo = "Popular";
                $this-> velocmax = 140;
            }else if($tp == 2){
                $this-> tipo = "Esportivo";
                $this-> velocmax = 290;
            }else{
                $this-> tipo = "Utilitário";
                $this-> velocmax = 100;
            }
        }

        function velocidade ($num){
            if($this -> liga == false){
                $this -> liga = true;
            }
            if ($num > $this -> velocmax){
                $this -> veloc = $this -> velocmax;  
            }else{
                $this -> veloc = $num;
            }
        }

        function ligar (){
            $this -> liga = true;
        }

        function desligar (){
            $this -> liga = false;
            $this -> veloc = 0;
        }


        function Id (){
            echo "<hr>";
            echo "Nome: ". $this-> nome;
            echo "<br>Tipo: ". $this-> tipo;
            echo "<br>Velocidade: ". $this-> veloc;
            echo "<br>Velocidade máxima: ". $this-> velocmax."<br>";
            if($this -> liga){
                echo "<font color = green>LIGADO</font>"; 
            }else {
                echo "<font color = red>DESLIGADO</font>";      
            }
            
            
        }

    }

    $carro1 = new Carro(2, "Bugatti Veron");

    $carro1 -> velocidade (120);
    $carro1 -> Id();
    $carro1 -> desligar();
    $carro1 -> Id();

?>

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Aula 20</title>
</head>
<body>
    
</body>
</html>