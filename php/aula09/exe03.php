<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
  <style>
    .destaque {
      color: darkred;
      font-weight: bold;
    }
  </style>
</head>
<body>
<div>
    <?php
        $nota1 = $_GET["n1"];
        $nota2 = $_GET["n2"];
        $media = ($nota1 + $nota2) / 2;
        

        if ($media < 5) {
          $sit =  "REPROVADO";
        }
        elseif ($media >= 5 && $media < 7) {
          $sit = "EM RECUPERAÇÃO";
        }
        else {
          $sit = "APROVADO";
        }
        echo "A média entre <span class='destaque'>$nota1</span> e <span class='destaque'>$nota2</span> é: <span class='destaque'>$media</span> <br>";
        echo "Situação do aluno: <span class='destaque'>$sit</span>";
    ?>
    <a href="exe03.html">Voltar</a>
</div>
</body>
</html>
 