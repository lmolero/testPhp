<?php

$palabra1 = "mora";
$palabra2 = "amor";


function identicalValue ($palabra1, $palabra2){
    $boolVar = true;

    $arrayPalabra1 = str_split($palabra1);
    $arrayPalabra2 = str_split($palabra2);
    
    sort( $arrayPalabra1 );
    sort( $arrayPalabra2 );

    if ($arrayPalabra1 == $arrayPalabra2) {
       $boolVar = true;
    }else{
        $boolVar = false;
    }
    return $boolVar;
   
};

function comparaPalabras ($palabra1, $palabra2){
    $boolVar = true;

    $arrayPalabra1 = str_split($palabra1);
    $arrayPalabra2 = str_split($palabra2);

    $resultado = array_diff( $arrayPalabra1 ,  $arrayPalabra2);

    if ( count($resultado) != 0) {
       $boolVar = false;
    }
    else{
        $boolVar = true;
    }
    return   $boolVar;
};

$result = comparaPalabras( $palabra1 , $palabra2 );
print_r($result);

