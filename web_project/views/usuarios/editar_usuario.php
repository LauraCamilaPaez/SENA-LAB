<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/img/sena.png">
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
        $r = parent::request();
        ?>

        <input type="hidden" value="<?php echo $id ?>" name="id" class="form-control" readonly >

        <?php foreach($r as $a){
            if($id == $a->id_usuario){
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

                    <div class="custom_select">
                        <select  name="tipo_documento">
                            <option value="<?php echo $a->tipo_documento ?>" >Seleccionar Tipo de Documento</option>
                            <option value="cedula de ciudadania" >Cédula de Ciudadanía</option>
                            <option value="cedula de extranjeria">Cédula de Extranjería</option>
                        </select>
                    </div>
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
                    <input type="text" name="password_user" class="input" value="<?php echo $a->password_user ?>" readonly >
                </div>

                <div class="inputfield">
                    <label>Cargo</label>

                    <div class="custom_select">
                        <select name="fk_rol" >

                            <option value="">Seleccionar Cargo</option>

                            <?php foreach(parent::consultarRol() as $r) { ?>
                                <option value="<?php echo $r->id_rol ?>"><?php echo $r->rol ?></option>
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