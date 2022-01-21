<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <?php
        $valor = $_GET["v"];
        $raizq = sqrt($valor);
        echo "A raiz quadrada de $valor é: ". number_format($raizq, 2);
    ?>
    <a href="01exercicio.html">Voltar</a>
</div>
</body>
</html>
 