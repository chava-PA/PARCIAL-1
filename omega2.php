<html>
<head></head>
<body>
<h1>12618. Practicando con formulas</h1>

<h2>Descripción</h2>
Dado un valor real 
, quieres resolver una serie de ecuaciones hasta obtener 
el valor de z.


<h2>Entrada</h2>
Un real a Puedes suponer que 1 < a < 100


<h2>Salida</h2>
Un real que sea el valor de z
 impreso con tres puntos decimales.

<h2>Ejemplo</h2>

<?php
# CODIGO PHP 
$a=33.562;

# OPERACION
$x=3*$a + 15;
$y=($x+3) / ($x+1);
$z=(5*$x+7*$y) / ($a*$x*$y);


echo "<br>resultado z :", $z;
?>


</body>
</html>