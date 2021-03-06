<?php

use Svg\DefaultStyle;

class LoginController extends Login
{

    private $usuario;

    public function index()
    {
        require_once('views/index/login.php');
    }

    public function __construct()
    {
        try {
            $this->usuario = new Admin();
        } catch (Exception $e) {
        }
    }

    /*public function auth(){

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
            header('location: ?c=Supervisor&m=index');
        }else{
            header('location: ?c=Login&m=index&error=error');
        }
        
    }*/

    public function auth()
    {
        $email = $_POST['email']; // toma de la petidion post el valor del email
        $password = $_POST['password']; // toma de la peticion post el valor del password

        echo $password; // imprimimos  12345
        echo "<br>";
        echo $email; // imprimimos j@gmail.com

        echo "<br>";

        // yo quiero crear una variable llamada $usuario
        // le asigno lo que me resulte de:
        //  $this->usuario  que es un objeto de la clase Admin, esa clase tiene una funcion llamada 
        // requestEmail que recibe un email y un  password y hace una consulta 
        // a la bd devolviendo el usuario encontrado
        $usuario = $this->usuario->requestEmail($email, $password);
    

       // trhuty values, toma ciertos valores como verdadero, true, cualqueir numero dif cero, "hola", etc
       // falsy values, es que el toma ciertos valores como falso,  false, 0, ""
       // if siempre verifica si la condicion es verdadera

        if($usuario){
            //haga esto si es verdadero
            // objetos,  attributos y metodos

           $_SESSION['id_usuario'] =  $usuario;

            switch ($usuario->fk_rol) {
                case (1):
                    header('location: ?c=Usuarios&m=index');
                    break;
                case (2):
                    header('location: ?c=Admin&m=index');
                    break;
                case (3):
                    header('location: ?c=Supervisor&m=index');
                    break;
                default:
                    header('location: ?c=Login&m=index&error=error');
                    break;
            }
        } else {
            //haga esto
            header('location: ?c=Login&m=index&error=error');
        }
        

        /* if ($email == $usuario->correo && $password == $usuario->password_user) {
            $_SESSION['id_usuario'] = $usuario;

            switch ($usuario->fk_rol) {
                case (1):
                    header('location: ?c=Admin&m=index&id=');
                    break;
                case (2):
                    header('location: ?c=Usuarios&m=index&id=');
                    break;
                case (3):
                    header('location: ?c=Supervisor&m=index');
                    break;

                default:
                    echo "Intente nuevamente";
            }
        }*/
    }

    public function destroy()
    {
        session_destroy();
        header('location:?c=Login&m=index');
        exit();
    }
}
