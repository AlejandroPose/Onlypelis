<?php
session_name('onlypelis');
session_start();
if (!isset($_SESSION['rol'])) {
    $_SESSION['rol'] = "";
}
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
    <script src="js/index.js"></script>

    <main>
        <div class="pelicula-principal">
            <div class="contenedor">
                <h3 class="titulo">Focus</h3>
                <p class="descripcion">
                    Nicky, un consumado maestro de la estafa conoce a Jess, una atractiva y joven ladrona que está dando sus primeros pasos en el oficio. Tras el intenso encuentro entre ambos, Nicky decide compartir sus trucos con ella.
                </p>
                <a href="https://www.youtube.com/watch?v=MxCRgtdAuBo"><button role="button" class="boton"><i class="fas fa-play"></i>Reproducir</button></a>
                <a href="https://es.wikipedia.org/wiki/Focus_(pel%C3%ADcula_de_2015)"><button role="button" class="boton"><i class="fas fa-info-circle"></i>Más información</button></a>
            </div>
        </div>

        <div class="peliculas-recomendadas contenedor">
            <div class="contenedor-titulo-controles">
                <h3>Películas Recomendadas</h3>
                <div class="indicadores"></div>
            </div>

            <div class="contenedor-principal">
                <button role="button" id="flecha-izquierda" class="flecha-izquierda"><i class="fas fa-angle-left"></i></button>

                <div class="contenedor-carousel">
                    <div class="carousel">
                        <div class="pelicula">
                            <a href="peliculas.php"><img src="img/purga.png" alt=""></a>
                        </div>
                        <div class="pelicula">
                            <a href="peliculas.php"><img src="img/annabelle.png" alt=""></a>
                        </div>
                        <div class="pelicula">
                            <a href="peliculas.php"><img src="img/hannibal.png" alt=""></a>
                        </div>
                        <div class="pelicula">
                            <a href="peliculas.php"><img src="img/ocho_apellidos_vascos.png" alt=""></a>
                        </div>
                        <div class="pelicula">
                            <a href="peliculas.php"><img src="img/pinguinos.png" alt=""></a>
                        </div>
                        <div class="pelicula">
                            <a href="peliculas.php"><img src="img/witheChicks.png" alt=""></a>
                        </div>
                        <div class="pelicula">
                            <a href="peliculas.php"><img src="img/focus.png" alt=""></a>
                        </div>
                        <div class="pelicula">
                            <a href="peliculas.php"><img src="img/cadena_perpetua.png" alt=""></a>
                        </div>
                        <div class="pelicula">
                            <a href="peliculas.php"><img src="img/green_mile.png" alt=""></a>
                        </div>
                        <div class="pelicula">
                            <a href="peliculas.php"><img src="img/purga.png" alt=""></a>
                        </div>
                        <div class="pelicula">
                            <a href="peliculas.php"><img src="img/annabelle.png" alt=""></a>
                        </div>
                        <div class="pelicula">
                            <a href="peliculas.php"><img src="img/hannibal.png" alt=""></a>
                        </div>
                        <div class="pelicula">
                            <a href="peliculas.php"><img src="img/ocho_apellidos_vascos.png" alt=""></a>
                        </div>
                        <div class="pelicula">
                            <a href="peliculas.php"><img src="img/pinguinos.png" alt=""></a>
                        </div>
                        <div class="pelicula">
                            <a href="peliculas.php"><img src="img/witheChicks.png" alt=""></a>
                        </div>
                        <div class="pelicula">
                            <a href="peliculas.php"><img src="img/focus.png" alt=""></a>
                        </div>
                        <div class="pelicula">
                            <a href="peliculas.php"><img src="img/cadena_perpetua.png" alt=""></a>
                        </div>
                        <div class="pelicula">
                            <a href="peliculas.php"><img src="img/green_mile.png" alt=""></a>
                        </div>
                    </div>
                </div>

                <button role="button" id="flecha-derecha" class="flecha-derecha"><i class="fas fa-angle-right"></i></button>
            </div>
        </div>
    </main>

    <?php
        include 'footer.php';
    ?>

</body>

</html>