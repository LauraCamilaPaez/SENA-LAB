<?php

    class Supervisor extends DB{

        public function consultar(){
            try{
                $stm=parent::connect()->prepare("SELECT id_usuario, fk_rol, nombre, apellido, correo, password_user , fk_tipo_documento, documento");
                $stm->execute();
                return $stm->fetchAll(PDO::FETCH_OBJ);
            }catch(Exception $e){
                die($e->getMessage());
            }
        }

        public function consultraId($id){
            try{
                $stm = parent::connect()->prepare('SELECT * FROM usuario  WHERE id_usuario = $id');
                $stm->execute();
                return $stm->fetch(PDO::FETCH_OBJ);
            }catch(Exception $e){
                die($e->getMessage());
            }
        }

        public function request(){
            try{
                $stm=parent::connect()->prepare("SELECT * FROM usuario INNER JOIN rol ON usuario.fk_rol = rol.id_rol INNER JOIN tipo_documento ON usuario.fk_tipo_documento = tipo_documento.id_tipo_documento");
                $stm->execute();
                return $stm->fetchALL(PDO::FETCH_OBJ);
            }catch(Exception $e){
                die($e->getMessage());
            }
        }

        public function consultarincapacidades(){
			try{
				$stm=parent::connect()->prepare("SELECT id_incapacidades, nombre, telefono, correo, mensaje, pdf FROM incapacidades ");
				$stm->execute();
				return $stm->fetchALL(PDO::FETCH_OBJ);
			}catch(Exception $e){
				die($e->getMessage());
			}
		}



    }

    

?>