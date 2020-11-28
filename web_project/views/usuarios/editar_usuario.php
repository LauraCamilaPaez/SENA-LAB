<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/img/sena.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <title>Registro Usuarios</title>
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
                <li><a href="?c=Login&m=destroy">Salir</a></li>
            </ul>
        </nav>
    </div>
</header>



<div class="wrapper">

    <div class="title">

        Formulario de Registro

    </div>

    <form class="form" action="?c=Admin&m=update" method="post">

        <?php
        $id = $_REQUEST['id'];
        $r = parent::request();
        ?>

        <input type="hidden" value="<?php echo $id ?>" name="id_usuario" class="form-control" readonly >

        <?php foreach($r as $a){
            if($id == $a->id_usuario){
                ?>

                <div class="inputfield">

                    <label>Nombres</label>
                    <input type="text" name="nombre" class="input" value="<?php echo $a->nombre ?>" required>

                </div>


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
    <div class="wrapper">
        <div class="title">
            Formulario de Registro
        </div>
        <form class="form" action="?c=Admin&m=update" method="post">
            <?php
          $id = $_REQUEST['id'];
            $r = parent::request();
            ?>
            <input type="hidden" value="<?php echo $id ?>" name="id_usuario" class="form-control" readonly>
            <?php foreach ($r as $a) {
                if ($id == $a->id_usuario) {
            ?>
                    <div class="inputfield">
                        <label>Nombres</label>
                        <input type="text" name="nombre" class="input" value="<?php echo $a->nombre ?>" required>
                    </div>
                    <div class="inputfield">
                        <label>Apellidos</label>
                        <input type="text" class="input" name="apellido" value="<?php echo $a->apellido ?>" required>

                    </div>

                    <div class="inputfield">
                        <label>Tipo de Documento</label>
                        <input type="number" class="input" name="tipo_documento" value="<?php echo $a->fk_tipo_documento ?>" required>
                    </div>


                    <div class="inputfield">
                        <label>Número Documento</label>
                        <input type="number" class="input" name="documento" value="<?php echo $a->documento ?>" required>
                    </div>

                    <div class="inputfield">
                        <label>Correo Misena</label>
                        <input type="text" class="input" name="correo" value="<?php echo $a->correo ?>" required>
                    </div>
                    <div class="inputfield">
                        <label>Contraseña</label>
                        <input type="text" name="password_user" class="input" value="<?php echo $a->password_user ?>" readonly>
                    </div>

                    <div class="inputfield">
                        <label>Tipo de Contrato</label>
                        <input type="number" class="input" name="tipo_contrato" value="<?php echo $a->fk_tipo_contrato ?>" required>
                    </div>

                     <div class="inputfield">
                        <label>Rol</label>
                        <input type="number" class="input" name="fk_rol" value="<?php echo $a->fk_rol ?>" required>
                    </div>

                    <div class="inputfield">
                        <label>Estado</label>
                        <input type="text" class="input" name="estado" value="<?php echo $a->estado ?>" required>
                    </div>


                    <!--div class="inputfield">
                        <label>Cargo</label>
                        <input type="number" name="fk_rol" class="input" value="<?php/* echo $a->fk_rol */?>" readonly>
                        <div class="custom_select">

                            <select name="fk_rol">
                                <option value="">Seleccionar Cargo</option>
                        </div>
                <div class="inputfield">
                    <label >Tipo_documento</label>

                    <div class="custom_select">
                            <select name="fk_tipo_documento" >

                                <option value="">Seleccionar Cargo</option>

                                <?php foreach(parent::consultarTipoDocumento() as $r) { ?>
                                    <option value="<?php echo $r->id_tipo_documento ?>"><?php echo $r->tipo_documento ?></option>
                                <?php } ?>

                            </select>
                    </div>

                </div>
            <?php }  } ?>

                        <div class="inputfield">
                            <label>Tipo_documento</label>
                            <option value="">Tipo de documento</option>

                            <?php/* foreach (parent::consultarTipoDocumento() as $r) { */?>
                                <option value="<?php /*echo $r->id_tipo_documento */ ?>"><?php/* echo $r->tipo_documento */?></option>
                            <?php/* }*/ ?>

                            </select>
                        </div>

                    </div-->
            <?php }
            } ?>

            <div class="inputfield">
                <input type="submit" value="Registrar" class="btn">
            </div>
        </form>
    </div>
</body>

</html>