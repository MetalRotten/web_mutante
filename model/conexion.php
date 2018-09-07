<?php
    class conexion{
        public static function conectar(){
            $conexion = new PDO("mysql:host=localhost;dbname=mutante","root","");
            return $conexion;
        }
    }
?>