<?php
class Conexion{
    public function conectar(){
      $usu = "root";
      $pass = "";
      $bdName = "pdof";
try {
  $conexion = new PDO("mysql:host=localhost;dbname=$bdName", "$usu","$pass");
  return $conexion;
} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}

    }
}

 ?>
