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
    <h2>Entrada</h2>
    <p>La entrada consiste de una sola línea con una secuencia de siete bits 0 o 1.</p>

    <h2>Salida</h2>
    <p>
        La salida es la misma secuencia de siete bits de la entrada más el bit de paridad par. 
        Dicho bit de paridad se agrega al lado derecho.
    </p>
    
    <form action="bit-de-paridad.php" method="post">
        <input type="text" name="txt" class="texto"> <br>
        <input type="submit" value="Enviar" class="boton">
    </form>
    <button class="boton"><a href="index.php">Volver</a></button>
    <?php 
        if($_POST) {
            $pal = $_POST["txt"];
            $cnt = 0;
            
            echo "<p>String: " . $pal . "<br>";
            for($i = 0; $i < strlen($pal); $i++) {
                if($pal[$i] == '1') $cnt++;
                echo $pal[$i];
            }

            if($cnt % 2 == 0) echo "0";
            else echo "1";

            echo "</p>";
        }
    ?>
</body>
</html>