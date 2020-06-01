<?php
    //CLASSES 04 - INTERFACE 

    interface CarroPadrao {
        function id ();
        function liga ();
        function desliga ();
    }

    abstract class CarroBase implements CarroPadrao{
        public $potencia;
        public $torque;
        public $portas;
        public $velmax;
        public $ligado = false;
        
        function liga (){
            $this-> ligado = true;
        }

        
        function desliga (){
            $this-> ligado = false;
        }

        function id (){
            echo "<hr>Potência: ".$this-> potencia."cv<br> Torque: ".$this-> torque." n.M<br> Velocidade Máxima: ".$this-> velmax." Km/h<br> Portas: ". $this-> portas."<br>";
            if ($this-> ligado){
                echo "<font color=green>Carro ligado</font>";
            }else{
                echo "<font color=red>Carro desligado</font>";
            }
            echo "<hr>";
        }
    }

    class Carro extends CarroBase{
        function Carro ($pot,$tq,$pt,$vm){
            $this-> potencia = $pot;
            $this-> torque = $tq;
            $this-> portas = $pt;
            $this-> velmax = $vm;
            $this-> id();
        }
    }

    $carro1 = new Carro(500,450,2,200);
    $carro2 = new Carro(400,350,4,299);
    $carro3 = new Carro(300,250,2,99);
    $carro4 = new Carro(200,150,4,199);

    $carro2->liga();
    $carro2->id();

?>

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Aula 23 </title>
</head>
<body>
    
</body>
</html>