<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
      <link rel="stylesheet" href="Style.css">
  </head>
  <body>
    <h2>Calcular la paga neta de un trabajador conociendo el número de horas trabajadas,
la tarifa horaria y la tasa de impuesto.</h2>

<?php
$HTI=array(100,15000,100000);
$sueldo=$HTI[0]*$HTI[1]-$HTI[2];
echo "El sueldo del trabajador es: $sueldo";
 ?>

  </body>
</html>
