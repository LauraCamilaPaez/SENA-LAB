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

    public function auth()
    {




        $email = $_POST['email']; 
        $password = $_POST['password']; 

        echo $password; 
        echo "<br>";
        echo $email; 

        echo "<br>";

        $usuario = $this->usuario->requestEmail($email, $password);


        if ($usuario) {

            $_SESSION['id_usuario'] =  $usuario;

            switch ($usuario->fk_rol) {
                case (1):
                    header('location: ?c=Admin&m=index');
                    break;
                case (2):
                    header('location: ?c=Supervisor&m=index');
                    break;
                case (3):
                    header('location: ?c=Usuarios&m=index');
                    break;
                default:
                    header('location: ?c=Login&m=index&error=error');
                    break;
            }
        } else {
           
            header('location: ?c=Login&m=index&error=error');
        }
    }

    public function destroy()
    {
        session_destroy();
        header('location:?c=Login&m=index');
        exit();
    }
}
