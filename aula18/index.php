<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
 <itle>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
  <pre>
    <?php
        $pessoa = array(
          "nome" => "Yago",
          "idade" => 26,
          "sexo" => "Masc"
        );

        foreach ($pessoa as $campo => $valor) {
          # code...
          echo "O campo $campo possui $valor <br/>";
        }

        print_r($pessoa);
        var_dump($pessoa);

        $vetor(2,8,5,6,2);
        //adc um novo no final
        array_push($vetor,8);
        //remove o ultimo
        array_pop($vetor);
        unset($pessoa);
        //para ordenar
        sort($vetor);
        //ordenar ao contrario
        rsort($vetor);
        //ordena e mantem a assossiação
        asort($vetor);
        ?>
    </pre>
</div>
</body>
</html>
 