<?php

class UsuariosController extends Usuario{

    public function index(){
        require_once('views/usuarios/index_usuarios.php');
    }
    
    public function usuarios(){
        require_once('views/usuarios/usuarios.php'); 
    }

	public function editar(){
		require_once('views/usuarios/editar_usuario.php');
	}

    public function inc(){
		require_once('views/usuarios/incapacidades.php');
	}

    
}

?>