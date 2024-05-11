<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php 
        $usuario = $_POST["userTxt"];
        $password = $_POST["passTxt"];

        
     
        $conexion = mysqli_connect('localhost', 'root', '', 'sistema', '3306');

        
        $consulta = "SELECT * FROM usuarios WHERE login= '$usuario' && password= sha1('$password');";

        $resultado = mysqli_query($conexion, $consulta);
        
        $existe = mysqli_fetch_array($resultado);
        
        if($existe) {
            echo "<script>alert('Bienvenido')</script>";
        }
        else {
            echo "<script>alert('Contraseña incorrecta o usuario incorrecto')</script>";
        }

        mysqli_close($conexion);

    ?>
</body>
</html>