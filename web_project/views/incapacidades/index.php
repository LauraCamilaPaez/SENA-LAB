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
                                            <!--li><a href="?c=Index&m=index">SenaLAB</a></li-->
                                            <li><a href="?c=Admin&m=index">Inicio</a></li>
                                            <li><a href="">Contactanos</a></li>
                                            <li><a href="?c=Login&m=index">Ingresar</a></li>
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
                <h1>Incapacidades</h1>
                <br>
                <br>
                
                <table class="table">

            
                    <tr>
                        <th>nombre</th>
                        <th>descripcion</th>
                        <th>pdf</th>
                    </tr>
                     <?php  foreach(parent::c()  as $r){    ?>
                  
                    <tr>
                        <td><?php echo $r->correo ?></td>
                        <td><?php echo $r->mensaje ?></td>
                        <td><?php echo $r->pdf ?></td>
                    </tr>
     
                    <?php } ?>
                </table>
            </div> 
       </div>
    </div>
</body>

</html>