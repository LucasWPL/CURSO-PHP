<?php
  //Passagem de valores via URL
    $titulo = "Livros que estou lendo:";
    $livro1 = "O poder do hábito";
    $livro2 = "Do amor e outros demônios";
      echo "<a href=auxaula18.php?tit=".urlencode($titulo)."&liv1=".urlencode($livro1)."&liv2=".
      urlencode($livro2)." target=_self>PÁGINA AUXILIAR</a>";

?>

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Aula 18</title>
</head>
<body>

</body>
</html>