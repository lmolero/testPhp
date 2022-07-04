<?php 

// * Enunciado: Crea un programa que invierta el orden de una cadena de texto sin usar funciones propias del lenguaje que lo hagan de forma automática.
// * - Si le pasamos "Hola mundo" nos retornaría "odnum aloH"

$cadena = "hola mundo"; 

$separa = str_split($cadena);
$arraySize = count($separa);


for ($i=1; $i <= $arraySize ; $i++) { 
    
    $position = $arraySize-$i;
    echo $separa[$position];
    
}