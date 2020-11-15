<?php


class TipoContrato extends DB{

    public function consultar(){
        try{
            $stm=parent::connect()->prepare("SELECT * FROM tipo_contrato");
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ);
        }catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function insertar(array $data){
        try{
            $stm=parent::connect()->prepare("INSERT INTO tipo_contrato (tipo_contrato)VALUES(?)");
            $stm->bindParam(1,$data['tipo_contrato'],PDO::PARAM_STR);
            $stm->execute();
        }catch(Exception $e){
            die($e->getMessage());
        }
    }
    public function eliminar($id){
        try{
            $stm=parent::connect()->prepare("DELETE FROM tipo_contrato WHERE id_tipo_contrato= ?");
            $stm->bindParam(1,$id,PDO::PARAM_INT);
            $stm->execute();
        }catch(Exception $e){
            die($e->getMessage());
        }
    }
    public function actualizar(array $data, $id){
        try{
            $stm=parent::connect()->prepare("UPDATE tipo_contrato SET tipo_contrato=  ? WHERE  id_tipo_contrato= ?");
            $stm->bindParam(1,$data['tipo_contrato'],PDO::PARAM_STR);
            $stm->bindParam(2,$id,PDO::PARAM_INT);
            $stm->execute();
        }catch(Exception $e){
            die($e->getMessage());
        }
    }
    public function consultar_id($id){
        try{
            $stm=parent::connect()->prepare("SELECT * FROM tipo_contrato WHERE id_tipo_contrato= ?");
            $stm->bindParam(1,$id,PDO::PARAM_INT);
            $stm->execute();
            return $stm->fetch(PDO::FETCH_OBJ);
        }catch(Exception $e){
            die($e->getMessage());
        }
    }
}
