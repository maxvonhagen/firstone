<?php
session_start();
define('DTB_NAME','tienda');
define('DTB_HOST','localhost');
define('DTB_USER','root');
define('DTB_PASSWORD', '');
//Maximo de sillas
define('NUM_SILLAS',5);
define('APP_TITLE','Cine sebastian');
define('IMG_ALTURA','200PX');
define('NUM_SALAS',10);


require_once ('model/database.php');
require_once ('model/index.php');
require_once ('core/bin/function/funciones.php');


?>
