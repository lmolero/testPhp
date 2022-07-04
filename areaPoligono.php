<?php
echo "<form method='post'>";
echo "<label>"."Introduce tipo de poligono"."</label>";  
echo "<input type='text' name='poligono'></input>"."<br>";
echo "<label>"."Introduce los valores correspondientes del poligono para calcular el area"."</label>"."<br>"; 
echo "<label>"."base"."</label>";  
echo "<input type='text' name='base'></input>";
echo "<label>"."altura"."</label>";  
echo "<input type='text' name='altura'></input>"; 
echo "<label>"."lado"."</label>";  
echo "<input type='text' name='lado'></input>"; 
echo "<input type='submit' name='submit'></input>";
echo "<form>"; 

if (($_POST['poligono']) !=null) {
  $poligono = $_POST['poligono'];
  echo calculaAreaPoligono($poligono);

}

function calculaAreaPoligono($poligono){
    $area = 0;

    if (strtolower($poligono) == "triangulo" ) {

        if (($_POST['base']) && ($_POST['altura']) !=null) {
            $base = $_POST['base'];
            $altura = $_POST['altura'];
            $area =  ($base * $altura) / 2;
            return $area;
            }
        }
        if (strtolower($poligono) == "cuadrado") {
            $lado = $_POST['lado'];
            $area =  pow($lado,2);
            return $area;
        }
        if (strtolower($poligono) == "rectangulo" ) {
        $base = $_POST['base'];
            $altura =$_POST['altura'];
            $area =  ($base * $altura);
            return $area;
        }

    return $area;
}