<?php //Se puede meter dentro de un documento php código html

    //Recibir información del formulario HTML (Método POST)
    if($_POST){ //La condicional dicta que, si se ejecuta el meoto POST entonces swe ejecute lo que esté dentro del bloque
        //Se hace el condiconal para que no haya error en la impresión debido a que "nombre" al iniciare no tiene valor y eso genera un bug
        $nombre = $_POST['txtNombre']; //%nombre es una variable

        echo "Hola ".$nombre;
    }
?>

<!DOCTYPE html> <!--Si no se abre la etiqueta php con sus intrucciones, el navegador simplemente interpreta el archivo php como un archivo html-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ejercicio2.php" method="post"> <!--action="ejercicio2.php, dicta que se vaya a ese documento. method="post", es el método que utiliza para mandar infromación-->
        Nombre:
        <input type="text" name="txtNombre" id=""> <!--La información que se va a enviar es este input con el nombre "txtNombre"-->
        <input type="submit" value="Enviar"> <!--Este botón hace este envío-->
    </form>
</body>
</html>