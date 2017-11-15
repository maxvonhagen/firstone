<?php

class database{

    public static function coneccion(){
        try {
            $pdo = new PDO('mysql:host='.DTB_HOST.';dbname='.DTB_NAME.';charset=utf8',DTB_USER,DTB_PASSWORD);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

}
?>
