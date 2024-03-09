<!-- Alexis Ortiz Lopez 4to Programacion  -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Descripcion</h2>
    <p>
        A Miguel le encanta la letra "d" y quiere saber cuántas se va a poder comer de un paquete que la escuela proporciona a todos sus alumnos.
        El paquete que la escuela entrega es una palabra con letras minúsculas del alfabeto.
    </p>

    <h2>Salida</h2>
    <p>La cantidad de veces que aparece la letra favorita de Miguel.</p>
    
    <form action="adquisicion-de-letras.php" method="post">
        <input type="text" name="txt" class="texto"> <br>
        <input type="submit" value="Enviar" class="boton">
    </form>
    <button class="boton"><a href="index.php">Volver</a></button>

    <?php 
        if($_POST) {
            $pal = $_POST["txt"];
            $cnt = 0;

            for($i = 0; $i < strlen($pal); $i++) 
                if($pal[$i] == 'd') $cnt++;
            
            echo "<p>";
            echo "String: " . $pal . "<br>";
            echo "Letras d: " . $cnt. "</p>";

        }
    ?>
</body>
</html>