<?php
class TipoContratoController extends TipoContrato {

    public function index(){
       $tipo_contratos=parent::consultar();
       require_once('views/tipo_contrato/index.php');
    }
    public function create(){

        require_once('views/tipo_contrato/create.php');
    }
    public function store(){
        $data=array(
            'tipo_contrato'=>$_POST['tipo_contrato']
        );
           parent::insertar($data);
           header('location:?c=TipoContrato&m=index');
    }

    public function destroy(){
        parent::eliminar($_GET['id']);
        header('location:?c=TipoContrato&m=index');
    }
    public function edit(){
       $tipo_contrato=parent::consultar_id($_GET['id']);
        require_once('views/tipo_contrato/edit.php');
    }
    public function update(){

         $data =array(
             'tipo_contrato'=>$_POST['tipo_contrato']
         );
        parent::actualizar($data,$_GET['id']);
        header('location:?c=TipoContrato&m=index');
    }
}