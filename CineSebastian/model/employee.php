<?php

class Employee{
    private $pdo;
    private $fecha;
    private $id_dueno;
    private $id;
    public function __construct() {
        try {
           $this->pdo= database::coneccion();
           $this->id_dueno = isset($_SESSION['app_id']) ? $_SESSION['app_id'] :null ;

        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function RegistrarCompra(string $nombre, string $email, string $asientos,int $num_asientos,string $pelicula){
        try {
          $this->fecha = date("M.d.Y");
            $stm= $this->pdo->prepare("INSERT INTO compras (nombre,email,pelicula,fecha,asientos,cantidad_boletos) VALUES
            ('$nombre','$email','$pelicula','$this->fecha','$asientos','$num_asientos')");
            $stm->execute();
            return true;

        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
public function add_funcion(Array $data)
{
  try {
    $this->fecha = date("M.d.Y", time());
      $stm= $this->pdo->prepare("INSERT INTO Productos (pelicula,id_dueno,hora,sala,fecha_registro,imagen) VALUES
      (?,'$this->id_dueno',?,?,'$this->fecha',?)");
      $stm->bindParam(1,$data['nombre_pelicula'],PDO::PARAM_STR );
      $stm->bindParam(2,$data['hora_funcion'],PDO::PARAM_STR);
      $stm->bindParam(3,$data['num_sala'],PDO::PARAM_STR);
      $stm->bindParam(4,$data['img'],PDO::PARAM_STR);
      $stm->execute();

  } catch (Exception $e) {
      die($e->getMessage());
  }
}
public function delete_funcion($id)
{
  $this->id= $id;
$query = $this->pdo->prepare(" DELETE FROM `funciones` WHERE id_funciones='$this->id'");
$query->execute();
}



}
