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
    <script src="js/about-us.js"></script>

    <main>
        <section class="section">
            <div class="container">
                <div class="row">
                    <div class="section-about">
                        <h2 class="h2a">Sobre esta página</h2>
                        <div class="div-img">
                            <img class="img-about" src="img/about-us.svg">
                        </div>
                        <div class="div-texto">
                            <p class="texto">
                                Opera a nivel mundial y cuyo servicio principal es la distribución de contenidos audiovisuales a través de una plataforma en línea o servicio de video bajo demanda por retransmisión en directo.
                            </p>
                            <div class="div-ul">
                                <ul>
                                    <li class="licolor">Servicio online y offline</li>
                                    <li class="licolor">Retrasmisiones en directo</li>
                                    <li class="licolor">Series y Películas</li>
                                    <li class="licolor">Todo desde el nacimiento del cine hasta la actualidad</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php
        include 'footer.php';
    ?>

</body>

</html>