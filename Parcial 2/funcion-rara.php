<!-- Alexis Ortiz Lopez 4to Programacion -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
                
                function f($x) {
                    if($x <= 0) {
                        return $x * $x - $x;
                    }
                    return -($x * $x) + (3 * $x);
                }

                echo "<h3 style='margin-top: 7em;'>
                        El resultado para x = " . $x . " es:
                    </h3> 
                    <br>";

                echo "<p>" . f($x) . "</p>";
            }
        ?>
    </section>

    <footer>
        <p>Alexis Ortiz Lopez 4to Programacion</p>
    </footer>
    
</body>
</html>

  