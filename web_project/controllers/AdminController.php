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
        parent::insertar($fk_rol,$nombre,$apellido,$correo,$password_user,$fk_tipo_documento,$documento);
        header('location:?c=Usuarios&m=usuarios');
    }


	public function update(){
        $id = $_POST['id_usuario'];
		$fk_tipo_documento = $_POST['fk_tipo_documento'];
		$fk_rol = $_POST['fk_rol'];
		$nombre = $_POST['nombre'];
		$apellido = $_POST['apellido'];
		$correo = $_POST['correo'];
		$password_user = $_POST['password_user'];
		$documento = $_POST['documento'];
        parent::actualizar($fk_rol, $fk_tipo_documento, $nombre, $apellido, $correo, $password_user, $documento, $id );
        header('location:?c=Usuarios&m=usuarios');
      }



    public function destroy(){
        parent::destroyDato($_REQUEST['id']);
        header("location:?c=Usuarios&m=usuarios");
    }


}



 ?>






