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
    <script src="js/login.js"></script>

    <main>
        <section class="form-registro">
            <h4>Ingresar</h4>
            <form action="" method="post">

                <input class="controls" type="text" name="nick" id="nick" placeholder="Ingrese su Nick name">

                <input class="controls" type="password" name="contrasena" id="contrasena" placeholder="Ingrese su contraseña">

                <input class="boton" name="entrar" type="submit" value="Entrar">

                <?php
                if (isset($_POST['entrar'])){
                    if (isset($_POST['nick']) && isset($_POST['contrasena'])){
                        $mysql_host = "localhost:3306";
                        $mysql_database = "onlypelis";
                        $mysql_user = "root";
                        $mysql_password = "1234";
                        $conexion = mysqli_connect($mysql_host, $mysql_user, $mysql_password) or die("No ha podido realizarse la conexión");
                        mysqli_select_db($conexion, $mysql_database) or die("No ha podido seleccionarse la base de datos");
                        $contrasena = $_POST['contrasena'];
                        //$pass = password_hash($contrasena, PASSWORD_DEFAULT, [15]);
                        $nick = $_POST['nick'];
                        $consulta1 = "SELECT count(*) from usuarios where usuario like '$nick';";
                        $resultado1 = mysqli_query($conexion, $consulta1);
                        $linea1 = mysqli_fetch_array($resultado1);
                        if ($linea1["count(*)"] == 1){
                            $consulta2 = "SELECT contrasena from usuarios where usuario like '$nick';";
                            $resultado2 = mysqli_query($conexion, $consulta2);
                            $linea2 = mysqli_fetch_array($resultado2);
                            if(password_verify($contrasena, $linea2['contrasena'])){
                                $_SESSION['usuario'] = $nick;
                                $consulta3 = "SELECT rol from usuarios where usuario like '$nick';";
                                $resultado3 = mysqli_query($conexion, $consulta3);
                                $linea3 = mysqli_fetch_array($resultado3);
                                $_SESSION['rol'] = $linea3['rol'];
                                print $_SESSION['usuario'] . " " . $_SESSION['rol'];
                                header("location:index.php");
                            } else {
                                print "Contraseña incorrecta!";
                            }
                        } else {
                            print "Ya existe ese usuario en la base de datos";
                        }
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