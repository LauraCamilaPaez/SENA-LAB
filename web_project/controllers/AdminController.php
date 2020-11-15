<?php
class AdminController extends Admin{

    public function index(){
        require_once('views/admin/index_admin.php');
    }

    public function create(){
        require_once('views/usuarios/crear_usuario.php');
    }
    

    public function store(){

        $fk_rol = $_POST['fk_rol'];
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $correo = $_POST['correo'];
        $password_user = $_POST['password_user'];
        $fk_tipo_documento = $_POST['fk_tipo_documento'];
        $documento = $_POST['documento'];
        $fk_tipo_contrato = $_POST['fk_tipo_contrato'];
        parent::insertar($fk_rol,$nombre,$apellido,$correo,$password_user,$fk_tipo_documento,$documento,$fk_tipo_contrato);
        header('location:?c=Usuarios&m=usuarios');
    }


    public function update(){
        $id = $_POST['id'];
        $fk_rol = $_POST['fk_rol'];
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $correo = $_POST['correo'];
        $password_user = $_POST['password_user'];
        $tipo_documento = $_POST['tipo_documento'];
        $documento = $_POST['documento'];
        parent::actualizar($fk_rol, $nombre, $apellido, $correo, $password_user,  $tipo_documento, $documento, $id );
        header('location:?c=Usuarios&m=editar');
    }


    public function destroy(){
        parent::destroyDato($_REQUEST['id']);
        header("location:?c=Usuarios&m=usuarios");
    }


}



 ?>






