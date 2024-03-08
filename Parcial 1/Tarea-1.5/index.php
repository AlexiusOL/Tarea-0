<!-- Alexis Ortiz Lopez 4to Programacion  -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manejo de Arreglos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Manejo de Arreglos</h1>
    <?php 

        $calificaciones = array();
        $n = rand(1, 1000);
        $sum = 0;
        $reprobados = 0;
        $aprobados = 0;
        $suma_de_distancia_a_la_media = 0;

        for($i = 0; $i < $n; $i++) {
            array_push($calificaciones, rand(0, 10));
            $sum += $calificaciones[$i];
            if($calificaciones[$i] < 6) {
                $reprobados++;
            }
            else {
                $aprobados++;
            }
            
        }
        $prom = round($sum / $n, 2);

        $mayor_al_promedio = 0;
        for($i = 0; $i < $n; $i++) {
            if($calificaciones[$i] >= $prom) {
                $mayor_al_promedio++;
            }
            $suma_de_distancia_a_la_media += pow(abs(($calificaciones[$i] - $prom)), 2);
        }

        $porcentaje_reprobados = round(($reprobados / $n) * 100, 0);
        $porcentaje_aprobados = round(($aprobados / $n) * 100, 0);
        $desviacion_estandar = ( sqrt($suma_de_distancia_a_la_media / $n) );

        echo "<p>";
        echo "<span class='resultados'>Promedio: </span>" . $prom . "<br>";
        echo "<span class='resultados'>Alumnos con calificaciones mayores o iguales al promedio: </span>" . $mayor_al_promedio . "<br>";
        
        echo "<span class='resultados'>Cantidad de alumnos reprobados: </span>" . $reprobados; 
        echo "<span class='resultados'> Porcentaje: </span>" . $porcentaje_reprobados . "%<br>";
        echo "<span class='resultados'>Cantidad de alumnos aprobados: </span>" . $aprobados; 
        echo "<span class='resultados'> Porcentaje: </span>" . $porcentaje_aprobados . "%<br>";

        echo "<span class='resultados'>Desviacion estandar: </span>" . $desviacion_estandar . "<br>";
        echo "</p>";
        
        // foreach($calificaciones as $cal) echo $cal . "; ";

        echo "<table border='1' cellspacing='2'>";
        $cnt = 0;

        foreach ($calificaciones as $cal) {
            if ($cnt % 30 == 0) 
                echo "<tr>";
            echo "<td>" . $cal . "</td>";

            if($cnt % 30 == 29)
                echo "</tr>";

            $cnt++;
        }

        echo "</table>";

    ?>
</body>
</html>

