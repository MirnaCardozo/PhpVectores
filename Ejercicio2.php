<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Operaciones</title>
      <link rel="stylesheet" href="Style.css">
  </head>
  <body>
    <h2>Que pida dos enteros y muestre en pantalla la suma, resta, multiplicacion ,division y modulo</h2>
    <?php

$numeros= array(10,2);
$suma =$numeros[0]+$numeros[1];
$resta =$numeros[0]-$numeros[1];
$mult = $numeros[0]*$numeros[1];
$div =$numeros[0]/$numeros[1];
$mod =$numeros[0]%$numeros[1];
echo "La suma es=$suma<br>La resta es=$resta<br>La multiplicacion es=$mult <br> La division es=$div<br> El modulo es:$mod";

     ?>

  </body>
</html>
