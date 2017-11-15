<?php

class indexController{
    private $modelIndex;
    //creacion de varibale privada que contendra el modelo de security
    private $modelSecurity;
    public function __construct() {
        try {
          $this->modelIndex=new index();

        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function index(){

        require_once 'view/all/header.php';
        require_once 'view/all/navbar.php';
        require_once 'view/index/index.php';
        require_once 'view/all/footer.php';

    }
  public function Login(){

  $a =  $this->modelIndex->login($_POST['name'],$_POST['pass']);
if ($a != false) {
  $_SESSION['app_id'] = $a->id;
  echo 1;
} else {
  echo 2;
}

  }

public function Registrar(){
  if($_POST){
    $a = $this->modelIndex->Registrar($_POST['name'],$_POST['email'],$_POST['pass']);
    if (false != $a) {
    echo '<div class="alert alert-dismissible alert-success">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Exito</strong>tus datos han sido registrados.
          </div>';
          $_SESSION['app_id'] = $a->id;
    }
  }else {
    require_once 'view/all/header.php';
    require_once 'view/all/navbar.php';
    require_once 'view/index/Registrar.php';
    require_once 'view/all/footer.php';
  }
}
public function logout(){
  if (isset($_SESSION['app_id'])) {
    unset($_SESSION['app_id']);
  header('Location: ?c=index ');
}else {
  header('Location: ?c=index ');
}

}
}
