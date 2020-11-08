<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets/all/css/style.css">
    <link rel="shortcut icon" href="assets/img/sena.png">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <title>inicio de Sesión</title>
</head>

<body>

    <header class="header-nav">
        <div class="container-nav">
            <a href=""><img src="assets/img/logosena.png" alt="Logo Sena" class="logo"></a>
            <nav>
                <ul>
                    <li><a href="index.php">SenaLAB</a></li>
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="">Contactanos</a></li>
                    <li><a href="?c=Login&m=index">Ingresar</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <div class="container">

        <?php if (@$_REQUEST['error']) { ?>
            <div class="ui stackable container mg-top-10 grid">
                <div class="row">
                    <div class="four wide column"></div>
                    <div class="eight wide center aligned column">
                        <div class="ui red inverted segment">
                            <h2>Correo o Contraseña Incorrecta</h2>
                        </div>
                    </div>
                </div>
            </div>
    </div>
<?php } ?>

<?php if (@$_REQUEST['created']) { ?>
    <div class="ui stackable container mg-top-10 grid">
        <div class="row">
            <div class="four wide column"></div>
            <div class="eight wide center aligned column">
                <div class="ui green inverted segment">
                    <h2>Usuario Creado Correctamente</h2>
                </div>
            </div>
        </div>
    </div>
    </div>
<?php } ?>

<div class="container-login">
    <div class="img">
        <img src="assets/img/bogota.png">
    </div>
    <div class="login-content">
        <form action="?c=Login&m=auth" method="post">
            <img src="assets/img/sena.png">
            <h2 class="title">Bienvenido</h2>
            <div class="input-div one">
                <div class="i">
                    <i class="fas fa-user"></i>
                </div>
                <div class="div">
                    <h5>Correo</h5>
                    <input type="email" name="email" class="input" placeholder="" required>
                </div>
            </div>
            <div class="input-div pass">
                <div class="i">
                    <i class="fas fa-lock"></i>
                </div>
                <div class="div">
                    <h5>Contraseña</h5>
                    <input type="password" name="password" placeholder="" class="input" required>
                </div>
            </div>
            <input type="submit" class="btn" value="Login">
        </form>
    </div>
</div>
<script type="text/javascript" src="assets/all/js/main.js"></script>

<?php
/*=============================================
FOOTER
=============================================*/

include "views/footer/footer.php";

echo '</div>';
?>


</body>

</html>