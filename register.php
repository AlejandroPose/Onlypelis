<?php
session_name('onlypelis');
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/registro.css">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    <link rel="icon" href="img/icono.ico">
    <title>OnlyPelis</title>
</head>

<body>

    <?php
    include 'header.php';
    ?>
    <script src="js/register.js"></script>

    <main>
        <section class="form-registro">
            <h4>Registro</h4>
            <form action="" method="post" enctype='multipart/form-data'>

                <input class="controls" type="text" name="nombre" id="nombre" placeholder="Ingrese su nombre">

                <input class="controls" type="text" name="apellidos" id="apellidos" placeholder="Ingrese su apellidos">

                <input class="controls" type="text" name="nick" id="nick" placeholder="Ingrese su nickname">

                <input class="controls" type="password" name="contrasena" id="contrasena" placeholder="Ingrese su contraseña">

                <input class="imagen" type="file" name="imagen" id="imagen" placeholder="Ingrese una imagen"><br><br>

                <input type="radio" name="terminos" value="1"> Estoy de acuerdo con <a href="https://foundation.wikimedia.org/wiki/Terms_of_Use/es">Terminos y Condiciones</a>

                <input class="boton" name="subir" type="submit" value="Registrar">

                <p><a href="login.php">¿Ya tengo cuenta?</a></p>

                <?php
                if (isset($_POST['subir'])){
                    if (isset($_POST['nombre']) && isset($_POST['apellidos']) && isset($_POST['nick']) && isset($_POST['contrasena'])){
                        if (isset($_FILES['imagen'])){
                            if (isset($_FILES['imagen']['name'])){
                                $direcion = "./img-usuarios/";
                                $subir = $direcion . basename($_FILES['imagen']['name']);
                                if (move_uploaded_file($_FILES['imagen']['tmp_name'], $subir)){
                                    $mysql_host = "localhost:3306";
                                    $mysql_database = "onlypelis";
                                    $mysql_user = "root";
                                    $mysql_password = "1234";
                                    $conexion = mysqli_connect($mysql_host, $mysql_user, $mysql_password) or die("No ha podido realizarse la conexión");
                                    mysqli_select_db($conexion, $mysql_database) or die("No ha podido seleccionarse la base de datos");
                                    $nombre = (isset($_POST["nombre"])) ? htmlspecialchars(trim(strip_tags($_POST["nombre"])), ENT_QUOTES, "UTF-8") : "";
                                    $apellidos = (isset($_POST["apellidos"])) ? htmlspecialchars(trim(strip_tags($_POST["apellidos"])), ENT_QUOTES, "UTF-8") : "";
                                    $contrasena = $_POST['contrasena'];
                                    $pass = password_hash($contrasena, PASSWORD_DEFAULT, [8]);
                                    $nick = (isset($_POST["nick"])) ? htmlspecialchars(trim(strip_tags($_POST["nick"])), ENT_QUOTES, "UTF-8") : "";
                                    $sql = "INSERT into usuarios (usuario, nombre, apellidos, contrasena, rol, imagen) values ('$nick', '$nombre', '$apellidos', '$pass', 'usuario', '$subir');";
                                    mysqli_query($conexion, $sql);
                                    header("location:login.php");
                                } else {
                                    $fileError = 'Error: La imagen no se ha podido cambiar';
                                }
                            } else {
                                $fileError = 'No has insertado ninguna imagen';
                            }
                        }
                    } else {
                        print "Faltan datos por rellenar";
                    }
                }
                    ?>
            </form>
        </section>
    </main>

    <?php
    include 'footer.php';
    ?>

</body>

</html>