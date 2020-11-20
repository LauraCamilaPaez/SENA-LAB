<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>incapacidades</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
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
          <li><a href="?c=Supervisor&m=index">Inicio</a></li>
          <li><a href="#">Contactanos</a></li>
          <li><a href="?c=Login&m=destroy">Salir</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1><b>Incapacidades</b></h1>
        <table class="table" style="margin-top: 40px;">
          <thead class="thead-dark">
            <tr>
              <th>Nombre</th>
              <th>Correo Electrónico</th>
              <th>Teléfono</th>
              <th>Mensaje</th>
              <th>Archivo PDF</th>
            </tr>
          </thead>
          <?php foreach (parent::consultarincapacidades()  as $r) {    ?>
            <tr>
              <th><?php echo $r->nombre ?></th>
              <td><?php echo $r->correo ?></td>
              <th><?php echo $r->telefono ?></th>
              <td><?php echo $r->mensaje ?></td>
              <td><?php echo $r->pdf ?></td>
            </tr>
          <?php } ?>
        </table>
      </div>
    </div>
  </div>
</body>

<?php
/*=============================================
        FOOTER
        =============================================*/

include "views/footer/footer.php";

echo '</div>';
?>

</html>