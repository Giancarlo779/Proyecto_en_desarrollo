<?php
    require_once "connecta.php";

    /*
    Incluidas las consultas destructivas, es decir Insert, update, delete.
    */

    function registrarUsuario($nombre,$apellido,$telefono,$correo,$password){
        
        $mysql = conexionMysql();
        $sqlExiste = "SELECT * FROM usuarios WHERE correo = '$correo'";
        $resExiste = mysqli_query($mysql,$sqlExiste);

        if (mysqli_num_rows($resExiste) > 0){
            $respuesta = "<span class='msnError'> Usuario existente</span>";

       }else{
            //idusuarios 	nombre 	apellido 	telefono 	correo 	password 
            $sql = "INSERT INTO usuarios() VALUES(null,'$nombre','$apellidos','$telefono','$correo','$password')";
            $resultado = mysqli_query($mysql, $sql);
            
            if($resultado){
                $respuesta = "<span class='msnExito'> Usuario registrado correctamente</span>";
           
            }else{
               $respuesta = "<span class='msnError'> No es posible registrar el usuario</span>";
            
        }
    }
        return printf($respuesta);
   }
?>