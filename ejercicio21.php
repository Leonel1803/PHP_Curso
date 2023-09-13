<?php

$frutas = array("Fresa", "Pera", "Manzana"); //La variable "frutas" será un arreglo de strings
print_r($frutas);

echo "</br>Valor del indice '1': ".$frutas[1]; //Imprime el valor del indice '1' del arreglo "frutas"

echo "</br>";
for($i = 0; $i < 3; $i++){
    echo "</br>Valor del indice '".$i."': ".$frutas[$i];
}

?>