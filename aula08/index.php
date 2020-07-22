<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
<?php 
    $nome = isset($_GET["nome"])? $_GET["nome"]: "NÃO INFOMRADO";
    $tam = isset($_GET["tam"])? $_GET["tam"]: "12pt";
    $cor = isset($_GET["cor"])? $_GET["cor"]: "#000000";
?>
  <meta charset="UTF-8"/>
  <style>
    span.texto{
      font-size: <?php  echo $tam; ?>;
      color: <?php echo $cor; ?>;
    }
  </style>
  <itle>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <?php
      
      $ano = isset($_GET["ano"])?  $_GET["ano"]: "NÃO INFOMRADO";
      $sexo = isset($_GET["sexo"])?  $_GET["sexo"]: "NÃO INFOMRADO";
      $idade = date("Y") - $ano;

      echo "Olá <span class = 'texto'>$nome</span> você tem $idade, parabens";
    ?>  
    <br>
    <a href="index.html"><button> Voltar ao inicio</button></a>

    
</div>
</body>
</html>
 