<?php

class ContratoController extends Contrato{
    public function index(){
        require_once('views/contrato/index.php');
    }
    public function detalles(){
        require_once('views/contrato/detalles_contrato.php');
    }
    public function editar(){
        require_once('views/contrato/editar_contrato.php');
    }
    public function store(){

        $fk_tipo_contrato = $_POST['fk_tipo_contrato'];
        $fk_usuario = $_POST['fk_usuario'];
        $salario = $_POST['salario'];
        $fecha_inicio = $_POST['fecha_inicio'];
        $fecha_terminacion = $_POST['fecha_terminacion'];
        parent::insertar($fk_tipo_contrato,$fk_usuario,$salario,$fecha_inicio,$fecha_terminacion);
        header('location:?c=Usuarios&m=usuarios');
    }
    public function update(){
        $id = $_POST['id'];
        $fk_tipo_contrato = $_POST['fk_tipo_contrato'];
        $fk_usuario = $_POST['fk_usuario'];
        $salario = $_POST['salario'];
        $fecha_inicio = $_POST['fecha_inicio'];
        $fecha_terminacion = $_POST['fecha_terminacion'];
        parent::actualizar($fk_tipo_contrato,$fk_usuario,$salario,$fecha_inicio,$fecha_terminacion, $id);
        header('location:?c=Usuarios&m=usuarios');
    }

}




?>  