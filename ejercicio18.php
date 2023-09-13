<?php

$nRandom = rand(1,20); //rand es una función propia de php para generar números aleatorios
//rand(int $min, int $max)

if(($nRandom % 2) == 0){
    echo "El número es par";
}
else{
    echo "El número es impar";
}

?>