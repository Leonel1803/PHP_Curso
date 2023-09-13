<?php

    if($_POST){
        $valorA = $_POST['valorA'];
        $valorB = $_POST['valorB'];

        if(($valorA > $valorB)){
            echo "El valor de A es mayor que el valor de B";
            if(($valorA > 0)){
                echo " y el valor de A es mayor a 0";
            }
            else{
                echo " y el valor de A es menor a 0";
            }
        }
        else if(($valorA == $valorB)){
            echo "El valor de A es igual que el valor de B";
            if(($valorA > 0)){
                echo " y el valor de A es mayor a 0";
            }
            else{
                echo " y el valor de A es menor a 0";
            }
        }
        else if (($valorA < $valorB)){
            echo "El valor de A no es mayor que el valor de B";
            if(($valorA > 0)){
                echo " y el valor de A es mayor a 0";
            }
            else{
                echo " y el valor de A es menor a 0";
            }
        }
    }
    /*
    Operadores lógicos:
    || operador de OR
    && operador de AND
    ! operador de NOT
    */

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bloques de condiciones</title>
</head>
<body>
<form action="ejercicio11.php" method="post">
        Número A:
        <input type="text" name="valorA" id="">
        Número B:
        <input type="text" name="valorB" id="">
        <input type="submit" value="Calcular">
    </form>
</body>
</html>