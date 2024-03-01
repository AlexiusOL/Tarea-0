<!-- Alexis Ortiz Lopez 4to Programacion-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escalera de asteriscos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h2>Descripcion</h2>
    <p>
        Imprimir una escalera hehca de n asteriscos dado n.
    </p>
    <form action="escalera-de-asteriscos.php" method="post">
        <input type="text" name="txtN" class="texto"> <br>
        <input type="submit" value="Enviar" class="boton">
    </form>

    <?php 
        if($_POST) {
            $n = $_POST["txtN"];
            echo "<h3> Valor de n: " . $n . "<br>";
            for($i = 1; $i <= $n; $i++) {
                for($j = 1; $j <= $i; $j++) {
                    echo "#";
                }
                echo "<br>";
            }
            echo "</h3>";
        }
    ?>
</body>
</html>