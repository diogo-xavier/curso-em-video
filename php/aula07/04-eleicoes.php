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
      $ano = $_GET["an"];
      $idade = 2021 - $ano;
      echo "Quem nasceu em $ano tem $idade anos.<br/>";
      $tipo = ($idade>=18 && $idade<65)?"Voto Obrigatório":"Voto Não Obrigatório";
      echo "$tipo";
        
    ?>
</div>
</body>
</html>
 