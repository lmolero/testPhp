<?php

function esPrimo($num){

    if(!is_numeric($num)){
    //Comprobamos si es un número valido
    return false;
    }


    if($num < 2){
        return false;
    }
   

    for ($i=2; $i < $num; $i++) { 

            if (($num % $i) == 0) {
            return false;    
            }
    }
  
   return true;
}

$num =2;
if (esPrimo($num)) {
    echo $num." "."es primo"."<br>";
}
else {
    echo $num." "."no es primo"."<br>";
} 

for ($i=2; $i <= 100; $i++) { 
    if (esPrimo($i)) {
        echo $i."<br>";
    } 
}
?>