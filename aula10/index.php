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
        $num = $_GET["num"];
        $tam = $_GET["tam"];
        $operacao;

        switch ($tam) {
          case 'dobro':
            # code...
            echo "O dobro do numero é ". pow($num, 2);
            break;
            case 'cubo':
            echo "O Cubo do numero é ". pow($num, 3);
            break;
            case 'raiz':
              echo "A raiz do numero é ". sqrt($num);
              break;
          default:
            # code...
              echo "Error";
          
        }
    ?>
</div>
</body>
</html>
 