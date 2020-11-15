<?php

class LoginController extends Login {

    private $usuario;

    public function index(){
        require_once('views/index/login.php');
    }

    public function __construct(){
        try{
            $this->usuario = new Admin();
        }catch(Exception $e){

        }
    }

    public function auth(){

        $email = $_POST['email'];
        $password = $_POST['password'];

        $usuario = $this->usuario->requestEmail($email, $password);
        if($email == $usuario->correo && $password == $usuario->password_user && $usuario->fk_rol == 2){
            $_SESSION['id_usuario']=$usuario;
            header('location: ?c=Admin&m=index&id=');

        }elseif($email == $usuario->correo && $password == $usuario->password_user && $usuario->fk_rol == 1){
            $_SESSION['id_usuario']=$usuario;
            header('location: ?c=Usuarios&m=index&id=');
        
        }elseif($email == $usuario->correo && $password == $usuario->$password_user && $usuario->fk_rol == 3){
            $_SESSION['id_usuario']=$usuario;
            header('location: ?c=Supervisor&m=index&id=');
        } else{
             header('location: ?c=Login&m=index&error=error');
         }
    }

    public function destroy(){
        session_destroy();
        header('location:?c=Login&m=index');
        exit();

    }
}


?>