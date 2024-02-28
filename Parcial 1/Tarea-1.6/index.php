
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=}, initial-scale=1.0">
    <title>Sumando dos conjuntos</title>

</head>
<body>


    <style>

        * {
            text-align: center;
            
        }
        html {
            background-color: grey;
            font-family: arial;
        }
        h1 {
            color: blue;

        }
    </style>

    <h1>Sumando dos conjuntos</h1>


    <h3>Entrada</h3>
    <p>
        Un numero N, luego N enteros del primer conjunto, luego N enteros del segundo.
    </p>

    <h3>Salida</h3>
    <p>
        Los números resultantes de sumar ambos conjuntos.
    </p>

</body>
</html>


<?php 

    $n = rand(1, 100);
    $arr1 = array();
    $arr2 = array();
    for($i = 0; $i < $n; $i++) {
        array_push($arr1, rand(1, 1000));
        array_push($arr2, rand(1, 1000));
    }

    $suma = array();
    for($i = 0; $i < $n; $i++) {
        $suma[$i] = $arr1[$i] + $arr2[$i];
        
    }
    echo "El numero de elementos es: " . $n . "<br>";
    echo "El arreglo 1 es: <br>";

    foreach($arr1 as $e) {
        echo $e . " ";
    }
    echo "<br>El arreglo 2 es: <br>";

    foreach($arr2 as $e) {
        echo $e . " ";
    }

    echo "<br>El arreglo de la suma: <br>";


    foreach($suma as $e) {
        echo $e . " ";
    }




?>