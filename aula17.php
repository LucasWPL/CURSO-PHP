<?php
    //ISSET
    if(isset($_POST["f_nome"])){
        $nome = $_POST["f_nome"];
        echo "Nome: $nome";
    }else{
        echo "Os dados ainda não foram enviados."
    

?>

<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Aula 17</title>
</head>
<body>

        <form name="f_form" method="post"; action="aula17.php">
            <label>Nome</label>
            <input type="text" name="f_nome"></input>
            <br>
            <input type="submit" value="Enviar"></input>

        </form>
	
</body>
</html>

<?php  
    }
?>