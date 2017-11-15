<?php

class index{
    private $pdo;
    private $nombre;
    private $contraseña;
    public function __construct() {
        try {
           $this->pdo= database::coneccion();

        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    public function Login($nombre,$contrasena){
try {
  //$compro= new PDO('sqlite:/home/lynn/music.sql3');
  $this->nombre =/* $compro->Unquoted*/($nombre);
  $this->contraseña = /*$this->pdo->Unquoted*/($contrasena);
  $query = $this->pdo->prepare("SELECT id FROM users WHERE (nombre='$this->nombre' or correo='$this->nombre') AND  contraseña='$this->contraseña' LIMIT 1");
  $query->execute();
$count=$query->rowCount();
$data =  $query->fetch(PDO::FETCH_OBJ);


  if(1 > 0)
  {
  return $data;
  }
  else
  {
  return false;
}

} catch (Exception $e) {
die($e->getMessage());
}


    }


    public function updatePlanear($id,$nombre,$email,$telefono,$origen,$fecha,$nch_permanencia,$llegada,$num_personas,$num_habitaciones,$comentarios,$ventilador){
        try {
            $stm= $this->pdo->prepare("UPDATE viajes SET nombre='$nombre',correo='$email',telefono='$telefono',ciudad_origen='$origen',
           fecha_llegada='$fecha',noches_permanencia='$nch_permanencia',hora_llegada='$llegada',num_personas='$num_personas',num_habitaciones='$num_habitaciones',comentario='$comentarios',aire='$ventilador' WHERE id = '$id'");
            $stm->execute();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    public function Registrar(string $nombre,string $email,string $contraseña){
        try {
          $fecha = date("M.d.Y");
            $stm= $this->pdo->prepare("INSERT INTO users (nombre,correo,contraseña,rol,fecha) VALUES
            ('$nombre','$email','$contraseña','0','$fecha')");
            $stm->execute();
            $stm_2 = $this->pdo->prepare("SELECT MAX(id) as id FROM users;");
            $stm_2->execute();
            return $stm_2->fetch(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function DeleteViaje($id){
        try {
            $stm= $this->pdo->prepare("DELETE FROM viajes WHERE id = '$id'");
            $stm->execute();
        } catch (Exception $ex) {

        }
    }


}
