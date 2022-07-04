<?php 

for($i = 0 ; $i < 100 ; $i++ ){
    $divPorTres = $i % 3;
    $divPorCinco = $i % 5;
    if ($divPorTres == 0 && $divPorCinco == 0) {
        echo "FizzBuzz"."<br>";
    }
    elseif($divPorTres == 0){
        echo "fizz"."<br>";
    }
    elseif ($divPorCinco == 0) {
        echo "buzz"."<br>";
    }
    else{
        echo $i."<br>";
    }
   
}

