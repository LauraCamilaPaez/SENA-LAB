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
        <div class="col-md-12">
            <a  href="?c=TipoContrato&m=create" class="btn btn-info text-white">Crear</a>
             <div class="table-responsive-sm">
            <table class="table mt-5 table-hover" >
                <thead class="thead-dark">
                <tr>
                    <th >Cargo</th>
                    <th width="200px">C-R-U-D</th>
                </tr>
                </thead>

                <?php
                foreach($tipo_contratos as $r){
                    ?>

                    <tbody>
                    <tr>
                        <td><?php echo ucwords($r->tipo_contrato) ?></td>

                        <td>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="?c=TipoContrato&m=edit&id=<?php echo $r->id_tipo_contrato ?>" class=" btn-warning btn-sm mr-1">Editar</a>
                                <a href="?c=TipoContrato&m=destroy&id=<?php echo $r->id_tipo_contrato ?>" class="btn-danger btn-sm mr-1">Eliminar</a>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                <?php } ?>
                <tr>
                    <td colspan="2">
                        <small>
                        <?php
                           echo count($tipo_contratos)
                        ?>
                        tipos de contrato
                        </small>
                    </td>
                </tr>
            </table>
        </div>
        </div>
    </div>
</div>





</body>
</html>