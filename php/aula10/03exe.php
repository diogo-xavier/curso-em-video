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
        $estado = $_GET["estado"];
         switch ($estado) {
          case am:
          case ap:
          case pa:
          case rr:
          case ro:
          case ac:
          case to:
            echo "Você mora na Região Sudeste";
            break;
          
        }
    ?>
</div>
</body>
</html>
 