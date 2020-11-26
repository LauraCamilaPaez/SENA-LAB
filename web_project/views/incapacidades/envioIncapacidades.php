<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/all/css/style.css">
    <link rel="shortcut icon" href="assets/img/sena.png">
    <title>Enviar Incapacidad</title>
</head>

<body>
<header class="header-nav">
                            <div class="container-nav">
                                <a href=""><img src="assets/img/logosena.png" alt="Logo Sena" class="logo"></a>
                                <nav>
                                    <ul>
                                        <!--li><a href="?c=Index&m=index">SenaLAB</a></li-->
                                        <li><a href="?c=Usuarios&m=index">Inicio</a></li>
                                        <li><a href="">Contactanos</a></li>
                                        <li><a href="?c=Login&m=index">Ingresar</a></li>
                                    </ul>
                                </nav>
                            </div>
                </header>
<div class="container-incapacidades">
    <div class="row">
        <div class="col-md-8  offset-md-4">
            <form action="?c=Incapacidades&m=create" method = "POST" enctype = "multipart/form-data" class="form-incapacidades">
                <div class="form-group">
                    <label class="label-incapacidades" for="form">nombre</label>
                    <input type="text" name="nombre" class="form-control" placeholder="Introduce tu nombre" required>
                    <label class="label-incapacidades" for="form">Telefono</label>
                    <input type="number" name="telefono" class="form-control" placeholder="Introduce tu telefono" required>
                    <label class="label-incapacidades" for="form">Correo</label>
                    <input type="correo" name="correo" class="form-control" placeholder="Introduce tu correo" required>
                    <label class="label-incapacidades" for="form">Descripción incapacidad</label>
                    <input type="text" name="mensaje" class="form-control" placeholder="Motivo incapacidad" required>
                    <label class="label-incapacidades" for="form">Agregar Incapacidad</label>
                    <input type="file" class="form-control-file" name="pdf" id="exampleFormControlFile1">
                    <button type="submit" class="btn-primary">Enviar</button>
                </div>
            </form>
        </div>
    </header>
   

    <footer class="text-center p-3 mb-2 bg-light text-white bg-dark">
        <p>Todos los derechos reservados a Sena-lab</p>
        <p class=" "> Copyright © 2020 </p>
    </footer>
</body>

</html>