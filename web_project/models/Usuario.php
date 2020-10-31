<?php

class Usuario extends DB{

    public function request(){
		try{
			$stm=parent::connect()->prepare("SELECT * FROM usuario INNER JOIN rol ON usuario.fk_rol = rol.id_rol");
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

}



?>