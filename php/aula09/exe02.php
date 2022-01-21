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
        if ($idade < 16) {
          $tipoVoto = "não vota";
        }
        elseif ($idade >=16 && $idade <18 || $idade >65) {
            $tipoVoto = "tem voto opcional";
          }
          else {
            $tipoVoto = "tem voto obrigatório";
          }
        echo "Para essa idade você $tipoVoto";

    ?>
    <a href="exe02.html">Voltar</a>
</div>
</body>
</html>
 