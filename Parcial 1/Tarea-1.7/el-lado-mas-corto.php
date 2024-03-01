<!-- Alexis Ortiz Lopez 4to Programacion-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>El lado mas corto</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h2>Descripcion</h2>
    <p>
        Dadas las coordenadas de los vértices de un cuadrilátero, calcule la longitud de su lado más corto.
    </p>

    <h2>Entrada</h2>
    <p>
        Ocho reales x1, y1, x2, y2, x3, y3, x4, y4.
    </p>
    <form action="el-lado-mas-corto.php" method="post">
        <input type="text" name="txtX1" class="texto">
        <input type="text" name="txtY1" class="texto">
        <input type="text" name="txtX2" class="texto">
        <input type="text" name="txtY2" class="texto">
        <input type="text" name="txtX3" class="texto">
        <input type="text" name="txtY3" class="texto">
        <input type="text" name="txtX4" class="texto">
        <input type="text" name="txtY4" class="texto">

        <input type="submit" value="Enviar" class="boton">
    </form>

    <?php 
        if($_POST) {
            $x1 = $_POST["txtX1"];
            $y1 = $_POST["txtY1"];
            $x2 = $_POST["txtX2"];
            $y2 = $_POST["txtY2"];
            $x3 = $_POST["txtX3"];
            $y3 = $_POST["txtY3"];
            $x4 = $_POST["txtX4"];
            $y4 = $_POST["txtY4"];

            $a = sqrt((pow($x2 - $x1, 2)) + (pow($y2 - $y1, 2)));
            $b = sqrt((pow($x3 - $x2, 2)) + (pow($y3 - $y2, 2)));
            $c = sqrt((pow($x4 - $x3, 2)) + (pow($y4 - $y3, 2)));
            $d = sqrt((pow($x4 - $x1, 2)) + (pow($y4 - $y1, 2)));

            echo "<h3>x1: " . $x1 . "<br>";
            echo "y1: " . $y1 . "<br>";
            echo "x2: " . $x2 . "<br>";
            echo "y2: " . $y2 . "<br>";
            echo "x3: " . $x3 . "<br>";
            echo "y3: " . $y3 . "<br>";
            echo "x4: " . $x4 . "<br>";
            echo "y4: " . $y4 . "<br>";

            if($a < $b && $a < $c && $a < $d)
                echo "Resultado: " . $a;
            elseif ($b < $c && $b < $d)
                echo "Resultado: ". $b;
            elseif ($c < $d)
                echo "Resultado: " . $c;
            else 
                echo "Resultado: " . $d;
            echo "</h3>";
        }


    ?>
</body>
</html>
