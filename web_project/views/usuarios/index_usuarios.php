<?include ("seguridad.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/all/css/style.css">
    <link rel="shortcut icon" href="assets/img/sena.png">
    <title>Index Usuario</title>
</head>
<body>
        <header class="header-nav">
                            <div class="container-nav">
                                <a href=""><img src="assets/img/logosena.png" alt="Logo Sena" class="logo"></a>
                                <nav>
                                    <ul>
                                        <li><a href="?c=Index&m=index">SenaLAB</a></li>
                                        <li><a href="?c=Usuarios&m=index">Inicio</a></li>
                                        <li><a href="">Contactanos</a></li>
                                        <li><a href="?c=Login&m=destroy">Salir</a></li>
                                    </ul>
                                </nav>
                            </div>
                </header>
   

      
    <div class="d-flex  justify-content-around mar mx-auto">
        <div class="btn-group">
            <a href="?m=envio&c=Incapacidades&id=" type="button" class="btn " style="width: 240px; height: 40px;"   aria-haspopup="true" aria-expanded="false">Enviar Incapacidad</a>
        </div>

            <div class="dropdown-menu">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="customFileLang" lang="en">
                    <label class="custom-file-label" for="customFileLang">Seleccione archivo</label>
                </div>
            </div>

        <div class="btn-group espaciobutton">
            <a href="?c=Certificados&m=index" type="button" class="btn btn-info "  aria-haspopup="true" aria-expanded="false">Contrato</a>
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