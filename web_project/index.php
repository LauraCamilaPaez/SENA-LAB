<?php 

require_once('core/core.php');
 //c = clase ejemplo clase UsuariosController solo se pone Usuarios
 $c=isset($_REQUEST['c']) ? $_REQUEST['c'] : 'Index';
 // m = metodo o funcion o vista ejemplo index()
 $m=isset($_REQUEST['m']) ? $_REQUEST['m'] : 'index';
 // requiere un archivo de la carpeta controllers 
 require_once('controllers/'.$c.'Controller.php');
 // sobreescritura de la  variable (c) se le concatena Controller a lo que escriba el usuarios
 // ejemplo
 // Index
 // IndexController
 $c=$c.'controller';
 $objeto= new $c();
 $objeto->$m();

 

?>