<?php
    require_once "connecta.php";


    /*
    Incluidas las consultas no destructivas, es decir SELECT

    */

    function inicioSesion($user,$pass){
        $mysql = conexionMysql();
        $sql = "SELECT * FROM usuarios WHERE correo = '$user' AND password 
        ='$pass'";
        $resExiste = mysqli_query($mysql,$sql);
        $fila = mysqli_fetch_array($resExiste);
        if (mysqli_num_rows($resExiste) > 0) {
            session_start();
            $_SESSION["iniciado"] = true;
            $_SESSION["idUser"] = $fila[0];
            $_SESSION["nombreUsuario"] = $fila[1] . " "[2];
            $respuesta = 1;
            //$_SESSION["idUser"] =
       // } else {
            $respuesta = "<span class='msnError'> Datos erroneos </span>";
        }
        return printf($respuesta);
    }

?>