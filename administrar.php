<?php
session_name('onlypelis');
session_start();
if ($_SESSION['rol'] == "administrador") {
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

    <style>
    .titulo {
        text-align: center;
    }
    .botones {
        width: 100px;
        height: 50px;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
    }
    </style>
</head>

<body>
    
    <?php
        include 'header.php';
    ?>
    <script src="js/administrar.js"></script>

    <main>
    <h1 class="titulo">Administración</h1>
        <?php
        $mysql_host = "localhost:3306";
        $mysql_database = "onlypelis";
        $mysql_user = "root";
        $mysql_password = "1234";
        $conexion = mysqli_connect($mysql_host, $mysql_user, $mysql_password) or die("No ha podido realizarse la conexión");
        mysqli_select_db($conexion, $mysql_database) or die("No ha podido seleccionarse la base de datos");
        $sql = "SELECT id_usuario, usuario, nombre, apellidos, rol from usuarios;";
        $resultado = mysqli_query($conexion, $sql);
        while($linea=mysqli_fetch_array($resultado)){
            $id = $linea["id_usuario"];
            echo "<p class='personas'>Usuario #" . $linea["id_usuario"] . ", nickname: " . $linea["usuario"] . ", nombre y apellidos: " . $linea["nombre"] . " " . $linea["apellidos"] . " y rol: " . $linea["rol"] . "</p>";
            echo '
                <form action="">
                    <input type="hidden" name="id" value="'.$linea["id_usuario"].'">
                    <input class="update" name="update" type="submit" value="Update">
                    <input class="delete" name="delete" type="submit" value="Delete">
                </form>
            ';
            if (isset($_REQUEST['update'])) {
                $id = $_REQUEST['id'];
                $mysql_host = "localhost:3306";
                $mysql_database = "onlypelis";
                $mysql_user = "root";
                $mysql_password = "1234";
                $conexion = mysqli_connect($mysql_host, $mysql_user, $mysql_password) or die("No ha podido realizarse la conexión");
                mysqli_select_db($conexion, $mysql_database) or die("No ha podido seleccionarse la base de datos");
                $sql = "UPDATE usuarios set rol = 'administrador' where id_usuario = $id;";
                mysqli_query($conexion, $sql);
                header('location:administrar.php');
            }
            if (isset($_REQUEST['delete'])) {
                $id = $_REQUEST['id'];
                $mysql_host = "localhost:3306";
                $mysql_database = "onlypelis";
                $mysql_user = "root";
                $mysql_password = "1234";
                $conexion = mysqli_connect($mysql_host, $mysql_user, $mysql_password) or die("No ha podido realizarse la conexión");
                mysqli_select_db($conexion, $mysql_database) or die("No ha podido seleccionarse la base de datos");
                $sql = "DELETE from usuarios where id_usuario = $id;";
                mysqli_query($conexion, $sql);
                header('location:administrar.php');
            }
            echo "<br>";
        }
        
        ?>
        
    </main>

    <script>
    
    </script>

    <?php
        include 'footer.php';
    ?>

</body>

</html>

<?php
} else {
    header("location:index.php");
}
?>