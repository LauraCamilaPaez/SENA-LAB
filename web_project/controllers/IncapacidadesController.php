<?php

class IncapacidadesController extends Incapacidad{

    public function index(){
        require_once('views/incapacidades/index.php');
    }

    public function envio(){
        require_once('views/incapacidades/envioincapacidades.php');
    }


       
    public function create(){

        // $nombre = $_POST['nombre'];
        // $correo = $_POST['correo'];
        // $telefono = $_POST['telefono'];
        // $mensaje = $_POST['mensaje'];
        // $pdf = $_POST['pdf'];

        // // DATOS PARA CORREO 
        // $destinatario = "jcadenaquintero@gmail.com";
        // $asunto = "Contacto desde nuestra web";

        // $carta = "De: $nombre \n";
        // $carta .= "Correo: $correo \n";
        // $carta .= "Telefono: $telefono \n ";
        // $carta .= "Mensaje: $mensaje \n";
        // $carta .= "Incapacidad: $pdf";

        // // ENVIAR MENSAJE

        // mail($destinatario, $asunto, $carta);
        
        
        $detino="assets/archivos/";

        $file_name = $_FILES['pdf']['name'];
        $file_size = $_FILES['pdf']['size'];
        $file_tmp = $_FILES['pdf']['tmp_name'];
        $file_type = $_FILES['pdf']['type'];


        $route_pdf="assets/archivos/".$file_name;
        move_uploaded_file($file_tmp,"assets/archivos/".basename($file_name));

        header("location:?c=Usuarios&m=index");

        parent::insertar(
                $_POST['nombre'],
                $_POST['telefono'],
                $_POST['correo'],           
                $_POST['mensaje'],
                $route_pdf

        );
        }


        

    

      
//Crete old
        // $nombre = $_POST['nombre'];
        // $correo = $_POST['correo'];
        // $telefono = $_POST['telefono'];
        // $mensaje = $_POST['mensaje'];
        // $pdf = $_POST['pdf'];

        // // DATOS PARA CORREO 
        // $destinatario = "jcadenaquintero@gmail.com";
        // $asunto = "Contacto desde nuestra web";

        // $carta = "De: $nombre \n";
        // $carta .= "Correo: $correo \n";
        // $carta .= "Telefono: $telefono \n ";
        
        // $carta .= "Mensaje: $mensaje \n";
        // $carta .= "Incapacidad: $pdf";

        // // ENVIAR MENSAJE

        // mail($destinatario, $asunto, $carta);
//create old end





}



?>