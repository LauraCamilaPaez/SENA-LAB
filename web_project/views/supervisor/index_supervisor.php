<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
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
        <!--li><a href="#"> SenaLAB</a></li-->
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
      <h1 class="display-4">Hola de nuevo, Supervisor!</h1>
      <p class="lead">En este apartado podrá hacer seguimiento de los usuarios adscritos al Servicio Nacional de Aprendizaje<b>(SENA)</b></p>
      <!--hr class="my-1">
      <p>Puedes entrar a este apartado cualquier día y cualquier hora! Solamente con tu Rol: Supervisor y Contraseña.</p-->
    </div>
  </head>


  <section>
    <div class="container">
      <div class="row">
        <div class="col-md-2">
          <button class="btn bis"><a href="?c=Supervisor&m=usuarios">Ver Usuarios</a></button>
        </div>
        <div class="col-md-2">
          <button class="btn bis"><a href="?c=Supervisor&m=incapacidades">Ver Incapacidades</a></button>
        </div>
        <div class="col-md-2">
          <button class="btn bis"><a href="">Ver certificados</a></button>
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

  </div>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>

</html>