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
       
      function soma($n1, $n2)
      {
         $soma = $n1 + $n2;
         echo "O resultado da soma é $soma";
      }

       $n1 = $_GET["n1"];
       $n2 = $_GET["n2"];

        soma($n1, $n2);
        
      function RetornaSoma($n1, $n2)
       {
         $rsoma = $n1 + $n2;
         return $rsoma;
       }

       function SomaM(){
          $num = func_get_args();
          $indice = func_num_args();
          $sum = 0;

          for($i = 0;$i < $indice; $i++){
             $sum = $sum + $num[$i];
          }
          return $sum;
      }

   function Valor($val){
         $val = $val + 15;
         echo "<br> A resposta é: $val";
      }

      $val2  = 10;
      Valor($val2);

      function Ref(&$ref){
         $ref = $ref + 15;
         echo "<br> A resposta é: $ref";
      }

      $ref2  = 18;
      Valor($ref2);


      $resposta1 = SomaM(1,5,1,5,8,1,7,1,4,5);
      echo "<br> A resposta é: $resposta1";

       $resposta = RetornaSoma($n1, $n2);
       echo "<br>O resultado do retorno é $resposta";
    ?>

     

<a href="index.html"><button>Clique para voltar</button></a>
</div>
</body>
</html>
 