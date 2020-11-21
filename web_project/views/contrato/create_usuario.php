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
        <a href=""><img src="assets/img/logo-sena.png" alt="Logo Sena" class="logo"></a>
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
        <div class="col-md-4 mt-5 ml-5">
            <form action="?c=TipoContrato&m=store" method="post">
                <div class="mb-3">
                    <p>Nombre de Usuario</p>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><img style="width: 15px; height: 15px" src="assets/img/usuario.png" alt=""></span>
                        </div>
                        <input type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1">
                    </div>

                    <tbody>
                    <?php foreach ($type_contracts as $type_contract) {?>
                    <p>Tipo de Contrato</p>
                    <select class="custom-select" required>
                        <option value="">Seleccionar Tipo de Contrato</option>
                        <option value=""><?php echo ucwords($type_contracts->tipo_contrato)?></option>  
                    </select>
                    </tbody>
                    <?php } ?>
                    <p class="mt-3">Salario</p>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><img style="width: 15px; height: 15px" src="assets/img/dinero.png" alt=""></span>
                        </div>
                        <input type="number" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1">
                    </div>
                    <div class="invalid-feedback">Example invalid custom select feedback</div>
                    <p class="mt-3">Fecha de Inicio</p>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><img style="width: 15px; height: 15px" src="assets/img/calendario.png" alt=""></span>
                        </div>
                        <input type="date" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1">
                    </div>
                    <div class="invalid-feedback">Example invalid custom select feedback</div>
                    <p class="mt-3">Fecha de Fin</p>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><img style="width: 15px; height: 15px" src="assets/img/calendario.png" alt=""></span>
                        </div>
                        <input type="date" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1">
                    </div>
                    <div class="invalid-feedback">Example invalid custom select feedback</div>
                </div>
                <button type="submit" class="btn btn-primary mt-5" style="   width: auto;">Crear</button>
            </form>

        </div>
    </div>
</div>




<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>