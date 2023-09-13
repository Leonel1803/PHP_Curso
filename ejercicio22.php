<?php

$frutas = array("f"=>"Fresa", "m"=>"Manzana", "p"=>"Pera"); //Estamos asignando diferentes indices del arreglo; el indice de "Fresa" ahora es 'f', el indice de "Manzana" ahora es 'm', el indice de "Pera" ahora es 'p'
print_r($frutas);

echo "</br>Valor del indice 'f': ".$frutas["f"]; //Imprime el valor del indice 'm' del arreglo "frutas"
echo "</br>";

foreach($frutas as $i=>$valor){ //"valor" tomará el valor de cada posición del arreglo e "i" tomara el número de indice de cada posición
    echo "</br>Valor del indice '".$i."': ".$valor;
}

?>