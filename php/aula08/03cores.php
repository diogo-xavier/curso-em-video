<!DOCTYPE html>
<html>
<head>
  <?php
        $txt = $_GET["t"];
        $tam = $_GET["tam"];
        $cor = $_GET["cor"];

        echo "$texto";
  ?>

  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>

  <style>

    .texto {
      font-size: <?php echo "$tam"; ?> ;
      color: <?php echo "$cor"; ?> ;
    }

  </style>
  
</head>
<body>
<div>
    <?php
      echo "<span class='texto'>$txt</span>"
    ?>
    <a href="03exercicio.html">Voltar</a>
</div>
</body>
</html>
 