<?php 

$cadena = "hola mundo de hoy tan lindo y lindo dia tengas hoy";

$separa =  explode(" ", $cadena);

$contador = array_count_values($separa);
print_r( $contador);
