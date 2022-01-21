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
        $ano = $_GET["ano"];
        $idade = date("Y") - $ano;
        echo "Você nasceu em $ano e tem $idade anos.<br>";
        if ($idade>=18) {
          $voto = "já pode votar";
          $dirigir = "já pode dirigir";
        }
        else {
          $voto = "não pode votar";
          $dirigir = "não pode dirigir";
        }
        echo "Com essa idade você $voto e $dirigir"

    ?>
    <a href="exe01.html">Voltar</a>
</div>
</body>
</html>
 