<?php

class ContratoController extends Contrato{
    public function index(){
        $contratos=parent::all();
        require_once('views/contrato/index.php');
    }

    public function index_usuario(){
        $contratos=parent::all();
        require_once('views/contrato/index_usuario.php');
    }

    public function create_usuario(){
        $type_contracts=parent::type_contracts();
        require_once('views/contrato/create_usuario.php');
    }
}