<?php

if  (!empty($_POST["btnregistrar"])){
    if (empty($_POST["nombres"]) or empty($_POST["apellidos"]) or empty($_POST["fecha"]) 
    or empty($_POST["genero"]) or empty($_POST["nacionalidad"]) or empty($_POST["correo"]) 
    or empty($_POST["usuario"]) or empty($_POST["clave"])) {
        echo '<div style="color: red;"> No puede haber un campo vacío </div>';
    } else {
        $nombres =$_POST["nombres"];
        $apellidos =$_POST["apellidos"];
        $correo =$_POST["correo"];
        $fecha =$_POST["fecha"];
        $genero =$_POST["genero"];
        $nacionalidad =$_POST["nacionalidad"];
        $usuario=$_POST["usuario"];
        $clave=$_POST["clave"];
        $sql=$conexion->query("insert into usuarios(nombreUsuario, apellidosUsuario, fechaNac, genero, nacionalidad, usuario, clave, correo) 
        values ('$nombres', '$apellidos', '$fecha', '$genero' , '$nacionalidad' ,'$usuario', '$clave' , '$correo' )");
        if ($sql==1) {
            header("location:./index.php");
        } else {
            echo '<div style="color: red;"> Verifica bien los datos </div>';
        }
        
    }
    
}

?>


 
