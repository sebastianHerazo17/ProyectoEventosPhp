<?php
    if (!empty($_SESSION["id"])) {
        header("location: inicio.php");
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eventos HG</title>
    <script src="https://kit.fontawesome.com/03a89292db.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body>
<h1>EVENTOS/<b style="color: black">HG</b></h1>
    <div class="container">
        <div class="logo">
            <img class="logo_img" src="img/logo.svg" alt="">
        </div>
        <form method="post" action="" class="form">
            <?php
                include("db/conexion_bd.php");
                include("controladores/controlador_login.php");
            ?>
            <div class="form__usuario">
                <label for="">Usuario</label>
                <input type="text" class="usuario" name="usuario">
            </div>
            <div class="form__clave">
                <label for="">Contraseña</label>
                <input id="clave" type="password" class="clave" name="clave">
                <span id="ver" class="ver_clave"><i id="icono" class="fas fa-eye"></i></span>
            </div>
            <div class="form__boton">
                <input name="btningresar" class="boton" type="Submit" value="Ingresar">
            </div>
            <br>
            <div class="form__boton">
                <a>¿Aún no estás registrado? &nbsp; </a><a  href="registro.php"> Registrate</a>
            </div>
            
        </form>
    </div>
    <script src="js/main.js"></script>
</body>

</html>