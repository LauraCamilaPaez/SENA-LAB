<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <title>Contrato Instructor | Usuario</title>
    <link rel="stylesheet" href="assets/all/css/style.css">
    <link rel="shortcut icon" href="assets/img/sena.png">
</head>
<body>
<header class="header-nav">
    <div class="container-nav">
        <a href=""><img src="assets/img/logosena.png" alt="Logo Sena" class="logo"></a>
        <nav>
            <ul>
                <!--li><a href="?c=Index&m=index">SenaLAB</a></li-->
                <li><a href="?c=Admin&m=index">Inicio</a></li>
                <li><a href="">Contactanos</a></li>
                <li><a href="?c=Login&m=destroy">Salir</a></li>
            </ul>
        </nav>
    </div>
</header>
<div class="container-tabla-usuarios">
    <div class="row">
        <div class="table-responsive-sm col-md-11">
            <table class="table" style="margin-top: 50px;">
                <thead class="thead-dark">
                <tr>
                    <th scope="col"  style="visibility: hidden">#</th>
                    <th scope="col">Tipo de Contrato</th>
                    <th scope="col">Nombres</th>
                    <th scope="col">Apellidos</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Salario</th>
                    <th scope="col">Fecha inicio</th>
                    <th scope="col">Fecha terminacion</th>
                    <th scope="col">Read</th>
                </tr>
                </thead>

                <?php

                $usuario = $_SESSION['id_usuario'];

                $i=0;
                foreach(parent::requestContractByUserId($usuario->id_usuario) as $r){
                    $i++;
                    ?>

                    <tbody>
                    <tr>
                        <th scope="row" style="visibility: hidden"><?php echo $r->id_contrato ?></th>
                        <td><?php echo $r->tipo_contrato ?></td>
                        <td><?php echo $r->nombre ?></td>
                        <td><?php echo $r->apellido ?></td>
                        <td><?php echo $r->correo ?></td>
                        <td><?php echo $r->salario ?></td>
                        <td><?php echo $r->fecha_inicio ?></td>
                        <td><?php echo $r->fecha_terminacion ?></td>
                        <td>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="?c=Pdf&m=contrato" class="btn-success btn-sm p-2">Ver</a>
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





</body>
</html>