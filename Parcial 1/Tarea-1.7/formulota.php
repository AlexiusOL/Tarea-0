<!-- Alexis Ortiz Lopez 4to Programacion-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulota</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <h2>Descripcion</h2>
    <p>Evaluar la formula e imprimir el resultado</p>

    <!-- Codigo de omegaUp Acomodar esto  -->
    <math xmlns="http://www.w3.org/1998/Math/MathML" display="block" style="color: white;">
        <mi>f</mi>
        <mo stretchy="false">(</mo>
        <mi>x</mi>
        <mo>,</mo>
        <mi>y</mi>
        <mo>,</mo>
        <mi>z</mi>
        <mo stretchy="false">)</mo>
        <mo>=</mo>

        <mfrac>
            <mrow>
            <mfrac>
                <mrow>
                    <mi>x</mi>
                    <mo>+</mo>
                    <mi>y</mi>
                </mrow>
                <mrow>
                    <mn>2</mn>
                    <mi>x</mi>
                </mrow>
            </mfrac>
            <mo>+</mo>
        <mfrac>
            <mrow>
                <msup>
                    <mi>x</mi>
                    <mn>3</mn>
                </msup>
                <mo>+</mo>
                <msup>
                    <mi>y</mi>
                    <mn>3</mn>
                </msup>
            </mrow>
            <mrow>
                <msup>
                    <mi>x</mi>
                    <mn>2</mn>
                </msup>
                <mo>+</mo>
                <msup>
                    <mi>y</mi>
                    <mn>2</mn>
                </msup>
            </mrow>
        </mfrac>
            </mrow>
            <mrow>
            <msup>
                <mi>x</mi>
                <mn>2</mn>
            </msup>
            <mo>+</mo>
            <msup>
                <mi>y</mi>
                <mn>2</mn>
            </msup>
            <mo>+</mo>
            <msup>
                <mi>z</mi>
                <mn>2</mn>
            </msup>
            </mrow>
        </mfrac>
    </math>

    
        
    <form action="formulota.php" method="post">
        <input type="text" name="txtX" class="texto"> <br>
        <input type="text" name="txtY" class="texto"> <br>
        <input type="text" name="txtZ" class="texto"> <br>

        <input type="submit" value="Enviar" class="boton">
    </form>

    <?php 
        if($_POST) {
            $x = $_POST["txtX"];
            $y = $_POST["txtY"];
            $z = $_POST["txtZ"];

            $arriba =  ( ($x + $y) / (2 * $x) ) + ( (pow($x, 3) + pow($y, 3) ) / ( $x * $x + $y * $y ) );
            $res = $arriba / ($x * $x + $y * $y + $z * $z);

            
            echo "<h3>EL valor de x: " . $x . "<br>";
            echo "EL valor de y: " . $y . "<br>";
            echo "EL valor de z: " . $z . "<br>";
            echo "Resultado: " . $res . "</h3>";
        }
    ?> 

</body>
</html>
