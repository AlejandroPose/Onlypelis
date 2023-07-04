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
    <link rel="stylesheet" href="css/header.css">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    <link rel="icon" href="img/icono.ico">
    <title>OnlyPelis</title>
</head>

<body>

    <?php
    include 'header.php';
    ?>
    <script src="js/modificar.js"></script>

    <main>
        <h1>Modificación de usuario</h1>
        <?php
        $mysql_host = "localhost:3306";
        $mysql_database = "onlypelis";
        $mysql_user = "root";
        $mysql_password = "1234";

        $conexion = mysqli_connect($mysql_host, $mysql_user, $mysql_password) or die("No ha podido realizarse la conexión");
        mysqli_select_db($conexion, $mysql_database) or die("No ha podido seleccionarse la base de datos");

        $nick = $_SESSION['usuario'];

        $sql1 = "SELECT usuario, nombre, apellidos, contrasena, imagen from usuarios where usuario = '$nick';";
        $resultado = mysqli_query($conexion, $sql1);
        $linea = mysqli_fetch_array($resultado);
        //echo var_dump($linea);


        echo '<h2>Datos</h2>';
        // ----- USUARIO ----- //
        echo '<p>Usuario:' . $linea["usuario"] . '</p>';
        echo '
                <form action="">
                    <input name="nickNew" type="text" placeholder="Ingrese su nuevo nickname">
                    <input name="nickSub" type="submit" value="Usuario">
                </form>
            ';
        if (isset($_REQUEST['nickSub'])) {
            if (isset($_REQUEST['nickNew'])) {
                $newUser = (isset($_REQUEST["nickNew"])) ? htmlspecialchars(trim(strip_tags($_REQUEST["nickNew"])), ENT_QUOTES, "UTF-8") : "";
                echo '<form action="" method="post">
                        <input class="controls" type="password" name="contrasena" id="contrasena" placeholder="Ingrese su contraseña">
                        <input class="boton" name="entrar" type="submit" value="Entrar">
                    </form>';
                if (isset($_REQUEST['entrar'])) {
                    if (isset($_REQUEST['contrasena'])) {
                        $contrasena = $_REQUEST['contrasena'];
                        $consulta = "SELECT contrasena from usuarios where usuario like '$nick';";
                        $resultad = mysqli_query($conexion, $consulta);
                        $linea1 = mysqli_fetch_array($resultad);
                        if (password_verify($contrasena, $linea1['contrasena'])) {
                            $sql2 = "UPDATE usuarios set usuario = '$newUser' where usuario = '$nick';";
                            mysqli_query($conexion, $sql2);
                            $_SESSION['usuario'] = $newUser;
                            header('location:modificar.php');
                        } else {
                            echo "Contraseña incorrecta";
                        }
                    }
                }
            }
        }
        // ----- NOMBRE ----- //
        echo '<p>Nombre:' . $linea["nombre"] . '</p>';
        echo '
                <form action="">
                    <input name="nameNew" type="text" placeholder="Ingrese su nuevo nombre">
                    <input name="nameSub" type="submit" value="Nombre">
                </form>
            ';
        if (isset($_REQUEST['nameSub'])) {
            if (isset($_REQUEST['nameNew'])) {
                $newName = (isset($_REQUEST["nameNew"])) ? htmlspecialchars(trim(strip_tags($_REQUEST["nameNew"])), ENT_QUOTES, "UTF-8") : "";
                echo '<form action="" method="post">
                        <input class="controls" type="password" name="contrasena" id="contrasena" placeholder="Ingrese su contraseña">
                        <input class="boton" name="entrar" type="submit" value="Entrar">
                    </form>';
                if (isset($_REQUEST['entrar'])) {
                    if (isset($_REQUEST['contrasena'])) {
                        $contrasena = $_REQUEST['contrasena'];
                        $consulta = "SELECT contrasena from usuarios where usuario like '$nick';";
                        $resultad = mysqli_query($conexion, $consulta);
                        $linea1 = mysqli_fetch_array($resultad);
                        if (password_verify($contrasena, $linea1['contrasena'])) {
                            $sql3 = "UPDATE usuarios set nombre = '$newName' where usuario = '$nick';";
                            mysqli_query($conexion, $sql3);
                            header('location:modificar.php');
                        } else {
                            echo "Contraseña incorrecta";
                        }
                    }
                }
            }
        }
        // ----- APELLIDOS ----- //
        echo '<p>Apellidos:' . $linea["apellidos"] . '</p>';
        echo '
                <form action="">
                    <input name="lastNew" type="text" placeholder="Ingrese sus nuevos apellidos">
                    <input name="lastSub" type="submit" value="Apellidos">
                </form>
            ';
        if (isset($_REQUEST['lastSub'])) {
            if (isset($_REQUEST['lastNew'])) {
                $newLast = (isset($_REQUEST["lastNew"])) ? htmlspecialchars(trim(strip_tags($_REQUEST["lastNew"])), ENT_QUOTES, "UTF-8") : "";
                echo '<form action="" method="post">
                        <input class="controls" type="password" name="contrasena" id="contrasena" placeholder="Ingrese su contraseña">
                        <input class="boton" name="entrar" type="submit" value="Entrar">
                    </form>';
                if (isset($_REQUEST['entrar'])) {
                    if (isset($_REQUEST['contrasena'])) {
                        $contrasena = $_REQUEST['contrasena'];
                        $consulta = "SELECT contrasena from usuarios where usuario like '$nick';";
                        $resultad = mysqli_query($conexion, $consulta);
                        $linea1 = mysqli_fetch_array($resultad);
                        if (password_verify($contrasena, $linea1['contrasena'])) {
                            $sql4 = "UPDATE usuarios set apellidos = '$newLast' where usuario = '$nick';";
                            mysqli_query($conexion, $sql4);
                            header('location:modificar.php');
                        } else {
                            echo "Contraseña incorrecta";
                        }
                    }
                }
            }
        }
        // ----- CONTRASEÑA ----- //
        echo '<p>Contraseña:' . $linea["contrasena"] . '</p>';
        echo '
                <form action="">
                    <input name="passNew" type="text" placeholder="Ingrese su nueva contraseña">
                    <input name="passSub" type="submit" value="Contraseña">
                </form>
            ';
        if (isset($_REQUEST['passSub'])) {
            if (isset($_REQUEST['passNew'])) {
                $newPass = (isset($_REQUEST["passNew"])) ? htmlspecialchars(trim(strip_tags($_REQUEST["passNew"])), ENT_QUOTES, "UTF-8") : "";
                $pass = password_hash($newPass, PASSWORD_DEFAULT, [15]);
                echo '<form action="" method="post">
                        <input class="controls" type="password" name="contrasena" id="contrasena" placeholder="Ingrese su contraseña">
                        <input class="boton" name="entrar" type="submit" value="Entrar">
                    </form>';
                if (isset($_REQUEST['entrar'])) {
                    if (isset($_REQUEST['contrasena'])) {
                        $contrasena = $_REQUEST['contrasena'];
                        $consulta = "SELECT contrasena from usuarios where usuario like '$nick';";
                        $resultad = mysqli_query($conexion, $consulta);
                        $linea1 = mysqli_fetch_array($resultad);
                        if (password_verify($contrasena, $linea1['contrasena'])) {
                            $sql5 = "UPDATE usuarios set contrasena = '$pass' where usuario = '$nick';";
                            mysqli_query($conexion, $sql5);
                            header('location:modificar.php');
                        }
                    }
                }
            }
        }

        // ----- IMAGEN ----- //
        echo '<p>Imagen:</p> <img src="' . $linea["imagen"] . '" alt="">';
        echo '
            <form action="" enctype="multipart/form-data" method="post">
                <p>Subir imagen: </p>
                <input type="file" name="imagen" id="imagen">
                <input type="submit" value="imgSub" name="imgSub">
            </form>
            ';
        if (isset($_REQUEST['imgSub'])) {
            if (isset($_FILES['imagen'])) {
                if (isset($_FILES['imagen']['name'])) {
                    $direcion = "./img-usuarios/";
                    $subir = $direcion . basename($_FILES['imagen']['name']);
                    if (move_uploaded_file($_FILES['imagen']['tmp_name'], $subir)) {
                        $sql6 = "UPDATE usuarios set imagen = '$subir' where usuario = '$nick';";
                        mysqli_query($conexion, $sql6);
                        header('location:modificar.php');
                    }
                }
            }
        }
        ?>
    </main>

    <?php
    include 'footer.php';
    ?>

</body>

</html>