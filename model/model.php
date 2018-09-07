<?php

require_once "conexion.php";

class Modelo extends conexion{

    public static function loginMod($usuario, $tabla){

		$sql = Conexion::conectar()->prepare("SELECT usuario, password FROM $tabla WHERE usuario = :usuario");
		$sql->bindParam(":usuario", $usuario, PDO::PARAM_STR);
		$sql->execute();

		return $sql->fetch();

		$sql->close();

	}
}

 ?>