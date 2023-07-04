<?php
session_name('onlypelis');
session_start();
if ($_SESSION['rol'] == "administrador" || $_SESSION['rol'] == "usuario") {
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/pelis.css">
    <link rel="stylesheet" href="css/header.css">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    <link rel="icon" href="img/icono.ico">
    <title>OnlyPelis</title>
    <style>
        .link {
            text-decoration: none;
            color: #fff;
        }   
        .link:hover {
            color: #ff9124;
        }
    </style>
</head>

<body>
    
    <?php
        include 'header.php';
    ?>
    <script src="js/peliculas.js"></script>

    <main>
        <section class="content-peliculas" id="purga">
            <br>
            <h2 class="genero">TERROR</h2>
            <br><br>
            <h2 class="titulo"><a href="https://www.youtube.com/watch?v=hxksq2veLas" class="link">La Purga: la noche de las bestias</a></h2>
            <div class="content-pelis">

                <img class="img-pelicula" src="img/purga.png">
                <div class="contenido-textos">
                    <h3>Sinopsis</h3><br>
                    <p>
                        En un país asolado por la delincuencia y el hacinamiento en las cárceles, el Gobierno sanciona un período anual de 12 horas durante el cual toda la actividad criminal es legal, hasta el asesinato. James, Mary y sus dos hijos luchan por sobrevivir y no
                        convertirse en monstruos.
                    </p>
                </div>
            </div>
        </section>
        <section class="content-peliculas" id="hannibal">
            <br>
            <h2 class="titulo"><a href="https://www.youtube.com/watch?v=aUQ5M2ytts0&ab_channel=TERRORLAND-TierraDeTerror-TERRORLAND-TierraDeTerror-" class="link">Hannibal: el origen del mal</a></h2>
            <div class="content-pelis">

                <img class="img-pelicula" src="img/hannibal.png">
                <div class="contenido-textos">
                    <h3>Sinopsis</h3><br>
                    <p>
                        Hace 10 años el doctor Lecter escapó de las autoridades y vive con una identidad falsa. Mason Verger, que sobrevivió a su crueldad, tiene la determinación de vengarse, pero para lograrlo necesitará a la agente del FBI Clarice Starling.
                    </p>
                </div>
            </div>
        </section>
        <section class="content-peliculas" id="annabelle">
            <br>
            <h2 class="titulo"><a href="https://www.youtube.com/watch?v=8kmLHwKH31M&ab_channel=WarnerBros.PicturesEspa%C3%B1a" class="link">Annabelle</a></h2>
            <div class="content-pelis">

                <img class="img-pelicula" src="img/annabelle.png">
                <div class="contenido-textos">
                    <h3>Sinopsis</h3><br>
                    <p>
                        John Form encuentra el regalo perfecto para Mia, su esposa embarazada: una preciosa muñeca antigua llamada Annabelle. Una noche, una secta satánica les ataca brutalmente y provocan que un ente maligno se apodere de Annabelle.
                    </p>
                </div>
            </div>
        </section>
        <section class="content-peliculas">
            <br>
            <h2 class="genero">COMEDIA</h2>
            <br><br>
            <h2 class="titulo"><a href="https://www.youtube.com/watch?v=YfopzNHLp4o&ab_channel=UniversalSpainUniversalSpain" class="link">Ocho apellidos vascos</a></h2>
            <div class="content-pelis">

                <img class="img-pelicula" src="img/ocho_apellidos_vascos.png">
                <div class="contenido-textos">
                    <h3>Sinopsis</h3><br>
                    <p>
                        Rafa, un señorito andaluz que nunca ha salido de Sevilla, decide dejarlo todo para conquistar a Amaia, una chica vasca. Se muda al País Vasco y allí tendrá que adaptarse a un nuevo entorno y hacerse pasar por vasco para ganarse la aprobación del padre
                        de Amaia.
                    </p>
                </div>
            </div>
        </section>
        <section class="content-peliculas">
            <br>
            <h2 class="titulo"><a href="https://www.youtube.com/watch?v=aeVkbNka9HM&ab_channel=MovieclipsClassicTrailersMovieclipsClassicTrailers" class="link">White Chicks</a></h2>
            <div class="content-pelis">

                <img class="img-pelicula" src="img/witheChicks.png">
                <div class="contenido-textos">
                    <h3>Sinopsis</h3><br>
                    <p>
                        A dos agentes del FBI en desgracia, Kevin Copeland y Marcus Copeland, se les asigna un nuevo caso en el que deben proteger a Tiffany y Brittany Wilson, dos herederas de la línea de cruceros, de ser secuestradas.
                    </p>
                </div>
            </div>
        </section>
        <section class="content-peliculas">
            <br>
            <h2 class="titulo"><a href="https://www.youtube.com/watch?v=y2_wbsLQtoQ&ab_channel=TrailersyEstrenosTrailersyEstrenosVerificada" class="link">Los Pinguinos de Madagascar</a></h2>
            <div class="content-pelis">

                <img class="img-pelicula" src="img/pinguinos.png">
                <div class="contenido-textos">
                    <h3>Sinopsis</h3><br>
                    <p>
                        Los valientes pingüinos Skipper, Kowalski, Rico y Cabo unen fuerzas con un espía experto para frustrar los planes de un villano con tentáculos que desea apoderarse del mundo.
                    </p>
                </div>
            </div>
        </section>
        <section class="content-peliculas">
            <br>
            <h2 class="genero">DRAMA</h2>
            <br><br>
            <h2 class="titulo"><a href="https://www.youtube.com/watch?v=MxCRgtdAuBo" class="link">Focus</a></h2>
            <div class="content-pelis">

                <img class="img-pelicula" src="img/focus.png">
                <div class="contenido-textos">
                    <h3>Sinopsis</h3><br>
                    <p>
                        Nicky, un consumado estafador, se involucra sentimentalmente con su discípulo Jess, pero pronto termina su relación. Años más tarde, ella regresa como una mujer fatal para estropear sus planes.
                    </p>
                </div>
            </div>
        </section>
        <section class="content-peliculas">
            <br>
            <h2 class="titulo"><a href="https://www.youtube.com/watch?v=hBtSF4-cnzk&ab_channel=SaraBugalloSaraBugallo" class="link">La milla verde</a></h2>
            <div class="content-pelis">

                <img class="img-pelicula" src="img/green_mile.png">
                <div class="contenido-textos">
                    <h3>Sinopsis</h3><br>
                    <p>
                        Ambientada en el sur de los Estados Unidos, en plena Depresión. Paul Edgecomb es un funcionario de prisiones encargado de vigilar la "Milla Verde", un pasillo que separa las celdas de los reclusos condenados a la silla eléctrica. John Coffey, un gigantesco
                        hombre negro acusado de asesinar brutalmente a dos hermanas de nueve años, está esperando su inminente ejecución. Tras una personalidad ingenua e infantil, Coffey esconde un prodigioso don sobrenatural.
                    </p>
                </div>
            </div>
        </section>
        <section class="content-peliculas">
            <br>
            <h2 class="titulo"><a href="https://www.youtube.com/watch?v=4u87tmlj4oE&ab_channel=AlfonsoBorregoMartinAlfonsoBorregoMartin" class="link">Cadena perpetua</a></h2>
            <div class="content-pelis">

                <img class="img-pelicula" src="img/cadena_perpetua.png">
                <div class="contenido-textos">
                    <h3>Sinopsis</h3><br>
                    <p>
                        Un hombre inocente es enviado a una corrupta penitenciaria de Maine en 1947 y sentenciado a dos cadenas perpetuas por un doble asesinato.
                    </p>
                </div>
            </div>
        </section><br>
    </main>

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