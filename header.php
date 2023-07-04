<header>

    <div class="contenedor">
        <h2 class="logotipo">OnlyPelis</h2>
        <nav>
            <a href="index.php" id="index">Inicio</a>
            <a href="about-us.php" id="about-us">About Us</a>
            <a href="peliculas.php" id="peliculas">Películas</a>
            <?php
                if ($_SESSION["rol"] != "administrador" && $_SESSION["rol"] != "usuario") {
                    echo '<a href="register.php" id="register">Register</a>';
                    echo '<a href="login.php" id="login">Login</a>';
                }
                if ($_SESSION["rol"] == "administrador") {
                    echo '<a href="administrar.php" id="administrar">Administrar</a>';
                }
                if ($_SESSION["rol"] == "administrador" || $_SESSION["rol"] == "usuario") {
                    echo '<a href="modificar.php" id="modificar">Modificar</a>';
                    echo '
                    <form action="">
                        <input class="cerrarBoton" name="cerrar" type="submit" value="Cerrar sesión">
                    </form>
                    ';
                    if (isset($_REQUEST['cerrar'])) {
                        $_SESSION['rol'] = "";
                        $_SESSION['usuario'] = "";
                        header('location:index.php');
                    }
                }
            ?>
            
        </nav>
    </div>
    
</header>