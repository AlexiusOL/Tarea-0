<!-- Alexis Ortiz Lopez 4to Programacion -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=ABeeZee" rel="stylesheet">
</head>
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
                $s = $_POST["txtS"];
                
                function f($s) {
                    $cnt = 0;
                    for($i = 0; $i < strlen($s); $i++) {
                        switch($s[$i]) {
                            case 'Q':
                            case 'A':
                            case 'Z':
                                $cnt++;
                                break;
                            case 'W':
                            case 'S':
                            case 'X':
                                $cnt += 2;
                                break;
                            case 'E':
                            case 'D':
                            case 'C':
                                $cnt += 3;
                                break;
                            case 'R':
                            case 'F':
                            case 'V':
                                $cnt += 4;
                                break;
                            case 'T':
                            case 'G':
                            case 'B':
                                $cnt += 5;
                                break;
                            case 'Y':
                            case 'H':
                            case 'N':
                                $cnt += 6;
                                break;
                            case 'U':
                            case 'J':
                            case 'M':
                                $cnt += 7;
                                break;
                            case 'I':
                            case 'K':
                                $cnt += 8;
                                break;
                            case 'O':
                            case 'L':
                                $cnt += 9;
                                break;
                        }
                    }
                    return $cnt;
                }

             

                echo "<h3 style='margin-top: 7em;'>
                        El resultado para s = " . $s . " es: 
                    </h3> 
                    <br>";

                echo "<p>" . f($s) . "</p>";
            }
        ?>
    </section>

    <footer>
        <p>Alexis Ortiz Lopez 4to Programacion</p>
    </footer>
</body>
</html>

