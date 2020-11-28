<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/all/css/style.css">
    <link rel="shortcut icon" href="assets/img/sena.png">
    <title>Sena-lab</title>
</head>

<body>


    <header class="header-nav">
                                <div class="container-nav">
                                    <a href=""><img src="assets/img/logosena.png" alt="Logo Sena" class="logo"></a>
                                    <nav>
                                        <ul>
                                            <li><a href="?c=Index&m=index">SenaLAB</a></li>
                                            <li><a href="#">Inicio</a></li>
                                            <li><a href="?c=Contacto&m=index">Contactanos</a></li>
                                            <li><a href="?c=Login&m=index">Ingresar</a></li>
                                        </ul>
                                    </nav>
                                </div>
                    </header>
<div class="container">


<!-- CAROUSEL INDEX -->

    <section class="espacio-1">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="assets/img/s3.jpg" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>3500 Jóvenes del sur Córdoba se benefician con nuevo Sena en Montelíbano:Duque. </h5>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="assets/img/s2.jpg" alt="Second slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Campaña de prevención en salud  sexual y reproductiva. </h5>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="assets/img/s1.jpg" alt="Third slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Orientación ocupacional. </h5>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </section>

        <div class="espacio-2">
            <h4><b>Datos de interes</b></h4>
            <br><br>
            <img src="assets/img/naranja.png" alt="" class="espacio-2 img-fluid img-thumbnail mx-auto d-block">
        </div>


        <div id="navbar-example">
            <ul class="nav nav-tabs" role="tablist">

            </ul>
        </div>

        

        <?php
        /*=============================================
        FOOTER
        =============================================*/

        include "views/footer/footer.php";

        echo '</div>';
        ?>
     


    </div>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>



</html>