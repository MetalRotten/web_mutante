<?php

//Login

if(isset($_POST["submit"]) ){

    $usuario = filter_var( $_POST["user"], FILTER_SANITIZE_STRING);
    $password = filter_var( $_POST["pass"], FILTER_SANITIZE_STRING);

    require_once "controller/controller.php";
    require_once "model/model.php";

    $login = new Controlador();
    $respuestaLogin = $login -> loginCon($usuario, $password);

}


?>


<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Viewport -->
    <meta name="viewport" content="width=device-width, initial-scale=1 user-scalable=no" />

    <title>Web Mutante</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet"> 

</head>

<body>
    <main class="container">
        <section class="login">
            <div class="titulo text-center">
               <h1><span class="verde">W</span>eb <span class="verde">M</span>utante</h1>
                <div class="formulario">
                    <form method="post">
                        <div class="form-group">
                           <label for="user" class="float-left">Usuario:</label>
                            <input type="text" class="form-control" placeholder="..." name="user" id="user">
                        </div>
                        <div class="form-group">
                           <label for="pass" class="float-left">Password:</label>
                            <input type="password" class="form-control" placeholder="..." name="pass" id="pass">
                        </div>
                        <div class="form-group">
                            <button type="submit" id="entrar" name="submit">Entrar</button>
                        </div>
                         
                        <div class="form-group">
                            <?php
                                if(isset($respuestaLogin) ){ 
                                echo $respuestaLogin;
                                    }
                            ?>
                        </div>

                    </form>
                </div>
            </div>
        </section>
    </main>

    
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>
