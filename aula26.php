<?php
    //Enviando e-mail

?>

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Aula 26</title>
</head>
<body>
    <fieldset>
        <table style="padding: 20;" align=center>
            <form name="email" method="post" action="envia.php">
                <tr>
                    <td><label>E-mail:  </label></td>
                    <td><input type="email" name="emailarq"></td>
                </tr>
                
                <tr>
                    <td><label>Assunto:</label></td> 
                    <td><input type="text" name="assuntoarq"></td>
                </tr>
                
                <tr>
                    <td><label>Mensagem:</label></td>
                    <td><textarea name="mensagemarq" rows="5" cols="20">Esta é uma mensagem automática enviado por meio de um formulário HTML tendo como base de programação o PHP.</textarea></td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit">
                    </td>
                </tr>
            </form>
        </table>
    </fieldset>
</body>
</html>