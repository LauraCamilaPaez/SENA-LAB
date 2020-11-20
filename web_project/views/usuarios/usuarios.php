<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <title>Document</title>
    <link rel="stylesheet" href="assets/all/css/style.css">
    <link rel="shortcut icon" href="assets/img/sena.png">
</head>

<body>
    <header class="header-nav">
        <div class="container-nav">
            <a href=""><img src="assets/img/logosena.png" alt="Logo Sena" class="logo"></a>
            <nav>
                <ul>
                    <li><a class="nav-link disabled" href="#">SenaLAB</a></li>
                    <li><a href="?c=Admin&m=index">Inicio</a></li>
                    <li><a href="">Contactanos</a></li>
                    <li><a href="?c=Login&m=destroy">Salir</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <div class="container">
        <div class="row">
            <div class="table-responsive-sm">
                <table class="table" style="margin-top: 40px;">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col" style="visibility: hidden">#</th>
                            <th scope="col">Cargo</th>
                            <th scope="col">Nombres</th>
                            <th scope="col">Apellidos</th>
                            <th scope="col">Correo</th>
                            <th scope="col">Tipo_documento</th>
                            <th scope="col">Numero_documento</th>
                            <th scope="col">C-R-U-D</th>
                        </tr>
                    </thead>

                    <?php
                    $i = 0;
                    foreach (parent::request() as $r) {
                        $i++;
                    ?>

                        <tbody>
                            <tr>
                                <th scope="row" style="visibility: hidden"><?php echo $r->id_usuario ?></th>
                                <td><?php echo $r->rol ?></td>
                                <td><?php echo $r->nombre ?></td>
                                <td><?php echo $r->apellido ?></td>
                                <td><?php echo $r->correo ?></td>
                                <td><?php echo $r->tipo_documento ?></td>
                                <td><?php echo $r->documento ?></td>
                                <td>
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <a href="?c=Admin&m=create" class="btn-info btn-sm"> <i class="fas fa-plus"></i> Crear usuarios</a>
                                        <a href="?c=Usuarios&m=editar&id=<?php echo $r->id_usuario ?>" class=" btn-warning btn-sm">Editar</a>
                                        <a href="?c=Admin&m=destroy&id=<?php echo $r->id_usuario ?>" class="btn-danger btn-sm">Eliminar</a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>
    </section>
    <?php
    /*=============================================
        FOOTER
        =============================================*/

    include "views/footer/footer.php";

    echo '</div>';
    ?>




</body>

</html>