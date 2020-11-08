<?php 

    class Incapacidad extends DB{
      
      public function consultar(){
        try{

          $stm = parent::connect()->prepare("SELECT * FROM incapacidades ");
          $stm->execute();

          return $stm->fetchAll(PDO::FETCH_OBJ);

        }catch(Exception $e){
          die($e->getMessage());
        }
      }



      public function insertar($correo,$descripcion,$pdf){
        try{
          $stm=parent::connect()->prepare("INSERT INTO incapacidades(correo,descripcion,pdf)VALUES('$correo','$descripcion','$pdf')");
      public function insertar($nombre,$telefono,$correo,$mensaje,$pdf){
        try{

          $stm=parent::connect()->prepare("INSERT INTO incapacidades(nombre, telefono, correo, mensaje, pdf)VALUES('$nombre','$telefono','$correo','$mensaje','$pdf')");
          $stm->execute();

        }catch(Exception $e){
           die($e->getMessage());
        }
    }

    public function c(){
			try{
				$stm=parent::connect()->prepare("SELECT id_incapacidades, nombre,telefono,corree, mensaje, pdf FROM incapacidades ");
				$stm->execute();
				return $stm->fetchALL(PDO::FETCH_OBJ);
			}catch(Exception $e){
				die($e->getMessage());
			}
		}

  
  }
?>