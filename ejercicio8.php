<?php

    if($_POST){
        $valorA = $_POST['valorA'];
        $valorB = $_POST['valorB'];

        /*
        echo "Suma: ".($valorA + $valorB)."<br/>";
        echo "Resta: ".($valorA - $valorB."<br/>");
        echo "Multiplicación: ".($valorA * $valorB)."<br/>";
        echo "División: ".($valorA / $valorB."<br/>");
        */
        $Suma = $valorA + $valorB;
        $Resta= $valorA - $valorB;
        $Multiplicación = $valorA * $valorB;
        $División = $valorA / $valorB;

        echo "Suma: ".$Suma."<br/>";
        echo "Resta: ".$Resta."<br/>";
        echo "Multiplicación: ".$Multiplicación."<br/>";
        echo "División: ".$División."<br/>";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Aritméticos</title>
</head>
<body>
<form action="ejercicio8.php" method="post">
        Número A:
        <input type="text" name="valorA" id="">
        Número B:
        <input type="text" name="valorB" id="">
        <input type="submit" value="Calcular">
    </form>
</body>
</html>