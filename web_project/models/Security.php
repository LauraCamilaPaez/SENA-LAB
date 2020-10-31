<?php
    class Security extends DB{
        public function validar_sesion(){
            if(empty($_SESSION['user']) || is_null($_SESSION['user'])){
                header("location:?c=Login&m=login");
            }
        }
    }
?>