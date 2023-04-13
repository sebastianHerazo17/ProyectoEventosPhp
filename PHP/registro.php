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
    <a href="index.php"><h1>EVENTOS/<b style="color: black">HG</b></h1></a>
    <div class="container">
        <div class="logo">
            <img class="logo_img" src="img/logo.svg" alt="">
        </div>
        <form method="post" action="" class="form">
            <?php
                include("db/conexion_bd.php");
                include("controladores/controlador_registro.php");
            ?>
            <div class="form__usuario" style="color: green;">
                <label for="">REGISTRAR USUARIO</label>
            </div>
            <div class="form__usuario">
                <label for="">Nombres</label>
                <input type="text" class="usuario" name="nombres">
            </div>
            <div class="form__usuario">
                <label for="">Apellidos</label>
                <input type="text" class="usuario" name="apellidos">
            </div>
            <div class="form__usuario">
                <label for="">Fecha Nacimiento</label>
                <input type="text" class="usuario" name="fecha">
            </div>
            <div class="form__usuario">
                <label for="">Genero</label>
                <input type="text" class="usuario" name="genero">
            </div>
            <div class="form__usuario">
                <label for="">Nacionalidad</label>
                <input type="text" class="usuario" name="nacionalidad">
            </div>
            <div class="form__usuario">
                <label for="">E-mail</label>
                <input type="text" class="usuario" name="correo">
            </div>
            <div class="form__usuario">
                <label for="">Usuario</label>
                <input type="text" class="usuario" name="usuario">
            </div>
            <div class="form__clave">
                <label for="">Contraseña</label>
                <input id="clave" type="password" class="clave" name="clave">
            </div>
            <div class="form__boton">
                <input name="btnregistrar" class="boton" type="Submit" value="Registrar">
            </div>
        </form>
    </div>
</body>

</html>