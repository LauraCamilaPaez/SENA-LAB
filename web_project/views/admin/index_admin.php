<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/all/css/style.css">
    <link rel="shortcut icon" href="assets/img/sena.png">
    <title>Index Administrador</title>
</head>

<body>
<header class="header-nav">
    <div class="container-nav">
        <a href=""><img src="assets/img/logo-sena.png" alt="Logo Sena" class="logo"></a>
        <nav>
            <ul>
                <li><a href="?c=Usuarios&m=index">SenaLAB</a></li>
                <li><a href="?c=Usuarios&m=index">Inicio</a></li>
                <li><a href="">Contactanos</a></li>
                <li><a href="?c=Login&m=destroy">Salir</a></li>
            </ul>
        </nav>
    </div>
</header>
<div class="container ">
    <?php
    $usuario = $_SESSION['id_usuario'];
    ?>

    <section >
        <div class="col-9 py-3 mx-auto  ">
            <div class="card border-success">
                <div style="background: #5EB319;" class="card-header text-white text-center  pb-4">
                    Página principal administrador
                </div>
                <div class="card-body esdiv">
                    <p class="font-weight-bold m-0">Nombre</p>
                    <td><?php echo $usuario->nombre ?></td>
                    <p class="font-weight-bold m-0">Apellido</p>
                    <td><?php echo $usuario->apellido ?>></td>
                    <p class="font-weight-bold m-0">Email</p>
                    <td><?php echo $usuario->correo ?></td>
                    <p class="font-weight-bold m-0">Rol</p>
                    <td><?php echo $usuario->fk_rol ?></td>
                </div>
            </div>
        </div>
    </section>

    <div class="d-flex justify-content-around mar">

        <div class="btn-group">
            <a href="?c=Usuarios&m=usuarios" type="button" class="btn btn-info "  aria-haspopup="true" aria-expanded="false">Usuario</a>
        </div>

        <div class="btn-group">
            <a href="?m=index&c=Incapacidades" type="button" class="btn btn-info "  aria-haspopup="true" aria-expanded="false">Incapacidades</a>
        </div>

        <div class="btn-group espaciobutton">
            <a href="?c=Certificados&m=index" type="button" class="btn btn-info "  aria-haspopup="true" aria-expanded="false">Certificados</a>
        </div>



            <div class="btn-group espaciobutton">
                <a href="?c=Certificados&m=index" type="button" class="btn btn-info " aria-haspopup="true" aria-expanded="false">Certificados</a>
            </div>


        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>