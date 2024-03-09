<!-- Alexis Ortiz Lopez 4to Programacion  -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Entrada</h2>
    <p>
        La primera y única línea de entrada contendrá como máximo 100 caracteres,
        letras mayúsculas y minúsculas del alfabeto inglés y guión ('-' ASCII 45). 
        El primer carácter siempre será una letra mayúscula. 
        Los guiones siempre serán seguidos por una letra mayúscula.
    </p>

    <h2>Salida</h2>
    <p>
        La primera y única línea de salida debe contener la variación corta apropiada.
    </p>
    
    <form action="autores.php" method="post">
        <input type="text" name="txt" class="texto"> <br>
        <input type="submit" value="Enviar" class="boton">
    </form>
    <button class="boton"><a href="index.php">Volver</a></button>

    <?php 
        if($_POST) {
            $pal = $_POST["txt"];
            
            echo "<p>";
            echo "String: " . $pal . "<br>";

            for($i = 0; $i < strlen($pal); $i++)
                if($pal[$i] >= 'A' && $pal[$i] <= 'Z') echo $pal[$i];

            echo "</br>";
        }
    ?>
</body>
</html>