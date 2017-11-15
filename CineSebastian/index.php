<?php

require_once 'core/core.php';

if(!isset($_GET['c'])){
    $controller="index";
    require_once ('controller/'.$controller.'Controller.php');
    $controller=$controller.'Controller';
    $controller= new $controller();
    $controller->index();
}else{
    $controller=$_GET['c'];
    require_once ('controller/'.$controller.'Controller.php');
    $controller=$controller.'Controller';
    $controller= new $controller();
    $metodo=isset($_GET['m']) ? $_GET['m'] : 'index';
    if (method_exists($controller,$metodo)) {
            call_user_func(array($controller,$metodo));
    } else {
      require_once('view/error/error.php');
    }

}
?>
