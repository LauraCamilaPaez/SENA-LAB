<?php

class Usuario extends DB{

    public function request(){
		try{
			$stm=parent::connect()->prepare("SELECT * FROM usuario INNER JOIN rol ON usuario.fk_rol = rol.id_rol INNER JOIN tipo_documento ON usuario.fk_tipo_documento = tipo_documento.id_tipo_documento");
			$stm->execute();
			return $stm->fetchALL(PDO::FETCH_OBJ);
		}catch(Exception $e){
			die($e->getMessage());
		}
    }
    

	public function consultarRol(){
        try{
            $stm = parent::connect()->prepare("SELECT * FROM rol");
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ);
        }catch(Exception $e){
            die($e->getMessage());
        }
    }
    public function consultarTipoDocumento(){
        try{
            $stm = parent::connect()->prepare("SELECT * FROM tipo_documento");
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ);
        }catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function consultarTipoDocumento(){
        try{
            $stm = parent::connect()->prepare("SELECT * FROM tipo_documento");
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ);
        }catch(Exception $e){
            die($e->getMessage());
        }
    }

}



?>