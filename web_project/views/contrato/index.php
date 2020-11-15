<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/all/css/style.css">
    <title>Contrato</title>
</head>
<body>
<header class="header-nav">
    <div class="container-nav">
        <a href=""><img src="assets/img/logo-sena.png" alt="Logo Sena" class="logo"></a>
        <nav>
            <ul>
                <!--li><a href="?c=Index&m=index">SenaLAB</a></li-->
                <li><a href="?c=Usuarios&m=index">Inicio</a></li>
                <li><a href="">Contactanos</a></li>
                <li><a href="?c=Login&m=index">Salir</a></li>
            </ul>
        </nav>
    </div>
</header>


<section>
    <div class="botom-left">Mucho más que simples formularios de contratos!!!</div>
    <div class="botom">Una solución para generar y gestionar tus contratos laborales: en forma simple y adecuada a la era digital.</div>
    <img style="max-width: 100%;"  src="assets/img/contrato.jpg" alt="contrato">
    <h1 style="display: flex; justify-content: center" class="mt-5">¿Qué podemos ofrecerte?</h1>

    <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Tipo de Contrato
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="?c=TipoContrato&m=create">Crear</a>
            <a class="dropdown-item" href="?c=TipoContrato&m=index">Detalles</a>
        </div>
    </div>

    <div class="dropdown" style="margin-top:">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Certificado Laboral por Tiempo Indefinido
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="#">Crear</a>
            <a class="dropdown-item" href="#">Detalles</a>
            <a class="dropdown-item" href="#">Actualizar</a>
            <a class="dropdown-item" href="#">Eliminar</a>
            <a class="dropdown-item" href="#">Descargar</a>
        </div>
    </div>

    <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Certificado Laboral por Obra o Labor
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="#">Crear</a>
            <a class="dropdown-item" href="#">Detalles</a>
            <a class="dropdown-item" href="#">Actualizar</a>
            <a class="dropdown-item" href="#">Eliminar</a>
            <a class="dropdown-item" href="#">Descargar</a>
        </div>
    </div>

    <div class="dropdown" style="margin-bottom: 100px">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Certificado Laboral a término Fijo
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="#">Crear</a>
            <a class="dropdown-item" href="#">Detalles</a>
            <a class="dropdown-item" href="#">Actualizar</a>
            <a class="dropdown-item" href="#">Eliminar</a>
            <a class="dropdown-item" href="#">Descargar</a>
        </div>
    </div>
</section>

<footer class="text-center p-3 mb-2 bg-light text-white bg-dark"  >

    <p>Todos los derechos reservados a Sena-lab</p>
    <p class=" "> Copyright © 2020 </p>

</footer>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>