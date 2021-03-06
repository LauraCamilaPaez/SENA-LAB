<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contrato</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/all/css/style.css">
</head>
<body>

    <header class="header-nav">
      <div class="container-nav">
        <a href=""><img src="assets/img/logo-sena.png" alt="Logo Sena" class="logo"></a>
        <nav>
          <ul>
            <li><a href="?c=Index&m=index"> SenaLAB</a></li>
            <li><a href="?c=Supervisor&m=index">Inicio</a></li>
            <li><a href="#">Contactanos</a></li>
            <li><a href="?c=Login&m=destroy">Salir</a></li>
          </ul>
        </nav>
      </div>
    </header>
    <div class="container ">
    <div class="container">
       <div class="row">
            <div class="col-md-12">
            <br><br>
            <br>
                <h1>Tipo contrato</h1>
                <br>
                <br>

                <table class="table">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Cargo</th>
                        <th scope="col">Tipo de Contrato</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php  foreach(parent::consultartipocontrato()  as $r){    ?>
                    <tr>
                        <td><?php echo $r->id_tipo_contrato ?></td>
                        <td>Laura Camila</td>
                        <td>Usuario</td>
                        <td><?php echo $r->tipo_contrato ?></td>
                    </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div> 
       </div>
    </div>
</div>
</body>
</html>