<?php
    //Enviando e-mail
    $vmail = $_POST['emailarq'];
    $vassunto = $_POST['assuntoarq'];
    $vmensagem = $_POST['mensagemarq'];
   if( mail($vmail,$vassunto,$vmensagem)){
       echo "Mensagem enviada com sucesso.<br>";
       echo "<a href='aula26.php'>Voltar</a>";
   }else{
       echo "Ocorreu algum erro, tente novamente.";
   }


?>

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Aula 26</title>
</head>
<body>
</body>
</html>