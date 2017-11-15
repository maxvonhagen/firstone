<?php
/**
 *
 */
 require_once ('model\employee.php');
class employeeController
{

  private $modelIndex;
  private $_funciones;
  private $funcion;

  public function __construct() {
      try {
        $this->modelIndex=new Employee();
        $this->_funciones = all_funciones();

      } catch (Exception $e) {
          die($e->getMessage());
      }
  }

public function index(){
  if (isset($_SESSION['app_id'])) {
    require_once 'view/all/header.php';
    require_once 'view/all/navbar.php';
    require_once 'view/emplados/index.php';
    require_once 'view/all/footer.php';
  } else {
    header('Location: ?c=index');
  }
}
public function asignar()
{
    if (isset($_SESSION['app_id']) && isset($_GET['id'])) {
      if ($_POST) {
    $a =$this->modelIndex->RegistrarCompra($_POST['name'],$_POST['email'],$_POST['asientos'],$_POST['num_asientos'],$_POST['pelicula']);
    if (false != $a) {
      echo '<div class="alert alert-dismissible alert-success">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
      <strong>Exito</strong>Los asientos furon registrados.
    </div>';
    }
      }else {
        require_once 'view/all/header.php';
        require_once 'view/all/navbar.php';
        require_once 'view/emplados/employee.php';
        require_once 'view/all/footer.php';
      }
  } else {
  header('Location: ?c=index');
  }

}
public function imagen()
{
  if (isset($_FILES["file"]))
  {
      $file = $_FILES["file"];
      $nombre = $file["name"];
      $tipo = $file["type"];
      $ruta_provisional = $file["tmp_name"];
      $size = $file["size"];
      $dimensiones = getimagesize($ruta_provisional);
      $width = $dimensiones[0];
      $height = $dimensiones[1];
      $carpeta = "view/app/img/img_funciones/";

      if ($tipo != 'image/jpg' && $tipo != 'image/jpeg' && $tipo != 'image/png' && $tipo != 'image/gif')
      {
        echo "Error, el archivo no es una imagen";
      }
      else if ($size > 1024*1024)
      {
        echo "Error, el tamaño máximo permitido es un 1MB";
      }

          $src = $carpeta.$nombre;
          move_uploaded_file($ruta_provisional, $src);
          echo  '<img src='.$src.' width="'.IMG_ALTURA.'">';
          return $nombre;

      }
  }


public function add_funcion()
{
  if (!isset($_SESSION['app_id'])) {
    if ($_POST) {

        $this->funcion = array('nombre_pelicula' =>$_POST['nombre_pelicula'] ,
        'hora_funcion'=>$_POST['hora_funcion'],
        'num_sala'=>$_POST['num_sala'],
      'img'=>$_POST['img']);
        $this->modelIndex->add_funcion($this->funcion);
       echo 1;

    } else {
      require_once 'view/all/header.php';
      require_once 'view/all/navbar.php';
      require_once 'view/emplados/add_funcion.php';
      require_once 'view/all/footer.php';

    }


  } else {
    header('Location: ?c=index');
  }

}
public function delete_funcion()
{
  if (isset($_GET['id'])) {
    $this->modelIndex->delete_funcion($_GET['id']);
    header('Location: ?c=employee&m=index&delete=true');
  } else {
    header('Location: ?c=employee&m=index');
  }


}
  }



 ?>
