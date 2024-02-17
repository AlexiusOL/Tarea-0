<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Colegiatura</title>
</head>
<body>
    <style>
        body {
            margin: 5px auto;
            width: 900px;     
        }
        h1 {
            text-align: center;
        }
        h1, h2, p {
            font-family: "Segoe UI", sans-serif;
        }
        
    </style>
    <h1>5630. Colegiatura</h1>
    <h2>Descripcion</h2>
    <p>
        Calcular la colegiatura de Esteban. <br>
        La colegiatura se determina según el número de materias que cursará, 
        con un costo de $1600 por materia. Se ofrece un descuento del 30% y exención de IVA si el promedio de Esteban es igual o mayor a 9,
        sino, deberá pagar la colegiatura completa más el 16% de IVA.
    </p>
        

    <h2>Entrada</h2>
    <p>
        El numero de materias 
        que Esteban va a cursar. Y un numero con decimales 
        que es el promedio de Esteban.
    </p>

    <h2>Salida</h2>
    <p>Un numero entero con el precio a pagar. Debe de ir con un $.</p>

    <h2>Ejemplo</h2>
    <p><pre>Entrada    Salida</pre></p>
    <table border="1" cellspacing = "3" cellpadding = "3" >    
        <tr>
            <td colspan="2">5 <br> <pre>9.6  </pre></td>
            <td colspan="2"> <pre>$5600    </pre> </td>
        </tr>
    </table>

    <?php 
        $a = 5;
        $b = 9.6;
        $c = $a * 1600;

        if($b >= 9) {
            $c -= $c * 0.30;
        }
        else {
            $c += $c * 0.16;
        }

        echo "<p>El resultado es : " . " $" . $c . "</p>";
            
    ?> 

</body>
</html>