<?php

class Contrato extends DB{
    public function all(){
        try{
            $stm=parent::connect()->prepare("SELECT * FROM contrato");
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ);
        }catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function type_contracts(){
        try {
            $stm=parent::connect()->prepare("SELECT tipo_contrato FROM tipo_contrato  ");
            $stm->execute();
            return $stm->fetch(PDO::FETCH_OBJ);
        } catch (Exception $e){
            die($e->getMessage());
        }
    }
}