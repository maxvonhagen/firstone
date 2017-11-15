<?php
function all_funciones(){
  try {
 $db= database::coneccion();
  } catch (Exception $e) {
      die($e->getMessage());
  }
  try {
    $sql = $db->prepare("SELECT * FROM Productos ;");
    $sql->execute();
if ($sql->rowCount() > 0) {
while ($d =  $sql->fetchALL(PDO::FETCH_ASSOC/*PDO::FETCH_GROUP /*| PDO::FETCH_UNIQUE*/)) {
$viajes = $d;
return $viajes;
}
} else {
$viajes = false;
}

  return $viajes;

  } catch (Exception $e) {
    die($e->getMessage());
}

  }

 ?>
