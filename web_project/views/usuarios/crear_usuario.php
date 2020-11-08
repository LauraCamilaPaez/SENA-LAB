<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/img/sena.png">
	<title>Registro Usuarios</title>
    <link rel="stylesheet" href="assets/all/css/style.css">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
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
                                        <li><a href="?c=Login&m=destroy">Ingresar</a></li>
                                    </ul>
                                </nav>
                            </div>
                </header>
<div class="wrapper">
    <div class="title">
      Formulario de Registro
    </div>
    <form class="form" action="?c=Admin&m=store" method="post">
       <div class="inputfield">
          <label>Nombres</label>
          <input type="text" name="nombre" class="input" required>
       </div>  
        <div class="inputfield">
          <label>Apellidos</label>
          <input type="text" class="input" name="apellido" required>
       </div>  
       <div class="inputfield">
        <label>Tipo de Documento</label>
        <div class="custom_select">
          <select name="fk_tipo_documento">
            <option value="">seleccionar tipo documento</option>
            <?php foreach(parent::consultartipo_documento() as $r) { ?>
            <option value="<?php echo $r->id_tipo_documento ?>"><?php echo($r->tipo_documento) ?></option>
            <?php } ?>
          </select>
        </div>
     </div> 

       <div class="inputfield">
          <label>Número Documento</label>
          <input type="number" class="input" name="documento" required>
       </div>  
      <div class="inputfield">
          <label>Correo Misena</label>
          <input type="text" class="input" name="correo" required>
       </div> 
      <div class="inputfield">
          <label>Contraseña</label>
          <input type="text" name="password_user" class="input" required>
       </div> 
        <div class="inputfield">
          <label>Cargo</label>
          <div class="custom_select">
            <select name="fk_rol" >
              <option value="">Seleccionar Cargo</option>
              <?php foreach(parent::consultarRol() as $r) { ?>
                <option value="<?php echo $r->id_rol ?>"><?php echo( $r->rol)?></option>
              <?php } ?>
            </select>
          </div>
       </div>
       <div class="inputfield">
          <label>Contrato</label>
          <div class="custom_select">
            <select name="fk_tipo_contrato" >
              <option value="">Seleccionar Contrato</option>
              <?php foreach(parent::consultartipo_contrato() as $r) { ?>
                <option value="<?php echo $r->id_tipo_contrato ?>"><?php echo( $r->tipo_contrato)?></option>
              <?php } ?>
            </select>
          </div>
       </div>   


      <div class="inputfield">
        <button type="submit" value="Registrar" class="btn"></button>
      </div>
      </form>
</div>	
	
</body>
</html>



