<?php

class Controlador{

    public static function loginCon($usuario, $password){
        
        $passha = sha1($password);

        $respuesta = Modelo::loginMod($usuario, "usuarios");

        if($respuesta > 0){

            if( $respuesta["usuario"] == $usuario && $respuesta["password"] == $passha ){

                $_SESSION["usuario"] = $respuesta["usuario"];

                return '<div class="alert alert-success"><p>¡Ingresado!</p></div>';

            }else{
                return '<div class="alert alert-warning"><p>Credenciales Inválidas</p></div>';
            }

        }else{
            return '<div class="alert alert-warning"><p>Credenciales Inválidas</p></div>';
        }

    }

}
 ?>