<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inicio Supervisor</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/all/css/style.css">
  <link rel="shortcut icon" href="assets/img/sena.png">
  <script src="https://kit.fontawesome.com/a81368914c.js"></script>
  <script src="https://kit.fontawesome.com/a81368914c.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</head>
<header class="header-nav">
  <div class="container-nav">
    <a href=""><img src="assets/img/logosena.png" alt="Logo Sena" class="logo"></a>
    <nav>
      <ul>
        <li><a class="nav-link disabled" href="#"> SenaLAB</a></li>
        <li><a href="?c=Supervisor&m=index">Inicio</a></li>
        <li><a href="#">Contactanos</a></li>
        <li><a href="?c=Login&m=destroy">Salir</a></li>
      </ul>
    </nav>
  </div>
</header>

<body>

  <head>
    <div class="jumbotron">
      <?php $usuario = $_SESSION['id_usuario'] ?>
      <h1 class="display-4 ">Hola de nuevo, <?php echo $usuario->nombre ?></h1>
      <p class="lead">En este apartado usted podra hacer seguimiento a los docentes del Servicio Nacional de Aprendizaje <b>SENA.</b></p>
      <hr class="my-4">
      <p>Puedes entrar a este apartado en cualquier momento.</p>
    </div>
  </head>

  <section>
    <div class="container">
      <div class="row">
        <div class="btn-group-justifique">

          <div class="btn-group">
            <!--button class="btn bis"><a href="?c=Supervisor&m=usuarios">Ver Usuarios</a></button-->
            <a href="?c=Supervisor&m=usuarios" type="button" class="btn btn-info " aria-haspopup="true" aria-expanded="false">Ver Usuarios</a>
          </div>

          <div class="btn-group">
            <!--button class="btn bis"><a href="?c=Supervisor&m=incapacidades">Ver Incapacidades</a></button-->
            <a href="?c=Supervisor&m=incapacidades" type="button" class="btn btn-info " aria-haspopup="true" aria-expanded="false">Ver Incapacidades</a>
          </div>

          <div class="btn-group">
            <a href="#" type="button" class="btn btn-info " aria-haspopup="true" aria-expanded="false">Ver Certificados</a>
          </div>
          <div class="btn-group">
            <a href="#" type="button" class="btn btn-info " aria-haspopup="true" aria-expanded="false">Contrato</a>
          </div>

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

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>

</html>