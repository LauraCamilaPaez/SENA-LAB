<?include ("seguridad.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <link rel="stylesheet" href="assets/all/css/style.css">
    <link rel="stylesheet" href="assets/all/css/font-awesome.css">
    <link rel="shortcut icon" href="assets/img/sena.png">

    

    <script src="assets/js/jquery-3.2.1.js"></script>
    <script src="assets/js/script.js"></script>
    <title>Index Usuario</title>
</head>
<body>
        <header class="header-nav">
                            <div class="container-nav">
                                <a href=""><img src="assets/img/logosena.png" alt="Logo Sena" class="logo"></a>
                                <nav>
                                    <ul>
                                        <li><a href="?c=Index&m=index">SenaLAB</a></li>
                                        <li><a href="?c=Usuarios&m=index">Inicio</a></li>
                                        <li><a href="">Contactanos</a></li>
                                        <li><a href="?c=Login&m=destroy">Ingresar</a></li>
                                    </ul>
                                </nav>
                            </div>
                </header>

                <!-- <div class="modal_wrap">
                    <div class="mensaje_modal">
                        <h3>Errores encontrados</h3>
                        <p>escriba un nombre</p>
                        <p>ingrese un correo</p>
                        <p>Escriba mensaje</p>
                        <p>cargue pdf de incapacidad</p>
                        <span id="btnClose">Cerrar</span>
                    </div>
                </div> -->

        <section class="form_wrap">

            <section class="contact_info">
                <section class="info_title">
                    <span class="fa fa-user-circle"></span>
                    <h2>INFORMACION<br>DE CONTACTO</h2>
                </section>
            
                <section class="info-items">
                    <p><span class="fa fa-envelope"></span> info.contact@gmial.com</p>
                    <p><span class="fa fa-phone"></span>+57 3057119159</p>
                </section>
            </section>
            
            <form action="?c=Incapacidades&m=create" method="POST" class="form_contact">
            <h2>Envia un mensaje</h2>
            <div class="user_info">
                <label for="names">Nombres *</label>
                <input type="text" id="names" name="nombre" require>

                <label for="phone">Telefono / Celular</label>
                <input type="text" id="phone " name="telefono">

                <label for="email">Correo electronico *</label>
                <input type="text" id="email" name="correo" require>

                <label for="mensaje">Mensaje *</label>
                <textarea id="mensaje" name="mensaje" require></textarea>

                <label for="pdf">Subir incapacidad</label>
                <input type="file" class="form-control-file" name="pdf" id="pdf" require>

                <input type="submit" value="Enviar Mensaje" id="btnSend">
            </div>
        </form>

        
            
        </section>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>