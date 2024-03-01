<!-- Alexis Ortiz Lopez 4to Programacion-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=s, initial-scale=1.0">
    <title>Calculos condicionales</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Descripcion</h2>
    <p>Dado un número inicial n, realizar las operaciones</p>

    <h2>Salida</h2>
    <p>
        Dos enteros que correspondan con el valor final de n y el número de veces que 
        fue modificado respectivamente
    </p>
    
    <form action="calculos-condicionales.php" method="post">
        <input type="text" name="txtN" class="texto"> <br>
        <input type="submit" value="Enviar" class="boton">
    </form>

    <?php 
        if($_POST) {
            $n = $_POST["txtN"];
            $cnt = 0;

            if($n % 2 == 0) {
                $n /= 2;
                $cnt++;
            }
            else {
                $n++;
                $cnt++;
            }

            if(strlen(strval($n)) >= 3) {
                $n /= 3;
                $cnt++;
            }
            elseif(strlen(strval($n)) == 2) {
                $n /= 10;
                $cnt++;
            }

            if($n % 3 == 0) {
                $n--;
                $cnt++;
            }
            echo "<h3> El valor de n: " . $n . "</h3>";
            echo "<h3> Resultado : <br>" . $n . "<br>" . $cnt . "</h3>";



        }
    ?>

</body>
</html>