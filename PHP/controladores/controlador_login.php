<?php
session_start();
if  (!empty($_POST["btningresar"])){
    if (!empty($_POST["usuario"]) and !empty($_POST["clave"])) {
        $usuario=$_POST["usuario"];
        $clave=$_POST["clave"];
        $sql=$conexion->query(" select * from usuarios where usuario='$usuario' and clave='$clave'; ");
        if ($datos=$sql->fetch_object()) {
            $_SESSION["id"]=$datos->idusuarios;
            $_SESSION["nombreUsuario"]=$datos->nombreUsuario;
            $_SESSION["apellidosUsuarios"]=$datos->apellidosUsuario;
            header("location:inicio.php");
        } else {
            echo '<div style="color: red;"> Usuario o contraseña invalido. </div>';
        }
        
    } else{
        echo '<div style="color: red;"> Los campos estan vacios </div>';
    }
    
}

if(!isset($_SESSION['clientmacs'])) { 
    $_SESSION['clientmacs'] = 'something';
    header('Location: index.php');
}


?>
