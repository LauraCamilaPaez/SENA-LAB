<?php
    class SecurityController{
        public function destry(){
            session_destroy();

            header('location:?c=Login&m=login');

            exit();
        }
    }
?>