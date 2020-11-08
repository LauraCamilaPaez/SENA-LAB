<?include ("seguridad.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/all/css/style.css">
    <title>Index Usuario</title>
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
    
        <section>
            <div class="col-9 py-3 mx-auto">
                <div class="card">
                    <div style="background: #e57816;" class="card-header text-center text-light pb-4">
                        Página principal usuario
                    </div>
                    <div class="card-body esdiv">
                    <p class="font-weight-bold m-0">Nombre</p>
                        <td><?php echo $usuario->nombre ?></td>
                        <p class="font-weight-bold m-0">Apellido</p>
                        <td><?php echo $usuario->apellido ?></td>
                        <p class="font-weight-bold m-0">Email</p>
                        <td><?php echo $usuario->correo ?></td>
                        <p class="font-weight-bold m-0">Rol</p>
                        <td><?php echo $usuario->fk_rol ?></td>
                    </div>
                </div>
            </div>
        </section>
    

      
    <div class="d-flex  justify-content-around mar mx-auto">
        <div class="btn-group">

            <a href="?m=envio&c=Incapacidades&id=" type="button" class="btn " style="width: 240px; height: 40px;"   aria-haspopup="true" aria-expanded="false">Enviar Incapacidad</a>

            <div class="dropdown-menu">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="customFileLang" lang="en">
                    <label class="custom-file-label" for="customFileLang">Seleccione archivo</label>
                </div>
            </div>
          </div>

    <div class="btn-group">    
            <a href="?c=usuarios&m=inc" type="button" class="btn btn-info "  aria-haspopup="true" aria-expanded="false">incapacidades</a>      
        </div>
    <div class="btn-group">    
            <a href="?c=usuarios&m=inc" type="button" class="btn btn-info "  aria-haspopup="true" aria-expanded="false">incapacidades</a>      
        </div>



 



    </div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>