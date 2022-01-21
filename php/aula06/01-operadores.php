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
        $preco = $_GET["p"];
        echo "O preço do produto é R$ $preco";
        $preco += 10*$preco/100;
        //$preco = $preco + (10*$preco/100);
        echo "<br>O novo preço com aumento de 10% é R$ $preco";
    ?>
</div>
</body>
</html>
 