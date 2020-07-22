
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="_css/estilo.css"/>
</head>
<body>
<div>

<h1>Curso PHP</h1>


<?php

$nome = $_GET["nome"];
$ano = $_GET["ano"];
$idade = 2020 - $ano; 

echo "Olá $nome";
echo "Voce tem $idade";

?>
</div>


</body>
</html>