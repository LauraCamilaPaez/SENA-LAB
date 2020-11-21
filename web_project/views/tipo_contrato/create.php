<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <title>Document</title>
    <link rel="stylesheet" href="assets/all/css/style.css">
</head>
<body>
<header class="header-nav">
    <div class="container-nav">
        <a href=""><img src="assets/img/logosena.png" alt="Logo Sena" class="logo"></a>
        <nav>
            <ul>
                <li><a href="?c=Index&m=index">SenaLAB</a></li>
                <li><a href="?c=Admin&m=index">Inicio</a></li>
                <li><a href="">Contactanos</a></li>
                <li><a href="?c=Login&m=destroy">Salir</a></li>
            </ul>
        </nav>
    </div>
</header>
<div class="container">
    <div class="row">
        <div class="col-md-4 mt-5">
            <form action="?c=TipoContrato&m=store" method="post">
                <div class="form-group">
                    <label for="tipo_contrato">Nombre del tipo de contrato</label>
                    <input type="text" class="form-control" id="tipo_contrato" name="tipo_contrato">
                </div>
                <hr>
                <button type="submit" class="btn btn-primary" style="   width: auto;">Registrar</button>
            </form>
        </div>
    </div>
</div>





</body>
</html>