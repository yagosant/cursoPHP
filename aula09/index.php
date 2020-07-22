<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <itle>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <?php
        $ano = $_GET["ano"];
        $idade = date("Y") - $ano;

        if($idade < 18){
            echo "Voce pode dirigir pois tem $idade anos";
        }else{
          echo "Sinto muito voce não pode dirigir";
        }

        $n1 = $_GET["n1"];
        $n2 = $_GET["n2"];
        $media = ($n1 + $n2) / 2;

        if($media < 5){
          echo "Voce foi reprovado kkkkk, sua nota foi $media";
        }else if(($media >= 5) && ($media < 7)){
          echo "Voce esta de recuperação, sua nota foi $media";
        }else{
          echo "Voce passou seu nerd, sua nota foi $media";
        }



    ?>
</div>
</body>
</html>
 