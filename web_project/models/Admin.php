<?php

class Admin extends DB{

    public function consultar(){
        try{
            $stm=parent::connect()->prepare("SELECT id_usuario, nombre, apellido, correo, password_user , fk_tipo_documento, documento");
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ);
        }catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function insertar($fk_rol, $nombre, $apellido, $correo, $password_user,  $fk_tipo_documento, $documento, $fk_tipo_contrato){
        try{
            $stm = parent::connect()->prepare("INSERT INTO usuario(fk_rol ,nombre,apellido,correo,password_user,fk_tipo_documento,documento,fk_tipo_contrato) VALUES ('$fk_rol', '$nombre', '$apellido', '$correo', '$password_user',  '$fk_tipo_documento', '$documento', '$fk_tipo_contrato') ");
            $stm->execute();
        }catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function destroyDato($UsuarioID){
        try{
          $stm=parent::connect()->prepare("DELETE FROM usuario WHERE id_usuario = ?");
          $stm->bindParam(1,$UsuarioID,PDO::PARAM_INT);
          $stm->execute();
        }catch(Exception $e){
           die($e->getMessage());
        }
    }

    public function actualizar(array $data, $id ){
        try{
            $stm = parent::connect()->prepare("UPDATE usuario SET fk_rol= ?, nombre= ?,
                                                        apellido=?,correo=?,password_user=?,
                                                        tipo_documento=?,documento=? WHERE id_usuario= ?");
            $stm->bindParam(1,$data['fk_rol'],PDO::PARAM_STR);
            $stm->bindParam(2,$data['nombre'],PDO::PARAM_STR);
            $stm->bindParam(3,$data['apellido'],PDO::PARAM_STR);
            $stm->bindParam(4,$data['correo'],PDO::PARAM_STR);
            $stm->bindParam(5,$data['password_user'],PDO::PARAM_STR);
            $stm->bindParam(6,$data['tipo_documento'],PDO::PARAM_STR);
            $stm->bindParam(7,$data['documento'],PDO::PARAM_STR);
            $stm->bindParam(8,$id,PDO::PARAM_INT);
            $stm->execute();
        }catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function requestEmail($email, $password){
        try{
            $stm = parent::connect()->prepare('SELECT * FROM usuario WHERE correo = ? AND password_user = ? ');
            $stm->bindParam(1,$email,PDO::PARAM_STR);
            $stm->bindParam(2,$password,PDO::PARAM_STR);
            $stm->execute();
            return $stm->fetch(PDO::FETCH_OBJ);
        }catch(Exception $e){
            die("error".$e->getMessage());
        }
    }
    public function consultarRol(){
        try{
            $stm = parent::connect()->prepare("SELECT rol");
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ);
        }catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function consultartipo_documento(){
        try{
            $stm = parent::connect()->prepare("SELECT * FROM tipo_documento");
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

    public function consultraId($id)
    {
        try {
            $stm = parent::connect()->prepare('SELECT * FROM usuario  WHERE id_usuario = $id');
            $stm->execute();
            return $stm->fetch(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function request(){
		try{
			$stm=parent::connect()->prepare("SELECT * FROM usuario INNER JOIN rol ON usuario.fk_rol = rol.id_rol INNER JOIN tipo_documento ON usuario.fk_tipo_documento = tipo_documento.id_tipo_documento");
			$stm->execute();
			return $stm->fetchALL(PDO::FETCH_OBJ);
		}catch(Exception $e){
			die($e->getMessage());
		}
	}

}

?>