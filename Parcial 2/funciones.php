<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=ABeeZee" rel="stylesheet">
</head>
<body>
    <div class="titulo">
        <div id="img">
            <a href="index.html">
                <img src="img/bandera.png" onmouseover="this.src='img/bandera2.png';" onmouseout="this.src='img/bandera.png'">
            </a>
        </div>
        <nav class="fondo-titulo">
            <h2>Programacion del lado del sevidor</h2>
        </nav>
    </div>

    <section id="contenido" style="min-height:500px;">
        <?php 
            if($_POST) {
                
                $x = $_POST["txtX"];
                $y = $_POST["txtY"];
                $z = $_POST["txtZ"];
                # -10, -4, 18 
                function f($a) {
                    return ( 4 * ( $a * $a * $a ) ) + g( 2 * $a, -3 * $a );
                }
                function g($b, $c) {
                    return (float) ( 7 * $b - 3 ) % ( $c * $c + 1 );
                }
                function h($x, $y, $z) {
                    return f( (float) $x / $y ) + 3 * g( (float) $z / $y, $x );
                }

                echo "<h3 style='margin-top: 7em;'>
                        El resultado para <br> x = " . $x . " <br>
                        y = " . $y . "<br> z = " . $z . " es: 
                      </h3> 
                    <br>";

                echo f((float)$x / $y ). " " . g((float)$z / $y, $x) . "<br>";
                // echo ?]
                echo "<p>" . h($x, $y, $z) . "</p>";
                
            }
        ?>
    </section>

    <footer>
        <p>Alexis Ortiz Lopez 4to Programacion</p>
    </footer>


</body>
</html>
