<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/img/sena.png">
    <title>Editar Contrato</title>
    <link rel="stylesheet" href="assets/all/css/style.css">
    <link rel="shortcut icon" href="assets/img/sena.png">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
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
                <li><a href="?c=Usuarios&m=usuarios">Regresar</a></li>
            </ul>
        </nav>
    </div>
</header>



<div class="wrapper">

    <div class="title">
        Editar Contrato
    </div>

    <form class="form" action="?c=Contrato&m=update" method="post">

        <?php
        $id = $_REQUEST['id'];
        $r = parent::request();
        ?>

        <input type="hidden" value="<?php echo $id ?>" name="id" class="form-control" readonly >

        <?php foreach($r as $a){
            if($id == $a->id_contrato){
                ?>
                <div class="inputfield">
                    <label>Tipo Contrato</label>
                    <div class="custom_select">
                        <select name="fk_tipo_contrato" >
                            <option value="">Seleccionar Cargo</option>
                            <?php foreach(parent::consultartipo_contrato() as $r) { ?>
                                <option value="<?php echo $r->id_tipo_contrato ?>"><?php echo $r->tipo_contrato ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>

                <div class="inputfield">
                    <label>salario</label>
                    <input type="number" class="input" name="salario" value="<?php echo $a->salario ?>" required>
                </div>

                <div class="inputfield">
                    <label>Fecha Inicio</label>
                    <input type="date" class="input" name="fecha_inicio" value="<?php echo $a->fecha_inicio ?>" required>
                </div>

                <div class="inputfield">
                    <label>Fecha Terminacion</label>
                    <input type="date" name="fecha_terminacion" class="input" value="<?php echo $a->fecha_terminacion ?>" required>
                </div>

                <div class="inputfield">
                    <label>Usuario</label>
                    <div class="custom_select">
                        <select name="fk_usuario" >
                            <option value="">Seleccionar Cargo</option>
                            <?php foreach(parent::consultarusuario() as $r) { ?>
                                <option value="<?php echo $r->id_usuario ?>"><?php echo $r->nombre ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
            <?php }  } ?>

        <div class="inputfield">

            <input type="submit" value="Registrar" class="btn" >

        </div>
    </form>
</div>


</body>
</html>