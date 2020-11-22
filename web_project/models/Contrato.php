<?php

class Contrato extends DB{
    public function consultarRol(){
        try{
            $stm = parent::connect()->prepare("SELECT * FROM rol");
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ);
        }catch(Exception $e){
            die($e->getMessage());
        }
    }
    public function consultarusuario(){
        try{
            $stm = parent::connect()->prepare("SELECT * FROM usuario");
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ);
        }catch(Exception $e){
            die($e->getMessage());
        }
    }
    public function consultartipo_contrato(){
        try{
            $stm = parent::connect()->prepare("SELECT * FROM tipo_contrato");
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ);
        }catch(Exception $e){
            die($e->getMessage());
        }
    }
    public function consultarId($id_contrato){
        try{
            $stm = parent::connect()->prepare('SELECT * FROM contrato  WHERE id_contrato = $id_contrato');
            $stm->execute();
            return $stm->fetch(PDO::FETCH_OBJ);
        }catch(Exception $e){
            die($e->getMessage());
        }
    }
    public function insertar($fk_tipo_contrato, $fk_usuario, $salario, $fecha_inicio, $fecha_terminacion){
        try{
            $stm = parent::connect()->prepare("INSERT INTO contrato(fk_tipo_contrato,fk_usuario,salario,fecha_inicio,fecha_terminacion) VALUES ('$fk_tipo_contrato', '$fk_usuario', '$salario', '$fecha_inicio', '$fecha_terminacion') ");
            $stm->execute();
        }catch(Exception $e){
            die($e->getMessage());
        }
    }
    public function actualizar($fk_tipo_contrato, $salario, $fecha_inicio, $fecha_terminacion, $id){
        try{
            $stm = parent::connect()->prepare("UPDATE contrato SET fk_tipo_contrato='$fk_tipo_contrato', salario='$salario', fecha_inicio='$fecha_inicio', fecha_terminacion='$fecha_terminacion' WHERE id_contrato=$id");
            $stm->execute();
        }catch(Exception $e){
            die($e->getMessage());
        }
    }
    public function requestContrato(){
		try{
			$stm=parent::connect()->prepare("SELECT * FROM contrato INNER JOIN tipo_contrato ON contrato.fk_tipo_contrato = tipo_contrato.id_tipo_contrato INNER JOIN usuario ON contrato.fk_usuario = usuario.id_usuario");
			$stm->execute();
			return $stm->fetchALL(PDO::FETCH_OBJ);
		}catch(Exception $e){
			die($e->getMessage());
		}
	}
    public function requestContractByUserId($user_id){
        try{
            $stm=parent::connect()->prepare("SELECT * FROM contrato INNER JOIN tipo_contrato ON contrato.fk_tipo_contrato = tipo_contrato.id_tipo_contrato INNER JOIN usuario ON contrato.fk_usuario = usuario.id_usuario WHERE contrato.fk_usuario = ? ");
            $stm->bindParam(1, $user_id, PDO::PARAM_INT);
            $stm->execute();
            return $stm->fetchALL(PDO::FETCH_OBJ);
        }catch(Exception $e){
            die($e->getMessage());
        }
    }
}