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
                    <li><a href="?c=Contacto&m=index">Contactanos</a></li>
                    <li><a href="?c=Login&m=index">Ingresar</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <div class="contac">
        <h1 class="contac1">CONTACTANOS</h1>
<form>
<label>Nombre:</label>
<input placeholder="Escribe tu nombre" />
<label>Apellidos:</label>
<input placeholder="Escribe tus apellidos" />
<label>Email:</label>
<input placeholder="Escribe tu email" />
<label>Teléfono</label>
<input placeholder="XXXXXXXXX" />
<label form="cars">Selecciona tu rol:</label>
<select name="navegador">
<option value="usuario">usuario</option>
<option value="supervisor">supervisor</option>
<option value="contratista">contratista</option>
</select>
<br>    
<br>
 <textarea cols="70" name="observaciones" rows="8">
Puedes escribir aquí tus observaciones...</textarea>
<input type="submit" value="Enviar"/>
</form>
</div>
<div class="map">
    <h1 class="contac1">ESTAMOS AQUÍ</h1>
<iframe class="map1" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63631.89762676424!2d-74.14780702089843!3d4.595167999999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f992f78f4f8a9%3A0xd2c5b29198d366db!2sCOORDINACI%C3%93N%20ACAD%C3%89MICA%20CEET%20Centro%20de%20Electricidad%2C%20Electr%C3%B3nica%20y%20Telecomunicaciones!5e0!3m2!1ses!2sco!4v1606019405636!5m2!1ses!2sco" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe> 
</div>

<h3 class="pielab"> SENA- LAB Tel: 6862545 - 6352145  Dirección: Cra. 30 #17B-25Sur, Bogotá   Email: sena-lab@hotmail.com</h3>


<?php
/*=============================================
FOOTER
=============================================*/

include "views/footer/footer.php";

echo '</div>';
?>


</body>

</html>