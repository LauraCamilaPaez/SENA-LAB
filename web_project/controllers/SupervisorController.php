<?php

class SupervisorController extends Supervisor{

    public function index(){
        require_once('views/supervisor/index_supervisor.php');
    }

    public function usuarios(){
        require_once('views/supervisor/index_supervisor_usuario.php');
    }

	public function incapacidades(){
		require_once('views/supervisor/index_supervisor_incapacidades.php');
	}

	public function contratos(){
		require_once('views/supervisor/index_supervisor_contratos.php');
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


}


?>

