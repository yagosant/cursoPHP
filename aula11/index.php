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
       $num = 1;

       while($num <=5){
        echo "<form action='index.php' method='get'>";
       echo "$num -  <input type='text' id='nome' name='nome' required = 'true' ><br>";  
      echo "</form>";
         $num++;
       }
    ?>

<a href="index.html"><button>Clique para voltar</button></a>
</div>
</body>
</html>
 