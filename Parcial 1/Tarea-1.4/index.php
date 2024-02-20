
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Problemas con if</title>
</head>
<body>
    <style>

        body {
            background-color: grey;         
                    
        }
        h1 {
            text-align: center;
        }
        h1, h2, p {
            font-family: "Segoe UI", sans-serif;
                    
        }

    </style>

    <h1>12618. Practicando con formulas</h1>
    <h2>Descrpcion</h2>
    <p>
        Desarrollar un programa que sea capaz de especificar a que estación (su nombre en inglés) del año pertenece una fecha en 
        especifico compuesta por un día d y un mes m según lo siguiente:
    </p>
        

    <h2>Entrada</h2>
    <p>Dos números enteros d y m separados por un espacio que corresponden al día y mes de una fecha determinada</p>

    <h2>Salida</h2>
    <p>
        Una cadena s que indique la estación del año a la que pertenece la fecha ingresada o un mensaje que indique no existe la fecha, 
        si la fecha no es válida
    </p>

    <h2>Ejemplo</h2>
    <p><pre>Entrada    Salida</pre></p>

    <table border="1" cellspacing = "3" cellpadding = "3" >
        <tr>
            <td colspan="2">5 10 </td>
            <td colspan="2"> <pre>Fall    </pre> </td>
        </tr>
        <tr>
            <td colspan="2">31 4 </td>
            <td colspan="2"> <pre>NO EXISTE    </pre> </td>
        </tr>
    </table>

    <?php
        #Estaciones del año
        $dia = 15;
        $mes = 10;

        //PRIMAVERA 21 MARZO 20 JUNIO
        //VERANO 21 JUNIO 20 SEPTIEMBRE
        //OTOÑO 21 SEPTIEMBRE 20 DICIEMBRE
        //INVIERNO 21 DE DICIEMBRE 20 MARZO

        echo "<p> RESULTADO: ";
        if($mes < 1 or $mes > 12) {
            echo "NO EXISTE";
        }

        switch($mes) {
            case 1: 
                if($dia > 31 or $dia < 1) {
                    echo "NO EXISTE";
                }
                else
                    echo "WINTER";
                break;
            case 2:
                if($dia > 28 or $dia < 1) {
                    echo "NO EXISTE";
                }else
                echo "WINTER";
                break;
            case 3:
                if($dia > 31 or $dia < 1) {
                    echo "NO EXISTE";
                }
                else {
                    if($dia <= 21) {
                        echo "WINTER";
                    }
                    else {
                        echo "SPRING";
                    }
                }
                break;
            case 4:
                if($dia > 30 or $dia < 1) {
                    echo "NO EXISTE";
                }
                else
                echo "SPRING";
                break;
            case 5:
                if($dia > 31 or $dia < 1) {
                    echo "NO EXISTE";
                }
                else 
                    echo "SPRING";
                break;
            case 6:
                if($dia > 30 or $dia < 1) {
                    echo "NO EXISTE";
                }
                else {
                    if($dia <= 21) {
                        echo "SPRING";
                    }
                    else {
                        echo "SUMMER";
                    }
                }
                break;
            case 7: 
                if($dia > 31 or $dia < 1) {
                    echo "NO EXISTE";
                }
                else
                    echo "SUMMER";
                break;
            case 8: 
                if($dia > 31 or $dia < 1) {
                    echo "NO EXISTE";
                }
                else
                echo "SUMMER";
                break;
            case 9:
                if($dia > 30 or $dia < 1) {
                    echo "NO EXISTE";
                }
                else {
                    if($dia <= 21) {
                        echo "SUMMER";
                    }
                    else {
                        echo "FALL";
                    }
                }
                
            case 10:
                if($dia > 31 or $dia  < 1) {
                    echo "NO EXISTE";
                }
                else
                echo "FALL";
                break;
            case 11:
                if($dia > 30 or $dia  < 1) {
                    echo "NO EXISTE";
                }
                else
                echo "FALL";
                break;
            case 12:
                if($dia > 31 or $dia < 1) {
                    echo "NO EXISTE";
                }
                else {
                    if($dia <= 21) {
                        echo "FALL";
                    }
                    else {
                        echo "WINTER";
                    }
                }
                break;
        }   
        echo "</p>";
            
            
            
    ?>

    <hr>


    <h1>B. ¿Cuántos valen 7?</h1>
    <h2>Descrpcion</h2>
    <p>
        Escribe un programa que lea dos enteros e imprima cuántos de ellos valen 7.
    </p>
        

    <h2>Entrada</h2>
    <p>Dos enteros en el rango de -1000 a 1000.</p>

    <h2>Salida</h2>
    <p>
    La cantidad de enteros iguales a 7.
    </p>

    <h2>Ejemplo</h2>
    <p><pre>Entrada    Salida</pre></p>

    <table border="1" cellspacing = "3" cellpadding = "3" >
        <tr>
            <td colspan="2">-3 8 </td>
            <td colspan="2"> <pre>0    </pre> </td>
        </tr>
        <tr>
            <td colspan="2">7 57 </td>
            <td colspan="2"> <pre>1    </pre> </td>
        </tr>
    </table>

    <?php 
        #Cuantos valen 7
        echo "<br>";
        $a = 7;
        $b = 57;
        if(($a == 7 and $b != 7) or ($a != 7 and $b == 7)) echo "<p> RESULTADO: " . 1 . "</p>";
        if($a == 7 and $b == 7) echo "<p> RESULTADO: " . 2 . "</p>";
        if($a != 7 and $b != 7) echo "<p> RESULTADO: " . 0 . "</p>";
    
    ?>
    
    <hr>

    <h1>C. El mayor de tres números</h1>
    <h2>Descrpcion</h2>
    <p>
        Realiza un problema que imprima el mayor de tres números.
    </p>
        

    <h2>Entrada</h2>
    <p>Escribe tres números enteros a, b y c</p>

    <h2>Salida</h2>
    <p>
        El número entero mayor de los tres números introducidos.
    </p>

    <h2>Ejemplo</h2>
    <p><pre>Entrada    Salida</pre></p>

    <table border="1" cellspacing = "3" cellpadding = "3" >
        <tr>
            <td colspan="2">10 <br> 8 <br> -7 </td>
            <td colspan="2"> <pre>10    </pre> </td>
        </tr>
        <tr>
            <td colspan="2">10 <br> 81 <br> 101 </td>
            <td colspan="2"> <pre>101    </pre> </td>
        </tr>
    </table>


    <?php 
        #El mayor de tres numeros
        $x = 10;
        $y = 8;
        $z = -7;

        echo "<br>";

        echo "<p> RESULTADO: " . max(max($x, $y), $z) . "</p>";
    ?>
</body>
</html>