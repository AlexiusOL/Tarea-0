<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practicando con formulas</title>
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
    <h1>12618. Practicando con formulas</h1>
    <h2>Descripcion</h2>
    <p>
        Dado un valor real a, quieres resolver una serie de ecuaciones hasta obtener el valor de z.
    </p>

    <!-- Codigo MathML copiado de la pagina de omegaUp -->
    <math xmlns="http://www.w3.org/1998/Math/MathML" display="block">
        <mi>x</mi>
        <mo>=</mo>
        <mn>3</mn>
        <mi>a</mi>
        <mo>+</mo>
        <mn>15</mn>
    </math>
    <br>

    <math xmlns="http://www.w3.org/1998/Math/MathML" display="block">
        <mi>y</mi>
        <mo>=</mo>
        <mfrac>
            <mrow>
                <mi>x</mi>
                <mo>+</mo>
                <mn>3</mn>
            </mrow>
            <mrow>
                <mi>x</mi>
                <mo>+</mo>
                <mn>1</mn>
            </mrow>
        </mfrac>
    </math>
    <br>

    <math xmlns="http://www.w3.org/1998/Math/MathML" display="block">
        <mi>z</mi>
        <mo>=</mo>
        <mfrac>
            <mrow>
                <mn>5</mn>
                <mi>x</mi>
                <mo>+</mo>
                <mn>7</mn>
                <mi>y</mi>
            </mrow>
            <mrow>
                <mi>a</mi>
                <mi>x</mi>
                <mi>y</mi>
            </mrow>
        </mfrac>
    </math>
        

    <h2>Entrada</h2>
    <p>Un real a, puedes duponer que 1 ≤ a ≤ 100</p>

    <h2>Salida</h2>
    <p>Un real que sea el valor de z impreso con tres puntos decimales.</p>

    <h2>Ejemplo</h2>
    <p><pre>Entrada    Salida</pre></p>
    <table border="1" cellspacing = "3" cellpadding = "3" >   
        <tr>
            <td colspan="2">33.562</td>
            <td colspan="2"> <pre>0.148    </pre> </td>
        </tr>   
        <tr>
            <td colspan="2">72.569</td>
            <td colspan="2"> <pre>0.069    </pre> </td>
        </tr>
        <tr>
            <td colspan="2">64.835</td>
            <td colspan="2"> <pre>0.077    </pre> </td>
        </tr>  
    </table>

    <?php 
        #Codigo de la formula
        $a = 33.562;
        $x = 3 * $a + 15;
        $y = ($x + 3) / ($x + 1);
        $z = ((5 * $x) + (7 * $y)) / ($a * $x * $y);
        echo "<p>El resultado es: " . round($z, 3) . "</p>";
 
    ?>

</body>
</html>